<?php
if (!defined('ABSPATH')) {
    exit();
}

use \Elementor\Controls_Manager as Controls_Manager;

class Elementor_Ovic_Network extends Ovic_Widget_Elementor
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
        return 'ovic_network';
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
        return esc_html__('Social Network', 'armania');
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
        return 'eicon-image';
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
                'options' => armania_preview_options(
                    $this->get_name()
                ),
                'default' => 'style-01',
            ]
        );

        $this->add_control(
            'list_style',
            array(
                'type'    => Controls_Manager::SELECT,
                'label'   => esc_html__('List style', 'armania'),
                'options' => [
                    'none' => esc_html__('None', 'armania'),
                    'owl'  => esc_html__('Carousel', 'armania'),
                ],
                'default' => 'owl',
            )
        );

        $this->add_control(
            'title',
            [
                'label'       => esc_html__('Title', 'armania'),
                'label_block' => true,
                'type'        => Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'text',
            [
                'label'       => esc_html__('Text', 'armania'),
                'label_block' => true,
                'type'        => Controls_Manager::TEXT,
                'condition'   => [
                    'style' => [
                        'style-02',
                        'style-03',
                    ],
                ],
            ]
        );

        $this->add_control(
            'image_source',
            [
                'label'   => esc_html__('Image Source', 'armania'),
                'type'    => Controls_Manager::SELECT,
                'options' => [
                    'instagram' => esc_html__('Instagram', 'armania'),
                    'flickr'    => esc_html__('Flickr', 'armania'),
                    'local'     => esc_html__('Local Image', 'armania'),
                ],
                'default' => 'instagram',
            ]
        );

        $this->add_control(
            'image_gallery',
            [
                'label'     => esc_html__('Local Image', 'armania'),
                'type'      => Controls_Manager::GALLERY,
                'condition' => [
                    'image_source' => 'local'
                ],
            ]
        );

        $this->add_control(
            'instagram_resolution',
            [
                'label'     => esc_html__('Image Resolution', 'armania'),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    'thumbnail'           => esc_html__('Thumbnail', 'armania'),
                    'low_resolution'      => esc_html__('Low Resolution', 'armania'),
                    'standard_resolution' => esc_html__('Standard Resolution', 'armania'),
                ],
                'default'   => 'thumbnail',
                'condition' => [
                    'image_source' => 'instagram'
                ],
            ]
        );

        $this->add_control(
            'id_instagram',
            [
                'label'       => esc_html__('ID Instagram', 'armania'),
                'label_block' => true,
                'type'        => Controls_Manager::TEXT,
                'condition'   => [
                    'image_source' => 'instagram'
                ],
            ]
        );

        $this->add_control(
            'token',
            [
                'label'       => esc_html__('Token Instagram', 'armania'),
                'description' => sprintf('<a href="%s" target="_blank">%s</a>',
                    esc_url('https://instagram.pixelunion.net'),
                    esc_html__('Get Token Instagram Here!', 'armania')
                ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXT,
                'condition'   => [
                    'image_source' => 'instagram'
                ],
            ]
        );

        $this->add_control(
            'flickr_resolution',
            [
                'label'     => esc_html__('Image Resolution', 'armania'),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    's' => esc_html__('Square ( 75x75 )', 'armania'),
                    'q' => esc_html__('Large Square ( 150x150 )', 'armania'),
                    't' => esc_html__('Thumbnail ( 100x75 )', 'armania'),
                    'n' => esc_html__('Small ( 320x240 )', 'armania'),
                    'c' => esc_html__('Medium ( 800x600 )', 'armania'),
                    'b' => esc_html__('Large ( 1024x768 )', 'armania'),
                    'o' => esc_html__('Original ( 2400x1800 )', 'armania'),
                ],
                'default'   => 't',
                'condition' => [
                    'image_source' => 'flickr'
                ],
            ]
        );

        $this->add_control(
            'id_flickr',
            [
                'label'       => esc_html__('ID Flickr', 'armania'),
                'description' => sprintf('<a href="%s" target="_blank">%s</a>',
                    esc_url('https://www.webfx.com/tools/idgettr/'),
                    esc_html__('Get Token Flickr Here!', 'armania')
                ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXT,
                'condition'   => [
                    'image_source' => 'flickr'
                ],
            ]
        );

        $this->add_control(
            'items_limit',
            [
                'label'       => esc_html__('Items show', 'armania'),
                'description' => esc_html__('the number items show', 'armania'),
                'default'     => 4,
                'type'        => Controls_Manager::NUMBER,
                'condition'   => [
                    'image_source' => ['flickr', 'instagram']
                ],
            ]
        );

        $this->end_controls_section();

        $this->carousel_settings([
            'tab'       => Controls_Manager::TAB_SETTINGS,
            'label'     => esc_html__('Carousel settings', 'armania'),
            'condition' => [
                'list_style' => 'owl',
            ],
        ]);
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        echo ovic_do_shortcode($this->get_name(), $settings);
    }
}