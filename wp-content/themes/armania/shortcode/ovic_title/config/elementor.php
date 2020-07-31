<?php
if (!defined('ABSPATH')) {
    exit();
}

use Elementor\Core\Schemes;
use \Elementor\Controls_Manager as Controls_Manager;

class Elementor_Ovic_Title extends Ovic_Widget_Elementor
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
        return 'ovic_title';
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
        return esc_html__('Title', 'armania');
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
        return 'eicon-t-letter';
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
                'options' => [
                    'style-01' => esc_html__('Style 01', 'armania'),
                    'style-02' => esc_html__('Style 02', 'armania'),
                    'style-03' => esc_html__('Style 03', 'armania'),
                    'style-04' => esc_html__('Style 04', 'armania'),
                ],
                'default' => 'style-01',
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
                'condition' => [
                    'style' => [
                        'style-01',
                    ],
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
                'type'      => Controls_Manager::TEXTAREA,
                'label'     => esc_html__('Description', 'armania'),
                'condition' => [
                    'style' => [
                        'style-01',
                    ],
                ],
            ]
        );

        $this->add_control(
            'align',
            [
                'type'      => Controls_Manager::SELECT,
                'label'     => esc_html__('Align', 'armania'),
                'options'   => [
                    'vertical'   => esc_html__('Vertical', 'armania'),
                    'horizontal' => esc_html__('Horizontal', 'armania'),
                ],
                'default'   => 'horizontal',
                'condition' => [
                    'style' => [
                        'style-01',
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
                    'hide_empty' => true,
                    'return_id'  => true,
                    'taxonomy'   => 'product_cat',
                ]),
                'multiple'    => true,
                'label_block' => true,
                'default'     => '',
                'condition'   => [
                    'style' => [
                        'style-01',
                    ],
                ],
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
                        'style-01',
                        'style-03',
                        'style-04',
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
                        'style-01',
                        'style-03',
                        'style-04',
                    ],
                ],
            ]
        );

        $this->add_responsive_control(
            'text_align',
            [
                'label'     => esc_html__('Alignment', 'armania'),
                'type'      => Controls_Manager::CHOOSE,
                'options'   => [
                    'left'    => [
                        'title' => esc_html__('Left', 'armania'),
                        'icon'  => 'eicon-text-align-left',
                    ],
                    'center'  => [
                        'title' => esc_html__('Center', 'armania'),
                        'icon'  => 'eicon-text-align-center',
                    ],
                    'right'   => [
                        'title' => esc_html__('Right', 'armania'),
                        'icon'  => 'eicon-text-align-right',
                    ],
                    'justify' => [
                        'title' => esc_html__('Justified', 'armania'),
                        'icon'  => 'eicon-text-align-justify',
                    ],
                ],
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}}' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_title_style',
            [
                'label' => esc_html__('Title', 'armania'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label'     => esc_html__('Text Color', 'armania'),
                'type'      => Controls_Manager::COLOR,
                'scheme'    => [
                    'type'  => Schemes\Color::get_type(),
                    'value' => Schemes\Color::COLOR_1,
                ],
                'selectors' => [
                    '{{WRAPPER}} .title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name'     => 'typography',
                'scheme'   => Schemes\Typography::TYPOGRAPHY_1,
                'selector' => '{{WRAPPER}} .title',
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Text_Shadow::get_type(),
            [
                'name'     => 'text_shadow',
                'selector' => '{{WRAPPER}} .title',
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