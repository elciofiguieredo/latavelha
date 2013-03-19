<?php

add_action('add_meta_boxes', 'latavelha_platform_status_add_meta_box');
add_action('save_post', 'latavelha_platform_status_save_postdata');

function latavelha_platform_status_add_meta_box() {
	add_meta_box(
		'platorm_status',
		__('Platform status', 'latavelha'),
		'latavelha_platform_status_inner_custom_box',
		'platform',
		'advanced',
		'high'
	);
}

function latavelha_platform_status_inner_custom_box($post) {
	$current_status = get_post_meta($post->ID, 'platform_status', true);
	$available_status = latavelha_get_platform_available_status();
	?>
	<div id="status-metabox">
		<ul>
			<?php foreach($available_status as $status) : ?>
				<li>
					<input type="radio" name="platform_status" value="<?php echo $status['id']; ?>" id="status_<?php echo $status['id']; ?>_input" <?php if($current_status == $status['id']) echo 'checked'; ?> />
					<label for="status_<?php echo $status['id']; ?>_input"><?php echo $status['name']; ?></label>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
	<?php
}

function latavelha_platform_status_save_postdata($post_id) {
	if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		return;

	if (defined('DOING_AJAX') && DOING_AJAX)
		return;

	if (false !== wp_is_post_revision($post_id))
		return;

	if(isset($_REQUEST['platform_status']))
		update_post_meta($post_id, 'platform_status', $_REQUEST['platform_status']);

}

?>