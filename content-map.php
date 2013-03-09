<?php
global $map;
$conf = array('postID' => $map->ID);
if(is_single()) {
	global $post;
	$conf['center'] = array(
		'lat' => get_post_meta($post->ID, 'geocode_latitude', true),
		'lon' => get_post_meta($post->ID, 'geocode_longitude', true)
	);
	$conf['zoom'] = 8;
}
$conf = json_encode($conf);
?>

<div class="map-container"><div id="map_<?php echo $map->ID; ?>" class="map"></div><?php if(is_single()) echo '<div class="highlight-point transition has-end" data-end="1300"></div>'; ?></div>
<script type="text/javascript">mappress(<?php echo $conf; ?>);</script>