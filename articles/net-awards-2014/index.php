<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head profile="http://gmpg.org/xfn/11">
    <title>&ldquo;The Net Awards 2014: How I&rsquo;m voting,&rdquo; an article by Dan Mall</title>
    <meta name="description" content="Two years later, this site is finally responsive." />
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?>
    
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>  	
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/jsReferenceHead.php"); echo "\n"; ?>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,400italic,700' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="net-awards-2014.css" />
    
    <!-- Facebook -->
    <meta property="og:title" content="The Net Awards 2014!" />
    <meta property="og:description"content="How I&rsquo;m voting."/>	
    <meta property="og:url" content="http://danielmall.com/articles/net-awards-2014/" />
    <meta property="og:image" content="http://danielmall.com/articles/net-awards-2014/net-awards-2014.png" />
    
    
</head>

<body id="article" class="articles">	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>
	
	<div id="article-area-wrap">
	    
	    <section id="net-awards-2014" class="clearfix">

            <header class="article-header">
			
    			<h1 class="article-title">How I&rsquo;m Voting</h1><!-- .article-title -->    

                <img class="title-logo" src="net-awards-logo.svg" alt="The Net Awards 2014" />

            </header><!-- .article-header -->

            <p>There are lots of great people and organizations, nominated for this year&rsquo;s <a href="https://thenetawards.com/">Net Awards</a>. I&rsquo;m very blessed to have had the good fortune of being nominated in a few categories myself, along with many friends. I&rsquo;m also a <a href="https://thenetawards.com/judges/">judge</a> too. Because of the combination of those factors, I thought I might share my thought process in who I&rsquo;m voting&mdash;and not voting&mdash;for.</p>

            <p>My main criterion is this: <em>who did something incredible last year that I can recall</em>? Everyone on this list has done some incredible things, but, seeing as it&rsquo;s an annual award show, I try to keep the focus on what happened in 2013. Also, if I can&rsquo;t recall some specific work, then I&rsquo;m essentially voting for a person/team solely because I like them. I don&rsquo;t want this to be a popularity contest; I&rsquo;d prefer that people were rewarded on merit. Here goes.</p>

            <section id="team-awards" class="award-type">

                <h1 class="award-type-headline">Team Awards</h1>

                <article class="award-type-entry">
                    <h1 class="award-type-entry-headline">
                        <a class="award-type-entry-brand" href="https://thenetawards.com/vote/new-agency/arbitrary/">
                            <img class="award-type-entry-brand-image" src="arbitrary.png" alt="" />
                            Arbitrary
                        </a>
                        for <strong>New Agency of the Year</strong>
                    </h1>

                    <p>I&rsquo;ve seen Arbitrary&rsquo;s work this past year and even collaborated with them. I&rsquo;ll leave it to them to decide what to divulge publicly yet, but you&rsquo;ll be blown away by their quality of work.</p>

                </article><!-- .award-type-entry -->

                <article class="award-type-entry">
                    <h1 class="award-type-entry-headline">
                        <span class="award-type-entry-brand award-type-entry-brand-abstain">
                            &times;
                        </span>
                        for <strong>Team of the Year</strong>
                    </h1>

                    <p>Because I&rsquo;m part of a nomination in this category, I&rsquo;ll abstain from voting. If you enjoyed our work on <a href="/articles/techcrunch-responsive-redesign/">TechCrunch</a> or <a href="/responsive-mobile-entertainment-weekly/">Entertainment Weekly</a>, I&rsquo;d appreciate if you <a href="https://thenetawards.com/vote/team/the-globalmoxie-team/">gave us a vote</a>, but I won&rsquo;t vote in this category myself.</p>

                </article><!-- .award-type-entry -->

                <article class="award-type-entry">
                    <h1 class="award-type-entry-headline">
                        <a class="award-type-entry-brand" href="https://thenetawards.com/vote/agency/teehan-lax/">
                            <img class="award-type-entry-brand-image" src="teehan.gif" alt="" />
                            Teehan+Lax
                        </a>
                        for <strong>Agency of the Year</strong>
                    </h1>

                    <p>They launched <a href="http://www.teehanlax.com/">a great new site</a>, <a href="http://www.teehanlax.com/story/medium/">helped make Medium a wonderful platform</a>, released <a href="http://labs.teehanlax.com/project/hyperlapse">Hyperlapse</a>, and kept their iPhone PSD current with <a href="http://www.teehanlax.com/tools/iphone/">an iOS7 version</a>. They deserve the award.</p>

                </article><!-- .award-type-entry -->

            </section><!-- .team-awards -->
            
	    </section><!-- #net-awards-2014 -->	    
	    
	</div><!-- /#article-area-wrap -->
	
    <?php

        echo readNext('Progressive Enhancement. Still alive and kickin&rsquo;.', '/articles/progressive-enhancement/');

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
                    var disqus_identifier = 'net-awards-2014';
                    var disqus_url = 'http://danielmall.com/articles/net-awards-2014/';
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