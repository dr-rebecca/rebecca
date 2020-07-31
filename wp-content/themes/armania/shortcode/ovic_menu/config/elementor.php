<?php
if (!defined('ABSPATH')) {
    exit();
}

use Elementor\Core\Schemes;
use Elementor\Controls_Manager as Controls_Manager;

class Elementor_Ovic_Menu extends Ovic_Widget_Elementor
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
        return 'ovic_menu';
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
        return esc_html__('Menu', 'armania');
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
        return 'eicon-nav-menu';
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
        return array('ovic', 'menu');
    }

    protected function _register_controls()
    {
        $options = array_merge(
            array(
                'default' => 'Default'
            ),
            armania_preview_options('ovic_menu')
        );

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
                'options' => $options,
                'default' => 'style-01',
            ]
        );

        $this->add_control(
            'light',
            [
                'type'      => Controls_Manager::SWITCHER,
                'label'     => esc_html__('Light', 'armania'),
                'condition' => [
                    'style' => 'style-02'
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

        $locations = array();
        $menus     = get_terms('nav_menu', array('hide_empty' => true));
        if (!empty($menus)) {
            foreach ($menus as $menu) {
                $locations[$menu->slug] = $menu->name;
            }
        }

        $this->add_control(
            'nav_menu',
            [
                'label_block' => true,
                'options'     => $locations,
                'type'        => Controls_Manager::SELECT2,
                'label'       => esc_html__('Menu', 'armania'),
                'description' => esc_html__('Select menu to display.', 'armania'),
            ]
        );

        $this->add_control(
            'link',
            [
                'label'       => esc_html__('Link', 'armania'),
                'type'        => Controls_Manager::URL,
                'label_block' => true,
            ]
        );

        $this->add_responsive_control(
            'align',
            [
                'label'        => esc_html__('Alignment', 'armania'),
                'type'         => Controls_Manager::CHOOSE,
                'options'      => [
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
                'prefix_class' => 'elementor%s-align-',
                'default'      => '',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_menu_style',
            [
                'label' => esc_html__('Menu style', 'armania'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'title_margin',
            [
                'label'      => esc_html__('Margin', 'armania'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .widget-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label'     => esc_html__('Title Color', 'armania'),
                'type'      => Controls_Manager::COLOR,
                'scheme'    => [
                    'type'  => Schemes\Color::get_type(),
                    'value' => Schemes\Color::COLOR_1,
                ],
                'selectors' => [
                    '{{WRAPPER}} .widget-title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Elementor\Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Title Typography', 'armania'),
                'name'     => 'typography',
                'scheme'   => Schemes\Typography::TYPOGRAPHY_1,
                'selector' => '{{WRAPPER}} .widget-title',
            ]
        );

        $this->add_control(
            'menu_color',
            [
                'label'     => esc_html__('Menu Color', 'armania'),
                'type'      => Controls_Manager::COLOR,
                'scheme'    => [
                    'type'  => Schemes\Color::get_type(),
                    'value' => Schemes\Color::COLOR_1,
                ],
                'selectors' => [
                    '{{WRAPPER}} ul.menu' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Elementor\Group_Control_Typography::get_type(),
            [
                'label'    => esc_html__('Menu Typography', 'armania'),
                'name'     => 'menu_typography',
                'scheme'   => Schemes\Typography::TYPOGRAPHY_1,
                'selector' => '{{WRAPPER}} ul.menu',
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