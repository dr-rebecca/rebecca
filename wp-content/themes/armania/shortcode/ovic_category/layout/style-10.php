<?php
/**
 * Template shortcode
 *
 * @return string
 * @var $atts
 * @var $owl_settings
 *
 */
$rows_space = !empty($atts['slides_rows_space']) ? $atts['slides_rows_space'] : '';
?>
<?php if (!empty($atts['category'])): ?>
    <div class="owl-slick <?php echo esc_attr($rows_space); ?>" <?php echo esc_attr($owl_settings); ?>>
        <?php foreach ($atts['category'] as $category) : ?>
            <?php
            $term = get_term_by('slug', $category, 'product_cat');
            if (!is_wp_error($term) && !empty($term)): ?>
                <?php
                $title        = $term->name;
                $term_link    = get_term_link($term->term_id, 'product_cat');
                $thumbnail_id = get_term_meta($term->term_id, 'thumbnail_id', true);
                ?>
                <div class="category-item">
                    <a href="<?php echo esc_url($term_link); ?>" class="link">
                        <figure class="thumb equal-elem">
                            <?php echo wp_get_attachment_image($thumbnail_id, 'full'); ?>
                        </figure>
                        <span class="content">
                            <span class="title"><?php echo esc_html($title); ?></span>
                        </span>
                    </a>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
