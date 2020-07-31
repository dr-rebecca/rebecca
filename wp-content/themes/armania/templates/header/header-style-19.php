<?php
/**
 * Name:  Kids
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
$all_socials    = armania_get_option( 'user_all_social' );
?>
<header id="header" class="header style-19">
    <?php if ( !empty( $header_message ) || !empty( $header_topmenu ) || !empty( $all_socials ) ) : ?>
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
            <div class="header-wrap">
                <div class="megamenu-wrap">
                    <div class="header-inner">
                        <div class="header-left">
                            <?php armania_header_search_popup(); ?>
                            <div class="box-header-nav">
                                <?php armania_header_primary_menu(); ?>
                            </div>
                        </div>
                        <?php armania_get_logo(); ?>
                        <div class="header-right">
                            <div class="box-header-nav">
                                <?php armania_header_primary_menu( 'horizontal', true ); ?>
                            </div>
                            <div class="header-control">
                                <div class="inner-control">
                                    <?php
                                    armania_header_user();
                                    armania_header_search_popup();
                                    if ( function_exists( 'armania_header_wishlist' ) ) armania_header_wishlist();
                                    if ( function_exists( 'armania_header_mini_cart' ) ) armania_header_mini_cart();
                                    armania_header_menu_bar();
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>