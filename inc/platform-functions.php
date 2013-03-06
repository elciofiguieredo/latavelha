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
}

function latavelha_is_platform_old($post_id = false) {
	global $post;
	$post_id = $post_id ? $post_id : $post->ID;
	if(latavelha_get_platform_age($post_id) >= 30)
		return true;
	else
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

function latavelha_get_platform_status_name($post_id) {
	global $post;
	$post_id = $post_id ? $post_id : $post->ID;
	$status = latavelha_get_platform_status($post_id);
	if($status)
		return $status['name'];

	return false;
}

function latavelha_get_platform_status_class($post_id) {
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

function latavelha_get_platform_related_args($args, $post_id = false) {
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
	return array_merge($related_args, $args);
}