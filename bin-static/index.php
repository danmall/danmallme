<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/doctype.php"); echo "\n"; ?>
<head>
    <title>Dan Mall  //  Creative Direction &bull; Art Direction &bull; Design &bull; Strategy</title>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/meta.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/cssReference.php"); echo "\n"; ?>
    
    <!-- Thanks, @rem: http://remysharp.com/2007/05/18/add-twitter-to-your-blog-step-by-step/ -->
    <script src="http://twitterjs.googlecode.com/svn/trunk/src/twitter.min.js"></script>
    
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/jsReference.php"); echo "\n"; ?>
    
</head>

<body class="home" id="home">	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"); echo "\n"; ?>
	
	<div id="content" class="easy-clearing">
	    
	    <section id="work" class="home-row">
	        
	        <div class="inner">
		    
		        <h1 class="phark">Featured Work</h1>
		
    			<ul class="no-marker">				
    				<li class="home-round-item" style="left: 125px; top: 1px; z-index: 2;">
    				    <a data-tooltip-content="<h1>Morsel</h1><p>Your daily step toward better health.</p>" href="/work/morsel/" class="phark" style="background-image: url(/i/screen/home/morsel2.jpg);">Morsel</a>
    				</li>
    				<li class="home-round-item" style="left: 305px; top: 6px; z-index: 2;">
    				    <a data-tooltip-content="<h1>Housing Works</h1><p>Housing prevents AIDS. Housing Saves Lives.</p>" href="/work/housing-works/" class="phark" style="background-image: url(/i/screen/home/housing-works.jpg);">Transformers</a>
    				</li>
    				<li class="home-round-item" style="left: 444px; top: 2px; z-index: 1;">
    				    <a data-tooltip-content="<h1>healthymagination</h1><p>A shared commitment to better health. Together.</p>" href="/work/healthymagination/" class="phark" style="background-image: url(/i/screen/home/healthymagination3.png);">healthymagination</a>
    				</li>								
    				<?php /* ?><li class="home-round-item" style="left: 444px; top: 12px;">
    				    <a href="/work/design-swap/" class="phark" style="background-image: url(/i/screen/home/design-swap.gif);">Design Swap</a>
    				</li><?php */ ?>
    				
    				<li class="home-round-item" style="left: 600px; top: 0; z-index: 3;">
    				    <a data-tooltip-content="<h1>JetWaders</h1><p>Modern-day jelly shoes.</p>" href="/work/jetwaders/" class="phark" style="background-image: url(/i/screen/home/jetwaders.jpg);">JetWaders</a>
    				</li>		
    				
    			</ul>
    			
    			<p class="more"><a href="/work/">See all</a></p>
    			
    		</div><!-- /.inner -->
    		
	
		</section><!-- /#work -->
				

		<section id="latest-articles" class="home-row">
		    
		    <div class="inner">
		    
    		    <h1 class="phark">Latest Articles</h1>
	    
    		    <ul class="no-marker">				
    				<li class="home-round-item" style="left: 100px; top: 15px;">
    				    <a href="/work/morsel/" class="phark" style="background-image: url(/i/screen/home/design-swap.gif);">Morsel</a>
    				</li>
    				<?php /* ?><li class="home-round-item" style="left: 285px; top: 2px;">
    				    <a href="/work/healthymagination/" class="phark" style="background-image: url(/_assets/home/morsel.jpg);">healthymagination</a>
    				</li>								
    				<li class="home-round-item" style="left: 444px; top: 12px;">
    				    <a href="/work/design-swap/" class="phark" style="background-image: url(/_assets/home/transformers.jpg);">Design Swap</a>
    				</li>				
    				<li class="home-round-item" style="left: 600px; top: 6px;">
    				    <a href="/work/transformers/" class="phark" style="background-image: url(/_assets/home/healthymagination.jpg);">Transformers</a>
    				</li><?php */ ?>			    				
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
		
		<script>
		document.write('<section id="tweet" class="home-row"><div class="inner"><h1 class="phark">Latest Tweets</h1><div id="tweets"></div><p class="more">from <a href="http://twitter.com/danielmall">@danielmall</a></p></div></section>');
        getTwitters('tweets', { 
            id: 'danielmall', 
            count: 3, 
            enableLinks: true, 
            ignoreReplies: true, 
            clearContents: true,
            template: '<article><p>%text%</p><p class="meta"><a href="http://twitter.com/%user_screen_name%/statuses/%id%/"><time datetime="">%time%</time></a></p></article>'
        });
		</script>
			
		
	</div><!-- /#content -->
	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/footer.php"); echo "\n"; ?>
    
	
<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/close.php"); echo "\n"; ?>