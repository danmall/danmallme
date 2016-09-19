<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head profile="http://gmpg.org/xfn/11">
    <title>&ldquo;Accountability,&rdquo; an article by Dan Mall</title>
    <meta name="description" content="Accountability" />
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
    <meta name="twitter:url" property="og:url" content="http://danielmall.com/articles/accountability/" />
    <meta name="twitter:title" property="og:title" content="Accountability" />
    <meta name="twitter:description" property="og:description" content="A 3-step formula for accountability between yourself and those you interact with." />
    <meta name="twitter:image" property="og:image" content="http://danielmall.com/articles/accountability/home-thumb.png" />
    
</head>

<body id="article" class="articles">	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>
	
	<div id="article-area-wrap">
			
	    <section class="clearfix wrap vanilla">			
			
			<h1 class="article-header-title">Accountability</h1>
			
			<p>One of the best talks I&rsquo;ve ever seen was a short one by <a href="https://twitter.com/CoryBooker">Senator Cory Booker</a> at <a href="http://brooklynbeta.org/">Brooklyn Beta</a> in 2012. In the <abbr title="Question and Answer">Q&amp;A</abbr> section, someone asked how he keeps his team accountable. His answer stuck with me, and I use it often when I&rsquo;m working with apprentices or coaching design teams and agency owners.</p>

            <p>Senator Booker shared his simple formula for creating accountability between two or more parties. There are three levels:</p>

            <ol>
                <li><strong>Stated standards</strong>. Having stated standards is the foundation of accountability. One can only be held accountable if both parties agree to the same standard.</li>
                <li><strong>A system of measurements.</strong> Both parties need to agree on a way to measure if they&rsquo;ve met said standards.</li>
                <li><strong>Effects: either positive, negative, or both.</strong> Both parties need to agree on what will happen after those standards are met and/or those standards are not met.</li>
            </ol>

            <p>Without those three things, you can&rsquo;t have accountability.</p>

            <p>I once coached a creative director&mdash;let&rsquo;s call him Tom&mdash;and his three designers. Tom was unhappy with the quality of the designers&rsquo; work and thought he needed to spend more hands-on time with them. The designers all agreed that they&rsquo;d value more of Tom&rsquo;s time but were skeptical about that actually happening since Tom was often pulled in many different directions.</p>

            <p>&ldquo;I want you all to hold me accountable to spending more time with you,&rdquo; Tom said confidently. Then he moved on to another topic.</p>

            <p>&ldquo;Hang on a sec,&rdquo; I interjected. &ldquo;<em>How</em> can they hold you accountable for that? What are you actually committing to?&rdquo;</p>

            <p>&ldquo;Well, I&rsquo;ll set up reviews with each of them twice a week.&rdquo;</p>

            <p>&ldquo;When will you do that by?&rdquo; I asked.</p>

            <p>A bit taken aback by being put on the spot, Tom thought for a few seconds, then replied, &ldquo;By the end of next week, I&rsquo;ll put review times on everyone&rsquo;s calendars.&rdquo; (Standards that can be measured.)</p>

            <p>&ldquo;Awesome!&rdquo; I said. &ldquo;What should happen if you don&rsquo;t send those calendar invitations out by the end of the week?&rdquo;</p>

            <p>&ldquo;Oh, I&rsquo;ll definitely do it,&rdquo; Tom quickly retorted.</p>

            <p>&ldquo;That&rsquo;s great,&rdquo; I replied, &ldquo;but what happens if you don&rsquo;t?&rdquo;</p>

            <p>A designer quickly jumped in. &ldquo;Then we get to carry on what we do as usual, but Tom doesn&rsquo;t get to complain about it.&rdquo; (Effects.)</p>

            <p>&ldquo;Sounds fair to me,&rdquo; I offered. &ldquo;Tom, what do you think?&rdquo;</p>

            <p>Quiet for a moment, Tom reluctantly conceded. &ldquo; Yeah, that sounds fair. I guess I gotta put up or shut up, right?&rdquo;</p>

            <p>Accountability is about motivating each party to do what they commit to. It&rsquo;s a bit awkward to get used to at first, but with practice, you&rsquo;ll find it more natural to implement with your colleagues, bosses, clients, and even friends and family.</p>

            <?php /* ?>
            <footer class="footnote">
                <p>Also published on <a href="https://medium.com/@danielmall/oil-change-pizza-9257aba3562b#.r6seh4x9e">Medium</a>.</p>
            </footer><!-- .footnote -->
            <?php */ ?>
			
	    </section><!-- .vanilla -->	  	
	    
	</div><!-- /#article-area-wrap -->	

	<?php

        echo readNext('Researching Design Systems', '/articles/researching-design-systems/');

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
                    var disqus_identifier = 'accountability';
                    var disqus_url = 'http://danielmall.com/articles/accountability/';
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
        	        <time datetime="2016-09-19T20:25:00">Published September 19, 2016 at 8:25 <abbr title="Post Meridian">PM</abbr></time>
    	        </section><!-- /.article-info -->
    	        
    	        
    	        <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/carbon.php"); echo "\n"; ?>
	        
	        
    	    </div><!-- /.sub -->
    	    
    	    
    	</div><!-- #comments-wrap -->
	    
	        
	</div><!-- #comments -->
	
	
	<div class="wrap">
    	
    	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>
    	
    	
    </div><!-- #wrap -->
    
	
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>
