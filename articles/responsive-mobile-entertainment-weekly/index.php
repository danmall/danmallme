<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head profile="http://gmpg.org/xfn/11">
    <title>&ldquo;The Responsive Mobile Entertainment Weekly Site,&rdquo; an article by Dan Mall</title>
    <meta name="description" content="New work on a mobile responsive site for Entertainment Weekly." />
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?>
    
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>  	
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/jsReferenceHead.php"); echo "\n"; ?>
    <link rel="stylesheet" href="ew-mobile.css" />
    <script src="//use.typekit.net/nmc4nct.js"></script>
    <script>
        try{
            Typekit.load();
            document.write('<link rel="stylesheet" href="ew-mobile-typekit.css" />');
        }catch(e){}
    </script>
    
    <!-- Facebook -->
    <meta property="og:title" content="The Responsive Mobile Entertainment Weekly Site" />
    <meta property="og:description"content="New work on a responsive mobile site for Entertainment Weekly."/>	
    <meta property="og:url" content="http://danielmall.com/articles/responsive-mobile-entertainment-weekly/" />
    <meta property="og:image" content="http://danielmall.com/articles/responsive-mobile-entertainment-weekly/now-with-responsive.png" />
    
    
</head>

<body id="article" class="articles">	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>
	
	<div id="article-area-wrap">
	    
	    <section id="ew-mobile" class="clearfix">

            <header class="article-title-wrap">
                <h1 class="article-title">
                    <span class="article-title-text">The Responsive Mobile Entertainment Weekly Site</span>
                </h1>
            </header><!-- .article-title-wrap -->

            <div class="inner">

                <p>Earlier this year, my friend <a href="https://twitter.com/globalmoxie">Josh Clark</a> invited <a href="http://superfriend.ly/">SuperFriendly</a> to partner with him to do some mobile work for Entertainment Weekly. Josh put together an all-star team: himself at the helm doing strategy &amp; creative direction, <a href="https://twitter.com/robertgorell">Robert Gorell</a> on information architecture and user experience, <a href="http://bradfrostweb.com/">Brad Frost</a> slinging markup and styles, <a href="http://jonathanstark.com/">Jonathan Stark</a> writing JavaScript, and <a href="http://www.linkedin.com/in/kristinafrantz">Kristina Frantz</a> project managing. We also worked with <a href="http://10up.com/">10up</a>, who handled the back-end development.</p>

                <p>On the SuperFriendly end, I oversaw the design direction and <a href="http://mattecook.com/">Matt Cook</a> produced our side of things. We also invited guest star <a href="http://www.behance.net/scottcook">Scott Cook</a> to handle art direction and design.</p>

                <p>For you impatient ones, we made a responsive mobile site for Entertainment Weekly: <a href="http://m.ew.com/">m.ew.com</a></p>

                <p>Still with me? Here are a few things I think are worth sharing about the process.</p>

                <p>Like any good project, we started by spending some time in-person with the EW.com team. We heard from every team about what they want their workflow challenges and desires. We used the <a href="http://uxmag.com/articles/introduction-to-design-studio-methodology">design studio methodology</a>, the <a href="http://www.uie.com/articles/kj_technique/">KJ technique</a>, and did some one-on-one interviews. After a very productive day, we had a great sense of what we could do to make the site better for its readers and easier for the staff.</p>

                <?php /* ?>
                <figure class="image-wrapper">
                    <img src="ew-process1.jpg" alt="" />
                    <img src="ew-process2.jpg" alt="" />
                    <img src="ew-process3.jpg" alt="" />
                    <img src="ew-process4.jpg" alt="" />
                    <img src="ew-process5.jpg" alt="" />
                    <img src="ew-process6.jpg" alt="" />
                    <img src="ew-process7.jpg" alt="" />
                    <img src="ew-process8.jpg" alt="" />
                </figure><!-- .image-wrapper -->
                <?php */ ?>

                <figure class="image-wrapper">
                    <img src="ew-process1.jpg" alt="" />
                    <figcaption class="image-wrapper-caption">Discussing priorities for the new site</figcaption>
                </figure><!-- .image-wrapper -->

                <figure class="image-wrapper">
                    <img src="ew-process2.jpg" alt="" />
                    <figcaption class="image-wrapper-caption">A few pieces from a priorities generation exercise</figcaption>
                </figure><!-- .image-wrapper -->

                <figure class="image-wrapper">
                    <img src="ew-process3.jpg" alt="" />
                    <figcaption class="image-wrapper-caption">Individual sketching from the whole group for the design studio</figcaption>
                </figure><!-- .image-wrapper -->

                <figure class="image-wrapper">
                    <img src="ew-process4.jpg" alt="" />
                    <img src="ew-process5.jpg" alt="" />
                    <img src="ew-process6.jpg" alt="" />
                    <img src="ew-process7.jpg" alt="" />
                    <img src="ew-process8.jpg" alt="" />
                </figure><!-- .image-wrapper -->

                <p>At the same time, Scott and I were working on the overall art direction and making sure we were capturing the right tone for the brand.   The design process for this site was one of the smoothest I&rsquo;ve been through recently, and a lot of that is due to Martin Schwartz, the art director on the EW.com side. One of the first things Martin put together for us was what we called a &ldquo;design care package,&rdquo; a collection of fonts, vector logos, visual patterns and texture libraries, and&mdash;tada!&mdash;a <a href="http://styletil.es/">style tile</a> that they made internally a little while before our project started.</p>

                <figure class="image-wrapper">
                    <img src="ew-style-tile.png" alt="" />
                    <figcaption class="image-wrapper-caption">Pro tip: when your client sends you a great style tile, you know you&rsquo;re in for a wonderful design process</figcaption>
                </figure><!-- .image-wrapper -->

                <p>Since we&rsquo;re in a <a href="/articles/the-post-psd-era/">post-&ldquo;full-comp&rdquo; era</a>, we knew we needed to be thinking more high-level about the visual style. Naturally, we turned to creating some <a href="/articles/rif-element-collages/">element collages</a>. After talking Martin through the idea, he was completely on board. After a few iterations, we ended up with something like this.</p>

                <figure class="image-wrapper">
                    <img src="ew-element-collage.png" alt="" />
                    <figcaption class="image-wrapper-caption">A snippet of the element collage for Entertainment Weekly</figcaption>
                </figure><!-- .image-wrapper -->

                <p>We ended the visual design process by creating a few full pages, not because the client asked for it, but because we wanted to make sure they fit together nicely. Luckily they did!</p>

                <figure class="image-wrapper">
                    <img src="ew-assembled.png" alt="" />
                    <figcaption class="image-wrapper-caption">A few full pages to ensure congruency</figcaption>
                </figure><!-- .image-wrapper -->


                <p>All together, having an open-minded client that was willing to trust us with process allowed us to move really quickly and not waste time on anything frivolous. Two great teams collaborating makes for a dang good product that we&rsquo;re really proud of.</p>

                <figure class="image-wrapper">
                    <img src="ew-real-phone.jpg" alt="" />         
                    <img src="ew-phones.png" alt="" />                    
                </figure><!-- .image-wrapper -->

                <p>For some other perspectives, check out these posts from other members of the team:</p>

                <ul>
                    <li><a href="#">The Twist</a>, by Josh Clark</li>
                    <li><a href="#">How do I Live Without You</a>, by Brad Frost</li>
                    <li><a href="#">Macarena</a>, by Robert Gorell</li>
                </ul>

            </div><!-- .inner -->                       
	    
	    </section><!-- #ew-mobile -->	    
	    
	</div><!-- /#article-area-wrap -->
	
    <?php

        echo readNext('Now with Responsive!', '/articles/now-with-responsive/');

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
                    var disqus_identifier = 'ew-mobile';
                    var disqus_url = 'http://danielmall.com/articles/entertainment-weekly-mobile/';
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
        	        <time datetime="2013-10-05T15:06:56">Published Oct 5, 2013 at 3:06 <abbr title="Post Meridian">PM</abbr></time>
    	        </section><!-- /#article-info -->
    	        
    	        
    	        <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/carbon.php"); echo "\n"; ?>
	        
	        
    	    </div><!-- /.sub -->
    	    
    	    
    	</div><!-- #comments-wrap -->
	    
	        
	</div><!-- #comments -->
	
	
	<div class="wrap">
    	
    	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>
    	
    	
    </div><!-- #wrap -->
	    
	
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>