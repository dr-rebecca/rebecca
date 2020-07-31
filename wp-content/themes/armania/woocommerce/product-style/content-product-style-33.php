<?php
/**
 *
 * Name: Product Style 33
 * Shortcode: true
 * Theme Option: true
 **/
?>
<?php
global $product;

$functions = array(
    array('remove_action', 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5),
    array('add_action', 'woocommerce_shop_loop_item_title', 'woocommerce_template_single_excerpt', 20),
    array('add_action', 'woocommerce_after_shop_loop_item_title', 'armania_function_shop_loop_item_countdown', 20),
);
armania_add_action($functions);
?>
    <div class="product-inner">
        <?php
        /**
         * Hook: woocommerce_before_shop_loop_item.
         *
         * @hooked woocommerce_template_loop_product_link_open - 10
         */
        do_action('woocommerce_before_shop_loop_item');
        ?>
        <div class="product-thumb images">
            <?php
            /**
             * Hook: woocommerce_before_shop_loop_item_title.
             *
             * @hooked woocommerce_show_product_loop_sale_flash - 10
             * @hooked woocommerce_template_loop_product_thumbnail - 10
             */
            do_action('woocommerce_before_shop_loop_item_title');
            ?>
        </div>
        <div class="product-info equal-elem">
            <?php
            echo '<p class="text">'.esc_html__('DEAL OF THE DAY', 'armania').'</p>';
            /**
             * Hook: woocommerce_shop_loop_item_title.
             *
             * @hooked woocommerce_template_loop_product_title - 10
             */
            do_action('woocommerce_shop_loop_item_title');
            /**
             * Hook: woocommerce_after_shop_loop_item_title.
             *
             * @hooked woocommerce_template_loop_rating - 5
             * @hooked woocommerce_template_loop_price - 10
             */
            do_action('woocommerce_after_shop_loop_item_title');
            ?>
        </div>
    </div>
<?php
armania_add_action($functions, true);
