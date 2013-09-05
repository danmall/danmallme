<?php
/******************************************************************************
 Pepper
 
 Developer		: Shaun Inman
 Plug-in Name	: Window Width
 
 http://www.shauninman.com/

 ******************************************************************************/
 if (!defined('MINT')) { header('Location:/'); }; // Prevent viewing this file
$installPepper = "SI_WindowWidth";
	
class SI_WindowWidth extends Pepper
{
	var $version	= 100; // Displays as 1.0
	var $info		= array
	(
		'pepperName'	=> 'Window Width',
		'pepperUrl'		=> 'http://www.haveamint.com/',
		'pepperDesc'	=> 'The Window Width Pepper picks up where User Agent 007 leaves off by tracking the width of the browser window on each page load allowing you to make more informed design decisions regarding page width than you could with screen dimensions alone.',
		'developerName'	=> 'Shaun Inman',
		'developerUrl'	=> 'http://www.shauninman.com/'
	);
	var $panes = array
	(
		'Window Width' => array
		(
			'Refresh'
		)
	);
	var $prefs = array
	(
		// Common resolutions widths minus worst-case browser chrome width (56)
		'widthGroups' => '584, 744, 968, 1096, 1344, 1384, 1544, 1624, 1824'
	);
	var $manifest = array
	(
		'visit'	=> array
		(
			'window_width' => "SMALLINT(5) NOT NULL DEFAULT '-1'"
		)
	);

	/**************************************************************************
	 isCompatible()
	 **************************************************************************/
	function isCompatible()
	{
		if ($this->Mint->version >= 120)
		{
			return array
			(
				'isCompatible'	=> true
			);
		}
		else
		{
			return array
			(
				'isCompatible'	=> false,
				'explanation'	=> '<p>This Pepper is only compatible with Mint 1.2 and higher.</p>'
		);
		}
	}
	
	/**************************************************************************
	 onJavaScript()
	 **************************************************************************/
	function onJavaScript() 
	{
		$js = "pepper/shauninman/windowwidth/script.js";
		if (file_exists($js))
		{
			include_once($js);
		}
	}
	
	/**************************************************************************
	 onRecord()
	 **************************************************************************/
	function onRecord() 
	{
 		$windowWidth =  $this->Mint->escapeSQL($_GET['window_width']);
		return array
		(
			'window_width' => (float) $windowWidth
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
			/* Window Width ***************************************************/
			case 'Window Width': 
				switch($tab)
				{
					/* Refresh ************************************************/
					case 'Refresh':
						$html .= $this->getHTML_WindowWidth();
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
		$defaultGroups = get_class_vars('SI_WindowWidth');
		
		/* Global *************************************************************/
		$preferences['Window Width']	= <<<HERE
<table>
	<tr>
		<th>Group widths greater than: </th>
	</tr>
	<tr>
		<td><span><textarea id="widthGroups" name="widthGroups" rows="6" cols="30">{$this->prefs['widthGroups']}</textarea></span></td>
	</tr>
	<tr>
		<td><a href="#default" onclick="document.getElementById('widthGroups').value = '{$defaultGroups['prefs']['widthGroups']}'; return false;" style="float: left; margin: 0 11px 11px 0;"><img src="pepper/shauninman/windowwidth/images/btn-default-mini-single.png" width="51" height="17" alt="Default" /></a> Common resolutions widths minus the worst-case scenario browser chrome width of 56px.</td>
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
		$this->prefs['widthGroups']	= $this->escapeSQL($_POST['widthGroups']);
	}
	
	/**************************************************************************
	 getHTML_WindowWidth()
	 **************************************************************************/
	function getHTML_WindowWidth()
	{
		$widths	= preg_split('/[\s,]+/', $this->prefs['widthGroups']);
		$widths[] = 0;
		sort($widths);
		
		$html = '';
		
		$tableData['thead'] = array
		(
			// display name, CSS class(es) for each column
			array('value'=>'Width','class'=>''),
			array('value'=>'% of Total','class'=>'')
		);
		
		foreach ($widths as $width)
		{
			$query = "SELECT COUNT(`window_width`) AS `total` FROM `{$this->Mint->db['tblPrefix']}visit` 
						WHERE `window_width` >= $width";
			
			if ($result = $this->query($query)) 
			{
				if ($r = mysql_fetch_array($result)) 
				{
					if (!$width)
					{
						$total = ($r['total'])?$r['total']:1;
						continue;
					}
					if ($r['total'])
					{
						$tableData['tbody'][] = array
						(
							"Greater than $width",
							$this->Mint->formatPercents($r['total']/$total*100)
						);
					}
				}
			}
		}
			
		$html = $this->Mint->generateTable($tableData);
		return $html;
	}
}