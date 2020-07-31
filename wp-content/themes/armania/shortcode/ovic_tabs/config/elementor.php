<?php
if (!defined('ABSPATH')) {
    exit();
}

use Elementor\Controls_Manager as Controls_Manager;

class Elementor_Ovic_Tabs extends Ovic_Widget_Elementor
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
        return 'ovic_tabs';
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
        return esc_html__('Tabs', 'armania');
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
        return 'eicon-product-tabs';
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
            [
                'tab'   => Controls_Manager::TAB_CONTENT,
                'label' => esc_html__('General', 'armania'),
            ]
        );

        $this->start_controls_tabs('tabs_general');

        $this->start_controls_tab(
            'tab_general',
            [
                'label' => esc_html__('Settings', 'armania'),
            ]
        );

        $this->add_control(
            'style',
            [
                'type'    => Controls_Manager::SELECT,
                'label'   => esc_html__('Select style', 'armania'),
                'options' => armania_preview_options($this->get_name()),
                'default' => 'style-01',
            ]
        );

        $this->add_control(
            'active',
            [
                'label'   => esc_html__('Tabs active', 'armania'),
                'type'    => Controls_Manager::NUMBER,
                'default' => 1,
            ]
        );

        $this->add_control(
            'is_ajax',
            [
                'label' => esc_html__('Tabs ajax', 'armania'),
                'type'  => Controls_Manager::SWITCHER,
            ]
        );

        $this->add_control(
            'title',
            [
                'type'  => Controls_Manager::TEXT,
                'label' => esc_html__('Title', 'armania'),
            ]
        );

        $this->add_control(
            'lighter',
            [
                'label'     => esc_html__('Lighter', 'armania'),
                'type'      => Controls_Manager::SWITCHER,
                'condition' => [
                    'style' => 'style-09'
                ],
            ]
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
            'overflow_visible',
            [
                'label' => esc_html__('Overflow', 'armania'),
                'type'  => Controls_Manager::SWITCHER,
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
                    'style' => [
                        'style-03',
                        'style-06',
                    ],
                ],
            ]
        );

        $this->add_control(
            'text_button',
            [
                'type'      => Controls_Manager::TEXT,
                'label'     => esc_html__('Text button', 'armania'),
                'default'   => 'View all products',
                'condition' => [
                    'style' => [
                        'style-03',
                        'style-06',
                    ],
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'tab_items',
            [
                'label' => esc_html__('Tabs', 'armania'),
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->start_controls_tabs('tab_repeater');

        $repeater->start_controls_tab(
            'tab_title',
            [
                'label' => esc_html__('Title', 'armania'),
            ]
        );

        $repeater->add_control(
            'disable_rating',
            [
                'label' => esc_html__('Disable Rating', 'armania'),
                'type'  => Controls_Manager::SWITCHER,
            ]
        );


        $repeater->add_control(
            'content',
            [
                'label'   => esc_html__('Content', 'armania'),
                'type'    => Controls_Manager::SELECT,
                'options' => [
                    'product'  => esc_html__('Products', 'armania'),
                    'template' => esc_html__('Template', 'armania'),
                ],
                'default' => 'product',
            ]
        );

        $repeater->add_control(
            'image',
            [
                'label' => esc_html__('Image', 'armania'),
                'type'  => Controls_Manager::MEDIA,
            ]
        );

        $repeater->add_control(
            'title',
            [
                'label'       => esc_html__('Title', 'armania'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Tab Title', 'armania'),
                'placeholder' => esc_html__('Tab Title', 'armania'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'text',
            [
                'label' => esc_html__('Text Tab', 'armania'),
                'type'  => Controls_Manager::TEXT,
            ]
        );

        $repeater->end_controls_tab();

        $repeater->start_controls_tab(
            'tab_template',
            [
                'label'     => esc_html__('Template', 'armania'),
                'condition' => [
                    'content' => 'template',
                ],
            ]
        );

        if (class_exists('ElementorPro\Modules\QueryControl\Module')) {
            $repeater->add_control(
                'template_id',
                [
                    'label'        => esc_html__('Template ID', 'armania'),
                    'type'         => ElementorPro\Modules\QueryControl\Module::QUERY_CONTROL_ID,
                    'options'      => [],
                    'label_block'  => true,
                    'multiple'     => false,
                    'autocomplete' => [
                        'object' => ElementorPro\Modules\QueryControl\Module::QUERY_OBJECT_POST,
                        'query'  => [
                            'post_type' => 'elementor_library'
                        ],
                    ],
                    'description'  => sprintf('%s <a href="%s" target="_blank">%s</a>',
                        esc_html__('Create template from', 'armania'),
                        admin_url('edit.php?post_type=elementor_library&tabs_group=library'),
                        esc_html__('Here', 'armania')
                    ),
                    'export'       => false,
                ]
            );
        } else {
            $repeater->add_control(
                'template_id',
                [
                    'label'       => esc_html__('Template ID', 'armania'),
                    'type'        => Controls_Manager::TEXT,
                    'label_block' => true,
                    'placeholder' => '1',
                    'description' => sprintf('%s <a href="%s" target="_blank">%s</a>',
                        esc_html__('Create template from', 'armania'),
                        admin_url('edit.php?post_type=elementor_library&tabs_group=library'),
                        esc_html__('Here', 'armania')
                    ),
                ]
            );
        }

        $repeater->end_controls_tab();

        $repeater->start_controls_tab(
            'tab_product',
            [
                'label'     => esc_html__('Product', 'armania'),
                'condition' => [
                    'content' => 'product',
                ],
            ]
        );

        $repeater->add_control(
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

        $repeater->add_control(
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

        $repeater->add_control(
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

        $repeater->add_control(
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
            $repeater->add_control(
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
            $repeater->add_control(
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

        $repeater->add_control(
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

        $repeater->add_control(
            'limit',
            [
                'label'       => esc_html__('Limit', 'armania'),
                'type'        => Controls_Manager::NUMBER,
                'default'     => 6,
                'placeholder' => 6,
            ]
        );

        $repeater->add_control(
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

        $repeater->add_control(
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

        $repeater->end_controls_tab();

        $repeater->end_controls_tabs();

        $this->add_control(
            'tabs',
            [
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'title_field' => '{{{ title }}}',
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();

        $this->carousel_settings();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        echo ovic_do_shortcode($this->get_name(), $settings);
    }
}