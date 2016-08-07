<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head profile="http://gmpg.org/xfn/11">
    <title>&ldquo;Researching Design Systems,&rdquo; an article by Dan Mall</title>
    <meta name="description" content="Researching Design Systems" />
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?>

    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/jsReferenceHead.php"); echo "\n"; ?>
    <link href='http://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="/articles/_vanilla/vanilla.css" />
    <link rel="stylesheet" href="researching-design-systems.css" />

    <?php /* ?>
	  <!-- Facebook -->
    <meta property="og:title" content="Researching Design Systems" />
    <meta property="og:description" content="An inventory of the most popular design systems out there."/>
    <meta property="og:url" content="http://danielmall.com/articles/researching-design-systems/" />
    <meta property="og:image" content="http://danielmall.com/articles/researching-design-systems/home-thumb.png" />
    <?php */ ?>

    <!-- Trying @adactio's meta: https://adactio.com/journal/9881  -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@danielmall">
    <meta name="twitter:url" property="og:url" content="http://danielmall.com/articles/researching-design-systems/">
    <meta name="twitter:title" property="og:title" content="Researching Design Systems">
    <meta name="twitter:description" property="og:description" content="An inventory of the most popular design systems out there.">
    <meta name="twitter:image" property="og:image" content="http://danielmall.com/articles/researching-design-systems/home-thumb.png">

</head>

<body id="article" class="articles">

	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>

	<div id="article-area-wrap">

	    <section class="clearfix wrap vanilla">

        <div class="intro clearfix">

          <div class="col40">

    			     <h1 class="article-header-title"><b class="word">Researching</b> <b class="word">Design</b> <b class="word">Systems</b></h1>

               <script type="text/javascript">

                  document.write('<div class="circles"><div class="circle"></div><div class="circle"></div><div class="circle"></div><div class="circle"></div><div class="circle"></div></div>');

               </script>

          </div><!-- .col40 -->

          <div class="col60">

            <p class="intro-text">A few weeks ago, I kicked off the biggest design system project I&rsquo;ve ever worked on. I&rsquo;m incredibly lucky to be working with an organization in the top 10 of the Fortune 500 list to help create a design system that will govern all of the apps and sites they create internally. I&rsquo;m also incredibly fortunate that they value doing this work well, which means our team has the proper leeway to do what we feel will produce a great outcome.</p>

            <p id="fn1-source" class="intro-text">To ensure I&rsquo;m as informed as possible, I took the opportunity to spend the first few days of the project to study like I (never) did in college. Physical and digital highlighter in hand and pixels, I pored over some of more popular design systems out there to see what insights I could glean. Here are my notes from those study sessions. <sup><a href="#fn1">1</a></sup></p>

          </div><!-- .col60 -->

        </div><!-- .intro -->

        <div class="boxes clearfix">

          <div class="col1">

            <section id="nycta" class="box box__nycta">

              <h1 class="box-headline">New York City Transit Authority Graphics Standards Manual</h1>

              <figure>
                <img src="nycta.jpg" alt="" />
                <figcaption>Image via <a href="https://www.kickstarter.com/projects/thestandardsmanual/full-size-reissue-of-the-nycta-graphics-standards/description">the original Kickstarter campaign</a></figcaption>
              </figure>

              <div class="box-quote-row"><blockquote class="box-quote">
                <p>Massimo [Vignelli] used to speak of entropy, that inescapable scientific principle that dictates that systems fall apart, that extremes revert to the mean, that every rare instance of excellence is doomed to succumb to the average&hellip; Yet something amazing happened. The system endured. It endured, I think, for one reason&hellip; This manual, with all its exhaustive detail and maniacal comprehensiveness, is the reason.</p>
              </blockquote>
              </div><!-- .box-quote-row -->

              <div class="box-quote-row"><blockquote class="box-quote">
                <p>The graphics are markedly consistent, with just enough oddities to make the whole thing interesting.</p>
              </blockquote>
              </div><!-- .box-quote-row -->

              <div class="box-quote-row"><blockquote class="box-quote">
                <p>A slim white band across the top of nearly every sign demarcates&hellip; something.</p>
              </blockquote>
              </div><!-- .box-quote-row -->

              <div class="box-quote-row"><blockquote class="box-quote">
                <p>Deferred maintenance meant borrowing against the future.</p>
              </blockquote>
              </div><!-- .box-quote-row -->

              <div class="box-quote-row"><blockquote class="box-quote">
                <p>&hellip;a larger brief: a truly unified signage system, to cover the entire subway. It would specify guidelines for not only the look of the graphics but also where they belonged and why, system-wide.</p>
              </blockquote>
              </div><!-- .box-quote-row -->

              <div class="box-quote-row"><blockquote class="box-quote">
                <p>More important than these little visual refinements, though, are the efforts toward comprehensibility. The true goal of the Graphics Standards Manual is not just to pretty things up but to direct people intelligently and swiftly.</p>
              </blockquote>
              </div><!-- .box-quote-row -->

              <div class="box-quote-row"><blockquote class="box-quote">
                <p>A logical system required graphics that had been thoroughly thought through like this&mdash;so much so that they became simple again.</p>
              </blockquote>
              </div><!-- .box-quote-row -->

              <div class="box-quote-row"><blockquote class="box-quote">
                <p>&hellip;it was a clear [solution] that any tourist could understand. It also never got done.</p>
              </blockquote>
              </div><!-- .box-quote-row -->

              <div class="box-quote-row"><blockquote class="box-quote">
                <p>&ldquo;&hellip;everything in the Unimark system is based on a one-foot-by-one-foot-grid. But in a lot of places, there&rsquo;s not enough clearance to hang a one-foot-high sign from the ceiling. So what do you do then? The book doesn&rsquo;t tell you anything.&rdquo;</p>
              </blockquote>
              </div><!-- .box-quote-row -->

              <div class="box-quote-row"><blockquote class="box-quote">
                <p>An essential part of fixing the New York City subway involved making it comprehensible.</p>
              </blockquote>
              </div><!-- .box-quote-row -->

              <div class="box-quote-row"><blockquote class="box-quote">
                <p>As good as the graphics are, plenty of people still get on the wrong train every day.</p>
              </blockquote>
              </div><!-- .box-quote-row -->

              <div class="box-quote-row"><blockquote class="box-quote">
                <p>The passenger will be given the information or direction only at the point of decision. Never before. Never after.</p>
              </blockquote>
              </div><!-- .box-quote-row -->

              <p><em>(I&rsquo;m impressed at how strong the recommendations in this manual are. We don&rsquo;t often see that level of assertiveness.)</em></p>

              <div class="box-quote-row"><blockquote class="box-quote">
                <p>Whenever new graphics standards are developed or existing standards are revised, new manual pages will be issued.</p>
              </blockquote>
              </div><!-- .box-quote-row -->

              <div class="box-quote-row"><blockquote class="box-quote">
                <p>It is vital that all signs be read easily and understood quickly. This demands the consistent use of a distinctive type face (sic) throughout the entire system.</p>
              </blockquote>
              </div><!-- .box-quote-row -->

              <p><em>(Love the strong language!)</em></p>

            </section><!-- .box -->



            <section id="ios" class="box box__ios">

              <h1 class="box-headline">iOS Human Interface Guidelines</h1>
              <p class="box-url"><a href="https://developer.apple.com/ios/human-interface-guidelines/">developer.apple.com/ios/human-interface-guidelines/</a></p>

              <p>One thing that strikes me most about the iOS Human Interface Guidelines over other design systems is that it feels as much like a marketing site as it does documentation. The other systems I&rsquo;ve reviewed feel more like specifications; though well-written, they do feel a bit dry. Perhaps, in true Apple fashion, the housing for the guidelines feels like it&rsquo;s <em>selling</em> me a bit, enticing me to use it the way a good SaaS site does. It occurs to me that any design system that needs to do some amount of evangelizing&mdash;i.e. all of them&mdash;should have a bit of sales pitch in them.</p>

              <blockquote class="box-quote">
                <p>As an app designer, you have the opportunity to deliver a killer product that rises to the top of the App Store charts. To do so, you&rsquo;ll need to meet high expectations for quality and functionality.</p>
              </blockquote>

              <p><em>(Such powerful language)</em></p>

            </section><!-- .box -->



            <section id="slds" class="box box__slds">

              <h1 class="box-headline">Salesforce Lightning Design System</h1>
              <p class="box-url"><a href="https://www.lightningdesignsystem.com/">lightningdesignsystem.com</a></p>

              <p>When I hear and talk about design systems, the quintessential one that immediately comes to mind is Lightning Design System. The Salesforce team has done a fantastic job documenting and sharing how they&rsquo;ve made this work so well for them. The first pictures in my head about what I&rsquo;d make for this project certainly resembled the Lightning Design System.</p>

              <p>Once I got into it at a granular level, I realized how general and generic everything is. For example, take this passage about tables from the <a href="https://www.lightningdesignsystem.com/guidelines/displaying-data/">Displaying Data</a> guidelines page:</p>

              <blockquote class="box-quote">
                <p>A table is the most basic format for displaying a list. Each record is represented by a single row of data that begins with the record&rsquo;s primary field and shows additional fields in subsequent columns. The data is labeled using column headers that can be interactive. This display type is appropriate for large numbers of records because you can easily scan it and navigate the list using sorting, filtering, or scrolling.</p>
              </blockquote>

              <p>That&rsquo;s a great guideline, but there&rsquo;s nothing about it that&rsquo;s specific to Salesforce developers. It&rsquo;s useful for anyone making a table, anywhere, ever.</p>

              <p>The whole site is full of great general knowledge like this. So why does this stand out as a great example of a design system for me? I eventually realized that what&rsquo;s so special to me about the Lightning Design System isn&rsquo;t the system itself as I originally thought, but how effectively the team has evangelized it. Between the talks I&rsquo;ve seen, tweets I&rsquo;ve read, and Slack channel discussions I&rsquo;ve observed, everyone is talking about Lightning. Any good design system needs people to use it, and that means it also needs people to extol its virtues so that others use it too. Lightning is likely the best example I&rsquo;ve seen of that philosophy executed well.</p>

            </section><!-- .box -->



          </div><!-- .col1 -->

          <div class="col2">

            <section id="nasa" class="box box__nasa">

              <h1 class="box-headline">National Aeronautics and Space Administration Graphics Standards Manual</h1>

              <figure>
                <img src="nasa.jpg" alt="" />
                <figcaption>Image via <a href="http://www.coolhunting.com/design/1975-NASA-graphics-standards-manual-reissue-book-kickstarter">Cool Hunting</a></figcaption>
              </figure>

              <div class="box-quote-row"><blockquote class="box-quote">
                <p>[The logo] was accepted by the arts commission, though reluctantly, with a note about its &ldquo;limited sculptural possibilities.&rdquo;</p>
              </blockquote>
              </div><!-- .box-quote-row -->

              <div class="box-quote-row"><blockquote class="box-quote">
                <p>&hellip;a graphics identity program had the potential to do for government agencies what it had done for corporations: convey modernity rather than stodginess, and forward-looking and efficient practices rather than hidebound ones.</p>
              </blockquote>
              </div><!-- .box-quote-row -->

              <div class="box-quote-row"><blockquote class="box-quote">
                <p>&ldquo;&hellip;if government publications&mdash;from tax returns to road signs&mdash;were attractive and easy to read, people would read them and respect them&hellip; the morale and the productivity of our public servants would rise dramatically if they could work in a decent environment.&rdquo;</p>
              </blockquote>
              </div><!-- .box-quote-row -->

              <div class="box-quote-row"><blockquote class="box-quote">
                <p>&hellip;the problem was not just one of type sizes and white space but of administration.</p>
              </blockquote>
              </div><!-- .box-quote-row -->

              <div class="box-quote-row"><blockquote class="box-quote">
                <p>A good graphics program could unify the 11 NASA centers, at least visually, and at the same time systematize all the documents, signs, and other materials they produced, which at the time varied from crude to nondescript.</p>
              </blockquote>
              </div><!-- .box-quote-row -->

              <div class="box-quote-row"><blockquote class="box-quote">
                <p>&ldquo;In order to succeed, a program which departs from the accustomed must have the full support of every NASA employee. Top-level management must take the lead, our experts in the field of graphic design must follow, and all of us must see that the specifics are diligently monitored to insure that standards of excellence are maintained.&rdquo;</p>
              </blockquote>
              </div><!-- .box-quote-row -->

              <p><em>(The important of good governance from the start!)</em></p>

              <div class="box-quote-row"><blockquote class="box-quote">
                <p>Perhaps because [top executives had] been left out of the process, they were irritated, and their disdain found a focus right away, because some of them flat-out hated the new logo.</p>
              </blockquote>
              </div><!-- .box-quote-row -->

              <p><em>(The importance of involving stakeholders)</em></p>

              <div class="box-quote-row"><blockquote class="box-quote">
                <p>&ldquo;Why wasn&rsquo;t [the process] handled this way from the start? I don&rsquo;t have to like it, but I can see it&rsquo;s a real program, and I&rsquo;m okay with it now.&rdquo;</p>
              </blockquote>
              </div><!-- .box-quote-row -->

            </section><!-- .box -->



            <section id="material" class="box box__material">

              <h1 class="box-headline">Material Design</h1>
              <p class="box-url"><a href="https://material.google.com/">material.google.com</a></p>

              <p>I didn&rsquo;t quite get the hype about Material Design when it first launched, largely because of the way it was announced. (I still don&rsquo;t really get it, which is why <a href="https://twitter.com/danielmall/status/752871412688424960">I asked</a>.) I actually thought <a href="https://www.youtube.com/watch?v=rrT6v5sOwJg">the launch video</a> was a parody. The language the designers used might as well have been announcing major scientific breakthrough, not the way a few shapes and colors have been arranged on a screen. That&rsquo;s not to knock anyone, but, as a fairly pragmatic designer, that type of pontificating doesn&rsquo;t resonate with me. It seems like a lot of sizzle without the steak. Perhaps that&rsquo;s because the designers I learned from often had incredible foundations and concepts for all of their work. (Seriously, read the amazing comment thread on <a href="http://designologue.com/view/contrast/197/850">this Designologue</a>, kids.)</p>

              <p>I&rsquo;ll also admit that there&rsquo;s a bit of envy there too. I&rsquo;ve instructed many a design intern or apprentice to consider consistent light sources for their interfaces by shining a spotlight of physical elements on their desks and paying specific attention to the changes in perspectives, shadows, and more. It always gets my goat when something I&rsquo;ve been doing for a long time gets branded as new. Props to the Google Design team for recognizing the power of wrapping an impactful narrative around common practice.</p>

              <p>It wasn&rsquo;t until I watched <a href="https://design.google.com/videos/palette-perfect/">the video about color theory</a> that I heard a little gem I finally could connect with. As the opening line, the narrator says:</p>

              <blockquote class="box-quote">
                <p>There are no wrong colors.</p>
              </blockquote>

              <p>It dawned on me: <strong>the beauty of Material Design is that it&rsquo;s nearly impossible to make a bad design, even&mdash;or especially&mdash;if you&rsquo;re not a designer.</strong> I realized that it&rsquo;s the opposite paradigm of the type of design I admire. Take, for instance, the sites you&rsquo;d come across in a gallery like <a href="https://thefwa.com/">The FWA</a> or <a href="http://www.awwwards.com/">Awwwards</a>. Many of those are beautifully art-directed and have a very strong and unique aesthetic sense. But I&rsquo;ve had the privilege of knowing and talking to some of the designers whose sites regularly get featured there. Many of them design based on intuition and what feels right to them from their vast experience, but struggle to articulate why it works. That&rsquo;s not replicable or transferable to anyone else, which is perhaps the most desired quality of a design system. That kind of work is often about a <em>strong aesthetic with little rationale</em>, but the key to Material Design seems to be <em>very strong opinions about a very ordinary style</em>.</p>

              <p>While I could do without the high-falutin&rsquo; pomp and circumstance, I can certainly appreciate how a very high level of philosophy and principles can be a compelling rallying cry for adoption.</p>

            </section><!-- .box -->




            <section id="airbnb" class="box box__airbnb">

              <h1 class="box-headline">Airbnb Design Language System</h1>

              <p>Though I appreciate the <a href="http://airbnb.design/building-a-visual-language/">great writing</a> the Airbnb team has done about their new design system, it's hard to get much more than surface insights without being able to test drive <a href="http://www.fastcodesign.com/3060312/airbnbs-secret-tool-for-designing-for-every-person-on-the-planet">Airshots</a>. But even without seeing the tactical output, this nugget from <a href="http://airbnb.design/the-way-we-build/">VP of Design Alex Schleifer&rsquo;s post</a> really resonated with me:</p>

              <blockquote class="box-quote">
                <p>You can&rsquo;t innovate on products without first innovating the way you build them</p>
              </blockquote>

              <p>I love that they&rsquo;re addressing the important fact that good tools for working with design systems don&rsquo;t exist yet.</p>

            </section><!-- .box -->




            <section id="ibm" class="box box__ibm">

              <h1 class="box-headline">IBM Design Language</h1>
              <p class="box-url"><a href="http://www.ibm.com/design/language/">ibm.com/design/language/</a></p>

              <p>There are 2 specific things I really appreciate about the IBM Design Language:</p>

              <p>First, they make it clear right up front that the purpose of their design system is to foster a consistency that supports their brand:</p>

              <blockquote class="box-quote">
                <p>The IBM Design Language is a set of living guidelines that communicates our brand promise through our products&rsquo; experiences.</p>
              </blockquote>

              <p>That brand promise is then reinforced by asking the design system user if what they&rsquo;re making looks, sounds, thinks, and performs like IBM. A question like, &ldquo;Does the visual design enhance people&rsquo;s understanding of how the world works?&rdquo; has a strong point of view; it states the job design has to do, which also means it implies what the design does <em>not</em> have to do. I love that!</p>

              <p>The other thing I love about the IBM Design Language is that the site looks like some put thought into the job of the site itself. It eschews what is becoming the standard &ldquo;design system look&rdquo; of left-side (and sometimes fixed) navigation and content to the right. It feels more like a marketing site than a piece of documentation, which I&rsquo;m leaning more and more toward as the right idea for my client.</p>

            </section><!-- .box -->


          </div><!-- .col2 -->

        </div><!-- .clearfix -->


        <section class="wrap">

          <p class="intro-text">I&rsquo;ve reviewed a few more design systems like the <a href="http://harmony.intuit.com/">Harmony Design System</a> from Intuit, the <a href="https://developer.microsoft.com/en-us/windows/design/microsoft-design-language">Microsoft Design Language</a>, the <a href="https://standards.usa.gov/">U.S. Web Design Standards</a>, <a href="http://origami.ft.com/">Origami</a> by the Financial Times, and a few others, and I&rsquo;m definitely finding more similarities than discrepancies.</p>

          <p class="intro-text">The biggest observation I&rsquo;ve had is that almost every one includes principles and guidelines that are extremely general. That&rsquo;s totally understandable; I mean, at some point, a good tabset is just a good tabset. But, while it&rsquo;s useful for any reader to understand how to make a better website in general, I think these are a missed opportunity. The job of the Microsoft Design Language is not only to help a designer or developer to create a great app, but to help them create a great <em>Microsoft</em> app. What makes a great Microsoft app? How is a great Microsoft app different than a great Google app? This is the kind of thing a design system should have guidelines for: perspective, point of view, extending <a href="http://danielmall.com/articles/on-creative-direction/">creative direction</a> to everyone that decides to build something with the design system. That stuff should be baked in. Otherwise, we all might as well use Material Design and call it a day.</p>

          <p class="intro-text">I think that&rsquo;ll be my first metric for success. If the design system I create for my client can be specific about what makes a great site or app <em>specifically for them</em> and why it&rsquo;s better in-context than any one of the systems listed above, I&rsquo;d say we&rsquo;re headed in the right direction.</p>

          <p class="intro-text">I realize that&rsquo;s a tall order and I&rsquo;m a short guy, but that&rsquo;s never stopped me before.</p>

        </section><!-- .wrap -->


        <footer class="footnote wrap">
          <ol>
            <li id="fn1">My research style leans heavily toward capturing phrases that stand out to me. I&rsquo;ve been a long-time admirer of how <a href="https://twitter.com/susanjrobertson">Susan J. Robertson</a> records passages in her <a href="https://www.susanjeanrobertson.com/reading/">book reviews</a>, so I&rsquo;ve taken a similar approach in these notes. <a class="footnote-arrow" href="#fn1-source">&#8617;</a></li>
            <li id="fn2">Also published on <a href="https://medium.com/@danielmall/researching-design-systems-2e462d28bc70#.6ukgszy7b">Medium</a>.</li>
          </ol>
        </footer><!-- .footnote -->

	    </section><!-- .vanilla -->

	</div><!-- /#article-area-wrap -->

	<?php

        echo readNext('Apprenticeships', '/articles/apprenticeships-superfriendly-academy/');

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
                    var disqus_identifier = 'researching-design-systems';
                    var disqus_url = 'http://danielmall.com/articles/researching-design-systems/';
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
        	        <time datetime="2016-08-06T19:46:00">Published August 6, 2016 at 07:46 <abbr title="Post Meridian">PM</abbr></time>
    	        </section><!-- /.article-info -->


    	        <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/carbon.php"); echo "\n"; ?>


    	    </div><!-- /.sub -->


    	</div><!-- #comments-wrap -->


	</div><!-- #comments -->


	<div class="wrap">

    	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>


    </div><!-- #wrap -->

    <?php /* ?><script src="jquery.fitvids.js"></script><?php */ ?>
    <script>

      var time1 = 1000;
      var circle1Interval = setInterval(function() {

        var opacityRandom = Math.floor(Math.random()*5);
        var scaleRandom = Math.floor(Math.random()*5);

        $('.circle:eq(0)').removeClass('scale0 scale1 scale2 scale3 scale4 opacity0 opacity1 opacity2 opacity3 opacity4').addClass('scale' + scaleRandom + ' opacity' + opacityRandom);

      }, time1);


      var time2 = 1500;
      var circle2Interval = setInterval(function() {

        var opacityRandom = Math.floor(Math.random()*5);
        var scaleRandom = Math.floor(Math.random()*5);

        $('.circle:eq(1)').removeClass('scale0 scale1 scale2 scale3 scale4 opacity0 opacity1 opacity2 opacity3 opacity4').addClass('scale' + scaleRandom + ' opacity' + opacityRandom);

      }, time2);


      var time3 = 400;
      var circle1Interval = setInterval(function() {

        var opacityRandom = Math.floor(Math.random()*5);
        var scaleRandom = Math.floor(Math.random()*5);

        $('.circle:eq(2)').removeClass('scale0 scale1 scale2 scale3 scale4 opacity0 opacity1 opacity2 opacity3 opacity4').addClass('scale' + scaleRandom + ' opacity' + opacityRandom);

      }, time3);


      var time4 = 1200;
      var circle4Interval = setInterval(function() {

        var opacityRandom = Math.floor(Math.random()*5);
        var scaleRandom = Math.floor(Math.random()*5);

        $('.circle:eq(3)').removeClass('scale0 scale1 scale2 scale3 scale4 opacity0 opacity1 opacity2 opacity3 opacity4').addClass('scale' + scaleRandom + ' opacity' + opacityRandom);

      }, time4);


      var time5 = 800;
      var circle5Interval = setInterval(function() {

        var opacityRandom = Math.floor(Math.random()*5);
        var scaleRandom = Math.floor(Math.random()*5);

        $('.circle:eq(4)').removeClass('scale0 scale1 scale2 scale3 scale4 opacity0 opacity1 opacity2 opacity3 opacity4').addClass('scale' + scaleRandom + ' opacity' + opacityRandom);

      }, time5);

    </script>


<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>
