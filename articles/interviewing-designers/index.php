<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head profile="http://gmpg.org/xfn/11">
    <title>&ldquo;Interviewing Designers,&rdquo; an article by Dan Mall</title>
    <meta name="description" content="Interviewing Designers" />
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?>
    
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/jsReferenceHead.php"); echo "\n"; ?>    
    <link href='http://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="/articles/_vanilla/vanilla.css" />

	<!-- Facebook -->
    <meta property="og:title" content="Interviewing Designers" />
    <meta property="og:description" content="Some tips on making the right hire."/>	
    <meta property="og:url" content="http://danielmall.com/articles/interviewing-designers/" />
    <meta property="og:image" content="http://danielmall.com/articles/interviewing-designers/home-thumb.svg" />
    
</head>

<body id="article" class="articles">	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>
	
	<div id="article-area-wrap">
			
	    <section class="clearfix wrap vanilla">			
			
			<h1 class="article-header-title">Interviewing Designers</h1>

            <p>A friend asked me for a few tips on interviewing designers. I started to write a few pointers until a little Googling led me to <a href="https://www.quora.com/profile/Jason-Putorti/Posts/How-to-Interview-a-Designer">&ldquo;How to interview a designer&rdquo;</a> by <a href="https://twitter.com/putorti">Jason Putorti</a>. It&rsquo;s almost exactly what I would have written. </p>

            <p>The only thing I&rsquo;d add is that I&rsquo;d give the interviewee a heads up ahead of time if I was going to do a sketching exercise during the interview. I get the idea that they should be prepared for curve balls, but your job as an employer is to provide safety for them and set them up for success. Allowing them to mentally prepare for that possibility ensures that they&rsquo;ll bring their best to the interview.</p>

            <footer class="footnote">
                <p>Also published on <a href="https://medium.com/@danielmall/interviewing-designers-321a3e99d732#.3smzo7cet">Medium</a>.</p>
            </footer><!-- .footnote -->
			
	    </section><!-- .vanilla -->	  	
	    
	</div><!-- /#article-area-wrap -->	

	<?php

        echo readNext('I don&rsquo;t have time', '/articles/i-dont-have-time/');

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
                    var disqus_identifier = 'interviewing-designers';
                    var disqus_url = 'http://danielmall.com/articles/interviewing-designers/';
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
        	        <time datetime="2015-11-29T14:56:00">Published November 29, 2015 at 2:56 <abbr title="Post Meridian">PM</abbr></time>
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
