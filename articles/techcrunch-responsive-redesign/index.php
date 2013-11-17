<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head profile="http://gmpg.org/xfn/11">
    <title>&ldquo;TechCrunch: A Responsive Redesign,&rdquo; an article by Dan Mall</title>
    <meta name="description" content="The story of the new responsive TechCrunch." />
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?>
    
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>  	
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/jsReferenceHead.php"); echo "\n"; ?>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600" />
    <link rel="stylesheet" href="techcrunch-responsive-redesign.css" />
    
    <!-- Facebook -->
    <meta property="og:title" content="TechCrunch: A Responsive Redesign" />
    <meta property="og:description"content="The story of the new responsive TechCrunch."/>	
    <meta property="og:url" content="http://danielmall.com/articles/techcrunch-responsive-redesign/" />
    <meta property="og:image" content="http://danielmall.com/articles/techcrunch-responsive-redesign/techcrunch-responsive-redesign.png" />
    
    
</head>

<body id="article" class="articles">	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>
	
	<div id="article-area-wrap">
	    
	    <section id="techcrunch-responsive-redesign" class="clearfix">
			
			<h1 class="article-title">TechCrunch: A Responsive Redesign</h1><!-- .article-title -->

            <section class="chron">

                <article class="event">
                    <h1 class="event-header">Initial Contact</h1>
                    <p class="event-date">4 December 2012</p>
                    <p>I got an email from Josh Clark, an internet friend that I've never actually met before. Josh told me that he had needs a designer for a few projects coming up and that he'd love to work together, which was music to my ears. We continued to flatter each other for a few emails as we discussed rates and timelines, and Josh told me about the potential all-star team of interaction designer <a href="https://twitter.com/jenniferbrook">Jennifer Brook</a>, front-end designer <a href="http://bradfrostweb.com/">Brad Frost</a>, mobile strategy consultant <a href="http://jonathanstark.com/">Jonathan Stark</a>, and project manager <a href="http://www.linkedin.com/in/kristinafrantz">Kristina Frantz</a>. Sold!</p>
                </article><!-- .event -->

                <article class="event">
                    <h1 class="event-header">Regroup</h1>
                    <p class="event-date">10 December 2012</p>
                    <p>We chat for the first time as a team about how we could work together. Josh writes an <em>amazing</em> proposal, and TechCrunch is interested in talking with us further.</p>
                </article><!-- .event -->

                <article class="event">
                    <h1 class="event-header">Snacks</h1>
                    <p class="event-date">19 December 2012</p>
                    <p>I go to New York to meet with Josh. We chat at <a href="http://www.onegirlcookies.com/">One Girl Cookies</a> over cupcakes and cookies, the way proper meetings should go.</p>
                </article><!-- .event -->

                <article class="event">
                    <h1 class="event-header">Prescreen</h1>
                    <p class="event-date">21 December 2012</p>
                    <p>Our first call with TechCrunch as a group. We talked about this like how we&rsquo;d work together as a big team, how quickly we can be iterative, how invested they are in trying to achieve a great design, and how possible it was to get quickly into code.</p>
                </article><!-- .event -->

            </section><!-- .chron -->           
	    
	    </section><!-- #techcrunch-responsive-redesign -->	    
	    
	</div><!-- /#article-area-wrap -->
	
    <?php

        echo readNext('The Responsive Mobile Entertainment Weekly Site', '/articles/responsive-mobile-entertainment-weekly/');

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
                    var disqus_identifier = 'techcrunch-responsive-redesign';
                    var disqus_url = 'http://danielmall.com/articles/techcrunch-responsive-redesign/';
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
	        
    	        <section id="article-info">
        	        <header>
        	            <h2>Article Info</h2>
        	        </header>
        	        <time datetime="2013-10-05T15:06:56">Published Oct 5, 2013 at 3:06 <abbr title="Post Meridian">PM</abbr></time>
    	        </section><!-- /#article-info -->
    	        
    	        
    	        <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/carbon.php"); echo "\n"; ?>
	        
	        
    	    </div><!-- /.sub -->
    	    
    	    
    	</div><!-- #comments-wrap -->
	    
	        
	</div><!-- #comments -->
	
	
	<div class="wrap">
    	
    	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>
    	
    	
    </div><!-- #wrap -->
	    
	
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>