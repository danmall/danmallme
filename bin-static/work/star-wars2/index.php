<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/doctype.php"); echo "\n"; ?>
<head>
    <title>&ldquo;Star Wars,&rdquo; work by Dan Mall</title>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/meta.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/cssReference.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/jsReference.php"); echo "\n"; ?>
    <style>
        .page-title { background-image: url(star-wars.png); width: 515px; height: 84px; }
        #project-header hgroup { top: 4px; }  

        .project-image { height: 2126px; background: transparent url(star-wars-hero.jpg) no-repeat center 0; margin-bottom: 0; }
        .project-url { left: -36px; top: 34px; }
                
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
        	        <?php /* ?><li class="prev">        	            
            	        <a href="/work/morsel">Morsel</a>
        	        </li><?php */ ?>
        	        <li class="next">            	        
            	        <a href="/work/activate/">Activate</a>            	        
        	        </li>
        	    </ul><!-- #project-nav -->
        	    
        	    <span id="facebook-like">
        	        <iframe src="http://www.facebook.com/plugins/like.php?href=http://danielmall.com/work/star-wars/" scrolling="no" frameborder="0" style="border:none; height: 30px;"></iframe>
        	    </span>
        	    
    	    </div><!-- #project-header -->
	        
	    </section><!-- #work-area -->
	    
	    <div class="project-image">
            <div class="wrap"><a class="project-url" href="http://activatedrinks.com/">http://activatedrinks.com/</a></div>
        </div>

        <section id="work-content">

            <div class="wrap">

                <div class="main">
                    
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                    <section id="bibliography">

                        <h1>See more</h1>

                        <p><a href="http://www.bigspaceship.com/portfolio/star-wars/">Star Wars,</a> a case study by Big Spaceship</p>

                    </section><!-- #bibliography -->

                </div><!-- .main -->

                <div class="sub">

                    <h2>Client</h2>
                    <p>Lucasfilm</p>

                    <h2>Role</h2>
                    <ul>
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