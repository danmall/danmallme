<?php
/******************************************************************************
 Pepper
 
 Developer		: Shaun Inman
 Plug-in Name	: Outbound Pepper
 
 http://www.shauninman.com/
 
 ******************************************************************************

 ******************************************************************************/
define('MINT', true);
define('MINT_EMBEDDED', true);
define('MINT_ROOT', str_replace('pepper/shauninman/outbound/click.php', '', __FILE__));

include(MINT_ROOT.'app/lib/mint.php');
include(MINT_ROOT.'app/lib/pepper.php');
include(MINT_ROOT.'config/db.php');
$Mint->loadPepper();

$Outbound =& $Mint->getPepperByClassName('SI_Outbound');
$Outbound->recordOutbound();

header('Content-Type:image/gif');
include(MINT_ROOT.'app/images/loaded.gif');