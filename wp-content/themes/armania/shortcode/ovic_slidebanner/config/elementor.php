<?php
if (!defined('ABSPATH')) {
    exit();
}

use \Elementor\Controls_Manager as Controls_Manager;

class Elementor_Ovic_Slidebanner extends Ovic_Widget_Elementor
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
        return 'ovic_slidebanner';
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
        return esc_html__('Slide Banner', 'armania');
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
        return array('ovic', 'slide');
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

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'style',
            [
                'type'    => Controls_Manager::SELECT,
                'label'   => esc_html__('Select style', 'armania'),
                'options' => armania_preview_options('ovic_banner'),
                'default' => 'style-01',
            ]
        );

        $repeater->add_control(
            'image',
            [
                'type'  => Controls_Manager::MEDIA,
                'label' => esc_html__('Poster', 'armania'),
            ]
        );

        $repeater->add_control(
            'text_01',
            [
                'type'  => Controls_Manager::TEXTAREA,
                'label' => esc_html__('Text 01', 'armania'),
            ]
        );

        $repeater->add_control(
            'text_02',
            [
                'type'  => Controls_Manager::TEXTAREA,
                'label' => esc_html__('Text 02', 'armania'),
            ]
        );

        $repeater->add_control(
            'link',
            [
                'type'        => Controls_Manager::URL,
                'label'       => esc_html__('Link', 'armania'),
                'placeholder' => __('https://your-link.com', 'armania'),
                'default'     => [
                    'url' => '#',
                ],
            ]
        );

        $repeater->add_control(
            'text_button',
            [
                'type'    => Controls_Manager::TEXT,
                'label'   => esc_html__('Text button', 'armania'),
                'default' => 'SHOP NOW',
            ]
        );

        $repeater->add_control(
            'image_effect',
            [
                'type'    => Controls_Manager::SELECT,
                'label'   => esc_html__('Effect', 'armania'),
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
            'tabs',
            [
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'title_field' => esc_html__('Banner: ', 'armania').'{{{ style }}}',
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