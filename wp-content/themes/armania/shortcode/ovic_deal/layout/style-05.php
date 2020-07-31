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
    <?php if (!empty($atts['title'])): ?>
        <h3 class="title"><?php echo esc_html($atts['title']); ?></h3>
    <?php endif; ?>
    <?php if (!empty($atts['date'])):
        $params = array(
            'hrs_text'  => '',
            'mins_text' => '',
            'secs_text' => '',
        );
        wp_enqueue_script('armania-countdown');
        ?>
        <div class="armania-countdown-wrapper">
            <span class="text">
                <?php echo esc_html__('Ends in :', 'armania'); ?>
            </span>
            <div class="armania-countdown"
                 data-datetime="<?php echo esc_attr($atts['date']); ?>"
                 data-params="<?php echo esc_attr(wp_json_encode($params)) ?>">
            </div>
        </div>
    <?php endif; ?>
    <?php if (!empty($atts['btn_txt'])): ?>
        <div class="sub-title">
            <a <?php echo esc_attr($link); ?>><?php echo esc_html($atts['btn_txt']); ?></a>
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
