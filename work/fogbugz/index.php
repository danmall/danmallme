<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head>
    <title>&ldquo;Fogbugz,&rdquo; work by Dan Mall</title>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/jsReferenceHead.php"); echo "\n"; ?>
    <style>

        /*.page-title { background-image: url(fogbugz.png); width: 454px; height: 99px; }*/
        .page-title { font-size: 60px; }
        .page-title .char2 { margin-left: -7px }
        .page-title .char3 { margin-left: -3px }

        .project-image { height: 1001px; background: transparent url(fogbugz-hero.jpg) no-repeat center 0; }
        
        

        @media screen and (min-width: 800px){
            .page-title { font-size: 110px; }

            #pullquote { background: transparent url(fogbugz-quote.png) no-repeat 0 0; height: 362px; }
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
        	        <h1 class="page-title">Fogbugz</h1>
        	        <h2 class="project-subtitle">Helping Software Teams Communicate</h2>    	    
        	    </hgroup>

        	    <ul id="project-nav" class="no-marker">
                    <li class="prev">        	            
            	        <a href="/work/krylon/">Krylon</a>
        	        </li>
        	        <li class="next">            	        
            	        <a href="/work/logos/">Assorted Logos</a>            	        
        	        </li>
	            </ul><!-- #project-nav -->
        	    
        	    <span id="facebook-like">
        	        <iframe src="http://www.facebook.com/plugins/like.php?href=http://danielmall.com//work/fogbugz/" scrolling="no" frameborder="0" style="border:none; height: 30px;"></iframe>
        	    </span>
        	    
    	    </div><!-- #project-header -->
	        
	    </section><!-- #work-area -->
	    
	    <div class="project-image"></div>

        <section id="work-content" class="wrap">
            
            <blockquote id="pullquote" class="small-phark">
                <p>[Dan&rsquo;s] first design was really good, and I knew that it would be better to just shut up and give him artistic license to do whatever he thought was best. I thought that we could try and meddle in his design, tweaking things left and right, and get another bad design-by- committee, or we could just tell him we trusted him and whatever he delivered would be exactly what went live.</p>
                <p>Which it was.</p>
                <p><cite>Joel Spolsky, Co-Founder, Fog Creek Software &amp; Stack Overflow</cite></p>
            </blockquote>

            <div class="main">

                <p>FogBugz is a very thorough bug-tracking application and the flagship product of <a href="http://www.fogcreek.com/">Fog Creek Software</a>, owned and managed by Joel Spolsky, of the <a href="http://www.joelonsoftware.com/">Joel on Software</a> fame. Representing <a href="http://www.happycog.com/">Happy Cog</a>, I had the pleasure of helping the Fog Creek team redesign the FogBugz site.</p>
                <p>All in all, I had a lot of fun with this project. Joel and crew basically gave me free reign, so the direction was fairly open. While they mentioned their &ldquo;wish list&rdquo; to me, they left the door wide open to ideas.</p>

                <p>While Fog Creek did the information architecture for the site, I was responsible for design as well as front-end coding. Their team uses <a href="http://jquery.com/">jQuery</a>, so it was a rewarding first experience to use a JavaScript library. I definitely had some frustrations with it, but I&rsquo;d wager that had more to do with my inexperience with libraries and shoddy JavaScript skills than with the framework.</p>

                <p>If you&rsquo;re interested in some of the exposition for this project, Joel has <a href="http://www.joelonsoftware.com/items/2007/10/30.html" title="&ldquo;New Websites,&rdquo; at Joel on Software">a pretty extensive write-up</a> on his own site.</p>

            </div><!-- .main -->

            <div class="sub">

                <h2>Client</h2>
                <p>Fog Creek Software</p>

                <h2>Role</h2>
                <ul>
                    <li>Art Direction</li>
                    <li>Design</li>
                    <li>Development</li>
                </ul>

                <h2>Year</h2>
                <p>2007</p>
                
                <h2>Agency</h2>
                <p><a href="http://happycog.com/">Happy Cog</a></p>

                <h2>Status</h2>
                <p>No longer online</p>

            </div><!-- .sub -->

        </section><!-- #work-content -->
	    
	    
	</div><!-- #work-area-wrap -->
	
	<div class="wrap">
    	
    	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>
    	
    	
    </div><!-- #wrap -->
    
	
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>