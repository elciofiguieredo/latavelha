<?php

/*
 * Accident functions
 */

function latavelha_get_accident_platform($post_id = false) {
	global $post;
	$post_id = $post_id ? $post_id : $post->ID;
	return get_post(get_post_meta($post_id, 'platform_id', true));
}

function latavelha_get_accident_type_icon($post_id = false) {
	global $post;
	$post_id = $post_id ? $post_id : $post->ID;
	$type = latavelha_get_accident_type($post_id);
	$icon = 'default';
	if($type) {
		$slug = $type->slug;
		if($slug == 'blowout' || $slug == 'incendio' || $slug == 'falha-blow-out-preventer-bop') {
			$icon = 'blowout';
		} elseif($slug == 'leak' || $slug == 'vazamento') {
			$icon = 'leak';
		}
	}
	return $icon;
}

function latavelha_get_accident_type($post_id = false) {
	global $post;
	$post_id = $post_id ? $post_id : $post->ID;
	$types = get_the_terms($post_id, 'accident-type');
	if($types)
		return array_shift($types);

	return false;
}

function latavelha_get_accident_type_name($post_id = false) {
	global $post;
	$post_id = $post_id ? $post_id : $post->ID;
	$type = latavelha_get_accident_type($post_id);
	if(!$type)
		return __('Unknown', 'latavelha');
	
	return $type->name;
}

function latavelha_get_accident_date($post_id = false) {
	global $post;
	$post_id = $post_id ? $post_id : $post->ID;
	return get_post_meta($post_id, 'accident_date', true);
}

function latavelha_get_accident_notes($post_id = false) {
	global $post;
	$post_id = $post_id ? $post_id : $post->ID;
	$notes = get_post_meta($post_id, 'accident_notes', true);
	if($notes)
		return apply_filters('the_content', $notes);
	return false;
}

function latavelha_get_accident_link($post_id = false) {
	global $post;
	$post_id = $post_id ? $post_id : $post->ID;
	$link = get_post_meta($post_id, 'accident_link', true);
	return $link;
}