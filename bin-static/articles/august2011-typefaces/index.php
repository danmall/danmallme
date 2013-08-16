<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head>
    <title>&ldquo;Typefaces I Used This Month,&rdquo; an article by Dan Mall</title>
    <meta name="description" content="Photoshop Clusters" />
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?>
    
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/jsReference.php"); echo "\n"; ?>
    <link rel="stylesheet" href="august2011-typefaces.css" />
    <script src="lettering.js"></script>
    <script>
        document.write('<link rel="stylesheet" href="enhanced.css" />');
        $(document).ready(function() {
            
            // lettering.js
            $('#august2011-typefaces hgroup h1').lettering();            
            
            // nav functionality
            var _currentTypeface = $('.typeface').eq(0);
            var _currentNav = $('#august2011-typefaces nav li').eq(0);
            
            $(_currentTypeface).show();
            
            $('#august2011-typefaces nav a').click(function(){
                
                var _target = $(this).attr('href');
                $(_currentTypeface).fadeOut('fast', function(){
                    _currentTypeface = $(_target);
                    $(_target).fadeIn('normal');
                });
                
                _currentNav.removeClass('current');
                $(this).parents('li').addClass('current');
                _currentNav = $(this).parents('li');                
                
                return false;
                
            });
            
        });
    </script>
</head>

<body id="article" class="articles">	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>
	
	<div id="article-area-wrap">
	    
	    <section id="august2011-typefaces">
	        
	        <div class="inner">
	            
	            <hgroup>
    	            <h1>Typefaces I Used This Month</h1>
    	            <h2>Executive Summary: Be adventurous and experiment with new faces, but don&rsquo;t forget about the classics.</h2>
    	        </hgroup>
    	        
    	        <script>
    	        document.write('<nav><ul><li class="current"><a href="#omnes">Omnes</a></li><li><a href="#pluto">Pluto</a></li><li><a href="#gotham">Gotham</a></li><li><a href="#bree">Bree</a></li><li><a href="#clarendon">Clarendon</a></li></ul></nav>');
    	        </script>
	                	        
    	        <section id="omnes" class="typeface"> 
    	            
    	            <h1>Omnes</h1>
    	            
    	            <figure>
    	                <img src="omnes-specimen.png" alt="Omnes" />
    	            </figure>
    	            
    	            <section class="info easy-clearing">
    	                <dl>
    	                    <dt>Foundry</dt>
    	                        <dd><a href="http://www.dardenstudio.com/typefaces/omnes_pro">Darden Studio</a></dd>
    	                </dl>
    	                <dl>
    	                    <dt>More Info</dt>
    	                        <dd><a href="http://blog.typekit.com/2011/08/01/about-face-omnes/">About Face: Omnes</a></dd>
    	                        <dd><a href="http://fontsinuse.com/typefaces/omnes/">Omnes: Fonts in Use</a></dd>
    	                        <dd><a href="http://typographica.org/2007/typeface-reviews/omnes/">Omnes Review on Typographica</a></dd>
    	                        <dd><a href="http://typographica.org/2007/typeface-reviews/omnes/">Omnes on Typedia</a></dd>
    	                </dl>
    	                <dl>
    	                    <dt>What I Used it For</dt>
    	                        <dd>A Kids&rsquo; Brand</dd>
    	                </dl>
    	            </section><!-- .info -->
    	               
    	        </section><!-- #omnes -->
    	        
    	        <section id="pluto" class="typeface"> 
    	            
    	            <h1>Pluto</h1>
    	            
    	            <figure>
    	                <img src="pluto-specimen.png" alt="Pluto" />
    	            </figure>
    	            
    	            <section class="info easy-clearing">
    	                <dl>
    	                    <dt>Foundry</dt>
    	                        <dd><a href="http://www.hvdfonts.com/">HVD Fonts</a></dd>
    	                </dl>
    	                <dl>
    	                    <dt>More Info</dt>
    	                        <dd><a href="http://designenvy.aiga.org/pluto-typeface-hannes-von-dohren/">Pluto Typeface: Hannes Von D&ouml;hren</a></dd>
    	                </dl>
    	                <dl>
    	                    <dt>What I Used it For</dt>
    	                        <dd>A Kids&rsquo; Brand</dd>
    	                </dl>
    	            </section><!-- .info -->    	            
    	               
    	        </section><!-- #pluto -->
    	        
    	        <section id="gotham" class="typeface"> 
    	            
    	            <h1>Gotham</h1>
    	            
    	            <figure>
    	                <img src="gotham-specimen.png" alt="Gotham" />
    	            </figure>
    	            
    	            <section class="info easy-clearing">
    	                <dl>
    	                    <dt>Foundry</dt>
    	                        <dd><a href="http://www.typography.com/fonts/font_overview.php?productLineID=100008">H&amp;FJ</a></dd>    	                        
    	                </dl>
    	                <dl>
    	                    <dt>More Info</dt>
    	                        <dd><a href="http://en.wikipedia.org/wiki/Gotham_(typeface)">Gotham on Wikipedia</a></dd>
    	                        <dd><a href="http://en.wikipedia.org/wiki/Gotham_(typeface)">A 9/11 Cornerstone, Chiseled With a New York Accent</a></dd>
    	                        <dd><a href="http://idsgn.org/posts/know-your-type-gotham/">Know your type: Gotham</a></dd>
    	                        <dd><a href="http://campaignstops.blogs.nytimes.com/tag/gotham-typeface/">To the Letter Born</a></dd>
    	                </dl>
    	                <dl>
    	                    <dt>What I Used it For</dt>
    	                        <dd><a href="http://dribbble.com/danielmall/projects/8615-Try-Veggie-Week-NYC">Try Veggie Week branding &amp; website</a></dd>
    	                </dl>
    	            </section><!-- .info -->
    	               
    	        </section><!-- #gotham -->
    	        
    	        <section id="bree" class="typeface"> 
    	            
    	            <h1>Bree</h1>
    	            
    	            <figure>
    	                <img src="bree-specimen.png" alt="Bree" />
    	                <figcaption>* Specimen taken from <a href="http://www.fontshop.com/blog/newsletters/may09a/">FontShop&rsquo;s May 2009 Newsletter</a></figcaption>
    	            </figure>
    	            
    	            <section class="info easy-clearing">
    	                <dl>
    	                    <dt>Foundry</dt>
    	                        <dd><a href="http://www.type-together.com/bree">Type Together</a></dd>    	                        
    	                </dl>
    	                <dl>
    	                    <dt>More Info</dt>
    	                        <dd><a href="http://typographica.org/2009/typeface-reviews/bree/">Bree review on Typographica</a></dd>
    	                        <dd><a href="http://fontsinuse.com/typefaces/bree/">Fonts in Use: Bree</a></dd>
    	                </dl>
    	                <dl>
    	                    <dt>What I Used it For</dt>
    	                        <dd>A Kids&rsquo; Brand</dd>
    	                </dl>
    	            </section><!-- .info -->
    	               
    	        </section><!-- #bree -->
    	        
    	        <section id="clarendon" class="typeface"> 
    	            
    	            <h1>Clarendon</h1>
    	            
    	            <figure>
    	                <img src="clarendon-specimen.png" alt="Clarendon" />
    	                <figcaption>* Specimen taken from <a href="http://www.fontspring.com/fonts/fontsite/clarendon-fs">Fontspring</a></figcaption>
    	            </figure>
    	            
    	            <section class="info easy-clearing">
    	                <dl>
    	                    <dt>Distributor</dt>
    	                        <dd><a href="http://new.myfonts.com/fonts/bitstream/clarendon/">MyFonts</a></dd>    	                        
    	                </dl>
    	                <dl>
    	                    <dt>More Info</dt>
    	                        <dd><a href="http://en.wikipedia.org/wiki/Clarendon_(typeface)">Clarendon on Wikipedia</a></dd>
    	                        <dd><a href="http://typedia.com/explore/typeface/clarendon/">Clarendon on Typedia</a></dd>
    	                        <dd><a href="http://idsgn.org/posts/know-your-type-clarendon/">Know your type: Clarendon</a></dd>
    	                        <dd><a href="http://www.andymangold.com/clarendon-type-specimen-books/">Clarendon Type Specimen Books</a></dd>
    	                </dl>
    	                <dl>
    	                    <dt>What I Used it For</dt>
    	                        <dd><a href="/work/speaking/#sxsw2011">A new entry on my &ldquo;Speaking&rdquo; page</a></dd>
    	                </dl>
    	            </section><!-- .info -->
    	               
    	        </section><!-- #clarendon -->
    	        
    	        <h1 id="respond">What typefaces have <em>you</em> used this month?</h1>
	            
	        </div><!-- .inner -->
	    
	    </section><!-- #august2011-typefaces -->	    
	    
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
                    var disqus_identifier = 'august2011-typefaces';
                    var disqus_url = 'http://danielmall.com/articles/august2011-typefaces/';
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
        	        <time datetime="2011-08-27T11:51:33">Published August 27, 2011 at 11:51 <abbr title="Post Meridian">PM</abbr></time>
    	        </section><!-- /#article-info -->
    	        
    	        
    	        <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/carbon.php"); echo "\n"; ?>
	        
	        
    	    </div><!-- /.sub -->
    	    
    	    
    	</div><!-- #comments-wrap -->
	    
	        
	</div><!-- #comments -->
	
	
	<div class="wrap">
    	
    	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>
    	
    	
    </div><!-- #wrap -->
    
	
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>