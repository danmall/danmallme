<?php
/******************************************************************************
 Pepper
 
 Developer		: Shaun Inman
 Plug-in Name	: Refresh
 
 http://www.shauninman.com/
 
 ******************************************************************************/
if (!defined('MINT')) { header('Location:/'); }; // Prevent viewing this file
$installPepper = "SI_Refresh";

class SI_Refresh extends Pepper
{
	var $version	= 200;
	var $info		= array
	(
		'pepperName'	=> 'Refresh',
		'pepperUrl'		=> 'http://www.haveamint.com/',
		'pepperDesc'	=> "As if Mint weren't fresh enough already, with the Refresh Pepper all of your active tabs are refreshed automatically. Please refresh responsibly and remember to tip your (database) servers.",
		'developerName'	=> 'Shaun Inman',
		'developerUrl'	=> 'http://www.shauninman.com/'
	);
	var $prefs		= array
	(
		'enableAutoRefresh'	=> 1,
		'refreshRate'		=> 15 // in minutes
	);
	
	/**************************************************************************
	 isCompatible()
	 **************************************************************************/
	function isCompatible()
	{
		if ($this->Mint->version < 203)
		{
			$compatible = array
			(
				'isCompatible'	=> false,
				'explanation'	=> '<p>This Pepper requires Mint 2.03. Mint 2, a paid upgrade from Mint 1.x, is available at <a href="http://www.haveamint.com/">haveamint.com</a>.</p>'
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
	 onDisplayPreferences()
	 **************************************************************************/
	function onDisplayPreferences() 
	{
		
		/* Global *************************************************************/
		$checked = ($this->prefs['enableAutoRefresh'])?' checked="checked"':'';
		$preferences['Global']	= <<<HERE
<table>
	<tr>
		<td><label><input type="checkbox" name="enableAutoRefresh" value="1"$checked /> Enable auto-refresh for all panes.</label></td>
	</tr>
</table>

HERE;
		
		/* Refresh Rate *******************************************************/
		$preferences['Refresh Rate'] = <<<HERE
<table class="snug">
	<tr>
		<td>Refresh all panes every </td>
		<td><span class="inline"><input type="text" id="refreshRate" name="refreshRate" maxlength="4" value="{$this->prefs['refreshRate']}" class="cinch" /></span></td>
		<td>minutes</td>
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
		$this->prefs['enableAutoRefresh']	= (isset($_POST['enableAutoRefresh'])) ? 1 : 0;
		$this->prefs['refreshRate']			= (int) $this->escapeSQL($_POST['refreshRate']);
	}
	
	/**************************************************************************
	 onAfterDisplay() 
	 **************************************************************************/
	function onAfterDisplay()
	{
		$html = '';
		if ($this->prefs['enableAutoRefresh'])
		{
			$html .= <<<HERE
<script type="text/javascript" language="javascript">
// <![CDATA[
// Thanks for the implementation idea Snook! http://snook.ca/archives/other/have_a_mint/
setInterval(function(){ var elems = SI.CSS.select('.active a'); for (var i = 0; i < elems.length; i++) { elems[i].onclick(); }; }, {$this->prefs['refreshRate']} * 60 * 1000);
// ]]>
</script>
HERE;
		}
		
	return $html;
	}
}