<div class="inner <?php echo esc_attr($atts['image_effect']); ?>"
     data-image="<?php echo wp_get_attachment_image_url($atts['image']['id'], 'full'); ?>">
    <?php if (!empty($atts['image']['id'])) : ?>
        <div class="background image-effect"
             style="background-image: url(<?php echo wp_get_attachment_image_url($atts['image']['id'], 'full'); ?>)">
        </div>
    <?php endif; ?>
    <span class="hover"></span>
    <?php if (!empty($atts['text_03']) && $atts['style'] != 'style-22'): ?>
        <h3 class="text-03"><?php echo nl2br($atts['text_03']); ?></h3>
    <?php endif; ?>
    <div class="content">
        <?php if (!empty($atts['text_01'])): ?>
            <h3 class="text-01"><?php echo nl2br($atts['text_01']); ?></h3>
        <?php endif; ?>
        <?php if (!empty($atts['price'])): ?>
            <div class="price-content">
                <span class="number"><?php echo esc_html($atts['price']); ?></span>
                <?php if (!empty($atts['price_symbol'])): ?>
                    <span class="symbol">
                        <?php echo esc_html($atts['price_symbol']); ?>
                        <?php if (!empty($atts['price_text_1'])): ?>
                            <span class="text"><?php echo esc_html($atts['price_text_1']); ?></span>
                        <?php endif; ?>
                    </span>
                <?php endif; ?>
                <?php if (!empty($atts['price_text_2'])): ?>
                    <span class="title"><?php echo wp_specialchars_decode($atts['price_text_2']); ?></span>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <?php if (!empty($atts['text_02'])): ?>
            <h3 class="text-02"><?php echo nl2br($atts['text_02']); ?></h3>
        <?php endif; ?>
        <?php if (!empty($atts['text_button'])) : ?>
            <div class="button-wrap">
                <a <?php echo esc_attr($link); ?> class="button"><?php echo esc_html($atts['text_button']); ?></a>
            </div>
        <?php endif; ?>
    </div>
</div>