<?php

/*
 * Platform functions
 */

function latavelha_get_platform_age($post_id = false) {
	global $post;
	$post_id = $post_id ? $post_id : $post->ID;
	$year = intval(get_post_meta($post_id, 'construction_date', true));
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