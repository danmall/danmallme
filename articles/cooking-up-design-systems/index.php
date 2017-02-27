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
    <meta name="twitter:title" property="og:title" content="Vanilla" />
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
            Cooking with Design Systems
        </h1>

        <h2 class="dm-c-pageHeader_date">December 5, 2016 at 9:02 <abbr title="Ante Meridien">AM</abbr></h2>

    </header><!-- .page-header -->

    <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1696&amp;serve=CVYD42T&amp;placement=danielmallcom" id="_carbonads_js"></script>

    <main role="main" class="dm-c-articleWell">

        <div class="dm-dp-textPassage">

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

            <p>If I&rsquo;ve been running my food truck for a while, I know that some dishes will almost always get ordered, so I can prep them in advance. I can start cooking rice. I can chop lettuce and cabbage. I can set up my <a class="dm-u-fontStyle--italic" lang="fr" href="https://vimeo.com/177133790#t=1h16m28s" title="&ldquo;Build Right: Maker Series on Design Workflow with Dan Mall&rdquo; on Vimeo">mise en place</a> so that it&rsquo;s ready for use when customers start ordering. I can also pre-package a few things so that no more assembly is required, like throwing a cup of salsa and a handful of chips into a bag and sealing it.</p>

            <p>It&rsquo;s helpful for me to think about these things in categories:</p>

            <ul>
                <li>
                    <strong>Raw ingredients</strong>
                    <ul>
                        <li>lettuce</li>
                        <li>tomatoes</li>
                        <li>cabbage</li>
                        <li>&hellip;</li>
                    </ul>
                </li>
                <li>
                    <strong>Dishes</strong>
                    <ul>
                        <li>
                            <em>Mains</em>
                            <ul>
                                <li>lettuce</li>
                                <li>tomatoes</li>
                                <li>cabbage</li>
                                <li>&hellip;</li>
                            </ul>
                        </li>                        
                    </ul>
                    <ul>
                        <li>
                            <em>Sides</em>
                            <ul>
                                <li>lettuce</li>
                                <li>tomatoes</li>
                                <li>cabbage</li>
                                <li>&hellip;</li>
                            </ul>
                        </li>                        
                    </ul>
                </li>
            </ul>
            

            <h2 class="dm-u-text--m dm-u-marginBottom--xs">Raw ingredients</h2>
            <ul>
                <li>something</li>
                <li>something</li>
                <li>something</li>
                <li>something</li>
            </ul>

            <h2>Dishes</h2>
            <h3>Mains</h3>
            <ul>
                <li>something</li>
                <li>something</li>
                <li>something</li>
                <li>something</li>
            </ul>

            <h3>Sides</h3>
            <ul>
                <li>something</li>
                <li>something</li>
                <li>something</li>
                <li>something</li>
            </ul>




            <p>Turns out this is a pretty good model for planning out a design system.</p>

            <section class="dm-dp-articleSection">
            
                <p>In order to replicate my Photoshop/Sketch workflow where I&rsquo;m able to move quickly, I need the same options in code. Prolific designer <a href="https://www.miltonglaser.com/">Milton Glaser</a> <a href="http://brendandawes.com/blog/Glaser">said</a>, &ldquo;I move things around until they look right,&rdquo; Hey, I do that too! Because that&rsquo;s most of what I do in Photoshop and Sketch, I need a way to do that in code.</p>

                <p>First, I need to make the &ldquo;things.&rdquo; That means writing the <abbr title="HyperText Markup Language">HTML</abbr> I need as <a href="http://html5doctor.com/lets-talk-about-semantics/" title="&ldquo;Let&rsquo;s Talk about Semantics,&rdquo; on HTML5Doctor">semantically</a> as possible.</p>

                <p>Then, I started to build some &ldquo;move around&rdquo; tools. I&rsquo;m a big fan of how <a href="http://twitter.com/csswizardry">Harry Roberts</a> <a href="http://csswizardry.com/2015/08/bemit-taking-the-bem-naming-convention-a-step-further/" title="&ldquo;BEMIT: Taking the BEM Naming Convention a Step Further,&rdquo; by Harry Roberts">suggests organizing <abbr title="Cascading Style Sheets">CSS</abbr></a> for maximum maintainability, and I just wrapped a project with <a href="http://twitter.com/brad_frost">Brad Frost</a> and <a href="http://twitter.com/frostyweather">Ian Frost</a> where we used with a similar <a href="http://bradfrost.com/blog/post/css-architecture-for-design-systems/"><abbr>CSS</abbr> architecture</a>. I also wanted to try out the <a href="https://spec.fm/specifics/8-pt-grid">8-point grid</a> that all the kids are raving about.</p>

                <p>So I wrote a few things down. First, <a href="#">some variables</a> so that I can change spacing globally if the 8-pt thing doesn&rsquo;t work out.</p>

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

                <p>It&rsquo;s not as <abbr title="Don&rsquo;t repeat yourself">DRY</abbr> as I&rsquo;d like to be, but I&rsquo;m happy to trade principle for the pragmatism of moving quickly in code.</p>

            </section><!-- .dm-dp-articleSection -->

        </div>

        <section id="up-next" class="dm-c-upNext">

            <h1 class="dm-c-upNext_kicker">Up Next</h1>

            <h2 class="dm-c-upNext_title">
                <a href="/articles/on-creative-direction/">
                    On Creative <span class="dm-c-upNext_title_lastWord">Direction</span>
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