<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head>    
    <title>&ldquo;Vanilla,&rdquo; an article by Dan Mall</title>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?> 
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>

    <!-- Thanks Jeremy! https://adactio.com/journal/9881  -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@danmall" />
    <meta name="twitter:url" property="og:url" content="<?php echo 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>" />
    <meta name="twitter:title" property="og:title" content="Vanilla" />
    <meta name="twitter:description" property="og:description" content="Lorem ipsum dolor sit amet" />
    <meta name="twitter:image" property="og:image" content="<?php echo 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>/thumb.png" />

</head>


<body class="dm-page--articleDetail">
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>

    <header class="dm-c-pageHeader" role="banner">

        <h1 class="dm-c-pageHeader_title">
            Article Title Goes Here
        </h1>

        <h2 class="dm-c-pageHeader_date">December 5, 2016 at 9:02 <abbr title="Ante Meridien">AM</abbr></h2>

    </header><!-- .page-header -->

    <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1696&amp;serve=CVYD42T&amp;placement=danielmallcom" id="_carbonads_js"></script>

    <main role="main" class="dm-c-articleWell dm-dp-textPassage">

        <p><span class="dm-dp-openingLines">Lorem ipsum dolor</span> sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. <a href="#">Duis aute irure dolor</a> in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <ul>
            <li>Integer posuere erat a ante venenatis dapibus posuere velit aliquet</li>
            <li>Sed posuere consectetur est at lobortis. Vestibulum id ligula</li>
            <li>Porta felis euismod semper</li>
        </ul>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <ol>
            <li>Integer posuere erat a ante venenatis dapibus posuere velit aliquet</li>
            <li>Sed posuere consectetur est at lobortis. Vestibulum id ligula</li>
            <li>Porta felis euismod semper</li>
            <li>Integer <a href="#">posuere erat a</a> ante venenatis dapibus posuere velit aliquet</li>
            <li>Sed posuere consectetur est at lobortis. Vestibulum id ligula</li>
            <li>Porta felis euismod semper</li>
            <li><strong>Integer posuere erat</strong> a ante venenatis dapibus posuere velit aliquet</li>
            <li>Sed posuere consectetur est at lobortis. Vestibulum id ligula</li>
            <li>Porta felis euismod semper</li>
            <li>Integer <em>posuere erat a ante venenatis</em> dapibus posuere velit aliquet</li>
            <li>Sed posuere consectetur est at lobortis. Vestibulum id ligula</li>
            <li>Porta felis euismod semper</li>
        </ol>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <blockquote>
            <p>As you grow older, you will discover that you have two hands, one for helping yourself, the other for helping others.</p>
            <address>Audrey Hepburn</address>
        </blockquote>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <section id="up-next" class="dm-c-upNext">

            <h1 class="dm-c-upNext_kicker">Up Next</h1>

            <h2 class="dm-c-upNext_title">
                <a href="/articles/on-creative-direction/">
                    On Creative <span class="dm-c-upNext_title_lastWord">Direction</span>
                </a>
            </h2>

        </section><!-- .dm-c-upNext -->

    </main>



    <section id="comments" class="dm-c-comments">      
            
        <div class="main">
            
            <div id="disqus_thread"></div>

            <script>
                /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                var disqus_shortname = 'danielmall'; // required: replace example with your forum shortname
                // The following are highly recommended additional parameters. Remove the slashes in front to use.
                var disqus_identifier = 'on-creative-direction';
                var disqus_url = 'http://danielmall.com/articles/on-creative-direction/';
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
        
            
    </section><!-- #comments -->

    
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>    

<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>    