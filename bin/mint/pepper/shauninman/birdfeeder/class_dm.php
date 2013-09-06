<?php
/******************************************************************************
 Pepper
 
 Developer		: Shaun Inman
 Plug-in Name	: Bird Feeder Pepper
 
 http://www.shauninman.com/

 ******************************************************************************/
if (!defined('MINT')) { header('Location:/'); }; // Prevent viewing this file
$installPepper = "SI_BirdFeeder";

class SI_BirdFeeder extends Pepper
{
	var $version	= 203;
	var $info		= array
	(
		'pepperName'	=> 'Bird Feeder',
		'pepperUrl'		=> 'http://www.haveamint.com/',
		'pepperDesc'	=> 'Your RSS and Atom feeds attract all kinds of colorful wildlife, Bird Feeder is a window onto that activity. It highlights subscription trends across multiple Feeds and clicks on individual Seeds. What\'s a seed? That\'s bird-ese for an article or link within a feed. Poo-tee-weet?',
		'developerName'	=> 'Shaun Inman',
		'developerUrl'	=> 'http://www.shauninman.com/'
	);
	var $panes		= array
	(
		'Feeds'	=> array
		(
			'Overview',
			'Past Week',
			'Past Month',
			'Past Year'
		),
		'Seeds' => array
		(
			'Most Popular',
			'Most Recent'
		)
	);
	var $oddPanes	= array
	(
		'Feeds'
	);
	var $data		= array
	(
		// this array should be indexed by feed name
		// allowing individual feeds to be monitored separately\
		/*
			Each index will contain a three index array
			
			array(),	// Every unique reader identified, indexed by day (31 indexes)
			array(),	// Weekly averages of unique readers, indexed by week (10 indexes)
			array()		// Monthly averages of unique readers (24 indexes)
		*/
		'readership'	=> array()
	);
	var $prefs		= array
	(
		'feederDir'					=> '/feeder',
		'aggregateFeeds'			=> false,
		'ignoreUnspecifiedFeeds' 	=> true
	);
	var $manifest = array
	(
		'readership' => array
		(
			'id'					=> "INT(11) unsigned NOT NULL auto_increment",
			'reader' 				=> "VARCHAR(255) NOT NULL",
			'reader_version' 		=> "VARCHAR(15) NOT NULL",
			'reader_checksum' 		=> "INT(10) NOT NULL",
			'feed_checksum' 		=> "INT(10) NOT NULL",
			'reader_count' 			=> "INT(10) unsigned NOT NULL",
			'dt'					=> "INT(10) unsigned NOT NULL default '0'"
		),
		'seeds'	=> array
		(
			'id'				=> "INT(11) unsigned NOT NULL auto_increment",
			'seed' 				=> "VARCHAR(255) NOT NULL",
			'seed_title' 		=> "VARCHAR(255) NOT NULL",
			'seed_checksum' 	=> "INT(10) NOT NULL",
			'feed' 				=> "VARCHAR(255) NOT NULL",
			'feed_checksum' 	=> "INT(10) NOT NULL",
			'dt'				=> "INT(10) unsigned NOT NULL default '0'"
		)
	);
	var $moderate = array('seeds'); // the readership table moderates itself
	
	var $aggregateReadership	= array(); // mirrors the readership data array
	var $aggregateFeeds			= array(); // a key for aggregated feeds
	
	/**************************************************************************
	 isCompatible()
	 **************************************************************************/
	function isCompatible()
	{
		if ($this->Mint->version < 200)
		{
			$compatible = array
			(
				'isCompatible'	=> false,
				'explanation'	=> '<p>This Pepper requires Mint 2, a paid upgrade, now available at <a href="http://www.haveamint.com/">haveamint.com</a>.</p>'
			);
		}
		else
		{
			$compatible = array
			(
				'isCompatible'	=> true,
			);
		}
		return $compatible;
	}
	
	/**************************************************************************
	 update()
	 **************************************************************************/
	function update()
	{
		if (!isset($this->prefs['feederDir']))
		{
			$this->prefs['feederDir'] = '/feeder';
		}
		
		if (!isset($this->prefs['aggregateFeeds']))
		{
			$this->prefs['aggregateFeeds'] = false;
		}
	}
	
	/**************************************************************************
	 onUninstall()
	 **************************************************************************/
	function onUninstall()
	{
		if (isset($this->Mint->cfg['pepperLookUp']['SI_UserAgent']))
		{
			$pepperId = $this->Mint->cfg['pepperLookUp']['SI_UserAgent'];
			$this->Mint->pepper[$pepperId]->prefs['showReaders'] = false;
			$this->Mint->pepper[$pepperId]->toggleReadersTab();
		}
	}
	
	/**************************************************************************
	 onRecordFeed()
	 **************************************************************************/
	function onRecordFeed()
	{
		if ($this->prefs['ignoreUnspecifiedFeeds'] && !defined('BIRDFEED'))
		{
			return;
		}
		
		// Server variables are a moving target, do our best to determine the requested url in its absence
		$feed_host = (!empty($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST'] != $_SERVER['SERVER_NAME']) ? $_SERVER['HTTP_HOST'] : $_SERVER['SERVER_NAME'];
		if (isset($_SERVER['REQUEST_URI']))
		{
			$feed_path	= $_SERVER['REQUEST_URI'];
		}
		else
		{
			$feed_path	= (isset($_SERVER['PHP_SELF']) && !empty($_SERVER['PHP_SELF'])) ? $_SERVER['PHP_SELF'] : ((isset($_SERVER['SCRIPT_NAME']) && !empty($_SERVER['SCRIPT_NAME'])) ? $_SERVER['SCRIPT_NAME'] : $_SERVER['SCRIPT_URL']);
			if (isset($_SERVER['argv']))
			{
				$feed_path .= '?'. $_SERVER['argv'][0];
			}
			else if (isset($_SERVER['QUERY_STRING']))
			{
				$feed_path .= '?'. $_SERVER['QUERY_STRING'];
			}
		}
		$feed_url = $feed_host.$feed_path;
		
		$today					= $this->Mint->getOffsetTime('today');
		$yesterday				= $today - (24 * 60 * 60);
		$week					= $this->Mint->getOffsetTime('week');
		$month					= $this->Mint->getOffsetTime('month');
		$readership				= $this->data['readership'];
		
		$http_ua				= (isset($_SERVER['HTTP_USER_AGENT'])) ? $_SERVER['HTTP_USER_AGENT'] : '';
		
		$feed					= (defined('BIRDFEED')) ? BIRDFEED : 'Unspecified';
		$feed_checksum			= crc32($feed);
		$ip						= $this->Mint->getIPLong();
		$ua						= $this->parseUserAgent($http_ua);
		$reader					= $ua['reader'];
		$reader_version			= $ua['version'];
		$reader_count			= $this->getSubscriberCount($http_ua);
		$reader_checksum		= crc32($ip.$reader.$feed_url);
		
		// If this is the first hit of the day
		if (!isset($readership[$feed][0][$today]))
		{
			// delete all readers from before today
			$this->query("DELETE FROM `{$this->db['tblPrefix']}readership` WHERE `dt` < $yesterday");
			
			// and establish a default
			$readership[$feed][0][$today] = 0;
		}
		
		// SELECT should be feed-specific
		$query	= "SELECT `id`, `reader_count`
					FROM `{$this->Mint->db['tblPrefix']}readership` 
					WHERE `reader_checksum` = '{$reader_checksum}' AND `feed_checksum` = '{$feed_checksum}'
					LIMIT 0,1";
		
		if ($result = $this->query($query))
		{
			if (mysql_num_rows($result))
			{
				if ($existingReader = mysql_fetch_assoc($result))
				{
					if ($existingReader['reader_count'] < $reader_count)
					{
						$this->query("UPDATE `{$this->db['tblPrefix']}readership` 
									SET `reader_count` = '{$reader_count}', 
										`dt` = '".time()."' WHERE `id`={$existingReader['id']}"); 
						
						// add the difference to the current days total.
						$readership[$feed][0][$today] += $reader_count - $existingReader['reader_count'];
					}
				}
			}
			else
			{
				$this->query("INSERT INTO `{$this->db['tblPrefix']}readership` 
							(`reader`, `reader_version`, `reader_checksum`, `feed_checksum`, `reader_count`, `dt`) VALUES 
							('$reader', '$reader_version', '$reader_checksum', '$feed_checksum', '$reader_count', ".time().")");
				
				// add to current days total
				$readership[$feed][0][$today] += $reader_count;
			}
		}
		
		// Do some averaging for this week and current month
		$weekDays	= 0;
		$weekTotal	= 0;
		$monthDays	= 0;
		$monthTotal	= 0;
		foreach($readership[$feed][0] as $timestamp => $count)
		{
			if ($timestamp >= $week)
			{
				$weekDays++;
				$weekTotal += $count;
			}
			
			if ($timestamp >= $month)
			{
				$monthDays++;
				$monthTotal += $count;
			}
		}
		
		// dividing by zero is bad
		if ($weekDays)
		{
			$readership[$feed][1][$week] = floor($weekTotal / $weekDays);
		}
		if ($monthDays)
		{
			$readership[$feed][2][$month] = floor($monthTotal / $monthDays);
		}
		
		// Clean up older data
		$readership[$feed][0] = $this->array_prune($readership[$feed][0], 31);
		$readership[$feed][1] = $this->array_prune($readership[$feed][1], 10);
		$readership[$feed][2] = $this->array_prune($readership[$feed][2], 24);
		
		$this->data['readership'] = $readership;
		$this->Mint->_save(); // Do as I say, NOT as I do :P
	}
	
	/**************************************************************************
	 onRecordClick()
	 **************************************************************************/
	function onRecordClick()
	{
		// someone is playing with the url
		if (!isset($_GET['feed'], $_GET['seed'], $_GET['seed_title']))
		{
			header("Location:/");
			exit();
		}
		
		$feed			= $_GET['feed'];
		$seed 			= $this->escapeSQL($_GET['seed']);
 		$seed_title		= $this->escapeSQL(str_replace(array('<![CDATA[', ']]>'), '', $_GET['seed_title']));
		$seed_checksum	= crc32($seed);
		$feed_checksum	= crc32($feed);
		$feed			= $this->escapeSQL($feed);
		
		$this->query("INSERT INTO `{$this->db['tblPrefix']}seeds` 
					(`seed`, `seed_title`, `seed_checksum`, `feed`, `feed_checksum`, `dt`) VALUES 
					('$seed', '$seed_title', '$seed_checksum', '$feed', '$feed_checksum', ".time().")");
		
		header("Location:{$_GET['seed']}");
		exit();
	}
	
	/**************************************************************************
	 onDisplay()
	 **************************************************************************/
	function onDisplay($pane, $tab, $column = '', $sort = '')
	{
		$html = '';
		switch($pane) 
		{
		/* Feeds **************************************************************/
			case 'Feeds': 
				switch($tab) 
				{
					case 'Overview':
						$html .= $this->getHTML_Feeds();
					break;
					
					case 'Past Week':
						$html .= $this->getHTML_FeedsWeek();
					break;
					
					case 'Past Month':
						$html .= $this->getHTML_FeedsMonth();
					break;
					
					case 'Past Year':
						$html .= $this->getHTML_FeedsYear();
					break;
				}
			break;
		/* Seeds **************************************************************/
			case 'Seeds':
				switch($tab) 
				{
					case 'Most Popular':
						$html .= $this->getHTML_SeedsPopular();
					break;
					
					case 'Most Recent':
						$html .= $this->getHTML_SeedsRecent();
					break;
				}
			break;
		}
		return $html;
	}
	
	/**************************************************************************
	 onDisplayPreferences()
	 **************************************************************************/
	function onDisplayPreferences()
	{
		$preferences = array();
		
		$docRoot = $this->Mint->detectDocumentRoot();
		
		$preferences['The Feeder'] = <<<HTML
<script type="text/javascript" language="JavaScript">
// <![CDATA[
SI.BirdFeeder = 
{
	renameListener : function(feed, feed_checksum, e)
	{
		e = (e)?e:((window.event)?event:null);
		if (e)
		{
			if (e.keyCode == 13 || e.keyCode == 3)
			{
				SI.BirdFeeder.renameFeed(feed, feed_checksum);
				return false;
			}
		};
		return true;
	},
	renameFeed	: function(feed, feed_checksum)
	{
		var renamed_feed	= document.getElementById('feed-' + feed_checksum).value;
		feed				= (window.encodeURIComponent) ? window.encodeURIComponent(feed): window.escape(feed);
		renamed_feed 		= (window.encodeURIComponent) ? window.encodeURIComponent(renamed_feed): window.escape(renamed_feed);
		var content			= document.getElementById('feed-list');
		var url				= '{$this->Mint->cfg['installDir']}/?MintPath=Custom&feedlistAction=rename&feed=' + feed + '&renamed_feed=' + renamed_feed;
		SI.Request.post(url, content, SI.Fade.delayedDown, 'request-feedback');
	},
	deleteFeed	: function(feed)
	{
		if (!window.confirm('Delete ' + feed + '? (This will delete all data associated with this feed in both the Feeds and Seeds panes. Once deleted this data cannot be recovered.)')) { return; }
		feed = (window.encodeURIComponent) ? window.encodeURIComponent(feed): window.escape(feed);
		var content = document.getElementById('feed-list');
		var url = '{$this->Mint->cfg['installDir']}/?MintPath=Custom&feedlistAction=delete&feed=' + feed;
		SI.Request.post(url, content, SI.Fade.delayedDown, 'request-feedback');
	},
	selectUA007Tab : function(lnk) // lnk is a link containing the tab id
	{
		var tab = document.getElementById(lnk.href.replace(/^[^#]+#/, ''));
		SI.Tabs.select(tab.lnk);
	},
	checkFeeder : function()
	{
		var feederDir	= document.getElementById('feederDir').value;
		var content		= document.getElementById('feeder-check');
		var url			= '{$this->Mint->cfg['installDir']}/?MintPath=Custom&feedlistAction=check&feederDir=' + feederDir;
		SI.Request.post(url, content);
	}
};
// ]]>
</script>
<div id="feeder-check"></div>
<table>
	<tr>
		<th scope="row">Feeder Location</th>
		<td><span><input type="text" id="feederDir" name="feederDir" value="{$this->prefs['feederDir']}" onkeyup="SI.BirdFeeder.checkFeeder();" /></span></td>
	</tr>
	<tr>
		<td></td>
		<td>Eg. <code>/feeder</code></td>
	</tr>
</table>
<script type="text/javascript" language="JavaScript">
// <![CDATA[
SI.BirdFeeder.checkFeeder();
// ]]>
</script>
HTML;
		
		$aggregateChecked = ($this->prefs['aggregateFeeds'])?' checked="checked"':'';
		$ignoreChecked = ($this->prefs['ignoreUnspecifiedFeeds'])?' checked="checked"':'';
		$preferences['Displaying Feeds'] = <<<HTML
<table>
	<tr>
		<td><label><input type="checkbox" name="aggregateFeeds" value="1"$aggregateChecked /> Group different formats of the same feed</label></td>
	</tr>
	<tr>
		<td><label><input type="checkbox" name="ignoreUnspecifiedFeeds" value="1"$ignoreChecked /> Ignore unspecified feeds (Unspecified feeds only appear when a feed is missing the <code>BIRDFEED</code> constant)</label></td>
	</tr>
</table>
HTML;
		
		$preferences['Manage Feeds']	= <<<HTML
<p>Renaming feeds in Bird Feeder is a two part process. First, update the <code>BIRDFEED</code> constant in your individual feed. Then let the Bird Feeder know the new name using the inputs below.</p>
HTML;
		$preferences['Manage Feeds']	.= '<div id="feed-list">'.$this->getHTML_feedList().'</div>';

		if (isset($this->Mint->cfg['pepperLookUp']['SI_UserAgent']))
		{
			$preferences['User Agent 007 Integration'] = <<<HTML

<table>
	<tr>
		<td>Be sure to enable reader detection in the <a href="#pepper-{$this->Mint->cfg['pepperLookUp']['SI_UserAgent']}" onclick="SI.BirdFeeder.selectUA007Tab(this); return false;">User Agent 007</a> Pepper</td>
	</tr>
</table>

HTML;
		}

		return $preferences;
	}
	
	/**************************************************************************
	 onSavePreferences()
	 **************************************************************************/
	function onSavePreferences() 
	{	
		$aggregateFeeds = (isset($_POST['aggregateFeeds']))?$_POST['aggregateFeeds']:0;
		
		if ($this->prefs['aggregateFeeds'] != $aggregateFeeds)
		{
			foreach($_COOKIE as $cookie => $value)
			{
				if (preg_match('/^MintPepper'.$this->pepperId.'[^0-9]/', $cookie))
				{
					$this->Mint->bakeCookie($cookie, '');
					unset($_COOKIE[$cookie]);
				}
			}
			$this->prefs['aggregateFeeds'] = $aggregateFeeds;
		}
		
		$this->prefs['ignoreUnspecifiedFeeds'] = (isset($_POST['ignoreUnspecifiedFeeds']))?$_POST['ignoreUnspecifiedFeeds']:0;
		
		// If the offset is changing then we need to update the visits array
		if (isset($_POST['offset']) && $_POST['offset'] != $this->Mint->cfg['offset'])
		{
			$offset_difference = ($_POST['offset'] - $this->Mint->cfg['offset']) * 60 * 60;
			
			// Get stored readership data
			$readership	= $this->data['readership'];
			foreach($readership as $feed => $ignore)
			{
				// Update day indexes
				if (isset($readership[$feed][0]))
				{
					$days = $readership[$feed][0];
					foreach ($days as $date => $count)
					{
						$days[($date - $offset_difference)] = $count;
						unset($days[$date]);
					}
					$readership[$feed][0] = $days;
				}

				// Update week indexes
				if (isset($readership[$feed][1]))
				{
					$weeks = $readership[$feed][1];
					foreach ($weeks as $date => $count)
					{
						$weeks[($date - $offset_difference)] = $count;
						unset($weeks[$date]);
					}
					$readership[$feed][1] = $weeks;
				}

				// Update month indexes
				if (isset($readership[$feed][2]))
				{
					$months = $readership[$feed][2];
					foreach ($months as $date => $count)
					{
						$months[($date - $offset_difference)] = $count;
						unset($months[$date]);
					}
					$readership[$feed][2] = $months;
				}
			}
			
			// Store the updated readership data
			$this->data['readership'] = $readership;
			/***********************************************************************/
		}
	}
	
	/**************************************************************************
	 onCustom()
	 **************************************************************************/
	function onCustom()
	{
		$html = '';
		if
		(
			isset($_POST['feedlistAction']) && 
			(
				$_POST['feedlistAction'] == 'rename' || 
				$_POST['feedlistAction'] == 'delete'
			)
		)
		{
			$html			= '';
			$readership 	= $this->data['readership'];
			$feed			= $_POST['feed'];
			$feed_checksum	= crc32($feed);
			
			// $tabClean = str_replace(' ', '', $tab);
			// $_COOKIE["MintPepper{$this->pepperId}{$tabClean}Filter"];
			$feeds_tabs = array
			(
				'Overview',
				'Past Week',
				'Past Month',
				'Past Year'
			);
			
			$seeds_tabs = array
			(
				'Most Popular',
				'Most Recent'
			);
			
			switch($_POST['feedlistAction'])
			{
				case 'rename':
					$renamed_feed	= $_POST['renamed_feed'];
					$new_checksum	= crc32($renamed_feed);
					
					if ($feed != $renamed_feed && isset($readership[$feed]))
					{
						// swap names
						$readership[$renamed_feed] = $readership[$feed];;
						unset($readership[$feed]);
						
						
						// update checksum in readership and seeds
						$this->query("UPDATE `{$this->db['tblPrefix']}readership` SET `feed_checksum` = '{$new_checksum}'  WHERE `feed_checksum`='{$feed_checksum}'");
						$this->query("UPDATE `{$this->db['tblPrefix']}seeds` SET `feed_checksum` = '{$new_checksum}'  WHERE `feed_checksum`='{$feed_checksum}'");
						
						// need to reset cookie if name change affects it
						foreach($feeds_tabs as $tab)
						{
							$tabClean = str_replace(' ', '', $tab);
							$cookie = "MintPepper{$this->pepperId}{$tabClean}Filter";
							if (isset($_COOKIE[$cookie]) && $_COOKIE[$cookie] == $feed)
							{
								//echo $_COOKIE[$cookie].'<br />';
								$this->Mint->bakeCookie($cookie, $renamed_feed, (time()+(60 * 60 * 24 * 365)));
							}
						}
						foreach($seeds_tabs as $tab)
						{
							$tabClean = str_replace(' ', '', $tab);
							$cookie = "MintPepper{$this->pepperId}{$tabClean}Filter";
							if (isset($_COOKIE[$cookie]) && $_COOKIE[$cookie] == $feed)
							{
								//echo $_COOKIE[$cookie].'<br />';
								$this->Mint->bakeCookie($cookie, $renamed_feed, (time()+(60 * 60 * 24 * 365)));
							}
						}
						
						$html .= "<div id=\"request-feedback\" class=\"request-feedback\">$feed successfully renamed to $renamed_feed.</div>";
					}
				break;
					
				case 'delete':
					if (isset($readership[$feed]))
					{
						unset($readership[$feed]);
						$this->query("DELETE FROM `{$this->db['tblPrefix']}readership` WHERE `feed_checksum`='{$feed_checksum}'");
						$this->query("DELETE FROM `{$this->db['tblPrefix']}seeds` WHERE `feed_checksum`='{$feed_checksum}'");
						
						foreach($_COOKIE as $cookie => $value)
						{
							if (preg_match('/^MintPepper'.$this->pepperId.'[^0-9]/', $cookie))
							{
								$this->Mint->bakeCookie($cookie, '');
								unset($_COOKIE[$cookie]);
							}
						}
						
						$html .= "<div id=\"request-feedback\" class=\"request-feedback\">$feed data had been deleted.</div>";
					}
				break;
			}
			
			$this->data['readership'] = $readership;
			
			$html .= $this->getHTML_feedList();
		}
		else if (isset($_POST['feedlistAction']) && $_POST['feedlistAction'] == 'check')
		{
			$html .= ' ';
			$docRoot = $this->Mint->detectDocumentRoot();
			
			if (isset($_POST['feederDir']) && $docRoot)
			{
				if (!file_exists("{$docRoot}{$_POST['feederDir']}/index.php"))
				{
					$html .= "<p>Cannot locate the Feeder. Please refer to the included <code><a target=\"_blank\" href=\"pepper/shauninman/birdfeeder/README.txt\">README.txt</a></code> for complete installation instructions.</p>";
				}
			}
		}
		
		echo $html;
	}
	
	/**************************************************************************
	 getHTML_feedList()
	 **************************************************************************/
	function getHTML_feedList()
	{
		$readership = $this->data['readership'];
		ksort($readership);
		reset($readership);
		
		$tableData['table'] = array('id'=>'','class'=>'');
		
		if (!empty($readership))
		{
			foreach($readership as $feed => $ignore)
			{
				$tableData['tbody'][] = array
				(
					'<span><input type="text" id="feed-'.crc32($feed).'" value="'.$feed.'" onkeypress="return SI.BirdFeeder.renameListener(\''.$feed.'\', \''.crc32($feed).'\', event);" /></span>',
					'<a href="#restore" onclick="SI.BirdFeeder.renameFeed(\''.$feed.'\', \''.crc32($feed).'\'); return false;"><img src="pepper/shauninman/birdfeeder/images/btn-rename-mini.png" width="51" height="17" alt="Rename" /></a>',
					'<a href="#delete" onclick="SI.BirdFeeder.deleteFeed(\''.$feed.'\'); return false;"><img src="pepper/shauninman/birdfeeder/images/btn-delete-mini.png" width="51" height="17" alt="Delete" /></a>'
				);
			}
		}
		else
		{
			$tableData['tbody'][] = array('Mint has not detected any feeds yet.');
		}
		
		return $this->Mint->generateTable($tableData);
	}
	
	/**************************************************************************
	 getHTML_Feeds()
	 **************************************************************************/
	function getHTML_Feeds()
	{
		$html = '';
		
		$html .= $this->generateFeedFilters(array('Overview', 'Past Week', 'Past Month', 'Past Year'));
		
		$readership	= $this->aggregateReadership;
		
		

		/* Past Week **********************************************************/
		$tableData['table'] = array('id'=>'','class'=>'inline-foot striped');
		$tableData['thead'] = array
		(
			// display name, CSS class(es) for each column
			array('value'=>'Past Week','class'=>'focus'),
			array('value'=>'Subscribers','class'=>'')
		);
		$day = $this->Mint->getOffsetTime('today');
		
		// Past 7 days
		for ($i = 0; $i < 7; $i++) 
		{
			$j = $day - ($i * 60 * 60 * 24);
			if (isset($readership[$this->filter][0][$j]))
			{
				$count = $readership[$this->filter][0][$j];
			}
			else
			{
				$count = '-';
			}
			
			$tableData['tbody'][] = array
			(
				$this->Mint->formatDateRelative($j, "day"),
				$count
			);
		}
		$weekHTML = $this->Mint->generateTable($tableData);
		unset($tableData);
		
		
		/* Past Month *********************************************************/
		$tableData['table'] = array('id'=>'','class'=>'inline inline-foot striped');
		$tableData['thead'] = array
		(
			// display name, CSS class(es) for each column
			array('value'=>'Past Month','class'=>'focus'),
			array('value'=>'Avg Daily Scribs','class'=>'')
		);
		$week = $this->Mint->getOffsetTime('week');
		
		// Past 5 weeks
		for ($i = 0; $i < 5; $i++)
		{
			$j = $week - ($i * 60 * 60 * 24 * 7);
			if (isset($readership[$this->filter][1][$j]))
			{
				$count = $readership[$this->filter][1][$j];
			}
			else
			{
				$count = '-';
			}
			
			$tableData['tbody'][] = array
			(
				$this->Mint->formatDateRelative($j,"week",$i),
				$count
			);
		}
		$monthHTML = $this->Mint->generateTable($tableData);
		unset($tableData);
		
		
		/* Past Year **********************************************************/
		$tableData['table'] = array('id'=>'','class'=>'inline year striped');
		$tableData['thead'] = array
		(
			// display name, CSS class(es) for each column
			array('value'=>'Past Year','class'=>'focus'),
			array('value'=>'Avg Daily Scribs','class'=>'')
		);
		$month = $this->Mint->getOffsetTime('month');
		// Past 12 months
		for ($i = 0; $i < 12; $i++)
		{
			if ($i == 0)
			{
				$j = $month;
			}
			else
			{
				$days 		= $this->Mint->offsetDate('t', $this->Mint->offsetMakeGMT(0, 0, 0, $this->Mint->offsetDate('n', $month)-1, 1, $this->Mint->offsetDate('Y', $month))); // days in the month
				$j 			= $month - ($days * 24 * 3600);
			}
			
			$month = $j;
			if (isset($readership[$this->filter][2][$j]))
			{
				$count = $readership[$this->filter][2][$j];
			}
			else
			{
				$count = '-';
			}
			
			$tableData['tbody'][] = array
			(
				$this->Mint->formatDateRelative($j, 'month', $i),
				$count
			);
		}
		$yearHTML = $this->Mint->generateTable($tableData);
		unset($tableData);
		
		/**/
		$html	.= '<table cellspacing="0" class="visits">';
		$html	.= "\r\t<tr>\r";
		$html	.= "\t\t<td class=\"left\">\r";
		$html	.= $weekHTML.$monthHTML;
		$html	.= "\t\t</td>";
		$html	.= "\t\t<td class=\"right\">\r";
		$html	.= $yearHTML;
		$html	.= "\t\t</td>";
		$html	.= "\r\t</tr>\r";
		$html	.= "</table>\r";
		return $html;
	}
	
	/**************************************************************************
	 getHTML_FeedsWeek()
	 **************************************************************************/
	function getHTML_FeedsWeek() 
	{
		$html = '';
		$html .= $this->generateFeedFilters(array('Past Week', 'Overview', 'Past Month', 'Past Year'));
		
		$graphData	= array
		(
			'titles' => array
			(
				'background' => 'Average Daily Subscribers'
			),
			'key' => array
			(
				'background' => 'Scribs'
			)
		);
		$high 	= 0;
		$day	= $this->Mint->getOffsetTime('today');
		$days	= (isset($this->aggregateReadership[$this->filter][0])) ? $this->aggregateReadership[$this->filter][0] : array();
		
		// Past 7 days
		for ($i = 0; $i < 7; $i++) 
		{
			$timestamp = $day - ($i * 60 * 60 * 24);
			$count = (isset($days[$timestamp])) ? $days[$timestamp] : 0;
			$high = ($count > $high) ? $count : $high;

			$dayOfWeek = $this->Mint->offsetDate('w', $timestamp);
			$dayLabel = substr($this->Mint->offsetDate('D', $timestamp), 0, 2);
			
			$graphData['bars'][] = array
			(
				$count,
				0,
				($dayOfWeek == 0) ? '' : (($dayOfWeek == 6) ? 'Weekend' : $dayLabel),
				$this->Mint->formatDateRelative($timestamp, "day"),
				($dayOfWeek == 0 || $dayOfWeek == 6) ? 1 : 0
			);
		}
		
		$graphData['bars'] = array_reverse($graphData['bars']);
		$html .= $this->getHTML_Graph($high, $graphData);
		return $html;
	}
	
	/**************************************************************************
	 getHTML_FeedsMonth()
	 **************************************************************************/
	function getHTML_FeedsMonth() 
	{
		$html = '';
		$html .= $this->generateFeedFilters(array('Past Month', 'Past Week', 'Overview', 'Past Year'));
		
		$graphData	= array
		(
			'titles' => array
			(
				'background' => 'Average Daily Subscribers'
			),
			'key' => array
			(
				'background' => 'Scribs'
			)
		);
		$high 	= 0;
		$week 	= $this->Mint->getOffsetTime('week');
		$weeks	= (isset($this->aggregateReadership[$this->filter][1])) ? $this->aggregateReadership[$this->filter][1] : array();
		
		// Past 5 weeks
		for ($i = 0; $i < 5; $i++)
		{
			$timestamp = $week - ($i * 60 * 60 * 24 * 7);
			$count = (isset($weeks[$timestamp])) ? $weeks[$timestamp] : 0;
			$high = ($count > $high) ? $count : $high;
			
			$graphData['bars'][] = array
			(
				$count,
				0,
				$this->Mint->formatDateRelative($timestamp, "week", $i),
				$this->Mint->offsetDate('D, M j', $timestamp),
				($i == 0) ? 1 : 0
			);
		}
		
		$graphData['bars'] = array_reverse($graphData['bars']);
		$html .= $this->getHTML_Graph($high, $graphData);
		return $html;
	}

	/**************************************************************************
	 getHTML_FeedsYear()
	 **************************************************************************/
	function getHTML_FeedsYear() 
	{
		$html = '';
		$html .= $this->generateFeedFilters(array('Past Year', 'Past Week', 'Overview', 'Past Month'));
		
		$graphData	= array
		(
			'titles' => array
			(
				'background' => 'Average Daily Subscribers'
			),
			'key' => array
			(
				'background' => 'Scribs'
			)
		);
		$high 	= 0;
		$month = $this->Mint->getOffsetTime('month');
		$months	= (isset($this->aggregateReadership[$this->filter][2])) ? $this->aggregateReadership[$this->filter][2] : array();
		
		// Past 12 months
		for ($i = 0; $i < 12; $i++)
		{
			if ($i == 0)
			{
				$timestamp = $month;
			}
			else
			{
				$days 		= $this->Mint->offsetDate('t', $this->Mint->offsetMakeGMT(0, 0, 0, $this->Mint->offsetDate('n', $month)-1, 1, $this->Mint->offsetDate('Y', $month))); // days in the month
				$timestamp 	= $month - ($days * 24 * 3600);
			}
			
			$month = $timestamp;
			$count = (isset($months[$timestamp])) ? $months[$timestamp] : 0;
			$high = ($count > $high) ? $count : $high;
			
			$graphData['bars'][] = array
			(
				$count,
				0,
				($i == 0) ? 'This Month' : $this->Mint->offsetDate(' M', $timestamp),
				$this->Mint->offsetDate('F', $timestamp),
				($i == 0) ? 1 : 0
			);
		}
		
		$graphData['bars'] = array_reverse($graphData['bars']);
		$html .= $this->getHTML_Graph($high, $graphData);
		return $html;
	}
	
	/**************************************************************************
	 getHTML_SeedsPopular()
	 **************************************************************************/
	function getHTML_SeedsPopular() 
	{
		$html = '';
		
		$html .= $this->generateFeedFilters(array('Most Popular', 'Most Recent'), true);
		$filter = '';
		if ($this->filter)
		{
			if ($this->prefs['aggregateFeeds'] && isset($this->aggregateFeeds[$this->filter]))
			{
				$feed_queries = array();
				foreach($this->aggregateFeeds[$this->filter] as $feed)
				{
					$feed_queries[] = "`feed_checksum`='".crc32($feed)."'";
				}
				
				if (!empty($feed_queries))
				{
					$filter = ' WHERE '.join(' OR ', $feed_queries);
				}
			}
			else
			{
				$filter = " WHERE `feed_checksum`='".crc32($this->filter)."'";
			}
		}
	
		$tableData['table'] = array('id'=>'','class'=>'');
		$tableData['thead'] = array
		(
			// display name, CSS class(es) for each column
			array('value'=>'Clicks','class'=>'sort'),
			array('value'=>'Feed Item','class'=>'focus')
		);
		
		$query = "SELECT `seed`, `seed_title`, COUNT(`id`) as `clicks`, `dt`
					FROM `{$this->Mint->db['tblPrefix']}seeds` 
					$filter
					GROUP BY `seed_checksum` 
					ORDER BY `clicks` DESC, `dt` DESC
					LIMIT 0,{$this->Mint->cfg['preferences']['rows']}";
		
		if ($result = $this->query($query)) 
		{
			while ($r = mysql_fetch_array($result)) 
			{
				
				$seed_title = $this->Mint->abbr((!empty($r['seed_title']))?stripslashes($r['seed_title']):$r['seed']);
				$seed_html = "<a href=\"{$r['seed']}\">$seed_title</a>";

				$tableData['tbody'][] = array
				(
					$r['clicks'],
					$seed_html
				);
			}
		}
			
		$html .= $this->Mint->generateTable($tableData);
		return $html;
	}
	
	/**************************************************************************
	 getHTML_SeedsRecent()
	 **************************************************************************/
	function getHTML_SeedsRecent() 
	{
		$html = '';
		
		$html .= $this->generateFeedFilters(array('Most Recent', 'Most Popular'), true);
		$filter = '';
		if ($this->filter)
		{
			if ($this->prefs['aggregateFeeds'] && isset($this->aggregateFeeds[$this->filter]))
			{
				$feed_queries = array();
				foreach($this->aggregateFeeds[$this->filter] as $feed)
				{
					$feed_queries[] = "`feed_checksum`='".crc32($feed)."'";
				}
				
				if (!empty($feed_queries))
				{
					$filter = ' WHERE '.join(' OR ', $feed_queries);
				}
			}
			else
			{
				$filter = " WHERE `feed_checksum`='".crc32($this->filter)."'";
			}
		}
		
		$tableData['table'] = array('id'=>'','class'=>'');
		$tableData['thead'] = array
		(
			// display name, CSS class(es) for each column
			array('value'=>'Feed Item','class'=>'focus'),
			array('value'=>'When','class'=>'sort')
		);
		
		$query = "SELECT `seed`, `seed_title`, `feed`, `dt`
					FROM `{$this->Mint->db['tblPrefix']}seeds` 
					$filter 
					ORDER BY `dt` DESC 
					LIMIT 0,{$this->Mint->cfg['preferences']['rows']}";
		
		if ($result = $this->query($query)) 
		{
			while ($r = mysql_fetch_array($result)) 
			{
				$dt = $this->Mint->formatDateTimeRelative($r['dt']);
				$seed_title = $this->Mint->abbr((!empty($r['seed_title']))?stripslashes($r['seed_title']):$r['seed']);
				
				$seed_html = "<a href=\"{$r['seed']}\">$seed_title</a>";
				
				if (!$this->filter && $this->Mint->cfg['preferences']['secondary'])
				{
					$feed_title = $this->Mint->abbr($r['feed']);
					$seed_html .= "<br /><span>In $feed_title</span>";
				}
				
				$tableData['tbody'][] = array
				(
					$seed_html,
					$dt
				);
			}
		}
			
		$html .= $this->Mint->generateTable($tableData);
		return $html;
	}
	
	/**************************************************************************
	 aggregateData()
	 
	 Builds a readership like array that aggregates the scribs info from various
	 formats of the same feed. Also creates a look-up array for each feed that
	 is folded into an aggregate.
	 **************************************************************************/
	function aggregateData()
	{
		// Reset
		if (empty($this->aggregateReadership))
		{
			$readership = $this->data['readership'];		
			ksort($readership);
			reset($readership);

			foreach($readership as $feed => $circ)
			{
				$trimmedFeed = $feed;
				if ($this->prefs['aggregateFeeds'])
				{
					$trimmedFeed = preg_replace('/\s+\([^\)]+\)$/', '', $trimmedFeed);

					if (isset($this->aggregateReadership[$trimmedFeed]))
					{
						foreach ($circ as $range => $timestamps)
						{
							foreach($timestamps as $timestamp => $scribs)
							{
								$this->aggregateReadership[$trimmedFeed][$range][$timestamp] += $scribs;
							}
						}
					}
					else
					{
						$this->aggregateReadership[$trimmedFeed] = $circ;
					}
				}
				else
				{
					$this->aggregateReadership[$feed] = $circ;
				}	
				$this->aggregateFeeds[$trimmedFeed][] = $feed;
			}
		}
	}
	
	/**************************************************************************
	 generateFeedFilters()
	 
	 The first dynamic filters. Sweet.
	 **************************************************************************/
	function generateFeedFilters($tab, $showAll = false)
	{
		$html = '';
		$shareWithOtherTabs = array();
		
		if (is_array($tab))
		{
			$shareWithOtherTabs = $tab;
			unset($shareWithOtherTabs[0]);
			$tab = $tab[0];
		}
		
		$this->aggregateData();
		$readership = $this->aggregateReadership;		
		ksort($readership);
		reset($readership);
		
		$filters = array();
		if ($showAll)
		{
			$filters['Show all'] = 0;
		}
		
		foreach($readership as $feed => $circ)
		{
			$filters[$feed] = $feed;
		}
		if (!empty($filters))
		{
			$html .= $this->generateFilterList($tab, $filters, $shareWithOtherTabs);
		}
		
		return (count($readership) > 1) ? $html : '';
	}
	
	/**************************************************************************
	 getReaderFamily()
	 **************************************************************************/
	function parseUserAgent($user_agent)
	{
		$ua = array
		(
			'reader'	=> 'Unknown',
			'version'	=> 'Unknown'
		);

		if (preg_match('!(akregator|Alertbear|AlestiFeedBot|AppleSyndication|attensaonline|BlogBridge|bloglines|BonEcho|cfnetwork|endo|everyfeed-spider|FeedBlitz|feedbringer|feeddemon|Feedfetcher(?:-Google)|Feedpath|feedlounge|feedmania|feedness|feedonfeeds|Feedreader|Feedshow|feedster|firefox|FreshReader|Google Desktop|greatnews|gregarius|hanrss|Hatena RSS|ifeedyou|intraVnews|kinja|liferea|LiteFeeds|livedoor|livejournal|magpierss|Megite|Moreoverbot|MSOffice|netnewswire|netvibes|newsalloy|newsfire|newsfox|newsgator|newsgatoronline|Newshutch|NewzCrawler|Newzie|nif|Opera|Pluck|pluckfeed|Polynews|protopage|pulpfiction|Reblog|reddit|rojo|rssbandit|RSScache\.com|RssFwd|rssowl|RssReader|safari|sage|sharpreader|shrook|Syndic8|theport|thunderbird|UltraLiberalFeedParser|universalfeedparser|vienna|WDNews\.net|yahoofeed|YandexBlog|zfeeder)(?: \(|/|[^/]*/|\s*)v?([0-9.]*)!i', $user_agent, $m))
		{
			if (isset($m[1]) && !empty($m[1]))
			{
				$ua['reader']	= $m[1];
			}
			
			if (isset($m[2]) && !empty($m[2]))
			{
				$ua['version']	= $m[2];
			}
			
			if ($ua['reader'] == 'NIF')
			{
				$ua['reader'] = 'NewsIsFree';
			}
			
			if ($ua['reader'] == 'Feedfetcher-Google')
			{
				$ua['reader'] = 'Google Reader';
			}
		}
		return $ua;
	}

	/**************************************************************************
	 getSubscriberCount()
	 **************************************************************************/
	function getSubscriberCount($ua)
	{
		$count = 1;
		if (preg_match('!(\d+)?[ :]?(?:subscriber|reader|user|suscriptore)(?:s|\(s\))?[ :]?(\d+)?!i', $ua, $m))
		{	
			if (!empty($m[1]))
			{
				$count = $m[1];
			}
			else if (isset($m[2]))
			{
				$count = $m[2];
			}
		}
		return $count;
	}
	
	/**************************************************************************
	 seed()
	
	 Echos a click-tracking link for the provided feed item.
	 **************************************************************************/
	function seed($title = '', $link = '', $return = false)
	{
		if (defined('BIRDFEED'))
		{
			$feeder			= "http://{$this->Mint->cfg['installDomain']}{$this->prefs['feederDir']}/";
			$feed_enc		= urlencode(BIRDFEED);
			$title_enc		= urlencode($title);
			$link_enc		= urlencode($link);
			$seed			= "{$feeder}?FeederAction=clicked&amp;feed={$feed_enc}&amp;seed={$link_enc}&amp;seed_title={$title_enc}";
		}
		else
		{
			$seed = $link;
		}
		
		if ($return)
		{
			return $seed;
		}
		else
		{
			echo $seed;
		}
	}
	
	/**************************************************************************
	 array_prune()
	 
	 Removes earlier indexes until the array is the specified length. Acts like
	 array_shift() if no length is specified but preserves integer indexes.
	
	 Taken straight from Default Pepper.
	 **************************************************************************/
	function array_prune($array, $length = -1)
	{
		// exit ASAP if pruning is unnecessary
		if ($length != -1 && count($array) <= $length)
		{
			return $array;
		}
		
		// No length specified, default to array_shift behavior
		if ($length==-1) 
		{
			$length = count($array)-1;
		}
		
		// Order ascending
		ksort($array);
		reset($array);
		
		// Go get 'em tiger
		$n = count($array)-$length;
		foreach($array as $key=>$val) 
		{
			if ($n>0) 
			{ 
				unset($array[$key]); 
				$n--;
			}
			else 
			{
				break;
			}
		}
		return $array;
	}
}