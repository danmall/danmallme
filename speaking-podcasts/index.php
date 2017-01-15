<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head>    
    <title>Dan Mall&rsquo;s Speaking Schedule, Speaking History, and Podcasts</title>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?> 
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>

    <!-- Thanks Jeremy! https://adactio.com/journal/9881  -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@danmall" />
    <meta name="twitter:url" property="og:url" content="http://<?php echo $_SERVER['SERVER_NAME']; ?>/articles/" />
    <meta name="twitter:title" property="og:title" content="Articles by Dan Mall" />
    <meta name="twitter:description" property="og:description" content="Articles by Dan Mall" />
    <meta name="twitter:image" property="og:image" content="http://<?php echo $_SERVER['SERVER_NAME']; ?>/articles/thumb.png" />

</head>


<body class="dm-page--speakingPodcasts dm-page--landing">
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>

    <header class="dm-c-pageHeader" role="banner">

        <h1 class="dm-c-pageHeader_title">
            Speaking &amp; Podcasts<sup class="dm-c-pageHeader_title_count"><?php echo getTotalItems('speaking.json'); ?></sup>
        </h1>

        <?php /* ?>
        <nav role="navigation">
            <ul class="dm-dp-inlineNav dm-u-font--sans dm-u-text--s">
                <li class="dm-dp-inlineNav_item dm-dp-inlineNav_item--active">
                    <mark>On this site</mark>
                </li>
                <li class="dm-dp-inlineNav_item">
                    <a href="#elsewhere">Elsewhere</a>
                </li>
            </ul>
        </nav><!-- .page-nav -->
        <?php */ ?>

    </header><!-- .page-header -->

    <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1696&amp;serve=CVYD42T&amp;placement=danielmallcom" id="_carbonads_js"></script>

    <!-- TODO: world map -->

    <main role="main" class="dm-c-articlesList dm-u-padding--m">

        <p class="dm-c-speakingIntro">I&rsquo;ve been very fortunate to speak for and with many people about the things that keep me professionally interested. Below, you&rsquo;ll find an assortment of talks and podcasts I&rsquo;ve done over the last decade. If you&rsquo;d like me to speak at a public or private event or on a podcast about design process, running a successful agency, or how to build great digital products, please <a href="/contact/">get in touch</a>.</p>

        <?php parseList('speaking.json', 'all', 'full', 'small'); ?>

    </main>

    
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>    

<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>    