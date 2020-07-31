<?php
/**
 * Name: Pets
 **/
?>
<?php
$header_message = armania_theme_option_meta(
    '_custom_metabox_theme_options',
    'header_message',
    'metabox_header_message'
);
$header_topmenu = armania_theme_option_meta(
    '_custom_metabox_theme_options',
    'header_topmenu',
    "metabox_header_topmenu"
);
$header_social  = armania_get_option( 'user_all_social' );
?>
<header id="header" class="header style-14">
    <?php if ( !empty( $header_message ) || !empty( $header_topmenu ) || !empty( $header_social ) ) : ?>
        <div class="header-top">
            <div class="container">
                <div class="header-inner">
                    <div class="header-left">
                        <?php armania_header_message(); ?>
                    </div>
                    <div class="header-right">
                        <?php armania_header_submenu( 'header_topmenu' ); ?>
                        <?php armania_header_social(); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="header-mid">
        <div class="container">
            <div class="header-inner">
                <?php armania_get_logo(); ?>
                <div class="header-control">
                    <?php armania_header_search( true ); ?>
                    <div class="inner-control">
                        <?php
                        armania_header_phone();
                        if ( function_exists( 'armania_header_wishlist' ) ) armania_header_wishlist();
                        if ( function_exists( 'armania_header_mini_cart' ) ) armania_header_mini_cart();
                        armania_header_menu_bar();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bot">
        <div class="container">
            <div class="header-inner megamenu-wrap">
                <?php armania_header_vertical_menu(); ?>
                <div class="box-header-nav">
                    <?php armania_header_primary_menu(); ?>
                </div>
                <div class="header-right">
                    <?php armania_header_user(); ?>
                </div>
            </div>
        </div>
    </div>
</header>
