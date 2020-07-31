<?php
if (!defined('ABSPATH')) {
    exit();
}

use \Elementor\Controls_Manager as Controls_Manager;

class Elementor_Ovic_Newsletter extends Ovic_Widget_Elementor
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
        return 'ovic_newsletter';
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
        return esc_html__('Newsletter', 'armania');
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
        return 'eicon-yoast';
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
        return array('ovic', 'newsletter');
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
            'form_id',
            [
                'type'        => Controls_Manager::SELECT,
                'label'       => esc_html__('Newsletter Form', 'armania'),
                'options'     => armania_get_form_newsletter(),
                'default'     => '0',
                'description' => sprintf('%s <a href="%s" target="_blank">%s</a>',
                    esc_html__('Add new form', 'armania'),
                    admin_url('admin.php?page=mailchimp-for-wp-forms&view=add-form'),
                    esc_html__('Here!', 'armania')
                ),
            ]
        );

        $this->add_control(
            'style',
            [
                'type'    => Controls_Manager::SELECT,
                'label'   => esc_html__('Style', 'armania'),
                'options' => armania_preview_options($this->get_name()),
                'default' => 'style-01',
            ]
        );

        $this->add_control(
            'background',
            [
                'type'      => Controls_Manager::MEDIA,
                'label'     => esc_html__('Background', 'armania'),
                'condition' => [
                    'style' => [
                        'style-17',
                    ],
                ],
            ]
        );

        $this->add_control(
            'title',
            [
                'type'        => Controls_Manager::TEXT,
                'label'       => esc_html__('Title', 'armania'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'desc',
            [
                'type'  => Controls_Manager::TEXTAREA,
                'label' => esc_html__('Description', 'armania'),
            ]
        );

        $this->add_control(
            'placeholder',
            [
                'type'        => Controls_Manager::TEXT,
                'label'       => esc_html__('Placeholder', 'armania'),
                'default'     => esc_html__('Enter your e-mail', 'armania'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'button',
            [
                'type'    => Controls_Manager::TEXT,
                'label'   => esc_html__('Button', 'armania'),
                'default' => esc_html__('SIGN UP', 'armania'),
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