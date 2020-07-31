<?php
$header_currency = armania_theme_option_meta(
    '_custom_metabox_theme_options',
    'header_currency',
    "metabox_header_currency"
);
$header_language = armania_theme_option_meta(
    '_custom_metabox_theme_options',
    'header_language',
    "metabox_header_language"
);
$header_phone = armania_theme_option_meta(
    '_custom_metabox_theme_options',
    'header_phone',
    'metabox_header_phone',
    ''
);
$header_info = armania_theme_option_meta(
    '_custom_metabox_theme_options',
    'header_info',
    'metabox_header_info',
    ''
);
$all_socials = armania_get_option( 'user_all_social' );
?>
<div class="header-settings">
    <div class="settings-head">
        <a href="#" class="settings-close"><span class="main-icon-close"></span></a>
    </div>
    <div class="settings-inner">
        <?php armania_header_message(); ?>
        <div class="user-topmenu">
            <?php armania_header_user(); ?>
            <?php armania_header_submenu( 'header_topmenu' ); ?>
        </div>
        <?php if ( !empty($header_currency) || !empty($header_language) ) : ?>
            <div class="currency-language">
                <div class="settings-currency">
                    <h3 class="settings-title"><?php echo esc_html__('Currencies', 'armania' ); ?></h3>
                    <?php armania_header_submenu( 'header_currency' ); ?>
                </div>
                <div class="settings-language">
                    <h3 class="settings-title"><?php echo esc_html__('Language', 'armania' ); ?></h3>
                    <?php armania_header_submenu( 'header_language' ); ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if ( !empty($header_phone) ) : ?>
            <div class="settings-info">
                <h3 class="settings-title"><?php echo esc_html__('Contact', 'armania' ); ?></h3>
                <?php armania_header_phone(); ?>
            </div>
        <?php endif; ?>
        <?php if ( !empty($header_info) ) : ?>
            <div class="settings-info">
                <h3 class="settings-title"><?php echo esc_html__('Contact', 'armania' ); ?></h3>
                <?php armania_header_info(); ?>
            </div>
        <?php endif; ?>
        <?php if ( !empty($all_socials) ) : ?>
        <div class="settings-social">
            <h3 class="settings-title"><?php echo esc_html__('Connect on Social:', 'armania' ); ?></h3>
            <?php armania_header_social(); ?>
        </div>
        <?php endif; ?>
    </div>
</div>