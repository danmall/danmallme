<div id="masthead-wrap">
        
    <section id="masthead" role="banner">
        <header>
            <?php if($_SERVER['REQUEST_URI'] == '/') { ?>            
            <h1 class="phark logo logo-home">Daniel Mall</h1>
            <ul id="roles" class="no-marker">                
                <li>Art Director</li>
                <li>Designer</li>
                <li>Developer</li>
                <li>Strategist</li>
                <li>Teacher</li>                
                <li>Singer</li>
                <li>Speaker</li>
                <li>Pianist</li>
                <li>New Dad</li>
                <li>Husband</li>
            </ul>
            <?php } else { ?>
            <h1 class="logo"><a class="phark phark-link" href="/">Daniel Mall</a></h1>
            <?php } ?>
        </header>

    	<nav class="main-nav">
        	<ul class="no-marker">
        	    <?php if(strstr($_SERVER['REQUEST_URI'], '/work/')) { ?>
        	        <?php if($_SERVER['REQUEST_URI'] == '/work/') { ?>  
        	        <li class="main-nav-item"><mark>Work</mark></li>        	        
        	        <?php } else { ?>
        	        <li class="main-nav-item current"><a href="/work/">Work</a></li>
        	        <?php } ?>
        		<?php } else { ?>
        		<li class="main-nav-item"><a href="/work/">Work</a></li>
        		<?php } ?>
        		
        		<?php if(strstr($_SERVER['REQUEST_URI'], '/articles/')) { ?>
        	        <?php if($_SERVER['REQUEST_URI'] == '/articles/') { ?>
        		    <li class="main-nav-item"><mark>Articles</mark></li>
        		    <?php } else { ?>
        		    <li class="main-nav-item current"><a href="/articles/">Articles</a></li>
        		    <?php } ?>       		
        		<?php } else { ?>
        		<li class="main-nav-item"><a href="/articles/">Articles</a></li>
        		<?php } ?>        		

        		<li class="main-nav-item"><a href="http://links.danielmall.com/">Links</a></li>
        		
        		<?php if($_SERVER['REQUEST_URI'] == '/about/') { ?>
        		<li class="main-nav-item"><mark>About</mark></li>
        		<?php } else { ?>
        		<li class="main-nav-item"><a href="/about/">About</a></li>
        		<?php } ?>
        		
        		<?php if($_SERVER['REQUEST_URI'] == '/contact/') { ?>
        		<li class="main-nav-item"><mark>Contact</mark></li>
        		<?php } else { ?>
        		<li class="main-nav-item"><a href="/contact/">Contact</a></li>
        		<?php } ?>
        	</ul>
        </nav><!-- .main-nav -->

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