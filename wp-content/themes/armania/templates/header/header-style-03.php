<?php
/**
 * Name:  Market 03
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
?>
<header id="header" class="header style-03">
    <?php if ( !empty( $header_message ) || !empty( $header_topmenu ) ) : ?>
        <div class="header-top">
            <div class="container">
                <div class="header-inner">
                    <div class="header-left">
                        <?php armania_header_message(); ?>
                    </div>
                    <div class="header-right">
                        <?php armania_header_submenu( 'header_topmenu' ); ?>
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
                    <div class="other-control">
                        <?php armania_header_search(); ?>
                        <?php armania_header_submenu( 'header_submenu', 1 ); ?>
                    </div>
                    <div class="inner-control">
                        <?php
                        if ( function_exists( 'armania_header_wishlist' ) ) armania_header_wishlist();
                        if ( function_exists( 'armania_header_mini_cart' ) ) armania_header_mini_cart();
                        armania_header_user();
                        armania_header_menu_bar();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bot">
        <div class="container">
            <div class="header-inner">
                <?php armania_header_vertical_menu(); ?>
                <div class="header-center megamenu-wrap">
                    <div class="box-header-nav">
                        <?php armania_header_primary_menu(); ?>
                    </div>
                    <?php armania_header_phone(); ?>
                </div>
                <div class="header-space"></div>
            </div>
        </div>
    </div>
</header>