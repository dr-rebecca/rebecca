<?php
if (!defined('ABSPATH')) {
    exit();
}

use \Elementor\Controls_Manager as Controls_Manager;

class Elementor_Ovic_Banner extends Ovic_Widget_Elementor
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
        return 'ovic_banner';
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
        return esc_html__('Banner', 'armania');
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
        return 'eicon-image-box';
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
                'options' => armania_preview_options('ovic_banner'),
                'default' => 'style-01',
            ]
        );

        $this->add_control(
            'text_color',
            [
                'type'      => Controls_Manager::SELECT,
                'label'     => esc_html__('Text Color', 'armania'),
                'options'   => [
                    'dark'  => esc_html__('Dark', 'armania'),
                    'light' => esc_html__('Light', 'armania'),
                ],
                'default'   => 'dark',
                'condition' => [
                    'style' => [
                        'style-40',
                    ],
                ],
            ]
        );

        $this->add_control(
            'position',
            [
                'type'      => Controls_Manager::SELECT,
                'label'     => esc_html__('Position', 'armania'),
                'options'   => [
                    'left'  => esc_html__('Left', 'armania'),
                    'right' => esc_html__('Right', 'armania'),
                ],
                'default'   => 'left',
                'condition' => [
                    'style' => [
                        'style-42',
                    ],
                ],
            ]
        );

        $this->add_control(
            'image',
            [
                'type'  => Controls_Manager::MEDIA,
                'label' => esc_html__('Poster', 'armania'),
            ]
        );

        $this->add_control(
            'text_01',
            [
                'type'        => Controls_Manager::TEXTAREA,
                'label'       => esc_html__('Text 01', 'armania'),
                'description' => esc_html__('some style use tag "span" for hight light', 'armania'),
            ]
        );

        $this->add_control(
            'text_02',
            [
                'type'        => Controls_Manager::TEXTAREA,
                'label'       => esc_html__('Text 02', 'armania'),
                'description' => esc_html__('some style use tag "span" for hight light', 'armania'),
                'condition'   => [
                    'style!' => [
                        'style-37',
                    ],
                ],
            ]
        );


        $this->add_control(
            'text_03',
            [
                'type'        => Controls_Manager::TEXTAREA,
                'label'       => esc_html__('Text 03', 'armania'),
                'description' => esc_html__('some style use tag "span" for hight light', 'armania'),
                'condition'   => [
                    'style' => [
                        'style-22',
                        'style-30',
                        'style-31',
                        'style-32',
                        'style-40',
                        'style-46',
                        'style-47',
                        'style-48',
                        'style-50',
                        'style-52',
                    ],
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
                'type'    => Controls_Manager::TEXT,
                'label'   => esc_html__('Text button', 'armania'),
                'default' => 'SHOP NOW',
            ]
        );

        $this->add_control(
            'image_effect',
            [
                'type'    => Controls_Manager::SELECT,
                'label'   => esc_html__('Hover Animation', 'armania'),
                'options' => [
                    'none'                          => esc_html__('None', 'armania'),
                    'zoom'                          => esc_html__('Zoom jquery', 'armania'),
                    'effect normal-effect'          => esc_html__('Normal Effect', 'armania'),
                    'effect normal-effect dark-bg'  => esc_html__('Normal Effect Dark', 'armania'),
                    'effect background-zoom'        => esc_html__('Background Zoom', 'armania'),
                    'effect background-slide'       => esc_html__('Background Slide', 'armania'),
                    'effect rotate-in rotate-left'  => esc_html__('Rotate Left In', 'armania'),
                    'effect rotate-in rotate-right' => esc_html__('Rotate Right In', 'armania'),
                    'effect plus-zoom'              => esc_html__('Plus Zoom', 'armania'),
                    'effect border-zoom'            => esc_html__('Border Zoom', 'armania'),
                    'effect border-scale'           => esc_html__('Border ScaleUp', 'armania'),
                    'effect border-plus'            => esc_html__('Border Plus', 'armania'),
                    'effect overlay-plus'           => esc_html__('Overlay Plus', 'armania'),
                    'effect overlay-cross'          => esc_html__('Overlay Cross', 'armania'),
                    'effect overlay-horizontal'     => esc_html__('Overlay Horizontal', 'armania'),
                    'effect overlay-vertical'       => esc_html__('Overlay Vertical', 'armania'),
                    'effect flashlight'             => esc_html__('Flashlight', 'armania'),
                ],
                'default' => 'none',
            ]
        );

        $this->add_control(
            'height',
            [
                'label'     => esc_html__('Height Banner', 'armania'),
                'type'      => Controls_Manager::SLIDER,
                'range'     => [
                    'px' => [
                        'min' => 100,
                        'max' => 1000,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} div.ovic-banner .inner' => 'height: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} div.ovic-banner.style-50 .text-03' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'price_section',
            array(
                'tab'       => Controls_Manager::TAB_CONTENT,
                'label'     => esc_html__('Price', 'armania'),
                'condition' => [
                    'style' => [
                        'style-50',
                    ],
                ],
            )
        );

        $this->add_control(
            'price',
            [
                'type'    => Controls_Manager::TEXT,
                'label'   => esc_html__('Price', 'armania'),
                'default' => '70',
            ]
        );

        $this->add_control(
            'price_symbol',
            [
                'type'    => Controls_Manager::TEXT,
                'label'   => esc_html__('Symbol', 'armania'),
                'default' => '$',
            ]
        );

        $this->add_control(
            'price_text_1',
            [
                'type'    => Controls_Manager::TEXT,
                'label'   => esc_html__('Text 01', 'armania'),
                'default' => 'OFF',
            ]
        );

        $this->add_control(
            'price_text_2',
            [
                'type'        => Controls_Manager::TEXT,
                'label'       => esc_html__('Text 02', 'armania'),
                'label_block' => true,
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        echo ovic_do_shortcode($this->get_name(), $settings);
    }
}