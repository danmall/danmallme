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
    <link rel="stylesheet" href="icon-font.css" />
    <link rel="stylesheet" href="now-with-responsive.css" />
    
    <!-- Facebook -->
    <meta property="og:title" content="Now with Responsive!" />
    <meta property="og:description"content="Two years later, this site is finally responsive."/>	
    <meta property="og:url" content="http://danielmall.com/articles/now-with-responsive/" />
    <meta property="og:image" content="http://danielmall.com/articles/now-with-responsive/now-with-responsive.png" />
    
    
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

            <p>When I thought about making this change, there was a lot that came along with it. I wanted to do things right&mdash;or right<em>er</em>&mdash;which meant there was a lot more things to take into consideration. Not only did I have to refactor the code (at least <abbr title="Cascading Style Sheets">CSS</abbr> and a bit of <abbr title="HyperText Markup Language">HTML</abbr>), but I wanted to start using <abbr title="Scalable Vector Graphics">SVG</abbr> where possible, ditch image replacement entirely, <abbr title="Gnu ZIP">GZIP</abbr> files, move over to a <abbr title="Content Delivery Network">CDN</abbr>, and many more acronyms. I also wanted a more intricate understanding of how these things affected performance.</p>

            <p>Here&rsquo;s what I found.</p>


            <!-- ===== #pre-optimization ====== -->

            <h2 id="pre-optimization" class="subheading cg cg-middlewt">Pre-Optimization</h2>

            <p>I inventoried the major sections of my site before making any changes. I opened Firefox, fired up <a href="http://getfirebug.com/">Firebug</a>, and hopped over to the &ldquo;Net&rdquo; tab. I refreshed a few times and averaged the results. (I&rsquo;m sure there&rsquo;s a better way to do this, but I&rsquo;m just a noob.)</p>

            <div class="stats-table-wrapper">
                <table class="stats-table">
                    <caption class="stats-table offscreen">Statistics for DanielMall.com before responsive optimization</caption>
                    <thead>
                        <tr>
                            <th scope="col" id="col-page">Page</th>
                            <th scope="col" id="col-requests"><abbr title="HyperText Transfer Protocol">HTTP</abbr> Requests</th>
                            <th scope="col" id="col-page-weight">Page Weight</th>
                            <th scope="col" id="col-load-time">Load Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" id="row-home" headers="col-page">Home</th>
                            <td headers="row-home col-requests">50</td>
                            <td headers="row-home col-page-weight">871.5<abbr title="kilobytes">KB</abbr></td>
                            <td headers="row-home col-load-time">2.29<abbr title="seconds">s</abbr></td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-work" headers="col-page">Work</th>
                            <td headers="row-work col-requests">103</td>
                            <td headers="row-work col-page-weight">698.7<abbr>KB</abbr></td>
                            <td headers="row-work col-load-time">2.62<abbr>s</abbr></td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-speaking" headers="col-page" class="stats-table-child-page">Speaking</th>
                            <td headers="row-speaking col-requests">67</td>
                            <td headers="row-speaking col-page-weight">1.8<abbr>MB</abbr></td>
                            <td headers="row-speaking col-load-time">2.6<abbr>s</abbr></td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-publications" headers="col-page" class="stats-table-child-page">Publications</th>
                            <td headers="row-publications col-requests">46</td>
                            <td headers="row-publications col-page-weight">770.4<abbr>KB</abbr></td>
                            <td headers="row-publications col-load-time">1.79<abbr>s</abbr></td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-articles" headers="col-page">Articles</th>
                            <td headers="row-articles col-requests">42</td>
                            <td headers="row-articles col-page-weight">529<abbr>KB</abbr></td>
                            <td headers="row-articles col-load-time">1.64<abbr>s</abbr></td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-about" headers="col-page">About</th>
                            <td headers="row-about col-requests">49</td>
                            <td headers="row-about col-page-weight">766.1<abbr>KB</abbr></td>
                            <td headers="row-about col-load-time">2<abbr>s</abbr></td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-contact" headers="col-page">Contact</th>
                            <td headers="row-contact col-requests">44</td>
                            <td headers="row-contact col-page-weight">546<abbr>KB</abbr></td>
                            <td headers="row-contact col-load-time">1.61<abbr>s</abbr></td>
                        </tr>
                    </tbody>
                </table><!-- stats-table -->
            </div><!-- .stats-table-wrapper -->

            <p>Not a bad starting point. Last I saw, the average page weight was about 1<abbr title="Megabyte">MB</abbr>, so I consider starting under that threshold pretty good.</p>


            <!-- ===== #css-to-sass ====== -->

            <h2 id="css-to-sass" class="subheading cg cg-middlewt"><abbr>CSS</abbr> to Sass</h2>

            <p>The first thing I did was convert all my <abbr>CSS</abbr> to Sass (specifically <a href="http://thesassway.com/articles/sass-vs-scss-which-syntax-is-better"><abbr title="Sassy CSS">SCSS</abbr></a>). I&rsquo;ve been working a lot with preprocessors lately, mostly for variables, some light rule nesting, and nested media queries. I could have used something like <a href="http://css2sass.heroku.com/">css2sass</a>, but I really wanted to do it manually so that I could better understand what&rsquo;s happening.</p>

            <p>Here&rsquo;s what happened when I did the conversion.</p>

            <div class="stats-table-wrapper">
                <table class="stats-table">
                    <caption class="stats-table offscreen">Statistics for DanielMall.com after moving from CSS to Sass</caption>
                    <thead>
                        <tr>
                            <th scope="col" id="col-page">Page</th>
                            <th scope="col" id="col-requests"><abbr title="HyperText Transfer Protocol">HTTP</abbr> Requests</th>
                            <th scope="col" id="col-page-weight">Page Weight</th>
                            <th scope="col" id="col-load-time">Load Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" id="row-home" headers="col-page">Home</th>
                            <td headers="row-home col-requests">48 (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>2</b>)</td>
                            <td headers="row-home col-page-weight">854.1<abbr>KB</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>17.4<abbr>KB</abbr></b>)</td>
                            <td headers="row-home col-load-time">1.39<abbr>s</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>0.9<abbr>s</abbr></b>)</td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-work" headers="col-page">Work</th>
                            <td headers="row-work col-requests">101 (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>2</b>)</td>
                            <td headers="row-work col-page-weight">726.8<abbr>KB</abbr> (<b class="icon-up"><span aria-hidden="true" class="icon-arrow-up">+</span>28.1<abbr>KB</abbr></b>)</td>
                            <td headers="row-work col-load-time">2.04<abbr>s</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>0.58<abbr>s</abbr></b>)</td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-speaking" headers="col-page" class="stats-table-child-page">Speaking</th>
                            <td headers="row-speaking col-requests">65 (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>2</b>)</td>
                            <td headers="row-speaking col-page-weight">1.8<abbr>MB</abbr> (no change)</td>
                            <td headers="row-speaking col-load-time">1.55<abbr>s</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>1.05<abbr>s</abbr></b>)</td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-publications" headers="col-page" class="stats-table-child-page">Publications</th>
                            <td headers="row-publications col-requests">44 (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>2</b>)</td>
                            <td headers="row-publications col-page-weight">754.9<abbr>KB</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>15.5<abbr>KB</abbr></b>)</td>
                            <td headers="row-publications col-load-time">1.1<abbr>s</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>0.69<abbr>s</abbr></b>)</td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-articles" headers="col-page">Articles</th>
                            <td headers="row-articles col-requests">40 (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>4</b>)</td>
                            <td headers="row-articles col-page-weight">518.7<abbr>KB</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>10.3<abbr>KB</abbr></b>)</td>
                            <td headers="row-articles col-load-time">1.22<abbr>s</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>0.42<abbr>s</abbr></b>)</td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-about" headers="col-page">About</th>
                            <td headers="row-about col-requests">46 (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>3</b>)</td>
                            <td headers="row-about col-page-weight">743.9<abbr>KB</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>22.2<abbr>KB</abbr></b>)</td>
                            <td headers="row-about col-load-time">1.64<abbr>s</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>0.36<abbr>s</abbr></b>)</td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-contact" headers="col-page">Contact</th>
                            <td headers="row-contact col-requests">42 (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>2</b>)</td>
                            <td headers="row-contact col-page-weight">527.4<abbr>KB</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>18.6<abbr>KB</abbr></b>)</td>
                            <td headers="row-contact col-load-time">0.975<abbr>s</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>0.635<abbr>s</abbr></b>)</td>
                        </tr>
                    </tbody>
                </table><!-- stats-table -->
            </div><!-- .stats-table-wrapper -->

            <p>(I wish I could explain some of these numbers, but I just don&rsquo;t get the inspector well enough. If anyone can point me in the right direction, I&rsquo;d be oh so grateful.)</p>



            <!-- ===== #jsunk-in-the-trunk ====== -->

            <h2 id="jsunk-in-the-trunk" class="subheading cg cg-middlewt">J(S)unk in the trunk</h2>

            <p>Next, I moved all of the JavaScript I could out of the <code>&lt;head&gt;</code> and into the bottom the page. Google&rsquo;s Head Perfomance Engineer <a href="http://stevesouders.com/">Steve Souders</a> <a href="http://developer.yahoo.com/blogs/ydn/high-performance-sites-rule-6-move-scripts-bottom-7200.html">suggests it</a>, so who am I to argue? I also took the opportunity to consolidate a few extraneous scripts hanging around (old versions of jQuery, etc).</p>

            <div class="stats-table-wrapper">
                <table class="stats-table">
                    <caption class="stats-table offscreen">Statistics for DanielMall.com after moving JavaScript to the bottom of the page</caption>
                    <thead>
                        <tr>
                            <th scope="col" id="col-page">Page</th>
                            <th scope="col" id="col-requests"><abbr title="HyperText Transfer Protocol">HTTP</abbr> Requests</th>
                            <th scope="col" id="col-page-weight">Page Weight</th>
                            <th scope="col" id="col-load-time">Load Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" id="row-home" headers="col-page">Home</th>
                            <td headers="row-home col-requests">45 (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>3</b>)</td>
                            <td headers="row-home col-page-weight">848.1<abbr>KB</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>6<abbr>KB</abbr></b>)</td>
                            <td headers="row-home col-load-time">1.29<abbr>s</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>0.11<abbr>s</abbr></b>)</td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-work" headers="col-page">Work</th>
                            <td headers="row-work col-requests">101 (no change)</td>
                            <td headers="row-work col-page-weight">726.3<abbr>KB</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>0.5<abbr>KB</abbr></b>)</td>
                            <td headers="row-work col-load-time">1.84<abbr>s</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>0.2<abbr>s</abbr></b>)</td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-speaking" headers="col-page" class="stats-table-child-page">Speaking</th>
                            <td headers="row-speaking col-requests">65 (no change)</td>
                            <td headers="row-speaking col-page-weight">1.8<abbr>MB</abbr> (no change)</td>
                            <td headers="row-speaking col-load-time">1.55<abbr>s</abbr> (no change)</td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-publications" headers="col-page" class="stats-table-child-page">Publications</th>
                            <td headers="row-publications col-requests">44 (no change)</td>
                            <td headers="row-publications col-page-weight">754.4<abbr>KB</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>0.5<abbr>KB</abbr></b>)</td>
                            <td headers="row-publications col-load-time">1.06<abbr>s</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>.04<abbr>s</abbr></b>)</td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-articles" headers="col-page">Articles</th>
                            <td headers="row-articles col-requests">39 (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>1</b>)</td>
                            <td headers="row-articles col-page-weight">518.3<abbr>KB</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>0.4<abbr>KB</abbr></b>)</td>
                            <td headers="row-articles col-load-time">1.28<abbr>s</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>0.36<abbr>s</abbr></b>)</td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-about" headers="col-page">About</th>
                            <td headers="row-about col-requests">47 (<b class="icon-up"><span aria-hidden="true" class="icon-arrow-up">+</span>1</b>)</td>
                            <td headers="row-about col-page-weight">743.5<abbr>KB</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>0.4<abbr>KB</abbr></b>)</td>
                            <td headers="row-about col-load-time">1.24<abbr>s</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>0.4<abbr>s</abbr></b>)</td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-contact" headers="col-page">Contact</th>
                            <td headers="row-contact col-requests">42 (no change)</td>
                            <td headers="row-contact col-page-weight">524.5<abbr>KB</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>2.9<abbr>KB</abbr></b>)</td>
                            <td headers="row-contact col-load-time">0.917<abbr>s</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>0.58<abbr>s</abbr></b>)</td>
                        </tr>
                    </tbody>
                </table><!-- stats-table -->
            </div><!-- .stats-table-wrapper -->

            <p>(I wish I could explain some of these numbers, but I just don&rsquo;t get the inspector well enough. If anyone can point me in the right direction, I&rsquo;d be oh so grateful.)</p>


            <!-- ===== #webfonts ====== -->

            <h2 id="webfonts" class="subheading cg cg-middlewt">Converting wholly to webfonts</h2>

            <p>One of my favorite things about this site is the opportunity to use the beautiful typeface <a href="http://commercialtype.com/typefaces/stag/stag">Stag</a> from one of my favorite foundries, <a href="http://commercialtype.com/">Commercial Type</a>. When I launched this version of the site, Stag wasn&rsquo;t available as a webfont, but earlier this year, they <a href="http://commercialtype.com/news/updates/webfonts_from_commercial_type">announced</a> that a lot of their collection was ready for use on the web.</p>

            <p><a href="https://twitter.com/danielmall/statuses/341578892601085952">I was whatever about it.</a></p>

            <p>Here&rsquo;s what happened when I ditched image replacement almost entirely and converted wholly to webfonts.</p>

            <div class="stats-table-wrapper">
                <table class="stats-table">
                    <caption class="stats-table offscreen">Statistics for DanielMall.com after converting wholly to webfonts</caption>
                    <thead>
                        <tr>
                            <th scope="col" id="col-page">Page</th>
                            <th scope="col" id="col-requests"><abbr title="HyperText Transfer Protocol">HTTP</abbr> Requests</th>
                            <th scope="col" id="col-page-weight">Page Weight</th>
                            <th scope="col" id="col-load-time">Load Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" id="row-home" headers="col-page">Home</th>
                            <td headers="row-home col-requests">36 (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>9</b>)</td>
                            <td headers="row-home col-page-weight">834.1<abbr>KB</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>14<abbr>KB</abbr></b>)</td>
                            <td headers="row-home col-load-time">1.49<abbr>s</abbr> (<b class="icon-up"><span aria-hidden="true" class="icon-arrow-up">+</span>0.20<abbr>s</abbr></b>)</td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-work" headers="col-page">Work</th>
                            <td headers="row-work col-requests">85 (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>16</b>)</td>
                            <td headers="row-work col-page-weight">704.8<abbr>KB</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>21.5<abbr>KB</abbr></b>)</td>
                            <td headers="row-work col-load-time">1.48<abbr>s</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>0.36<abbr>s</abbr></b>)</td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-speaking" headers="col-page" class="stats-table-child-page">Speaking</th>
                            <td headers="row-speaking col-requests">54 (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>11</b>)</td>
                            <td headers="row-speaking col-page-weight">1.8<abbr>MB</abbr> (no change)</td>
                            <td headers="row-speaking col-load-time">1.22<abbr>s</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>0.33<abbr>s</abbr></b>)</td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-publications" headers="col-page" class="stats-table-child-page">Publications</th>
                            <td headers="row-publications col-requests">35 (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>9</b>)</td>
                            <td headers="row-publications col-page-weight">735.6<abbr>KB</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>18.8<abbr>KB</abbr></b>)</td>
                            <td headers="row-publications col-load-time">0.921<abbr>s</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>0.139<abbr>s</abbr></b>)</td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-articles" headers="col-page">Articles</th>
                            <td headers="row-articles col-requests">32 (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>7</b>)</td>
                            <td headers="row-articles col-page-weight">515.4<abbr>KB</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>2.9<abbr>KB</abbr></b>)</td>
                            <td headers="row-articles col-load-time">1.05<abbr>s</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>0.23<abbr>s</abbr></b>)</td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-about" headers="col-page">About</th>
                            <td headers="row-about col-requests">40 (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>7</b>)</td>
                            <td headers="row-about col-page-weight">577.9<abbr>KB</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>165.6<abbr>KB</abbr></b>)</td>
                            <td headers="row-about col-load-time">1.07<abbr>s</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>0.2<abbr>s</abbr></b>)</td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-contact" headers="col-page">Contact</th>
                            <td headers="row-contact col-requests">32 (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>10</b>)</td>
                            <td headers="row-contact col-page-weight">504<abbr>KB</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>20.5<abbr>KB</abbr></b>)</td>
                            <td headers="row-contact col-load-time">0.895<abbr>s</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>0.022<abbr>s</abbr></b>)</td>
                        </tr>
                    </tbody>
                </table><!-- stats-table -->
            </div><!-- .stats-table-wrapper -->

            <p>Interesting! Here&rsquo;s where I&rsquo;m starting to make some big gains. I&rsquo;m saving an average of 10 <abbr >HTTP</abbr> requests per page. In the case of the <a href="/about/">About</a> page, I was able to splice out a pretty large image of my photo that included a headline, which saved me 165<abbr>KB</abbr>.</p>

            <p>However, there&rsquo;s a pretty noticeable 0.2<abbr>s</abbr> addition to load time on the first page, which I&rsquo;m assuming is the first time the webfonts are downloaded. That said, I&rsquo;m also averaging a 0.2<abbr>s</abbr> savings on load time across the other pages, so I think it&rsquo;s still worth it to use webfonts</p.>


            <!-- ===== #svg-logo ====== -->

            <h2 id="svg-logo" class="subheading cg cg-middlewt"><abbr>SVG</abbr> Logo</h2>

            <p>I also wanted to move towards <a href="http://coding.smashingmagazine.com/2012/01/16/resolution-independence-with-svg/">resolution independent graphics</a>, so I replaced the logo with an <abbr>SVG</abbr> version.</p>

            <div class="stats-table-wrapper">
                <table class="stats-table">
                    <caption class="stats-table offscreen">Statistics for DanielMall.com after converting wholly to webfonts</caption>
                    <thead>
                        <tr>
                            <th scope="col" id="col-page">Page</th>
                            <th scope="col" id="col-requests"><abbr title="HyperText Transfer Protocol">HTTP</abbr> Requests</th>
                            <th scope="col" id="col-page-weight">Page Weight</th>
                            <th scope="col" id="col-load-time">Load Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" id="row-home" headers="col-page">Home</th>
                            <td headers="row-home col-requests">36 (no change)</td>
                            <td headers="row-home col-page-weight">833.2<abbr>KB</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>0.9<abbr>KB</abbr></b>)</td>
                            <td headers="row-home col-load-time">1.48<abbr>s</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>0.01<abbr>s</abbr></b>)</td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-work" headers="col-page">Work</th>
                            <td headers="row-work col-requests">85 (no change)</td>
                            <td headers="row-work col-page-weight">715.5<abbr>KB</abbr> (<b class="icon-up"><span aria-hidden="true" class="icon-arrow-up">+</span>10.7<abbr>KB</abbr></b>)</td>
                            <td headers="row-work col-load-time">1.54<abbr>s</abbr> (<b class="icon-up"><span aria-hidden="true" class="icon-arrow-up">+</span>0.66<abbr>s</abbr></b>)</td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-speaking" headers="col-page" class="stats-table-child-page">Speaking</th>
                            <td headers="row-speaking col-requests">54 (no change)</td>
                            <td headers="row-speaking col-page-weight">1.8<abbr>MB</abbr> (no change)</td>
                            <td headers="row-speaking col-load-time">1.32<abbr>s</abbr> (<b class="icon-up"><span aria-hidden="true" class="icon-arrow-up">+</span>0.1<abbr>s</abbr></b>)</td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-publications" headers="col-page" class="stats-table-child-page">Publications</th>
                            <td headers="row-publications col-requests">35 (no change)</td>
                            <td headers="row-publications col-page-weight">746.3<abbr>KB</abbr> (<b class="icon-up"><span aria-hidden="true" class="icon-arrow-up">+</span>10.7<abbr>KB</abbr></b>)</td>
                            <td headers="row-publications col-load-time">0.925<abbr>s</abbr> (<b class="icon-up"><span aria-hidden="true" class="icon-arrow-up">+</span>0.004<abbr>s</abbr></b>)</td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-articles" headers="col-page">Articles</th>
                            <td headers="row-articles col-requests">32 (no change)</td>
                            <td headers="row-articles col-page-weight">515.4<abbr>KB</abbr> (<b class="icon-up"><span aria-hidden="true" class="icon-arrow-up">+</span>10.7<abbr>KB</abbr></b>)</td>
                            <td headers="row-articles col-load-time">1.04<abbr>s</abbr> (<b class="icon-up"><span aria-hidden="true" class="icon-arrow-up">+</span>0.04<abbr>s</abbr></b>)</td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-about" headers="col-page">About</th>
                            <td headers="row-about col-requests">40 (no change)</td>
                            <td headers="row-about col-page-weight">597.9<abbr>KB</abbr> (<b class="icon-up"><span aria-hidden="true" class="icon-arrow-up">+</span>20<abbr>KB</abbr></b>)</td>
                            <td headers="row-about col-load-time">1.07<abbr>s</abbr> (<b class="icon-up"><span aria-hidden="true" class="icon-arrow-up">+</span>0.18<abbr>s</abbr></b>)</td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-contact" headers="col-page">Contact</th>
                            <td headers="row-contact col-requests">32 (no change)</td>
                            <td headers="row-contact col-page-weight">519.3<abbr>KB</abbr> (<b class="icon-up"><span aria-hidden="true" class="icon-arrow-up">+</span>15.3<abbr>KB</abbr></b>)</td>
                            <td headers="row-contact col-load-time">0.895<abbr>s</abbr> (<b class="icon-up"><span aria-hidden="true" class="icon-arrow-up">+</span>0.032<abbr>s</abbr></b>)</td>
                        </tr>
                    </tbody>
                </table><!-- stats-table -->
            </div><!-- .stats-table-wrapper -->

            <p>Another interesting discovery: while the amount of requests stays the same&mdash;which makes sense since I&rsquo;m swapping one <abbr title="Portable Network Graphics">PNG</abbr> for one <abbr>SVG</abbr>&mdash;just about every page saw a small increase in page weight and load time.</p>

            <p>I guess that&rsquo;s the price of resolution independence.</p>



            <!-- ===== #media-queries ====== -->

            <h2 id="mobile-first-rwd" class="subheading cg cg-middlewt">Mobile first, responsive web design</h2>

            <div class="pullquote-wrap">
                <blockquote class="pullquote">
                    <p>&ldquo;That&rsquo;s the thing about responsive web design: you can&rsquo;t just think of it as a sprinkle of pixie dust that can be applied to any site. It requires the right mindset. It requires that sites be built on solid foundations of best practice.&rdquo;</p>
                    <p class="pullquote-citation">&mdash;Jeremy Keith, <a href="http://adactio.com/journal/1696/">A Responsive Mind</a></p>
                </blockquote>
            </div><!-- .pullquote-wrap -->

            <p>It&rsquo;s worth pointing out that everything I&rsquo;ve done so far isn&rsquo;t part of that literal definition of a responsive site: fluid grids, flexible images, and media queries. Those are the foundations Jeremy is talking about. However, getting all those previous things in place&mdash;Sass, non-blocking JavaScript, webfonts, <abbr>SVG</abbr>&mdash;do well to augment the pillars of responsive sites.</p>

            <p>With that, I&rsquo;m ready to actually start making my site responsive.</p>

            <ol>
                <li>The easiest part is flexible images. I drop a <code>img { max-width: 100%; }</code> into my stylesheet. Done.</li>
                <li>Fluid grids. For years, I&rsquo;ve been building sites with percentage-based grids with fixed-width containers. That future-proofing came in super handy. With a few tweaks to containers&mdash;namely doing something like <code>.container { width: 95%; margin: 0 auto; max-width: 800px; }</code>&mdash;does the trick pretty easily.</li>
                <li>Media queries were the tough one for me. I originally planned to drop a few <code>max-width</code> queries on top of the existing stylesheet, it felt wrong not to follow the mobile-first approach I&rsquo;ve been building clients&rsquo;s sites with for the last few years. I commented out everything in my stylesheet and brought them back piece by piece, trying to follow a mobile-first approach as closely as I could. It also meant changing some markup to make it easier to work with. This was by far the most time consuming part, taking me about a month to do (outside of other projects, of course).</li>
            </ol>

            <p>The last piece was that I found some of my designs weren&rsquo;t easy to make responsive without a significant overhaul. For example, my &ldquo;Speaking&rdquo; page&mdash;the heaviest page of the bunch at 1.8<abbr>MB</abbr>&mdash;was a page full of image replacements&hellip; 21, to be exact. Perhaps not coincidentally, it got very few visits; for reference, it gets about 2.14% of the visits I get on my most popular post, &ldquo;<a href="/articles/progressive-enhancement/">Progressive Enhancement. Still Alive and Kickin&rsquo;</a>.&rdquo; So, I decided to remove the page from the site until I can redesign it, something I&rsquo;ve been meaning to do anyway.</p>

            <p>Same goes for my &ldquo;Publications&rdquo; page. That one is at 2.01%. Later &rsquo;gator.</p>

            <p>My case study pages like <a href="/work/crayola/">Crayola</a> and <a href="/work/star-wars/">Star Wars</a>contain pretty large images that don&rsquo;t look great on smaller screens. Plus they take a while to download. But, I like them, so they&rsquo;re staying until I think of something better to do with them. Open to suggestions.</p>

            <p>With the addition of fluid grids, flexible images, and media queries, here&rsquo;s how the site&rsquo;s looking.</p>

            <div class="stats-table-wrapper">
                <table class="stats-table">
                    <caption class="stats-table offscreen">Statistics for DanielMall.com after making the site responsive</caption>
                    <thead>
                        <tr>
                            <th scope="col" id="col-page">Page</th>
                            <th scope="col" id="col-requests"><abbr title="HyperText Transfer Protocol">HTTP</abbr> Requests</th>
                            <th scope="col" id="col-page-weight">Page Weight</th>
                            <th scope="col" id="col-load-time">Load Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" id="row-home" headers="col-page">Home</th>
                            <td headers="row-home col-requests">35 (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>1</b>)</td>
                            <td headers="row-home col-page-weight">775<abbr>KB</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>58.2<abbr>KB</abbr></b>)</td>
                            <td headers="row-home col-load-time">1.16<abbr>s</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>0.32<abbr>s</abbr></b>)</td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-work" headers="col-page">Work</th>
                            <td headers="row-work col-requests">85 (no change)</td>
                            <td headers="row-work col-page-weight">722.1<abbr>KB</abbr> (<b class="icon-up"><span aria-hidden="true" class="icon-arrow-up">+</span>6.6<abbr>KB</abbr></b>)</td>
                            <td headers="row-work col-load-time">1.41<abbr>s</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>0.13<abbr>s</abbr></b>)</td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-speaking" headers="col-page" class="stats-table-child-page">Speaking</th>
                            <td colspan="3">Killed</td>                            
                        </tr>
                        <tr>
                            <th scope="row" id="row-publications" headers="col-page" class="stats-table-child-page">Publications</th>
                            <td colspan="3">Killed</td>  
                        </tr>
                        <tr>
                            <th scope="row" id="row-articles" headers="col-page">Articles</th>
                            <td headers="row-articles col-requests">31 (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>1</b>)</td>
                            <td headers="row-articles col-page-weight">533.9<abbr>KB</abbr> (<b class="icon-up"><span aria-hidden="true" class="icon-arrow-up">+</span>18.5<abbr>KB</abbr></b>)</td>
                            <td headers="row-articles col-load-time">0.905<abbr>s</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">-</span>.135<abbr>s</abbr></b>)</td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-about" headers="col-page">About</th>
                            <td headers="row-about col-requests">40 (no change)</td>
                            <td headers="row-about col-page-weight">597.7<abbr>KB</abbr> (<b class="icon-down"><span aria-hidden="true" class="icon-arrow-down">+</span>0.2<abbr>KB</abbr></b>)</td>
                            <td headers="row-about col-load-time">1.07<abbr>s</abbr> (<b class="icon-up"><span aria-hidden="true" class="icon-arrow-up">+</span>0.18<abbr>s</abbr></b>)</td>
                        </tr>
                        <tr>
                            <th scope="row" id="row-contact" headers="col-page">Contact</th>
                            <td headers="row-contact col-requests">32 (no change)</td>
                            <td headers="row-contact col-page-weight">522.6<abbr>KB</abbr> (<b class="icon-up"><span aria-hidden="true" class="icon-arrow-up">+</span>3.3<abbr>KB</abbr></b>)</td>
                            <td headers="row-contact col-load-time">0.921<abbr>s</abbr> (<b class="icon-up"><span aria-hidden="true" class="icon-arrow-up">+</span>0.026<abbr>s</abbr></b>)</td>
                        </tr>
                    </tbody>
                </table><!-- stats-table -->
            </div><!-- .stats-table-wrapper -->



            <!-- ===== #more ====== -->

            <h2 id="more" class="subheading cg cg-middlewt">More to come</h2>

            <p>When I started, I ran the original site through <a href="http://www.webpagetest.org/">WebPagetest</a>.</p>

            <figure class="figure-image">
                <img src="wpt-before.png" alt="WebPagetest results before making any optimizations" />
            </figure><!-- .figure-image -->

            <p>Here are the results after the optimizations.</p>

            <figure class="figure-image">
                <img src="wpt-after.png" alt="WebPagetest results after optimizations" />
            </figure><!-- .figure-image -->

            <p>That&rsquo;s right: they&rsquo;re identical. (I swear they&rsquo;re not the same image.) What does that mean? It means there&rsquo;s more work to do. There&rsquo;s always more work to do. However, I feel much more confident that my site is in a better place to be able to improve it. The foundation is there now.</p>

            <p>On a related note, this is all an experiment where I&rsquo;m learning as much about my site (and the web) as I can. If you&rsquo;re interested in following along more closely, I&rsquo;ve decided to open source my whole site. It&rsquo;s now on Github here: <a href="https://github.com/danielmall/danielmallcom">https://github.com/danielmall/danielmallcom</a>. You can see everything from how I&rsquo;ve been able to maintain this site without a <abbr title="Content Management System">CMS</abbr> to all the embarrassing ways I&rsquo;m doing things.</p>

            <p>I&rsquo;ll be working on a part 2 to this post where I&rsquo;ll attempt all things I know nothing about: caching, GZIPping, and getting a CDN set up. Stay tuned!</p>            
	    
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
                    var disqus_identifier = 'now-with-responsive';
                    var disqus_url = 'http://danielmall.com/articles/now-with-responsive/';
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
        	        <time datetime="2013-10-05T15:06:56">Published Oct 5, 2013 at 3:06 <abbr title="Post Meridian">PM</abbr></time>
    	        </section><!-- /#article-info -->
    	        
    	        
    	        <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/carbon.php"); echo "\n"; ?>
	        
	        
    	    </div><!-- /.sub -->
    	    
    	    
    	</div><!-- #comments-wrap -->
	    
	        
	</div><!-- #comments -->
	
	
	<div class="wrap">
    	
    	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>
    	
    	
    </div><!-- #wrap -->
	    
	
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>