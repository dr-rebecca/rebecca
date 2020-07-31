<?php
if (!defined('ABSPATH')) {
    exit;
}
if (!class_exists('Armania_Patterns')) {
    class Armania_Patterns
    {
        public $css               = '';
        public $special           = 'Spartan';
        public $main_color        = '';
        public $main_color_2      = '';
        public $main_color_3      = '';
        public $text_main_color_2 = '';

        public function __construct()
        {
            add_action('wp_enqueue_scripts', array($this, 'add_inline_css'), 999);
        }

        public function font_special()
        {
            $special_typo = armania_theme_option_meta(
                '_custom_metabox_theme_options',
                'special_typography',
                'metabox_special_typography',
                ''
            );
            if (!empty($special_typo) && !empty($special_typo['font-family'])) {
                return $special_typo['font-family'];
            } else {
                return 'Spartan';
            }
        }

        public function install()
        {
            $this->special           = $this->font_special();
            $this->css               = armania_get_option('ace_style');
            $this->main_color        = armania_theme_option_meta(
                '_custom_metabox_theme_options',
                'main_color',
                'metabox_main_color',
                '#111111'
            );
            $this->main_color_2      = armania_theme_option_meta(
                '_custom_metabox_theme_options',
                'main_color_2',
                'metabox_main_color_2',
                '#7377ab'
            );
            $this->main_color_3      = armania_theme_option_meta(
                '_custom_metabox_theme_options',
                'main_color_3',
                'metabox_main_color_3',
                '#007aff'
            );
            $this->text_main_color_2 = armania_theme_option_meta(
                '_custom_metabox_theme_options',
                'text_main_color_2',
                'metabox_text_main_color_2',
                '#ffffff'
            );
        }

        public function add_inline_css()
        {
            $this->install();

            $this->inline_css();

            if ( armania_is_mobile() ) {
                $this->patterns_mobile();
            } else {
                $this->patterns_desktop();
            }

            $container = armania_theme_option_meta(
                '_custom_metabox_theme_options',
                'main_container',
                'metabox_main_container',
                '1410'
            );

            if (!empty($container) && $container != 1140) {
                $container_padding = $container + 30;
                $media             = $container_padding < 1200 ? 1200 : $container_padding;
                $this->css         .= '@media (min-width: '.$media.'px){
                    .elementor-section.elementor-section-boxed:not(.elementor-has-width) > .elementor-container{
                        width: '.$container.'px;
                    }
                    .elementor-section-stretched.elementor-section-boxed:not(.elementor-has-width) > .elementor-container,
                    .site > .elementor > .elementor-inner,
                    .container{
                        width: '.$container_padding.'px;
                    }
                    .box-nav-vertical .vertical-menu > .menu-item > .megamenu{
                        max-width: '.($container - 210).'px !important;
                    }
                    .header.style-05_2 ~ .header-sticky .box-nav-vertical .vertical-menu > .menu-item > .megamenu,
                    .header.style-05_2 .box-nav-vertical .vertical-menu > .menu-item > .megamenu{
                        max-width: '.($container - 240).'px !important;
                    }
                    .header.style-14 ~ .header-sticky .box-nav-vertical .vertical-menu > .menu-item > .megamenu,
                    .header.style-14 .box-nav-vertical .vertical-menu > .menu-item > .megamenu{
                        max-width: '.($container - 273).'px !important;
                    }
                }';
            }

            $this->css = preg_replace('/\s+/', ' ', $this->css);

            wp_add_inline_style('armania-main', apply_filters('armania_custom_inline_css', $this->css, $this));
        }

        public function inline_css()
        {
            $this->css .= '@media (min-width: 1200px){
                .skin-cosmetic .slick-slider .slick-arrow,
                .skin-medicine .slick-slider .slick-arrow,
                .skin-organic .slick-slider .slick-arrow
                {
                    color: '.$this->main_color.';
                }
                .skin-market .slick-slider .slick-arrow:hover,
                .skin-carparts .slick-slider .slick-arrow:hover::after,
                .skin-cosmetic .slick-slider .slick-arrow::after,
                .skin-medicine .slick-slider .slick-arrow:hover,
                .skin-organic .slick-slider .slick-arrow:hover,
                .skin-tools .slick-slider .slick-arrow:hover
                {
                    background-color: '.$this->main_color_2.';
                }
                .skin-pets .slick-slider .slick-arrow
                {
                    background-color: '.$this->main_color_3.';
                }
                .skin-market .slick-slider .slick-arrow:hover,
                .skin-carparts .slick-slider .slick-arrow:hover,
                .skin-cosmetic .slick-slider .slick-arrow:hover,
                .skin-medicine .slick-slider .slick-arrow:hover,
                .skin-organic .slick-slider .slick-arrow:hover,
                .skin-tools .slick-slider .slick-arrow:hover
                {
                    color: '.$this->text_main_color_2.';
                }
                .ovic-category.style-05 .slick-slider .slick-arrow
                {
                    color: '.$this->main_color.' !important;
                }
                .ovic-category.style-05 .slick-slider .slick-arrow:hover
                {
                    background-color: '.$this->main_color_2.' !important;
                }
                .ovic-category.style-05 .slick-slider .slick-arrow:hover
                {
                    color: '.$this->text_main_color_2.' !important;
                }
            }
            .ovic-blog.style-15 .slick-slider > .slick-arrow,
            .ovic-testmonials.style-05 .slick-slider > .slick-arrow:hover
            {
                color: '.$this->main_color.' !important;
            }
            .ovic-blog.style-15 .slick-slider > .slick-arrow:hover
            {
                background-color: '.$this->main_color_2.' !important;
            }
            .ovic-blog.style-15 .slick-slider > .slick-arrow:hover
            {
                color: '.$this->text_main_color_2.' !important;
            }
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            legend,
            label,
            th,
            #yith-quick-view-close,
            .modal-content .btn-close,
            div.mfp-content button.mfp-close,
            #tab-reviews #review_form .comment-reply-title,
            .editor-writing-flow .editor-post-title__block .editor-post-title__input,
            .post-pagination .post-page-numbers:not(:hover):not(.current),
            .woocommerce-pagination,
            .woocommerce .woocommerce-MyAccount-navigation ul li.is-active,
            .box-header-nav .main-menu > .menu-item:not(.current-menu-ancestor):not(.current_page_ancestor):not(.current-menu-parent):not(.current-menu-item):not(.current_page_item):not(:hover) > a,
            div.dgwt-wcas-search-wrapp .dgwt-wcas-preloader,
            .widget_rss ul li > a:not(:hover),
            .widget_recent_comments ul li > a:not(:hover),
            .widget_recent_entries > ul > li > a:not(:hover):not([aria-current="page"]),
            .ovic-google-maps .title-maps,
            .woocommerce-thankyou-order-received,
            #order_review_heading,
            .shop_table td.product-price,
            .shop_table td.product-subtotal,
            .cart-collaterals .shop_table .order-total td,
            .woocommerce-checkout .shop_table .order-total .amount,
            .gallery-caption,
            blockquote:not(.wp-block-quote),
            .main-section-banner .back:not(:hover),
            .breadcrumb > .active,
            .woocommerce-breadcrumb,
            div.ovic_bundle-wrap .column-name a:not(:hover),
            div.ovic_bundle-wrap .ovic_bundle-before-text,
            div.ovic_bundle-wrap .ovic_bundle-price .discount,
            div.ovic_bundle-wrap .ovic_bundle-total .discount,
            .send-to-friend,
            .woocommerce-product-gallery a.compare,
            .entry-summary a.compare,
            .product-item a.compare,
            a.yith-wcqv-button,
            .yith-wcwl-add-to-wishlist,
            .entry-summary .grouped_form .woocommerce-grouped-product-list-item__price,
            .entry-summary .more-devivery a:not(:hover),
            .product-page-slide .flex-direction-nav a:not(:hover),
            .button-wrapper #chart-button:not(:hover),
            .logo .logo-text,
            .price,
            .widget_shopping_cart .total,
            div.ovic-pinmap .ovic-pin .ovic-wc .ovic-wc-price,
            div.ovic-pinmap .ovic-pin .ovic-wc .product-title,
            .armania-head-account > a.active:not(:hover),
            .woocommerce-form-login .woocommerce-LostPassword a:not(:hover),
            .woocommerce-product-gallery__trigger:not(:hover),
            table.variations .rtwpvs-term:hover,
            table.variations .rtwpvs-term.selected,
            table.variations .reset_variations:not(:hover),
            table.variations select,
            .widget .product_list_widget > li > a:not(.remove):not(:hover),
            .entry-summary .grouped_form .woocommerce-grouped-product-list-item__label a:not(:hover),
            .woocommerce table.wishlist_table td.product-name a:not(.button):not(:hover),
            .woocommerce-cart-form > .shop_table td.product-name a:not(.button):not(:hover),
            .woocommerce-cart-form .dataTables_wrapper > .shop_table td.product-name a:not(.button):not(:hover),
            .main-color,
            a.backtotop,
            .modal-demo-menu .close-demo:not(:hover),
            
            .header-control .inner-control > * > a:not(:hover),
            .widget .product_list_widget > li > a:not(:hover),
            .armania-countdown .number,
            .ovic-slide .slick-slide .link:not(:hover),
            .post-meta a.post-author:not(:hover),
            .ovic-brand .brand-item .link:not(:hover),
            .box-nav-vertical .block-title,
            .ovic-banner.style-01 .button,
            .ovic-banner.style-03 .button,
            .ovic-banner.style-06 .button,
            .ovic-banner.style-15 .button,
            .ovic-banner.style-24 .button,
            .ovic-banner.style-25 .button,
            .ovic-banner.style-27 .button,
            .ovic-banner.style-28 .button,
            .ovic-deal.style-01 .head .desc,
            .ovic-deal.style-01 .head .button,
            .ovic-keyword,
            .ovic-title.style-01 .armania-toggle,
            .ovic-newsletter.style-03 .desc a:not(:hover),
            .post-meta .author:not(:hover) .name,
            .post-item.style-01 .post-date:not(:hover),
            .single-post > .thumb-wrap .post-date:not(:hover),
            .share-list > .title,
            .chosen-container .chosen-single,
            .shop-control .display-mode-control .title,
            .shop-control .display-mode-control .grid-number.active,
            .author-content .link:not(:hover),
            .pagination-thumb .name,
            .comments-area .comment-author,
            #wcmp_vendor_reviews .commentlist .woocommerce-review__author,
            #tab-reviews .commentlist .woocommerce-review__author,
            .quantity .input-qty,
            .product_meta > * .title,
            .woocommerce-tabs > ul > li > a,
            .cart-collaterals .shop_table,
            .ovic-category.style-01 .link:not(:hover),
            .ovic-trending.style-01 .tabs .tab-link:not(:hover),
            .ovic-tab.style-01 .tab-link,
            .elementor-counter .elementor-counter-number-wrapper,
            .menu-item.demo .megamenu .demo-title .elementor-heading-title,
            .widget .product_list_widget > li .amount,
            .widget .product_list_widget > li > a ~ .amount,
            .widget_shopping_cart .buttons .button:not(.checkout),
            .ovic-countdown.style-01 .armania-countdown,
            .product-item.style-12 a.yith-wcqv-button,
            .product-item.style-12 .yith-wcwl-add-to-wishlist > *,
            .product-item.style-13 a.yith-wcqv-button,
            .product-item.style-13 .yith-wcwl-add-to-wishlist > *,
            .product-item.style-14 a.yith-wcqv-button,
            .product-item.style-14 .yith-wcwl-add-to-wishlist > *,
            .product-item.style-15 a.yith-wcqv-button,
            .product-item.style-15 .yith-wcwl-add-to-wishlist > *,
            .product-item.style-18 a.yith-wcqv-button,
            .product-item.style-18 .yith-wcwl-add-to-wishlist > *,
            .product-item.style-19 a.yith-wcqv-button,
            .product-item.style-19 .yith-wcwl-add-to-wishlist > *,
            .product-item.style-20 a.yith-wcqv-button,
            .product-item.style-20 .yith-wcwl-add-to-wishlist > *,
            .product-item.style-21 a.yith-wcqv-button,
            .product-item.style-21 .yith-wcwl-add-to-wishlist > *,
            .product-item.style-22 a.yith-wcqv-button,
            .product-item.style-22 .yith-wcwl-add-to-wishlist > *,
            .product-item.style-24 a.yith-wcqv-button,
            .product-item.style-24 .yith-wcwl-add-to-wishlist > *,
            .product-item.style-25 a.yith-wcqv-button,
            .product-item.style-25 .yith-wcwl-add-to-wishlist > *,
            .product-item.style-26 a.yith-wcqv-button,
            .product-item.style-26 .yith-wcwl-add-to-wishlist > *,
            .product-item.style-27 a.yith-wcqv-button,
            .product-item.style-27 .yith-wcwl-add-to-wishlist > *,
            .product-item.style-31 a.yith-wcqv-button,
            .product-item.style-31 .yith-wcwl-add-to-wishlist > *,
            .product-item.style-32 a.yith-wcqv-button,
            .product-item.style-32 .yith-wcwl-add-to-wishlist > *,
            .header-sticky .header-control .inner-control > .block-userlink > a,
            .ovic-banner.style-36 .button,
            .ovic-banner.style-37 .button,
            .ovic-banner.style-39 .button,
            .ovic-countdown.style-02 .armania-countdown > *,
            .ovic-testmonials .desc,
            .ovic-testmonials .link,
            .blog-item.style-05 .cat-list,
            .blog-item.style-05 .post-readmore .button:not(:hover),
            .ovic-tab.style-05 .tab-link,
            .ovic-newsletter.style-06 .desc,
            .ovic-iconbox.style-01 .title,
            .ovic-category.style-04 .link,
            .ovic-category.style-06 .link:not(:hover),
            .ovic-tab.style-08 .tab-item.active .tab-link,
            .ovic-tab.style-08 .tab-item .tab-link:hover,
            .ovic-countdown.style-03 .armania-countdown .text,
            .blog-item.style-08 .post-date:not(:hover),
            .ovic-tab.style-09 .tab-link,
            .ovic-category.style-05 .link,
            .ovic-countdown.style-04 .desc,
            .ovic-countdown.style-04 .armania-countdown,
            .blog-item.style-11 .post-readmore .button,
            .process-availability .text strong,
            .ovic-banner.style-49 .button,
            .ovic-banner.style-43 .button,
            .ovic-tab.style-07 .tab-item.active .tab-link,
            .ovic-tab.style-07 .tab-item .tab-link:hover,
            .ovic-deal.style-05 .head .sub-title a:not(:hover),
            .ovic-title.style-04 .sub-title a:not(:hover),
            .blog-item.style-13 .post-readmore .button,
            .ovic-banner.style-50 .price-content,
            .ovic-category.style-08 .link:not(:hover),
            .header-settings .header_topmenu > .menu-item:not(.current-menu-ancestor):not(.current_page_ancestor):not(.current-menu-parent):not(.current-menu-item):not(.current_page_item):not(:hover) > a,
            .header-settings .block-userlink > a:not(:hover),
            .header-settings .header-message p,
            .ovic-category.style-09 .link,
            .ovic-tab.style-14 .tab-item.active .tab-link,
            .ovic-testmonials.style-05 .name a,
            .product-item.style-28 .armania-countdown > *:not(:last-child)::after,
            .ovic-products.style-29 .button-products .button:not(:hover),
            .ovic-category.style-12 .link,
            .ovic-countdown.style-07 .desc,
            .ovic-newsletter.style-19 .submit-newsletter,
            .ovic-category.style-13 .link,
            .blog-item.style-17 .cat-list,
            .blog-item.style-18 .cat-list,
            .ovic-tab.style-20 .tabs,
            .blog-item.style-19 .post-readmore .button,
            
            .header.style-06 .logo .logo-text .highlight,
            .header.style-11 .logo .logo-text .highlight,
            body:not(.skin-market) .ovic-title.style-01 .title
            {
                color: '.$this->main_color.';
                fill: '.$this->main_color.';
            }
            .product-loop-gallery .slick-slider .slick-arrow:hover,
            .ovic-tab.style-02 .ovic-products .slick-slider .slick-arrow,
            .ovic-testmonials.style-04 .slick-slider .slick-arrow,
            .ovic-slide.style-06.lighter .slide-item .link,
            .ovic-tab.style-12 .tab-link
            {
                color: '.$this->main_color.' !important;
                fill: '.$this->main_color.' !important;
            }
            .widget #today,
            .border-scale,
            .border-plus,
            .border-zoom::before,
            .ovic-google-maps .direction-maps,
            .post-pagination > *,
            .popup-email-content .btn-close,
            .scroll-wrapper > .scroll-element .scroll-arrow,
            .main-bg,
            .ovic-newsletter.style-03 .submit-newsletter,
            .product-item.style-13 .add-to-cart a,
            .ovic-testmonials.style-02 .slick-dots li.slick-active,
            .ovic-testmonials.style-02 .slick-dots li:hover,
            .header-contact > a,
            .blog-item.style-09 .post-date,
            .product-item.style-18 .add-to-cart a:not(:hover),
            .product-item.style-24 .add-to-cart a:not(:hover),
            
            .skin-facemask .slick-dots li.slick-active,
            .skin-facemask .slick-dots li:hover,
            .skin-furniture .slick-dots li.slick-active,
            .skin-furniture .slick-dots li:hover,
            .skin-furniture-02 .slick-dots li.slick-active,
            .skin-furniture-02 .slick-dots li:hover,
            .skin-kids .slick-dots li.slick-active,
            .skin-kids .slick-dots li:hover
            {
                background-color: '.$this->main_color.';
            }
            .widget_layered_nav .group-image a:hover i, 
            .widget_layered_nav .group-image a.selected i, 
            .widget_layered_nav .group-color a:hover i,
            .widget_layered_nav .group-color a.selected i,
            .main-border,
            table.variations .rtwpvs-color-term.selected span,
            table.variations .rtwpvs-color-term:hover span,
            table.variations .rtwpvs-image-term.selected img,
            table.variations .rtwpvs-image-term:hover img
            {
                border-color: '.$this->main_color.';
            }
            .ovic-trending.style-01 .tabs .tab-link svg
            {
                fill: '.$this->main_color.';
            }
            a:hover,
            a:focus,
            .highlight,
            .post-sticky,
            .menu-item:hover > a,
            .current-menu-ancestor > a,
            .current_page_ancestor > a,
            .current-menu-parent > a,
            .current-menu-item > a,
            .current_page_item > a,
            div.ovic-menu-clone-wrap .ovic-menu-panel > ul > .current-menu-ancestor > a,
            div.ovic-menu-clone-wrap .ovic-menu-panel > ul > .current_page_ancestor > a,
            div.ovic-menu-clone-wrap .ovic-menu-panel > ul > .current-menu-parent > a,
            div.ovic-menu-clone-wrap .ovic-menu-panel > ul > .current-menu-item > a,
            div.ovic-menu-clone-wrap .ovic-menu-panel > ul > .current_page_item > a,
            .entry-summary #chart-button:hover,
            #yith-quick-view-close:hover,
            .modal-content .btn-close:hover,
            div.mfp-content button.mfp-close:hover,
            .chosen-container .chosen-single:hover,
            .chosen-container .chosen-results li.highlighted,
            .rtwpvs .rtwpvs-terms-wrapper.radio-variable-wrapper .rtwpvs-radio-term:hover,
            .woocommerce-form-login .form-row label.woocommerce-form__label-for-checkbox:hover,
            .woocommerce #shipping_method input[type="radio"]:hover ~ label,
            .woocommerce #shipping_method input[type="radio"] ~ label:hover,
            .woocommerce #shipping_method input[type="checkbox"]:hover ~ label,
            .woocommerce #shipping_method input[type="checkbox"] ~ label:hover,
            .woocommerce #content table.wishlist_table.cart a.remove:hover,
            .comment-form-cookies-consent label:hover,
            .vc_custom_heading a:hover,
            div.dgwt-wcas-search-wrapp .dgwt-wcas-preloader:hover,
            .widget_search button[type="submit"]:hover,
            .widget_product_search button[type="submit"]:hover,
            .widget_rating_filter .chosen > a,
            .widget_layered_nav a.selected,
            .widget_layered_nav .chosen > a,
            .widget_ovic_nav_menu ul li a[aria-current="page"],
            .widget_nav_menu ul li a[aria-current="page"],
            .widget_recent_entries ul li a[aria-current="page"],
            .widget_pages ul li [aria-current="page"],
            .widget_archive ul li a[aria-current="page"],
            .widget_categories ul li.current-cat > a,
            .widget_product_categories ul li.current-cat > a,
            .widget-ovic-iconbox .icon,
            .post-item.sticky .post-title::after,
            .send-to-friend:hover,
            .woocommerce-product-gallery a.compare:hover,
            .entry-summary a.compare:hover,
            .product-item a.compare:hover,
            a.yith-wcqv-button:hover,
            a.yith-wcqv-button:focus,
            .yith-wcwl-add-to-wishlist a:hover,
            .yith-wcwl-add-to-wishlist a:focus,
            .woocommerce-product-gallery a.compare.added, 
            .entry-summary a.compare.added,
             .product-item a.compare.added,
             .send-to-friend.opened,
            .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .yith-wcwl-add-to-wishlist .delete_item,
            .armania_disabled_popup_by_user:hover,
            .armania_disabled_popup_by_user:focus,
            .price_slider_amount .button:hover,
            .armania-edit-link a,
            .elementor-toggle .elementor-tab-title:hover,
            .widget_shopping_cart .total .amount,
            .ovic-price-filter .price-item:hover,
            div.ovic_bundle-wrap .footer-bundle .ovic-bundle-subtotal > .ovic_bundle-total-save span,
            .main-color-2,
            .main-color-2.elementor-widget-heading h1,
            .main-color-2.elementor-widget-heading h2,
            .main-color-2.elementor-widget-heading h3,
            .main-color-2.elementor-widget-heading h4,
            .main-color-2.elementor-widget-heading h5,
            .main-color-2.elementor-widget-heading h6,
            .header-info .icon,
            .ovic-iconbox.style-01 .icon,
            .ovic-iconbox.style-04 .icon,
            .slick-slider .slick-arrow:hover,
            .ovic-contact.style-01 .icon,
            .ovic-contact.style-01 .phone,
            .ovic-contact.style-02 .icon,
            .ovic-banner.style-11 .button,
            .ovic-banner.style-16 .button,
            .product-item.style-02 a.compare:hover,
            .product-item.style-02 a.yith-wcqv-button:hover,
            .product-item.style-02 .yith-wcwl-add-to-wishlist a:hover,
            .product-item.style-03 .add-to-cart a:hover,
            .product-item.style-10 .add-to-cart a:hover,
            .widget_product_categories .cat-item.cat-parent > .carets:hover,
            .shop-control .display-mode-control .mode-button.active,
            .shop-control .display-mode-control .mode-button:hover,
            .pagination-thumb .text,
            .ovic-banner.style-01 .button:hover,
            .ovic-banner.style-03 .button:hover,
            .ovic-banner.style-06 .button:hover,
            .ovic-banner.style-15 .button:hover,
            .ovic-banner.style-24 .button:hover,
            .ovic-banner.style-25 .button:hover,
            .ovic-banner.style-27 .button:hover,
            .ovic-banner.style-28 .button:hover,
            .entry-summary .sku_wrapper .sku,
            .woocommerce-tabs > ul > li.active > a,
            .woocommerce-tabs > ul > li > a:hover,
            .cart-collaterals .shop_table .shipping-calculator-button,
            .cart-collaterals .shop_table .order-total .amount,
            .woocommerce-checkout .shop_table .order-total .amount,
            .ovic-tab.style-01 .tab-link::before,
            .ovic-hotcategory.style-01 .hotcategory-item .button:hover,
            .ovic-trending.style-01 .tabs .active .tab-link,
            .ovic-trending.style-01 .tabs .tab-link:hover,
            .ovic-tabs .tab-item.active .tab-link,
            .ovic-tabs .tab-item .tab-link:hover,
            .ovic-tab.style-03 .button-wrap .button,
            .ovic-countdown.style-01 .armania-countdown .number,
            .ovic-contact.style-02 .phone::before,
            .ovic-contact.style-02 .email::before,
            .ovic-custommenu.style-03 .widget .widget-title,
            .ovic-socials.style-03 a:hover,
            .ovic-banner.style-30 .button:hover,
            .header-sticky .header-control .inner-control > .block-userlink > a:hover,
            .ovic-slide.style-05 .slide-item .link:not(:hover) .icon,
            .blog-item.style-04 .cat-list,
            .ovic-custommenu > .button-wrap .link,
            .ovic-banner.style-36 .button:hover,
            .ovic-banner.style-37 .button:hover,
            .ovic-banner.style-39 .button:hover,
            .product-item.style-13 .price,
            .ovic-countdown.style-02 .armania-countdown .number,
            .ovic-testmonials.style-02 .position,
            .post-meta a:not(:hover) .name,
            .ovic-testmonials.style-01 .name,
            .product-item.style-16 .price,
            .ovic-tab.style-06 .button-wrap .button:hover,
            .ovic-countdown.style-03 .subtitle,
            .ovic-testmonials.style-01 .desc::before,
            .ovic-banner.style-44 .button:hover,
            .ovic-newsletter.style-01 .icon,
            .ovic-newsletter.style-08 .icon,
            .ovic-newsletter.style-09 .icon,
            .ovic-newsletter.style-08 .submit-newsletter:hover,
            .blog-item.style-09 .post-meta .author .name,
            .ovic-newsletter.style-09 .submit-newsletter:hover,
            .ovic-testmonials.style-04 .link::before,
            .ovic-slide.style-06.lighter .slide-item .icon,
            .ovic-banner.style-46 .button:hover,
            .ovic-banner.style-47 .button:hover,
            .ovic-banner.style-48 .button:hover,
            .blog-item.style-12 .post-meta,
            .product-item.style-18 .star-rating > span::before,
            .product-item.style-24 .star-rating > span::before,
            .product-item.style-26 .star-rating > span::before,
            .ovic-banner.style-43 .button:hover,
            .ovic-banner.style-43 .button::after,
            .ovic-deal.style-05 .head .sub-title a::after,
            .ovic-title.style-04 .sub-title a::after,
            .ovic-category.style-07 .button-wrap a,
            .blog-item.style-13 .post-readmore .button:hover,
            .ovic-testmonials.style-05 .content::before,
            .ovic-testmonials.style-06 .testmonial::before,
            .ovic-banner.style-53 .text-01,
            .ovic-banner.style-53 .button:hover,
            .blog-item.style-16 .post-readmore .button:hover,
            .ovic-newsletter.style-19 .submit-newsletter:hover,
            .ovic-category.style-13 .count,
            .product-item.style-33 .product-info > .text,
            .product-item.style-33 .price,
            .blog-item.style-19 .post-meta,
            .blog-item.style-19 .post-readmore .button:hover,
            .ovic-newsletter.style-20 .submit-newsletter,
            
            .header.style-05_2 .logo .logo-text .highlight,
            .header.style-06 .logo .logo-text,
            .header.style-08_3 .logo .logo-text .highlight,
            .header.style-10 .logo .logo-text .highlight,
            .header.style-10 .logo .logo-text .dot,
            .header.style-11 .logo .logo-text,
            .header.style-15 .logo .logo-text,
            .header.style-19 .logo .logo-text,
            .header.style-12_3 .logo .logo-text,
            .skin-kids .ovic-menu-clone-wrap .ovic-custommenu.style-01 .widget .widget-title,
            .skin-kids .header-sticky .ovic-custommenu.style-01 .widget .widget-title,
            .skin-kids .header .ovic-custommenu.style-01 .widget .widget-title
            {
                color: '.$this->main_color_2.';
                fill: '.$this->main_color_2.';
            }
            .nav-simple :not(.slick-vertical) .slick-arrow:hover,
            .nav-top :not(.slick-vertical) .slick-arrow:hover,
            #open-demo:hover
            {
                color: '.$this->main_color_2.' !important;
                fill: '.$this->main_color_2.' !important;
            }
            a.backtotop:hover,
            a.backtotop:focus,
            .ovic-google-maps .direction-maps:hover,
            .scroll-wrapper > .scroll-element .scroll-arrow:hover,
            .popup-email-content .btn-close:hover,
            div.ovic-pinmap .ovic-pin .ovic-wc .ovic-popup-footer a,
            #ship-to-different-address label input[type="checkbox"]:checked + span::before,
            .elementor-button,
            .added_to_cart,
            .button,
            button,
            input[type="button"],
            input[type="submit"],
            div.ovic-pinmap .ovic-pin .icon-theme::before,
            .modal-demo-menu .demo.new a::after,
            .menu-item.demo .megamenu .new .elementor-image a::after,
            div.ovic_bundle-wrap .ovic_bundle-product .ovic_bundle-sale,
            .main-bg-2,
            .header-control .inner-control > .block-userlink > a .icon,
            .header-control .inner-control > .block-minicart > a .count,
            div.dgwt-wcas-search-wrapp button.dgwt-wcas-search-submit,
            .ovic-title.style-01 .title,
            .slick-dots li.slick-active,
            .slick-dots li:hover,
            .ovic-socials a:hover,
            .ovic-slide.style-03 .slide-item .link:hover,
            .entry-summary a.compare:hover,
            .entry-summary .yith-wcwl-add-to-wishlist > *:hover,
            .entry-summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .entry-summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.list a.compare:hover,
            .product-item.list a.yith-wcqv-button:hover,
            .product-item.list .yith-wcwl-add-to-wishlist > *:hover,
            .product-item.list .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .product-item.list .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.style-05 a.compare:hover,
            .product-item.style-05 a.yith-wcqv-button:hover,
            .product-item.style-05 .yith-wcwl-add-to-wishlist > *:hover,
            .product-item.style-05 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .product-item.style-05 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.style-12 a.yith-wcqv-button:hover,
            .product-item.style-12 .yith-wcwl-add-to-wishlist > *:hover,
            .product-item.style-12 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .product-item.style-12 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.style-12 .add-to-cart a,
            .product-item.style-13 a.yith-wcqv-button:hover,
            .product-item.style-13 .yith-wcwl-add-to-wishlist > *:hover,
            .product-item.style-13 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .product-item.style-13 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.style-14 a.yith-wcqv-button:hover,
            .product-item.style-14 .yith-wcwl-add-to-wishlist > *:hover,
            .product-item.style-14 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .product-item.style-14 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.style-14 .add-to-cart a,
            .product-item.style-15 a.yith-wcqv-button:hover,
            .product-item.style-15 .yith-wcwl-add-to-wishlist > *:hover,
            .product-item.style-15 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .product-item.style-15 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.style-15 .add-to-cart a,
            .product-item.style-18 a.yith-wcqv-button:hover,
            .product-item.style-18 .yith-wcwl-add-to-wishlist > *:hover,
            .product-item.style-18 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .product-item.style-18 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.style-19 a.yith-wcqv-button:hover,
            .product-item.style-19 .yith-wcwl-add-to-wishlist > *:hover,
            .product-item.style-19 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .product-item.style-19 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.style-19 .add-to-cart a,
            .product-item.style-20 a.yith-wcqv-button:hover,
            .product-item.style-20 .yith-wcwl-add-to-wishlist > *:hover,
            .product-item.style-20 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .product-item.style-20 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.style-20 .add-to-cart a,
            .product-item.style-21 a.yith-wcqv-button:hover,
            .product-item.style-21 .yith-wcwl-add-to-wishlist > *:hover,
            .product-item.style-21 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .product-item.style-21 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.style-21 .add-to-cart a,
            .product-item.style-22 a.yith-wcqv-button:hover,
            .product-item.style-22 .yith-wcwl-add-to-wishlist > *:hover,
            .product-item.style-22 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .product-item.style-22 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.style-22 .add-to-cart a,
            .product-item.style-24 a.yith-wcqv-button:hover,
            .product-item.style-24 .yith-wcwl-add-to-wishlist > *:hover,
            .product-item.style-24 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .product-item.style-24 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.style-25 a.yith-wcqv-button:hover,
            .product-item.style-25 .yith-wcwl-add-to-wishlist > *:hover,
            .product-item.style-25 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .product-item.style-25 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.style-25 .add-to-cart a,
            .product-item.style-26 a.yith-wcqv-button:hover,
            .product-item.style-26 .yith-wcwl-add-to-wishlist > *:hover,
            .product-item.style-26 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .product-item.style-26 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.style-26 .add-to-cart a,
            .product-item.style-27 a.yith-wcqv-button:hover,
            .product-item.style-27 .yith-wcwl-add-to-wishlist > *:hover,
            .product-item.style-27 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .product-item.style-27 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.style-27 .add-to-cart a,
            .product-item.style-29 a.yith-wcqv-button:hover,
            .product-item.style-29 .yith-wcwl-add-to-wishlist > *:hover,
            .product-item.style-29 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .product-item.style-29 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.style-29 .add-to-cart a,
            .product-item.style-31 a.yith-wcqv-button:hover,
            .product-item.style-31 .yith-wcwl-add-to-wishlist > *:hover,
            .product-item.style-31 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .product-item.style-31 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.style-31 .add-to-cart a,
            .product-item.style-32 a.yith-wcqv-button:hover,
            .product-item.style-32 .yith-wcwl-add-to-wishlist > *:hover,
            .product-item.style-32 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .product-item.style-32 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.style-32 .add-to-cart a,
            .ovic-deal.style-01 .head,
            .post-item.style-01 .cat-list,
            .single-post > .cat-list,
            .woocommerce-pagination ul li a:hover,
            .woocommerce-pagination ul li .current,
            .ovic-price-filter .price-item.active::before,
            .widget_categories ul li.current-cat > a::before,
            .widget_product_categories ul li.current-cat > a::before,
            .widget_layered_nav a.selected::before,
            .widget_layered_nav .woocommerce-widget-layered-nav-list .chosen > a::before,
            .tagcloud a:hover,
            .pagination-thumb .link:hover .icon,
            .ovic-tab.style-02 .tab-title,
            .ovic-tab.style-03 .tab-item.active,
            .ovic-newsletter.style-04 .submit-newsletter::before,
            .ovic-countdown .price-countdown,
            .ovic-countdown.style-01 .button::before,
            .ovic-banner.style-33 .button::before,
            .ovic-banner.style-31 .text-01,
            .ovic-slide.style-05 .slide-item .link::before,
            .blog-item.style-03 .cat-list,
            .contact-icon .elementor-icon,
            .ovic-tab.style-04 .tab-item.active .tab-link,
            .ovic-tab.style-04 .tab-item .tab-link:hover,
            .blog-item.style-05 .post-readmore .button::before,
            .ovic-category.style-02 .content,
            .ovic-tab.style-05 .tab-item.active .tab-link,
            .ovic-tab.style-05 .tab-item .tab-link:hover,
            .blog-item.style-06 .post-date,
            .product-item.style-16 .armania-countdown-wrapper,
            .ovic-category.style-03 .content::before,
            .blog-item.style-07 .post-date,
            .ovic-tab.style-09 .tab-link::before,
            .blog-item.style-10 .cat-list,
            .ovic-slide.style-06 .slide-item .link,
            .ovic-newsletter.style-11 .inner,
            .ovic-newsletter.style-12 .inner,
            .process-availability .process,
            .ovic-tab.style-12 .tab-link .hover,
            .ovic-tab.style-11 .tab-item.active .tab-link,
            .ovic-tab.style-11 .tab-item .tab-link:hover,
            .ovic-banner.style-48 .hover,
            .ovic-banner.style-47 .hover,
            .ovic-banner.style-46 .hover,
            .ovic-deal.style-05 .armania-countdown-wrapper,
            .ovic-tab.style-13 .tab-link::before,
            .ovic-social-network.style-02 .title,
            .ovic-category.style-09 .link::after,
            .ovic-tab.style-14 .tab-link::before,
            .ovic-countdown.style-05 .button::before,
            .ovic-products.style-26 .button-products .button::before,
            .ovic-countdown.style-05 .thumb .background span::after,
            .blog-item.style-15 .post-readmore .button,
            .ovic-testmonials.style-05 .slick-slider > .slick-arrow.prev::after,
            .ovic-testmonials.style-05 .slick-slider > .slick-arrow.next::after,
            .ovic-countdown.style-05 .title .highlight::before,
            .ovic-newsletter.style-17 .submit-newsletter,
            .ovic-socials.style-04 a:hover .icon,
            .ovic-category.style-12 .content,
            .ovic-social-network.style-04 .widget .widget-title,
            .ovic-countdown.style-08 .armania-countdown .number::before,
            .blog-item.style-19 .post-readmore .button::before,
            
            .header.style-20 .logo .logo-text,
            .skin-carparts .product-labels > .onsale,
            .skin-fashion .product-labels > .onsale,
            .skin-furniture .product-labels > .onsale,
            .skin-furniture-02 .product-labels > .onsale,
            .skin-cosmetic .product-labels > .onsale,
            .skin-medical .product-labels > .onnew,
            .skin-organic .product-labels > .onsale,
            .skin-organic-03 .product-labels > .onsale,
            .skin-tools .product-labels > .onsale,
            .skin-plant .product-labels > .onsale,
            .skin-kids .product-labels > .onsale,
            .skin-sports .product-labels > .onsale
            {
                background-color: '.$this->main_color_2.';
            }
            .ovic-tab.style-02 .ovic-products .slick-slider .slick-arrow:hover,
            .ovic-testmonials.style-04 .slick-slider .slick-arrow:hover,
            .button-carparts::before
            {
                background-color: '.$this->main_color_2.' !important;
            }
            div.dgwt-wcas-search-wrapp input[type=search].input-text:focus ~ .input-focus,
            .ovic-newsletter .input-text[type]:focus ~ .input-focus,
            .woocommerce .woocommerce-error,
            .woocommerce .woocommerce-info,
            .woocommerce .woocommerce-message,
            blockquote:not(.wp-block-quote),
            div.ovic-pinmap .ovic-pin.text.text-line .popover::before,
            div.ovic-pinmap .ovic-pin.text.text-line .popover::after,
            div.ovic-pinmap .ovic-pin.text.text-line .popover-content::after,
            .main-border-2,
            div.dgwt-wcas-search-wrapp .dgwt-wcas-sf-wrapp .input-focus,
            .ovic-brand.style-01 .brand-item .link::before,
            .slick-dots li,
            .ovic-newsletter.style-02 .input-focus,
            .product-loop-gallery a.gallery-active,
            .product-loop-gallery a:hover,
            .ovic-trending.style-01 .tabs .active .tab-link::before,
            .ovic-trending.style-01 .tabs .tab-link:hover::before,
            .ovic-banner.style-30 .button,
            .ovic-banner.style-31 .button,
            .ovic-banner.style-32 .button,
            .ovic-banner.style-36 .button,
            .ovic-banner.style-37 .button,
            .ovic-banner.style-39 .button,
            div.dgwt-wcas-search-wrapp .category select:focus, 
            div.dgwt-wcas-search-wrapp .category .chosen-container-active.chosen-with-drop .chosen-single, 
            div.dgwt-wcas-search-wrapp .category .chosen-container.chosen-with-drop .chosen-single,
            .blog-item.style-08 .post-date,
            .blog-item.style-09 .post-date,
            .ovic-banner.style-44 .button,
            .ovic-banner.style-44 .hover,
            .ovic-banner.style-46 .button,
            .ovic-banner.style-47 .button,
            .ovic-banner.style-48 .button,
            .ovic-title.style-03 .title::before,
            .ovic-title.style-03 .title::after,
            .ovic-tab.style-07 .tab-item.active .tab-link,
            .ovic-tab.style-07 .tab-item .tab-link:hover,
            .ovic-deal.style-04 .inner,
            .blog-item.style-15 .post-title::before,
            .ovic-custommenu.style-07 ul li a:hover::before,
            .blog-item.style-16 .post-date::before,
            .blog-item.style-16 .post-readmore .button,
            .ovic-newsletter .input-focus,
            body:not(.skin-market) .ovic-title.style-01 .title
            {
                border-color: '.$this->main_color_2.';
            }
            .ovic-tab.style-01 .tab-item.active .tab-link .hover::before,
            .ovic-brand.style-01 .brand-item .link:hover .hover::before,
            .ovic-tab.style-01 .tab-link:hover .hover::before,
            .ovic-tab.style-13 .tab-link::after
            {
                border-top-color: '.$this->main_color_2.';
            }
            .ovic-tab.style-12 .tab-link .hover::after
            {
                border-left-color: '.$this->main_color_2.';
            }
            body.rtl .ovic-tab.style-12 .tab-link .hover::after
            {
                border-left-color: transparent;
                border-right-color: '.$this->main_color_2.';
            }
            @media (max-width: 1199px){
                .ovic-tab.style-12 .tab-link .hover::after
                {
                    border-top-color: '.$this->main_color_2.';
                }
            }
            div.dgwt-wcas-search-wrapp .category select:focus, 
            div.dgwt-wcas-search-wrapp .category .chosen-container-active.chosen-with-drop .chosen-single, 
            div.dgwt-wcas-search-wrapp .category .chosen-container.chosen-with-drop .chosen-single
            {
                box-shadow: 2px 0 '.$this->main_color_2.';
            }
            body.rtl div.dgwt-wcas-search-wrapp .category select:focus, 
            body.rtl div.dgwt-wcas-search-wrapp .category .chosen-container-active.chosen-with-drop .chosen-single, 
            body.rtl div.dgwt-wcas-search-wrapp .category .chosen-container.chosen-with-drop .chosen-single
            {
                box-shadow: -2px 0 '.$this->main_color_2.';
            }
            .woocommerce-product-gallery .flex-control-nav img.flex-active,
            .woocommerce-product-gallery .flex-control-nav img:hover,
            .ovic-countdown.style-05 .armania-countdown > *::before,
            .ovic-products.style-33
            {
                box-shadow: 0 0 0 2px '.$this->main_color_2.' inset;
            }
            div.ovic-pinmap .ovic-pin .icon-theme,
            .blog-item.style-17 .cat-list,
            .blog-item.style-18 .cat-list
            {
                box-shadow: 0 0 0 1px '.$this->main_color_2.' inset;
            }
            .ovic-countdown.style-05 .armania-countdown .number::before
            {
                box-shadow: 2px 0 '.$this->main_color_2.' inset, -2px 0 '.$this->main_color_2.' inset, 0 2px '.$this->main_color_2.' inset, 0 -1px #f1f1f1 inset;
            }
            .ovic-countdown.style-05 .armania-countdown .number::after
            {
                box-shadow: 2px 0 '.$this->main_color_2.' inset, -2px 0 '.$this->main_color_2.' inset, 0 -2px '.$this->main_color_2.' inset, 0 1px #f1f1f1 inset;
            }
            .ovic-trending.style-01 .tabs .active .tab-link svg,
            .ovic-trending.style-01 .tabs .tab-link:hover svg,
            .ovic-contact.style-01 .icon svg,
            .ovic-contact.style-02 .icon svg,
            .ovic-slide.style-05 .slide-item .link:not(:hover) .icon svg,
            .ovic-iconbox.style-01 .icon svg,
            .ovic-iconbox.style-04 .icon svg
            {
                fill: '.$this->main_color_2.';
            }
            
            a.backtotop:hover,
            a.backtotop:focus,
            .elementor-button:focus, 
            .elementor-button:hover, 
            .elementor-button:visited,
            .elementor-button,
            .added_to_cart,
            .button,
            button,
            input[type="button"],
            input[type="submit"],
            .added_to_cart:hover,
            .added_to_cart:focus,
            .button:hover,
            .button:focus,
            button:hover,
            input[type="button"]:hover,
            input[type="submit"]:hover,
            div.ovic_bundle-wrap .ovic_bundle-product .ovic_bundle-sale,
            .text_main_color_2,
            div.dgwt-wcas-search-wrapp button.dgwt-wcas-search-submit,
            .header-control .inner-control > .block-userlink > a .icon,
            .header-control .inner-control > .block-minicart > a .count,
            .ovic-socials a:hover,
            .ovic-slide.style-03 .slide-item .link:hover,
            .ovic-title.style-01 .title,
            .entry-summary a.compare:hover,
            .entry-summary .yith-wcwl-add-to-wishlist > *:hover,
            .entry-summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .entry-summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.list a.compare:hover,
            .product-item.list a.yith-wcqv-button:hover,
            .product-item.list .yith-wcwl-add-to-wishlist > *:hover,
            .product-item.list .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .product-item.list .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.style-05 a.compare:hover,
            .product-item.style-05 a.yith-wcqv-button:hover,
            .product-item.style-05 .yith-wcwl-add-to-wishlist > *:hover,
            .product-item.style-05 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .product-item.style-05 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.style-12 a.yith-wcqv-button:hover,
            .product-item.style-12 .yith-wcwl-add-to-wishlist > *:hover,
            .product-item.style-12 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .product-item.style-12 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.style-12 .add-to-cart a,
            .product-item.style-13 a.yith-wcqv-button:hover,
            .product-item.style-13 .yith-wcwl-add-to-wishlist > *:hover,
            .product-item.style-13 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .product-item.style-13 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.style-14 a.yith-wcqv-button:hover,
            .product-item.style-14 .yith-wcwl-add-to-wishlist > *:hover,
            .product-item.style-14 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .product-item.style-14 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.style-14 .add-to-cart a,
            .product-item.style-15 a.yith-wcqv-button:hover,
            .product-item.style-15 .yith-wcwl-add-to-wishlist > *:hover,
            .product-item.style-15 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .product-item.style-15 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.style-15 .add-to-cart a,
            .product-item.style-18 a.yith-wcqv-button:hover,
            .product-item.style-18 .yith-wcwl-add-to-wishlist > *:hover,
            .product-item.style-18 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .product-item.style-18 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.style-19 a.yith-wcqv-button:hover,
            .product-item.style-19 .yith-wcwl-add-to-wishlist > *:hover,
            .product-item.style-19 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .product-item.style-19 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.style-19 .add-to-cart a,
            .product-item.style-20 a.yith-wcqv-button:hover,
            .product-item.style-20 .yith-wcwl-add-to-wishlist > *:hover,
            .product-item.style-20 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .product-item.style-20 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.style-20 .add-to-cart a,
            .product-item.style-21 a.yith-wcqv-button:hover,
            .product-item.style-21 .yith-wcwl-add-to-wishlist > *:hover,
            .product-item.style-21 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .product-item.style-21 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.style-21 .add-to-cart a,
            .product-item.style-22 a.yith-wcqv-button:hover,
            .product-item.style-22 .yith-wcwl-add-to-wishlist > *:hover,
            .product-item.style-22 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .product-item.style-22 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.style-22 .add-to-cart a,
            .product-item.style-24 a.yith-wcqv-button:hover,
            .product-item.style-24 .yith-wcwl-add-to-wishlist > *:hover,
            .product-item.style-24 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .product-item.style-24 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.style-25 a.yith-wcqv-button:hover,
            .product-item.style-25 .yith-wcwl-add-to-wishlist > *:hover,
            .product-item.style-25 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .product-item.style-25 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.style-25 .add-to-cart a,
            .product-item.style-26 a.yith-wcqv-button:hover,
            .product-item.style-26 .yith-wcwl-add-to-wishlist > *:hover,
            .product-item.style-26 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .product-item.style-26 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.style-26 .add-to-cart a,
            .product-item.style-27 a.yith-wcqv-button:hover,
            .product-item.style-27 .yith-wcwl-add-to-wishlist > *:hover,
            .product-item.style-27 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .product-item.style-27 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.style-27 .add-to-cart a,
            .product-item.style-29 a.yith-wcqv-button:hover,
            .product-item.style-29 .yith-wcwl-add-to-wishlist > *:hover,
            .product-item.style-29 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .product-item.style-29 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.style-29 .add-to-cart a,
            .product-item.style-31 a.yith-wcqv-button:hover,
            .product-item.style-31 .yith-wcwl-add-to-wishlist > *:hover,
            .product-item.style-31 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .product-item.style-31 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.style-31 .add-to-cart a,
            .product-item.style-32 a.yith-wcqv-button:hover,
            .product-item.style-32 .yith-wcwl-add-to-wishlist > *:hover,
            .product-item.style-32 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse,
            .product-item.style-32 .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse,
            .product-item.style-32 .add-to-cart a,
            .post-item.style-01 .cat-list,
            .single-post > .cat-list,
            .woocommerce-pagination ul li a:hover,
            .woocommerce-pagination ul li .current,
            .tagcloud a:hover,
            .pagination-thumb .link:hover .icon,
            .ovic-tab.style-02 .tab-title,
            .ovic-countdown .price-countdown,
            .ovic-banner.style-31 .text-01,
            .ovic-slide.style-05 .slide-item .link:hover,
            .contact-icon .elementor-icon,
            .ovic-tab.style-04 .tab-item.active .tab-link,
            .ovic-tab.style-04 .tab-item .tab-link:hover,
            .ovic-category.style-02 .content,
            .ovic-tab.style-05 .tab-item.active .tab-link,
            .ovic-tab.style-05 .tab-item .tab-link:hover,
            .blog-item.style-06 .post-date,
            .product-item.style-16 .armania-countdown-wrapper,
            .ovic-category.style-03 .link:hover,
            .blog-item.style-07 .post-date,
            .ovic-tab.style-09 .tab-item.active .tab-link,
            .ovic-tab.style-09 .tab-item .tab-link:hover,
            .blog-item.style-10 .cat-list,
            .ovic-countdown.style-04 .subtitle,
            .ovic-newsletter.style-11 .icon,
            .ovic-newsletter.style-11 .head,
            .ovic-newsletter.style-12 .icon,
            .ovic-newsletter.style-12 .head,
            .ovic-tab.style-11 .tab-item.active .tab-link,
            .ovic-tab.style-11 .tab-item .tab-link:hover,
            .ovic-tab.style-12 .tab-item.active .tab-link,
            .ovic-tab.style-12 .tab-item .tab-link:hover,
            .ovic-deal.style-05 .armania-countdown-wrapper,
            .ovic-social-network.style-02 .title,
            .modal-demo-menu .demo.new a::after,
            .menu-item.demo .megamenu .new .elementor-image a::after,
            .ovic-newsletter.style-17 .submit-newsletter,
            .ovic-social-network.style-04 .widget .widget-title,
            
            .header.style-02 .logo .logo-text,
            .skin-carparts .product-labels > .onsale,
            .skin-furniture .product-labels > .onsale,
            .skin-furniture-02 .product-labels > .onsale,
            .skin-medical .product-labels > .onnew,
            .skin-organic .product-labels > .onsale,
            .skin-organic-03 .product-labels > .onsale,
            .skin-tools .product-labels > .onsale,
            .skin-plant .product-labels > .onsale,
            .skin-kids .product-labels > .onsale,
            .skin-sports .product-labels > .onsale
            {
                color: '.$this->text_main_color_2.';
                fill: '.$this->text_main_color_2.';
            }
            .ovic-tab.style-02 .ovic-products .slick-slider .slick-arrow:hover,
            .button-carparts,
            .ovic-testmonials.style-04 .slick-slider .slick-arrow:hover,
            .ovic-tab.style-13 .tab-link,
            .ovic-tab.style-03 .tab-item.active a,
            .ovic-slide.style-05 .slide-item .link:hover .icon svg,
            .contact-icon .elementor-icon svg
            {
                color: '.$this->text_main_color_2.' !important;
                fill: '.$this->text_main_color_2.' !important;
            }
            .blog-item.style-15 .post-readmore .button::before,
            .blog-item.style-15 .post-readmore .button::after
            {
                background-color: '.$this->text_main_color_2.';
            }
            .main-color-3,
            .main-color-3.elementor-widget-heading h1,
            .main-color-3.elementor-widget-heading h2,
            .main-color-3.elementor-widget-heading h3,
            .main-color-3.elementor-widget-heading h4,
            .main-color-3.elementor-widget-heading h5,
            .main-color-3.elementor-widget-heading h6,
            .ovic-banner.style-09 .text-02 strong,
            .blog-item.style-06 .post-title,
            .ovic-newsletter.style-06 .title,
            .blog-item.style-11 .post-readmore .button:hover,
            .ovic-tab.style-15 .tab-title,
            
            .header.style-05 .logo .logo-text,
            .header.style-14 .logo .logo-text,
            .skin-market .widget .product_list_widget > li > a:not(.remove):not(:hover),
            .skin-market .product-item .product-title > a:not(:hover),
            .skin-market .entry-summary .product_title,
            .skin-market .entry-summary .grouped_form .woocommerce-grouped-product-list-item__label a:not(:hover),
            .skin-market .woocommerce table.wishlist_table td.product-name a:not(.button):not(:hover),
            .skin-market .woocommerce-cart-form > .shop_table td.product-name a:not(.button):not(:hover),
            .skin-market .woocommerce-cart-form .dataTables_wrapper > .shop_table td.product-name a:not(.button):not(:hover),
            .skin-market .woocommerce ul.wishlist_table.mobile li .item-details h3,
            .skin-pets .post-title,
            .skin-organic .ovic-iconbox.style-01 .icon,
            .skin-organic .ovic-custommenu > .button-wrap .link:not(:hover)
            {
                color: '.$this->main_color_3.';
                fill: '.$this->main_color_3.';
            }
            .main-bg-3,
            .ovic-tab.style-02 .tabs-head,
            .ovic-tab.style-03 .tabs-head,
            .ovic-contact.style-02,
            .ovic-banner.style-33,
            .ovic-banner.style-30 .hover,
            .ovic-banner.style-31 .hover,
            .ovic-banner.style-32 .hover,
            .product-item.style-14 .thumb-link::after,
            .product-item.style-20 .thumb-link::after,
            .product-item.style-20 .product-inner::before,
            .ovic-countdown.style-04 .button,
            .ovic-newsletter.style-11 .submit-newsletter,
            .product-item.style-29 a.yith-wcqv-button,
            .product-item.style-29 .yith-wcwl-add-to-wishlist > *,
            .ovic-social-network.style-03 a::after,
            .ovic-socials.style-04 a .icon,
            
            .skin-carparts .slick-dots li.slick-active,
            .skin-carparts .slick-dots li:hover,
            .skin-pets .slick-dots li.slick-active,
            .skin-pets .slick-dots li:hover,
            .skin-fashion .product-labels > .onnew,
            .skin-cosmetic .product-labels > .onnew,
            .skin-organic .product-labels > .onnew,
            .skin-organic-03 .product-labels > .onnew,
            .skin-kids .product-labels > .onnew,
            .skin-sports .product-labels > .onnew
            {
                background-color: '.$this->main_color_3.';
            }
            .main-border-3,
            .blog-item.style-11 .post-readmore .button
            {
                border-color: '.$this->main_color_3.';
            }
            .main-special-font,
            .logo .logo-text,
            .menu-item.demo .megamenu .demo-title .elementor-heading-title,
            .ovic-tab.style-02 .tabs-head,
            .ovic-tab.style-03 .tab-item,
            .ovic-newsletter.style-04 .title,
            .ovic-countdown.style-01 .armania-countdown,
            .ovic-countdown .price-countdown,
            .ovic-countdown.style-01 .subtitle,
            .ovic-countdown.style-01 .title,
            .ovic-contact.style-02 .title,
            .ovic-contact.style-02 .subtitle,
            .ovic-contact.style-02 .phone,
            .ovic-custommenu.style-03 .widget .widget-title,
            .ovic-banner.style-33 .text-01,
            .ovic-banner.style-30 .text-01,
            .ovic-banner.style-30 .text-02,
            .ovic-banner.style-31 .text-01,
            .ovic-banner.style-31 .text-02,
            .ovic-banner.style-32 .text-01,
            .ovic-banner.style-32 .text-02,
            .ovic-banner.style-32 .text-03,
            .ovic-slide.style-05 .slide-item .link,
            .blog-item.style-04 .post-title,
            .blog-item.style-03 .post-title,
            .ovic-banner.style-34 .text-02,
            .ovic-banner.style-35 .text-01,
            .ovic-banner.style-36 .text-01,
            .ovic-banner.style-37 .text-01,
            .ovic-banner.style-38 .text-01,
            .ovic-banner.style-39 .text-01,
            .ovic-tab.style-04 .tabs,
            .ovic-countdown.style-02 .title,
            .blog-item.style-05 .post-title,
            .header-contact > .sub-menu > .title,
            .blog-item.style-06 .post-title,
            .ovic-newsletter.style-06 .title,
            .ovic-banner.style-41 .text-01,
            .ovic-banner.style-41 .text-02,
            .ovic-banner.style-42 .text-01,
            .ovic-banner.style-42 .text-02,
            .product-item.style-16 .armania-countdown-wrapper,
            .ovic-tab.style-06 .tab-title,
            .ovic-testmonials.style-03 .desc,
            .ovic-testmonials.style-03 .name,
            .blog-item.style-07 .day,
            .blog-item.style-07 .post-title,
            .ovic-newsletter.style-07 .title,
            .ovic-category.style-04 .link,
            .ovic-countdown.style-03 .title,
            .ovic-countdown.style-03 .desc,
            .blog-item.style-08 .post-title,
            .ovic-banner.style-44,
            .ovic-newsletter.style-09 .title,
            .ovic-newsletter.style-09 .desc,
            .blog-item.style-09 .post-title,
            .ovic-banner.style-45 .text-02,
            .ovic-banner.style-45 .button,
            .ovic-slide.style-06 .slide-item .title,
            .blog-item.style-10 .post-title,
            .ovic-newsletter.style-10 .title,
            .ovic-testmonials.style-04 .desc,
            .ovic-testmonials.style-04 .name,
            .ovic-category.style-05 .title,
            .ovic-countdown.style-04 .title,
            .ovic-banner.style-46 .text-01,
            .ovic-banner.style-46 .text-02,
            .ovic-banner.style-46 .text-03,
            .ovic-banner.style-47 .text-01,
            .ovic-banner.style-47 .text-02,
            .ovic-banner.style-48 .text-01,
            .ovic-banner.style-48 .text-02,
            .ovic-banner.style-48 .text-03,
            .ovic-title.style-03 .title,
            .product-item.style-23 .armania-countdown .number,
            .ovic-category.style-06 .link,
            .ovic-brand.style-03 .brand-item .name,
            .ovic-tab.style-11 .tabs,
            .ovic-tab.style-12 .tabs,
            .blog-item.style-12 .post-title,
            .blog-item.style-14 .post-title,
            .ovic-iconbox.style-04 .title,
            .ovic-deal.style-05 .head .title,
            .ovic-title.style-04 .title,
            .ovic-newsletter.style-13 .title,
            .ovic-custommenu.style-05 .widget .widget-title,
            .ovic-banner.style-43 .text-01,
            .ovic-tab.style-07 .tabs-head,
            .ovic-deal.style-04 .head .title,
            .ovic-deal.style-04 .head .desc,
            .ovic-category.style-07 .inner > .title,
            .ovic-banner.style-50 .text-01,
            .ovic-banner.style-50 .price-content,
            .ovic-banner.style-50 .text-03,
            .ovic-banner.style-52 .text-02,
            .ovic-banner.style-53 .text-01,
            .ovic-tab.style-15 .tab-title,
            .ovic-category.style-10 .title,
            .ovic-category.style-13,
            .ovic-countdown.style-08 .armania-countdown,
            .ovic-tab.style-17 .tabs,
            .ovic-tab.style-18 .tabs,
            .ovic-blog.style-17 .post-title,
            .ovic-blog.style-18 .post-title,
            .product-item.style-33 .product-labels > *,
            .product-item.style-33 .product-info > .text,
            .product-item.style-33 .product-title,
            .product-item.style-33 .armania-countdown,
            .ovic-tab.style-19 .tabs-head,
            .ovic-tab.style-20 .tabs-head,
            .blog-item.style-19 .post-meta,
            .blog-item.style-19 .post-title,
            .ovic-newsletter.style-20 .desc,
            
            .skin-carparts .ovic-menu-clone-wrap .ovic-custommenu.style-01 .widget .widget-title,
            .skin-carparts .header-sticky .ovic-custommenu.style-01 .widget .widget-title,
            .skin-carparts .header .ovic-custommenu.style-01 .widget .widget-title,
            .skin-carparts .widget_shopping_cart .total,
            .skin-carparts .product-labels > *,
            .skin-facemask .post-title,
            .skin-fashion .post-title,
            .skin-fashion .ovic-menu-clone-wrap .ovic-custommenu.style-01 .widget .widget-title,
            .skin-fashion .header-sticky .ovic-custommenu.style-01 .widget .widget-title,
            .skin-fashion .header .ovic-custommenu.style-01 .widget .widget-title,
            .skin-furniture .post-title,
            .skin-cosmetic .post-title,
            .skin-cosmetic .elementor-button, 
            .skin-cosmetic .added_to_cart, 
            .skin-cosmetic .button,
            .skin-cosmetic button,
            .skin-cosmetic input[type="button"], 
            .skin-cosmetic input[type="submit"],
            .skin-cosmetic .ovic-menu-clone-wrap .ovic-custommenu.style-01 .widget .widget-title,
            .skin-cosmetic .header-sticky .ovic-custommenu.style-01 .widget .widget-title,
            .skin-cosmetic .header .ovic-custommenu.style-01 .widget .widget-title,
            .skin-medical .post-title,
            .skin-medical .ovic-menu-clone-wrap .ovic-custommenu.style-01 .widget .widget-title,
            .skin-medical .header-sticky .ovic-custommenu.style-01 .widget .widget-title,
            .skin-medical .header .ovic-custommenu.style-01 .widget .widget-title,
            .skin-medicine .post-title,
            .skin-medicine .ovic-menu-clone-wrap .ovic-custommenu.style-01 .widget .widget-title,
            .skin-medicine .header-sticky .ovic-custommenu.style-01 .widget .widget-title,
            .skin-medicine .header .ovic-custommenu.style-01 .widget .widget-title,
            .skin-pets .post-title,
            .skin-barber .post-title,
            .skin-kids .ovic-menu-clone-wrap .ovic-custommenu.style-01 .widget .widget-title,
            .skin-kids .header-sticky .ovic-custommenu.style-01 .widget .widget-title,
            .skin-kids .header .ovic-custommenu.style-01 .widget .widget-title,
            .skin-sports .ovic-menu-clone-wrap .ovic-custommenu.style-01 .widget .widget-title,
            .skin-sports .header-sticky .ovic-custommenu.style-01 .widget .widget-title,
            .skin-sports .header .ovic-custommenu.style-01 .widget .widget-title
            {
                font-family: '.$this->special.';
            }
            ';
            if ($this->special == 'Spartan') {
                $this->css .= '
                .ovic-countdown.style-08 .armania-countdown .number{
                    padding-top: 22px;
                    padding-bottom: 18px;
                }
                .ovic-tab.style-18 .tab-link .title{
                    margin-top: 1px;
                    margin-bottom: -1px;
                }
                .header.style-12_3 .header-bot .header-submenu > li > a{
                    padding-top: 12px;
                    padding-bottom: 8px;
                }
                .header.style-12_3 .header-bot .header-submenu > li > a .icon{
                    margin-top: -2px;
                    margin-bottom: 2px;
                }
                .header.style-12_3 .logo .logo-text .text{
                    margin: 5px 0 -5px;
                }
                .header-mobile.style-12_3 .logo .logo-text .text,
                .header-mobile .logo .logo-text .text{
                    margin-top: 3px;
                    margin-bottom: -3px;
                }
                @media (max-width: 767px){
                    .ovic-countdown.style-08 .armania-countdown .number{
                        padding-top: 18px;
                        padding-bottom: 14px;
                    }
                }
                ';
            }
            if ($this->special == 'Comfortaa') {
                $this->css .= '
                .ovic-tab.style-04 .tab-link{
                    padding-top: 14px;
                    padding-bottom: 12px;
                }
                @media (max-width: 767px){
                    .ovic-tab.style-04 .tab-link{
                        padding-top: 12px;
                        padding-bottom: 10px;
                    }
                }
                ';
            }
            if ($this->special == 'Patrick Hand') {
                $this->css .= '
                .header.style-19 .logo .logo-text .text{
                    margin: -2px 0 2px;
                }
                ';
            }
            if ($this->special == 'Brushline') {
                $this->css .= '
                .header.style-12 .logo .logo-text .text{
                    margin-top: 9px;
                    margin-bottom: -9px;
                }
                ';
            }
            if ($this->special == 'Barlow') {
                $this->css .= '
                .header.style-20 .logo .logo-text .text{
                    margin-top: -1px;
                    margin-bottom: 1px;
                }
                ';
            }
        }

        public function patterns_desktop()
        {
            ob_start();
            armania_get_template(
                "templates-parts/patterns-desktop.php",
                array(
                    'special'           => $this->font_special(),
                    'main_color'        => $this->main_color,
                    'main_color_2'      => $this->main_color_2,
                    'main_color_3'      => $this->main_color_3,
                    'text_main_color_2' => $this->text_main_color_2,
                )
            );
            $this->css .= ob_get_clean();
        }

        public function patterns_mobile()
        {
            ob_start();
            armania_get_template(
                "templates-parts/patterns-mobile.php",
                array(
                    'special'           => $this->font_special(),
                    'main_color'        => $this->main_color,
                    'main_color_2'      => $this->main_color_2,
                    'main_color_3'      => $this->main_color_3,
                    'text_main_color_2' => $this->text_main_color_2,
                )
            );
            $this->css .= ob_get_clean();
        }
    }

    new Armania_Patterns();
}