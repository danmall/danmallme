<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head profile="http://gmpg.org/xfn/11">
    <title>&ldquo;Content &amp; Display Patterns,&rdquo; an article by Dan Mall</title>
    <meta name="description" content="Display &amp; Datatype Patterns" />
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?>
    
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/jsReferenceHead.php"); echo "\n"; ?>    
    <link href='http://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="/articles/_vanilla/vanilla.css" />
    <link rel="stylesheet" href="content-display-patterns.css" />

	<!-- Facebook -->
    <meta property="og:title" content="Display &amp; Datatype Patterns" />
    <meta property="og:description" content="An important distinction for pattern-based projects."/>	
    <meta property="og:url" content="http://danielmall.com/articles/content-display-patterns/" />
    <meta property="og:image" content="http://danielmall.com/articles/content-display-patterns/home-thumb.png" />
    
</head>

<body id="article" class="articles">	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>
	
	<div id="article-area-wrap" class="content-display-patterns">

        <div class="intro-wrap">
			
    	    <section class="clearfix wrap vanilla">			
    			
    			<h1 class="article-header-title"><span class="top">Content &amp; Display Patterns</span></h1>
    			
    			<p>Most of <a href="http://superfriend.ly/">SuperFriendly</a>&rsquo;s work over the last few years has been with organizations that need specific help with crafting design systems that enable them to extend the work long after we&rsquo;ve handed off initial work. It&rsquo;s not uncommon to receive initial inquiries containing sentences like these: </p>

                <blockquote>

                    <p>We are looking for a partner to help us evolve the design language that will guide future <abbr title="User Interface">UI</abbr> design of our internal-facing web applications.</p>

                    <p>We&rsquo;re looking for help in re-writing our visual style in a way that makes it extremely modular. We&rsquo;re not interested in abandoning our original design but want users to see this as an evolution.</p>

                    <p>We&rsquo;re aiming for a core design system that&rsquo;s consistent across our whole family of sites, with variations in color, branding, and swappable modules/widgets (galleries, content buckets, etc.).</p>

                </blockquote>

                <p>Littered throughout these emails are words like &ldquo;style guide,&rdquo; &ldquo;atomic design,&rdquo; &ldquo;modular,&rdquo; &ldquo;responsive design,&rdquo; &ldquo;patterns,&rdquo; &ldquo;frameworks,&rdquo; and the like. The common theme seems to be a tipping point in either managing multiple sites independently and longing for the efficiency of a shared system across them, or feeling stuck by traditional &ldquo;templates&rdquo; not being modular enough to repurpose elements for different configurations.</p>

                <p>During the <a title="&ldquo;TechCrunch: A Responsive Redesign,&rdquo; by Dan Mall" href="http://danielmall.com/articles/techcrunch-responsive-redesign/">TechCrunch</a> and <a title="&ldquo;The Responsive Mobile Entertainment Weekly Site,&rdquo; by Dan Mall" href="http://danielmall.com/articles/responsive-mobile-entertainment-weekly/">Entertainment Weekly</a> redesigns, our goal of building an infinitely scalable, modular design system was the perfect excuse for <a href="http://bradfrost.com/">Brad Frost</a> to exercise some ideas he had about this very topic. Those exercises eventually led to his <a href="http://bradfrost.com/blog/post/atomic-web-design/">atomic design</a> methodology and to the tool that eventually became <a href="http://patternlab.io/">Pattern Lab</a>. I&rsquo;ve done ten projects with Pattern Lab now&mdash;it&rsquo;s certainly the closest thing to my default tool of choice&mdash;and a handful of projects with more custom, hand-rolled approaches. Perhaps the most important lesson in building modular systems I&rsquo;ve learned is this:</p>

                <p id="fn1-source"><strong><em>Content</em> patterns are different than <em>Display</em> patterns.</strong><sup class="footnote-link"><a href="#fn1">1</a></sup></p>

                <p>A Content pattern describes the types of elements within and can be rendered in multiple forms. A Display pattern describes a specific rendering and can be applied to multiple types of Content patterns. Each is incomplete without the other. In order to make a site that people can use, every element on the screen needs a Content pattern and a Display pattern applied to it. Embracing the difference in pattern types is the key to making a modular design system infinitely more scalable. </p>

                <h2 id="identifying-abstracting"><a class="named-anchor" href="#identifying-abstracting">Identifying and abstracting patterns</a></h2>

                <p>Let&rsquo;s look at a common example. When constructing a page, I&rsquo;ll often hear a team member say something like, &ldquo;We can use the Event pattern here.&rdquo; What does that actually mean? Perhaps the most obvious place to start is from a previously designed comp that looks like this:</p>

                <div class="easy-clearing margin-bottom">
                    <img src="star-wars-event.png" alt="A Data pattern for an Event" />
                </div><!-- .easy-clearing -->

                <p>A simple way to mark that up&mdash;using <abbr title="Block, Element, Modifier"><a href="https://css-tricks.com/bem-101/">BEM</a></abbr> methodology&mdash;could look like this (for simplicity, I&rsquo;ve omitted useful markup like <a href="http://microformats.org/">microformats</a>):</p>

                <p><pre class="code-block"><code>&lt;div class="event"&gt;
    &lt;h1 class="event__title"&gt;Star Wars: The Force Awakens Premiere&lt;/h1&gt;
    &lt;p class="event__date"&gt;Dec 20, 2015&lt;/p&gt;
    &lt;p class="event__location"&gt;Ritz East, Philadelphia PA&lt;/p&gt;
&lt;/div&gt;</code></pre></p>

                <p>While there&rsquo;s nothing technically incorrect about this markup, it may not be abstract enough for reuse. As we think about the <a title="&ldquo;Content Modelling: A Master Skill,&rdquo; by Rachel Lovinger on A List Apart" href="http://alistapart.com/article/content-modelling-a-master-skill">content model</a> for an Event, the pieces displayed here are <strong>Title</strong>, <strong>Date</strong>, and <strong>Location</strong>. There&rsquo;s nothing that ties an Event to this specific display. Other types of content that may exist on the site could have similar content models, like Articles: <strong>Title</strong>, <strong>Date</strong>, <strong>Description</strong>. I could easily use the same Display pattern to render an Article:</p>

                <div class="easy-clearing margin-bottom">
                    <img src="star-wars-article.png" alt="A Data pattern for an Article" />
                </div><!-- .easy-clearing -->

                <p>Interaction designer Alla Kholmatova <a title="From &ldquo;The Language of Modular Design&rdquo; on A List Apart" href="http://alistapart.com/article/language-of-modular-design">wisely observes</a>, &ldquo;If you give [a pattern] a presentational name, its future will be limited, because it will be confined by its style.&rdquo; Calling this an Event pattern might mean that I never even consider it for an Article, even though it could work just as well. Mr. Responsive Design himself Ethan Marcotte <a href="https://24ways.org/2015/putting-my-patterns-through-their-paces/" title="&ldquo;Putting My Patterns through Their Paces,&rdquo; by Ethan Marcotte on 24ways">admits from his own work</a>, &ldquo;Back in the old days&mdash;you know, like six months ago&mdash;I probably would&rsquo;ve marked this module up to match the design. In other words, I would&rsquo;ve looked at the module&rsquo;s visual hierarchy and written [very specific] <abbr>HTML</abbr>&hellip; But then I caught myself, and realized this wasn’t the best approach.&rdquo;</p>

                <p>So, how can I make a more useful pattern? Perhaps I can abstract the display from both an Event as well as an Article into a pattern that can apply to both:</p>

                <div class="easy-clearing margin-bottom">
                    <img src="star-wars-pattern.png" alt="An abstracted Display pattern that could apply to an Event or an Article" />
                </div><!-- .easy-clearing -->

                <p>With an abstract Display pattern like this, I can choose multiple kinds of Content patterns to visualize. That leads me to an interesting approach when thinking about how to think and talk about patterns for modular sites:</p>

                <ol>
                    <li>Identify the type of content (Content pattern).</li>
                    <li>Choose visual option (Display pattern) to render said content.</li>
                </ol>

                <p>What does this look like in practice?</p>

                <h2 id="example"><a class="named-anchor" href="#example">A real-world example</a></h2>

                <p>When I was working on <a href="http://beta.oreilly.com/">the new O&rsquo;Reilly site</a>, one of our team goals was to eschew traditional paper wireframes. On previous projects we&rsquo;d worked on together, wireframes were too time-consuming to make and constrained our client&rsquo;s thinking on graphic design a little too much. Over <a title="Calexico, a taco cart" href="http://calexico.net/">burritos</a> in the park, we realized that the most valuable thing about our previous wireframes was having a list of content for each page. </p>

                <p>So, when <a href="http://twitter.com/jenniferbrook">Jennifer Brook</a> sat down to map out the content strategy for the site, she whipped out a list of <a href="http://patternlab.io/about.html#organisms">Organisms</a> for each major page on the site:</p>

                <div class="easy-clearing margin-bottom">
                    <img src="oreilly-wires3.png" alt="Content modelling for the new O&rsquo;Reilly site" />
                </div><!-- .easy-clearing -->

                <p>This allowed both developer and designer (<a href="https://twitter.com/tpitre"><abbr>TJ</abbr> Pitre</a> and me respectively) to work simultaneously, assembling all the parts in our own ways and riffing off each other&rsquo;s work. Watching this process unfold revealed another important insight: <strong>when thinking about patterns, content strategists are primarily thinking about Content patterns, designers are primarily thinking about Display patterns, and front-end developers are responsible for bringing the two together.</strong> Certainly a bit of an oversimplification, but I&rsquo;ve witnessed it being true more often than not. Obvious in hindsight, but definitely easily overlooked when you&rsquo;re heads down in the middle of a project.</p>

                <?php /* ?><p>Have a look at that spreadsheet. &ldquo;Four Short Links&rdquo; is a particular content type. Jennifer was making sure that we wouldn&rsquo;t forget about that content and leaving it up to me to decide on the best display pattern for this data to be rendered across different screen sizes. That left it up to <abbr>TJ</abbr> to decide what level to abstract these in order to make them as reusable and easily understood as possible.</p><?php */ ?>

                <p>Have a look at that spreadsheet. &ldquo;Big Promo,&rdquo; &ldquo;More Upcoming,&rdquo; and &ldquo;Local Promo&rdquo; are all listed as separate organisms because they do different jobs (see the &ldquo;Features/Functions&rdquo; column), but their Content patterns are exactly the same. Jennifer was making sure that we wouldn&rsquo;t forget about that content and leaving it up to me to decide on the best display pattern for this data to be rendered across different screen sizes. <abbr>TJ</abbr> could decide how much to abstract these in code to make them as reusable and easily understood as possible.</p>

                <p>I hypothesized that we could build these Content patterns with multiple instances of just two Display patterns, so I started by designing these:</p>

            </section><!-- .wrap.vanilla -->

        </div><!-- .intro-wrap -->

        <?php /* ?>
        <div class="image-row box-row clearfix" style="background: #e9e9e9;">

            <div class="box">
                <h2 class="box-headline">Content model</h2>
                <img src="oreilly-content-model.png" alt="Content model for O&rsquo;Reilly&rsquo;s Four Short Links" />
            </div><!-- .box -->

            <div class="box">
                <h2 class="box-headline">Comp (for small screens)</h2>
                <img src="oreilly-comp.png" alt="Comp for O&rsquo;Reilly&rsquo;s Four Short Links" />
            </div><!-- .box -->

            <div class="box">
                <h2 class="box-headline">Code</h2>
                <div class="box-code">
                    <p><pre><code>
&lt;h3 class="s-title"&gt;Four Short Links&lt;/h3&gt;
&lt;span class="byline"&gt;Nat Torkington&lt;/span&gt;
&lt;ol class="block-list"&gt;
    &lt;li&gt;
        &lt;div class="block block-number"&gt;&hellip;&lt;/div&gt; 
        &lt;div class="b-text"&gt;&hellip;&lt;/div&gt; 
    &lt;/li&gt;
    &lt;li&gt;&hellip;&lt;/li&gt;
    &lt;li&gt;&hellip;&lt;/li&gt;
    &lt;li&gt;&hellip;&lt;/li&gt;
&lt;/ol&gt;
                            </code></pre></p>
                </div><!-- .box-code -->
            </div><!-- .box -->

        </div><!-- .image-row -->
        <?php */ ?>

        <div class="image-row" style="background: #e9e9e9;">
            <div class="image-row-image easy-clearing margin-bottom">
                <img src="oreilly-display-patterns.png" alt="Display patterns for the O&rsquo;Reilly site" />
            </div><!-- .easy-clearing -->
        </div><!-- .image-row -->

        <section class="wrap vanilla">

            <p><abbr>TJ</abbr> then translated both Display patterns into one block of code:</p>

            <p><pre class="code-block"><code>&lt;div class="g-item"&gt;
    &lt;div class="block block-thumb"&gt;
        &lt;div class="b-thumb"&gt;&hellip;&lt;/div&gt;
        &lt;div class="b-text"&gt;                
            &lt;h2 class="b-title"&gt;&hellip;&lt;/h2&gt;
            &lt;div class="date-city"&gt;&hellip;&lt;/div&gt;
            &lt;div class="dek"&gt;&hellip;&lt;/div&gt;
        &lt;/div&gt;&lt;!-- .b-text --&gt;
    &lt;/div&gt;&lt;!-- .block --&gt;
&lt;/div&gt;&lt;!-- .g-item --&gt;</code></pre></p>

            <p>He then created a modifier called <code>.g-item-hero</code> that turns the small Display pattern into the large one.</p>

            <p>The final page ended up looking something like this:</p>

        </section><!-- .wrap.vanilla -->

        <div class="image-row oreilly-comp-row" style="background: #2a2c2b;">
            <div class="image-row-image easy-clearing margin-bottom">
                <img src="oreilly-comp2.png" alt="Final O&rsquo;Reilly Events page" />
            </div><!-- .easy-clearing -->
        </div><!-- .image-row -->

        <section class="wrap vanilla">

            <p>In short, three sections powered by two Display patterns, written as one code block with one modifier. This is the beauty of pattern-based design.</p>

            <h2 id="dont-just-build-the-comp"><a class="named-anchor" href="#dont-just-build-the-comp">Don&rsquo;t just build the comp</a></h2>

            <p>One of the largest pitfalls in making a modular site is coding exactly to what&rsquo;s been Photoshopped. A comp is a snapshot in time, an example of elements in use, <em>not</em> canonical documentation for those elements. (That&rsquo;s exactly why <a title="&ldquo;The Post-PSD Era,&rdquo; by Dan Mall" href="http://danielmall.com/articles/the-post-psd-era/">comps may be an artifact of an older time in web design</a>.)</p>

            <p>It often falls to the developer to see through the pixels of a comped element to find the actual design pattern. <em>This is why <a href="http://atomicdesign.bradfrost.com/chapter-4/#development-is-design">development is design</a></em>. When I&rsquo;m coaching agency and product design teams, I often recommend that they move their front-end developers on to the Design team instead of the Engineering team, because I need them to act more like architects than construction workers. (I even recommend ditching &ldquo;front-end developer&rdquo; as a title and starting calling them &ldquo;designer,&rdquo; but that&rsquo;s a story for another time.) For most of my projects, I allocate way more time for writing <abbr title="HyperText Markup Language">HTML</abbr>/<abbr title="Cascading Style Sheets">CSS</abbr>/<abbr title="JavaScript">JS</abbr> than I do for in-Photoshop (or -Sketch or -whatever) time, because that&rsquo;s where the majority of the work&mdash;<a title="A Pastry Box entry by Dan Mall" href="https://the-pastry-box-project.net/dan-mall/2012-september-12">the decision making</a> &mdash;happens. In fact, a quick <a href="https://www.getharvest.com/">Harvest</a> check puts <abbr>TJ</abbr>&rsquo;s hours on the O&rsquo;Reilly project at more than double my own.</p>

            <p>On a recent redesign for a liberal arts university (more details about that project coming soon), I designed this:</p>

        </section><!-- .wrap.vanilla -->

        <div class="image-row" style="background: #252524;">
            <div class="image-row-image easy-clearing margin-bottom">
                <img src="from-degrees-to-careers.png" alt="Data pattern for &ldquo;From Degrees to Careers&rdquo;" />
            </div><!-- .easy-clearing -->
        </div><!-- .image-row -->

        <section class="wrap vanilla">

            <p>We started to build the &ldquo;From Degrees to Careers&rdquo; organism&mdash;a Content pattern&mdash;but failed to initially realize that we should have been building a &ldquo;Vertical Tabset,&rdquo; a Display pattern:</p>

        </section><!-- .wrap.vanilla -->

        <div class="image-row" style="background: #252524;">
            <div class="image-row-image easy-clearing margin-bottom">
                <img src="tab-pattern.png" alt="Display pattern for tabbing through multiple items" />
            </div><!-- .easy-clearing -->
        </div><!-- .image-row -->

        <section class="wrap vanilla">

            <p>Once we did realize it, we found that it was incredibly simple to apply a similar but different Content pattern (Events) to the &ldquo;Vertical Tabset&rdquo; Display pattern to create a new organism:</p>

        </section><!-- .wrap.vanilla -->

        <div class="image-row" style="background: #f2f5f0;">
            <div class="image-row-image easy-clearing margin-bottom">
                <img src="events.png" alt="Display pattern for Events listing" />
            </div><!-- .easy-clearing -->
        </div><!-- .image-row -->

        <section class="wrap vanilla">

            <p>I&rsquo;m finding that I have the most success when my Display patterns <em>don&rsquo;t</em> describe the content within and when my Content patterns <em>don&rsquo;t</em> suggest anything about their presentation. Not news for those who <a title="&ldquo;Designing With Web Standards&rdquo; by Jeffrey Zeldman, on Amazon" href="http://amzn.to/1JtCUGr">design with web standards</a> and <a title="&ldquo;Understanding Progressive Enhancement,&rdquo; by Aaron Gustafson on A List Apart" href="http://alistapart.com/article/understandingprogressiveenhancement">progressive enhancement</a>, but an occasional reminder doesn&rsquo;t hurt.</p>

            <p>This certainly isn&rsquo;t a new idea. Web developer Nicole Sullivan has been using the example of <a title="&ldquo;The Media Object Saves Hundreds of Lines of Code,&rdquo; by Nicole Sullivan" href="http://www.stubbornella.org/content/2010/06/25/the-media-object-saves-hundreds-of-lines-of-code/">the media object</a> for years in how it helped Facebook <a title="&ldquo;Making Facebook 2x Faster,&rdquo; by Jason Sobel" href="https://www.facebook.com/note.php?note_id=307069903919">cut their average <abbr>CSS</abbr> bytes per page by 19% and HTML bytes by 44%</a>. This distinction between Content and Display makes up the foundational principles of approaches like <a href="https://github.com/stubbornella/oocss/wiki">Object Oriented <abbr>CSS</abbr></a>.</p>

            <p>Ten projects of this type along, I feel like I&rsquo;m getting the hang of what to look for and how to design this way. For those that are a bit newer though, one of the exercises I often turn to when I&rsquo;m having trouble visualizing a content workflow is to think about how my boss, my client, or I would manage and maintain the content. I do that by <a title="A snippet of a talk by Dan Mall" href="http://www.slideshare.net/danielmall/hulkamania-design/27">designing a fake <abbr title="Content Management System">CMS</abbr></a> for the piece I&rsquo;m working on.</p>

            <p>Imagine you&rsquo;re assembling a page&mdash;<a title="&ldquo;Mobile First,&rdquo; by Luke Wroblewski" href="http://www.lukew.com/resources/mobile_first.asp">starting with small screens</a>, of course&mdash;for a site you&rsquo;re making. Following our formula from above, you could first choose from a list of existing Content patterns, because your <abbr>CMS</abbr> would already know about them. Once you&rsquo;ve chosen a Content pattern, the system would show you all the existing Display patterns in your framework. You choose a Display pattern and watch the preview update to show you what you&rsquo;re making.</p>

        </section><!-- .wrap.vanilla -->

        <div class="video-row" style="background: #ececec;">
            <div class="video-row-video easy-clearing video-container">
                <video src="fake-cms.mp4" height="600" width="850" autoplay loop></video>
            </div><!-- .easy-clearing -->
        </div><!-- .image-row -->

        <section class="wrap vanilla">

            <p>With a construct like this one, each person&rsquo;s job could break down like this. Initially:</p>

            <ul>
                <li>The content strategist&rsquo;s job would be to define the Content patterns</li>
                <li>The designer&rsquo;s job would be to create Display patterns</li>
                <li>The developer&rsquo;s job would be to create the markup for the Display patterns and create the hooks for Content patterns to flow into the Display patterns appropriately</li>
            </ul>

            <p>Once those foundational tasks are completed, the three work closely together to test and tweak the patterns to make sure they&rsquo;re working as expected. With the completed patterns, the content strategist&mdash;or, better yet, the client&mdash;can create the entire site by combining Display and Content patterns. Though I haven&rsquo;t come across a <abbr title="Graphical User Interface">GUI</abbr> that lets you modify Display and Content patterns independently like this, my most recent projects try to approximate it by having the content strategist write <abbr title="JavaScript Object Notation">JSON</abbr> simultaneously to Display patterns being created. For example, on a project I recently directed for digital studio <a href="http://happycog.com/">Happy Cog</a>, we <a title="&ldquo;Craft + Patternlab = Buzzwords!&rdquo; by Mark Huot on Cognition" href="http://cognition.happycog.com/article/craft-patternlab-buzzwords">made Craft publish <abbr>JSON</abbr></a> so that we could use PatternLab for Display patterns and Craft for Content patterns.</p>

            <p>Where this all becomes really powerful is when you can have an army of Display patterns that can work with an infinite amount of Content patterns. Though we&rsquo;re not entirely there yet, I could certainly see distinctions like these being incredibly useful in how we work on pattern-based designs.</p>

            <h2>Related reading</h2>

            <ul>
                <li><a href="http://seesparkbox.com/foundry/naming_css_stuff_is_really_hard">Naming CSS Stuff is Really Hard</a>, by Ethan Muller</li>
                <li><a href="http://amzn.to/1S26ppX">Modular Web Design: Creating Reusable Components for User Experience Design and Documentation</a>, by Nathan Curtis</li>
                <li><a href="http://alistapart.com/article/from-pages-to-patterns-an-exercise-for-everyone">From Pages to Patterns: An Exercise for Everyone</a>, by Charlotte Jackson</li>
                <li><a href="/articles/creative-cloud-libraries/">Creative Cloud Libraries</a></li>
            </ul>



            <footer class="footnote">

                <ol>

                    <li id="fn1">This dichotomy was originally described by Karen McGrane. <a class="footnote-arrow" href="#fn1-source">&#8617;</a></li>
                    
                    <li id="fn2">This article is also published on <a href="#">Medium</a>.</li>             

                    <?php /* ?><li id="fn3">Special thanks to <a href="http://karenmcgrane.com/">Karen McGrane</a>, <a href="http://dirtystylus.com/">Mark Llobrera</a>, <a href="http://ethanmarcotte.com/">Ethan Marcotte</a>, <a href="http://southleft.com/"><abbr>TJ</abbr> Pitre</a>, <a href="http://www.jasonhead.com/">Jason Head</a>, <a href="http://thefutureislikepie.com/">Lisa Maria Martin</a>, and <a href="https://bigmedium.com/">Josh Clark</a> for reviewing drafts of this article and suggesting edits to get it into top shape. I owe you each a dinner.</li><?php */ ?>

                </ol>

            </footer><!-- .footnote -->
			
	    </section><!-- .vanilla -->	  	
	    
	</div><!-- /#article-area-wrap -->	

	<?php

        echo readNext('Titles are Important', '/articles/titles-are-important//');

    ?>
	
	<div id="comments">
	
	    <?php /* ?><section id="article-meta">

	        <header class="easy-clearing">
	            <h1>{if comment_total == 0}No comments <a href="#comment-form">yet</a>&hellip;{if:else}{comment_total} Comments{/if}</h1>
	            <p>Posted in {categories backspace="2"}<a href="{path='channel/index'}">{category_name}</a>, {/categories}</p>
	        </header>
        
	    </section><!-- /#article-meta --><?php */ ?>	    	    
	    
	    <div id="comments-wrap">                
            
            <div class="main">
                
                <div id="disqus_thread"></div>
                <script>
                    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                    var disqus_shortname = 'danielmall'; // required: replace example with your forum shortname

                    // The following are highly recommended additional parameters. Remove the slashes in front to use.
                    var disqus_identifier = 'content-display-patterns';
                    var disqus_url = 'http://danielmall.com/articles/content-display-patterns/';
                    var disqus_developer = 1;

                    /* * * DON'T EDIT BELOW THIS LINE * * */
                    (function() {
                        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                        dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
                        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                    })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                <a href="http://disqus.com" class="dsq-brlink">blog comments powered by <span class="logo-disqus">Disqus</span></a>
                
            </div><!-- /.main -->
	    
	    
    	    <div class="sub">
	        
    	        <section class="article-info">
        	        <header>
        	            <h2>Article Info</h2>
        	        </header>
        	        <time datetime="2014-02-19T12:57:00">Published February 19, 2014 at 12:57 <abbr title="Post Meridian">PM</abbr></time>
    	        </section><!-- /.article-info -->
    	        
    	        
    	        <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/carbon.php"); echo "\n"; ?>
	        
	        
    	    </div><!-- /.sub -->
    	    
    	    
    	</div><!-- #comments-wrap -->
	    
	        
	</div><!-- #comments -->
	
	
	<div class="wrap">
    	
    	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>
    	
    	
    </div><!-- #wrap -->

    <script src="/-/j/libs/jquery.fitvids.js"></script>
    <script>
		$(document).ready(function(){
			// Target your .container, .wrapper, .post, etc.
			$('.video-container').fitVids();
		});
    </script>
    
	
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>
