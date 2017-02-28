<?php 
header("HTTP/1.1 301 Moved Permanently"); 
header("Location: http://v3.danielmall.com/articles/finished-businessology/"); 
?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head profile="http://gmpg.org/xfn/11">
  <title>&ldquo;Finished Business(ology),&rdquo; an article by Dan Mall</title>
  <meta name="description" content="The time has come for me to step away from Businessology." />
  <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?>

  <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>
  <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/jsReferenceHead.php"); echo "\n"; ?>
  <link rel="stylesheet" href="/articles/businessology-roadshow/businessology-roadshow.css" />
  <script src="//use.typekit.net/sjn0otc.js"></script>
  <script>
    try{
        Typekit.load();
        document.write('<link rel="stylesheet" href="/articles/businessology-roadshow/businessology-roadshow-typekit.css" />');
    }catch(e){}
  </script>

  <!-- Facebook -->
  <meta property="og:title" content="Finished Business(ology)" />
  <meta property="og:description"content="The time has come for me to step away from Businessology."/>
  <meta property="og:url" content="http://danielmall.com/articles/finished-businessology/" />
  <meta property="og:image" content="http://danielmall.com/articles/businessology-roadshow/home-thumb.png" />

</head>

<body id="article" class="articles">

	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>

	<div id="article-area-wrap">

	    <section id="businessology-roadshow" class="clearfix wrap hentry">

            <h1 class="entry-title">Finished Business(ology)</h1>

            <p>The time has come for me to step away from <a href="http://businessology.biz/">Businessology</a>.</p>
            
            <p>Two and a half years ago, my friend and CPA <a href="https://twitter.com/jasonmblumer">Jason Blumer</a> asked me if I&rsquo;d be interested in starting a podcast with him about running better design businesses. Since then, we&rsquo;ve done 35 episodes over three seasons with almost 100,000 listens about topics ranging from pricing to positioning to business models and a lot more. We even did 2 in-person events in New York and San Francisco where we got to spend a full day with agency owners, chatting about ways to do better work and make more money. We&rsquo;ve had incredible sponsors that believed in our content enough to support what we&rsquo;ve done. Best of all, we&rsquo;ve had incredible guests whose stories and experiences really made the show a joy to create.</p>
            
            <p>And now, I&rsquo;ve run out of things to contribute to the show, so it&rsquo;s time for me to move on.</p>
            
            <p>Jason will continue to run Businessology and really step it up in terms of being as valuable as it can be for design business owners. I have yet to meet anyone with more passion for helping business owners succeed than Jason. He was crucial in giving me the confidence to start and run <a href="http://superfriend.ly/">SuperFriendly</a>, and I&rsquo;ve seen him do it for countless others.</p>
            
            <p>As for me, I&rsquo;ll continue to try and help design businesses in other ways. I&rsquo;ll be beating my value pricing drum at places like the <a href="http://bureauofdigital.com/summits/digital-pm/2015">Digital PM Summit</a>, and I&rsquo;m still writing my pricing book (more info on that soon). I&rsquo;m also gonna focus even more effort on coaching design shops, design teams, creative directors, and designers on how to be more effective at their jobs, so <a href="/contact/">drop me a line</a> if you or your team could use a little kick in the pants.</p>
            
            <p>If you&rsquo;ve been a loyal Businessology listener, thanks for all your support for the last three seasons. And stick around, because Jason is going to be really doubling down on it. If you haven&rsquo;t heard the show yet, <a href="http://businessology.biz/">you&rsquo;re in for a treat</a>.</p>
            
            <p>And hey, if all goes well, maybe Jason will have me back on the show as a guest.</p>

            <p>Check out <a href="https://www.blumercpas.com/blog/changes-to-the-businessology-show">Jason&rsquo;s post</a> to read about where he&rsquo;ll take the show next.</p>
            
            <p>Thanks for listening!</p>

	    </section><!-- #businessology-roadshow -->

	</div><!-- /#article-area-wrap -->

	<?php

        echo readNext('Pricing', '/articles/pricing/');

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
                    var disqus_identifier = 'finished-businessology';
                    var disqus_url = 'http://danielmall.com/articles/finished-businessology/';
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
        	        <time datetime="2015-07-03T14:00:00">Published July 3, 2015 at 2:00 <abbr title="Post Meridian">PM</abbr></time>
    	        </section><!-- /.article-info -->


    	        <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/carbon.php"); echo "\n"; ?>


    	    </div><!-- /.sub -->


    	</div><!-- #comments-wrap -->


	</div><!-- #comments -->


	<div class="wrap">

    	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>


    </div><!-- #wrap -->


<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>
