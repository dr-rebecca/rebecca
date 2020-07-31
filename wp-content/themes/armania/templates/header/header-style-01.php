<?php
/**
 * Name:  Market
 **/
?>
<header id="header" class="header style-01">
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
            <div class="header-inner megamenu-wrap">
	            <?php armania_get_logo(); ?>
                <div class="header-control">
                    <?php if ( has_nav_menu( 'primary' ) ) : ?>
                        <div class="header-vertical">
                            <div class="box-nav-vertical armania-dropdown">
                                <a href="#" data-armania="armania-dropdown" class="block-title">
                                    <span class="icon main-icon-menu"></span>
                                    <span class="text"><?php echo esc_html__( 'Menu', 'armania' ); ?></span>
                                </a>
                                <div class="block-content sub-menu">
                                    <?php armania_header_primary_menu( 'vertical'); ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php armania_header_search(); ?>
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
            <div class="header-inner">
                <?php armania_header_submenu( 'header_submenu', 1 ); ?>
            </div>
        </div>
    </div>
</header>