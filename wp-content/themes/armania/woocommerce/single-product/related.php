<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
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
 * @version     3.9.0
 * @var $related_products
 */

if (!defined('ABSPATH')) {
    exit;
}

$data          = armania_generate_carousel_products('woo_related');
$style_product = armania_get_option('woo_related_style', 'style-01');

if ($related_products && !empty($data)) : ?>

    <section class="related products ovic-products <?php echo esc_attr($style_product); ?>">

        <?php
        $heading = !empty($data['title']) ? $data['title'] : esc_html__('Related Products', 'armania');
        $heading = apply_filters('woocommerce_product_related_products_heading', $heading);
        ?>
        <div class="ovic-title style-01">
            <div class="inner">
                <h2 class="title">
                    <?php echo esc_html($heading); ?>
                </h2>
            </div>
        </div>

        <ul class="owl-slick products product-list-owl equal-container better-height" <?php echo esc_attr($data['carousel']); ?>>

            <?php armania_woocommerce_setup_loop(array(
                'style'      => $data['style'],
                'list_style' => 'grid',
            )); ?>

            <?php foreach ($related_products as $related_product) : ?>

                <?php
                $post_object = get_post($related_product->get_id());

                setup_postdata($GLOBALS['post'] =& $post_object);

                wc_get_template_part('content', 'product');
                ?>

            <?php endforeach; ?>

            <?php
            wp_reset_postdata();
            wc_reset_loop();
            ?>

        </ul>

    </section>

<?php endif;
