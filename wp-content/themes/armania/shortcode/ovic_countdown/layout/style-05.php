<?php
/**
 * Template shortcode
 *
 * @return string
 * @var $atts
 *
 */
?>
    <div class="content">
        <?php if (!empty($atts['sub_title'])): ?>
            <p class="subtitle"><?php echo wp_specialchars_decode($atts['sub_title']); ?></p>
        <?php endif; ?>
        <?php if (!empty($atts['title'])): ?>
            <h3 class="title"><?php echo wp_specialchars_decode($atts['title']); ?></h3>
        <?php endif; ?>
        <?php if (!empty($atts['date'])):
            $params = array(
                'days_text' => esc_html__('days', 'armania'),
                'hrs_text'  => esc_html__('hours', 'armania'),
                'mins_text' => esc_html__('mins', 'armania'),
                'secs_text' => esc_html__('secs', 'armania'),
            );
            wp_enqueue_script('armania-countdown');
            ?>
            <div class="armania-countdown-wrapper">
                <div class="armania-countdown"
                     data-datetime="<?php echo esc_attr($atts['date']); ?>"
                     data-params="<?php echo esc_attr(wp_json_encode($params)) ?>">
                </div>
            </div>
        <?php endif; ?>
        <?php if (!empty($atts['text_button'])) : ?>
            <div class="button-wrap">
                <a <?php echo esc_attr($link); ?> class="button">
                    <?php echo esc_html($atts['text_button']); ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
<?php if (!empty($atts['banner']['id'])): ?>
    <div class="thumb">
        <?php if (!empty($atts['bg_banner']['id'])): ?>
            <span class="background" style="background-image: url(<?php echo esc_url($atts['bg_banner']['url']); ?>);"></span>
        <?php endif; ?>
        <a <?php echo esc_attr($link); ?>>
            <?php
            echo wp_get_attachment_image(
                $atts['banner']['id'],
                'full',
                false,
                [
                    'class' => 'elementor-animation-bob'
                ]
            );
            ?>
        </a>
    </div>
<?php endif; ?>