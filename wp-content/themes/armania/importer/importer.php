<?php
// Prevent direct access to this file
defined('ABSPATH') || die('Direct access to this file is not allowed.');
/**
 * Core class.
 *
 * @package  Ovic
 * @since    1.0
 */
if (!class_exists('Ovic_Import_Demo_Content')) {
    class Ovic_Import_Demo_Content
    {
        /**
         * Define theme version.
         *
         * @var  string
         */
        const VERSION = '1.0.0';

        public $demo_url = 'https://armania.kutethemes.net/';

        public function __construct()
        {
            add_action('ovic_after_content_import', array($this, 'after_content_import'), 999);
            add_filter('ovic_import_config', array($this, 'import_config'));
            add_filter('ovic_import_wooCommerce_attributes', array($this, 'woocommerce_attributes'));
        }

        function woocommerce_attributes()
        {
            return array(
                array(
                    'attribute_name'    => 'capacity',
                    'attribute_label'   => 'Capacity',
                    'attribute_type'    => 'select',
                    'attribute_orderby' => 'menu_order',
                    'attribute_public'  => '0',
                ),
                array(
                    'attribute_name'    => 'color',
                    'attribute_label'   => 'Color',
                    'attribute_type'    => 'color',
                    'attribute_orderby' => 'menu_order',
                    'attribute_public'  => '0',
                ),
                array(
                    'attribute_name'    => 'size',
                    'attribute_label'   => 'Size',
                    'attribute_type'    => 'button',
                    'attribute_orderby' => 'menu_order',
                    'attribute_public'  => '0',
                ),
                array(
                    'attribute_name'    => 'weight',
                    'attribute_label'   => 'Weight',
                    'attribute_type'    => 'select',
                    'attribute_orderby' => 'menu_order',
                    'attribute_public'  => '0',
                ),
            );
        }

        function import_config($data_filter)
        {
            $config = $this->demo_url.'armania-import/config.json';
            if (!is_wp_error($config = wp_remote_get($config))) {
                if (!empty($config)) {
                    $config                    = wp_remote_retrieve_body($config);
                    $data_filter['data_demos'] = json_decode($config, true);
                }
            }
            $data_filter['woo_single']  = '600';
            $data_filter['woo_catalog'] = '320';
            $data_filter['woo_ratio']   = '1:1';

            return $data_filter;
        }

        public function after_content_import()
        {
            $menus    = get_terms(
                'nav_menu',
                array(
                    'hide_empty' => true,
                )
            );
            $home_url = get_home_url();
            if (!empty($menus)) {
                foreach ($menus as $menu) {
                    $items = wp_get_nav_menu_items($menu->term_id);
                    if (!empty($items)) {
                        foreach ($items as $item) {
                            $_menu_item_url = get_post_meta($item->ID, '_menu_item_url', true);
                            if (!empty($_menu_item_url)) {
                                $_menu_item_url = str_replace("https://armania.kutethemes.net", $home_url, $_menu_item_url);
                                $_menu_item_url = str_replace("http://armania.kutethemes.net", $home_url, $_menu_item_url);
                                update_post_meta($item->ID, '_menu_item_url', $_menu_item_url);
                            }
                        }
                    }
                }
            }
            if (function_exists('_mc4wp_load_plugin')) {
                update_option('mc4wp',
                    array(
                        'api_key' => '64440dab957c38d5c6bed316ecfbfcca-us14',
                    )
                );
                //update_option('mc4wp_default_form_id', '708');
            }

            $cpt_support   = get_option('elementor_cpt_support', ['page', 'post']);
            $cpt_support[] = 'ovic_menu';
            $cpt_support[] = 'ovic_footer';

            update_option('elementor_cpt_support', $cpt_support);
            update_option('elementor_disable_color_schemes', 'yes');
            update_option('elementor_disable_typography_schemes', 'yes');
        }
    }

    new Ovic_Import_Demo_Content();
}