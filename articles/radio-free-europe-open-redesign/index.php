<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head profile="http://gmpg.org/xfn/11">
  <title>&ldquo;Radio Free Europe,&rdquo; an article by Dan Mall</title>
  <meta name="description" content="Radio Free Europe" />
  <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?>

  <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>
  <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/jsReferenceHead.php"); echo "\n"; ?>
  <link href="http://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet" />
  <link rel="stylesheet" href="rfe.css" />

  <!-- Facebook -->
  <meta property="og:title" content="Radio Free Europe" />
  <meta property="og:description"content="An open redesign."/>
  <meta property="og:url" content="http://danielmall.com/articles/radio-free-europe-open-redesign/" />
  <meta property="og:image" content="http://danielmall.com/articles/radio-free-europe-open-redesign/home-thumb.png" />

</head>

<body id="article" class="articles">

	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>

	<div id="article-area-wrap">

	    <section id="rfe" class="clearfix wrap">

        <header class="article-title-wrap">

          <div class="inner">

            <img class="article-title-logo" src="rferl-original.svg" alt="Radio Free Europe" />
            <h1 class="article-title offscreen">Radio Free Europe</h1>
            <h2 class="article-subtitle">An open redesign</h2>

          </div><!-- .inner -->

        </header><!-- .article-title-wrap -->

        <div class="inner">

          <p>A few weeks ago, <a href="http://timkadlec.com/">Tim Kadlec</a>, <a href="http://mattecook.com/">Matt Cook</a>, and I went to Prague to kick off a new project with <a href="http://www.rferl.org/">Radio Free Europe/Radio Liberty</a>, an organization that reports the news in countries where a free press is banned by the government or not fully established. What they do is so important that people have been arrested or even hanged for accessing their content.</p>
          <p>After spending two days with the team there, I&rsquo;m convinced that they are some of the most thoughtful and sharp clients I&rsquo;ve had the pleasure of working with. They&rsquo;re doing some incredible work to bring content to as many people as they can. They get hundreds of millions of monthly page views and serve about 150 languages over 70 countries. They&rsquo;re doing some really smart things regarding progressive enhancement, performance, content management, and more. They&rsquo;re also facing really <a href="http://trentwalton.com/2014/03/10/device-agnostic/">hostile environments</a>: some of their users&rsquo; fastest speeds are on a 2G network through mobile devices where wifi is non-existent.</p>
          <p>They asked <a href="http://superfriend.ly/">SuperFriendly</a> to work with them to optimize their designs and code, which we’re honored to do. Even more exciting, we&rsquo;re doing the entire project in the open, writing up parts of the project along the way from as many perspectives as we can. Kim Conger, design director for <abbr title="Radio Free Europe">RFE</abbr>/<abbr title="Radio Liberty">RL</abbr> has kicked us off with <a href="http://responsivedesign.rferl.org/content/responsive-web-besting/25319803.html">her initial thoughts on the project&rsquo;s background</a>. Look for lots of topics here, from details and templates for proper <a href="http://timkadlec.com/2013/01/setting-a-performance-budget/">performance budgeting</a>, Arabic typography, converting <a href="http://patternlab.io/">Pattern Lab</a> to .NET, and lots more. We&rsquo;ll be eating our own dog food by using <a href="http://www.pangea-cms.com/">Pangea</a>&mdash;the homegrown <abbr title="Content Management System">CMS</abbr> that powers the <abbr>RFE</abbr>/<abbr>RL</abbr> site, in addition to its other services—to blog, so we&rsquo;ll actually be in the same environment we&rsquo;re helping to shape.</p>
          <p>What would you like us to write about? What parts of this process make you the most curious?</p>
          <p>Keep your eyes peeled for updates. Follow <a href="http://twitter.com/tkadlec">@tkadlec</a>, <a href="http://twitter.com/mattercook">@mattecook</a>, or <a href="http://twitter.com/danielmall">me</a> for the latest and greatest. Or keep checking back at <a href="http://responsivedesign.rferl.org/archive/blog/latest/16951/16951.html">responsivedesign.rferl.org</a>.</p>
          <p>Check out Tim&rsquo;s perspetive in his post, &ldquo;<a href="http://timkadlec.com/2014/04/reaching-everyone-at-radio-free-europe/">Reaching Everyone at Radio Free Europe</a>.&rdquo;</p>


        </div><!-- .inner -->

	    </section><!-- #rfe -->

	</div><!-- /#article-area-wrap -->

	<?php

        echo readNext('Visual Inventory', '/articles/visual-inventory/');

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
                    var disqus_identifier = 'rferl';
                    var disqus_url = 'http://danielmall.com/articles/radio-free-europe-open-redesign/';
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
        	        <time datetime="2014-04-07T10:00:00">Published Apr 7, 2014 at 10:00 <abbr title="Ante Meridian">AM</abbr></time>
    	        </section><!-- /.article-info -->


    	        <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/carbon.php"); echo "\n"; ?>


    	    </div><!-- /.sub -->


    	</div><!-- #comments-wrap -->


	</div><!-- #comments -->


	<div class="wrap">

    	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>


    </div><!-- #wrap -->


<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>
