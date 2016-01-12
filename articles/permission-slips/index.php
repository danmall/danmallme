<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head profile="http://gmpg.org/xfn/11">
    <title>&ldquo;Permission Slips,&rdquo; an article by Dan Mall</title>
    <meta name="description" content="Permission Slips" />
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?>
    
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/jsReferenceHead.php"); echo "\n"; ?>    
    <link href='http://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="/articles/_vanilla/vanilla.css" />

	<!-- Facebook -->
    <meta property="og:title" content="Permission Slips" />
    <meta property="og:description" content="To overcome your fears, you need [permission] to try something different."/>	
    <meta property="og:url" content="http://danielmall.com/articles/permission-slips/" />
    <meta property="og:image" content="http://danielmall.com/articles/permission-slips/home-thumb.png" />
    
</head>

<body id="article" class="articles">	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>
	
	<div id="article-area-wrap">
			
	    <section class="clearfix wrap vanilla">			
			
			<h1 class="article-header-title">Permission Slips</h1>
			
			<p><a href="https://twitter.com/emilyjanemall">Emily Mall</a> (disclaimer: I&rsquo;m married to her) wrote about <a href="http://emilymall.blogspot.com/2016/01/permission-slips.html">permission slips</a>. It&rsquo;s a topic I&rsquo;ve been meaning to write about for a while (but probably never would have gotten to). One of my favorite parts from her post:</p>

            <blockquote>
                <p>&hellip;to overcome your fears, you need [permission] to try something different.</p>
            </blockquote>

            <p>That&rsquo;s a principle I use often when I&rsquo;m coaching design teams. Smart people often have good solutions to their own problems, but they may not feel empowered to put it into practice. Sometimes, all it takes is for someone to say, &ldquo;You know that great idea you have? You should do it.&rdquo; When I was thinking of starting <a href="http://superfriend.ly/">SuperFriendly</a>, I had a tentative plan to launch in a year. My friend <a href="http://jasonblumer.com/">Jason Blumer</a> said, &ldquo;You should start in February,&rdquo; which was 3 months away. After the initial shock of his suggestion, <a href="/articles/introducing-superfriendly/">SuperFriendly was born</a> February 1.</p>

            <p>Em&rsquo;s post is a great reminder to give yourself&mdash;and others!&mdash;permission when it&rsquo;s requested&mdash;and, perhaps more importantly, when it&rsquo;s not.</p>

            <footer class="footnote">
                <p>Also published on <a href="https://medium.com/@danielmall/permission-slips-1e6f2f150f96#.rp1pp1fd0">Medium</a>.</p>
            </footer><!-- .footnote -->
			
	    </section><!-- .vanilla -->	  	
	    
	</div><!-- /#article-area-wrap -->	

	<?php

        echo readNext('Content &amp; Display Patterns', '/articles/content-display-patterns/');

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
                    var disqus_identifier = 'permission-slips';
                    var disqus_url = 'http://danielmall.com/articles/permission-slips/';
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
        	        <time datetime="2014-02-19T12:57:00">Published January 12, 2016 at 10:25 <abbr title="Ante Meridian">AM</abbr></time>
    	        </section><!-- /.article-info -->
    	        
    	        
    	        <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/carbon.php"); echo "\n"; ?>
	        
	        
    	    </div><!-- /.sub -->
    	    
    	    
    	</div><!-- #comments-wrap -->
	    
	        
	</div><!-- #comments -->
	
	
	<div class="wrap">
    	
    	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>
    	
    	
    </div><!-- #wrap -->
    
	
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>
