<?php
/**
* Plugin Name:Smart Grid
* Plugin URI:https://smartsoftcode.com/
* Description: Smart  Grid is a super responsive and very advance wordpress Plugin. You can Display Post, WooCommerce Produce and Portfolio as Grid View with this PLugin. 
* Author: smartsoftcode
* Author URI: https://smartsoftcode.com/
* Tested up to: 5.1.1
* Layers Plugin: True
* version:1.0.1
* Layers Required Version: 1.0
*License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * License: GPL2
 * text domain name:smart-grid
 * Copyright 2016  quazi sazzad  (email : qsazzad21@gmail.com, skype:quazisazzad)
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
**/




if ( ! defined( 'ABSPATH' ) )
 exit;



define( 'SMART_GRID_VER' , '1.0.1' );
define( 'SMART_GRID_DIR' , trailingslashit( plugin_dir_path( __FILE__ ) ) );
define( 'SMART_GRID_URI' , trailingslashit( plugin_dir_url( __FILE__ ) ) );
define( 'SMART_GRID_FILE' , trailingslashit( __FILE__ ) );




require_once( SMART_GRID_DIR.'/includes/smart-grid-script.php' );
require_once( SMART_GRID_DIR.'/includes/post-shortcode.php');
require_once( SMART_GRID_DIR.'/includes/portfolio-shortcode.php');
require_once( SMART_GRID_DIR.'/includes/product-shortcode.php');

require_once( SMART_GRID_DIR.'/admin/portfolio-cpt.php');
require_once( SMART_GRID_DIR.'/lib/init.php');
require_once( SMART_GRID_DIR.'/admin/portfolio-meta.php');

/*
* settings
*/
require_once( SMART_GRID_DIR.'/includes/class-wp-grid.php');
require_once( SMART_GRID_DIR.'/admin/settings.php');


  
/**
 * Load plugin textdomain.
 */
add_action( 'plugins_loaded', 'smart_grid_textdomain' );

function smart_grid_textdomain() {
  load_plugin_textdomain( 'smart-grid', false, plugin_basename( dirname( __FILE__ ) ) . '/lang' ); 
}


add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'smart_grid_settings_link' );
function smart_grid_settings_link( $links ) {
   $links[] = '<a href="'. esc_url( get_admin_url(null, 'options-general.php?page=grid_settings') ) .'">Settings</a>';
   return $links;
}

// 
add_image_size('smart-grid-post',400,345, true);

/*
* grid option
*/
function smart_grid_option($options, $name)
 {
 $option = get_option($options);
 if(isset($option[$name])){
 	$option = $option[$name];
 }else{
 	$option='';
 }
    return  $option;
 }



/**
 * Add "Custom" template to page attirbute template section.
 */
function smart_grid_template( $post_templates, $wp_theme, $post, $post_type ) {

    // Add custom template named template-custom.php to select dropdown 
    $post_templates['post-grid.php'] = __('Smart Post Grid');
    $post_templates['portfolio-grid.php'] = __('Smart Portfolio Grid');
    $post_templates['product-grid.php'] = __('Smart Product Grid');

    return $post_templates;
}

add_filter( 'theme_page_templates', 'smart_grid_template', 10, 4 );


function smart_grid_page_template ($template) {
    $post = get_post();
    $page_template = get_post_meta( $post->ID, '_wp_page_template', true );
    if ('post-grid.php' == basename ($page_template)){
          $template = WP_PLUGIN_DIR . '/smart-grid/post-grid.php';
    }elseif ('portfolio-grid.php' == basename ($page_template)) {
           $template = WP_PLUGIN_DIR . '/smart-grid/portfolio-grid.php';
    }elseif ('product-grid.php' == basename ($page_template)) {
           $template = WP_PLUGIN_DIR . '/smart-grid/product-grid.php';
    }
    return $template;
    }
add_filter ('page_template', 'smart_grid_page_template');