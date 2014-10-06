<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head profile="http://gmpg.org/xfn/11">
  <title>&ldquo;Creative Cloud Libraries,&rdquo; an article by Dan Mall</title>
  <meta name="description" content="A new Photoshop feature for designing systems." />
  <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?>

  <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>
  <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/jsReferenceHead.php"); echo "\n"; ?>
  <link rel="stylesheet" href="cc-libraries.css" />
  <script src="//use.typekit.net/cab0tbh.js"></script>
  <script>
    try{
        Typekit.load();
        document.write('<link rel="stylesheet" href="cc-libraries-typekit.css" />');
    }catch(e){}
  </script>


  <!-- Facebook -->
  <meta property="og:title" content="Creative Cloud Libraries" />
  <meta property="og:description"content="A new Photoshop feature for designing systems."/>
  <meta property="og:url" content="http://danielmall.com/articles/creative-cloud-libraries/" />
  <meta property="og:image" content="http://danielmall.com/articles/creative-cloud-libraries/home-thumb.png" />

</head>

<body id="article" class="articles">

	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>

	<div id="article-area-wrap">

	    <section id="cc-libraries" class="hentry">

            <h1 class="entry-title">Creative Cloud Libraries</h1>

            <p>I recently <a href="/articles/sketchlive/">gave Sketch a run for its money</a>, and, while I don&rsquo;t think it&rsquo;ll be a replacement for my graphic/web/<abbr title="user interface">UI</abbr> design tool of choice&mdash;Photoshop&mdash;it did point out a few features I&rsquo;ve longed for in Photoshop (and even some I didn&rsquo;t realize would be so useful). The more I design responsive websites, the more I realize I&rsquo;m <a href="http://bradfrostweb.com/blog/post/atomic-web-design/">designing systems and not pages</a>.  Having smart tools that support this kind of design process is becoming increasingly more important.</p>

            <p>I&rsquo;m fortunate to be part of a small group of people that gets to see what some of the Adobe team is working on before it gets released to the public, an honor for a Photoshop <abbr title="original gangster">OG</abbr> and enthusiast like me. Today at MAX, Adobe is announcing a improvements to Photoshop, my favorite of which is a feature called Libraries. It&rsquo;s a game changer in the way I design smart responsive systems. When you get the new version Photoshop <abbr title="Creative Cloud">CC</abbr> 2014, you&rsquo;ll see a panel that looks like this:</p>

            <img src="libraries-panel.png" alt="Libraries panel in Photoshop CC 2014" />

            <p>As you can see, you can drag just about anything from a Photoshop document into your library to quickly make it a reusable elements. (This is one of the features I enjoy most about Flash; it&rsquo;s about time that it made its way into other Adobe applications.) In short, Libraries let you collect a system of elements in one place in order to assemble layouts more quickly. Sound familiar? (Hint: responsive design!) Let&rsquo;s put it through the wringer.</p>

            <p>Recently, <a href="http://patternlab.io/">Pattern Lab</a> is one of the main deliverables I&rsquo;ve been leaving with clients. I&rsquo;ll design a series of elements, build them in <abbr title="HyperText Markup Language">HTML</abbr>/<abbr title="Cascading Style Sheets">CSS</abbr>/<abbr title="JavaScript">JS</abbr>, and train them on how to quickly and smartly put these elements together. I&rsquo;ll do a few examples as a starter but am generally more into teaching them to fish instead of handling the fish myself. I don&rsquo;t really like fish much. Some of it tastes good though. I&rsquo;m really into sushi lately. This metaphor has expired.</p>

            <p>Here&rsquo;s what that process looked like on my end. I previously would make a separate Photoshop file for each organism:</p>

            <img src="finder.png" alt="My previous approach for organizing elements" />

            <p>Creating layouts then consisted of a laborious process of opening a <abbr title="Photoshop Document">PSD</abbr>, duplicating layers or layer groups in a new document, and modifying instances from there. Admittedly a first world problem, but when you compare that to writing one-line includes in <a href="http://ianfeather.co.uk/a-maintainable-style-guide/">maintainable style guides</a> to assemble pieces, it&rsquo;s no wonder that our industry prefers the awfulness of &ldquo;designing in the browser,&rdquo; or, more accurately, guessing in a code editor.</p>

            <p>Instead, once the elements are designed, I&rsquo;m able to quickly use Libraries to assemble the views I need to test out how well the elements fit together within seconds.</p>

            <img src="libraries.gif" alt="Using Libraries" />

            <p>Although seeing these things in the browser is the most accurate representation of the final outcome, I often only need a simple approximation, and Libraries are exactly what the doctor ordered. This style of working follows my long-preached approach of the <a href="http://typecast.com/seminars/post-comp">highest fidelity in the shortest amount of time</a>.</p>

            <p>Give Libraries a whirl for yourself. I&rsquo;d love to hear about how you&rsquo;re using it!</p>

	    </section><!-- #cc-libraries -->



	</div><!-- /#article-area-wrap -->

	<?php

        echo readNext('#sketchlive', '/articles/sketchlive/');

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
                    var disqus_identifier = 'cc-libraries';
                    var disqus_url = 'http://danielmall.com/articles/creative-cloud-libraries/';
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
        	        <time datetime="2014-10-06T09:15:00">Published October 6, 2014 at 9:15 <abbr title="Ante Meridian">AM</abbr></time>
    	        </section><!-- /.article-info -->


    	        <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/carbon.php"); echo "\n"; ?>


    	    </div><!-- /.sub -->


    	</div><!-- #comments-wrap -->


	</div><!-- #comments -->


	<div class="wrap">

    	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>


    </div><!-- #wrap -->

    <script>

            var colorClasses = ['green', 'yellow', 'orange', 'red'];

            $('#sketchlive a').mouseover(function(){
                $(this).removeClass();
                //assignClass();
                $(this).addClass(assignClass());
            });

            function assignClass(){
                var n = Math.floor((Math.random() * 4));
                return colorClasses[n];
                //console.log(n);
            }

        </script>


<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>
