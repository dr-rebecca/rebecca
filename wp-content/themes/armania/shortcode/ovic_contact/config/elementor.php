<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit();
}

use \Elementor\Controls_Manager as Controls_Manager;

class Elementor_Ovic_Contact extends Ovic_Widget_Elementor
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
		return 'ovic_contact';
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
		return esc_html__( 'Contact', 'armania' );
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
		return array( 'ovic', 'contact' );
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
				'options' => armania_preview_options( 'ovic_contact' ),
				'default' => 'style-01',
			]
		);

		$this->add_control(
			'selected_icon',
			[
				'label'            => esc_html__( 'Icon', 'armania' ),
				'type'             => Controls_Manager::ICONS,
				'fa4compatibility' => 'icon',
				'default'          => [
					'value'   => 'fas fa-star',
					'library' => 'fa-solid',
				],
			]
		);

		$this->add_control(
			'title',
			[
				'label_block' => true,
				'type'        => Controls_Manager::TEXT,
				'label'       => esc_html__( 'Title', 'armania' ),
			]
		);


		$this->add_control(
			'sub_title',
			[
				'label_block' => true,
				'type'        => Controls_Manager::TEXT,
				'label'       => esc_html__( 'Sub title', 'armania' ),
				'condition'   => [
					'style' => [
						'style-02',
					]
				],
			]
		);

		$this->add_control(
			'phone',
			[
				'label_block' => true,
				'type'        => Controls_Manager::TEXT,
				'label'       => esc_html__( 'Phone', 'armania' ),
			]
		);

		$this->add_control(
			'email',
			[
				'label_block' => true,
				'type'        => Controls_Manager::TEXT,
				'label'       => esc_html__( 'Email', 'armania' ),
				'condition'   => [
					'style' => [
						'style-02',
					]
				],
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