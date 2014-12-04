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

                    <h1 class="article-title">H<span class="vowel vowel-o">o</span>w t<span class="vowel vowel-o">o</span> M<span class="vowel vowel-a">a</span>k<span class="vowel vowel-e">e</span> <span class="vowel vowel-a">a</span> P<span class="vowel vowel-e">e</span>rf<span class="vowel vowel-o">o</span>rm<span class="vowel vowel-a">a</span>nc<span class="vowel vowel-e">e</span> B<span class="vowel vowel-u">u</span>dg<span class="vowel vowel-e">e</span>t</h1>

                    <p>Two weeks ago, some interesting discussions flared up around performance budgets. I can&rsquo;t help but feel somewhat responsible.</p>

                </div><!-- .inner -->

            </header><!-- .article-header -->

            <div class="inner">

                <div class="drop drop-i"></div>

                <p>It all seems to have stemmed from <a href="http://chriscoyier.net/">Chris Coyier&rsquo;s</a> <a href="https://twitter.com/chriscoyier/status/534434673372303360">tweet</a>, and I was coincidentally on stage at <a href="http://aneventapart.com/event/san-francisco-2014">An Event Apart San Francisco</a> talking about performance budgets at that very moment with Chris in the room. In response, Tim Kadlec posted <a href="http://www.timkadlec.com/2014/11/performance-budget-metrics/">Performance Budget Metrics</a>, a great categorization schema for the different ways you can measure performance. I should mention: just about everything I know about performance budgets comes from Tim, either from his writings or through the stuff I observed while we worked on the <a href="http://grantland.com/">Grantland</a> and <a href="/articles/radio-free-europe-open-redesign/">Radio Free Europe</a> redesigns together.</p>  

                <p>Lots of people have been writing and talking about performance budgets, but I had yet to see anyone exhaustively explain <em>how</em> to make one, especially to less technically-savvy designers (like me). So I decided to take it into my own hands. I didn&rsquo;t do a great job of giving the appropriate disclaimers in the talk&mdash;cut me some slack&hellip; it was my first time giving that talk&mdash;so I think Chris&rsquo;s concerns are legit. I&rsquo;ll attempt to correct that here. </p>

            </div><!-- .inner -->

            <div class="fullscreen-image">
                
                <img src="apollo13-earth-reference.jpg" alt="Earth as a reference, from Apollo 13" />

                <div class="caption">

                    <div class="inner">

                        <p>There&rsquo;s an amazing scene in Ron Howard&rsquo;s <cite>Apollo 13</cite> where (spoilers ahead) the crew loses power of their spacecraft. They have no way to know how they&rsquo;re oriented because their instrumentation is dead, so they use Earth as their frame of reference. As long as they keep that view of Earth in the window, they know they&rsquo;re on the right track.</p>

                    </div><!-- .inner -->

                </div><!-- .caption -->

            </div><!-- .fullscreen-image -->

            <div class="inner">

                <div class="drop drop-t"></div>

                <p>The main reason to create a performance budget is to have a tangible starting point for conversation around a web page or website. It shouldn&rsquo;t act as gospel, but it&rsquo;s a thing you can measure against. It&rsquo;s your frame of reference.</p>

                <p>I believe designers do their best work within constraints, and knowing those constraints <em>before</em> starting a design can be incredibly enabling. I can&rsquo;t tell you how many times I&rsquo;ve ignorantly designed &ldquo;the perfect comp&rdquo; and was then told that I blew the performance budget we never established in the first place. What I wouldn&rsquo;t give to know that I could use up to 10 images and 4 webfonts <em>before</em> starting a design! What a day that would be! Here&rsquo;s how to make that possible.</p>

                <p>In Tim&rsquo;s article, commenter Mike Petrovich wisely <a href="http://www.timkadlec.com/2014/11/performance-budget-metrics/#comment-1705069311">points out</a> a summation of Tim&rsquo;s categorization: </p>

                <blockquote class="pullquote">
                    <p>&ldquo;Milestone timing and Speed Index describe the user experience… Quantity and rule metrics describe the low-level browser experience.&rdquo;</p>
                </blockquote>

                <p>In my opinion, a good performance budget balances user experience with browser experience. Again, it&rsquo;s not an all-encompassing strategy, but it&rsquo;ll get you in the ballpark. I know there are better ways, but none of them give me something to act on in Photoshop. Personally, I&rsquo;m with Tim in thinking Speed Index is the most accurate metric to shoot for, but it is pretty tough to explain.</p>

                <p>So, if I&rsquo;m searching for something a bit simpler and a little more communicable, I&rsquo;ll generally start with a milestone&mdash;a fully loaded page in 5 seconds or less&mdash;and try to get some approximation of a budget (10 images/4 webfonts or 2 images/10 webfonts). But where do you get that milestone? Should you just pull it out of thin air? (Beware: your <abbr title="Chief Executive Officer">CEO</abbr> just might!) Well, I like to be a bit more methodical than that. </p>

                <div class="clearfix">

                    <div class="drop drop-p"></div>

                    <p class="drop-p-after">Pop open a blank spreadsheet and <a href="http://www.webpagetest.org/">WebPagetest</a>. Pop your current site in there and let it ride. Record these three times: Start Render, Document Complete, and Fully Loaded.</p>

                </div><!-- .clearfix -->

            </div><!-- .inner -->

            <div class="table-wrapper">

                <div class="inner">

                    <table class="performance-table" summary="Inventorying DanielMall.com&rsquo;s load times">
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
                                <th scope="row"><a href="http://danielmall.com/">danielmall.com</a></th>
                                <td>7.388s</td>
                                <td>9.321s</td>
                                <td>11.940s</td>
                            </tr>
                        </tbody>
                    </table><!-- .performance-table -->

                    <footer class="footnote">
                        <p>For the purposes of this exercise, I&rsquo;m recording all times against WebPagetest&rsquo;s Mobile 3G connection speed (768 Kbps).</p>
                    </footer>

                </div><!-- .inner -->

            </div><!-- .table-wrapper -->

            <div class="inner">

                <p>Then, do a little benchmarking. Run 3 competitors&rsquo; sites or sites you admire through WebPagetest, and highlight the fastest site of the bunch. </p>

            </div><!-- .inner -->

            <div class="table-wrapper">

                <div class="inner">

                    <table class="performance-table" summary="Inventorying DanielMall.com&rsquo;s load time against competitors">
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
                                <th scope="row"><a href="http://danielmall.com/">danielmall.com</a></th>
                                <td>7.388s</td>
                                <td>9.321s</td>
                                <td>11.940s</td>
                            </tr>
                            <tr>
                                <th class="special" scope="row"><a href="http://timkadlec.com">timkadlec.com</a></th>
                                <td class="special">1.492s</td>
                                <td class="special">3.150s</td>
                                <td class="special">3.527s</td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="http://superfriend.ly/">superfriend.ly</a></th>
                                <td>5.290s</td>
                                <td>7.769s</td>
                                <td>9.882s</td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="http://time.com/">time.com</a></th>
                                <td>4.891s</td>
                                <td>28.394s</td>
                                <td>29.980s</td>
                            </tr>
                        </tbody>
                    </table><!-- .performance-table -->

                    <footer class="footnote">
                        <p>Tim blows away the competition, as expected.</p>
                    </footer>

                </div><!-- .inner -->

            </div><!-- .table-wrapper -->

            <div class="inner">

                <p>Tim <a href="http://timkadlec.com/2013/01/setting-a-performance-budget/">found this great statistic</a> that people perceive tasks as faster or slower when there&rsquo;s a least a 20% time difference. So, let&rsquo;s take our fastest times and try to beat them by 20%.</p>

            </div><!-- .inner -->

            <div class="table-wrapper">

                <div class="inner">

                    <table class="performance-table" summary="Target load times">
                        <thead>
                            <tr>
                                <th>&nbsp;</th>
                                <th scope="col">Current Time</th>
                                <th scope="col">Target time (20% faster)</th>                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Start Render</th>
                                <td>1.492s</td>
                                <td class="special">1.194s</td>
                            </tr>
                            <tr>
                                <th scope="row">Document Complete</th>
                                <td>3.150s</td>
                                <td class="special">2.52s</td>
                            </tr>
                            <tr>
                                <th scope="row">Fully Loaded</th>
                                <td>3.527s</td>
                                <td class="special">2.822s</td>
                            </tr>                           
                        </tbody>
                    </table><!-- .performance-table -->

                </div><!-- .inner -->

            </div><!-- .table-wrapper -->

            <div class="inner">            

                <?php /* ?>
                <p>This gives us the milestones we&rsquo;re shooting for. How does that translate to constraints to bring into a design tool? It depends on your assumed network speed. Let&rsquo;s say we want to shoot for these times over a 3G connection. About.com <a href="http://cellphones.about.com/od/surfingtheweb/p/3G_explainer.htm">tells us</a> that &ldquo;a 3G network is a mobile broadband network, offering data speeds of at least 144 kilobits per second (Kbps).&rdquo; But, we measure resources in terms of bytes, not bits. One byte = 8 bits, so 3G translates roughly to about 18 kilobytes per second. We can use this number to calculate some rough conversions.</p>
                <?php */ ?>

                <p>This gives us the milestones we&rsquo;re shooting for. How does that translate to constraints to bring into a design tool? It depends on your assumed network speed. Since we&rsquo;re using WebPagetest&rsquo;s Mobile 3G connection speed, that assumes a transfer speed of <strong>768 kilobits per second</strong>. But, we measure resources in terms of bytes, not bits. One byte = 8 bits, so 3G translates roughly to about <strong>96 kilobytes per second</strong>. We can use this number to calculate some rough conversions.</p>

            </div><!-- .inner -->

            <div class="table-wrapper">

                <div class="inner">

                    <table class="performance-table" summary="Kilobyte Weights">
                        <thead>
                            <tr>
                                <th>&nbsp;</th>
                                <th scope="col">Target Time</th>
                                <th scope="col">Kilobyte Weight</th>                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Start Render</th>
                                <td>1.194s</td>
                                <td class="special">114kb</td>
                            </tr>
                            <tr>
                                <th scope="row">Document Complete</th>
                                <td>2.52s</td>
                                <td class="special">242kb</td>
                            </tr>
                            <tr>
                                <th scope="row">Fully Loaded</th>
                                <td>2.822s</td>
                                <td class="special">271kb</td>
                            </tr>                           
                        </tbody>
                    </table><!-- .performance-table -->

                </div><!-- .inner -->

            </div><!-- .table-wrapper -->

            <div class="inner">

                <?php /* ?>
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

                <?php */ ?>

                <p>If we split that 114kb evenly among the things we need to load&mdash;<abbr title="HyperText Markup Language">HTML</abbr>, <abbr title="Cascading Style Sheets">CSS</abbr>, JavaScript, Images, and Webfonts&mdash;we might get a distribution that looks like this:</p>

            </div><!-- .inner -->

            <div class="table-wrapper">

                <div class="inner">

                    <table class="bar-graph-table even-distribution" summary="Even distribution of resource loading">
                        <thead>
                            <tr class="hide">
                                <th scope="col">Type</th>
                                <th scope="col">Weight</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="html">
                                <td>HTML</td>
                                <td>22.8kb</td>
                            </tr>
                            <tr class="css">
                                <td>CSS</td>
                                <td>22.8kb</td>
                            </tr>
                            <tr class="js">
                                <td>JavaScript</td>
                                <td>22.8kb</td>
                            </tr>
                            <tr class="images">
                                <td>Images</td>
                                <td>22.8kb</td>
                            </tr>
                            <tr class="webfonts">
                                <td>Webfonts</td>
                                <td>22.8kb</td>
                            </tr> 
                            <tr class="total">
                                <th scope="row">Total</td>
                                <td>114kb</td>
                            </tr>                           
                        </tbody>
                    </table><!-- .performance-table -->

                </div><!-- .inner -->

            </div><!-- .table-wrapper -->

            <div class="inner">

                <p>While that makes for a nice, even split, it&rsquo;s not entirely realistic. While it&rsquo;s possible to get a 22.8k webfont, many that I&rsquo;ve used are a lot heavier. This may make a good case for us to say that we&rsquo;ll forego webfonts for the Start Render milestone. (The ability to practice this kind of reasoning is exactly why having a literal budget in front of you is important.) We can take that 22.8kb that would have gone to webfonts and instead reallocate it to something like images. That gives us this kind of distribution:</p>

            </div><!-- .inner -->

            <div class="table-wrapper">

                <div class="inner">

                    <table class="bar-graph-table even-distribution image-heavy-distribution" summary="Distribution of resource loading that favors images">
                        <thead>
                            <tr class="hide">
                                <th scope="col">Type</th>
                                <th scope="col">Weight</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="html">
                                <td>HTML</td>
                                <td>22.8kb</td>
                            </tr>
                            <tr class="css">
                                <td>CSS</td>
                                <td>22.8kb</td>
                            </tr>
                            <tr class="js">
                                <td>JavaScript</td>
                                <td>22.8kb</td>
                            </tr>
                            <tr class="images">
                                <td>Images</td>
                                <td>45.6kb</td>
                            </tr>
                            <tr class="total">
                                <th scope="row">Total</td>
                                <td>114kb</td>
                            </tr>                           
                        </tbody>
                    </table><!-- .performance-table -->

                </div><!-- .inner -->

            </div><!-- .table-wrapper -->

            <div class="inner">

                <p>Or, we might be able to get away with not needing any JavaScript or images for that first render and instead want a beautiful typographic experience, so we could allocate it this way:</p>

            </div><!-- .inner -->

            <div class="table-wrapper">

                <div class="inner">

                    <table class="bar-graph-table even-distribution webfonts-heavy-distribution" summary="Distribution of resource loading that favors webfonts">
                        <thead>
                            <tr class="hide">
                                <th scope="col">Type</th>
                                <th scope="col">Weight</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="html">
                                <td>HTML</td>
                                <td>22.8kb</td>
                            </tr>
                            <tr class="css">
                                <td>CSS</td>
                                <td>22.8kb</td>
                            </tr>
                            <tr class="webfonts">
                                <td>Webfonts</td>
                                <td>68.4kb</td>
                            </tr>
                            <tr class="total">
                                <th scope="row">Total</td>
                                <td>114kb</td>
                            </tr>                           
                        </tbody>
                    </table><!-- .performance-table -->

                </div><!-- .inner -->

            </div><!-- .table-wrapper -->

            <div class="inner">

                <p><a href="http://en.wikipedia.org/wiki/Budget">Wikipedia&rsquo;s definition of the word <cite>budget</cite></a> is perfect:</p>

                <blockquote class="pullquote pullquote-wikipedia">
                    <p>&ldquo;A quantitative expression of a plan for a defined period of time.&rdquo;</p>
                </blockquote>

                <div class="drop drop-f"></div>

                <p>For a designer, having a quantitative expression of a plan that suggests a Start Render experience of 2 images (~45.6k) or 2 webfonts (~68.4k) and knowing that you can still nail a 1.194s time is incredibly empowering. It gives you some flexibility to negotiate with yourself, your developers, your bosses, and your customers about performance.</p>

                <p>You&rsquo;ll notice I keep using words like &ldquo;approximate&rdquo; and &ldquo;rough.&rdquo; Keep in mind: this budget plans for a best case scenario, but <a href="http://trentwalton.com/2014/03/10/device-agnostic/" title="&ldquo;Device Agnostic,&rdquo; by Trent Walton">the web is often an environment of harsh conditions</a>. Lots can go awry, so make sure to <a href="http://alistapart.com/article/planning-for-performance">plan for performance</a> <a href="http://www.abookapart.com/products/responsible-responsive-design" title="Responsible Responsive Design, by Scott Jehl">responsibly</a>. This type of budget is just a set of guides for us to use, not a rulebook to follow dogmatically. There are a lot of people writing smart things and better ways to create fast websites, but I think having a tangible approximation of what resources you can work with is a good start.</p>

                <p>And, here&rsquo;s <a href="https://docs.google.com/spreadsheets/d/1ifac_Z-P9IgjzVZIWPV2qdugtwJ3HA9dkhvKmPUXBLo/edit#gid=0">a Google Sheet template</a> that you can copy and edit, if you roll like that.</p>

                <p>Happy performance budgeting!</p>
                
                <footer class="footnote">
                    <p>Special thanks to <a href="http://twitter.com/emilyjanemall">Emily Mall</a> and <a href="http://twitter.com/tkadlec">Tim Kadlec</a> for reviewing this article.</p>
                </footer>

            </div><!-- .inner -->            

            <section class="people">

                <div class="inner">

                    <p>If you&rsquo;re interested in performance, here are some people and organizations you should be following:</p>

                    <div class="person">
                        <a href="http://twitter.com/tkadlec">
                            <img src="person/tim-kadlec.jpg" alt="" />
                            Tim Kadlec
                            <span class="twitter-username">@tkadlec</span>
                        </a>
                    </div><!-- .person -->

                    <div class="person">
                        <a href="http://twitter.com/paul_irish">
                            <img src="person/paul-irish.jpg" alt="" />
                            Paul Irish
                            <span class="twitter-username">@paul_irish</span>
                        </a>
                    </div><!-- .person -->

                    <div class="person">
                        <a href="http://twitter.com/yeseniaa">
                            <img src="person/yesenia-perez-cruz.jpg" alt="" />
                            Yesenia Perez-Cruz
                            <span class="twitter-username">@yeseniaa</span>
                        </a>
                    </div><!-- .person -->

                    <div class="person">
                        <a href="http://twitter.com/scottjehl">
                            <img src="person/scott-jehl.jpg" alt="" />
                            Scott Jehl
                            <span class="twitter-username">@scottjehl</span>
                        </a>
                    </div><!-- .person -->

                    <div class="person">
                        <a href="http://twitter.com/katiekovalcin">
                            <img src="person/katie-kovalcin.jpg" alt="" />
                            Katie Kovalcin
                            <span class="twitter-username">@katiekovalcin</span>
                        </a>
                    </div><!-- .person -->

                    <div class="person">
                        <a href="http://twitter.com/igrigorik">
                            <img src="person/ilya-grigorik.jpg" alt="" />
                            Ilya Grigorik
                            <span class="twitter-username">@igrigorik</span>
                        </a>
                    </div><!-- .person -->

                    <div class="person">
                        <a href="http://twitter.com/velocityconf">
                            <img src="person/oreilly-velocity.png" alt="" />
                            O&rsquo;Reilly&rsquo;s Velocity
                            <span class="twitter-username">@velocityconf</span>
                        </a>
                    </div><!-- .person -->

                    <div class="person">
                        <a href="http://twitter.com/filamentgroup">
                            <img src="person/filament-group.jpg" alt="" />
                            Filament Group
                            <span class="twitter-username">@filamentgroup</span>
                        </a>
                    </div><!-- .person -->

                </div><!-- .inner -->            

            </section><!-- .people -->

	    
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
        	        <time datetime="2014-12-04T06:00:00">Published Dec 04, 2014 at 6:00 <abbr title="Ante Meridian">AM</abbr></time>
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