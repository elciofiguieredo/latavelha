<?php
$conf = array('postID' => $post->ID, 'sidebar' => false);
$conf = json_encode($conf);
?>

<div class="map-container"><div id="map_<?php echo $post->ID; ?>" class="map"></div></div>
<script type="text/javascript">mappress(<?php echo $conf; ?>);</script>