<?php

add_action('add_meta_boxes', 'latavelha_accident_general_info_add_meta_box');
add_action('save_post', 'latavelha_accident_general_info_save_postdata');

function latavelha_accident_general_info_add_meta_box() {
	add_meta_box(
		'accident_general_info',
		__('General accident information', 'latavelha'),
		'latavelha_accident_general_info_inner_custom_box',
		'accident',
		'advanced',
		'high'
	);
}

function latavelha_accident_general_info_inner_custom_box($post) {
	$link = get_post_meta($post->ID, 'accident_link', true);
	$notes = get_post_meta($post->ID, 'accident_notes', true);
	?>
	<div id="general-info-metabox">
		<h4><?php _e('Fill general information about this accident.', 'latavelha'); ?></h4>
		<p>
			<label for="accident_link_input"><?php _e('Link', 'latavelha'); ?></label>
			<input type="text" id="accident_link_input" name="accident_link" size="70" value="<?php echo $link; ?>" />
		</p>
		<p>
			<label for="accident_notes_input"><?php _e('Notes', 'latavelha'); ?></label><br/>
			<textarea id="accident_notes_input" name="accident_notes" rows="8" cols="100" /><?php echo $notes; ?></textarea>
		</p>
	</div>
	<?php
}

function latavelha_accident_general_info_save_postdata($post_id) {
	if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		return;

	if (defined('DOING_AJAX') && DOING_AJAX)
		return;

	if (false !== wp_is_post_revision($post_id))
		return;

	if(isset($_REQUEST['accident_link']))
		update_post_meta($post_id, 'accident_link', $_REQUEST['accident_link']);

	if(isset($_REQUEST['accident_notes']))
		update_post_meta($post_id, 'accident_notes', $_REQUEST['accident_notes']);

}

?>