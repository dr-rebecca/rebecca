<?php
/**
 * Template shortcode
 *
 * @return string
 * @var $atts
 *
 */
?>
<div class="head">
	<?php if ( ! empty( $atts['title'] ) ): ?>
        <h3 class="title"><?php echo esc_html( $atts['title'] ); ?></h3>
	<?php endif; ?>
	<?php if ( ! empty( $atts['desc'] ) ): ?>
        <p class="desc"><span class="main-icon-stopwatch icon"></span><?php echo wp_specialchars_decode( $atts['desc'] ); ?></p>
	<?php endif; ?>
	<?php if ( ! empty( $atts['date'] ) ):
		$params = array(
			'days_text' => esc_html__( 'Days', 'armania' ),
			'hrs_text'  => esc_html__( 'Hrs', 'armania' ),
			'mins_text' => esc_html__( 'Mins', 'armania' ),
			'secs_text' => esc_html__( 'Secs', 'armania' ),
		);
		wp_enqueue_script( 'armania-countdown' );
		?>
        <div class="armania-countdown"
             data-datetime="<?php echo esc_attr( $atts['date'] ); ?>"
             data-params="<?php echo esc_attr( wp_json_encode( $params ) ) ?>">
        </div>
	<?php endif; ?>
</div>
<?php
unset( $atts['title'] );
unset( $atts['desc'] );
unset( $atts['image'] );
$args = array(
	'list_style' => 'owl'
);
$args = array_merge( $args, $atts );
echo ovic_do_shortcode( 'ovic_products', $args );
?>
