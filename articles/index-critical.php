<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head>    
    <title>Articles by Dan Mall</title>
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

    <header class="page-header pad95">

        <h1>Articles</h1>

        <nav class="page-nav">
            <ul>
                <li><a class="is-active" href="#on-this-site">On this site</a></li>
                <li><a href="#elsewhere">Elsewhere</a></li>
            </ul>
        </nav><!-- .page-nav -->

    </header><!-- .page-header -->

    <div class="dm-c-carbonWrap">
                    <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1696&amp;serve=CVYD42T&amp;placement=danielmallcom" id="_carbonads_js"></script>
                </div><!-- .dm-c-carbonWrap -->

    <section id="on-this-site" class="wrap95">

        <?php parseArticles('articles.json', 'all', 'full'); ?>

    </section><!-- #on-this-site.wrap95 -->

    <section id="elsewhere" class="wrap95">
    </section><!-- #elsewhere.wrap95 -->

    
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>    

<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>    