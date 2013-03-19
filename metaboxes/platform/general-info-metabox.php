<?php

add_action('add_meta_boxes', 'latavelha_platform_general_info_add_meta_box');
add_action('save_post', 'latavelha_platform_general_info_save_postdata');

function latavelha_platform_general_info_add_meta_box() {
	add_meta_box(
		'platform_general_info',
		__('General platform information', 'latavelha'),
		'latavelha_platform_general_info_inner_custom_box',
		'platform',
		'advanced',
		'high'
	);
}

function latavelha_platform_general_info_inner_custom_box($post) {
	$other_names = get_post_meta($post->ID, 'other_names', true);
	$construction_date = get_post_meta($post->ID, 'construction_date', true);
	$year = get_post_meta($post->ID, 'year', true);
	$location_certainty = get_post_meta($post->ID, 'location_certainty', true);
	$brazil_area = get_post_meta($post->ID, 'brazil_area', true);
	?>
	<div id="general-info-metabox">
		<h4><?php _e('Fill general information about this platform.', 'latavelha'); ?></h4>
		<p>
			<label for="other_names_input"><?php _e('Other names', 'latavelha'); ?></label>
			<input type="text" id="other_names_input" name="other_names" value="<?php echo $other_names; ?>" />
		</p>
		<p>
			<label for="construction_date_input"><?php _e('Construction date', 'latavelha'); ?></label>
			<input type="text" id="construction_date_input" name="construction_date" value="<?php echo $construction_date; ?>" />
		</p>
		<p>
			<label for="year_input"><?php _e('Year', 'latavelha'); ?></label>
			<input type="text" id="year_input" name="year" value="<?php echo $year; ?>" />
		</p>
		<p>
			<input type="checkbox" id="location_certainty_input" name="location_certainty" value="1" <?php if($location_certainty) echo 'checked'; ?> />
			<label for="location_certainty_input"><?php _e('Location certainty', 'latavelha'); ?></label>
		</p>
		<p>
			<input type="checkbox" id="brazil_area_input" name="brazil_area" value="1" <?php if($brazil_area) echo 'checked'; ?> />
			<label for="brazil_area_input"><?php _e('Brazil area', 'latavelha'); ?></label>
		</p>
	</div>
	<?php
}

function latavelha_platform_general_info_save_postdata($post_id) {
	if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		return;

	if (defined('DOING_AJAX') && DOING_AJAX)
		return;

	if (false !== wp_is_post_revision($post_id))
		return;

	if(isset($_REQUEST['other_names']))
		update_post_meta($post_id, 'other_names', $_REQUEST['other_names']);

	if(isset($_REQUEST['construction_date']))
		update_post_meta($post_id, 'construction_date', $_REQUEST['construction_date']);

	if(isset($_REQUEST['year']))
		update_post_meta($post_id, 'year', $_REQUEST['year']);

	if(isset($_REQUEST['location_certainty']))
		update_post_meta($post_id, 'location_certainty', $_REQUEST['location_certainty']);
	else
		delete_post_meta($post_id, 'location_certainty');

	if(isset($_REQUEST['brazil_area']))
		update_post_meta($post_id, 'brazil_area', $_REQUEST['brazil_area']);
	else
		delete_post_meta($post_id, 'brazil_area');

}

?>