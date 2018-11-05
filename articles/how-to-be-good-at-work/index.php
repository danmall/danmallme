<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head>    
    <title>&ldquo;How to Be Good at Work,&rdquo; an article by Dan Mall</title>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?> 
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>

    <!-- Thanks Jeremy! https://adactio.com/journal/9881  -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@danmall" />
    <meta name="twitter:url" property="og:url" content="<?php echo 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>" />
    <meta name="twitter:title" property="og:title" content="How to Be Good at Work" />
    <meta name="twitter:description" property="og:description" content="A modified transcript from my talk at Frontend Conference Zurich." />
    <meta name="description" content="A modified transcript from my talk at Frontend Conference Zurich." />
    <meta name="twitter:image" property="og:image" content="<?php echo 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>thumb.png" />

    <!-- Webmentions -->
    <link rel="pingback" href="https://webmention.io/webmention?forward=<?php echo 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>" />

    <style type="text/css">

        body {
            --articlePrimaryColor: #45BAFB;
            --articlePrimaryColorHover: #245C7C;            
        }

    </style>

</head>


<body class="dm-page--articleDetail dm-page--articleDetail--dark">
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <script>
        document.write('<div class="dm-js-pageShield"></div>');
    </script>

    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>

    <div class="dm-c-video dm-u-marginLeft--m dm-u-marginRight--m">
        <iframe src="https://player.vimeo.com/video/287855630" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>

    <div class="dm-l-articleGrid">

        <header class="dm-c-pageHeader dm-l-articleGrid--main" role="banner">

            <h1 class="dm-c-pageHeader_title">
                How to Be Good at Work
            </h1>

            <h2 class="dm-c-pageHeader_date">September 14, 2018 at 11:19 <abbr title="Ante Meridien">AM</abbr></h2>

            <p class="dm-c-pageHeader_dek">(The following is a modified transcript of a talk I gave at Frontend Conference Zurich.)</p>

        </header><!-- .page-header -->
    
        <main role="main" class="dm-c-articleWell">        

            <div class="dm-dp-textPassage dm-l-articleGrid--main">

                <p>
                    <span class="dm-dp-openingLines"><b class="dm-dp-dropCap">T</b>hink about the last time</span> at work you thought, or, better yet, said the words, &ldquo;I&rsquo;m good.&rdquo;
                </p>

                <div class="dm-c-carbonWrap dm-u-clear--both">
                    <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1696&amp;serve=CVYD42T&amp;placement=danielmallcom" id="_carbonads_js"></script>
                </div><!-- .dm-c-carbonWrap -->

                <p>Maybe you wrote some code that you were proud of, and you thought, &ldquo;Wow, I&rsquo;m good at my job.&rdquo;</p>

                <p>Or maybe someone suggested you do a little more work that you wanted to, and you declined by saying, &ldquo;No thanks, I&rsquo;m good with what I&rsquo;m doing right now.&rdquo;</p>

                <p>Or maybe you lent a co-worker some cash and thought, &ldquo;I&rsquo;m a good person.&rdquo;</p>

                <p>Sadly, we probably don&rsquo;t acknowledge our good as often as we should. According to <a href="https://news.gallup.com/opinion/chairman/212045/world-broken-workplace.aspx">a Gallup's World Poll</a>, only 15% of the world&rsquo;s 1 billion full-time workers are engaged at work. In fact, Gallup even goes so far to say we&rsquo;re in an &ldquo;employee engagement crisis.&rdquo; I bet that statistic likely applies to the readers of this piece too: 85% of you are likely unengaged at your jobs, and you may not even know why.</p>


                <h2 id="project-aristotle">Project Aristotle <a class="dm-dp-anchorLink" href="#project-aristotle">#</a></h2>

                <p>In 2013, a team in Google&rsquo;s People Operations&mdash;that&rsquo;s what they call their &ldquo;human resources department&rdquo;&mdash;set out to determine what makes for effective teams at Google. Lead researcher Julia Rozovsky <a href="https://www.nytimes.com/2016/02/28/magazine/what-google-learned-from-its-quest-to-build-the-perfect-team.html">reports her findings</a>, dubbed &ldquo;Project Aristotle.&rdquo; She says, &ldquo;We were pretty confident that we'd find the perfect mix of individual traits and skills necessary for a stellar team.&rdquo;</p>

                <p>Instead, they found that &ldquo;who is on a team matters less than how the team members interact, structure their work, and view their contributions.&rdquo; And of all the factors involved, what was the one that emerged as the most important?</p>

                <p><strong>Psychological safety.</strong></p>

                <p>They found that individuals on teams with higher psychological safety are less likely to leave Google, they&rsquo;re more likely to harness the power of diverse ideas from their teammates, they bring in more revenue, and they&rsquo;re rated as effective twice as often by executives.</p>

                <p>So, what can you do right away to start creating more safety within your teams? Perhaps you could encourage your team to kick off meetings by sharing a risk taken in the previous week. Make that part of the culture of how you get work done. If you&rsquo;re not a manager, talk to your manager about implementing something like this, and be willing to lead by example by being the first to share.</p>

                <p>Some of you might be thinking, &ldquo;Yeah, that could work pretty well at my job.&rdquo; But I bet others of you are thinking, &ldquo;There&rsquo;s no way that would work for my teams. It&rsquo;s just so opposite of how we work right now.&rdquo; And that&rsquo;s totally fair. For some, taking risks just isn&rsquo;t part of the culture of work; it&rsquo;s not part of your team&rsquo;s norms. Your boss tells you what to do you, and you do it, because there&rsquo;s likely some consequence waiting for you if you don&rsquo;t do it.</p>

                <p>How do you turn that kind of situation around into a healthy one? You can start by establishing good boundaries.</p>


                <h2 id="boundaries">Boundaries <a class="dm-dp-anchorLink" href="#boundaries">#</a></h2>

                <p>If you own a house, everything inside the walls counts as part of your property. Your property also likely extends outside your house to your front yard and back yard. The boundary is clear. You get to decide who enters your property&mdash;your boundaries&mdash;and who doesn&rsquo;t. Your friends and family can likely come in, at your invitation. Strangers that threaten you cannot come in, and you may even call help like the police or a really strong friend to get them outside of your boundaries completely.</p>

                <p>The same is true physically, mentally, and emotionally. You have boundaries that no one should cross unless you allow them to. Sometimes it&rsquo;s easy to identify when someone crosses a boundary. If someone touches you without your permission, they&rsquo;re crossing your physical boundaries.</p>

                <p>Others are more difficult to identify. When your parent guilt trips you into visiting to be a good son or daughter, they&rsquo;re crossing your emotional boundaries. Luckily, like building stronger or taller fences, we can practice strengthening our boundaries and there are great resources to help us do this.</p>

                <div class="dm-c-articleImage">
                    <img src="boundaries-coping2.png" alt="&ldquo;Boundaries,&rdquo; by Dr. Henry Cloud and Dr. John Townsend and &ldquo;Coping with Infuriating, Mean, Critical People&rdquo; by Nina Brown" />
                </div>

                <p>One of the my favorites is the aptly-titled <cite><a href="https://amzn.to/2NEVvfi" title="Buy &ldquo;Boundaries&rdquo; on Amazon">Boundaries</a></cite> by psychologists Dr. Henry Cloud and Dr. John Townsend. In it are great nuggets like, &ldquo;Boundaries let the good in and keep the bad out.&rdquo; This book defines boundaries and gives examples&mdash;allegory-style&mdash;of how to put them into practice <sup class="dm-c-sidenotes--link"><a href="#note1">1</a></sup> .</p>

                <aside id="note1" class="dm-c-sidenotes dm-l-articleGrid--sidenote">

                    <p>If you&rsquo;d prefer a variation that&rsquo;s specific to organizations as opposed to personal relationships, there&rsquo;s <cite><a href="https://amzn.to/2p6cGbF" title="Buy &ldquo;Boundaries for Leaders&ldquo; on Amazon">Boundaries for Leaders</a></cite>, which offers practical advice on how to manage teams, coach direct reports, and instill an organization with strong values and culture.</p>

                </aside>

                <p>Another great resource is counselor Nina Brown&rsquo;s <cite><a href="https://amzn.to/2NHiS7P" title="Buy &ldquo;Coping with Infuriating, Mean, Critical People&rdquo; on Amazon">Coping with Infuriating, Mean, Critical People</a></cite>. She describes four types of boundaries:</p>

                <ol>
                    <li><strong>Soft boundaries:</strong> when your boundaries merge with other people's. People with soft boundaries are easily victims of psychological manipulation.</li>
                    <li><strong>Spongy boundaries:</strong> when you&rsquo;re unsure of what to let in and what to keep out.</li>
                    <li><strong>Rigid boundaries:</strong> when you&rsquo;re closed or walled off so nobody can get close either physically or emotionally. Rigid boundaries are often the result of physical or emotional trauma.</li>
                    <li><strong>Flexible boundaries:</strong> when you decide what to let in and what to keep out. People with flexible boundaries are often resistant to emotional contagion and psychological manipulation and are difficult to exploit.</li>
                </ol>

                <p>Having flexible boundaries are what all of us can likely do better. Let&rsquo;s have a look at flexible boundaries in action.</p>

                <div class="dm-c-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/bdwQntqI-ts?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>

                <p>Quinta has excellent flexible boundaries. She decides what to let in and what to keep out. She was resistant to psychological manipulation. She was difficult to exploit.</p>

                <p>For those that learn and practice boundaries for the first time, there&rsquo;s often a big initial reaction: <strong>but isn&rsquo;t that rude?</strong> Let&rsquo;s be clear: it&rsquo;s not rude. It&rsquo;s not rude to say no to someone. It&rsquo;s not rude to want something different than everyone else and stand up for it. Quinta wasn&rsquo;t obnoxious or off-putting; she was pleasant and accommodating, but she still made she sure that <em>she</em> was in control of what she wanted.</p>

                <p>There&rsquo;s a complex concept in the Boundaries book: &ldquo;<strong>We are responsible <em>to</em> others and <em>for</em> ourselves.</strong>&rdquo; The corollary is that we are not responsible for others. The other two guys in this video were probably worried about hurting Justin&rsquo;s feelings. And that&rsquo;s where the complexity sneaks in: by making themselves responsible for Justin&rsquo;s feelings, by taking that on themselves, they&rsquo;re actually encroaching on Justin&rsquo;s boundaries in making assumptions on behalf of his emotions. They&rsquo;re probably well-intentioned, but that doesn&rsquo;t change the fact that it&rsquo;s still a boundary violation.</p>

                <p>One of the most common scenarios of unintentional boundary violations is in taking care of someone, for example, an aging parent or perhaps a relative or friend with a mental illness. The <a href="https://www.nami.org/">National Alliance on Mental Illness</a> has some <a href="https://www.nami.org/Find-Support/Family-Members-and-Caregivers/Maintaining-a-Healthy-Relationship">great tips on maintaining a relationship with someone with a mental illness</a> that, not surprisingly, include setting clear boundaries.</p>

                <blockquote>
                    <p>Tell your relative the standards you need him to meet so you can live well together. Make sure your loved one knows that you see him as a whole person, and that you expect him to follow those standards.</p>
                </blockquote>

                <p>We often think that mental illness means mental disorders, like schizophrenia or depression or dementia. And while these disorders are forms of mental illness, they&rsquo;re not always as evident. <abbr>NAMI</abbr> defines mental illness as &ldquo;a condition that affects a person's thinking, feeling, or mood.&rdquo; That condition could be stress. Or anger. Really, any one of us can experience conditions that affect our thinking and feelings at any time.</p>

                <p>Essentially, setting clear boundaries is excellent way to maintain a healthy relationship with anyone. Strong boundaries are a prerequisite to creating <a href="http://v3.danielmall.com/articles/accountability/">accountability</a>.</p>



                <h2 id="accountability">Accountability <a class="dm-dp-anchorLink" href="#accountability">#</a></h2>

                <p>When now-Senator Corey Booker was mayor of Newark, <abbr title="New Jersey">NJ</abbr>, he helped realize unprecedented violent crime reduction and increased affordable housing in the city all while reducing the city budget deficit.</p>

                <p>I was fortunate to hear him speak at <a href="https://brooklynbeta.org/2012/">Brooklyn Beta in 2012</a>. During the <abbr title="Question and Answer">Q&amp;A</abbr> session, someone asked how he and his team are able to achieve such incredible results. He responded by saying that they all hold each other accountable and proceeded to share his formula for accountability. There are 3 parts:</p>

                <ol>
                    <li><strong>Stated standards</strong>. Having stated standards is the foundation of accountability. One can only be held accountable if both parties agree to the same standard.</li>
                    <li><strong>A system of measurements.</strong> Both parties need to agree on a way to measure if they&rsquo;ve met said standards.</li>
                    <li><strong>Effects: either positive, negative, or both.</strong> Both parties need to agree on what will happen after those standards are met and/or those standards are not met.</li>
                </ol>

                <p>Imagine you&rsquo;re talking to your manager. You might say something like:</p> 

                <blockquote><p>This functionality will be done by end of day today.</p></blockquote>

                <p>Your manager may try to be more specific in order to make sure you have a defined standard. Maybe you could be more specific about what functionality. And what time is the end of the day? Midnight? Close of business?</p>

                <blockquote><p><del>This functionality</del> <ins>The ability to upload a document</ins> will be done by <del>end of day</del> <ins>5pm Eastern</ins> today.</p></blockquote>

                <p>This can easily be measured. Your manager may check the staging server at 5:01pm to test this functionality to see if it&rsquo;s working.</p>

                <p>The last piece of creating accountability is that there must be effects, either positive or negative once those standards are measured. If that upload functionality works by 5:01pm, you get a promotion! But if it doesn&rsquo;t work&mdash;or worse: isn&rsquo;t there&mdash;by 5:01pm you get fired.</p>

                <p>Ok, so that&rsquo;s a pretty extreme and unlikely example. Maybe this is more realistic. If that upload functionality works by 5:01pm, our client will probably sign more work with us. But if it doesn&rsquo;t work&mdash;or worse: isn&rsquo;t there&mdash;by 5:01pm, they probably won't renew the account.</p>

                <p>If your teams aren&rsquo;t being productive, there&rsquo;s a chance it&rsquo;s because people aren&rsquo;t being held accountable. You can use this framework to help correct that; it&rsquo;s at least worth a shot.</p>

                <p>Where I&rsquo;ve seen a lot of teams fall down is in the first piece: teams struggle to define standards well. Next time you&rsquo;re in a meeting and you hear someone punt on defining standards by trying to finish the conversation with something like, &ldquo;Well, let&rsquo;s see how it turns out,&rdquo; speak up. You can say something like, &ldquo;Wait, can we try to define that a little more specifically so we know what we&rsquo;re accountable for?&rdquo; Little conversational cues like that can go a long way.</p>



                <h2 id="commit-to-commit">Commit to commit <a class="dm-dp-anchorLink" href="#commit-to-commit">#</a></h2>

                <p>Once everyone&rsquo;s on board with that idea, the next step is to create some commitments. Here&rsquo;s where boundaries come back into play. You want to create accountability without violating anyone&rsquo;s boundaries. A great way to d o that is to ask a closed-ended question, a question that you can only answer with &ldquo;yes&rdquo; or &ldquo;no&rdquo; <sup class="dm-c-sidenotes--link"><a href="#note2">2</a></sup> .</p>

                <aside id="note2" class="dm-c-sidenotes dm-l-articleGrid--sidenote">

                    <p>It seems a bit counterintuitive: we tend to hear much more often about <a href="https://www.mediacollege.com/journalism/interviews/open-ended-questions.html">the value of open-ended questions</a> to stimulate deep conversation. But creating accountability is about the opposite. You&rsquo;re not looking to encourage conversation; instead, creating commitments are often about drawing conversations to a close.</p>

                </aside>

                <blockquote><p><strong>Can you</strong> finish the document upload functionality by 5pm today?&rdquo;</p></blockquote>

                <p>The phrase &ldquo;can you&rdquo; allows the other person to make their own decisions. It respects their boundaries.</p>

                <p>What if you&rsquo;re on the other end of this? What if your boss comes up to you and asks you this? That&rsquo;s not always a comfortable spot to be in.</p>

                <p>There are two obvious ways to answer this: <strong>yes</strong> or <strong>no</strong>. But most people forget about a third and very powerful answer to this question.</p>

                <p>It&rsquo;s not <strong>maybe</strong>. It&rsquo;s not <strong>I don&rsquo;t know</strong>.</p>

                <p>It&rsquo;s to <strong>commit to commit</strong> <sup class="dm-c-sidenotes--link"><a href="#note3">3</a></sup>.</p>

                <blockquote><p>I can tell you by 3pm today.</p></blockquote>

                <p>This is really powerful. What&rsquo;s your boss looking for? They just want to know what to expect. And you&rsquo;re letting them know that, very soon, they&rsquo;ll know what to expect.</p>

                <aside id="note3" class="dm-c-sidenotes dm-l-articleGrid--sidenote">

                    <p>I learned about this technique in a wonderful workshop with executive coach/consultant <a href="http://www.chalmersbrothers.com/about">Chalmers Brothers</a>. If you get an opportunity to attend any of his events, don&rsquo;t miss it.</p>

                </aside>

                <p>Once you get good at each of these three types of answers, you can start mixing and matching.</p>

                <blockquote><p>No, but I can get to it by 6pm. Will that work for you?</p></blockquote>

                <p>This is no longer just an interrogation about accountability; it&rsquo;s a conversation about it.</p> 

                <p>Let&rsquo;s take what we&rsquo;ve learned so far and see if we can debunk one of the most used but most toxic strategies. </p>


                <h2 id="underpromise-overdeliver">Underpromise, overdeliver <a class="dm-dp-anchorLink" href="#underpromise-overdeliver">#</a></h2>

                <p>Do you use this technique? If you do, please stop. Please. It&rsquo;s awful and manipulative.</p>

                <p>Why do I hate it so much? Well, it has another name that you might be familiar with.</p>

                <p><strong>Lying</strong>.</p>

                <p>Let&rsquo;s take a look at how this works.</p>

                <div class="dm-u-marginTop--xl dm-u-marginBottom--xl">
                    <p class="dm-u-textIndent--0"><strong>Me, at 3pm:</strong> Sorry, I won&rsquo;t have that upload functionality done by 5pm today.</p>
                    <p class="dm-u-textIndent--0"><strong>Client:</strong> Ok, thanks for letting me know.</p>
                    <p class="dm-u-textIndent--0"><strong>Me, at 5pm:</strong> Here&rsquo;s that upload functionality!</p>
                    <p class="dm-u-textIndent--0"><strong>Client:</strong> Um ok. I thought we weren&rsquo;t gonna get this today. Cool&hellip; I guess?</p>
                </div>

                <p>What happened here? Above all, I think people just want to know what to expect. They want to know that your word means something, that when you say you&rsquo;ll do it, you&rsquo;ll do it.</p>

                <p>Now, there&rsquo;s nothing wrong with being wrong. If at 3pm, you don&rsquo;t think you can get something done but at 5pm you realize it was easier than you initially thought, that&rsquo;s great! But own it. Don&rsquo;t celebrate finishing early before you apologize for setting the wrong expectations. That way, your client will know that you value your word as much as they want to <sup class="dm-c-sidenotes--link"><a href="#note4">4</a></sup>.</p>

                <aside id="note4" class="dm-c-sidenotes dm-l-articleGrid--sidenote">

                    <p>I&rsquo;ve seen lots of people use &ldquo;underpromise, overdeliver&rdquo; as a strategy. As in, &ldquo;we&rsquo;re going to promise in advance that we&rsquo;ll do less than we actually intend to, then we&rsquo;ll deliver more than they expect but we intended all along.&rdquo; This is dishonest. Stop it. All people will learn about you is that the words you say never match your deliveries. This is a terrible way to build trust.</p>

                </aside>

                <p>One of my philosophies about doing client work&mdash;and this applies equally if your client is instead a manager or another internal stakeholder&mdash;is to <strong>show clients the future</strong>. Let them know what&rsquo;s coming up.</p> 

                <p>For every client, I set up a <a href="https://github.com/SuperFriendly/project-hub">Project Hub</a> on a new subdomain. It&rsquo;s a simple list of all of the upcoming milestones. As we go, it&rsquo;s ok if things shift, but we&rsquo;re always trying to reset expectations so the client always has an accurate view that&rsquo;s far out as we can confidently say.</p>



                <h2 id="motivation">Motivation <a class="dm-dp-anchorLink" href="#motivation">#</a></h2>

                <p>One of the tough things about accountability is that you may run into someone that&rsquo;s honestly difficult to make accountable. Despite trying to establish standards, conceiving a great way to measure those, and having appropriate effects, nothing seems to be working. In that scenario, chances are pretty high that you&rsquo;re dealing with an unmotivated colleague or direct report.</p>

                <p>Maybe that person is you, despite trying your best to drum up the interest to no avail.</p>

                <p>I recently worked with a startup that asked me to coach their teams to level up their collaborative processes. In particular, they thought the designers&rsquo; work wasn&rsquo;t exactly up to snuff with what they could be producing, so they asked me to see what I could unearth. They don&rsquo;t have a head of design, so the head of engineering has been standing in as head of design to get the designers moving.</p>

                <p>When I asked the head of engineering what the root of the problem might be, he said, &ldquo;Listen, we have to ship this product so we don&rsquo;t have a lot of time to explore. We have to execute.&rdquo;</p>

                <p>When I asked the designers what the root of the problem might be, they said, &ldquo;We&rsquo;re just taking orders designing what everyone tells us to do.&rdquo;</p> 

                <p>How do you fix this scenario?</p>

                <p>In Daniel Pink&rsquo;s <cite><a href="https://amzn.to/2Qq9Sm9" title="Buy &ldquo;Drive&rdquo; on Amazon">Drive</a></cite>, he describes a framework for what drives people, what motivates them:</p>

                <ul>
                    <li><strong>Autonomy:</strong> the desire to direct our own lives.</li>
                    <li><strong>Mastery:</strong> the urge to make progress and get better and something that matters to us.</li>
                    <li><strong>Purpose:</strong> the yearning to do what we do in service of something larger than ourselves.</li>
                </ul>

                <p>The designers had none of these three, so it wasn&rsquo;t surprising that they didn&rsquo;t feel driven or motivated. People were telling them what to design, so they had no autonomy; they couldn&rsquo;t direct their own lives. They were being managed by someone who didn&rsquo;t know their skills, so they had little idea for how to make progress. The startup is in financial services, a category the designers didn&rsquo;t have too much interest in, so there wasn&rsquo;t a lot of purpose in it for them either.</p>

                <p>So, we tried to carve out some space for each designer to practice at least one of these. We did about 2 weeks worth of design work, so the engineers had their hands full for a while. Now that the designers had some free time, we looked for autonomous spaces for them to practice some mastery.</p>
                <p>One of the designers wanted to explore how illustration could make the app warmer, so he spent the next 2 weeks compiling reference material, sketching, and having a ton of fun. The other designer wanted to tighten up their not-so-used component library with updated code samples and guidelines, so she went to town on that. Seeing how well it was going, the head of engineering committed to letting them keep some space where they got to rule their own domains. A few weeks later, the team is a well-oiled machine that&rsquo;s seeing much more involvement and fire from everyone.</p>



                <h2 id="selfish-to-selfless">From selfish to selfless <a class="dm-dp-anchorLink" href="#selfish-to-selfless">#</a></h2>

                <p>The things discussed above are techniques to cover your own butt. Creating accountability, making commitments, and finding motivation are all foundational to creating a culture of work where everyone&rsquo;s boundaries are respected. But that stuff just makes teams functional; it&rsquo;s not what makes things great. I&rsquo;ve heard <abbr title="Vice President">VP</abbr> of Design Education for InVision <a href="http://aarronwalter.com/">Aarron Walter</a> likes to say, &ldquo;No one settles for a meal that&rsquo;s edible. They want it to be delicious!&rdquo;</p>

                <div class="dm-c-articleImage">
                    <?php include 'self2.svg'; ?>
                </div>

                <p>Teams where everyone is selfish are the making for dysfunction. That&rsquo;s probably not news to you. Most teams, though, end up with self-centered team members. People aren&rsquo;t selfish in a malicious way; it&rsquo;s just that everyone&rsquo;s looking out for themselves, because who else would?</p>

                <p>We have to try to push our teams further. In order to create psychological safety, team members need to be looking out for each other more.</p>

                <p><a href="https://startwithwhy.com/">Simon Sinek</a> is probably best known for <a href="https://www.ted.com/speakers/simon_sinek" title="Simon Sinek on TED">his TED talks</a> and his book <cite><a href="https://amzn.to/2Okp4zU" title="Buy &ldquo;Start with Why&rdquo; on Amazon">Start with Why</a></cite>, but his book <cite><a href="https://amzn.to/2NzLekz" title="Buy &ldquo;Leaders Eat Last&rdquo; on Amazon">Leaders Eat Last</a></cite> is my favorite. It gives so many great tips and examples for how teams can be better supporting each other.</p>

                <p>In the book, Sinek tells the story of an employee at manufacturing company whose diabetic wife needed surgery. The employee couldn&rsquo;t afford to lose pay, so his fellow employees transferred their own paid vacation days so he could have more paid days off. The company had never done something like this before, and it was actually in clear violation of official company policy. But they made it happen anyway. It&rsquo;s a touching tale of how people band together to reduce each other&rsquo;s risk.</p>

                <p>Sinek also tells the story of a tech company <a href="http://www.nextjump.com/">Next Jump</a>&rsquo;s Lifetime Employment Policy: once you get hired, you can never be fired (unless you actively worked to undermine your colleagues or do something illegal). If you perform poorly, you don&rsquo;t get fired; you get coached. <abbr title="Chief Executive Officer">CEO</abbr> Charlie Kim thinks of taking care of his employees like raising kids. He says, &ldquo;Most people would never get rid of their kids in hard times, so how can we lay off our people under the same conditions?&rdquo;

                <p>Here&rsquo;s a simple illustration of how are organizations currently work, but how they could be so much more.</p>

                <div class="dm-c-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/qhU5JEd-XRo?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>



                <h2 id="what-can-i-do-for-you-today">What can I do for you today? <a class="dm-dp-anchorLink" href="#what-can-i-do-for-you-today">#</a></h2>

                <p>My last tip: go around to each member of your team and ask them what you can do for them today. Don&rsquo;t take no for an answer (while still respecting their boundaries!). It could be work-related, like converting a database or naming all the layers in a Sketch file. Or it could be as small as making sure everyone has a fresh glass of water once an hour.</p>

                <p>This is the kind of stuff that makes not only our workplaces good, but our neighborhoods, and cities, and countries too. This is the stuff you won&rsquo;t pick up in a coding bootcamp or in a Github repo, but it can make all the difference for <strong>how to be good at work</strong>.</p>

            </div>

            <section id="up-next" class="dm-c-upNext">

                <h1 class="dm-c-upNext_kicker">Up Next</h1>

                <h2 class="dm-c-upNext_title">
                    <a href="/articles/portfolios/">
                        A Portfolio Hiring Managers Can&rsquo;t <span class="dm-c-upNext_title_lastWord">Deny</span>
                    </a>
                </h2>

            </section><!-- .dm-c-upNext -->

        </main>

    </div><!-- .dm-l-articleGrid -->

    </div><!-- .dm-l-articleGrid -->



    <section id="comments" class="dm-c-comments">      
            
        <div class="main">

            <!-- ====== WEBMENTIONS ======= -->
            <!-- https://gist.github.com/aaronpk/6207445 -->

            <span id="webmention-count" style="display: none;"></span>

            <?php 
                /*
                echo '<div style="display: none;">';
                $json = file_get_contents('https://webmention.io/api/links.jf2?target=http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);
                $obj = json_decode($json);
                //echo $obj;
                echo '</div>';
                */
            ?>
            

            <script type="text/javascript">
                function loadWebmentions(data){
                    var webmentionCount = document.querySelector('#webmention-count');
                    if(webmentionCount){
                        webmentionCount.innerHTML = data.count + " mentions";
                    }
                    //document.getElementById("webmention-count").innerHTML = data.count + " mentions";
                }
            </script>
            <script type="text/javascript" src="http://webmention.io/api/count?jsonp=loadWebmentions&amp;target=<?php echo 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>"></script>



            
            <!-- ====== DISQUS ======= -->
            <div id="disqus_thread"></div>
            <script>
                /**
                 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
                 */
                
                var disqus_config = function () {
                    this.page.url = 'http://danmall.me/articles/<?php echo getArticleSlug(); ?>';
                    this.page.identifier = '<?php echo getArticleSlug(); ?>';
                    //this.page.title = 'a unique title for each page where Disqus is present';
                };
                
                (function() {  // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW
                    var d = document, s = d.createElement('script');
                    
                    s.src = '//danielmall.disqus.com/embed.js';  // IMPORTANT: Replace EXAMPLE with your forum shortname!
                    
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
            
        </div><!-- /.main -->
        
            
    </section><!-- #comments -->

    
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>    

<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>    