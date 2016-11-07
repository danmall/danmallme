<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head profile="http://gmpg.org/xfn/11">
    <title>&ldquo;Setting up Windows,&rdquo; an article by Dan Mall</title>
    <meta name="description" content="Setting up Windows" />
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?>
    
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/jsReferenceHead.php"); echo "\n"; ?>    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,700" rel="stylesheet" />
	<link rel="stylesheet" href="/articles/_vanilla/vanilla.css" />
    <link rel="stylesheet" href="/-/c/windows-nav.css" />
    <link rel="stylesheet" href="setting-up-windows.css" />

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
    <meta name="twitter:url" property="og:url" content="http://danielmall.com/articles/setting-up-windows/" />
    <meta name="twitter:title" property="og:title" content="Setting up Windows" />
    <meta name="twitter:description" property="og:description" content="The first few days on a Windows machine." />
    <meta name="twitter:image" property="og:image" content="http://danielmall.com/articles/setting-up-windows/home-thumb.png" />
    
</head>

<body id="article" class="articles">	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>
	
	<div id="article-area-wrap">
			
	    <section class="clearfix wrap vanilla windows">

            <div class="windows-articles-title">
                <h1 class="article-header-title">Setting up Windows</h1>
                <p class="article-hashtag">#dangoeswindows</p>
            </div><!-- .windows-articles-title -->

            <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/windows-nav.php"); echo "\n"; ?>

            <p>First things I do:</p>

            <ol>
                <li>Install <a href="https://www.dropbox.com/">Dropbox</a>.</li>
                <li>Set up Outlook (which I&rsquo;m actually excited about, as it&rsquo;s my preferred iPhone email app since <a href="http://www.mailboxapp.com/">Mailbox</a> shut down).</li>
                <li>Download and install <a href="http://www.adobe.com/creativecloud.html">Creative Cloud</a>. </li>
            </ol>

            <p>At this point, I contemplate how much of a Windows experience I want or can deal with. I&rsquo;m sure I could just try to replicate my Mac setup which would make me comfortable. I could install a bunch of plugins to do things like <a href="https://alanhogan.com/tips/swap-left-alt-and-ctrl-keys-in-windows">remap the <kbd>Ctrl</kbd> key to to the <kbd>Alt</kbd> key</a> to work more like the <kbd>Command</kbd> key on a Mac or <a href="http://www.winbrowser.com/">make Windows Explorer more like Finder</a>. But that&rsquo;s not exactly in line with the experiment I&rsquo;m doing. If I want a Mac, I have one (or three). This is really to see if Windows proper—not Windows as a Mac imposter—can work for me. </p>

            <p>Next, I want my notes app, partly so I can document what&rsquo;s going through my head. This is a case where I really don&rsquo;t want to try something new; I&rsquo;ve been using <a href="http://brettterpstra.com/projects/nvalt/">nvAlt</a> synced to all my devices through Simplenote <a href="/articles/ideas-of-march-2013/">for years</a>, and I&rsquo;m not willing to start from scratch. After a false start trying to get the Windows version of Simplenote, I find and install <a href="http://getnotation.com/">Notation</a>. It feels clumsy comparatively, but it&rsquo;ll do for now. </p>

            <p>This whole time, I&rsquo;ve been doing some heavy Googling, just trying to get my bearings. Where do applications install to? How do I get this icon off my desktop without erasing this app? In my &ldquo;gung ho Windows purist&rdquo; mode, I&rsquo;ve been using Edge and resisting the urge to download Chrome. </p>

            <p>I&rsquo;d really like to give Edge a shot as my primary browser, but after a few hours of use, there&rsquo;s some basic functionality that I use a lot in Chrome that just doesn&rsquo;t exist in Edge, or at least isn&rsquo;t as easy as I&rsquo;d like it to be:</p>

            <ul>
                <li>Every morning when I start my computer, I open all the bookmarks in my "Starter Set" folder. <a href="http://answers.microsoft.com/en-us/windows/forum/apps_windows_10-msedge/microsoft-edge-how-to-open-all-bookmarks-in-tabs/51abac8a-3315-4949-9724-afb0831108da">That functionality doesn&rsquo;t exist in Edge</a>.</li>
                <li>To change the location of the "Downloads" folder, <a href="http://www.howtogeek.com/258735/how-to-change-the-location-of-microsoft-edges-download-folder/">YOU HAVE TO EDIT THE REGISTRY FILE</a>!</li>
                <li>This isn&rsquo;t Edge&rsquo;s fault, but lots of stuff doesn&rsquo;t support Edge yet. Case in point: I use <a href="http://www.boomeranggmail.com/download.html">Boomerang</a> in Gmail for scheduling email, but it&rsquo;s not supported in Edge.</li>
            </ul>

            <p>Already frustrated, I break my rule and download Chrome. So much for Windows as-is. After sleeping on it for a few days, I decide that&rsquo;s OK. Whenever I get a new Mac, the first thing I do is configure it. I download all my apps, I tweak the interface to how I like to work. If I don&rsquo;t use a Mac the way it comes out of the box, what makes me think I&rsquo;d use a Windows machine that way?</p>

            <p>This realization gives me permission to put in the effort to shape it to how I can easily get stuff done, not change how I work to fit the machine. The real test will be to see if my final configuration simply resembles a Mac; if it does, I might as well stay with my current setup. If it does end up that way, the tough part will be discerning whether or not that setup is the best setup for me or if it&rsquo;s just what I&rsquo;m used to.</p>

            <p>Coming up next: starting to design and code on a Windows machine.</p>

            <p>(Note: this post was written on my Mac because I have yet to dive into code editors, command line tools, and the like.)</p>

            
            <footer class="footnote">

              <p>Also <a href="https://medium.com/@danielmall/setting-up-windows-4c2fe857fc93#.ix36kqae0">syndicated to Medium</a>.</p>
            
            </footer><!-- .footnote -->
            
			
	    </section><!-- .vanilla -->	  	
	    
	</div><!-- /#article-area-wrap -->	

	<?php

        echo readNext('Opening Windows', '/articles/opening-windows/');

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
                    var disqus_identifier = 'setting-up-windows';
                    var disqus_url = 'http://danielmall.com/articles/setting-up-windows/';
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
        	        <time datetime="2016-11-06T08:37:00">Published November 6, 2016 at 8:38 <abbr title="Ante Meridian">AM</abbr></time>
    	        </section><!-- /.article-info -->
    	        
    	        
    	        <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/carbon.php"); echo "\n"; ?>
	        
	        
    	    </div><!-- /.sub -->
    	    
    	    
    	</div><!-- #comments-wrap -->
	    
	        
	</div><!-- #comments -->
	
	
	<div class="wrap">
    	
    	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>
    	
    	
    </div><!-- #wrap -->
    
	
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>
