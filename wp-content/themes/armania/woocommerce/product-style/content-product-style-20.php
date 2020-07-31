<?php
/**
 *
 * Name: Product Style 20
 * Shortcode: true
 * Theme Option: true
 **/
?>
<?php
global $product;

$functions = array(
    array( 'remove_action', 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 ),
    array( 'remove_action', 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 ),
);
armania_add_action( $functions );
?>
    <div class="product-inner">
        <?php
        /**
         * Hook: woocommerce_before_shop_loop_item.
         *
         * @hooked woocommerce_template_loop_product_link_open - 10
         */
        do_action( 'woocommerce_before_shop_loop_item' );
        ?>
        <div class="product-thumb">
            <?php
            /**
             * Hook: woocommerce_before_shop_loop_item_title.
             *
             * @hooked woocommerce_show_product_loop_sale_flash - 10
             * @hooked woocommerce_template_loop_product_thumbnail - 10
             */
            do_action( 'woocommerce_before_shop_loop_item_title' );
            ?>
            <div class="group-button">
                <?php
                do_action( 'armania_function_shop_loop_item_wishlist' );
                do_action( 'armania_function_shop_loop_item_quickview' );
                /**
                 * Hook: woocommerce_after_shop_loop_item.
                 *
                 * @hooked woocommerce_template_loop_product_link_close - 5
                 * @hooked woocommerce_template_loop_add_to_cart - 10
                 */
                do_action( 'woocommerce_after_shop_loop_item' );
                ?>
            </div>
        </div>
        <div class="product-info equal-elem">
            <?php
            /**
             * Hook: woocommerce_shop_loop_item_title.
             *
             * @hooked woocommerce_template_loop_product_title - 10
             */
            do_action( 'woocommerce_shop_loop_item_title' );
            ?>
            <div class="box-wrap">
                <?php
                /**
                 * Hook: woocommerce_after_shop_loop_item_title.
                 *
                 * @hooked woocommerce_template_loop_rating - 5
                 * @hooked woocommerce_template_loop_price - 10
                 */
                do_action( 'woocommerce_after_shop_loop_item_title' );
                ?>
                <?php woocommerce_template_loop_rating(); ?>
            </div>
        </div>
    </div>
<?php
armania_add_action( $functions, true );