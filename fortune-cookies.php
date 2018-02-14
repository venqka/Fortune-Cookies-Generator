<?php
/*
Plugin Name: Fortune Cookies Generator
Description: This plugin allows you to add, manage and display anywhere a button that generates fortune cookies. 
Author: venqka@shtrak.eu
Version: 1.1
*/

$fc_plugin_path = plugin_dir_path( __FILE__ );

require_once( $fc_plugin_path . 'fc-cookies.php' );
require_once( $fc_plugin_path . 'fc-cookie-categories.php' );
require_once( $fc_plugin_path . 'fc-cookie-tags.php' );
require_once( $fc_plugin_path . 'fc-shortcode.php' );
require_once( $fc_plugin_path . 'fc-ajax-handler.php' );
require_once( $fc_plugin_path . 'fc-widget.php' );

/********************************************************
	Register and enqueue front end styles and scripts
********************************************************/

function fc_enqueue() {

	/*frontend styles*/

	wp_enqueue_style( 'frontend-style', plugin_dir_url( __FILE__ ) . 'styles/frontend-style.css', array(), '1.0', false );

	/*fontwesome*/
	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' ); 

	/*frontend scripts*/

	wp_register_script( 'frontend-script', plugin_dir_url( __FILE__ ) . 'scripts/frontend-js.js', array( 'jquery' ), '1.0', true );

	wp_enqueue_script( 'frontend-script', plugin_dir_url( __FILE__ ) . 'scripts/frontend-js.js', array( 'jquery' ), '1.0', true );

	$ajax_args = array(
		'ajax_url'	 	=> admin_url( 'admin-ajax.php' ), 
		'ajax_nonce'	=> wp_create_nonce( 'ajax-nonce' )			
	);
	wp_localize_script( 'frontend-script', 'fc_ajax', $ajax_args );

}
add_action( 'wp_enqueue_scripts', 'fc_enqueue' );

function fc_register_widget() {

	register_widget( 'fc_widget' );

}
add_action( 'widgets_init', 'fc_register_widget' );