<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head profile="http://gmpg.org/xfn/11">
  <title>&ldquo;The Businessology Roadshow,&rdquo; an article by Dan Mall</title>
  <meta name="description" content="Learn about the business of design in person." />
  <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?>

  <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>
  <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/jsReferenceHead.php"); echo "\n"; ?>
  <link rel="stylesheet" href="businessology-roadshow.css" />
  <script src="//use.typekit.net/sjn0otc.js"></script>
  <script>
    try{
        Typekit.load();
        document.write('<link rel="stylesheet" href="businessology-roadshow-typekit.css" />');
    }catch(e){}
  </script>

  <!-- Facebook -->
  <meta property="og:title" content="The Businessology Roadshow" />
  <meta property="og:description"content="Learn about the business of design in person."/>
  <meta property="og:url" content="http://danielmall.com/articles/businessology-roadshow/" />
  <meta property="og:image" content="http://danielmall.com/articles/businessology-roadshow/home-thumb.png" />

</head>

<body id="article" class="articles">

	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>

	<div id="article-area-wrap">

	    <section id="businessology-roadshow" class="clearfix wrap hentry">

            <h1 class="entry-title">The Businessology Roadshow</h1>

            <p>I worked for 5 agencies (and freelanced for dozens) over 9 years before starting <a href="http://superfriend.ly/">my own design collaborative</a>. A year before opening, I <a href="http://www.slideshare.net/fitc_slideshare/prototyping-your-business-with-dan-mall">prototyped</a> all the aspects of my business&mdash;billing, type of work, contracts, rates, and more&mdash;so that I wasn&rsquo;t completely in the dark on day one. I was fortunate to be able to methodically plan my entry into running my own business, but others aren&rsquo;t so lucky. Some are forced into it after being laid off or fired. Others get so frustrated at their day jobs and freelancing is the best escape. Others start with the best intentions for doing design or development a different way but haven&rsquo;t anticipated all the facets of running a successful business.</p>

            <p>SuperFriendly has been open for almost three years. The goal for <a href="/articles/superfriendly-annual-report-2012/">year one</a> was to see if I could even do it. I was hoping I could make a 5-figure salary; I ended up grossing about half a million dollars. Year two was even better, grossing just shy of a million dollars. Year three projections look to be slightly more. I don&rsquo;t say this to brag; I feel incredibly blessed to have been more financially (and emotionally) successful than I thought. I think it happened because I spent a lot of time, learning about and experimenting with two of the most important things a business can focus on: positioning and pricing. </p>

            <p>At the beginning of 2013, <a href="http://www.jasonblumer.com/">Jason Blumer</a> and I started a podcast called <a href="http://www.businessology.biz/">The Businessology Show</a> because we didn&rsquo;t think enough people were talking about how to run successful design businesses. After receiving a lot of great feedback about the things we were talking about, we decided to take our show on the road. In addition to spending an hour every two weeks recording episodes on these general topics, we really wanted spend time in-person with agency owners and freelancers to talk and work through the specifics of how to position your services and charge appropriately for them in a way that makes your customers happy and your business profitable. </p>

            <p>So, we created <a href="http://roadshow.businessologyshow.biz/">The Businessology Roadshow</a>. We&rsquo;ll be in NYC on August 19 and San Francisco on October 23. Today&rsquo;s the last day to get a $200 off discount for the NYC event, so cash in while you can.</p>

            <p>Hope to see you there!</p>





	    </section><!-- #businessology-roadshow -->

	</div><!-- /#article-area-wrap -->

	<?php

        echo readNext('Get Comfortable', '/articles/get-comfortable/');

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
                    var disqus_identifier = 'businessology-roadshow';
                    var disqus_url = 'http://danielmall.com/articles/businessology-roadshow/';
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
        	        <time datetime="2014-06-19T06:16:00">Published June 16, 2014 at 6:16 <abbr title="Ante Meridian">AM</abbr></time>
    	        </section><!-- /.article-info -->


    	        <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/carbon.php"); echo "\n"; ?>


    	    </div><!-- /.sub -->


    	</div><!-- #comments-wrap -->


	</div><!-- #comments -->


	<div class="wrap">

    	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>


    </div><!-- #wrap -->


<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>
