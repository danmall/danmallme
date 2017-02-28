<?php 
header("HTTP/1.1 301 Moved Permanently"); 
header("Location: http://v3.danielmall.com/articles/how-to-build-an-app/"); 
?>
<?php

    function jitter(){  

        $output = 'class="jitter" style="';

        // offset
        $output .= 'left: ';
        $output .= rand(-30, 30) . 'px; ';

        // rotation
        $output .= '-webkit-transform: rotate('. rand(-1, 1) . 'deg);"';

        echo $output; 

    }


?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head profile="http://gmpg.org/xfn/11">
    <title>&ldquo;How to Build an App,&rdquo; an article by Dan Mall</title>
    <meta name="description" content="Creating an app in public. Maybe." />
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?>
    
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>  	
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/jsReferenceHead.php"); echo "\n"; ?>
    <link rel="stylesheet" href="how-to-build-an-app.css" />
    
    <!-- Facebook -->
    <meta property="og:title" content="How to Build an App" />
    <meta property="og:description"content="Creating an app in public. Maybe."/>	
    <meta property="og:url" content="http://danielmall.com/articles/how-to-build-an-app/" />
    <meta property="og:image" content="http://danielmall.com/articles/how-to-build-an-app/how-to-build-an-app-fb.jpg" />
    
    
</head>

<body id="article" class="articles">	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>
	
	<div id="article-area-wrap">
	    
	    <section id="how-to-build-an-app" class="clearfix">
			
			<h1 class="article-title">How to Build an App*</h1>
            <p class="tumblr-url">* (.tumblr.com)</p>
			
            <p>We&rsquo;re trying something.</p>

            <p <?php jitter(); ?>>My friend <a href="http://twitter.com/jkosoy">Jamie</a> from <a href="http://arbitrary.io/">Arbitrary</a> and I want to build an app that we&rsquo;ve been talking about for a while. We&rsquo;ve worked together before, first at <a href="http://bigspaceship.com/">Big Spaceship</a> and a lot more afterwards. We&rsquo;re both busy and making this app on the side of client service and life in general, and we really want to get it done.</p>

            <p <?php jitter(); ?>>So, in an effort to create both interesting output and process as well as hold ourselves accountable, we&rsquo;ve decided to work entirely in public (to <a href="http://chriscoyier.net/2012/09/23/working-in-public/">borrow a term from our friend Chris Coyier</a>).</p>

            <p <?php jitter(); ?>>You can follow along here: <strong><a href="http://howtobuildanapp.tumblr.com/">howtobuildanapp.tumblr.com</a></strong></p>

            <p <?php jitter(); ?>>We&rsquo;ll try to document as much as we can. All of our discussions will be recorded and broadcast through Google Hangout. We&rsquo;ll post every email, <abbr title="Instant Message">IM</abbr> conversation, Basecamp post, or whatever that we make. We&rsquo;ll likely change directions often. We&rsquo;ll probably argue too. This will be incredibly raw: no editing whatsoever. This will not be for the faint of heart.</p>

            <p class="last">Honestly, we don&rsquo;t even know if we&rsquo;ll make it to the finish line. Gosh, I hope we do. Hopefully, people will like the app. Hopefully, the journey is interesting. Hopefully, we can make some money when it&rsquo;s all done. Hopefully, blah blah blah. Here goes nothing.</p>
	    
	    </section><!-- #how-to-build-an-app -->	    
	    
	</div><!-- /#article-area-wrap -->
	
    <?php

        echo readNext('Prequalifying Clients', '/articles/prequalifying-clients/');

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
                    var disqus_identifier = 'how-to-build-an-app';
                    var disqus_url = 'http://danielmall.com/articles/how-to-build-an-app/';
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
        	        <time datetime="2013-08-22T10:39:00">Published Aug 22, 2013 at 10:39 <abbr title="Ante Meridian">AM</abbr></time>
    	        </section><!-- /#article-info -->
    	        
    	        
    	        <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/carbon.php"); echo "\n"; ?>
	        
	        
    	    </div><!-- /.sub -->
    	    
    	    
    	</div><!-- #comments-wrap -->
	    
	        
	</div><!-- #comments -->
	
	
	<div class="wrap">
    	
    	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>
    	
    	
    </div><!-- #wrap -->
	    
	
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>