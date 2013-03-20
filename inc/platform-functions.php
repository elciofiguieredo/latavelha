<?php

/*
 * Platform functions
 */

function latavelha_get_platform_age($post_id = false) {
	global $post;
	$post_id = $post_id ? $post_id : $post->ID;
	$year = intval(get_post_meta($post_id, 'construction_date', true));
	if($year)
		return intval(date('Y')) - $year;

	return false;
}

function latavelha_get_platform_age_text($post_id = false) {
	global $post;
	$post_id = $post_id ? $post_id : $post->ID;
	$age = latavelha_get_platform_age($post_id);
	if($age !== false)
		return sprintf(_n('1 year', '%s years', $age, 'latavelha'), $age);

	return false;
}

function latavelha_is_platform_old($post_id = false) {
	global $post;
	$post_id = $post_id ? $post_id : $post->ID;
	if(latavelha_get_platform_age($post_id) >= 30)
		return true;
	else
		return false;
}

function latavelha_has_platform_location($post_id = false) {
	global $post;
	$post_id = $post_id ? $post_id : $post->ID;
	$lat = get_post_meta($post_id, 'geocode_latitude', true);
	$lon = get_post_meta($post_id, 'geocode_longitude', true);
	if($lat && $lon)
		return true;

	return false;
}

function latavelha_get_platform_status($post_id = false) {
	global $post;
	$post_id = $post_id ? $post_id : $post->ID;
	$status = get_post_meta($post_id, 'platform_status', true);
	if($status) {
		$available_status = latavelha_get_platform_available_status();
		foreach($available_status as $s){
			if($s['id'] == $status)
				return $s;
		}
	}
	return false;
}

function latavelha_get_platform_accidents_count($post_id = false) {
	global $post;
	$post_id = $post_id ? $post_id : $post->ID;
	$args = latavelha_get_platform_related_args(array('post_type' => 'accident'), $post_id);
	$accidents = get_posts($args);
	return count($accidents);
}

function latavelha_get_platform_accidents_count_text($post_id = false) {
	global $post;
	$post_id = $post_id ? $post_id : $post->ID;
	$count = latavelha_get_platform_accidents_count($post_id);
	return sprintf(_n('1 accident', '%s accidents', $count, 'latavelha'), $count);
}

function latavelha_get_platform_type($post_id = false) {
	global $post;
	$post_id = $post_id ? $post_id : $post->ID;
	$type = get_the_terms($post_id, 'platform-type');
	if($type)
		return array_shift($type);

	return false;
}

function latavelha_get_platform_owner($post_id = false) {
	global $post;
	$post_id = $post_id ? $post_id : $post->ID;
	$owner = get_the_terms($post_id, 'platform-owner');
	if($owner)
		return array_shift($owner);

	return false;
}

function latavelha_get_platform_operator($post_id = false) {
	global $post;
	$post_id = $post_id ? $post_id : $post->ID;
	$operator = get_the_terms($post_id, 'platform-operator');
	if($operator)
		return array_shift($operator);

	return false;
}

function latavelha_get_platform_status_name($post_id = false) {
	global $post;
	$post_id = $post_id ? $post_id : $post->ID;
	$status = latavelha_get_platform_status($post_id);
	if($status)
		return $status['name'];

	return false;
}

function latavelha_get_platform_geometry($post_id = false) {
	global $post;
	$post_id = $post_id ? $post_id : $post->ID;
	$lat = get_post_meta($post_id, 'geocode_latitude', true);
	$lon = get_post_meta($post_id, 'geocode_longitude', true);
	if($lat && $lon) {
		return array($lon, $lat);
	}
	return array(0,0);
}

function latavelha_get_platform_status_class($post_id = false) {
	global $post;
	$post_id = $post_id ? $post_id : $post->ID;
	$status = latavelha_get_platform_status($post_id);
	if($status)
		return $status['class'];

	return false;
}

function latavelha_get_platform_available_status() {
	$available_status = array();
	$available_status[] = array(
		'id' => '',
		'name' => __('None', 'latavelha'),
		'class' => false
	);
	$available_status[] = array(
		'id' => 'drilling',
		'name' => __('Drilling', 'latavelha'),
		'class' => 'green'
	);
	$available_status[] = array(
		'id' => 'inspection',
		'name' => __('Inspection', 'latavelha'),
		'class' => 'gray'
	);
	$available_status[] = array(
		'id' => 'workover',
		'name' => __('Workover', 'latavelha'),
		'class' => 'gray'
	);
	$available_status[] = array(
		'id' => 'modification',
		'name' => __('Modification', 'latavelha'),
		'class' => 'gray'
	);
	$available_status[] = array(
		'id' => 'coldstacked',
		'name' => __('Cold stacked', 'latavelha'),
		'class' => 'red'
	);
	return apply_filters('latavelha_platform_available_status', $available_status);
}

function latavelha_get_platform_related_args($args = false, $post_id = false) {
	global $post;
	$post_id = $post_id ? $post_id : $post->ID;
	$related_args = array(
		'meta_query' => array(
			array(
				'key' => 'platform_id',
				'value' => $post_id
			)
		)
	);
	if($args)
		$related_args = array_merge($related_args, $args);

	return $related_args;
}