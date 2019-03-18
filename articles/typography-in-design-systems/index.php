<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head>    
    <title>&ldquo;Typography in Design Systems,&rdquo; an article by Dan Mall</title>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?> 
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>

    <!-- Thanks Jeremy! https://adactio.com/journal/9881  -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@danmall" />
    <meta name="twitter:url" property="og:url" content="<?php echo 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>" />
    <meta name="twitter:title" property="og:title" content="Typography in Design Systems" />
    <meta name="twitter:description" property="og:description" content="A typographic system that optimizes for guessability." />
    <meta name="description" content="A typographic system that optimizes for guessability." />
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

    <figure class="dm-c-imageObject" style="max-width: 1230px; overflow: hidden; display: block; margin: 0 auto;">
        <video width="1230" height="375" autoplay loop muted playsinline>
            <source src="typography-title.mp4" type="video/mp4" />
        </video>
    </figure><!-- .dm-c-imageObject -->

    <div class="dm-l-articleGrid">

        <header class="dm-c-pageHeader dm-l-articleGrid--main" role="banner">

            <h1 class="dm-c-pageHeader_title dm-u-opacity--0">
                Typography in Design Systems 
            </h1>

            <h2 class="dm-c-pageHeader_date">March 17, 2019 at 5:17 <abbr title="Post Meridien">PM</abbr></h2>

        </header><!-- .page-header -->

        <main role="main" class="dm-c-articleWell">

            <div class="dm-dp-textPassage dm-l-articleGrid--main">

                <p><span class="dm-dp-openingLines">I&rsquo;ve never really been happy</span> about the way I&rsquo;ve worked with typography in design systems before. As I&rsquo;m currently working on another big design system, it seemed time to change that.</p>

                <div class="dm-c-carbonWrap">
                    <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1696&amp;serve=CVYD42T&amp;placement=danielmallcom" id="_carbonads_js"></script>
                </div><!-- .dm-c-carbonWrap -->

                <p>Common wisdom regarding typography in design systems seems to often include:</p>
                
                <ul>
                    <li>T-shirt sizing (small, medium, large, etc.)</li>
                    <li>Some context-specific dichotomy like &ldquo;heading sizes&rdquo; or &ldquo;body sizes&rdquo; or &ldquo;caption style&rdquo;</li>
                    <li>Some sort of <a href="http://spencermortensen.com/articles/typographic-scale/">typographic scale</a></li>
                </ul>

                <p>Let&rsquo;s deconstruct these a bit. </p>

                <p>On the surface, t-shirt sizes make good sense. They follow a metaphor that just about all people can understand intuitively. But there are a few areas where I&rsquo;ve seen them break down, especially when tied to a context like headings or body text:</p>

                <p>First, they don&rsquo;t scale well. Many systems need a few more options than the typical six: <abbr title="Extra Small">XS</abbr>, <abbr title="Small">S</abbr>, <abbr title="Medium">M</abbr>, <abbr title="Large">L</abbr>, <abbr title="Extra Large">XL</abbr>, <abbr title="Extra extra large">XXL</abbr>. Because of that, I&rsquo;ve encountered too many systems that try to hack it with a &ldquo;Medium-2&rdquo; or &ldquo;Mini Large&rdquo; or &ldquo;<abbr title="Extra extra extra extra extra large">XXXXXL</abbr>&rdquo; in them, all additions that break the simplicity and intuitiveness of t-shirt size system. I&rsquo;m counting the days until I find a &ldquo;Schmedium" style somewhere.</p>

                <p>Also, it&rsquo;s too easy to conflate the <code>h4</code> style&mdash;intended to be shorthand for &ldquo;the fourth largest heading style&rdquo;&mdash;into actually meaning &ldquo;use an <code>&lt;h4&gt;</code> element.&rdquo; After all, <code>&lt;h2 class="h4"&gt;</code>is a bit of a mindbender and seems wrong at first glance. I&rsquo;ve seen those who don&rsquo;t understand the power of <abbr title="HyperText Markup Language">HTML</abbr> and <abbr title="Cascading Style Sheets">CSS</abbr>&mdash;whether that&rsquo;s designers that aren&rsquo;t very familiar with front-end code or <a href="http://bradfrost.com/blog/post/full-stack-developers/">full-stack developers who focus more or back-end or DevOps than front-end</a>&mdash;feel forced to choose between appropriate styling and semantic code. They&rsquo;ll pick an inappropriate element because it looks visually looks right or pick what visually looks right at the expense of semantics and accessibility, defeating the inherent advantages that <abbr>HTML</abbr> and <abbr>CSS</abbr> have out-of-the-box.</p>

                <p>Seeing where this kind of system becomes difficult has taught me a few things:</p>

                <ol>
                    <li><strong>Linear systems work well when we can accurately predict how they&rsquo;ll scale, and we humans suck at predicting how others will use the systems we create.</strong> If you call a 12px text size &ldquo;small&rdquo; and a 16px text size &ldquo;medium,&rdquo; you better be dang sure no one will ever need a 14px text size, or you can kiss your system goodbye.</li>
                    <li><strong>Abstracting styles are difficult but worthwhile.</strong> Calling it a &ldquo;caption style&rdquo; means it&rsquo;ll likely never get used in the utility navigation, even if it&rsquo;s the right style. This leads to a lot of duplication in <abbr>CSS</abbr>.</li>
                    <li><strong>In a system designed to be used frequently, intuitiveness may be over-valued.</strong> It might be just fine to ask people to learn a system that has a slight learning curve. Habit may very well be the solution to the difficulty that is creating an intuitive system.</li>
                </ol>

                <p>With those in mind, here are some other ways I explored to create a typographic system that works.</p>


                
                
                <h2 id="guessability">Guessability, an alternative to intuitiveness <a class="dm-dp-anchorLink" href="#guessability">#</a></h2>

                <p>The <a href="https://www.amazon.com/gp/browse.html/ref=s9_acss_bw_cg_JanSH_1a1_w?node=18379216011&amp;pf_rd_m=ATVPDKIKX0DER&amp;pf_rd_s=merchandised-search-top-1&amp;pf_rd_r=KXMR7XYNJE17P9D30QDN&amp;pf_rd_t=101&pf_rd_p=f674e2d6-ee8c-4e74-b263-44e37c320640&amp;pf_rd_i=6563140011">Amazon Echo</a> was the first voice-controlled personal assistant I purchased. The thing that most impressed me was how well it catered to things I <em>guessed</em> I could do with it, even if I didn&rsquo;t <em>know</em> I could.</p>
                
                <p>Coming to terms with the fact that there likely isn&rsquo;t a wholly intuitive typographic system I could employ and that there likely will be <em>some</em> sort of learning curve actually gives me a bit of leeway. I started to think about systems that could have high guessability.</p>

                <p>I explored what kind of guessability I could achieve when drawing upon institutional knowledge, popular knowledge, and common knowledge.</p>




                <h3 id="institutional-knowledge">Institutional knowledge <a class="dm-dp-anchorLink" href="#institutional-knowledge">#</a></h3>

                <p>Ever since I stumbled across Andy Clarke&rsquo;s <a href="https://stuffandnonsense.co.uk/blog/star-wars-styling">Star Wars styling</a>, I&rsquo;ve wanted to try something similar. One of the design systems we&rsquo;re building right now is for a major airline, so my first thought was to tie the typographic system back to a piece of institutional knowledge: in this case, the fleet. Even if designers and developers aren&rsquo;t already familiar, this could be a nice way to get some engrained knowledge about the company&rsquo;s main offerings. Here&rsquo;s the first pass at that.</p>

                <div class="dm-c-articleImage">

                    <img src="fleet.png" alt="Tying typography styles to an airline fleet" />
                
                </div><!-- .dm-c-articleImage -->

                <p>One of the biggest problems with this is that not only is it <em>not</em> intuitive, but it&rsquo;s actually counterintuitive, essentially unguessable. I do a fair bit of flying on planes, but I learned during this exercise that a 747 is larger than a 777 and a 757 is longer than a 767. And, once I run out of 700-level planes, I have to move to a completely different type of plane&mdash;the smaller CRJ line&mdash;all of which I imagine to be incredibly infuriating for a designer or developer that&rsquo;s just trying to set a 32-px headline. This is a non-starter.</p>





                <h3 id="popular-knowledge">Popular knowledge <a class="dm-dp-anchorLink" href="#popular-knowledge">#</a></h3>

                <p>Since institutional knowledge tended to have too much nuance to be helpful, I decided to try out more popular knowledge. The Brady Bunch and Simpsons characters have inherent age groups and sizes that may map to any typographic scale nicely:</p>

                <div class="dm-c-articleImage">

                    <img src="brady-bunch.png" alt="Tying typography styles to the Brady Bunch kids" />
                
                </div><!-- .dm-c-articleImage -->

                <div class="dm-c-articleImage">

                    <img src="simpsons.png" alt="Tying typography styles to Simpsons characters" />
                
                </div><!-- .dm-c-articleImage -->

                <p>While there&rsquo;s some merit here, there are definitely problems as well:</p>

                <ul>
                    <li>If a designer isn&rsquo;t familiar with the Brady Bunch or the Simpsons, the system is completely useless, because it&rsquo;s unguessable.</li>
                    <li>There are scale problems here too. The Brady Bunch system features the 6 kids. But what happens if we need a 7th style? Add Alice? And shouldn&rsquo;t the Alice style be larger than the Greg style? We&rsquo;s back in t-shirt size territory.</li>
                </ul>

                <p>Popular knowledge also seems to have just as many disadvantages as advantages.</p>




                <h3 id="common-knowledge">Common knowledge <a class="dm-dp-anchorLink" href="#common-knowledge">#</a></h3>

                <p>I&rsquo;ve long been a believer that <a href="/articles/cooking-with-design-systems/">design systems should contain the smallest number of elements that help you design the greatest variety of interfaces</a>. So, I set out to create the smallest number of unique typographic styles that any interface in this system might need. Starting with the <a href="https://en.wikipedia.org/wiki/The_Magical_Number_Seven,_Plus_or_Minus_Two">magical number seven, plus or minus two</a>, I challenged myself to create 7 and only 7 typographic styles. I think of them as &ldquo;presets,&rdquo; a default combination that acts as a starter to be modified.</p>

                <p>I also tried not to be too clever about the names. There are 7 presets, named 1 through 7. The common knowledge here is that anyone that knows how to count gets this system. These are the atomic typographic units from which all the system&rsquo;s typography stems.</p>

                <div class="dm-c-articleImage">

                    <img src="presets.png" alt="Typography presets" />
                
                </div><!-- .dm-c-articleImage -->

                <p>In <a href="http://getbem.com/introduction/"><abbr title="Block, Element, Modifier">BEM</abbr> style</a>, each of these presets also has a bold modifier.</p>

                <div class="dm-c-articleImage">

                    <img src="presets-bold.png" alt="Typography presets bold modifier" />
                
                </div><!-- .dm-c-articleImage -->

                <p>If we try as much as possible to stick with these 7 options but decide we really need another typographic style, it&rsquo;s easy enough to tack it onto the end as number 8. No need to try to sneak anything in-between the existing presets. The guessability is extremely high here.</p>

                <h2 id="type-in-code">A typographic system in code <a class="dm-dp-anchorLink" href="#type-in-code">#</a></h2>

                <p>To actually use this typographic system in a digital product, let&rsquo;s set up some canonical presets as mixins to be included everywhere. Each preset includes the combination of properties&mdash;size, leading, weight&hellip; whatever you decide&mdash;that should always travel with it. Here&rsquo;s how that might look in an <code>.scss</code> file <sup class="dm-c-sidenotes--link"><a href="#note1">1</a></sup>:</p>

                <aside id="note1" class="dm-c-sidenotes dm-l-articleGrid--sidenote">

                    <p>I&rsquo;m glossing over a few details of how I set up my <abbr>CSS</abbr> files philosophically, which I&rsquo;ve described in a previous article, &ldquo;<a href="/articles/cooking-with-design-systems/">Cooking with Design Systems</a>.&rdquo;</p>

                </aside>

                <pre class="dm-c-codeBlock"><code class="language-scss">
@mixin text-preset-1 {
    font-size: 40px;
    font-weight: 300;    
    line-height: 56px;
}

@mixin text-preset-7 {
    font-size: 12px;
    font-weight: 300;    
    letter-spacing: 1px;
    line-height: 20px;
    text-transform: uppercase;
}
                    </code></pre>

                    <p>These are the only places in your <abbr>(S)CSS</abbr> that you should see <code>font-size</code> or <code>line-height</code> or <code>font-weight</code> declarations. Everywhere else in your code, you should be simply including 1 of these 7 presets:</p>

                    <pre class="dm-c-codeBlock"><code class="language-scss">
.caption {
    @include text-preset-7;
}

.tabs_title {
    @include text-preset-7;
}

.kicker {
    @include text-preset-7;
}

@mixin text-preset-7--bold {
    @include text-preset-7;
    font-weight: 700;
}
                    </code></pre>

                    <p>If you do find individual declarations, they should be a sign to you that you&rsquo;re intentionally overriding or deviating from the system.</p>

                    <p>This methodology can help you tie different elements to the same canonical typographic preset. This way, any broad changes happen at the preset level and can trickle outward to any component that inherits that style.</p>



                    <h2 id="so-far-so-good">So far, so good <a class="dm-dp-anchorLink" href="#so-far-so-good">#</a></h2>

                    <p>To date, we&rsquo;ve built about 45 <a href="/articles/design-systems-pilots-scorecards/">pilots</a> utilizing over 80 <a href="http://atomicdesign.bradfrost.com/">atoms, molecules, and organisms</a>, and the typographic system of 7 presets has held up without having to have added to it. That&rsquo;s not to say we don&rsquo;t have outliers, but so far, I only count twice that we&rsquo;ve had to make something custom.</p>

                    <p>What kinds of typographic systems have you found useful?</p>

                    <?php /* ?>

                    <h2 id="typographically-driven-interfaces">Typographically-driven interfaces <a class="dm-dp-anchorLink" href="#typographically-driven-interfaces">#</a></h2>

                    <p>Harmonious designs go a long way for both creators and users, and design systems make that easy if that harmony is built in from the start. I love <a href="https://24ways.org/2009/type-inspired-interfaces">letting type give me cues for interface design</a> as a way to initially establish that harmony.</p>\

                <ul>
                    <li>Andrew Clarke Star Wars</li>
                    <li>8pt grid</li>
                    <li>Component Architecture</li>
                    <li>Make the best thing the easiest thing</li>
                    <li>Guessing/Predicting Alexa - .gray, .grey</li>
                    <li>If not intuitive, guessability</li>
                    <li>Nathan Curtis Space in Design Systems</li>
                    <li>Design systems are the smallest set of tools</li>
                </ul>

                <ol>
                    <li>Institutional Knowledge</li>
                    <li>Popular Knowledge</li>
                    <li>Common Knowledge</li>
                </ol>

                <?php */ ?>

            </div>

            <section id="up-next" class="dm-c-upNext">

                <h1 class="dm-c-upNext_kicker">Up Next</h1>

                <h2 class="dm-c-upNext_title">
                    <a href="/articles/my-experience-with-laser-eye-surgery/">
                        My Experience with Laser Eye <span class="dm-c-upNext_title_lastWord">Surgery</span>
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