<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head profile="http://gmpg.org/xfn/11">
    <title>&ldquo;Display &amp; Datatype Patterns,&rdquo; an article by Dan Mall</title>
    <meta name="description" content="Display &amp; Datatype Patterns" />
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?>
    
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/jsReferenceHead.php"); echo "\n"; ?>    
    <link href='http://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="/articles/_vanilla/vanilla.css" />
    <link rel="stylesheet" href="display-datatype-patterns.css" />

	<!-- Facebook -->
    <meta property="og:title" content="Display &amp; Datatype Patterns" />
    <meta property="og:description" content="A primer on creative direction as compared to art direction and design&hellip; and what they all mean in a digital context."/>	
    <meta property="og:url" content="http://danielmall.com/articles/display-datatype-patterns/" />
    <meta property="og:image" content="http://danielmall.com/articles/display-datatype-patterns/home-thumb.png" />
    
</head>

<body id="article" class="articles">	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>
	
	<div id="article-area-wrap" class="display-datatype-patterns">

        <div class="intro-wrap">
			
    	    <section class="clearfix wrap vanilla">			
    			
    			<h1 class="article-header-title"><span class="top">Display &amp; Datatype Patterns</span></h1>
    			
    			<p>Most of <a href="http://superfriend.ly/">SuperFriendly</a>&rsquo;s work over the last few years has been with organizations that need specific help with crafting design systems that enable them to extend the work long after the &ldquo;vendor&rdquo; has handed off initial work. It&rsquo;s not uncommon to receive initial inquiries containing sentences like these: </p>

                <blockquote>

                    <p>We are looking for a partner to help us evolve the design language that will guide future <abbr title="User Interface">UI</abbr> design of our internal-facing web applications</p>

                    <p>We&rsquo;re looking for help in re-writing our visual style in a way that makes it extremely modular. We&rsquo;re not interested in abandoning our original design but want users to see this as an evolution.</p>

                    <p>We&rsquo;re aiming for a core design system that&rsquo;s consistent across our whole family of sites, with variations in color, branding, and swappable modules/widgets (galleries, content buckets, etc.).</p>

                </blockquote>

                <p>Littered throughout these emails are words like &ldquo;style guide,&rdquo; &ldquo;atomic design,&rdquo; &ldquo;modular,&rdquo; &ldquo;responsive design,&rdquo; &ldquo;patterns,&rdquo; &ldquo;frameworks,&rdquo; and the like. The common theme seems to be a tipping point in either managing multiple sites independently and longing for the efficiency of a shared system across them, or feeling stuck by traditional &ldquo;templates&rdquo; not being modular enough to repurpose elements for different configurations.</p>

                <p>During the <a href="http://danielmall.com/articles/techcrunch-responsive-redesign/">TechCrunch</a> and <a href="http://danielmall.com/articles/responsive-mobile-entertainment-weekly/">Entertainment Weekly</a> redesigns, our goal of building an infinitely scalable, modular design system was the perfect excuse for <a href="http://bradfrost.com/">Brad</a> to exercise some ideas he had about this very topic. Those exercises eventually led to his <a href="http://bradfrost.com/blog/post/atomic-web-design/">atomic design</a> methodology and to the tool that eventually became <a href="http://patternlab.io/">Pattern Lab</a>. I&rsquo;ve done ten projects with Pattern Lab now&mdash;it&rsquo;s certainly the closest thing to my default tool of choice&mdash;and a handful of projects with more custom, hand-rolled approaches. Perhaps the most important lesson in building modular systems I&rsquo;ve learned is this:</p>

                <p><strong>Display patterns are different than Datatype patterns.</strong> </p>

                <p>Embracing that idea is the key to making your patterns infinitely more scalable. </p>

                <p>Let&rsquo;s look at a common example. When constructing a page, I&rsquo;ll often hear a team member say something like, &ldquo;We can use the Event pattern here.&rdquo; What does that actually mean? Perhaps the most obvious place to start is from a previously designed comp that looks like this:</p>

                <div class="easy-clearing margin-bottom">
                    <img src="star-wars-event.png" alt="" />
                </div><!-- .easy-clearing -->

                <p>A simple way to mark that up&mdash;using <abbr title="Block, Element, Modifier"><a href="https://css-tricks.com/bem-101/">BEM</a></abbr> methodology&mdash;could look like this (for simplicity, I&rsquo;ve omitted useful markup like micro formats):</p>

                <p>
                    <pre>
                        <code>
    &lt;div class="event"&gt;
        &lt;h1 class="event__title"&gt;Star Wars: The Force Awakens Premiere&lt;/h1&gt;
        &lt;p class="event__date"&gt;Dec 20, 2015&lt;/p&gt;
        &lt;p class="event__location"&gt;Ritz East, Philadelphia PA&lt;/p&gt;
    &lt;/div&gt;
                        </code>
                    </pre>
                </p>

                <p>While there&rsquo;s nothing technically incorrect about this markup, it may not be abstract enough for reuse. As we think about the <a href="http://alistapart.com/article/content-modelling-a-master-skill">content model</a> for an Event, the pieces displayed here are <strong>Title</strong>, <strong>Date</strong>, and <strong>Location</strong>. There&rsquo;s nothing that ties this specific content model to this specific display. Other types of content that may exist on the site could have similar content models, like Articles: <strong>Title</strong>, <strong>Date</strong>, <strong>Description</strong>. I could easily use the same Display to visualize an Article:</p>

                <div class="easy-clearing margin-bottom">
                    <img src="star-wars-article.png" alt="" />
                </div><!-- .easy-clearing -->

                <p>Interaction designer Alla Kholmatova <a href="http://alistapart.com/article/language-of-modular-design">wisely observes</a>, &ldquo;If you give [a pattern] a presentational name, its future will be limited, because it will be confined by its style.&rdquo; We certainly see this in practice here, as it would be odd to mark up the previous examples as <code>&lt;div class="event"&gt;&hellip;&lt;/div&gt;</code>. Perhaps I can abstract the display from both an Event as well as an Article into a pattern that applies to each:</p>

                <p>[display-pattern.png]</p>

                <p>That leads me to an interesting approach when thinking about how to think and talk about patterns for modular sites:</p>

                <ol>
                    <li>Identify the type of data.</li>
                    <li>Choose visual option to display said data.</li>
                </ol>

                <p>What does this look like in practice?</p>

                <p>When I was working on <a href="http://beta.oreilly.com/">the new O&rsquo;Reilly site</a>, one of our team goals was to eschew traditional paper wireframes. On previous projects we&rsquo;d worked on together, wireframes were too time-consuming to make and constrained our client&rsquo;s thinking on graphic design a little too much. Over <a href="http://calexico.net/">burritos</a> in the park, we realized that the most valuable thing about our previous wireframes was having a list of content for each page. </p>

                <p>So, when <a href="http://twitter.com/jenniferbrook">Jennifer Brook</a> sat down to map out the content strategy for the site, she whipped out a list of Organisms for each major page on the site:</p>

                <div class="easy-clearing margin-bottom">
                    <img src="oreilly-wires.png" alt="" />
                </div><!-- .easy-clearing -->

                <p>This allowed both developer and designer (<a href="https://twitter.com/tpitre">TJ Pitre</a> and me respectively) to work simultaneously, assembling all the parts in our own ways and riffing off each other&rsquo;s work. Watching this process unfold while being part of it revealed another important insight: <strong>when thinking about patterns, content strategists are primarily thinking about the Data, designers are primarily thinking about the Display, and front-end developers are responsible for bringing the two together.</strong> Certainly a bit of an oversimplification, but I&rsquo;ve witnessed it being true more often than not. </p>

                <p>Have a look at that spreadsheet. &ldquo;Four Short Links&rdquo; is a particular content type. Jennifer was making sure that we wouldn&rsquo;t forget about that content and leaving it up to me to decide on the best display pattern for this data to be rendered across different screen sizes. That left it up to TJ to decide what level to abstract these in order to make them as reusable and easily understood as possible.</p>

                <p>[diagrams]</p>

                <p>One of the largest pitfalls in making a modular site is coding exactly to the comp. A comp is a snapshot in time, an example of elements in use, <em>not</em> canonical documentation for those elements. (That&rsquo;s exactly why <a href="http://danielmall.com/articles/the-post-psd-era/">comps may be an artifact of an older time in web design</a>.)</p>

                <p>It often falls to the developer to see through the pixels of a comped element to find the actual design pattern. This is why <a href="http://atomicdesign.bradfrost.com/chapter-4/#development-is-design">development is design</a>. When I&rsquo;m coaching agency and product design teams, I often recommend that they move their front-end developers on to the Design team instead of the Engineering team, because I need them to act more like architects than construction workers. (I even recommend ditching &ldquo;front-end developer&rdquo; as a title and starting calling them &ldquo;designer,&rdquo; but that&rsquo;s a story for another time.) For most of my projects, I allocate way more time for writing <abbr title="HyperText Markup Language">HTML</abbr>/<abbr title="Cascading Style Sheets">CSS</abbr>/<abbr title="JavaScript">JS</abbr> than I do for in-Photoshop (or -Sketch or -whatever) time, because that&rsquo;s where the majority of the work&mdash;<a href="https://the-pastry-box-project.net/dan-mall/2012-september-12">the decision making</a> &mdash;happens. In fact, a quick <a href="https://www.getharvest.com/">Harvest</a> check puts TJ&rsquo;s hours on the O&rsquo;Reilly project at more than double my own.</p>

                <p>On a recent redesign for a liberal arts university (more info on that coming soon), I designed this:</p>

            </section><!-- .wrap.vanilla -->

        </div><!-- .intro-wrap -->

        <div class="image-row" style="background: #252524;">
            <div class="image-row-image easy-clearing margin-bottom">
                <img src="from-degrees-to-careers.png" alt="" />
            </div><!-- .easy-clearing -->
        </div><!-- .image-row -->

        <section class="wrap vanilla">

            <p>We started to build the &ldquo;From Degrees to Careers&rdquo; organism&mdash;a Data pattern&mdash;but failed to initially realize that we should have been building this Display pattern:</p>

        </section><!-- .wrap.vanilla -->

        <div class="image-row" style="background: #252524;">
            <div class="image-row-image easy-clearing margin-bottom">
                <img src="tab-pattern.png" alt="" />
            </div><!-- .easy-clearing -->
        </div><!-- .image-row -->

        <section class="wrap vanilla">

            <p>Once we did realize it, we found that it was incredibly simple to apply a different but similar Data pattern to create an events listing:</p>

        </section><!-- .wrap.vanilla -->

        <div class="image-row" style="background: #f2f5f0;">
            <div class="image-row-image easy-clearing margin-bottom">
                <img src="events.png" alt="" />
            </div><!-- .easy-clearing -->
        </div><!-- .image-row -->

        <section class="wrap vanilla">
            <p>I&rsquo;m finding that I have the most success when my Display patterns <em>don&rsquo;t</em> describe the content within and when my Data patterns <em>don&rsquo;t</em> suggest anything about their presentation. Not news for those who <a href="http://amzn.to/1JtCUGr">design with web standards</a> and <a href="http://alistapart.com/article/understandingprogressiveenhancement">progressive enhancement</a>, but an occasional reminder doesn&rsquo;t hurt. </p>

            <p>Ten projects of this type along, I feel like I&rsquo;m getting the hang of what to look for and how to design this way. For those that are a bit newer though, one of the exercises I often turn to when I&rsquo;m having trouble visualizing a content workflow is to think about how my boss, my client, or I would manage and maintain the content. I do that by <a href="http://www.slideshare.net/danielmall/hulkamania-design/27">designing a fake CMS</a> for the piece I&rsquo;m working on.</p>

            <p>Imagine you&rsquo;re assembling a page&mdash;<a href="http://www.lukew.com/resources/mobile_first.asp">starting with small screens</a>, of course&mdash;for a site you&rsquo;re making. Following our formula from above, you could first choose from a list of existing Datatypes/content models, because your CMS would already know about them. Once you&rsquo;ve chosen a Datatype, the system would show you all the existing Display patterns in your framework. You choose a Display pattern and watch the preview update to show you what you&rsquo;re making.</p>

            <p>With a construct like this one, each person&rsquo;s job could break down like this. Initially:</p>

            <ul>
                <li>The content strategist&rsquo;s job would be to define the Datatypes</li>
                <li>The designers&rsquo;s job would be to create Display patterns</li>
                <li>The developer&rsquo;s job would be to create the markup for the Display patterns and create the hooks for Datatypes to flow into the Display patterns appropriately</li>
            </ul>

            <p>Once those foundational tasks are completed, the three work closely together to test and tweak the patterns to make sure they&rsquo;re working as expected. With the completed patterns, the content strategist can create the entire site by combining Display patterns with Data. Though I haven&rsquo;t come across a system like this, my most recent projects try to approximate it by having the content strategist write <abbr title="JavaScript Object Notation">JSON</abbr> simultaneously to Display patterns being created.</p>

            <p>[Canon example? Link to Mark&rsquo;s Cognition post]</p>

            <p>Where this all becomes really powerful is when you can have an army of Display patterns that can work with an infinite amount of Datatypes. Though we&rsquo;re not there yet, I could certainly see a workflow like this one in the near future of how we work on pattern-based designs.</p>

            <h2>Related reading</h2>

            <ul>
            <li><a href="http://seesparkbox.com/foundry/naming_css_stuff_is_really_hard">Naming CSS Stuff is Really Hard</a>, by Ethan Muller</li>
            <li><a href="http://amzn.to/1S26ppX">Modular Web Design: Creating Reusable Components for User Experience Design and Documentation</a>, by Nathan Curtis</li>
            <li><a href="http://alistapart.com/article/from-pages-to-patterns-an-exercise-for-everyone">From Pages to Patterns: An Exercise for Everyone</a>, by Charlotte Jackson</li>
            </ul>



            <footer class="footnote">
                <p>Also published on <a href="https://medium.com/@danielmall/switch-928f791e2591">Medium</a>.</p>
            </footer><!-- .footnote -->
			
	    </section><!-- .vanilla -->	  	
	    
	</div><!-- /#article-area-wrap -->	

	<?php

        echo readNext('How to Get the Work You Want', '/articles/how-to-get-the-work-you-want/');

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
                    var disqus_identifier = 'on-creative-direction';
                    var disqus_url = 'http://danielmall.com/articles/on-creative-direction/';
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

    <script src="jquery.fitvids.js"></script>
    <script>
		$(document).ready(function(){
			// Target your .container, .wrapper, .post, etc.
			$('.video-container').fitVids();
		});
    </script>
    
	
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>
