<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/doctype.php"); echo "\n"; ?>
<head>
    <title>&ldquo;Why I Love the Netflix Redesign,&rdquo; an article by Dan Mall</title>
    <meta name="description" content="Why I Love the Netflix Redesign" />
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/meta.php"); echo "\n"; ?>
    
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/cssReference.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/jsReference.php"); echo "\n"; ?>
    <link rel="stylesheet" href="netflix.css" />
</head>

<body id="article" class="articles">	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"); echo "\n"; ?>
	
	<div id="article-area-wrap">
	    
	    <div id="netflix">
	        
	        <h1 class="phark">Why I Love the Netflix Redesign</h1>
	        
	        <img src="netflix.jpg" alt="The new Netflix homepage" />
	    
    	    <p>Yesterday, <a href="http://blog.netflix.com/2011/06/new-look-and-feel-for-netflix-website.html">Netflix launched a new version of their homepage</a>. I <a href="https://twitter.com/#!/danielmall/status/78575614692573184">casually mentioned</a> my affinity for it, and found a lot of opposite reactions to my own. </p>

            <p>I&rsquo;ll be honest: visually, it&rsquo;s not great. Wayfinding based on rollover feels dated, at least the way it&rsquo;s implemented here. Rating movies and accessing detail pages seem to be much more difficult. </p>

            <p>But the thing that gets me excited, the thing that&rsquo;s more courageous than a lot of redesigns I&rsquo;ve seen in a long time is what Netflix has prioritized. They sacrificed many of the things that make a good visual design&mdash;typography, whitespace, composition, and more&mdash;and optimized for what has made Netflix last as a brand: <em>the ability to easily find and watch movies</em>. This page is packed with movies. On a conceptual level, that&rsquo;s brilliantly obvious and obviously brilliant.</p>

            <p>Fixing bugs is easy. Changing interaction models from rollover to click is cake. Fixing a broken concept is much harder. </p>

            <p>It&rsquo;s incredibly easy to react to what&rsquo;s in front of your eyes. It&rsquo;s much more difficult to perceive intent. Try to see past what&rsquo;s on the surface; find the reasons behind the output, the chain of events that led to what you see.</p> 

            <p>Could this redesign have been as good while still incorporation the tenets of beautiful visual design and useful interaction design? Absolutely. But we all know that redesigns come with compromises, especially for a site with this scale of traffic. Timelines, budget, resources, and many other factors often add to tarnished results that make us unhappy as creators. However, Netflix seems to have overcome those hurdles to produce a site that lets the new concept shine through, even if the visuals have to catch up. That&rsquo;s no small feat, and I believe they should be applauded for it.</p>

            <p>What about you? Agree? Disagree?</p>
    	    
    	</div><!-- #netflix -->
	    
	    
	</div><!-- /#article-area-wrap -->
	
	
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
                    var disqus_identifier = 'why-i-love-the-netflix-redesign';
                    var disqus_url = 'http://danielmall.com/articles/why-i-love-the-netflix-redesign/';
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
        	        <time datetime="2011-06-09T06:57:00">Published June 9, 2011 at 6:57 <abbr title="Ante Meridian">AM</abbr></time>
    	        </section><!-- /#article-info -->
    	        
    	        
    	        <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/carbon.php"); echo "\n"; ?>
	        
	        
    	    </div><!-- /.sub -->
    	    
    	    
    	</div><!-- #comments-wrap -->
	    
	        
	</div><!-- #comments -->
	
	
	<div class="wrap">
    	
    	<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/footer.php"); echo "\n"; ?>
    	
    	
    </div><!-- #wrap -->
    
	
<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/close.php"); echo "\n"; ?>