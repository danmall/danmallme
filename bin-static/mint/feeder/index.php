<?php
define('MINT', true);
@include($_SERVER['DOCUMENT_ROOT'].'/mint/pepper/shauninman/birdfeeder/watcher.php');

if (!defined('BIRDFEED'))
{
	echo (defined('MINT_EMBEDDED')) ? 'Mint Bird Feeder is active.' : 'Mint Bird Feeder cannot find the Bird Watcher.';
}