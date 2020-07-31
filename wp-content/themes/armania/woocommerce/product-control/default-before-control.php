<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<?php echo woocommerce_maybe_show_product_subcategories(); ?>
<?php
if ( ! is_product() ) {
    get_template_part( 'templates-parts/shop', 'banner' );
}
?>
<div class="shop-control shop-before-control">
    <h1 class="woocommerce-products-header__title page-title">
        <span><?php woocommerce_page_title(); ?></span>
    </h1>
    <div class="control-right">
		<?php
		armania_shop_display_mode();
		woocommerce_catalog_ordering();
		?>
    </div>
</div>
