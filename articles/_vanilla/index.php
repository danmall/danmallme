<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head profile="http://gmpg.org/xfn/11">
    <title>&ldquo;On Creative Direction,&rdquo; an article by Dan Mall</title>
    <meta name="description" content="On Creative Direction" />
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?>
    
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/jsReferenceHead.php"); echo "\n"; ?>    
    <link href='http://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="/articles/_vanilla/vanilla.css" />

	<!-- Facebook -->
    <meta property="og:title" content="On Creative Direction" />
    <meta property="og:description" content="A primer on creative direction as compared to art direction and design&hellip; and what they all mean in a digital context."/>	
    <meta property="og:url" content="http://danielmall.com/articles/on-creative-direction/" />
    <meta property="og:image" content="http://danielmall.com/articles/on-creative-direction/home-thumb.png" />
    
</head>

<body id="article" class="articles">	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>
	
	<div id="article-area-wrap">
			
	    <section class="clearfix wrap vanilla">			
			
			<h1 class="article-header-title">Donec id elit non mi porta gravida at eget metus</h1>
			
			<p>Donec id elit non mi porta gravida at eget metus. Cras mattis consectetur purus sit amet fermentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas faucibus mollis interdum.</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. <a href="#">Pellentesque ornare sem lacinia quam venenatis</a> vestibulum. Etiam porta sem malesuada magna mollis euismod. Nullam quis risus eget urna mollis ornare vel eu leo. Nulla vitae elit libero, a pharetra augue. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

			<p>Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

			<ul>
				<li>Something new here</li>
				<li>Something new here</li>
				<li>Something new here</li>
				<li>Something new here</li>
				<li>Something new here</li>
			</ul>

            <footer class="footnote">
                <p>Also published on <a href="https://medium.com/@danielmall/switch-928f791e2591">Medium</a>.</p>
            </footer><!-- .footnote -->
			
	    </section><!-- .vanilla -->	  	
	    
	</div><!-- /#article-area-wrap -->	

	<?php

        echo readNext('How to Get the Work You Want', '/articles/how-to-get-the-work-you-want/');

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
                    var disqus_identifier = 'on-creative-direction';
                    var disqus_url = 'http://danielmall.com/articles/on-creative-direction/';
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
        	        <time datetime="2014-02-19T12:57:00">Published February 19, 2014 at 12:57 <abbr title="Post Meridian">PM</abbr></time>
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
