<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Widget_Ovic_Network' ) ) {
	class Widget_Ovic_Network extends OVIC_Widget
	{
		/**
		 * Constructor.
		 */
		public function __construct()
		{
			$this->widget_cssclass    = 'ovic-network';
			$this->widget_description = 'Display the customer network.';
			$this->widget_id          = 'ovic_network';
			$this->widget_name        = esc_html__( 'Ovic: Social Network', 'armania' );
			$this->settings           = array(
				'title'                => array(
					'type'  => 'text',
					'title' => esc_html__( 'Title', 'armania' ),
				),
				'profile'              => array(
					'type'  => 'text',
					'title' => esc_html__( 'Link profile', 'armania' ),
				),
				'image_source'         => array(
					'type'       => 'select',
					'title'      => esc_html__( 'Image Source', 'armania' ),
					'options'    => [
						'instagram' => esc_html__( 'Instagram', 'armania' ),
						'flickr'    => esc_html__( 'Flickr', 'armania' ),
						'local'     => esc_html__( 'Local Image', 'armania' ),
					],
					'default'    => 'instagram',
					'attributes' => array(
						'data-depend-id' => 'image_source',
					),
				),
				'image_gallery'        => array(
					'type'       => 'gallery',
					'title'      => esc_html__( 'Local Image', 'armania' ),
					'dependency' => array( 'image_source', '==', 'local' ),
				),
				'instagram_resolution' => array(
					'type'       => 'select',
					'title'      => esc_html__( 'Image Resolution', 'armania' ),
					'options'    => [
						'thumbnail'           => esc_html__( 'Thumbnail', 'armania' ),
						'low_resolution'      => esc_html__( 'Low Resolution', 'armania' ),
						'standard_resolution' => esc_html__( 'Standard Resolution', 'armania' ),
					],
					'default'    => 'thumbnail',
					'dependency' => array( 'image_source', '==', 'instagram' ),
				),
				'id_instagram'         => array(
					'type'       => 'text',
					'title'      => esc_html__( 'ID Instagram', 'armania' ),
					'dependency' => array( 'image_source', '==', 'instagram' ),
				),
				'token'                => array(
					'type'        => 'text',
					'title'       => esc_html__( 'Token Instagram', 'armania' ),
					'description' => sprintf( '<a href="%s" target="_blank">%s</a>',
						esc_url( 'https://instagram.pixelunion.net' ),
						esc_html__( 'Get Token Instagram Here!', 'armania' )
					),
					'dependency'  => array( 'image_source', '==', 'instagram' ),
				),
				'flickr_resolution'    => array(
					'type'       => 'select',
					'title'      => esc_html__( 'Image Resolution', 'armania' ),
					'options'    => [
						's' => esc_html__( 'Square ( 75x75 )', 'armania' ),
						'q' => esc_html__( 'Large Square ( 150x150 )', 'armania' ),
						't' => esc_html__( 'Thumbnail ( 100x75 )', 'armania' ),
						'n' => esc_html__( 'Small ( 320x240 )', 'armania' ),
						'c' => esc_html__( 'Medium ( 800x600 )', 'armania' ),
						'b' => esc_html__( 'Large ( 1024x768 )', 'armania' ),
						'o' => esc_html__( 'Original ( 2400x1800 )', 'armania' ),
					],
					'default'    => 't',
					'dependency' => array( 'image_source', '==', 'flickr' ),
				),
				'id_flickr'            => array(
					'type'        => 'text',
					'title'       => esc_html__( 'ID Flickr', 'armania' ),
					'description' => sprintf( '<a href="%s" target="_blank">%s</a>',
						esc_url( 'https://www.webfx.com/tools/idgettr/' ),
						esc_html__( 'Get Token Flickr Here!', 'armania' )
					),
					'dependency'  => array( 'image_source', '==', 'flickr' ),
				),
				'items_limit'          => array(
					'type'        => 'number',
					'title'       => esc_html__( 'Items show', 'armania' ),
					'description' => esc_html__( 'the number items show', 'armania' ),
					'default'     => 4,
					'unit'        => 'items(s)',
					'dependency'  => array( 'image_source', 'any', 'flickr,instagram' ),
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

			unset( $instance['title'] );

			$instance['slides_rows_space'] = 'rows-space-10';

			echo ovic_do_shortcode( 'ovic_network', $instance );

			if ( ! empty( $instance['profile'] ) ) {
				echo '<a href="' . esc_url( $instance['profile'] ) . '"><i class="fa fa-instagram"></i>' . esc_html__( 'View profile', 'armania' ) . '</a>';
			}

			$this->widget_end( $args );
		}
	}
}