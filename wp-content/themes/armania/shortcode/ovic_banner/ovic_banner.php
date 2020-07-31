<?php
if (!defined('ABSPATH')) {
    die('-1');
}

/**
 * Shortcode attributes
 * @var $atts
 * Shortcode class
 * @var $this "Shortcode_Ovic_Banner"
 * @version 1.0.0
 */
class Shortcode_Ovic_Banner extends Ovic_Addon_Shortcode
{
    /**
     * Shortcode name.
     *
     * @var  string
     */
    public $shortcode = 'ovic_banner';
    public $default   = array(
        'style'      => 'style-01',
        'position'   => '',
        'text_01'    => '',
        'text_02'    => '',
        'text_03'    => '',
        'text_color' => '',
    );

    public function content($atts, $content = null)
    {
        $atts['link']['url'] = apply_filters('ovic_shortcode_vc_link', $atts['link']['url']);
        $link                = $this->add_link_attributes($atts['link'], true);
        $css_class           = $this->main_class($atts, array(
            'ovic-banner',
            $atts['style'],
            $atts['position'],
            $atts['text_color'],
        ));
        $layout              = array(
            'style-33',
            'style-50',
        );
        $image_url           = !empty($atts['image']['id']) ? wp_get_attachment_image_url($atts['image']['id'], 'full') : '';
        ob_start();
        ?>
        <div class="<?php echo esc_attr($css_class); ?>">
            <?php if (in_array($atts['style'], $layout)): ?>
                <?php
                $this->get_template("layout/{$atts['style']}.php",
                    array(
                        'atts' => $atts,
                        'link' => $link,
                    )
                );
                ?>
            <?php else: ?>
                <div class="inner <?php echo esc_attr($atts['image_effect']); ?>"
                     data-image="<?php echo esc_url($image_url); ?>">
                    <?php if (!empty($atts['image']['id'])) : ?>
                        <div class="background image-effect"
                             style="background-image: url(<?php echo esc_url($image_url); ?>)">
                        </div>
                    <?php endif; ?>
                    <span class="hover"></span>
                    <div class="content">
                        <?php if (!empty($atts['text_01'])): ?>
                            <h3 class="text-01"><?php echo nl2br($atts['text_01']); ?></h3>
                        <?php endif; ?>
                        <?php if (!empty($atts['text_02'])): ?>
                            <h3 class="text-02"><?php echo nl2br($atts['text_02']); ?></h3>
                        <?php endif; ?>
                        <?php if (!empty($atts['text_03']) && $atts['style'] != 'style-22'): ?>
                            <h3 class="text-03"><?php echo nl2br($atts['text_03']); ?></h3>
                        <?php endif; ?>
                        <?php if (!empty($atts['text_button'])) : ?>
                            <div class="button-wrap">
                                <a <?php echo esc_attr($link); ?> class="button"><?php echo esc_html($atts['text_button']); ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if (!empty($atts['text_03']) && $atts['style'] == 'style-22'): ?>
                    <h3 class="text-03"><?php echo nl2br($atts['text_03']); ?></h3>
                <?php endif; ?>
            <?php endif; ?>
        </div>
        <?php
        return ob_get_clean();
    }
}