<?php
$owl_settings = array(
    'slidesToShow'  => 1,
    'autoplay'      => true,
    'autoplaySpeed' => 3000,
    'infinite'      => true,
    'arrows'        => true,
    'dots'          => false,
    'slidesMargin'  => 30,
    'speed'         => 1500,
);
?>
<div class="owl-slick" data-slick="<?php echo esc_attr(json_encode($owl_settings)); ?>">
    <?php foreach ($atts['tabs'] as $tab) : ?>
        <div class="testmonial">
            <?php $link = $testmonial->add_link_attributes($tab['link'], true); ?>
            <?php if (!empty($tab['avatar']['id'])): ?>
                <a <?php echo esc_attr($link); ?> class="avatar">
                    <figure><?php echo wp_get_attachment_image($tab['avatar']['id'], 'full'); ?></figure>
                </a>
            <?php endif; ?>
            <?php if (!empty($tab['desc'])): ?>
                <p class="desc">
                    <?php echo esc_html($tab['desc']); ?>
                </p>
            <?php endif; ?>
            <div class="content">
                <?php if (!empty($tab['name'])): ?>
                    <p class="name"><a <?php echo esc_attr($link); ?>><?php echo esc_html($tab['name']); ?></a></p>
                <?php endif; ?>
                <?php if (!empty($tab['position'])): ?>
                    <p class="position"><?php echo esc_html($tab['position']); ?></p>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>