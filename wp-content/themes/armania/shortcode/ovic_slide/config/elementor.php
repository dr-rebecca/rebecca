<?php
if (!defined('ABSPATH')) {
    exit();
}

use Elementor\Core\Schemes;
use Elementor\Controls_Manager as Controls_Manager;

class Elementor_Ovic_Slide extends Ovic_Widget_Elementor
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
        return 'ovic_slide';
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
        return esc_html__('Slide', 'armania');
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
        return 'eicon-slider-push';
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
            'style',
            [
                'type'    => Controls_Manager::SELECT,
                'label'   => esc_html__('Select style', 'armania'),
                'options' => armania_preview_options($this->get_name()),
                'default' => 'style-01',
            ]
        );

        $this->add_control(
            'title',
            [
                'label'       => esc_html__('Title', 'armania'),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'condition'   => [
                    'style' => ['style-01', 'style-02', 'style-03']
                ],
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
                'condition' => [
                    'style' => ['style-01', 'style-02', 'style-03']
                ],
                'selectors' => [
                    '{{WRAPPER}} .ovic-title.style-01 .title' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'primary_color',
            [
                'label'     => esc_html__('Color', 'armania'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .link'     => 'color: {{VALUE}};',
                    '{{WRAPPER}} .link svg' => 'fill: {{VALUE}};',
                ],
                'condition' => [
                    'style!' => ['style-05', 'style-06']
                ],
            ]
        );

        $this->add_control(
            'hover_primary_color',
            [
                'label'     => esc_html__('Hover Color', 'armania'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .link:hover'     => 'color: {{VALUE}};',
                    '{{WRAPPER}} .link:hover svg' => 'fill: {{VALUE}};',
                ],
                'condition' => [
                    'style!' => ['style-05', 'style-06']
                ],
            ]
        );

        $this->add_control(
            'lighter',
            [
                'label'     => esc_html__('Lighter', 'armania'),
                'type'      => Controls_Manager::SWITCHER,
                'condition' => [
                    'style' => 'style-06'
                ],
            ]
        );

        $this->add_control(
            'hover_animation',
            [
                'label'     => esc_html__('Hover Animation', 'armania'),
                'type'      => Controls_Manager::HOVER_ANIMATION,
                'condition' => [
                    'style' => 'style-04'
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'slide_items',
            [
                'label' => esc_html__('Slide', 'armania'),
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'item_color',
            [
                'label'     => esc_html__('Background', 'armania'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}} > a' => 'background-color: {{VALUE}}'
                ],
            ]
        );

        $repeater->add_control(
            'selected_media',
            [
                'label'   => esc_html__('Media', 'armania'),
                'type'    => Controls_Manager::SELECT,
                'options' => [
                    'image' => esc_html__('Image', 'armania'),
                    'icon'  => esc_html__('Icon', 'armania'),
                ],
                'default' => 'icon',
            ]
        );

        $repeater->add_control(
            'selected_icon',
            [
                'label'            => esc_html__('Icon', 'armania'),
                'type'             => Controls_Manager::ICONS,
                'fa4compatibility' => 'icon',
                'default'          => [
                    'value'   => 'fas fa-star',
                    'library' => 'fa-solid',
                ],
                'condition'        => [
                    'selected_media' => 'icon'
                ],
            ]
        );

        $repeater->add_control(
            'image',
            [
                'label'     => esc_html__('Image', 'armania'),
                'type'      => Controls_Manager::MEDIA,
                'condition' => [
                    'selected_media' => 'image'
                ],
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
            'link',
            [
                'label'       => esc_html__('Link', 'armania'),
                'type'        => Controls_Manager::URL,
                'label_block' => true,
            ]
        );

        $this->add_control(
            'tabs',
            [
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'title_field' => '{{{ elementor.helpers.renderIcon( this, selected_icon, {}, "i", "panel" ) || \'<i class="{{ icon }}" aria-hidden="true"></i>\' }}} {{{ title }}}',
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();

        $this->start_controls_section(
            'style_section',
            array(
                'tab'   => Controls_Manager::TAB_CONTENT,
                'label' => esc_html__('Style', 'armania'),
            )
        );

        $this->add_group_control(
            Elementor\Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Title Typography', 'armania'),
                'name'     => 'typography',
                'scheme'   => Schemes\Typography::TYPOGRAPHY_1,
                'selector' => '{{WRAPPER}} .title',
            ]
        );

        $this->add_responsive_control(
            'size',
            [
                'label'     => esc_html__('Size', 'armania'),
                'type'      => Controls_Manager::SLIDER,
                'range'     => [
                    'px' => [
                        'min' => 6,
                        'max' => 300,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .icon' => 'height: {{SIZE}}{{UNIT}} !important;font-size: {{SIZE}}{{UNIT}};',
                ],
                'separator' => 'before',
            ]
        );

        $this->add_responsive_control(
            'icon_bottom_space',
            [
                'label'     => esc_html__('Spacing', 'armania'),
                'type'      => Controls_Manager::SLIDER,
                'range'     => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .ovic-slide:not(.style-03) .icon' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .ovic-slide.style-03 .icon'       => 'margin-right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'rotate',
            [
                'label'          => esc_html__('Rotate', 'armania'),
                'type'           => Controls_Manager::SLIDER,
                'size_units'     => ['deg'],
                'default'        => [
                    'size' => 0,
                    'unit' => 'deg',
                ],
                'tablet_default' => [
                    'unit' => 'deg',
                ],
                'mobile_default' => [
                    'unit' => 'deg',
                ],
                'selectors'      => [
                    '{{WRAPPER}} .icon' => 'transform: rotate({{SIZE}}{{UNIT}});',
                ],
            ]
        );

        $this->end_controls_section();

        $this->carousel_settings();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        echo ovic_do_shortcode($this->get_name(), $settings);
    }
}