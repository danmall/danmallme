<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/doctype.php"); echo "\n"; ?>
<head>
    <title>&ldquo;Maryland Institute College of Art,&rdquo; work by Dan Mall</title>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/meta.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/cssReference.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/jsReference.php"); echo "\n"; ?>
    <style>
        .page-title { background-image: url(mica.png); width: 381px; height: 96px; }

        .project-image { height: 478px; background: transparent url(mica-hero.jpg) no-repeat center 0; margin-bottom: 0; }
        .project-url { left: 177px; top: 19px; font-size: 9px; }

        #work-content { background-position: 50% 0; min-width: 800px; }
            #work-content .wrap { padding-top: 396px; position: relative; }

        #work-area-wrap #pullquote { background: #fff url(mica-quote.png) no-repeat 0 0; height: 396px; position: relative; left: -6px; width: 807px; position: absolute; top: 0; }

    </style>
</head>

<body id="work">	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"); echo "\n"; ?>
	
	<div id="work-area-wrap">
	    
	    <section id="work-area" class="wrap800">
	        
	        <nav class="breadcrumbs">	            
	            <ul>
	                <li id="breadcrumbs-home"><a href="/">Home</a></li>
	                <li id="breadcrumbs-work"><a href="/work/">Work</a></li>
	            </ul>
	        </nav><!-- .breadcrumbs -->
	        
	        <div id="project-header">
    	        <hgroup>
        	        <h1 class="page-title phark">Maryland Institute College of Art</h1>
        	        <h2 class="project-subtitle">An art school that shows art on its website. Imagine that!</h2>    	    
        	    </hgroup>

        	    <ul id="project-nav" class="no-marker">
        	        <li class="prev">        	            
            	        <a href="/work/four24/">Four24</a>
        	        </li>
        	        <li class="next">            	        
            	        <a href="/work/jetwaders/">JetWaders</a>            	        
        	        </li>
        	    </ul><!-- #project-nav -->
        	    
        	    <span id="facebook-like">
        	        <iframe src="http://www.facebook.com/plugins/like.php?href=http://danielmall.com//work/mica/" scrolling="no" frameborder="0" style="border:none; height: 30px;"></iframe>
        	    </span>
        	    
    	    </div><!-- #project-header -->
	        
	    </section><!-- #work-area -->
	    
	    <div class="project-image">
            <div class="wrap"><a class="project-url" href="http://mica.edu/">http://mica.edu/</a></div>
        </div>

        <section id="work-content">

            <div class="wrap">

                <blockquote id="pullquote" class="phark">
                    <p>Working with Dan on the MICA website was a transformative experience for me. Dan opened my mind to solving front-end design challenges from a framework of design values as opposed to solving them by relying on expertise in a particular technology (<abbr title="eXtensible HyperText Markup Language">XHTML</abbr>, <abbr title="Cascading Style Sheets">CSS</abbr>, Flash, etc.). The dangers of stagnating in any of those waters is that you aren’t addressing the real problem, which is how the design supports and enhances the experience. At the end of the day, amazing things are possible with web standards, but those amazing things are created and discovered from a place of design thinking and creativity, and not inside a WC3 validator. Dan embodies this philosophy.</p>
                    <p><cite>Kevin Hoffman, Director of Web and Electronic Communications, MICA</cite></p>
                </blockquote>

                <div class="main">

                    <p>To date, the <a href="http://mica.edu/">Maryland Institue College of Art</a> redesign has been one of my favorite projects ever. Here&rsquo;s a look at some of the intricacies behind this new site.</p>

                    <p>The initial concept behind this design is driven by leading with the artwork the school produces. More than the just a large element on the home page, the artwork does more than just take up a significant amount space; it acts as a filter that starts to permeate the site-wide experience. Choosing a piece from the home page changes the tone through the colors of just about everything on the site, from links to background colors. This choice followed you as you navigate to the sub-pages. Think of it as a subtle user-driven art-direction.</p>

                    <p>Technically, this proved more challenging than you would think. For qualities like link and background colors, <a href="http://www.alistapart.com/articles/bodyswitchers">on-the-fly color switching</a> is a piece of cake. Throw <a href="http://www.mikeindustries.com/blog/sifr/"><abbr title="scalable Inman Flash replacement">sIFR</abbr></a> into the mix, dynamically generated colors chosen by administrators of <a href="http://www.ingeniux.com/">an <abbr title="eXtensible Markup Language">XML</abbr>-based content management system</a>, and the ability to do this not 1 but 4 times, and it&rsquo;s a different ball game.</p>

                    <p>To accomplish this, there are 4 custom stylesheets on top of the base stylesheet, all loaded into the page. JavaScript runs through and disables the 3 that aren&rsquo;t shown. As a user chooses a piece of artwork, JavaScript then disables the current custom stylesheet and enables the appropriate one, and the correct styles are shown. That&rsquo;s the first piece of the puzzle.</p>

                    <p>But what about elements that have been replaced on the client-side like headlines? Because those elements are now Flash, they would need to re-render in order for the color change to take effect. This is deceivingly easy too. In <a href="http://wiki.novemberborn.net/sifr3/How+to+use"><abbr>sIFR3</abbr></a>, there&rsquo;s a largely undocumented method named <code>changeCSS()</code>. Run that method, and all the magic that needs to happen just happens. I won&rsquo;t spoil it any more for you; if you&rsquo;re super-curious, feel free to look through <a href="http://www.mica.edu/prebuilt/javascript/functions.js">the JavaScript file</a>.</p>

                    <p>There&rsquo;s one last component that proved a bit tricky. Have a look at this image:</p>

                    <img src="mica-background.jpg" alt="MICA site build intricacies" />

                    <p>Notice anything particular? That&rsquo;s right; the background behind the logo is slightly transparent, allowing you to see through to the artwork behind it. That&rsquo;s a cinch; we&rsquo;ll cut the logo as a semi-transparent <abbr title="Portable Networks Graphic">PNG</abbr> file, and be done with it.</p>

                    <p>We can do that with the borders surrounding the logo too. Or can we? Remember, these colors have to change on the fly, sometimes as often as several times a day. That means an administrator would have to manually cut a new <abbr>PNG</abbr> file every time the artwork updates. From a production and workflow standpoint, that&rsquo;s a huge hurdle. (Not to mention the fact that color matching a <abbr>PNG</abbr> file to fade into a solid color is an art form in itself.)</p>

                    <p>To make life easy for site administrators&mdash;I can&rsquo;t stress enough how much I resisted the urge to say &ldquo;webmasters&rdquo;—you&rsquo;ll see that the borders are actually an inconspicuous Flash file. This file accepts a hex value and programatically draws the border with the correct transparency in the right spots. Because you can create Flash files with transparent backgrounds, some simple <abbr>CSS</abbr> positioning achieves the effect we&rsquo;re looking for.</p>

                    <p>Hope you enjoyed this insiders&rsquo; look!</p>

                    <section id="bibliography">

                        <h1>Read more</h1>

                        <ul>
                            <li><a href="http://happycog.com/create/mica/">Maryland Institute College of Art Website Redesign,</a> a Happy Cog case study</li>
                            <li><a href="http://heathershaw.com/mica.php">Maryland Institute College of Art,</a> by Heather Shaw
                        </ul>

                    </section><!-- #bibliography -->

                </div><!-- .main -->

                <div class="sub">

                    <h2>Client</h2>
                    <p>Maryland Institute College of Art</p>

                    <h2>Role</h2>
                    <ul>
                        <li>Front-End Development</li>
                        <li>Flash Development</li>
                    </ul>

                    <h2>Team</h2>
                    <ul>                
                        <li><a href="http://heathershaw.com/">Heather Shaw</a>&mdash;Art Direction, Design</li>
                        <li><a href="http://jasonsantamaria.com/">Jason Santa Maria</a>&mdash;Design</li>
                        <li><a href="http://markhuot.com/">Mark Huot</a>&mdash;Development</li>
                    </ul>

                    <h2>Year</h2>
                    <p>2009</p>        

                    <h2>Agency</h2>
                    <p><a href="http://happycog.com/">Happy Cog</a></p>   

                    <h2>Live Site</h2>
                    <p><a href="http://mica.edu/">Maryland Institute College of Art</a></p>

                </div><!-- .sub -->

            </div><!-- .wrap -->

        </section><!-- #work-content -->	    
	    
	</div><!-- #work-area-wrap -->
	
	<div class="wrap">
    	
    	<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/footer.php"); echo "\n"; ?>
    	
    	
    </div><!-- #wrap -->
    
	
<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/close.php"); echo "\n"; ?>y6