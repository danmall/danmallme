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
    
    var dmall = {};
    
    

    /*-------------------------------------------    
        Custom Functions
    -------------------------------------------*/

    /** 
    *   Creates trick clients heading rollover
    *
    *   @author Dan Mall <dan@danielmall.com>
    *   @version 0.1
    *   @copyright Dan Mall
    *
    */

    dmall.initClientsRollOver = function(){
        
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
            }, _animationTiming);            
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

    }
    
    
    dmall.fadeInTitle = function(){
        
        var _animationSpeed = 500;
        var _animationDelay = 150;
        
        $('#project-header .page-title').fadeTo(_animationSpeed, 1);
        $('#project-header .project-subtitle').delay(_animationDelay).fadeTo(_animationSpeed, 1);
    }
    
    
    /*-------------------------------------------    
        Global Functions
    -------------------------------------------*/

    dmall.openSection = function($el){
        $($el).slideDown('normal');
    }

    dmall.closeSection = function($el){
        $($el).slideUp('normal');
    }

    dmall.fadeInSection = function($el){
        $($el).fadeIn('normal');
    }

    dmall.fadeOutSection = function($el){
        $($el).fadeOut('normal');
    }
    
    
    /*-------------------------------------------    
        Initial Actions
    -------------------------------------------*/
    
    // WORK
    dmall.initClientsRollOver();
    dmall.fadeInTitle();
    
    
});


