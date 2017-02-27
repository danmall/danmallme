<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head>    
    <title>&ldquo;Tools,&rdquo; an article by Dan Mall</title>
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
            Design System Tools &amp; Patterns
        </h1>

        <h2 class="dm-c-pageHeader_date">December 5, 2016 at 9:02 <abbr title="Ante Meridien">AM</abbr></h2>

    </header><!-- .page-header -->

    <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1696&amp;serve=CVYD42T&amp;placement=danielmallcom" id="_carbonads_js"></script>

    <main role="main" class="dm-c-articleWell">

        <div class="dm-dp-textPassage">

            <p><span class="dm-dp-openingLines">In building design systems</span>, style guides, and component libraries more and more for clients, the word <em>comprehensive</em> comes up a lot. On the surface, the word really means &ldquo;complete,&rdquo; but its etymology hints as something more useful in this context. It&rsquo;s derived from the latin <dfn lang="la">comprehendere</dfn>, which means to &ldquo;grasp mentally.&rdquo; And so, in designing this site, I set out to create a comprehensive design system, which means a system that I could grasp mentally. For me, that means knowing the system well enough that I deviate from it as little as possible.</p>

            <p>A few things factored into this:</p>

            <ol>
                <li>A good design system teaches you how to use it; otherwise, it&rsquo;s just a component library.</li>
                <li>In order to better <a href="https://the-pastry-box-project.net/dan-mall/2012-september-12">decide in the browser</a>&mdash;that is, make interface decisions in code&mdash;I need the same tools in code that I&rsquo;d have if I was making interface decisions in a <abbr title="Graphical User Interface">GUI</abbr>.</li>
                <li>Certainly not a new analogy, but this process really underscored for me the idea that a good design system is like jazz. There are themes that I&rsquo;ll come back to over and over, but there are also times where I&rsquo;ll need to improvise. What makes the improvisations so special in a jazz song is that they&rsquo;re grounded by the theme; a song of all improvisations would be really tough to listen to, because there&rsquo;s no anchor.</li>
            </ol>

            <p>The first part of this process was about building design tools in code. In order to replicate my Photoshop/Sketch workflow where I&rsquo;m able to move quickly, I need the same options in code. Prolific designer Milton Glaser <a href="http://brendandawes.com/blog/Glaser">said</a>, &ldquo;I move things around until they look right,&rdquo; Hey, I do that too! Because that&rsquo;s most of what I do in Photoshop and Sketch, I need a way to do that in code.</p>

            <p>I started to build some &ldquo;move around&rdquo; tools. I&rsquo;m a big fan of how developer <a href="http://twitter.com/csswizardry">Harry Roberts</a> <a href="http://csswizardry.com/2015/08/bemit-taking-the-bem-naming-convention-a-step-further/">suggests organizing CSS</a> for maximum maintainability, and I just wrapped a project with <a href="http://twitter.com/brad_frost">Brad Frost</a> and <a href="http://twitter.com/frostyweather">Ian Frost</a> where we came up with a similar <a href="http://bradfrost.com/blog/post/css-architecture-for-design-systems/">CSS architecture</a>. I also wanted to try out the <a href="https://spec.fm/specifics/8-pt-grid">8-point grid</a> that all the kids are raving about.</p>

            <p>So I wrote a few things down. First, a variable so that I can change spacing globally if the 8-pt thing doesn&rsquo;t work out.</p>

            <pre class="dm-c-codeBlock"><code class="language-css">
$spacing: 8;
            </code></pre>

            <p class="dm-u-textIndent--0">Next, some spacing mixins:</p>

            <pre class="dm-c-codeBlock"><code class="language-css">
@mixin dm-u-margin--xs {
    margin: $spacing + px;
}
            </code></pre>

            <p>A few notes about that:</p>

            <ul>
                <li><code>dm-</code> is my namespace for the site. (Stands for &ldquo;Dan Mall.&rdquo;)</li>
                <li><code>u-</code> stands for &ldquo;utility.&rdquo; More on this later.</li>
                <li>I made <a href="#">a lot of individual mixins</a> for margins (top, right, bottom, left) and padding. Seems like overkill, but comes in really handy.</li>      
            </ul>


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