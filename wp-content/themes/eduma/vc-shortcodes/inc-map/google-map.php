<?php

vc_map( array(

	'name'        => esc_html__( 'Thim: Google Map', 'eduma' ),
	'base'        => 'thim-google-map',
	'category'    => esc_html__( 'Thim Shortcodes', 'eduma' ),
	'description' => esc_html__( 'Display Google Map.', 'eduma' ),
	'params'      => array(
		array(
			'type'        => 'textfield',
			'admin_label' => true,
			'heading'     => esc_html__( 'Title', 'eduma' ),
			'param_name'  => 'title',
			'value'       => '',
		),

		array(
			'type'        => 'dropdown',
			'admin_label' => true,
			'heading'     => esc_html__( 'Get Map By', 'eduma' ),
			'param_name'  => 'display_by',
			'value'       => array(
				esc_html__( 'Select', 'eduma' )      => '',
				esc_html__( 'Address', 'eduma' )     => 'address',
				esc_html__( 'Coordinates', 'eduma' ) => 'location',
			),
		),

		array(
			'type'        => 'textfield',
			'admin_label' => true,
			'heading'     => esc_html__( 'Lat', 'eduma' ),
			'param_name'  => 'location_lat',
			'std'         => '41.868626',
			'dependency'  => array(
				'element' => 'display_by',
				'value'   => 'location',
			),
		),

		array(
			'type'        => 'textfield',
			'admin_label' => true,
			'heading'     => esc_html__( 'Lng', 'eduma' ),
			'param_name'  => 'location_lng',
			'std'         => '-74.104301',
			'dependency'  => array(
				'element' => 'display_by',
				'value'   => 'location',
			),
		),

		array(
			'type'        => 'textarea',
			'admin_label' => true,
			'heading'     => esc_attr__( 'Map center', 'eduma' ),
			'description' => esc_attr__( 'The name of a place, town, city, or even a country. Can be an exact address too.', 'eduma' ),
			'param_name'  => 'map_center',
			'dependency'  => array(
				'element' => 'display_by',
				'value'   => 'address',
			),
		),

		array(
			'type'        => 'textfield',
			'admin_label' => true,
			'heading'     => esc_html__( 'Height', 'eduma' ),
			'param_name'  => 'settings_height',
			'std'         => '480',
		),

		array(
			'type'        => 'number',
			'admin_label' => true,
			'heading'     => esc_html__( 'Number events display', 'eduma' ),
			'param_name'  => 'settings_zoom',
			'std'         => '12',
			'min'         => '0',
			'max'         => '21'
		),

		array(
			'type'        => 'checkbox',
			'admin_label' => true,
			'heading'     => esc_html__( 'Scroll to zoom', 'eduma' ),
			'description' => esc_html__( 'Allow scrolling over the map to zoom in or out.', 'eduma' ),
			'param_name'  => 'settings_scroll_zoom',
			'std'         => true,
		),

		array(
			'type'        => 'checkbox',
			'admin_label' => true,
			'heading'     => esc_html__( 'Draggable', 'eduma' ),
			'description' => esc_html__( 'Allow dragging the map to move it around.', 'eduma' ),
			'param_name'  => 'settings_draggable',
			'std'         => true,
		),

		array(
			'type'        => 'checkbox',
			'admin_label' => true,
			'heading'     => esc_html__( 'Show marker at map center', 'eduma' ),
			'param_name'  => 'marker_at_center',
			'std'         => true,
		),

		array(
			'type'        => 'attach_image',
			'admin_label' => true,
			'heading'     => esc_html__( 'Marker Icon', 'eduma' ),
			'param_name'  => 'marker_icon',
		)

	)
) );