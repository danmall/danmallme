<?php
/******************************************************************************
 Pepper
 
 Developer		: Shaun Inman
 Plug-in Name	: Debug Pepper
 
 http://www.shauninman.com/

 ******************************************************************************/
if (!defined('MINT')) { header('Location:/'); }; // Prevent viewing this file
$installPepper = "SI_Debugger";

function SI_DebuggerPassword()
{
	$password = '';
	$chars = 'ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz23456789';
	for ($i = 0; $i < 12; ++$i)
	{
		$password .= substr($chars, (mt_rand() % strlen($chars)), 1);
	}
	return $password;
}
if (!defined('SI_DEBUGGER_PASSWORD'))
{
	define('SI_DEBUGGER_PASSWORD', SI_DebuggerPassword());
}

class SI_Debugger extends Pepper
{
	var $version	= 4;
	var $info		= array
	(
		'pepperName'	=> 'Debugger',
		'pepperUrl'		=> 'http://www.haveamint.com/',
		'pepperDesc'	=> 'A paneless Pepper used temporarily to debug your Mint installation. Please make a backup of your Mint database before installing/uninstalling this Pepper.',
		'developerName'	=> 'Shaun Inman',
		'developerUrl'	=> 'http://www.shauninman.com/'
	);
	var $prefs		= array
	(
		// named 'password' so $Mint->observe doesn't display its value
		'password'	=> SI_DEBUGGER_PASSWORD,
		'enabled'	=> 1
	);
	var $manifest = array
	(
		'visit' => array
		(
			'debug_id' => "INT(11) unsigned NOT NULL default '0'"
		),
		'debugger'	=> array
		(
			'id'				=> "INT(11) unsigned NOT NULL auto_increment",
			'resource' 			=> "VARCHAR(255) NOT NULL",
			'ua' 				=> "VARCHAR(255) NOT NULL",
			'cookies' 			=> "TEXT NOT NULL",
			'visits_before'		=> "TEXT NOT NULL",
			'visits_after' 		=> "TEXT NOT NULL",
			'cookieable'		=> "TINYINT(1) unsigned NOT NULL default '0'",
			'trackable'			=> "TINYINT(1) unsigned NOT NULL default '0'",
			'ip_long' 			=> "INT(10) NOT NULL",
			'local_dt'			=> "VARCHAR(255) NOT NULL",
			'dt'				=> "INT(10) unsigned NOT NULL default '0'"
		)
	);
	var $moderate = array('debugger');
	
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
	 onDisplayPreferences()
	 **************************************************************************/
	function onDisplayPreferences() 
	{
			/* Debugger Location **********************************************/
			$debugger_path = $this->Mint->cfg['installFull'].'/pepper/shauninman/debugger/?'.$this->prefs['password'];
			$debuggerEnabled = ($this->prefs['enabled']) ? ' checked="checked"' : '';
			$preferences['Debugger']	= <<<HERE
<table>
	<tr>
		<td><label>Your Debugger can be found <a href="{$debugger_path}">here</a>:</label></td>
	</tr>
	<tr>
		<td><span><input type="text" value="{$debugger_path}" readonly="readonly" onclick="this.select();" /></span></td>
	</tr>
	<tr>
		<td><label><input type="checkbox" name="debuggerEnabled" value="1"{$debuggerEnabled} /> Enable debugging</label></td>
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
		$this->prefs['enabled']	= (isset($_POST['debuggerEnabled'])) ? 1 : 0;
	}
	
	/**************************************************************************
	 onJavaScript()
	 **************************************************************************/
	function onJavaScript() 
	{
		if (!$this->prefs['enabled'])
		{
			return;
		}
		
		$resource		= $this->escapeSQL((isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : '');
		$ua				= $this->escapeSQL((isset($_SERVER['HTTP_USER_AGENT'])) ? $_SERVER['HTTP_USER_AGENT'] : '');
		$visits_before	= $this->escapeSQL(serialize($this->getVisits()));
		$ip_long		= $this->Mint->getIPLong();
		$dt				= time();
		
		$this->query("INSERT INTO `{$this->db['tblPrefix']}debugger` (resource, ua, visits_before, ip_long, dt) VALUES ('{$resource}', '{$ua}', '{$visits_before}', '{$ip_long}', '{$dt}')");
		$debug_id = mysql_insert_id();
		
		$javascript = <<<JS

if (!Mint.SI) { Mint.SI = new Object(); }
Mint.SI.Debugger = 
{
	onsave	: function() 
	{
		var now		 = new Date();
		var local_dt = Math.floor(now.valueOf() / 1000);
		return '&debug_id=' + {$debug_id} + '&debug_dt=' + {$dt} + '&local_dt=' + local_dt;
	}
};

JS;
		
		echo $javascript;
	}
	
	/**************************************************************************
	 onRecord()
	 **************************************************************************/
	function onRecord() 
	{
		if (!$this->prefs['enabled'])
		{
			return array();
		}
		
		$mint_cookies = array();
		foreach($_COOKIE as $name => $value)
		{
			if (preg_match('/^Mint(Unique|AcceptsCookies|Crush)/', $name))
			{
				$mint_cookies[$name] = $value;
			}
		}
		$cookies		= $this->escapeSQL(serialize($mint_cookies));
		$visits_after	= $this->escapeSQL(serialize($this->getVisits()));
		$cookieable		= (isset($mint_cookies['MintAcceptsCookies']));
		$debug_id		= $this->escapeSQL((isset($_GET['debug_id'])) ? $_GET['debug_id'] : 0);
		$local_dt		= $this->escapeSQL((isset($_GET['local_dt'])) ? $_GET['local_dt'] : 0);
		if ($debug_id)
		{
			$this->query("UPDATE `{$this->db['tblPrefix']}debugger` SET `visits_after` = '{$visits_after}', `cookies` = '{$cookies}', `cookieable` = '{$cookieable}', `trackable` = '1', `local_dt` = '{$local_dt}' WHERE `id`={$debug_id}");
		}
		return array('debug_id' => $debug_id);
	}
	
	/**************************************************************************
	 getVisits()
	
	 Grabs the current aggregate visits from the Default Pepper
	 **************************************************************************/
	function getVisits()
	{
		$DefaultPepper	=& $this->Mint->pepper[0];
		$visits = $DefaultPepper->data['visits'];
		
		$hour	= $this->Mint->getOffsetTime('hour');
		$day	= $this->Mint->getOffsetTime('today');
		$week	= $this->Mint->getOffsetTime('week');
		$month	= $this->Mint->getOffsetTime('month');
		$since	= $this->Mint->cfg['installDate'];
		
		$default = array
		(
			'total'		=> 0,
			'unique'	=> 0
		);
		
		return array
		(
			'hour'	=> (isset($visits[1][$hour]))	? array_merge($default, $visits[1][$hour])	: $default,
			'day'	=> (isset($visits[2][$day]))	? array_merge($default, $visits[2][$day])	: $default,
			'week'	=> (isset($visits[3][$week]))	? array_merge($default, $visits[3][$week])	: $default,
			'month'	=> (isset($visits[4][$month]))	? array_merge($default, $visits[4][$month])	: $default,
			'ever'	=> (isset($visits[0][0]))		? array_merge($default, $visits[0][0])		: $default
		);
	}
}