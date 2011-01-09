<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="en-us" />
	<meta http-equiv="X-UA-Compatible" content="chrome=1" />
	
	<link rel="shortcut icon" href="/assets/images/icons/favicon.ico" />

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" media="screen" href="/assets/css/reset.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="/assets/css/layout.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="/assets/css/typography.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="/assets/css/plugins.css" />

	<!-- jQuery -->
	<script type="text/javascript" src="/assets/javascript/jquery-1.4.2.min.js"></script>

	<!-- Plugins -->
	<script type="text/javascript" src="/assets/javascript/jquery.colorbox-min.js"></script>
	<script type="text/javascript" src="/assets/javascript/jquery.easing.1.2.js"></script>
	<script type="text/javascript" src="/assets/javascript/jquery.anythingslider.js"></script>

	<!-- Typography
	<script type="text/javascript" src="/assets/javascript/cufon-yui.js"></script>
	<script type="text/javascript" src="/assets/javascript/cufon.fontname.js"></script>
	 -->

	<!-- Behaviour -->
	<script type="text/javascript" src="/assets/javascript/jquery.behaviour.js"></script>
	
	<!--[if gte IE 7]>
		<script type="text/javascript" src="/assets/javascript/DOMAssistantCompressed-2.7.4.js"></script>
		<script type="text/javascript" src="/assets/javascript/ie-css3.js"></script>
	<![endif]-->

	{!-- This pulls in the Structure title if it's not the homepage or a 404 --}
	<title>{if embed:title == ""}{if segment_1 != ""}{exp:weblog:entries status="not Closed"}{title}{/exp:weblog:entries} | {/if}{if:else}{embed:title} | {/if}{site_name}</title>

</head>

<body class="{embed:body_class}">
	
		
	<div id="container">