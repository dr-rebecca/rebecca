<?php
if (!defined('ABSPATH')) {
    die('-1');
}

/**
 * Shortcode attributes
 * @var $atts
 * Shortcode class
 * @var $this "Shortcode_Ovic_Title"
 * @version 1.0.0
 */
class Shortcode_Ovic_Title extends Ovic_Addon_Shortcode
{
    /**
     * Shortcode name.
     *
     * @var  string
     */
    public $shortcode = 'ovic_title';
    public $default   = array(
        'style'     => 'style-01',
        'title'     => '',
        'desc'      => '',
        'category'  => '',
        'link'      => '',
        'link_text' => '',
        'align'     => 'horizontal',
    );

    public function content($atts, $content = null)
    {
        $link = '';
        if (!empty($atts['link'])) {
            $atts['link']['url'] = apply_filters('ovic_shortcode_vc_link', $atts['link']['url']);
            $link                = $this->add_link_attributes($atts['link'], true);

        }
        $css_class = $this->main_class($atts,
            array(
                'ovic-title',
                $atts['align'],
                $atts['style'],
            )
        );
        if (empty($atts['title'])) {
            return '';
        }
        ob_start();
        ?>
        <div class="<?php echo esc_attr($css_class); ?>">
            <div class="inner armania-dropdown">
                <h2 class="title">
                    <?php echo esc_html($atts['title']); ?>
                </h2>
                <?php if (!empty($atts['category']) || !empty($atts['link']['url'])) : ?>
                    <div class="sub-title">
                        <?php
                        if (!empty($atts['category'])) {
                            $tag_cloud = wp_tag_cloud(array(
                                'taxonomy' => 'product_cat',
                                'include'  => $atts['category'],
                                'echo'     => false,
                            ));
                            if (!empty($tag_cloud)) {
                                echo wp_specialchars_decode($tag_cloud);
                            }
                        }
                        ?>
                        <?php if (!empty($atts['link']['url'])): ?>
                            <a <?php echo esc_attr($link); ?>><?php echo esc_html($atts['link_text']); ?></a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <a class="armania-toggle" href="#" data-armania="armania-dropdown"></a>
                <?php if (!empty($atts['desc'])) : ?>
                    <span class="desc"><?php echo wp_specialchars_decode($atts['desc']); ?></span>
                <?php endif; ?>
            </div>
        </div>
        <?php
        return ob_get_clean();
    }
}