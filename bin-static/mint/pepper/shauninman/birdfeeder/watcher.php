<?php
/******************************************************************************
 Pepper
 
 Developer		: Shaun Inman
 Plug-in Name	: Bird Feeder Pepper
 
 http://www.shauninman.com/
 
 ******************************************************************************
 Bird Feeder Path
 ******************************************************************************/
define('MINT_EMBEDDED', true);
define('MINT_ROOT', str_replace('pepper/shauninman/birdfeeder/watcher.php', '', __FILE__));
define('FEED_ME', true);

include(MINT_ROOT.'app/lib/mint.php');
include(MINT_ROOT.'app/lib/pepper.php');
include(MINT_ROOT.'config/db.php');
$Mint->loadPepper();
$BirdFeederId = $Mint->cfg['pepperLookUp']['SI_BirdFeeder'];

if (!isset($_GET['FeederAction']))
{
	// This is included actionlessly in the top of each feed
	$Mint->pepper[$BirdFeederId]->onRecordFeed();
	$BirdFeeder =& $Mint->pepper[$BirdFeederId];
}
else
{
	// These are both pass-throughs
	switch($_GET['FeederAction'])
	{
		case 'clicked':
			$Mint->pepper[$BirdFeederId]->onRecordClick();
		break;
	}
}
?>