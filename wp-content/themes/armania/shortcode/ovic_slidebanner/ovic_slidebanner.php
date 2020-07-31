<?php
if (!defined('ABSPATH')) {
    die('-1');
}

/**
 * Shortcode attributes
 * @var $atts
 * Shortcode class
 * @var $this "Shortcode_Ovic_Slidebanner"
 * @version 1.0.0
 */
class Shortcode_Ovic_Slidebanner extends Ovic_Addon_Shortcode
{
    /**
     * Shortcode name.
     *
     * @var  string
     */
    public $shortcode = 'ovic_slidebanner';
    public $default   = array(
        'style'     => 'style-01',
        'slide_dot' => '',
    );

    public function content($atts, $content = null)
    {
        $owl_settings = $this->generate_carousel($atts);
        $css_class    = $this->main_class($atts,
            array(
                'ovic-slidebanner',
                $atts['style']
            )
        );

        ob_start();
        ?>
        <div class="<?php echo esc_attr($css_class); ?>">
            <?php if (!empty($atts['tabs'])): ?>
                <div class="owl-slick equal-container better-height <?php echo esc_attr($atts['slide_dot']); ?> <?php echo esc_attr($atts['slides_rows_space']); ?>" <?php echo esc_attr($owl_settings); ?>>
                    <?php foreach ($atts['tabs'] as $tab) : ?>
                        <div class="slide-item">
                            <?php echo armania_do_shortcode('ovic_banner', $tab); ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
        <?php
        return ob_get_clean();
    }
}