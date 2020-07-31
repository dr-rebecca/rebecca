<?php
if (!defined('ABSPATH')) {
    exit();
}

use \Elementor\Controls_Manager as Controls_Manager;

class Elementor_Ovic_Brand extends Ovic_Widget_Elementor
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
        return 'ovic_brand';
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
        return esc_html__('Brand', 'armania');
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
        return array('ovic', 'brand');
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
                'options' => armania_preview_options('ovic_brand'),
                'default' => 'style-01',
            ]
        );

        $this->add_control(
            'title',
            [
                'label'       => esc_html__('Title', 'armania'),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
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
            'hover_animation',
            [
                'label' => esc_html__('Hover Animation', 'armania'),
                'type'  => Controls_Manager::HOVER_ANIMATION,
            ]
        );

        $this->add_control(
            'image_effect',
            [
                'type'    => Controls_Manager::SELECT,
                'label'   => esc_html__( 'Ovic Hover Animation', 'armania' ),
                'options' => [
                    'none'                          => esc_html__( 'None', 'armania' ),
                    'zoom'                          => esc_html__( 'Zoom jquery', 'armania' ),
                    'effect normal-effect'          => esc_html__( 'Normal Effect', 'armania' ),
                    'effect normal-effect dark-bg'  => esc_html__( 'Normal Effect Dark', 'armania' ),
                    'effect effect faded-in'        => esc_html__( 'Faded In', 'armania' ),
                    'effect bounce-in'              => esc_html__( 'Bounce In', 'armania' ),
                    'effect background-zoom'        => esc_html__( 'Background Zoom', 'armania' ),
                    'effect background-slide'       => esc_html__( 'Background Slide', 'armania' ),
                    'effect rotate-in rotate-left'  => esc_html__( 'Rotate Left In', 'armania' ),
                    'effect rotate-in rotate-right' => esc_html__( 'Rotate Right In', 'armania' ),
                    'effect plus-zoom'              => esc_html__( 'Plus Zoom', 'armania' ),
                    'effect border-zoom'            => esc_html__( 'Border Zoom', 'armania' ),
                    'effect border-scale'           => esc_html__( 'Border ScaleUp', 'armania' ),
                    'effect border-plus'            => esc_html__( 'Border Plus', 'armania' ),
                    'effect overlay-plus'           => esc_html__( 'Overlay Plus', 'armania' ),
                    'effect overlay-cross'          => esc_html__( 'Overlay Cross', 'armania' ),
                    'effect overlay-horizontal'     => esc_html__( 'Overlay Horizontal', 'armania' ),
                    'effect overlay-vertical'       => esc_html__( 'Overlay Vertical', 'armania' ),
                    'effect flashlight'             => esc_html__( 'Flashlight', 'armania' ),
                ],
                'default' => 'none',
            ]
        );

        $this->add_control(
            'category',
            [
                'label'       => esc_html__('Products Brand', 'armania'),
                'type'        => Controls_Manager::SELECT2,
                'options'     => $this->get_taxonomy([
                    'hide_empty' => false,
                    'taxonomy'   => 'product_brand',
                ]),
                'multiple'    => true,
                'label_block' => true,
            ]
        );

        $this->add_control(
            'height',
            [
                'label'     => esc_html__('Height', 'armania'),
                'type'      => Controls_Manager::SLIDER,
                'range'     => [
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .brand-item .link' => 'height: {{SIZE}}{{UNIT}};',
                ],
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
            ]
        );

        $this->add_control(
            'text_button',
            [
                'type'  => Controls_Manager::TEXT,
                'label' => esc_html__('Text button', 'armania'),
            ]
        );

        $this->end_controls_section();

        $this->carousel_settings();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        if (!empty($settings['text_button'])) {
            $this->add_render_attribute('_wrapper', 'class', 'has-button');
        }

        echo ovic_do_shortcode($this->get_name(), $settings);
    }
}