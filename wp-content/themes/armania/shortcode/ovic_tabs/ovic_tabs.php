<?php

use Elementor\Core\Files\Assets\Svg\Svg_Handler;

if (!defined('ABSPATH')) {
    die('-1');
}

/**
 * Shortcode attributes
 * @var $atts
 * Shortcode class
 * @var $this "Shortcode_Ovic_Tabs"
 * @version 1.0.0
 */
class Shortcode_Ovic_Tabs extends Ovic_Addon_Shortcode
{
    /**
     * Shortcode name.
     *
     * @var  string
     */
    public $shortcode = 'ovic_tabs';
    public $default   = array(
        'style' => 'style-01',
    );

    public function product_atts($atts, $tab)
    {
        $carousel                            = $this->generate_carousel($atts, 'slides_', false);
        $args                                = $tab;
        $args['list_style']                  = 'owl';
        $args['carousel']                    = $carousel;
        $args['_id']                         = $tab['_id'].'_'.uniqid();
        $args['slides_rows_space']           = $atts['slides_rows_space'];
        $args['product_style']               = $atts['product_style'];
        $args['overflow_visible']            = $atts['overflow_visible'];
        $args['product_image_size']          = $atts['product_image_size'];
        $args['product_custom_thumb_width']  = $atts['product_custom_thumb_width'];
        $args['product_custom_thumb_height'] = $atts['product_custom_thumb_height'];
        unset($args['title']);
        unset($args['image']);

        return $args;
    }

    public function tab_content($section)
    {
        foreach ($section as $tag => $shortcode) {
            if (!is_array($shortcode)) {
                if (class_exists('Elementor\Plugin')) {
                    echo Elementor\Plugin::$instance->frontend->get_builder_content_for_display($shortcode);
                } else {
                    $post_id = get_post($shortcode);
                    $content = $post_id->post_content;
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]>', $content);
                    echo wp_specialchars_decode($content);
                }
            } else {
                echo ovic_do_shortcode($tag, $shortcode);
            }
        }
    }

    public function content($atts, $content = null)
    {
        $count     = 1;
        $sections  = array();
        $css_class = $this->main_class($atts,
            array(
                'ovic-tabs ovic-tab',
                $atts['style']
            )
        );
        if ($atts['lighter'] == 'yes') {
            $css_class .= ' lighter';
        }
        $is_ajax = $atts['is_ajax'] == 'yes' ? 1 : 0;
        ob_start();
        ?>
        <div class="<?php echo esc_attr($css_class); ?>">
            <div class="tabs-head">
                <?php
                if (!empty($atts['title'])) {
                    if ($atts['style'] == 'style-11') {
                        echo ovic_do_shortcode('ovic_title', array(
                            'style' => 'style-03',
                            'title' => $atts['title']
                        ));
                    } else {
                        echo '<h2 class="tab-title"><span class="text">'.esc_html($atts['title']).'</span></h2>';
                    }
                }
                ?>
                <ul class="tabs armano-tabs">
                    <?php if (!empty($atts['tabs'])): ?>
                        <?php foreach ($atts['tabs'] as $key => $tab) : ?>
                            <?php

                            $class_items = array('tab-item');
                            $class_link  = array('tab-link');
                            $tab_id      = $tab['_id'].'-'.uniqid();

                            if ($count == $atts['active']) {
                                $class_items[] = 'active';
                                $class_link[]  = 'loaded';
                            }

                            $data              = $tab['content'] == 'product' ? $this->product_atts($atts, $tab) : $tab['template_id'];
                            $shortcode         = array(
                                'ovic_products' => $data
                            );
                            $sections[$tab_id] = $shortcode;
                            $shortcode         = json_encode($shortcode);

                            if ($is_ajax == 0) {
                                $shortcode = '';
                            }

                            $count++;
                            ?>
                            <li class="<?php echo esc_attr(implode(' ', $class_items)); ?>">
                                <a class="<?php echo esc_attr(implode(' ', $class_link)); ?>"
                                   data-ajax="<?php echo esc_attr($is_ajax) ?>"
                                   data-animate="fadeIn"
                                   data-section="<?php echo esc_attr($shortcode); ?>"
                                   href="#tab-<?php echo esc_attr($tab_id); ?>">
                                    <?php if (!empty($tab['image']) && !empty($tab['image']['id'])) : ?>
                                        <figure class="thumb">
                                            <?php
                                            if (strpos(basename($tab['image']['url']), '.svg') === false) {
                                                echo wp_get_attachment_image($tab['image']['id'], 'full');
                                            } else {
                                                echo Svg_Handler::get_inline_svg($tab['image']['id']);
                                            }
                                            ?>
                                        </figure>
                                    <?php endif; ?>
                                    <?php if (!empty($tab['title'])): ?>
                                        <span class="title"><?php echo esc_html($tab['title']); ?></span>
                                    <?php endif; ?>
                                    <?php if (!empty($tab['text'])): ?>
                                        <span class="text"><?php echo esc_html($tab['text']); ?></span>
                                    <?php endif; ?>
                                    <span class="hover"></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
                <?php if ($atts['style'] == 'style-03' || $atts['style'] == 'style-06'): ?>
                    <?php
                    $atts['link']['url'] = apply_filters('ovic_shortcode_vc_link', $atts['link']['url']);
                    $link                = $this->add_link_attributes($atts['link'], true);
                    if (!empty($atts['text_button'])) : ?>
                        <div class="button-wrap">
                            <a <?php echo esc_attr($link); ?> class="button">
                                <?php echo esc_html($atts['text_button']); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            <div class="tabs-container">
                <?php if (!empty($sections)): ?>
                    <?php
                    $count = 1;
                    foreach ($sections as $id => $section) : ?>
                        <?php
                        $active = array('tab-panel');
                        if ($count == $atts['active']) {
                            $active[] = 'active';
                        }
                        ?>
                        <div class="<?php echo esc_attr(implode(' ', $active)); ?>"
                             id="tab-<?php echo esc_attr($id); ?>">
                            <?php if ($is_ajax == true) :
                                if ($count == $atts['active']) :
                                    $this->tab_content($section);
                                endif;
                            else :
                                $this->tab_content($section);
                            endif;
                            $count++;
                            ?>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
        <?php

        return ob_get_clean();
    }
}