<?php

/*function segmentURL($url){    
    $segments = explode("/", $url);    
}
segmentURL($_SERVER['REQUEST_URI']);*/

function getTotalItems($file){
    $items = json_decode(file_get_contents($file), true);        
    return sizeof($items);
}

function parseList($file, $num, $type, $displayStyle){

	// $type = 'full' or 'abridged'

    // $displayStyle = 'small' or 'large'

	$articles = json_decode(file_get_contents($file), true);

	if($num == 'all'){
		$articlesLength = sizeof($articles);	
	}else{
		$articlesLength = $num;
	}
    
    $ARTICLES_DIRECTORY = '/articles/';
    
    for($i = 0; $i < $articlesLength; $i++){

        // convert tags to array
        if(!empty($articles[$i]['tags'])){
            $tags = $articles[$i]['tags'];
        }

        // Open entry
        if(isset($displayStyle)){
            if($displayStyle == 'small'){
                if(!empty($articles[$i]['audio']) || !empty($articles[$i]['video'])){
                    if(isset($articles[$i]['audio'])){
                        echo "\t" . '<article class="hentry dm-dp-textBlurb dm-dp-textBlurb--audio dm-dp-textBlurb--small">'. "\n\t\t";
                    }else if($articles[$i]['video']){
                        echo "\t" . '<article class="hentry dm-dp-textBlurb dm-dp-textBlurb--video dm-dp-textBlurb--small">'. "\n\t\t";
                    }
                }else{
                    echo "\t" . '<article class="hentry dm-dp-textBlurb dm-dp-textBlurb--small">'. "\n\t\t";
                }
            }else{
                echo "\t" . '<article class="hentry dm-dp-textBlurb">'. "\n\t\t";
            }
        }

        // coming up badge
        if(!empty($articles[$i]['date'])){
            $date_now = new DateTime();
            $date2    = new DateTime($articles[$i]['date']);

            if ($date_now < $date2) {
                echo '<div class="dm-dp-textBlurb_badge">Coming Up</div>';
            }
        }

        // create article header
        echo '<header class="dm-dp-textBlurb_header">' . "\n\t\t\t";

        // print headline link to slug
        if(!empty($articles[$i]['slug'])){
            if((strpos($articles[$i]['slug'], 'http://') !== false) || (strpos($articles[$i]['slug'], 'https://') !== false)){
                echo '<h1 class="entry-title dm-dp-textBlurb_title"><a href="' . $articles[$i]['slug'] .'">' . $articles[$i]['title'] . '</a></h1>'. "\n\t\t\t"; 
            }else{
                echo '<h1 class="entry-title dm-dp-textBlurb_title"><a href="' . $ARTICLES_DIRECTORY . $articles[$i]['slug'] .'/">' . $articles[$i]['title'] . '</a></h1>'. "\n\t\t\t";
            }
        }else{
            echo '<h1 class="entry-title dm-dp-textBlurb_title">' . $articles[$i]['title'] . '</h1>'. "\n\t\t\t";
        }

        // print timestamp
        if(!empty($articles[$i]['date'])){
            echo '<time class="published dm-dp-textBlurb_time" datetime="' . $articles[$i]['date'] . '">' . date('M d, Y' , strtotime($articles[$i]['date'])) . '</time>' . "\n\t\t";
        }

        // close article header
        echo '</header>' . "\n\t\t";

        /// print location
        if(!empty($articles[$i]['location'])){
            echo '<div class="dm-dp-textBlurb_location">' . $articles[$i]['location'] . '</div>' . "\n\t\t";
        }

        /// print source
        if(!empty($articles[$i]['source'])){
            echo '<div class="dm-dp-textBlurb_source">' . $articles[$i]['source'] . '</div>' . "\n\t\t";
        }

        /// print type
        if(!empty($articles[$i]['type'])){
            echo '<div class="dm-dp-textBlurb_type">' . $articles[$i]['type'] . '</div>' . "\n\t\t";
        }

        if($type == 'full'){

            if(!empty($articles[$i]['dek'])){
        
    	        // print dek
    	        echo '<div class="entry-summary dm-dp-textBlurb_dek">' . $articles[$i]['dek'] . '</div>' . "\n\t\t";                  

            }

	        // print tags
            if(isset($tags)){

    	        echo '<ul class="tags dm-dp-textBlurb_tags">' . "\n\t\t";

    	        for($j=0; $j < sizeof($tags); $j++){
    	            echo "\t" . '<li class="dm-dp-textBlurb_tags_item">' . $tags[$j] . "</li>\n\t\t";
    	        }
    	        echo '</ul>';

            }

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

        /*if(($i == 0) || ($i == 2)) {
            echo "\t" . '<div class="dm-l-col--50">'. "\n\t\t";    
        }*/

        // Open entry
        echo "\t" . '<blockquote class="dm-dp-quote">'. "\n\t\t";

        // print quote
        if(!empty($quotes[$randomQuotes[$i]]['quote'])){
            echo '<p>' . $quotes[$randomQuotes[$i]]['quote'] . '</p>' . "\n\t\t";
        }

        // print attribution
        if(!empty($quotes[$randomQuotes[$i]]['person']) && !empty($quotes[$randomQuotes[$i]]['role'])){
            echo '<address class="dm-dp-quote_attribution"><strong>' . $quotes[$randomQuotes[$i]]['person'] . '</strong>, ' . $quotes[$randomQuotes[$i]]['role'] . "</address>" . "\n\t\t";
        }

        // close article header
        echo '</blockquote>' . "\n\t\t";

        /*if(($i == 1) || ($i == 3)) {
            echo '</div>' . "\n\t\t";
        }*/

    }
    
}

?>