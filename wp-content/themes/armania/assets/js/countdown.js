(function ($) {
    'use strict';

    $.fn.armania_countdown_event = function (event, data) {
        var $text_number = '',
            $this        = $(this),
            $days        = parseInt($this.find('.days > .number').text()),
            $hours       = parseInt($this.find('.hours > .number').text()),
            $mins        = parseInt($this.find('.mins > .number').text());

        if (data.days_text !== undefined) {
            $text_number = '%D';
            if ($days != event.strftime($text_number)) {
                $this.find('.days > .number').html(
                    event.strftime($text_number)
                );
                $this.find('.days > .number').attr(
                    'data-number', event.strftime($text_number)
                );
                $this.find('.days').addClass('flip');
            }
        }
        if (data.hrs_text !== undefined) {
            $text_number = '%H';
            if (data.days_text === undefined) {
                $text_number = '%I';
            }
            if ($hours != event.strftime($text_number)) {
                $this.find('.hours > .number').html(
                    event.strftime($text_number)
                );
                $this.find('.hours > .number').attr(
                    'data-number', event.strftime($text_number)
                );
                $this.find('.hours').addClass('flip');
            }
        }
        if (data.mins_text !== undefined) {
            $text_number = '%M';
            if (data.hrs_text === undefined) {
                $text_number = '%N';
            }
            if ($mins != event.strftime($text_number)) {
                $this.find('.mins > .number').html(
                    event.strftime($text_number)
                );
                $this.find('.mins > .number').attr(
                    'data-number', event.strftime($text_number)
                );
                $this.find('.mins').addClass('flip');
            }
        }
        if (data.secs_text !== undefined) {
            $text_number = '%S';
            if (data.mins_text === undefined) {
                $text_number = '%T';
            }
            $this.find('.secs > .number').html(
                event.strftime($text_number)
            );
            $this.find('.secs > .number').attr(
                'data-number', event.strftime($text_number)
            );
            $this.find('.secs').addClass('flip');
        }
        setTimeout(function () {
            $this.find('.time').removeClass('flip');
        }, 500);
    };
    $.fn.armania_countdown       = function () {
        $(this).on('armania_countdown', function () {
            $(this).each(function () {
                var el             = $(this),
                    data           = el.data('params'),
                    text_format    = '',
                    text_countdown = '';

                if (data.days_text !== undefined) {
                    text_format += '<span class="time days">';
                    text_format += '    <span class="number" data-number="00">00</span>';
                    text_format += '    <span class="text">' + data.days_text + '</span>';
                    text_format += '</span>';
                }
                if (data.hrs_text !== undefined) {
                    text_format += '<span class="time hours">';
                    text_format += '    <span class="number" data-number="00">00</span>';
                    text_format += '    <span class="text">' + data.hrs_text + '</span>';
                    text_format += '</span>';
                }
                if (data.mins_text !== undefined) {
                    text_format += '<span class="time mins">';
                    text_format += '    <span class="number" data-number="00">00</span>';
                    text_format += '    <span class="text">' + data.mins_text + '</span>';
                    text_format += '</span>';
                }
                if (data.secs_text !== undefined) {
                    text_format += '<span class="time secs">';
                    text_format += '    <span class="number" data-number="00">00</span>';
                    text_format += '    <span class="text">' + data.secs_text + '</span>';
                    text_format += '</span>';
                }

                el.html(text_format);

                el.countdown(el.data('datetime'), {elapse: true}).on('update.countdown', function (event) {
                    if (!event.elapsed) {
                        el.armania_countdown_event(event, data);
                    }
                });
            });
        }).trigger('armania_countdown');
    };

    window.addEventListener("load", function load() {
        /**
         * remove listener, no longer needed
         * */
        window.removeEventListener("load", load, false);
        /**
         * start functions
         * */

        if ($('.armania-countdown').length) {
            $('.armania-countdown').armania_countdown();
        }

    }, false);

    //
    // Elementor scripts
    //
    $(window).on('elementor/frontend/init', function () {
        elementorFrontend.hooks.addAction('frontend/element_ready/global', function ($scope, $) {
            $scope.find('.armania-countdown').armania_countdown();
        });
    });

})(window.jQuery);