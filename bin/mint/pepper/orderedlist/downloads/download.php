<?php
global $_GET;
unset($_GET['referer']); // Protect from Referrer Spa

if ($_GET['file']) {
	
	define('MINT_ROOT', str_replace('pepper/orderedlist/downloads/download.php', '', __FILE__));
	define('MINT', TRUE);
	
	include_once('../../../app/lib/mint.php');
	include_once('../../../app/lib/pepper.php');
	include_once('../../../config/db.php');
	
	$Mint->loadPepper();
	
	$_GET['key'] 			= $Mint->generateKey();  	// Generate Mint Key
	$file 					= $_GET['file'];			// Assign File Name
	$_GET['resource'] 		= $file;					// Reassign for Mint Labeling
	$_GET['is_download'] 	= 1;						// This is indeed a download
	
	$file_parts = parse_url($file);
	
	$_GET['resource_title'] = 'Download: ' . $file_parts['path'];	// Set the title, just like a regular Mint Request
	$_GET['record'] 		= true;
	
	// Included to work with Session Tracker
	$sessionTracker = $Mint->getPepperByClassName('RHC3_SessionTracker');
	if ($sessionTracker) $_GET = array_merge($_GET, $sessionTracker->onRecord());
	// end Session Tracker Code
	
	include_once('../../../app/paths/record/index.php');
	header("Content-Disposition: attachment; filename=".basename($file));
	header('Location: ' . $_GET['file']);
	ob_end_clean();
	
}