<div id="masthead-wrap">
        
    <section id="masthead" role="banner">
        <header>
            <?php if($_SERVER['REQUEST_URI'] == '/') { ?>            
            <h1 class="phark">Daniel Mall</h1>
            <ul id="roles" class="no-marker">                
                <li>Art Director</li>
                <li>Designer</li>
                <li>Developer</li>
                <li>Strategist</li>
                <li>Teacher</li>                
                <li>Singer</li>
                <li>Speaker</li>
                <li>Pianist</li>
                <li>Dad-to-be</li>
                <li>Husband</li>
                <li>Creative Director</li>
            </ul>
            <?php } else { ?>
            <h1><a class="phark phark-link" href="/">Daniel Mall</a></h1>
            <?php } ?>
        </header>

    	<nav id="nav">
        	<ul class="no-marker">
        	    <?php if(strstr($_SERVER['REQUEST_URI'], '/work/')) { ?>
        	        <?php if($_SERVER['REQUEST_URI'] == '/work/') { ?>  
        	        <li id="nav-work"><mark>Work</mark></li>        	        
        	        <?php } else { ?>
        	        <li id="nav-work" class="current"><a href="/work/">Work</a></li>
        	        <?php } ?>
        		<?php } else { ?>
        		<li id="nav-work"><a href="/work/">Work</a></li>
        		<?php } ?>
        		
        		<?php if(strstr($_SERVER['REQUEST_URI'], '/articles/')) { ?>
        	        <?php if($_SERVER['REQUEST_URI'] == '/articles/') { ?>
        		    <li id="nav-articles"><mark>Articles</mark></li>
        		    <?php } else { ?>
        		    <li id="nav-articles" class="current"><a href="/articles/">Articles</a></li>
        		    <?php } ?>       		
        		<?php } else { ?>
        		<li id="nav-articles"><a href="/articles/">Articles</a></li>
        		<?php } ?>        		

        		<li id="nav-links"><a href="http://links.danielmall.com/">Links</a></li>
        		
        		<?php if($_SERVER['REQUEST_URI'] == '/about/') { ?>
        		<li id="nav-about"><mark>About</mark></li>
        		<?php } else { ?>
        		<li id="nav-about"><a href="/about/">About</a></li>
        		<?php } ?>
        		
        		<?php if($_SERVER['REQUEST_URI'] == '/contact/') { ?>
        		<li id="nav-contact"><mark>Contact</mark></li>
        		<?php } else { ?>
        		<li id="nav-contact"><a href="/contact/">Contact</a></li>
        		<?php } ?>
        	</ul>
        </nav><!-- #nav -->

        <?php /* ?>
    	<form id="site-search" action="#" method="post">

    		<p>
    			<label for="site-search-box">Search this site</label>
    			<input type="text" class="filled" id="site-search-box" value="Semantic Flash" />
    		</p>
    		<p class="submit"><input type="image" src="/i/widgets/search.gif" alt="Search" /></p>

    	</form><php */ ?>


    </section><!-- #masthead -->
    

</div><!-- #masthead-wrap -->