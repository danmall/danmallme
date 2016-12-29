<a class="dm-dp-vertSepNav_trigger" href="#nav">Skip to navigation</a>

<nav id="nav" class="dm-dp-vertSepNav--noBorders dm-c-siteNav">

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



		<?php if(strstr($_SERVER['REQUEST_URI'], '/about/')) { ?>
	        <?php if($_SERVER['REQUEST_URI'] == '/about/') { ?>  
	        <li class="dm-dp-vertSepNav_item dm-c-siteNav_item">
	        	<mark class="dm-dp-vertSepNav_item--active dm-c-siteNav_item--active">About</mark>
	        </li>        	        
	        <?php } else { ?>
	        <li class="dm-dp-vertSepNav_item dm-dp-vertSepNav_item--active dm-c-siteNav_item dm-c-siteNav_item--active">
	        	<a href="/about/">About</a>
	        </li>
	        <?php } ?>
		<?php } else { ?>
		<li class="dm-dp-vertSepNav_item dm-c-siteNav_item">
			<a href="/about/">About</a>
		</li>
		<?php } ?>



		<?php if(strstr($_SERVER['REQUEST_URI'], '/articles/')) { ?>
	        <?php if($_SERVER['REQUEST_URI'] == '/articles/') { ?>  
	        <li class="dm-dp-vertSepNav_item dm-c-siteNav_item">
	        	<mark class="dm-dp-vertSepNav_item--active dm-c-siteNav_item--active">Articles</mark>
	        </li>        	        
	        <?php } else { ?>
	        <li class="dm-dp-vertSepNav_item dm-dp-vertSepNav_item--active dm-c-siteNav_item dm-c-siteNav_item--active">
	        	<a href="/articles/">Articles</a>
	        </li>
	        <?php } ?>
		<?php } else { ?>
		<li class="dm-dp-vertSepNav_item dm-c-siteNav_item">
			<a href="/articles/">Articles</a>
		</li>
		<?php } ?>
		
		


		<?php if(strstr($_SERVER['REQUEST_URI'], '/contact/')) { ?>
	        <?php if($_SERVER['REQUEST_URI'] == '/contact/') { ?>  
	        <li class="dm-dp-vertSepNav_item dm-c-siteNav_item">
	        	<mark class="dm-dp-vertSepNav_item--active dm-c-siteNav_item--active">Contact</mark>
	        </li>        	        
	        <?php } else { ?>
	        <li class="dm-dp-vertSepNav_item dm-dp-vertSepNav_item--active dm-c-siteNav_item dm-c-siteNav_item--active">
	        	<a href="/contact/">Contact</a>
	        </li>
	        <?php } ?>
		<?php } else { ?>
		<li class="dm-dp-vertSepNav_item dm-c-siteNav_item">
			<a href="/contact/">Contact</a>
		</li>
		<?php } ?>



	</ul>

</nav>