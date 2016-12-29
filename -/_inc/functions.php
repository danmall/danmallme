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
        echo "\t" . '<article class="hentry dm-dp-textBlurb">'. "\n\t\t";

        // create article header
        echo '<header class="dm-dp-textBlurb_header">' . "\n\t\t\t";

        // print headline link to slug
        if(strpos($articles[$i]['slug'], 'http://') !== false){
            echo '<h1 class="entry-title dm-dp-textBlurb_title"><a href="' . $ARTICLES_DIRECTORY . $articles[$i]['slug'] .'/">' . $articles[$i]['title'] . '</a></h1>'. "\n\t\t\t";  
        }else{
            echo '<h1 class="entry-title dm-dp-textBlurb_title"><a href="' . $articles[$i]['slug'] .'">' . $articles[$i]['title'] . '</a></h1>'. "\n\t\t\t"; 
        }

        /// print timestamp
        echo '<time class="published dm-dp-textBlurb_time" datetime="' . $articles[$i]['date'] . '">' . date('M d, Y' , strtotime($articles[$i]['date'])) . '</time>' . "\n\t\t";

        // close article header
        echo '</header>' . "\n\t\t";

        if($type == 'full'){
        
	        // print dek
	        echo '<div class="entry-summary dm-dp-textBlurb_dek">' . $articles[$i]['dek'] . '</div>' . "\n\t\t";                  

	        // print tags
	        echo '<ul class="tags dm-dp-textBlurb_tags">' . "\n\t\t";
	        for($j=0; $j < sizeof($tags); $j++){
	            echo "\t" . '<li class="dm-dp-textBlurb_tags_item">' . $tags[$j] . "</li>\n\t\t";
	        }
	        echo '</ul>';

	    }

        // close entry
        echo "\n\t" . '</article>' . "\n\n";
        
    }

}


function parseQuotes($file, $num) {

    $quotes = json_decode(file_get_contents($file), true);
    if($num == 'all'){
        $quotesLength = sizeof($quotes);    
    }else{
        $quotesLength = $num;
    }

    // generate random array
    $randomQuotes = array_rand($quotes, $quotesLength);

    for($i = 0; $i < sizeof($randomQuotes); $i++){

        // Open entry
        echo "\t" . '<blockquote class="dm-dp-quote">'. "\n\t\t";

        // print quote
        echo '<p>' . $quotes[$randomQuotes[$i]]['quote'] . '</p>' . "\n\t\t";

        // print attribution
        echo '<address class="dm-dp-quote_attribution"><strong>' . $quotes[$randomQuotes[$i]]['person'] . '</strong>, ' . $quotes[$randomQuotes[$i]]['role'] . "</address>" . "\n\t\t";

        // close article header
        echo '</blockquote>' . "\n\t\t";

    }
    
}

?>