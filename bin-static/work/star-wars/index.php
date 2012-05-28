<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/doctype.php"); echo "\n"; ?>
<head>
    <title>&ldquo;Star Wars,&rdquo; work by Dan Mall</title>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/meta.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/cssReference.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/jsReference.php"); echo "\n"; ?>
    <style>
	
		#work-area-wrap { background: black; margin-top: -30px; padding-top: 30px; }
	
        .page-title { background-image: url(star-wars2.png); width: 521px; height: 84px; background-color: black; }		
		#project-header hgroup { top: 4px; }  
		#project-nav { background-image: url(project-nav.png); opacity: 1; }
        #project-nav .prev, #project-nav .next { background-image: url(project-nav.png); }
		
		#work .breadcrumbs { background: #666 url(breadcrumbs-mask.png) no-repeat 0 0; }
	            #work #breadcrumbs-home a, #work #breadcrumbs-work a  { background-image: url(breadcrumbs-mask.png); }		

        .project-image { height: 2126px; background: transparent url(star-wars-hero2.jpg) no-repeat center 0; margin-bottom: 0; }
        .project-url { left: -116px; top: 62px; }
		
		#work-content { background-color: #fff; }
		
        #awards { background: transparent url(starwars-awards.png) no-repeat 0 0; height: 319px; }
            #commarts a { width: 222px; height: 70px; top: 145px; left: 137px; }
            #styleboost a { width: 142px; height: 83px; top: 142px; left: 4477px; }
		
                
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
        	        <h1 class="page-title phark">Star Wars</h1>
        	        <h2 class="project-subtitle">Creating a universe for a universe</h2>        	    
        	    </hgroup>

        	    <ul id="project-nav" class="no-marker">
        	        <li class="prev">        	            
            	        <a href="/work/barbie/">Barbie</a>
        	        </li>
        	        <li class="next">            	        
            	        <a href="/work/activate/">Activate</a>            	        
        	        </li>
        	    </ul><!-- #project-nav -->
        	    
        	    <span id="facebook-like">
        	        <iframe src="http://www.facebook.com/plugins/like.php?href=http://danielmall.com/work/star-wars/&colorscheme=dark" scrolling="no" frameborder="0" style="border:none; height: 30px;" data-colorscheme="dark"></iframe>
        	    </span>
        	    
    	    </div><!-- #project-header -->
	        
	    </section><!-- #work-area -->
	    
	    <div class="project-image">
            <div class="wrap"><a class="project-url" href="http://starwars.com/">http://starwars.com/</a></div>
        </div>

        <section id="work-content">

            <div class="wrap">
				
	            <section id="awards">

	                <h1 class="phark">Awards &amp; Recognition</h1>

	                <ul>
						<li id="commarts"><a class="phark phark-link" href="http://www.commarts.com/web-sites/starwars-com.html">Communication Arts</a></li>
	                    <li id="styleboost"><a class="phark phark-link" href="http://styleboost.com/links/1601/">Styleboost</a></li>	                    
	                </ul>

	            </section>
				

                <div class="main">
                    
                    <p>Traditionally, and throughout the making and release of Episodes I, II and III, StarWars.com has been built around news and a text-heavy design.  With a new content strategy led by <a href="http://bigspaceship.com/">Big Spaceship</a> in collaboration with Lucasfilm&rsquo;s Online division, the site has been completely overhauled to add more epic visuals, more accessibility and more content, allowing fans of all ages to explore, play, watch and connect as they navigate the site.  At the center of the digital experience is a growing Encyclopedia of Star Wars lore&mdash;the characters, locations and other details of the movies and television shows&mdash;redesigned to be more visual and interactive.  In addition, popular videos, images and online games are now presented in higher quality and more locations throughout the site.</p>

                    <section id="bibliography">

                        <h1>See more</h1>

                        <p><a href="http://www.bigspaceship.com/projects/starwars-com/">Star Wars,</a> a case study by Big Spaceship</p>

                    </section><!-- #bibliography -->

                </div><!-- .main -->

                <div class="sub">

                    <h2>Client</h2>
                    <p>Lucasfilm</p>

                    <h2>Role</h2>
                    <ul>
						<li>Art Direction</li>
                        <li>Design</li>
                    </ul>
                    
                    <?php /* ?>
                    <h2>Team</h2>
                    <ul>
                        <li><a href="http://lifeislottery.com/">Jarrod Riddle</a>&mdash;Art Direction, Design</li>
                        <li><a href="http://danielscheibel.com/">Daniel Scheibel</a>&mdash;Front-End Development</li>
                        <li>Shannon Heuer&mdash;Production</li>
                        <li><a href="http://nookajones.com/">Nooka Jones</a>&mdash;Production</li>
                        <li><a href="http://mattkenefick.com/">Matt Kenefick</a>&mdash;Development</li>
                        <li><a href="http://www.chrispetrillo.com/">Ayaka Ito</a>&mdash;Design</li>
                        <li><a href="http://www.chrispetrillo.com/">Chris Petrillo</a>&mdash;Design</li>
                    </ul>
                    <?php */ ?>

                    <h2>Year</h2>
                    <p>2011</p>

                    <h2>Agency</h2>
                    <p><a href="http://bigspaceship.com/">Big Spaceship</a></p>

                    <h2>Live Site</h2>
                    <p><a href="http://starwars.com/">Star Wars</a></p>

                </div><!-- .sub -->

            </div><!-- .wrap -->

        </section><!-- #work-content -->
	    
	    
	</div><!-- #work-area-wrap -->
	
	<div class="wrap">
    	
    	<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/footer.php"); echo "\n"; ?>
    	
    	
    </div><!-- #wrap -->
    
	
<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/close.php"); echo "\n"; ?>