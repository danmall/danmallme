<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head>    
    <title>Dan Mall / Creative Director & Advisor</title>
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

    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/nav.php"); echo "\n"; ?>

    <section id="preamble" class="dm-u-padding--xs">

	    <h1>Dan Mall</h1>
	    <h2>Creative Director &amp; Advisor</h2>

	    <p class="dm-u-text--s dm-u-font--sans">I&rsquo;m <strong>Dan Mall</strong>, a creative director and advisor from Philly.  I&rsquo;m the director of <a href="http://superfriend.ly/">SuperFriendly</a>, a design collaborative that brings exquisite creative direction &amp; design to the world&rsquo;s most important and interesting organizations. I&rsquo;m an enthralled husband &amp; dad and co-founder of <a href="http://typedia.com/">Typedia</a> (an encyclopedia for typefaces) and <a href="http://businessology.biz/">Businessology</a> (a podcast and workshop series teaching designers how to run better businesses). You can find me on Twitter at <a href="http://twitter.com/danielmall">@danielmall</a>.</p>

	</section><!-- #preamble -->



    <section id="pricing-design" class="dm-u-padding--xs dm-u-clearfix">

    	<h1 class="dm-u-text--l">I wrote a book.</h1>

        <div class="dm-c-pricingDesignContainer">
            <?php require($_SERVER["DOCUMENT_ROOT"]."/i/home/pricing-design-cover-outlined.svg"); echo "\n"; ?>
        </div>

    	<p>Curabitur blandit tempus porttitor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec id elit non mi porta gravida at eget metus.</p>
    	<p>Nulla vitae elit libero, a pharetra augue. Nulla vitae elit libero, a pharetra augue. Maecenas faucibus mollis interdum. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo.</p>

    	<!-- todo: insert PD book image with AJAX -->

    </section><!-- #pricing-design -->



    <section id="testimonials" class="dm-c-testimonials">

        <h1 class="dm-u-move--offscreen">Quotes about Dan</h1>

    	<blockquote class="dm-dp-quote">
    		<p>Few designers can capture a brand&rsquo;s essence and deliver a design that takes that brand to a new level. Dan did that at the pitch meeting.</p>
			<address class="dm-dp-quote_attribution"><strong>Rob Walker</strong>, Former Digital Marketing Manager, Crayola</address>
    	</blockquote>

    	<blockquote class="dm-dp-quote">
    		<p>I promise that Dan Mall is more inspiring and talented than you.</p>
			<address class="dm-dp-quote_attribution"><strong>Chris Matthews</strong>, Strategy, Apple</address>
    	</blockquote>

    	<blockquote class="dm-dp-quote">
    		<p>Dan is an amazing teacher and mentor to everyone he works with&mdash;no matter the discipline or level. My only regret about working with Dan is that it didn&rsquo;t last longer.</p>
			<address class="dm-dp-quote_attribution"><strong>Karina Elise</strong>, Creative Lead, Google</address>
    	</blockquote>

    	<blockquote class="dm-dp-quote">
    		<p>Dan certainly has one of the best minds for design in our industry, but he takes it so much further in his unparalleled grace and his seamless collaboration with his team and his clients.</p>
			<address class="dm-dp-quote_attribution"><strong>Mike Kenny</strong>, Former Director of User Experience, Code &amp; Theory</address>
    	</blockquote>

    </section><!-- #testimonials -->



    <section id="articles">

        <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1696&amp;serve=CVYD42T&amp;placement=danielmallcom" id="_carbonads_js"></script>

    	<h1 class="dm-dp-boxedHeadline">Latest Articles</h1>

        <?php parseList($_SERVER["DOCUMENT_ROOT"].'/articles/articles.json', 5, 'abridged'); ?>

    	<p><a href="/articles/">See all articles</a></p>

    </section><!-- #articles -->



    <section id="hire-me" class="dm-u-padding--xs">

        <h1 class="dm-dp-pointerHeadline">Hire me to help with</h1>

        <ol class="dm-u-bullets--none dm-u-marginLeft--0">
            <li>
                <h2 class="dm-u-text--m">Making a digital product your organization can only dream of.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </li>
            <li>
                <h2 class="dm-u-text--m">Growing your product team in smarts &amp; skills.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </li>
            <li>
                <h2 class="dm-u-text--m">Taking your agency to the next level.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </li>
        </ol>

        

    </section><!-- #hire-me -->



<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>    

<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>