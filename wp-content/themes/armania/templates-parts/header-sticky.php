
<?php
$sticky_menu = armania_get_option( 'sticky_menu' );
if ( $sticky_menu == 1 ) : ?>
    <div class="header-sticky">
        <div class="container">
            <div class="header-inner megamenu-wrap">
                <?php armania_header_vertical_menu(); ?>
                <div class="box-header-nav">
                    <?php armania_header_primary_menu(); ?>
                    <?php armania_header_primary_menu( 'horizontal', true ); ?>
                </div>
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
<?php endif;