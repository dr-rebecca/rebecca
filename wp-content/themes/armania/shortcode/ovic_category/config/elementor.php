<?php
if (!defined('ABSPATH')) {
    exit();
}

use \Elementor\Controls_Manager as Controls_Manager;

class Elementor_Ovic_Category extends Ovic_Widget_Elementor
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
        return 'ovic_category';
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
        return esc_html__('Category', 'armania');
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
        return 'eicon-product-categories';
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
                'options' => armania_preview_options('ovic_category'),
                'default' => 'style-01',
            ]
        );

        $this->add_control(
            'image',
            [
                'type'      => Controls_Manager::MEDIA,
                'label'     => esc_html__('Background', 'armania'),
                'condition' => [
                    'style' => 'style-07'
                ],
            ]
        );

        $this->add_control(
            'title',
            [
                'label_block' => true,
                'type'        => Controls_Manager::TEXT,
                'label'       => esc_html__('Title', 'armania'),
                'condition'   => [
                    'style' => [
                        'style-07',
                    ],
                ],
            ]
        );

        $this->add_control(
            'category',
            [
                'label'       => esc_html__('Products Category', 'armania'),
                'type'        => Controls_Manager::SELECT2,
                'options'     => $this->get_taxonomy([
                    'hide_empty' => false,
                    'taxonomy'   => 'product_cat',
                ]),
                'multiple'    => true,
                'label_block' => true,
            ]
        );

        $this->add_control(
            'link',
            [
                'label_block' => true,
                'type'        => Controls_Manager::URL,
                'label'       => esc_html__('Link', 'armania'),
                'placeholder' => esc_html__('https://your-link.com', 'armania'),
                'condition'   => [
                    'style' => [
                        'style-07',
                    ],
                ],
            ]
        );

        $this->add_control(
            'link_text',
            [
                'type'      => Controls_Manager::TEXT,
                'label'     => esc_html__('Link text', 'armania'),
                'default'   => esc_html__('View all', 'armania'),
                'condition' => [
                    'style' => [
                        'style-07',
                    ],
                ],
            ]
        );

        $this->end_controls_section();

        $this->carousel_settings([
            'tab'       => \Elementor\Controls_Manager::TAB_SETTINGS,
            'label'     => esc_html__('Carousel Settings', 'armania'),
            'condition' => [
                'style!' => 'style-07',
            ],
        ]);
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        echo ovic_do_shortcode($this->get_name(), $settings);
    }
}