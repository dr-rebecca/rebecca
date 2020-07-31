<?php
/**
 * Name:  Furniture 02
 **/
?>
<header id="header" class="header style-08_2">
    <div class="header-mid">
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
</header>
<?php
armania_header_settings_menu();