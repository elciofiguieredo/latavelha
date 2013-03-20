<?php
global $mappress_map;
$conf = array('postID' => $mappress_map->ID);
if(is_single() && mappress_has_marker_location()) {
	global $post;
	$conf['center'] = mappress_get_marker_conf_coordinates();
	$conf['zoom'] = 8;
}
$conf = json_encode($conf);
?>

<div class="map-container">
	<div id="map_<?php echo $mappress_map->ID; ?>" class="map"></div>
	<?php if(is_single()) : ?>
		<?php if(mappress_has_marker_location()) : ?>
			<div class="highlight-point transition has-end" data-end="1300"></div>
		<?php else : ?>
			<?php /*<div class="disable-point transition has-end" data-end="1300"><span><?php _e('Location not found', 'latavelha'); ?></span></div>*/ ?>
		<?php endif; ?>
	<?php endif; ?>
</div>
<script type="text/javascript">mappress(<?php echo $conf; ?>);</script>