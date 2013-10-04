<?php
/******************************************************************************
 Pepper
 
 Developer		: Shaun Inman
 Plug-in Name	: Debugger Pepper
 
 http://www.shauninman.com/
 
 ******************************************************************************/
define('MINT',true); // allow direct access
define('MINT_EMBEDDED', true);
define('MINT_ROOT', str_replace('pepper/shauninman/debugger/index.php', '', __FILE__));

include(MINT_ROOT.'app/lib/mint.php');
include(MINT_ROOT.'app/lib/pepper.php');
include(MINT_ROOT.'config/db.php');
$Mint->loadPepper();

$DebuggerId	= $Mint->cfg['pepperLookUp']['SI_Debugger'];
$Debugger	=& $Mint->pepper[$DebuggerId];

// only allow access when the "password" is contained in the url query and the Debugger is enabled
if (!$Debugger->prefs['enabled'] || !isset($_GET[$Debugger->prefs['password']]))
{
	exit;
}

// formatted PHP info
if (isset($_GET['info']))
{
	include('info.php');
}
else
{
	include('debugger.php');
}
?>