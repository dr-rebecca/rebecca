<?php
$owl_settings = array(
    'slidesToShow'  => 1,
    'autoplay'      => true,
    'autoplaySpeed' => 3000,
    'infinite'      => true,
    'arrows'        => true,
    'dots'          => false,
    'slidesMargin'  => 30,
    'speed'         => 1200,
    'fade'          => true,
);
?>
<div class="owl-slick equal-container better-height" data-slick="<?php echo esc_attr(json_encode($owl_settings)); ?>">
    <?php foreach ($atts['tabs'] as $tab) : ?>
        <div class="testmonial">
            <div class="inner">
                <?php $link = $testmonial->add_link_attributes($tab['link'], true); ?>
                <?php if (!empty($tab['avatar']['id'])): ?>
                    <figure class="avatar">
                        <a <?php echo esc_attr($link); ?>>
                            <?php echo wp_get_attachment_image($tab['avatar']['id'], 'full'); ?>
                        </a>
                    </figure>
                <?php endif; ?>
                <div class="content-wrap equal-elem">
                    <?php if (!empty($tab['rating'])): ?>
                        <span class="star-rating">
                        <span style="width:<?php echo(((int) $tab['rating'] / 5) * 100); ?>%"></span>
                    </span>
                    <?php endif; ?>
                    <?php if (!empty($tab['desc'])): ?>
                        <p class="desc">
                            <?php echo esc_html($tab['desc']); ?>
                        </p>
                    <?php endif; ?>
                    <div class="info">
                        <a <?php echo esc_attr($link); ?> class="link">
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
            </div>
        </div>
    <?php endforeach; ?>
</div>