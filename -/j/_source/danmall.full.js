/*
*************************************************

DANMALL.ME
JavaScript Functions

Created by the epic SuperFriendly team.
http://superfriend.ly/

*************************************************
*/

var Site = function(){

    this.init = function(){

        addJSFlag();
        initGoogleAnalytics();
        observeFonts();
        initialAnimation();
        // ajaxLoadImages();

        
    }

    var addJSFlag = function(){
        document.body.className += " js";
    }

    var initGoogleAnalytics = function(){
        
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-90621097-1', 'auto');
      ga('send', 'pageview');

    }

    /* Thanks… 
        Bram Stein! https://github.com/bramstein/fontfaceobserver 
        Filament Group! https://www.filamentgroup.com/lab/font-events.html
    */
    var observeFonts = function(){

        var 
            breveNewsBook = new FontFaceObserver(
                'BreveNews-Book', { weight: 400 }
            ),
            breveNewsBookItalic = new FontFaceObserver(
                'BreveNews-BookItalic', { weight: 400, style: 'italic'}
            ),
            breveNewsBold = new FontFaceObserver(
                'BreveNews-Bold', { weight: 800 }
            ),
            firmeBook = new FontFaceObserver(
                'Firme-Book', { weight: 400 }
            ),
            firmeBold = new FontFaceObserver(
                'Firme-Bold', { weight: 800 }
            ),
            breveTitleBold = new FontFaceObserver(
                'BreveTitle-Bold', { weight: 400 }
            );

        breveNewsBook
            .check()
            .then(function(){
                document.body.className += " breveNewsBook-loaded";
            }
        );

        breveNewsBookItalic
            .check()
            .then(function(){
                document.body.className += " breveNewsBookItalic-loaded";
            }
        );

        breveNewsBold
            .check()
            .then(function(){
                document.body.className += " breveNewsBold-loaded";
            }
        );

        firmeBook
            .check()
            .then(function(){
                document.body.className += " firmeBook-loaded";
            }
        );

        firmeBold
            .check()
            .then(function(){
                document.body.className += " firmeBold-loaded";
            }
        );

        breveTitleBold
            .check()
            .then(function(){
                document.body.className += " breveTitleBold-loaded";
            }
        );

    }

    var initialAnimation = function(){

        // ---- HOME -------

        // preamble
        TweenLite.to(
            document.querySelectorAll('.dm-c-preamble'), 
            1.4, //duration
            {
                clipPath            :   'inset(0 0.01% 0 0)',
                delay               :   0.5,
                ease                :   Quint.easeInOut,
                onComplete          :   eraseClipPath,
                onCompleteParams    :   ['.dm-c-preamble']
            }
        );

        // _name--dan
        TweenLite.to(
            document.querySelectorAll('.dm-c-preamble_name--dan'), 
            1.4, //duration
            {
                clipPath    :   'inset(0 0.01% 0 0)',
                delay       :   1,
                ease        :   Quint.easeInOut
            }
        );

        // _name--mall
        TweenLite.to(
            document.querySelectorAll('.dm-c-preamble_name--mall'), 
            1.4, //duration
            {
                clipPath    :   'inset(0 0.01% 0 0)',
                delay       :   1.1,
                ease        :   Quint.easeInOut,
                onComplete  :   addMallShadow
            }
        ); 

        // dm-c-preamble_circle
        TweenLite.to(
            document.querySelectorAll('.dm-c-preamble_circle'), 
            1.4, //duration
            {
                transform   :   'scale(0.7)',
                delay       :   1.1,
                ease        :   Quint.easeInOut
            }
        );      

        // .dm-c-preamble_dan
        TweenLite.to(
            document.querySelectorAll('.dm-c-preamble_dan'), 
            1, //duration
            {
                clipPath    :   'inset(0.1% 0.1% 0 0)',
                delay       :   1.3,
                ease        :   Quint.easeInOut
            }
        );

        // _name--dan
        TweenLite.to(
            document.querySelectorAll('.dm-c-preamble_tagline_term'), 
            1.4, //duration
            {
                clipPath    :   'inset(0 0.01% 0 0)',
                delay       :   1.3,
                ease        :   Quint.easeInOut
            }
        );

        // dm-c-intro
        TweenLite.to(
            document.querySelectorAll('.dm-c-intro'), 
            1.4, //duration
            {
                opacity     :   '1',
                delay       :   1.5,
                ease        :   Quint.easeInOut
            }
        );

        // .dm-c-testimonials
        TweenLite.to(
            document.querySelectorAll('.dm-c-testimonials'), 
            1.25, //duration
            {
                clipPath    :   'inset(0 0.1% 0 0)',
                delay       :   1.7,
                ease        :   Quint.easeInOut
            }
        );

        // .dm-c-preamble_dan
        TweenMax.staggerTo(
            document.querySelectorAll('.dm-dp-quote'), 
            1, 
            {
                opacity: 1,
                delay: 2
            }, 
            1
        );

        // dm-c-pricingDesign
        TweenMax.to(
            document.querySelectorAll('.dm-c-pricingDesign'), 
            1.6, 
            {
                opacity: 1,
                delay: 2.5
            }
        );

        // dm-c-pricingDesign
        TweenMax.to(
            document.querySelectorAll('.dm-page--home .dm-c-articlesListWrap'), 
            1.6, 
            {
                opacity: 1,
                delay: 3
            }
        );

        // .dm-c-pricingDesignContainer
        TweenLite.to(
            document.querySelectorAll('.dm-c-pricingDesignContainer'), 
            1.2, //duration
            {
                clipPath            :   'inset(0 0.01% 0 0)',
                delay               :   3.7,
                ease                :   Quint.easeInOut,
                onComplete          :   eraseClipPath,
                onCompleteParams    :   ['.dm-c-pricingDesignContainer']
            }
        );

        // .dm-c-articlesListWrap .dm-dp-boxedHeadline
        TweenLite.to(
            document.querySelectorAll('.dm-c-articlesListWrap .dm-dp-boxedHeadline'), 
            1.2, //duration
            {
                clipPath            :   'inset(0 0.01% 0 0)',
                delay               :   4.1,
                ease                :   Quint.easeInOut
            }
        );


        //  ------- ARTICLES + SPEAKING LANDING -------

        // .dm-page--articles .dm-c-articlesList
        for(i=0; i<=20; i++){
            TweenMax.to(
                [
                    document.querySelectorAll('.dm-page--articles .dm-dp-textBlurb:nth-of-type(' + i + ')'),
                    document.querySelectorAll('.dm-page--speakingPodcasts .dm-dp-textBlurb:nth-of-type(' + i + ')'),
                ],
                1, 
                {
                    opacity: 1,
                    delay: 0.2*i
                }
            );
        }



        //  ------------ ARTICLE DETAIL -------------

        // .dm-page--articleDetail .dm-c-pageHeader
        TweenLite.to(
            document.querySelectorAll('.dm-page--articleDetail .dm-c-pageHeader'), 
            2, //duration
            {
                opacity             :   1,
                ease                :   Quint.easeInOut
            }
        );

        // .dm-page--articleDetail .dm-c-articleWell
        TweenLite.to(
            document.querySelectorAll('.dm-page--articleDetail .dm-c-articleWell'), 
            2, //duration
            {
                opacity             :   1,
                delay               :   0.5,
                ease                :   Quint.easeInOut
            }
        );



    }

    function addMallShadow() {
        var _mall = document.querySelector('.dm-c-preamble_name--mall');
        
        if(_mall){
            if (_mall.classList) {
              _mall.classList.add('dm-j-mallShadow');
            } else {
              _mall.className += ' dm-j-mallShadow';
            }
        }

        eraseClipPath('.dm-c-preamble_name--mall');
    }

    function eraseClipPath($el) {
        var _el = document.querySelector($el);
        
        if(_el){
            if (_el.classList) {
              _el.classList.add('dm-j-eraseClipPath');
            } else {
              _el.className += ' dm-j-eraseClipPath';
            }
        }

    }

    /*

    var ajaxLoadImages = function(){
        var lazyImages = document.querySelectorAll('.lazy-image');

        Array.prototype.forEach.call(lazyImages, function(el, i){
            var src = el.getAttribute('data-src');
            el.setAttribute('src', src);
        });

    }

    */


}



/*-------------------------------------------    
    Initial Actions
-------------------------------------------*/

document.addEventListener('DOMContentLoaded', function () {

    var danmall = new Site();
    danmall.init();

});