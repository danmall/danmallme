<?php

/*function segmentURL($url){    
    $segments = explode("/", $url);    
}
segmentURL($_SERVER['REQUEST_URI']);*/


	function readNext($title, $url){

		$output = '<footer id="read-next" class="read-next wrap">';
		$output .= '<small class="read-next-caption">Read this next</small>';
		$output .= '<h1 class="read-next-headline"><a href="' . $url . '">' . $title . '&nbsp;&rarr;</a></h1>';
		$output .= '</footer>';

		return $output;

	}

?>