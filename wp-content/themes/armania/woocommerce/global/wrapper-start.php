<?php
/**
 * Content wrappers
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/wrapper-start.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @author        WooThemes
 * @package    WooCommerce/Templates
 * @version     3.3.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

$thumbnail     = armania_get_option('single_product_thumbnail', 'standard');
$display_mode  = armania_get_option('shop_list_style', 'grid');
$page_layout   = armania_page_layout();
$class_contain = array(
    "container",
    "site-content",
    "sidebar-{$page_layout['layout']}",
);
if (is_product()) {
    $class_contain[] = "product-page";
    $class_contain[] = "product-page-{$thumbnail}";
} else {
    $class_contain[] = "shop-page";
    $class_contain[] = "shop-page-{$display_mode}";
}
?>
<!-- .site-content-contain -->

<div id="content" class="<?php echo esc_attr(implode(' ', $class_contain)); ?>">

    <?php armania_breadcrumb(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
