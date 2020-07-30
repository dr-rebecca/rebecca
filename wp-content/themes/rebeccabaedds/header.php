<!DOCTYPE html>
<html <?php language_attributes() ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php the_title() ?></title>
    <link rel="stylesheet" href="<?php echo THEME_URL ?>/dist/vendor.css">
    <link rel="stylesheet" href="<?php echo THEME_URL ?>/dist/theme.css">
    <link rel="stylesheet" href="<?php echo THEME_URL ?>/dist/vendors.min.css">
    <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
<?php wp_body_open() ?>
<header>
    <nav>
        <div class="container nav_header">
            <div class="row">
                <div class="nav_header__left col-xl-6 col-lg-6 col-md-6 col-6">
                    <a href="<?php echo get_home_url() ?>"> <img src="<?php echo THEME_URL ?>/src/images/Logo.svg"
                                                                 alt="Logo"></a>
                </div>
                <div class="nav_header__right col-xl-6 col-lg-6 col-md-6 col-6">
                    <a class="display_mobile_none nav_header__right__button  button button--primary" href="/contact">BOOK NOW</a>
                    <a data-fancybox data-src="#hidden-content" href="javascript:;"><img
                                src="<?php echo THEME_URL ?>/src/images/Hambugermenu.svg" alt="Logo"></a>
                </div>
            </div>
        </div>
    </nav>
    <div class="modal-menu" style="display: none;" id="hidden-content">
        <div class="row">
            <div class="col-xl-4 col-lg-4 modal-menu__left">
                <a class="d-lg-none" href="<?php echo get_home_url() ?>"> <img
                            src="<?php echo THEME_URL ?>/src/images/Logo_mobile.svg" alt="Logo"></a>
                <a class="display_mobile_none" href="<?php echo get_home_url() ?>"><img
                            src="<?php echo THEME_URL ?>/src/images/Logo_menu_2.svg" alt="Logo menu"></a>
                   <nav class="d-none d-md-flex"> <?php
                    wp_nav_menu(array(
                            'depth'=> 3,
                        'menu_id'=> "",
                        'menu' => "",
                        'menu_class' => "menu",
                        'container' => "div",
                        'container_id' => "",
                        'fallback_cb' => false,
                        'theme_location' => "all",
                    ));
                    ?></nav>
            </div>
            <div class="col-xl-4 col-lg-4 modal-menu__middle">
                <div class="menu-mobile d-block d-lg-none">
                    <?php
                    wp_nav_menu(array(
                        'depth'=> 3,
                        'menu_id'=> "",
                        'menu' => "",
                        'menu_class' => "menu",
                        'container' => "div",
                        'container_id' => "",
                        'fallback_cb' => false,
                        'theme_location' => "all",
                    ));
                    ?></div>
            </div>
            <div class="col-xl-4 col-lg-4 modal-menu__right">
                <div class="modal-menu__right__info">
                    <h2><a href="tel:973381177"> (973) 838 - 1177</a></h2>
                    <p><a href="https://goo.gl/maps/9XyAtb21RWx1fE3e8"> 1375 State Route 23, Butler, NJ 07405</a></p>
                </div>
                <div class="modal-menu__right__social">
                    <div class="sidebar" id="header">
                        <?php dynamic_sidebar('sidebar');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>