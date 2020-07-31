<?php
if (!defined('ABSPATH')) {
    exit;
}

if (!class_exists('Widget_Ovic_Products')) {
    class Widget_Ovic_Products extends OVIC_Widget
    {
        /**
         * Constructor.
         */
        public function __construct()
        {
            $this->widget_cssclass    = 'ovic-products';
            $this->widget_description = 'Display the customer products.';
            $this->widget_id          = 'ovic_products';
            $this->widget_name        = esc_html__('Ovic: Products', 'armania');
            $this->settings           = array(
                'title'         => array(
                    'type'  => 'text',
                    'title' => esc_html__('Title', 'armania'),
                ),
                'product_style' => array(
                    'type'        => 'select_preview',
                    'title'       => esc_html__('Product style', 'armania'),
                    'options'     => armania_product_options('Shortcode'),
                    'default'     => 'style-01',
                    'description' => esc_html__('Select a style for product item', 'armania'),
                ),
                'target'        => array(
                    'type'        => 'select',
                    'title'       => esc_html__('Target', 'armania'),
                    'options'     => array(
                        'recent_products'       => esc_html__('Recent Products', 'armania'),
                        'featured_products'     => esc_html__('Feature Products', 'armania'),
                        'sale_products'         => esc_html__('Sale Products', 'armania'),
                        'best_selling_products' => esc_html__('Best Selling Products', 'armania'),
                        'top_rated_products'    => esc_html__('Top Rated Products', 'armania'),
                        'products'              => esc_html__('Products', 'armania'),
                        'product_category'      => esc_html__('Products Category', 'armania'),
                        'related_products'      => esc_html__('Products Related', 'armania'),
                    ),
                    'attributes'  => array(
                        'data-depend-id' => 'target',
                        'style'          => 'width:100%',
                    ),
                    'default'     => 'recent_products',
                    'description' => esc_html__('Choose the target to filter products', 'armania'),
                ),
                'ids'           => array(
                    'type'        => 'select',
                    'chosen'      => true,
                    'multiple'    => true,
                    'sortable'    => true,
                    'ajax'        => true,
                    'options'     => 'posts',
                    'query_args'  => array(
                        'post_type' => 'product',
                    ),
                    'title'       => esc_html__('Products', 'armania'),
                    'description' => esc_html__('Enter List of Products', 'armania'),
                    'dependency'  => array('target', '==', 'products'),
                ),
                'category'      => array(
                    'type'        => 'select',
                    'chosen'      => true,
                    'options'     => 'categories',
                    'placeholder' => esc_html__('Select Products Category', 'armania'),
                    'query_args'  => array(
                        'hide_empty' => true,
                        'taxonomy'   => 'product_cat',
                    ),
                    'attributes'  => array(
                        'style' => 'width:100%',
                    ),
                    'title'       => esc_html__('Product Categories', 'armania'),
                    'description' => esc_html__('Note: If you want to narrow output, select category(s) above. Only selected categories will be displayed.',
                        'armania'),
                    'dependency'  => array('target', '!=', 'products'),
                ),
                'limit'         => array(
                    'type'        => 'number',
                    'unit'        => 'items(s)',
                    'default'     => '6',
                    'title'       => esc_html__('Limit', 'armania'),
                    'description' => esc_html__('How much items per page to show', 'armania'),
                ),
                'orderby'       => array(
                    'type'        => 'select',
                    'title'       => esc_html__('Order by', 'armania'),
                    'options'     => array(
                        ''              => esc_html__('None', 'armania'),
                        'date'          => esc_html__('Date', 'armania'),
                        'ID'            => esc_html__('ID', 'armania'),
                        'author'        => esc_html__('Author', 'armania'),
                        'title'         => esc_html__('Title', 'armania'),
                        'modified'      => esc_html__('Modified', 'armania'),
                        'rand'          => esc_html__('Random', 'armania'),
                        'comment_count' => esc_html__('Comment count', 'armania'),
                        'menu_order'    => esc_html__('Menu order', 'armania'),
                        'price'         => esc_html__('Price: low to high', 'armania'),
                        'price-desc'    => esc_html__('Price: high to low', 'armania'),
                        'rating'        => esc_html__('Average Rating', 'armania'),
                        'popularity'    => esc_html__('Popularity', 'armania'),
                        'post__in'      => esc_html__('Post In', 'armania'),
                        'most-viewed'   => esc_html__('Most Viewed', 'armania'),
                    ),
                    'attributes'  => array(
                        'style' => 'width:100%',
                    ),
                    'description' => sprintf(esc_html__('Select how to sort retrieved products. More at %s.',
                        'armania'),
                        '<a href="'.esc_url('http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters').'" target="_blank">'.esc_html__('WordPress codex page',
                            'armania').'</a>'),
                ),
                'order'         => array(
                    'type'        => 'select',
                    'title'       => esc_html__('Sort order', 'armania'),
                    'options'     => array(
                        ''     => esc_html__('None', 'armania'),
                        'DESC' => esc_html__('Descending', 'armania'),
                        'ASC'  => esc_html__('Ascending', 'armania'),
                    ),
                    'attributes'  => array(
                        'style' => 'width:100%',
                    ),
                    'description' => sprintf(esc_html__('Designates the ascending or descending order. More at %s.',
                        'armania'),
                        '<a href="'.esc_url('http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters').'" target="_blank">'.esc_html__('WordPress codex page',
                            'armania').'</a>'),
                ),
            );

            parent::__construct();
        }

        /**
         * Output widget.
         *
         * @param  array  $args
         * @param  array  $instance
         *
         * @see WP_Widget
         *
         */
        public function widget($args, $instance)
        {
            $atts               = $instance;
            $atts['list_style'] = 'owl';
            $atts['slide_nav']  = 'nav-top';
            $atts['carousel']   = array(
                'slidesToShow' => 1,
                'rows'         => 3,
                'slidesMargin' => 0,
                'arrows'       => true,
                'infinite'     => false,
            );
            if (!empty($atts['ids'])) {
                $atts['ids'] = implode(',', $atts['ids']);
            }
            $atts['product_image_size'] = 'custom';
            $width                      = 300;
            $height                     = 300;
            if (function_exists('wc_get_image_size')) {
                $size   = wc_get_image_size('shop_catalog');
                $width  = isset($size['width']) ? $size['width'] : $width;
                $height = isset($size['height']) ? $size['height'] : $height;
            }
            $atts['product_custom_thumb_width']  = $width;
            $atts['product_custom_thumb_height'] = $height;
            
            $atts = apply_filters('armania_widget_product_params', $atts);

            unset($instance['title']);

            $this->widget_start($args, $instance);

            echo ovic_do_shortcode('ovic_products', $atts);

            $this->widget_end($args);
        }
    }
}