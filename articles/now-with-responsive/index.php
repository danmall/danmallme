<?php

    function assignTypeface(){

        $typefaces = array('cg-bantamwt','cg-feathermwt','cg-lightwt','cg-welterwt','cg-middlewt','cg-heavywt');

        $typefacesIndex = rand(0, count($typefaces)-1);

        echo $typefaces[$typefacesIndex] . ' color' . rand(1, 6) . ' jitter jitter' . rand(1, 20);

    }


?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head profile="http://gmpg.org/xfn/11">
    <title>&ldquo;Now with Responsive!,&rdquo; an article by Dan Mall</title>
    <meta name="description" content="Two years later, this site is finally responsive." />
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?>
    
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>  	
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/jsReferenceHead.php"); echo "\n"; ?>
    <link rel="stylesheet" type="text/css" href="//cloud.typography.com/83278/738882/css/fonts.css" />
    <link rel="stylesheet" href="now-with-responsive.css" />
    
    <!-- Facebook -->
    <meta property="og:title" content="Now with Responsive!" />
    <meta property="og:description"content="Two years later, this site is finally responsive."/>	
    <meta property="og:url" content="http://danielmall.com/articles/how-to-build-an-app/" />
    <meta property="og:image" content="http://danielmall.com/articles/how-to-build-an-app/how-to-build-an-app-fb.jpg" />
    
    
</head>

<body id="article" class="articles">	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>
	
	<div id="article-area-wrap">
	    
	    <section id="now-with-responsive" class="clearfix">
			
			<h1 class="article-title">
                <span class="article-title-start">Now with</span><span class="connector offscreen"> </span>
                <strong class="article-title-pizzazz">
                    <span class="cg <?php assignTypeface(); ?>">R</span><span class="cg <?php assignTypeface(); ?>">e</span><span class="cg <?php assignTypeface(); ?>">s</span><span class="cg <?php assignTypeface(); ?>">p</span><span class="cg <?php assignTypeface(); ?>">o</span><span class="cg <?php assignTypeface(); ?>">n</span><span class="cg <?php assignTypeface(); ?>">s</span><span class="cg <?php assignTypeface(); ?>">i</span><span class="cg <?php assignTypeface(); ?>">v</span><span class="cg <?php assignTypeface(); ?>">e</span><span class="cg <?php assignTypeface(); ?>">!</span>
                </strong> 
            </h1><!-- .article-title -->    

            <p>When I <a href="/articles/five/">launched this version of my site</a>, lots of people and organizations had already realized the value of <a href="http://alistapart.com/article/responsive-web-design">responsive web design</a>. Today, that number is exponentially greater. As someone lucky enough to get flown around the world to talk about and teach it, it&rsquo;s pretty embarrassing that my own site wasn&rsquo;t responsive. Until today.</p>

            <p>Two years after launching this version, it&rsquo;s finally responsive.</p>

            <p>When I thought about making this change, there was a lot that came along with it. I wanted to do things right—or righter—which meant there was a lot more things to take into consideration. Not only did I have to refactor the code (at least <abbr title="Cascading Style Sheets">CSS</abbr> and a bit of <abbr title="HyperText Markup Language">HTML</abbr>), but I wanted to start using <abbr title="Scalable Vector Graphics">SVG</abbr> where possible, ditch image replacement entirely, <abbr title="Gnu ZIP">GZIP</abbr> files, move over to a <abbr title="Content Delivery Network">CDN</abbr>, and many more acronyms. I also wanted a more intricate understanding of how these things affected performance.</p>

            <p>Here&rsquo;s what I found.</p>

            <h2 class="subheading cg cg-middlewt">Pre-Optimization</h2>

            <p>I inventoried the major sections of my site before making any changes. I opened Firefox, fired up <a href="http://getfirebug.com/">Firebug</a>, and hopped over to the &ldquo;Net&rdquo; tab. I refreshed a few times and averaged the results. (I&rsquo;m sure there&rsquo;s a better way to do this, but I&rsquo;m just a noob.)</p>

            <div class="stats-table-wrapper">
                <table class="stats-table">
                    <caption class="stats-table offscreen">Statistics for DanielMall.com before responsive optimization</caption>
                    <thead>
                        <tr>
                            <th scope="col" id="col-page">Page</th>
                            <th scope="col" id="col-requests"><abbr title="HyperText Transfer Protocol">HTTP</abbr> Requests</th>
                            <th scope="col" id="col-bandwidth">Bandwidth</th>
                            <th scope="col" id="col-load-time">Load Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" id="row-home" headers="col-page">Home</th>
                            <td headers="row-home col-requests">50</td>
                            <td headers="row-home col-bandwidth">871.5<abbr title="kilobytes">KB</abbr></td>
                            <td headers="row-home col-load-time">2.29<abbr title="seconds">s</abbr></td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-work" headers="col-page">Work</th>
                            <td headers="row-work col-requests">103</td>
                            <td headers="row-work col-bandwidth">698.7<abbr>KB</abbr></td>
                            <td headers="row-work col-load-time">2.62<abbr>s</abbr></td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-speaking" headers="col-page" class="stats-table-child-page">Speaking</th>
                            <td headers="row-speaking col-requests">67</td>
                            <td headers="row-speaking col-bandwidth">1.8<abbr>MB</abbr></td>
                            <td headers="row-speaking col-load-time">2.6<abbr>s</abbr></td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-publications" headers="col-page" class="stats-table-child-page">Publications</th>
                            <td headers="row-publications col-requests">46</td>
                            <td headers="row-publications col-bandwidth">770.4<abbr>KB</abbr></td>
                            <td headers="row-publications col-load-time">1.79<abbr>s</abbr></td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-articles" headers="col-page">Articles</th>
                            <td headers="row-articles col-requests">42</td>
                            <td headers="row-articles col-bandwidth">529<abbr>KB</abbr></td>
                            <td headers="row-articles col-load-time">1.64<abbr>s</abbr></td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-about" headers="col-page">About</th>
                            <td headers="row-about col-requests">49</td>
                            <td headers="row-about col-bandwidth">766.1<abbr>KB</abbr></td>
                            <td headers="row-about col-load-time">2<abbr>s</abbr></td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-contact" headers="col-page">Contact</th>
                            <td headers="row-contact col-requests">44</td>
                            <td headers="row-contact col-bandwidth">546<abbr>KB</abbr></td>
                            <td headers="row-contact col-load-time">1.61<abbr>s</abbr></td>
                        </tr>
                    </tbody>
                </table><!-- stats-table -->
            </div><!-- .stats-table-wrapper -->

            <p>Not a bad starting point. Last I saw, the average page weight was about 1<abbr title="Megabyte">MB</abbr>, so I consider starting under that threshold pretty good.</p>

            <h2 class="subheading cg cg-middlewt"><abbr>CSS</abbr> to Sass</h2>

            <p>The first thing I did was convert all my <abbr>CSS</abbr> to Sass (specifically <a href="http://thesassway.com/articles/sass-vs-scss-which-syntax-is-better"><abbr title="Sassy CSS">SCSS</abbr></a>). I&rsquo;ve been working a lot with preprocessors lately, mostly for variables, some light rule nesting, and nested media queries. I could have used something like <a href="http://css2sass.heroku.com/">css2sass</a>, but I really wanted to do it manually so that I could better understand what&rsquo;s happening.</p>

            <p>Here&rsquo;s what happened when I did the conversion.</p>

            <div class="stats-table-wrapper">
                <table class="stats-table">
                    <caption class="stats-table offscreen">Statistics for DanielMall.com before responsive optimization</caption>
                    <thead>
                        <tr>
                            <th scope="col" id="col-page">Page</th>
                            <th scope="col" id="col-requests"><abbr title="HyperText Transfer Protocol">HTTP</abbr> Requests</th>
                            <th scope="col" id="col-bandwidth">Bandwidth</th>
                            <th scope="col" id="col-load-time">Load Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" id="row-home" headers="col-page">Home</th>
                            <td headers="row-home col-requests">48 (<span class="down">2</span>)</td>
                            <td headers="row-home col-bandwidth">854.1<abbr>KB</abbr> (<span class="down">17.4<abbr>KB</abbr></span>)</td>
                            <td headers="row-home col-load-time">1.39<abbr>s</abbr> (<span class="down">0.9<abbr>s</abbr></span>)</td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-work" headers="col-page">Work</th>
                            <td headers="row-work col-requests">101 (<span class="down">2</span>)</td>
                            <td headers="row-work col-bandwidth">726.8<abbr>KB</abbr> (<span class="up">28.1<abbr>KB</abbr></span>)</td>
                            <td headers="row-work col-load-time">2.04<abbr>s</abbr> (<span class="down">.58<abbr>s</abbr></span>)</td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-speaking" headers="col-page" class="stats-table-child-page">Speaking</th>
                            <td headers="row-speaking col-requests">65 (<span class="down">2</span>)</td>
                            <td headers="row-speaking col-bandwidth">1.8<abbr>MB</abbr> (no change)</td>
                            <td headers="row-speaking col-load-time">1.55<abbr>s</abbr> (<span class="down">1.05<abbr>s</abbr></span>)</td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-publications" headers="col-page" class="stats-table-child-page">Publications</th>
                            <td headers="row-publications col-requests">44 (<span class="down">2</span>)</td>
                            <td headers="row-publications col-bandwidth">754.9<abbr>KB</abbr> (<span class="down">15.5<abbr>KB</abbr></span>)</td>
                            <td headers="row-publications col-load-time">1.1<abbr>s</abbr> (<span class="down">.69<abbr>s</abbr></span>)</td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-articles" headers="col-page">Articles</th>
                            <td headers="row-articles col-requests">40 (<span class="down">4</span>)</td>
                            <td headers="row-articles col-bandwidth">518.7<abbr>KB</abbr> (<span class="down">10.3<abbr>KB</abbr></span>)</td>
                            <td headers="row-articles col-load-time">1.22<abbr>s</abbr> (<span class="down">.42<abbr>s</abbr></span>)</td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-about" headers="col-page">About</th>
                            <td headers="row-about col-requests">46 (<span class="down">3</span>)</td>
                            <td headers="row-about col-bandwidth">743.9<abbr>KB</abbr> (<span class="down">22.2<abbr>KB</abbr></span>)</td>
                            <td headers="row-about col-load-time">1.64<abbr>s</abbr> (<span class="down">.36<abbr>s</abbr></span>)</td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-contact" headers="col-page">Contact</th>
                            <td headers="row-contact col-requests">42 (<span class="down">2</span>)</td>
                            <td headers="row-contact col-bandwidth">527.4<abbr>KB</abbr> (<span class="down">18.6<abbr>KB</abbr></span>)</td>
                            <td headers="row-contact col-load-time">0.975<abbr>s</abbr> (<span class="down">.635<abbr>s</abbr></span>)</td>
                        </tr>
                    </tbody>
                </table><!-- stats-table -->
            </div><!-- .stats-table-wrapper -->

            <p>I wish I could explain some of these numbers, but I just don&rsquo;t get the inspector well enough. If anyone can point me in the right direction, I&rsquo;d be ever grateful.</p>

            
	    
	    </section><!-- #now-with-responsive -->	    
	    
	</div><!-- /#article-area-wrap -->
	
    <?php

        echo readNext('Progressive Enhancement. Still alive and kickin&rsquo;.', '/articles/progressive-enhancement/');

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
                    var disqus_identifier = 'how-to-build-an-app';
                    var disqus_url = 'http://danielmall.com/articles/how-to-build-an-app/';
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
        	        <time datetime="2013-08-22T10:39:00">Published Aug 22, 2013 at 10:39 <abbr title="Ante Meridian">AM</abbr></time>
    	        </section><!-- /#article-info -->
    	        
    	        
    	        <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/carbon.php"); echo "\n"; ?>
	        
	        
    	    </div><!-- /.sub -->
    	    
    	    
    	</div><!-- #comments-wrap -->
	    
	        
	</div><!-- #comments -->
	
	
	<div class="wrap">
    	
    	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>
    	
    	
    </div><!-- #wrap -->
	    
	
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>