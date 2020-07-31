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
    <?php if ( ! empty( $atts['date'] ) ):
        $params = array(
            'days_text' => esc_html__( 'DAY', 'armania' ),
            'hrs_text'  => esc_html__( 'HOURS', 'armania' ),
            'mins_text' => esc_html__( 'MINS', 'armania' ),
            'secs_text' => esc_html__( 'SEC', 'armania' ),
        );
        wp_enqueue_script( 'armania-countdown' );
        ?>
        <div class="armania-countdown-wrapper">
            <div class="armania-countdown"
                 data-datetime="<?php echo esc_attr( $atts['date'] ); ?>"
                 data-params="<?php echo esc_attr( wp_json_encode( $params ) ) ?>">
            </div>
        </div>
    <?php endif; ?>
    <?php if ( ! empty( $atts['banner']['id'] ) ): ?>
        <div class="thumb">
            <figure>
                <a <?php echo esc_attr( $link ); ?> class="elementor-animation-bob"><?php echo wp_get_attachment_image( $atts['banner']['id'], 'full' ); ?></a>
            </figure>
            <?php if ( ! empty( $atts['price'] ) ): ?>
                <span class="price-countdown">
                <?php
                if ( ! empty( $atts['price_text'] ) ) {
                    echo '<span class="text">' . esc_html( $atts['price_text'] ) . '</span>';
                }
                if ( ! empty( $atts['price_symbol'] ) ) {
                    echo '<span class="symbol">' . esc_html( $atts['price_symbol'] ) . '</span>';
                }
                echo esc_html( $atts['price'] );
                ?>
            </span>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</div>
<div class="content">
	<?php if ( ! empty( $atts['sub_title'] ) ): ?>
        <p class="subtitle"><?php echo wp_specialchars_decode( $atts['sub_title'] ); ?></p>
	<?php endif; ?>
	<?php if ( ! empty( $atts['title'] ) ): ?>
        <h3 class="title"><?php echo wp_specialchars_decode( $atts['title'] ); ?></h3>
	<?php endif; ?>
	<?php if ( ! empty( $atts['desc'] ) ): ?>
        <p class="desc"><?php echo wp_specialchars_decode( $atts['desc'] ); ?></p>
	<?php endif; ?>
	<?php if ( ! empty( $atts['text_button'] ) ) : ?>
        <div class="button-wrap">
            <a <?php echo esc_attr( $link ); ?> class="button">
				<?php echo esc_html( $atts['text_button'] ); ?>
            </a>
        </div>
	<?php endif; ?>
</div>