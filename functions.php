<?php

/*
 * MapPress
 */
include(TEMPLATEPATH . '/mappress/mappress.php');

/*
 * Theme setup
 */
function latavelha_setup() {

}
add_action('after_setup_theme', 'latavelha_setup');

/*
 * Scripts and styles
 */
function latavelha_scripts() {
	// styles
	wp_enqueue_style('base', get_template_directory_uri() . '/css/base.css', array(), '1.2');
	wp_enqueue_style('skeleton', get_template_directory_uri() . '/css/skeleton.css', array('base'), '1.2');
	wp_enqueue_style('font-opensans', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');
	wp_enqueue_style('font-blackops', 'http://fonts.googleapis.com/css?family=Black+Ops+One');
	wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', array('skeleton', 'font-opensans', 'font-blackops'), '0.0.0.1');
}
add_action('wp_enqueue_scripts', 'latavelha_scripts');

?>