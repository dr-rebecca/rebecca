<?php
/**
 * Name: Organic 03
 **/
?>
<?php
$header_message = armania_theme_option_meta(
    '_custom_metabox_theme_options',
    'header_message',
    'metabox_header_message'
);
?>
<header id="header" class="header style-12_3">
    <?php if ( !empty( $header_message ) ) : ?>
        <div class="header-top">
            <div class="container">
                <div class="header-inner">
                    <?php armania_header_message(); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="header-mid">
        <div class="container">
            <div class="header-inner megamenu-wrap">
                <div class="box-header-nav">
                    <?php armania_header_primary_menu(); ?>
                </div>
                <?php armania_get_logo(); ?>
                <div class="header-right">
                    <?php armania_header_submenu( 'header_topmenu' ); ?>
                    <?php armania_header_user(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bot">
        <div class="container">
            <div class="header-inner megamenu-wrap">
                <?php armania_header_submenu( 'header_submenu' ); ?>
                <div class="header-control">
                    <div class="inner-control">
                        <?php
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
</header>

