<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head>    
    <title>Dan Mall&rsquo;s Blogroll</title>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?> 
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>

    <!-- Thanks Jeremy! https://adactio.com/journal/9881  -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@danmall" />
    <meta name="twitter:url" property="og:url" content="http://<?php echo $_SERVER['SERVER_NAME']; ?>/blogroll/" />
    <meta name="twitter:title" property="og:title" content="Dan Mall&rsquo;s Blogroll" />
    <meta name="twitter:description" property="og:description" content="Blogroll" />
    <meta name="twitter:image" property="og:image" content="http://<?php echo $_SERVER['SERVER_NAME']; ?>/i/dan-headshot.jpg" />

</head>


<body class="dm-page--speakingPodcasts dm-page--landing">
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <script>
        document.write('<div class="dm-js-pageShield"></div>');
    </script>

    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>

    <header class="dm-c-pageHeader" role="banner">

        <h1 class="dm-c-pageHeader_title">
            Blogroll<sup class="dm-c-pageHeader_title_count"><?php echo getTotalItems('blogroll.json'); ?></sup>
        </h1>

    </header><!-- .page-header -->

    <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1696&amp;serve=CVYD42T&amp;placement=danielmallcom" id="_carbonads_js"></script>

    <!-- TODO: world map -->

    <main role="main" class="dm-c-articlesList dm-u-padding--m">

        <p class="dm-c-speakingIntro">Friends and colleagues I&rsquo;m proud to know.</p>

        <?php parseList('blogroll.json', 'all', 'full', 'small'); ?>

    </main>

    
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>    

<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>    