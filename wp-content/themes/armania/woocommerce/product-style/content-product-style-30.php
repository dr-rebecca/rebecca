<?php
/**
 *
 * Name: Product Style 30
 * Shortcode: true
 * Theme Option: false
 **/
?>
<?php
global $product;

$functions = array(
    array('remove_action', 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10),
    array('remove_action', 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10),
    array('add_action', 'woocommerce_after_shop_loop_item', 'armania_function_shop_loop_item_countdown', 15),
    array('add_action', 'woocommerce_after_shop_loop_item_title', 'armania_template_loop_variable', 10),
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
            /**
             * Hook: woocommerce_after_shop_loop_item.
             *
             * @hooked woocommerce_template_loop_product_link_close - 5
             * @hooked woocommerce_template_loop_add_to_cart - 10
             */
            do_action('woocommerce_after_shop_loop_item');
            ?>
        </div>
    </div>
<?php
armania_add_action($functions, true);
