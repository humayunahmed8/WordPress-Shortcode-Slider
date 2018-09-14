<?php
/*
Plugin Name: Stock Toolkit
*/

// Exit if accessed directly
    if ( ! defined( 'ABSPATH' ) ) {
        exit; 
    }

// Define
define('STOCK_ACC_URL', WP_PLUGIN_URL . '/' . plugin_basename( dirname( __FILE__ ) ) . '/');
define('STOCK_ACC_PATH', plugin_dir_path( __FILE__ ));

// Get All Slides as a List 
function stock_toolkit_get_slide_as_list(){

	$args = wp_parse_args( 
		array(
			'post_type' => 'slide',
			'numberposts' => -1,
		)
	);

	$posts = get_posts($args);

	$post_options = array(esc_html__('-- Select Slide --', 'stock-toolkit')=> '');

	if($posts){
		foreach ($posts as $post) {
			$post_options[ $post->post_title ] = $post->ID;
		}
	}

	return $post_options;
}

// Custom Post Type for Sliders
function stock_toolkit_custom_post()
	{
	register_post_type('slide', array(
		'labels' => array(
			'name' => __('Slides') ,
			'singular_name' => __('Slide')
		) ,
		'supports' => array(
			'title',
			'editor',
			'custom-fields',
			'thumbnail',
			'page-attributes'
		) ,
		'public' => false,
		'show_ui' => true
	));
	}

add_action('init', 'stock_toolkit_custom_post');


// Print Shortcode in Widget
add_filter('widget_text', 'do_shortcode');

// Loading VC addons
require_once( STOCK_ACC_PATH . 'vc-addons/vc-blocks-load.php');

// Slides Shortcodes
require_once( STOCK_ACC_PATH . 'theme-shortcodes/slides-shortcode.php');


// Shortcodes depended on Visual Composer
include_once(ABSPATH . 'wp-admin/includes/plugin.php');
if (is_plugin_active( 'js_composer/js_composer.php' )) {
	require_once( STOCK_ACC_PATH . 'theme-shortcodes/staff-shortcode.php');
}

// Registering stock toolkit files
function stock_toolkit_files(){
	wp_enqueue_style('owl-carousel', plugin_dir_url( __FILE__ ) . 'assets/css/owl.carousel.min.css');
	wp_enqueue_style('stock-toolkit-css', plugin_dir_url( __FILE__ ) . 'assets/css/stock-toolkit.css');
	wp_enqueue_script('owl-carousel', plugin_dir_url( __FILE__ ) . 'assets/js/owl.carousel.min.js', array('jquery'), '1.8', true) ;
}
add_action('wp_enqueue_scripts', 'stock_toolkit_files');


