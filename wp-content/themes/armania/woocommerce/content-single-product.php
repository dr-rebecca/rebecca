<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
    echo get_the_password_form(); // WPCS: XSS ok.

    return;
}

$hook = array(
    array('remove_action', 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10),
    array('remove_action', 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10),
    array('add_action', 'woocommerce_before_add_to_cart_form', 'woocommerce_template_single_price', 10),
    array('add_action', 'woocommerce_product_thumbnails', 'armania_more_product_thumbnails', 30),
);
if (armania_get_option('enable_share_product') == 1) {
    $hook[] = array('add_action', 'woocommerce_single_product_summary', 'armania_share_social', 10);
}
if (armania_get_option('enable_countdown_product') == 1) {
    $hook[] = array(
        'add_action', 'woocommerce_single_product_summary', 'armania_function_shop_loop_item_countdown', 25
    );
}
if (armania_get_option('product_summary', 'attributes') == 'attributes') {
    $hook[] = array(
        'remove_action', 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20
    );
    $hook[] = array(
        'add_action', 'woocommerce_single_product_summary', 'armania_get_custom_attributes', 20
    );
}
if (armania_is_mobile()) {
    $hook[] = array(
        'add_action', 'woocommerce_after_add_to_cart_button', 'armania_button_buy_now', 10
    );
}
armania_add_action($hook);

$sidebar_name   = armania_get_option('product_used_sidebar', 'product-widget-area');
$thumbnail      = armania_get_option('single_product_thumbnail', 'standard');
$sidebar        = armania_get_option('sidebar_product_layout', 'left');
$attachment_ids = $product->get_gallery_image_ids();
$class_summary  = array('summary entry-summary');
$class_wrapper  = array('single-product-wrapper');
$data_slide     = '';

if (!empty($attachment_ids) && has_post_thumbnail()) {
    $class_wrapper[] = 'has-gallery';
}
if (!armania_is_mobile() && !empty($attachment_ids) && $thumbnail == 'sticky') {
    wp_enqueue_script('armania-sticky');
    $class_summary[] = 'sticky-content';
    $class_wrapper[] = 'wrapper-main-content';
}
/* DATA CAROUSEL */
if (!is_active_sidebar($sidebar_name)) {
    $sidebar = 'full';
}
$data_slide = array(
    'infinite'     => false,
    'slidesMargin' => 10,
    'slidesToShow' => 4,
);
if ($sidebar == 'full') {
    $data_slide = array_merge($data_slide,
        array(
            'vertical'        => true,
            'verticalSwiping' => true,
        )
    );
}
$data_slide['responsive'] = array(
    array(
        'breakpoint' => 1200,
        'settings'   => array(
            'vertical'        => false,
            'verticalSwiping' => false,
        ),
    ),
    array(
        'breakpoint' => 320,
        'settings'   => array(
            'slidesToShow'    => 3,
            'vertical'        => false,
            'verticalSwiping' => false,
        ),
    ),
);
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>

    <div class="<?php echo esc_attr(implode(' ', $class_wrapper)); ?>"
         data-slick="<?php echo esc_attr(json_encode($data_slide)); ?>">
        <?php
        /**
         * Hook: woocommerce_before_single_product_summary.
         *
         * @hooked woocommerce_show_product_sale_flash - 10
         * @hooked woocommerce_show_product_images - 20
         */
        do_action('woocommerce_before_single_product_summary');
        ?>

        <div class="<?php echo esc_attr(implode(' ', $class_summary)); ?>">

            <?php if (wc_product_sku_enabled() && ($product->get_sku() || $product->is_type('variable'))) : ?>

                <span class="sku_wrapper">
                    <span class="title"><?php esc_html_e('SKU:', 'armania'); ?></span>
                    <span class="sku">
                        <?php
                        if ($sku = $product->get_sku()) {
                            echo esc_html($sku);
                        } else {
                            echo esc_html__('N/A', 'armania');
                        }
                        ?>
                    </span>
                </span>

            <?php endif; ?>
            <?php
            /**
             * Hook: woocommerce_single_product_summary.
             *
             * @hooked woocommerce_template_single_title - 5
             * @hooked woocommerce_template_single_rating - 10
             * @hooked woocommerce_template_single_price - 10
             * @hooked woocommerce_template_single_excerpt - 20
             * @hooked woocommerce_template_single_add_to_cart - 30
             * @hooked woocommerce_template_single_meta - 40
             * @hooked woocommerce_template_single_sharing - 50
             * @hooked WC_Structured_Data::generate_product_data() - 60
             */
            do_action('woocommerce_single_product_summary');
            ?>
        </div>
    </div>

    <?php
    /**
     * Hook: woocommerce_after_single_product_summary.
     *
     * @hooked woocommerce_output_product_data_tabs - 10
     * @hooked woocommerce_upsell_display - 15
     * @hooked woocommerce_output_related_products - 20
     */
    do_action('woocommerce_after_single_product_summary');
    ?>
</div>

<?php do_action('woocommerce_after_single_product'); ?>

<?php armania_add_action($hook, true); ?>
