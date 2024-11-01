<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'SMART_GRID_VERSION' ) ) {
	define( 'SMART_GRID_VERSION', '1.0.0' );
}


/**
 * Actions/Filters
 *
 * Related to all settings API.
 *
 * @since  1.0.0
 */
if ( class_exists( 'smart_grid_setting' ) ) {
	/**
	 * Object Instantiation.
	 *
	 * Object for the class `smart_grid_setting`.
	 */
	$settings = new smart_grid_setting();


	// Section: post grid Settings.
	$settings->add_section(
		array(
			'id'    => 'post_grid',
			'title' => __( 'Post Grid', 'smart-grid' ),//post grid
		)
	);

  // Section: Portfolio grid Settings.
	$settings->add_section(
		array(
			'id'    => 'P_grid', //portfolio grid
			'title' => __( 'Portfolio Grid', 'smart-grid' ),
		)
	);

	// Section: Woocommerce Produce
	$settings->add_section(
		array(
			'id'    => 'wp_grid', //woocommerce Product
			'title' => __( 'Woocommerce Product Settings', 'smart-grid' ),
		)
	);




   $settings->add_field(
		'post_grid',
		array(
			'id'      => 'header1',
			'type'    => 'text',
			'name'    => __( 'Section Header', 'smart-grid' ),
			'desc'    => __( 'Write Section Header Text', 'smart-grid' ),
			'default' =>'Header Text',
		)
	);

    $settings->add_field(
		'post_grid',
		array(
			'id'      => 'header2',
			'type'    => 'text',
			'name'    => __( 'Section Sub Header', 'smart-grid' ),
			'desc'    => __( 'Write Section Sub Header Text', 'smart-grid' ),
			'default' =>'Sub Header Text',
		)
	);

    $settings->add_field(
		'post_grid',
		array(
			'id'      => 'ppr',
			'type'    => 'text',
			'name'    => __( 'How Many Post Display', 'smart-grid' ),
			'desc'    => __( 'How Many Post You Want To Display', 'smart-grid' ),
			'default' =>'9',
		)
	);

	$settings->add_field(
		'post_grid',
		array(
			'id'      => 'h_color',
			'type'    => 'color',
			'name'    => __( 'Choose Color For Section Header', 'smart-grid' ),
			'default' =>'',
		)
	);	

	$settings->add_field(
		'post_grid',
		array(
			'id'      => 'sh_color',
			'type'    => 'color',
			'name'    => __( 'Choose Color For Section Sub Header', 'smart-grid' ),
			'default' =>'',
		)
	);

	$settings->add_field(
		'post_grid',
		array(
			'id'      => 't_color',
			'type'    => 'color',
			'name'    => __( 'Choose Color For Grid Title', 'smart-grid' ),
			'default' =>'',
		)
	);

	$settings->add_field(
		'post_grid',
		array(
			'id'      => 'tb_color',
			'type'    => 'color',
			'name'    => __( 'Choose Color For Grid Title Background', 'smart-grid' ),
			'default' =>'',
		)
	);

    $settings->add_field(
		'P_grid',
		array(
			'id'      => 'header1',
			'type'    => 'text',
			'name'    => __( 'Section Header', 'smart-grid' ),
			'desc'    => __( 'Write Section Header Text', 'smart-grid' ),
			'default' => 'Header Text'
		)
	);

	$settings->add_field(
		'P_grid',
		array(
			'id'      => 'header2',
			'type'    => 'text',
			'name'    => __( 'Section Sub Header', 'smart-grid' ),
			'desc'    => __( 'Write Section Sub Header Text', 'smart-grid' ),
			'default' => 'Sub Header Text'
		)
	);
	$settings->add_field(
		'P_grid',
		array(
			'id'      => 'ppr',
			'type'    => 'text',
			'name'    => __( 'How Many Post Display', 'smart-grid' ),
			'desc'    => __( 'How Many Post You Want To Display', 'smart-grid' ),
			'default' =>'9',
		)
	);

	$settings->add_field(
	'P_grid',
	array(
		'id'      => 'h_color',
		'type'    => 'color',
		'name'    => __( 'Choose Color For Section Header', 'smart-grid' ),
		'default' =>'',
	)
);	

	$settings->add_field(
		'P_grid',
		array(
			'id'      => 'sh_color',
			'type'    => 'color',
			'name'    => __( 'Choose Color For Section Sub Header', 'smart-grid' ),
			'default' =>'',
		)
	);

	$settings->add_field(
		'P_grid',
		array(
			'id'      => 't_color',
			'type'    => 'color',
			'name'    => __( 'Choose Color For Grid Title', 'smart-grid' ),
			'default' =>'',
		)
	);

	$settings->add_field(
		'P_grid',
		array(
			'id'      => 'tb_color',
			'type'    => 'color',
			'name'    => __( 'Choose Color For Grid Title Background', 'smart-grid' ),
			'default' =>'',
		)
	);


	$settings->add_field(
		'wp_grid',
		array(
			'id'      => 'header1',
			'type'    => 'text',
			'name'    => __( 'Section Header', 'smart-grid' ),
			'desc'    => __( 'Write Section Header Text', 'smart-grid' ),
			'default' => 'Header Text'
		)
	);

	$settings->add_field(
		'wp_grid',
		array(
			'id'      => 'header2',
			'type'    => 'text',
			'name'    => __( 'Section Sub Header', 'smart-grid' ),
			'desc'    => __( 'Write Section Sub Header Text', 'smart-grid' ),
			'default' => 'Sub Header Text'
		)
	);
	$settings->add_field(
		'wp_grid',
		array(
			'id'      => 'ppr',
			'type'    => 'text',
			'name'    => __( 'How Many Post Display', 'smart-grid' ),
			'desc'    => __( 'How Many Post You Want To Display', 'smart-grid' ),
			'default' =>'9',
		)
	);

	$settings->add_field(
	'wp_grid',
	array(
		'id'      => 'h_color',
		'type'    => 'color',
		'name'    => __( 'Choose Color For Section Header', 'smart-grid' ),
		'default' =>'',
	)
	);	

	$settings->add_field(
		'wp_grid',
		array(
			'id'      => 'sh_color',
			'type'    => 'color',
			'name'    => __( 'Choose Color For Section Sub Header', 'smart-grid' ),
			'default' =>'',
		)
	);

	$settings->add_field(
		'wp_grid',
		array(
			'id'      => 't_color',
			'type'    => 'color',
			'name'    => __( 'Choose Color For Grid Title', 'smart-grid' ),
			'default' =>'',
		)
	);

	$settings->add_field(
		'wp_grid',
		array(
			'id'      => 'tb_color',
			'type'    => 'color',
			'name'    => __( 'Choose Color For Grid Title Background', 'smart-grid' ),
			'default' =>'',
		)
	);
}
