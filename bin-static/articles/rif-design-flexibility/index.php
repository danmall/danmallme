<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/doctype.php"); echo "\n"; ?>
<head profile="http://gmpg.org/xfn/11">
    <title>&ldquo;Reading Is Fundamental Design Flexibility,&rdquo; an article by Dan Mall</title>
    <meta name="description" content="Reading Is Fundamental Design Flexibility" />
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/meta.php"); echo "\n"; ?>
    
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/cssReference.php"); echo "\n"; ?>	
	<script src="//use.typekit.net/vnx7msu.js"></script>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/jsReference.php"); echo "\n"; ?> 
	<link rel="stylesheet" href="rif-design-flexibility.css" />	
    
</head>

<body id="article" class="articles">	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"); echo "\n"; ?>
	
	<div id="article-area-wrap">
        
        <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/rif-nav.php"); echo "\n"; ?>
			
	    <section id="rif-design-flexibility" class="clearfix">
            
            <div class="hero">
                
                <div class="inner">
                    
                    <hgroup>
                        <h1>Design Flexibility</h1>
                        <h2>The design process in the public story of a new site for <strong>Reading Is Fundamental</strong></h2>
                    </hgroup>
                
                    <img src="rif-logo.png" alt="Reading Is Fundamental" />
                    
                </div><!-- .inner -->
                
            </div><!-- .hero -->
			
            <div class="inner">
                
                <p>We last left off talking about <a href="/articles/rif-element-collages/">Element Collages</a>, which <abbr>RIF</abbr> was really thrilled about. They loved the first stabs at the marriage of content and design ideas. We were on cloud nine!</p>

                <p>The next step for us was to finalize the site architecture (more on that in another post) and then show how the design system could work smartly to create any permutation of pages necessary. Because of the wealth of content on the site and the need to access that content across a range of browsers, devices, and operating systems—read: <a href="http://www.alistapart.com/articles/responsive-web-design/">responsive design</a>—it wouldn&rsquo;t have been efficient to try and design every page on the site. Instead, we focused our time on creating flexible elements and shells (hero areas, main long-form content, callouts, etc.) that could accommodate many different types of content. The specific configurations of these elements are what we call &ldquo;templates.&rdquo;</p>

                <p>The first thing we showed <abbr>RIF</abbr> was an example of a detail page template. I often start with a page that&rsquo;s deep within site because it can communicate a good sense the actual content and it&rsquo;s a likely entry point for a new visitor, either from a search engine or a link. I also tend to show templates in pairs or groups of different sizes, not as a comprehensive showing, but as examples in the range of views. I&rsquo;ll show a small screen view like an iPhone-sized portrait canvas, because a <a href="http://www.lukew.com/ff/entry.asp?933">mobile-first</a> approach to design can really be a great framing mechanism for content and hierarchy. I&rsquo;ll also show what I consider to be a medium-width view, like an iPad-sized portrait orientation. That particular width (<code>768px</code>) tends to be problematic for me if I&rsquo;m not thinking about it early in the design process, so I like to get it out of the way. It&rsquo;s much easier for me to figure out what to do when I have more space, but significantly more difficult to decide how a design gets crammed into smaller widths.</p>

                <p>Also, though I come from a <a href="http://cognition.happycog.com/article/the-magic-number">Rule of Three</a> mentality, the more I design, the more I prefer working on one version that gets many iterations instead of many versions that get fewer iterations. Iterations trump versions. As we strive for truer design and <a href="http://bradfrostweb.com/blog/mobile/content-parity/">content parity</a>, I'm reminded that designing systems is more pottery than archery.</p>

                <p>Here&rsquo;s the first template we showed:</p>
                
                <img src="books-for-ownership.png" alt="Books for Ownership" />

                <p>Our team felt pretty good about this design. <abbr>RIF</abbr> politely hated it.</p>

                <p>We asked them to write up feedback via Basecamp before having a call with us to discuss the details. Their post to us started like this:</p>

                <blockquote>
                    <p>Just want to give fair warning that this is our least favorable feedback to date.</p> 
                                    
                    <p>We&rsquo;re still very excited about the design elements presented in the initial design reviews. However, this latest round that represents many for those elements pulled together has missed the mark for us. And to be honest, we&rsquo;re not quite sure how or why. Nonetheless, I&rsquo;ll do my best to explain.</p>
                    
                </blockquote>

                <p>They then proceeded to give us incredibly articulate and thoughtful reasoning as to what wasn&rsquo;t working in this design. They mentioned everything from&hellip;</p>
                
                <ul>
                    <li>Making interaction and engagement easier for users than their current site does</li>
                    <li>Distinguishing themselves from other similar organizations</li>
                    <li>Workflow issues they wanted to eliminate</li>
                    <li>Emotional design baggage from their current site and previous sites</li>
                    <li>Missing functionality</li>
                    <li>Lots more</li>
                </ul>

                <p>All things we heard in conversations with them, but failed to represent in the designs. Our job in being best able to serve our clients is to listen to them and act on the things that can make their business, their jobs, and their lives better. We only did one of those two, so we definitely still had more work to do.</p>
                
                <h2>Back to the drawing board</h2>

                <p>Designing a large site is a lot of work for designers (obvious statements be obvious), but it&rsquo;s also a lot to process as a client. This time around, we decided to break our design up into smaller elements that we could iterate on faster. We decided to tackle the header first. In a few hours, we had a few iterations of a newer header prepared:</p>
                
                <img src="header1.png" alt="RIF Header option 1" />
                <img src="header2.png" alt="RIF Header option 2" />
                <img src="header3.png" alt="RIF Header option 3" />
                <img src="header4.png" alt="RIF Header option 4" />
                <img src="header5.png" alt="RIF Header option 5" />
                
                <p>They gave us some quick feedback, and we turned around some new iterations:</p>

                <img src="header7.png" alt="RIF Header option 6" />
                <img src="header8∂f.png" alt="RIF Header option 7" />
                
                <p>They thought the last one worked perfectly, and just like that we had a finished piece in a few hours. On to the footer!</p>

                <img src="footer1.png" alt="RIF Footer option 1" />
                <img src="footer2.png" alt="RIF Footer option 2" />
                
                <p>With a few small copy changes, the first footer was a clear winner. Within a day, we had iterated through a significant number of revisions on some major element for the site and gotten them to a good place.</p>

                <p>One added bonus was that we were starting to create a good rhythm as a team. We had the momentum of knowing how to have effective conversations together and creating designs that served the proper goals. We were encouraging dialogue instead of presenting; the work was better for it and everyone was happy.</p>

                <p>We moved quickly to interior templates and eventually a home page.</p>
                
                <img src="detail-template.png" alt="RIF Detail template" />
                <img src="home.png" alt="RIF Home page" />

                <p>This time, our Basecamp post for feedback started differently:</p>

                <blockquote>
                    <p>Heavens to Mercatroid!  We love it!</p> 
                </blockquote>

                <p>While we&rsquo;re still working through some finer details, <abbr>RIF</abbr> feels much more confident that we now have a design system that will serve their goals well. There&rsquo;s a lot more that can still be said about our design process, but I hope this small look gives you some more insight as to how this project is progressing. As always, you can follow along by regularly checking our <a href="http://rif.superfriend.ly/"><abbr>RIF</abbr> client site</a> where we post our latest to <abbr>RIF</abbr>.  We often post to that page faster than we can write up the process here, so that&rsquo;ll be your best bet regarding real-time progress.</p>

                <p>More to come!</p>
                
            </div><!-- .inner -->		
			
	    </section><!-- #rif-design-flexibility -->	
        
        <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/rif-nav.php"); echo "\n"; ?>  	
	    
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
                    var disqus_identifier = 'rif-design-flexibility';
                    var disqus_url = 'http://danielmall.com/articles/rif-design-flexibility/';
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
        	        <time datetime="2012-11-13T08:18:00">Published November 13, 2012 at 8:18 <abbr title="Ante Meridian">AM</abbr></time>
    	        </section><!-- /#article-info -->
    	        
    	        
    	        <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/carbon.php"); echo "\n"; ?>
	        
	        
    	    </div><!-- /.sub -->
    	    
    	    
    	</div><!-- #comments-wrap -->
	    
	        
	</div><!-- #comments -->
	
	
	<div class="wrap">
    	
    	<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/footer.php"); echo "\n"; ?>
    	
    	
    </div><!-- #wrap -->
    
	
<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/close.php"); echo "\n"; ?>