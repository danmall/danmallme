<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/doctype.php"); echo "\n"; ?>
<head>
    <title>&ldquo;Crowdsourcing the Conference Talk,&rdquo; an article by Dan Mall</title>
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
	
    <link rel="stylesheet" href="crowdsourcing-conference-talk.css" />	
	<script>
		document.write('<link rel="stylesheet" href="enhanced.css" />')		
		document.write('<link rel="stylesheet" href="typekit.css" />')		
	</script>
</head>

<body id="article" class="articles">	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"); echo "\n"; ?>
	
	<div id="article-area-wrap">
	    
	    <section id="crowdsourcing-conference-talk">
		
			<div class="inner">
				
				<section id="title" class="slide">
					<h1>Crowdsourcing the Conference Talk</h1>
					<script>
						if (Modernizr.touch){
						   document.write('<footer class="touch">Swipe to start</footer>');
						} else {
						   document.write('<footer class="desktop">(use arrow keys)</footer>');
						}
						
					</script>
					<p class="pagination">1/11</p>
				</section><!-- #title -->
			
				<section id="intro" class="slide">
					<p>Lately, there&rsquo;s been a <a href="#">lot</a> <a href="#">of</a> <a href="#">buzz</a> about the state of web design conferences.</p>
					<p class="pagination">2/11</p>
				</section><!-- #intro -->
			
				<section id="attendees" class="slide">
					<p>Generally, attendees aren&rsquo;t challenged enough by speakers&rsquo; content.</p>
					<p class="pagination">3/11</p>
				</section><!-- #attendees -->
			
				<section id="speakers" class="slide">
					<p>Generally, speakers aren&rsquo;t paid enough to put significant time into research and study for their talks (even though they often do).</p>
					<p class="pagination">4/11</p>
				</section><!-- #speakers -->
			
				<section id="change" class="slide">
					<p>Let&rsquo;s change that.</p>
					<p>I&rsquo;m putting my money where my mouth is.*</p>
					<footer>* On my face!</footer>
					<p class="pagination">5/11</p>
				</section><!-- #change -->
			
				<section id="new-adventures" class="slide">
					<p>I&rsquo;ll be at the <a href="http://2012.newadventuresconf.com/">New Adventures</a> conference in January.</p> 
					<p><em>What should I talk about?</em></p>
					<p class="pagination">6/11</p>
				</section><!-- #new-adventures -->
			
				<section id="help" class="slide">
					<p>Here&rsquo;s how you can help.</p> 
					<p>Leave me a comment with&hellip;</p>
					<p class="pagination">7/11</p>
				</section><!-- #help -->
			
				<section id="topics" class="slide">
					<h2>How you can help. Leave a comment with&hellip;</h2>
					<p>Topic suggestions: what should I talk about?</p>
					<small>Typography? Flash? CSS? All? None?</small>
					<p class="pagination">8/11</p>
				</section><!-- #topics -->
			
				<section id="delivery" class="slide">
					<h2>How you can help. Leave a comment with&hellip;</h2>
					<p>Delivery suggestions: how should I present my content?</p>
					<small>Tell stories? Show practical examples? Participatory visual aids?</small>
					<p class="pagination">9/11</p>
				</section><!-- #delivery -->
			
				<section id="examples" class="slide">
					<h2>How you can help. Leave a comment with&hellip;</h2>
					<p>Examples: what great talks have you seen that you would like more of ?</p>
					<p class="pagination">10/11</p>
				</section><!-- #examples -->
			
				<section id="first-step" class="slide">
					<p>It&rsquo;ll take effort from everyone to get conferences to the next level.</p>
					<p><em>Hopefully, this is the first step.</em></p>
					<footer>Please Leave a comment below.</footer>
					<p class="pagination">11/11</p>
				</section><!-- #examples -->
				
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
								currentSlide++;								
							}else if($direction == "right"){
								currentSlide--;
							}
							
							$.address.value($('.slide').eq(currentSlide).attr('id'));							
							
						}
						
					});
				</script>
				
			</div><!-- .inner -->
	    
	    </section><!-- #crowdsourcing-conference-talk -->	    
	    
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
                    var disqus_identifier = 'crowdsourcing-conference-talk';
                    var disqus_url = 'http://danielmall.com/articles/crowdsourcing-conference-talk/';
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