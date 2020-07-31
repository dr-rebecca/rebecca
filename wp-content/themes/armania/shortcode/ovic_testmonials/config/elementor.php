<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit();
}

use \Elementor\Controls_Manager as Controls_Manager;

class Elementor_Ovic_Testmonials extends Ovic_Widget_Elementor
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
		return 'ovic_testmonials';
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
		return esc_html__( 'Testmonials', 'armania' );
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
		return 'eicon-testimonial';
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
			'style',
			[
				'type'    => Controls_Manager::SELECT,
				'label'   => esc_html__( 'Select style', 'armania' ),
				'options' => armania_preview_options( 'ovic_testmonials' ),
				'default' => 'style-01',
			]
		);

        $this->add_control(
            'lighter',
            [
                'label'     => esc_html__( 'Lighter', 'armania' ),
                'type'      => Controls_Manager::SWITCHER,
                'condition' => [
                    'style' => 'style-04'
                ],
            ]
        );

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'avatar',
			[
				'label' => esc_html__( 'Avatar', 'armania' ),
				'type'  => Controls_Manager::MEDIA,
			]
		);

		$repeater->add_control(
			'desc',
			[
				'label' => esc_html__( 'Description', 'armania' ),
				'type'  => Controls_Manager::TEXTAREA,
			]
		);

		$repeater->add_control(
			'name',
			[
				'label' => esc_html__( 'Name', 'armania' ),
				'type'  => Controls_Manager::TEXT,
			]
		);

		$repeater->add_control(
			'position',
			[
				'label' => esc_html__( 'Position', 'armania' ),
				'type'  => Controls_Manager::TEXT,
			]
		);

		$repeater->add_control(
			'rating',
			[
				'label'   => esc_html__( 'Rating', 'armania' ),
				'type'    => Controls_Manager::NUMBER,
				'min'     => 0,
				'max'     => 5,
				'step'    => 0.1,
				'default' => 5,
			]
		);

		$repeater->add_control(
			'link',
			[
				'label'       => esc_html__( 'Link', 'armania' ),
				'type'        => Controls_Manager::URL,
				'label_block' => true,
			]
		);

		$this->add_control(
			'tabs',
			[
				'type'        => Controls_Manager::REPEATER,
				'fields'      => $repeater->get_controls(),
				'title_field' => '{{{ name }}}',
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