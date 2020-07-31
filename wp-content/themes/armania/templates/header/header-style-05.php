<?php
/**
 * Name:  Carparts
 **/
?>
<header id="header" class="header style-05">
    <div class="container">
        <div class="header-wrap megamenu-wrap">
            <div class="header-logo">
                <?php armania_get_logo(); ?>
            </div>
            <div class="header-content">
                <div class="header-top">
                    <div class="header-inner">
                        <div class="header-left">
                            <?php armania_header_message(); ?>
                        </div>
                        <div class="header-right">
                            <?php armania_header_search_popup(); ?>
                            <?php armania_header_submenu( 'header_topmenu' ); ?>
                            <?php armania_header_user(); ?>
                        </div>
                    </div>
                </div>
                <div class="header-mid">
                    <div class="header-inner">
                        <div class="box-header-nav">
                            <?php armania_header_primary_menu(); ?>
                        </div>
                        <div class="header-control">
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
        </div>
    </div>
</header>