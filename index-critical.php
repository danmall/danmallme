<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head>    
    <title>Dan Mall / Creative Director &amp; Advisor</title>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?>        

    <?php 
        /*if ( isset($_COOKIE['full-css']) ) { 
            
            // http://iamsteve.me/blog/entry/using-cookies-to-serve-critical-css-for-first-time-visits
            require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); 
            echo "\n";
        } else { */
    ?>
    <style><?php require($_SERVER["DOCUMENT_ROOT"]."/-/c/critical-manual.min.css"); ?></style>
    <script>
        function loadCSS(e,n,o,t){"use strict";var d=window.document.createElement("link"),i=n||window.document.getElementsByTagName("script")[0],r=window.document.styleSheets;return d.rel="stylesheet",d.href=e,d.media="only x",t&&(d.onload=t),i.parentNode.insertBefore(d,i),d.onloadcssdefined=function(e){for(var n,o=0;o<r.length;o++)r[o].href&&r[o].href===d.href&&(n=!0);n?e():setTimeout(function(){d.onloadcssdefined(e)})},d.onloadcssdefined(function(){d.media=o||"all"}),d} function cookie(e,i,o){if(void 0===i){var t="; "+window.document.cookie,n=t.split("; "+e+"=");return 2===n.length?n.pop().split(";").shift():null}i===!1&&(o=-1);var r;if(o){var c=new Date;c.setTime(c.getTime()+24*o*60*60*1e3),r="; expires="+c.toGMTString()}else r="";window.document.cookie=e+"="+i+r+"; path=/"} 
        //if( ! cookie( 'full-css' ) ) { loadCSS( "/-/c/main.min.css" ); cookie( 'full-css', true, 7 ); }
        loadCSS( "/-/c/main.min.css");
    </script>
    <noscript><?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?></noscript>

    <?php //} ?>       

</head>
<body>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/nav.php"); echo "\n"; ?>

    <section id="preamble">

	    <h1>Dan Mall</h1>
	    <h2>Creative Director &amp; Advisor</h2>

	    <p class="intro">I&rsquo;m <strong>Dan Mall</strong>, a creative director and advisor from Philly.  I&rsquo;m the director of <a href="http://superfriend.ly/">SuperFriendly</a>, a design collaborative that brings exquisite creative direction &amp; design to the world&rsquo;s most important and interesting organizations. I&rsquo;m an enthralled husband &amp; dad and co-founder of <a href="http://typedia.com/">Typedia</a> (an encyclopedia for typefaces) and <a href="http://businessology.biz/">Businessology</a> (a podcast and workshop series teaching designers how to run better businesses). You can find me on Twitter at <a href="http://twitter.com/danielmall">@danielmall</a>.</p>

	</section><!-- #preamble -->

    <section id="pd-book">

    	<h1>I wrote a book.</h1>

    	<p>Curabitur blandit tempus porttitor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec id elit non mi porta gravida at eget metus.</p>
    	<p>Nulla vitae elit libero, a pharetra augue. Nulla vitae elit libero, a pharetra augue. Maecenas faucibus mollis interdum. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo.</p>

    	<!-- todo: insert PD book image with AJAX -->

    </section><!-- #pd-book -->

    <section id="testimonials" class="ecru-bg pad95">

    	<blockquote>
    		<p>Few designers can capture a brand&rsquo;s essence and deliver a design that takes that brand to a new level. Dan did that at the pitch meeting.</p>
			<address><strong>Rob Walker</strong>, Former Digital Marketing Manager, Crayola</address>
    	</blockquote>

    	<blockquote>
    		<p>I promise that Dan Mall is more inspiring and talented than you.</p>
			<address><strong>Chris Matthews</strong>, Strategy, Apple</address>
    	</blockquote>

    	<blockquote>
    		<p>Dan is an amazing teacher and mentor to everyone he works with&mdash;no matter the discipline or level. My only regret about working with Dan is that it didn&rsquo;t last longer.</p>
			<address><strong>Karina Elise</strong>, Creative Lead, Google</address>
    	</blockquote>

    	<blockquote>
    		<p>Dan certainly has one of the best minds for design in our industry, but he takes it so much further in his unparalleled grace and his seamless collaboration with his team and his clients.</p>
			<address><strong>Mike Kenny</strong>, Director of User Experience, Code &amp; Theory</address>
    	</blockquote>

    </section><!-- #testimonials -->

    <section id="articles">

    	<h1>Latest Articles</h1>

        <?php parseArticles($_SERVER["DOCUMENT_ROOT"].'/articles/articles.json', 5, 'abridged'); ?>

    	<p><a href="/articles/">See all articles</a></p>

    </section><!-- #articles -->

<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>    

<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>