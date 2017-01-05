<?php

vc_map( array(

	'name'        => esc_html__( 'Thim: List Posts', 'eduma' ),
	'base'        => 'thim-list-post',
	'category'    => esc_html__( 'Thim Shortcodes', 'eduma' ),
	'description' => esc_html__( 'Display list posts.', 'eduma' ),
	'params'      => array(
		array(
			'type'        => 'textfield',
			'admin_label' => true,
			'heading'     => esc_html__( 'Title', 'eduma' ),
			'param_name'  => 'title',
			'value'       => '',
		),

		array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Select Category', 'eduma' ),
			'param_name' => 'cat_id',
			'value'      => thim_sc_get_categories(),
		),

		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Select Image Size', 'eduma' ),
			'param_name'  => 'image_size',
			'value'       => thim_sc_get_list_image_size(),
		),

		array(
			'type'        => 'number',
			'admin_label' => true,
			'heading'     => esc_html__( 'Number posts', 'eduma' ),
			'param_name'  => 'number_posts',
			'std'         => '4',
		),

		array(
			'type'        => 'checkbox',
			'admin_label' => true,
			'heading'     => esc_html__( 'Show Description', 'eduma' ),
			'param_name'  => 'show_description',
			//'value'       => array( esc_html__( '', 'eduma' ) => 'yes' ),
			'std'         => true,
		),

		array(
			'type'        => 'dropdown',
			'admin_label' => true,
			'heading'     => esc_html__( 'Order by', 'eduma' ),
			'param_name'  => 'orderby',
			'value'       => array(
				esc_html__( 'Select', 'eduma' )  => '',
				esc_html__( 'Popular', 'eduma' ) => 'popular',
				esc_html__( 'Recent', 'eduma' )  => 'recent',
				esc_html__( 'Title', 'eduma' )   => 'title',
				esc_html__( 'Random', 'eduma' )  => 'random',
			),
		),

		array(
			'type'        => 'dropdown',
			'admin_label' => true,
			'heading'     => esc_html__( 'Order', 'eduma' ),
			'param_name'  => 'order',
			'value'       => array(
				esc_html__( 'Select', 'eduma' ) => '',
				esc_html__( 'ASC', 'eduma' )    => 'asc',
				esc_html__( 'DESC', 'eduma' )   => 'desc',
			),
		),

		array(
			'type'        => 'textfield',
			'admin_label' => true,
			'heading'     => esc_html__( 'Link All Posts', 'eduma' ),
			'param_name'  => 'link',
			'value'       => '',
		),

		array(
			'type'        => 'textfield',
			'admin_label' => true,
			'heading'     => esc_html__( 'Text Read More', 'eduma' ),
			'param_name'  => 'text_link',
			'value'       => '',
		),

		array(
			'type'        => 'dropdown',
			'admin_label' => true,
			'heading'     => esc_html__( 'Style', 'eduma' ),
			'param_name'  => 'style',
			'value'       => array(
				esc_html__( 'No Style', 'eduma' )  => '',
				esc_html__( 'Home Page', 'eduma' ) => 'homepage',
				esc_html__( 'Sidebar', 'eduma' )   => 'sidebar',
			),
		),
	)
) );