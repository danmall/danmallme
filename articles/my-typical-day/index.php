<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head>    
    <title>&ldquo;My Typical Day,&rdquo; an article by Dan Mall</title>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?> 
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>

    <!-- Thanks Jeremy! https://adactio.com/journal/9881  -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@danmall" />
    <meta name="twitter:url" property="og:url" content="<?php echo 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>" />
    <meta name="twitter:title" property="og:title" content="My Typical Day" />
    <meta name="twitter:description" property="og:description" content="Wake up to bedtime." />
    <meta name="description" content="Wake up to bedtime." />
    <meta name="twitter:image" property="og:image" content="<?php echo 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>thumb.png" />
    
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
                My Typical Day
            </h1>

            <h2 class="dm-c-pageHeader_date">January 10, 2021 at 4:21 <abbr title="Post Meridien">PM</abbr></h2>

        </header><!-- .page-header -->

        <main role="main" class="dm-c-articleWell">

            <div class="dm-dp-textPassage dm-l-articleGrid--main">
            
                <p><span class="dm-dp-openingLines">I&rsquo;ve previously written</span> about <a href="/articles/ceo-covid19-calendar/">how I schedule my day</a>, but <a href="http://cdevroe.com/2021/01/07/my-typical-day/">Colin Devroe&rsquo;s blog post tag</a> is a welcome excuse to update this info.</p>

                <div class="dm-c-carbonWrap">
                    <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1696&amp;serve=CVYD42T&amp;placement=danielmallcom" id="_carbonads_js"></script>
                </div><!-- .dm-c-carbonWrap -->

                <ul>
                    <li><strong>4:30am&ndash;5am:</strong> Wake up.</li>
                    <li><strong>5am&ndash;6am:</strong> <a href="/articles/new-calendar-approach-2017/#mission-mornings">Mission work</a>.</li>
                    <li><strong>6am&ndash;7am:</strong> Get ready/get kids ready for the day.</li>
                    <li><strong>7am&ndash;8am:</strong> Drive kids to school and get back home.</li>
                    <li><strong>8am&ndash;12pm:</strong> Work. On Mondays, Wednesdays, and Thursdays, I reserve this slot for flow time. On Tuesdays and Fridays, this time is open for SuperFriends and clients to schedule meetings with me.</li>
                    <li><strong>12pm&ndash;1pm:</strong> Lunch.</li>
                    <li><strong>1pm&ndash;1:30pm:</strong> Work wind-down.</li>
                    <li><strong>1:30pm&ndash;2:30pm:</strong> Pick up kids from school.</li>
                    <li><strong>2:30pm&ndash;5:30pm:</strong> Help kids with homework and do some writing/reading/sketching/thinking.</li>
                    <li><strong>5:30pm&ndash;6:30pm:</strong> Family dinner time.</li>
                    <li><strong>6:30pm&ndash;7:15pm:</strong> Bum around time/kids&rsquo; bath time.</li>
                    <li><strong>7:15pm&ndash;7:30pm:</strong> Read together and put kids to bed.</li>
                    <li><strong>7:30pm&ndash;8:30pm:</strong> Optional work wrap-up time if there&rsquo;s anything urgent from the day.</strong> Otherwise&hellip;</li>
                    <li><strong>7:30pm&ndash;9:30pm:</strong> &hellip;wind-down/ relax with <a href="http://emilymall.me/">Em</a>.</li>
                    <li><strong>9:30pm:</strong> Bedtime.</li>
                </ul>
                
                <p>Check out <a href="https://chriscoyier.net/2021/01/08/my-typical-day/">Chris Coyier&rsquo;s typical day</a>.</p>

            </div>

            <section id="up-next" class="dm-c-upNext">

                <h1 class="dm-c-upNext_kicker">Up Next</h1>

                <h2 class="dm-c-upNext_title">
                    <a href="/articles/weeknotes-2021-01-03/">
                    Weeknotes: January 3&ndash;January 9, <span class="dm-c-upNext_title_lastWord">2021</span>
                    </a>
                </h2>

            </section><!-- .dm-c-upNext -->

        </main>

    </div><!-- .dm-l-articleGrid -->



    <section id="comments" class="dm-c-comments">      
            
        <div class="main">
            
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
