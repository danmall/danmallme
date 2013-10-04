<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head>
    <title>&ldquo;Morsel,&rdquo; work by Dan Mall</title>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/jsReferenceHead.php"); echo "\n"; ?>
     <style>
        /*.page-title { background-image: url(morsel.png); width: 365px; height: 75px; }*/
        .page-title { font-size: 70px; }
        #project-header hgroup { top: 4px; }  

        .project-image { height: 790px; background: transparent url(morsel-hero.jpg) no-repeat center 0; margin-bottom: -50px; }
        .project-url { left: 371px; top: 43px; }

        #awards { background: transparent url(morsel-awards.png) no-repeat 0 0; height: 277px; }       
            #contagious a { width: 102px; height: 113px; top: 109px; left: 55px; }
            #fwa a { width: 137px; height: 64px; top: 131px; left: 343px; }
            #creativity a { width: 114px; height: 68px; top: 127px; left: 604px; }

        @media screen and (min-width: 800px){
            .page-title { font-size: 100px; }
        }

    </style>
</head>

<body id="work">	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>
	
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
        	        <h1 class="page-title">Morsel</h1>
        	        <h2 class="project-subtitle">Your Daily Step Toward Better Health</h2>        	    
        	    </hgroup>

        	    <ul id="project-nav" class="no-marker">
        	        <li class="prev">        	            
            	        <a href="/work/design-swap/">Design Swap</a>
        	        </li>
        	        <li class="next">            	        
            	        <a href="/work/always-beautiful/">Always Beautiful</a>              	        
        	        </li>
        	    </ul><!-- #project-nav -->
        	    
        	    <span id="facebook-like">
        	        <iframe src="http://www.facebook.com/plugins/like.php?href=http://danielmall.com//work/morsel/" scrolling="no" frameborder="0" style="border:none; height: 30px;"></iframe>
        	    </span>
        	    
    	    </div><!-- #project-header -->
    	    
    	    <a class="phark phark-link mobile-fwa" href="http://www.thefwa.com/mobile/morsel">As seen on m.fwa.com</a>
	        
	    </section><!-- #work-area -->
	    
	    <div class="project-image">
            <div class="wrap"><a class="project-url" href="http://healthymagination.com/projects/morsel/">http://healthymagination.com/projects/morsel/</a></div>
        </div>

        <section id="work-content" class="wrap">

            <section id="awards">

                <h1 class="phark">Awards &amp; Recognition</h1>

                <ul>
                    <li id="contagious"><a class="phark phark-link" href="http://www.contagiousmagazine.com/2011/03/general_electric_healthcare.php">Contagious Magazine</a></li>
                    <li id="fwa"><a class="phark phark-link" href="http://thefwa.com/mobile/morsel"><abbr title="Favourite Website Awards">FWA</abbr></a></li>
                    <li id="creativity"><a class="phark phark-link" href="http://creativity-online.com/work/general-electric-morsel-20-progress/20938">Creativity</a></li>            
                </ul>

            </section>

            <div class="main">

                <p><a href="http://healthymagination.com/projects/morsel/">Morsel</a> is a mobile app that makes healthier decisions part of everyday life. It offers simple, fun daily tasks that help individuals get healthier, one step at a time. Using simple social motivation and a few gaming mechanics, Morsel seeks to make improving your own health just a little bit easier.</p>

        <p>After the first version of the app caught on as part of the <a href="/work/healthymagination/">healthymagination</a> partnership with the 2010 Winter Olympics, we decided to give Morsel a well-needed upgrade. Adding offline capabilities, the ability to browse multiple categories of Morsels, and many different platforms for access (Facebook, mobile, web browser), Morsel hopefully makes being healthy one step easier.</p>

            </div><!-- .main -->

            <div class="sub">

                <h2>Client</h2>
                <p>General Electric</p>

                <h2>Role</h2>
                <ul>
                    <li>Art Direction</li>
                    <li>Design</li>
                    <li>Strategy</li>
                    <li>User Experience</li>
                </ul>
                
                <?php /* ?>
                <h2>Team</h2>
                <ul>
                    <li><a href="http://www.ivanaskwith.com/">Ivan Askwith</a>&mdash;Strategy</li>
                    <li><a href="http://www.christophercocca.com/">Chris Cocca</a>&mdash;Strategy, <abbr title="User Experience">UX</abbr>, and <abbr title="Information Architecture">IA</abbr></a>
                    <li><a href="http://foughtthebattle.tumblr.com/">Josh Teixeira</a>&mdash;Content Strategy</li>
                    <li><a href="http://www.danielscheibel.com/">Daniel Scheibel</a>&mdash;Technical Consulting &amp; Development</li>
                    <li>Ranae Heuer&mdash;Production &amp; Account Management</li>
                    <li><a href="http://two-bulls.com/">Two Bulls</a>&mdash;Development</li>
                </ul>
                <?php */ ?>

                <h2>Agency</h2>
                <p><a href="http://bigspaceship.com/">Big Spaceship</a></p>

                <h2>Year</h2>
                <p>2010</p>

                <h2>Links</h2>
                <p><a href="http://healthymagination.com/projects/morsel/">Morsel</a></p>

            </div><!-- .sub -->

        </section><!-- #work-content -->
	    
	    
	</div><!-- #work-area-wrap -->
	
	<div class="wrap">
    	
    	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>
    	
    	
    </div><!-- #wrap -->
    
	
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>