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

	    <h1 class="dm-c-preamble_name">
            <div class="dm-c-preamble_name--dan">Dan</div>
            <div class="dm-c-preamble_name--mall">Mall</div>
        </h1>


        <div class="dm-c-preamble_dan"></div>
        <div class="dm-c-preamble_circle">
            <div class="dm-c-preamble_circle_inner"></div>
        </div>

	    <h2 class="dm-c-preamble_tagline">
            <div class="dm-c-preamble_tagline_term">Creative Director</div>
            <div class="dm-u-move--offscreen"> &amp; </div>
            <div class="dm-c-preamble_tagline_term dm-c-preamble_tagline_term--alt">Advisor</div>
        </h2>

	</section><!-- #preamble -->

    <section class="dm-c-intro">

        <p class="">I&rsquo;m <strong>Dan Mall</strong>, a creative director and advisor from Philly.  I&rsquo;m the founder and director of <a href="http://superfriend.ly/">SuperFriendly</a>, a design collaborative that brings exquisite creative direction and design to the world&rsquo;s most important and interesting organizations. I&rsquo;m also the co-founder and <abbr title="Chief Executive Officer">CEO</abbr> of <a href="http://superbooked.com/">SuperBooked</a>, a service that helps you find work with a little help from your friends.</p>

        <?php /* ?>
        <p class="dm-dp-seeAll dm-u-text--s">
            <a class="dm-dp-seeAll_link" href="/about/">Find out more about me</a>
        </p>
        <?php */ ?>

        <ul class="dm-dp-vertSepNav">
            <?php /* ?><li class="dm-dp-vertSepNav_item"><a href="/about/">About</a></li><?php */ ?>
            <li class="dm-dp-vertSepNav_item"><a href="/articles/">Articles</a></li>
            <li class="dm-dp-vertSepNav_item"><a href="/speaking-podcasts/">Speaking &amp; Podcasts</a></li>
            <li class="dm-dp-vertSepNav_item"><a href="/contact/">Contact</a></li>
        </ul>

    </section>




    <section id="pricing-design" class="dm-c-pricingDesign dm-u-clearfix">

    	<h1 class="dm-c-pricingDesign_headline dm-u-text--m dm-u-font--normal">I wrote a book.</h1>

        <!-- todo: insert PD book image with AJAX -->
        <div class="dm-c-pricingDesignContainer">
            <a class="dm-u-bg--none" href="https://abookapart.com/products/pricing-design">
                <?php require($_SERVER["DOCUMENT_ROOT"]."/i/home/pricing-design-cover-outlined.svg"); echo "\n"; ?>
            </a>
        </div>

        <div class="dm-dp-textPassage">

        	<p><span class="dm-dp-openingLines">Many freelancers and agencies</span> either under-charge for their services or overcharge to the point where their prospective customers are forced to look elsewhere for help. When asked to justify their prices, they awkwardly mumble a fictional hourly rate multiplied by an ill-informed estimate of hours. There&rsquo;s a better way.</p>

            <p>Together with <cite>A Book Apart</cite>, I wrote <cite><a href="https://abookapart.com/products/pricing-design">Pricing Design</a></cite>, a guide for helping you speak confidently with your customers about the value you&rsquo;ll deliver, questions to help you uncover that value, and a hefty case study to show you what it all looks like in practice.</p>

        </div><!-- .dm-dp-textPassage -->

    </section><!-- #pricing-design -->



    <section id="testimonials" class="dm-c-testimonials dm-u-clearfix">

        <h1 class="dm-u-move--offscreen">Quotes about Dan</h1>

        <?php parseQuotes($_SERVER["DOCUMENT_ROOT"].'/quotes.json', 4); ?>

    </section><!-- #testimonials -->


    <section id="articles" class="dm-c-articlesListWrap">

        <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1696&amp;serve=CVYD42T&amp;placement=danielmallcom" id="_carbonads_js"></script>

    	<h1 class="dm-dp-boxedHeadline dm-u-marginBottom--xl">Latest Articles</h1>

        <div class="dm-c-articlesList">
            <?php parseList($_SERVER["DOCUMENT_ROOT"].'/articles/articles.json', 4, 'abridged', 'large'); ?>
        </div>

    	<p class="dm-dp-seeAll dm-dp-sepChunk dm-u-clear--both">
            <a class="dm-dp-seeAll_link" href="/articles/">See all Articles</a>
        </p>

    </section><!-- #articles -->



    <section id="hire-me" class="dm-c-hireMe dm-u-clear--both dm-u-clearfix">

        <h1 class="dm-dp-pointerHeadline">Hire me to</h1>

        <div class="dm-dp-textPassage">
            <ol>
                <li class="dm-c-hireMe_step">
                    <h2 class="dm-u-text--s dm-u-marginBottom--0">Run an important project your organization needs to launch.</h2>
                    <p>Through my design collaborative SuperFriendly, I build specialized teams of experts that ship the highest quality products and teach you to level up your skills as we progress.</p>
                    <p class="dm-dp-seeAll dm-u-text--s">
                        <a class="dm-dp-seeAll_link" href="http://superfriend.ly/">Visit SuperFriendly</a>
                    </p>
                </li>
                <li class="dm-c-hireMe_step">
                    <h2 class="dm-u-text--s dm-u-marginBottom--0">Speak to your team or at your event.</h2>
                    <p>I&rsquo;ve been <a href="/speaking-podcasts/">speaking publicly at conferences</a> and privately with in-house product teams for over a decade about design process and how to better collaborate with your team members.</p>
                    <p class="dm-dp-seeAll dm-u-text--s">
                        <a class="dm-dp-seeAll_link" href="/contact/">Contact me about speaking</a>
                    </p>
                </li>
                <li class="dm-c-hireMe_step">
                    <h2 class="dm-u-text--s dm-u-marginBottom--0">Take your agency to the next level.</h2>
                    <p>Most of my professional experience exists in client service, so I&rsquo;ve seen many ups and downs of what agencies do right and wrong. I can help you how more narrowly position your agency to attract more qualified leads and learn pricing strategies that win premium projects.</p>
                    <p class="dm-dp-seeAll dm-u-text--s">
                        <a class="dm-dp-seeAll_link" href="/contact/">Contact me about coaching</a>
                    </p>
                </li>
            </ol>
        </div>

        

    </section><!-- #hire-me -->



<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>    

<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>