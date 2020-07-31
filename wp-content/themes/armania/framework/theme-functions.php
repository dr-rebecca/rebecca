<?php if (!defined('ABSPATH')) {
    die;
} // Cannot access pages directly.

add_filter('ovic_menu_toggle_mobile', '__return_false');
add_filter('ovic_menu_locations_mobile', 'armania_extend_mobile_menu', 10, 2);
add_filter('ovic_override_footer_template', 'armania_footer_template');
add_filter('elementor/fonts/additional_fonts', 'armania_elementor_fonts');
add_filter('ovic_field_typography_customwebfonts', 'armania_customwebfonts');
add_filter('elementor/icons_manager/native', 'armania_elementor_icons');
add_action('import_sample_data_after_install_sample_data', 'armania_after_install_sample_data');
add_action('armania_before_mobile_header', 'armania_mobile_menu_top', 10);
add_action('armania_after_mobile_header', 'armania_mobile_menu_bottom', 10);
add_action('dynamic_sidebar_before', 'armania_dynamic_sidebar_before', 10, 2);
add_action('dynamic_sidebar_after', 'armania_dynamic_sidebar_after', 10, 2);
/**
 *
 * dynamic sidebar
 */
if (!function_exists('armania_dynamic_sidebar_before')) {
    function armania_dynamic_sidebar_before()
    {
        if (armania_is_mobile()) :?>
            <div class="sidebar-head">
                <span class="title"><?php echo esc_html__('Sidebar', 'armania'); ?></span>
                <a href="#" class="close-sidebar"></a>
            </div>
        <?php endif;
        echo '<div class="sidebar-inner">';
    }
}
if (!function_exists('armania_dynamic_sidebar_after')) {
    function armania_dynamic_sidebar_after()
    {
        echo '</div>';
    }
}
/**
 *
 * TEMPLATE HEADER
 */
if (!function_exists('armania_header_template')) {
    function armania_header_template()
    {
        if (armania_is_mobile()) {
            armania_mobile_template();
        } else {
            get_template_part('templates-parts/header', 'banner');
            get_template_part('templates/header/header', armania_get_header());
            get_template_part('templates-parts/header', 'sticky');
            if (!class_exists('Ovic_Megamenu_Settings')) {
                armania_mobile_menu('primary');
            }
        }
    }
}
if (!function_exists('armania_footer_template')) {
    function armania_footer_template()
    {
        return armania_get_footer();
    }
}
if (!function_exists('armania_mobile_template')) {
    function armania_mobile_template()
    {
        $layout       = armania_get_option('mobile_layout', 'style-01');
        $logo_link    = apply_filters('ovic_get_link_logo', home_url('/'));
        $account_link = wp_login_url();
        if (class_exists('WooCommerce')) {
            $account_link = get_permalink(get_option('woocommerce_myaccount_page_id'));
        }
        $page_layout   = armania_page_layout();
        $page_template = get_page_template_slug();
        $account_link  = apply_filters('ovic_shortcode_vc_link', $account_link);
        $classes       = array(
            'header',
            'header-mobile',
            armania_get_header(),
            'mobile-'.$layout
        );
        if (armania_get_header() == 'style-09_2') {
            $classes[] = ' style-09';
        }
        if (armania_get_header() == 'style-16') {
            $classes[] = ' style-16_1';
        }
        if (armania_get_header() == 'style-16_2' || armania_get_header() == 'style-16_3') {
            $classes[] = ' style-16';
        }
        ?>
        <div class="<?php echo esc_attr(implode(' ', $classes)); ?>">
            <?php
            do_action('armania_before_mobile_header');

            armania_get_template(
                "templates/mobile/mobile-{$layout}.php",
                array(
                    'layout'        => $layout,
                    'account_link'  => $account_link,
                    'logo_link'     => $logo_link,
                    'page_layout'   => $page_layout,
                    'page_template' => $page_template,
                )
            );

            do_action('armania_after_mobile_header');
            ?>
        </div>
        <?php
    }
}
if (!function_exists('armania_mobile_menu_top')) {
    function armania_mobile_menu_top()
    {
        $menu_top = armania_get_option('mobile_menu_top');
        if (!empty($menu_top)) {
            $term = get_term_by('slug', $menu_top, 'nav_menu');
            if (!is_wp_error($term) && !empty($term)) {
                echo '<div class="mobile-submenu header-top">';
                wp_nav_menu(array(
                        'menu'            => $menu_top,
                        'theme_location'  => $menu_top,
                        'depth'           => 2,
                        'container'       => '',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => 'armania-nav header-submenu top-menu',
                    )
                );
                echo '</div>';
            }
        }
    }
}
if (!function_exists('armania_mobile_menu_bottom')) {
    function armania_mobile_menu_bottom()
    {
        $menu_bottom = armania_get_option('mobile_menu_bottom');
        if (!empty($menu_bottom)) {
            $term = get_term_by('slug', $menu_bottom, 'nav_menu');
            if (!is_wp_error($term) && !empty($term)) {
                echo '<div class="mobile-submenu header-bottom">';
                wp_nav_menu(array(
                        'menu'            => $menu_bottom,
                        'theme_location'  => $menu_bottom,
                        'depth'           => 2,
                        'container'       => '',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => 'armania-nav header-submenu bottom-menu',
                    )
                );
                echo '</div>';
            }
        }
    }
}
if (!function_exists('armania_elementor_fonts')) {
    function armania_elementor_fonts($additional_fonts)
    {
        return array(
            'Brushline'    => 'system',
            'Caros'        => 'system',
            'Caros Medium' => 'system',
            'Caros Bold'   => 'system',
            'FloodStd'     => 'system',
            'Birdrockers'  => 'system',
            'Reingttoon'   => 'system',
            'Spartan'      => 'googlefonts',
            'Jost'         => 'googlefonts',
        );
    }
}
if (!function_exists('armania_customwebfonts')) {
    function armania_customwebfonts($additional_fonts)
    {
        $additional_fonts[] = 'Brushline';
        $additional_fonts[] = 'Caros';
        $additional_fonts[] = 'Caros Medium';
        $additional_fonts[] = 'Caros Bold';
        $additional_fonts[] = 'FloodStd';
        $additional_fonts[] = 'Birdrockers';
        $additional_fonts[] = 'Reingttoon';

        return $additional_fonts;
    }
}
if (!function_exists('armania_extend_mobile_menu')) {
    function armania_extend_mobile_menu($menus, $locations)
    {
        $mobile_menu = armania_get_option('mobile_menu');

        if (armania_is_mobile() && !empty($mobile_menu)) {
            return array($mobile_menu);
        }

        $vertical_menu  = armania_theme_option_meta(
            '_custom_metabox_theme_options',
            'header_vertical',
            'metabox_header_vertical'
        );
        $primary_second = armania_theme_option_meta(
            '_custom_metabox_theme_options',
            null,
            'metabox_primary_menu_second'
        );
        $primary_menu   = armania_theme_option_meta(
            '_custom_metabox_theme_options',
            null,
            'metabox_primary_menu'
        );
        if (!empty($primary_menu)) {
            $term = get_term_by('slug', $primary_menu, 'nav_menu');
            if (!is_wp_error($term) && !empty($term)) {
                $menus = array($primary_menu);
            }
        }
        if (empty($menus) && !empty($locations['primary'])) {
            $mobile_menu = wp_get_nav_menu_object($locations['primary']);
            $menus[]     = $mobile_menu->slug;
        }
        if (!empty($vertical_menu)) {
            $menus[] = $vertical_menu;
        }
        if (!empty($primary_second)) {
            $menus[] = $primary_second;
        }

        return $menus;
    }
}
/**
 *
 * PRIMARY MENU
 */
if (!function_exists('armania_header_primary_menu')) {
    function armania_header_primary_menu($layout = 'horizontal', $second = false)
    {
        $menu         = 'primary';
        $primary_menu = armania_theme_option_meta(
            '_custom_metabox_theme_options',
            null,
            "metabox_primary_menu"
        );
        if ($second == true) {
            $menu         = 'primary_second';
            $primary_menu = armania_theme_option_meta(
                '_custom_metabox_theme_options',
                null,
                "metabox_primary_menu_second"
            );
        }
        if (!empty($primary_menu)) {
            $term = get_term_by('slug', $primary_menu, 'nav_menu');
            if (!is_wp_error($term) && !empty($term)) {
                wp_nav_menu(array(
                        'menu'            => $primary_menu,
                        'theme_location'  => $primary_menu,
                        'depth'           => 3,
                        'container'       => '',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => 'armania-nav main-menu '.$layout.'-menu',
                        'megamenu_layout' => $layout,
                    )
                );
            }
        } else {
            if (has_nav_menu($menu)) {
                wp_nav_menu(array(
                        'menu'            => $menu,
                        'theme_location'  => $menu,
                        'depth'           => 3,
                        'container'       => '',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => 'armania-nav main-menu '.$layout.'-menu',
                        'megamenu_layout' => $layout,
                    )
                );
            }
        }
    }
}
if (!function_exists('armania_header_menu_bar')) {
    function armania_header_menu_bar()
    {
        ?>
        <div class="block-menu-bar settings-block">
            <a href="#" class="settings-toggle">
                <span class="icon main-icon-menu-2"></span>
                <span class="text"><?php echo esc_html__('Settings', 'armania'); ?></span>
            </a>
        </div>
        <div class="block-menu-bar mobile-block">
            <a href="#" class="menu-toggle">
                <span class="icon main-icon-menu-1"></span>
                <span class="text"><?php echo esc_html__('Menu', 'armania'); ?></span>
            </a>
        </div>
        <?php
    }
}
/**
 *
 * SETTINGS MENU
 */
if (!function_exists('armania_header_settings_menu')) {
    function armania_header_settings_menu()
    {
        get_template_part('templates-parts/header', 'settings');
    }
}
/**
 *
 * VERTICAL MENU
 */
if (!function_exists('armania_header_vertical_menu')) {
    function armania_header_vertical_menu()
    {
        get_template_part('templates-parts/header', 'vertical');
    }
}
/**
 *
 * HEADER SUB MENU
 */
if (!function_exists('armania_header_submenu')) {
    function armania_header_submenu($menu_location, $depth = 2)
    {
        $header_menu = armania_theme_option_meta(
            '_custom_metabox_theme_options',
            $menu_location,
            "metabox_{$menu_location}"
        );
        if (!empty($header_menu)) {
            do_action("armania_before_header_menu_{$header_menu}", $header_menu);
            wp_nav_menu(array(
                    'menu'           => $header_menu,
                    'theme_location' => $header_menu,
                    'link_before'    => '<span class="text">',
                    'link_after'     => '</span>',
                    'depth'          => $depth,
                    'menu_class'     => 'ovic-menu header-submenu '.$menu_location,
                )
            );
            do_action("armania_after_header_menu_{$header_menu}", $header_menu);
        }
    }
}
/**
 *
 * HEADER SEARCH
 */
if (!function_exists('armania_header_banner')) {
    function armania_header_banner()
    {
        get_template_part('templates-parts/header', 'banner');
    }
}
/**
 *
 * HEADER MESSAGE
 */
if (!function_exists('armania_header_message')) {
    function armania_header_message()
    {
        get_template_part('templates-parts/header', 'message');
    }
}
/**
 *
 * HEADER PHONE
 */
if (!function_exists('armania_header_phone')) {
    function armania_header_phone()
    {
        get_template_part('templates-parts/header', 'phone');
    }
}
/**
 *
 * HEADER INFO
 */
if (!function_exists('armania_header_info')) {
    function armania_header_info()
    {
        get_template_part('templates-parts/header', 'info');
    }
}
/**
 *
 * HEADER SEARCH
 */
if (!function_exists('armania_header_social')) {
    function armania_header_social()
    {
        get_template_part('templates-parts/header', 'social');
    }
}
/**
 *
 * HEADER SEARCH
 */
if (!function_exists('armania_header_search')) {
    function armania_header_search($category = false, $text = '')
    {
        armania_get_template(
            "templates-parts/header-search.php",
            array(
                'category' => $category,
                'text'     => $text,
            )
        );
    }
}
/**
 *
 * HEADER SEARCH POPUP
 */
if (!function_exists('armania_header_search_popup')) {
    function armania_header_search_popup($category = false, $text = '')
    {
        ?>
        <div class="block-search armania-dropdown">
            <a data-armania="armania-dropdown" class="woo-search-link" href="#">
                <span class="icon">
                    <span class="main-icon-search"></span>
                </span>
                <span class="text"><?php echo esc_html__('Search', 'armania'); ?></span>
            </a>
            <?php
            armania_get_template(
                "templates-parts/header-search.php",
                array(
                    'category' => $category,
                    'text'     => $text,
                )
            );
            ?>
        </div>
        <?php
    }
}
/**
 *
 * HEADER ACCOUNT MENU
 */
if (!function_exists('armania_header_user')) {
    function armania_header_user($text = '')
    {
        armania_get_template(
            "templates-parts/header-user.php",
            array(
                'text' => $text,
            )
        );
    }
}
/**
 *
 * POPUP NEWSLETTER
 */
if (!function_exists('armania_popup_newsletter')) {
    function armania_popup_newsletter()
    {
        global $post;
        $enable = armania_get_option('enable_popup');
        if ($enable != 1) {
            return;
        }
        if (isset($_COOKIE['armania_disabled_popup_by_user']) && $_COOKIE['armania_disabled_popup_by_user'] == 'true') {
            return;
        }
        $page = (array) armania_get_option('popup_page');
        if (isset($post->ID) && is_array($page) && in_array($post->ID, $page) && $post->post_type == 'page') {
            wp_enqueue_style('magnific-popup');
            wp_enqueue_script('magnific-popup');
            get_template_part('templates-parts/popup', 'newsletter');
        }
    }
}
/**
 *
 * CUSTOM MOBILE MENU
 */
if (!function_exists('armania_before_mobile_menu')) {
    function armania_before_mobile_menu($menu_locations, $data_menus)
    {
        $avatar_id    = null;
        $class        = 'login';
        $login        = wp_login_url();
        $current_user = wp_get_current_user();
        $author_name  = esc_html__('Guest', 'armania');
        $login_text   = esc_html__('Login', 'armania');
        $author_email = esc_html__('Example@email.com', 'armania');
        if (class_exists('WooCommerce') && !empty(get_option('woocommerce_myaccount_page_id'))) {
            $login = get_permalink(get_option('woocommerce_myaccount_page_id'));
        }
        $logout = $login;
        if (is_user_logged_in()) {
            $class        = 'logout';
            $avatar_id    = $current_user->ID;
            $author_email = $current_user->user_email;
            $author_name  = $current_user->display_name;
            $login_text   = esc_html__('Logout', 'armania');
            $logout       = wp_logout_url();
        }
        $avatar         = get_avatar_url($avatar_id,
            array('size' => 60)
        );
        $background_url = get_theme_file_uri('assets/images/menu-mobile.jpg');
        if (function_exists('jetpack_photon_url')) {
            $background_url = jetpack_photon_url($background_url);
        }
        ?>
        <div class="head-menu-mobile" style="background-image: url(<?php echo esc_url($background_url); ?>)">
            <a href="<?php echo esc_url($logout) ?>"
               class="action <?php echo esc_attr($class); ?>">
                <span class="icon main-icon-enter"></span>
                <?php echo esc_html($login_text); ?>
            </a>
            <a href="<?php echo esc_url($login) ?>" class="avatar">
                <figure>
                    <img src="<?php echo esc_url($avatar) ?>"
                         alt="<?php echo esc_attr__('Avatar Mobile', 'armania') ?>">
                </figure>
            </a>
            <div class="author">
                <a href="<?php echo esc_url($login) ?>"
                   class="name">
                    <?php echo esc_html($author_name); ?>
                    <span class="email"><?php echo esc_html($author_email); ?></span>
                </a>
            </div>
        </div>
        <?php
    }

    add_action('ovic_before_html_mobile_menu', 'armania_before_mobile_menu', 10, 2);
}
if (!function_exists('armania_after_mobile_menu')) {
    function armania_after_mobile_menu($menu_locations, $data_menus)
    {
        $textarea = armania_theme_option_meta(
            '_custom_metabox_theme_options',
            'header_textarea',
            'metabox_header_textarea'
        );
        if (!empty($textarea)) : ?>
            <div class="footer-menu-mobile">
                <div class="header-text">
                    <p><?php echo preg_replace('/<\/?p\>/', "\n", $textarea); ?></p>
                </div>
            </div>
        <?php endif;
    }

    add_action('ovic_after_html_mobile_menu', 'armania_after_mobile_menu', 10, 2);
}
/**
 *
 * MEGAMENU ICON
 */
add_filter('ovic_field_icon_add_icons', 'armania_theme_options_icons');
if (!function_exists('armania_theme_options_icons')) {
    function armania_theme_options_icons($icon)
    {
        $icon[] = array(
            'title' => 'Armania Icon',
            'icons' => array(
                "main-icon-enter",
                "main-icon-close",
                "main-icon-back",
                "main-icon-next",
                "main-icon-menu",
                "main-icon-search",
                "main-icon-cart",
                "main-icon-heart",
                "main-icon-user",
                "main-icon-scrolling",
                "main-icon-airpods",
                "main-icon-camera",
                "main-icon-teapot",
                "main-icon-console",
                "main-icon-tablet",
                "main-icon-necklace",
                "main-icon-fashion",
                "main-icon-router",
                "main-icon-ultrasound",
                "main-icon-video-card",
                "main-icon-pot",
                "main-icon-sneaker",
                "main-icon-phone-call",
                "main-icon-hot-deal",
                "main-icon-shirt",
                "main-icon-tv",
                "main-icon-washing-machine",
                "main-icon-tractor",
                "main-icon-cooking",
                "main-icon-game-boy",
                "main-icon-headphones",
                "main-icon-stopwatch",
                "main-icon-car",
                "main-icon-refreshing",
                "main-icon-card",
                "main-icon-circular-shape",
                "main-icon-support",
                "main-icon-mail",
                "main-icon-eye",
                "main-icon-exchange",
                "main-icon-phone",
                "main-icon-menu-1",
                "main-icon-call",
                "main-icon-email",
                "main-icon-location",
                "main-icon-phone_home",
                "main-icon-ele_bag_alt",
                "main-icon-ele_heart_alt",
                "main-icon-ele_search2",
                "main-icon-icon_pin_alt",
                "main-icon-phone-call1",
                "main-icon-arrow_left",
                "main-icon-arrow_right",
                "main-icon-left-arrow",
                "main-icon-right-arrow",
                "main-icon-plane-paper",
                "main-icon-newsletter",
                "main-icon-left-arrow-2",
                "main-icon-right-arrow-2",
                "main-icon-truck",
                "main-icon-refresh",
                "main-icon-payment",
                "main-icon-gift",
                "main-icon-headphones1",
                "main-icon-envelope",
                "main-icon-globe",
                "main-icon-plane-paper-1",
                "main-icon-return",
                "main-icon-wallet",
                "main-icon-support1",
                "main-icon-menu-2",
                "main-icon-left",
                "main-icon-right",
                "main-icon-support2",
                "main-icon-headphones",
                "main-icon-support2",
                "main-icon-headphones2",
                "main-icon-return2",
                "main-icon-archive",
                "main-icon-user2",
                "main-icon-clock2",
                "main-icon-bag-full",
                "main-icon-heart-full",
                "main-icon-apple",
                "main-icon-broccoli",
                "main-icon-steak",
                "main-icon-cheese",
                "main-icon-chicken",
                "main-icon-fish",
                "main-icon-dining-table",
                "main-icon-table-lamp",
                "main-icon-ceiling-lamp",
                "main-icon-bedroom",
                "main-icon-bathroom",
                "main-icon-kitchen",
                "main-icon-house",
            ),
        );

        return $icon;
    }
}
/**
 *
 * MEGAMENU ICON
 */
add_filter('ovic_menu_icons_setting', 'armania_megamenu_options_icons');
if (!function_exists('armania_megamenu_options_icons')) {
    function armania_megamenu_options_icons()
    {
        return array(
            array("main-icon-enter" => "Main icon enter"),
            array("main-icon-close" => "Main icon close"),
            array("main-icon-back" => "Main icon back"),
            array("main-icon-next" => "Main icon next"),
            array("main-icon-menu" => "Main icon menu"),
            array("main-icon-search" => "Main icon search"),
            array("main-icon-cart" => "Main icon cart"),
            array("main-icon-heart" => "Main icon heart"),
            array("main-icon-user" => "Main icon user"),
            array("main-icon-scrolling" => "Main icon scrolling"),
            array("main-icon-airpods" => "Main icon airpods"),
            array("main-icon-camera" => "Main icon camera"),
            array("main-icon-teapot" => "Main icon teapot"),
            array("main-icon-console" => "Main icon console"),
            array("main-icon-tablet" => "Main icon tablet"),
            array("main-icon-necklace" => "Main icon necklace"),
            array("main-icon-fashion" => "Main icon fashion"),
            array("main-icon-router" => "Main icon router"),
            array("main-icon-ultrasound" => "Main icon ultrasound"),
            array("main-icon-video-card" => "Main icon video card"),
            array("main-icon-pot" => "Main icon pot"),
            array("main-icon-sneaker" => "Main icon sneaker"),
            array("main-icon-phone-call" => "Main icon phone call"),
            array("main-icon-hot-deal" => "Main icon hot deal"),
            array("main-icon-shirt" => "Main icon shirt"),
            array("main-icon-tv" => "Main icon tv"),
            array("main-icon-washing-machine" => "Main icon washing machine"),
            array("main-icon-tractor" => "Main icon tractor"),
            array("main-icon-cooking" => "Main icon cooking"),
            array("main-icon-game-boy" => "Main icon game boy"),
            array("main-icon-headphones" => "Main icon headphones"),
            array("main-icon-stopwatch" => "Main icon stopwatch"),
            array("main-icon-car" => "Main icon car"),
            array("main-icon-refreshing" => "Main icon refreshing"),
            array("main-icon-card" => "Main icon card"),
            array("main-icon-circular-shape" => "Main icon circular shape"),
            array("main-icon-support" => "Main icon support"),
            array("main-icon-mail" => "Main icon mail"),
            array("main-icon-eye" => "Main icon eye"),
            array("main-icon-exchange" => "Main icon exchange"),
            array("main-icon-phone" => "Main icon phone"),
            array("main-icon-menu-1" => "Main icon menu 1"),
            array("main-icon-call" => "Main icon call"),
            array("main-icon-email" => "Main icon email"),
            array("main-icon-location" => "Main icon location"),
            array("main-icon-phone_home" => "Main icon phone home"),
            array("main-icon-ele_bag_alt" => "Main icon ele bag alt"),
            array("main-icon-ele_heart_alt" => "Main icon ele heart alt"),
            array("main-icon-ele_search2" => "Main icon ele search2"),
            array("main-icon-icon_pin_alt" => "Main icon icon pin alt"),
            array("main-icon-phone-call1" => "Main icon phone call1"),
            array("main-icon-arrow_left" => "Main icon arrow left"),
            array("main-icon-arrow_right" => "Main icon arrow right"),
            array("main-icon-left-arrow" => "Main icon left arrow"),
            array("main-icon-right-arrow" => "Main icon right arrow"),
            array("main-icon-plane-paper" => "Main icon plane paper"),
            array("main-icon-newsletter" => "Main icon newsletter"),
            array("main-icon-left-arrow-2" => "Main icon left arrow 2"),
            array("main-icon-right-arrow-2" => "Main icon right arrow 2"),
            array("main-icon-truck" => "Main icon truck"),
            array("main-icon-refresh" => "Main icon refresh"),
            array("main-icon-payment" => "Main icon payment"),
            array("main-icon-gift" => "Main icon gift"),
            array("main-icon-headphones1" => "Main icon headphones1"),
            array("main-icon-envelope" => "Main icon envelope"),
            array("main-icon-globe" => "Main icon globe"),
            array("main-icon-plane-paper-1" => "Main icon plane paper 1"),
            array("main-icon-return" => "Main icon return"),
            array("main-icon-wallet" => "Main icon wallet"),
            array("main-icon-support1" => "Main icon support1"),
            array("main-icon-menu-2" => "Main icon menu 2"),
            array("main-icon-left" => "Main icon left"),
            array("main-icon-right" => "Main icon right"),
            array("main-icon-support2" => "Main icon support2"),
            array("main-icon-headphones2" => "Main Icon headphones2"),
            array("main-icon-return2" => "Main icon return2"),
            array("main-icon-archive" => "Main icon archive"),
            array("main-icon-user2" => "Main icon user2"),
            array("main-icon-clock2" => "Main icon clock2"),
            array("main-icon-bag-full" => "Main icon bag full"),
            array("main-icon-heart-full" => "Main icon heart full"),
            array("main-icon-apple" => "Main icon apple"),
            array("main-icon-broccoli" => "Main icon broccoli"),
            array("main-icon-steak" => "Main icon steak"),
            array("main-icon-cheese" => "Main icon cheese"),
            array("main-icon-chicken" => "Main icon chicken"),
            array("main-icon-fish" => "Main icon fish"),
            array("main-icon-dining-table" => "Main icon dining table"),
            array("main-icon-table-lamp" => "Main icon table lamp"),
            array("main-icon-ceiling-lamp" => "Main icon ceiling lamp"),
            array("main-icon-bedroom" => "Main icon bedroom"),
            array("main-icon-bathroom" => "Main icon bathroom"),
            array("main-icon-kitchen" => "Main icon kitchen"),
            array("main-icon-house" => "Main icon house"),
        );
    }
}
if (!function_exists('armania_elementor_icons')) {
    function armania_elementor_icons($tabs)
    {
        $tabs['main-icon'] = [
            'name'          => 'main-icon',
            'label'         => esc_html__('Font Theme', 'armania'),
            'url'           => get_theme_file_uri('/assets/vendor/main-icon/style.min.css'),
            'enqueue'       => [],
            'prefix'        => '',
            'displayPrefix' => 'far',
            'labelIcon'     => 'fab fa-font-awesome-alt',
            'ver'           => '1.0.0',
            'fetchJson'     => get_theme_file_uri('/assets/js/icon.json'),
            'native'        => true,
        ];

        return $tabs;
    }
}
if (!function_exists('armania_after_install_sample_data')) {
    function armania_after_install_sample_data()
    {
        $cpt_support   = get_option('elementor_cpt_support', ['page', 'post']);
        $cpt_support[] = 'ovic_menu';
        $cpt_support[] = 'ovic_footer';

        update_option('elementor_cpt_support', $cpt_support);
        update_option('elementor_disable_color_schemes', 'yes');
        update_option('elementor_disable_typography_schemes', 'yes');

        if (class_exists('Elementor\Plugin')) {
            Elementor\Plugin::$instance->files_manager->clear_cache();
        }
    }
}