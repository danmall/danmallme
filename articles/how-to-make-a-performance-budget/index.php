<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head profile="http://gmpg.org/xfn/11">
    <title>&ldquo;How to Make a Performance Budget&rdquo; an article by Dan Mall</title>
    <meta name="description" content="Still Alive &amp; Kickin&rsquo;." />
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?>
    
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>	
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/jsReference.php"); echo "\n"; ?>
    <link rel="stylesheet" href="performance-budget.css" />  
    <script src="//use.typekit.net/ujr8kel.js"></script>
    <script>
        try{
            Typekit.load();
            document.write('<link rel="stylesheet" href="performance-budget-typekit.css" />');
        }catch(e){}
    </script>
    
    <!-- Facebook -->
    <meta property="og:title" content="How to Make a Performance Budget" />
    <meta property="og:description"content="A tangible way to approximate how your pages should perform"/>	
    <meta property="og:url" content="http://danielmall.com/articles/how-to-make-a-performance-budget/" />
    <meta property="og:image" content="http://danielmall.com/articles/how-to-make-a-performance-budget/home-thumb.png" />
    
    
</head>

<body id="article" class="articles">	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>
	
	<div id="article-area-wrap">
	    
	    <section id="performance-budget" class="clearfix">

            <header class="article-header">    

                <div class="inner">        

                    <h1 class="article-title">How to Make a Performance Budget</h1>

                    <p>Two weeks ago, some interesting discussions flared up around performance budgets. I can&rsquo;t help but feel somewhat responsible.</p>

                </div><!-- .inner -->

            </header><!-- .article-header -->

            <div class="inner">

                <p>It all seems to have stemmed from <a href="http://chriscoyier.net/">Chris Coyier&rsquo;s</a> <a href="https://twitter.com/chriscoyier/status/534434673372303360">tweet</a>, and I was coincidentally on stage at <a href="http://aneventapart.com/event/san-francisco-2014">An Event Apart San Francisco</a> talking about performance budgets at that very moment with Chris in the room. In response, Tim Kadlec posted <a href="http://www.timkadlec.com/2014/11/performance-budget-metrics/">Performance Budget Metrics</a>, a great categorization schema for the different ways you can measure performance. I should mention: just about everything I know about performance budgets comes from Tim, either from his writings or through the stuff I observed while working on the <a href="http://grantland.com/">Grantland</a> and <a href="/articles/radio-free-europe-open-redesign/">Radio Free Europe</a> redesigns.</p>  

                <p>Lots of people have been writing and talking about performance budgets, but I had yet to see anyone exhaustively explain <em>how</em> to make one, especially to less technically-savvy designers. So I decided to take it into my own hands. I didn&rsquo;t do a great job in the talk of giving the appropriate disclaimers&mdash;cut me some slack… it was my first time giving that talk&mdash;so I think Chris&rsquo;s concerns are legit. I&rsquo;ll attempt to correct that here. </p>

            </div><!-- .inner -->

            <div class="fullscreen-image">
                
                <img src="apollo13-earth-reference.jpg" alt="Earth as a reference, from Apollo 13" />

                <div class="caption">

                    <div class="inner">

                        <p>There&rsquo;s this amazing scene in Ron Howard&rsquo;s <cite>Apollo 13</cite> where (spoilers ahead) the crew loses power of their spacecraft. They have no way to know how they&rsquo;re oriented because their instrumentation is dead, so they use Earth as their frame of reference. As long as they keep that view of Earth in the window, they know they&rsquo;re on the right track.</p>

                    </div><!-- .inner -->

                </div><!-- .caption -->

            </div><!-- .fullscreen-image -->

            <div class="inner">

                

                <p>The main reason to create a performance budget is to have a tangible starting point for conversation around a web page or website. It shouldn&rsquo;t act as gospel, but it&rsquo;s a thing you can measure against. It&rsquo;s your frame of reference.</p>

                <p>I believe designers do their best work within constraints, and knowing those constraints <em>before</em> starting a design can be incredibly enabling. I can&rsquo;t tell you how many times I&rsquo;ve ignorantly designed &ldquo;the perfect comp&rdquo; and was then told that I blew the performance budget we never established in the first place. What I wouldn&rsquo;t give to know that, before starting a design, I could use up to 10 images and 4 webfonts. What a day that would be! Here&rsquo;s how to make that possible.</p>

                <p>In Tim&rsquo;s article, commenter Mike Petrovich wisely <a href="http://www.timkadlec.com/2014/11/performance-budget-metrics/#comment-1705069311">points out</a> a summation of Tim&rsquo;s categorization: </p>

                <blockquote class="pullquote">
                    <p>&ldquo;Milestone timing and Speed Index describe the user experience… Quantity and rule metrics describe the low-level browser experience.&rdquo;</p>
                </blockquote>

                <p>In my opinion, a good performance budget balances user experience with browser experience. Again, it&rsquo;s not an all-encompassing strategy, but it&rsquo;ll get you in the ballpark. Personally, I&rsquo;m with Tim in thinking Speed Index is the most accurate metric to shoot for, but it is pretty tough to explain. So, if I&rsquo;m searching for something a bit simper and a little more communicable, I&rsquo;ll generally start with a milestone&mdash;a fully loaded page in 5 seconds or less&mdash;and try to get some approximation of a budget (10 images/4 webfonts or 2 images/10 webfonts). But where do you get that milestone? Should you just pull it out of thin air? (Beware: your <abbr title="Chief Executive Officer">CEO</abbr> just might!) Well, I like to be a bit more methodical than that. </p>

                <p>Fire up a blank spreadsheet and <a href="http://www.webpagetest.org/">WebPagetest</a>. Pop your current site in there and let it ride. Record these three times:</p>

            </div><!-- .inner -->

            <div class="table-wrapper">

                <div class="inner">

                    <table class="performance-table">
                        <thead>
                            <tr>
                                <th scope="col">Site name</th>
                                <th scope="col">Start Render</th>
                                <th scope="col">Document Complete</th>
                                <th scope="col">Fully Loaded</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">danielmall.com</th>
                                <td>7.388s</td>
                                <td>9.321s</td>
                                <td>11.940s</td>
                            </tr>
                        </tbody>
                    </table><!-- .performance-table -->

                    <footer class="footnote">
                        <p>For the purposes of this exercise, I&rsquo;m recording all times against WebPagetest&rsquo;s Mobile 3G connection speed.</p>
                    </footer>

                </div><!-- .inner -->

            </div><!-- .table-wrapper -->

            <div class="inner">

                <p>Then, do a little benchmarking. Run 3 sites of competitors or sites you admire through Web Pages est, and highlight the fastest time of the bunch. </p>

                <p>[table with competitors]</p>

                <p>Tim [found this] great statistic that people perceive tasks as faster or slower when there&rsquo;s a least a 20% time difference. So, let&rsquo;s take our fastest times and try to beat it by 20%.</p>

                <p>[table with goals]</p>

                <p>This gives us the milestones we&rsquo;re shooting for. How does that translate to constraints to bring to a design tool? It depends on your assumed network speed. Let&rsquo;s say we want to shoot for these times over a 3G connection. About.com <a href="http://cellphones.about.com/od/surfingtheweb/p/3G_explainer.htm">tells us</a> that "a 3G network is a mobile broadband network, offering data speeds of at least 144 kilobits per second (Kbps)." But, we measure resources in terms of bytes, not bits. One byte = 8 bits, so 3G translates roughly to about 18 kilobytes per second. We can use this number to calculate some rough conversions.</p>

                <p>[table converting times to kb)</p>

                <p>Now that we have some resource weights to go with our target milestones, we can start approximating. <a href="http://www.sitepoint.com/average-page-weights-increase-32-2013/">Average resource weights in 2013</a> broke down like this:</p>

                <ul>
                <li>HTML: 57kb</li>
                <li>CSS: 46kb</li>
                <li>JS: 276kb</li>
                <li>Total: 379kb</li>
                </ul>

                <p>If we start with our most generous milestone&mdash;Fully Loaded: 147.3552&mdash;we&rsquo;re already over budget, and we haven&rsquo;t even included any images or webfonts yet! </p>

                <p>[over budget graph]</p>

                <p>But, that JS number (276kb) looks pretty large. Let&rsquo;s assume we&rsquo;re including an uncompressed version of jQuery. After reviewing our budget, we have a chat with the developer and find out she&rsquo;s dying to try out a project without jQuery and instead is going to use plain ol&rsquo; vanilla JavaScript. Our JS number drops to 29kb</p>

                <p>You&rsquo;ll notice I keep using words like "approximate" and "rough." Remember, this type of budget is just a set of guides for us to use, not a rulebook to follow dogmatically. </p>

            </div><!-- .inner -->            
	    
	    </section><!-- #performance-budget -->	            
	    
	</div><!-- /#article-area-wrap -->
	
    <?php

        echo readNext('Brooklyn Beta 2014', '/articles/brooklyn-beta-2014/');

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
                    var disqus_identifier = 'performance-budget';
                    var disqus_url = 'http://danielmall.com/articles/how-to-make-a-performance-budget/';
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
	        
    	        <section id="article-info">
        	        <header>
        	            <h2>Article Info</h2>
        	        </header>
        	        <time datetime="2013-08-30T15:38:00">Published Aug 30, 2013 at 3:39 <abbr title="Post Meridian">PM</abbr></time>
    	        </section><!-- /#article-info -->
    	        
    	        
    	        <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/carbon.php"); echo "\n"; ?>
	        
	        
    	    </div><!-- /.sub -->
    	    
    	    
    	</div><!-- #comments-wrap -->
	    
	        
	</div><!-- #comments -->
	
	
	<div class="wrap">
    	
    	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>
    	
    	
    </div><!-- #wrap -->
	

    <!-- Prism -->
    <script src="/-/j/libs/prism.js"></script>

<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>