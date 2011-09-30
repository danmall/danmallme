<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/doctype.php"); echo "\n"; ?>
<head>
    <title>&ldquo;You, the Conference Organizer,&rdquo; an article by Dan Mall</title>
    <meta name="description" content="Crowdsourcing the Conference Talk" />
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/meta.php"); echo "\n"; ?>
    
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/cssReference.php"); echo "\n"; ?>
	<script src="http://use.typekit.com/qft6akw.js"></script>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/jsReference.php"); echo "\n"; ?>

	<!-- http://labs.skinkers.com/touchSwipe/ -->
	<script src="jquery.touchSwipe-1.2.4.js"></script>
	
	<!-- jQuery Address: http://www.asual.com/jquery/address/ -->
	<script src="jquery.address-1.5.min.js"></script>
	
	<!-- Custom Modernizr build -->
	<script src="modernizr.custom.02547.js"></script>
	
    <link rel="stylesheet" href="you-the-conference-organizer.css" />	
	<script>
		document.write('<link rel="stylesheet" href="enhanced.css" />')		
		document.write('<link rel="stylesheet" href="typekit.css" />')		
	</script>
</head>

<body id="article" class="articles">	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"); echo "\n"; ?>
	
	<div id="article-area-wrap">
	    
	    <section id="you-the-conference-organizer">
		
			<div class="inner">
				
				<section id="title" class="slide">
					<h1>You, the Conference Organizer</h1>
					<script>
						if (Modernizr.touch){
						   document.write('<footer class="touch">Swipe to start</footer>');
						} else {
						   document.write('<footer class="desktop">(use arrow keys)</footer>');
						}
						
					</script>
					
				</section><!-- #title -->
			
				<section id="intro" class="slide">
					<p>Lately, there&rsquo;s been a <a title="&ldquo;The X-factorisation of the Web,&rdquo; by Andy Budd" href="http://www.andybudd.com/archives/2011/09/the_xfactorisation_of_the_web/">lot</a> <a title="&ldquo;7 ways web conferences suck (and how to fix them),&rdquo; by Rhobert Hoekman Jr. for .NET Magazine" href="http://www.netmagazine.com/features/7-ways-web-conferences-suck-and-how-fix-them">of</a> <a title="&ldquo;Is Conference Pricing Out of Control?&rdquo; by Jeffrey Way for Nettuts" href="http://net.tutsplus.com/articles/general/is-conference-pricing-out-of-control/">buzz</a> about the state of web design conferences.</p>
				</section><!-- #intro -->
			
				<section id="attendees" class="slide">
					<p>Generally, it seems attendees aren&rsquo;t <span style="white-space:nowrap;">satisfied&mdash;</span>and, more importantly, <span style="white-space:nowrap;">challenged&mdash;by</span> speakers&rsquo; content. </p>					
				</section><!-- #attendees -->
			
				<section id="speakers" class="slide">
					<p>Generally, speakers aren&rsquo;t paid enough to put months or years into research and study, nor are they encouraged to be braver.</p>					
				</section><!-- #speakers -->
			
				<section id="my-take" class="slide">
					<p>I&rsquo;ve been both a <a href="/work/speaking/">speaker</a> and an attendee (and will continue to be both). Here&rsquo;s my take.</p> 					
				</section><!-- #my-take -->
			
				<section id="price" class="slide">
					<p>The type of conference and the expectation for attendees is potentially the most important factor. It often determines tone, speakers, and ultimately ticket price.</p>					
				</section><!-- #price -->
			
				<section id="theme" class="slide">
					<p>As a speaker, every conference I&rsquo;ve been invited to speak at has had a theme. Some are made clear to the attendees; others held more as a guide for speakers.</p>										
				</section><!-- #theme -->
			
				<section id="existing-conferences" class="slide">
					<p id="aea"><a href="http://www.aneventapart.com/">An Event Apart</a> focuses on practicality, teaching actionable approaches and techniques that attendees can bring back to work.</p>
					<p id="fowd"><a href="http://futureofwebdesign.com/">Future of Web Design</a> is just that: a conference about what&rsquo;s next in our industry. </p>
					<p id="na"><a href="http://newadventuresconf.com/">New Adventures in Web Design</a> encourages speakers to investigate high-level ideas <em>with</em> attendees. </p>
					<p id="dconstruct"><a href="http://dconstruct.org/">dConstruct</a> has an emphasis on bridging the gap between physical and digital product design.</p>
				</section><!-- #existing-conferences -->
			
				<section id="goals" class="slide">
					<p>Despite popular belief, great conference organizers don&rsquo;t just go for big name speakers. They find people who can effectively contribute in communicating that conference&rsquo;s goal.</p>
				</section><!-- #goals -->
			
				<section id="money" class="slide">
					<p>In my experience, no conference organizer does it for the money. (It&rsquo;s usually not a profitable business.) They do it because they believe they can create unique, valuable experiences.</p>					
				</section><!-- #money -->
				
				<section id="organizers" class="slide">
					<p>No conference organizer I know started out as one. <a href="http://zeldman.com/">Zeldman</a>, <a href="http://meyerweb.com/">Eric</a>, <a href="http://colly.com/">Colly</a>, <a href="http://ryancarson.com/">Ryan</a>, <a href="http://andybudd.com/">Andy</a>, <a href="http://fictivecameron.com/">Cameron</a>, and many more started as practitioners. They believed in more meaningful conferences for people like themselves, so they rose to the challenge and did it.</p><br />
					<aside>Interesting trend: each of these folks were practitioners who created their own agencies then moved on to planning conferences. </aside>
				</section><!-- #organizers -->
				
				<section id="you" class="slide">
					<p>So, put yourself in their shoes (because one day, you might be).</p>
					<small>What type of conference would you create? Who would you invite to speak? Who would you invite to attend? What type of content would you have?</small>
					<p class="cta"><a href="#comments">Add a comment</a></p>
				</section><!-- #you -->
				
				<script>
					$(document).ready(function() {
						
						var _animating = false;
						var currentSlide = 0;
						var currentZIndex = 1;
						var _swipeOptions = {
							swipe: swipe,
							threshold: 0
						}
												
						var MAX_SLIDES = $('.slide').size()-1;
						
						
						
						$.address.init(function($e){
							
							$('.slide').each(function(n){
								$(this).attr('data-id', n);
								$(this).append('<p class="pagination">' + parseInt(n+1) + '/' + $('.slide').size() + '</p>')
							});
							
							$.address.strict(false); // removes leading slash

							if ($.address.value() == '') {
				                $.address.history(false).value('title').history(true);							
				            }else{
								currentSlide = parseInt($('.slide[id="' + $.address.value() + '"]').attr('data-id'));
							}					
							
						}).change(function($e) {  
							
							goToSlide(parseInt($('.slide[id="' + $e.value + '"]').attr('data-id')));
						
						});
						
						function goToSlide($slideNum){
							_animating = true;
							currentZIndex++;
							$('.slide').eq($slideNum).css({
								'display': 'block',
								'opacity': 0,
								'z-index': currentZIndex
							}).animate({
								'opacity': 1
							}, 250, function(){
								_animating = false;
							});
						}
						
						$(document).keydown(function(e) {
							switch(e.which) {
								// user presses the left arrow
								case 37: 
									if(!_animating){
										if(currentSlide > 0) {
											currentSlide--;
											$.address.value($('.slide').eq(currentSlide).attr('id'));
										}
									}
								break;	

								// user presses the right arrow
								case 39: 
									if(!_animating){
										if(currentSlide < MAX_SLIDES){
											currentSlide++;
											$.address.value($('.slide').eq(currentSlide).attr('id'));
										}
									}
								break;

							}
						});
						
						$('.slide').swipe(_swipeOptions);
						
						function swipe($event, $direction){
							if($direction == "left"){
								if(currentSlide < MAX_SLIDES){
									currentSlide++;								
								}
							}else if($direction == "right"){
								if(currentSlide > 0){
									currentSlide--;
								}
							}
							
							$.address.value($('.slide').eq(currentSlide).attr('id'));							
							
						}
						
					});
				</script>
				
			</div><!-- .inner -->
	    
	    </section><!-- #you-the-conference-organizer -->	    
	    
	</div><!-- /#article-area-wrap -->
	
	
	<div id="comments">
	
	    <?php /* ?><section id="article-meta">

	        <header class="easy-clearing">
	            <h1>{if comment_total == 0}No comments <a href="#comment-form">yet</a>&hellip;{if:else}{comment_total} Comments{/if}</h1>
	            <p>Posted in {categories backspace="2"}<a href="{path='channel/index'}">{category_name}</a>, {/categories}</p>
	        </header>
        
	    </section><!-- /#article-meta --><?php */ ?>	    	    
	    
	    <div id="comments-wrap">                
            
            <div class="main">
                
                <div id="disqus_thread"></div>
                <script>
                    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                    var disqus_shortname = 'danielmall'; // required: replace example with your forum shortname

                    // The following are highly recommended additional parameters. Remove the slashes in front to use.
                    var disqus_identifier = 'you-the-conference-organizer';
                    var disqus_url = 'http://danielmall.com/articles/you-the-conference-organizer/';
                    var disqus_developer = 1;

                    /* * * DON'T EDIT BELOW THIS LINE * * */
                    (function() {
                        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                        dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
                        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                    })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                <a href="http://disqus.com" class="dsq-brlink">blog comments powered by <span class="logo-disqus">Disqus</span></a>
                
            </div><!-- /.main -->
	    
	    
    	    <div class="sub">
	        
    	        <section id="article-info">
        	        <header>
        	            <h2>Article Info</h2>
        	        </header>
        	        <time datetime="2011-08-27T11:51:33">Published August 27, 2011 at 11:51 <abbr title="Post Meridian">PM</abbr></time>
    	        </section><!-- /#article-info -->
    	        
    	        
    	        <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/carbon.php"); echo "\n"; ?>
	        
	        
    	    </div><!-- /.sub -->
    	    
    	    
    	</div><!-- #comments-wrap -->
	    
	        
	</div><!-- #comments -->
	
	
	<div class="wrap">
    	
    	<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/footer.php"); echo "\n"; ?>
    	
    	
    </div><!-- #wrap -->
    
	
<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/close.php"); echo "\n"; ?>