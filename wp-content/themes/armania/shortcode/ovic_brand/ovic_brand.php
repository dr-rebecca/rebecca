<?php
if (!defined('ABSPATH')) {
    die('-1');
}

/**
 * Shortcode attributes
 * @var $atts
 * Shortcode class
 * @var $this "Shortcode_Ovic_Brand"
 * @version 1.0.0
 */
class Shortcode_Ovic_Brand extends Ovic_Addon_Shortcode
{
    /**
     * Shortcode name.
     *
     * @var  string
     */
    public $shortcode = 'ovic_brand';
    public $default   = array(
        'style' => 'style-01',
    );

    public function content($atts, $content = null)
    {
        $atts['link']['url'] = apply_filters('ovic_shortcode_vc_link', $atts['link']['url']);
        $link         = $this->add_link_attributes($atts['link'], true);
        $owl_settings = $this->generate_carousel($atts);
        $css_class    = $this->main_class($atts,
            array(
                'ovic-brand',
                $atts['style']
            )
        );
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
            <?php if (!empty($atts['category'])): ?>
                <div class="owl-slick equal-container better-height <?php echo esc_attr($atts['slides_rows_space']); ?>" <?php echo esc_attr($owl_settings); ?>>
                    <?php foreach ($atts['category'] as $category) : ?>
                        <?php
                        $term = get_term_by('slug', $category, 'product_brand');
                        if (!is_wp_error($term) && !empty($term)): ?>
                            <?php
                            $term_link    = get_term_link($term->term_id, 'product_brand');
                            $thumbnail_id = get_term_meta($term->term_id, 'logo_id', true);
                            ?>
                            <div class="brand-item">
                                <a href="<?php echo esc_url($term_link); ?>"
                                   class="link <?php echo esc_attr($atts['image_effect']); ?>">
                                    <?php if (!empty($thumbnail_id)) : ?>
                                        <figure class="image">
                                            <img src="<?php echo wp_get_attachment_image_url($thumbnail_id, 'full'); ?>"
                                                 alt="<?php echo esc_attr($term->name); ?>"
                                                 class="<?php echo esc_attr($class_hover); ?>">
                                        </figure>
                                    <?php else: ?>
                                        <span class="name"><?php echo esc_html($term->name); ?></span>
                                    <?php endif; ?>
                                    <?php if ($atts['style'] == 'style-03') : ?>
                                        <span class="name"><?php echo esc_html($term->name); ?></span>
                                    <?php endif; ?>
                                    <span class="hover"></span>
                                </a>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
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
        <?php
        return ob_get_clean();
    }
}