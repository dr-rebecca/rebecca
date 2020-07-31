<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/**
 * Shortcode attributes
 * @var $atts
 * Shortcode class
 * @var $this "Shortcode_Ovic_Trending"
 * @version 1.0.0
 */
class Shortcode_Ovic_Trending extends Ovic_Addon_Shortcode
{
	/**
	 * Shortcode name.
	 *
	 * @var  string
	 */
	public $shortcode = 'ovic_trending';
	public $default   = array(
		'style' => 'style-01',
	);

	public function content( $atts, $content = null )
	{
		$count        = 1;
		$sections     = array();
		$css_class    = $this->main_class( $atts,
			array(
				'ovic-tabs ovic-trending',
				$atts['style']
			)
		);
		$is_ajax      = $atts['is_ajax'] == 'yes' ? 1 : 0;
		$owl_carousel = $this->generate_carousel( $atts, 'owl_' );
		$cat_carousel = $this->generate_carousel( $atts, 'slides_', false );

		ob_start();
		?>
        <div class="<?php echo esc_attr( $css_class ); ?>">
			<?php
			if ( ! empty( $atts['title'] ) ) {
				echo ovic_do_shortcode( 'ovic_title', array(
					'title' => $atts['title']
				) );
			}
			?>
			<?php if ( ! empty( $atts['tabs'] ) ): ?>
                <div class="tabs-head">
                    <ul class="tabs owl-slick" <?php echo esc_attr( $owl_carousel ); ?>>
						<?php foreach ( $atts['tabs'] as $key => $tab ) : ?>
							<?php
							$class_items = array( 'tab-item' );
							$class_link  = array( 'tab-link' );
							if ( $count == $atts['active'] ) {
								$class_items[] = 'active';
								$class_link[]  = 'loaded';
							}
							$tab['slides_rows_space'] = ! empty( $atts['slides_rows_space'] ) ? $atts['slides_rows_space'] : '';
							$tab['carousel']          = $cat_carousel;
							$shortcode                = array(
								'ovic_category' => $tab
							);
							$sections[ $tab['_id'] ]  = $shortcode;
							$count ++;
							if ( $is_ajax == 0 ) {
								$shortcode = array();
							}
							?>
                            <li class="<?php echo esc_attr( implode( ' ', $class_items ) ); ?>">
                                <a class="<?php echo esc_attr( implode( ' ', $class_link ) ); ?>"
                                   data-ajax="<?php echo esc_attr( $is_ajax ) ?>"
                                   data-animate="fadeIn"
                                   data-section="<?php echo esc_attr( json_encode( $shortcode ) ); ?>"
                                   href="#tab-<?php echo esc_attr( $tab['_id'] ); ?>">
									<span class="thumb">
                                        <?php
                                        \Elementor\Icons_Manager::render_icon( $tab['selected_icon'], [ 'aria-hidden' => 'true' ] );
                                        ?>
                                    </span>
									<?php if ( ! empty( $tab['title'] ) ): ?>
                                        <span class="title"><?php echo esc_html( $tab['title'] ); ?></span>
									<?php endif; ?>
                                </a>
                            </li>
						<?php endforeach; ?>
                    </ul>
                </div>
                <div class="tabs-container">
					<?php if ( ! empty( $sections ) ): ?>
						<?php
						$count = 1;
						foreach ( $sections as $id => $section ) : ?>
							<?php
							$active = array( 'tab-panel' );
							if ( $count == $atts['active'] ) {
								$active[] = 'active';
							}
							?>
                            <div class="<?php echo esc_attr( implode( ' ', $active ) ); ?>"
                                 id="tab-<?php echo esc_attr( $id ); ?>">
								<?php if ( $is_ajax == 1 ) :
									if ( $count == $atts['active'] ) :
										foreach ( $section as $tag => $shortcode ) {
											echo ovic_do_shortcode( $tag, $shortcode );
										}
									endif;
								else :
									foreach ( $section as $tag => $shortcode ) {
										echo ovic_do_shortcode( $tag, $shortcode );
									}
								endif;
								$count ++;
								?>
                            </div>
						<?php endforeach; ?>
					<?php endif; ?>
                </div>
			<?php endif; ?>
        </div>
		<?php

		return ob_get_clean();
	}
}