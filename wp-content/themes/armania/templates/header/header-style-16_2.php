<?php
/**
 * Name: Tools 02
 **/
?>
<header id="header" class="header style-16 style-16_2">
    <div class="header-top">
        <div class="container">
            <div class="header-inner">
                <div class="header-left">
                    <?php armania_header_message(); ?>
                    <?php armania_header_submenu( 'header_topmenu' ); ?>
                </div>
                <div class="header-right">
                    <?php armania_header_user(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="header-mid">
        <div class="container">
            <div class="header-inner megamenu-wrap">
                <?php armania_get_logo(); ?>
                <div class="box-header-nav">
                    <?php armania_header_primary_menu(); ?>
                </div>
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
