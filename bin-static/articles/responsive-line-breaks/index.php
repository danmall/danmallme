<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/doctype.php"); echo "\n"; ?>
<head profile="http://gmpg.org/xfn/11">
    <title>&ldquo;Responsive Line Breaks,&rdquo; an article by Dan Mall</title>
    <meta name="description" content="responsive-line-breaks" />
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/meta.php"); echo "\n"; ?>
    
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/cssReference.php"); echo "\n"; ?>	
    <script src="//use.typekit.net/pel5uvp.js"></script>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/jsReference.php"); echo "\n"; ?> 
	<link rel="stylesheet" href="responsive-line-breaks.css" />	
    
</head>

<body id="article" class="articles">	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"); echo "\n"; ?>
	
	<div id="article-area-wrap">
			
	    <section id="responsive-line-breaks" class="clearfix">
			
			<h1 class="phark">Responsive Line Breaks</h1>
			
            <p>I create a lot of mobile-first, responsive designs. It&rsquo;s the way <a href="http://superfriend.ly/">SuperFriendly</a> builds websites, <a href="http://the-pastry-box-project.net/andy-clarke/2012-january-3/">as many suggest</a> (unless, of course, there&rsquo;s a good reason not to do so).</p>

            <p>Perhaps because responsive design is still relatively new or perhaps because of my history and affinity towards fixed-width pixel-perfect designs, but it pains me to see sites that employ great responsive design techniques while sacrificing useful principles like appropriate line-lengths or designing to avoid widows and orphans as much as possible. Responsive design doesn&rsquo;t and shouldn&rsquo;t conflict with traditional graphic design principles; it can certainly support the tenets of good design when implemented thoughtfully and thoroughly.</p>

            <p>I often come across the problem of widows and orphans when using fully <a href="http://www.alistapart.com/articles/fluidgrids/">fluid grids</a>, so here are 2 techniques I use to avoid them as much as possible.</p>

            <h2>Technique 1: Responsive <code>&lt;br /&gt;</code></h2>

            <p>You heard me: break tags. I&rsquo;ll typically add a <code>&lt;br /&gt;</code> with a class of <code>rwd-break</code>, set it to <code>display: block;</code> in my base styles and and use media queries to hide it (using <code>display: none;</code>) when the screen gets wide enough, bringing it back to a one-line statement. <a href="demo-br/">Here&rsquo;s a demo.</a></p>

            <h2>Technique 2: Responsive <code>&lt;span&gt;</code></h2>

            <p>Same idea, except letting the breaks happen with CSS only. Wrap each line in a <code>&lt;span&gt;</code> with a class of <code>rwd-line</code> and set that class to <code>display: block;</code>, then swap to <code>display: inline;</code> for the wider layouts. I don&rsquo;t really see why you&rsquo;d use the first technique over this one, but figured I&rsquo;d mention it anyway. <a href="demo-span/">Here&rsquo;s a demo.</a></p>

            <p>While standards purists would no doubt challenge the semantics of these approaches, I&rsquo;ve grown quite fond of these. </p>

            <p>A small trick to help us build more beautiful responsive sites.</p>
			
	    </section><!-- #responsive-line-breaks -->	  	
	    
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
                    var disqus_identifier = 'responsive-line-breaks';
                    var disqus_url = 'http://danielmall.com/articles/responsive-line-breaks/';
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
        	        <time datetime="2012-08-09T14:11:00">Published August 9, 2012 at 2:11 <abbr title="Post Meridian">PM</abbr></time>
    	        </section><!-- /#article-info -->
    	        
    	        
    	        <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/carbon.php"); echo "\n"; ?>
	        
	        
    	    </div><!-- /.sub -->
    	    
    	    
    	</div><!-- #comments-wrap -->
	    
	        
	</div><!-- #comments -->
	
	
	<div class="wrap">
    	
    	<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/footer.php"); echo "\n"; ?>
    	
    	
    </div><!-- #wrap -->
    
	
<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/close.php"); echo "\n"; ?>
