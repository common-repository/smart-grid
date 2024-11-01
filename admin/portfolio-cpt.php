<?php 
/*
 *smart   portfolio cpt 
 */
function smart_grid_portfolio_cpt(){

    register_post_type( 'portfolio',
        array(
            'labels' => array(
            'name' => __( 'portfolio', 'smart-grid' ),
            'singular_name' => __( 'portfolio' , 'smart-grid'),
            'add_new' => __( 'Add New portfolio', 'smart-grid' ),
            'add_new_item' => __( 'Name', 'smart-grid' ),
            'edit_item' => __( 'Edit Name', 'smart-grid' ),
            'new_item' => __( 'Add New portfolio', 'smart-grid' ),
            'view_item' => __( 'View portfolio', 'smart-grid' ),
            'search_items' => __( 'Search portfolio', 'smart-grid' ),
            'not_found' => __( 'No portfolio found', 'smart-grid' ),
            'not_found_in_trash' => __( 'No portfolio found in trash', 'smart-grid' ),
            'featured_image'        => __( 'portfolio Image', 'smart-grid' ),
            'featured_image' => __( 'portfolio Image', 'smart-grid' ),
            'set_featured_image' => __( 'Set portfolio Image', 'smart-grid' ),
            'remove_featured_image' => __( 'Remove portfolio Image', 'smart-grid' ),
            'use_featured_image' => __( 'Use as portfolio Image', 'smart-grid' )
            ),
            'public' => true,
            'supports' => array( 'title', 'thumbnail'),
            'capability_type' => 'post',
            'rewrite' => array("slug" => "portfolio"), // Permalinks format
            'menu_position' => 5,
            'exclude_from_search' => true,
            'menu_icon'=> 'dashicons-format-gallery',
        )
    );

}
add_action('init','smart_grid_portfolio_cpt');

//add taxonomies(galley category)
function smart_grid_portfolio_taxonomies() {
    $labels = array(
        'name'              => __( 'Portfolio Category', 'smart-grid' ),
        'singular_name'     => __( 'Portfolio Category', 'smart-grid' ),
        'search_items'      => __( 'Search Portfolio Categories','smart-grid' ),
        'all_items'         => __( 'All Portfolio Categories','smart-grid' ),
        'parent_item'       => __( 'Parent Portfolio Category','smart-grid' ),
        'parent_item_colon' => __( 'Parent Portfolio Category:', 'smart-grid' ),
        'edit_item'         => __( 'Edit Portfolio Category','smart-grid' ), 
        'update_item'       => __( 'Update Portfolio Category','smart-grid' ),
        'add_new_item'      => __( 'Add New Portfolio Category','smart-grid' ),
        'new_item_name'     => __( 'New Portfolio Category','smart-grid' ),
        'menu_name'         => __( 'Portfolio Categories','smart-grid' ),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
    );
    register_taxonomy( 'portfolio_category', 'portfolio', $args );
}
add_action( 'init', 'smart_grid_portfolio_taxonomies' );