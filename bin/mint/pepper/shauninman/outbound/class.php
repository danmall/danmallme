<?php
/******************************************************************************
 Pepper
 
 Developer		: Shaun Inman
 Plug-in Name	: Outbound Pepper
 
 http://www.shauninman.com/

 ******************************************************************************/
if (!defined('MINT')) { header('Location:/'); }; // Prevent viewing this file
$installPepper = "SI_Outbound";

class SI_Outbound extends Pepper
{
	var $version	= 2;
	var $info		= array
	(
		'pepperName'	=> 'Outbound',
		'pepperUrl'		=> 'http://www.haveamint.com/',
		'pepperDesc'	=> 'The Outbound Pepper tracks clicks on links to external sites.',
		'developerName'	=> 'Shaun Inman',
		'developerUrl'	=> 'http://www.shauninman.com/'
	);
	var $panes		= array
	(
		'Outbound Links'	=> array
		(
			'Most Popular',
			'Most Recent'
		)
	);
	var $manifest	= array
	(
		'outbound'	=> array
		(
			'id'		   		=> "INT(11) unsigned NOT NULL auto_increment",
			'to' 		   		=> "VARCHAR(255) NOT NULL",
			'to_checksum'  		=> "INT(10) NOT NULL",
			'to_title' 	   		=> "VARCHAR(255) NOT NULL",
			'to_full_checksum' 	=> "INT(10) NOT NULL",
			'from' 		   		=> "VARCHAR(255) NOT NULL",
			'from_checksum' 	=> "INT(10) NOT NULL",
			'from_title'   		=> "VARCHAR(255) NOT NULL",	
			'session_checksum' 	=> "INT(10) NOT NULL",		
			'dt'		   		=> "INT(10) unsigned NOT NULL default '0'"
		)
	);
	var $moderate	= array('outbound');
	var $prefs		= array
	(
		'groupBy'		=> 0
	);
	var $groupBy = array
	(
		'Link text and launching page',
		'Just the outgoing url'
	);
	
	/**************************************************************************
	 isCompatible()
	 **************************************************************************/
	function isCompatible()
	{
		if ($this->Mint->version < 214)
		{
			$compatible = array
			(
				'isCompatible'	=> false,
				'explanation'	=> '<p>This Pepper requires Mint 2.14. Mint 2, a paid upgrade from Mint 1.x, is available at <a href="http://www.haveamint.com/">haveamint.com</a>.</p>'
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
	 onInstall()
	 **************************************************************************/
	function onInstall()
	{
		if (isset($this->Mint->cfg['pepperLookUp']['SI_SecretCrush']))
		{
			$SecretCrush =& $this->Mint->getPepperByClassName('SI_SecretCrush');
			$SecretCrush->register($this->pepperId);
		}
	}
	
	/**************************************************************************
	 update()
	 **************************************************************************/
	function update()
	{
		$installed_version = $this->getInstalledVersion();
		if ($installed_version < 2)
		{
			$this->onInstall();
		}
	}
	
	/**************************************************************************
	 onUninstall()
	 **************************************************************************/
	function onUninstall()
	{
		if (isset($this->Mint->cfg['pepperLookUp']['SI_SecretCrush']))
		{
			$SecretCrush =& $this->Mint->getPepperByClassName('SI_SecretCrush');
			$SecretCrush->unregister($this->pepperId);
		}
	}
	
	/**************************************************************************
	 onSecretCrushActivity()
	 
	 Returns an array of activity for the given session, indexed by a Unix 
	 timestamp.
	 **************************************************************************/
	function onSecretCrushActivity($session_checksum)
	{
		$activity = array();
		$query = "SELECT `to`, `to_title`, `dt`
					FROM `{$this->Mint->db['tblPrefix']}outbound` 
					WHERE `session_checksum` = '{$session_checksum}'
					ORDER BY `dt` DESC ";
		if ($result = $this->query($query))
		{
			while ($r = mysql_fetch_assoc($result))
			{
				$to_title 			= $this->Mint->abbr((!empty($r['to_title']))?stripslashes($r['to_title']):$r['to'], 32);
				$activity[$r['dt']]	= "Outbound <a href=\"{$r['to']}\">$to_title</a>";
			}
		}
		
		return $activity;
	}
	
	/**************************************************************************
	 onSecretCrushMeta()
	 
	 Returns an associative array of session meta data indexed by display label.
	 ************************************************************************** /
	function onSecretCrushMeta($session_checksum)
	{
		$meta = array();
		$query = "SELECT `to`
					FROM `{$this->Mint->db['tblPrefix']}outbound` 
					WHERE `session_checksum` = '{$session_checksum}'
					ORDER BY `dt` DESC LIMIT 1";
		if ($result = $this->query($query))
		{
			while ($r = mysql_fetch_assoc($result))
			{
				$meta['Outbound']	= $this->Mint->abbr($r['to'], 32);
			}
		}
		
		return $meta;
	}
	
	/**************************************************************************
	 onJavaScript()
	 **************************************************************************/
	function onJavaScript() 
	{
		$js = MINT_ROOT.'pepper/shauninman/outbound/script.js';
		if (file_exists($js))
		{
			include($js);
		}
	}
	
	/**************************************************************************
	 onDisplay()
	 **************************************************************************/
	function onDisplay($pane, $tab, $column = '', $sort = '')
	{
		$html = '';
		
		switch($pane) 
		{	
			case 'Outbound Links': 
				switch($tab) 
				{
					case 'Most Popular':
						$html .= $this->getHTML_Popular();
					break;
					
					case 'Most Recent':
						$html .= $this->getHTML_Recent();
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
		$group_by_options		= $this->generateGroupByOptions();

		$preferences['Outbound Links']	= <<<HERE
<table class="snug">
	<tr>
		<th scope="row">Group by/display</th>
		<td><span><select name="IOgroupBy">
			{$group_by_options}
		</select></span></td>
	</tr>
</table>

HERE;

		return $preferences;
	}
	
	/**************************************************************************
	 onSavePreferences()
	 **************************************************************************/
	function onSavePreferences() 
	{
		$this->prefs['ignoreFeeds']		= (isset($_POST['IOIgnoreFeeds']))?1:0;
		$this->prefs['groupBy']	= (isset($_POST['IOgroupBy']))?$_POST['IOgroupBy']:0;
	}
	
	/**************************************************************************
	 generateIdentifyByOptions()
	 **************************************************************************/
	function generateGroupByOptions()
	{
		$html = '';
		
		foreach($this->groupBy as $i => $label)
		{
			$selected = ($this->prefs['groupBy'] == $i) ? ' selected="selected"' : '';
			$html .= '<option value="'.$i.'"'.$selected.'>'.$label.'</option>'."\r";
		}
		
		return $html;
	}
	
	/**************************************************************************
	 recordOutbound()
	 **************************************************************************/
	function recordOutbound()
	{
		if (empty($_GET)) 
 		{ 
 			return; 
 		}

		$to 			= $this->escapeSQL(preg_replace('/#.*$/', '', htmlentities($_GET['to'])));
		$raw_to_title	= $_GET['to_title'];
 		$from			= $this->escapeSQL(preg_replace('/#.*$/', '', htmlentities($_GET['from'])));
 		$from_title		= ($_GET['from_title_encoded']) ? $_GET['from_title'] : htmlentities($_GET['from_title']);
 		$from_title		= $this->escapeSQL(trim(str_replace('\n', ' ', preg_replace('/%u([\d\w]{4})/', '&#x$1;', $from_title))));
		
		// for Secret Crush integration
		$session_checksum = (isset($_COOKIE['MintCrush'])) ? $_COOKIE['MintCrush'] : 0;
		
		if (get_magic_quotes_gpc()) { $raw_to_title = stripslashes($raw_to_title); }
		$to_title = trim(strip_tags($raw_to_title));
		if (empty($to_title) && preg_match('/<img .*alt="([^"]*)"/i', $raw_to_title, $m))
		{
			if (!empty($m[1]))
			{
				$to_title = trim($m[1]);
			}
		}	
		if (get_magic_quotes_gpc()) { $to_title = addslashes($to_title); }
		$to_title = $this->escapeSQL(str_replace('\n', ' ', preg_replace('/%u([\d\w]{4})/', '&#x$1;', htmlentities($to_title))));
		
		$Default =& $this->Mint->getPepperByClassName('SI_Default');
		if ($Default->prefs['trimPrefixIndex']) 
 		{
 			$to		= $Default->trimPrefixIndex($to);
 			$from	= $Default->trimPrefixIndex($from);
 		}
		$to_checksum		= crc32($to);
		$to_full_checksum	= crc32($to.$to_title.$from);

		$save = array
		(
			'to' 		   		=> $to,
			'to_checksum'  		=> $to_checksum,
			'to_title' 	   		=> $to_title,
			'to_full_checksum'  => $to_full_checksum,
			'from' 		   		=> $from,
			'from_title'   		=> $from_title,
			'session_checksum'	=> $session_checksum,		
			'dt'		   		=> time()
		);
		
		$query = "INSERT INTO `{$this->Mint->db['tblPrefix']}outbound` (`".implode("`, `", array_keys($save))."`) VALUES ('".implode("', '", $save)."')";
		$this->query($query);
	}
	
	/**************************************************************************
	 getHTML_Popular()
	 **************************************************************************/
	function getHTML_Popular()
	{
		$html = '';
		
		$filters = array
		(
			'Show all'	=> 0,
			'Past hour'	=> 1,
			'2h'		=> 2,
			'4h'		=> 4,
			'8h'		=> 8,
			'24h'		=> 24,
			'48h'		=> 48,
			'72h'		=> 72
		);
		
		$html .= $this->generateFilterList('Most Popular', $filters);
		
		$timespan = ($this->filter) ? " WHERE dt > ".(time() - ($this->filter * 60 * 60)) : '';
		$checksum = (!$this->prefs['groupBy']) ? 'to_full_checksum' : 'to_checksum';
		
		$tableData['table'] = array('id'=>'','class'=>'');
		$tableData['thead'] = array
		(
			// display name, CSS class(es) for each column
			array('value'=>'Clicks','class'=>'sort'),
			array('value'=>'To','class'=>'focus')
		);
		
		$query = "SELECT `to`, COUNT(`{$checksum}`) AS 'total', `to_title`, `from`, `from_title`, `dt`
					FROM `{$this->Mint->db['tblPrefix']}outbound` {$timespan}
					GROUP BY `{$checksum}` 
					ORDER BY `total` DESC, `dt` DESC
					LIMIT 0,{$this->Mint->cfg['preferences']['rows']}";
		if ($result = $this->query($query)) 
		{
			while ($r = mysql_fetch_array($result)) 
			{
				$to_title = $this->Mint->abbr((!empty($r['to_title']) && !$this->prefs['groupBy'])?stripslashes($r['to_title']):$r['to']);
				$to_html = "<a href=\"{$r['to']}\">$to_title</a>";
				$from_title = $this->Mint->abbr((!empty($r['from_title']))?stripslashes($r['from_title']):$r['from']);
				$from_html	= "<a href=\"{$r['from']}\">$from_title</a>";
				
				if (!empty($from_title) && !$this->prefs['groupBy'] && $this->Mint->cfg['preferences']['secondary'])
				{
					$to_html .= "<br /><span>From {$from_html}</span>";
				}
				
				$tableData['tbody'][] = array
				(
					$r['total'],
					$to_html
				);
			}
		}
			
		$html .= $this->Mint->generateTable($tableData);
		return $html;
	}
	
	/**************************************************************************
	 getHTML_Recent()
	 **************************************************************************/
	function getHTML_Recent()
	{
		$html = '';
		
		$tableData['table'] = array('id'=>'','class'=>'');
		$tableData['thead'] = array
		(
			// display name, CSS class(es) for each column
			array('value'=>'To','class'=>'focus'),
			array('value'=>'When','class'=>'sort')
		);
		
		$query = "SELECT `to`, `to_title`, `from`, `from_title`, `dt`
					FROM `{$this->Mint->db['tblPrefix']}outbound` 
					ORDER BY `dt` DESC 
					LIMIT 0,{$this->Mint->cfg['preferences']['rows']}";
					
		if ($result = $this->query($query)) 
		{
			while ($r = mysql_fetch_array($result)) 
			{
				$dt = $this->Mint->formatDateTimeRelative($r['dt']);
				
				$to_title 	= $this->Mint->abbr((!empty($r['to_title']) && !$this->prefs['groupBy'])?stripslashes($r['to_title']):$r['to']);
				$to_html	= "<a href=\"{$r['to']}\">$to_title</a>";
				$from_title = $this->Mint->abbr((!empty($r['from_title']))?stripslashes($r['from_title']):$r['from']);
				$from_html	= "<a href=\"{$r['from']}\">$from_title</a>";
				
				if (!empty($from_title) && $this->Mint->cfg['preferences']['secondary'])
				{
					$to_html .= "<br /><span>From {$from_html}</span>";
				}
				
				$tableData['tbody'][] = array
				(
					$to_html,
					$dt
				);
			}
		}
			
		$html = $this->Mint->generateTable($tableData);
		return $html;
	}
}