<?php
/**
 * Template shortcode
 *
 * @return string
 * @var $atts
 *
 */
?>
<?php if (!empty($atts['date'])):
    $params = array(
        'days_text' => esc_html__('Days', 'armania'),
        'hrs_text'  => esc_html__('Hours', 'armania'),
        'mins_text' => esc_html__('Mins', 'armania'),
        'secs_text' => esc_html__('Secs', 'armania'),
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