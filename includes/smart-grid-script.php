<?php

 function smart_grid_script(){
 	 wp_enqueue_style('bootstrap', SMART_GRID_URI.'assets/style/bootstrap.min.css');
 	 wp_enqueue_style('font-awesome', SMART_GRID_URI.'assets/style/font-awesome.min.css');
 	 wp_enqueue_style('smart-grid-style', SMART_GRID_URI.'assets/style/style.css');

 	 wp_enqueue_script('isotop', SMART_GRID_URI.'assets/js/isotope.js',array('jquery'));
 	 wp_enqueue_script('smart-grid-custom', SMART_GRID_URI.'assets/js/custom.js',array('jquery'));
 }
 add_action('wp_head','smart_grid_script');

