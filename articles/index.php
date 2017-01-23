<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head>    
    <title>Articles &amp; Trackbacks by Dan Mall</title>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?> 
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>    

    <!-- Thanks Jeremy! https://adactio.com/journal/9881  -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@danmall" />
    <meta name="twitter:url" property="og:url" content="http://<?php echo $_SERVER['SERVER_NAME']; ?>/articles/" />
    <meta name="twitter:title" property="og:title" content="Articles by Dan Mall" />
    <meta name="twitter:description" property="og:description" content="Articles by Dan Mall" />
    <meta name="twitter:image" property="og:image" content="http://<?php echo $_SERVER['SERVER_NAME']; ?>/i/d.png" />

</head>


<body class="dm-page--articles dm-page--landing">
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>

    <header class="dm-c-pageHeader" role="banner">

        <h1 class="dm-c-pageHeader_title">
            Articles &amp; Trackbacks<sup class="dm-c-pageHeader_title_count"><?php 
                $articlesTotal = getTotalItems('articles.json'); 
                $trackbacksTotal = getTotalItems('trackbacks.json'); 
                echo $articlesTotal + $trackbacksTotal;
            ?>                
            </sup>
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

    <main role="main" class="dm-c-articlesList dm-u-padding--m">

        <?php parseList('articles.json', 'all', 'full', 'large'); ?>

        <h2 class="dm-u-clear--both dm-u-font--sans dm-u-text--xl">Trackbacks</h2>

        <?php parseList('trackbacks.json', 'all', 'full', 'small'); ?>

    </main>

    
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>    

<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>    