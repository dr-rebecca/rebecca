<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit();
}

use \Elementor\Controls_Manager as Controls_Manager;

class Elementor_Ovic_Bnbs extends Ovic_Widget_Elementor
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
		return 'ovic_bnbs';
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
		return esc_html__( 'Banner Bestseller', 'armania' );
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
		return array( 'ovic' );
	}

	protected function _register_controls()
	{
		$this->start_controls_section(
			'general_section',
			array(
				'tab'   => Controls_Manager::TAB_CONTENT,
				'label' => esc_html__( 'General', 'armania' ),
			)
		);

		$this->add_control(
			'title',
			[
				'type'        => Controls_Manager::TEXT,
				'label'       => esc_html__( 'Title', 'armania' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'poster',
			[
				'type'  => Controls_Manager::MEDIA,
				'label' => esc_html__( 'Poster', 'armania' ),
			]
		);

		$this->add_control(
			'link_video',
			[
				'type'        => Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Enter your URL', 'armania' ) . ' (YouTube)',
				'default'     => 'https://www.youtube.com/watch?v=XHOmBV4js_E',
				'label_block' => true,
			]
		);

		$this->add_control(
			'link',
			[
				'type'        => Controls_Manager::URL,
				'label'       => esc_html__( 'Link', 'armania' ),
				'placeholder' => esc_html__( 'https://your-link.com', 'armania' ),
				'default'     => [
					'url' => '#',
				],
			]
		);

		$this->add_control(
			'text_button',
			[
				'type'    => Controls_Manager::TEXT,
				'label'   => esc_html__( 'Text button', 'armania' ),
				'default' => 'SHOP NOW',
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'image',
			[
				'label' => esc_html__( 'Image', 'armania' ),
				'type'  => Controls_Manager::MEDIA,
			]
		);

		$repeater->add_control(
			'title',
			[
				'label'       => esc_html__( 'Title', 'armania' ),
				'type'        => Controls_Manager::TEXTAREA,
				'default'     => esc_html__( 'Title', 'armania' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'tabs',
			[
				'type'        => Controls_Manager::REPEATER,
				'fields'      => $repeater->get_controls(),
				'title_field' => '{{{ title }}}',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'content_1',
			array(
				'tab'   => Controls_Manager::TAB_CONTENT,
				'label' => esc_html__( 'Content 01', 'armania' ),
			)
		);

		$this->add_control(
			'title_01',
			[
				'type'        => Controls_Manager::TEXT,
				'label'       => esc_html__( 'Title', 'armania' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'desc_01',
			[
				'type'  => Controls_Manager::TEXTAREA,
				'label' => esc_html__( 'Description', 'armania' ),
			]
		);

		$this->add_control(
			'attribute_01_1',
			[
				'type'        => Controls_Manager::TEXT,
				'label'       => esc_html__( 'Attribute 1', 'armania' ),
			]
		);

		$this->add_control(
			'attribute_01_2',
			[
				'type'        => Controls_Manager::TEXT,
				'label'       => esc_html__( 'Attribute 2', 'armania' ),
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'content_2',
			array(
				'tab'   => Controls_Manager::TAB_CONTENT,
				'label' => esc_html__( 'Content 01', 'armania' ),
			)
		);

		$this->add_control(
			'title_02',
			[
				'type'        => Controls_Manager::TEXT,
				'label'       => esc_html__( 'Title', 'armania' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'desc_02',
			[
				'type'  => Controls_Manager::TEXTAREA,
				'label' => esc_html__( 'Description', 'armania' ),
			]
		);

        $this->add_control(
            'attribute_02_1',
            [
                'type'        => Controls_Manager::TEXT,
                'label'       => esc_html__( 'Attribute 1', 'armania' ),
            ]
        );

        $this->add_control(
            'attribute_02_2',
            [
                'type'        => Controls_Manager::TEXT,
                'label'       => esc_html__( 'Attribute 2', 'armania' ),
            ]
        );

		$this->end_controls_section();
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();

		echo ovic_do_shortcode( $this->get_name(), $settings );
	}
}