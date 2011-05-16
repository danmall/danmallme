<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/doctype.php"); echo "\n"; ?>
<head>
    <title>Articles by Dan Mall</title>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/meta.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/cssReference.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/jsReference.php"); echo "\n"; ?>
</head>

<body id="article-landing" class="articles">	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/header.php"); echo "\n"; ?>
	
	<div class="wrap">
	
    	<section id="content">

	        <div class="main">

        	    <hgroup>
            	    <h1 class="phark">Articles</h1>
            	    <h2>Yes, I know there&rsquo;s only one article here. I just launched this site; <a href="http://www.youtube.com/watch?v=1V7c-jZ4wbg&amp;feature=related">gimme a break</a>.</h2>
            	</hgroup>
                
                <?php /* ?>
            	<ol class="pagination easy-clearing no-marker">
            	    <li><mark>1</mark></li>
            	    <li><a href="/articles/2/" title="Page 2 of Articles"><b>Page</b> 2</a></li>
            	    <li><a href="/articles/3/" title="Page 3 of Articles"><b>Page</b> 3</a></li>
            	    <li><a href="/articles/4/" title="Page 4 of Articles"><b>Page</b> 4</a></li>
            	    <li><a href="/articles/5/" title="Page 5 of Articles"><b>Page</b> 5</a></li>
            	    <li><a href="/articles/6/" title="Page 6 of Articles"><b>Page</b> 6</a></li>
            	    <li><a href="/articles/7/" title="Page 7 of Articles"><b>Page</b> 7</a></li>
            	    <li><a href="/articles/8/" title="Page 8 of Articles"><b>Page</b> 8</a></li>
            	    <li><a href="/articles/9/" title="Page 9 of Articles"><b>Page</b> 9</a></li>
            	</ol><?php '/.pagination' */ ?>
            	
            	
            	<ol class="articles no-marker">            	        
        	        <li>
            	        <article>

            	            <header>
            	                <h1><a href="/articles/test/">Fourth of July, Baybuh!</a></h1>
            	            </header>

            	            <p>Fourth article excerpt.</p>

            	            <ul class="meta easy-clearing no-marker">
            	                <li class="permalink"><a href="/articles/test/"><time datetime="2010-07-18">Jul 18 2010</time></a></li>
            	                <li class="comments"><a href="/articles/test/">4 comments</a></li>
            	                <?php /* ?><li class="categories"><a href="/channel/C11">design</a>, <a href="http://mahogany.danielmall.com/channel/C10">html</a></li><?php */ ?>
            	            </ul><!-- .meta -->

            	        </article>
            	    </li>


        	        <li>
            	        <article>

            	            <header>
            	                <h1><a href="/articles/test/">The Second Article</a></h1>
            	            </header>

            	            <p>The second article.</p>

            	            <ul class="meta easy-clearing no-marker">
            	                <li class="permalink"><a href="/articles/test/"><time datetime="2010-07-16">Jul 16 2010</time></a></li>
            	                <li class="comments"><a href="/articles/test/">0 comments</a></li>
            	                <?php /* ?><li class="categories"><a href="/channel/C9">css</a></li><?php */ ?>
            	            </ul><!-- .meta -->

            	        </article>
            	    </li>


        	        <li>
            	        <article>

            	            <header>
            	                <h1><a href="/articles/test/">Test Article 1</a></h1>
            	            </header>

            	            <p>Excerpt 1, baby!</p>

            	            <ul class="meta easy-clearing no-marker">
            	                <li class="permalink"><a href="/articles/test/"><time datetime="2010-07-16">Jul 16 2010</time></a></li>
            	                <li class="comments"><a href="/articles/test/">0 comments</a></li>
            	                <?php /* ?><li class="categories"><a href="/channel/C12">typography</a></li><?php */ ?>
            	            </ul><!-- .meta -->

            	        </article>
            	    </li>
        	    </ol>
            	
            	
            </div><!-- /.main -->
            
            
            <div class="sub">
                
                <?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/carbon.php"); echo "\n"; ?>
                
                <?php /* ?>
                <header>
                    <h1 class="phark">Displaying</h1>
                </header>
                
                <ul class="no-marker">
                    <li><mark>All Categories</mark></li>
                    <li><a href="/articles/categories/design/">Design</a></li>
                    <li><a href="/articles/categories/typography/">Typography</a></li>
                    <li><a href="/articles/categories/conferences/">Conferences</a></li>
                </ul><?php */ ?>
                
            </div><!-- /.sub -->
	
	
    		<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/footer.php"); echo "\n"; ?>
	
	
    	</section><!-- /#content -->
    	
    	
    </div><!-- .wrap -->
    
	
<?php require($_SERVER["DOCUMENT_ROOT"]."/_inc/close.php"); echo "\n"; ?>