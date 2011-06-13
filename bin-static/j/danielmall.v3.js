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
        
        initHomepageAnimation: function(){
            
            var _delay = 250;
            var _animationSpeed = 1000;
            var _itemWidth = 225;
            var _tweetWidth = 180;
            
            
            /*  ------ ANIMATION SEQUENCE: Wish I had SimpleSequencer here ------ */
            
            $('body#home #work li a, body#home #latest-articles li a').wrap('<div class="animation-container" />');
            
            // 1. fade in "Featured Work" row
            $('body#home #work').delay(_delay*0).fadeTo(500, 1);
            
            // 2. fade in "Featured Work" row items
            var _totalFeatured = $('body#home #work li').length;
            this.animateRoundElement(_delay, _animationSpeed, _totalFeatured, $('body#home #work li'), 0, _itemWidth);
            
            // 3. fade In "Latest Articles" row
            $('body#home #latest-articles').delay(_delay*3).fadeTo(250, 1);
            
            // 4. animate in "Latest Articles" row items
            var _totalLatestArticles = $('body#home #latest-articles li').length;
            var _latestArticlesDelayOffset = _totalFeatured;
            this.animateRoundElement(_delay, _animationSpeed, _totalLatestArticles, $('body#home #latest-articles li'), _latestArticlesDelayOffset, _itemWidth);            
            
            // 5. fade in "Tweets" row
            $('#tweet').delay(_delay*6).fadeTo(500, 1);
            
        },
        
        animateRoundElement: function($delay, $animationSpeed, $total, $element, $offset, $w){
            for(var i = 0; i < $total; i++){
                $($element).eq(i).find('.animation-container').delay($delay*(i + $offset + 1)).animate({width: $w + 'px', opacity: 1}, $animationSpeed, 'easeInOutCirc');
            }
        },        
    
        homeTooltip: function(){
        
            $(".home-round-item a").tooltip({
                bodyHandler: function() { 
                    _tooltipText = $(this).attr('data-tooltip-content');
                    return _tooltipText; 
                },
                showURL: false,
                track: true,
                fade: 250
            });
        
        },
        
        initRoles: function(){            
                        
            $('#roles').after('<div id="master-roles"></div><div id="master-roles-mask"></div>');            
            dmall.shuffleRoles();
            setInterval(function(){
                dmall.shuffleRoles()
                }, 5000);
            
            
        },
        
        shuffleRoles: function(){
            
            $('#master-roles-mask').animate({left: '0px'}, 500, 'easeInQuad', function(){
                var _totalRoles = $('#roles li').length;
                var _randomPosition1 = Math.floor(Math.random()*_totalRoles);
                var _randomPosition2 = Math.floor(Math.random()*_totalRoles);
                if(_randomPosition1 == _randomPosition2){
                    _randomPosition2++;
                }

                var _position1 = $('#roles li').eq(_randomPosition1).html();
                var _position2 = $('#roles li').eq(_randomPosition2).html();

                $('#master-roles').html(_position1 + ' <span>/</span> ' + _position2);

                $('#master-roles-mask').css({ height: $('#master-roles').height(), width: $('#master-roles').width() });
                $('#master-roles-mask').animate({left: $('#master-roles').width() + 'px'}, 600, 'easeInOutCirc');
            });
            
            
        },
    
    

        /*-------------------------------------------    
            Work
        -------------------------------------------*/
        
        initClientsRollOver: function(){
        
            var _animationSpeed1 = 400;
            var _animationDelay = 200;
            
            $('#work-landing #clients h1').after('<div id="new-mask"></div>')
            
            $('#work-landing #clients').mouseenter(function(){
            
                $('#new-mask').stop().animate({ left: '0px'}, _animationSpeed1, 'easeInOutCirc', function(){
                    $('#work-landing #clients h1').html("Clients that couldn&rsquo;t live without me");
                    $(this).animate( { left: '136px'}, _animationSpeed1, 'easeInOutCirc');
                });
            
            }).mouseleave(function(){
                
                $('#new-mask').stop().animate({ left: '0px'}, _animationSpeed1, 'easeInOutCirc', function(){
                    $('#work-landing #clients h1').html("Clients I couldn&rsquo;t live without");
                    $(this).animate( { left: '136px'}, _animationSpeed1, 'easeInOutCirc');
                });
            
            });

        },
        
        /* Animation for landing page */
        
        animateWorkLandingElements: function(){
            
            var _projectWidth = 200;
            var _delay = 200;
            var _animationSpeed = 1100;
            var _totalProjects = $('#work-landing .projects li').length;
            
            for(var i = 0; i < _totalProjects; i++){
                $('#work-landing .projects li:eq(' + i + ')').delay(_delay*i).animate({opacity: 1}, _animationSpeed, 'easeInOutCirc');
            }
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
            
            likeButton.css('margin-left', (TOTAL_WIDTH - likeButtonWidth)/2 + 'px');            
            
        },
        
        
        /*-------------------------------------------    
            Contact
        -------------------------------------------*/
        
        allEars: function(){
            $('#all-ears').mouseover(function(){
                $('#all-ears-container').fadeIn('normal');
            }).mouseout(function(){
                $('#all-ears-container').fadeOut('normal');
            }).click(function(){
                return false;
            });
        },
        
        validateContactForm: function(){
            
            $('#contact-form input, #contact-form textarea').blur(function(){
                if($(this).val() != ''){
                    $(this).removeClass('error');
                }
            });
            
            $('#contact-form').submit(function(){
                var _atLeastOneIsEmpty = false;
                $('#contact-form input[required], #contact-form select[required], #contact-form textarea[required]').each(function(){
                    if($(this).attr('value') == ''){
                        $(this).addClass('error');
                        _atLeastOneIsEmpty = true;
                    }
                });
                
                if(_atLeastOneIsEmpty){
                    return false;
                }
                
            });
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
    dmall.initHomepageAnimation();
    dmall.initRoles();
    
    // WORK
    dmall.initClientsRollOver();
    dmall.animateWorkLandingElements();
    dmall.moveLikeButton();
    dmall.fadeInTitle();
    
    // CONTACT
    dmall.allEars();
    dmall.validateContactForm();
    
    
});

window.onload = function(){
    //dmall.moveLikeButton();
}




