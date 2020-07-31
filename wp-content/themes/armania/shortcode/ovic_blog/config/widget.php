<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Widget_Ovic_Blog' ) ) {
	class Widget_Ovic_Blog extends OVIC_Widget
	{
		/**
		 * Constructor.
		 */
		public function __construct()
		{
			$this->widget_cssclass    = 'ovic-blog';
			$this->widget_description = 'Display the customer blog.';
			$this->widget_id          = 'ovic_blog';
			$this->widget_name        = esc_html__( 'Ovic: Blog', 'armania' );
			$this->settings           = array(
				'title'    => array(
					'type'  => 'text',
					'title' => esc_html__( 'Title', 'armania' ),
				),
				'style'    => array(
					'type'    => 'select_preview',
					'title'   => esc_html__( 'Select style', 'armania' ),
					'options' => armania_file_options( '/templates/blog/blog-shortcode/', 'content-blog' ),
					'default' => 'style-01',
				),
				'target'   => array(
					'type'       => 'select',
					'title'      => esc_html__( 'Target', 'armania' ),
					'options'    => array(
						'recent_post' => esc_html__( 'Recent post', 'armania' ),
						'popularity'  => esc_html__( 'Popularity', 'armania' ),
						'date'        => esc_html__( 'Date', 'armania' ),
						'title'       => esc_html__( 'Title', 'armania' ),
						'random'      => esc_html__( 'Random', 'armania' ),
					),
					'attributes' => array(
						'data-depend-id' => 'target',
						'style'          => 'width:100%',
					),
					'default'    => 'recent_post',
				),
				'category' => array(
					'type'           => 'select',
					'title'          => esc_html__( 'Category Blog', 'armania' ),
					'options'        => 'categories',
					'chosen'         => true,
					'query_args'     => array(
						'orderby' => 'name',
						'order'   => 'ASC',
					),
					'default_option' => esc_html__( 'Select a category', 'armania' ),
					'placeholder'    => esc_html__( 'Select a category', 'armania' ),
				),
				'limit'    => array(
					'type'        => 'number',
					'unit'        => 'items(s)',
					'default'     => '6',
					'title'       => esc_html__( 'Limit', 'armania' ),
					'description' => esc_html__( 'How much items per page to show', 'armania' ),
				),
				'orderby'  => array(
					'type'        => 'select',
					'title'       => esc_html__( 'Order by', 'armania' ),
					'options'     => array(
						''              => esc_html__( 'None', 'armania' ),
						'date'          => esc_html__( 'Date', 'armania' ),
						'ID'            => esc_html__( 'ID', 'armania' ),
						'author'        => esc_html__( 'Author', 'armania' ),
						'title'         => esc_html__( 'Title', 'armania' ),
						'modified'      => esc_html__( 'Modified', 'armania' ),
						'rand'          => esc_html__( 'Random', 'armania' ),
						'comment_count' => esc_html__( 'Comment count', 'armania' ),
						'menu_order'    => esc_html__( 'Menu order', 'armania' ),
					),
					'attributes'  => array(
						'style' => 'width:100%',
					),
					'description' => sprintf( esc_html__( 'Select how to sort retrieved products. More at %s.',
						'armania' ),
						'<a href="' . esc_url( 'http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters' ) . '" target="_blank">' . esc_html__( 'WordPress codex page',
							'armania' ) . '</a>' ),
				),
				'order'    => array(
					'type'        => 'select',
					'title'       => esc_html__( 'Sort order', 'armania' ),
					'options'     => array(
						''     => esc_html__( 'None', 'armania' ),
						'DESC' => esc_html__( 'Descending', 'armania' ),
						'ASC'  => esc_html__( 'Ascending', 'armania' ),
					),
					'attributes'  => array(
						'style' => 'width:100%',
					),
					'description' => sprintf( esc_html__( 'Designates the ascending or descending order. More at %s.',
						'armania' ),
						'<a href="' . esc_url( 'http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters' ) . '" target="_blank">' . esc_html__( 'WordPress codex page',
							'armania' ) . '</a>' ),
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

			echo ovic_do_shortcode( 'ovic_blog', $instance );

			$this->widget_end( $args );
		}
	}
}