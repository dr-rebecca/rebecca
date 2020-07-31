<?php
if (!defined('ABSPATH')) {
    die('-1');
}

/**
 * Shortcode attributes
 * @var $atts
 * Shortcode class
 * @var $this "Shortcode_Ovic_Blog"
 * @version 1.0.0
 */
class Shortcode_Ovic_Blog extends Ovic_Addon_Shortcode
{
    /**
     * Shortcode name.
     *
     * @var  string
     */
    public $shortcode = 'ovic_blog';
    public $default   = array(
        'style'             => 'style-01',
        'slides_rows_space' => '',
        'image_full_size'   => '',
    );

    public function content($atts, $content = null)
    {
        $css_class       = $this->main_class($atts, array(
            'ovic-blog',
            $atts['style']
        ));
        $i               = 0;
        $owl_settings    = '';
        $post_list_class = array(
            'content-post',
            'equal-container',
            'better-height',
            $atts['slides_rows_space']
        );
        if (!empty($atts['slides_to_show'])) {
            $post_list_class[] = 'owl-slick';
            $owl_settings      = $this->generate_carousel($atts);
        }
        if (!empty($atts['carousel'])) {
            $post_list_class[] = 'owl-slick';
            $owl_settings      = htmlspecialchars(' data-slick='.json_encode($atts['carousel']).' ');
        }
        $post_item_class = array('blog-item', $atts['style']);
        if ($atts['style'] == 'style-01') {
            $post_item_class[] = 'equal-elem';
        }
        $query = new WP_Query(armania_shortcode_posts_query($atts));
        if ($atts['image_full_size'] == 'yes') {
            add_filter('armania_post_thumbnail_width', function () {
                return false;
            });
            add_filter('armania_post_thumbnail_height', function () {
                return false;
            });
        }
        ob_start();
        ?>
        <div class="<?php echo esc_attr($css_class); ?>">
            <?php if ($query->have_posts()) : ?>
                <?php
                if (!empty($atts['title'])) {
                    if ($atts['style'] == 'style-01') {
                        echo ovic_do_shortcode('ovic_title', array(
                            'title' => $atts['title']
                        ));
                    } else {
                        echo '<div class="head">';
                        echo '<h2 class="title">'.$atts['title'].'</h2>';
                        echo '</div>';
                    }
                }
                ?>
                <div class="<?php echo esc_attr(implode(' ',
                    $post_list_class)); ?>" <?php echo esc_attr($owl_settings); ?>>
                    <?php while ($query->have_posts()) :
                        $query->the_post();
                        $format    = 'format-standard';
                        $post_meta = get_post_meta(get_the_ID(), '_custom_metabox_post_options', true);
                        if (!empty($post_meta['type'])) {
                            $format = 'format-'.$post_meta['type'];
                        }
                        $post_item_class[] = $format;
                        $i++;
                        ?>
                        <article <?php post_class($post_item_class); ?>>
                            <?php
                            armania_get_template(
                                "templates/blog/blog-shortcode/content-blog-{$atts['style']}.php",
                                array(
                                    'atts' => $atts,
                                )
                            );
                            ?>
                        </article>
                    <?php endwhile; ?>
                </div>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
        <?php
        if ($atts['image_full_size'] == 'yes') {
            remove_all_filters('armania_post_thumbnail_width');
            remove_all_filters('armania_post_thumbnail_height');
        }

        return ob_get_clean();
    }
}