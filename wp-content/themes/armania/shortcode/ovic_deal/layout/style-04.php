<?php
/**
 * Template shortcode
 *
 * @return string
 * @var $atts
 *
 */
$background = '';
if (!empty($atts['image'])) {
    $background = 'background-image: url('.wp_get_attachment_image_url($atts['image']['id'], 'full').')';
}
?>
<div class="head" style="<?php echo esc_attr($background); ?>">
    <?php if (!empty($atts['title'])): ?>
        <h2 class="title"><?php echo wp_specialchars_decode($atts['title']); ?></h2>
    <?php endif; ?>
    <?php if (!empty($atts['desc'])) : ?>
        <h3 class="desc"><?php echo wp_specialchars_decode($atts['desc']); ?></h3>
    <?php endif; ?>
    <?php if (!empty($atts['date'])):
        $params = array(
            'days_text' => esc_html__('Days', 'armania'),
            'hrs_text'  => esc_html__('Hours', 'armania'),
            'mins_text' => esc_html__('Minute', 'armania'),
            'secs_text' => esc_html__('Second', 'armania'),
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
    <?php if (!empty($atts['btn_txt'])): ?>
        <div class="button-wrap">
            <a <?php echo esc_attr($link); ?> class="button"><?php echo esc_html($atts['btn_txt']); ?></a>
        </div>
    <?php endif; ?>
</div>
<?php
unset($atts['title']);
unset($atts['desc']);
unset($atts['image']);
$args = array(
    'list_style' => 'owl'
);
$args = array_merge($args, $atts);
echo ovic_do_shortcode('ovic_products', $args);
?>
