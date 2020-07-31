<?php
$owl_settings = array(
    'slidesToShow'  => 1,
    'autoplay'      => true,
    'autoplaySpeed' => 1000,
    'infinite'      => true,
    'arrows'        => false,
    'dots'          => true,
    'slidesMargin'  => 30,
    'speed'         => 3000,
);
?>
<div class="owl-slick" data-slick="<?php echo esc_attr(json_encode($owl_settings)); ?>">
    <?php foreach ($atts['tabs'] as $tab) : ?>
        <div class="testmonial">
            <?php $link = $testmonial->add_link_attributes($tab['link'], true); ?>
            <?php if (!empty($tab['desc'])): ?>
                <p class="desc">
                    <?php echo esc_html($tab['desc']); ?>
                </p>
            <?php endif; ?>
            <div class="info">
                <a <?php echo esc_attr($link); ?> class="link">
                    <?php if (!empty($tab['avatar']['id'])): ?>
                        <figure class="avatar">
                            <?php echo wp_get_attachment_image($tab['avatar']['id'], 'full'); ?>
                        </figure>
                    <?php endif; ?>
                    <span class="content">
                        <?php if (!empty($tab['name'])): ?>
                            <span class="name"><?php echo esc_html($tab['name']); ?></span>
                        <?php endif; ?>
                        <?php if (!empty($tab['position'])): ?>
                            <span class="position"><?php echo esc_html($tab['position']); ?></span>
                        <?php endif; ?>
                    </span>
                </a>
            </div>
        </div>
    <?php endforeach; ?>
</div>