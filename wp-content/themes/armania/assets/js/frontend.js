(function ($) {
    'use strict';

    var isTouch       = (('ontouchstart' in window) || (navigator.msMaxTouchPoints > 0) || (navigator.maxTouchPoints)),
        isMobile      = navigator.userAgent.match(
            /(iPhone|iPod|iPad|Android|playbook|silk|BlackBerry|BB10|Windows Phone|Tizen|Bada|webOS|IEMobile|Opera Mini)/
        ),
        get_url       = function (endpoint) {
            return armania_params.armania_ajax_url.toString().replace(
                '%%endpoint%%',
                endpoint
            );
        },
        get_cookie    = function (name) {

            var e, b, cookie = document.cookie, p = name + '=';

            if (!cookie) {
                return;
            }

            b = cookie.indexOf('; ' + p);

            if (b === -1) {
                b = cookie.indexOf(p);

                if (b !== 0) {
                    return null;
                }
            } else {
                b += 2;
            }

            e = cookie.indexOf(';', b);

            if (e === -1) {
                e = cookie.length;
            }

            return decodeURIComponent(cookie.substring(b + p.length, e));

        },
        set_cookie    = function (name, value, expires, path, domain, secure) {

            var d = new Date();

            if (typeof (expires) === 'object' && expires.toGMTString) {
                expires = expires.toGMTString();
            } else if (parseInt(expires, 10)) {
                d.setTime(d.getTime() + (parseInt(expires, 10) * 1000));
                expires = d.toGMTString();
            } else {
                expires = '';
            }

            document.cookie = name + '=' + encodeURIComponent(value) +
                (expires ? '; expires=' + expires : '') +
                (path ? '; path=' + path : '') +
                (domain ? '; domain=' + domain : '') +
                (secure ? '; secure' : '');

        },
        remove_cookie = function (name, path, domain, secure) {
            set_cookie(name, '', -1000, path, domain, secure);
        };

    var is_webkit = navigator.userAgent.toLowerCase().indexOf('webkit') > -1,
        is_opera  = navigator.userAgent.toLowerCase().indexOf('opera') > -1,
        is_ie     = navigator.userAgent.toLowerCase().indexOf('msie') > -1;

    if ((is_webkit || is_opera || is_ie) && document.getElementById && window.addEventListener) {
        window.addEventListener('hashchange', function () {
            var element = document.getElementById(location.hash.substring(1));

            if (element) {
                if (!/^(?:a|select|input|button|textarea)$/i.test(element.tagName)) {
                    element.tabIndex = -1;
                }

                element.focus();
            }
        }, false);
    }
    /* AJAX TABS */
    $(document).on('click', '.ovic-tabs .tabs .tab-link, .ovic-accordion .panel-heading a', function (e) {
        e.preventDefault();
        var $this       = $(this),
            $data       = $this.data(),
            $tabID      = $($this.attr('href')),
            $tabItem    = $this.closest('.tab-item'),
            $tabContent = $tabID.closest('.tabs-container,.ovic-accordion'),
            $loaded     = $this.closest('.tabs,.ovic-accordion').find('a.loaded').attr('href');

        if ($data.ajax == 1 && !$this.hasClass('loaded')) {
            $tabContent.addClass('loading');
            $tabItem.addClass('active').closest('.tabs').find('.tab-item').not($tabItem).removeClass('active');
            $.ajax({
                type     : 'POST',
                url      : get_url('content_ajax_tabs'),
                data     : {
                    security: armania_params.security,
                    section : $data.section,
                },
                success  : function (response) {
                    $('[href="' + $loaded + '"]').removeClass('loaded');
                    if (response) {
                        $tabID.html(response);
                        if ($tabID.find('.lazy').length && armania_params.enable_lazy) {
                            $tabID.find('.lazy').lazy({delay: 0});
                        }
                        if ($tabID.find('.owl-slick').length) {
                            $tabID.find('.owl-slick').armania_init_carousel();
                        }
                        if ($tabID.find('.equal-container.better-height').length) {
                            $tabID.find('.equal-container.better-height').armania_better_equal_elems();
                        }
                        if ($tabID.find('.armania-countdown').length && $.fn.armania_countdown) {
                            $tabID.find('.armania-countdown').armania_countdown();
                        }
                        if ($tabID.find('.ovic-products').length && $.fn.armania_load_infinite) {
                            $tabID.find('.ovic-products').armania_load_infinite();
                        }
                        if (isMobile === null) {
                            if ($tabID.find('.product-item.style-01').length) {
                                $tabID.find('.product-item.style-01').armania_hover_product();
                            }
                            if ($tabID.find('.product-item.style-02').length) {
                                $tabID.find('.product-item.style-02').armania_hover_product();
                            }
                            if ($tabID.find('.yith-wcqv-button,.compare-button a.compare,.yith-wcwl-add-to-wishlist a').length) {
                                $tabID.find('.yith-wcqv-button,.compare-button a.compare,.yith-wcwl-add-to-wishlist a').armania_bootstrap_tooltip();
                            }
                        }
                    } else {
                        $tabID.html('<div class="alert alert-warning">' + armania_params.tab_warning + '</div>');
                    }
                    /* for accordion */
                    $this.closest('.panel-default').addClass('active').siblings().removeClass('active');
                    $this.closest('.ovic-accordion').find($tabID).slideDown(400);
                    $this.closest('.ovic-accordion').find('.panel-collapse').not($tabID).slideUp(400);
                },
                complete : function () {
                    $this.addClass('loaded');
                    $tabContent.removeClass('loading');
                    setTimeout(function ($tabID, $tab_animated, $loaded) {
                        $tabID.addClass('active').siblings().removeClass('active');
                        $tabID.animation_tabs($tab_animated);
                        $($loaded).html('');
                    }, 10, $tabID, $data.animate, $loaded);
                },
                ajaxError: function () {
                    $tabContent.removeClass('loading');
                    $tabID.html('<div class="alert alert-warning">' + armania_params.tab_warning + '</div>');
                }
            });
        } else {
            $tabItem.addClass('active').closest('.tabs').find('.tab-item').not($tabItem).removeClass('active');
            $tabID.addClass('active').siblings().removeClass('active');
            /* for accordion */
            $this.closest('.panel-default').addClass('active').siblings().removeClass('active');
            $this.closest('.ovic-accordion').find($tabID).slideDown(400);
            $this.closest('.ovic-accordion').find('.panel-collapse').not($tabID).slideUp(400);
            /* for animate */
            $tabID.animation_tabs($data.animate);
            if ($tabID.find('.lazy').length) {
                $tabID.find('.lazy').armania_init_lazy_load();
            }
        }
    });
    /* ANIMATE */
    $.fn.animation_tabs             = function ($tab_animated) {
        $tab_animated = ($tab_animated === undefined || $tab_animated === '') ? '' : $tab_animated;
        if ($tab_animated !== '') {
            $(this).find('.owl-slick .slick-active, .product-list-grid .product-item').each(function (i) {
                var $this  = $(this),
                    $style = $this.attr('style'),
                    $delay = i * 200;

                $style = ($style === undefined) ? '' : $style;
                $this.attr('style', $style +
                    ';-webkit-animation-delay:' + $delay + 'ms;' +
                    '-moz-animation-delay:' + $delay + 'ms;' +
                    '-o-animation-delay:' + $delay + 'ms;' +
                    'animation-delay:' + $delay + 'ms;'
                ).addClass($tab_animated + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                    $this.removeClass($tab_animated + ' animated');
                    $this.attr('style', $style);
                });
            });
        }
    };
    $.fn.armania_init_carousel      = function () {
        $(this).not('.slick-initialized').each(function () {
            var $this   = $(this),
                $config = $this.data('slick') !== undefined ? $this.data('slick') : [];

            if ($this.hasClass('flex-control-thumbs')) {
                $config = $this.closest('.single-product-wrapper').data('slick');
            }
            if ($this.hasClass('elementor-section-slide')) {
                $this = $this.children('.elementor-container').children('.elementor-row');
                if ($this.hasClass('slick-initialized')) {
                    return false;
                }
            }
            if ($config.length <= 0) {
                return false;
            }
            if ($('body').hasClass('rtl')) {
                $config.rtl = true;
            }
            if ($config.vertical == true) {
                $config.prevArrow = '<span class="fa fa-angle-up prev"></span>';
                $config.nextArrow = '<span class="fa fa-angle-down next"></span>';
            } else {
                $config.prevArrow = '<span class="fa fa-angle-left prev"></span>';
                $config.nextArrow = '<span class="fa fa-angle-right next"></span>';
            }
            $config.customPaging = function (slick, index) {
                return '<span class="number">' + (index + 1) + '</span><button type="button">' + (index + 1) + '</button>';
            };

            $this.slick($config);

            $this.on('afterChange', function (event, slick, currentSlide, nextSlide) {
                $(slick.$list).find('.lazy').armania_init_lazy_load();
            });

            $this.on('setPosition', function (event) {
                if (isMobile === null) {
                    if ($(event.target).find('.product-item.style-01').length) {
                        $(event.target).find('.product-item.style-01').armania_hover_product();
                    }
                    if ($(event.target).find('.product-item.style-02').length) {
                        $(event.target).find('.product-item.style-02').armania_hover_product();
                    }
                }
            });
        });
    };
    $.fn.armania_init_lazy_load     = function () {
        if (armania_params.enable_lazy) {
            $(this).each(function () {
                var $this   = $(this),
                    $config = [];

                $config.beforeLoad     = function (element) {
                    if (element.is('div') === true) {
                        element.addClass('loading-lazy');
                    } else {
                        element.parent().addClass('loading-lazy');
                    }
                };
                $config.afterLoad      = function (element) {
                    if (element.is('div') === true) {
                        element.removeClass('loading-lazy');
                    } else {
                        element.parent().removeClass('loading-lazy');
                    }
                };
                $config.onFinishedAll  = function () {
                    if (!this.config('autoDestroy'))
                        this.destroy();
                }
                $config.effect         = "fadeIn";
                $config.enableThrottle = true;
                $config.throttle       = 550;
                $config.effectTime     = 400;
                if ($this.closest('.ovic-menu-clone-wrap').find('.ovic-menu-panel').length) {
                    $config.appendScroll = $this.closest('.ovic-menu-clone-wrap').find('.ovic-menu-panel');
                }
                $this.lazy($config);
            });
        }
    };
    $.fn.armania_better_equal_elems = function () {
        if (armania_params.is_mobile != true) {
            var $this = $(this);
            $this.on('armania_better_equal_elems', function () {
                setTimeout(function () {
                    $this.each(function () {
                        if ($(this).find('.equal-elem').length) {
                            $(this).find('.equal-elem').css({
                                'height': 'auto'
                            });
                            var $height = 0;
                            $(this).find('.equal-elem').each(function () {
                                if ($height < $(this).height()) {
                                    $height = $(this).height();
                                }
                            });
                            $(this).find('.equal-elem').height($height);
                        }
                    });
                }, 400);
            }).trigger('armania_better_equal_elems');
            $(window).on('resize', function () {
                $this.trigger('armania_better_equal_elems');
            });
        }
    };
    $.fn.armania_sticky_header      = function () {
        $(this).each(function () {
            var $this          = $(this),
                $header_height = $('.header').height();

            $(document).on('scroll', function (event) {
                var st = $(this).scrollTop();
                if (st > $header_height + 60) {
                    $this.addClass('is-sticky');
                } else {
                    $this.removeClass('is-sticky');
                    $this.find('.armania-dropdown').removeClass('open');
                }
            });
        });
    };
    /* HOVER PRODUCT */
    $.fn.armania_hover_product = function () {
        if (isMobile === null) {
            $(this).each(function () {
                var $this = $(this),
                    $list = $this.closest('.slick-list');
                if ($this.closest('.owl-slick').length && $(window).width() > 1199) {
                    $this.hover(
                        function (e) {
                            $list.css({
                                'padding': '10px 10px 100px',
                                'margin' : '-10px -10px -100px',
                                'z-index': '4',
                            });
                        }, function () {
                            $list.css({
                                'padding': '0',
                                'margin' : '0',
                                'z-index': '1',
                            });
                        }
                    );
                }
            });
        }
    };
    /* DROPDOWN */
    $(document).on('click', function (event) {
        var $target  = $(event.target).closest('.armania-dropdown'),
            $current = $target.closest('.armania-parent-toggle'),
            $parent  = $('.armania-dropdown');

        if ($target.length) {
            $parent.not($target).not($current).removeClass('open');
            if ($(event.target).is('[data-armania="armania-dropdown"]') ||
                $(event.target).closest('[data-armania="armania-dropdown"]').length) {
                if ($target.hasClass('overlay')) {
                    if ($target.hasClass('open')) {
                        $('body').removeClass('active-overlay');
                    } else {
                        $('body').addClass('active-overlay');
                    }
                }
                $target.toggleClass('open');
                event.preventDefault();
            }
        } else {
            $('.armania-dropdown').removeClass('open');
            if ($target.hasClass('overlay') || !$target.length) {
                $('body').removeClass('active-overlay');
            }
        }
    });
    /* POPUP VIDEO */
    $(document).on('click', '.popup-video', function (e) {
        var $this   = $(this),
            $href   = $this.attr('href'),
            $effect = $this.attr('data-effect');

        if ($.fn.magnificPopup) {
            $.magnificPopup.open({
                items       : {
                    src: $href,
                },
                type        : 'iframe', // this is a default type
                iframe      : {
                    markup: '<div class="mfp-iframe-scaler mfp-with-anim">' +
                        '<div class="mfp-close"></div>' +
                        '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                        '</div>',
                },
                callbacks   : {
                    beforeOpen: function () {
                        this.st.mainClass = $effect;
                    },
                },
                removalDelay: 500,
                midClick    : true
            });
            e.preventDefault();
        }
    });
    /* LOOP GALLERY IMAGE */
    $(document).on('click', '.product-item .product-loop-gallery a', function (event) {
        var $this     = $(this),
            $img      = $this.attr('data-image'),
            $index    = $this.attr('data-index'),
            $parent   = $this.closest('.product-item'),
            $slide    = $parent.find('.thumb-wrapper'),
            $main_img = $parent.find('.wp-post-image');

        if ($main_img) {
            if ($this.hasClass('dot-item') && $slide.length) {
                $slide.slick('slickGoTo', $index);
            } else {
                //$main_img.parent().addClass('loading-lazy');
                $main_img.attr('src', $img).attr('srcset', $img);
                $main_img.css({
                    '-webkit-transform' : 'scale(0.5)',
                    '-moz-transform'    : 'scale(0.5)',
                    '-ms-transform'     : 'scale(0.5)',
                    '-o-transform'      : 'scale(0.5)',
                    'transform'         : 'scale(0.5)',
                    'opacity'           : '0',
                    '-webkit-transition': 'all 0.3s ease',
                    '-moz-transition'   : 'all 0.3s ease',
                    '-ms-transition'    : 'all 0.3s ease',
                    '-o-transition'     : 'all 0.3s ease',
                    'transition'        : 'all 0.3s ease',
                }).load(function () {
                    var image = $(this);
                    setTimeout(function () {
                        image.css({
                            '-webkit-transform' : 'scale(1)',
                            '-moz-transform'    : 'scale(1)',
                            '-ms-transform'     : 'scale(1)',
                            '-o-transform'      : 'scale(1)',
                            'transform'         : 'scale(1)',
                            'opacity'           : '1',
                            '-webkit-transition': 'all 0.3s ease',
                            '-moz-transition'   : 'all 0.3s ease',
                            '-ms-transition'    : 'all 0.3s ease',
                            '-o-transition'     : 'all 0.3s ease',
                            'transition'        : 'all 0.3s ease',
                        });
                        //image.parent().removeClass('loading-lazy');
                    }, 300);
                });
            }
            $(this).addClass('gallery-active').siblings().removeClass('gallery-active');
        }

        event.preventDefault();
    });
    /* BUTTON TOOLTIP */
    $.fn.armania_bootstrap_tooltip = function () {
        if (isMobile === null) {
            $(this).each(function () {
                var $this    = $(this),
                    $product = $this.closest('.product-item'),
                    $text    = $this.text(),
                    $place   = 'left';

                if ($('body').hasClass('rtl')) {
                    $place = 'right';
                }
                if ($product.length) {
                    if (
                        $product.hasClass('list') ||
                        $product.hasClass('style-02') ||
                        $product.hasClass('style-03') ||
                        $product.hasClass('style-05') ||
                        $product.hasClass('style-10') ||
                        $product.hasClass('style-14') ||
                        $product.hasClass('style-27') ||
                        $product.hasClass('style-29') ||
                        $product.hasClass('style-31')
                    ) {
                        $this.tooltip({
                            trigger  : 'hover',
                            placement: 'top',
                            container: 'body',
                            title    : $text,
                        });
                    }
                    if (
                        $product.hasClass('style-12') ||
                        $product.hasClass('style-13') ||
                        $product.hasClass('style-15') ||
                        $product.hasClass('style-19') ||
                        $product.hasClass('style-18') ||
                        $product.hasClass('style-20') ||
                        $product.hasClass('style-21') ||
                        $product.hasClass('style-22') ||
                        $product.hasClass('style-24') ||
                        $product.hasClass('style-25') ||
                        $product.hasClass('style-26')
                    ) {
                        $this.tooltip({
                            trigger  : 'hover',
                            placement: $place,
                            container: 'body',
                            title    : $text,
                        });
                    }
                }
            });
        }
    }
    /* ZOOM IMAGE */
    $.fn.armania_zoom_product = function () {
        if ($(this).find('.single-product-wrapper.has-gallery').length && $.fn.zoom) {
            $(this).find('.single-product-wrapper.has-gallery .woocommerce-product-gallery .woocommerce-product-gallery__image').each(function () {
                var zoomTarget = $(this),
                    zoomImg    = zoomTarget.find('a').attr('href');

                if (zoomTarget.hasClass('flex-active-slide')) {
                    zoomTarget.trigger('zoom.destroy');
                }
                zoomTarget.zoom({url: zoomImg});
            });
        }
    };
    $.fn.armania_zoom_banner  = function () {
        if ($(this).find('.inner.zoom').length && $.fn.zoom) {
            $(this).find('.inner.zoom').each(function () {
                var zoomTarget = $(this),
                    zoomImg    = zoomTarget.data('image');

                zoomTarget.zoom({
                    url    : zoomImg,
                    touch  : false,
                    magnify: 1.2,
                });
            });
        }
    };
    /* TOGGLE WIDGET */
    $.fn.ovic_category_product = function () {
        $(this).each(function () {
            var $main = $(this);
            $main.find('.cat-parent').each(function () {
                if ($(this).hasClass('current-cat-parent')) {
                    $(this).addClass('show-sub');
                    $(this).children('.children').slideDown(400);
                }
                $(this).children('.children').before('<span class="carets"></span>');
            });
            $main.children('.cat-parent').each(function () {
                var curent = $(this).find('.children');
                $(this).children('.carets').on('click', function () {
                    $(this).parent().toggleClass('show-sub');
                    $(this).parent().children('.children').slideToggle(400);
                    $main.find('.children').not(curent).slideUp(400);
                    $main.find('.cat-parent').not($(this).parent()).removeClass('show-sub');
                });
                var next_curent = $(this).find('.children');
                next_curent.children('.cat-parent').each(function () {
                    var child_curent = $(this).find('.children');
                    $(this).children('.carets').on('click', function () {
                        $(this).parent().toggleClass('show-sub');
                        $(this).parent().parent().find('.cat-parent').not($(this).parent()).removeClass('show-sub');
                        $(this).parent().parent().find('.children').not(child_curent).slideUp(400);
                        $(this).parent().children('.children').slideToggle(400);
                    })
                });
            });
        });
    };
    /* QUANTITY */
    if (!String.prototype.getDecimals) {
        String.prototype.getDecimals = function () {
            var num   = this,
                match = ('' + num).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
            if (!match) {
                return 0;
            }
            return Math.max(0, (match[1] ? match[1].length : 0) - (match[2] ? +match[2] : 0));
        };
    }
    $(document).on('click', '.quantity-plus, .quantity-minus', function (e) {
        e.preventDefault();
        // Get values
        var $qty       = $(this).closest('.quantity').find('.qty'),
            currentVal = parseFloat($qty.val()),
            max        = parseFloat($qty.attr('max')),
            min        = parseFloat($qty.attr('min')),
            step       = $qty.attr('step');

        if (!$qty.is(':disabled')) {
            // Format values
            if (!currentVal || currentVal === '' || currentVal === 'NaN') currentVal = 0;
            if (max === '' || max === 'NaN') max = '';
            if (min === '' || min === 'NaN') min = 0;
            if (step === 'any' || step === '' || step === undefined || parseFloat(step) === 'NaN') step = '1';

            // Change the value
            if ($(this).is('.quantity-plus')) {
                if (max && (currentVal >= max)) {
                    $qty.val(max);
                } else {
                    $qty.val((currentVal + parseFloat(step)).toFixed(step.getDecimals()));
                }
            } else {
                if (min && (currentVal <= min)) {
                    $qty.val(min);
                } else if (currentVal > 0) {
                    $qty.val((currentVal - parseFloat(step)).toFixed(step.getDecimals()));
                }
            }

            // Trigger change event
            $qty.trigger('change');
        }
    });
    /* UPDATE COUNT WISHLIST */
    $(document).on('added_to_wishlist removed_from_wishlist', function () {
        $.get(get_url('update_wishlist_count'), function (count) {
            if (!count) {
                count = 0;
            }
            $('.block-wishlist .count').text(count);
        });
    });

    $(document).on('click', '.action-to-top', function (e) {
        $('html, body').animate({scrollTop: 0}, 800);
        e.preventDefault();
    });

    if (armania_params.ajax_comment == 1) {
        $(document).on('click', '#comments .woocommerce-pagination a', function () {
            var $this        = $(this),
                $comment     = $this.closest('#comments'),
                $commentlist = $comment.find('.commentlist'),
                $pagination  = $this.closest('.woocommerce-pagination');

            $comment.addClass('loading');
            $.ajax({
                url    : $this.attr('href'),
                success: function (response) {
                    if (!response) {
                        return;
                    }
                    var $html    = $.parseHTML(response, document, true),
                        $nav     = $('#comments .woocommerce-pagination', $html).length ? $('#comments .woocommerce-pagination', $html)[0].innerHTML : '',
                        $content = $('#comments .commentlist', $html).length ? $('#comments .commentlist', $html)[0].innerHTML : '';

                    if ($content !== '') {
                        $commentlist.html($content);
                    }
                    $pagination.html($nav);
                    $comment.removeClass('loading');
                },
            });

            return false;
        });
    }

    // $( document ).on( 'click', '.header-sticky .box-nav-vertical .block-title, .header .box-nav-vertical:not(.always-open) .block-title, body:not(.page-template-fullwidth) .header .box-nav-vertical .block-title', function ( e ) {
    //     $( this ).closest( '.box-nav-vertical' ).toggleClass( 'open' );
    //     e.preventDefault();
    // } );

    // Toggle mobile menu
    $(document).on('click', '.overlay-body', function () {
        $('body').removeClass('ovic-open-mobile-menu');
        $('body').removeClass('open-header-settings');
        $('body').removeClass('open-mobile-sidebar');
        $('.ovic-menu-clone-wrap').removeClass('open');
        return false;
    });

    // Toggle settings menu
    $(document).on('click', '.settings-toggle', function () {
        $('body').addClass('open-header-settings');
        return false;
    });
    $(document).on('click', '.settings-close', function () {
        $('body').removeClass('open-header-settings');
        return false;
    });
    $(document).on('click', '.open-sidebar', function () {
        $('body').addClass('open-mobile-sidebar');
        if (armania_params.enable_lazy) {
            $('#secondary').find('.lazy').lazy({delay: 0});
        }
        return false;
    });
    $(document).on('click', '.close-sidebar', function () {
        $('body').removeClass('open-mobile-sidebar');
        return false;
    });

    $(document).on('click', '.post-meta .share-post .toggle', function () {
        $(this).closest('.share-post').toggleClass('open');
        return false;
    });

    $(document).on('click', '.more_seller_product_tab > a', function () {
        var id = $(this).attr('href');

        if ($(id).find('ul.products').length) {
            $(id).find('ul.products').armania_better_equal_elems();
        }
    });

    $(document).on('change', '#armania_disabled_popup_by_user', function () {
        if ($(this).is(":checked")) {
            set_cookie('armania_disabled_popup_by_user', 'true');
        } else {
            set_cookie('armania_disabled_popup_by_user', '');
        }
    });

    $(document).ajaxComplete(function (event, xhr) {
        if (xhr.status == 200 && xhr.responseText) {
            if ($(event.target).find('.lazy').length) {
                $(event.target).find('.lazy').armania_init_lazy_load();
            }
        }
    });

    $(document).on('wc-product-gallery-after-init', function (event, target) {
        if ($(target).find('.flex-control-thumbs').length) {
            $(target).find('.flex-control-thumbs').armania_init_carousel();
        }
    });

    $(document).on('ovic_success_load_more_post', function (event, content) {
        if ($.fn.armania_bootstrap_tooltip && $(event.target).find('.yith-wcqv-button,.compare-button a.compare,.yith-wcwl-add-to-wishlist a').length) {
            $(event.target).find('.yith-wcqv-button,.compare-button a.compare,.yith-wcwl-add-to-wishlist a').armania_bootstrap_tooltip();
        }
        if ($(event.target).find('.lazy').length && armania_params.enable_lazy) {
            $(event.target).find('.lazy').lazy({delay: 0});
        }
        if ($(event.target).find('.owl-slick').length) {
            $(event.target).find('.owl-slick').armania_init_carousel();
        }
        if ($('.equal-container.better-height').length) {
            $('.equal-container.better-height').armania_better_equal_elems();
        }
    });

    $(document).on('scroll', function () {
        if ($(document).scrollTop() > 400) {
            $('.backtotop').addClass('show');
        } else {
            $('.backtotop').removeClass('show');
        }
    });

    $(document).on('found_variation', function (event, variation) {
        if ($(variation.price_html).length && $(event.target).find('.price').length) {
            $(event.target).find('.price').replaceWith(variation.price_html);
        }
    });

    $(document).on('click', '.reset_variations', function () {
        var form  = $(this).closest('.variations_form'),
            price = form.data('price');

        form.find('.price').html(price);
    });

    $(document).on('click', '.header-mobile .menu-add-cart', function () {
        $('body').toggleClass('show-add-cart');

        return false;
    });

    $(document).on('updated_wc_div', function (event) {
        if ($(event.target).find('.cross-sells .owl-slick').length > 0) {
            $(event.target).find('.cross-sells .owl-slick').armania_init_carousel();
        }
    });

    $(document).on('wc_fragments_loaded', function () {
        if ($('.woocommerce-mini-cart').length && isMobile === null && $.fn.scrollbar) {
            $('.woocommerce-mini-cart').scrollbar();
        }
    });

    window.addEventListener("load", function load() {
        /**
         * remove listener, no longer needed
         * */
        window.removeEventListener("load", load, false);
        /**
         * start functions
         * */
        if ($('.owl-slick').length) {
            $('.owl-slick').armania_init_carousel();
        }
        if ($('.elementor-section-slide').length) {
            $('.elementor-section-slide').armania_init_carousel();
        }
        if ($('.equal-container.better-height').length) {
            $('.equal-container.better-height').armania_better_equal_elems();
        }
        if ($('.lazy').length) {
            $('.lazy').armania_init_lazy_load();
        }
        if ($('.shop-before-control select').length) {
            $('.shop-before-control select').chosen({disable_search_threshold: 10});
        }
        if ($('.widget_product_categories .product-categories').length) {
            $('.widget_product_categories .product-categories').ovic_category_product();
        }
        if ($('.category-search-option').length) {
            $('.category-search-option').chosen();
        }
        if ($('.armania-popup-newsletter').length && get_cookie('armania_disabled_popup_by_user') !== 'true' && $.fn.magnificPopup) {
            var popup  = document.getElementById('armania-popup-newsletter'),
                effect = popup.getAttribute('data-effect'),
                delay  = popup.getAttribute('data-delay');

            setTimeout(function () {
                $.magnificPopup.open({
                    items       : {
                        src: '#armania-popup-newsletter'
                    },
                    type        : 'inline',
                    removalDelay: 600,
                    callbacks   : {
                        beforeOpen: function () {
                            this.st.mainClass = effect;
                        }
                    },
                    midClick    : true
                });
            }, delay);
        }
        /**
         * check not mobile
         * */
        if (isMobile === null) {
            if ($('.ovic-banner').length) {
                $('.ovic-banner').armania_zoom_banner();
            }
            if ($('.product-page-grid .site-main > .product').length) {
                $('.product-page-grid .site-main > .product').armania_zoom_product();
            }
            if ($('.product-page-slide .site-main > .product').length) {
                $('.product-page-slide .site-main > .product').armania_zoom_product();
            }
            if ($('.product-page-sticky .site-main > .product').length) {
                $('.product-page-sticky .site-main > .product').armania_zoom_product();
            }
            if ($('.header-sticky').length && $(window).width() > 1024) {
                $('.header-sticky').armania_sticky_header();
            }
            if ($('.product-item.style-01').length) {
                $('.product-item.style-01').armania_hover_product();
            }
            if ($('.product-item.style-02').length) {
                $('.product-item.style-02').armania_hover_product();
            }
            if ($('.yith-wcqv-button,.compare-button a.compare,.yith-wcwl-add-to-wishlist a').length) {
                $('.yith-wcqv-button,.compare-button a.compare,.yith-wcwl-add-to-wishlist a').armania_bootstrap_tooltip();
            }
            /* SCROLLBAR */
            if ($.fn.scrollbar) {
                if ($('.dokan-store-widget #cat-drop-stack > ul').length) {
                    $('.dokan-store-widget #cat-drop-stack > ul').scrollbar();
                }
            }
        }
    }, false);

    //
    // Elementor scripts
    //
    $(window).on('elementor/frontend/init', function () {
        elementorFrontend.hooks.addAction('frontend/element_ready/global', function ($scope, $) {
            $scope.find('.lazy').armania_init_lazy_load();
            $scope.find('.owl-slick').armania_init_carousel();
            $scope.find('.elementor-section-slide').armania_init_carousel();
            $scope.find('.equal-container.better-height').armania_better_equal_elems();
        });
    });

})(window.jQuery);