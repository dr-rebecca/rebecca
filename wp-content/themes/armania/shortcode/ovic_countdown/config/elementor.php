<?php
if (!defined('ABSPATH')) {
    exit();
}

use \Elementor\Controls_Manager as Controls_Manager;

class Elementor_Ovic_Countdown extends Ovic_Widget_Elementor
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
        return 'ovic_countdown';
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
        return esc_html__('Countdown', 'armania');
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
        return 'eicon-countdown';
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
                'options' => armania_preview_options('ovic_countdown'),
                'default' => 'style-01',
            ]
        );

        $this->add_control(
            'gallery',
            [
                'type'      => Controls_Manager::GALLERY,
                'label'     => esc_html__('Gallery', 'armania'),
                'condition' => [
                    'style' => [
                        'style-01',
                    ],
                ],
            ]
        );

        $this->add_control(
            'banner',
            [
                'type'      => Controls_Manager::MEDIA,
                'label'     => esc_html__('Banner', 'armania'),
                'condition' => [
                    'style' => [
                        'style-04',
                        'style-05',
                    ],
                ],
            ]
        );

        $this->add_control(
            'bg_banner',
            [
                'type'      => Controls_Manager::MEDIA,
                'label'     => esc_html__('Background Banner', 'armania'),
                'condition' => [
                    'style' => [
                        'style-05',
                    ],
                ],
            ]
        );

        $this->add_control(
            'date',
            [
                'type'           => Controls_Manager::DATE_TIME,
                'label'          => esc_html__('Countdown', 'armania'),
                'picker_options' => [
                    'dateFormat' => 'm/j/Y H:i:s',
                    'time_24hr'  => true,
                ],
            ]
        );

        $this->add_control(
            'link',
            [
                'type'      => Controls_Manager::URL,
                'label'     => esc_html__('Button Link', 'armania'),
                'condition' => [
                    'style!' => [
                        'style-06',
                    ],
                ],
            ]
        );

        $this->add_control(
            'text_button',
            [
                'type'      => Controls_Manager::TEXT,
                'label'     => esc_html__('Button Text', 'armania'),
                'condition' => [
                    'style!' => [
                        'style-06',
                    ],
                ],
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
                'default'      => 'center',
                'condition'    => [
                    'style' => [
                        'style-06',
                    ],
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'content_section',
            array(
                'tab'       => Controls_Manager::TAB_CONTENT,
                'label'     => esc_html__('Content', 'armania'),
                'condition' => [
                    'style!' => [
                        'style-06',
                    ],
                ],
            )
        );

        $this->add_control(
            'sub_title',
            [
                'type'        => Controls_Manager::TEXT,
                'label'       => esc_html__('Sub Title', 'armania'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'title',
            [
                'type'        => Controls_Manager::TEXTAREA,
                'label'       => esc_html__('Title', 'armania'),
                'description' => esc_html__('some style use tag "span" for hight light', 'armania'),
            ]
        );

        $this->add_control(
            'desc',
            [
                'type'        => Controls_Manager::TEXTAREA,
                'label'       => esc_html__('Description', 'armania'),
                'description' => esc_html__('some style use tag "span" for hight light', 'armania'),
                'condition'   => [
                    'style' => [
                        'style-03',
                        'style-04',
                        'style-07',
                    ],
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
                        'style-01',
                        'style-04',
                    ],
                ],
            )
        );

        $this->add_control(
            'price_text',
            [
                'type'        => Controls_Manager::TEXT,
                'label'       => esc_html__('Text', 'armania'),
                'label_block' => true,
                'default'     => 'From',
            ]
        );

        $this->add_control(
            'price_symbol',
            [
                'type'        => Controls_Manager::TEXT,
                'label'       => esc_html__('Symbol', 'armania'),
                'label_block' => true,
                'default'     => '$',
            ]
        );

        $this->add_control(
            'price',
            [
                'type'        => Controls_Manager::TEXT,
                'label'       => esc_html__('Price', 'armania'),
                'label_block' => true,
                'default'     => '100',
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