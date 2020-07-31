<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
if (!defined('WCMP_UNLOAD_BOOTSTRAP_LIB')) {
    define('WCMP_UNLOAD_BOOTSTRAP_LIB', true);
}
// Theme version.
if (!defined('ARMANIA')) {
    define('ARMANIA', wp_get_theme()->get('Version'));
}
if (!function_exists('armania_theme_setup')) {
    function armania_theme_setup()
    {
        // Set the default content width.
        $GLOBALS['content_width'] = 1400;
        /*
         * Make theme available for translation.
         * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/blank
         * If you're building a theme based on Twenty Seventeen, use a find and replace
         * to change 'armania' to the name of your theme in all the template files.
         */
        load_theme_textdomain('armania', get_template_directory().'/languages');
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');
        add_theme_support('custom-background');
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'widgets',
                'script',
                'style',
            )
        );
        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus(array(
                'primary'        => esc_html__('Primary Menu', 'armania'),
                'primary_second' => esc_html__('Primary Menu Second', 'armania'),
            )
        );
        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');
        // Support WooCommerce
        add_theme_support('woocommerce', apply_filters('armania_woocommerce_args', array(
                'product_grid' => array(
                    'default_columns' => 3,
                    'default_rows'    => 4,
                    'min_columns'     => 2,
                    'max_columns'     => 6,
                    'min_rows'        => 1,
                ),
            )
        ));
        if (armania_get_option('disable_zoom') != 1) {
            add_theme_support('wc-product-gallery-zoom');
        }
        if (armania_get_option('disable_lightbox') != 1) {
            add_theme_support('wc-product-gallery-lightbox');
        }
        add_theme_support('wc-product-gallery-slider');

        // Add support for full and wide align images.
        add_theme_support('align-wide');

        // Add support for responsive embeds.
        add_theme_support('responsive-embeds');

        add_filter('script_loader_tag', array('Armania_Assets', 'filter_script_loader_tag'), 10, 2);
    }

    add_action('after_setup_theme', 'armania_theme_setup');
}
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
if (!function_exists('armania_widgets_init')) {
    function armania_widgets_init()
    {
        $sidebars      = array(
            'widget-area'         => array(
                'name'          => esc_html__('Widget Area', 'armania'),
                'id'            => 'widget-area',
                'description'   => esc_html__('Add widgets here to appear in your blog sidebar.', 'armania'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '<span class="arrow"></span></h2>',
            ),
            'post-widget-area'    => array(
                'name'          => esc_html__('Post Widget Area', 'armania'),
                'id'            => 'post-widget-area',
                'description'   => esc_html__('Add widgets here to appear in your post sidebar.', 'armania'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '<span class="arrow"></span></h2>',
            ),
            'shop-widget-area'    => array(
                'name'          => esc_html__('Shop Widget Area', 'armania'),
                'id'            => 'shop-widget-area',
                'description'   => esc_html__('Add widgets here to appear in your shop sidebar.', 'armania'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '<span class="arrow"></span></h2>',
            ),
            'product-widget-area' => array(
                'name'          => esc_html__('Product Widget Area', 'armania'),
                'id'            => 'product-widget-area',
                'description'   => esc_html__('Add widgets here to appear in your Product sidebar.', 'armania'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '<span class="arrow"></span></h2>',
            ),
        );
        $multi_sidebar = armania_get_option('multi_sidebar');
        if (is_array($multi_sidebar) && !empty($multi_sidebar)) {
            foreach ($multi_sidebar as $sidebar) {
                if (!empty($sidebar)) {
                    $sidebar_id            = 'custom-sidebar-'.sanitize_key($sidebar['add_sidebar']);
                    $sidebars[$sidebar_id] = array(
                        'name'          => $sidebar['add_sidebar'],
                        'id'            => $sidebar_id,
                        'before_widget' => '<div id="%1$s" class="widget %2$s">',
                        'after_widget'  => '</div>',
                        'before_title'  => '<h2 class="widget-title">',
                        'after_title'   => '<span class="arrow"></span></h2>',
                    );
                }
            }
        }
        foreach ($sidebars as $sidebar) {
            register_sidebar($sidebar);
        }
    }

    add_action('widgets_init', 'armania_widgets_init');
}
/**
 * Custom Comment field.
 */
if (!function_exists('armania_comment_field_to_bottom')) {
    function armania_comment_field_to_bottom($fields)
    {
        if (class_exists('WooCommerce') && is_product()) {
            return $fields;
        }
        $comment_field = $fields['comment'];
        unset($fields['comment']);
        $fields['comment'] = $comment_field;

        return $fields;
    }

    //add_filter( 'comment_form_fields', 'armania_comment_field_to_bottom' );
}
/**
 * Custom Body Class.
 */
if (!function_exists('armania_body_class')) {
    function armania_body_class($classes)
    {
        $theme_version       = wp_get_theme()->get('Version');
        $page_main_container = armania_theme_option_meta('_custom_page_side_options', null, 'page_main_container', '');
        $main_skin           = armania_theme_option_meta(
            '_custom_metabox_theme_options',
            'main_skin',
            'metabox_main_skin',
            'furniture'
        );
        $classes[]           = "skin-{$main_skin}";
        if (armania_is_mobile()) {
            $layout    = armania_get_option('mobile_layout', 'style-01');
            $classes[] = "armania-enable-mobile";
            $classes[] = "armania-mobile-{$layout}";
        }
        $classes[] = $page_main_container;
        $classes[] = "armania-v{$theme_version}";
        if (class_exists('WooCommerce')) {
            $classes[] = "has-mini-cart";
        }
        if (class_exists('YITH_WCWL') && !empty(YITH_WCWL()->get_wishlist_url())) {
            $classes[] = "has-wishlist";
        }

        return $classes;
    }

    add_filter('body_class', 'armania_body_class');
}
/**
 * Hide title.
 */
if (!function_exists('armania_check_hide_title')) {
    /**
     * Check hide title.
     *
     * @param  bool  $val  default value.
     *
     * @return bool
     */
    function armania_check_hide_title($val)
    {
        if (defined('ELEMENTOR_VERSION')) {
            $current_doc = Elementor\Plugin::instance()->documents->get(get_the_ID());
            if ($current_doc && 'yes' === $current_doc->get_settings('hide_title')) {
                $val = false;
            }
        }

        return $val;
    }

    add_filter('armania_page_title', 'armania_check_hide_title');
}
/**
 * Wrapper function to deal with backwards compatibility.
 */
if (!function_exists('armania_body_open')) {
    function armania_body_open()
    {
        if (function_exists('wp_body_open')) {
            wp_body_open();
        } else {
            do_action('wp_body_open');
        }
    }
}
/**
 * Functions Mobile Detect.
 */
if (!class_exists('Mobile_Detect')) {
    require get_parent_theme_file_path('/framework/classes/mobile-detect.php');
}
/**
 * Functions theme helper.
 */
require get_parent_theme_file_path('/framework/settings/helpers.php');
/**
 * Functions theme options.
 */
require get_parent_theme_file_path('/framework/settings/theme-options.php');
/**
 * Enqueue scripts and styles.
 */
require get_parent_theme_file_path('/framework/settings/enqueue.php');
/**
 * Functions add inline style inline.
 */
require get_parent_theme_file_path('/framework/settings/color-patterns.php');
/**
 * Functions plugin load.
 */
require get_parent_theme_file_path('/framework/settings/plugins-load.php');
/**
 * Functions theme AJAX.
 */
require get_parent_theme_file_path('/framework/classes/core-ajax.php');
/**
 * Functions theme breadcrumbs.
 */
require get_parent_theme_file_path('/framework/classes/breadcrumbs.php');
/**
 * Functions metabox options.
 */
require get_parent_theme_file_path('/framework/settings/metabox-options.php');
/**
 * Functions theme.
 */
require get_parent_theme_file_path('/framework/theme-functions.php');
/**
 * Functions blog.
 */
require get_parent_theme_file_path('/framework/blog-functions.php');
/**
 * Functions WooCommerce.
 */
if (class_exists('WooCommerce')) {
    require get_parent_theme_file_path('/framework/woocommerce/template-hook.php');
    require get_parent_theme_file_path('/framework/widgets/widget-price-filter.php');
}