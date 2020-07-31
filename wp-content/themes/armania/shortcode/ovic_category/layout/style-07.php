<?php
/**
 * Template shortcode
 *
 * @return string
 * @var $atts
 * @var $link
 *
 */
?>
<?php
$background = '';
if ( ! empty( $atts['image'] ) ) {
    $background = 'background-image: url(' . esc_url( $atts['image']['url'] ) . ')';
}
?>
<div class="inner" style="<?php echo esc_attr( $background ); ?>">
    <?php if (!empty($atts['title'])): ?>
        <h2 class="title"><?php echo esc_html($atts['title']); ?></h2>
    <?php endif; ?>
    <?php if (!empty($atts['category'])): ?>
        <ul>
            <?php foreach ($atts['category'] as $category) : ?>
                <?php
                $term = get_term_by('slug', $category, 'product_cat');
                if (!is_wp_error($term) && !empty($term)): ?>
                    <?php
                    $title     = $term->name;
                    $term_link = get_term_link($term->term_id, 'product_cat');
                    ?>
                    <li><a href="<?php echo esc_url($term_link); ?>" class="link"><?php echo esc_html($title); ?></a></li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <?php if ( !empty($atts['link']['url']) && !empty($link) ): ?>
        <div class="button-wrap">
            <a <?php echo esc_attr($link); ?> >
                <?php echo esc_html($atts['link_text']); ?>
            </a>
        </div>
    <?php endif; ?>
</div>
