<?php

require(STYLESHEETPATH . '/inc/importer.php');

function latavelha_platform_importer() {
	$csv = 'https://docs.google.com/spreadsheet/pub?key=0Avi2PVZYFw_2dDZ1RXVrd1hzY0FiNGk0Nkd3QnA0SFE&single=true&gid=0&output=csv';
	$platforms = get2DArrayFromCsv($csv, ',');

	$posts = array();
	foreach($platforms as $platform) {
		$data['post'] = array();
		$data['post']['post_title'] = $platform[1];
		$data['post']['post_type'] = 'platform';
		$data['post']['post_status'] = 'publish';

		// meta
		$data['meta'] = array();
		$data['meta']['other_names'] = $platform[2];
		$data['meta']['geocode_latitude'] = $platform[6];
		$data['meta']['geocode_longitude'] = $platform[7];
		$data['meta']['platform_link_local'] = $platform[8];
		$data['meta']['platform_link_marinetraffic'] = $platform[17];
		$data['meta']['platform_link_rigzone'] = $platform[14];
		$data['meta']['platform_link_site'] = 'http://' . $platform[15];
		$data['meta']['construction_date'] = $platform[9];
		$data['meta']['platform_status'] = str_replace(' ', '', strtolower($platform[13]));
		$data['meta']['year'] = $platform[19];
		if($platform[5] != '?')
			$data['meta']['location_certainty'] = 1;
		if($platform[12] == 'SIM')
			$data['meta']['brazil_area'] = 1;

		// tax
		$data['tax'] = array();
		$data['tax']['platform-owner'] = $platform[3];
		$data['tax']['platform-operator'] = $platform[4];
		$data['tax']['platform-flag'] = $platform[10];
		$data['tax']['platform-type'] = $platform[16];
		$posts[] = $data;
	}
	latavelha_importer($posts);
}

function latavelha_platform_importer_init() {
	if(isset($_REQUEST['import_platforms'])) {
		latavelha_platform_importer();
		exit;
	}
}
add_action('init', 'latavelha_platform_importer_init');
?>