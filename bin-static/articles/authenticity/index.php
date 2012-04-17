<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/doctype.php"); echo "\n"; ?>
<head profile="http://gmpg.org/xfn/11">
    <title>&ldquo;Authenticity,&rdquo; an article by Dan Mall</title>
    <meta name="description" content="Grok Reads" />
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/meta.php"); echo "\n"; ?>
    
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/cssReference.php"); echo "\n"; ?>	
	<script src="http://use.typekit.com/zwf7tzu.js"></script>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/jsReference.php"); echo "\n"; ?> 
	<script src="jquery.lettering.js"></script>
	<script src="jquery.fittext.js"></script>
	<link rel="stylesheet" href="authenticity.css" />
</head>

<body id="article" class="articles">	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"); echo "\n"; ?>
	
	<div id="article-area-wrap">
			
	    <section id="authenticity" class="clearfix">
			
			<p>I once asked <a href="http://adactio.com/">Jeremy Keith</a>&mdash;likely my favorite speaker&mdash;for some advice on presenting. This is what he told me.</p>
			
			<blockquote>
				<p><b id="line1">The most important thing is</b> <strong>authenticity.</strong> <b id="line2">Once you can fake that, you&rsquo;ve made it.</b></p>
			</blockquote>
			
			<script>
				$("#line1, #line2, #authenticity blockquote strong").lettering();
				$("#line1").fitText(2.85);
				$("#line2").fitText(3.83);
				$('#line1, #authenticity blockquote strong, #line2').append('<i class="grunge"></i>');
			</script>
			
	    </section><!-- #authenticity -->
		
		<b id="grunge"></b>
	    
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
                    var disqus_identifier = 'authenticity';
                    var disqus_url = 'http://danielmall.com/articles/authenticity/';
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
        	        <time datetime="2012-04-17T11:32:46">Published April 17, 2012 at 11:32 <abbr title="Ante Meridian">AM</abbr></time>
    	        </section><!-- /#article-info -->
    	        
    	        
    	        <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/carbon.php"); echo "\n"; ?>
	        
	        
    	    </div><!-- /.sub -->
    	    
    	    
    	</div><!-- #comments-wrap -->
	    
	        
	</div><!-- #comments -->
	
	
	<div class="wrap">
    	
    	<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/footer.php"); echo "\n"; ?>
    	
    	
    </div><!-- #wrap -->
    
	
<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/close.php"); echo "\n"; ?>
