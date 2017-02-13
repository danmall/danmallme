<a class="dm-dp-vertSepNav_trigger dm-u-move--offscreen" href="#nav">Skip to navigation</a>

<nav id="nav" class="dm-c-siteNav">

	<ul>
		<?php /* ?>
        <?php if($_SERVER['REQUEST_URI'] == '/') { ?>  
        <li class="dm-dp-vertSepNav_item">
        	<mark class="dm-dp-vertSepNav_item--active">Home</mark>
        </li>        	        
		<?php } else { ?>
		<li class="dm-dp-vertSepNav_item">
			<a href="/">Home</a>
		</li>
		<?php } ?>
		<?php */ ?>


		<?php /* ?>
		<?php if(strstr($_SERVER['REQUEST_URI'], '/about/')) { ?>
	        <?php if($_SERVER['REQUEST_URI'] == '/about/') { ?>  
	        <li class="dm-c-siteNav_item dm-c-siteNav_item--active">
	        	<mark>About</mark>
	        </li>        	        
	        <?php } else { ?>
	        <li class="dm-c-siteNav_item dm-c-siteNav_item--active">
	        	<a href="/about/">About</a>
	        </li>
	        <?php } ?>
		<?php } else { ?>
		<li class="dm-c-siteNav_item">
			<a href="/about/">About</a>
		</li>
		<?php } ?>
		<?php */ ?>



		<?php if(strstr($_SERVER['REQUEST_URI'], '/articles/')) { ?>
	        <?php if($_SERVER['REQUEST_URI'] == '/articles/') { ?>  
	        <li class="dm-c-siteNav_item dm-c-siteNav_item--active">
	        	<mark>Articles</mark>
	        </li>        	        
	        <?php } else { ?>
	        <li class="dm-c-siteNav_item dm-c-siteNav_item--active">
	        	<a href="/articles/">Articles</a>
	        </li>
	        <?php } ?>
		<?php } else { ?>
		<li class="dm-c-siteNav_item">
			<a href="/articles/">Articles</a>
		</li>
		<?php } ?>



		<?php if(strstr($_SERVER['REQUEST_URI'], '/speaking-podcasts/')) { ?>
	        <?php if($_SERVER['REQUEST_URI'] == '/speaking-podcasts/') { ?>  
	        <li class="dm-c-siteNav_item dm-c-siteNav_item--active">
	        	<mark>Speaking &amp; Podcasts</mark>
	        </li>        	        
	        <?php } else { ?>
	        <li class="dm-c-siteNav_item dm-c-siteNav_item--active">
	        	<a href="/speaking-podcasts/">Speaking &amp; Podcasts</a>
	        </li>
	        <?php } ?>
		<?php } else { ?>
		<li class="dm-c-siteNav_item">
			<a href="/speaking-podcasts/">Speaking &amp; Podcasts</a>
		</li>
		<?php } ?>


		<?php if(strstr($_SERVER['REQUEST_URI'], '/blogroll/')) { ?>
	        <?php if($_SERVER['REQUEST_URI'] == '/blogroll/') { ?>  
	        <li class="dm-c-siteNav_item dm-c-siteNav_item--active">
	        	<mark>Blogroll</mark>
	        </li>        	        
	        <?php } else { ?>
	        <li class="dm-c-siteNav_item dm-c-siteNav_item--active">
	        	<a href="/blogroll/">Blogroll</a>
	        </li>
	        <?php } ?>
		<?php } else { ?>
		<li class="dm-c-siteNav_item">
			<a href="/blogroll/">Blogroll</a>
		</li>
		<?php } ?>
		
		


		<?php if(strstr($_SERVER['REQUEST_URI'], '/contact/')) { ?>
	        <?php if($_SERVER['REQUEST_URI'] == '/contact/') { ?>  
	        <li class="dm-c-siteNav_item dm-c-siteNav_item--active">
	        	<mark>Contact</mark>
	        </li>        	        
	        <?php } else { ?>
	        <li class="dm-c-siteNav_item dm-c-siteNav_item--active">
	        	<a href="/contact/">Contact</a>
	        </li>
	        <?php } ?>
		<?php } else { ?>
		<li class="dm-c-siteNav_item">
			<a href="/contact/">Contact</a>
		</li>
		<?php } ?>



	</ul>

</nav>