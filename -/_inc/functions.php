<?php

/*function segmentURL($url){    
    $segments = explode("/", $url);    
}
segmentURL($_SERVER['REQUEST_URI']);*/

function parseList($file, $num, $type){

	// $type = 'full' or 'abridged'

	$articles = json_decode(file_get_contents($file), true);
	if($num == 'all'){
		$articlesLength = sizeof($articles);	
	}else{
		$articlesLength = $num;
	}
    
    $ARTICLES_DIRECTORY = '/articles/';
    
    for($i = 0; $i < $articlesLength; $i++){

        // convert tags to array
        $tags = $articles[$i]['tags'];

        // Open entry
        echo "\t" . '<article class="hentry dm-c-articleChunk">'. "\n\t\t";

        // create article header
        echo '<header class="dm-c-articleChunk_header">' . "\n\t\t\t";

        // print headline link to slug
        echo '<h1 class="entry-title dm-c-articleChunk_title"><a href="' . $ARTICLES_DIRECTORY . $articles[$i]['slug'] .'/">' . $articles[$i]['title'] . '</a></h1>'. "\n\t\t\t";  

        /// print timestamp
        echo '<time class="published dm-c-articleChunk_time" datetime="' . $articles[$i]['date'] . '">' . date('M d, Y' , strtotime($articles[$i]['date'])) . '</time>' . "\n\t\t";

        // close article header
        echo '</header>' . "\n\t\t";

        if($type == 'full'){
        
	        // print dek
	        echo '<div class="entry-summary dm-c-articleChunk_dek">' . $articles[$i]['dek'] . '</div>' . "\n\t\t";                  

	        // print tags
	        echo '<ul class="tags dm-c-articleChunk_tags">' . "\n\t\t";
	        for($j=0; $j < sizeof($tags); $j++){
	            echo "\t" . '<li class="dm-c-articleChunk_tags_item">' . $tags[$j] . "</li>\n\t\t";
	        }
	        echo '</ul>';

	    }

        // close entry
        echo "\n\t" . '</article>' . "\n\n";
        
    }

}

?>