<div class="inner container">
    <?php if ( ! empty( $atts['image']['id'] ) ) : ?>
        <div class="thumb">
            <div class="thumb-inner">
                <figure><?php echo wp_get_attachment_image( $atts['image']['id'], 'full' ); ?></figure>
            </div>
        </div>
    <?php endif; ?>
    <div class="content">
		<?php if ( ! empty( $atts['text_01'] ) ): ?>
            <h3 class="text-01"><?php echo nl2br( $atts['text_01'] ); ?></h3>
		<?php endif; ?>
		<?php if ( ! empty( $atts['text_02'] ) ): ?>
            <h3 class="text-02"><?php echo nl2br( $atts['text_02'] ); ?></h3>
		<?php endif; ?>
		<?php if ( ! empty( $atts['text_button'] ) ) : ?>
            <div class="button-wrap">
                <a <?php echo esc_attr( $link ); ?> class="button"><?php echo esc_html( $atts['text_button'] ); ?></a>
            </div>
		<?php endif; ?>
    </div>
</div>