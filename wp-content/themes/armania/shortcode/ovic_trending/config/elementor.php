<?php
if (!defined('ABSPATH')) {
    exit();
}

use \Elementor\Controls_Manager as Controls_Manager;

class Elementor_Ovic_Trending extends Ovic_Widget_Elementor
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
        return 'ovic_trending';
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
        return esc_html__('Trending', 'armania');
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

        $this->add_control(
            'title',
            [
                'type'  => Controls_Manager::TEXT,
                'label' => esc_html__('Title', 'armania'),
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
                'label'   => esc_html__('Tabs ajax', 'armania'),
                'type'    => Controls_Manager::SWITCHER,
                'default' => true,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'selected_icon',
            [
                'label'            => esc_html__('Icon', 'armania'),
                'type'             => Controls_Manager::ICONS,
                'default'          => [
                    'value'   => 'fas fa-check',
                    'library' => 'fa-solid',
                ],
                'fa4compatibility' => 'icon',
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
            'category',
            [
                'label'       => esc_html__('Products Category', 'armania'),
                'type'        => Controls_Manager::SELECT2,
                'options'     => $this->get_taxonomy([
                    'hide_empty' => true,
                    'taxonomy'   => 'product_cat',
                ]),
                'multiple'    => true,
                'label_block' => true,
            ]
        );

        $this->add_control(
            'tabs',
            [
                'label'       => esc_html__('Tabs List', 'armania'),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'title_field' => '{{{ elementor.helpers.renderIcon( this, selected_icon, {}, "i", "panel" ) || \'<i class="{{ icon }}" aria-hidden="true"></i>\' }}} {{{ title }}}',
            ]
        );

        $this->end_controls_section();

        $this->carousel_settings([
            'tab'   => Controls_Manager::TAB_CONTENT,
            'label' => esc_html__('Tabs slide', 'armania'),
        ], 'owl_');

        $this->carousel_settings();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        echo ovic_do_shortcode($this->get_name(), $settings);
    }
}