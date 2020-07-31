<?php
/**
 * Template Shop Banner
 *
 * @return string
 */
?>
<?php
$banner = armania_get_option( 'shop_banner' );
if ( ! empty( $banner ) ):
	?>
    <div class="shop-banner">
		<?php
		if ( class_exists( 'Elementor\Plugin' ) ) {
			echo Elementor\Plugin::$instance->frontend->get_builder_content_for_display( $banner );
		} else {
			$post_id = get_post( $banner );
			$content = $post_id->post_content;
			$content = apply_filters( 'the_content', $content );
			$content = str_replace( ']]>', ']]>', $content );
			echo wp_specialchars_decode( $content );
		}
		?>
    </div>
<?php endif; ?>
