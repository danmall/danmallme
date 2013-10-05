<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head>
    <title>Contact Dan Mall</title>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/jsReferenceHead.php"); echo "\n"; ?>
</head>

<body class="contact" id="contact-landing">	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>
	
	<div class="wrap">
	
	    <section id="content">

	        <div class="main">

        	    <header>
            	    <h1 class="contact-heading">Contact Me</h1>
            	</header>
            	
            	<p>I&rsquo;m all ears. <span class="m-hide">Well, not <em>all</em> ears, because I&rsquo;d probably look something like <a id="all-ears" href="http://www.insidefurniture.com/insidefurniture/images/2008/02/21/all_ears.jpg">this</a>. That would be strange.</span></p>
            	
            	<?php if(isset ($_GET['error'])) { ?> 
            	<div class="error">
            	    <p>Something seems to have gone wrong. Please try again.</p>
            	</div><!-- .error -->
            	<?php } ?>
                
                <form id="contact-form" method="post" action="/contact/script/">
                    
                    <script>
                	document.write('<div id="all-ears-container"><img src="/i/all-ears.jpg" /></div>');
                	</script>
                    
                    <div>
                        <label for="contact-name">Name <em>(required)</em></label>
                        <input type="text" id="contact-name" name="contact-name" required />
                    </div>
                    
                    <div>
                        <label for="contact-email">Email Address <em>(required)</em></label>
                        <input type="text" id="contact-email" name="contact-email" required />
                    </div>
            
                    <div>
                        <label for="contact-website">Website</label>
                        <input type="text" id="contact-website" name="contact-website" value="http://" />
                    </div>
                    
                    <div>
                        <label for="contact-subject">Subject <em>(required)</em></label>
                        <select id="contact-subject" name="contact-subject" required>
                            <option value="">Please select a subject&hellip;</option>
                			<option value="You&rsquo;d be perfect for a project I have!">You&rsquo;d be perfect for a project I have!</option>
                			<option value="I&rsquo;d like you to write about&hellip;">I&rsquo;d like you to write about&hellip;</option>
                			<option value="I&rsquo;d like you to speak at my conference/school/company">I&rsquo;d like you to speak at my conference/school/company</option>
                			<option value="I&rsquo;m having a problem viewing your site">I&rsquo;m having a problem viewing your site</option>
                			<option value="Just saying hello">Just saying hello</option>
                			<option value="Other">Other</option>
                        </select>
                    </div>

                    <div>
                        <label for="contact-message">Comment <em>(required)</em></label>
                        <textarea id="contact-message" name="contact-message" cols="70" rows="10" required></textarea>
                    </div>
                    
                    <div>
                        <label for="contact-test">Prove you&rsquo;re human: what color is grass? <em>(required)</em></label>
                        <input type="text" id="contact-test" name="contact-test" required />
                    </div>

                    <div class="submit">
                        <input class="button" type="submit" value="Show your love" />
                    </div>

                </form>

            	
            	
            </div><!-- .main -->
            
            
            <div class="sub">
                
                <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/carbon.php"); echo "\n"; ?>
                
                <header>
                    <h1 class="sidebar-heading">Find me elsewhere</h1>
                </header>
                
                <ul class="no-marker">
                    <li id="twitter"><a href="http://twitter.com/danielmall">Twitter</a></li>
                    <li id="dribbble"><a href="http://dribbble.com/players/danielmall">Dribbble</a></li>
                    <li id="flickr"><a href="http://flickr.com/people/danielmall">Flickr</a></li>
                    <?php /* ?><li id="cargo"><a href="http://cargocollective.com/danielmall">Cargo Collective</a></li>
                    <li id="forrst"><a href="http://forrst.com/people/danielmall">Forrst</a></li><?php */ ?>
                    <li id="linkedin"><a href="http://www.linkedin.com/in/danielmall">LinkedIn</a></li>
                    <li id="readernaut"><a href="http://readernaut.com/danielmall/">Readernaut</a></li>
                </ul>
                
                <small>Icons by the illustrious <a href="http://komodomedia.com/">Rogie King</a></small>
                
            </div><!-- .sub -->
	
	
    		<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>
	
	
    	</section><!-- #content -->
	
	</div><!-- .wrap -->
	
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>