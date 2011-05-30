<?php
/******************************************************************************
 Pepper
 
 Developer		: Shaun Inman
 Plug-in Name	: Secret Crush
 
 http://www.shauninman.com/

 ******************************************************************************/

$installPepper = "SI_SecretCrush";

class SI_SecretCrush extends Pepper
{
	var $version	= 210; 
	var $info		= array
	(
		'pepperName'	=> 'Secret Crush',
		'pepperUrl'		=> 'http://www.haveamint.com/',
		'pepperDesc'	=> 'Take a peek inside the cookie jar and divine the names of secret crushes tirelessly nibbling away at your bandwidth. Now includes the slightly-more-anonymous option of identifying visitors by IP address, browser (requires the User Agent 007 Pepper) or hostname.',
		'developerName'	=> 'Shaun Inman',
		'developerUrl'	=> 'http://www.shauninman.com/'
	);
	var $panes		= array
	(
		'Crushes'	=> array
		(
			'Newest Unique',
			'Most Recent',
			'Repeat',
			'Search'
		)
	);
	var $identifyBy = array
	(
		'Name/IP Address',
		'Name/Hostname/IP Address',
		'Hostname/IP Address',
		'IP Address',
		'Name-only, ignore unnamed',
		'Browser Family'
	);
	var $prefs		= array
	(
		'trackNames'		=> 1,
		'customCookies'		=> '',
		'identifyBy'		=> 0,
		'sessionTimeout'	=> 7
	);
	var $data		= array
	(
		'registrants' => array()
	);
	var $manifest	= array
	(
		'visit'	=> array
		(
			'ip_long' 			=> "INT(10) NOT NULL",
			'session_checksum'	=> "INT(10) NOT NULL",
			'visitor_name'		=> "VARCHAR(255) NOT NULL"
		),
		'hostnames' => array
		(
			'id'		=> "int(10) unsigned NOT NULL auto_increment",
			'ip_long'	=> "INT(10) NOT NULL",
			'hostname'	=> "VARCHAR(255) NOT NULL",
			'dt'		=> "INT(10) unsigned NOT NULL default '0'"
		)
	);
	var $moderate = array('hostnames');
	var $hostnameCache = array(); // indexed by ip_long
	
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
	 update()
	 **************************************************************************/
	function update()
	{
		if (!isset($this->prefs['sessionTimeout']))
		{	
			$this->prefs['sessionTimeout'] = 7;
		}
		if ($this->Mint->cfg['manifest']['visit']['ip_long'] == 0)
		{
			$this->Mint->cfg['manifest']['visit']['ip_long'] = $this->pepperId;
		}
		if (!isset($this->prefs['trackNames']))
		{	
			$this->prefs['trackNames'] = 1;
		}
		if (!isset($this->prefs['customCookies']))
		{	
			$this->prefs['customCookies'] = '';
		}
		if (!isset($this->prefs['identifyBy']))
		{	
			$this->prefs['identifyBy'] = ($this->prefs['onlyNamed'] && $this->prefs['trackNames']) ? 1 : 3;
			unset($this->prefs['onlyNamed']);
		}
		
		$installed_version = $this->getInstalledVersion();
		
		if ($this->Mint->version < 214)
		{
			$this->Mint->logError('This version of Secret Crush requires Mint 2.14 or higher.', 2);
		}
		else if ($installed_version < 205)
		{
			$remap = array(3, 4, 5, 2);
			$this->prefs['identifyBy'] = $remap[$this->prefs['identifyBy']];
		}
		else if ($installed_version < 211)
		{
			$this->data['registrants'] = array();
		}
	}
	
	/**************************************************************************
	 register()
	
	 Part of the Secret Crush API.
	 **************************************************************************/
	function register($pepperId)
	{
		if (!in_array($pepperId, $this->data['registrants']))
		{
			$this->data['registrants'][] = $pepperId;
		}
	}
	
	/**************************************************************************
	 unregister()
	 
	 Part of the Secret Crush API.
	 **************************************************************************/
	function unregister($pepperId)
	{
		$i = array_search($pepperId, $this->data['registrants']);
		if (isset($this->data['registrants'][$i]))
		{
			unset($this->data['registrants'][$i]);
			$this->data['registrants'] = $this->Mint->array_reindex($this->data['registrants']);
		}
	}
	
	/**************************************************************************
	 onRecord()
	 **************************************************************************/
	function onRecord() 
	{
		$ip_long			= $this->Mint->getIPLong();
		$session_checksum	= 0;
 		$visitor_name		= '';

		if ($this->Mint->acceptsCookies)
		{
			if (isset($_COOKIE['MintCrush']))
			{
				$session_checksum = $_COOKIE['MintCrush'];
			}
			else
			{
				$session_checksum = crc32(time().$this->Mint->getIP().mt_rand());
			}
		
			$this->Mint->bakeCookie('MintCrush', $session_checksum, time() + round($this->prefs['sessionTimeout'] * 60));
 		
	 		if ($this->prefs['trackNames'] && is_array($_COOKIE))
	 		{
				$customCookies = (!empty($this->prefs['customCookies'])) ? $this->prefs['customCookies'].'|' : '';
				foreach ($_COOKIE as $cookie => $name)
				{
					// Match known identifiers
					if (preg_match("/^({$customCookies}mtcmtauth|txp_name|comment_author_(?!url_|email_)|comment_name|sFullName|RememberAuthorName|username|login|author)/i", $cookie))
					{
						// Normalize spaces
						$visitor_name = $this->Mint->escapeSQL(preg_replace("/(\s|%20|\+)+/", ' ', trim($name))); 
					}
				}
			}
		}
		
		return array
		(
 			'ip_long'			=> $ip_long,
			'session_checksum'	=> $session_checksum,
			'visitor_name' 		=> $visitor_name
		);
	}
	
	/**************************************************************************
	 onDisplay()
	 **************************************************************************/
	function onDisplay($pane, $tab, $column = '', $sort = '')
	{
		$html = '';
		
		switch($pane) 
		{
			/* Visitors *******************************************************/
			case 'Crushes': 
				switch($tab)
				{
					/* Newest Unique ******************************************/
					case 'Newest Unique':
						$html .= $this->getHTML_VisitorsUnique();
					break;
					/* Most Recent ********************************************/
					case 'Most Recent':
						$html .= $this->getHTML_VisitorsRecent();
					break;
					/* Repeat *************************************************/
					case 'Repeat':
						$html .= $this->getHTML_VisitorsRepeat();
					break;
					/* Search ************************************************/
					case 'Search':
						$html .= $this->getHTML_VisitorsSearch();
					break;
				}
			break;
		}
		return $html;
	}
	
	/**************************************************************************
	 onCustom()
	 **************************************************************************/
	function onCustom()
	{
		/* VISITOR PAGES -----------------------------------------------------*/
		if
		(
			isset($_POST['action']) 		&& 
			$_POST['action']=='getVisitorsPages'	&& 
			isset($_POST['session_checksum'])
		)
		{
			$session_checksum = $this->escapeSQL($_POST['session_checksum']);
			echo $this->getHTML_VisitorsPages($session_checksum);
		}
	}
	
	/**************************************************************************
	 onRss()
	 **************************************************************************/
	function onRss()
	{
		$rssData = array();	
		$rssData['title'] = 'Crushes';
		
		$hasUA007	= isset($this->Mint->cfg['pepperLookUp']['SI_UserAgent']);
		$select		= ($hasUA007) ? ', `browser_family`, `browser_version`, `platform`' : '';
		if ($this->prefs['identifyBy'] == 4)
		{
			$where = "`visitor_name` != '' ";
		}
		else if ($this->prefs['identifyBy'] == 5 && $hasUA007)
		{
			$where = "`browser_family` != '' ";
		}
		else
		{
			$where = '`ip_long` != 0 AND `ip_long` != -1';
		}
		$query = "SELECT `id`, `ip_long`, `visitor_name`, `resource`, `resource_title`, `dt`{$select}
					FROM `{$this->Mint->db['tblPrefix']}visit` 
					WHERE $where
					GROUP BY `ip_long` 
					ORDER BY `dt` DESC 
					LIMIT 0,{$this->Mint->cfg['preferences']['rssRows']}";
		
		if ($result = $this->query($query)) 
		{
			$this->buildHostnameCache($result);
			while ($r = mysql_fetch_array($result)) 
			{
				$ua 				= ($hasUA007) ? $r['browser_family'].' '.$r['browser_version'] : '';
				
				$visitor			= $this->identifyVisitor($r['visitor_name'], long2ip($r['ip_long']), $ua, false);
				$visitor_clean		= str_replace('&', '&amp;', $visitor);
				$res_title			= (!empty($r['resource_title'])) ? stripslashes($r['resource_title']) : $resource_cleaned;
				
				$infoData = array();
				
				$ip				= long2ip($r['ip_long']);
				$hostname		= $this->Mint->abbr($this->hostnameFromIp($ip), 24, true);
				$ua				= ($hasUA007) ? $r['browser_family'].' '.$r['browser_version'] : '';
				$identifiedAs	= $this->identifyVisitor($r['visitor_name'], $ip, $ua);
				
				if 
				(
					(
						$this->prefs['identifyBy'] != 0 &&
						$this->prefs['identifyBy'] != 1 && 
						$this->prefs['identifyBy'] != 4
					) && 
					$this->prefs['trackNames'] && 
					!empty($r['visitor_name'])
				)
				{
					$infoData['Name'] = $r['visitor_name'];
				}
				
				if ($this->prefs['identifyBy'] != 3 && $ip != $identifiedAs)
				{
					$infoData['IP Address'] = long2ip($r['ip_long']);
				}
				
				if ($this->prefs['identifyBy'] != 2 && $hostname != $identifiedAs && $hostname != $ip)
				{
					$infoData['Hostname'] = $this->hostnameFromIp(long2ip($r['ip_long']));
				}
				
				if ($hasUA007 && $this->prefs['identifyBy'] != 5 && !empty($r['browser_family']) && $ua != $identifiedAs)
				{
					$infoData['Browser'] = $r['browser_family'].' '.$r['browser_version'];
				}
				
				if ($hasUA007 && !empty($r['platform']))
				{
					$infoData['Platform'] = $r['platform'];
				}
				
				$infoData['Where'] = '<a href="'.$r['resource'].'">'.$res_title.'</a>';
				
				$body = '<table>';
				foreach ($infoData as $label => $value)
				{
					$body .= '<tr><th scope="row" align="left">'.$label.'</th><td>'.str_replace('&', '&amp;', $value).'</td></tr>';
				}
				$body .= '</table>';
				
				$rssData['items'][] = array
				(
					'title' => $visitor,
					'body'	=> $body,
					'link'	=> $r['resource'],
					'date'	=> $r['dt']
				);
			}
		}
		
		return $rssData;
	}
	
	/**************************************************************************
	 onDisplayPreferences()
	 **************************************************************************/
	function onDisplayPreferences() 
	{
		/* Global *************************************************************/
		$track_names_checked = ($this->prefs['trackNames'])?' checked="checked"':'';
		
		$identify_by_options = $this->generateIdentifyByOptions();
		
		$preferences['Crushes'] = <<<HERE
<table class="snug">
	<tr>
		<td>Session ends after </td>
		<td><span class="inline"><input type="text" id="sessionTimeout" name="sessionTimeout" maxlength="4" value="{$this->prefs['sessionTimeout']}" class="cinch" /></span></td>
		<td>minutes of inactivity</td>
	</tr>
</table>
<table class="snug">
	<tr>
		<th scope="row">Identify visitor by</th>
		<td><span><select name="identifyBy" id="identifyBy">
			{$identify_by_options}
		</select></span></td>
	</tr>
</table>
HERE;
	
			/* Custom Cookies ************************************************/
			$customCookies = $this->prefs['customCookies'];

			$preferences['Custom Cookies']	= <<<HERE
<table>
	<tr>
		<td><label><input type="checkbox" name="trackNames" value="1"{$track_names_checked} /> Track visitor names using cookies set by this site</label></td>
	</tr>
	<tr>
		<td><label>Additional custom cookies set by this site that should be used when identifying visitors</label></td>
	</tr>
	<tr>
		<td><span><input type="text" id="customCookies" name="customCookies" value="{$customCookies}" /></span></td>
	</tr>
	<tr>
		<td>Use <code>|</code> to separate multiple cookie names, eg. <code>customer_name|primary_email</code></td>
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
		$this->prefs['customCookies']	= (isset($_POST['customCookies']))?trim($_POST['customCookies']):'';
		$this->prefs['sessionTimeout']	= (int) $_POST['sessionTimeout'];
		$this->prefs['trackNames']		= (isset($_POST['trackNames']))?1:0;
		$this->prefs['identifyBy']		= (isset($_POST['identifyBy']))?$_POST['identifyBy']:0;
		
		// can't identify by names if they aren't being tracked
		// can't identify by browser if UA 007 isn't installed
		if
		(
			(!$this->prefs['trackNames'] && $this->prefs['identifyBy'] == 4) ||
			(!isset($this->Mint->cfg['pepperLookUp']['SI_UserAgent'])  && $this->prefs['identifyBy'] == 5)
		)
		{
			$this->prefs['identifyBy'] = 0;
		}
	}

	/**************************************************************************
	 getHTML_VisitorsUnique()
	 **************************************************************************/
	function getHTML_VisitorsUnique()
	{
		$html = '';
		
		$tableData['table'] = array('id'=>'','class'=>'');
		$tableData['thead'] = array
		(
			// display name, CSS class(es) for each column
			array('value'=>'&nbsp;','class'=>'search'),
			array('value'=>'Who','class'=>'focus'),
			array('value'=>'When','class'=>'sort')
		);
		
		$hasUA007	= isset($this->Mint->cfg['pepperLookUp']['SI_UserAgent']);
		$select		= ($hasUA007) ? ', `browser_family`, `browser_version`' : '';
		
		if ($this->prefs['identifyBy'] == 4)
		{
			$where = "`visitor_name` != '' ";
		}
		else if ($this->prefs['identifyBy'] == 5 && $hasUA007)
		{
			$where = "`browser_family` != '' ";
		}
		else
		{
			$where = '`ip_long` != 0 AND `ip_long` != -1';
		}
		
		$query = "SELECT `ip_long`, `visitor_name`, `resource`, `resource_title`, `dt`{$select}
					FROM `{$this->Mint->db['tblPrefix']}visit` 
					WHERE $where AND `session_checksum` != 0
					GROUP BY `ip_long` 
					ORDER BY `dt` DESC 
					LIMIT 0,{$this->Mint->cfg['preferences']['rows']}";
		if ($result = $this->query($query))
		{
			$this->buildHostnameCache($result);
			while ($r = mysql_fetch_array($result))
			{
				$ua = ($hasUA007) ? $r['browser_family'].' '.$r['browser_version'] : '';
				$ip = long2ip($r['ip_long']);
				
				$dt 		= $this->Mint->formatDateTimeRelative($r['dt']);
				$visitor 	= $this->identifyVisitor($r['visitor_name'], $ip, $ua);
				$res_title 	= (!empty($r['resource_title']))?stripslashes($r['resource_title']):$r['resource'];
				$tableData['tbody'][] = array
				(
					$this->generateSearchIcon($ip),
					$visitor.(($this->Mint->cfg['preferences']['secondary'])?"<br /><span>On <a href=\"{$r['resource']}\">$res_title</a></span>":''),
					$dt
				);
			}
		}
		
		$html .= $this->Mint->generateTable($tableData);
		$html .= $this->Mint->generateRSSLink($this->pepperId, 'Newest Unique Crushes');
		return $html;
		}

	/**************************************************************************
	 getHTML_VisitorsRepeat()
	 **************************************************************************/
	function getHTML_VisitorsRepeat()
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
		
		$html .= $this->generateFilterList('Repeat', $filters);
		
		$hasUA007	= isset($this->Mint->cfg['pepperLookUp']['SI_UserAgent']);
		$select		= ($hasUA007) ? ', `browser_family`, `browser_version`' : '';
		$where = array();
		if ($this->filter)
		{
			$where[] = "dt > ".(time() - ($this->filter * 60 * 60));
		}
		
		if ($this->prefs['identifyBy'] == 4)
		{
			$where[] = "`visitor_name` != '' ";
		}
		else if ($this->prefs['identifyBy'] == 5 && $hasUA007)
		{
			$where[] = "`browser_family` != '' ";
		}
		else
		{
			$where[] = '`ip_long` != 0 AND `ip_long` != -1';
		}
		
		$whereQuery = (!empty($where)) ? 'WHERE '.join(' AND ', $where) : '';
		
		$tableData['table'] = array('id'=>'','class'=>'');
		$tableData['thead'] = array
		(
			// display name, CSS class(es) for each column
			array('value'=>'Hits','class'=>'sort'),
			array('value'=>'&nbsp;','class'=>'search'),
			array('value'=>'Who','class'=>'focus')
		);
		
		$query = "SELECT `ip_long`, `visitor_name`, `resource`, `resource_title`, COUNT(`ip_long`) as `total`, `dt`{$select}
					FROM `{$this->Mint->db['tblPrefix']}visit` 
					$whereQuery AND `session_checksum` != 0
					GROUP BY `ip_long` 
					ORDER BY `total` DESC, `dt` DESC 
					LIMIT 0,{$this->Mint->cfg['preferences']['rows']}";
		if ($result = $this->query($query))
		{
			$this->buildHostnameCache($result);
			while ($r = mysql_fetch_array($result))
			{
				$ua = ($hasUA007) ? $r['browser_family'].' '.$r['browser_version'] : '';
				$ip = long2ip($r['ip_long']);
				
				$visitor 	= $this->identifyVisitor($r['visitor_name'], $ip, $ua);
				$res_title	= (!empty($r['resource_title']))?stripslashes($r['resource_title']):$r['resource'];
				$tableData['tbody'][] = array
				(
					$r['total'],
					$this->generateSearchIcon($ip),
					$visitor.(($this->Mint->cfg['preferences']['secondary'])?"<br /><span>On <a href=\"{$r['resource']}\">$res_title</a></span>":'')
				);
			}
		}
			
		$html .= $this->Mint->generateTable($tableData);
		return $html;
	}
	
	/**************************************************************************
	 getHTML_VisitorsRecent()
	 **************************************************************************/
	function getHTML_VisitorsRecent()
	{
		$html = '';
		
		$tableData['hasFolders'] = true;
		$tableData['table'] = array('id'=>'','class'=>'folder');
		$tableData['thead'] = array
		(
			// display name, CSS class(es) for each column
			array('value'=>'Pages','class'=>'sort'),
			array('value'=>'Who/Where','class'=>'focus'),
			array('value'=>'When/Duration','class'=>'sort')
		);
		
		$hasUA007	= isset($this->Mint->cfg['pepperLookUp']['SI_UserAgent']);
		$select		= ($hasUA007) ? ', `browser_family`, `browser_version`' : '';
		
		if ($this->prefs['identifyBy'] == 4)
		{
			$where = "AND `visitor_name` != '' ";
		}
		else if ($this->prefs['identifyBy'] == 5 && $hasUA007)
		{
			$where = "AND `browser_family` != '' ";
		}
		else
		{
			$where = 'AND `ip_long` != 0 AND `ip_long` != -1';
		}
		
		$query = "SELECT `ip_long`, `visitor_name`, COUNT(`resource_checksum`) as `pages`, `session_checksum`, `dt`{$select} 
					FROM `{$this->Mint->db['tblPrefix']}visit` 
					WHERE `session_checksum` != 0 {$where}
					GROUP BY `session_checksum` 
					ORDER BY `dt` DESC 
					LIMIT 0,{$this->Mint->cfg['preferences']['rows']}";
		if ($result = $this->query($query)) 
		{
			$this->buildHostnameCache($result);
			while ($r = mysql_fetch_array($result)) 
			{
				$ua = ($hasUA007) ? $r['browser_family'].' '.$r['browser_version'] : '';
				
				$dt 		= $this->Mint->formatDateTimeRelative($r['dt']);
				$visitor 	= $this->identifyVisitor($r['visitor_name'], long2ip($r['ip_long']), $ua);
				
				$tableData['tbody'][] = array
				(
					$r['pages'],
					$visitor,
					$this->Mint->formatDateTimeRelative($r['dt']),

					'folderargs' => array
					(
						'action'			=> 'getVisitorsPages',
						'session_checksum'	=> $r['session_checksum']
					)
				);
			}
		}
		$html .= $this->Mint->generateTable($tableData);
		return $html;
	}

	/**************************************************************************
	 onDisplaySupplemental() 
	 **************************************************************************/
	function onDisplaySupplemental($pane) 
	{
		$paneId = $this->Mint->cfg['pepperShaker'][$this->pepperId]['panes'][0];
		
		$script = <<<HTML
<script type="text/javascript" language="javascript">
// <![CDATA[
var crushSearchDefault	= 'IP Address/Name';
var crushSearchTab		= \$CSS('#pane-{$paneId} ul.tabs li a')[3];

function SI_crushSearch(ip)
{
	SI.Cookie.set('previousCrushSearch', ip);
	SI.Mint.loadTab({$paneId}, crushSearchTab);
	SI.Cookie.set('MintPane{$paneId}',3);
	return false;
}

// ]]>
</script>
HTML;

		return $script;
	}

	/**************************************************************************
	 getHTML_VisitorsSearch()
	 **************************************************************************/
	function getHTML_VisitorsSearch()
	{
		$html = '';
		
		$tableData['hasFolders'] = true;
		$tableData['table'] = array('id'=>'','class'=>'folder');
		
		$defaultCrushSearch	= 'IP Address/Name';
		$crushSearch		= (isset($_POST['crushSearch']) && !empty($_POST['crushSearch'])) ? trim($_POST['crushSearch']) : $defaultCrushSearch;
		
		if
		(
			$crushSearch == $defaultCrushSearch && 
			isset($_COOKIE['previousCrushSearch']) &&
			!empty($_COOKIE['previousCrushSearch'])
		)
		{
			$crushSearch = $_COOKIE['previousCrushSearch'];
		}
		
		if
		(
			!empty($crushSearch) && 
			$crushSearch != $defaultCrushSearch
		)
		{
			
			$hasUA007	= isset($this->Mint->cfg['pepperLookUp']['SI_UserAgent']);
			$select		= ($hasUA007) ? ', `browser_family`, `browser_version`' : '';

			if (preg_match('/^\d{1,3}(\.\d{1,3}){3}$/', $crushSearch))
			{
				// $html .= 'IP Address';
				$ip_long = ip2long($crushSearch);
				$where = "AND `ip_long` = '{$ip_long}'";
			}
			else if (preg_match('/^(\d{1,3}(-\d{1,3})?|\*)(\.(\d{1,3}(-\d{1,3})?|\*)){0,3}$/', $crushSearch))
			{
				$ipParts = explode('.', $crushSearch);
				for ($i = 0; $i < 4; $i++)
				{
					if (!isset($ipParts[$i]) || $ipParts[$i] == '*')
					{
						$ipParts[$i] = '0-255';
					}
				}
				$ipRange = join('.', $ipParts);
				$ipRangeBottom	= preg_replace('/-\d{1,3}/', '', $ipRange);
				$ipRangeTop		= preg_replace('/\d{1,3}-/', '', $ipRange);

				$where = "AND `ip_long` BETWEEN '".ip2long($ipRangeBottom)."' AND '".ip2long($ipRangeTop)."'";
			}
			/** /
			else if (preg_match('/^[-_a-z0-9\.]+\.[-_a-z0-9\.]+$/i', $crushSearch))
			{
				// way too unreliable, cannot support partial hostnames
				// $html .= 'Hostname';
				$ip_long = ip2long(gethostbyname($crushSearch));
				$where = "AND `ip_long` = '{$ip_long}'";
			}
			/**/
			else
			{
				// $html .= 'Name';
				$visitor_name = $this->Mint->escapeSQL($crushSearch);
				$where = "AND `visitor_name` = '{$visitor_name}'";
			}
			
			$query = "SELECT `ip_long`, `visitor_name`, COUNT(`resource_checksum`) as `pages`, `session_checksum`, `dt`{$select} 
						FROM `{$this->Mint->db['tblPrefix']}visit` 
						WHERE `session_checksum` != 0 {$where}
						GROUP BY `session_checksum` 
						ORDER BY `dt` DESC 
						LIMIT 0,{$this->Mint->cfg['preferences']['rows']}";
			
			$tableData['thead'] = array
			(
				// display name, CSS class(es) for each column
				array('value'=>'Pages','class'=>'sort'),
				array('value'=>'Who/Where','class'=>'focus'),
				array('value'=>'When/Duration','class'=>'sort')
			);
			
			if ($result = $this->query($query)) 
			{
				$this->buildHostnameCache($result);
				while ($r = mysql_fetch_array($result)) 
				{
					$ua = ($hasUA007) ? $r['browser_family'].' '.$r['browser_version'] : '';

					$dt 		= $this->Mint->formatDateTimeRelative($r['dt']);
					$visitor 	= $this->identifyVisitor($r['visitor_name'], long2ip($r['ip_long']), $ua);

					$tableData['tbody'][] = array
					(
						$r['pages'],
						$visitor,
						$this->Mint->formatDateTimeRelative($r['dt']),

						'folderargs' => array
						(
							'action'			=> 'getVisitorsPages',
							'session_checksum'	=> $r['session_checksum'],
							'isSearchResult'	=> 1
						)
					);
				}
			}
		}
		
		$html .= <<<HTML
<form method="post" action="" onsubmit="return SI_crushSearch(this.crushSearch.value);" class="search-form">
<table>
	<tr>
		<td class="first-child"><span><input type="text" name="crushSearch" value="{$crushSearch}" onfocus="if(this.value==crushSearchDefault) { this.value = ''; };" onblur="if (this.value == '') { this.value = crushSearchDefault; };" /></span></td>
		<td><input type="image" src="styles/{$this->Mint->cfg['preferences']['style']}/images/btn-search.png" class="btn" /></td>
	</tr>
</table>	
</form>
HTML;
		$html .= $this->Mint->generateTable($tableData);
		
		return $html;
	}
	
	/**************************************************************************
	 getHTML_VisitorsPages()
	 **************************************************************************/
	function getHTML_VisitorsPages($session_checksum)
	{
		$html = '';

		$hasUA007	= isset($this->Mint->cfg['pepperLookUp']['SI_UserAgent']);
		$select		= ($hasUA007) ? ', `browser_family`, `browser_version`, `platform`' : '';
		$query		= "SELECT `ip_long`, `visitor_name`{$select} 
						FROM `{$this->Mint->db['tblPrefix']}visit`
						WHERE `session_checksum` = '{$session_checksum}'
						ORDER BY `dt` DESC
						LIMIT 0, 1";

		if ($result = $this->query($query))
		{
			$this->buildHostnameCache($result);
			if ($r = mysql_fetch_assoc($result))
			{
				$infoData = array();
				
				$ip				= long2ip($r['ip_long']);
				$hostname		= $this->Mint->abbr($this->hostnameFromIp($ip), 24, true);
				$ua				= ($hasUA007) ? $r['browser_family'].' '.$r['browser_version'] : '';
				$identifiedAs	= $this->identifyVisitor($r['visitor_name'], $ip, $ua);
				
				if 
				(
					(
						$this->prefs['identifyBy'] != 0 &&
						$this->prefs['identifyBy'] != 1 && 
						$this->prefs['identifyBy'] != 4
					) && 
					$this->prefs['trackNames'] && 
					!empty($r['visitor_name'])
				)
				{
					$infoData['Name'] = $r['visitor_name'];
				}
				
				if ($this->prefs['identifyBy'] != 3 && $ip != $identifiedAs)
				{
					$infoData['IP Address'] = long2ip($r['ip_long']);
				}
				
				if ($this->prefs['identifyBy'] != 2 && $hostname != $identifiedAs && $hostname != $ip)
				{
					$infoData['Hostname'] = $this->Mint->abbr($this->hostnameFromIp(long2ip($r['ip_long'])), 32, true);
				}
				
				if ($hasUA007 && $this->prefs['identifyBy'] != 5 && !empty($r['browser_family']) && $ua != $identifiedAs)
				{
					$infoData['Browser'] = $r['browser_family'].' '.$r['browser_version'];
				}
				
				if ($hasUA007 && !empty($r['platform']))
				{
					$infoData['Platform'] = $r['platform'];
				}
				
				foreach($this->data['registrants'] as $pepperId)
				{
					if (isset($this->Mint->pepper[$pepperId]) && method_exists($this->Mint->pepper[$pepperId], 'onSecretCrushMeta'))
					{
						$pepper_meta = $this->Mint->pepper[$pepperId]->onSecretCrushMeta($session_checksum);
						if (is_array($pepper_meta) && !empty($pepper_meta))
						{
							$infoData = array_merge($infoData, $pepper_meta);
						}
					}
				}
				
				if (!isset($_POST['isSearchResult']))
				{
					$infoData['Other Visits'] = $this->generateSearchIcon($ip);
				}
				$html .= $this->Mint->generateInfoRow($infoData);
			}
		}
		
		$query = "SELECT `referer`, `resource`, `resource_title`, `img_search_found`, `search_terms`, `dt`
					FROM `{$this->Mint->db['tblPrefix']}visit` 
					WHERE `session_checksum` = '{$session_checksum}'
					ORDER BY `dt` DESC ";
		
		$v = array();
		$tableData['classes'] = array
		(
			'sort',
			'focus',
			'sort'
		);
		
		$wasReferred = false;
		$activity = array();
		$from_activity = array();
		
		if ($result = $this->query($query))
		{
			while ($r = mysql_fetch_assoc($result))
			{
				$wasReferred	= (!empty($r['referer']));
				$wasSearch		=  (!empty($r['search_terms']));
				$ref_title 		= $this->Mint->abbr($r['referer'], 32);
				$search_title 	= $this->Mint->abbr(stripslashes($r['search_terms']), 24);
				$res_title 		= $this->Mint->abbr((!empty($r['resource_title']))?stripslashes($r['resource_title']):$r['resource'], 32);
				$class			= ($r['img_search_found']) ? ' class="image-search"' : '';
				
				$activity[$r['dt']] = "On <a href=\"{$r['resource']}\">$res_title</a>";

				if ($wasSearch)
				{
					$from_activity[0] = "From a search for <a href=\"{$r['referer']}\" rel=\"nofollow\"{$class}>{$search_title}</a>";
				}
				else
				{
					$from_activity[0] = "From <a href=\"{$r['referer']}\" rel=\"nofollow\">{$ref_title}</a>";
				}
			}
		}
		
		if ($wasReferred)
		{
			$activity += $from_activity;
		}
		
		foreach($this->data['registrants'] as $pepperId)
		{
			if (isset($this->Mint->pepper[$pepperId]) && method_exists($this->Mint->pepper[$pepperId], 'onSecretCrushActivity'))
			{
				$pepper_activity = $this->Mint->pepper[$pepperId]->onSecretCrushActivity($session_checksum);
				if (is_array($pepper_activity) && !empty($pepper_activity))
				{
					$activity += $pepper_activity;
				}
			}
		}
		krsort($activity);
		
		$first = true;
		$next_dt = time();
		foreach($activity as $dt => $action)
		{
			if ($first)
			{
				$first = false;
				$duration = ((time() - $dt) > ($this->prefs['sessionTimeout'] * 60)) ? 'Timed out' : 'Viewing';
			}
			else
			{
				$duration = ($dt == 0) ? '&nbsp;' : $this->Mint->formatDateTimeSpan($dt, $next_dt);
			}
			
			$next_dt = $dt;
			
			$tableData['tbody'][] = array
			(
				'&nbsp;',
				"<span>{$action}</span>",
				$duration
			);
		}
		
		$html .= $this->Mint->generateTableRows($tableData);
		return $html;
	}
	
	/**************************************************************************
	 generateIdentifyByOptions()
	 **************************************************************************/
	function generateIdentifyByOptions()
	{
		$html = '';
		
		foreach($this->identifyBy as $i => $label)
		{
			// don't show browsers as an option if UA 007 isn't installed
			if ($i == 2 && !isset($this->Mint->cfg['pepperLookUp']['SI_UserAgent']))
			{
				continue;
			}
			
			$selected = ($this->prefs['identifyBy'] == $i) ? ' selected="selected"' : '';
			$html .= '<option value="'.$i.'"'.$selected.'>'.$label.'</option>'."\r";
		}
		
		return $html;
	}
	
	/**************************************************************************
	 hostnameFromIp()
	 **************************************************************************/
	function hostnameFromIp($ip)
	{
		// use the hostname cache
		$hostname = $this->hostnameCache[ip2long($ip)];
		
		if ($hostname != $ip)
		{
			// Remove cruft from beginning of hostname
			$hostname = preg_replace("/^(-?[a-z]*)*((-|\.|x)?[0-9]{1,3}){4}-?[a-z]*\./i", '', $hostname);
		}
		return (!empty($hostname)) ? $hostname : $ip;
	}
	
	/**************************************************************************
	 buildHostnameCache()
	 
	 Takes a mysql_query result that contains an ip_long column and gets the
	 cached hostnames. If an ip_long => hostname isn't cached, it finds it and
	 adds to the cache. This is all to work around not being able to use 
	 gethostbyaddr() onRecord because of potential DNS delays that could result
	 in lost or corrupted visit data.
	 **************************************************************************/
	function buildHostnameCache($mysql_query_result)
	{
		$ip_longs	= array(); // integer indexes
		$where		= array();
		$hostnames	= array(); // indexed by ip_long
		
		$rows = 0;
		while ($r = mysql_fetch_assoc($mysql_query_result))
		{
			$ip_longs[] = $r['ip_long'];
			$where[] = "`ip_long` = {$r['ip_long']}";
			$rows++;
		}
		
		// make sure we actually have a list of IPs to query
		if ($rows)
		{
			mysql_data_seek($mysql_query_result, 0);
			// load cached hostnames
			$query = "SELECT `ip_long`, `hostname` 
						FROM `{$this->Mint->db['tblPrefix']}hostnames` 
						WHERE ".join(' OR ', $where);

			if ($result = $this->query($query)) 
			{
				while ($r = mysql_fetch_array($result)) 
				{
					$hostnames[$r['ip_long']] = $r['hostname'];
				}
			}

			// get and cache any missing hostnames
			if (count($ip_longs) != count($hostnames))
			{
				foreach($ip_longs as $ip_long)
				{
					if (!isset($hostnames[$ip_long]))
					{
						$ip = long2ip($ip_long);
						$this->Mint->logBenchmark('gethostbyaddr('.$ip.') {');
						$hostname = gethostbyaddr($ip);
						$this->Mint->logBenchmark('}');
						$this->query("INSERT INTO `{$this->db['tblPrefix']}hostnames` (`ip_long`, `hostname`, `dt`) VALUES ('$ip_long', '$hostname', ".time().")");
						$hostnames[$ip_long] = $hostname;
					}
				}
			}
		}

		$this->hostnameCache = $hostnames;
	}
	
	/**************************************************************************
	 identifyVisitor()
	 **************************************************************************/
	function identifyVisitor($name, $ip, $ua = '', $abbr = true)
	{
		$visitor = $ip;
		
		if
		(
			!empty($name) && 
			(
				$this->prefs['identifyBy'] == 0 ||
				$this->prefs['identifyBy'] == 1 ||
				$this->prefs['identifyBy'] == 4
			)
		)
		{
			$visitor = $name;
		}
		else if ($this->prefs['identifyBy'] == 5 && !empty($ua))
		{
			$visitor = $ua;
		}
		else if ($this->prefs['identifyBy'] == 1 || $this->prefs['identifyBy'] == 2)
		{
			
			$visitor = $this->hostnameFromIp($ip);
		}
		
		return ($abbr) ? $this->Mint->abbr($visitor, 24, true) : $visitor;
	}
	
	/**************************************************************************
	 generateSearchIcon()
	 **************************************************************************/
	function generateSearchIcon($search)
	{
		return '<a href="#search" onclick="return SI_crushSearch(\''.$search.'\');"><img src="styles/vanilla_mint/images/icon-search.png" width="12" height="12" alt="Search" /></a>';
	}
}