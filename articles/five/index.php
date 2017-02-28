<?php 
header("HTTP/1.1 301 Moved Permanently"); 
header("Location: http://v3.danielmall.com/articles/five/"); 
?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head>
    <title>&ldquo;Five,&rdquo; an article by Dan Mall</title>
    <meta name="description" content="Celebrating the launch of the new DanielMall.com" />
    <meta name="description" content="Celebrating the launch of the new DanielMall.com" />
    <meta charset="UTF-8" /> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="author" content="Dan Mall" />
    
    <!-- http://blog.javierusobiaga.com/stop-using-the-viewport-tag-until-you-know-ho -->
    <meta name="viewport" content="width=1024" />

    <link type="application/rss+xml" rel="alternate" title="Articles" href="http://feeds.feedburner.com/danielmall-articles" /> 
    
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/jsReferenceHead.php"); echo "\n"; ?>
    <link rel="stylesheet" href="five.css" />
</head>

<body id="article" class="articles">	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>
	
	<div id="article-area-wrap">
	    
	    <div id="five">
	    
	        <section id="article-area">
	        
    	        <section id="intro">
	            
    	            <div id="intro-text">
	                
            	        <h1 class="phark">5.</h1>
	        
            	        <h2 class="phark">Wow. After five long years, it feels great to have a new site.</h2>
	        
                        <p>Truth be told, I&rsquo;m incredibly uncomfortable with this redesign. Which is awesome. Though it may not look like it on the outside, my approach to this redesign is very experimental and different for me. I think the power of <abbr title="Cascading Style Sheets">CSS</abbr> and its methodology has over-templatized our industry, some to great value and others not. Targeted art direction and interaction design are often sacrificed for efficient maintenance and reuse. For this site, I&rsquo;m bucking the idea of &ldquo;the template&rdquo; and instead designing only what needs to be designed, when it needs to be designed. When abstraction is in direct competition with the opportunity for delight, I’ll opt for the latter. </p>

                        <p>We&rsquo;ll see how that goes.</p>
                    
                    </div><!-- #intro-text -->
            
                </section><!-- #intro -->
            
                <div id="split3" class="easy-clearing">
            
                    <section id="cms-who">
                
                        <h1 class="phark">CMS who?</h1>
                
                        <p>There&rsquo;s no content management system behind this site. That&rsquo;s right: just hand-coded <abbr title="HyperText Markup Language">HTML</abbr> pages. As someone with absolutely no server-side programming skills, the thought of managing the content management system both bores and scares me. I know nothing of caches and unexpected strings, <code>.htaccess</code>, memory allocation, and improperly formed queries, so I&rsquo;d rather just avoid it all together.</p>

                        <p>It also allows me to have a fully synced local copy with version control, without worrying about which database is the most current. <a href="http://beanstalkapp.com/">Beanstalk</a> and a handful of <a href="http://git-scm.com/">Git</a> commands make it super easy to keep the site updated everywhere.</p>
                
                    </section><!-- #cms-who -->
            
                    <section id="no-rss">
                
                        <h1 class="phark">No RSS.</h1>
                
                        <p>My <abbr title="Really Simple Syndication">RSS</abbr> feed has been broken for years. A few have complained, but traffic hasn&rsquo;t seemed to be too altered by it. And, <a href="http://www.staynalive.com/2011/05/twitter-and-facebook-both-quietly-kill.html?q=1">with Facebook and Twitter just about ditching it</a>, I figured I could too.</p> 

                        <p>To keep abreast on the latest from my site, <a href="http://twitter.com/danielmall">follow me on Twitter</a>.</p>
                
                    </section><!-- #no-rss -->
            
                    <section id="on-help">
                
                        <h1 class="phark">On help.</h1>
                
                        <p>Throw just about any client or project at me, and I can hit the ground running. The one exception seems to be my own site. I&rsquo;ve done about 16 versions of this redesign that I wasn&rsquo;t happy with.</p> 

                        <p>So I reached out to one of the best, my good friend <a href="http://bearskinrug.co.uk/">Kevin Cornell</a>. We talked for a while and did some design exercises, which ultimately led to the version you see now. Just goes to show how valuable talented, objective, and hilarious friends are. </p>

                        <p>Mr. Cornell: I&rsquo;m in your debt.</p>
                
                    </section><!-- #on-help -->
            
                </div><!-- #split3 -->
            
                <section id="forward">
                    <h1 class="phark">I&rsquo;m looking forward to what I can do with this new site. Hope you are too.</h1>
                </section>
	        
    	    </section><!-- /#article-area -->
    	    
    	</div><!-- #five -->
	    
	    
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
                    var disqus_identifier = 'five';
                    var disqus_url = 'http://dan.local:8888/articles/five/';
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
        	        <time datetime="2011-05-30T03:40:00">Published May 30, 2011 at 3:40 <abbr title="Ante Meridian">AM</abbr></time>
    	        </section><!-- /.article-info -->
    	        
    	        
    	        <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/carbon.php"); echo "\n"; ?>
	        
	        
    	    </div><!-- /.sub -->
    	    
    	    
    	</div><!-- #comments-wrap -->
	    
	        
	</div><!-- #comments -->
	
	
	<div class="wrap">
    	
    	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>
    	
    	
    </div><!-- #wrap -->
    
	
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>