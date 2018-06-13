<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head>    
    <title>&ldquo;Distinct Design Systems,&rdquo; an article by Dan Mall</title>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?> 
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>

    <!-- Thanks Jeremy! https://adactio.com/journal/9881  -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@danmall" />
    <meta name="twitter:url" property="og:url" content="<?php echo 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>" />
    <meta name="twitter:title" property="og:title" content="Distinct Design Systems" />
    <meta name="twitter:description" property="og:description" content="What makes a design system better than any other?" />
    <meta name="twitter:image" property="og:image" content="<?php echo 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>/thumb.png" />
    
</head>


<body class="dm-page--articleDetail">
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <script>
        document.write('<div class="dm-js-pageShield"></div>');
    </script>

    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>

    <header class="dm-c-pageHeader" role="banner">

        <h1 class="dm-c-pageHeader_title">
            Distinct Design Systems
        </h1>

        <h2 class="dm-c-pageHeader_date">June 13, 2018 at 5:57 <abbr title="Ante Meridien">AM</abbr></h2>

    </header><!-- .page-header -->

    <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1696&amp;serve=CVYD42T&amp;placement=danielmallcom" id="_carbonads_js"></script>

    <main role="main" class="dm-c-articleWell">

        <div class="dm-dp-textPassage">

            <p><span class="dm-dp-openingLines">Do we have</span> too many design systems?</p>

            <p>Clearly, I&rsquo;m biased: most of <a href="http://superfriend.ly/">SuperFriendly</a>&rsquo;s work nowadays involves either creating a design system or modifying one as part of a larger effort for a client. But why even go through any of that effort in the first place?</p>

            <p>When I started <a href="http://v3.danielmall.com/articles/researching-design-systems/">researching design systems</a> for <a href="https://bigmedium.com/projects/unity-design-system-exxonmobil.html">Unity</a>, the design system we made for ExxonMobil, my biggest observation was that the digital design systems out at the time were extremely generic. There&rsquo;s a lot of benefit to that: part of the job of a design system is to <a href="https://bigmedium.com/ideas/boring-design-systems.html">take care of the boring stuff</a> to free you up to tackle the more exciting and challenging bits, so some amount of convention is expected and encouraged. That genericness is what allows designers and developers to create quickly, not to overthink our interfaces and unnecessarily reinvent the wheel. It&rsquo;s no surprise that <a href="http://getbootstrap.com/">Bootstrap</a> is as popular as it is: you can build something significant with even a basic understanding of <abbr title="HyperText Markup Language">HTML</abbr>, <abbr title="Cascading Style Sheets">CSS</abbr>, and <abbr title="JavaScript">JS</abbr> without a lot of fuss. And <a href="https://www.uplabs.com/search?q=material">a quick search on UpLabs</a> shows how much can be done with Google&rsquo;s <a href="https://material.io/">Material Design</a>.</p>

            <p>Sometimes, though, we need better tools. In fact, a lot of our design system work has used &ldquo;better than Bootstrap&rdquo; or &ldquo;more meaningful than Material&rdquo; as a creative brief or rallying cry of sorts. But what does it mean to be better? Every client I work with has at least one problem or challenge that Bootstrap or Material Design didn&rsquo;t anticipate. That&rsquo;s not to disparage those tools; it was never their job to do in the first place. This is where a distinct design system can be helpful: to solve your organization&rsquo;s unique problems in a way a generic tool isn&rsquo;t designed to help with.</p>

            <h2 id="relying-on-principles">Relying on Principles</h2>

            <p>Web developer and author <a href="https://twitter.com/adactio">Jeremy Keith</a> shares <a href="https://adactio.com/journal/13844">some great wisdom</a> about design systems:</p>

            <blockquote><p>It&rsquo;s not very useful to create a library of patterns without providing any framework for using those patterns.&rdquo;</p></blockquote>

            <p>Often times, that framework comes in the form of principles, which is likely why most design systems have them. Design Principles <abbr>FTW</abbr> <a href="https://www.designprinciplesftw.com/what-are-design-principles">describes two types of principles</a>: universal and specific. The problem is that most design systems stop at universal principles. For example, <a href="https://experience.sap.com/fiori-design-web/design-principles/">SAP Fiori&rsquo;s design principles</a> are all universal. While &ldquo;delightful&rdquo; and &ldquo;simple&rdquo; apply to Fiori, they also apply to, well, every other design system too. I&rsquo;m not implying malice or ignorance here; I think that&rsquo;s a result of 1) the difficulty of writing great, specific principles and 2) the fact that having only universal principles are better than having nothing at all.</p>

            <p>In contrast, <a href="http://www.pvrblog.com/2004/12/the_pvrblog_int.html">TiVo has specific design principles</a> like:</p>

            <ul>
                <li>It&rsquo;s entertainment, stupid.</li>
                <li>It&rsquo;s <abbr>TV</abbr>, stupid.</li>
                <li>It&rsquo;s video, dammit.</li>
            </ul>

            <p>Very brand! Such tone! Those wouldn&rsquo;t work for a car manufacturer or a tech company. Specific design principles should fit your organization perfectly and look awkward on everyone else.</p>

            <p>I&rsquo;d love to see every design system strive for an <a href="/articles/onlyness/">only-ness</a>, some unique angle or aspect that other design systems don&rsquo;t cater to. Your product or organization probably has a specific perspective on the problem it&rsquo;s trying to solve in the world; your design system should reflect, refract, and reverberate that position. (If your organization <em>doesn&rsquo;t</em> have that differentiation, you&rsquo;ve got some foundational identity work to do.)</p>

            <p>That only-ness doesn&rsquo;t have only to be principle-driven; it could come directly from the mission of your company. In Vox Media Senior Design Director <a href="https://twitter.com/yeseniaa">Yesenia Perez-Cruz</a>&rsquo;s talk, <a href="https://speakerdeck.com/yeseniaperezcruz/building-flexible-design-systems?slide=17">Building Flexible Design Systems</a>, she nails what Vox&rsquo;s design system is built for: telling better stories, faster. That clear purpose drives what components they need, what scenarios to design for, and what they can work toward together.</p>

            <h2>Reverse-engineering principles from components</h2>

            <p>One workflow tip I&rsquo;ve tried to put to good use is that you don&rsquo;t have to define principles before you create components; it&rsquo;s not a one-way street. Many times, you can derive your principles from how the work gets done. Designer <a href="https://twitter.com/markboulton">Mark Boulton</a> shares <a href="https://markboulton.co.uk/journal/defining-design-principles-at-embl">his experience with this flexibility around design principles</a>:</p>          

            <blockquote>
                <p>&hellip;a team can quickly pull together principles that are derived from doing the work on their particular problem rather than principles which are imposed on the work.</p>
            </blockquote>

            <p>A team can do this because the general public can too. Here&rsquo;s a quick inventory of a handful of design systems and the components they contain:</p>

            <!-- <table>
                <thead>
                    <tr>
                        <td>&nbsp;</td>
                        <th scope="col" id="product1">Product #1</th>
                        <th scope="col" id="product2">Product #2</th>
                        <th scope="col" id="product3">Product #3</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="dm-u-align--left" scope="row" id="criteria1">Common components potential</th>
                        <td headers="criteria1 product1">10</td>
                        <td headers="criteria1 product2">3</td>
                        <td headers="criteria1 product3">5</td>
                    </tr>
                    <tr>
                        <th class="dm-u-align--left" scope="row" id="criteria2">Common patterns potential</th>
                        <td headers="criteria2 product1">2</td>
                        <td headers="criteria2 product2">4</td>
                        <td headers="criteria2 product3">4</td>
                    </tr>
                    <tr>
                        <th class="dm-u-align--left" scope="row" id="criteria3">High-value elements</th>
                        <td headers="criteria3 product1">8</td>
                        <td headers="criteria3 product2">3</td>
                        <td headers="criteria3 product3">2</td>
                    </tr>
                    <tr>
                        <th class="dm-u-align--left" scope="row" id="criteria4">Technical feasibility</th>
                        <td headers="criteria4 product1">3</td>
                        <td headers="criteria4 product2">1</td>
                        <td headers="criteria4 product3">5</td>
                    </tr>
                    <tr>
                        <th class="dm-u-align--left" scope="row" id="criteria5">Available champion</th>
                        <td headers="criteria5 product1">5</td>
                        <td headers="criteria5 product2">4</td>
                        <td headers="criteria5 product3">8</td>
                    </tr>
                    <tr>
                        <th class="dm-u-align--left" scope="row" id="criteria6">Scope</th>
                        <td headers="criteria6 product1">8</td>
                        <td headers="criteria6 product2">3</td>
                        <td headers="criteria6 product3">8</td>
                    </tr>
                    <tr>
                        <th class="dm-u-align--left" scope="row" id="criteria7">Technical independence</th>
                        <td headers="criteria7 product1">10</td>
                        <td headers="criteria7 product2">7</td>
                        <td headers="criteria7 product3">7</td>
                    </tr>
                    <tr>
                        <th class="dm-u-align--left" scope="row" id="criteria8">Marketing potential</th>
                        <td headers="criteria8 product1">4</td>
                        <td headers="criteria8 product2">6</td>
                        <td headers="criteria8 product3">2</td>
                    </tr>
                    <tr>
                        <th class="dm-u-align--left" scope="row" id="criteria9"><strong>Totals</strong></th>
                        <td headers="criteria9 product1"><strong>50</strong></td>
                        <td headers="criteria9 product2"><strong>31</strong></td>
                        <td headers="criteria9 product3"><strong>41</strong></td>
                    </tr>
                    <tr>
                        <th class="dm-u-align--left" scope="row" id="criteria10"><strong>Averages</strong></th>
                        <td headers="criteria10 product1"><strong>6.25</strong></td>
                        <td headers="criteria10 product2"><strong>3.88</strong></td>
                        <td headers="criteria10 product3"><strong>5.13</strong></td>
                    </tr>
                </tbody>
            </table> -->


            <table>
                <tbody>
                    <tr>   
                        <th>&nbsp;</th>
                        <th scope="col" id="carbon">Carbon Design System</th>
                        <th scope="col" id="lightning">Lightning Design System</th>
                        <th scope="col" id="usds">U.S. Web Design System</th>
                        <th scope="col" id="atlassian">Atlassian Design</th>
                        <th scope="col" id="quickbooks">Quickbooks Design System</th>
                        <th scope="col" id="futurelearn">FutureLearn</th>
                        <th scope="col" id="polaris">Polaris by Shopify</th>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="accordion">Accordion</th>
                        <td headers="accordion carbon">&bull;</td>
                        <td headers="accordion lightning">&bull;</td>
                        <td headers="accordion usds">&bull;</td>
                        <td headers="accordion atlassian">&bull;</td>
                        <td headers="accordion quickbooks">&bull;</td>
                        <td headers="accordion futurelearn">&bull;</td>
                        <td headers="accordion polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="action-list">Action List</th>
                        <td headers="action-list carbon">&bull;</td>
                        <td headers="action-list lightning">&bull;</td>
                        <td headers="action-list usds">&bull;</td>
                        <td headers="action-list atlassian">&bull;</td>
                        <td headers="action-list quickbooks">&bull;</td>
                        <td headers="action-list futurelearn">&bull;</td>
                        <td headers="action-list polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="activity-timeline">Activity Timeline</th>
                        <td headers="activity-timeline carbon">&bull;</td>
                        <td headers="activity-timeline lightning">&bull;</td>
                        <td headers="activity-timeline usds">&bull;</td>
                        <td headers="activity-timeline atlassian">&bull;</td>
                        <td headers="activity-timeline quickbooks">&bull;</td>
                        <td headers="activity-timeline futurelearn">&bull;</td>
                        <td headers="activity-timeline polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="alert-flag-messages">Alert/Flag Messages</th>
                        <td headers="alert-flag-messages carbon">&bull;</td>
                        <td headers="alert-flag-messages lightning">&bull;</td>
                        <td headers="alert-flag-messages usds">&bull;</td>
                        <td headers="alert-flag-messages atlassian">&bull;</td>
                        <td headers="alert-flag-messages quickbooks">&bull;</td>
                        <td headers="alert-flag-messages futurelearn">&bull;</td>
                        <td headers="alert-flag-messages polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="app-launcher">App Launcher</th>
                        <td headers="app-launcher carbon">&bull;</td>
                        <td headers="app-launcher lightning">&bull;</td>
                        <td headers="app-launcher usds">&bull;</td>
                        <td headers="app-launcher atlassian">&bull;</td>
                        <td headers="app-launcher quickbooks">&bull;</td>
                        <td headers="app-launcher futurelearn">&bull;</td>
                        <td headers="app-launcher polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="arrow-toggle">Arrow Toggle</th>
                        <td headers="arrow-toggle carbon">&bull;</td>
                        <td headers="arrow-toggle lightning">&bull;</td>
                        <td headers="arrow-toggle usds">&bull;</td>
                        <td headers="arrow-toggle atlassian">&bull;</td>
                        <td headers="arrow-toggle quickbooks">&bull;</td>
                        <td headers="arrow-toggle futurelearn">&bull;</td>
                        <td headers="arrow-toggle polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Avatar">Avatar</th>
                        <td headers="Avatar carbon">&bull;</td>
                        <td headers="Avatar lightning">&bull;</td>
                        <td headers="Avatar usds">&bull;</td>
                        <td headers="Avatar atlassian">&bull;</td>
                        <td headers="Avatar quickbooks">&bull;</td>
                        <td headers="Avatar futurelearn">&bull;</td>
                        <td headers="Avatar polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Badges">Badges</th>
                        <td headers="Badges carbon">&bull;</td>
                        <td headers="Badges lightning">&bull;</td>
                        <td headers="Badges usds">&bull;</td>
                        <td headers="Badges atlassian">&bull;</td>
                        <td headers="Badges quickbooks">&bull;</td>
                        <td headers="Badges futurelearn">&bull;</td>
                        <td headers="Badges polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Banners">Banners</th>
                        <td headers="Banners carbon">&bull;</td>
                        <td headers="Banners lightning">&bull;</td>
                        <td headers="Banners usds">&bull;</td>
                        <td headers="Banners atlassian">&bull;</td>
                        <td headers="Banners quickbooks">&bull;</td>
                        <td headers="Banners futurelearn">&bull;</td>
                        <td headers="Banners polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Billboard">Billboard</th>
                        <td headers="Billboard carbon">&bull;</td>
                        <td headers="Billboard lightning">&bull;</td>
                        <td headers="Billboard usds">&bull;</td>
                        <td headers="Billboard atlassian">&bull;</td>
                        <td headers="Billboard quickbooks">&bull;</td>
                        <td headers="Billboard futurelearn">&bull;</td>
                        <td headers="Billboard polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Boombox">Boombox</th>
                        <td headers="Boombox carbon">&bull;</td>
                        <td headers="Boombox lightning">&bull;</td>
                        <td headers="Boombox usds">&bull;</td>
                        <td headers="Boombox atlassian">&bull;</td>
                        <td headers="Boombox quickbooks">&bull;</td>
                        <td headers="Boombox futurelearn">&bull;</td>
                        <td headers="Boombox polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Brand-Band">Brand Band</th>
                        <td headers="Brand-Band carbon">&bull;</td>
                        <td headers="Brand-Band lightning">&bull;</td>
                        <td headers="Brand-Band usds">&bull;</td>
                        <td headers="Brand-Band atlassian">&bull;</td>
                        <td headers="Brand-Band quickbooks">&bull;</td>
                        <td headers="Brand-Band futurelearn">&bull;</td>
                        <td headers="Brand-Band polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Breadcrumb">Breadcrumb</th>
                        <td headers="Breadcrumb carbon">&bull;</td>
                        <td headers="Breadcrumb lightning">&bull;</td>
                        <td headers="Breadcrumb usds">&bull;</td>
                        <td headers="Breadcrumb atlassian">&bull;</td>
                        <td headers="Breadcrumb quickbooks">&bull;</td>
                        <td headers="Breadcrumb futurelearn">&bull;</td>
                        <td headers="Breadcrumb polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Builder-Header">Builder Header</th>
                        <td headers="Builder-Header carbon">&bull;</td>
                        <td headers="Builder-Header lightning">&bull;</td>
                        <td headers="Builder-Header usds">&bull;</td>
                        <td headers="Builder-Header atlassian">&bull;</td>
                        <td headers="Builder-Header quickbooks">&bull;</td>
                        <td headers="Builder-Header futurelearn">&bull;</td>
                        <td headers="Builder-Header polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Button-Groups">Button Groups</th>
                        <td headers="Button-Groups carbon">&bull;</td>
                        <td headers="Button-Groups lightning">&bull;</td>
                        <td headers="Button-Groups usds">&bull;</td>
                        <td headers="Button-Groups atlassian">&bull;</td>
                        <td headers="Button-Groups quickbooks">&bull;</td>
                        <td headers="Button-Groups futurelearn">&bull;</td>
                        <td headers="Button-Groups polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Button-Icons">Button Icons</th>
                        <td headers="Button-Icons carbon">&bull;</td>
                        <td headers="Button-Icons lightning">&bull;</td>
                        <td headers="Button-Icons usds">&bull;</td>
                        <td headers="Button-Icons atlassian">&bull;</td>
                        <td headers="Button-Icons quickbooks">&bull;</td>
                        <td headers="Button-Icons futurelearn">&bull;</td>
                        <td headers="Button-Icons polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Buttons">Buttons</th>
                        <td headers="Buttons carbon">&bull;</td>
                        <td headers="Buttons lightning">&bull;</td>
                        <td headers="Buttons usds">&bull;</td>
                        <td headers="Buttons atlassian">&bull;</td>
                        <td headers="Buttons quickbooks">&bull;</td>
                        <td headers="Buttons futurelearn">&bull;</td>
                        <td headers="Buttons polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Callout-Cards">Callout Cards</th>
                        <td headers="Callout-Cards carbon">&bull;</td>
                        <td headers="Callout-Cards lightning">&bull;</td>
                        <td headers="Callout-Cards usds">&bull;</td>
                        <td headers="Callout-Cards atlassian">&bull;</td>
                        <td headers="Callout-Cards quickbooks">&bull;</td>
                        <td headers="Callout-Cards futurelearn">&bull;</td>
                        <td headers="Callout-Cards polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Caption">Caption</th>
                        <td headers="Caption carbon">&bull;</td>
                        <td headers="Caption lightning">&bull;</td>
                        <td headers="Caption usds">&bull;</td>
                        <td headers="Caption atlassian">&bull;</td>
                        <td headers="Caption quickbooks">&bull;</td>
                        <td headers="Caption futurelearn">&bull;</td>
                        <td headers="Caption polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Cards">Cards</th>
                        <td headers="Cards carbon">&bull;</td>
                        <td headers="Cards lightning">&bull;</td>
                        <td headers="Cards usds">&bull;</td>
                        <td headers="Cards atlassian">&bull;</td>
                        <td headers="Cards quickbooks">&bull;</td>
                        <td headers="Cards futurelearn">&bull;</td>
                        <td headers="Cards polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Carousel">Carousel</th>
                        <td headers="Carousel carbon">&bull;</td>
                        <td headers="Carousel lightning">&bull;</td>
                        <td headers="Carousel usds">&bull;</td>
                        <td headers="Carousel atlassian">&bull;</td>
                        <td headers="Carousel quickbooks">&bull;</td>
                        <td headers="Carousel futurelearn">&bull;</td>
                        <td headers="Carousel polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Chat">Chat</th>
                        <td headers="Chat carbon">&bull;</td>
                        <td headers="Chat lightning">&bull;</td>
                        <td headers="Chat usds">&bull;</td>
                        <td headers="Chat atlassian">&bull;</td>
                        <td headers="Chat quickbooks">&bull;</td>
                        <td headers="Chat futurelearn">&bull;</td>
                        <td headers="Chat polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Checkbox">Checkbox</th>
                        <td headers="Checkbox carbon">&bull;</td>
                        <td headers="Checkbox lightning">&bull;</td>
                        <td headers="Checkbox usds">&bull;</td>
                        <td headers="Checkbox atlassian">&bull;</td>
                        <td headers="Checkbox quickbooks">&bull;</td>
                        <td headers="Checkbox futurelearn">&bull;</td>
                        <td headers="Checkbox polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Checkbox-Buttons Group">Checkbox Buttons Group</th>
                        <td headers="Checkbox-Buttons Group carbon">&bull;</td>
                        <td headers="Checkbox-Buttons Group lightning">&bull;</td>
                        <td headers="Checkbox-Buttons Group usds">&bull;</td>
                        <td headers="Checkbox-Buttons Group atlassian">&bull;</td>
                        <td headers="Checkbox-Buttons Group quickbooks">&bull;</td>
                        <td headers="Checkbox-Buttons Group futurelearn">&bull;</td>
                        <td headers="Checkbox-Buttons Group polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Checkbox-Toggle">Checkbox Toggle</th>
                        <td headers="Checkbox-Toggle carbon">&bull;</td>
                        <td headers="Checkbox-Toggle lightning">&bull;</td>
                        <td headers="Checkbox-Toggle usds">&bull;</td>
                        <td headers="Checkbox-Toggle atlassian">&bull;</td>
                        <td headers="Checkbox-Toggle quickbooks">&bull;</td>
                        <td headers="Checkbox-Toggle futurelearn">&bull;</td>
                        <td headers="Checkbox-Toggle polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Checkbox">Checkbox</th>
                        <td headers="Checkbox carbon">&bull;</td>
                        <td headers="Checkbox lightning">&bull;</td>
                        <td headers="Checkbox usds">&bull;</td>
                        <td headers="Checkbox atlassian">&bull;</td>
                        <td headers="Checkbox quickbooks">&bull;</td>
                        <td headers="Checkbox futurelearn">&bull;</td>
                        <td headers="Checkbox polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Code-Snippet">Code Snippet</th>
                        <td headers="Code-Snippet carbon">&bull;</td>
                        <td headers="Code-Snippet lightning">&bull;</td>
                        <td headers="Code-Snippet usds">&bull;</td>
                        <td headers="Code-Snippet atlassian">&bull;</td>
                        <td headers="Code-Snippet quickbooks">&bull;</td>
                        <td headers="Code-Snippet futurelearn">&bull;</td>
                        <td headers="Code-Snippet polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Color-Picker">Color Picker</th>
                        <td headers="Color-Picker carbon">&bull;</td>
                        <td headers="Color-Picker lightning">&bull;</td>
                        <td headers="Color-Picker usds">&bull;</td>
                        <td headers="Color-Picker atlassian">&bull;</td>
                        <td headers="Color-Picker quickbooks">&bull;</td>
                        <td headers="Color-Picker futurelearn">&bull;</td>
                        <td headers="Color-Picker polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Combobox">Combobox</th>
                        <td headers="Combobox carbon">&bull;</td>
                        <td headers="Combobox lightning">&bull;</td>
                        <td headers="Combobox usds">&bull;</td>
                        <td headers="Combobox atlassian">&bull;</td>
                        <td headers="Combobox quickbooks">&bull;</td>
                        <td headers="Combobox futurelearn">&bull;</td>
                        <td headers="Combobox polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Context-Switcher">Context Switcher</th>
                        <td headers="Context-Switcher carbon">&bull;</td>
                        <td headers="Context-Switcher lightning">&bull;</td>
                        <td headers="Context-Switcher usds">&bull;</td>
                        <td headers="Context-Switcher atlassian">&bull;</td>
                        <td headers="Context-Switcher quickbooks">&bull;</td>
                        <td headers="Context-Switcher futurelearn">&bull;</td>
                        <td headers="Context-Switcher polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Data-table">Data table</th>
                        <td headers="Data-table carbon">&bull;</td>
                        <td headers="Data-table lightning">&bull;</td>
                        <td headers="Data-table usds">&bull;</td>
                        <td headers="Data-table atlassian">&bull;</td>
                        <td headers="Data-table quickbooks">&bull;</td>
                        <td headers="Data-table futurelearn">&bull;</td>
                        <td headers="Data-table polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Data-vis">Data vis</th>
                        <td headers="Data-vis carbon">&bull;</td>
                        <td headers="Data-vis lightning">&bull;</td>
                        <td headers="Data-vis usds">&bull;</td>
                        <td headers="Data-vis atlassian">&bull;</td>
                        <td headers="Data-vis quickbooks">&bull;</td>
                        <td headers="Data-vis futurelearn">&bull;</td>
                        <td headers="Data-vis polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Date-Picker">Date Picker</th>
                        <td headers="Date-Picker carbon">&bull;</td>
                        <td headers="Date-Picker lightning">&bull;</td>
                        <td headers="Date-Picker usds">&bull;</td>
                        <td headers="Date-Picker atlassian">&bull;</td>
                        <td headers="Date-Picker quickbooks">&bull;</td>
                        <td headers="Date-Picker futurelearn">&bull;</td>
                        <td headers="Date-Picker polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Datetime-Picker">Datetime Picker</th>
                        <td headers="Datetime-Picker carbon">&bull;</td>
                        <td headers="Datetime-Picker lightning">&bull;</td>
                        <td headers="Datetime-Picker usds">&bull;</td>
                        <td headers="Datetime-Picker atlassian">&bull;</td>
                        <td headers="Datetime-Picker quickbooks">&bull;</td>
                        <td headers="Datetime-Picker futurelearn">&bull;</td>
                        <td headers="Datetime-Picker polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Description-List">Description List</th>
                        <td headers="Description-List carbon">&bull;</td>
                        <td headers="Description-List lightning">&bull;</td>
                        <td headers="Description-List usds">&bull;</td>
                        <td headers="Description-List atlassian">&bull;</td>
                        <td headers="Description-List quickbooks">&bull;</td>
                        <td headers="Description-List futurelearn">&bull;</td>
                        <td headers="Description-List polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Dividers">Dividers</th>
                        <td headers="Dividers carbon">&bull;</td>
                        <td headers="Dividers lightning">&bull;</td>
                        <td headers="Dividers usds">&bull;</td>
                        <td headers="Dividers atlassian">&bull;</td>
                        <td headers="Dividers quickbooks">&bull;</td>
                        <td headers="Dividers futurelearn">&bull;</td>
                        <td headers="Dividers polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Docked-Composer">Docked Composer</th>
                        <td headers="Docked-Composer carbon">&bull;</td>
                        <td headers="Docked-Composer lightning">&bull;</td>
                        <td headers="Docked-Composer usds">&bull;</td>
                        <td headers="Docked-Composer atlassian">&bull;</td>
                        <td headers="Docked-Composer quickbooks">&bull;</td>
                        <td headers="Docked-Composer futurelearn">&bull;</td>
                        <td headers="Docked-Composer polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Docked-Form Footer">Docked Form Footer</th>
                        <td headers="Docked-Form Footer carbon">&bull;</td>
                        <td headers="Docked-Form Footer lightning">&bull;</td>
                        <td headers="Docked-Form Footer usds">&bull;</td>
                        <td headers="Docked-Form Footer atlassian">&bull;</td>
                        <td headers="Docked-Form Footer quickbooks">&bull;</td>
                        <td headers="Docked-Form Footer futurelearn">&bull;</td>
                        <td headers="Docked-Form Footer polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Docked-Utility Bar">Docked Utility Bar</th>
                        <td headers="Docked-Utility Bar carbon">&bull;</td>
                        <td headers="Docked-Utility Bar lightning">&bull;</td>
                        <td headers="Docked-Utility Bar usds">&bull;</td>
                        <td headers="Docked-Utility Bar atlassian">&bull;</td>
                        <td headers="Docked-Utility Bar quickbooks">&bull;</td>
                        <td headers="Docked-Utility Bar futurelearn">&bull;</td>
                        <td headers="Docked-Utility Bar polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Drawers">Drawers</th>
                        <td headers="Drawers carbon">&bull;</td>
                        <td headers="Drawers lightning">&bull;</td>
                        <td headers="Drawers usds">&bull;</td>
                        <td headers="Drawers atlassian">&bull;</td>
                        <td headers="Drawers quickbooks">&bull;</td>
                        <td headers="Drawers futurelearn">&bull;</td>
                        <td headers="Drawers polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Dropdown">Dropdown</th>
                        <td headers="Dropdown carbon">&bull;</td>
                        <td headers="Dropdown lightning">&bull;</td>
                        <td headers="Dropdown usds">&bull;</td>
                        <td headers="Dropdown atlassian">&bull;</td>
                        <td headers="Dropdown quickbooks">&bull;</td>
                        <td headers="Dropdown futurelearn">&bull;</td>
                        <td headers="Dropdown polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Drop-Zone">Drop Zone</th>
                        <td headers="Drop-Zone carbon">&bull;</td>
                        <td headers="Drop-Zone lightning">&bull;</td>
                        <td headers="Drop-Zone usds">&bull;</td>
                        <td headers="Drop-Zone atlassian">&bull;</td>
                        <td headers="Drop-Zone quickbooks">&bull;</td>
                        <td headers="Drop-Zone futurelearn">&bull;</td>
                        <td headers="Drop-Zone polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Dueling-Picklist">Dueling Picklist</th>
                        <td headers="Dueling-Picklist carbon">&bull;</td>
                        <td headers="Dueling-Picklist lightning">&bull;</td>
                        <td headers="Dueling-Picklist usds">&bull;</td>
                        <td headers="Dueling-Picklist atlassian">&bull;</td>
                        <td headers="Dueling-Picklist quickbooks">&bull;</td>
                        <td headers="Dueling-Picklist futurelearn">&bull;</td>
                        <td headers="Dueling-Picklist polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Dynamic-Icons">Dynamic Icons</th>
                        <td headers="Dynamic-Icons carbon">&bull;</td>
                        <td headers="Dynamic-Icons lightning">&bull;</td>
                        <td headers="Dynamic-Icons usds">&bull;</td>
                        <td headers="Dynamic-Icons atlassian">&bull;</td>
                        <td headers="Dynamic-Icons quickbooks">&bull;</td>
                        <td headers="Dynamic-Icons futurelearn">&bull;</td>
                        <td headers="Dynamic-Icons polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Dynamic-Menu">Dynamic Menu</th>
                        <td headers="Dynamic-Menu carbon">&bull;</td>
                        <td headers="Dynamic-Menu lightning">&bull;</td>
                        <td headers="Dynamic-Menu usds">&bull;</td>
                        <td headers="Dynamic-Menu atlassian">&bull;</td>
                        <td headers="Dynamic-Menu quickbooks">&bull;</td>
                        <td headers="Dynamic-Menu futurelearn">&bull;</td>
                        <td headers="Dynamic-Menu polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Empty-State">Empty State</th>
                        <td headers="Empty-State carbon">&bull;</td>
                        <td headers="Empty-State lightning">&bull;</td>
                        <td headers="Empty-State usds">&bull;</td>
                        <td headers="Empty-State atlassian">&bull;</td>
                        <td headers="Empty-State quickbooks">&bull;</td>
                        <td headers="Empty-State futurelearn">&bull;</td>
                        <td headers="Empty-State polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="End-of Flow Confirmation">End of Flow Confirmation</th>
                        <td headers="End-of Flow Confirmation carbon">&bull;</td>
                        <td headers="End-of Flow Confirmation lightning">&bull;</td>
                        <td headers="End-of Flow Confirmation usds">&bull;</td>
                        <td headers="End-of Flow Confirmation atlassian">&bull;</td>
                        <td headers="End-of Flow Confirmation quickbooks">&bull;</td>
                        <td headers="End-of Flow Confirmation futurelearn">&bull;</td>
                        <td headers="End-of Flow Confirmation polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Expandable-Section">Expandable Section</th>
                        <td headers="Expandable-Section carbon">&bull;</td>
                        <td headers="Expandable-Section lightning">&bull;</td>
                        <td headers="Expandable-Section usds">&bull;</td>
                        <td headers="Expandable-Section atlassian">&bull;</td>
                        <td headers="Expandable-Section quickbooks">&bull;</td>
                        <td headers="Expandable-Section futurelearn">&bull;</td>
                        <td headers="Expandable-Section polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Exception-List">Exception List</th>
                        <td headers="Exception-List carbon">&bull;</td>
                        <td headers="Exception-List lightning">&bull;</td>
                        <td headers="Exception-List usds">&bull;</td>
                        <td headers="Exception-List atlassian">&bull;</td>
                        <td headers="Exception-List quickbooks">&bull;</td>
                        <td headers="Exception-List futurelearn">&bull;</td>
                        <td headers="Exception-List polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Explanation">Explanation</th>
                        <td headers="Explanation carbon">&bull;</td>
                        <td headers="Explanation lightning">&bull;</td>
                        <td headers="Explanation usds">&bull;</td>
                        <td headers="Explanation atlassian">&bull;</td>
                        <td headers="Explanation quickbooks">&bull;</td>
                        <td headers="Explanation futurelearn">&bull;</td>
                        <td headers="Explanation polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Featurebox">Featurebox</th>
                        <td headers="Featurebox carbon">&bull;</td>
                        <td headers="Featurebox lightning">&bull;</td>
                        <td headers="Featurebox usds">&bull;</td>
                        <td headers="Featurebox atlassian">&bull;</td>
                        <td headers="Featurebox quickbooks">&bull;</td>
                        <td headers="Featurebox futurelearn">&bull;</td>
                        <td headers="Featurebox polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Feeds">Feeds</th>
                        <td headers="Feeds carbon">&bull;</td>
                        <td headers="Feeds lightning">&bull;</td>
                        <td headers="Feeds usds">&bull;</td>
                        <td headers="Feeds atlassian">&bull;</td>
                        <td headers="Feeds quickbooks">&bull;</td>
                        <td headers="Feeds futurelearn">&bull;</td>
                        <td headers="Feeds polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="File-Selector/Uploader">File Selector/Uploader</th>
                        <td headers="File-Selector/Uploader carbon">&bull;</td>
                        <td headers="File-Selector/Uploader lightning">&bull;</td>
                        <td headers="File-Selector/Uploader usds">&bull;</td>
                        <td headers="File-Selector/Uploader atlassian">&bull;</td>
                        <td headers="File-Selector/Uploader quickbooks">&bull;</td>
                        <td headers="File-Selector/Uploader futurelearn">&bull;</td>
                        <td headers="File-Selector/Uploader polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Files">Files</th>
                        <td headers="Files carbon">&bull;</td>
                        <td headers="Files lightning">&bull;</td>
                        <td headers="Files usds">&bull;</td>
                        <td headers="Files atlassian">&bull;</td>
                        <td headers="Files quickbooks">&bull;</td>
                        <td headers="Files futurelearn">&bull;</td>
                        <td headers="Files polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Flag">Flag</th>
                        <td headers="Flag carbon">&bull;</td>
                        <td headers="Flag lightning">&bull;</td>
                        <td headers="Flag usds">&bull;</td>
                        <td headers="Flag atlassian">&bull;</td>
                        <td headers="Flag quickbooks">&bull;</td>
                        <td headers="Flag futurelearn">&bull;</td>
                        <td headers="Flag polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Flyout">Flyout</th>
                        <td headers="Flyout carbon">&bull;</td>
                        <td headers="Flyout lightning">&bull;</td>
                        <td headers="Flyout usds">&bull;</td>
                        <td headers="Flyout atlassian">&bull;</td>
                        <td headers="Flyout quickbooks">&bull;</td>
                        <td headers="Flyout futurelearn">&bull;</td>
                        <td headers="Flyout polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Footers">Footers</th>
                        <td headers="Footers carbon">&bull;</td>
                        <td headers="Footers lightning">&bull;</td>
                        <td headers="Footers usds">&bull;</td>
                        <td headers="Footers atlassian">&bull;</td>
                        <td headers="Footers quickbooks">&bull;</td>
                        <td headers="Footers futurelearn">&bull;</td>
                        <td headers="Footers polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Form">Form</th>
                        <td headers="Form carbon">&bull;</td>
                        <td headers="Form lightning">&bull;</td>
                        <td headers="Form usds">&bull;</td>
                        <td headers="Form atlassian">&bull;</td>
                        <td headers="Form quickbooks">&bull;</td>
                        <td headers="Form futurelearn">&bull;</td>
                        <td headers="Form polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Global-Header">Global Header</th>
                        <td headers="Global-Header carbon">&bull;</td>
                        <td headers="Global-Header lightning">&bull;</td>
                        <td headers="Global-Header usds">&bull;</td>
                        <td headers="Global-Header atlassian">&bull;</td>
                        <td headers="Global-Header quickbooks">&bull;</td>
                        <td headers="Global-Header futurelearn">&bull;</td>
                        <td headers="Global-Header polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Global-Navigation">Global Navigation</th>
                        <td headers="Global-Navigation carbon">&bull;</td>
                        <td headers="Global-Navigation lightning">&bull;</td>
                        <td headers="Global-Navigation usds">&bull;</td>
                        <td headers="Global-Navigation atlassian">&bull;</td>
                        <td headers="Global-Navigation quickbooks">&bull;</td>
                        <td headers="Global-Navigation futurelearn">&bull;</td>
                        <td headers="Global-Navigation polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Grids">Grids</th>
                        <td headers="Grids carbon">&bull;</td>
                        <td headers="Grids lightning">&bull;</td>
                        <td headers="Grids usds">&bull;</td>
                        <td headers="Grids atlassian">&bull;</td>
                        <td headers="Grids quickbooks">&bull;</td>
                        <td headers="Grids futurelearn">&bull;</td>
                        <td headers="Grids polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Headings">Headings</th>
                        <td headers="Headings carbon">&bull;</td>
                        <td headers="Headings lightning">&bull;</td>
                        <td headers="Headings usds">&bull;</td>
                        <td headers="Headings atlassian">&bull;</td>
                        <td headers="Headings quickbooks">&bull;</td>
                        <td headers="Headings futurelearn">&bull;</td>
                        <td headers="Headings polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Icons">Icons</th>
                        <td headers="Icons carbon">&bull;</td>
                        <td headers="Icons lightning">&bull;</td>
                        <td headers="Icons usds">&bull;</td>
                        <td headers="Icons atlassian">&bull;</td>
                        <td headers="Icons quickbooks">&bull;</td>
                        <td headers="Icons futurelearn">&bull;</td>
                        <td headers="Icons polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Illustration">Illustration</th>
                        <td headers="Illustration carbon">&bull;</td>
                        <td headers="Illustration lightning">&bull;</td>
                        <td headers="Illustration usds">&bull;</td>
                        <td headers="Illustration atlassian">&bull;</td>
                        <td headers="Illustration quickbooks">&bull;</td>
                        <td headers="Illustration futurelearn">&bull;</td>
                        <td headers="Illustration polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Info-Link">Info Link</th>
                        <td headers="Info-Link carbon">&bull;</td>
                        <td headers="Info-Link lightning">&bull;</td>
                        <td headers="Info-Link usds">&bull;</td>
                        <td headers="Info-Link atlassian">&bull;</td>
                        <td headers="Info-Link quickbooks">&bull;</td>
                        <td headers="Info-Link futurelearn">&bull;</td>
                        <td headers="Info-Link polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Labels">Labels</th>
                        <td headers="Labels carbon">&bull;</td>
                        <td headers="Labels lightning">&bull;</td>
                        <td headers="Labels usds">&bull;</td>
                        <td headers="Labels atlassian">&bull;</td>
                        <td headers="Labels quickbooks">&bull;</td>
                        <td headers="Labels futurelearn">&bull;</td>
                        <td headers="Labels polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Link">Link</th>
                        <td headers="Link carbon">&bull;</td>
                        <td headers="Link lightning">&bull;</td>
                        <td headers="Link usds">&bull;</td>
                        <td headers="Link atlassian">&bull;</td>
                        <td headers="Link quickbooks">&bull;</td>
                        <td headers="Link futurelearn">&bull;</td>
                        <td headers="Link polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="List">List</th>
                        <td headers="List carbon">&bull;</td>
                        <td headers="List lightning">&bull;</td>
                        <td headers="List usds">&bull;</td>
                        <td headers="List atlassian">&bull;</td>
                        <td headers="List quickbooks">&bull;</td>
                        <td headers="List futurelearn">&bull;</td>
                        <td headers="List polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="List-Builder">List Builder</th>
                        <td headers="List-Builder carbon">&bull;</td>
                        <td headers="List-Builder lightning">&bull;</td>
                        <td headers="List-Builder usds">&bull;</td>
                        <td headers="List-Builder atlassian">&bull;</td>
                        <td headers="List-Builder quickbooks">&bull;</td>
                        <td headers="List-Builder futurelearn">&bull;</td>
                        <td headers="List-Builder polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Loading/Spinners">Loading/Spinners</th>
                        <td headers="Loading/Spinners carbon">&bull;</td>
                        <td headers="Loading/Spinners lightning">&bull;</td>
                        <td headers="Loading/Spinners usds">&bull;</td>
                        <td headers="Loading/Spinners atlassian">&bull;</td>
                        <td headers="Loading/Spinners quickbooks">&bull;</td>
                        <td headers="Loading/Spinners futurelearn">&bull;</td>
                        <td headers="Loading/Spinners polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Logos-in Product">Logos in Product</th>
                        <td headers="Logos-in Product carbon">&bull;</td>
                        <td headers="Logos-in Product lightning">&bull;</td>
                        <td headers="Logos-in Product usds">&bull;</td>
                        <td headers="Logos-in Product atlassian">&bull;</td>
                        <td headers="Logos-in Product quickbooks">&bull;</td>
                        <td headers="Logos-in Product futurelearn">&bull;</td>
                        <td headers="Logos-in Product polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Lookups">Lookups</th>
                        <td headers="Lookups carbon">&bull;</td>
                        <td headers="Lookups lightning">&bull;</td>
                        <td headers="Lookups usds">&bull;</td>
                        <td headers="Lookups atlassian">&bull;</td>
                        <td headers="Lookups quickbooks">&bull;</td>
                        <td headers="Lookups futurelearn">&bull;</td>
                        <td headers="Lookups polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Lozenges">Lozenges</th>
                        <td headers="Lozenges carbon">&bull;</td>
                        <td headers="Lozenges lightning">&bull;</td>
                        <td headers="Lozenges usds">&bull;</td>
                        <td headers="Lozenges atlassian">&bull;</td>
                        <td headers="Lozenges quickbooks">&bull;</td>
                        <td headers="Lozenges futurelearn">&bull;</td>
                        <td headers="Lozenges polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Map">Map</th>
                        <td headers="Map carbon">&bull;</td>
                        <td headers="Map lightning">&bull;</td>
                        <td headers="Map usds">&bull;</td>
                        <td headers="Map atlassian">&bull;</td>
                        <td headers="Map quickbooks">&bull;</td>
                        <td headers="Map futurelearn">&bull;</td>
                        <td headers="Map polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Menus">Menus</th>
                        <td headers="Menus carbon">&bull;</td>
                        <td headers="Menus lightning">&bull;</td>
                        <td headers="Menus usds">&bull;</td>
                        <td headers="Menus atlassian">&bull;</td>
                        <td headers="Menus quickbooks">&bull;</td>
                        <td headers="Menus futurelearn">&bull;</td>
                        <td headers="Menus polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Modal">Modal</th>
                        <td headers="Modal carbon">&bull;</td>
                        <td headers="Modal lightning">&bull;</td>
                        <td headers="Modal usds">&bull;</td>
                        <td headers="Modal atlassian">&bull;</td>
                        <td headers="Modal quickbooks">&bull;</td>
                        <td headers="Modal futurelearn">&bull;</td>
                        <td headers="Modal polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Multi-select">Multi-select</th>
                        <td headers="Multi-select carbon">&bull;</td>
                        <td headers="Multi-select lightning">&bull;</td>
                        <td headers="Multi-select usds">&bull;</td>
                        <td headers="Multi-select atlassian">&bull;</td>
                        <td headers="Multi-select quickbooks">&bull;</td>
                        <td headers="Multi-select futurelearn">&bull;</td>
                        <td headers="Multi-select polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Notification">Notification</th>
                        <td headers="Notification carbon">&bull;</td>
                        <td headers="Notification lightning">&bull;</td>
                        <td headers="Notification usds">&bull;</td>
                        <td headers="Notification atlassian">&bull;</td>
                        <td headers="Notification quickbooks">&bull;</td>
                        <td headers="Notification futurelearn">&bull;</td>
                        <td headers="Notification polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Number-Input">Number Input</th>
                        <td headers="Number-Input carbon">&bull;</td>
                        <td headers="Number-Input lightning">&bull;</td>
                        <td headers="Number-Input usds">&bull;</td>
                        <td headers="Number-Input atlassian">&bull;</td>
                        <td headers="Number-Input quickbooks">&bull;</td>
                        <td headers="Number-Input futurelearn">&bull;</td>
                        <td headers="Number-Input polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Overflow-Menu">Overflow Menu</th>
                        <td headers="Overflow-Menu carbon">&bull;</td>
                        <td headers="Overflow-Menu lightning">&bull;</td>
                        <td headers="Overflow-Menu usds">&bull;</td>
                        <td headers="Overflow-Menu atlassian">&bull;</td>
                        <td headers="Overflow-Menu quickbooks">&bull;</td>
                        <td headers="Overflow-Menu futurelearn">&bull;</td>
                        <td headers="Overflow-Menu polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Page-Headers">Page Headers</th>
                        <td headers="Page-Headers carbon">&bull;</td>
                        <td headers="Page-Headers lightning">&bull;</td>
                        <td headers="Page-Headers usds">&bull;</td>
                        <td headers="Page-Headers atlassian">&bull;</td>
                        <td headers="Page-Headers quickbooks">&bull;</td>
                        <td headers="Page-Headers futurelearn">&bull;</td>
                        <td headers="Page-Headers polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Pagination">Pagination</th>
                        <td headers="Pagination carbon">&bull;</td>
                        <td headers="Pagination lightning">&bull;</td>
                        <td headers="Pagination usds">&bull;</td>
                        <td headers="Pagination atlassian">&bull;</td>
                        <td headers="Pagination quickbooks">&bull;</td>
                        <td headers="Pagination futurelearn">&bull;</td>
                        <td headers="Pagination polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Panels">Panels</th>
                        <td headers="Panels carbon">&bull;</td>
                        <td headers="Panels lightning">&bull;</td>
                        <td headers="Panels usds">&bull;</td>
                        <td headers="Panels atlassian">&bull;</td>
                        <td headers="Panels quickbooks">&bull;</td>
                        <td headers="Panels futurelearn">&bull;</td>
                        <td headers="Panels polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Path">Path</th>
                        <td headers="Path carbon">&bull;</td>
                        <td headers="Path lightning">&bull;</td>
                        <td headers="Path usds">&bull;</td>
                        <td headers="Path atlassian">&bull;</td>
                        <td headers="Path quickbooks">&bull;</td>
                        <td headers="Path futurelearn">&bull;</td>
                        <td headers="Path polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Picklist">Picklist</th>
                        <td headers="Picklist carbon">&bull;</td>
                        <td headers="Picklist lightning">&bull;</td>
                        <td headers="Picklist usds">&bull;</td>
                        <td headers="Picklist atlassian">&bull;</td>
                        <td headers="Picklist quickbooks">&bull;</td>
                        <td headers="Picklist futurelearn">&bull;</td>
                        <td headers="Picklist polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Pills">Pills</th>
                        <td headers="Pills carbon">&bull;</td>
                        <td headers="Pills lightning">&bull;</td>
                        <td headers="Pills usds">&bull;</td>
                        <td headers="Pills atlassian">&bull;</td>
                        <td headers="Pills quickbooks">&bull;</td>
                        <td headers="Pills futurelearn">&bull;</td>
                        <td headers="Pills polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Popovers">Popovers</th>
                        <td headers="Popovers carbon">&bull;</td>
                        <td headers="Popovers lightning">&bull;</td>
                        <td headers="Popovers usds">&bull;</td>
                        <td headers="Popovers atlassian">&bull;</td>
                        <td headers="Popovers quickbooks">&bull;</td>
                        <td headers="Popovers futurelearn">&bull;</td>
                        <td headers="Popovers polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Progress-Bar">Progress Bar</th>
                        <td headers="Progress-Bar carbon">&bull;</td>
                        <td headers="Progress-Bar lightning">&bull;</td>
                        <td headers="Progress-Bar usds">&bull;</td>
                        <td headers="Progress-Bar atlassian">&bull;</td>
                        <td headers="Progress-Bar quickbooks">&bull;</td>
                        <td headers="Progress-Bar futurelearn">&bull;</td>
                        <td headers="Progress-Bar polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Progress-Indicator">Progress Indicator</th>
                        <td headers="Progress-Indicator carbon">&bull;</td>
                        <td headers="Progress-Indicator lightning">&bull;</td>
                        <td headers="Progress-Indicator usds">&bull;</td>
                        <td headers="Progress-Indicator atlassian">&bull;</td>
                        <td headers="Progress-Indicator quickbooks">&bull;</td>
                        <td headers="Progress-Indicator futurelearn">&bull;</td>
                        <td headers="Progress-Indicator polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Progress-Ring">Progress Ring</th>
                        <td headers="Progress-Ring carbon">&bull;</td>
                        <td headers="Progress-Ring lightning">&bull;</td>
                        <td headers="Progress-Ring usds">&bull;</td>
                        <td headers="Progress-Ring atlassian">&bull;</td>
                        <td headers="Progress-Ring quickbooks">&bull;</td>
                        <td headers="Progress-Ring futurelearn">&bull;</td>
                        <td headers="Progress-Ring polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Progress-Toggle">Progress Toggle</th>
                        <td headers="Progress-Toggle carbon">&bull;</td>
                        <td headers="Progress-Toggle lightning">&bull;</td>
                        <td headers="Progress-Toggle usds">&bull;</td>
                        <td headers="Progress-Toggle atlassian">&bull;</td>
                        <td headers="Progress-Toggle quickbooks">&bull;</td>
                        <td headers="Progress-Toggle futurelearn">&bull;</td>
                        <td headers="Progress-Toggle polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Promo-Banner">Promo Banner</th>
                        <td headers="Promo-Banner carbon">&bull;</td>
                        <td headers="Promo-Banner lightning">&bull;</td>
                        <td headers="Promo-Banner usds">&bull;</td>
                        <td headers="Promo-Banner atlassian">&bull;</td>
                        <td headers="Promo-Banner quickbooks">&bull;</td>
                        <td headers="Promo-Banner futurelearn">&bull;</td>
                        <td headers="Promo-Banner polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Prompt">Prompt</th>
                        <td headers="Prompt carbon">&bull;</td>
                        <td headers="Prompt lightning">&bull;</td>
                        <td headers="Prompt usds">&bull;</td>
                        <td headers="Prompt atlassian">&bull;</td>
                        <td headers="Prompt quickbooks">&bull;</td>
                        <td headers="Prompt futurelearn">&bull;</td>
                        <td headers="Prompt polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Publishers">Publishers</th>
                        <td headers="Publishers carbon">&bull;</td>
                        <td headers="Publishers lightning">&bull;</td>
                        <td headers="Publishers usds">&bull;</td>
                        <td headers="Publishers atlassian">&bull;</td>
                        <td headers="Publishers quickbooks">&bull;</td>
                        <td headers="Publishers futurelearn">&bull;</td>
                        <td headers="Publishers polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Quiz-Progress Nav">Quiz Progress Nav</th>
                        <td headers="Quiz-Progress Nav carbon">&bull;</td>
                        <td headers="Quiz-Progress Nav lightning">&bull;</td>
                        <td headers="Quiz-Progress Nav usds">&bull;</td>
                        <td headers="Quiz-Progress Nav atlassian">&bull;</td>
                        <td headers="Quiz-Progress Nav quickbooks">&bull;</td>
                        <td headers="Quiz-Progress Nav futurelearn">&bull;</td>
                        <td headers="Quiz-Progress Nav polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Range-Slider">Range Slider</th>
                        <td headers="Range-Slider carbon">&bull;</td>
                        <td headers="Range-Slider lightning">&bull;</td>
                        <td headers="Range-Slider usds">&bull;</td>
                        <td headers="Range-Slider atlassian">&bull;</td>
                        <td headers="Range-Slider quickbooks">&bull;</td>
                        <td headers="Range-Slider futurelearn">&bull;</td>
                        <td headers="Range-Slider polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Radio-button/Choice List">Radio button/Choice List</th>
                        <td headers="Radio-button/Choice List carbon">&bull;</td>
                        <td headers="Radio-button/Choice List lightning">&bull;</td>
                        <td headers="Radio-button/Choice List usds">&bull;</td>
                        <td headers="Radio-button/Choice List atlassian">&bull;</td>
                        <td headers="Radio-button/Choice List quickbooks">&bull;</td>
                        <td headers="Radio-button/Choice List futurelearn">&bull;</td>
                        <td headers="Radio-button/Choice List polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Resource-List">Resource List</th>
                        <td headers="Resource-List carbon">&bull;</td>
                        <td headers="Resource-List lightning">&bull;</td>
                        <td headers="Resource-List usds">&bull;</td>
                        <td headers="Resource-List atlassian">&bull;</td>
                        <td headers="Resource-List quickbooks">&bull;</td>
                        <td headers="Resource-List futurelearn">&bull;</td>
                        <td headers="Resource-List polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Ribbons">Ribbons</th>
                        <td headers="Ribbons carbon">&bull;</td>
                        <td headers="Ribbons lightning">&bull;</td>
                        <td headers="Ribbons usds">&bull;</td>
                        <td headers="Ribbons atlassian">&bull;</td>
                        <td headers="Ribbons quickbooks">&bull;</td>
                        <td headers="Ribbons futurelearn">&bull;</td>
                        <td headers="Ribbons polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Rich-Text Editor">Rich Text Editor</th>
                        <td headers="Rich-Text Editor carbon">&bull;</td>
                        <td headers="Rich-Text Editor lightning">&bull;</td>
                        <td headers="Rich-Text Editor usds">&bull;</td>
                        <td headers="Rich-Text Editor atlassian">&bull;</td>
                        <td headers="Rich-Text Editor quickbooks">&bull;</td>
                        <td headers="Rich-Text Editor futurelearn">&bull;</td>
                        <td headers="Rich-Text Editor polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Scoped-Notifications">Scoped Notifications</th>
                        <td headers="Scoped-Notifications carbon">&bull;</td>
                        <td headers="Scoped-Notifications lightning">&bull;</td>
                        <td headers="Scoped-Notifications usds">&bull;</td>
                        <td headers="Scoped-Notifications atlassian">&bull;</td>
                        <td headers="Scoped-Notifications quickbooks">&bull;</td>
                        <td headers="Scoped-Notifications futurelearn">&bull;</td>
                        <td headers="Scoped-Notifications polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Scoped-Tabs">Scoped Tabs</th>
                        <td headers="Scoped-Tabs carbon">&bull;</td>
                        <td headers="Scoped-Tabs lightning">&bull;</td>
                        <td headers="Scoped-Tabs usds">&bull;</td>
                        <td headers="Scoped-Tabs atlassian">&bull;</td>
                        <td headers="Scoped-Tabs quickbooks">&bull;</td>
                        <td headers="Scoped-Tabs futurelearn">&bull;</td>
                        <td headers="Scoped-Tabs polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Search">Search</th>
                        <td headers="Search carbon">&bull;</td>
                        <td headers="Search lightning">&bull;</td>
                        <td headers="Search usds">&bull;</td>
                        <td headers="Search atlassian">&bull;</td>
                        <td headers="Search quickbooks">&bull;</td>
                        <td headers="Search futurelearn">&bull;</td>
                        <td headers="Search polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Select">Select</th>
                        <td headers="Select carbon">&bull;</td>
                        <td headers="Select lightning">&bull;</td>
                        <td headers="Select usds">&bull;</td>
                        <td headers="Select atlassian">&bull;</td>
                        <td headers="Select quickbooks">&bull;</td>
                        <td headers="Select futurelearn">&bull;</td>
                        <td headers="Select polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Setup-Assistant">Setup Assistant</th>
                        <td headers="Setup-Assistant carbon">&bull;</td>
                        <td headers="Setup-Assistant lightning">&bull;</td>
                        <td headers="Setup-Assistant usds">&bull;</td>
                        <td headers="Setup-Assistant atlassian">&bull;</td>
                        <td headers="Setup-Assistant quickbooks">&bull;</td>
                        <td headers="Setup-Assistant futurelearn">&bull;</td>
                        <td headers="Setup-Assistant polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Signpost">Signpost</th>
                        <td headers="Signpost carbon">&bull;</td>
                        <td headers="Signpost lightning">&bull;</td>
                        <td headers="Signpost usds">&bull;</td>
                        <td headers="Signpost atlassian">&bull;</td>
                        <td headers="Signpost quickbooks">&bull;</td>
                        <td headers="Signpost futurelearn">&bull;</td>
                        <td headers="Signpost polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Slider">Slider</th>
                        <td headers="Slider carbon">&bull;</td>
                        <td headers="Slider lightning">&bull;</td>
                        <td headers="Slider usds">&bull;</td>
                        <td headers="Slider atlassian">&bull;</td>
                        <td headers="Slider quickbooks">&bull;</td>
                        <td headers="Slider futurelearn">&bull;</td>
                        <td headers="Slider polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Split-View">Split View</th>
                        <td headers="Split-View carbon">&bull;</td>
                        <td headers="Split-View lightning">&bull;</td>
                        <td headers="Split-View usds">&bull;</td>
                        <td headers="Split-View atlassian">&bull;</td>
                        <td headers="Split-View quickbooks">&bull;</td>
                        <td headers="Split-View futurelearn">&bull;</td>
                        <td headers="Split-View polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Spotlight">Spotlight</th>
                        <td headers="Spotlight carbon">&bull;</td>
                        <td headers="Spotlight lightning">&bull;</td>
                        <td headers="Spotlight usds">&bull;</td>
                        <td headers="Spotlight atlassian">&bull;</td>
                        <td headers="Spotlight quickbooks">&bull;</td>
                        <td headers="Spotlight futurelearn">&bull;</td>
                        <td headers="Spotlight polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Step-Number">Step Number</th>
                        <td headers="Step-Number carbon">&bull;</td>
                        <td headers="Step-Number lightning">&bull;</td>
                        <td headers="Step-Number usds">&bull;</td>
                        <td headers="Step-Number atlassian">&bull;</td>
                        <td headers="Step-Number quickbooks">&bull;</td>
                        <td headers="Step-Number futurelearn">&bull;</td>
                        <td headers="Step-Number polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Structured-List">Structured List</th>
                        <td headers="Structured-List carbon">&bull;</td>
                        <td headers="Structured-List lightning">&bull;</td>
                        <td headers="Structured-List usds">&bull;</td>
                        <td headers="Structured-List atlassian">&bull;</td>
                        <td headers="Structured-List quickbooks">&bull;</td>
                        <td headers="Structured-List futurelearn">&bull;</td>
                        <td headers="Structured-List polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Summary-Detail">Summary Detail</th>
                        <td headers="Summary-Detail carbon">&bull;</td>
                        <td headers="Summary-Detail lightning">&bull;</td>
                        <td headers="Summary-Detail usds">&bull;</td>
                        <td headers="Summary-Detail atlassian">&bull;</td>
                        <td headers="Summary-Detail quickbooks">&bull;</td>
                        <td headers="Summary-Detail futurelearn">&bull;</td>
                        <td headers="Summary-Detail polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Tabs">Tabs</th>
                        <td headers="Tabs carbon">&bull;</td>
                        <td headers="Tabs lightning">&bull;</td>
                        <td headers="Tabs usds">&bull;</td>
                        <td headers="Tabs atlassian">&bull;</td>
                        <td headers="Tabs quickbooks">&bull;</td>
                        <td headers="Tabs futurelearn">&bull;</td>
                        <td headers="Tabs polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Tables">Tables</th>
                        <td headers="Tables carbon">&bull;</td>
                        <td headers="Tables lightning">&bull;</td>
                        <td headers="Tables usds">&bull;</td>
                        <td headers="Tables atlassian">&bull;</td>
                        <td headers="Tables quickbooks">&bull;</td>
                        <td headers="Tables futurelearn">&bull;</td>
                        <td headers="Tables polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Tag">Tag</th>
                        <td headers="Tag carbon">&bull;</td>
                        <td headers="Tag lightning">&bull;</td>
                        <td headers="Tag usds">&bull;</td>
                        <td headers="Tag atlassian">&bull;</td>
                        <td headers="Tag quickbooks">&bull;</td>
                        <td headers="Tag futurelearn">&bull;</td>
                        <td headers="Tag polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Testimonial">Testimonial</th>
                        <td headers="Testimonial carbon">&bull;</td>
                        <td headers="Testimonial lightning">&bull;</td>
                        <td headers="Testimonial usds">&bull;</td>
                        <td headers="Testimonial atlassian">&bull;</td>
                        <td headers="Testimonial quickbooks">&bull;</td>
                        <td headers="Testimonial futurelearn">&bull;</td>
                        <td headers="Testimonial polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Textarea">Textarea</th>
                        <td headers="Textarea carbon">&bull;</td>
                        <td headers="Textarea lightning">&bull;</td>
                        <td headers="Textarea usds">&bull;</td>
                        <td headers="Textarea atlassian">&bull;</td>
                        <td headers="Textarea quickbooks">&bull;</td>
                        <td headers="Textarea futurelearn">&bull;</td>
                        <td headers="Textarea polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Text-Input">Text Input</th>
                        <td headers="Text-Input carbon">&bull;</td>
                        <td headers="Text-Input lightning">&bull;</td>
                        <td headers="Text-Input usds">&bull;</td>
                        <td headers="Text-Input atlassian">&bull;</td>
                        <td headers="Text-Input quickbooks">&bull;</td>
                        <td headers="Text-Input futurelearn">&bull;</td>
                        <td headers="Text-Input polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Thumbnail">Thumbnail</th>
                        <td headers="Thumbnail carbon">&bull;</td>
                        <td headers="Thumbnail lightning">&bull;</td>
                        <td headers="Thumbnail usds">&bull;</td>
                        <td headers="Thumbnail atlassian">&bull;</td>
                        <td headers="Thumbnail quickbooks">&bull;</td>
                        <td headers="Thumbnail futurelearn">&bull;</td>
                        <td headers="Thumbnail polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Tile">Tile</th>
                        <td headers="Tile carbon">&bull;</td>
                        <td headers="Tile lightning">&bull;</td>
                        <td headers="Tile usds">&bull;</td>
                        <td headers="Tile atlassian">&bull;</td>
                        <td headers="Tile quickbooks">&bull;</td>
                        <td headers="Tile futurelearn">&bull;</td>
                        <td headers="Tile polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Timestamp">Timestamp</th>
                        <td headers="Timestamp carbon">&bull;</td>
                        <td headers="Timestamp lightning">&bull;</td>
                        <td headers="Timestamp usds">&bull;</td>
                        <td headers="Timestamp atlassian">&bull;</td>
                        <td headers="Timestamp quickbooks">&bull;</td>
                        <td headers="Timestamp futurelearn">&bull;</td>
                        <td headers="Timestamp polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Timepicker">Timepicker</th>
                        <td headers="Timepicker carbon">&bull;</td>
                        <td headers="Timepicker lightning">&bull;</td>
                        <td headers="Timepicker usds">&bull;</td>
                        <td headers="Timepicker atlassian">&bull;</td>
                        <td headers="Timepicker quickbooks">&bull;</td>
                        <td headers="Timepicker futurelearn">&bull;</td>
                        <td headers="Timepicker polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Toast">Toast</th>
                        <td headers="Toast carbon">&bull;</td>
                        <td headers="Toast lightning">&bull;</td>
                        <td headers="Toast usds">&bull;</td>
                        <td headers="Toast atlassian">&bull;</td>
                        <td headers="Toast quickbooks">&bull;</td>
                        <td headers="Toast futurelearn">&bull;</td>
                        <td headers="Toast polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Toggle/Switch">Toggle/Switch</th>
                        <td headers="Toggle/Switch carbon">&bull;</td>
                        <td headers="Toggle/Switch lightning">&bull;</td>
                        <td headers="Toggle/Switch usds">&bull;</td>
                        <td headers="Toggle/Switch atlassian">&bull;</td>
                        <td headers="Toggle/Switch quickbooks">&bull;</td>
                        <td headers="Toggle/Switch futurelearn">&bull;</td>
                        <td headers="Toggle/Switch polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Tooltip">Tooltip</th>
                        <td headers="Tooltip carbon">&bull;</td>
                        <td headers="Tooltip lightning">&bull;</td>
                        <td headers="Tooltip usds">&bull;</td>
                        <td headers="Tooltip atlassian">&bull;</td>
                        <td headers="Tooltip quickbooks">&bull;</td>
                        <td headers="Tooltip futurelearn">&bull;</td>
                        <td headers="Tooltip polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Trees">Trees</th>
                        <td headers="Trees carbon">&bull;</td>
                        <td headers="Trees lightning">&bull;</td>
                        <td headers="Trees usds">&bull;</td>
                        <td headers="Trees atlassian">&bull;</td>
                        <td headers="Trees quickbooks">&bull;</td>
                        <td headers="Trees futurelearn">&bull;</td>
                        <td headers="Trees polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Trial-Bar">Trial Bar</th>
                        <td headers="Trial-Bar carbon">&bull;</td>
                        <td headers="Trial-Bar lightning">&bull;</td>
                        <td headers="Trial-Bar usds">&bull;</td>
                        <td headers="Trial-Bar atlassian">&bull;</td>
                        <td headers="Trial-Bar quickbooks">&bull;</td>
                        <td headers="Trial-Bar futurelearn">&bull;</td>
                        <td headers="Trial-Bar polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Trowser">Trowser</th>
                        <td headers="Trowser carbon">&bull;</td>
                        <td headers="Trowser lightning">&bull;</td>
                        <td headers="Trowser usds">&bull;</td>
                        <td headers="Trowser atlassian">&bull;</td>
                        <td headers="Trowser quickbooks">&bull;</td>
                        <td headers="Trowser futurelearn">&bull;</td>
                        <td headers="Trowser polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Typeahead">Typeahead</th>
                        <td headers="Typeahead carbon">&bull;</td>
                        <td headers="Typeahead lightning">&bull;</td>
                        <td headers="Typeahead usds">&bull;</td>
                        <td headers="Typeahead atlassian">&bull;</td>
                        <td headers="Typeahead quickbooks">&bull;</td>
                        <td headers="Typeahead futurelearn">&bull;</td>
                        <td headers="Typeahead polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Vertical-Navigation/Side Navigation">Vertical Navigation/Side Navigation</th>
                        <td headers="Vertical-Navigation/Side Navigation carbon">&bull;</td>
                        <td headers="Vertical-Navigation/Side Navigation lightning">&bull;</td>
                        <td headers="Vertical-Navigation/Side Navigation usds">&bull;</td>
                        <td headers="Vertical-Navigation/Side Navigation atlassian">&bull;</td>
                        <td headers="Vertical-Navigation/Side Navigation quickbooks">&bull;</td>
                        <td headers="Vertical-Navigation/Side Navigation futurelearn">&bull;</td>
                        <td headers="Vertical-Navigation/Side Navigation polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Vertical-Tabs">Vertical Tabs</th>
                        <td headers="Vertical-Tabs carbon">&bull;</td>
                        <td headers="Vertical-Tabs lightning">&bull;</td>
                        <td headers="Vertical-Tabs usds">&bull;</td>
                        <td headers="Vertical-Tabs atlassian">&bull;</td>
                        <td headers="Vertical-Tabs quickbooks">&bull;</td>
                        <td headers="Vertical-Tabs futurelearn">&bull;</td>
                        <td headers="Vertical-Tabs polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Video">Video</th>
                        <td headers="Video carbon">&bull;</td>
                        <td headers="Video lightning">&bull;</td>
                        <td headers="Video usds">&bull;</td>
                        <td headers="Video atlassian">&bull;</td>
                        <td headers="Video quickbooks">&bull;</td>
                        <td headers="Video futurelearn">&bull;</td>
                        <td headers="Video polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Visual-Picker">Visual Picker</th>
                        <td headers="Visual-Picker carbon">&bull;</td>
                        <td headers="Visual-Picker lightning">&bull;</td>
                        <td headers="Visual-Picker usds">&bull;</td>
                        <td headers="Visual-Picker atlassian">&bull;</td>
                        <td headers="Visual-Picker quickbooks">&bull;</td>
                        <td headers="Visual-Picker futurelearn">&bull;</td>
                        <td headers="Visual-Picker polaris">&bull;</td>
                    </tr>
                    <tr>
                        <th scope="row" class="dm-u-align--left" id="Welcome-Mat">Welcome Mat</th>
                        <td headers="Welcome-Mat carbon">&bull;</td>
                        <td headers="Welcome-Mat lightning">&bull;</td>
                        <td headers="Welcome-Mat usds">&bull;</td>
                        <td headers="Welcome-Mat atlassian">&bull;</td>
                        <td headers="Welcome-Mat quickbooks">&bull;</td>
                        <td headers="Welcome-Mat futurelearn">&bull;</td>
                        <td headers="Welcome-Mat polaris">&bull;</td>
                    </tr>
                </tbody>
            </table>

        </div>

        <section id="up-next" class="dm-c-upNext">

            <h1 class="dm-c-upNext_kicker">Up Next</h1>

            <h2 class="dm-c-upNext_title">
                <a href="/articles/onlyness/">
                    The Only-ness <span class="dm-c-upNext_title_lastWord">Statement</span>
                </a>
            </h2>

        </section><!-- .dm-c-upNext -->

    </main>



    <section id="comments" class="dm-c-comments">      
            
        <div class="main">
            
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