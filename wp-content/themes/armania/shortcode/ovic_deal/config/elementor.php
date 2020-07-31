<?php
if (!defined('ABSPATH')) {
    exit();
}

use \Elementor\Controls_Manager as Controls_Manager;

class Elementor_Ovic_Deal extends Ovic_Widget_Elementor
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
        return 'ovic_deal';
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
        return esc_html__('Daily Deal', 'armania');
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

        $this->add_control(
            'style',
            [
                'type'    => Controls_Manager::SELECT,
                'label'   => esc_html__('Select style', 'armania'),
                'options' => armania_preview_options('ovic_deal'),
                'default' => 'style-01',
            ]
        );

        $this->add_control(
            'image',
            [
                'type'      => Controls_Manager::MEDIA,
                'label'     => esc_html__('Image', 'armania'),
                'condition' => [
                    'style' => 'style-01'
                ],
            ]
        );

        $this->add_control(
            'date',
            [
                'type'           => Controls_Manager::DATE_TIME,
                'label'          => esc_html__('Countdown', 'armania'),
                'picker_options' => [
                    'dateFormat' => 'm/j/Y H:i:s',
                    'time_24hr'  => true,
                ],
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
            'desc',
            [
                'type'        => Controls_Manager::TEXTAREA,
                'label'       => esc_html__('Descriptions', 'armania'),
                'description' => esc_html__('using tag <span></span> for special text', 'armania'),
                'condition'   => [
                    'style' => [
                        'style-01',
                        'style-02',
                        'style-04',
                    ]
                ],
            ]
        );

        $this->add_control(
            'btn_link',
            [
                'type'      => Controls_Manager::URL,
                'label'     => esc_html__('Button Link', 'armania'),
                'condition' => [
                    'style' => [
                        'style-01',
                        'style-04',
                        'style-05',
                    ]
                ],
            ]
        );

        $this->add_control(
            'btn_txt',
            [
                'type'      => Controls_Manager::TEXT,
                'label'     => esc_html__('Button Text', 'armania'),
                'condition' => [
                    'style' => [
                        'style-01',
                        'style-04',
                        'style-05',
                    ]
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'product_section',
            array(
                'tab'   => Controls_Manager::TAB_CONTENT,
                'label' => esc_html__('Product settings', 'armania'),
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

        $this->end_controls_section();

        $this->start_controls_section(
            'carousel_section',
            [
                'tab'   => \Elementor\Controls_Manager::TAB_SETTINGS,
                'label' => esc_html__('Carousel', 'armania'),
            ]
        );

        $this->add_control(
            'slide_nav',
            [
                'label'   => esc_html__('Nav style', 'armania'),
                'type'    => Controls_Manager::SELECT,
                'options' => [
                    ''        => esc_html__('Default', 'armania'),
                    'nav-top' => esc_html__('Nav Top', 'armania'),
                    'nav-out' => esc_html__('Nav Out', 'armania'),
                ],
            ]
        );

        $this->carousel_settings(false);

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        echo ovic_do_shortcode($this->get_name(), $settings);
    }
}