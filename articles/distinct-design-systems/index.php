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
    <style type="text/css">
        td {
            text-align: center;
        }
    </style>
    
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

        <h2 class="dm-c-pageHeader_date">June 13, 2018 at 11:04 <abbr title="Post Meridien">PM</abbr></h2>

    </header><!-- .page-header -->

    <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1696&amp;serve=CVYD42T&amp;placement=danielmallcom" id="_carbonads_js"></script>

    <main role="main" class="dm-c-articleWell">

        <div class="dm-dp-textPassage">

            <p><span class="dm-dp-openingLines">Do we have</span> too many design systems?</p>

            <p>Clearly, I&rsquo;m biased: most of <a href="http://superfriend.ly/">SuperFriendly</a>&rsquo;s work nowadays involves either creating a design system or modifying one as part of a larger effort for a client. But why even go through any of that effort in the first place?</p>

            <p>When I started <a href="http://v3.danielmall.com/articles/researching-design-systems/">researching design systems</a> for <a href="https://bigmedium.com/projects/unity-design-system-exxonmobil.html">Unity</a>, the design system we made for ExxonMobil, my biggest observation was that the digital design systems out at the time were extremely generic. There&rsquo;s a lot of benefit to that: part of the job of a design system is to <a href="https://bigmedium.com/ideas/boring-design-systems.html">take care of the boring stuff</a> to free you up to tackle the more exciting and challenging bits, so some amount of convention is expected and encouraged. That genericness is what allows designers and developers to create quickly, not to overthink our interfaces and unnecessarily reinvent the wheel. It&rsquo;s no surprise that <a href="http://getbootstrap.com/">Bootstrap</a> is as popular as it is: you can build something significant with even a basic understanding of <abbr title="HyperText Markup Language">HTML</abbr>, <abbr title="Cascading Style Sheets">CSS</abbr>, and <abbr title="JavaScript">JS</abbr> without a lot of fuss. And <a href="https://www.uplabs.com/search?q=material">a quick search on UpLabs</a> shows how much can be done with Google&rsquo;s <a href="https://material.io/">Material Design</a>.</p>

            <p>Sometimes, though, we need better tools. In fact, a lot of our design system work has used &ldquo;better than Bootstrap&rdquo; or &ldquo;more meaningful than Material&rdquo; as a creative brief or rallying cry of sorts. But what does it mean to be better? Every client I work with has at least one problem or challenge that Bootstrap or Material Design didn&rsquo;t anticipate. That&rsquo;s not to disparage those tools; it was never their job to do in the first place. This is where a distinct design system can be helpful: to solve your organization&rsquo;s unique problems in a way a generic tool isn&rsquo;t designed to help with.</p>

            <h2 id="relying-on-principles">
                Relying on Principles
                <a class="dm-dp-anchorLink" href="#relying-on-principles">#</a>
            </h2>

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

            <p>That only-ness doesn&rsquo;t have only to be principle-driven; it could come directly from the mission of your company. In Vox Media senior design director <a href="https://twitter.com/yeseniaa">Yesenia Perez-Cruz</a>&rsquo;s talk, <cite><a href="https://speakerdeck.com/yeseniaperezcruz/building-flexible-design-systems?slide=17">Building Flexible Design Systems</a></cite>, she nails what Vox&rsquo;s design system is built for: telling better stories, faster. That clear purpose drives what components they need, what scenarios to design for, and what they can work toward together.</p>

            <h2 id="reverse-engineering">
                Reverse-engineering principles from components
                <a class="dm-dp-anchorLink" href="#reverse-engineering">#</a>
            </h2>

            <p>One workflow tip I&rsquo;ve tried to put to good use is that you don&rsquo;t have to define principles before you create components; it&rsquo;s not a one-way street. Many times, you can derive your principles from how the work gets done. Designer <a href="https://twitter.com/markboulton">Mark Boulton</a> shares <a href="https://markboulton.co.uk/journal/defining-design-principles-at-embl">his experience with this flexibility around design principles</a>:</p>          

            <blockquote>
                <p>&hellip;a team can quickly pull together principles that are derived from doing the work on their particular problem rather than principles which are imposed on the work.</p>
            </blockquote>

            <p>A team can do this because the general public can too. Here&rsquo;s a quick inventory of a handful of design systems and the components they contain:</p>

            <div class="dm-c-tableWrapper">
                <table class="dm-c-tableWrapper_table dm-u-marginTop--xl">
                    <tbody>
                        <tr>   
                            <th>&nbsp;</th>
                            <th class="dm-u-align--left dm-u-text--12" style="vertical-align: top; line-height: 1.1;" scope="col" id="carbon"><a href="http://www.carbondesignsystem.com/">Carbon Design System</a></th>
                            <th class="dm-u-align--left dm-u-text--12" style="vertical-align: top; line-height: 1.1;" scope="col" id="lightning"><a href="http://www.lightningdesignsystem.com/">Lightning Design System</a></th>
                            <th class="dm-u-align--left dm-u-text--12" style="vertical-align: top; line-height: 1.1;" scope="col" id="usds"><a href="https://designsystem.digital.gov/">U.S. Web Design System</a></th>
                            <th class="dm-u-align--left dm-u-text--12" style="vertical-align: top; line-height: 1.1;" scope="col" id="atlassian"><a href="https://atlassian.design/">Atlassian Design</a></th>
                            <th class="dm-u-align--left dm-u-text--12" style="vertical-align: top; line-height: 1.1;" scope="col" id="quickbooks"><a href="https://designsystem.quickbooks.com/">Quickbooks Design System</a></th>
                            <th class="dm-u-align--left dm-u-text--12" style="vertical-align: top; line-height: 1.1;" scope="col" id="futurelearn"><a href="https://www.futurelearn.com/pattern-library">FutureLearn</a></th>
                            <th class="dm-u-align--left dm-u-text--12" style="vertical-align: top; line-height: 1.1;" scope="col" id="polaris"><a href="https://polaris.shopify.com/">Polaris by Shopify</a></th>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="accordion">Accordion</th>
                            <td headers="accordion carbon">&bull;</td>
                            <td headers="accordion lightning">&bull;</td>
                            <td headers="accordion usds">&bull;</td>
                            <td headers="accordion atlassian">&nbsp;</td>
                            <td headers="accordion quickbooks">&bull;</td>
                            <td headers="accordion futurelearn">&nbsp;</td>
                            <td headers="accordion polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="action-list">Action List</th>
                            <td headers="action-list carbon">&nbsp;</td>
                            <td headers="action-list lightning">&nbsp;</td>
                            <td headers="action-list usds">&nbsp;</td>
                            <td headers="action-list atlassian">&nbsp;</td>
                            <td headers="action-list quickbooks">&nbsp;</td>
                            <td headers="action-list futurelearn">&nbsp;</td>
                            <td headers="action-list polaris">&bull;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="activity-timeline">Activity Timeline</th>
                            <td headers="activity-timeline carbon">&nbsp;</td>
                            <td headers="activity-timeline lightning">&bull;</td>
                            <td headers="activity-timeline usds">&nbsp;</td>
                            <td headers="activity-timeline atlassian">&nbsp;</td>
                            <td headers="activity-timeline quickbooks">&nbsp;</td>
                            <td headers="activity-timeline futurelearn">&nbsp;</td>
                            <td headers="activity-timeline polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="alert-flag-messages">Alert/Flag Messages</th>
                            <td headers="alert-flag-messages carbon">&nbsp;</td>
                            <td headers="alert-flag-messages lightning">&bull;</td>
                            <td headers="alert-flag-messages usds">&bull;</td>
                            <td headers="alert-flag-messages atlassian">&bull;</td>
                            <td headers="alert-flag-messages quickbooks">&nbsp;</td>
                            <td headers="alert-flag-messages futurelearn">&nbsp;</td>
                            <td headers="alert-flag-messages polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="app-launcher">App Launcher</th>
                            <td headers="app-launcher carbon">&nbsp;</td>
                            <td headers="app-launcher lightning">&bull;</td>
                            <td headers="app-launcher usds">&nbsp;</td>
                            <td headers="app-launcher atlassian">&nbsp;</td>
                            <td headers="app-launcher quickbooks">&nbsp;</td>
                            <td headers="app-launcher futurelearn">&nbsp;</td>
                            <td headers="app-launcher polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="arrow-toggle">Arrow Toggle</th>
                            <td headers="arrow-toggle carbon">&nbsp;</td>
                            <td headers="arrow-toggle lightning">&nbsp;</td>
                            <td headers="arrow-toggle usds">&nbsp;</td>
                            <td headers="arrow-toggle atlassian">&nbsp;</td>
                            <td headers="arrow-toggle quickbooks">&nbsp;</td>
                            <td headers="arrow-toggle futurelearn">&bull;</td>
                            <td headers="arrow-toggle polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Avatar">Avatar</th>
                            <td headers="Avatar carbon">&nbsp;</td>
                            <td headers="Avatar lightning">&bull;</td>
                            <td headers="Avatar usds">&nbsp;</td>
                            <td headers="Avatar atlassian">&bull;</td>
                            <td headers="Avatar quickbooks">&nbsp;</td>
                            <td headers="Avatar futurelearn">&bull;</td>
                            <td headers="Avatar polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Badges">Badges</th>
                            <td headers="Badges carbon">&nbsp;</td>
                            <td headers="Badges lightning">&bull;</td>
                            <td headers="Badges usds">&nbsp;</td>
                            <td headers="Badges atlassian">&bull;</td>
                            <td headers="Badges quickbooks">&bull;</td>
                            <td headers="Badges futurelearn">&bull;</td>
                            <td headers="Badges polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Banners">Banners</th>
                            <td headers="Banners carbon">&nbsp;</td>
                            <td headers="Banners lightning">&nbsp;</td>
                            <td headers="Banners usds">&nbsp;</td>
                            <td headers="Banners atlassian">&bull;</td>
                            <td headers="Banners quickbooks">&nbsp;</td>
                            <td headers="Banners futurelearn">&nbsp;</td>
                            <td headers="Banners polaris">&bull;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Billboard">Billboard</th>
                            <td headers="Billboard carbon">&nbsp;</td>
                            <td headers="Billboard lightning">&nbsp;</td>
                            <td headers="Billboard usds">&nbsp;</td>
                            <td headers="Billboard atlassian">&nbsp;</td>
                            <td headers="Billboard quickbooks">&nbsp;</td>
                            <td headers="Billboard futurelearn">&bull;</td>
                            <td headers="Billboard polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Boombox">Boombox</th>
                            <td headers="Boombox carbon">&nbsp;</td>
                            <td headers="Boombox lightning">&nbsp;</td>
                            <td headers="Boombox usds">&nbsp;</td>
                            <td headers="Boombox atlassian">&nbsp;</td>
                            <td headers="Boombox quickbooks">&nbsp;</td>
                            <td headers="Boombox futurelearn">&bull;</td>
                            <td headers="Boombox polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Brand-Band">Brand Band</th>
                            <td headers="Brand-Band carbon">&nbsp;</td>
                            <td headers="Brand-Band lightning">&bull;</td>
                            <td headers="Brand-Band usds">&nbsp;</td>
                            <td headers="Brand-Band atlassian">&nbsp;</td>
                            <td headers="Brand-Band quickbooks">&nbsp;</td>
                            <td headers="Brand-Band futurelearn">&nbsp;</td>
                            <td headers="Brand-Band polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Breadcrumb">Breadcrumb</th>
                            <td headers="Breadcrumb carbon">&bull;</td>
                            <td headers="Breadcrumb lightning">&bull;</td>
                            <td headers="Breadcrumb usds">&nbsp;</td>
                            <td headers="Breadcrumb atlassian">&bull;</td>
                            <td headers="Breadcrumb quickbooks">&nbsp;</td>
                            <td headers="Breadcrumb futurelearn">&nbsp;</td>
                            <td headers="Breadcrumb polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Builder-Header">Builder Header</th>
                            <td headers="Builder-Header carbon">&nbsp;</td>
                            <td headers="Builder-Header lightning">&bull;</td>
                            <td headers="Builder-Header usds">&nbsp;</td>
                            <td headers="Builder-Header atlassian">&nbsp;</td>
                            <td headers="Builder-Header quickbooks">&nbsp;</td>
                            <td headers="Builder-Header futurelearn">&nbsp;</td>
                            <td headers="Builder-Header polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Button-Groups">Button Groups</th>
                            <td headers="Button-Groups carbon">&nbsp;</td>
                            <td headers="Button-Groups lightning">&bull;</td>
                            <td headers="Button-Groups usds">&nbsp;</td>
                            <td headers="Button-Groups atlassian">&nbsp;</td>
                            <td headers="Button-Groups quickbooks">&bull;</td>
                            <td headers="Button-Groups futurelearn">&nbsp;</td>
                            <td headers="Button-Groups polaris">&bull;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Button-Icons">Button Icons</th>
                            <td headers="Button-Icons carbon">&nbsp;</td>
                            <td headers="Button-Icons lightning">&bull;</td>
                            <td headers="Button-Icons usds">&nbsp;</td>
                            <td headers="Button-Icons atlassian">&nbsp;</td>
                            <td headers="Button-Icons quickbooks">&nbsp;</td>
                            <td headers="Button-Icons futurelearn">&nbsp;</td>
                            <td headers="Button-Icons polaris">&nbsp;</td>
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
                            <td headers="Callout-Cards carbon">&nbsp;</td>
                            <td headers="Callout-Cards lightning">&nbsp;</td>
                            <td headers="Callout-Cards usds">&nbsp;</td>
                            <td headers="Callout-Cards atlassian">&nbsp;</td>
                            <td headers="Callout-Cards quickbooks">&nbsp;</td>
                            <td headers="Callout-Cards futurelearn">&nbsp;</td>
                            <td headers="Callout-Cards polaris">&bull;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Caption">Caption</th>
                            <td headers="Caption carbon">&nbsp;</td>
                            <td headers="Caption lightning">&nbsp;</td>
                            <td headers="Caption usds">&nbsp;</td>
                            <td headers="Caption atlassian">&nbsp;</td>
                            <td headers="Caption quickbooks">&nbsp;</td>
                            <td headers="Caption futurelearn">&nbsp;</td>
                            <td headers="Caption polaris">&bull;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Cards">Cards</th>
                            <td headers="Cards carbon">&nbsp;</td>
                            <td headers="Cards lightning">&bull;</td>
                            <td headers="Cards usds">&nbsp;</td>
                            <td headers="Cards atlassian">&nbsp;</td>
                            <td headers="Cards quickbooks">&bull;</td>
                            <td headers="Cards futurelearn">&nbsp;</td>
                            <td headers="Cards polaris">&bull;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Carousel">Carousel</th>
                            <td headers="Carousel carbon">&nbsp;</td>
                            <td headers="Carousel lightning">&bull;</td>
                            <td headers="Carousel usds">&nbsp;</td>
                            <td headers="Carousel atlassian">&nbsp;</td>
                            <td headers="Carousel quickbooks">&nbsp;</td>
                            <td headers="Carousel futurelearn">&nbsp;</td>
                            <td headers="Carousel polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Chat">Chat</th>
                            <td headers="Chat carbon">&nbsp;</td>
                            <td headers="Chat lightning">&bull;</td>
                            <td headers="Chat usds">&nbsp;</td>
                            <td headers="Chat atlassian">&nbsp;</td>
                            <td headers="Chat quickbooks">&nbsp;</td>
                            <td headers="Chat futurelearn">&nbsp;</td>
                            <td headers="Chat polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Checkbox">Checkbox</th>
                            <td headers="Checkbox carbon">&bull;</td>
                            <td headers="Checkbox lightning">&bull;</td>
                            <td headers="Checkbox usds">&nbsp;</td>
                            <td headers="Checkbox atlassian">&bull;</td>
                            <td headers="Checkbox quickbooks">&bull;</td>
                            <td headers="Checkbox futurelearn">&bull;</td>
                            <td headers="Checkbox polaris">&bull;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Checkbox-Buttons Group">Checkbox Buttons Group</th>
                            <td headers="Checkbox-Buttons Group carbon">&nbsp;</td>
                            <td headers="Checkbox-Buttons Group lightning">&bull;</td>
                            <td headers="Checkbox-Buttons Group usds">&nbsp;</td>
                            <td headers="Checkbox-Buttons Group atlassian">&nbsp;</td>
                            <td headers="Checkbox-Buttons Group quickbooks">&nbsp;</td>
                            <td headers="Checkbox-Buttons Group futurelearn">&nbsp;</td>
                            <td headers="Checkbox-Buttons Group polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Checkbox-Toggle">Checkbox Toggle</th>
                            <td headers="Checkbox-Toggle carbon">&nbsp;</td>
                            <td headers="Checkbox-Toggle lightning">&bull;</td>
                            <td headers="Checkbox-Toggle usds">&nbsp;</td>
                            <td headers="Checkbox-Toggle atlassian">&nbsp;</td>
                            <td headers="Checkbox-Toggle quickbooks">&nbsp;</td>
                            <td headers="Checkbox-Toggle futurelearn">&nbsp;</td>
                            <td headers="Checkbox-Toggle polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Checkbox">Checkbox</th>
                            <td headers="Checkbox carbon">&nbsp;</td>
                            <td headers="Checkbox lightning">&bull;</td>
                            <td headers="Checkbox usds">&nbsp;</td>
                            <td headers="Checkbox atlassian">&nbsp;</td>
                            <td headers="Checkbox quickbooks">&nbsp;</td>
                            <td headers="Checkbox futurelearn">&nbsp;</td>
                            <td headers="Checkbox polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Code-Snippet">Code Snippet</th>
                            <td headers="Code-Snippet carbon">&bull;</td>
                            <td headers="Code-Snippet lightning">&nbsp;</td>
                            <td headers="Code-Snippet usds">&nbsp;</td>
                            <td headers="Code-Snippet atlassian">&nbsp;</td>
                            <td headers="Code-Snippet quickbooks">&nbsp;</td>
                            <td headers="Code-Snippet futurelearn">&nbsp;</td>
                            <td headers="Code-Snippet polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Color-Picker">Color Picker</th>
                            <td headers="Color-Picker carbon">&nbsp;</td>
                            <td headers="Color-Picker lightning">&bull;</td>
                            <td headers="Color-Picker usds">&nbsp;</td>
                            <td headers="Color-Picker atlassian">&nbsp;</td>
                            <td headers="Color-Picker quickbooks">&bull;</td>
                            <td headers="Color-Picker futurelearn">&nbsp;</td>
                            <td headers="Color-Picker polaris">&bull;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Combobox">Combobox</th>
                            <td headers="Combobox carbon">&nbsp;</td>
                            <td headers="Combobox lightning">&bull;</td>
                            <td headers="Combobox usds">&nbsp;</td>
                            <td headers="Combobox atlassian">&nbsp;</td>
                            <td headers="Combobox quickbooks">&nbsp;</td>
                            <td headers="Combobox futurelearn">&nbsp;</td>
                            <td headers="Combobox polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Context-Switcher">Context Switcher</th>
                            <td headers="Context-Switcher carbon">&bull;</td>
                            <td headers="Context-Switcher lightning">&nbsp;</td>
                            <td headers="Context-Switcher usds">&nbsp;</td>
                            <td headers="Context-Switcher atlassian">&nbsp;</td>
                            <td headers="Context-Switcher quickbooks">&nbsp;</td>
                            <td headers="Context-Switcher futurelearn">&nbsp;</td>
                            <td headers="Context-Switcher polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Data-table">Data table</th>
                            <td headers="Data-table carbon">&bull;</td>
                            <td headers="Data-table lightning">&bull;</td>
                            <td headers="Data-table usds">&nbsp;</td>
                            <td headers="Data-table atlassian">&nbsp;</td>
                            <td headers="Data-table quickbooks">&nbsp;</td>
                            <td headers="Data-table futurelearn">&nbsp;</td>
                            <td headers="Data-table polaris">&bull;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Data-vis">Data vis</th>
                            <td headers="Data-vis carbon">&bull;</td>
                            <td headers="Data-vis lightning">&nbsp;</td>
                            <td headers="Data-vis usds">&nbsp;</td>
                            <td headers="Data-vis atlassian">&nbsp;</td>
                            <td headers="Data-vis quickbooks">&nbsp;</td>
                            <td headers="Data-vis futurelearn">&nbsp;</td>
                            <td headers="Data-vis polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Date-Picker">Date Picker</th>
                            <td headers="Date-Picker carbon">&bull;</td>
                            <td headers="Date-Picker lightning">&bull;</td>
                            <td headers="Date-Picker usds">&nbsp;</td>
                            <td headers="Date-Picker atlassian">&bull;</td>
                            <td headers="Date-Picker quickbooks">&bull;</td>
                            <td headers="Date-Picker futurelearn">&nbsp;</td>
                            <td headers="Date-Picker polaris">&bull;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Datetime-Picker">Datetime Picker</th>
                            <td headers="Datetime-Picker carbon">&nbsp;</td>
                            <td headers="Datetime-Picker lightning">&bull;</td>
                            <td headers="Datetime-Picker usds">&nbsp;</td>
                            <td headers="Datetime-Picker atlassian">&bull;</td>
                            <td headers="Datetime-Picker quickbooks">&nbsp;</td>
                            <td headers="Datetime-Picker futurelearn">&nbsp;</td>
                            <td headers="Datetime-Picker polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Description-List">Description List</th>
                            <td headers="Description-List carbon">&nbsp;</td>
                            <td headers="Description-List lightning">&nbsp;</td>
                            <td headers="Description-List usds">&nbsp;</td>
                            <td headers="Description-List atlassian">&nbsp;</td>
                            <td headers="Description-List quickbooks">&nbsp;</td>
                            <td headers="Description-List futurelearn">&nbsp;</td>
                            <td headers="Description-List polaris">&bull;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Dividers">Dividers</th>
                            <td headers="Dividers carbon">&nbsp;</td>
                            <td headers="Dividers lightning">&nbsp;</td>
                            <td headers="Dividers usds">&nbsp;</td>
                            <td headers="Dividers atlassian">&nbsp;</td>
                            <td headers="Dividers quickbooks">&nbsp;</td>
                            <td headers="Dividers futurelearn">&bull;</td>
                            <td headers="Dividers polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Docked-Composer">Docked Composer</th>
                            <td headers="Docked-Composer carbon">&nbsp;</td>
                            <td headers="Docked-Composer lightning">&bull;</td>
                            <td headers="Docked-Composer usds">&nbsp;</td>
                            <td headers="Docked-Composer atlassian">&nbsp;</td>
                            <td headers="Docked-Composer quickbooks">&nbsp;</td>
                            <td headers="Docked-Composer futurelearn">&nbsp;</td>
                            <td headers="Docked-Composer polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Docked-Form Footer">Docked Form Footer</th>
                            <td headers="Docked-Form Footer carbon">&nbsp;</td>
                            <td headers="Docked-Form Footer lightning">&bull;</td>
                            <td headers="Docked-Form Footer usds">&nbsp;</td>
                            <td headers="Docked-Form Footer atlassian">&nbsp;</td>
                            <td headers="Docked-Form Footer quickbooks">&nbsp;</td>
                            <td headers="Docked-Form Footer futurelearn">&nbsp;</td>
                            <td headers="Docked-Form Footer polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Docked-Utility Bar">Docked Utility Bar</th>
                            <td headers="Docked-Utility Bar carbon">&nbsp;</td>
                            <td headers="Docked-Utility Bar lightning">&bull;</td>
                            <td headers="Docked-Utility Bar usds">&nbsp;</td>
                            <td headers="Docked-Utility Bar atlassian">&nbsp;</td>
                            <td headers="Docked-Utility Bar quickbooks">&nbsp;</td>
                            <td headers="Docked-Utility Bar futurelearn">&nbsp;</td>
                            <td headers="Docked-Utility Bar polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Drawers">Drawers</th>
                            <td headers="Drawers carbon">&nbsp;</td>
                            <td headers="Drawers lightning">&nbsp;</td>
                            <td headers="Drawers usds">&nbsp;</td>
                            <td headers="Drawers atlassian">&nbsp;</td>
                            <td headers="Drawers quickbooks">&bull;</td>
                            <td headers="Drawers futurelearn">&nbsp;</td>
                            <td headers="Drawers polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Dropdown">Dropdown</th>
                            <td headers="Dropdown carbon">&nbsp;</td>
                            <td headers="Dropdown lightning">&nbsp;</td>
                            <td headers="Dropdown usds">&bull;</td>
                            <td headers="Dropdown atlassian">&bull;</td>
                            <td headers="Dropdown quickbooks">&nbsp;</td>
                            <td headers="Dropdown futurelearn">&nbsp;</td>
                            <td headers="Dropdown polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Drop-Zone">Drop Zone</th>
                            <td headers="Drop-Zone carbon">&nbsp;</td>
                            <td headers="Drop-Zone lightning">&nbsp;</td>
                            <td headers="Drop-Zone usds">&nbsp;</td>
                            <td headers="Drop-Zone atlassian">&nbsp;</td>
                            <td headers="Drop-Zone quickbooks">&nbsp;</td>
                            <td headers="Drop-Zone futurelearn">&nbsp;</td>
                            <td headers="Drop-Zone polaris">&bull;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Dueling-Picklist">Dueling Picklist</th>
                            <td headers="Dueling-Picklist carbon">&bull;</td>
                            <td headers="Dueling-Picklist lightning">&nbsp;</td>
                            <td headers="Dueling-Picklist usds">&nbsp;</td>
                            <td headers="Dueling-Picklist atlassian">&nbsp;</td>
                            <td headers="Dueling-Picklist quickbooks">&nbsp;</td>
                            <td headers="Dueling-Picklist futurelearn">&nbsp;</td>
                            <td headers="Dueling-Picklist polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Dynamic-Icons">Dynamic Icons</th>
                            <td headers="Dynamic-Icons carbon">&bull;</td>
                            <td headers="Dynamic-Icons lightning">&nbsp;</td>
                            <td headers="Dynamic-Icons usds">&nbsp;</td>
                            <td headers="Dynamic-Icons atlassian">&nbsp;</td>
                            <td headers="Dynamic-Icons quickbooks">&nbsp;</td>
                            <td headers="Dynamic-Icons futurelearn">&nbsp;</td>
                            <td headers="Dynamic-Icons polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Dynamic-Menu">Dynamic Menu</th>
                            <td headers="Dynamic-Menu carbon">&nbsp;</td>
                            <td headers="Dynamic-Menu lightning">&nbsp;</td>
                            <td headers="Dynamic-Menu usds">&nbsp;</td>
                            <td headers="Dynamic-Menu atlassian">&nbsp;</td>
                            <td headers="Dynamic-Menu quickbooks">&nbsp;</td>
                            <td headers="Dynamic-Menu futurelearn">&nbsp;</td>
                            <td headers="Dynamic-Menu polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Empty-State">Empty State</th>
                            <td headers="Empty-State carbon">&nbsp;</td>
                            <td headers="Empty-State lightning">&nbsp;</td>
                            <td headers="Empty-State usds">&nbsp;</td>
                            <td headers="Empty-State atlassian">&nbsp;</td>
                            <td headers="Empty-State quickbooks">&nbsp;</td>
                            <td headers="Empty-State futurelearn">&nbsp;</td>
                            <td headers="Empty-State polaris">&bull;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="End-of Flow Confirmation">End of Flow Confirmation</th>
                            <td headers="End-of Flow Confirmation carbon">&nbsp;</td>
                            <td headers="End-of Flow Confirmation lightning">&nbsp;</td>
                            <td headers="End-of Flow Confirmation usds">&nbsp;</td>
                            <td headers="End-of Flow Confirmation atlassian">&nbsp;</td>
                            <td headers="End-of Flow Confirmation quickbooks">&bull;</td>
                            <td headers="End-of Flow Confirmation futurelearn">&nbsp;</td>
                            <td headers="End-of Flow Confirmation polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Expandable-Section">Expandable Section</th>
                            <td headers="Expandable-Section carbon">&bull;</td>
                            <td headers="Expandable-Section lightning">&nbsp;</td>
                            <td headers="Expandable-Section usds">&nbsp;</td>
                            <td headers="Expandable-Section atlassian">&nbsp;</td>
                            <td headers="Expandable-Section quickbooks">&nbsp;</td>
                            <td headers="Expandable-Section futurelearn">&nbsp;</td>
                            <td headers="Expandable-Section polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Exception-List">Exception List</th>
                            <td headers="Exception-List carbon">&nbsp;</td>
                            <td headers="Exception-List lightning">&nbsp;</td>
                            <td headers="Exception-List usds">&nbsp;</td>
                            <td headers="Exception-List atlassian">&nbsp;</td>
                            <td headers="Exception-List quickbooks">&nbsp;</td>
                            <td headers="Exception-List futurelearn">&nbsp;</td>
                            <td headers="Exception-List polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Explanation">Explanation</th>
                            <td headers="Explanation carbon">&nbsp;</td>
                            <td headers="Explanation lightning">&nbsp;</td>
                            <td headers="Explanation usds">&nbsp;</td>
                            <td headers="Explanation atlassian">&nbsp;</td>
                            <td headers="Explanation quickbooks">&nbsp;</td>
                            <td headers="Explanation futurelearn">&bull;</td>
                            <td headers="Explanation polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Featurebox">Featurebox</th>
                            <td headers="Featurebox carbon">&nbsp;</td>
                            <td headers="Featurebox lightning">&nbsp;</td>
                            <td headers="Featurebox usds">&nbsp;</td>
                            <td headers="Featurebox atlassian">&nbsp;</td>
                            <td headers="Featurebox quickbooks">&nbsp;</td>
                            <td headers="Featurebox futurelearn">&bull;</td>
                            <td headers="Featurebox polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Feeds">Feeds</th>
                            <td headers="Feeds carbon">&bull;</td>
                            <td headers="Feeds lightning">&nbsp;</td>
                            <td headers="Feeds usds">&nbsp;</td>
                            <td headers="Feeds atlassian">&nbsp;</td>
                            <td headers="Feeds quickbooks">&nbsp;</td>
                            <td headers="Feeds futurelearn">&nbsp;</td>
                            <td headers="Feeds polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="File-Selector/Uploader">File Selector/Uploader</th>
                            <td headers="File-Selector/Uploader carbon">&bull;</td>
                            <td headers="File-Selector/Uploader lightning">&nbsp;</td>
                            <td headers="File-Selector/Uploader usds">&nbsp;</td>
                            <td headers="File-Selector/Uploader atlassian">&nbsp;</td>
                            <td headers="File-Selector/Uploader quickbooks">&nbsp;</td>
                            <td headers="File-Selector/Uploader futurelearn">&nbsp;</td>
                            <td headers="File-Selector/Uploader polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Files">Files</th>
                            <td headers="Files carbon">&bull;</td>
                            <td headers="Files lightning">&nbsp;</td>
                            <td headers="Files usds">&nbsp;</td>
                            <td headers="Files atlassian">&nbsp;</td>
                            <td headers="Files quickbooks">&nbsp;</td>
                            <td headers="Files futurelearn">&nbsp;</td>
                            <td headers="Files polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Flag">Flag</th>
                            <td headers="Flag carbon">&nbsp;</td>
                            <td headers="Flag lightning">&nbsp;</td>
                            <td headers="Flag usds">&nbsp;</td>
                            <td headers="Flag atlassian">&nbsp;</td>
                            <td headers="Flag quickbooks">&nbsp;</td>
                            <td headers="Flag futurelearn">&bull;</td>
                            <td headers="Flag polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Flyout">Flyout</th>
                            <td headers="Flyout carbon">&nbsp;</td>
                            <td headers="Flyout lightning">&nbsp;</td>
                            <td headers="Flyout usds">&nbsp;</td>
                            <td headers="Flyout atlassian">&nbsp;</td>
                            <td headers="Flyout quickbooks">&bull;</td>
                            <td headers="Flyout futurelearn">&nbsp;</td>
                            <td headers="Flyout polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Footers">Footers</th>
                            <td headers="Footers carbon">&nbsp;</td>
                            <td headers="Footers lightning">&bull;</td>
                            <td headers="Footers usds">&nbsp;</td>
                            <td headers="Footers atlassian">&bull;</td>
                            <td headers="Footers quickbooks">&nbsp;</td>
                            <td headers="Footers futurelearn">&nbsp;</td>
                            <td headers="Footers polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Form">Form</th>
                            <td headers="Form carbon">&bull;</td>
                            <td headers="Form lightning">&bull;</td>
                            <td headers="Form usds">&nbsp;</td>
                            <td headers="Form atlassian">&nbsp;</td>
                            <td headers="Form quickbooks">&bull;</td>
                            <td headers="Form futurelearn">&bull;</td>
                            <td headers="Form polaris">&bull;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Global-Header">Global Header</th>
                            <td headers="Global-Header carbon">&bull;</td>
                            <td headers="Global-Header lightning">&bull;</td>
                            <td headers="Global-Header usds">&nbsp;</td>
                            <td headers="Global-Header atlassian">&bull;</td>
                            <td headers="Global-Header quickbooks">&nbsp;</td>
                            <td headers="Global-Header futurelearn">&nbsp;</td>
                            <td headers="Global-Header polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Global-Navigation">Global Navigation</th>
                            <td headers="Global-Navigation carbon">&bull;</td>
                            <td headers="Global-Navigation lightning">&nbsp;</td>
                            <td headers="Global-Navigation usds">&nbsp;</td>
                            <td headers="Global-Navigation atlassian">&nbsp;</td>
                            <td headers="Global-Navigation quickbooks">&nbsp;</td>
                            <td headers="Global-Navigation futurelearn">&nbsp;</td>
                            <td headers="Global-Navigation polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Grids">Grids</th>
                            <td headers="Grids carbon">&nbsp;</td>
                            <td headers="Grids lightning">&bull;</td>
                            <td headers="Grids usds">&nbsp;</td>
                            <td headers="Grids atlassian">&nbsp;</td>
                            <td headers="Grids quickbooks">&nbsp;</td>
                            <td headers="Grids futurelearn">&nbsp;</td>
                            <td headers="Grids polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Headings">Headings</th>
                            <td headers="Headings carbon">&nbsp;</td>
                            <td headers="Headings lightning">&nbsp;</td>
                            <td headers="Headings usds">&nbsp;</td>
                            <td headers="Headings atlassian">&nbsp;</td>
                            <td headers="Headings quickbooks">&nbsp;</td>
                            <td headers="Headings futurelearn">&bull;</td>
                            <td headers="Headings polaris">&bull;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Icons">Icons</th>
                            <td headers="Icons carbon">&bull;</td>
                            <td headers="Icons lightning">&nbsp;</td>
                            <td headers="Icons usds">&nbsp;</td>
                            <td headers="Icons atlassian">&nbsp;</td>
                            <td headers="Icons quickbooks">&nbsp;</td>
                            <td headers="Icons futurelearn">&nbsp;</td>
                            <td headers="Icons polaris">&bull;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Illustration">Illustration</th>
                            <td headers="Illustration carbon">&bull;</td>
                            <td headers="Illustration lightning">&nbsp;</td>
                            <td headers="Illustration usds">&nbsp;</td>
                            <td headers="Illustration atlassian">&nbsp;</td>
                            <td headers="Illustration quickbooks">&nbsp;</td>
                            <td headers="Illustration futurelearn">&nbsp;</td>
                            <td headers="Illustration polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Info-Link">Info Link</th>
                            <td headers="Info-Link carbon">&nbsp;</td>
                            <td headers="Info-Link lightning">&nbsp;</td>
                            <td headers="Info-Link usds">&nbsp;</td>
                            <td headers="Info-Link atlassian">&nbsp;</td>
                            <td headers="Info-Link quickbooks">&bull;</td>
                            <td headers="Info-Link futurelearn">&nbsp;</td>
                            <td headers="Info-Link polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Labels">Labels</th>
                            <td headers="Labels carbon">&nbsp;</td>
                            <td headers="Labels lightning">&bull;</td>
                            <td headers="Labels usds">&nbsp;</td>
                            <td headers="Labels atlassian">&nbsp;</td>
                            <td headers="Labels quickbooks">&nbsp;</td>
                            <td headers="Labels futurelearn">&nbsp;</td>
                            <td headers="Labels polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Link">Link</th>
                            <td headers="Link carbon">&nbsp;</td>
                            <td headers="Link lightning">&nbsp;</td>
                            <td headers="Link usds">&nbsp;</td>
                            <td headers="Link atlassian">&nbsp;</td>
                            <td headers="Link quickbooks">&bull;</td>
                            <td headers="Link futurelearn">&nbsp;</td>
                            <td headers="Link polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="List">List</th>
                            <td headers="List carbon">&nbsp;</td>
                            <td headers="List lightning">&nbsp;</td>
                            <td headers="List usds">&nbsp;</td>
                            <td headers="List atlassian">&nbsp;</td>
                            <td headers="List quickbooks">&bull;</td>
                            <td headers="List futurelearn">&nbsp;</td>
                            <td headers="List polaris">&bull;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="List-Builder">List Builder</th>
                            <td headers="List-Builder carbon">&bull;</td>
                            <td headers="List-Builder lightning">&nbsp;</td>
                            <td headers="List-Builder usds">&nbsp;</td>
                            <td headers="List-Builder atlassian">&nbsp;</td>
                            <td headers="List-Builder quickbooks">&nbsp;</td>
                            <td headers="List-Builder futurelearn">&nbsp;</td>
                            <td headers="List-Builder polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Loading/Spinners">Loading/Spinners</th>
                            <td headers="Loading/Spinners carbon">&bull;</td>
                            <td headers="Loading/Spinners lightning">&nbsp;</td>
                            <td headers="Loading/Spinners usds">&bull;</td>
                            <td headers="Loading/Spinners atlassian">&bull;</td>
                            <td headers="Loading/Spinners quickbooks">&bull;</td>
                            <td headers="Loading/Spinners futurelearn">&nbsp;</td>
                            <td headers="Loading/Spinners polaris">&bull;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Logos-in Product">Logos in Product</th>
                            <td headers="Logos-in Product carbon">&nbsp;</td>
                            <td headers="Logos-in Product lightning">&nbsp;</td>
                            <td headers="Logos-in Product usds">&bull;</td>
                            <td headers="Logos-in Product atlassian">&nbsp;</td>
                            <td headers="Logos-in Product quickbooks">&nbsp;</td>
                            <td headers="Logos-in Product futurelearn">&nbsp;</td>
                            <td headers="Logos-in Product polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Lookups">Lookups</th>
                            <td headers="Lookups carbon">&bull;</td>
                            <td headers="Lookups lightning">&nbsp;</td>
                            <td headers="Lookups usds">&nbsp;</td>
                            <td headers="Lookups atlassian">&nbsp;</td>
                            <td headers="Lookups quickbooks">&nbsp;</td>
                            <td headers="Lookups futurelearn">&nbsp;</td>
                            <td headers="Lookups polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Lozenges">Lozenges</th>
                            <td headers="Lozenges carbon">&bull;</td>
                            <td headers="Lozenges lightning">&nbsp;</td>
                            <td headers="Lozenges usds">&nbsp;</td>
                            <td headers="Lozenges atlassian">&nbsp;</td>
                            <td headers="Lozenges quickbooks">&nbsp;</td>
                            <td headers="Lozenges futurelearn">&nbsp;</td>
                            <td headers="Lozenges polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Map">Map</th>
                            <td headers="Map carbon">&bull;</td>
                            <td headers="Map lightning">&nbsp;</td>
                            <td headers="Map usds">&nbsp;</td>
                            <td headers="Map atlassian">&nbsp;</td>
                            <td headers="Map quickbooks">&nbsp;</td>
                            <td headers="Map futurelearn">&nbsp;</td>
                            <td headers="Map polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Menus">Menus</th>
                            <td headers="Menus carbon">&bull;</td>
                            <td headers="Menus lightning">&nbsp;</td>
                            <td headers="Menus usds">&nbsp;</td>
                            <td headers="Menus atlassian">&bull;</td>
                            <td headers="Menus quickbooks">&nbsp;</td>
                            <td headers="Menus futurelearn">&nbsp;</td>
                            <td headers="Menus polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Modal">Modal</th>
                            <td headers="Modal carbon">&bull;</td>
                            <td headers="Modal lightning">&nbsp;</td>
                            <td headers="Modal usds">&bull;</td>
                            <td headers="Modal atlassian">&bull;</td>
                            <td headers="Modal quickbooks">&bull;</td>
                            <td headers="Modal futurelearn">&nbsp;</td>
                            <td headers="Modal polaris">&bull;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Multi-select">Multi-select</th>
                            <td headers="Multi-select carbon">&nbsp;</td>
                            <td headers="Multi-select lightning">&nbsp;</td>
                            <td headers="Multi-select usds">&bull;</td>
                            <td headers="Multi-select atlassian">&nbsp;</td>
                            <td headers="Multi-select quickbooks">&nbsp;</td>
                            <td headers="Multi-select futurelearn">&nbsp;</td>
                            <td headers="Multi-select polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Notification">Notification</th>
                            <td headers="Notification carbon">&bull;</td>
                            <td headers="Notification lightning">&nbsp;</td>
                            <td headers="Notification usds">&nbsp;</td>
                            <td headers="Notification atlassian">&bull;</td>
                            <td headers="Notification quickbooks">&nbsp;</td>
                            <td headers="Notification futurelearn">&nbsp;</td>
                            <td headers="Notification polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Page-Headers">Page Headers</th>
                            <td headers="Page-Headers carbon">&bull;</td>
                            <td headers="Page-Headers lightning">&nbsp;</td>
                            <td headers="Page-Headers usds">&nbsp;</td>
                            <td headers="Page-Headers atlassian">&nbsp;</td>
                            <td headers="Page-Headers quickbooks">&nbsp;</td>
                            <td headers="Page-Headers futurelearn">&nbsp;</td>
                            <td headers="Page-Headers polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Pagination">Pagination</th>
                            <td headers="Pagination carbon">&nbsp;</td>
                            <td headers="Pagination lightning">&nbsp;</td>
                            <td headers="Pagination usds">&bull;</td>
                            <td headers="Pagination atlassian">&nbsp;</td>
                            <td headers="Pagination quickbooks">&nbsp;</td>
                            <td headers="Pagination futurelearn">&nbsp;</td>
                            <td headers="Pagination polaris">&bull;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Panels">Panels</th>
                            <td headers="Panels carbon">&nbsp;</td>
                            <td headers="Panels lightning">&bull;</td>
                            <td headers="Panels usds">&nbsp;</td>
                            <td headers="Panels atlassian">&nbsp;</td>
                            <td headers="Panels quickbooks">&nbsp;</td>
                            <td headers="Panels futurelearn">&nbsp;</td>
                            <td headers="Panels polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Path">Path</th>
                            <td headers="Path carbon">&nbsp;</td>
                            <td headers="Path lightning">&bull;</td>
                            <td headers="Path usds">&nbsp;</td>
                            <td headers="Path atlassian">&nbsp;</td>
                            <td headers="Path quickbooks">&nbsp;</td>
                            <td headers="Path futurelearn">&nbsp;</td>
                            <td headers="Path polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Picklist">Picklist</th>
                            <td headers="Picklist carbon">&nbsp;</td>
                            <td headers="Picklist lightning">&bull;</td>
                            <td headers="Picklist usds">&nbsp;</td>
                            <td headers="Picklist atlassian">&nbsp;</td>
                            <td headers="Picklist quickbooks">&nbsp;</td>
                            <td headers="Picklist futurelearn">&nbsp;</td>
                            <td headers="Picklist polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Pills">Pills</th>
                            <td headers="Pills carbon">&nbsp;</td>
                            <td headers="Pills lightning">&bull;</td>
                            <td headers="Pills usds">&nbsp;</td>
                            <td headers="Pills atlassian">&nbsp;</td>
                            <td headers="Pills quickbooks">&nbsp;</td>
                            <td headers="Pills futurelearn">&nbsp;</td>
                            <td headers="Pills polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Popovers">Popovers</th>
                            <td headers="Popovers carbon">&nbsp;</td>
                            <td headers="Popovers lightning">&bull;</td>
                            <td headers="Popovers usds">&nbsp;</td>
                            <td headers="Popovers atlassian">&nbsp;</td>
                            <td headers="Popovers quickbooks">&bull;</td>
                            <td headers="Popovers futurelearn">&nbsp;</td>
                            <td headers="Popovers polaris">&bull;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Progress-Bar">Progress Bar</th>
                            <td headers="Progress-Bar carbon">&nbsp;</td>
                            <td headers="Progress-Bar lightning">&bull;</td>
                            <td headers="Progress-Bar usds">&nbsp;</td>
                            <td headers="Progress-Bar atlassian">&bull;</td>
                            <td headers="Progress-Bar quickbooks">&bull;</td>
                            <td headers="Progress-Bar futurelearn">&nbsp;</td>
                            <td headers="Progress-Bar polaris">&bull;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Progress-Indicator">Progress Indicator</th>
                            <td headers="Progress-Indicator carbon">&nbsp;</td>
                            <td headers="Progress-Indicator lightning">&bull;</td>
                            <td headers="Progress-Indicator usds">&nbsp;</td>
                            <td headers="Progress-Indicator atlassian">&bull;</td>
                            <td headers="Progress-Indicator quickbooks">&nbsp;</td>
                            <td headers="Progress-Indicator futurelearn">&nbsp;</td>
                            <td headers="Progress-Indicator polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Progress-Ring">Progress Ring</th>
                            <td headers="Progress-Ring carbon">&nbsp;</td>
                            <td headers="Progress-Ring lightning">&bull;</td>
                            <td headers="Progress-Ring usds">&nbsp;</td>
                            <td headers="Progress-Ring atlassian">&nbsp;</td>
                            <td headers="Progress-Ring quickbooks">&nbsp;</td>
                            <td headers="Progress-Ring futurelearn">&bull;</td>
                            <td headers="Progress-Ring polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Progress-Toggle">Progress Toggle</th>
                            <td headers="Progress-Toggle carbon">&nbsp;</td>
                            <td headers="Progress-Toggle lightning">&bull;</td>
                            <td headers="Progress-Toggle usds">&nbsp;</td>
                            <td headers="Progress-Toggle atlassian">&nbsp;</td>
                            <td headers="Progress-Toggle quickbooks">&nbsp;</td>
                            <td headers="Progress-Toggle futurelearn">&bull;</td>
                            <td headers="Progress-Toggle polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Promo-Banner">Promo Banner</th>
                            <td headers="Promo-Banner carbon">&nbsp;</td>
                            <td headers="Promo-Banner lightning">&nbsp;</td>
                            <td headers="Promo-Banner usds">&nbsp;</td>
                            <td headers="Promo-Banner atlassian">&nbsp;</td>
                            <td headers="Promo-Banner quickbooks">&nbsp;</td>
                            <td headers="Promo-Banner futurelearn">&bull;</td>
                            <td headers="Promo-Banner polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Prompt">Prompt</th>
                            <td headers="Prompt carbon">&nbsp;</td>
                            <td headers="Prompt lightning">&bull;</td>
                            <td headers="Prompt usds">&nbsp;</td>
                            <td headers="Prompt atlassian">&nbsp;</td>
                            <td headers="Prompt quickbooks">&nbsp;</td>
                            <td headers="Prompt futurelearn">&nbsp;</td>
                            <td headers="Prompt polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Publishers">Publishers</th>
                            <td headers="Publishers carbon">&nbsp;</td>
                            <td headers="Publishers lightning">&bull;</td>
                            <td headers="Publishers usds">&nbsp;</td>
                            <td headers="Publishers atlassian">&nbsp;</td>
                            <td headers="Publishers quickbooks">&nbsp;</td>
                            <td headers="Publishers futurelearn">&nbsp;</td>
                            <td headers="Publishers polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Quiz-Progress Nav">Quiz Progress Nav</th>
                            <td headers="Quiz-Progress Nav carbon">&nbsp;</td>
                            <td headers="Quiz-Progress Nav lightning">&nbsp;</td>
                            <td headers="Quiz-Progress Nav usds">&nbsp;</td>
                            <td headers="Quiz-Progress Nav atlassian">&nbsp;</td>
                            <td headers="Quiz-Progress Nav quickbooks">&nbsp;</td>
                            <td headers="Quiz-Progress Nav futurelearn">&bull;</td>
                            <td headers="Quiz-Progress Nav polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Range-Slider">Range Slider</th>
                            <td headers="Range-Slider carbon">&nbsp;</td>
                            <td headers="Range-Slider lightning">&nbsp;</td>
                            <td headers="Range-Slider usds">&nbsp;</td>
                            <td headers="Range-Slider atlassian">&nbsp;</td>
                            <td headers="Range-Slider quickbooks">&nbsp;</td>
                            <td headers="Range-Slider futurelearn">&nbsp;</td>
                            <td headers="Range-Slider polaris">&bull;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Radio-button/Choice List">Radio button/Choice List</th>
                            <td headers="Radio-button/Choice List carbon">&bull;</td>
                            <td headers="Radio-button/Choice List lightning">&nbsp;</td>
                            <td headers="Radio-button/Choice List usds">&nbsp;</td>
                            <td headers="Radio-button/Choice List atlassian">&bull;</td>
                            <td headers="Radio-button/Choice List quickbooks">&bull;</td>
                            <td headers="Radio-button/Choice List futurelearn">&bull;</td>
                            <td headers="Radio-button/Choice List polaris">&bull;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Resource-List">Resource List</th>
                            <td headers="Resource-List carbon">&nbsp;</td>
                            <td headers="Resource-List lightning">&nbsp;</td>
                            <td headers="Resource-List usds">&nbsp;</td>
                            <td headers="Resource-List atlassian">&nbsp;</td>
                            <td headers="Resource-List quickbooks">&nbsp;</td>
                            <td headers="Resource-List futurelearn">&nbsp;</td>
                            <td headers="Resource-List polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Ribbons">Ribbons</th>
                            <td headers="Ribbons carbon">&nbsp;</td>
                            <td headers="Ribbons lightning">&nbsp;</td>
                            <td headers="Ribbons usds">&nbsp;</td>
                            <td headers="Ribbons atlassian">&nbsp;</td>
                            <td headers="Ribbons quickbooks">&nbsp;</td>
                            <td headers="Ribbons futurelearn">&bull;</td>
                            <td headers="Ribbons polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Rich-Text Editor">Rich Text Editor</th>
                            <td headers="Rich-Text Editor carbon">&nbsp;</td>
                            <td headers="Rich-Text Editor lightning">&bull;</td>
                            <td headers="Rich-Text Editor usds">&nbsp;</td>
                            <td headers="Rich-Text Editor atlassian">&nbsp;</td>
                            <td headers="Rich-Text Editor quickbooks">&nbsp;</td>
                            <td headers="Rich-Text Editor futurelearn">&nbsp;</td>
                            <td headers="Rich-Text Editor polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Scoped-Notifications">Scoped Notifications</th>
                            <td headers="Scoped-Notifications carbon">&nbsp;</td>
                            <td headers="Scoped-Notifications lightning">&bull;</td>
                            <td headers="Scoped-Notifications usds">&nbsp;</td>
                            <td headers="Scoped-Notifications atlassian">&nbsp;</td>
                            <td headers="Scoped-Notifications quickbooks">&nbsp;</td>
                            <td headers="Scoped-Notifications futurelearn">&nbsp;</td>
                            <td headers="Scoped-Notifications polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Scoped-Tabs">Scoped Tabs</th>
                            <td headers="Scoped-Tabs carbon">&nbsp;</td>
                            <td headers="Scoped-Tabs lightning">&bull;</td>
                            <td headers="Scoped-Tabs usds">&nbsp;</td>
                            <td headers="Scoped-Tabs atlassian">&nbsp;</td>
                            <td headers="Scoped-Tabs quickbooks">&nbsp;</td>
                            <td headers="Scoped-Tabs futurelearn">&nbsp;</td>
                            <td headers="Scoped-Tabs polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Search">Search</th>
                            <td headers="Search carbon">&bull;</td>
                            <td headers="Search lightning">&nbsp;</td>
                            <td headers="Search usds">&bull;</td>
                            <td headers="Search atlassian">&nbsp;</td>
                            <td headers="Search quickbooks">&nbsp;</td>
                            <td headers="Search futurelearn">&nbsp;</td>
                            <td headers="Search polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Select">Select</th>
                            <td headers="Select carbon">&bull;</td>
                            <td headers="Select lightning">&bull;</td>
                            <td headers="Select usds">&nbsp;</td>
                            <td headers="Select atlassian">&bull;</td>
                            <td headers="Select quickbooks">&nbsp;</td>
                            <td headers="Select futurelearn">&nbsp;</td>
                            <td headers="Select polaris">&bull;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Setup-Assistant">Setup Assistant</th>
                            <td headers="Setup-Assistant carbon">&nbsp;</td>
                            <td headers="Setup-Assistant lightning">&bull;</td>
                            <td headers="Setup-Assistant usds">&nbsp;</td>
                            <td headers="Setup-Assistant atlassian">&nbsp;</td>
                            <td headers="Setup-Assistant quickbooks">&nbsp;</td>
                            <td headers="Setup-Assistant futurelearn">&nbsp;</td>
                            <td headers="Setup-Assistant polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Signpost">Signpost</th>
                            <td headers="Signpost carbon">&nbsp;</td>
                            <td headers="Signpost lightning">&nbsp;</td>
                            <td headers="Signpost usds">&nbsp;</td>
                            <td headers="Signpost atlassian">&nbsp;</td>
                            <td headers="Signpost quickbooks">&nbsp;</td>
                            <td headers="Signpost futurelearn">&bull;</td>
                            <td headers="Signpost polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Slider">Slider</th>
                            <td headers="Slider carbon">&bull;</td>
                            <td headers="Slider lightning">&bull;</td>
                            <td headers="Slider usds">&nbsp;</td>
                            <td headers="Slider atlassian">&nbsp;</td>
                            <td headers="Slider quickbooks">&nbsp;</td>
                            <td headers="Slider futurelearn">&nbsp;</td>
                            <td headers="Slider polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Split-View">Split View</th>
                            <td headers="Split-View carbon">&nbsp;</td>
                            <td headers="Split-View lightning">&bull;</td>
                            <td headers="Split-View usds">&nbsp;</td>
                            <td headers="Split-View atlassian">&nbsp;</td>
                            <td headers="Split-View quickbooks">&nbsp;</td>
                            <td headers="Split-View futurelearn">&nbsp;</td>
                            <td headers="Split-View polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Spotlight">Spotlight</th>
                            <td headers="Spotlight carbon">&nbsp;</td>
                            <td headers="Spotlight lightning">&nbsp;</td>
                            <td headers="Spotlight usds">&nbsp;</td>
                            <td headers="Spotlight atlassian">&nbsp;</td>
                            <td headers="Spotlight quickbooks">&nbsp;</td>
                            <td headers="Spotlight futurelearn">&bull;</td>
                            <td headers="Spotlight polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Step-Number">Step Number</th>
                            <td headers="Step-Number carbon">&nbsp;</td>
                            <td headers="Step-Number lightning">&nbsp;</td>
                            <td headers="Step-Number usds">&nbsp;</td>
                            <td headers="Step-Number atlassian">&nbsp;</td>
                            <td headers="Step-Number quickbooks">&nbsp;</td>
                            <td headers="Step-Number futurelearn">&bull;</td>
                            <td headers="Step-Number polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Structured-List">Structured List</th>
                            <td headers="Structured-List carbon">&bull;</td>
                            <td headers="Structured-List lightning">&nbsp;</td>
                            <td headers="Structured-List usds">&nbsp;</td>
                            <td headers="Structured-List atlassian">&nbsp;</td>
                            <td headers="Structured-List quickbooks">&nbsp;</td>
                            <td headers="Structured-List futurelearn">&nbsp;</td>
                            <td headers="Structured-List polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Summary-Detail">Summary Detail</th>
                            <td headers="Summary-Detail carbon">&nbsp;</td>
                            <td headers="Summary-Detail lightning">&bull;</td>
                            <td headers="Summary-Detail usds">&nbsp;</td>
                            <td headers="Summary-Detail atlassian">&nbsp;</td>
                            <td headers="Summary-Detail quickbooks">&nbsp;</td>
                            <td headers="Summary-Detail futurelearn">&nbsp;</td>
                            <td headers="Summary-Detail polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Tabs">Tabs</th>
                            <td headers="Tabs carbon">&bull;</td>
                            <td headers="Tabs lightning">&bull;</td>
                            <td headers="Tabs usds">&nbsp;</td>
                            <td headers="Tabs atlassian">&bull;</td>
                            <td headers="Tabs quickbooks">&bull;</td>
                            <td headers="Tabs futurelearn">&nbsp;</td>
                            <td headers="Tabs polaris">&bull;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Tables">Tables</th>
                            <td headers="Tables carbon">&nbsp;</td>
                            <td headers="Tables lightning">&nbsp;</td>
                            <td headers="Tables usds">&bull;</td>
                            <td headers="Tables atlassian">&bull;</td>
                            <td headers="Tables quickbooks">&bull;</td>
                            <td headers="Tables futurelearn">&bull;</td>
                            <td headers="Tables polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Tag">Tag</th>
                            <td headers="Tag carbon">&bull;</td>
                            <td headers="Tag lightning">&nbsp;</td>
                            <td headers="Tag usds">&nbsp;</td>
                            <td headers="Tag atlassian">&bull;</td>
                            <td headers="Tag quickbooks">&nbsp;</td>
                            <td headers="Tag futurelearn">&nbsp;</td>
                            <td headers="Tag polaris">&bull;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Testimonial">Testimonial</th>
                            <td headers="Testimonial carbon">&nbsp;</td>
                            <td headers="Testimonial lightning">&nbsp;</td>
                            <td headers="Testimonial usds">&nbsp;</td>
                            <td headers="Testimonial atlassian">&nbsp;</td>
                            <td headers="Testimonial quickbooks">&bull;</td>
                            <td headers="Testimonial futurelearn">&nbsp;</td>
                            <td headers="Testimonial polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Textarea">Textarea</th>
                            <td headers="Textarea carbon">&nbsp;</td>
                            <td headers="Textarea lightning">&bull;</td>
                            <td headers="Textarea usds">&nbsp;</td>
                            <td headers="Textarea atlassian">&nbsp;</td>
                            <td headers="Textarea quickbooks">&bull;</td>
                            <td headers="Textarea futurelearn">&nbsp;</td>
                            <td headers="Textarea polaris">&bull;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Text-Input">Text Input</th>
                            <td headers="Text-Input carbon">&bull;</td>
                            <td headers="Text-Input lightning">&nbsp;</td>
                            <td headers="Text-Input usds">&bull;</td>
                            <td headers="Text-Input atlassian">&bull;</td>
                            <td headers="Text-Input quickbooks">&bull;</td>
                            <td headers="Text-Input futurelearn">&nbsp;</td>
                            <td headers="Text-Input polaris">&bull;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Thumbnail">Thumbnail</th>
                            <td headers="Thumbnail carbon">&nbsp;</td>
                            <td headers="Thumbnail lightning">&nbsp;</td>
                            <td headers="Thumbnail usds">&nbsp;</td>
                            <td headers="Thumbnail atlassian">&nbsp;</td>
                            <td headers="Thumbnail quickbooks">&nbsp;</td>
                            <td headers="Thumbnail futurelearn">&nbsp;</td>
                            <td headers="Thumbnail polaris">&bull;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Tile">Tile</th>
                            <td headers="Tile carbon">&bull;</td>
                            <td headers="Tile lightning">&bull;</td>
                            <td headers="Tile usds">&nbsp;</td>
                            <td headers="Tile atlassian">&nbsp;</td>
                            <td headers="Tile quickbooks">&nbsp;</td>
                            <td headers="Tile futurelearn">&nbsp;</td>
                            <td headers="Tile polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Timestamp">Timestamp</th>
                            <td headers="Timestamp carbon">&nbsp;</td>
                            <td headers="Timestamp lightning">&nbsp;</td>
                            <td headers="Timestamp usds">&nbsp;</td>
                            <td headers="Timestamp atlassian">&nbsp;</td>
                            <td headers="Timestamp quickbooks">&nbsp;</td>
                            <td headers="Timestamp futurelearn">&bull;</td>
                            <td headers="Timestamp polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Timepicker">Timepicker</th>
                            <td headers="Timepicker carbon">&nbsp;</td>
                            <td headers="Timepicker lightning">&bull;</td>
                            <td headers="Timepicker usds">&nbsp;</td>
                            <td headers="Timepicker atlassian">&nbsp;</td>
                            <td headers="Timepicker quickbooks">&nbsp;</td>
                            <td headers="Timepicker futurelearn">&nbsp;</td>
                            <td headers="Timepicker polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Toast">Toast</th>
                            <td headers="Toast carbon">&nbsp;</td>
                            <td headers="Toast lightning">&nbsp;</td>
                            <td headers="Toast usds">&nbsp;</td>
                            <td headers="Toast atlassian">&nbsp;</td>
                            <td headers="Toast quickbooks">&bull;</td>
                            <td headers="Toast futurelearn">&nbsp;</td>
                            <td headers="Toast polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Toggle/Switch">Toggle/Switch</th>
                            <td headers="Toggle/Switch carbon">&bull;</td>
                            <td headers="Toggle/Switch lightning">&nbsp;</td>
                            <td headers="Toggle/Switch usds">&nbsp;</td>
                            <td headers="Toggle/Switch atlassian">&bull;</td>
                            <td headers="Toggle/Switch quickbooks">&nbsp;</td>
                            <td headers="Toggle/Switch futurelearn">&bull;</td>
                            <td headers="Toggle/Switch polaris">&bull;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Tooltip">Tooltip</th>
                            <td headers="Tooltip carbon">&bull;</td>
                            <td headers="Tooltip lightning">&bull;</td>
                            <td headers="Tooltip usds">&nbsp;</td>
                            <td headers="Tooltip atlassian">&bull;</td>
                            <td headers="Tooltip quickbooks">&bull;</td>
                            <td headers="Tooltip futurelearn">&nbsp;</td>
                            <td headers="Tooltip polaris">&bull;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Trees">Trees</th>
                            <td headers="Trees carbon">&nbsp;</td>
                            <td headers="Trees lightning">&bull;</td>
                            <td headers="Trees usds">&nbsp;</td>
                            <td headers="Trees atlassian">&nbsp;</td>
                            <td headers="Trees quickbooks">&nbsp;</td>
                            <td headers="Trees futurelearn">&nbsp;</td>
                            <td headers="Trees polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Trial-Bar">Trial Bar</th>
                            <td headers="Trial-Bar carbon">&nbsp;</td>
                            <td headers="Trial-Bar lightning">&bull;</td>
                            <td headers="Trial-Bar usds">&nbsp;</td>
                            <td headers="Trial-Bar atlassian">&nbsp;</td>
                            <td headers="Trial-Bar quickbooks">&nbsp;</td>
                            <td headers="Trial-Bar futurelearn">&nbsp;</td>
                            <td headers="Trial-Bar polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Trowser">Trowser</th>
                            <td headers="Trowser carbon">&nbsp;</td>
                            <td headers="Trowser lightning">&nbsp;</td>
                            <td headers="Trowser usds">&nbsp;</td>
                            <td headers="Trowser atlassian">&nbsp;</td>
                            <td headers="Trowser quickbooks">&bull;</td>
                            <td headers="Trowser futurelearn">&nbsp;</td>
                            <td headers="Trowser polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Typeahead">Typeahead</th>
                            <td headers="Typeahead carbon">&nbsp;</td>
                            <td headers="Typeahead lightning">&bull;</td>
                            <td headers="Typeahead usds">&nbsp;</td>
                            <td headers="Typeahead atlassian">&nbsp;</td>
                            <td headers="Typeahead quickbooks">&bull;</td>
                            <td headers="Typeahead futurelearn">&nbsp;</td>
                            <td headers="Typeahead polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Vertical-Navigation/Side Navigation">Vertical Navigation/Side Navigation</th>
                            <td headers="Vertical-Navigation/Side Navigation carbon">&nbsp;</td>
                            <td headers="Vertical-Navigation/Side Navigation lightning">&bull;</td>
                            <td headers="Vertical-Navigation/Side Navigation usds">&bull;</td>
                            <td headers="Vertical-Navigation/Side Navigation atlassian">&nbsp;</td>
                            <td headers="Vertical-Navigation/Side Navigation quickbooks">&nbsp;</td>
                            <td headers="Vertical-Navigation/Side Navigation futurelearn">&nbsp;</td>
                            <td headers="Vertical-Navigation/Side Navigation polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Vertical-Tabs">Vertical Tabs</th>
                            <td headers="Vertical-Tabs carbon">&nbsp;</td>
                            <td headers="Vertical-Tabs lightning">&bull;</td>
                            <td headers="Vertical-Tabs usds">&nbsp;</td>
                            <td headers="Vertical-Tabs atlassian">&nbsp;</td>
                            <td headers="Vertical-Tabs quickbooks">&nbsp;</td>
                            <td headers="Vertical-Tabs futurelearn">&nbsp;</td>
                            <td headers="Vertical-Tabs polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Video">Video</th>
                            <td headers="Video carbon">&nbsp;</td>
                            <td headers="Video lightning">&nbsp;</td>
                            <td headers="Video usds">&nbsp;</td>
                            <td headers="Video atlassian">&nbsp;</td>
                            <td headers="Video quickbooks">&bull;</td>
                            <td headers="Video futurelearn">&nbsp;</td>
                            <td headers="Video polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Visual-Picker">Visual Picker</th>
                            <td headers="Visual-Picker carbon">&nbsp;</td>
                            <td headers="Visual-Picker lightning">&bull;</td>
                            <td headers="Visual-Picker usds">&nbsp;</td>
                            <td headers="Visual-Picker atlassian">&nbsp;</td>
                            <td headers="Visual-Picker quickbooks">&nbsp;</td>
                            <td headers="Visual-Picker futurelearn">&nbsp;</td>
                            <td headers="Visual-Picker polaris">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" class="dm-u-align--left" id="Welcome-Mat">Welcome Mat</th>
                            <td headers="Welcome-Mat carbon">&nbsp;</td>
                            <td headers="Welcome-Mat lightning">&bull;</td>
                            <td headers="Welcome-Mat usds">&nbsp;</td>
                            <td headers="Welcome-Mat atlassian">&nbsp;</td>
                            <td headers="Welcome-Mat quickbooks">&nbsp;</td>
                            <td headers="Welcome-Mat futurelearn">&nbsp;</td>
                            <td headers="Welcome-Mat polaris">&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p>By looking across components in aggregate, we can very clearly see what the boring stuff is, because most of these design systems have them. That&rsquo;s stuff like buttons and form elements, as just about all of these design systems seem to contain them.</p>

            <p>More interesting, however, are the components that only appear in one of these design systems. (Ignore the ones that look isolated but are actually just a result of non-standard taxonomies for components.) They start to give you a clue as to the unique value proposition of each design system. For example, FutureLearn&rsquo;s <a href="https://www.futurelearn.com/pattern-library/molecules/quiz-progress-nav">Quiz Progress Nav</a> only seems appropriate in environments where one is being tested online, which already starts to give you a clue as to what FutureLearn does. </p>

            <p><a href="https://twitter.com/thoughtwax">Emmet Connolly</a>, director of product design for <a href="https://www.intercom.com/">Intercom</a>, calls this <a href="https://blog.intercom.com/the-full-stack-design-system/">a full stack design system</a>. He suggests building everything around the core objects of your brand or organization. Here are some examples of what that might be for some well-known companies:</p>

            <ul>
                <li><strong>Facebook:</strong> Friend, Post, Message, Event, Page, Group.</li>
                <li><strong>Airbnb:</strong> Listing, Host, Guest, Trip, Experience.</li>
                <li><strong>Slack:</strong> Team, Member, Channel, Message, Reaction, Thread.</li>
                <li><strong>Intercom:</strong> Customer, Teammate, Message, Conversation, Article.</li>
            </ul>

            <p>By focusing on this kind of specificity, I think we&rsquo;ll see a lot more innovative and interesting design systems pop up in the near future. I sure hope so!</p>


            <footer class="dm-c-articleWell_footer dm-dp-sepChunk">
                <ol class="dm-c-footnotes">
                    <li id="fn1">Also <a href="https://medium.com/@danielmall/distinct-design-systems-3c1ec8e69e5b">syndicated to Medium</a>.</li>
                </ol>                
            </footer>

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