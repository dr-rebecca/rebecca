<?php
if (!defined('ABSPATH')) {
    exit();
}

use \Elementor\Controls_Manager as Controls_Manager;

class Elementor_Ovic_Blog extends Ovic_Widget_Elementor
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
        return 'ovic_blog';
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
        return esc_html__('Blog', 'armania');
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
        return 'eicon-post-list';
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
        return array('ovic', 'blog', 'category');
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
            'image_full_size',
            [
                'label' => esc_html__('Image Full size', 'armania'),
                'type'  => Controls_Manager::SWITCHER,
            ]
        );

        $this->add_control(
            'style',
            [
                'type'    => Controls_Manager::SELECT,
                'label'   => esc_html__('Select style', 'armania'),
                'options' => armania_file_options('/templates/blog/blog-shortcode/', 'content-blog', true),
                'default' => 'style-01',
            ]
        );

        $this->add_control(
            'title',
            [
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'label'       => esc_html__('Title', 'armania'),
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
            'target',
            [
                'label'   => esc_html__('Target', 'armania'),
                'type'    => Controls_Manager::SELECT,
                'options' => [
                    'recent_post' => esc_html__('Latest', 'armania'),
                    'popularity'  => esc_html__('Popularity', 'armania'),
                    'date'        => esc_html__('Date', 'armania'),
                    'title'       => esc_html__('Title', 'armania'),
                    'post'        => esc_html__('Post', 'armania'),
                    'random'      => esc_html__('Random', 'armania'),
                ],
                'default' => 'recent_post',
            ]
        );

        $this->add_control(
            'ids',
            [
                'label'       => esc_html__('Post', 'armania'),
                'type'        => Controls_Manager::TEXT,
                'description' => esc_html__('Post ids', 'armania'),
                'placeholder' => '1,2,3',
                'label_block' => true,
                'condition'   => [
                    'target' => 'post'
                ],
            ]
        );

        $this->add_control(
            'category',
            [
                'label'       => esc_html__('Category', 'armania'),
                'type'        => Controls_Manager::SELECT2,
                'options'     => $this->get_taxonomy([
                    'meta_key'   => '',
                    'hide_empty' => true,
                ]),
                'label_block' => true,
                'condition'   => [
                    'target!' => 'post'
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
                    'post__in'      => esc_html__('Post In', 'armania'),
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

        $this->carousel_settings();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        echo ovic_do_shortcode($this->get_name(), $settings);
    }
}