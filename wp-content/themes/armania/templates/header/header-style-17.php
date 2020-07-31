<?php
/**
 * Name:  Plant
 **/
?>
<header id="header" class="header style-17 style-17_1">
    <div class="header-top">
        <div class="container">
            <div class="header-inner">
                <div class="header-left">
                    <?php armania_header_message(); ?>
                </div>
                <div class="header-right">
                    <?php armania_header_submenu( 'header_topmenu' ); ?>
                    <?php armania_header_user(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="header-mid">
        <div class="container">
            <div class="header-inner">
                <?php armania_header_phone(); ?>
                <?php armania_get_logo(); ?>
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
    <div class="header-bot">
        <div class="container">
            <div class="header-inner megamenu-wrap">
                <div class="box-header-nav">
                    <?php armania_header_primary_menu(); ?>
                </div>
            </div>
        </div>
    </div>
</header>