<?php

add_action('add_meta_boxes', 'latavelha_platform_links_add_meta_box');
add_action('save_post', 'latavelha_platform_links_save_postdata');

function latavelha_platform_links_add_meta_box() {
	add_meta_box(
		'platform_links',
		__('Platform links', 'latavelha'),
		'latavelha_platform_links_inner_custom_box',
		'platform',
		'advanced',
		'high'
	);
}

function latavelha_platform_links_inner_custom_box($post) {
	$local = get_post_meta($post->ID, 'platform_link_local', true);
	$rigzone = get_post_meta($post->ID, 'platform_link_rigzone', true);
	$marinetraffic = get_post_meta($post->ID, 'platform_link_marinetraffic', true);
	$site = get_post_meta($post->ID, 'platform_link_site', true);
	?>
	<div id="platform-links-metabox">
		<p>
			<label for="link_local_input"><?php _e('Local', 'latavelha'); ?></label></br>
			<input type="text" id="link_local_input" name="link_local" value="<?php echo $local; ?>" size="60" />
		</p>
		<p>
			<label for="link_rigzone_input"><?php _e('Rigzone', 'latavelha'); ?></label></br>
			<input type="text" id="link_rigzone_input" name="link_rigzone" value="<?php echo $rigzone; ?>" size="60" />
		</p>
		<p>
			<label for="link_marinetraffic_input"><?php _e('Marine Traffic', 'latavelha'); ?></label></br>
			<input type="text" id="link_marinetraffic_input" name="link_marinetraffic" value="<?php echo $marinetraffic; ?>" size="60" />
		</p>
		<p>
			<label for="link_site_input"><?php _e('Site', 'latavelha'); ?></label></br>
			<input type="text" id="link_site_input" name="link_site" value="<?php echo $site; ?>" size="60" />
		</p>
	</div>
	<?php
}

function latavelha_platform_links_save_postdata($post_id) {
	if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		return;

	if (defined('DOING_AJAX') && DOING_AJAX)
		return;

	if (false !== wp_is_post_revision($post_id))
		return;

	if(isset($_REQUEST['link_local']))
		update_post_meta($post_id, 'platform_link_local', $_REQUEST['link_local']);

	if(isset($_REQUEST['link_rigzone']))
		update_post_meta($post_id, 'platform_link_rigzone', $_REQUEST['link_rigzone']);

	if(isset($_REQUEST['link_marinetraffic']))
		update_post_meta($post_id, 'platform_link_marinetraffic', $_REQUEST['link_marinetraffic']);

	if(isset($_REQUEST['link_site']))
		update_post_meta($post_id, 'platform_link_site', $_REQUEST['link_site']);

}

?>