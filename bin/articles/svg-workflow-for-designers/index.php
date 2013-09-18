<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head profile="http://gmpg.org/xfn/11">
    <title>&ldquo;SVG Workflow for Designers,&rdquo; an article by Dan Mall</title>
    <meta name="description" content="Value Pricing" />
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?>
    
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>
    <script src="//use.typekit.net/uip5dkr.js"></script>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/jsReferenceHead.php"); echo "\n"; ?> 
	<link rel="stylesheet" href="svg-workflow-for-designers.css" />
	<script>
		document.write('<link rel="stylesheet" href="typekit.css" />')		
	</script>	
    
</head>

<body id="article" class="articles">	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>
	
	<div id="article-area-wrap">
			
	    <section id="svg-workflow-for-designers" class="clearfix wrap">			
		
			<?php /* ?><h1><strong>SVG</strong> Workflow for Designers</h1><?php */ ?>

			<h1><img src="svg.svg" class="svg-logo" /> Workflow for Designers</h1>

			<hr class="sep" />
			
			<p>I&rsquo;m currently working on no shortage of responsive projects, all of which have great need for resolution-independent imagery. Since all the cool kids are going the <abbr title="Scalable Vector Graphics">SVG</abbr> route, I figured I&rsquo;d try my hand at it too. I seem to have arrived at a decent workflow for creating quick vector assets with really small file sizes. If anything, I&rsquo;m just writing this down so I can remember it for next time. </p>

			<h2>A few quick notes</h2>

			<ol>
				<li>I&rsquo;m just focusing on the asset creation here and not details about implementation on either front- or back-end.</li>
				<li>I still do Photoshop comps, so the majority of my workflow centers around Photoshop visualization of <a href="/articles/rif-element-collages/">elements</a> and/or screens.</li>
				<li>There are a ton of great solutions that can automate this for you. However, if you&rsquo;re anything like me, some of them may seem either overly complex or feel like a black box, or both. The workflow I describe below is mostly born of my desire to be anal-retentive about asset creation. Hmph.</li>
			</ol>

			<br />

			<hr class="sep" />

			<p>As an example, let&rsquo;s try and create the ever-popular social media navigation bar. However, you decide to do it&mdash;I assemble mine in Photoshop&mdash;my comp looks something like this:</p>

			<img src="i/nav.png" alt="Social media navigation" />

			<p>I&rsquo;ll then go through an measure the size of each icon in Photoshop by using the marquee tool wih the Info palette to get the actual pixel dimensions (shown zoomed in at 1200%):</p>

			<img src="i/photoshop-measuring.png" alt="Measuring dimensions in Photoshop" />

			<p>I&rsquo;ll then jump into Illustrator and create my vector graphic at that exact size:</p>

			<img src="i/illustrator-measuring.png" alt="Measuring dimensions in Illustrator" />

			<p>I&rsquo;ll make my document size the exact size of the graphic by choosing <samp>Object > Artboards > Fit to Selected Art</samp>.</p> 

			<img src="i/illustrator-fit-to-selected-art.jpg" alt="Fitting to selected art in Illustrator" />

			<p>From here, <samp>File > Save As...</samp> and choose &ldquo;<abbr>SVG</abbr>&rdquo; as the Format.</p>

			<img src="i/illustrator-save-as.png" alt="&ldquo;Save As&hellip;&rdquo; in Illustrator" />

			<p>Keep the default options checked.</p>

			<img src="i/illustrator-svg-options.png" alt="Default SVG options in Illustrator" />

			<p>You&rsquo;re going to have to create fallback <abbr title="Portable Network Graphics">PNG</abbr> graphics, so now is a good time to do that. In Illustrator, <samp>Select > All</samp> and then <samp>Edit > Copy</samp> to copy the shape to your clipboard.</p>

			<p>Switch back to Photoshop and choose <samp>File > New&hellip;</samp>. Photoshop will assume the new dimensions of the new file to be the dimensions of the shape in your clipboard, so just double check that those are the same dimensions of your vector shape.</p>

			<img src="i/photoshop-new.png" alt="New Document dialog box in Photoshop" />

			<p>Choose <samp>Edit > Paste</samp>.  When the dialog box appears, choose &ldquo;Pixels.&rdquo;</p>

			<img src="i/photoshop-paste.png" alt="Paste options in Photoshop" />

			<p>Disable the visibility of the Background layer.</p>

			<img src="i/photoshop-background-visibility.png" alt="Disabling background visibility in Photoshop" />

			<p>Choose <samp>File > Save for Web...</samp>.  Choose the <abbr>PNG</abbr>-24 Preset and make sure &ldquo;Transparency&rdquo; is enabled.</p>

			<img src="i/photoshop-save-for-web.png" alt="Save for Web in Photoshop" />

			<hr id="compare-photoshop-illustrator" class="sep" />

			<p><strong>Edit:</strong> in the comments below, <a href="#comment-937393158">Jamie Reynolds mentions</a> generating the <abbr>PNG</abbr> from Illustrator as opposed to Photoshop. However, I&rsquo;ve noticed a difference between the output; I find that Illustrator doesn&rsquo;t do as well as Photoshop does with the aliasing. Check out the bottom row of pixels here; Illustrator makes some poorer choices for clarity, hence my desire to add one more step to generate a better graphic.</p>

			<img src="i/photoshop-illustrator-comparison.png" alt="Difference between exporting PNGs from Photoshop and Illustrator" />

			<hr class="sep" />

			<p>You should now have 2 raw files: an <abbr>SVG</abbr> and a <abbr>PNG</abbr>.</p>

			<img src="i/finder-files.png" alt="Two file in Finder: an SVG and a PNG" />

			<p>Time to optimize. If you don&rsquo;t already have them, download and install <a href="http://pngmini.com/">ImageAlpha</a> and <a href="http://imageoptim.com/">ImageOptim</a>. Open ImageAlpha and drag your <abbr>PNG</abbr> into the window.</p>

			<img src="i/imagealpha.png" alt="ImageAlpha" />

			<p>Choose <samp>File > Save As...</samp> and make sure &ldquo;Optimize with ImageOptim&rdquo; is enabled. Decide whether you want to overwrite your image or create a new one. Choose Save. </p>

			<p>If ImageOptim isn&rsquo;t open, this will launch ImageOptim. You&rsquo;ll see that our original file size of 1<abbr>KB</abbr> has been reduced to 574 bytes. Huzzah! Let&rsquo;s do this for our <abbr>SVG</abbr> as well.</p>

			<img src="i/imageoptim.png" alt="ImageOptim" />

			<p>Lucky for us, there are some really smart people out there that make our jobs easy. Check out <a href="https://github.com/svg/svgo">SVGO</a>, a great command line tool for optimizing <abbr>SVG</abbr>s. If you&rsquo;re not into command line, there&rsquo;s also a <abbr title="Graphical User Interface">GUI</abbr> called <a href="https://github.com/svg/svgo-gui">SVGO GUI</a>. That&rsquo;s my weapon of choice.</p>

			<p>Just like ImageAlpha, crack open SVGO GUI and drag your <abbr>SVG</abbr> file in. <strong>Warning:</strong> this will automatically process your file, so if you still want to preserve your original, duplicate it before dragging into SVGO GUI. Voil&agrave;! Our 1<abbr>KB</abbr> <abbr>SVG</abbr> dropped down to 713 bytes.</p>

			<img src="i/svgo-gui.png" alt="SVGO GUI" />

			<p>And there you have it: a manual workflow for designers to create optimized <abbr>SVG</abbr>s and <abbr>PNG</abbr>s. Enjoy!</p>

			<footer class="bibliography">
				<p>Many thanks to <a href="http://bradfrostweb.com/">Brad Frost</a>, <a href="http://timkadlec.com/">Tim Kadlec</a>, <a href="http://gregsarault.com/">Greg Sarault</a>, <a href="http://globalmoxie.com/">Josh Clark</a>, <a href="http://jonathanstark.com/">Jonathan Stark</a>, and everyone else who provided suggestions and involvement that led to this workflow.</p>

				<p>For a great place to go next, check out Chris Coyier&rsquo;s primer on <a href="http://css-tricks.com/using-svg/">Using SVG</a>.</p>
			</footer>
			
			
	    </section><!-- #svg-workflow-for-designers -->	  	
	    
	</div><!-- /#article-area-wrap -->	

	<?php

        echo readNext('The lack of blogging about the lack of blogging', '/articles/ideas-of-march-2013/');

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
                    var disqus_identifier = 'svg-workflow-for-designers';
                    var disqus_url = 'http://danielmall.com/articles/svg-workflow-for-designers/';
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
        	        <time datetime="2013-06-19T20:18:51">Published June 19, 2013 at 8:18 <abbr title="Post Meridian">PM</abbr></time>
    	        </section><!-- /.article-info -->
    	        
    	        
    	        <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/carbon.php"); echo "\n"; ?>
	        
	        
    	    </div><!-- /.sub -->
    	    
    	    
    	</div><!-- #comments-wrap -->
	    
	        
	</div><!-- #comments -->
	
	
	<div class="wrap">
    	
    	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>
    	
    	
    </div><!-- #wrap -->
    
	
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>
