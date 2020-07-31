<?php
if (!defined('ABSPATH')) {
    die('-1');
}

/**
 * Shortcode attributes
 * @var $atts
 * Shortcode class
 * @var $this "Shortcode_Ovic_Deal"
 * @version 1.0.0
 */
class Shortcode_Ovic_Deal extends Ovic_Addon_Shortcode
{
    /**
     * Shortcode name.
     *
     * @var  string
     */
    public $shortcode = 'ovic_deal';
    public $default   = array(
        'style' => 'style-01',
    );

    public function content($atts, $content = null)
    {
        $css_class = $this->main_class($atts, array(
            'ovic-deal',
            $atts['style']
        ));
        if (!empty($atts['btn_link']['url'])) {
            $atts['btn_link']['url'] = apply_filters('ovic_shortcode_vc_link', $atts['btn_link']['url']);
        }
        $link         = $this->add_link_attributes($atts['btn_link'], true);
        $atts['date'] = apply_filters('ovic_change_datetime_countdown', $atts['date'], 0);

        ob_start(); ?>
        <div class="<?php echo esc_attr($css_class); ?>">
            <div class="inner">
                <?php
                $this->get_template("layout/{$atts['style']}.php",
                    array(
                        'atts' => $atts,
                        'link' => $link,
                    )
                );
                ?>
            </div>
        </div>
        <?php
        return ob_get_clean();
    }
}