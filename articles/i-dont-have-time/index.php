<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head profile="http://gmpg.org/xfn/11">
    <title>&ldquo;I don&rsquo;t have time,&rdquo; an article by Dan Mall</title>
    <meta name="description" content="I don&rsquo;t have time" />
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?>
    
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/jsReferenceHead.php"); echo "\n"; ?>    
    <link href='http://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="/articles/_vanilla/vanilla.css" />

	<!-- Facebook -->
    <meta property="og:title" content="I don&rsquo;t have time" />
    <meta property="og:description" content="That magical phrase that gives you permission to brush off the things you really want to do."/>	
    <meta property="og:url" content="http://danielmall.com/articles/on-creative-direction/" />
    <meta property="og:image" content="http://danielmall.com/articles/on-creative-direction/home-thumb.png" />
    
</head>

<body id="article" class="articles">	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>
	
	<div id="article-area-wrap">
			
	    <section class="clearfix wrap vanilla">			
			
			<h1 class="article-header-title">I don&rsquo;t have time</h1>

            <div class="margin-bottom">
                <iframe src='https://spoken.co/t/2512765/embed' frameborder='0' width='100%' height='84' style='max-width:400px;'></iframe>
            </div><!-- .margin-bottom -->
			
			<p>That magical phrase that gives you permission to brush off the things you really want to do. </p>

            <p>Recently, I&rsquo;ve tried to stop saying, &ldquo;I don&rsquo;t have time.&rdquo; It insinuates that I&rsquo;m a helpless victim to the all-powerful stream of hours that mightily passes me by. It&rsquo;s easy to adopt an &ldquo;Oh well&rdquo; attitude to what you&rsquo;re giving up. It authorizes my apathy.</p>

            <p>Instead, I&rsquo;ve replaced it with the phrase, &ldquo;That&rsquo;s not a priority.&rdquo; Suddenly, I&rsquo;ve taken control of my own decisions. I&rsquo;ve taken responsibility for what I do and don&rsquo;t do. I&rsquo;ve added clarity, condemnation, and encouragement, all in 4 short words.</p> 

            <p>&ldquo;Watching another episode is not a priority.&rdquo;</p>

            <p>&ldquo;Taking my wife on a date is not a priority.&rdquo;</p>

            <p>&ldquo;Writing a blog post is not a priority.&rdquo;</p>

            <p>&ldquo;Building that side project is not a priority.&rdquo;</p>

            <p>&ldquo;Going to the gym this morning is not a priority.&rdquo;</p>

            <p>It&rsquo;s different for everyone, and priorities change daily, hourly. But thinking about it this way puts me in the driver&rsquo;s seat and makes me conscious of how I&rsquo;m shaping my own life. We all have the same amount of time and can&rsquo;t make more of it, but we can be active about how we use the time we have.</p>

            <footer class="footnote">
                <p>Also published on <a href="https://medium.com/@danielmall/i-don-t-have-time-c914c9e93d2a">Medium</a>.</p>
            </footer><!-- .footnote -->
			
	    </section><!-- .vanilla -->	  	
	    
	</div><!-- /#article-area-wrap -->	

	<?php

        echo readNext('Epicurrence', '/articles/epicurrence/');

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
                    var disqus_identifier = 'i-dont-have-time';
                    var disqus_url = 'http://danielmall.com/articles/i-dont-have-time/';
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
        	        <time datetime="2015-11-06T07:05:00">Published November 6, 2015 at 7:05 <abbr title="Ante Meridian">AM</abbr></time>
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
