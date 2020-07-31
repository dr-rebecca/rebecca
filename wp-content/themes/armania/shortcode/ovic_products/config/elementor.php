<?php
if (!defined('ABSPATH')) {
    exit();
}

use \Elementor\Controls_Manager as Controls_Manager;

class Elementor_Ovic_Products extends Ovic_Widget_Elementor
{
    /**
     * Get widget name.
     *
     * Retrieve image widget name.
     *
     * @return string Widget name.
     * @since 1.0.0
     * @access public
     *
     */
    public function get_name()
    {
        return 'ovic_products';
    }

    /**
     * Get widget title.
     *
     * Retrieve image widget title.
     *
     * @return string Widget title.
     * @since 1.0.0
     * @access public
     *
     */
    public function get_title()
    {
        return esc_html__('Products', 'armania');
    }

    /**
     * Get widget icon.
     *
     * Retrieve image widget icon.
     *
     * @return string Widget icon.
     * @since 1.0.0
     * @access public
     *
     */
    public function get_icon()
    {
        return 'eicon-woocommerce';
    }

    /**
     * Get widget categories.
     *
     * Retrieve the list of categories the image widget belongs to.
     *
     * Used to determine where to display the widget in the editor.
     *
     * @return array Widget categories.
     * @since 2.0.0
     * @access public
     *
     */
    public function get_categories()
    {
        return array('ovic');
    }

    protected function _register_controls()
    {
        $this->start_controls_section(
            'general_section',
            array(
                'tab'   => Controls_Manager::TAB_CONTENT,
                'label' => esc_html__('General', 'armania'),
            )
        );

        $this->start_controls_tabs('tabs_general');

        $this->start_controls_tab(
            'tab_general',
            [
                'label' => esc_html__('Settings', 'armania'),
            ]
        );

        $this->add_control(
            'title',
            [
                'label_block' => true,
                'type'        => Controls_Manager::TEXT,
                'label'       => esc_html__('Title', 'armania'),
            ]
        );

        $this->add_control(
            'width_title',
            [
                'label'     => esc_html__('Width title', 'armania'),
                'type'      => Controls_Manager::SLIDER,
                'range'     => [
                    'px' => [
                        'min' => 1,
                        'max' => 500,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .ovic-title.style-01 .title' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'list_style',
            array(
                'type'    => Controls_Manager::SELECT,
                'label'   => esc_html__('List style', 'armania'),
                'options' => [
                    'none' => esc_html__('None', 'armania'),
                    'grid' => esc_html__('Bootstrap', 'armania'),
                    'owl'  => esc_html__('Carousel', 'armania'),
                ],
                'default' => 'owl',
            )
        );

        $this->add_control(
            'product_style',
            array(
                'type'        => Controls_Manager::SELECT,
                'label'       => esc_html__('Product style', 'armania'),
                'options'     => armania_product_options('Shortcode', true),
                'default'     => 'style-01',
                'description' => esc_html__('Select a style for product item', 'armania'),
            )
        );

        $this->product_size_field();

        $this->add_control(
            'disable_rating',
            [
                'label' => esc_html__('Disable Rating', 'armania'),
                'type'  => Controls_Manager::SWITCHER,
            ]
        );

        $this->add_control(
            'overflow_visible',
            [
                'label' => esc_html__('Overflow', 'armania'),
                'type'  => Controls_Manager::SWITCHER,
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'tab_products',
            [
                'label' => esc_html__('Products', 'armania'),
            ]
        );

        $this->add_control(
            'pagination',
            [
                'label'   => esc_html__('Pagination', 'armania'),
                'type'    => Controls_Manager::SELECT,
                'options' => [
                    'none'      => esc_html__('None', 'armania'),
                    'view_all'  => esc_html__('View all', 'armania'),
                    'load_more' => esc_html__('Load More', 'armania'),
                    'infinite'  => esc_html__('Infinite Scrolling', 'armania'),
                ],
                'default' => 'none',
            ]
        );

        $this->add_control(
            'link',
            [
                'type'        => Controls_Manager::URL,
                'label'       => esc_html__('Link', 'armania'),
                'placeholder' => esc_html__('https://your-link.com', 'armania'),
                'default'     => [
                    'url' => '#',
                ],
                'condition'   => [
                    'pagination' => 'view_all',
                ],
            ]
        );

        $this->add_control(
            'text_button',
            [
                'type'      => Controls_Manager::TEXT,
                'label'     => esc_html__('Text button', 'armania'),
                'default'   => 'VIEW ALL',
                'condition' => [
                    'pagination' => 'view_all',
                ],
            ]
        );

        $this->add_control(
            'target',
            [
                'label'   => esc_html__('Target', 'armania'),
                'type'    => Controls_Manager::SELECT,
                'options' => [
                    'recent_products'       => esc_html__('Recent Products', 'armania'),
                    'featured_products'     => esc_html__('Feature Products', 'armania'),
                    'sale_products'         => esc_html__('Sale Products', 'armania'),
                    'best_selling_products' => esc_html__('Best Selling Products', 'armania'),
                    'top_rated_products'    => esc_html__('Top Rated Products', 'armania'),
                    'products'              => esc_html__('Products', 'armania'),
                    'product_category'      => esc_html__('Products Category', 'armania'),
                    'related_products'      => esc_html__('Products Related', 'armania'),
                ],
                'default' => 'recent_products',
            ]
        );

        if (class_exists('ElementorPro\Modules\QueryControl\Module')) {
            $this->add_control(
                'ids',
                [
                    'label'        => esc_html__('Search Product', 'armania'),
                    'type'         => ElementorPro\Modules\QueryControl\Module::QUERY_CONTROL_ID,
                    'options'      => [],
                    'label_block'  => true,
                    'multiple'     => true,
                    'autocomplete' => [
                        'object' => ElementorPro\Modules\QueryControl\Module::QUERY_OBJECT_POST,
                        'query'  => [
                            'post_type' => 'product'
                        ],
                    ],
                    'condition'    => [
                        'target' => 'products'
                    ],
                    'export'       => false,
                ]
            );
        } else {
            $this->add_control(
                'ids',
                [
                    'label'       => esc_html__('Product', 'armania'),
                    'type'        => Controls_Manager::TEXT,
                    'description' => esc_html__('Product ids', 'armania'),
                    'placeholder' => '1,2,3',
                    'label_block' => true,
                    'condition'   => [
                        'target' => 'products'
                    ],
                ]
            );
        }

        $this->add_control(
            'category',
            [
                'label'       => esc_html__('Products Category', 'armania'),
                'type'        => Controls_Manager::SELECT2,
                'options'     => $this->get_taxonomy([
                    'hide_empty' => true,
                    'taxonomy'   => 'product_cat',
                ]),
                'label_block' => true,
                'condition'   => [
                    'target!' => 'products'
                ],
            ]
        );

        $this->add_control(
            'limit',
            [
                'label'       => esc_html__('Limit', 'armania'),
                'type'        => Controls_Manager::NUMBER,
                'default'     => 6,
                'placeholder' => 6,
            ]
        );

        $this->add_control(
            'orderby',
            [
                'label'   => esc_html__('Order by', 'armania'),
                'type'    => Controls_Manager::SELECT,
                'options' => [
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
                ],
            ]
        );

        $this->add_control(
            'order',
            [
                'label'   => esc_html__('Sort order', 'armania'),
                'type'    => Controls_Manager::SELECT,
                'options' => [
                    ''     => esc_html__('None', 'armania'),
                    'DESC' => esc_html__('Descending', 'armania'),
                    'ASC'  => esc_html__('Ascending', 'armania'),
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();

        $this->start_controls_section(
            'carousel_section',
            [
                'tab'       => Controls_Manager::TAB_SETTINGS,
                'label'     => esc_html__('Carousel settings', 'armania'),
                'condition' => [
                    'list_style' => 'owl',
                ],
            ]
        );

        $this->add_control(
            'slide_nav',
            [
                'label'   => esc_html__('Nav style', 'armania'),
                'type'    => Controls_Manager::SELECT,
                'options' => [
                    ''           => esc_html__('Default', 'armania'),
                    'nav-out'    => esc_html__('Nav Out', 'armania'),
                    'nav-top'    => esc_html__('Nav Top', 'armania'),
                    'nav-simple' => esc_html__('Nav Simple', 'armania'),
                ],
            ]
        );

        $this->carousel_settings(false);

        $this->end_controls_section();

        $this->bootstrap_settings([
            'tab'       => Controls_Manager::TAB_SETTINGS,
            'label'     => esc_html__('Bootstrap settings', 'armania'),
            'condition' => [
                'list_style' => 'grid',
            ],
        ]);
    }

    protected function render()
    {
        $settings        = $this->get_settings_for_display();
        $settings['_id'] = substr($this->get_id_int(), 0, 3);

        echo ovic_do_shortcode($this->get_name(), $settings);
    }
}