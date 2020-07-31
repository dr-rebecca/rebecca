<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Widget_Ovic_Iconbox' ) ) {
	class Widget_Ovic_Iconbox extends OVIC_Widget
	{
		/**
		 * Constructor.
		 */
		public function __construct()
		{
			$this->widget_cssclass    = 'ovic-iconbox';
			$this->widget_description = 'Display the customer iconbox.';
			$this->widget_id          = 'ovic_iconbox';
			$this->widget_name        = esc_html__( 'Ovic: Iconbox Armania', 'armania' );
			$this->settings           = array(
				'title' => array(
					'type'  => 'text',
					'title' => esc_html__( 'Title', 'armania' ),
				),
				'list'  => array(
					'type'    => 'group',
					'title'   => esc_html__( 'Icon list', 'armania' ),
					'fields'  => array(
						array(
							'id'    => 'title',
							'type'  => 'text',
							'title' => esc_html__( 'Title', 'armania' ),
						),
						array(
							'id'    => 'desc',
							'type'  => 'textarea',
							'title' => esc_html__( 'Description', 'armania' ),
						),
						array(
							'id'    => 'icon',
							'type'  => 'icon',
							'title' => esc_html__( 'Title', 'armania' ),
						),
					),
					'default' => array(
						array(
							'icon'  => 'fas fa-car-alt',
							'title' => 'Free Delivery',
							'desc'  => 'On all Orders over $99',
						),
						array(
							'icon'  => 'fas fa-redo-alt',
							'title' => '90 Days Return',
							'desc'  => 'if goods have problems',
						),
						array(
							'icon'  => 'fas fa-address-card',
							'title' => '100% Safe & Secure',
							'desc'  => 'Proin condimentum sagittis',
						),
						array(
							'icon'  => 'far fa-life-ring',
							'title' => '24/7 Support',
							'desc'  => 'Delicated support',
						),
					)
				),
			);

			parent::__construct();
		}

		/**
		 * Output widget.
		 *
		 * @param  array  $args
		 * @param  array  $instance
		 *
		 * @see WP_Widget
		 *
		 */
		public function widget( $args, $instance )
		{
			$this->widget_start( $args, $instance );

			if ( ! empty( $instance['list'] ) ) {
			    echo '<div class="inner">';
				foreach ( $instance['list'] as $list ) {
					$atts                  = $list;
					$atts['selected_icon'] = array(
						'value'   => $list['icon'],
						'library' => 'fa-solid',
					);
					echo ovic_do_shortcode( 'ovic_iconbox', $atts );
				}
                echo '</div>';
			}

			$this->widget_end( $args );
		}
	}
}