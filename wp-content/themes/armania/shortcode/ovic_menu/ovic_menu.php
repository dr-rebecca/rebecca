<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/**
 * Shortcode attributes
 * @var $atts
 * Shortcode class
 * @var $this "Shortcode_Ovic_Menu"
 * @version 1.0.0
 */
class Shortcode_Ovic_Menu extends Ovic_Addon_Shortcode
{
	/**
	 * Shortcode name.
	 *
	 * @var  string
	 */
	public $shortcode = 'ovic_menu';
	public $default   = array(
		'style' => 'style-01',
		'light' => '',
	);

	public function content( $atts, $content = null )
	{
		$css_class = $this->main_class( $atts,
			array(
				'ovic-custommenu',
				'wpb_content_element',
				'vc_wp_custommenu',
				$atts['style'],
			)
		);
		if ( $atts['light'] == 'yes' ) {
			$css_class .= ' style-light';
		}
		global $wp_widget_factory;
		ob_start();
		?>
        <div class="<?php echo esc_attr( $css_class ); ?>">
			<?php
			$type = 'WP_Nav_Menu_Widget';
			$args = array(
				'before_title' => '<h2 class="widget-title">',
			);
			if ( is_object( $wp_widget_factory ) && isset( $wp_widget_factory->widgets, $wp_widget_factory->widgets[ $type ] ) ) {
				the_widget( $type, $atts, $args );
			}
            $atts['link']['url'] = apply_filters('ovic_shortcode_vc_link', $atts['link']['url']);
            $link = $this->add_link_attributes( $atts['link'], true );
			?>
            <?php if ( !empty( $atts['link']['url'] ) ) : ?>
                <div class="button-wrap">
                    <a <?php echo esc_attr( $link ); ?> class="link"><?php echo esc_html__('View All', 'armania');?></a>
                </div>
            <?php endif; ?>
        </div>
		<?php
		return ob_get_clean();
	}
}