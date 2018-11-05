<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head>    
    <title>&ldquo;Design Systems: Pilots &amp; Scorecards,&rdquo; an article by Dan Mall</title>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?> 
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>

    <!-- Thanks Jeremy! https://adactio.com/journal/9881  -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@danmall" />
    <meta name="twitter:url" property="og:url" content="<?php echo 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>" />
    <meta name="twitter:title" property="og:title" content="Design Systems: Pilots &amp; Scorecards" />
    <meta name="description" content="Pilots are a great way to start a design system." />
    <meta name="twitter:image" property="og:image" content="<?php echo 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>thumb.png" />

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

    <div class="dm-l-articleGrid">

        <header class="dm-c-pageHeader dm-l-articleGrid--main" role="banner">

            <h1 class="dm-c-pageHeader_title">
                Design Systems: Pilots &amp; Scorecards
            </h1>

            <h2 class="dm-c-pageHeader_date">April 4, 2017 at 12:05 <abbr title="Ante Meridien">AM</abbr></h2>

        </header><!-- .page-header -->
        
        <main role="main" class="dm-c-articleWell">

            <!-- <div class="dm-dp-textPassage dm-c-articleWell"> -->
            <div class="dm-dp-textPassage dm-l-articleGrid--main">

                <p><span class="dm-dp-openingLines">Pilots are one of</span> the best ways to put your design system through its paces, especially before the design system even gets to a <var>v1</var>. Like television pilots help test audience reactions to a series concept without investing significant resources to create the whole thing, application pilots are a good foundation for ensuring your design system&rsquo;s design and code are battle-tested.</p> 

                <p>Here is how my teams and I identify great pilot candidates.</p> 

                <div class="dm-c-carbonWrap">
                    <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1696&amp;serve=CVYD42T&amp;placement=danielmallcom" id="_carbonads_js"></script>
                </div><!-- .dm-c-carbonWrap -->

                <p>First, we want to know what kinds of digital products a design system should help our client to make. We&rsquo;ll ask them to tee up as many product presentations as they can muster. They&rsquo;ll usually do this by either generating a list of product owners that tend to be early adopters/risk takers, or they&rsquo;ll issue an open call for willing participants.</p>

                <p>We review anywhere from dozens to hundreds of existing products to get a good lay of the land for what the organization makes regularly and supports. This might be walking through products in person or on a screenshare with a product owner, asking questions and exploring as many of the hidden crevasses as possible. It also could be clicking through public or private apps ourselves, inventorying what&rsquo;s common.</p>

                <p>Simultaneously, we&rsquo;ll also do an <a href="http://bradfrost.com/blog/post/interface-inventory/">interface inventory</a>, taking note of the frequency of usage of common components.</p> 

                <p>We&rsquo;ll then try and reverse-engineer where our <a href="https://en.wikipedia.org/wiki/Pareto_principle">Pareto principle</a> comes into play: what 20% can we design and build that can assuage 80% of the wheel reinvention pain?<?php /* ?>What <a href=“https://bigmedium.com/ideas/boring-design-systems.html”>boring stuff</a> can we start with?<?php */ ?></p>

            </div>

            <div class="dm-c-articleImage">

                <?php include('pilot-sweet-spot.svg'); ?>

            </div>

            <div class="dm-dp-textPassage dm-c-articleWell">

                <p id="fn1-source">There&rsquo;s a sweet spot for great pilot candidates after planning for the pilot has begun but before it gets designed or built. If a product isn&rsquo;t far enough along in planning, we likely don&rsquo;t know enough about it to say whether it&rsquo;ll make for a good pilot or not. But if it&rsquo;s already in the process of being created or recreated <sup><a href="#fn1">1</a></sup> , it&rsquo;s probably too far along to be able to integrate parts&mdash;read: component design, patterns, and/or working code&mdash;from the design system without some amount of refactor, which teams in need of a design system often can&rsquo;t afford.</p>

                <p>Once we find a some good potential candidates in that sweet spot, there&rsquo;s a set of criteria we use to determine a pilot&rsquo;s potential efficacy:</p>

                <ol>
                    <li><strong>Potential for common components.</strong> Does this pilot have many components that can be reused in other products?</li>
                    <li id="fn2-source"><strong>Potential for common patterns <sup><a href="#fn2">2</a></sup> .</strong> Does this pilot have many patterns that can be reused in other products?</li>
                    <li><strong>High-value elements.</strong> Even if uncommon, is there a component or pattern with high-business value that is the heart of this project? We&rsquo;re talking elements that are integral to a flow or audience that has unusually high value for the organization.</li>
                    <li><strong>Technical feasibility.</strong> How simple is a technical implementation of the design system? Is a large refactor required?</li>
                    <li><strong>Available champion.</strong> Will someone working on this product see it through and celebrate/evangelize using the design system (and even contributing back to it)?</li>
                    <li><strong>Scope.</strong> Is this work accomplishable in our pilot timeframe of [3&ndash;4 weeks] (insert your timing here)?</li>
                    <li><strong>Technical independence.</strong> Is the work decoupled enough from other legacy design and code that there are clear start and end points?</li>
                    <li><strong>Marketing potential.</strong> Will this work excite others to use the design system?</li>
                </ol>

                <p>You might already see where we could go with this. Using a simple point system where <var>1</var> indicates a low match and <var>10</var> indicates high efficacy, you could create a Pilot Scorecard that shows you which products to tackle in priority order:</p>

                </div>

            <div class="dm-c-articleImage">

                <table>
                    <thead>
                        <tr>
                            <td>&nbsp;</td>
                            <th scope="col" id="product1">Product #1</th>
                            <th scope="col" id="product2">Product #2</th>
                            <th scope="col" id="product3">Product #3</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="dm-u-align--left" scope="row" id="criteria1">Common components potential</th>
                            <td headers="criteria1 product1">10</td>
                            <td headers="criteria1 product2">3</td>
                            <td headers="criteria1 product3">5</td>
                        </tr>
                        <tr>
                            <th class="dm-u-align--left" scope="row" id="criteria2">Common patterns potential</th>
                            <td headers="criteria2 product1">2</td>
                            <td headers="criteria2 product2">4</td>
                            <td headers="criteria2 product3">4</td>
                        </tr>
                        <tr>
                            <th class="dm-u-align--left" scope="row" id="criteria3">High-value elements</th>
                            <td headers="criteria3 product1">8</td>
                            <td headers="criteria3 product2">3</td>
                            <td headers="criteria3 product3">2</td>
                        </tr>
                        <tr>
                            <th class="dm-u-align--left" scope="row" id="criteria4">Technical feasibility</th>
                            <td headers="criteria4 product1">3</td>
                            <td headers="criteria4 product2">1</td>
                            <td headers="criteria4 product3">5</td>
                        </tr>
                        <tr>
                            <th class="dm-u-align--left" scope="row" id="criteria5">Available champion</th>
                            <td headers="criteria5 product1">5</td>
                            <td headers="criteria5 product2">4</td>
                            <td headers="criteria5 product3">8</td>
                        </tr>
                        <tr>
                            <th class="dm-u-align--left" scope="row" id="criteria6">Scope</th>
                            <td headers="criteria6 product1">8</td>
                            <td headers="criteria6 product2">3</td>
                            <td headers="criteria6 product3">8</td>
                        </tr>
                        <tr>
                            <th class="dm-u-align--left" scope="row" id="criteria7">Technical independence</th>
                            <td headers="criteria7 product1">10</td>
                            <td headers="criteria7 product2">7</td>
                            <td headers="criteria7 product3">7</td>
                        </tr>
                        <tr>
                            <th class="dm-u-align--left" scope="row" id="criteria8">Marketing potential</th>
                            <td headers="criteria8 product1">4</td>
                            <td headers="criteria8 product2">6</td>
                            <td headers="criteria8 product3">2</td>
                        </tr>
                        <tr>
                            <th class="dm-u-align--left" scope="row" id="criteria9"><strong>Totals</strong></th>
                            <td headers="criteria9 product1"><strong>50</strong></td>
                            <td headers="criteria9 product2"><strong>31</strong></td>
                            <td headers="criteria9 product3"><strong>41</strong></td>
                        </tr>
                        <tr>
                            <th class="dm-u-align--left" scope="row" id="criteria10"><strong>Averages</strong></th>
                            <td headers="criteria10 product1"><strong>6.25</strong></td>
                            <td headers="criteria10 product2"><strong>3.88</strong></td>
                            <td headers="criteria10 product3"><strong>5.13</strong></td>
                        </tr>
                    </tbody>
                </table>

            </div>

            <div class="dm-dp-textPassage dm-c-articleWell">

                <p>Starting with pilots before you have anything in your design system allows <a href="https://bigmedium.com/ideas/boring-design-systems.html#inventionhappensintheproducts">invention to happen in the products</a>. In the next pass of using your design system, you can <a href="/articles/cooking-with-design-systems/">cook with your new ingredients</a> to make sure you have the right pieces in place.</p>

                <p>Have you used pilots in your design systems journeys? How have they helped you?</p>

                <footer class="dm-c-articleWell_footer dm-dp-sepChunk">
                    <ol class="dm-c-footnotes">
                        <li id="fn1">I&rsquo;m talking specifically about products that are being built from scratch or reimagined. However, it&rsquo;s entirely possible that you may have a product already built that&rsquo;s clearly a good foundation for a design system. If that&rsquo;s the case, no need to pilot; instead, extract and abstract the appropriate components and patterns you need. Mobile designer <a href="https://twitter.com/bigmediumjosh">Josh Clark</a> describes this in more detail in his article, &ldquo;<a href="https://bigmedium.com/ideas/boring-design-systems.html">The Most Exciting Design Systems are Boring</a>.&rdquo; <a href="#fn1-source">&#8617;</a></li>
                        <li id="fn2">In his article, &ldquo;<a href="https://medium.com/eightshapes-llc/patterns-components-2ce778cbe4e8">Patterns &#8800; Components</a>,&rdquo; systems designer <a href="https://twitter.com/nathanacurtis">Nathan Curtis</a> describes the difference between a pattern and a component, which is why they&rsquo;re separate items in this article. <a href="#fn2-source">&#8617;</a></li>                    
                        <li>Thanks to <a href="http://bradfrost.com/">Brad Frost</a> and <a href="https://bigmedium.com/">Josh Clark</a> for helping inspire this insight and reviewing this article.</li>
                    </ol>
                    <?php /* ?><p class="dm-u-textIndent--0 dm-u-marginTop--m">Also syndicated to <a href="https://medium.com/@danielmall/cooking-with-design-systems-6bf05799e37a#.ga3zc4esq">Medium</a>.</p><?php */ ?>
                </footer>

            </div>

            <div class="dm-c-articleWell">

                <section id="up-next" class="dm-c-upNext">

                    <h1 class="dm-c-upNext_kicker">Up Next</h1>

                    <h2 class="dm-c-upNext_title">
                        <a href="/articles/bad-news-good-news-so-what/">
                            Bad News. Good News. So <span class="dm-c-upNext_title_lastWord">What?</span>
                        </a>
                    </h2>

                </section><!-- .dm-c-upNext -->

            </div><!-- .dm-c-articleWell -->

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