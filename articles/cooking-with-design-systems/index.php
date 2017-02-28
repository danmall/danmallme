<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head>    
    <title>&ldquo;Cooking with Design Systems,&rdquo; an article by Dan Mall</title>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?> 
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>

    <!-- Thanks Jeremy! https://adactio.com/journal/9881  -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@danmall" />
    <meta name="twitter:url" property="og:url" content="<?php echo 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>" />
    <meta name="twitter:title" property="og:title" content="Cooking with Design Systems" />
    <meta name="twitter:description" property="og:description" content="Design systems make deciding in the browser much easier if you have the right ingredients." />
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
            Cooking with Design Systems
        </h1>

        <h2 class="dm-c-pageHeader_date">February 28, 2017 at 12:06 <abbr title="Ante Meridien">AM</abbr></h2>

    </header><!-- .page-header -->

    <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1696&amp;serve=CVYD42T&amp;placement=danielmallcom" id="_carbonads_js"></script>

    <main role="main">

        <div class="dm-dp-textPassage dm-c-articleWell">

            <!-- <p><span class="dm-dp-openingLines">In building design systems</span>, style guides, and component libraries more and more for clients, the word <em>comprehensive</em> comes up a lot. On the surface, the word really means &ldquo;complete,&rdquo; but its etymology hints as something more useful in this context. It&rsquo;s derived from the latin <dfn lang="la">comprehendere</dfn>, which means to &ldquo;grasp mentally.&rdquo; And so, in designing this site, I set out to create a comprehensive design system, which means a system that I could grasp mentally. For me, that means knowing the system well enough that I deviate from it as little as possible.</p>

            <p>A few things factored into this:</p>

            <ol>
                <li>A good design system teaches you how to use it; otherwise, it&rsquo;s just a component library.</li>
                <li>In order to better <a href="https://the-pastry-box-project.net/dan-mall/2012-september-12">decide in the browser</a>&mdash;that is, make interface decisions in code&mdash;I need the same tools in code that I&rsquo;d have if I was making interface decisions in a <abbr title="Graphical User Interface">GUI</abbr>.</li>
                <li>Certainly not a new analogy, but this process really underscored for me the idea that a good design system is like jazz. There are themes that I&rsquo;ll come back to over and over, but there are also times where I&rsquo;ll need to improvise. What makes the improvisations so special in a jazz song is that they&rsquo;re grounded by the theme; a song of all improvisations would be really tough to listen to, because there&rsquo;s no anchor.</li>
            </ol> -->

            <p><span class="dm-dp-openingLines">A great design system should</span> equip you to quickly and confidently create delicious user experiences. Creating a great design system is a lot like stocking a very specific kind of kitchen.</p>

            <p>Let&rsquo;s say I run a food truck. I have a small kitchen in said truck, so I need to be judicious in what ingredients I stock. To determine the right ingredients to bring along, I can ask myself a few simple questions:</p>

            <ol>
                <li>What dishes will I <em>definitely</em> make? What ingredients do I need to make those dishes?</li>
                <li>What dishes <em>might</em> I make? What ingredients do I need to make those dishes?</li>
            </ol>

            <p>What&rsquo;s on my menu? If I run a Mexican street food truck, I&rsquo;ll have main dishes like tacos, burritos, and quesadillas. I&rsquo;ll have a few appetizers and sides like street corn, empanadas, and chips &amp; salsa. But, I&rsquo;ll also need the ingredients that make those mains and sides, even if they&rsquo;re not specifically listed on my menu&mdash;lettuce, tomatoes, cabbage, mayonnaise, salt, pepper, paprika, avocado, rice, jalape&ntilde;o peppers, tortillas, tomatilos, oregano, cilantro, cheese, etc. These are all the things I&rsquo;ll need to bring with me onto the truck.</p>

            <p>Part of what&rsquo;s important in what I&rsquo;m bringing is also what I&rsquo;m <em>not</em> bringing. Dill and cinnamon are great spices in general, but I don&rsquo;t plan on making anything with them, so I can leave out for now. (And I can always change my mind later.)</p>

            <p>If I&rsquo;ve been running my food truck for a while, I know that some dishes will almost always get ordered, so I can prep them in advance. I can start cooking rice. I can chop lettuce and cabbage. I can set up my <a class="dm-u-fontStyle--italic" lang="fr" href="https://vimeo.com/177133790#t=1h16m28s" title="&ldquo;Build Right: Maker Series on Design Workflow with Dan Mall&rdquo; on Vimeo">mise en place</a> so that it&rsquo;s ready for use when customers start ordering.</p>

            <p>I can get some headstarts too. I can throw a cup of salsa and a handful of chips into a bag and seal it; no more assembly required. I can also pre-cook beef with onions, spices, and marinade to be ready to throw into a taco or burrito. This one needs to be finished with a tortilla and some veggies, but I don&rsquo;t need to start from scratch everytime someone orders a beef dish.</p>

            <p>It&rsquo;s helpful for me to think about these things in categories:</p>

            <ul>
                <li>
                    <strong>Raw ingredients</strong>
                    <ul>
                        <li>Lettuce</li>
                        <li>Tomatoes</li>
                        <li>Cilantro</li>
                        <li>&hellip;</li>
                    </ul>
                </li>
                <li>
                    <strong>Headstarts</strong>
                    <ul>
                        <li>Chips &amp; Salsa</li>
                        <li>Beef &amp; Onions</li>
                        <li>&hellip;</li>
                    </ul>
                </li>
                <li>
                    <strong>Dishes</strong>
                    <ul>
                        <li>
                            <em>Mains</em>
                            <ul>
                                <li>
                                    Tacos
                                    <ul>
                                        <li>Chicken</li>
                                        <li>Beef</li>
                                    </ul>
                                </li>
                                <li>
                                    Burritos
                                    <ul>
                                        <li>Chicken</li>
                                        <li>Beef</li>
                                    </ul>
                                </li>
                                <li>&hellip;</li>
                            </ul>
                        </li>                        
                    </ul>
                    <ul>
                        <li>
                            <em>Sides</em>
                            <ul>
                                <li>Street Corn</li>
                                <li>Empanadas</li>
                                <li>&hellip;</li>
                            </ul>
                        </li>                        
                    </ul>
                </li>
            </ul>

            <p class="dm-u-textIndent--0">Turns out this is also a pretty good model for organizing a design system.</p>

            <section class="dm-dp-asteriskSplit">

                <p>Even though many have been using these phrases for years, you can tell it&rsquo;s still early days regarding things like &ldquo;design systems,&rdquo; &ldquo;component libraries,&rdquo; and &ldquo;style guides&rdquo; because we can&rsquo;t yet get the words right. Everyone insists that they&rsquo;re different, but we still use them interchangeably. <a href="http://v3.danielmall.com/articles/researching-design-systems/">Canonical definitions for each have yet to emerge</a>. Until they do, I&rsquo;ll use the ones that best fit for and most appeal to me.</p>

                <p>Graphics editors like Photoshop and Sketch allow you&mdash;but also force you&mdash;to create everything from scratch. A strict component library might encourage you to only use the components as they come without any customization; a good example was <a href="http://www.adobe.com/content/dotcom/cn/devnet/flash/articles/skinning_flash_cs3/_jcr_content/articlecontentAdobe/image.img.jpg/1276162998293.jpg">Flash&rsquo;s component library</a> (Bueller?). Design systems fit somewhere in between. A design system is the smallest set of tools to help me effectively create what I need.</p>

            </section><!-- .dm-dp-asteriskSplit -->

        </div>

        <div class="dm-c-articleImage">

            <?php include('design-system-spectrum.svg'); ?>

        </div>

        <div class="dm-dp-textPassage dm-c-articleWell">

            <p>It&rsquo;s worth mentioning that graphics editors and component libraries aren&rsquo;t mutually exclusive. Most examples in the wild aren&rsquo;t purely one or the other, or at least easily convert closer to the certain. <a href="https://www.sketchappsources.com/tag/kit.html">Add a UI Kit to Sketch</a> and it gets closer to a design system. Add some spacing and sizing tokens to a component library and it gets closer to a design system.</p>

            <p>Testing a design system&rsquo;s efficacy is easy on paper: can you easily create what you intend to? Back to our metaphor, can I quickly make a delicious burrito? Like a well-stocked but limited kitchen, a good design system is a combination of raw ingredients and headstarts to make delicious dishes. It&rsquo;s as many of these things as you need, and no more.</p>

            <p>I wanted to create and maintain this site primarily with a design system&mdash;not a graphics editor or a component library&mdash;so I brought along a limited pantry:</p>

            <ul>
                <li>
                    <strong>Raw ingredients (utilities and mixins)</strong>
                    <ul>
                        <li>Text sizes</li>
                        <li>Text cases</li>
                        <li>Alignments</li>
                        <li>Margins</li>
                        <li>Paddings</li>
                        <li>Displays</li>
                        <li>Positions</li>
                        <li>Movements</li>
                        <li>&hellip;</li>
                    </ul>
                </li>
                <li>
                    <strong>Headstarts</strong>
                    <ul>
                        <li>Headings</li>
                        <li>Text passages</li>
                        <li>List patterns</li>
                        <li>Content boxes</li>                        
                    </ul>
                </li>
                <li>
                    <strong>Dishes</strong>
                    <ul>
                        <li>
                            <em>Mains</em>
                            <ul>
                                <li>
                                    Landing Templates
                                    <ul>
                                        <li>Small list</li>
                                        <li>Large list</li>
                                    </ul>
                                </li>
                                <li>Forms</li>
                                <li>Homepage</li>
                                <li>&hellip;</li>
                            </ul>
                        </li>                        
                    </ul>
                    <ul>
                        <li>
                            <em>Sides</em>
                            <ul>
                                <li>Headers</li>
                                <li>Footers</li>
                                <li>Navigations</li>
                                <li>Comment Blocks</li>
                                <li>Recirculation Areas</li>
                                <li>&hellip;</li>
                            </ul>
                        </li>                        
                    </ul>
                </li>
            </ul>

            <p>How did I decide what&rsquo;s what? I&rsquo;m glad you asked.</p>

            <section class="dm-dp-asteriskSplit">
            
                <p>Prolific designer <a href="https://www.miltonglaser.com/">Milton Glaser</a> <a href="http://brendandawes.com/blog/Glaser">said</a>, &ldquo;I move things around until they look right,&rdquo; Because that&rsquo;s most of what I do in Photoshop and Sketch, I need a way to do that in code.</p>

                <p>First, I need to make the &ldquo;things&rdquo; that need to be moved around. That means writing the <abbr title="HyperText Markup Language">HTML</abbr> I need as <a href="http://html5doctor.com/lets-talk-about-semantics/" title="&ldquo;Let&rsquo;s Talk about Semantics,&rdquo; on HTML5Doctor">semantically</a> as possible.</p>

                <p>Then, I started to build some &ldquo;move around&rdquo; tools. I&rsquo;m a big fan of how <a href="http://twitter.com/csswizardry">Harry Roberts</a> <a href="http://csswizardry.com/2015/08/bemit-taking-the-bem-naming-convention-a-step-further/" title="&ldquo;BEMIT: Taking the BEM Naming Convention a Step Further,&rdquo; by Harry Roberts">suggests organizing <abbr title="Cascading Style Sheets">CSS</abbr></a> for maximum maintainability, and I just wrapped a project with <a href="http://twitter.com/brad_frost">Brad Frost</a> and <a href="http://twitter.com/frostyweather">Ian Frost</a> where we used with a similar <a href="http://bradfrost.com/blog/post/css-architecture-for-design-systems/"><abbr>CSS</abbr> architecture</a>. I also wanted to try out the <a href="https://spec.fm/specifics/8-pt-grid">8-point grid</a> that all the kids are raving about.</p>

                <p>I created <a href="#">some variables</a> so that I can change spacing globally if the 8-pt thing doesn&rsquo;t work out.</p>

                <pre class="dm-c-codeBlock"><code class="language-scss">
$spacing            :       8;

$xs                 :       $spacing;
$s                  :       $spacing * 2;
$m                  :       $spacing * 3;
$l                  :       $spacing * 4;
$xl                 :       $spacing * 5;
$xxl                :       $spacing * 6;
                </code></pre>

                <p class="dm-u-textIndent--0">Next, <a href="#">some spacing mixins</a>:</p>

                <pre class="dm-c-codeBlock"><code class="language-scss">
@mixin dm-u-margin--0 {
    margin: 0;
}

@mixin dm-u-margin--xs {
    margin: $xs + px;
}

@mixin dm-u-margin--s {
    margin: $s + px;
}

@mixin dm-u-margin--m {
    margin: $m + px;
}

@mixin dm-u-margin--l {
    margin: $l + px;
}

@mixin dm-u-margin--xl {
    margin: $xl + px;
}

@mixin dm-u-margin--xxl {
    margin: $xxl + px;
}
                </code></pre>

                <p>A few notes about that:</p>

                <ul>
                    <li><code>dm-</code> is my namespace for the site. (Stands for &ldquo;Dan Mall.&rdquo;)</li>
                    <li><code>u-</code> stands for &ldquo;utility.&rdquo; More on this later.</li>
                    <li>I made <a href="#">a lot of individual mixins</a> for margins (top, right, bottom, left) and padding. Seems like overkill, but comes in really handy.</li>      
                </ul>

                <p>I also duplicated those mixins in a <a href="#"><code>utilities.scss</code></a> file so that I could use them in both <abbr>HTML</abbr> and <abbr>CSS</abbr>:</p>

                <pre class="dm-c-codeBlock"><code class="language-scss">
.dm-u-margin--0 {
    @include dm-u-margin--0;
}

.dm-u-margin--xs {
    @include dm-u-margin--xs;
}

.dm-u-margin--s {
    @include dm-u-margin--s;
}

.dm-u-margin--m {
    @include dm-u-margin--m;
}

.dm-u-margin--l {
    @include dm-u-margin--l;
}

.dm-u-margin--xl {
    @include dm-u-margin--xl;
}

.dm-u-margin--xxl {
    @include dm-u-margin--xxl;
}
                </code></pre>

                <p>It&rsquo;s not as <abbr title="Don&rsquo;t repeat yourself">DRY</abbr> as I&rsquo;d like it to be, but I&rsquo;m happy to trade principle for the pragmatism of moving quickly in code.</p>

                <p>Once I feel like I have a thorough enough set of raw ingredients, <em>my goal is to create as much of the site as I can without opening my stylesheet again</em>. If I can do this, I&rsquo;m <em>using</em> my design system, as opposed to creating patterns on the fly.</p>

                <p>Let&rsquo;s do an example: a basic article page. I&rsquo;ll start by creating the title of the page:</p>

                <pre class="dm-c-codeBlock"><code class="language-html">
&lt;h1&gt;Cooking up Design Systems&lt;/h1&gt;
                </code></pre>

                <p>I&rsquo;d like to style this headline to be somewhat large, have a little space on the left, and have some room below. Without a design system, I might create a new <code>class</code> and write some new styles, but remember: I want to use my design system and not add anything new to my stylesheet. So, I&rsquo;ll use some rules that I&rsquo;ve already created:</p>

                <pre class="dm-c-codeBlock"><code class="language-html">
&lt;h1 class="dm-u-text--xl dm-u-paddingLeft--m dm-u-marginBottom--l"&gt;Cooking up Design Systems&lt;/h1&gt;
                </code></pre>

                <p>This style of coding certainly isn&rsquo;t new; many framework like <a href="http://tachyons.io/">Tachyons</a> or <a href="http://johnpolacek.github.io/expressive-css/">Expressive <abbr>CSS</abbr></a> have suggested this for a long time. The biggest criticism of this approach is that it isn&rsquo;t much better than writing inline styles, and you lose a lot of the benefits of the cascade that made <abbr>CSS</abbr> so powerful in the first place. True, at first glance, it doesn&rsquo;t look much different than:</p>

                <pre class="dm-c-codeBlock"><code class="language-html">
&lt;h1 style="font-size: 40px; padding-left: 24px; margin-bottom: 32px;"&gt;Cooking up Design Systems&lt;/h1&gt;
                </code></pre>

                <p class="dm-u-textIndent--0">But I&rsquo;d argue that there are still a few:</p>

                <ul>
                    <li><strong>Visual consistency.</strong> If you&rsquo;re using class names instead of inline styles and are using something like the 8-pt grid, you know you won&rsquo;t ever have a situation where one headline has 16px of padding and another has 17px. You&rsquo;re using your design system!</li>
                    <li><strong>A limited pantry.</strong> The beauty and the curse that comes with a graphics editor is that the world is your oyster. Want to nudge that particular piece of text over half a pixel? Go for it. Make your developers go crazy and set your <abbr title="Obsessive Compulsive Disorder">OCD</abbr> users ablaze. Using your already established conventions through class names gives you a beneficial constraint. Part of Sketch&rsquo;s fast adoption with designers is no-doubt due to the fact that it&rsquo;s limited toolbar is a welcome constraint from the hundreds of tools at your fingertips in Photoshop. Take that same restrained approach to <a href="https://the-pastry-box-project.net/dan-mall/2012-september-12">deciding in the browser</a>.</li>
                </ul>

                <p>You get an even bigger benefit if you take this a step further. Let&rsquo;s say you create 3 more of these headlines. Congrats! You&rsquo;re on your way to a bona fide pattern! This is where I&rsquo;d crack back open my stylesheet, not to write more styles but to codify the pattern.</p>

                <p>First question: is it a <a href="http://v3.danielmall.com/articles/content-display-patterns/">content pattern or a display pattern</a>? It&rsquo;s a bit too specific to apply to a particular type of content; calling this a <code>articleTitle</code> may make me think twice about using this on the Contact page. Display pattern it is! We&rsquo;ll call this our <code>bigTitle</code>. I&rsquo;ll use a <code>dp-</code> prefix to mark it as such. So, the <abbr>HTML</abbr> turns into:</p>

                <pre class="dm-c-codeBlock"><code class="language-html">
&lt;h1 class="dm-dp-bigTitle"&gt;Cooking up Design Systems&lt;/h1&gt;
                </code></pre>

                <p>In my stylesheet, I&rsquo;ll create a new rule for my new display pattern, but instead of writing custom declarations, I&rsquo;ll instead use my existing mixins, cut-and-pasted directly from my markup. Again, I want to <em>use what&rsquo;s already in my design system</em>, keeping things as <abbr>DRY</abbr> as I can. That rule would look like this:</p>

                <pre class="dm-c-codeBlock"><code class="language-scss">
.dm-dp-bigTitle {
    @include dm-u-text--xl;
    @include dm-u-paddingLeft--m;
    @include dm-u-marginBottom--l;
}
                </code></pre>

                <p>That way, I&rsquo;ll almost always know at a glance as I skim my stylesheet what parts use the design system I&rsquo;ve established and what parts deviate.</p>

                <p>Last thing: I like to leave some space at the bottom of every rule for &ldquo;seasoning.&rdquo; In cooking, there&rsquo;s this phrase called &ldquo;season to taste,&rdquo; which means that you can continue to add spices and herbs if a dish doesn&rsquo;t taste perfect when it&rsquo;s done cooking. It might not be part of the recipe, but you need it in this specific instance. In the case of code, that might be applying a background color to an element or adding a particular animation:</p>

                <pre class="dm-c-codeBlock"><code class="language-scss">
.dm-dp-bigTitle {
    @include dm-u-text--xl;
    @include dm-u-paddingLeft--m;
    @include dm-u-marginBottom--l;

    // seasoning
    background-color: gold;
}
                </code></pre>

                <p>Again, you can quickly visually identify what parts of this block are part of the design system, and which is some extra seasoning. After noticing that you&rsquo;re writing <code>background-color: gold;</code> 4 or 5 different times, then you can consider adding it permanently to your design system as a utility and/or mixin.</p>

                <p>Hopefully, this example showed how you can bring some of the <abbr title="User Interface">UI</abbr> decision-making process you previously did in a graphics editor into the browser, as long as you have the right code approach to support it.</p>

                <p>Now you&rsquo;re cooking!</p>

            </section><!-- .dm-dp-asteriskSplit -->

        </div>

        <div class="dm-c-articleWell">

            <section id="up-next" class="dm-c-upNext">

                <h1 class="dm-c-upNext_kicker">Up Next</h1>

                <h2 class="dm-c-upNext_title">
                    <a href="http://v3.danielmall.com/articles/investments/">
                        <span class="dm-c-upNext_title_lastWord">Investments</span>
                    </a>
                </h2>

            </section><!-- .dm-c-upNext -->

        </div><!-- .dm-c-articleWell -->

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