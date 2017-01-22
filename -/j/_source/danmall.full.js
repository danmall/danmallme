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
        //initGoogleAnalytics();
        observeFonts();
        initialAnimation();
        // initButtonAnimation();
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

      ga('create', 'UA-65148309-1', 'auto');
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


    }

    function addMallShadow() {
        var _mall = document.querySelector('.dm-c-preamble_name--mall');
        
        if (_mall.classList) {
          _mall.classList.add('dm-j-mallShadow');
        } else {
          _mall.className += ' dm-j-mallShadow';
        }

        eraseClipPath('.dm-c-preamble_name--mall');
    }

    function eraseClipPath($el) {
        var _el = document.querySelector($el);
        
        if (_el.classList) {
          _el.classList.add('dm-j-eraseClipPath');
        } else {
          _el.className += ' dm-j-eraseClipPath';
        }
    }

    /*var initialAnimation = function(){

        var 
            elements = document.querySelectorAll('.screen'),
            DELAY = .25, // in seconds
            ANIMATION_DURATION = 1.6, // in seconds
            EASING = 'Quint.easeInOut';

        Array.prototype.forEach.call(elements, function(el, i){
            var shield = document.createElement('div');
            shield.className = 'shield';
            shield.setAttribute('data-delay', i*DELAY);

            el.appendChild(shield);

            // turn off shield class on body for first run
            if(i == 0){
                if(document.body.classList){
                    document.body.classList.remove('shield');
                } else {
                    document.body.className = document.body.className.replace(new RegExp('(^|\\b)' + className.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
                }
            }

            TweenLite.to(
                shield,                     // target
                ANIMATION_DURATION,         // duration in seconds
                {      
                    width: 0,
                    ease: EASING,
                    delay: shield.getAttribute('data-delay'),
                    onComplete: function(){
                        shield.parentNode.removeChild(shield);
                    }
                }
            );

        });


    }

    var initButtonAnimation = function(){

        var urls = document.querySelectorAll('.url');

        Array.prototype.forEach.call(urls, function(el, i){
            var animationLayer = document.createElement('div');
            animationLayer.className = 'animationLayer';
            el.appendChild(animationLayer);

            var 
                urlLink = el.querySelector('a'),
                ANIMATION_DURATION = 0.5, // in seconds
                EASING = 'Quint.easeInOut';

            urlLink.addEventListener('mouseover', function(){
                TweenLite.to(
                    animationLayer,             // target
                    ANIMATION_DURATION,         // duration in seconds
                    {      
                        width: '100%',
                        ease: EASING
                    }
                );
            });

            urlLink.addEventListener('mouseout', function(){
                TweenLite.to(
                    animationLayer,             // target
                    ANIMATION_DURATION,         // duration in seconds
                    {      
                        width: '0',
                        ease: EASING
                    }
                );
            });

        });

    }

    var ajaxLoadImages = function(){
        var lazyImages = document.querySelectorAll('.lazy-image');

        Array.prototype.forEach.call(lazyImages, function(el, i){
            var src = el.getAttribute('data-src');
            el.setAttribute('src', src);
        });

    }

    var initMoodpikLinks = function(){
        var moodpikLinks = document.querySelectorAll('.caseStudy--moodpik section a');
        var counter = 1;

        Array.prototype.forEach.call(moodpikLinks, function(el, i){
            el.className += 'moodpikColor' + counter;

            if(counter < 4){
                counter++;
            }else{
                counter = 1;
            }
            
        });
    }

    var initMoodpikHeader = function(){

        var 
            moodpikBars = document.querySelectorAll('.moodpikLogo-bar'),
            ANIMATION_DURATION = 1,
            EASING = 'Quint.easeInOut';

        Array.prototype.forEach.call(moodpikBars, function(el, i){

            // reset heights
            el.style.height = 0;

            // remove initial JS class
            if(i == 0){   
                if(document.body.classList){
                    document.body.classList.remove('hideBars');
                }
            }

            // animate bars
            TweenLite.to(
                el,                         // target
                ANIMATION_DURATION,         // duration in seconds
                {      
                    height: el.getAttribute('data-height') + 'px',
                    ease: EASING,
                    delay: i*0.25
                }
            );

        });

    }

    var initHeadingDarkening = function(){

        var 
            sfAcademyHeading = document.querySelector('.academy-heading'),
            promoVideo = document.querySelector('.promo-video');

        promoVideo.onplay = function(){
            if (sfAcademyHeading.classList){
              sfAcademyHeading.classList.add('faded');
            }else{
              sfAcademyHeading.className += ' ' + 'faded';
            }
        }

        promoVideo.onpause = function(){
            if (sfAcademyHeading.classList){
              sfAcademyHeading.classList.remove('faded');
            }else{
              sfAcademyHeading.className = sfAcademyHeading.className.replace(new RegExp('(^|\\b)' + className.split('faded').join('|') + '(\\b|$)', 'gi'), ' ');
            }
        }

    }*/


}



/*-------------------------------------------    
    Initial Actions
-------------------------------------------*/

document.addEventListener('DOMContentLoaded', function () {

    var danmall = new Site();
    danmall.init();

});