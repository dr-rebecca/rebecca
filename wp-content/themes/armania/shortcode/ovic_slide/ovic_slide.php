<?php
if (!defined('ABSPATH')) {
    die('-1');
}

/**
 * Shortcode attributes
 * @var $atts
 * Shortcode class
 * @var $this "Shortcode_Ovic_Slide"
 * @version 1.0.0
 */
class Shortcode_Ovic_Slide extends Ovic_Addon_Shortcode
{
    /**
     * Shortcode name.
     *
     * @var  string
     */
    public $shortcode = 'ovic_slide';
    public $default   = array(
        'style'             => 'style-01',
        'slides_rows_space' => '',
    );

    public function content($atts, $content = null)
    {
        $owl_settings = $this->generate_carousel($atts);
        $css_class    = $this->main_class($atts,
            array(
                'ovic-slide',
                $atts['style']
            )
        );
        if ($atts['lighter'] == 'yes') {
            $css_class .= ' lighter';
        }
        $class_item = 'slide-item';
        if (!empty($atts['hover_animation'])) {
            $class_hover = 'elementor-animation-'.$atts['hover_animation'];
        } else {
            $class_hover = '';
        }

        ob_start(); ?>
        <div class="<?php echo esc_attr($css_class); ?>">
            <?php
            if (!empty($atts['title'])) {
                echo ovic_do_shortcode('ovic_title', array(
                    'title' => $atts['title']
                ));
            }
            ?>
            <?php if (!empty($atts['tabs'])): ?>
                <div class="owl-slick equal-container better-height <?php echo esc_attr($atts['slides_rows_space']); ?>" <?php echo esc_attr($owl_settings); ?>>
                    <?php foreach ($atts['tabs'] as $tab) : ?>
                        <?php
                        $tab['link']['url'] = apply_filters('ovic_shortcode_vc_link', $tab['link']['url']);
                        $link       = $this->add_link_attributes($tab['link'], true);
                        $title      = !empty($tab['title']) ? $tab['title'] : '';
                        $class_item .= ' elementor-repeater-item-'.$tab['_id'];
                        ?>
                        <div class="<?php echo esc_attr($class_item); ?>">
                            <a <?php echo esc_attr($link); ?> class="link">
                                <?php if ($tab['selected_media'] == 'icon'): ?>
                                    <?php if (!empty($tab['selected_icon']['value'])): ?>
                                        <span class="icon equal-elem <?php echo esc_attr($tab['selected_icon']['library']); ?>">
                                            <?php
                                            Elementor\Icons_Manager::render_icon($tab['selected_icon'], ['aria-hidden' => 'true']);
                                            ?>
                                        </span>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <?php if (!empty($tab['image']['url'])): ?>
                                        <span class="icon equal-elem type-image">
                                            <img src="<?php echo esc_url($tab['image']['url']); ?>"
                                                 alt="<?php echo esc_attr($title); ?>"
                                                 class="<?php echo esc_attr($class_hover); ?>">
                                        </span>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <?php if (!empty($tab['title'])): ?>
                                    <span class="title"><?php echo esc_html($title); ?></span>
                                <?php endif; ?>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
        <?php
        return ob_get_clean();
    }
}