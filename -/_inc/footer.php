<footer role="complementary" class="dm-c-siteFooter">

	<div class="dm-c-siteFooter_copyright">
		<p>&copy; 2005 &ndash; <?php echo date('Y'); ?> Dan Mall, a Philly jawn.Thou shalt not <a href="/articles/stealing-your-way-to-original-designs/">steal</a>.</p>
		<p class="">Powered by Hand Coding&trade;. Check out this site&rsquo;s code on <a href="https://github.com/danmall/danielmallcom">Github</a>.</p>
		<p class="">Graciously hosted by <a href="http://www.mediatemple.net/go/order/?refdom=danielmall.com">Media Temple</a></p>
		
		<?php /* ?><p class=""><a href="http://feeds.feedburner.com/danielmall-articles">RSS</a></p><?php */ ?>
	</div>

	<div class="dm-c-siteFooter_twitter">
		<script>
		document.write('<section id="twitter-follow"><a href="http://twitter.com/danmall" class="twitter-follow-button">Follow @danmall</a></section>');    	
		</script>
		<script src="http://platform.twitter.com/widgets.js"></script>
	</div>
	
	<div class="dm-c-siteFooter_github">

		<p>
			<?php
			// outputs e.g. 'Last modified: March 12,2018.'
			echo "Last updated: " . date ("F d Y ", getlastmod());
			?>
					
		</p>	

	</div>
</footer>