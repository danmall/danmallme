<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head>
    <title>&ldquo;Photoshop Clusters,&rdquo; an article by Dan Mall</title>
    <meta name="description" content="Photoshop Clusters" />
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?>
    
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/jsReferenceHead.php"); echo "\n"; ?>
    <link rel="stylesheet" href="photoshop-clusters.css" />
</head>

<body id="article" class="articles">	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>
	
	<div id="article-area-wrap">
	    
	    <section id="photoshop-clusters">
	        
	        <hgroup>
	            <h1>Photoshop Clusters</h1>
	            <h2>An idea for configuring Photoshop</h2>
	        </hgroup>
	        
	        <p>When I get to work every day, opening <a href="http://www.adobe.com/products/photoshop.html">Adobe Photoshop</a> is one of the first things I do. I usually don&rsquo;t close it until I leave for the day. I use it consistently and still learn something new about it every day. I&rsquo;m amazed at how much smarts are actually built into it.</p> 

            <p>That&rsquo;s not to say it&rsquo;s without flaws. Photoshop is a beast. The application has been through <a href="http://en.wikipedia.org/wiki/Adobe_Photoshop_release_history">17 different versions</a>. It&rsquo;s heavy, and each new version all but requires a nearly maxed out machine to run. I&rsquo;d imagine there&rsquo;s a lot of legacy bloat in the app. While I&rsquo;d love to see Adobe start from scratch and build a lean, mean, new Photoshop, that might not be possible for a number of reasons. </p>

            <p>In lieu of that, here&rsquo;s an idea: would it be possible to create custom builds at startup? I&rsquo;ll call them &ldquo;clusters.&rdquo; When you launch the app, you might see something like this:</p>
            
            <figure>
                <img src="photoshop-clusters.png" alt="Options for Photoshop clusters" />
            </figure>

            <p>The default clusters could match up to the most common use cases for Photoshop: Design, Illustration, Photography, Architecture, and many more. You&rsquo;d also be able to create your own custom clusters, so that you could quickly retain the Photoshop settings that you like.</p>

            <p>This could provide for some fast Photoshop experiences: lighter, more nimble builds that are easily rebootable and potentially even reduce crashes. It also could extend to the other Adobe apps, as well as being easily sharable across multiple machines (home, work, etc.) and even to other people.</p> 

            <p>What do you think? Is this possible? A bad idea? Is anyone out there doing this already, either with Photoshop or another app?</p>
			
			<small>* This article has been graciously <a href="http://www.azoft.com/people/seremina/edu/ph_clusters.html">translated into Romanian</a> by Alexandra Seremina, <a href="http://www.leiste.de/science/photoshop-clusters">translated into German</a> by Alexey Gnatuk, <a href="http://samostroika.com/photoshop-clusters/">translated into Russian</a> by Samostroika, and <a href="http://cheap.de/science/photoshop-klastry">translated into Polish</a> by Katia Osipova.</small>
	    
	    </section><!-- #photoshop-clusters -->	    
	    
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
                    var disqus_identifier = 'photoshop-clusters';
                    var disqus_url = 'http://danielmall.com/articles/photoshop-clusters/';
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
        	        <time datetime="2011-06-09T06:57:00">Published July 13, 2011 at 7:38 <abbr title="Ante Meridian">AM</abbr></time>
    	        </section><!-- /#article-info -->
    	        
    	        
    	        <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/carbon.php"); echo "\n"; ?>
	        
	        
    	    </div><!-- /.sub -->
    	    
    	    
    	</div><!-- #comments-wrap -->
	    
	        
	</div><!-- #comments -->
	
	
	<div class="wrap">
    	
    	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>
    	
    	
    </div><!-- #wrap -->
    
	
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>