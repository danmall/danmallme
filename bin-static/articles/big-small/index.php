<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/doctype.php"); echo "\n"; ?>
<head profile="http://gmpg.org/xfn/11">
    <title>&ldquo;Big/Small,&rdquo; an article by Dan Mall</title>
    <meta name="description" content="Grok Reads" />
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/meta.php"); echo "\n"; ?>
    
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/cssReference.php"); echo "\n"; ?>	
	<script src="http://use.typekit.com/zwf7tzu.js"></script>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/jsReference.php"); echo "\n"; ?> 
	<link rel="stylesheet" href="big-small.css" />	
    
</head>

<body id="article" class="articles">	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"); echo "\n"; ?>
	
	<div id="article-area-wrap">
			
	    <section id="big-small" class="clearfix">
			
			<h1 class="phark">Big/Small</h1>
			
			<small>(Originally written for <a href="http://the-pastry-box-project.net/dan-mall/2012-april-21/">The Pastry Box Project)</a></small>
			
			<p class="intro">At <a href="http://grok.cc/">Grok</a>, I had the privilege of sharing a thought that&rsquo;s been on my mind for some time now. Since <a href="http://danielmall.com/articles/introducing-superfriendly/">starting</a> <a href="http://superfriend.ly/">my own business</a>, I&rsquo;ve been blessed enough that I can choose the types of projects I take on. That choice never comes lightly, as it often has financial, emotional, and spiritual benefits and drawbacks.</p>

			<p>It&rsquo;s definitely <a href="http://www.alistapart.com/articles/an-important-time-for-design/">an important time for design</a>. Lately, I&rsquo;ve noticed a trend of many talented designers looking to do something &ldquo;bigger,&rdquo; whether that&rsquo;s doing more meaningful client work, joining a startup, or creating their own products. <a href="http://brooklynbeta.org/">Brooklyn Beta</a> really exposed the great opportunities to help organizations like <a href="http://www.charitywater.org/">charity: water</a>, be disruptive in stagnant markets, or kickstart the reformation of the United States healthcare system.</p>

			<p>I was raised to believe in moderation; too much or too little of something is often a bad thing. If everyone&rsquo;s helping to solve a global crisis, who&rsquo;s left to help the local mom and pop shop get their business off the ground with a small new website? If everyone&rsquo;s reforming healthcare, who will create that silly iPhone game that will bring my daughter hours of enjoyment?</p>

			<p>When I was contemplating starting SuperFriendly, I thought very hard about the type of work I wanted to take on and how I would describe it. I landed on this tagline: &ldquo;Defeating apathy and the forces of evil.&rdquo; While it&rsquo;s a bit silly, I really do believe in it. It serves as a reminder to me about why I&rsquo;m doing this in the first place. Defeating apathy is about creating more enjoyment in the world, whether it&rsquo;s making my wife laugh or entertaining a whole nation. Defeating the forces of evil is a constant challenge to leave the world a little better than I found it with every project I participate it. Will this create pollution… environmentally, digitally, or otherwise? Will I harm someone physically, emotionally, or psychologically? Will our planet have been better off if I never did this? I was convinced that if I kept this as my focus, I would be doing my part, regardless of the scale of that impact. </p>

			<p>At Grok, I rhetorically asked my group whether I was shirking my responsibility if the impact of my actions wasn&rsquo;t large. In retrospect, I wanted affirmation. Instead, <a href="http://twitter.com/FictiveTyler">Tyler Mincey</a> called me out. He said I was absolutely neglecting my obligations. He reminded me that this is the most opportune time in history because we have immediately influence. I can send 140 characters into space and a small army&rsquo;s worth of people are ready to argue, agree, fight, discuss, or activate at a moment&rsquo;s notice. And, if I take that tremendous ability and squander it on creating the next fart app, then yes, I&rsquo;d be doing a disservice to myself and all the people I could have helped.</p> 
			
			<p>Damn you, Tyler.</p>

			<p>I continually struggle with this. I want to work on the whimsical, the first world, the "let&rsquo;s make good even better" stuff. I want to groan and whine when Netflix streams at medium quality instead of high, and I want to count it a huge success that I convinced a client to choose that particular shade of orange… you know the one. But there are other kinds of work that are important. </p>

			<p>I still believe in balance. In that discussion, <a href="http://rog.ie/">Rogie</a> made a great point that if you&rsquo;re hungry, you can&rsquo;t properly feed others; if you&rsquo;re not whole, you&rsquo;ve got much less of yourself to give. I agree wholeheartedly. I believe that there&rsquo;s an equilibrium. I&rsquo;m not sure what the outcome will be, but at least I have a different way to look at my work. </p>

			<p>With great power, and all that jazz.</p>
			
	    </section><!-- #big-small -->	  	
	    
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
                    var disqus_identifier = 'big-small';
                    var disqus_url = 'http://danielmall.com/articles/big-small/';
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
        	        <time datetime="2012-04-22T10:26:00">Published April 22, 2012 at 10:26 <abbr title="Ante Meridian">AM</abbr></time>
    	        </section><!-- /#article-info -->
    	        
    	        
    	        <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/carbon.php"); echo "\n"; ?>
	        
	        
    	    </div><!-- /.sub -->
    	    
    	    
    	</div><!-- #comments-wrap -->
	    
	        
	</div><!-- #comments -->
	
	
	<div class="wrap">
    	
    	<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/footer.php"); echo "\n"; ?>
    	
    	
    </div><!-- #wrap -->
    
	
<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/close.php"); echo "\n"; ?>
