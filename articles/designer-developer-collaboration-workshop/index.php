<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head>    
    <title>&ldquo;Designer + Developer Collaboration Workshop,&rdquo; an article by Dan Mall</title>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?> 
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>

    <!-- Thanks Jeremy! https://adactio.com/journal/9881  -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@danmall" />
    <meta name="twitter:url" property="og:url" content="<?php echo 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>" />
    <meta name="twitter:title" property="og:title" content="Designer + Developer Collaboration Workshop" />
    <meta name="twitter:description" property="og:description" content="Recapping our Philly workshop." />
    <meta name="description" content="WRecapping our Philly workshop." />
    <meta name="twitter:image" property="og:image" content="<?php echo 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>thumb.png" />

    <style type="text/css">

        body {
            --articlePrimaryColor: #EB023D;
            --articlePrimaryColorHover: #FFADC1;
        }

        .dm-c-imageObject_image {
            max-width: 1200px;
            display: block;
            margin: 0 auto;
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

    <figure class="dm-c-imageObject dm-u-marginLeft--m dm-u-marginRight--m">
        <div class="dm-c-imageObject_imageWrap">
            <script>
            document.write('<img class="dm-c-imageObject_image dm-js-lazy" data-src="hero.png" alt="Brad Frost &amp; Dan Mall teaching a collaboration workshop" />');
            </script>
            <noscript>
                <img class="dm-c-imageObject_image dm-js-lazy" src="hero.png" alt="Brad Frost &amp; Dan Mall teaching a collaboration workshop" />
            </noscript>
        </div><!-- .dm-c-imageObject_imageWrap -->            
    </figure><!-- .dm-c-imageObject -->

    <div class="dm-l-articleGrid">

        <header class="dm-c-pageHeader dm-l-articleGrid--main" role="banner">

            <h1 class="dm-c-pageHeader_title">
                Designer + Developer Collaboration Workshop
            </h1>

            <h2 class="dm-c-pageHeader_date">January 16, 2019 at 12:43 <abbr title="Post Meridien">PM</abbr></h2>

        </header><!-- .page-header -->

        <main role="main" class="dm-c-articleWell">

            <div class="dm-dp-textPassage dm-l-articleGrid--main">

                <p><span class="dm-dp-openingLines"><a href="http://bradfrost.com/">Brad</a> and I hosted</span> our first public <a href="https://designdevjan2019.splashthat.com/">designer + developer collaboration workshop</a> yesterday. After sleeping on it, I declare it a resounding success!</p>

                <div class="dm-c-carbonWrap">
                    <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1696&amp;serve=CVYD42T&amp;placement=danielmallcom" id="_carbonads_js"></script>
                </div><!-- .dm-c-carbonWrap -->               

                <p>We&rsquo;ve done this type of workshop before with our clients, but this was the first time we&rsquo;ve hosted it publicly. Many thanks to our friends at <a href="https://www.invisionapp.com">InVision</a> for producing it so flawlessly.</p>

                <p>We covered:</p>

                <ul>
                    <li>Reducing reliance on handoff tools</li>
                    <li>Front-end design</li>
                    <li>Shia LeBouf</li>
                    <li>Principles like &ldquo;<a href="https://bigmedium.com/ideas/only-one-deliverable-matters.html">minimum viable artifacts</a>,&rdquo; &ldquo;death to approvals,&rdquo; &ldquo;anticipation,&rdquo; and more</li>
                    <li><a href="http://atomicdesign.bradfrost.com/">Atomic design</a></li>
                    <li>Spot comping</li>
                </ul>

                <p>At the end of the day, we did a recap exercise to see what the attendees got from the day. Here&rsquo;s what they said:</p>

                <h2 class="dm-u-text--m">From what I learned at this workshop, I&rsquo;m going to stop&hellip;</h2>

                <ul>
                    <li>Trying to make perfect comps</li>
                    <li>Hoarding designs and keeping them to myself until they&rsquo;re &ldquo;ready&rdquo;</li>
                    <li>Over-engineering</li>
                    <li>Writing handoff documentation</li>
                    <li>Designing for approvals</li>
                    <li>Wasting time on design details that don&rsquo;t matter right now</li>
                </ul>

                <h2 class="dm-u-text--m">From what I learned at this workshop, I&rsquo;m going to start&hellip;</h2>

                <ul>
                    <li>Relying more on a <a href="http://bradfrost.com/blog/post/a-frontend-workshop-environment/">front-end workshop environment</a></li>
                    <li>Doing more cross-team collaboration sessions</li>
                    <li>Involving developers earlier in the process</li>
                    <li>Getting into the browser earlier</li>
                    <li>Prototyping more</li>
                    <li>Being a more inclusive design partner</li>
                    <li>Using <a href="https://storybook.js.org/">Storybook</a></li>
                    <li>Working with more placeholders</li>
                    <li>Carving out time for collaboration</li>
                    <li>Complaining more about closed-door design reviews</li>
                    <li>Working at lower fidelity</li>
                    <li>Sharing ideas earlier</li>
                    <li>Letting developers prototype and wireframe</li>
                    <li>Changing the physical space to allow for better collaboration</li>
                    <li>Iterating faster on design</li>
                    <li>Making design a team sport</li>
                    <li>Working at a component level instead of a page level</li>
                </ul>

                <h2 class="dm-u-text--m">From what I learned at this workshop, I&rsquo;m going to continue&hellip;</h2>

                <ul>
                    <li>Involving developers in the design process</li>
                    <li>Sending devs screenshots frequently</li>
                    <li>Being present throughout the entire process</li>
                    <li>Asking questions of the dev team</li>
                    <li>Focusing on shipping to production as fast as possible</li>
                </ul>

                <p>Special thanks to <a href="http://ianfrostweather.com/">Ian Frost</a> for being an excellent teaching assistant, troubleshooter, and all-around good guy.</p>

                <p>If you want us to bring this workshop to your company or your city, <a href="/contact/">let us know</a>!</p>

            </div>

            <section id="up-next" class="dm-c-upNext">

                <h1 class="dm-c-upNext_kicker">Up Next</h1>

                <h2 class="dm-c-upNext_title">
                    <a href="/articles/starting-a-design-system/">
                        Starting a Design <span class="dm-c-upNext_title_lastWord">System</span>
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
