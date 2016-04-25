<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head profile="http://gmpg.org/xfn/11">
    <title>&ldquo;Selling Design Systems,&rdquo; an article by Dan Mall</title>
    <meta name="description" content="Prepping Design Systems" />
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?>
    
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/jsReferenceHead.php"); echo "\n"; ?>    
    <link href='http://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="/articles/_vanilla/vanilla.css" />
    <link rel="stylesheet" href="selling-design-systems.css" />

	<!-- Facebook -->
    <meta property="og:title" content="Selling Design Systems" />
    <meta property="og:description" content="How to convince your boss that a design system is a good idea."/>	
    <meta property="og:url" content="http://danielmall.com/articles/selling-design-systems/" />
    <meta property="og:image" content="http://danielmall.com/articles/selling-design-systems/home-thumb.png" />
    
</head>

<body id="article" class="articles">	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>
	
	<div id="article-area-wrap">
			
	    <section class="clearfix wrap vanilla">			
			
			<h1 class="article-header-title">Selling Design Systems</h1>
			
			<p>A few weeks ago, <a href="http://superfriend.ly/">SuperFriendly</a> kicked off a project with the <a href="http://adventist.org">General Conference of Seventh-day Adventists</a> to create a design system that would allow any of the 70,000+ churches; 260,000 employees; 63 publishing houses; 15 media centers; and others ministries, partners, and subsidiaries to spin up websites as quickly as possible. But even though we kicked off recently, the project conversation has been going on for over a year.</p>

            <p>With amazing examples of public design systems like Google&rsquo;s <a href="#">Material Design</a> and Salesforce&rsquo;s <a href="#">Lightning Design System</a>, it&rsquo;s easy to forget that many people still need to be convinced of the value a design system can have for an organization. </p>

            <p><a href="http://twitter.com/designerbrent/">Brent Hardinge</a>, web manager for the General Conference, knew that he&rsquo;d have to do some persuading before we&rsquo;d get the green light to work on this together. He took a few days to collect all the sites that have been created at the building he works in—not even in the rest of the organization—over the last year. He took that collection of over 100 sites and printed each out as a 3 in. &times; 3 in. thumbnail, then mounted the thumbnails on 4 mounting boards. </p>

        </section><!-- .wrap.vanilla -->

        <div class="tiles-image image-row" style="background: #eaeaea;">
            <div class="image-row-image easy-clearing margin-bottom">
                <img src="tiles.jpg" alt="" />
            </div><!-- .easy-clearing -->
        </div><!-- .image-row -->
        
        <div class="boards-image image-row" style="background: #222;">
            <div class="image-row-image easy-clearing margin-bottom">
                <img src="boards.jpg" alt="" />
            </div><!-- .easy-clearing -->
        </div><!-- .image-row -->

        <section class="wrap vanilla">

            <p>He put those boards in front of the powers-that-be at the organization as an example of all the wasted money and effort that goes into making sites from scratch, one-by-one, needlessly reinventing the wheel every time. He used them to illustrate how fractured an organization can look when there&rsquo;s no overarching system to govern the output. He presented a plan to prevent that very variance from expanding, year after year. </p>

            <p>He walked out with the budget he needed for us to help him create a design system that can set them up for success. </p>

            <p>If you&rsquo;re having trouble convincing your powers-that-be that a design system can come in handy for your organization, follow Brent&rsquo;s lead and do a little legwork to really demonstrate where a design system can help. You&rsquo;ll walk out with your approval and budget in a heartbeat. </p>

            <p>If you&rsquo;re interested in hearing more about our project with the Adventist church, Brent has set up <a href="https://www.adventist.io/">a product blog</a> where he&rsquo;s writing about the creation of <abbr>ALPS</abbr>, the new Adventist Living Pattern System we&rsquo;re creating together. Feel free to check out these posts:</p>

            <ul>
                <li>&ldquo;<a href="https://www.adventist.io/2016/03/its-happening/">It&rsquo;s Happening</a>,&rdquo; an introduction to the project</li>
                <li>&ldquo;<a href="https://www.adventist.io/2016/04/who-we-are-building-for/">Who We Are Building For</a>,&rdquo; an overview of the personas we&rsquo;re building&mdash;and not building&mdash;for</li>
                <li>&ldquo;<a href="https://www.adventist.io/2016/04/measuring-what-we-do/">Measuring What We Do</a>,&rdquo; objectives and key results for this project</li>
            </ul>


            <?php /* ?>
            <footer class="footnote">
                <p>Also published on <a href="#">Medium</a>.</p>
            </footer><!-- .footnote -->
            <?php */ ?>
			
	    </section><!-- .vanilla -->	  	
	    
	</div><!-- /#article-area-wrap -->	

	<?php

        echo readNext('Oil Change &amp; Pizza', '/articles/oil-change-pizza/');

    ?>
	
	<div id="comments">
	
	    <?php /* ?><section id="article-meta">

	        <header class="easy-clearing">
	            <h1>{if comment_total == 0}No comments <a href="#comment-form">yet</a>&hellip;{if:else}{comment_total} Comments{/if}</h1>
	            <p>Posted in {categories backspace="2"}<a href="{path='channel/index'}">{category_name}</a>, {/categories}</p>
	        </header>
        
	    </section><!-- /#article-meta --><?php */ ?>	    	    
	    
	    <div id="comments-wrap">                
            
            <div class="main">
                
                <div id="disqus_thread"></div>
                <script>
                    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                    var disqus_shortname = 'danielmall'; // required: replace example with your forum shortname

                    // The following are highly recommended additional parameters. Remove the slashes in front to use.
                    var disqus_identifier = 'selling-design-systems';
                    var disqus_url = 'http://danielmall.com/articles/selling-design-systems/';
                    var disqus_developer = 1;

                    /* * * DON'T EDIT BELOW THIS LINE * * */
                    (function() {
                        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                        dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
                        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                    })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                <a href="http://disqus.com" class="dsq-brlink">blog comments powered by <span class="logo-disqus">Disqus</span></a>
                
            </div><!-- /.main -->
	    
	    
    	    <div class="sub">
	        
    	        <section class="article-info">
        	        <header>
        	            <h2>Article Info</h2>
        	        </header>
        	        <time datetime="2016-04-25T12:57:00">Published April 25, 2016 at 12:57 <abbr title="Post Meridian">PM</abbr></time>
    	        </section><!-- /.article-info -->
    	        
    	        
    	        <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/carbon.php"); echo "\n"; ?>
	        
	        
    	    </div><!-- /.sub -->
    	    
    	    
    	</div><!-- #comments-wrap -->
	    
	        
	</div><!-- #comments -->
	
	
	<div class="wrap">
    	
    	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>
    	
    	
    </div><!-- #wrap -->

    <script src="jquery.fitvids.js"></script>
    <script>
		$(document).ready(function(){
			// Target your .container, .wrapper, .post, etc.
			$('.video-container').fitVids();
		});
    </script>
    
	
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>
