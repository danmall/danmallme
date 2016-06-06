<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head profile="http://gmpg.org/xfn/11">
    <title>&ldquo;Thanks, Mike Davidson,&rdquo; an article by Dan Mall</title>
    <meta name="description" content="On Creative Direction" />
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?>
    
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/jsReferenceHead.php"); echo "\n"; ?>    
    <link href='http://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="/articles/_vanilla/vanilla.css" />

	<!-- Facebook -->
    <meta property="og:title" content="Thanks, Mike Davidson" />
    <meta property="og:description" content="Great writing from Mike really brings me back."/>	
    <meta property="og:url" content="http://danielmall.com/articles/thanks-mike-davidson/" />
    <meta property="og:image" content="http://danielmall.com/articles/thanks-mike-davidson/home-thumb.png" />
    
</head>

<body id="article" class="articles">	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>
	
	<div id="article-area-wrap">
			
	    <section class="clearfix wrap vanilla">			
			
			<?php /* ?><h1 class="article-header-title">Donec id elit non mi porta gravida at eget metus</h1><?php */ ?>
			
			<p>I&rsquo;m lucky to have gotten into web design when I did. What perhaps helped me most was blogging, both doing it myself as well as being exposed to the tremendous amount of other people doing it. Every day, someone was writing about a new <abbr title="Cascading Style Sheets">CSS</abbr> technique or a new design approach. I soaked it all up like a sponge.</p> 

            <p>One of my favorite sites was <a href="https://twitter.com/mikeindustries">Mike Davidson</a>&rsquo;s. I always learned so much from what Mike was doing and saying.</p>

            <p>Nowadays, I&rsquo;m finding much less online content that&rsquo;s memorable. There are a lot more people writing, podcasting, and speaking, but it all feels like noise. It all blends in. </p>

            <p>Two days ago, Mike wrote a piece called &ldquo;<a href="http://www.mikeindustries.com/blog/archive/2016/05/three-years-in-san-francisco">Three Years in San Francisco</a>.&rdquo; Reading the first few paragraphs immediately transported me to 12 years ago, when I glommed into every word. Mike&rsquo;s writing is poignant, illuminating, thorough, and digestible, just like it&rsquo;s always been.</p> 

            <p>Thanks, Mike, for letting me learn from you for over a decade and for helping me remember just how &ldquo;great&rdquo; great writing can be.</p>

            
            <footer class="footnote">
                <p>Also published on <a href="https://medium.com/@danielmall/thanks-mike-davidson-199bc9c07f12#.9m6vpzb89">Medium</a>.</p>
            </footer><!-- .footnote -->
            
			
	    </section><!-- .vanilla -->	  	
	    
	</div><!-- /#article-area-wrap -->	

	<?php

        echo readNext('Selling Design Systems', '/articles/selling-design-systems/');

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
                    var disqus_identifier = 'thanks-mike-davidson';
                    var disqus_url = 'http://danielmall.com/articles/thanks-mike-davidson/';
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
        	        <time datetime="2016-05-11T05:50:00">Published May 11, 2016 at 5:50 <abbr title="Ante Meridian">AM</abbr></time>
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
