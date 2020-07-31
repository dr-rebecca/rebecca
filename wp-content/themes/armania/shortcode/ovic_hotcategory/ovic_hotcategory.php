<?php
if (!defined('ABSPATH')) {
    die('-1');
}

/**
 * Shortcode attributes
 * @var $atts
 * Shortcode class
 * @var $this "Shortcode_Ovic_Hotcategory"
 * @version 1.0.0
 */
class Shortcode_Ovic_Hotcategory extends Ovic_Addon_Shortcode
{
    /**
     * Shortcode name.
     *
     * @var  string
     */
    public $shortcode = 'ovic_hotcategory';
    public $default   = array(
        'style'             => 'style-01',
        'slides_rows_space' => '',
    );

    public function content($atts, $content = null)
    {
        $css_class    = $this->main_class($atts,
            array(
                'ovic-hotcategory',
                $atts['style']
            )
        );
        $list_class   = array(
            'owl-slick',
            'equal-container',
            'better-height',
            $atts['slides_rows_space']
        );
        $owl_settings = $this->generate_carousel($atts);
        $item_class   = array('item');
        if ($atts['style'] == 'style-01') {
            $item_class[] = 'equal-elem';
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
                <div class="<?php echo esc_attr(implode(' ', $list_class)); ?>" <?php echo esc_attr($owl_settings); ?>>
                    <?php foreach ($atts['tabs'] as $tab) : ?>
                        <div class="hotcategory-item">
                            <div class="<?php echo esc_attr(implode(' ', $item_class)); ?>">
                                <div class="inner">
                                    <div class="content">
                                        <?php if (!empty($tab['title'])): ?>
                                            <h3 class="title"><?php echo esc_html($tab['title']); ?></h3>
                                        <?php endif; ?>
                                        <?php if (!empty($tab['category'])): ?>
                                            <ul class="list">
                                                <?php foreach ($tab['category'] as $category) : ?>
                                                    <?php
                                                    $term = get_term_by('slug', $category, 'product_cat');
                                                    if (!is_wp_error($term) && !empty($term)): ?>
                                                        <li>
                                                            <a href="<?php echo esc_url(get_term_link($term->term_id,
                                                                'product_cat')); ?>">
                                                                <?php echo esc_html($term->name); ?>
                                                            </a>
                                                        </li>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                        <?php if (!empty($tab['title'])):
                                            $tab['link']['url'] = apply_filters('ovic_shortcode_vc_link', $tab['link']['url']);
                                            $link = $this->add_link_attributes($tab['link'], true);
                                            ?>
                                            <div class="button-wrap">
                                                <a class="button" <?php echo esc_attr($link); ?>></a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <?php if (!empty($tab['image']['id'])): ?>
                                        <div class="thumb">
                                            <figure><?php echo wp_get_attachment_image($tab['image']['id'],
                                                    'full'); ?></figure>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
        <?php
        return ob_get_clean();
    }
}