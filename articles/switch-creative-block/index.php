<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head profile="http://gmpg.org/xfn/11">
    <title>&ldquo;Switch,&rdquo; an article by Dan Mall</title>
    <meta name="description" content="On Creative Direction" />
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?>
    
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/jsReferenceHead.php"); echo "\n"; ?>    
    <link href='http://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=PT+Mono&amp;text=SWITCH' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/articles/_vanilla/vanilla.css" />
    <link rel="stylesheet" href="switch.css" />

	<!-- Facebook -->
    <meta property="og:title" content="Switch" />
    <meta property="og:description" content="Dealing with creative block."/>	
    <meta property="og:url" content="http://danielmall.com/articles/switch-creative-block/" />
    <meta property="og:image" content="http://danielmall.com/articles/switch-creative-block/home-thumb.png" />
    
</head>

<body id="article" class="articles">	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>
	
	<div id="article-area-wrap">
			
	    <section class="clearfix wrap vanilla">			
			
			<h1 class="article-header-title switch-title">Switch</h1>
            <h2 class="article-header-subtitle">Dealing with creative block</h2>

            <div class="margin-bottom">
                <iframe src='https://spoken.co/t/2504893/embed' frameborder='0' width='100%' height='84' style='max-width:400px;'></iframe>
            </div>
			
			<p>Anyone who creates anything faces it. It&rsquo;s inevitable, and part of the process. So, how do you face creative block head on?</p>

            <p>You switch.</p>

            <p>One of the biggest factors that I&rsquo;ve seen lead to my own creative block is the lack of momentum. I might be working on a design or a piece of writing where nothing good is happening, and finally progress grinds to a halt.</p>

            <p>Creation is about inertia. Like Newton&rsquo;s first law of motion, it&rsquo;s most difficult to make progress when none is being made, and it&rsquo;s easiest to make more progress when you&rsquo;re already on a roll.</p>

            <p>When you&rsquo;re stuck on a design, lots of people suggest getting away from your desk: take a walk, put on some music, watch some tv—essentially, take a break and come back. While it&rsquo;s great to be able to clear your mind, starting from scratch again makes it more difficult to create momentum. It&rsquo;s the difference between pushing a boulder that&rsquo;s already slowly rolling and trying to budge one that&rsquo;s standing still.</p>

            <p>My solution: work on at least two projects at the same time. Whenever I feel myself slowing down progress on project #1, I&rsquo;ll switch over to project #2. I get all the benefits of starting fresh on something new, but I still have the opportunity to continue whatever momentum I already have. Certainly, there&rsquo;s <a href="http://www.nytimes.com/2013/05/05/opinion/sunday/a-focus-on-distraction.html?_r=0">a toll to task-switching</a>, but I&rsquo;ve found it to be less costly than coming back to the boulder at a standstill.</p>

            <p>Some examples of things to work on simultaneously:</p>

            <ul>
                <li>A mobile view and desktop view of a site</li>
                <li>Two different pages of a site, like a Product page and a Products landing page</li>
                <li>Two different disciplines, like a site map and a comp for the same project</li>
                <li>Two completely different client projects, like a homepage for an ecommerce site and a homepage for a news site</li>
                <li>A mix of responsibilities, like a homepage for a client project and a homepage for a personal project</li>
            </ul>

            <p>In doing this, you&rsquo;ll start to notice some efficiencies, like some challenges across both that you could solve the same way. You&rsquo;ll also find that the differences between what you&rsquo;re doing become clearer, and you can approach them with more clarity.</p>
            
            <p>I&rsquo;ve been doing this for a while, so I regularly work on 4-5 things at a time. Through practice, I&rsquo;m pretty honed in on the point where I&rsquo;m being less productive than I&rsquo;d like to be, so I switch fairly frequently. Coincidentally, I haven&rsquo;t felt like I&rsquo;ve faced creative block in a long time.</p>
            
            <p>Your mileage may vary, but consider giving this a try next time you&rsquo;re feeling stuck.</p>
            
            <p>How do you deal with creative block?</p>

            <footer class="footnote">
                <p>Also published on <a href="https://medium.com/@danielmall/switch-928f791e2591">Medium</a>.</p>
            </footer><!-- .footnote -->
			
	    </section><!-- .vanilla -->	  	
	    
	</div><!-- /#article-area-wrap -->	

	<?php

        echo readNext('Day One with Android', '/articles/day-one-with-android/');

    ?>
	
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
                    var disqus_identifier = 'switch-creative-block';
                    var disqus_url = 'http://danielmall.com/articles/switch-creative-block/';
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
	        
    	        <section class="article-info">
        	        <header>
        	            <h2>Article Info</h2>
        	        </header>
        	        <time datetime="2014-02-19T12:57:00">Published August 16, 2015 at 8:40 <abbr title="Post Meridian">PM</abbr></time>
    	        </section><!-- /.article-info -->
    	        
    	        
    	        <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/carbon.php"); echo "\n"; ?>
	        
	        
    	    </div><!-- /.sub -->
    	    
    	    
    	</div><!-- #comments-wrap -->
	    
	        
	</div><!-- #comments -->
	
	
	<div class="wrap">
    	
    	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>
    	
    	
    </div><!-- #wrap -->

    <script src="/-/j/libs/jquery.lettering-0.6.1.min"></script>
    <script>
        $(document).ready(function() {
            $(".switch-title").lettering();
            var toggle2 = true,
                toggle3 = true,
                toggle4 = true,
                toggle6 = true;


            // char2
            window.setTimeout(function(){
                setInterval(function(){
                    if(toggle2){
                        $('.switch-title .char2').removeClass('unflip').addClass('flip');
                    }else{
                        $('.switch-title .char2').removeClass('flip').addClass('unflip');
                    }
                    toggle2 = !toggle2;
                }, 3000);
            }, 0);


            // char3
            window.setTimeout(function(){
                setInterval(function(){
                    if(toggle3){
                        $('.switch-title .char3').removeClass('unflip').addClass('flip');
                    }else{
                        $('.switch-title .char3').removeClass('flip').addClass('unflip');
                    }
                    toggle3 = !toggle3;
                }, 2000);
            }, 4000);

            // char4
            window.setTimeout(function(){
                setInterval(function(){
                    if(toggle4){
                        $('.switch-title .char4').removeClass('unflip').addClass('flip');
                    }else{
                        $('.switch-title .char4').removeClass('flip').addClass('unflip');
                    }
                    toggle4 = !toggle4;
                }, 2900);
            }, 1000);

            // char6
            window.setTimeout(function(){
                setInterval(function(){
                    if(toggle6){
                        $('.switch-title .char6').removeClass('unflip').addClass('flip');
                    }else{
                        $('.switch-title .char6').removeClass('flip').addClass('unflip');
                    }
                    toggle6 = !toggle6;
                }, 2500);
            }, 500);

            

        });
    </script>
    
	
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>
