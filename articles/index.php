<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head>    
    <title>Articles by Dan Mall</title>
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


<body class="dm-page--articles">
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <header class="dm-c-pageHeader" role="banner">

        <h1 class="dm-c-pageHeader_title">Articles</h1>

        <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/nav.php"); echo "\n"; ?>

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

    </header><!-- .page-header -->

    <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1696&amp;serve=CVYD42T&amp;placement=danielmallcom" id="_carbonads_js"></script>

    <main role="main" class="dm-c-articlesList dm-u-padding--m">

        <?php parseList('articles.json', 'all', 'full'); ?>

    </main>

    
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>    

<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>    