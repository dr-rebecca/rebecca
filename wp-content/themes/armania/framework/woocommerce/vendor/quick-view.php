<?php
/***
 * Core Name: QUICK VIEW
 * Version: 1.0.0
 * Author: Khanh
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
// Class frontend
$yith_enable    = get_option('yith-wcqv-enable');
$yith_on_mobile = get_option('yith-wcqv-enable-mobile');
$yith_class     = YITH_WCQV_Frontend::get_instance();
if ((!wp_is_mobile() && $yith_enable == 'yes') || (wp_is_mobile() && $yith_on_mobile == 'yes' && $yith_enable == 'yes')) {
    remove_action('woocommerce_after_shop_loop_item', array($yith_class, 'yith_add_quick_view_button'), 15);
    add_action('armania_function_shop_loop_item_quickview', array($yith_class, 'yith_add_quick_view_button'), 5);
}