<?php
/***
 * Core Name: WISHLIST
 * Version: 1.0.0
 * Author: Khanh
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
/* Custom icon */
add_filter('yith_wcwl_button_icon', function ($icon_option) {
    if ($icon_option == '') {
        $icon_option = 'main-icon-heart ovic-wl-icon';
    }

    return $icon_option;
});
add_filter('yith_wcwl_button_added_icon', function ($added_icon_option) {
    if ($added_icon_option == '') {
        $added_icon_option = 'main-icon-heart ovic-wl-icon added';
    }

    return $added_icon_option;
});
if (!function_exists('armania_function_shop_loop_item_wishlist')) {
    function armania_function_shop_loop_item_wishlist()
    {
        echo do_shortcode("[yith_wcwl_add_to_wishlist]");
    }

    add_action('armania_function_shop_loop_item_wishlist', 'armania_function_shop_loop_item_wishlist', 10);
}
if (!function_exists('armania_wishlist_positions')) {
    function armania_wishlist_positions($positions)
    {
        $positions['add-to-cart']['hook']     = 'woocommerce_after_add_to_cart_button';
        $positions['add-to-cart']['priority'] = '20';

        return $positions;
    }

    add_filter('yith_wcwl_positions', 'armania_wishlist_positions');
}
/**
 *
 * HEADER WISHLIST
 */
if (!function_exists('armania_header_wishlist')) {
    function armania_header_wishlist()
    {
        if (class_exists('YITH_WCWL')) : ?>
            <?php
            $wishlist_url = YITH_WCWL()->get_wishlist_url();
            $count        = YITH_WCWL()->count_products();
            if (!empty($wishlist_url)) : ?>
                <div class="block-wishlist block-woo">
                    <a class="woo-wishlist-link icon-link"
                       href="<?php echo esc_url($wishlist_url); ?>">
                        <span class="icon">
                            <span class="main-icon-heart"></span>
                            <span class="count"><?php echo esc_html($count); ?></span>
                        </span>
                        <span class="content">
                            <span class="text"><?php echo esc_html__('Wish List', 'armania') ?></span>
                            <span class="count-text"><?php echo esc_html($count).esc_html__(' Item(s)', 'armania'); ?></span>
                        </span>
                    </a>
                </div>
            <?php endif;
        endif;
    }
}