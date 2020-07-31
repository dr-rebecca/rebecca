<?php if (!defined('ABSPATH')) {
    die;
} // Cannot access pages directly.
/*==========================================================================
METABOX BOX OPTIONS
===========================================================================*/
if (!function_exists('armania_metabox_options') && class_exists('OVIC_Metabox')) {
    function armania_metabox_options()
    {
        $sections = array();
        // -----------------------------------------
        // Page Side Meta box Options              -
        // -----------------------------------------
        $sections[] = array(
            'id'             => '_custom_page_side_options',
            'title'          => esc_html__('Custom Page Side Options', 'armania'),
            'post_type'      => 'page',
            'context'        => 'side',
            'priority'       => 'high',
            'page_templates' => 'default',
            'sections'       => array(
                array(
                    'name'   => 'page_option',
                    'fields' => array(
                        'page_breadcrumbs'    => array(
                            'id'    => 'page_breadcrumbs',
                            'type'  => 'switcher',
                            'title' => esc_html__('Hide Page Breadcrumbs', 'armania'),
                            'desc'  => esc_html__('for Default Template', 'armania'),
                        ),
                        'page_title'          => array(
                            'id'    => 'page_title',
                            'type'  => 'switcher',
                            'title' => esc_html__('Hide Page Title', 'armania'),
                            'desc'  => esc_html__('for Default Template', 'armania'),
                        ),
                        'sidebar_page_layout' => array(
                            'id'         => 'sidebar_page_layout',
                            'type'       => 'image_select',
                            'title'      => esc_html__('Single Page Sidebar Position', 'armania'),
                            'desc'       => esc_html__('Select sidebar position on Page.', 'armania'),
                            'options'    => array(
                                'left'  => get_theme_file_uri('assets/images/left-sidebar.png'),
                                'right' => get_theme_file_uri('assets/images/right-sidebar.png'),
                                'full'  => get_theme_file_uri('assets/images/no-sidebar.png'),
                            ),
                            'default'    => 'left',
                            'attributes' => array(
                                'data-depend-id' => 'sidebar_page_layout',
                            ),
                        ),
                        'page_sidebar'        => array(
                            'id'         => 'page_sidebar',
                            'type'       => 'select',
                            'title'      => esc_html__('Page Sidebar', 'armania'),
                            'options'    => 'sidebars',
                            'dependency' => array('sidebar_page_layout', '!=', 'full'),
                        ),
                        'page_extra_class'    => array(
                            'id'    => 'page_extra_class',
                            'type'  => 'text',
                            'title' => esc_html__('Extra Class', 'armania'),
                        ),
                    ),
                ),
            ),
        );
        // -----------------------------------------
        // Page Meta box Options                   -
        // -----------------------------------------
        $sections[] = array(
            'id'        => '_custom_metabox_theme_options',
            'title'     => esc_html__('Custom Theme Options', 'armania'),
            'post_type' => 'page',
            'context'   => 'normal',
            'priority'  => 'high',
            'sections'  => array(
                'options' => array(
                    'name'   => 'options',
                    'title'  => esc_html__('General', 'armania'),
                    'icon'   => 'fa fa-wordpress',
                    'fields' => array(
                        'enable_metabox_options'     => array(
                            'id'    => 'enable_metabox_options',
                            'type'  => 'switcher',
                            'title' => esc_html__('Enable Metabox Options', 'armania'),
                            'desc'  => esc_html__('If this option enable then this page will get setting in here, else this page will get setting in Theme Options', 'armania'),
                        ),
                        'metabox_main_skin'          => array(
                            'id'      => 'metabox_main_skin',
                            'type'    => 'select',
                            'title'   => esc_html__('Main Skin', 'armania'),
                            'options' => array(
                                'market'       => esc_html__('Market', 'armania'),
                                'carparts'     => esc_html__('Carparts', 'armania'),
                                'facemask'     => esc_html__('Facemask', 'armania'),
                                'fashion'      => esc_html__('Fashion', 'armania'),
                                'furniture'    => esc_html__('Furniture', 'armania'),
                                'furniture-02' => esc_html__('Furniture 02', 'armania'),
                                'cosmetic'     => esc_html__('Cosmetic', 'armania'),
                                'medical'      => esc_html__('Medical', 'armania'),
                                'medicine'     => esc_html__('Medicine', 'armania'),
                                'organic'      => esc_html__('Organic', 'armania'),
                                'organic-03'   => esc_html__('Organic 03', 'armania'),
                                'pets'         => esc_html__('Pets', 'armania'),
                                'barber'       => esc_html__('Barber', 'armania'),
                                'tools'        => esc_html__('Tools', 'armania'),
                                'plant'        => esc_html__('Plant', 'armania'),
                                'digital'      => esc_html__('Digital', 'armania'),
                                'kids'         => esc_html__('Kids', 'armania'),
                                'sports'       => esc_html__('Sports', 'armania'),
                            ),
                            'default' => 'furniture',
                        ),
                        'metabox_main_container'     => array(
                            'id'      => 'metabox_main_container',
                            'type'    => 'slider',
                            'title'   => esc_html__('Main Container', 'armania'),
                            'min'     => 1140,
                            'max'     => 1920,
                            'step'    => 10,
                            'unit'    => esc_html__('px', 'armania'),
                            'default' => 1410,
                        ),
                        'metabox_logo'               => array(
                            'id'    => 'metabox_logo',
                            'type'  => 'image',
                            'title' => esc_html__('Logo', 'armania'),
                            'desc'  => esc_html__('Setting Logo For Site', 'armania'),
                        ),
                        'metabox_main_color'         => array(
                            'id'      => 'metabox_main_color',
                            'type'    => 'color',
                            'rgba'    => true,
                            'default' => '#111111',
                            'title'   => esc_html__('Main Color 1', 'armania'),
                        ),
                        'metabox_main_color_2'       => array(
                            'id'      => 'metabox_main_color_2',
                            'type'    => 'color',
                            'rgba'    => true,
                            'default' => '#7377ab',
                            'title'   => esc_html__('Main Color 2', 'armania'),
                        ),
                        'metabox_text_main_color_2'  => array(
                            'id'      => 'metabox_text_main_color_2',
                            'type'    => 'color',
                            'rgba'    => true,
                            'default' => '#ffffff',
                            'title'   => esc_html__('Text inner Background Main Color 2', 'armania'),
                        ),
                        'metabox_main_color_3'       => array(
                            'id'      => 'metabox_main_color_3',
                            'type'    => 'color',
                            'rgba'    => true,
                            'default' => '#007aff',
                            'title'   => esc_html__('Main Color 3', 'armania'),
                        ),
                        'body_typography'            => array(
                            'id'             => 'body_typography',
                            'type'           => 'typography',
                            'title'          => esc_html__('Typography of Body', 'armania'),
                            'font_family'    => true,
                            'font_weight'    => true,
                            'font_style'     => true,
                            'subset'         => true,
                            'text_align'     => true,
                            'text_transform' => true,
                            'font_size'      => true,
                            'line_height'    => true,
                            'letter_spacing' => true,
                            'extra_styles'   => true,
                            'color'          => true,
                            'output'         => 'body',
                        ),
                        'metabox_special_typography' => array(
                            'id'             => 'metabox_special_typography',
                            'type'           => 'typography',
                            'title'          => esc_html__('Typography of Special text', 'armania'),
                            'font_family'    => true,
                            'font_weight'    => true,
                            'font_style'     => false,
                            'subset'         => false,
                            'text_align'     => false,
                            'text_transform' => false,
                            'font_size'      => false,
                            'line_height'    => false,
                            'letter_spacing' => false,
                            'extra_styles'   => true,
                            'color'          => false,
                            'output'         => '',
                        ),
                    ),
                ),
                'header'  => array(
                    'name'   => 'header',
                    'title'  => esc_html__('Header', 'armania'),
                    'icon'   => 'fa fa-folder-open-o',
                    'fields' => array(
                        'metabox_header_template'      => array(
                            'id'         => 'metabox_header_template',
                            'type'       => 'select_preview',
                            'options'    => armania_file_options('/templates/header/', 'header'),
                            'default'    => 'style-08',
                            'attributes' => array(
                                'data-depend-id' => 'metabox_header_template',
                            ),
                        ),
                        'metabox_primary_menu'         => array(
                            'id'          => 'metabox_primary_menu',
                            'type'        => 'select',
                            'title'       => esc_html__('Primary Menu', 'armania'),
                            'desc'        => esc_html__('default is Display location on Menu panel: "Primary Menu"', 'armania'),
                            'options'     => 'menus',
                            'chosen'      => true,
                            'ajax'        => true,
                            'query_args'  => array(
                                'data-slug' => true,
                            ),
                            'placeholder' => esc_html__('None', 'armania'),
                        ),
                        'metabox_primary_menu_second'  => array(
                            'id'          => 'metabox_primary_menu_second',
                            'type'        => 'select',
                            'title'       => esc_html__('Primary Menu Second', 'armania'),
                            'desc'        => esc_html__('default is Display location on Menu panel: "Primary Menu Second"', 'armania'),
                            'options'     => 'menus',
                            'chosen'      => true,
                            'ajax'        => true,
                            'query_args'  => array(
                                'data-slug' => true,
                            ),
                            'placeholder' => esc_html__('None', 'armania'),
                            'dependency'  => array(
                                'metabox_header_template',
                                'any',
                                'style-19'
                            ),
                        ),
                        'metabox_header_banner'        => array(
                            'id'          => 'metabox_header_banner',
                            'type'        => 'select',
                            'options'     => 'page',
                            'chosen'      => true,
                            'ajax'        => true,
                            'placeholder' => esc_html__('None', 'armania'),
                            'title'       => esc_html__('Header Banner', 'armania'),
                            'desc'        => esc_html__('Get banner on header from page builder', 'armania'),
                        ),
                        'metabox_header_message'       => array(
                            'id'    => 'metabox_header_message',
                            'type'  => 'textarea',
                            'title' => esc_html__('Header Message', 'armania'),
                            'desc'  => esc_html__('Use {text} for highlight text', 'armania'),
                        ),
                        'metabox_header_phone'         => array(
                            'id'         => 'metabox_header_phone',
                            'type'       => 'text',
                            'title'      => esc_html__('Header Phone', 'armania'),
                            'dependency' => array(
                                'metabox_header_template',
                                'any',
                                'style-01,style-02,style-03,style-05,style-05_2,style-06,style-08,style-12,style-14,style-17'
                            ),
                        ),
                        'metabox_header_info'          => array(
                            'id'              => 'metabox_header_info',
                            'type'            => 'group',
                            'max'             => 3,
                            'title'           => esc_html__('Header Infomation', 'armania'),
                            'button_title'    => esc_html__('Add item', 'armania'),
                            'accordion_title' => esc_html__('Add New item', 'armania'),
                            'fields'          => array(
                                array(
                                    'id'    => 'info_icon',
                                    'type'  => 'icon',
                                    'title' => esc_html__('Select icon', 'armania'),
                                ),
                                array(
                                    'id'    => 'info_subtitle',
                                    'type'  => 'text',
                                    'title' => esc_html__('Subtitle', 'armania'),
                                ),
                                array(
                                    'id'    => 'info_title',
                                    'type'  => 'text',
                                    'title' => esc_html__('Title', 'armania'),
                                ),
                                array(
                                    'id'    => 'info_link',
                                    'type'  => 'text',
                                    'title' => esc_html__('Link', 'armania'),
                                ),
                            ),
                            'dependency'      => array(
                                'metabox_header_template',
                                'any',
                                'style-08_2,style-10,style-11'
                            ),
                        ),
                        'metabox_header_contact'       => array(
                            'id'          => 'metabox_header_contact',
                            'type'        => 'select',
                            'options'     => 'posts',
                            'query_args'  => array(
                                'post_type'      => 'wpcf7_contact_form',
                                'posts_per_page' => -1,
                            ),
                            'placeholder' => esc_html__('Select a Form', 'armania'),
                            'title'       => esc_html__('Contact Form', 'armania'),
                            'dependency'  => array(
                                'metabox_header_template',
                                'any',
                                'style-10'
                            ),
                        ),
                        'metabox_header_topmenu'       => array(
                            'id'          => 'metabox_header_topmenu',
                            'type'        => 'select',
                            'title'       => esc_html__('Header Top Bar Menu', 'armania'),
                            'options'     => 'menus',
                            'chosen'      => true,
                            'ajax'        => true,
                            'query_args'  => array(
                                'data-slug' => true,
                            ),
                            'placeholder' => esc_html__('None', 'armania'),
                        ),
                        'metabox_header_submenu'       => array(
                            'id'          => 'metabox_header_submenu',
                            'type'        => 'select',
                            'title'       => esc_html__('Header Sub Menu', 'armania'),
                            'options'     => 'menus',
                            'chosen'      => true,
                            'ajax'        => true,
                            'query_args'  => array(
                                'data-slug' => true,
                            ),
                            'placeholder' => esc_html__('None', 'armania'),
                            'dependency'  => array('metabox_header_template', 'any', 'style-01,style-03,style-12_3'),
                        ),
                        'metabox_header_currency'      => array(
                            'id'          => 'metabox_header_currency',
                            'type'        => 'select',
                            'title'       => esc_html__('Header Currency', 'armania'),
                            'options'     => 'menus',
                            'chosen'      => true,
                            'ajax'        => true,
                            'query_args'  => array(
                                'data-slug' => true,
                            ),
                            'placeholder' => esc_html__('None', 'armania'),
                            'dependency'  => array('metabox_header_template', '==', 'style-08_2'),
                        ),
                        'metabox_header_language'      => array(
                            'id'          => 'metabox_header_language',
                            'type'        => 'select',
                            'title'       => esc_html__('Header Language', 'armania'),
                            'options'     => 'menus',
                            'chosen'      => true,
                            'ajax'        => true,
                            'query_args'  => array(
                                'data-slug' => true,
                            ),
                            'placeholder' => esc_html__('None', 'armania'),
                            'dependency'  => array('metabox_header_template', '==', 'style-08_2'),
                        ),
                        'metabox_header_vertical'      => array(
                            'id'          => 'metabox_header_vertical',
                            'type'        => 'select',
                            'title'       => esc_html__('Header Vertical Menu', 'armania'),
                            'options'     => 'menus',
                            'chosen'      => true,
                            'ajax'        => true,
                            'query_args'  => array(
                                'data-slug' => true,
                            ),
                            'placeholder' => esc_html__('None', 'armania'),
                            'dependency'  => array(
                                'metabox_header_template', 'any', 'style-02,style-03,style-05_2,style-11,style-14'
                            ),
                        ),
                        'metabox_vertical_title'       => array(
                            'id'         => 'metabox_vertical_title',
                            'type'       => 'text',
                            'title'      => esc_html__('Vertical Menu Title', 'armania'),
                            'default'    => esc_html__('All Categories', 'armania'),
                            'dependency' => array(
                                'metabox_header_template', 'any', 'style-02,style-03,style-05_2,style-11,style-14'
                            ),
                        ),
                        'metabox_vertical_always_open' => array(
                            'id'         => 'metabox_vertical_always_open',
                            'type'       => 'switcher',
                            'title'      => esc_html__('Vertical Menu Always Open', 'armania'),
                            'desc'       => esc_html__('Vertical menu always open', 'armania'),
                            'dependency' => array(
                                'metabox_header_template', 'any', 'style-02,style-03,style-05_2,style-11,style-14'
                            ),
                        ),
                    ),
                ),
                'footer'  => array(
                    'name'   => 'footer',
                    'title'  => esc_html__('Footer', 'armania'),
                    'icon'   => 'fa fa-folder-open-o',
                    'fields' => array(
                        array(
                            'id'      => 'metabox_footer_template',
                            'type'    => 'select_preview',
                            'default' => 'footer-08',
                            'options' => armania_footer_preview(),
                        ),
                    ),
                ),
            ),
        );
        // -----------------------------------------
        // Post Meta box Options                   -
        // -----------------------------------------
        $sections[] = array(
            'id'        => '_custom_metabox_post_options',
            'title'     => esc_html__('Post Options', 'armania'),
            'post_type' => 'post',
            'context'   => 'side',
            'priority'  => 'high',
            'sections'  => array(
                'post_formats' => array(
                    'name'   => 'post_formats',
                    'icon'   => 'fa fa-picture-o',
                    'fields' => array(
                        'type'    => array(
                            'id'      => 'type',
                            'type'    => 'radio',
                            'title'   => esc_html__('Post Formats', 'armania'),
                            'options' => array(
                                'standard' => esc_html__('Standard', 'armania'),
                                'video'    => esc_html__('Video', 'armania'),
                                'quote'    => esc_html__('Quote', 'armania'),
                                'gallery'  => esc_html__('Gallery', 'armania'),
                                'audio'    => esc_html__('Audio', 'armania'),
                            ),
                            'default' => 'standard',
                        ),
                        'quote'   => array(
                            'id'         => 'quote',
                            'type'       => 'text',
                            'title'      => esc_html__('Quote Text', 'armania'),
                            'dependency' => array(
                                'type',
                                '==',
                                'quote',
                            ),
                            'attributes' => array(
                                'style' => 'width:100%',
                            ),
                        ),
                        'gallery' => array(
                            'id'         => 'gallery',
                            'type'       => 'gallery',
                            'title'      => esc_html__('Gallery source', 'armania'),
                            'dependency' => array(
                                'type',
                                '==',
                                'gallery',
                            ),
                        ),
                        'video'   => array(
                            'id'         => 'video',
                            'type'       => 'text',
                            'title'      => esc_html__('Video source', 'armania'),
                            'dependency' => array(
                                'type',
                                '==',
                                'video',
                            ),
                            'attributes' => array(
                                'style' => 'width:100%',
                            ),
                        ),
                        'audio'   => array(
                            'id'         => 'audio',
                            'type'       => 'textarea',
                            'title'      => esc_html__('Audio source', 'armania'),
                            'dependency' => array(
                                'type',
                                '==',
                                'audio',
                            ),
                            'attributes' => array(
                                'style' => 'width:100%',
                            ),
                            'desc'       => esc_html__('Copy url source audio or iframe', 'armania'),
                        ),
                    ),
                ),

            ),
        );
        // -----------------------------------------
        // Product Meta box Options                -
        // -----------------------------------------
        if (class_exists('WooCommerce')) {
            $sections[] = array(
                'id'        => '_custom_metabox_product_options',
                'title'     => esc_html__('Custom Product Options', 'armania'),
                'post_type' => 'product',
                'context'   => 'side',
                'priority'  => 'high',
                'sections'  => array(
                    array(
                        'name'   => 'product_option',
                        'fields' => array(
                            'poster'  => array(
                                'id'    => 'poster',
                                'type'  => 'image',
                                'title' => esc_html__('Poster Video', 'armania'),
                            ),
                            'video'   => array(
                                'id'    => 'video',
                                'type'  => 'text',
                                'title' => esc_html__('Video Url', 'armania'),
                            ),
                            'gallery' => array(
                                'id'    => 'gallery',
                                'type'  => 'gallery',
                                'title' => esc_html__('360 Degree', 'armania'),
                            ),
                        ),
                    ),
                ),
            );
        }

        OVIC_Metabox::instance(apply_filters('armania_framework_metabox_options', $sections));
    }

    add_action('init', 'armania_metabox_options');
}