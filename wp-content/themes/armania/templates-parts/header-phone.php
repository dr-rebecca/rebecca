<?php
$header_phone = armania_theme_option_meta(
    '_custom_metabox_theme_options',
    'header_phone',
    'metabox_header_phone',
    ''
);
if ( !empty( $header_phone ) ) : ?>
    <div class="header-info">
        <div class="icon">
            <span class="main-icon-phone-call"></span>
        </div>
        <div class="content">
            <p class="subtitle"><?php echo esc_html__('Hotline:', 'armania');?></p>
            <p class="title"><a href="tel:<?php echo esc_attr( $header_phone ); ?>"><?php echo esc_html( $header_phone ); ?></a></p>
        </div>
    </div>
<?php endif;