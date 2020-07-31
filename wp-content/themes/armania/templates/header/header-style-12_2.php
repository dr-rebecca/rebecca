<?php
/**
 * Name: Organic 02
 **/
?>
<header id="header" class="header style-12_2">
    <div class="header-mid">
        <div class="container">
            <div class="header-inner">
                <div class="header-left">
                    <?php armania_header_message(); ?>
                    <?php armania_header_submenu( 'header_topmenu' ); ?>
                    <?php armania_header_search_popup(); ?>
                </div>
                <?php armania_get_logo(); ?>
                <div class="header-control">
                    <div class="inner-control">
                        <?php
                        armania_header_user();
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

