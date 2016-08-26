<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head profile="http://gmpg.org/xfn/11">
    <title>&ldquo;SuperBooked,&rdquo; an article by Dan Mall</title>
    <meta name="description" content="SuperBooked" />
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?>
    
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/jsReferenceHead.php"); echo "\n"; ?>    
    <link href='http://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="/articles/_vanilla/vanilla.css" />
    <link rel="stylesheet" href="superbooked.css" />

    <!-- Trying @adactio's meta: https://adactio.com/journal/9881  -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@danielmall">
    <meta name="twitter:url" property="og:url" content="http://danielmall.com/articles/superbooked/">
    <meta name="twitter:title" property="og:title" content="SuperBooked">
    <meta name="twitter:description" property="og:description" content="Announcing SuperBooked, a service that helps you find work with a little help from your friends.">
    <meta name="twitter:image" property="og:image" content="http://danielmall.com/articles/superbooked/home-thumb.png">
    
</head>

<body id="article" class="articles">	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>
	
	<div id="article-area-wrap">
			
	    <section class="clearfix wrap vanilla">			
			
			<h1 class="article-header-title">
                <svg class="superbooked-article-title" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 435.18 91.93" aria-labelledby="superbooked-article-title-text"><defs><style>.cls-1{fill:#aea6cc;}.cls-2{fill:#834dcd;}</style></defs><title id="superbooked-article-title-text">SuperBooked</title><path class="cls-1" d="M293.48 56.2h-18.48a20.5 20.5 0 0 1 0-41h18.46a20.5 20.5 0 0 1 .02 41zm-18.48-34a13.5 13.5 0 0 0 0 27h18.46a13.5 13.5 0 0 0 0-27h-18.46z"/><path class="cls-2" d="M0 37.88h14c.36 3.67 2 6.7 8.14 6.7 4.25 0 6.62-2.09 6.62-5.11s-1.94-4-8.14-5c-14.54-1.73-19.44-6-19.44-16.42.04-9.27 7.68-16.05 19.99-16.05s19.37 5.2 20.31 16.07h-13.69c-.5-3.67-2.59-5.54-6.62-5.54s-6 1.8-6 4.39c0 2.88 1.58 4.18 8 5 13 1.44 19.73 4.82 19.73 16 0 9.43-7.49 17.14-20.74 17.14-14.38.02-21.73-6.06-22.16-17.18zM47 41.12v-24.56h12.9v22.44c0 4.25 1.66 6.34 5.33 6.34 3.89 0 6.41-2.3 6.41-7.13v-21.65h12.89v37.66h-12.89v-5.83c-2 3.89-5.69 6.7-12 6.7-7.22-.01-12.64-4.47-12.64-13.97zM90.72 16.56h12.89v5.62a13.29 13.29 0 0 1 11.74-6.62c8.79 0 15.91 6.63 15.91 19.51v.58c0 13-7.13 19.44-16 19.44-5.69 0-9.79-2.66-11.67-6.41v18.14h-12.87v-50.26zm27.43 19.08v-.57c0-6.62-2.88-9.79-7.42-9.79s-7.49 3.38-7.49 9.72v.58c0 6.41 2.81 9.65 7.49 9.65s7.42-3.4 7.42-9.59zM133.56 35.86v-.58c0-12.1 9-19.73 20.38-19.73 10.3 0 19.15 5.91 19.15 19.44v3.38h-26.5c.36 5 3.24 7.85 7.85 7.85 4.25 0 6-1.94 6.55-4.46h12.1c-1.15 8.5-7.71 13.32-19.08 13.32-11.81 0-20.45-6.91-20.45-19.22zm27-4.75c-.22-4.54-2.45-7.06-6.62-7.06-3.89 0-6.55 2.52-7.2 7.06h13.83zM177.19 16.56h12.89v7.44c2.38-5.62 6.34-8.06 12.17-8v12c-7.85-.22-12.17 2.23-12.17 8.28v17.94h-12.89v-37.66zM207.72 2.74h23c12.14 0 17.28 5.47 17.28 13.46v.29c0 5.76-3 9.58-8.71 11.09 6.34 1.08 10.3 4.9 10.3 12v.29c0 9.22-6 14.33-18.72 14.33h-23.15v-51.46zm20 20.45c4.61 0 6.34-1.58 6.34-5.26v-.29c0-3.53-1.87-5.11-6.34-5.11h-5.62v10.66h5.62zm.5 21.17c4.68 0 6.84-2.16 6.84-6v-.27c0-3.89-2.09-5.9-7.27-5.9h-5.69v12.17h6.12zM252.36 35.86v-.58c0-12.1 9-19.73 20.67-19.73s20.51 7.45 20.51 19.37v.58c0 12.24-9 19.59-20.59 19.59s-20.59-7.09-20.59-19.23zm28.08-.22v-.57c0-6.34-2.52-9.86-7.42-9.86s-7.49 3.38-7.49 9.72v.57c0 6.48 2.52 10 7.49 10s7.42-3.59 7.42-9.86zM318.1 0h12.9v31.47l10.15-14.91h13.39l-12.31 16.92 13.32 20.74h-14.4l-10.15-16.49v16.49h-12.9v-54.22zM353 35.86v-.58c0-12.1 9-19.73 20.38-19.73 10.3 0 19.15 5.91 19.15 19.44v3.38h-26.53c.36 5 3.24 7.85 7.85 7.85 4.25 0 6-1.94 6.55-4.46h12.1c-1.15 8.5-7.71 13.32-19.08 13.32-11.83 0-20.42-6.91-20.42-19.22zm27-4.75c-.22-4.54-2.45-7.06-6.62-7.06-3.89 0-6.55 2.52-7.2 7.06h13.82zM394.71 35.79v-.58c0-12.82 7.06-19.66 16-19.66 5.9 0 9.43 2.52 11.59 6.34v-21.89h12.89v54.22h-12.9v-6.12a12.69 12.69 0 0 1-11.74 7c-8.71-.02-15.84-6.28-15.84-19.31zm27.94-.22v-.57c0-6.34-2.66-9.72-7.42-9.72s-7.42 3.24-7.42 9.79v.58c0 6.34 2.81 9.58 7.27 9.58 4.69-.01 7.57-3.23 7.57-9.66zM254.9 91.93a21.14 21.14 0 0 1 40.14 0h17.5a38.15 38.15 0 0 0-75.14 0h17.5z"/></svg>         
            </h1>
			
			<p>A year after I started <a href="http://superfriend.ly/">SuperFriendly</a>, I published <a href="/articles/superfriendly-annual-report-2012/">an annual report</a> that featured some data about the business. My favorite stat from that: of the 35 projects we did that year, 17 of them (49%) came through word of mouth from friends. </p>

            <p>Fast forward to now: 63 of SuperFriendly&rsquo;s 82 projects (76%) over the last 5 years have come through friends. For 2016, 9 out of the 10 SuperFriendly projects (90%) have come through friends.</p>

            <p>When I ask the people running the agencies and shops I think are incredibly <a href="/articles/oil-change-pizza/" title="&ldquo;Oil Change &amp; Pizza,&rdquo; an article about good positioning">well-positioned</a>, they generally confirm that a good portion of their work comes from word of mouth.</p>

            <p>Every freelancer and agency Slack channel and Basecamp account I&rsquo;m in has a <code>#jobs</code> channel or section where people can pass around great work to the people they trust.</p>

            <p>When you need a good web designer&mdash;or plumber or place to eat&mdash;you might ask a friend who they&rsquo;d recommend.</p>

            <p>A few years ago, I shared this premise with my friend <a href="https://twitter.com/philipzaengle">Phil</a>, and we decided to build something that helped people better do what they already do: ask friends for recommendations and pass work around to people they already trust. </p>

            <p>Today, we&rsquo;re announcing <strong class="superbooked-title"><a href="http://superbooked.com/">SuperBooked</a></strong>, a service that helps you find work with a little help from your friends. I&rsquo;m so grateful to Phil Zaengle, <a href="https://twitter.com/jesseschutt">Jesse Schutt</a>, <a href="https://twitter.com/drknlsn">Derek Nelson</a>, <a href="https://twitter.com/pishdeluxe">Mary van Ogtrop</a>, and <a href="https://twitter.com/jacobzaengle">Jacob Zaengle</a> for all of their incredible work to get us to this point.</p>

            <p>If you&rsquo;re interested in kicking the tires, join the waiting list and we&rsquo;ll get you in as soon as we&rsquo;re sure the engine is purring.</p>

            <footer class="footnote">
                <p>Also published on <a href="https://medium.com/@danielmall/announcing-superbooked-b87550b58cbd#.34u7ixc4p">Medium</a>.</p>
            </footer><!-- .footnote -->
			
	    </section><!-- .vanilla -->	  	
	    
	</div><!-- /#article-area-wrap -->	

	<?php

        echo readNext('Researching Design Systems', '/articles/researching-design-systems/');

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
                    var disqus_identifier = 'superbooked';
                    var disqus_url = 'http://danielmall.com/articles/superbooked/';
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
        	        <time datetime="2016-08-26T13:09:00">Published August 26, 2016 at 1:09 <abbr title="Post Meridian">PM</abbr></time>
    	        </section><!-- /.article-info -->
    	        
    	        
    	        <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/carbon.php"); echo "\n"; ?>
	        
	        
    	    </div><!-- /.sub -->
    	    
    	    
    	</div><!-- #comments-wrap -->
	    
	        
	</div><!-- #comments -->
	
	
	<div class="wrap">
    	
    	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>
    	
    	
    </div><!-- #wrap -->
    
	
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>
