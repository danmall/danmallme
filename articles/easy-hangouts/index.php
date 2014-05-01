<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head profile="http://gmpg.org/xfn/11">
  <title>&ldquo;The Easiest Way to Start a Hangout,&rdquo; an article by Dan Mall</title>
  <meta name="description" content="The Easiest Way to Start a Hangout" />
  <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?>

  <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>
  <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/jsReferenceHead.php"); echo "\n"; ?>
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,800" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="easy-hangouts.css" />

  <!-- Facebook -->
  <meta property="og:title" content="The Easiest Way to Start a Hangout" />
  <meta property="og:description"content="Use Google Calendar."/>
  <meta property="og:url" content="http://danielmall.com/articles/easy-hangouts/" />
  <meta property="og:image" content="http://danielmall.com/articles/easy-hangouts/home-thumb.png" />

</head>

<body id="article" class="articles">

	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>

	<div id="article-area-wrap">

	    <section id="easy-hangouts" class="clearfix wrap">

            <header class="article-title">

                <h1 class="main-heading">The Easiest Way to Start a Hangout</h1>

            </header><!-- .article-title -->

            <ol class="steps no-marker">

                <li class="step" id="step01" data-step-number="01">

                    <figure class="illo">
                        <img src="01-new.png" alt="New event" />
                    </figure>

                    <figcaption class="step-content">
                        <p>Open Google Calendar and create a new event. Choose <kbd class="cta-text">Edit event &raquo;</kbd></p>
                    </figcaption><!-- .step-content -->

                </li><!-- #step01 -->

                <li class="step" id="step02" data-step-number="02">

                    <figure class="illo">
                        <img src="02-video-call.png" alt="Video call added" />
                    </figure>

                    <figcaption class="step-content">
                        <p>Make sure a video call has been added and choose <kbd class="cta-button">Save</kbd></p>
                    </figcaption><!-- .step-content -->

                </li><!-- #step02 -->

                <li class="step" id="step03" data-step-number="03">

                    <figure class="illo">
                        <img src="03-join-video-call.png" alt="Join video call" />
                    </figure>

                    <figcaption class="step-content">
                        <p>Choose the event and select <kbd class="cta-text">Join video call</kbd></p>
                    </figcaption><!-- .step-content -->

                </li><!-- #step03 -->

                <li class="step" id="step04" data-step-number="04">

                    <figure class="illo">
                        <img src="04-hangout.jpg" alt="Join hangout" />
                    </figure>

                    <figcaption class="step-content">
                        <p>Join your hangout. Invite friends by sending them the <abbr title="Uniform Resource Locator">URL</abbr>.</p>
                    </figcaption><!-- .step-content -->

                </li><!-- #step04 -->


            </ol><!-- .steps -->

            <h1 class="main-heading">Happy hangout-ing!</h1>

	    </section><!-- #easy-hangouts -->

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
                    var disqus_identifier = 'easy-hangouts';
                    var disqus_url = 'http://danielmall.com/articles/easy-hangouts/';
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
