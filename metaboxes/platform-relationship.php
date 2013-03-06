<?php

add_action('add_meta_boxes', 'latavelha_platform_relationship_add_meta_box');
add_action('save_post', 'latavelha_platform_relationship_save_postdata');

function latavelha_platform_relationship_add_meta_box() {
	add_meta_box(
		'platform_relationship',
		__('Platform relationship', 'latavelha'),
		'latavelha_platform_relationship_inner_custom_box',
		'accident',
		'advanced',
		'high'
	);
	add_meta_box(
		'platform_relationship',
		__('Platform relationship', 'latavelha'),
		'latavelha_platform_relationship_inner_custom_box',
		'post',
		'advanced',
		'high'
	);
}

function latavelha_platform_relationship_inner_custom_box($post) {
	$platform_id = get_post_meta($post->ID, 'platform_id', true);
	?>
	<div id="platform-relatioship-metabox">
		<h4><?php _e('Relate this content to a platform', 'latavelha'); ?></h4>
		<?php
		$platforms = get_posts('post_type=platform&posts_per_page=-1&orderby=title&order=ASC');
		if($platforms) : ?>
			<ul class="clearfix">
				<?php foreach($platforms as $platform) : ?>
					<li style="width:20%;float:left;display:block;">
						<input type="radio" name="platform_id" value="<?php echo $platform->ID; ?>" id="platform_<?php echo $platform->ID; ?>_id" <?php if($platform_id == $platform->ID) echo 'checked'; ?> /> <label for="platform_<?php echo $platform->ID; ?>_id"><?php echo $platform->post_title; ?></label>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</div>
	<?php
}

function latavelha_platform_relationship_save_postdata($post_id) {
	if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		return;

	if (defined('DOING_AJAX') && DOING_AJAX)
		return;

	if (false !== wp_is_post_revision($post_id))
		return;

	if(isset($_REQUEST['platform_id']))
		update_post_meta($post_id, 'platform_id', $_REQUEST['platform_id']);

}

?>