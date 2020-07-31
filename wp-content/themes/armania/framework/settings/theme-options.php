<?php if (!defined('ABSPATH')) {
    die;
} // Cannot access pages directly.
/*==========================================================================
THEME BOX OPTIONS
===========================================================================*/
if (!function_exists('armania_theme_options') && class_exists('OVIC_Options')) {
    function armania_theme_options()
    {
        $options                 = array();
        $options['general_main'] = array(
            'name'     => 'general_main',
            'icon'     => 'fa fa-wordpress',
            'title'    => esc_html__('General', 'armania'),
            'sections' => array(
                array(
                    'title'  => esc_html__('General', 'armania'),
                    'fields' => array(
                        'main_skin'         => array(
                            'id'      => 'main_skin',
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
                        'main_container'    => array(
                            'id'      => 'main_container',
                            'type'    => 'slider',
                            'title'   => esc_html__('Main Container', 'armania'),
                            'min'     => 1140,
                            'max'     => 1920,
                            'step'    => 10,
                            'unit'    => esc_html__('px', 'armania'),
                            'default' => 1410,
                        ),
                        'logo'              => array(
                            'id'    => 'logo',
                            'type'  => 'image',
                            'title' => esc_html__('Logo', 'armania'),
                            'desc'  => esc_html__('Setting Logo For Site', 'armania'),
                        ),
                        'main_color'        => array(
                            'id'      => 'main_color',
                            'type'    => 'color',
                            'rgba'    => true,
                            'default' => '#111111',
                            'title'   => esc_html__('Main Color 1', 'armania'),
                        ),
                        'main_color_2'      => array(
                            'id'      => 'main_color_2',
                            'type'    => 'color',
                            'rgba'    => true,
                            'default' => '#7377ab',
                            'title'   => esc_html__('Main Color 2', 'armania'),
                        ),
                        'text_main_color_2' => array(
                            'id'      => 'text_main_color_2',
                            'type'    => 'color',
                            'rgba'    => true,
                            'default' => '#ffffff',
                            'title'   => esc_html__('Text inner Background Main Color 2', 'armania'),
                        ),
                        'main_color_3'      => array(
                            'id'      => 'main_color_3',
                            'type'    => 'color',
                            'rgba'    => true,
                            'default' => '#007aff',
                            'title'   => esc_html__('Main Color 3', 'armania'),
                        ),
                        'placeholder_image' => array(
                            'id'    => 'placeholder_image',
                            'type'  => 'image',
                            'title' => esc_html__('Placeholder Image', 'armania'),
                            'desc'  => esc_html__('Placeholder Image when image do not exist.', 'armania'),
                        ),
                    ),
                ),
                array(
                    'title'  => esc_html__('Enable/Disable', 'armania'),
                    'fields' => array(
                        'enable_lazy_load'    => array(
                            'id'    => 'enable_lazy_load',
                            'type'  => 'switcher',
                            'title' => esc_html__('Enable Lazy Load', 'armania'),
                        ),
                        'disable_crop_image'  => array(
                            'id'    => 'disable_crop_image',
                            'type'  => 'switcher',
                            'title' => esc_html__('Disable Crop Image', 'armania'),
                        ),
                        'enable_ajax_comment' => array(
                            'id'    => 'enable_ajax_comment',
                            'type'  => 'switcher',
                            'title' => esc_html__('Enable Nav Ajax Comment', 'armania'),
                        ),
                        'enable_backtotop'    => array(
                            'id'    => 'enable_backtotop',
                            'type'  => 'switcher',
                            'title' => esc_html__('Enable Back To Top Button', 'armania'),
                        ),
                    ),
                ),
                array(
                    'title'  => esc_html__('Sidebar Settings', 'armania'),
                    'fields' => array(
                        array(
                            'id'           => 'multi_sidebar',
                            'type'         => 'repeater',
                            'button_title' => esc_html__('Add Sidebar', 'armania'),
                            'title'        => esc_html__('Multi Sidebar', 'armania'),
                            'fields'       => array(
                                array(
                                    'id'    => 'add_sidebar',
                                    'type'  => 'text',
                                    'title' => esc_html__('Name Sidebar', 'armania'),
                                ),
                            ),
                        ),
                    ),
                ),
                array(
                    'title'  => esc_html__('Popup Newsletter', 'armania'),
                    'fields' => array(
                        'enable_popup'      => array(
                            'id'    => 'enable_popup',
                            'type'  => 'switcher',
                            'title' => esc_html__('Enable Popup', 'armania'),
                        ),
                        'popup_page'        => array(
                            'id'         => 'popup_page',
                            'type'       => 'select',
                            'title'      => esc_html__('Popup Page', 'armania'),
                            'options'    => 'page',
                            'multiple'   => true,
                            'chosen'     => true,
                            'query_args' => array(
                                'posts_per_page' => -1,
                            ),
                            'desc'       => esc_html__('The page popup will be show.', 'armania'),
                        ),
                        'popup_effect'      => array(
                            'id'      => 'popup_effect',
                            'type'    => 'select',
                            'title'   => esc_html__('Popup Effect', 'armania'),
                            'options' => array(
                                'mfp-zoom-in'         => esc_html__('Zoom In', 'armania'),
                                'mfp-newspaper'       => esc_html__('Newspaper', 'armania'),
                                'mfp-move-horizontal' => esc_html__('Horizontal Move', 'armania'),
                                'mfp-move-from-top'   => esc_html__('Move From Top', 'armania'),
                                'mfp-3d-unfold'       => esc_html__('3D Unfold', 'armania'),
                                'mfp-zoom-out'        => esc_html__('Zoom Out', 'armania'),
                            ),
                            'default' => 'mfp-zoom-in',
                        ),
                        'popup_bg'          => array(
                            'id'    => 'popup_bg',
                            'type'  => 'image',
                            'title' => esc_html__('Background', 'armania'),
                        ),
                        'popup_title'       => array(
                            'id'      => 'popup_title',
                            'type'    => 'text',
                            'title'   => esc_html__('Popup Title', 'armania'),
                            'default' => esc_html__('SUBSCRIBE', 'armania'),
                        ),
                        'popup_desc'        => array(
                            'id'    => 'popup_desc',
                            'type'  => 'textarea',
                            'title' => esc_html__('Popup Descriptions', 'armania'),
                        ),
                        'input_placeholder' => array(
                            'id'      => 'input_placeholder',
                            'type'    => 'text',
                            'title'   => esc_html__('Input Placeholder', 'armania'),
                            'default' => esc_html__('ENTER YOUR EMAIL', 'armania'),
                        ),
                        'popup_button'      => array(
                            'id'      => 'popup_button',
                            'type'    => 'text',
                            'title'   => esc_html__('Button', 'armania'),
                            'default' => esc_html__('SEND', 'armania'),
                        ),
                        'popup_delay'       => array(
                            'id'      => 'popup_delay',
                            'type'    => 'spinner',
                            'title'   => esc_html__('Delay', 'armania'),
                            'step'    => 1,
                            'min'     => 0,
                            'max'     => 9999,
                            'unit'    => 'milliseconds',
                            'default' => 1000,
                        ),
                    ),
                ),
                array(
                    'title'  => esc_html__('ACE Settings', 'armania'),
                    'fields' => array(
                        'ace_style'  => array(
                            'id'       => 'ace_style',
                            'type'     => 'code_editor',
                            'settings' => array(
                                'theme' => 'dracula',
                                'mode'  => 'css',
                            ),
                            'title'    => esc_html__('Editor Style', 'armania'),
                        ),
                        'ace_script' => array(
                            'id'       => 'ace_script',
                            'type'     => 'code_editor',
                            'settings' => array(
                                'theme' => 'dracula',
                                'mode'  => 'javascript',
                            ),
                            'title'    => esc_html__('Editor Javascript', 'armania'),
                        ),
                    ),
                ),
            ),
        );
        $options['mobile_main']  = array(
            'name'   => 'mobile_main',
            'icon'   => 'fa fa-wordpress',
            'title'  => esc_html__('Mobile', 'armania'),
            'fields' => array(
                'mobile_enable' => array(
                    'id'    => 'mobile_enable',
                    'type'  => 'switcher',
                    'title' => esc_html__('Enable version mobile', 'armania'),
                ),
                'logo_mobile'   => array(
                    'id'    => 'logo_mobile',
                    'type'  => 'image',
                    'title' => esc_html__('Logo Mobile', 'armania'),
                    'desc'  => esc_html__('Setting Logo For Site', 'armania'),
                ),
                'mobile_menu'   => array(
                    'id'          => 'mobile_menu',
                    'type'        => 'select',
                    'title'       => esc_html__('Mobile Menu', 'armania'),
                    'options'     => 'menus',
                    'chosen'      => true,
                    'ajax'        => true,
                    'query_args'  => array(
                        'data-slug' => true,
                    ),
                    'placeholder' => esc_html__('None', 'armania'),
                ),
                'mobile_menu_top'   => array(
                    'id'          => 'mobile_menu_top',
                    'type'        => 'select',
                    'title'       => esc_html__('Mobile Menu Top', 'armania'),
                    'options'     => 'menus',
                    'chosen'      => true,
                    'ajax'        => true,
                    'query_args'  => array(
                        'data-slug' => true,
                    ),
                    'placeholder' => esc_html__('None', 'armania'),
                ),
                'mobile_menu_bottom'   => array(
                    'id'          => 'mobile_menu_bottom',
                    'type'        => 'select',
                    'title'       => esc_html__('Mobile Menu Bottom', 'armania'),
                    'options'     => 'menus',
                    'chosen'      => true,
                    'ajax'        => true,
                    'query_args'  => array(
                        'data-slug' => true,
                    ),
                    'placeholder' => esc_html__('None', 'armania'),
                ),
                'mobile_layout' => array(
                    'id'      => 'mobile_layout',
                    'type'    => 'image_select',
                    'default' => 'style-01',
                    'title'   => esc_html__('Mobile Layout', 'armania'),
                    'options' => array(
                        'style-01' => get_theme_file_uri('templates/mobile/mobile-style-01.png'),
                        'style-02' => get_theme_file_uri('templates/mobile/mobile-style-02.png'),
                    ),
                ),
                'mobile_footer' => array(
                    'id'      => 'mobile_footer',
                    'type'    => 'select_preview',
                    'default' => 'none',
                    'title'   => esc_html__('Footer Mobile', 'armania'),
                    'options' => armania_footer_preview(),
                ),
            )
        );
        $options['header_main']  = array(
            'name'   => 'header_main',
            'icon'   => 'fa fa-folder-open-o',
            'title'  => esc_html__('Header', 'armania'),
            'fields' => array(
                'sticky_menu'          => array(
                    'id'    => 'sticky_menu',
                    'type'  => 'switcher',
                    'title' => esc_html__('Header Sticky', 'armania'),
                ),
                'header_template'      => array(
                    'id'         => 'header_template',
                    'type'       => 'select_preview',
                    'title'      => esc_html__('Header Layout', 'armania'),
                    'options'    => armania_file_options('/templates/header/', 'header'),
                    'default'    => 'style-08',
                    'attributes' => array(
                        'data-depend-id' => 'header_template',
                    ),
                ),
                'header_banner'        => array(
                    'id'          => 'header_banner',
                    'type'        => 'select',
                    'options'     => 'page',
                    'chosen'      => true,
                    'ajax'        => true,
                    'placeholder' => esc_html__('None', 'armania'),
                    'title'       => esc_html__('Header Banner', 'armania'),
                    'desc'        => esc_html__('Get banner on header from page builder', 'armania'),
                ),
                'header_message'       => array(
                    'id'    => 'header_message',
                    'type'  => 'textarea',
                    'title' => esc_html__('Header Message', 'armania'),
                    'desc'  => esc_html__('Use {text} for highlight text', 'armania'),
                ),
                'header_phone'         => array(
                    'id'         => 'header_phone',
                    'type'       => 'text',
                    'title'      => esc_html__('Header Phone', 'armania'),
                    'dependency' => array(
                        'header_template',
                        'any',
                        'style-01,style-02,style-03,style-05,style-05_2,style-06,style-08,style-12,style-14,style-17'
                    ),
                ),
                'header_info'          => array(
                    'id'              => 'header_info',
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
                        'header_template',
                        'any',
                        'style-08_2,style-10,style-11'
                    ),
                ),
                'header_contact'       => array(
                    'id'          => 'header_contact',
                    'type'        => 'select',
                    'options'     => 'posts',
                    'query_args'  => array(
                        'post_type'      => 'wpcf7_contact_form',
                        'posts_per_page' => -1,
                    ),
                    'placeholder' => esc_html__('Select a Form', 'armania'),
                    'title'       => esc_html__('Contact Form', 'armania'),
                    'dependency'  => array(
                        'header_template',
                        'any',
                        'style-10'
                    ),
                ),
                'header_topmenu'       => array(
                    'id'          => 'header_topmenu',
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
                'header_submenu'       => array(
                    'id'          => 'header_submenu',
                    'type'        => 'select',
                    'title'       => esc_html__('Header Sub Menu', 'armania'),
                    'options'     => 'menus',
                    'chosen'      => true,
                    'ajax'        => true,
                    'query_args'  => array(
                        'data-slug' => true,
                    ),
                    'placeholder' => esc_html__('None', 'armania'),
                    'dependency'  => array('header_template', 'any', 'style-01,style-03,style-12_3'),
                ),
                'header_currency'      => array(
                    'id'          => 'header_currency',
                    'type'        => 'select',
                    'title'       => esc_html__('Header Currency', 'armania'),
                    'options'     => 'menus',
                    'chosen'      => true,
                    'ajax'        => true,
                    'query_args'  => array(
                        'data-slug' => true,
                    ),
                    'placeholder' => esc_html__('None', 'armania'),
                    'dependency'  => array('header_template', '==', 'style-08_2'),
                ),
                'header_language'      => array(
                    'id'          => 'header_language',
                    'type'        => 'select',
                    'title'       => esc_html__('Header Language', 'armania'),
                    'options'     => 'menus',
                    'chosen'      => true,
                    'ajax'        => true,
                    'query_args'  => array(
                        'data-slug' => true,
                    ),
                    'placeholder' => esc_html__('None', 'armania'),
                    'dependency'  => array('header_template', '==', 'style-08_2'),
                ),
                'header_vertical'      => array(
                    'id'          => 'header_vertical',
                    'type'        => 'select',
                    'title'       => esc_html__('Header Vertical Menu', 'armania'),
                    'options'     => 'menus',
                    'chosen'      => true,
                    'ajax'        => true,
                    'query_args'  => array(
                        'data-slug' => true,
                    ),
                    'placeholder' => esc_html__('None', 'armania'),
                    'dependency'  => array('header_template', 'any', 'style-02,style-03,style-05_2,style-11,style-14'),
                ),
                'vertical_title'       => array(
                    'id'         => 'vertical_title',
                    'type'       => 'text',
                    'title'      => esc_html__('Vertical Menu Title', 'armania'),
                    'default'    => esc_html__('All Categories', 'armania'),
                    'dependency' => array('header_template', 'any', 'style-02,style-03,style-05_2,style-11,style-14'),
                ),
                'vertical_always_open' => array(
                    'id'         => 'vertical_always_open',
                    'type'       => 'switcher',
                    'title'      => esc_html__('Vertical Menu Always Open', 'armania'),
                    'desc'       => esc_html__('Vertical menu always open', 'armania'),
                    'dependency' => array('header_template', 'any', 'style-02,style-03,style-05_2,style-11,style-14'),
                ),
            ),
        );
        $options['footer_main']  = array(
            'name'   => 'footer_main',
            'icon'   => 'fa fa-folder-open-o',
            'title'  => esc_html__('Footer', 'armania'),
            'fields' => array(
                'footer_template' => array(
                    'id'      => 'footer_template',
                    'type'    => 'select_preview',
                    'default' => 'footer-08',
                    'title'   => esc_html__('Footer Layout', 'armania'),
                    'options' => armania_footer_preview(),
                ),
            ),
        );
        $options['posts_main']   = array(
            'name'     => 'posts_main',
            'icon'     => 'fa fa-rss',
            'title'    => esc_html__('Posts Settings', 'armania'),
            'sections' => array(
                array(
                    'title'  => esc_html__('Posts Main', 'armania'),
                    'fields' => array(
                        'blog_banner'         => array(
                            'id'    => 'blog_banner',
                            'type'  => 'media',
                            'title' => esc_html__('Banner', 'armania'),
                        ),
                        'blog_title'          => array(
                            'id'    => 'blog_title',
                            'type'  => 'text',
                            'title' => esc_html__('Blog Title', 'armania'),
                        ),
                        'blog_list_style'     => array(
                            'id'      => 'blog_list_style',
                            'type'    => 'select',
                            'title'   => esc_html__('Blog Style', 'armania'),
                            'options' => array(
                                'standard' => esc_html__('Standard', 'armania'),
                                'grid'     => esc_html__('Grid', 'armania'),
                                'list'     => esc_html__('List', 'armania'),
                            ),
                            'default' => 'standard',
                        ),
                        'sidebar_blog_layout' => array(
                            'id'      => 'sidebar_blog_layout',
                            'type'    => 'image_select',
                            'title'   => esc_html__('Sidebar Blog Layout', 'armania'),
                            'desc'    => esc_html__('Select sidebar position on Blog.', 'armania'),
                            'options' => array(
                                'left'  => get_theme_file_uri('assets/images/left-sidebar.png'),
                                'right' => get_theme_file_uri('assets/images/right-sidebar.png'),
                                'full'  => get_theme_file_uri('assets/images/no-sidebar.png'),
                            ),
                            'default' => 'left',
                        ),
                        'blog_used_sidebar'   => array(
                            'id'         => 'blog_used_sidebar',
                            'type'       => 'select',
                            'default'    => 'widget-area',
                            'title'      => esc_html__('Blog Sidebar', 'armania'),
                            'options'    => 'sidebars',
                            'dependency' => array('sidebar_blog_layout', '!=', 'full'),
                        ),
                        'blog_pagination'     => array(
                            'id'      => 'blog_pagination',
                            'type'    => 'button_set',
                            'title'   => esc_html__('Blog Pagination', 'armania'),
                            'options' => array(
                                'pagination' => esc_html__('Pagination', 'armania'),
                                'load_more'  => esc_html__('Load More', 'armania'),
                                'infinite'   => esc_html__('Infinite Scrolling', 'armania'),
                            ),
                            'default' => 'pagination',
                            'desc'    => esc_html__('Select style pagination on blog page.', 'armania'),
                        ),
                    ),
                ),
                array(
                    'title'  => esc_html__('Posts Single', 'armania'),
                    'fields' => array(
                        'single_layout'         => array(
                            'id'      => 'single_layout',
                            'type'    => 'select',
                            'default' => 'standard',
                            'title'   => esc_html__('Single Post Layout', 'armania'),
                            'options' => array(
                                'standard' => esc_html__('Standard', 'armania'),
                            ),
                        ),
                        'sidebar_single_layout' => array(
                            'id'      => 'sidebar_single_layout',
                            'type'    => 'image_select',
                            'title'   => esc_html__(' Sidebar Single Post Layout', 'armania'),
                            'desc'    => esc_html__('Select sidebar position on Blog.', 'armania'),
                            'options' => array(
                                'left'  => get_theme_file_uri('assets/images/left-sidebar.png'),
                                'right' => get_theme_file_uri('assets/images/right-sidebar.png'),
                                'full'  => get_theme_file_uri('assets/images/no-sidebar.png'),
                            ),
                            'default' => 'left',
                        ),
                        'single_used_sidebar'   => array(
                            'id'         => 'single_used_sidebar',
                            'type'       => 'select',
                            'default'    => 'widget-area',
                            'title'      => esc_html__('Blog Single Sidebar', 'armania'),
                            'options'    => 'sidebars',
                            'dependency' => array('sidebar_single_layout', '!=', 'full'),
                        ),
                        'enable_share_post'     => array(
                            'id'    => 'enable_share_post',
                            'type'  => 'switcher',
                            'title' => esc_html__('Enable Share', 'armania'),
                        ),
                        'enable_related'        => array(
                            'id'    => 'enable_related',
                            'type'  => 'switcher',
                            'title' => esc_html__('Enable Related', 'armania'),
                        ),
                        'enable_about_author'   => array(
                            'id'    => 'enable_about_author',
                            'type'  => 'switcher',
                            'title' => esc_html__('Enable About Author', 'armania'),
                        ),
                        'enable_nav_button'     => array(
                            'id'    => 'enable_nav_button',
                            'type'  => 'switcher',
                            'title' => esc_html__('Enable Nav Button', 'armania'),
                        ),
                    ),
                ),
            ),
        );
        if (class_exists('WooCommerce')) {
            $options['woocommerce_mains'] = array(
                'name'     => 'woocommerce_mains',
                'icon'     => 'fa fa-shopping-bag',
                'title'    => esc_html__('WooCommerce', 'armania'),
                'sections' => array(
                    array(
                        'title'  => esc_html__('General', 'armania'),
                        'fields' => array(
                            'shop_product_style'       => array(
                                'id'      => 'shop_product_style',
                                'type'    => 'select_preview',
                                'default' => 'style-01',
                                'title'   => esc_html__('Product shop style', 'armania'),
                                'desc'    => esc_html__('Select a product style in shop page', 'armania'),
                                'options' => armania_product_options('Theme Option'),
                            ),
                            'shop_list_style'          => array(
                                'id'      => 'shop_list_style',
                                'type'    => 'image_select',
                                'default' => 'grid',
                                'title'   => esc_html__('Shop Layout', 'armania'),
                                'desc'    => esc_html__('Select layout for shop product, product category archive.',
                                    'armania'),
                                'options' => array(
                                    'grid' => get_theme_file_uri('assets/images/grid-display.png'),
                                    'list' => get_theme_file_uri('assets/images/list-display.png'),
                                ),
                            ),
                            'sidebar_shop_layout'      => array(
                                'id'      => 'sidebar_shop_layout',
                                'type'    => 'image_select',
                                'title'   => esc_html__('Shop Page Sidebar Layout', 'armania'),
                                'desc'    => esc_html__('Select sidebar position on Shop Page.', 'armania'),
                                'options' => array(
                                    'left'  => get_theme_file_uri('assets/images/left-sidebar.png'),
                                    'right' => get_theme_file_uri('assets/images/right-sidebar.png'),
                                    'full'  => get_theme_file_uri('assets/images/no-sidebar.png'),
                                ),
                                'default' => 'left',
                            ),
                            'shop_used_sidebar'        => array(
                                'id'         => 'shop_used_sidebar',
                                'type'       => 'select',
                                'default'    => 'shop-widget-area',
                                'title'      => esc_html__('Sidebar Used For Shop', 'armania'),
                                'options'    => 'sidebars',
                                'dependency' => array('sidebar_shop_layout', '!=', 'full'),
                            ),
                            'shop_vendor_used_sidebar' => array(
                                'id'         => 'shop_vendor_used_sidebar',
                                'type'       => 'select',
                                'title'      => esc_html__('Sidebar Used For Vendor', 'armania'),
                                'options'    => 'sidebars',
                                'dependency' => array('sidebar_shop_layout', '!=', 'full'),
                            ),
                            'enable_short_title'       => array(
                                'id'    => 'enable_short_title',
                                'type'  => 'switcher',
                                'title' => esc_html__('Enable Short Title on Mobile (<768px)', 'armania'),
                            ),
                        ),
                    ),
                    array(
                        'title'  => esc_html__('Shop Settings', 'armania'),
                        'fields' => array(
                            'shop_banner'            => array(
                                'id'          => 'shop_banner',
                                'type'        => 'select',
                                'options'     => 'page',
                                'query_args'  => array(
                                    'posts_per_page' => -1,
                                ),
                                'chosen'      => true,
                                'ajax'        => true,
                                'placeholder' => esc_html__('Select Banner', 'armania'),
                                'title'       => esc_html__('Shop Banner', 'armania'),
                                'desc'        => esc_html__('Get shop banner from page builder.', 'armania'),
                            ),
                            'product_hover'          => array(
                                'id'      => 'product_hover',
                                'type'    => 'button_set',
                                'title'   => esc_html__('Product Image Hover', 'armania'),
                                'options' => array(
                                    'change' => esc_html__('Change Image', 'armania'),
                                    'zoom'   => esc_html__('Zoom Image', 'armania'),
                                ),
                                'default' => 'zoom',
                            ),
                            'product_loop_columns'   => array(
                                'id'      => 'product_loop_columns',
                                'type'    => 'spinner',
                                'title'   => esc_html__('Products Columns', 'armania'),
                                'desc'    => esc_html__('Number Columns of products on shop page.', 'armania'),
                                'max'     => 6,
                                'min'     => 2,
                                'step'    => 1,
                                'unit'    => 'columns',
                                'default' => 4,
                            ),
                            'product_per_page'       => array(
                                'id'      => 'product_per_page',
                                'type'    => 'spinner',
                                'default' => '10',
                                'unit'    => 'items',
                                'title'   => esc_html__('Products Per Page', 'armania'),
                                'desc'    => esc_html__('Number of products on shop page.', 'armania'),
                            ),
                            'product_newness'        => array(
                                'id'      => 'product_newness',
                                'default' => '100',
                                'type'    => 'spinner',
                                'unit'    => 'days',
                                'title'   => esc_html__('Products Newness', 'armania'),
                            ),
                            'woocommerce_pagination' => array(
                                'id'      => 'woocommerce_pagination',
                                'type'    => 'button_set',
                                'title'   => esc_html__('WooCommerce Pagination', 'armania'),
                                'options' => array(
                                    'pagination' => esc_html__('Pagination', 'armania'),
                                    'load_more'  => esc_html__('Load More', 'armania'),
                                    'infinite'   => esc_html__('Infinite Scrolling', 'armania'),
                                ),
                                'default' => 'pagination',
                                'desc'    => esc_html__('Select style pagination on shop page.', 'armania'),
                            ),
                        ),
                    ),
                    array(
                        'title'  => esc_html__('Single Products', 'armania'),
                        'fields' => array(
                            'single_product_thumbnail' => array(
                                'id'      => 'single_product_thumbnail',
                                'type'    => 'radio',
                                'title'   => esc_html__('Single Product Thumbnail', 'armania'),
                                'options' => array(
                                    'standard' => esc_html__('Standard', 'armania'),
                                    'grid'     => esc_html__('Grid Gallery', 'armania'),
                                    'sticky'   => esc_html__('Sticky Summary', 'armania'),
                                ),
                                'default' => 'standard',
                            ),
                            'sidebar_product_layout'   => array(
                                'id'      => 'sidebar_product_layout',
                                'type'    => 'image_select',
                                'title'   => esc_html__('Product Sidebar', 'armania'),
                                'desc'    => esc_html__('Select sidebar position on Product Page.', 'armania'),
                                'options' => array(
                                    'left'  => get_theme_file_uri('assets/images/left-sidebar.png'),
                                    'right' => get_theme_file_uri('assets/images/right-sidebar.png'),
                                    'full'  => get_theme_file_uri('assets/images/no-sidebar.png'),
                                ),
                                'default' => 'left',
                            ),
                            'product_used_sidebar'     => array(
                                'id'         => 'product_used_sidebar',
                                'type'       => 'select',
                                'default'    => 'product-widget-area',
                                'title'      => esc_html__('Sidebar Used For Product', 'armania'),
                                'options'    => 'sidebars',
                                'dependency' => array('sidebar_product_layout', '!=', 'full'),
                            ),
                            'product_summary'          => array(
                                'id'      => 'product_summary',
                                'type'    => 'button_set',
                                'title'   => esc_html__('Product Summary', 'armania'),
                                'options' => array(
                                    'excerpt'    => esc_html__('Show Excerpt', 'armania'),
                                    'attributes' => esc_html__('Custom Attributes', 'armania'),
                                ),
                                'default' => 'attributes',
                            ),
                            'enable_share_product'     => array(
                                'id'    => 'enable_share_product',
                                'type'  => 'switcher',
                                'title' => esc_html__('Enable Share', 'armania'),
                            ),
                            'enable_countdown_product' => array(
                                'id'    => 'enable_countdown_product',
                                'type'  => 'switcher',
                                'title' => esc_html__('Enable Countdown', 'armania'),
                            ),
                            'disable_zoom'             => array(
                                'id'    => 'disable_zoom',
                                'type'  => 'switcher',
                                'title' => esc_html__('Disable Zoom Gallery', 'armania'),
                            ),
                            'disable_lightbox'         => array(
                                'id'    => 'disable_lightbox',
                                'type'  => 'switcher',
                                'title' => esc_html__('Disable Lightbox Gallery', 'armania'),
                            ),
                        ),
                    ),
                    array(
                        'title'  => esc_html__('Related Products', 'armania'),
                        'fields' => array(
                            'woo_related_enable'  => array(
                                'id'      => 'woo_related_enable',
                                'type'    => 'button_set',
                                'default' => 'enable',
                                'options' => array(
                                    'enable'  => esc_html__('Enable', 'armania'),
                                    'disable' => esc_html__('Disable', 'armania'),
                                ),
                                'title'   => esc_html__('Enable Related Products', 'armania'),
                            ),
                            'woo_related_title'   => array(
                                'id'         => 'woo_related_title',
                                'type'       => 'text',
                                'title'      => esc_html__('Related products title', 'armania'),
                                'desc'       => esc_html__('Related products title', 'armania'),
                                'dependency' => array('woo_related_enable', '==', 'enable'),
                                'default'    => esc_html__('Related Products', 'armania'),
                            ),
                            'woo_related_style'   => array(
                                'id'         => 'woo_related_style',
                                'type'       => 'select_preview',
                                'default'    => 'style-01',
                                'title'      => esc_html__('Product Related Layout', 'armania'),
                                'options'    => armania_product_options('Theme Option'),
                                'dependency' => array('woo_related_enable', '==', 'enable'),
                            ),
                            'woo_related_perpage' => array(
                                'id'         => 'woo_related_perpage',
                                'type'       => 'spinner',
                                'title'      => esc_html__('Related products Items', 'armania'),
                                'desc'       => esc_html__('Number Related products to show', 'armania'),
                                'dependency' => array('woo_related_enable', '==', 'enable'),
                                'default'    => 6,
                                'unit'       => 'item(s)',
                            ),
                            'woo_related_desktop' => array(
                                'id'      => 'woo_related_desktop',
                                'title'   => esc_html__('items on Desktop', 'armania'),
                                'desc'    => esc_html__('(Screen resolution of device >= 1200px )', 'armania'),
                                'type'    => 'slider',
                                'default' => 4,
                                'min'     => 1,
                                'max'     => 6,
                                'unit'    => 'item(s)',
                            ),
                            'woo_related_laptop'  => array(
                                'id'      => 'woo_related_laptop',
                                'title'   => esc_html__('items on Laptop', 'armania'),
                                'desc'    => esc_html__('(Screen resolution of device >= 992px & < 1200px )', 'armania'),
                                'type'    => 'slider',
                                'default' => 4,
                                'min'     => 1,
                                'max'     => 6,
                                'unit'    => 'item(s)',
                            ),
                            'woo_related_tablet'  => array(
                                'id'      => 'woo_related_tablet',
                                'title'   => esc_html__('items on Tablet', 'armania'),
                                'desc'    => esc_html__('(Screen resolution of device >= 480px & < 992px )', 'armania'),
                                'type'    => 'slider',
                                'default' => 3,
                                'min'     => 1,
                                'max'     => 6,
                                'unit'    => 'item(s)',
                            ),
                            'woo_related_mobile'  => array(
                                'id'      => 'woo_related_mobile',
                                'title'   => esc_html__('items on Desktop', 'armania'),
                                'desc'    => esc_html__('(Screen resolution of device < 480px )', 'armania'),
                                'type'    => 'slider',
                                'default' => 2,
                                'min'     => 1,
                                'max'     => 6,
                                'unit'    => 'item(s)',
                            ),
                        ),
                    ),
                    array(
                        'title'  => esc_html__('Cross Sell Products', 'armania'),
                        'fields' => array(
                            'woo_crosssell_enable'  => array(
                                'id'      => 'woo_crosssell_enable',
                                'type'    => 'button_set',
                                'default' => 'enable',
                                'options' => array(
                                    'enable'  => esc_html__('Enable', 'armania'),
                                    'disable' => esc_html__('Disable', 'armania'),
                                ),
                                'title'   => esc_html__('Enable Cross Sell Products', 'armania'),
                            ),
                            'woo_crosssell_title'   => array(
                                'id'         => 'woo_crosssell_title',
                                'type'       => 'text',
                                'title'      => esc_html__('Cross Sell products title', 'armania'),
                                'desc'       => esc_html__('Cross Sell products title', 'armania'),
                                'dependency' => array('woo_crosssell_enable', '==', 'enable'),
                                'default'    => esc_html__('Cross Sell Products', 'armania'),
                            ),
                            'woo_crosssell_style'   => array(
                                'id'         => 'woo_crosssell_style',
                                'type'       => 'select_preview',
                                'default'    => 'style-01',
                                'title'      => esc_html__('Product Cross Sell Layout', 'armania'),
                                'options'    => armania_product_options('Theme Option'),
                                'dependency' => array('woo_crosssell_enable', '==', 'enable'),
                            ),
                            'woo_crosssell_desktop' => array(
                                'id'      => 'woo_crosssell_desktop',
                                'title'   => esc_html__('items on Desktop', 'armania'),
                                'desc'    => esc_html__('(Screen resolution of device >= 1200px )', 'armania'),
                                'type'    => 'slider',
                                'default' => 4,
                                'min'     => 1,
                                'max'     => 6,
                                'unit'    => 'item(s)',
                            ),
                            'woo_crosssell_laptop'  => array(
                                'id'      => 'woo_crosssell_laptop',
                                'title'   => esc_html__('items on Laptop', 'armania'),
                                'desc'    => esc_html__('(Screen resolution of device >= 992px & < 1200px )', 'armania'),
                                'type'    => 'slider',
                                'default' => 4,
                                'min'     => 1,
                                'max'     => 6,
                                'unit'    => 'item(s)',
                            ),
                            'woo_crosssell_tablet'  => array(
                                'id'      => 'woo_crosssell_tablet',
                                'title'   => esc_html__('items on Tablet', 'armania'),
                                'desc'    => esc_html__('(Screen resolution of device >= 480px & < 992px )', 'armania'),
                                'type'    => 'slider',
                                'default' => 3,
                                'min'     => 1,
                                'max'     => 6,
                                'unit'    => 'item(s)',
                            ),
                            'woo_crosssell_mobile'  => array(
                                'id'      => 'woo_crosssell_mobile',
                                'title'   => esc_html__('items on Desktop', 'armania'),
                                'desc'    => esc_html__('(Screen resolution of device < 480px )', 'armania'),
                                'type'    => 'slider',
                                'default' => 2,
                                'min'     => 1,
                                'max'     => 6,
                                'unit'    => 'item(s)',
                            ),
                        ),
                    ),
                    array(
                        'title'  => esc_html__('Upsell Products', 'armania'),
                        'fields' => array(
                            'woo_upsell_enable'  => array(
                                'id'      => 'woo_upsell_enable',
                                'type'    => 'button_set',
                                'default' => 'enable',
                                'options' => array(
                                    'enable'  => esc_html__('Enable', 'armania'),
                                    'disable' => esc_html__('Disable', 'armania'),
                                ),
                                'title'   => esc_html__('Enable Upsell Products', 'armania'),
                            ),
                            'woo_upsell_title'   => array(
                                'id'         => 'woo_upsell_title',
                                'type'       => 'text',
                                'title'      => esc_html__('Upsell products title', 'armania'),
                                'desc'       => esc_html__('Upsell products title', 'armania'),
                                'dependency' => array('woo_upsell_enable', '==', 'enable'),
                                'default'    => esc_html__('Upsell Products', 'armania'),
                            ),
                            'woo_upsell_style'   => array(
                                'id'         => 'woo_upsell_style',
                                'type'       => 'select_preview',
                                'default'    => 'style-01',
                                'title'      => esc_html__('Product Upsell Layout', 'armania'),
                                'options'    => armania_product_options('Theme Option'),
                                'dependency' => array('woo_upsell_enable', '==', 'enable'),
                            ),
                            'woo_upsell_desktop' => array(
                                'id'      => 'woo_upsell_desktop',
                                'title'   => esc_html__('items on Desktop', 'armania'),
                                'desc'    => esc_html__('(Screen resolution of device >= 1200px )', 'armania'),
                                'type'    => 'slider',
                                'default' => 4,
                                'min'     => 1,
                                'max'     => 6,
                                'unit'    => 'item(s)',
                            ),
                            'woo_upsell_laptop'  => array(
                                'id'      => 'woo_upsell_laptop',
                                'title'   => esc_html__('items on Laptop', 'armania'),
                                'desc'    => esc_html__('(Screen resolution of device >= 992px & < 1200px )', 'armania'),
                                'type'    => 'slider',
                                'default' => 4,
                                'min'     => 1,
                                'max'     => 6,
                                'unit'    => 'item(s)',
                            ),
                            'woo_upsell_tablet'  => array(
                                'id'      => 'woo_upsell_tablet',
                                'title'   => esc_html__('items on Tablet', 'armania'),
                                'desc'    => esc_html__('(Screen resolution of device >= 480px & < 992px )', 'armania'),
                                'type'    => 'slider',
                                'default' => 3,
                                'min'     => 1,
                                'max'     => 6,
                                'unit'    => 'item(s)',
                            ),
                            'woo_upsell_mobile'  => array(
                                'id'      => 'woo_upsell_mobile',
                                'title'   => esc_html__('items on Desktop', 'armania'),
                                'desc'    => esc_html__('(Screen resolution of device < 480px )', 'armania'),
                                'type'    => 'slider',
                                'default' => 2,
                                'min'     => 1,
                                'max'     => 6,
                                'unit'    => 'item(s)',
                            ),
                        ),
                    ),
                ),
            );
        }
        $options['social']     = array(
            'name'   => 'social',
            'icon'   => 'fa fa-users',
            'title'  => esc_html__('Social', 'armania'),
            'fields' => array(
                array(
                    'id'              => 'user_all_social',
                    'type'            => 'group',
                    'title'           => esc_html__('Social', 'armania'),
                    'button_title'    => esc_html__('Add New Social', 'armania'),
                    'accordion_title' => esc_html__('Social Settings', 'armania'),
                    'fields'          => array(
                        array(
                            'id'      => 'title_social',
                            'type'    => 'text',
                            'title'   => esc_html__('Title Social', 'armania'),
                            'default' => 'Facebook',
                        ),
                        array(
                            'id'      => 'link_social',
                            'type'    => 'text',
                            'title'   => esc_html__('Link Social', 'armania'),
                            'default' => 'https://facebook.com',
                        ),
                        array(
                            'id'      => 'icon_social',
                            'type'    => 'icon',
                            'title'   => esc_html__('Icon Social', 'armania'),
                            'default' => 'fa fa-facebook',
                        ),
                    ),
                    'default'         => array(
                        array(
                            'title_social' => 'Facebook',
                            'link_social'  => 'https://facebook.com/',
                            'icon_social'  => 'fa fa-facebook',
                        ),
                        array(
                            'title_social' => 'Twitter',
                            'link_social'  => 'https://twitter.com/',
                            'icon_social'  => 'fa fa-twitter',
                        ),
                        array(
                            'title_social' => 'Youtube',
                            'link_social'  => 'https://youtube.com/',
                            'icon_social'  => 'fa fa-youtube',
                        ),
                        array(
                            'title_social' => 'Pinterest',
                            'link_social'  => 'https://pinterest.com/',
                            'icon_social'  => 'fa fa-pinterest',
                        ),
                        array(
                            'title_social' => 'Instagram',
                            'link_social'  => 'https://instagram.com/',
                            'icon_social'  => 'fa fa-instagram',
                        ),
                    ),
                ),
            ),
        );
        $options['typography'] = array(
            'name'   => 'typography',
            'icon'   => 'fa fa-font',
            'title'  => esc_html__('Typography', 'armania'),
            'fields' => array(
                'body_typography'    => array(
                    'id'                 => 'body_typography',
                    'type'               => 'typography',
                    'title'              => esc_html__('Typography of Body', 'armania'),
                    'desc'               => esc_html__('(default is Open Sans)', 'armania'),
                    'font_family'        => true,
                    'font_weight'        => true,
                    'font_style'         => true,
                    'font_size'          => true,
                    'line_height'        => false,
                    'letter_spacing'     => false,
                    'text_align'         => false,
                    'text_transform'     => false,
                    'color'              => true,
                    'subset'             => true,
                    'extra_styles'       => true,
                    'backup_font_family' => false,
                    'font_variant'       => false,
                    'word_spacing'       => false,
                    'text_decoration'    => false,
                    'output'             => 'body',
                ),
                'special_typography' => array(
                    'id'             => 'special_typography',
                    'type'           => 'typography',
                    'title'          => esc_html__('Typography of Special texts', 'armania'),
                    'desc'           => esc_html__('(default is Spartan)', 'armania'),
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
        );
        $options['backup']     = array(
            'name'   => 'backup',
            'icon'   => 'fa fa-bold',
            'title'  => esc_html__('Backup / Reset', 'armania'),
            'fields' => array(
                'reset'             => array(
                    'id'    => 'reset',
                    'type'  => 'backup',
                    'title' => esc_html__('Reset', 'armania'),
                ),
                'delete_transients' => array(
                    'id'      => 'delete_transients',
                    'type'    => 'content',
                    'content' => '<a href="#" data-text-done="'.esc_attr__('%n transient database entries have been deleted.', 'armania').'" class="button button-primary delete-transients"/>'.esc_html__('Delete Transients', 'armania').'</a><span class="spinner" style="float:none;"></span>',
                    'title'   => esc_html__('Delete Transients', 'armania'),
                    'desc'    => esc_html__('All transient related database entries will be deleted.', 'armania'),
                    'after'   => ' <p class="ovic-text-success"></p>',
                ),
            ),
        );
        //
        // Framework Settings
        //
        $settings = array(
            'option_name'      => '_ovic_customize_options',
            'menu_title'       => esc_html__('Theme Options', 'armania'),
            'menu_type'        => 'submenu', // menu, submenu, options, theme, etc.
            'menu_parent'      => 'ovic_addon-dashboard',
            'menu_slug'        => 'ovic_theme_options',
            'menu_position'    => 5,
            'show_search'      => true,
            'show_reset'       => true,
            'show_footer'      => false,
            'show_all_options' => true,
            'ajax_save'        => true,
            'sticky_header'    => false,
            'save_defaults'    => true,
            'framework_title'  => sprintf(
                '%s <small>%s <a href="%s" target="_blank">%s</a></small>',
                esc_html__('Theme Options', 'armania'),
                esc_html__('by', 'armania'),
                esc_url('https://kutethemes.com/'),
                esc_html__('Kutethemes', 'armania')
            ),
        );

        OVIC_Options::instance($settings, apply_filters('armania_framework_theme_options', $options));
    }

    add_action('init', 'armania_theme_options');
}