<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head>    
    <title>&ldquo;Passing the SuperBooked Baton,&rdquo; an article by Dan Mall</title>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?> 
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>

    <!-- Thanks Jeremy! https://adactio.com/journal/9881  -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@danmall" />
    <meta name="twitter:url" property="og:url" content="<?php echo 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>" />
    <meta name="twitter:title" property="og:title" content="Passing the SuperBooked Baton" />
    <meta name="twitter:description" property="og:description" content="New leadership for SuperBooked." />
    <meta name="description" content="New leadership for SuperBooked." />
    <meta name="twitter:image" property="og:image" content="<?php echo 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>/thumb.png" />

    <style type="text/css">

        body {
            --articlePrimaryColor: #834dcd;
            --articlePrimaryColorHover: #B280F6;
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
                Passing the SuperBooked Baton
            </h1>

            <h2 class="dm-c-pageHeader_date">December 3, 2018 at 11:45 <abbr title="Ante Meridien">AM</abbr></h2>

        </header><!-- .page-header -->

        <main role="main" class="dm-c-articleWell">

            <div class="dm-dp-textPassage dm-l-articleGrid--main">

                <p><span class="dm-dp-openingLines">In 2013, I shared an idea</span> I had for better referring work around with my friend <a href="https://twitter.com/philipzaengle">Philip Zaengle</a>. Six months later, he came back to me with a prototype of how it might work. Without Phil, <a href="https://superbooked.com/">SuperBooked</a> would still be an idea floating around in my head. We worked on it for two years and then <a href="http://v3.danielmall.com/articles/superbooked/">launched SuperBooked</a> to a small audience of friends and testers in August 2016.</p>

                <div class="dm-c-carbonWrap">
                    <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1696&amp;serve=CVYD42T&amp;placement=danielmallcom" id="_carbonads_js"></script>
                </div><!-- .dm-c-carbonWrap -->

                <p>But then we slowed down. Alongside making SuperBooked, I run <a href="http://superfriend.ly/">SuperFriendly</a> and Phil runs <a href="https://zaengle.com/">Zaengle Corp</a>&mdash;and running our own shops is part of the reason we use SuperBooked ourselves. Our teams run successfully but differently, and mashing them together isn&rsquo;t exactly a recipe for smooth sailing. Phil has staff that move on and off of projects based on production schedules, while my teams expand and contracts on a per project and per pipeline basis. These are neither strengths or weaknesses but operational differences that create logistical challenges when making a product together. Combine that with being (thankfully) busy with client work, and we knew we had to change something.</p>

                <p>Instead of trying to make due with a process that&rsquo;s half mine and half Phil&rsquo;s, it makes more sense for one of us to step up and the other to talk a step back. As of today, Phil will become SuperBooked&rsquo;s new <abbr title="Chief Executive Officer">CEO</abbr>. He&rsquo;s the one who&rsquo;s really gotten it to this place so far, and he&rsquo;s the perfect person to take it to the next level.</p>

                <p>My role will be more of an advisor to the team. We&rsquo;ll still check in frequently about the ways I think SuperBooked can get ahead of where the industry is headed. I believe in SuperBooked more than ever. I really want to see it come to fruition, and that can best happen if I get out of the way.</p>

                <p>Thanks to all of our beta testers for the fantastic feedback and sticking with us while we figure this thing out. And if you&rsquo;re keen on a better way to get and give amazing work, keep your eyes peeled for where SuperBooked goes next.</p>


            </div>

            <section id="up-next" class="dm-c-upNext">

                <h1 class="dm-c-upNext_kicker">Up Next</h1>

                <h2 class="dm-c-upNext_title">
                    <a href="/articles/invision-design-systems-mastering-design-at-scale/">
                        Design Systems: Mastering Design at <span class="dm-c-upNext_title_lastWord">Scale</span>
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