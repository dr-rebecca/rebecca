<?php
if (!defined('ABSPATH')) {
    die('-1');
}

/**
 * Shortcode attributes
 * @var $atts
 * Shortcode class
 * @var $this "Shortcode_Ovic_Category"
 * @version 1.0.0
 */
class Shortcode_Ovic_Category extends Ovic_Addon_Shortcode
{
    /**
     * Shortcode name.
     *
     * @var  string
     */
    public $shortcode = 'ovic_category';
    public $default   = array(
        'style'             => 'style-01',
        'slides_rows_space' => '',
    );

    public function content($atts, $content = null)
    {
        $link         = !empty($atts['link']) ? $this->add_link_attributes($atts['link'], true) : array();
        $owl_settings = $this->generate_carousel($atts);
        $css_class    = $this->main_class($atts,
            array(
                'ovic-category',
                $atts['style'],
                'equal-container better-height'
            )
        );

        ob_start(); ?>
        <div class="<?php echo esc_attr($css_class); ?>">
            <?php
            $this->get_template("layout/{$atts['style']}.php",
                array(
                    'atts'         => $atts,
                    'link'         => $link,
                    'owl_settings' => $owl_settings,
                )
            );
            ?>
        </div>
        <?php
        return ob_get_clean();
    }
}