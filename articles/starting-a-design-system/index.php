<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head>    
    <title>&ldquo;Starting a Design System,&rdquo; an article by Dan Mall</title>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?> 
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>

    <!-- Thanks Jeremy! https://adactio.com/journal/9881  -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@danmall" />
    <meta name="twitter:url" property="og:url" content="<?php echo 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>" />
    <meta name="twitter:title" property="og:title" content="Starting a Design System" />
    <meta name="twitter:description" property="og:description" content="What are the first steps?" />
    <meta name="description" content="What are the first steps?" />
    <meta name="twitter:image" property="og:image" content="<?php echo 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>/thumb.png" />
    
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
                Starting a Design System
            </h1>

            <h2 class="dm-c-pageHeader_date">January 7, 2019 at 9:25 <abbr title="Ante Meridien">AM</abbr></h2>

        </header><!-- .page-header -->

        <main role="main" class="dm-c-articleWell">

            <div class="dm-dp-textPassage dm-l-articleGrid--main">

                <p><span class="dm-dp-openingLines">Designer Zack Aronson</span> asks an interesting question:</p>

                <blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr"><a href="https://twitter.com/danmall?ref_src=twsrc%5Etfw">@danmall</a> Watched the first 3 InVision Design System videos, thanks for doing those, been truly insightful. Any tool advice for a small design team (3 people) to get started on a design system? Sketch templates? Code templates?</p>&mdash; Zack Aronson (@ZackAronson) <a href="https://twitter.com/ZackAronson/status/1082006920138055680?ref_src=twsrc%5Etfw">January 6, 2019</a></blockquote>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

                <div class="dm-c-carbonWrap">
                    <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1696&amp;serve=CVYD42T&amp;placement=danielmallcom" id="_carbonads_js"></script>
                </div><!-- .dm-c-carbonWrap -->               

                <p>There are a lot of <a href="https://publication.design.systems/">great articles about design systems</a>, but I&rsquo;m not sure I&rsquo;ve seen much written about how to start one.</p>

                <p>When <a href="http://superfriend.ly/">SuperFriendly</a> works with clients to create design systems, the first thing we&rsquo;ll do is an audit of the existing digital landscape. Do you have a public-facing website? A native mobile app? Some microsites? An intranet? </p>

                <p>Of all of those, what are some interface elements that all of them have? Some common answers tend to include:</p>

                <ul><li>Navigation
                </li><li>Buttons
                </li><li>Headings
                </li><li>Lists
                </li><li>Paragraphs
                </li><li>Forms
                </li><li>Tables
                </li></ul>

                <p>It&rsquo;s tempting to add everything that you think <em>might</em> go in a design system or <em>should</em> go into a design system, but try to resist that urge for now. Only include the components that <em>already</em> exist in all of the sites and apps. A good design system should be <a href="https://bigmedium.com/ideas/boring-design-systems.html#solvedproblemsandsettledscience">a collection of your organization&rsquo;s best institutional knowledge</a>.</p>

                <p>If you don&rsquo;t use buttons a lot in those products, don&rsquo;t include them! Front-end designer <a href="bradfrost.com">Brad Frost</a> is fond of saying, &ldquo;A design system is the story of how your organization makes products.&rdquo; If your products don&rsquo;t have lots of buttons in them, including buttons as a prominent element tells the wrong story about what you do and make. This focus is key to making sure your design system remains <a href="/articles/distinct-design-systems/">distinct</a>.</p>

                <p>Zack: if I were advising your 3-person design team, I&rsquo;d suggest that each of you pick a component that&rsquo;s already used frequently in your products. Looking at <a href="https://www.echo.com/">your site</a>, those 3 components might be:</p>

                <ol><li>Navigation
                </li><li>Primary Heading
                </li><li>Footer
                </li></ol>

                <p>Pick the best version of each of these. That might be the footer from an intranet and a navigation and footer from main website. And &ldquo;best&rdquo; might mean from a <abbr title="User Interface">UI</abbr> design perspective, or that the markup is top-notch, or that it&rsquo;s built modularly&hellip; you decide.</p>

                <p>Next step: put those 3 components somewhere. That could be a custom website you build, like <a href="https://material.io">Material Design</a> or <a href="https://polaris.shopify.com">Polaris</a>. But it could also be a wiki somewhere within your firewall. Or a Github repository. The important thing is that it contains: </p>

                <ul><li>At least some front-end code you need to implement this component (because <a href="http://bradfrost.com/blog/post/your-sketch-library-is-not-a-design-system/">a Sketch library is not a design system</a>)
                </li><li>Some guidelines on how (and how not) to use this component
                </li><li>A <abbr title="Uniform Resource Locator">URL</abbr> that you can send to someone
                </li></ul>

                <p>Congratulations on launching <code>v1</code> of your design system! That&rsquo;s right: <code>v1</code> of a design system can just be 3 components. Heck, it can be only 1 component! If that 1 component saves you some time on your next project and makes everything that much more consistent from both a design and code standpoint, you&rsquo;re experiencing the full benefits of a design system.</p>

            </div>

            <section id="up-next" class="dm-c-upNext">

                <h1 class="dm-c-upNext_kicker">Up Next</h1>

                <h2 class="dm-c-upNext_title">
                    <a href="/articles/2018-year-in-review//">
                        2018 Year in <span class="dm-c-upNext_title_lastWord">Review</span>
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
