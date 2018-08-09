<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head>    
    <title>&ldquo;Designer + Developer Workflow,&rdquo; an article by Dan Mall</title>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?> 
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>

    <!-- Thanks Jeremy! https://adactio.com/journal/9881  -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@danmall" />
    <meta name="twitter:url" property="og:url" content="<?php echo 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>" />
    <meta name="twitter:title" property="og:title" content="Designer + Developer Workflow" />
    <meta name="twitter:description" property="og:description" content="A real view into at what collaborative workflow looks like." />
    <meta name="twitter:image" property="og:image" content="<?php echo 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>/thumb.png" />

    <style type="text/css">

        .dm-c-video {
            margin: 4em 0;
        }

        .dm-c-articleWell {
            max-width: 1200px;
        } 

        @media screen and (min-width: 800px) {
            .dm-dp-textPassage {
                padding-left: 5%;
                padding-right: 15%;
            } 
        }

        .dm-u-background--gray {
            background: #f0f0f0;
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

    <header class="dm-c-pageHeader" role="banner">

        <h1 class="dm-c-pageHeader_title">
            Designer + Developer Workflow
        </h1>

        <h2 class="dm-c-pageHeader_date">August 8, 2018 at 10:31 <abbr title="Post Meridien">PM</abbr></h2>

    </header><!-- .page-header -->

    <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1696&amp;serve=CVYD42T&amp;placement=danielmallcom" id="_carbonads_js"></script>

    <main role="main" class="dm-c-articleWell">

        <div class="dm-dp-textPassage">

            <p><span class="dm-dp-openingLines">The way designers and developers</span> work together today is broken. It&rsquo;s too siloed and separate; &ldquo;collaboration&rdquo; is a fantasy that few enjoy.</p>

            <p>The state of advertising in the 1940s was similar. The all-powerful copywriter took what the clients wanted to say&mdash;usually simply the features of their product&mdash;and turned it into a headline and body copy. Then, they&rsquo;d hand that copy to an account executive who would run it to another floor and literally slide that paper under a door to the art department to &ldquo;visualize&rdquo; the final ad. Artists simply followed the copywriter&rsquo;s orders. It was very rare that the copywriter and the artist would actually know each other.</p>

            <p>All of that changed when copywriter <a href="https://en.wikipedia.org/wiki/William_Bernbach">Bill Bernbach</a> met art director <a href="http://www.paul-rand.com/">Paul Rand</a>. Rand once remarked about working with Bernbach, &ldquo;This was my first encounter with a copywriter who understood visual ideas and who didn&rsquo;t come in with a yellow copy pad and a preconceived notion of what the layout should look like.&rdquo; Contrary to the siloed dynamic at the time, they&rsquo;d take lunch breaks together to visit art museums and galleries; they became good friends.</p>

            <div class="dm-u-marginTop--xl dm-u-marginBottom--xl">

                <img src="vw.jpg" alt="" />

                <small class="dm-u-text--14 dm-u-font--italic">The famous Volkswagen ads created at DDB under Berbach&rsquo;s direction</small>
               
            </div><!-- .dm-c-articleImage -->
            

            <p>Their collaborative working style led to the birth of the idea of &ldquo;the creative team,&rdquo; the mutual respect and partnership between art director and copywriter that tended to yield unique results. Bob Gage, an art director that worked for <a href="http://www.ddb.com/">DDB</a>, the agency Bernbach co-founded, described it like this:</p>

            <blockquote>
                <p><span class="dm-u-move--offscreen">&ldquo;</span>Two people who respect each other sit in the same room for a length of time and arrive at a state of&hellip; free association, where the mention of one idea will lead to another idea, then to another. The art director might suggest a headline, the writer a visual. The entire ad is conceived as a whole, in a kind of ping pong between disciplines.&rdquo;</p>
            </blockquote>

            <p>Isn&rsquo;t that what we all strive for in our jobs True collaboration with equals and partners? Ideas that build off one another? Why does this seem so far away for some of us?</p> 



            <h2 id="new-workflow">A new workflow in action <a class="dm-dp-anchorLink" href="#new-workflow">#</a></h2>

            <p>I&rsquo;m fortunate to work fairly often with my good friend <a href="http://bradfrost.com/">Brad Frost</a>, and one of the things I love most about working with him is that we both actively pursue that ping pong momentum within our collective work.</p>

            <p>Brad and I both do our fair share of workshops with designers and developers that would love to have a more collaborative dynamic with their co-workers. While they&rsquo;re all typically on-board with the theory of collaborating more, they also seemed a bit stumped as to what that actually looks like from minute to minute.</p>

            <p>So, Brad and I decided to record an almost-two-hour-long video of us working together:</p>

        </div>

        <div class="dm-c-video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/tnkrUt7PpnQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>

        <div class="dm-dp-textPassage">

            <p>There&rsquo;s a lot that we cover in here, and we barely scratch the surface. Here&rsquo;s a quick list of concepts we cover in this walkthrough:</p>

            <ul>
                <li>Working quickly and roughly with <a href="http://v3.danielmall.com/articles/rif-element-collages/">element collages</a></li>
                <li>The importance of <a href="http://bradfrost.com/blog/post/the-workshop-and-the-storefront/">workshop and storefront</a> environments</li>
                <li><a href="/articles/stealing-your-way-to-original-designs/">Stealing from and remixing</a> existing interfaces to create something original</li>
                <li>The <a href="http://bradfrost.com/blog/post/your-sketch-library-is-not-a-design-system-redux/">folly of relying too heavily on static design tools</a></li>
                <li>A reminder that <a href="http://bradfrost.com/blog/post/development-is-design/">development is design</a></li>
            </ul>

            <p>And lots more! In fact, we barely even finish the page we&rsquo;re working on, mostly because we&rsquo;re talking through what we&rsquo;re doing rather than solely doing the work. If there&rsquo;s enough interest, we may do a few more of these so you can see it all come to fruition.</p>

            <p>For more info, please check out Brad&rsquo;s thoughts about all of this in <a href="http://bradfrost.com/blog/post/">Designer + Developer Workflow</a>.</p>

            <p>We&rsquo;d love to hear any feedback you might have about all this. Is this a new kind of workflow for you? Is this how you&rsquo;ve worked for years? Interested in working this way at your company but not sure where to start? Let us know what questions you have, and thanks for reading and watching!</p>


            <script>
                document.addEventListener("DOMContentLoaded", function(event) { 
                  fluidvids.init({
                      selector: ['iframe', 'object'], // runs querySelectorAll()
                      players: ['www.youtube.com', 'player.vimeo.com'] // players to support
                    });
                });
            </script> 

        </div>

        <section id="up-next" class="dm-c-upNext">

            <h1 class="dm-c-upNext_kicker">Up Next</h1>

            <h2 class="dm-c-upNext_title">
                <a href="/articles/illustrators/">
                    <span class="dm-c-upNext_title_lastWord">Illustrators</span>
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