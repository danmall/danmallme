/*
*************************************************

DanielMall.com, V3
JavaScript Functions
Requires jQuery

Created by the ridiculous Dan Mall
http://danielmall.com/

*************************************************
*/


$(document).ready(function() { 
    
    var dmall = {
    
    
        /*-------------------------------------------    
            Home
        -------------------------------------------*/
    
        homeTooltip: function(){
        
            $(".home-round-item a").tooltip({
                bodyHandler: function() { 
                    _tooltipText = $(this).attr('data-tooltip-content');
                    return _tooltipText; 
                }
                ,showURL: false
                ,track: true
                ,fade: 250
            });
        
        },
    
    

        /*-------------------------------------------    
            Work
        -------------------------------------------*/

        initClientsRollOver: function(){
        
            var _animationSpeed = 300;
            var _animationDelay = 200;
        
            $('#work-landing #clients h1').wrap('<div id="clients-headline1" class="mask-wrapper"></div>');
            var _clientsHeadline = $('#clients-headline1');
            _clientsHeadline.append('<div class="mask"></div>');

            _clientsHeadline.after('<div id="clients-headline2" class="mask-wrapper"><h1 id="doppelganger">Clients that couldn&rsquo;t live without me</h1><div class="mask"></div></div>');
            var _doppelganger = $('#clients-headline2');
        
            $('#work-landing #clients').mouseenter(function(){
            
                $('#clients-headline1 .mask').animate({
                     width: '130px'
                }, _animationSpeed, function(){
                    _doppelganger.css('z-index', 2);                
                });

                $('#clients-headline2 .mask').delay(_animationDelay).animate({
                     width: '0'
                }, _animationSpeed);            
            
            }).mouseleave(function(){    
                    
                $('#clients-headline2 .mask').animate({
                     width: '130px'
                }, _animationSpeed, function(){
                    _doppelganger.css('z-index', 1);                
                });
            
                $('#clients-headline1 .mask').delay(_animationDelay).animate({
                     width: '0'
                }, _animationSpeed);
            
            });

        },
    
    
        /* Staggered animation for project headers */
    
        fadeInTitle: function(){
        
            var _animationSpeed = 500;
            var _animationDelay = 150;
        
            $('#project-header .page-title').fadeTo(_animationSpeed, 1);
            $('#project-header .project-subtitle').delay(_animationDelay).fadeTo(_animationSpeed, 1);
            $('#project-header #facebook-like').delay(_animationDelay*2).fadeTo(_animationSpeed, 1);
            $('.browser-chrome-wrap, .project-image').delay(_animationDelay*3).fadeTo(_animationSpeed, 1);
        
        },
        
        
        /* Stupid Facebook */
        
        moveLikeButton: function(){
            
            var TOTAL_WIDTH = 800;
            var likeButton = $('#facebook-like');
            var likeButtonWidth = likeButton.width();
            var _marginLeft = (TOTAL_WIDTH - likeButtonWidth)/2;
            
            likeButton.css('margin-left', _marginLeft + 'px');
            
            
        }
    
    
        /*-------------------------------------------    
            Global Functions
        -------------------------------------------*/
        
    }
    
    
    /*-------------------------------------------    
        Initial Actions
    -------------------------------------------*/
    // HOME
    dmall.homeTooltip();
    
    // WORK
    dmall.initClientsRollOver();
    dmall.moveLikeButton();
    dmall.fadeInTitle();
    
    
});

window.onload = function(){
    dmall.moveLikeButton();
}


