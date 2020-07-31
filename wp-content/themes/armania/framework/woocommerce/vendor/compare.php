<?php
/***
 * Core Name: COMPARE
 * Version: 1.0.0
 * Author: Khanh
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
if (get_option('yith_woocompare_compare_button_in_products_list') == 'yes') {
    global $yith_woocompare;

    $is_ajax = (defined('DOING_AJAX') && DOING_AJAX);

    if ($yith_woocompare->is_frontend() || $is_ajax) {
        if ($is_ajax) {
            if (!class_exists('YITH_Woocompare_Frontend') && file_exists(YITH_WOOCOMPARE_DIR.'includes/class.yith-woocompare-frontend.php')) {
                require_once YITH_WOOCOMPARE_DIR.'includes/class.yith-woocompare-frontend.php';
            }
            $yith_woocompare->obj = new YITH_Woocompare_Frontend();
        }
        /* Remove button */
        remove_action('woocommerce_single_product_summary', array($yith_woocompare->obj, 'add_compare_link'), 35);
        remove_action('woocommerce_after_shop_loop_item', array($yith_woocompare->obj, 'add_compare_link'), 20);
        /* Add compare button */
        if (!function_exists('armania_wc_loop_product_compare_btn')) {
            function armania_wc_loop_product_compare_btn()
            {
                global $product;
                if (shortcode_exists('yith_compare_button')) {
                    echo do_shortcode('[yith_compare_button product_id="'.$product->get_id().'"]');
                } else {
                    if (class_exists('YITH_Woocompare_Frontend')) {
                        echo do_shortcode('[yith_compare_button product_id="'.$product->get_id().'"]');
                    }
                }
            }
        }
        add_action('armania_function_shop_loop_item_compare', 'armania_wc_loop_product_compare_btn', 1);
        add_action('woocommerce_after_add_to_cart_button', array($yith_woocompare->obj, 'add_compare_link'), 10);
    }
}