<?php
/**
 * Template shortcode
 *
 * @return string
 * @var $atts
 *
 */
?>
<div class="icon">
    <?php \Elementor\Icons_Manager::render_icon( $atts['selected_icon'], [ 'aria-hidden' => 'true' ] ); ?>
</div>
<div class="content">
    <?php if ( ! empty( $atts['title'] ) ): ?>
        <p class="title"><?php echo esc_html( $atts['title'] ); ?></p>
    <?php endif; ?>
    <?php if ( ! empty( $atts['phone'] ) ): ?>
        <a href="tel:<?php echo esc_attr( $atts['phone'] ); ?>" class="phone">
            <?php echo esc_html( $atts['phone'] ); ?>
        </a>
    <?php endif; ?>
</div>