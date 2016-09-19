<?php
    $page = 'home';
    require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n";
?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head>
    <title>Dan Mall  //  Creative Direction &bull; Art Direction &bull; Design &bull; Strategy</title>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>
    <?php /* ?>
    <!-- Thanks, @rem: http://remysharp.com/2007/05/18/add-twitter-to-your-blog-step-by-step/ -->
    <script src="http://twitterjs.googlecode.com/svn/trunk/src/twitter.min.js"></script>


    <script src="/-/j/libs/chirp.min.js"></script>
    <?php */ ?>

    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/jsReferenceHead.php"); echo "\n"; ?>

</head>

<body class="home" id="home">

    <?php /* <img id="logo" src="/i/logo.png" alt="Dan Mall" /> */ ?>

	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>

	<div class="content" class="easy-clearing">

		<section id="latest-articles" class="home-row">

		    <div class="inner">

    		    <h1 class="stacked-heading">Latest Articles</h1>

    		    <ol class="no-marker">

                    <li class="home-item position1">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/accountability/">
                                    <img class="round-image" src="/articles/accountability/home-thumb.jpg" alt="" />
                                    <span class="home-item-name">Accountability</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">A 3-step formula for accountability between yourself and those you interact with.</p>
                        </article><!-- .home-item-article -->
                    </li>

                    <li class="home-item position2">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/superbooked/">
                                    <img class="round-image" src="/articles/superbooked/home-thumb.png" alt="" />
                                    <span class="home-item-name">SuperBooked</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">Announcing SuperBooked, a service that helps you find work with a little help from your friends.</p>
                        </article><!-- .home-item-article -->
                    </li>

                    <li class="home-item position3">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/researching-design-systems/">
                                    <img class="round-image" src="/articles/researching-design-systems/home-thumb.png" alt="" />
                                    <span class="home-item-name">Researching Design Systems</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">An inventory of the most popular design systems out there.</p>
                        </article><!-- .home-item-article -->
                    </li>

                    <li class="home-item position4">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/apprenticeships-superfriendly-academy/">
                                    <img class="round-image" src="/articles/apprenticeships-superfriendly-academy/home-thumb.png" alt="" />
                                    <span class="home-item-name">Apprenticeships</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">Apprenticeships are a fantastic solution to bridge the gap between opportunity in tech and those in need of change.</p>
                        </article><!-- .home-item-article -->
                    </li>

                    <?php /* ?>

                    <li class="home-item position4">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/thanks-mike-davidson/">
                                    <img class="round-image" src="/articles/thanks-mike-davidson/mike.jpg" alt="" />
                                    <span class="home-item-name">Thanks, Mike Davidson</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">Great writing from Mike really brings me back.</p>
                        </article><!-- .home-item-article -->
                    </li>

                    

                    <li class="home-item position4">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/selling-design-systems/">
                                    <img class="round-image" src="/articles/selling-design-systems/boards.jpg" alt="" />
                                    <span class="home-item-name">Selling Design Systems</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">How to convince your boss that a design system is a good idea.</p>
                        </article><!-- .home-item-article -->
                    </li>


                    

                    <li class="home-item position4">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/oil-change-pizza/">
                                    <img class="round-image" src="/articles/oil-change-pizza/home-thumb.png" alt="" />
                                    <span class="home-item-name">Oil Change &amp; Pizza</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">Death to &ldquo;full service.&rdquo;</p>
                        </article><!-- .home-item-article -->
                    </li>



                    <li class="home-item position4">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/permission-slips/">
                                    <img class="round-image" src="/articles/permission-slips/home-thumb.png" alt="" />
                                    <span class="home-item-name">Permission Slips</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">To overcome your fears, you need [permission] to try something different.</p>
                        </article><!-- .home-item-article -->
                    </li>



                    <li class="home-item position4">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/content-display-patterns/">
                                    <img class="round-image" src="/articles/content-display-patterns/home-thumb.png" alt="" />
                                    <span class="home-item-name">Content &amp; Display Patterns</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">Embracing the difference in pattern types is the key to making a modular design system infinitely more scalable.</p>
                        </article><!-- .home-item-article -->
                    </li>



                    <li class="home-item position4">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/titles-are-important/">
                                    <img class="round-image" style="border-radius: 0;" src="/articles/titles-are-important/home-thumb.png" alt="" />
                                    <span class="home-item-name">Titles are Important</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">Don&rsquo;t believe anyone that tells you otherwise.</p>
                        </article><!-- .home-item-article -->
                    </li>



                    <li class="home-item position4">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/interviewing-designers/">
                                    <img class="round-image" style="border-radius: 0;" src="/articles/interviewing-designers/home-thumb.png" alt="" />
                                    <span class="home-item-name">Interviewing Designers</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">Some tips on making the right hire.</p>
                        </article><!-- .home-item-article -->
                    </li>



                    <li class="home-item position4">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/i-dont-have-time/">
                                    <img class="round-image" src="/articles/i-dont-have-time/home-thumb.svg" alt="" />
                                    <span class="home-item-name">I don&rsquo;t have time</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">That magical phrase that gives you permission to brush off the things you really want to do.</p>
                        </article><!-- .home-item-article -->
                    </li>



                    <li class="home-item position4">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/epicurrence/">
                                    <img class="round-image" src="/articles/epicurrence/logo.svg" alt="" />
                                    <span class="home-item-name">Epicurrence</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">Epicurrence was the most beautiful, energizing, comfortable, and relaxing uncomfortable experience I&rsquo;ve had in a long time.</p>
                        </article><!-- .home-item-article -->
                    </li>



                    <li class="home-item position4">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/time-for-work/">
                                    <img class="round-image" src="/articles/time-for-work/home-thumb.jpg" alt="" />
                                    <span class="home-item-name">Time for Work</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">What&rsquo;s the minimum amount of time we should be working per week?</p>
                        </article><!-- .home-item-article -->
                    </li>




                    <li class="home-item position4">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/switch-creative-block/">
                                    <img class="round-image" src="/articles/switch-creative-block/home-thumb2.png" alt="" />
                                    <span class="home-item-name">Switch</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">Dealing with creative block.</p>
                        </article><!-- .home-item-article -->
                    </li>



                    <li class="home-item position4">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/day-one-with-android/">
                                    <img class="round-image" src="/articles/day-one-with-android/home-thumb.jpg" alt="" />
                                    <span class="home-item-name">Day One With Android</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">After nine years of using iOS1 &ndash; iOS7 across iPhones 1 &ndash; 6, I&rsquo;m switching to Android to gain a new perspective.</p>
                        </article><!-- .home-item-article -->
                    </li>



                    <li class="home-item position4">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/finished-businessology/">
                                    <img class="round-image" src="/articles/businessology-roadshow/home-thumb.png" alt="" />
                                    <span class="home-item-name">Finished Business(ology)</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">The time has come for me to step away from Businessology.</p>
                        </article><!-- .home-item-article -->
                    </li>



                    <li class="home-item position4">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/finding-clients/">
                                    <img class="round-image" src="/articles/finding-clients/home-thumb.png" alt="" />
                                    <span class="home-item-name">Finding Clients</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">Like magnets and archaelogists.</p>
                        </article><!-- .home-item-article -->
                    </li>



                    <li class="home-item position4">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/pricing/">
                                    <img class="round-image" src="/articles/pricing/home-thumb.png" alt="" />
                                    <span class="home-item-name">Pricing</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">How to start charging for your work.</p>
                        </article><!-- .home-item-article -->
                    </li>



                    <li class="home-item position3">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/how-to-make-a-performance-budget/">
                                    <img class="round-image" src="/articles/how-to-make-a-performance-budget/home-thumb.png" alt="" />
                                    <span class="home-item-name">How to Make a Performance Budget</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">A tangible way to approximate how your pages should perform.</p>
                        </article><!-- .home-item-article -->
                    </li>

                    <li class="home-item position4">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/brooklyn-beta-2014/">
                                    <img class="round-image" src="/articles/brooklyn-beta-2014/home-thumb.png" alt="" />
                                    <span class="home-item-name">Brooklyn Beta 2014</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">Celebrating my favorite industry event ever.</p>
                        </article><!-- .home-item-article -->
                    </li>



                    <li class="home-item position4">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/creative-cloud-libraries/">
                                    <img class="round-image" src="/articles/creative-cloud-libraries/home-thumb.png" alt="" />
                                    <span class="home-item-name">Creative Cloud Libraries</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">A new Adobe feature for designing systems.</p>
                        </article><!-- .home-item-article -->
                    </li>



                    <li class="home-item position4">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/sketchlive/">
                                    <img class="round-image" src="/articles/sketchlive/home-thumb.png" alt="" />
                                    <span class="home-item-name">#sketchlive</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">A live 2-day tour through learning Sketch.</p>
                        </article><!-- .home-item-article -->
                    </li>


                    <li class="home-item position4">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/businessology-roadshow/">
                                    <img class="round-image" src="/articles/businessology-roadshow/home-thumb.png" alt="" />
                                    <span class="home-item-name">The Businessology Roadshow</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">Learn about the business of design in person.</p>
                        </article><!-- .home-item-article -->
                    </li>

                    <li class="home-item position4">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/get-comfortable/">
                                    <img class="round-image" src="/articles/get-comfortable/home-thumb.png" alt="" />
                                    <span class="home-item-name">Get Comfortable</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">Some advice about public speaking.</p>
                        </article><!-- .home-item-article -->
                    </li>

                    <li class="home-item position4">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/easy-hangouts/">
                                    <img class="round-image" src="/articles/easy-hangouts/home-thumb.png" alt="" />
                                    <span class="home-item-name">The Easiest Way to Start a Hangout</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">Use Google Calendar.</p>
                        </article><!-- .home-item-article -->
                    </li>

                    <li class="home-item position4">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/radio-free-europe-open-redesign/">
                                    <img class="round-image" src="/articles/radio-free-europe-open-redesign/home-thumb.png" alt="" />
                                    <span class="home-item-name">Radio Free Europe</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">An open redesign.</p>
                        </article><!-- .home-item-article -->
                    </li>


                    <li class="home-item position4">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/visual-inventory/">
                                    <img class="round-image" src="/articles/visual-inventory/home-thumb.png" alt="" />
                                    <span class="home-item-name">Visual Inventory</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">A design deliverable for the post-PSD era of responsive design.</p>
                        </article><!-- .home-item-article -->
                    </li>

                    <li class="home-item position4">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/on-creative-direction/">
                                    <img class="round-image" src="/articles/on-creative-direction/home-thumb.png" alt="" />
                                    <span class="home-item-name">On Creative Direction</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">A primer on creative direction as compared to art direction and design&hellip; and what they all mean in a digital context.</p>
                        </article><!-- .home-item-article -->
                    </li>

                    <li class="home-item position4">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/net-awards-2014/">
                                    <img class="round-image" src="/articles/net-awards-2014/home-thumb.png" alt="" />
                                    <span class="home-item-name">The Net Awards 2014</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">How I&rsquo;m voting.</p>
                        </article><!-- .home-item-article -->
                    </li>

                    <li class="home-item position4">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/how-to-get-the-work-you-want/">
                                    <img class="round-image" src="/articles/how-to-get-the-work-you-want/home-thumb.png" alt="" />
                                    <span class="home-item-name">How to Get the Work You Want</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">Advice for anyone.</p>
                        </article><!-- .home-item-article -->
                    </li>

                    <li class="home-item position4">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/techcrunch-responsive-redesign/">
                                    <img class="round-image" src="/articles/techcrunch-responsive-redesign/home-thumb.png" alt="" />
                                    <span class="home-item-name">TechCrunch Responsive Redesign</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">The story of the new responsive TechCrunch.</p>
                        </article><!-- .home-item-article -->
                    </li>

                    <li class="home-item position4">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/responsive-mobile-entertainment-weekly/">
                                    <img class="round-image" src="/articles/responsive-mobile-entertainment-weekly/home-thumb.png" alt="" />
                                    <span class="home-item-name">The Responsive Mobile Entertainment Weekly Site</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">New work on a responsive mobile site for Entertainment Weekly.</p>
                        </article><!-- .home-item-article -->
                    </li>

                    <li class="home-item position4">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/now-with-responsive/">
                                    <img class="round-image" src="/articles/now-with-responsive/home-thumb.png" alt="" />
                                    <span class="home-item-name">Now with Responsive!</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">Two years later, this site is finally responsive.</p>
                        </article><!-- .home-item-article -->
                    </li>


                    <li class="home-item position4">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/progressive-enhancement/">
                                    <img class="round-image" src="/articles/progressive-enhancement/home-thumb.png" alt="" />
                                    <span class="home-item-name">Progressive Enhancement</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">Still alive and kickin&rsquo;.</p>
                        </article><!-- .home-item-article -->
                    </li>

                    <li class="home-item position4">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/how-to-build-an-app/">
                                    <img class="round-image" src="/articles/how-to-build-an-app/home-thumb.png" alt="" />
                                    <span class="home-item-name">How to Build an App</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">Creating an app in public. Maybe.</p>
                        </article><!-- .home-item-article -->
                    </li>

                    <li class="home-item position4">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/prequalifying-clients/">
                                    <img class="round-image" src="/articles/prequalifying-clients/home-thumb.jpg" alt="" />
                                    <span class="home-item-name">Prequalifying Clients</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">Questions, answers, and hidden answers.</p>
                        </article><!-- .home-item-article -->
                    </li>
                    <li class="home-item position4">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/svg-workflow-for-designers/">
                                    <img class="round-image" src="/articles/svg-workflow-for-designers/home-thumb.png" alt="" />
                                    <span class="home-item-name">SVG Workflow for Designers</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">Create quick vector assets with really small file sizes.</p>
                        </article><!-- .home-item-article -->
                    </li>
                    <li class="home-item position3">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/ideas-of-march-2013/">
                                    <img class="round-image" src="/articles/ideas-of-march-2013/home-thumb.png" alt="" />
                                    <span class="home-item-name">The Ideas of March</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">The lack of blogging about the lack of blogging.</p>
                        </article><!-- .home-item-article -->
                    </li>
                    <li class="home-item position4">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/articles/value-pricing/">
                                    <img class="round-image" src="/articles/value-pricing/home-thumb.jpg" alt="" />
                                    <span class="home-item-name">Value Pricing</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">Prepping for the next episode of The Businessology Show.</p>
                        </article><!-- .home-item-article -->
                    </li>
                    <?php */ ?>
    			</ol>

    			<p class="more"><a href="/articles/">See all<b class="more-qualifier"> Latest Articles</b></a></p>

    		</div><!-- /.inner -->

		</section><!-- /#latest-articles -->


		<?php /* ?><section id="links" class="home-row">

		    <div class="inner">

    		    <h1 class="phark">Links</h1>

    		    {exp:channel:entries channel="articles" limit="4" show_future_entries="yes" orderby="date" sort="desc"}

                		{if count == 1}<ol class="articles no-marker easy-clearing">{/if}

                            {if article-format == "Link"}
                	        <li>
                    	        <article>
                    	            {article-excerpt}
                    	            <p class="meta permalink"><a href="{title_permalink="articles/article"}"><time datetime="{entry_date format="%Y-%m-%d"}">{entry_date format="%M %d %Y"}</time></a></p>

                    	        </article>
                    	    </li>
                    	    {/if}

                	    {if count == total_results}</ol>{/if}

        		{/exp:channel:entries}

        		<p class="more"><a href="#">See all</a></p>

			</div><!-- /.inner -->

		</section><!-- /#links --><?php */ ?>

        <section id="work" class="home-row">

            <div class="inner">

                <h1 class="stacked-heading">Featured Work</h1>

                <ol class="no-marker">

                    <li class="home-item position1">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/work/crayola/">
                                    <img class="round-image" src="/-/i/home/crayola-thumb.jpg" alt="" />
                                    <span class="home-item-name">Crayola</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">Free the &ldquo;what if.&ldquo;</p>
                        </article><!-- .home-item-article -->
                    </li>
                    <li class="home-item position2">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/work/star-wars/">
                                    <img class="round-image" src="/-/i/home/star-wars.jpg" alt="" />
                                    <span class="home-item-name">Star Wars</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">Creating a universe for a universe.</p>
                        </article><!-- .home-item-article -->
                    </li>
                    <li class="home-item position3">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/work/activate/">
                                    <img class="round-image" src="/-/i/home/activate2.jpg" alt="" />
                                    <span class="home-item-name">Activate</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">A turn for the better.</p>
                        </article><!-- .home-item-article -->
                    </li>
                    <li class="home-item position4">
                        <article class="home-item-article">
                            <h2 class="home-item-headline">
                                <a href="/work/morsel/">
                                    <img class="round-image" src="/-/i/home/morsel2.jpg" alt="" />
                                    <span class="home-item-name">Morsel</span>
                                </a>
                            </h2><!-- .home-item-headline -->
                            <p class="home-item-description">Your daily step toward better health.</p>
                        </article><!-- .home-item-article -->
                    </li>
                </ol>

                <p class="more"><a href="/work/">See all<b class="more-qualifier"> Featured Work</b></a></p>

            </div><!-- /.inner -->


        </section><!-- /#work -->


        <?php /* ?>
		<section id="dribbble" class="home-row">

			<div class="inner">

				<h1 class="stacked-heading">From Dribbble</h1>

				<ol class="no-marker">

					<?php

						/*
							http://martinbean.github.com/dribbble-php/
							https://github.com/martinbean/dribbble-php
						*//*

						//require 'php/dribbble.php';
						require($_SERVER["DOCUMENT_ROOT"]."/php/dribbble.php");

						$dribbble = new Dribbble();

						try {
						    $my_shots = $dribbble->get_player_shots('danielmall');
							$i = 1;

                            foreach ($my_shots->shots as $shot) {
                                if($i <= 4){
                                    if($i > 1){
                                        echo "\n\t\t\t\t\t";
                                    }
                                    echo '<li class="home-item position' . $i . '">';
                                        echo "\n\t\t\t\t\t\t";
                                        echo '<h2 class="home-item-headline">';
                                        echo "\n\t\t\t\t\t\t\t";
                                            echo '<a href="' . $shot->url . '">';
                                            echo "\n\t\t\t\t\t\t\t\t";
                                                echo '<img class="round-image offscreen" src="' . $shot->image_url . '" alt="" />';
                                                echo "\n\t\t\t\t\t\t\t\t\t";
                                                    echo '<b class="home-item-dribbble" style="background-image: url(' . $shot->image_url  . ');"></b>';
                                                    echo "\n\t\t\t\t\t\t\t\t\t\t";
                                                        echo '<span class="home-item-name">' . $shot->title . '</span>';
                                                        echo "\n\t\t\t\t\t\t\t";
                                            echo '</a>';
                                            echo "\n\t\t\t\t\t\t";
                                        echo '</h2>';
                                        echo "\n\t\t\t\t\t";
                                    echo '</li>';
                                    echo "\n";
                                    $i++;
                                }else{
                                    break;
                                }
                            }
						}
						catch (DribbbleException $e) {
						    echo 'Error: ' . $e->getMessage();
						}

					?>
				</ol>

				<p class="more"><a href="http://dribbble.com/danielmall">See all<b class="more-qualifier"> from Dribbble</b></a></p>

			</div><!-- .inner -->

		</section><!-- #dribbble -->
        <?php */ ?>

    <?php /* ?>
    <script>document.write('<section id="tweet" class="home-row"><div class="inner"><h1 class="phark">Latest Tweets</h1><div id="tweets">');</script>
		<script>
			Chirp({
				user:'danielmall',
				max:3,
				retweets: false,
				replies: false,
				templates: {
					base: '<ul>{{tweets}}</ul>',
					tweet: '<li><div class="animation-clip-container"><article><p>{{html}}</p><p class="meta"><a href="http://twitter.com/danielmall/statuses/{{id_str}}/"><time>{{time_ago}}</time></a></p></article></div></li>'
				}
			});
		</script>
    <script>document.write('</div><p class="more">from <a href="http://twitter.com/danielmall">@danielmall</a></p></div></section>');</script>


		    </div>
		</section><!-- #tweet -->
			<?php */ ?>


        <section id="popular" class="home-row">

            <div class="inner">

                <h1 class="stacked-heading">Popular on this site</h1>

                <ol class="no-marker popular-list">
                    <li class="popular4"><a href="/articles/responsive-line-breaks/">Responsive Line Breaks</a></li>
                    <li class="popular4"><a href="/articles/on-creative-direction/">On Creative Direction</a></li>
                    <li class="popular4"><a href="/articles/responsive-mobile-entertainment-weekly/">The Responsive Mobile Entertainment Weekly</a></li>
                    <li class="popular3"><a href="/articles/apprenticeships-superfriendly-academy/">Apprenticeships</a></li>
                    <li class="popular3"><a href="/articles/prequalifying-clients/">Prequalifying Clients</a></li>
                    <li class="popular3"><a href="/work/star-wars/">Star Wars</a></li>
                    <li class="popular2"><a href="/articles/how-to-get-the-work-you-want/">How to Get the Work You Want</a></li>
                    <li class="popular2"><a href="/articles/the-post-psd-era/">The Post-PSD Era: A problem of Expectations</a></li>
                    <li class="popular2"><a href="/work/activate/">Activate</a></li>
                    <li class="popular1"><a href="/articles/pricing/">Pricing</a></li>
                    <li class="popular1"><a href="/articles/thanks-mike-davidson/">Thanks, Mike Davidson</a></li>
                    <li class="popular1"><a href="/work/coupon-craze/">Coupon Craze</a></li>
                </ol><!-- .no-marker -->


                <?php /* <p class="more"><a href="/work/">See all<b class="more-qualifier"> Featured Work</b></a></p> */ ?>

            </div><!-- /.inner -->


        </section><!-- /#popular -->

	</div><!-- /#content -->


	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>


<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>
