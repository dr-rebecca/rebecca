<?php
$vertical_menu  = armania_theme_option_meta(
    '_custom_metabox_theme_options',
    'header_vertical',
    'metabox_header_vertical'
);
$vertical_title = armania_theme_option_meta(
    '_custom_metabox_theme_options',
    'vertical_title',
    'metabox_vertical_title'
);
$always_open    = armania_theme_option_meta(
    '_custom_metabox_theme_options',
    'vertical_always_open',
    'metabox_vertical_always_open'
);
if ( !empty($vertical_menu) ) : ?>
    <div class="header-vertical">
        <div class="box-nav-vertical armania-dropdown <?php if ( $always_open == 1 ) echo esc_attr('always-open'); ?>">
            <?php if ( !empty($vertical_title) ) : ?>
                <a href="#" data-armania="armania-dropdown" class="block-title">
                    <span class="icon main-icon-menu"></span>
                    <span class="text"><?php echo esc_html($vertical_title); ?></span>
                </a>
            <?php endif; ?>
            <div class="block-content sub-menu">
                <?php
                wp_nav_menu(
                    array(
                        'menu'            => $vertical_menu,
                        'theme_location'  => $vertical_menu,
                        'container'       => '',
                        'container_class' => '',
                        'container_id'    => '',
                        'megamenu'        => true,
                        'mobile_enable'   => true,
                        'menu_class'      => 'armania-nav vertical-menu',
                        'megamenu_layout' => 'vertical',
                    )
                );
                ?>
            </div>
        </div>
    </div>
<?php endif;