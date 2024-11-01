<?php 
/*
 *portfolio cpt meta
*/
function smart_grid_postfolio_meta() {
	$prefix = 'smart_grid_';

	$smart_grid_postfolio_meta = new_cmb2_box( array(
		'id'            => $prefix .'portfolio',
		'title'         => esc_html__( 'Portfolio Details', 'smart-grid' ),
		'object_types'  => array( 'portfolio' ), // Post type
	) );


	$smart_grid_postfolio_meta->add_field( array(
	'name' => esc_html__( 'Preview  Url' , 'smart-grid' ),
	'id'   => $prefix.'prv-url',
	'type' => 'text_url',
	) );

	$smart_grid_postfolio_meta->add_field( array(
	'name' => esc_html__( 'Download  Url' , 'smart-grid' ),
	'id'   => $prefix.'dwn-url',
	'type' => 'text_url',
	) );

}

/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */
add_action( 'cmb2_admin_init', 'smart_grid_postfolio_meta' );
