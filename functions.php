<?php

/*
 * Theme setup
 */
function latavelha_setup() {
	include(STYLESHEETPATH . '/inc/post-types.php');
	include(STYLESHEETPATH . '/inc/taxonomies.php');

	// importers
	//include(STYLESHEETPATH . '/inc/platform_importer.php');
}
add_action('after_setup_theme', 'latavelha_setup');

/*
 * Scripts and styles
 */
function latavelha_scripts() {
	// styles
	wp_enqueue_style('base', get_stylesheet_directory_uri() . '/css/base.css', array(), '1.2');
	wp_enqueue_style('skeleton', get_stylesheet_directory_uri() . '/css/skeleton.css', array('base'), '1.2');
	wp_enqueue_style('font-opensans', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');
	wp_enqueue_style('font-blackops', 'http://fonts.googleapis.com/css?family=Black+Ops+One');
	wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.css', array('skeleton', 'font-opensans', 'font-blackops'), '0.0.1.1');
}
add_action('wp_enqueue_scripts', 'latavelha_scripts');

// register lata velha metaboxes
include(STYLESHEETPATH . '/metaboxes/metaboxes.php');

// register geocode metabox
add_action('add_meta_boxes', 'latavelha_geocode_metaboxes');
function latavelha_geocode_metaboxes() {
	// platform
	add_meta_box(
		'geocoding-address',
		__('Address and geolocation', 'latavelha'),
		'geocoding_inner_custom_box',
		'platform',
		'advanced',
		'high'
	);
	// accident
	add_meta_box(
		'geocoding-address',
		__('Address and geolocation', 'latavelha'),
		'geocoding_inner_custom_box',
		'accident',
		'advanced',
		'high'
	);
	// oil well
	add_meta_box(
		'geocoding-address',
		__('Address and geolocation', 'latavelha'),
		'geocoding_inner_custom_box',
		'oil-well',
		'advanced',
		'high'
	);
}

// markers query
add_filter('mappress_markers_query', 'latavelha_markers_query');
function latavelha_markers_query($query) {
	if(is_front_page())
		$query['post_type'] = array('post', 'platform', 'accident');

	return $query;
}

// lata velha marker icons
add_filter('mappress_marker_icon', 'latavelha_markers_icon');
function latavelha_markers_icon($marker) {
	global $post;
	if(get_post_type($post->ID) == 'platform') {
		$marker = array(
			'url' => get_stylesheet_directory_uri() . '/img/icons/mapa_plataforma_nova.png',
			'width' => 32,
			'height' => 47
		);
		if(latavelha_is_platform_old()) {
			$marker['url'] = get_stylesheet_directory_uri() . '/img/icons/mapa_plataforma_velha.png';
		}
	}
	return $marker;
}

// lata velha marker class
add_filter('mappress_marker_class', 'latavelha_markers_class');
function latavelha_markers_class($class) {
	global $post;
	if(get_post_type() == 'platform') {
		if(latavelha_is_platform_old()) {
			$class[] = 'old-platform';
		}
	}
	return $class;
}

include(STYLESHEETPATH . '/inc/platform-functions.php');

?>