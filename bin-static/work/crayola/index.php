<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head>
    <title>&ldquo;Crayola,&rdquo; work by Dan Mall</title>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/jsReferenceHead.php"); echo "\n"; ?>
	<script src="jquery.sexyCycle.js"></script>
	<link href="sexyCycle.css" rel="stylesheet" media="screen, projection" />
    <style>
        .page-title { background-image: url(crayola.png); width: 398px; height: 92px; }
        #project-header hgroup { top: 12px; }  

        .project-image { height: 1551px; background: transparent url(crayola-hero.jpg) no-repeat 50% 0; margin-bottom: 0; }
        .project-url { left: 146px; top: 34px; }
		
		#work-content { border-top: none; background: none; }
		
			.confined { width: 800px; margin: 0 auto; border-top: 1px dotted #7f7f7f; padding: 2em 0; }
			
			.combo { margin-bottom: 2em; }
				.combo h1 { width: 320px; height: 100px; float: left; }
				.combo p { font-size: 15px; margin-left: 320px; color: #777; }				
			
			#lead { margin-bottom: 3em; }
				#lead p { font-size: 22px; }
			
			#components img { float: none; margin-left: 0; margin-right: 0; }
				#box0:hover { cursor: url(sexycycle-cursor.png), auto; }
			#components h1 { background-image: url(components.png); }
			
			#ia-ux { padding-bottom: 1150px; background: transparent url(ia.jpg) no-repeat 50% bottom; }
				#ia-ux h1 { background-image: url(ia-ux.png); }
				
			#telling-stories { border-top: 1px dotted #7f7f7f; padding: 2em 0 930px; position: relative; margin-bottom: -50px; background: transparent url(tagging-hierarchy.jpg) no-repeat 50% bottom; }
				#telling-stories h1 { background-image: url(telling-stories.png); width: 800px; margin: 20px auto 0; background-position: 50% 0; height: 124px; }			
				#telling-stories p { font-size: 15px; width: 800px; margin: 0 auto; }
			
			#responsive { /*border-top: 1px dotted #7f7f7f; */padding: 2em 0 650px; position: relative; margin-bottom: -50px; }
				#responsive h1 { background-image: url(responsive.png); width: 800px; margin: 1em auto 0; background-position: 50% 0; height: 65px; }
				#responsive .combo { width: 800px; margin: 0 auto; }
					#responsive .combo p { /*width: 560px;*/ margin: 0; }
				#responsive #tag { border-top: 1px solid #ddd; position: relative; top: 456px; }
					#responsive #tag span { text-align: center; display: block; position: relative; top: -23px; line-height: 1.4; font: normal 20px "urbana-1","urbana-2"; }
						#responsive #tag b { display: block; font-weight: normal; }
						#responsive #tag i { background: #fff; font-style: normal; padding-top: 5px; color: #ccc; }
							#responsive #tag i { padding: 0 0 5px; }
				#responsive #phone { background-image: url(responsive-phone.png); width: 132px; height: 328px; position: absolute; left: 0; bottom: 0; }
				#responsive #desktop { background-image: url(responsive-desktop.png); width: 363px; height: 672px; position: absolute; right: 0; bottom: 0; }
			
				@media screen and (max-width: 1000px) {
					#responsive #tag span { left: -80px; }
				}
			
			#doodads { position: relative; padding-bottom: 280px; border-top: none;}
				#doodads h1 { background-image: url(doodads.png); }
				#doodads p { position: relative; z-index: 2; }
				#doodads img { position: absolute; bottom: 20px; left: -40px; z-index: 1; }
			
			#i3 { background: transparent url(i3-widget.png) no-repeat 50% 90%; padding-bottom: 140px; }
				#i3 h1 { background-image: url(i3.png); }			
				#i3 #i3-roles { background-image: url(roles.png); width: 341px; height: 242px; position: absolute; left: 160px; top: 137px; opacity: 0; z-index: 10; transition: all 0.25s linear; -moz-transition: all 0.25s linear; -webkit-transition: all 0.25s linear; -o-transition: all 0.25s linear; }
				#i3 #i3-activities { background-image: url(activities.png); width: 431px; height: 418px; position: absolute; left: 367px; top: 77px; opacity: 0; z-index: 10; transition: all 0.25s linear; -moz-transition: all 0.25s linear; -webkit-transition: all 0.25s linear; -o-transition: all 0.25s linear; }
				#i3 #i3-roles:hover,  #i3 #i3-activities:hover { opacity: 1; }
				@-webkit-keyframes PULSE {
					0%   { opacity: 1; -webkit-transform: scale(0); }
					100% { opacity: 0.5; -webkit-transform: scale(1); }
					100% { opacity: 0; -webkit-transform: scale(2); }
				}
				.tip { 
					-webkit-transform-origin: 50% 50%;
					width: 22px; height: 22px; border-radius: 22px; background: black; position: absolute; 
					-webkit-animation: PULSE 1s infinite;
					   -moz-animation: PULSE 1s infinite;
						-ms-animation: PULSE 1s infinite;
				}
				#tip1 { left: 379px; top: 238px; }
				#tip2 { left: 718px; top: 240px; }
				
			#oops { background: transparent url(oops.png) no-repeat 50% bottom; padding: 60px 0 540px; text-align: center; position: relative; }
				#oops .project-url { left: 110px; top: 190px; }
                
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
        	        <h1 class="page-title phark">Crayola</h1>
        	        <h2 class="project-subtitle">Free the &ldquo;What If&rdquo;</h2>        	    
        	    </hgroup>

        	    <ul id="project-nav" class="no-marker">
        	        <?php /* ?><li class="prev">        	            
            	        <a href="/work/morsel">Morsel</a>
        	        </li><?php */ ?>
        	        <li class="next">            	        
            	        <a href="/work/barbie/">Barbie</a>            	        
        	        </li>
        	    </ul><!-- #project-nav -->
        	    
        	    <span id="facebook-like">
        	        <iframe src="http://www.facebook.com/plugins/like.php?href=http://danielmall.com/work/crayola/" scrolling="no" frameborder="0" style="border:none; height: 30px;"></iframe>
        	    </span>
        	    
    	    </div><!-- #project-header -->
	        
	    </section><!-- #work-area -->
	    
	    <div class="project-image">
            <div class="wrap"><a class="project-url" href="http://crayola.com/">http://crayola.com/</a></div>
        </div>

        <section id="work-content">

            <section id="lead" class="confined">
				
				<p>The Crayola redesign was one of the most ambitious and rewarding projects I&rsquo;ve ever worked on at <a href="http://bigspaceship.com/">Big Spaceship</a>&mdash;or anywhere else for that matter. The digital team at Crayola was incredibly stimluating and only settled for our best work—the type of challenge I enjoy. I&rsquo;m so proud of the team and what we accomplished for Crayola and their users.</p>
				
				<p>Here are few of my favorite highlights from the process.</p>
				
			</section><!-- #lead -->
			
			<section id="components" class="confined">
				
				<div class="combo clearfix">

					<h1 class="phark">Components</h1>				
					
					<p>With thousands and thousands of pages on the Crayola site, it wasn&rsquo;t efficient to wireframe every single page and state. We created a system of components that could be assembled in different configurations to accommodate the unique content needed for each type of page. Paper prototyping to the rescue!</p>
					
				</div><!-- .combo -->
				
				<div class="sexyCycle" id="box0">
					<div class="sexyCycle-wrap">	
						<ul class="sexyCycle-content">
								<li><img width="800" height="450" src="cutting.jpg" alt="" /></li>
								<li><img width="800" height="450" src="pieces.jpg" alt="" /></li>
								<li><img width="800" height="450" src="print.jpg" alt="" /></li>
								<li><img width="800" height="450" src="surrounding.jpg" alt="" /></li>
								<li><img width="800" height="450" src="table.jpg" alt="" /></li>
								<li><img width="800" height="450" src="assembled.jpg" alt="" /></li>								
						</ul>
					</div>
				</div>
				
				
				<script>
					$("#box0").sexyCycle({
						speed: 500,
						interval: 5000
					});
				</script>
				
			</section><!-- #components -->
			
			<section id="ia-ux">
				
				<div class="combo confined clearfix">
				
					<h1 class="phark">IA &amp; UX</h1>
				
					<p>Wrangling the amount of content on the site was no trivial pursuit. We created highly detailed information architecture and user experience documentation that served as our bible for the project. If anything ever got hazy along the way, our trusty <abbr title="User Experience">UX</abbr> binder held the answers to put us back on track.</p>
					
				</div><!-- .combo -->
				
			</section><!-- #ia-ux -->
			
			<section id="telling-stories">
				
				<h1 class="phark">Telling Stories</h1>
				
				<p>Tagging structures are complex beasts. After many a wireframe and phone calls, I just wasn&rsquo;t doing a great job explaining how a relational taxonomy should work across the site. We went back to the drawing to simplify the way we were explaining the concept and came up with a simple storybook format. The name of our lovely tale was, &ldquo;Once Upon a Tagging Hierarchy.&rdquo; It forced us to simplify the things we were trying to say, everybody finally understood what we were talking about, and we all walked off happily into the sunset. </p>
				
			</section><!-- #telling-stories -->
			
			<section id="responsive">
				
				<div class="combo confined">
					
					<h1 class="phark">A wonderfully responsive design</h1>

					<p>Although we initially scoped a separate &ldquo;mobile phase,&rdquo; we quickly switched gears and opted for a responsive design after an inventory of all of our content. It was important that most of the content remain intact across devices and screen sizes, so responsive design was a great approach for the new site. On top of the layout adjustments, we built in a few capability-specific enhancements, like collapsing elements on smaller devices and prev/next buttons for carousels on touch devices. Keen!</p>
				
				</div><!-- .combo -->
				
				<div id="tag">
					<span><i>Looks great from</i> <b><i>here to there</i></b></span>
				</div><!-- #tag -->
				
				<small id="phone" class="phark"></small>
				<big id="desktop" class="phark"></big>
				
			</section><!-- #responsive -->
			
			<section id="doodads" class="confined">				
				
				<div class="combo">
					
					<h1 class="phark">Doodads</h1>
				
					<p>What better way to show how great Crayola&rsquo;s products and ideas are than to show what real kids have made with them? Each page features a randomized assortment of authentic kids&rsquo; drawings&mdash;affectionately called &ldquo;doodads&rdquo;&mdash;for your very own viewing pleasure.</p>
					
					<img src="doodads.jpg" alt="Drawings by real kids on the Crayola site" />
					
				</div><!-- .combo -->
				
			</section><!-- #doodads -->

			<section id="i3">
				
				<div class="combo confined" style="position: relative;">
				
					<h1 class="phark">Ideas in an Instant</h1>
				
					<p>Because of Crayola&rsquo;s commitment to being a great resource for parents and educators, one of my favorite content ideas for the site was Ideas in an Instant. Users can quickly select from a list of a few choices to get immediate inspiration for what to do with their kids from anywhere on the site.</p>
					
					<div id="tip1" class="tip"></div>
					<div id="tip2" class="tip"></div>
					
					<div id="i3-roles"></div>					
					<div id="i3-activities"></div>
					
				</div><!-- .combo -->
				
			</section><!-- #i3 -->
			
			<section id="oops" class="confined">
				
				<p>And of course, perhaps my favorite part of the site.</p>
				
				<a class="project-url" href="http://crayola.com/404/">http://crayola.com/404/</a>
				
			</section><!-- #oops -->
			

        </section><!-- #work-content -->
	    
	    
	</div><!-- #work-area-wrap -->
	
	<div class="wrap">
    	
    	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>
    	
    	
    </div><!-- #wrap -->
    
	
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>