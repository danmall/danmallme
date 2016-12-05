<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head profile="http://gmpg.org/xfn/11">
    <title>&ldquo;Investments,&rdquo; an article by Dan Mall</title>
    <meta name="description" content="Investments" />
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?>
    
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/jsReferenceHead.php"); echo "\n"; ?>    
    <link href='http://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="/articles/_vanilla/vanilla.css" />

    <?php /* ?>
	<!-- Facebook -->
    <meta property="og:title" content="Oil change &amp; Pizza" />
    <meta property="og:description" content="Death to &ldquo;full service.&rdquo;"/>	
    <meta property="og:url" content="http://danielmall.com/articles/oil-change-pizza/" />
    <meta property="og:image" content="http://danielmall.com/articles/oil-change-pizza/home-thumb.png" />
    <?php */ ?>

    <!-- Trying @adactio's meta: https://adactio.com/journal/9881  -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@danielmall" />
    <meta name="twitter:url" property="og:url" content="http://danielmall.com/articles/investments/" />
    <meta name="twitter:title" property="og:title" content="Investments" />
    <meta name="twitter:description" property="og:description" content="Using an investment framework to help evaluate what&rsquo;s worth doing." />
    <meta name="twitter:image" property="og:image" content="http://danielmall.com/articles/investments/home-thumb.png" />
    
</head>

<body id="article" class="articles">	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>
	
	<div id="article-area-wrap">
			
	    <section class="clearfix wrap vanilla">			
			
			<h1 class="article-header-title">Investments</h1>

            <div class="margin-bottom">
                <iframe src='https://spoken.co/t/2527241/embed' frameborder='0' width='100%' height='84' style='max-width:400px;'></iframe>
            </div><!-- .margin-bottom -->
			
			<p>I&rsquo;ve been thinking a lot lately about <em>investment</em>, especially as it relates to <del>time</del> <ins><a href="/articles/i-dont-have-time/">priorities</a></ins>. While many definitions exist, I&rsquo;ve arrived at my own that has proven really useful for me:</p>

            <blockquote>
                <p>A [good] investment is a small, short-term loss I take in order to achieve a large, long-term gain.</p>
            </blockquote>

            <p>In evaluating what&rsquo;s important to me at any given moment, I ask myself what kind of investment I'd be making, if any. I ask questions about investments a lot when I&rsquo;m coaching and mentoring. For agency owners, I often ask if they&rsquo;re willing to take the short-term loss of doing thankless but lucrative work&mdash;banner ads and site maintenance come to mind&mdash;for the long-term gain of funding more desirable work that doesn&rsquo;t pay as well. When I&rsquo;m mentoring senior designers, I often ask if they&rsquo;re willing to take the short-term loss of feeling like a beginner again for the long-term gain of being more proficient in code.</p>

            <p>Thinking about what investments I&rsquo;m making has been a useful framework to help me make decisions, and I share it in hopes it can do the same for you.</p> 

            <?php /* ?>
            <footer class="footnote">
                <p>Also <a href="https://medium.com/@danielmall/accountability-e64e18e4cfce#.p8ixxd221">syndicated to Medium</a>.</p>
            </footer><!-- .footnote -->
            <?php */ ?>
			
	    </section><!-- .vanilla -->	  	
	    
	</div><!-- /#article-area-wrap -->	

	<?php

        echo readNext('Setting Up Windows', '/articles/setting-up-windows/');

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
                    var disqus_identifier = 'investments';
                    var disqus_url = 'http://danielmall.com/articles/investments/';
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
        	        <time datetime="2016-12-04T22:00:00">Published December 4, 2016 at 10:00 <abbr title="Post Meridian">PM</abbr></time>
    	        </section><!-- /.article-info -->
    	        
    	        
    	        <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/carbon.php"); echo "\n"; ?>
	        
	        
    	    </div><!-- /.sub -->
    	    
    	    
    	</div><!-- #comments-wrap -->
	    
	        
	</div><!-- #comments -->
	
	
	<div class="wrap">
    	
    	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>
    	
    	
    </div><!-- #wrap -->
    
	
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>
