(function(){'use strict';var f=[];function g(a){f.push(a);1===f.length&&l()}function m(){for(;f.length;)f[0](),f.shift()}if(window.MutationObserver){var n=document.createElement("div");(new MutationObserver(m)).observe(n,{attributes:!0});var l=function(){n.setAttribute("x",0)}}else l=function(){setTimeout(m)};function p(a){this.a=q;this.b=void 0;this.f=[];var b=this;try{a(function(a){r(b,a)},function(a){t(b,a)})}catch(c){t(b,c)}}var q=2;function u(a){return new p(function(b,c){c(a)})}function v(a){return new p(function(b){b(a)})}
function r(a,b){if(a.a===q){if(b===a)throw new TypeError("Promise settled with itself.");var c=!1;try{var d=b&&b.then;if(null!==b&&"object"===typeof b&&"function"===typeof d){d.call(b,function(b){c||r(a,b);c=!0},function(b){c||t(a,b);c=!0});return}}catch(e){c||t(a,e);return}a.a=0;a.b=b;w(a)}}function t(a,b){if(a.a===q){if(b===a)throw new TypeError("Promise settled with itself.");a.a=1;a.b=b;w(a)}}
function w(a){g(function(){if(a.a!==q)for(;a.f.length;){var b=a.f.shift(),c=b[0],d=b[1],e=b[2],b=b[3];try{0===a.a?"function"===typeof c?e(c.call(void 0,a.b)):e(a.b):1===a.a&&("function"===typeof d?e(d.call(void 0,a.b)):b(a.b))}catch(h){b(h)}}})}p.prototype.g=function(a){return this.c(void 0,a)};p.prototype.c=function(a,b){var c=this;return new p(function(d,e){c.f.push([a,b,d,e]);w(c)})};
function x(a){return new p(function(b,c){function d(c){return function(d){h[c]=d;e+=1;e===a.length&&b(h)}}var e=0,h=[];0===a.length&&b(h);for(var k=0;k<a.length;k+=1)a[k].c(d(k),c)})}function y(a){return new p(function(b,c){for(var d=0;d<a.length;d+=1)a[d].c(b,c)})};window.Promise||(window.Promise=p,window.Promise.resolve=v,window.Promise.reject=u,window.Promise.race=y,window.Promise.all=x,window.Promise.prototype.then=p.prototype.c,window.Promise.prototype["catch"]=p.prototype.g);}());

(function(){'use strict';function h(a){function b(){document.body?a():setTimeout(b,0)}b()};function v(a){this.a=document.createElement("div");this.a.setAttribute("aria-hidden","true");this.a.appendChild(document.createTextNode(a));this.b=document.createElement("span");this.c=document.createElement("span");this.h=document.createElement("span");this.g=document.createElement("span");this.f=-1;this.b.style.cssText="display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;";this.c.style.cssText="display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;";
this.g.style.cssText="display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;";this.h.style.cssText="display:inline-block;width:200%;height:200%;font-size:16px;";this.b.appendChild(this.h);this.c.appendChild(this.g);this.a.appendChild(this.b);this.a.appendChild(this.c)}
function w(a,b,c){a.a.style.cssText="min-width:20px;min-height:20px;display:inline-block;overflow:hidden;position:absolute;width:auto;margin:0;padding:0;top:-999px;left:-999px;white-space:nowrap;font-size:100px;font-family:"+b+";"+c}function x(a){var b=a.a.offsetWidth,c=b+100;a.g.style.width=c+"px";a.c.scrollLeft=c;a.b.scrollLeft=a.b.scrollWidth+100;return a.f!==b?(a.f=b,!0):!1}
function y(a,b){a.b.addEventListener("scroll",function(){x(a)&&null!==a.a.parentNode&&b(a.f)},!1);a.c.addEventListener("scroll",function(){x(a)&&null!==a.a.parentNode&&b(a.f)},!1);x(a)};function z(a,b){var c=b||{};this.family=a;this.style=c.style||"normal";this.variant=c.variant||"normal";this.weight=c.weight||"normal";this.stretch=c.stretch||"stretch";this.featureSettings=c.featureSettings||"normal"}var B=null;
z.prototype.a=function(a,b){var c=a||"BESbswy",C=b||3E3,k="font-style:"+this.style+";font-variant:"+this.variant+";font-weight:"+this.weight+";font-stretch:"+this.stretch+";font-feature-settings:"+this.featureSettings+";-moz-font-feature-settings:"+this.featureSettings+";-webkit-font-feature-settings:"+this.featureSettings+";",g=document.createElement("div"),l=new v(c),m=new v(c),n=new v(c),d=-1,e=-1,f=-1,q=-1,r=-1,t=-1,p=this;return new Promise(function(a,b){function c(){null!==g.parentNode&&g.parentNode.removeChild(g)}
function u(){if(-1!==d&&-1!==e||-1!==d&&-1!==f||-1!==e&&-1!==f)if(d===e||d===f||e===f){if(null===B){var b=/AppleWebKit\/([0-9]+)(?:\.([0-9]+))/.exec(window.navigator.userAgent);B=!!b&&(536>parseInt(b[1],10)||536===parseInt(b[1],10)&&11>=parseInt(b[2],10))}B?d===q&&e===q&&f===q||d===r&&e===r&&f===r||d===t&&e===t&&f===t||(c(),a(p)):(c(),a(p))}}h(function(){function a(){if(Date.now()-D>=C)c(),b(p);else{var A=document.hidden;if(!0===A||void 0===A)d=l.a.offsetWidth,e=m.a.offsetWidth,f=n.a.offsetWidth,
u();setTimeout(a,50)}}var D=Date.now();w(l,"sans-serif",k);w(m,"serif",k);w(n,"monospace",k);g.appendChild(l.a);g.appendChild(m.a);g.appendChild(n.a);document.body.appendChild(g);q=l.a.offsetWidth;r=m.a.offsetWidth;t=n.a.offsetWidth;a();y(l,function(a){d=a;u()});w(l,p.family+",sans-serif",k);y(m,function(a){e=a;u()});w(m,p.family+",serif",k);y(n,function(a){f=a;u()});w(n,p.family+",monospace",k)})})};window.FontFaceObserver=z;window.FontFaceObserver.prototype.check=z.prototype.a;}());

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
        // initialAnimation();
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