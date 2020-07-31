<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Armania
 * @since 1.0
 * @version 1.0
 */

$page_layout = armania_page_layout();
?>
<?php if ( $page_layout['layout'] != 'full' ) : ?>
    <aside id="secondary" class="widget-area <?php echo esc_attr( $page_layout['sidebar'] ); ?>" role="complementary"
           aria-label="<?php esc_attr_e( 'Shop Sidebar', 'armania' ); ?>">
		<?php dynamic_sidebar( $page_layout['sidebar'] ); ?>
    </aside><!-- #secondary -->
<?php endif; ?>
</div><!-- .site-content-contain -->
