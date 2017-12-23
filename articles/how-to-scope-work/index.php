<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head>    
    <title>&ldquo;How to Scope Work,&rdquo; an article by Dan Mall</title>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?> 
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>

    <!-- Thanks Jeremy! https://adactio.com/journal/9881  -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@danmall" />
    <meta name="twitter:url" property="og:url" content="<?php echo 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>" />
    <meta name="twitter:title" property="og:title" content="How to Scope Work" />
    <meta name="twitter:description" property="og:description" content="Lorem ipsum dolor sit amet" />
    <meta name="twitter:image" property="og:image" content="<?php echo 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>/thumb.png" />

    <style type="text/css">
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

    <header class="dm-c-pageHeader" role="banner">

        <h1 class="dm-c-pageHeader_title">
            How to Scope Work
        </h1>

        <h2 class="dm-c-pageHeader_date">December 23, 2017 at 4:11 <abbr title="Post Meridien">PM</abbr></h2>

    </header><!-- .page-header -->

    <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1696&amp;serve=CVYD42T&amp;placement=danielmallcom" id="_carbonads_js"></script>

    <main role="main" class="dm-c-articleWell">

        <div class="dm-dp-textPassage">

            <p><span class="dm-dp-openingLines">After four days</span> of working together, she finally admitted, &ldquo;No one ever taught me how to scope.&rdquo; I was working with one of my client&rsquo;s senior developers to map out exactly how we were going to get all of the work done that we needed, but a few frustrating hours of going in circles finally revealed the culprit. It&rsquo;s a problem I&rsquo;ve seen from very junior to some of the most senior employees I&rsquo;ve worked with.</p>

            <p>Simply put, I like to define <dfn>scope</dfn> as:</p>
            <ol>
                <li>A description of all the work that needs to get done, and</li>
                <li>The time needed to do said work.</li> 
            </ol>

            <p>That can be as simple as building a website in 5 days or as complex as organizing an entire ad campaign. Regardless, the formula remains intact.</p>

            <p>Good scoping is often a case of simple arithmetic; by the time you were 8 or 9 years old, you&rsquo;ve had the skills to scope well. So why is it so difficult? You&rsquo;re mostly fighting the psychology of it all.</p>

            <p>If I asked you if you could build a website (of any given complexity) in 6 months, I&rsquo;d bet your answer would be, &ldquo;Probably.&rdquo; That&rsquo;s the <a href="https://en.wikipedia.org/wiki/Valence_effect">valence effect</a> at play: your tendency to think that more good will happen to you than bad. Throw a little <a href="https://en.wikipedia.org/wiki/Parkinson%27s_law">Parkinson&rsquo;s law</a> in there (the adage that work expands to fill the time available for its completion) and that explains why you&rsquo;ve taken way longer on every project than you should have had&mdash;and felt good about it to boot. The reality is closer to <a href="https://en.wikipedia.org/wiki/Hofstadter%27s_law">Hofstadter&rsquo;s law</a>: it always takes longer than you expect (even when you take into account Hofstadter&rsquo;s law). Rather than relying on gut feelings, let&rsquo;s use math to figure out if you&rsquo;ll meet your deadlines.</p>

        </div>

        <section id="up-next" class="dm-c-upNext">

            <h1 class="dm-c-upNext_kicker">Up Next</h1>

            <h2 class="dm-c-upNext_title">
                <a href="/articles/design-systems-pilots-scorecards/">
                    Design Systems: Pilots &amp; <span class="dm-c-upNext_title_lastWord">Scorecards</span>
                </a>
            </h2>

        </section><!-- .dm-c-upNext -->

    </main>



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