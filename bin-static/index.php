<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/doctype.php"); echo "\n"; ?>
<head>
    <title>Dan Mall  //  Creative Direction &bull; Art Direction &bull; Design &bull; Strategy</title>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/meta.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/cssReference.php"); echo "\n"; ?>
    <?php /* ?>
    <!-- Thanks, @rem: http://remysharp.com/2007/05/18/add-twitter-to-your-blog-step-by-step/ -->
    <script src="http://twitterjs.googlecode.com/svn/trunk/src/twitter.min.js"></script>
    <?php */ ?>

    <script src="/j/libs/chirp.min.js"></script>
    
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/jsReference.php"); echo "\n"; ?>
    
</head>

<body class="home" id="home">	
    
    <img id="logo" src="/i/logo.png" alt="Dan Mall" />
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"); echo "\n"; ?>
	
	<div id="content" class="easy-clearing">
	    
	    <section id="work" class="home-row">
	        
	        <div class="inner">
		    
		        <h1 class="phark">Featured Work</h1>
		
    			<ul class="no-marker">
    			    <li class="home-round-item position1">
    				    <a data-tooltip-content="<h1>Crayola</h1><p>Free the &ldquo;what if.&ldquo;</p>" href="/work/crayola/" class="phark phark-link" style="background-image: url(/i/screen/home/crayola-thumb.jpg);">Crayola</a>
    				</li>
    			    <li class="home-round-item position1">
    				    <a data-tooltip-content="<h1>Crayola</h1><p>Free the &ldquo;what if.&ldquo;</p>" href="/work/crayola/" class="phark phark-link" style="background-image: url(/i/screen/home/crayola-thumb.jpg);">Crayola</a>
    				</li>
    			    <li class="home-round-item position2">
    				    <a data-tooltip-content="<h1>Star Wars</h1><p>Creating a universe for a universe.</p>" href="/work/star-wars/" class="phark phark-link" style="background-image: url(/i/screen/home/star-wars.jpg);">Star Wars</a>					
    			    <li class="home-round-item position3">
    				    <a data-tooltip-content="<h1>Activate</h1><p>A turn for the better.</p>" href="/work/activate/" class="phark phark-link" style="background-image: url(/i/screen/home/activate2.jpg);">Activate</a>
    				</li>				
    				<li class="home-round-item position4">
    				    <a data-tooltip-content="<h1>Morsel</h1><p>Your daily step toward better health.</p>" href="/work/morsel/" class="phark phark-link" style="background-image: url(/i/screen/home/morsel2.jpg);">Morsel</a>
    				</li>
					<?php /* ?>
    				<li class="home-round-item position3">
    				    <a data-tooltip-content="<h1>Housing Works</h1><p>Housing prevents <abbr>AIDS</abbr>. Housing Saves Lives.</p>" href="/work/housing-works/" class="phark phark-link" style="background-image: url(/i/screen/home/housing-works.jpg);">Housing Works</a>
    				</li>
    				<li class="home-round-item" style="left: 444px; top: 2px; z-index: 1;">
    				    <a data-tooltip-content="<h1>healthymagination</h1><p>A shared commitment to better health. Together.</p>" href="/work/healthymagination/" class="phark phark-link" style="background-image: url(/i/screen/home/healthymagination3.png);">healthymagination</a>
    				</li>
    				<li class="home-round-item" style="left: 444px; top: 12px;">
    				    <a href="/work/design-swap/" class="phark phark-link" style="background-image: url(/i/screen/home/design-swap.gif);">Design Swap</a>
    				</li>    				
    				<li class="home-round-item position4">
    				    <a data-tooltip-content="<h1>JetWaders</h1><p>Modern-day jelly shoes.</p>" href="/work/jetwaders/" class="phark phark-link" style="background-image: url(/i/screen/home/jetwaders.jpg);">JetWaders</a>
    				</li>	<?php */ ?>	
    				
    			</ul>
    			
    			<p class="more"><a href="/work/">See all</a></p>
    			
    		</div><!-- /.inner -->
    		
	
		</section><!-- /#work -->
				

		<section id="latest-articles" class="home-row">
		    
		    <div class="inner">
		    
    		    <h1 class="phark">Latest Articles</h1>
	    
    		    <ul class="no-marker">
                    
    		        <li class="home-round-item position1">
    				    <a data-tooltip-content="<h1>Design Flexibility</h1><p>More about the design process in the public story of a new site for Reading Is Fundamental.</p>" href="/articles/rif-design-flexibility/" class="phark phark-link" style="background-image: url(/articles/rif-design-flexibility/home-thumb.jpg);">Design Flexibility</a>
    				</li>
                    
    		        <li class="home-round-item position2">
    				    <a data-tooltip-content="<h1>Element Collages</h1><p>An abstract way to document design for Reading Is Fundamental.</p>" href="/articles/rif-element-collages/" class="phark phark-link" style="background-image: url(/articles/rif-element-collages/home-thumb.jpg);">Element Collages</a>
    				</li>
                    
    		        <li class="home-round-item position3">
    				    <a data-tooltip-content="<h1>Reading Is Fundamental Kickoff</h1><p>The first chapter in the public story of a new site for Reading Is Fundamental.</p>" href="/articles/rif-kickoff/" class="phark phark-link" style="background-image: url(/articles/rif-kickoff/home-thumb.jpg);">Reading Is Fundamental Kickoff</a>
    				</li>
                    
    		        <li class="home-round-item position4">
    				    <a data-tooltip-content="<h1>Circles Conference 2012</h1><p>Recap of a great event I had the pleasure of speaking at in Dallas, TX.</p>" href="/articles/circlesconf2012/" class="phark phark-link" style="background-image: url(/articles/circlesconf2012/home-thumb.jpg);">Circles Conference 2012</a>
    				</li>
					
                    <?php /* ?>	
    		        <li class="home-round-item position4">
    				    <a data-tooltip-content="<h1>Responsive Line Breaks</h1><p>A small trick I use to improve readability for responsive designs.</p>" href="/articles/responsive-line-breaks/" class="phark phark-link" style="background-image: url(/articles/responsive-line-breaks/home-thumb.png);">Responsive Line Breaks</a>
    				</li>
                                        
    		        <li class="home-round-item position4">
    				    <a data-tooltip-content="<h1>Object Value Pricing</h1><p>A barter-style pricing system for web design &amp; dev projects.</p>" href="/articles/object-value-pricing/" class="phark phark-link" style="background-image: url(/articles/object-value-pricing/home-thumb.png);">Object Value Pricing</a>
    				</li>
                    					
    		        <li class="home-round-item position4">
    				    <a data-tooltip-content="<h1>Big/Small</h1><p>A recent dilemma about responsibility.</p>" href="/articles/big-small/" class="phark phark-link" style="background-image: url(/articles/big-small/home-thumb.png);">Big/Small</a>
    				</li>
					
    		        <li class="home-round-item position4">
    				    <a data-tooltip-content="<h1>Hillman Curtis</h1><p>The world has lost one more great man.</p>" href="/articles/hillman-curtis/" class="phark phark-link" style="background-image: url(/articles/hillman-curtis/home-thumb.png);">Hillman Curtis</a>
    				</li>    	
                    
    		        <li class="home-round-item position4">
    				    <a data-tooltip-content="<h1>Authenticity</h1><p>Some speaking advice from Jeremy Keith.</p>" href="/articles/authenticity/" class="phark phark-link" style="background-image: url(/articles/authenticity/home-thumb.png);">Authenticity</a>
    				</li>
                    
                    
    		        <li class="home-round-item position4">
    				    <a data-tooltip-content="<h1>Grok Reads</h1><p>A list of some great books mentioned in Greenville Grok sessions.</p>" href="/articles/grok-reads/" class="phark phark-link" style="background-image: url(/articles/grok-reads/home-thumb.jpg);">Grok Reads</a>
    				</li>
					
    		        <li class="home-round-item position4">
    				    <a data-tooltip-content="<h1>Introducing SuperFriendly</h1><p>Today&rsquo;s my birthday. This year, I got myself a new house, a new (old) city, and my very own design studio.</p>" href="/articles/introducing-superfriendly/" class="phark phark-link" style="background-image: url(/articles/introducing-superfriendly/home-thumb.gif);">Introducing SuperFriendly</a>
    				</li>
									
    		        <li class="home-round-item position4">
    				    <a data-tooltip-content="<h1>Farewell, Big Spaceship</h1><p>Today is my last day at Big Spaceship.</p>" href="/articles/farewell-big-spaceship/" class="phark phark-link" style="background-image: url(/articles/farewell-big-spaceship/home-thumb.png);">Farewell, Big Spaceship</a>
    				</li>		
					
    		        <li class="home-round-item position4">
    				    <a data-tooltip-content="<h1>Sketchbooks</h1><p>Celebrating rituals that encourage new beginnings.</p>" href="/articles/sketchbooks/" class="phark phark-link" style="background-image: url(/articles/sketchbooks/home-thumb2.jpg);">Sketchbooks</a>
    				</li>
					
    		        <li class="home-round-item" style="left: 600px; top: 8px; z-index: 1;">
    				    <a data-tooltip-content="<h1>What I Loved About Brooklyn Beta</h1><p>Hands down the best industry event I&rsquo;ve ever attended.</p>" href="/articles/brooklyn-beta-2011/" class="phark phark-link" style="background-image: url(/articles/brooklyn-beta-2011/home-thumb.jpg);">What I Loved About Brooklyn Beta</a>
    				</li>
					
					<li class="home-round-item" style="left: 600px; top: 8px; z-index: 1;">
    				    <a data-tooltip-content="<h1>You, the Conference Organizer</h1><p>Plan your dream conference.</p>" href="/articles/you-the-conference-organizer/" class="phark phark-link" style="background-image: url(/articles/you-the-conference-organizer/home-thumb.jpg);">You, the Conference Organizer</a>
    				</li>	
					
    		        <li class="home-round-item" style="left: 600px; top: 8px; z-index: 1;">
    				    <a data-tooltip-content="<h1>Typefaces I Used This Month</h1><p>Be adventurous and experiment with new faces, but don&rsquo;t forget about the classics.</p>" href="/articles/august2011-typefaces/" class="phark phark-link" style="background-image: url(/articles/august2011-typefaces/home-thumb.png);">Typefaces I Used This Month</a>
    				</li>    		        
					<li class="home-round-item" style="left: 600px; top: 8px; z-index: 1;">
    				    <a data-tooltip-content="<h1>Photoshop Clusters</h1><p>An idea for configuring Photoshop.</p>" href="/articles/photoshop-clusters/" class="phark phark-link" style="background-image: url(/articles/photoshop-clusters/home-thumb.jpg);">Photoshop Clusters</a>
    				</li>    				
    		        <li class="home-round-item" style="">
    				    <a data-tooltip-content="<h1>Why I Love the Netflix Redesign</h1><p>Netflix should be applauded for their bold redesign.</p>" href="/articles/why-i-love-the-netflix-redesign/" class="phark phark-link" style="background-image: url(/articles/why-i-love-the-netflix-redesign/netflix-home.png);">Why I Love the Netflix Redesign</a>
					</li>						
    				<li class="home-round-item" style="left: 600px; top: 12px; z-index: 2;">
    				    <a data-tooltip-content="<h1>Now I Have RSS</h1><p>Happy?</p>" href="/articles/now-i-have-rss/" class="phark phark-link" style="background-image: url(/articles/now-i-have-rss/now-i-have-rss-home.png);">Now I Have RSS</a>
    				</li>
    					
    				<li class="home-round-item" style="left: 600px; top: 12px; z-index: 2;">
    				    <a data-tooltip-content="<h1>Five</h1><p>Wow. After five long years, it feels great to have a new site.</p>" href="/articles/five/" class="phark phark-link" style="background-image: url(/articles/five/home-five.png);">Five</a>
    				</li>
    				<?php */ ?>			    				
    			</ul>
    			
    			<p class="more"><a href="/articles/">See all</a></p>
        		
    		</div><!-- /.inner -->
		
		</section><!-- /#latest-articles -->
		
		
		<?php /* ?><section id="links" class="home-row">
		    
		    <div class="inner">
		    
    		    <h1 class="phark">Links</h1>
	    
    		    {exp:channel:entries channel="articles" limit="4" show_future_entries="yes" orderby="date" sort="desc"}

                		{if count == 1}<ol class="articles no-marker easy-clearing">{/if}
                        
                            {if article-format == "Link"}
                	        <li>
                    	        <article>                  	            
                    	            {article-excerpt}
                    	            <p class="meta permalink"><a href="{title_permalink="articles/article"}"><time datetime="{entry_date format="%Y-%m-%d"}">{entry_date format="%M %d %Y"}</time></a></p>

                    	        </article>
                    	    </li>
                    	    {/if}
                	    
                	    {if count == total_results}</ol>{/if}

        		{/exp:channel:entries}
        		
        		<p class="more"><a href="#">See all</a></p>
			
			</div><!-- /.inner -->
		
		</section><!-- /#links --><?php */ ?>
		
		<section id="dribbble" class="home-row">
			
			<div class="inner">
				
				<h1 class="phark">From Dribbble</h1>
				
				<ul class="no-marker">
			
					<?php
				
						/*
							http://martinbean.github.com/dribbble-php/ 
							https://github.com/martinbean/dribbble-php
						*/
					
						//require 'php/dribbble.php';
						require($_SERVER["DOCUMENT_ROOT"]."/php/dribbble.php");

						$dribbble = new Dribbble();

						try {
						    $my_shots = $dribbble->get_player_shots('danielmall');
							$i = 1;
						
							foreach ($my_shots->shots as $shot) {
								if($i <= 4){
									echo '<li class="home-round-item position' . $i . '">';
									echo "\n\t\t\t\t\t\t";
									echo '<a data-tooltip-content="<h1>'. $shot->title .'</h1>" class="phark phark-link" href="' . $shot->url . '" style="background-image: url(' . $shot->image_url .');"></a>';
									echo "\n\t\t\t\t\t";
									echo '</li>';
									echo "\n\t\t\t\t\t";
									$i++;
								}else{
									break;
								}
							}
						}
						catch (DribbbleException $e) {
						    echo 'Error: ' . $e->getMessage();
						}
					
					?>
				</ul>
				
				<p class="more"><a href="http://dribbble.com/danielmall">See all</a></p>
			
			</div><!-- .inner -->
			
		</section><!-- #dribbble -->
    
    <script>document.write('<section id="tweet" class="home-row"><div class="inner"><h1 class="phark">Latest Tweets</h1><div id="tweets">');</script>
		<script>      
			Chirp({
				user:'danielmall', 
				max:3,
				retweets: false,
				replies: false,
				templates: {
					base: '<ul>{{tweets}}</ul>',
					tweet: '<li><div class="animation-clip-container"><article><p>{{html}}</p><p class="meta"><a href="http://twitter.com/danielmall/statuses/{{id_str}}/"><time>{{time_ago}}</time></a></p></article></div></li>'
				}
			});
		</script>
    <script>document.write('</div><p class="more">from <a href="http://twitter.com/danielmall">@danielmall</a></p></div></section>');</script>
		
		<?php /* ?>
		<script>
		document.write('<section id="tweet" class="home-row"><div class="inner"><h1 class="phark">Latest Tweets</h1><div id="tweets"></div><p class="more">from <a href="http://twitter.com/danielmall">@danielmall</a></p></div></section>');
        getTwitters('tweets', { 
            id: 'danielmall', 
            count: 3, 
            enableLinks: true, 
            ignoreReplies: true, 
            clearContents: true,
            template: '<div class="animation-clip-container"><article><p>%text%</p><p class="meta"><a href="http://twitter.com/%user_screen_name%/statuses/%id_str%/"><time datetime="">%time%</time></a></p></article></div>'
			});
        
		</script><?php /* ?>
		
		<?php /* 
		<section id="tweet" class="home-row">
		    <div class="inner"><h1 class="phark">Latest Tweets</h1>
		        <div id="tweets">
		          
		            <?php

                    /**
                     * TWITTER FEED PARSER
                     * 
                     * @version	1.1.1
                     * @author	Jonathan Nicol
                     * @link	http://f6design.com/journal/2010/10/07/display-recent-twitter-tweets-using-php/
                     * 
                     * Notes:
                     * We employ caching because Twitter only allows their RSS feeds to be accesssed 150
                     * times an hour per user client.
                     * --
                     * Dates can be displayed in Twitter style (e.g. "1 hour ago") by setting the 
                     * $twitter_style_dates param to true.
                     * 
                     * Credits:
                     * Hashtag/username parsing based on: http://snipplr.com/view/16221/get-twitter-tweets/
                     * Feed caching: http://www.addedbytes.com/articles/caching-output-in-php/
                     * Feed parsing: http://boagworld.com/forum/comments.php?DiscussionID=4639
                     */
                     
                     /*
                    function display_latest_tweets(
                    	$twitter_user_id,
                    	//$cache_file = '/twitter.txt',
                    	$cache_file = '../_inc/twitter.php',
                    	$tweets_to_display = 3,
                    	$ignore_replies = true,
                    	//$twitter_wrap_open = '<h2>Latest tweets</h2><ul id="twitter">',
                    	$twitter_wrap_open = '<ul>',
                    	$twitter_wrap_close = '</ul>',
                    	//$tweet_wrap_open = '<li><span class="status">',
                    	$tweet_wrap_open = '<li><article><p>',
                    	//$meta_wrap_open = '</span><span class="meta"> ',
                    	$meta_wrap_open = '</p><p class="meta"><time>',
                    	$meta_wrap_close = '</time>',
                    	//$tweet_wrap_close = '</li>',
                    	$tweet_wrap_close = '</p></article></li>',                    	
                    	$date_format = 'g:i A M jS',
                    	$twitter_style_dates = false){

                    	// Seconds to cache feed (1 hour).
                    	$cachetime = 60*60;
                    	// Time that the cache was last filled.
                    	$cache_file_created = ((@file_exists($cache_file))) ? @filemtime($cache_file) : 0;

                    	// A flag so we know if the feed was successfully parsed.
                    	$tweet_found = false;

                    	// Show file from cache if still valid.
                    	if (time() - $cachetime < $cache_file_created) {

                    		$tweet_found = true;
                    		// Display tweets from the cache.
                    		@readfile($cache_file);	

                    	} else {

                    		// Cache file not found, or old. Fetch the RSS feed from Twitter.
                    		$rss = @file_get_contents('http://twitter.com/statuses/user_timeline/'.$twitter_user_id.'.rss');

                    		if($rss) {

                    			// Parse the RSS feed to an XML object.
                    			$xml = @simplexml_load_string($rss);

                    			if($xml !== false) {

                    				// Error check: Make sure there is at least one item.
                    				if (count($xml->channel->item)) {

                    					$tweet_count = 0;

                    					// Start output buffering.
                    					ob_start();

                    					// Open the twitter wrapping element.
                    					$twitter_html = $twitter_wrap_open;

                    					// Iterate over tweets.
                    					foreach($xml->channel->item as $tweet) {

                    						// Twitter feeds begin with the username, "e.g. User name: Blah"
                    						// so we need to strip that from the front of our tweet.
                    						$tweet_desc = substr($tweet->description,strpos($tweet->description,":")+2);
                    						$tweet_desc = htmlspecialchars($tweet_desc);
                    						$tweet_first_char = substr($tweet_desc,0,1);

                    						// If we are not gnoring replies, or tweet is not a reply, process it.
                    						if ($tweet_first_char!='@' || $ignore_replies==false){

                    							$tweet_found = true;
                    							$tweet_count++;

                    							// Add hyperlink html tags to any urls, twitter ids or hashtags in the tweet.
                    							$tweet_desc = preg_replace('/(https?:\/\/[^\s"<>]+)/','<a href="$1">$1</a>',$tweet_desc);
                    							$tweet_desc = preg_replace('/(^|[\n\s])@([^\s"\t\n\r<:]*)/is', '$1<a href="http://twitter.com/$2">@$2</a>', $tweet_desc);
                    							$tweet_desc = preg_replace('/(^|[\n\s])#([^\s"\t\n\r<:]*)/is', '$1<a href="http://twitter.com/search?q=%23$2">#$2</a>', $tweet_desc);

                     							// Convert Tweet display time to a UNIX timestamp. Twitter timestamps are in UTC/GMT time.
                    							$tweet_time = strtotime($tweet->pubDate);	
                     							if ($twitter_style_dates){
                    								// Current UNIX timestamp.
                    								$current_time = time();
                    								$time_diff = abs($current_time - $tweet_time);
                    								switch ($time_diff) 
                    								{
                    									case ($time_diff < 60):
                    										$display_time = $time_diff.' seconds ago';                  
                    										break;      
                    									case ($time_diff >= 60 && $time_diff < 3600):
                    										$min = floor($time_diff/60);
                    										$display_time = $min.' minutes ago';                  
                    										break;      
                    									case ($time_diff >= 3600 && $time_diff < 86400):
                    										$hour = floor($time_diff/3600);
                    										$display_time = 'about '.$hour.' hour';
                    										if ($hour > 1){ $display_time .= 's'; }
                    										$display_time .= ' ago';
                    										break;          
                    									default:
                    										$display_time = date($date_format,$tweet_time);
                    										break;
                    								}
                     							} else {
                     								$display_time = date($date_format,$tweet_time);
                     							}
                     							
                     							$tweet_permalink = $tweet->link;

                    							// Render the tweet.
                    							//$twitter_html .= $tweet_wrap_open.$tweet_desc.$meta_wrap_open.'<a href="http://twitter.com/'.$twitter_user_id.'">'.$display_time.'</a>'.$meta_wrap_close.$tweet_wrap_close;
                    							$twitter_html .= $tweet_wrap_open.$tweet_desc.$meta_wrap_open.'<a href="'.$tweet_permalink.'">'.$display_time.'</a>'.$meta_wrap_close.$tweet_wrap_close;                    							

                    						}

                    						// If we have processed enough tweets, stop.
                    						if ($tweet_count >= $tweets_to_display){
                    							break;
                    						}

                    					}

                    					// Close the twitter wrapping element.
                    					$twitter_html .= $twitter_wrap_close;
                    					echo $twitter_html;
                    					

                    					// Generate a new cache file.
                    					$file = @fopen($cache_file, 'w');

                    					// Save the contents of output buffer to the file, and flush the buffer. 
                    					@fwrite($file, ob_get_contents()); 
                    					@fclose($file); 
                    					ob_end_flush();

                    				}
                    			}
                    		}
                    	} 
                    	// In case the RSS feed did not parse or load correctly, show a link to the Twitter account.
                    	if (!$tweet_found){
                    		echo $twitter_wrap_open.$tweet_wrap_open.'Oops, my twitter feed is unavailable right now. '.$meta_wrap_open.'<a href="http://twitter.com/'.$twitter_user_id.'">Follow me on Twitter</a>'.$meta_wrap_close.$tweet_wrap_close.$twitter_wrap_close;
                    	}
                    }

                    display_latest_tweets('danielmall'); */

                    ?>
		        <?php /* ?>  
		        </div>
		        <p class="more">from <a href="http://twitter.com/danielmall">@danielmall</a></p><?php */ ?>
		    </div>
		</section><!-- #tweet -->
			
		
	</div><!-- /#content -->
	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/footer.php"); echo "\n"; ?>
    
	
<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/close.php"); echo "\n"; ?>