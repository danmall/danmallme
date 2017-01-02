<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head>    
    <title>Dan Mall / Creative Director &amp; Advisor</title>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?> 
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>

    <!-- Thanks Jeremy! https://adactio.com/journal/9881  -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@danmall" />
    <meta name="twitter:url" property="og:url" content="http://<?php echo $_SERVER['SERVER_NAME']; ?>/" />
    <meta name="twitter:title" property="og:title" content="Dan Mall" />
    <meta name="twitter:description" property="og:description" content="Creative Director &amp; Advisor" />
    <meta name="twitter:image" property="og:image" content="http://<?php echo $_SERVER['SERVER_NAME']; ?>/thumb.png" />

</head>


<body class="dm-page--home">
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <section id="preamble" class="dm-c-preamble">

	    <h1 class="dm-u-marginBottom--xs">Dan Mall</h1>
	    <h2 class="dm-u-text--m">Creative Director &amp; Advisor</h2>

	    <p class="dm-u-text--s dm-u-font--sans">I&rsquo;m <strong>Dan Mall</strong>, a creative director and advisor from Philly.  I&rsquo;m the founder and director of <a href="http://superfriend.ly/">SuperFriendly</a>, a design collaborative that brings exquisite creative direction and design to the world&rsquo;s most important and interesting organizations. I&rsquo;m also the co-founder and <abbr title="Chief Executive Officer">CEO</abbr> of <a href="http://superbooked.com/">SuperBooked</a>, a service that helps you find work with a little help from your friends.</p>

        <p class="dm-dp-seeAll dm-u-text--s">
            <a class="dm-dp-seeAll_link" href="/about/">Find out more about me</a>
        </p>

        <ul class="dm-dp-vertSepNav">
            <li class="dm-dp-vertSepNav_item"><a href="/about/">About</a>
            <li class="dm-dp-vertSepNav_item"><a href="/articles/">Articles</a>
            <li class="dm-dp-vertSepNav_item"><a href="/contact/">Contact</a>
        </ul>

        <?php // require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/nav.php"); echo "\n"; ?>

	</section><!-- #preamble -->



    <section id="pricing-design" class="dm-u-padding--m dm-u-clearfix">

    	<h1 class="dm-u-text--m dm-u-font--normal">I wrote a book.</h1>

        <!-- todo: insert PD book image with AJAX -->
        <div class="dm-c-pricingDesignContainer">
            <?php require($_SERVER["DOCUMENT_ROOT"]."/i/home/pricing-design-cover-outlined.svg"); echo "\n"; ?>
        </div>

    	<p>Curabitur blandit tempus porttitor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec id elit non mi porta gravida at eget metus.</p>

    	<p>Nulla vitae elit libero, a pharetra augue. Nulla vitae elit libero, a pharetra augue. Maecenas faucibus mollis interdum. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo.</p>

    </section><!-- #pricing-design -->



    <section id="testimonials" class="dm-c-testimonials dm-u-clearfix">

        <h1 class="dm-u-move--offscreen">Quotes about Dan</h1>

        <?php parseQuotes($_SERVER["DOCUMENT_ROOT"].'/quotes.json', 4); ?>

    </section><!-- #testimonials -->



    <section id="articles" class="dm-u-padding--m">

        <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1696&amp;serve=CVYD42T&amp;placement=danielmallcom" id="_carbonads_js"></script>

    	<h1 class="dm-dp-boxedHeadline dm-u-marginBottom--xl">Latest Articles</h1>

        <?php parseList($_SERVER["DOCUMENT_ROOT"].'/articles/articles.json', 5, 'abridged', 'large'); ?>

    	<p class="dm-dp-seeAll dm-dp-sepChunk">
            <a class="dm-dp-seeAll_link" href="/articles/">See all Articles</a>
        </p>

    </section><!-- #articles -->



    <section id="hire-me" class="dm-c-hireMe">

        <h1 class="dm-dp-pointerHeadline">Hire me to</h1>

        <div class="dm-dp-textPassage">
            <ol>
                <li class="dm-c-hireMe_step">
                    <h2 class="dm-u-text--s dm-u-marginBottom--0">Make a digital product your organization can only dream of.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    <p class="dm-dp-seeAll dm-u-text--s">
                        <a class="dm-dp-seeAll_link" href="http://superfriend.ly/">Visit SuperFriendly</a>
                    </p>
                </li>
                <li class="dm-c-hireMe_step">
                    <h2 class="dm-u-text--s dm-u-marginBottom--0">Speak to your team or at your event.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    <p class="dm-dp-seeAll dm-u-text--s">
                        <a class="dm-dp-seeAll_link" href="/contact/">Contact me about speaking</a>
                    </p>
                </li>
                <li class="dm-c-hireMe_step">
                    <h2 class="dm-u-text--s dm-u-marginBottom--0">Take your agency to the next level.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    <p class="dm-dp-seeAll dm-u-text--s">
                        <a class="dm-dp-seeAll_link" href="/contact/">Contact me about coaching</a>
                    </p>
                </li>
            </ol>
        </div>

        

    </section><!-- #hire-me -->



<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>    

<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>