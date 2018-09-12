<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head>    
    <title>&ldquo;How to Be Good,&rdquo; an article by Dan Mall</title>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?> 
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>

    <!-- Thanks Jeremy! https://adactio.com/journal/9881  -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@danmall" />
    <meta name="twitter:url" property="og:url" content="<?php echo 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>" />
    <meta name="twitter:title" property="og:title" content="How to Be Good" />
    <meta name="twitter:description" property="og:description" content="Tell &rsquo;em exactly what they want to hear before they even ask." />
    <meta name="twitter:image" property="og:image" content="<?php echo 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>thumb.png" />

    <!-- Webmentions -->
    <link rel="pingback" href="https://webmention.io/webmention?forward=<?php echo 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>" />

    <style type="text/css">

        body {
            /*--articlePrimaryColor: blue;
            --articlePrimaryColorHover: #e5e6fd;*/
        }

    </style>

</head>


<body class="dm-page--articleDetail">
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <script>
        document.write('<div class="dm-js-pageShield"></div>');
    </script>

    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>

    <div class="dm-l-articleGrid">

        <header class="dm-c-pageHeader dm-l-articleGrid--main" role="banner">

            <h1 class="dm-c-pageHeader_title">
                How to Be Good
            </h1>

            <h2 class="dm-c-pageHeader_date">September 12, 2018 at 04:32 <abbr title="Post Meridien">PM</abbr></h2>

        </header><!-- .page-header -->
    
        <main role="main" class="dm-c-articleWell">        

            <div class="dm-dp-textPassage dm-l-articleGrid--main">

                <p>
                    <span class="dm-dp-openingLines"><b class="dm-dp-dropCap">F</b>or designers and developers</span>, one thing stands high above r&eacute;sum&eacute;s, cover letters, and university degrees: the esteemed portfolio. A great portfolio can get you a high-paying, life-restoring job, even if you don’t have much or any schooling. The converse is also true: you may have many degrees and lots of experience listed on a r&eacute;sum&eacute;, but unless you can demonstrate it through a portfolio, that great job opportunity may still pass you by. 
                </p>

                <div class="dm-c-carbonWrap">
                    <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1696&amp;serve=CVYD42T&amp;placement=danielmallcom" id="_carbonads_js"></script>
                </div><!-- .dm-c-carbonWrap -->

                

            </div>

            <section id="up-next" class="dm-c-upNext">

                <h1 class="dm-c-upNext_kicker">Up Next</h1>

                <h2 class="dm-c-upNext_title">
                    <a href="/articles/designer-developer-workflow/">
                        Designer + Developer <span class="dm-c-upNext_title_lastWord">Workflow</span>
                    </a>
                </h2>

            </section><!-- .dm-c-upNext -->

        </main>

    </div><!-- .dm-l-articleGrid -->

    </div><!-- .dm-l-articleGrid -->



    <section id="comments" class="dm-c-comments">      
            
        <div class="main">

            <!-- ====== WEBMENTIONS ======= -->
            <!-- https://gist.github.com/aaronpk/6207445 -->

            <span id="webmention-count" style="display: none;"></span>

            <?php 
                /*
                echo '<div style="display: none;">';
                $json = file_get_contents('https://webmention.io/api/links.jf2?target=http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);
                $obj = json_decode($json);
                //echo $obj;
                echo '</div>';
                */
            ?>
            

            <script type="text/javascript">
                function loadWebmentions(data){
                    var webmentionCount = document.querySelector('#webmention-count');
                    if(webmentionCount){
                        webmentionCount.innerHTML = data.count + " mentions";
                    }
                    //document.getElementById("webmention-count").innerHTML = data.count + " mentions";
                }
            </script>
            <script type="text/javascript" src="http://webmention.io/api/count?jsonp=loadWebmentions&amp;target=<?php echo 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>"></script>



            
            <!-- ====== DISQUS ======= -->
            <div id="disqus_thread"></div>
            <script>
                /**
                 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
                 */
                
                var disqus_config = function () {
                    this.page.url = 'http://danmall.me/articles/<?php echo getArticleSlug(); ?>';
                    this.page.identifier = '<?php echo getArticleSlug(); ?>';
                    //this.page.title = 'a unique title for each page where Disqus is present';
                };
                
                (function() {  // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW
                    var d = document, s = d.createElement('script');
                    
                    s.src = '//danielmall.disqus.com/embed.js';  // IMPORTANT: Replace EXAMPLE with your forum shortname!
                    
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
            
        </div><!-- /.main -->
        
            
    </section><!-- #comments -->

    
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>    

<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>    