/**
 * jQuery sexyCycle v0.3
 *
 * Terms of Use - jQuery sexyCycle
 * under the MIT (http://www.opensource.org/licenses/mit-license.php) License.
 *
 * Copyright 2010 suprb.com All rights reserved.
 * (http://suprb.com/apps/sexyCycle/)
 */

(function ($) {

    $.fn.sexyCycle = function (options) {

        // default configuration properties
        var defaults = {
            easing: 'easeOutExpo',
            speed: 400,
            next: null,
            prev: null,
            start: 0,
            interval: false,
            cycle: true
        };

        var options = $.extend(defaults, options);
        var box = this;
        var click = true;
        var sexyCycle = $(".sexyCycle-wrap", this);
        var count = options.start;
        var totalw = $(box).width();

        var img = $(".sexyCycle-content img:eq(0)", sexyCycle).attr('src');
        $('body').append('<span class="sexycycleimgtempload"></span>');
        $('.sexycycleimgtempload').hide();

        var _tmph = 0,
            _left = 0,
            _cn = 0;
        var _th = $(".sexyCycle-content img:eq(0)", sexyCycle).height();

        $(sexyCycle).height(_th);

        $('.sexycycleimgtempload').remove();

        var _t = $(".sexyCycle-content", sexyCycle).children().size();
        var _p = $(".sexyCycle-content img:eq(" + options.start + ")", sexyCycle).width();
        var _f = $(".sexyCycle-content img:eq(0)", sexyCycle);
        var _l = $(".sexyCycle-content img:eq(" + (_t - 1) + ")", sexyCycle);

        var _tmp = $(".sexyCycle-content img:eq(" + (_t - 1) + ")", sexyCycle).attr('src');
        var _tmph = $(".sexyCycle-content img:eq(" + (_t - 1) + ")", sexyCycle).height();
        var _tmpw = $(".sexyCycle-content img:eq(" + (_t - 1) + ")", sexyCycle).width();

        var _tmpe = $(".sexyCycle-content img:eq(0)", sexyCycle).attr('src');
        var _tmphe = $(".sexyCycle-content img:eq(0)", sexyCycle).height();
        var _tmpwe = $(".sexyCycle-content img:eq(0)", sexyCycle).width();

        for (_lc = 0; _lc < options.start; _lc++) {
            _left += $(".sexyCycle-content img:eq(" + _lc + ")", sexyCycle).width();
        }


        $('<span class="sexyCycleTempf" style="background: url(\'' + _tmp + '\'); float: left; width: ' + _tmpw + 'px; height: ' + _tmph + 'px; display: block"></span>').insertBefore($(".sexyCycle-content li:eq(0)", sexyCycle));
        $(".sexyCycleTempf", sexyCycle).css("display", "none");

        $('<span class="sexyCycleTempe" style="background: url(\'' + _tmpe + '\'); float: left; width: ' + _tmpwe + 'px; height: ' + _tmphe + 'px; display: block"></span>').insertAfter($(".sexyCycle-content li:eq(" + (_t - 1) + ")", sexyCycle));
        $(".sexyCycleTempe", sexyCycle).css("display", "none");

        var _w = _p;

        $("li", sexyCycle).css("float", "left");
        $(box).css('width', _w + 'px');

        $(".sexyCycle-content", sexyCycle).animate({
            'left': '-=' + _left + 'px'
        }, {
            duration: 0
        });

        $(box).css("height", ($(sexyCycle).height() + $('.controllers', box).height() + 10) + "px");

        $(options.next).click(function () {
            slide('+');
        });

        $(options.prev).click(function () {
            slide('-');
        });

        $(sexyCycle).click(function () {
            slide('+');
        });

        if (options.interval != false) {
            var e = options.stop;
            timer(e);
        }

        $(options.stop).click(function () {
            stop(e);
        });

        function timer() {
            slide('+');
            e = setTimeout(timer, options.interval);
        }

        function stop(d) {
            clearInterval(e)
        }

        function slide(_e) {

            if (click == true) {

                click = false;

                if (_e == "-") {
                    slideto = "+=";
                    _cn = count - 1;
                    _p = $(".sexyCycle-content img:eq(" + (_cn) + ")", sexyCycle).width();
                } else {
                    slideto = "-=";
                    _cn = count + 1;
                    _p = $(".sexyCycle-content img:eq(" + (_cn - 1) + ")", sexyCycle).width();
                }

                if (_cn - 1 < _t - 1 && _cn - 1 >= -1) {

                    _w = $(".sexyCycle-content img:eq(" + _cn + ")", sexyCycle).width();

                    $(".sexyCycle-content", sexyCycle).animate({
                        'left': slideto + _p + 'px'
                    }, {
                        duration: options.speed,
                        easing: options.easing
                    });
                    $(box).animate({
                        'width': _w + 'px'
                    }, {
                        duration: options.speed,
                        easing: options.easing,
                        complete: function () {
                            click = true;
                        }
                    });

                    count = _cn;

                } else {


                    if (options.cycle == true) {

                        if (_e == "+") {

                            count = 0;
                            _cn = 0;

                            $(".sexyCycleTempf", sexyCycle).css("display", "block");
                            $(".sexyCycle-content", sexyCycle).css('left', '0px');
                            $(".sexyCycle-content", sexyCycle).animate({
                                'left': slideto + _p + 'px'
                            }, {
                                duration: options.speed,
                                easing: options.easing
                            });

                        } else {

                            count = _t - 1;
                            _cn = _t - 1;

                            $(".sexyCycleTempe", sexyCycle).css("display", "block");
                            $(".sexyCycle-content", sexyCycle).css('left', '-' + $(".sexyCycleTempe", sexyCycle).position().left + 'px');
                            $(".sexyCycle-content", sexyCycle).animate({
                                'left': slideto + _tmpw + 'px'
                            }, {
                                duration: options.speed,
                                easing: options.easing
                            });

                        }

                        _w = $(".sexyCycle-content img:eq(" + count + ")", sexyCycle).width();

                        $(box).animate({
                            'width': _w + 'px'
                        }, {
                            duration: options.speed,
                            easing: options.easing,
                            complete: function () {
                                click = true;
                            }
                        });

                    } else {
                        click = true;
                    }
                }

            }

        }

    };

})(jQuery);