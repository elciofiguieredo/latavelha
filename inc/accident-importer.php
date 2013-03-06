<?php

require(STYLESHEETPATH . '/inc/importer.php');

function latavelha_accident_importer() {
	$csv = 'https://docs.google.com/spreadsheet/pub?key=0AoY3ZCkLRBaedGxWWnRxVlYtbXhTY0Vydzl3a2dlWUE&single=true&gid=0&output=csv';
	$accidents = get2DArrayFromCsv($csv, ',');

	$posts = array();
	foreach($accidents as $accident) {
		$data['post'] = array();
		$data['post']['post_title'] = $accident[1] . ' - ' . $accident[3] . ' - ' . $accident[2];
		$data['post']['post_type'] = 'accident';
		$data['post']['post_status'] = 'publish';
		$data['post']['post_content'] = $accident[5];

		// meta
		$data['meta'] = array();
		$data['meta']['accident_notes'] = $accident[6];
		$data['meta']['accident_link'] = $accident[4];
		$platform = get_page_by_title($accident[3], 'OBJECT', 'platform');
		if($platform)
			$data['meta']['platform_id'] = $platform->ID;

		// tax
		$data['tax'] = array();
		$data['tax']['accident-type'] = $accident[1];
		$posts[] = $data;
	}
	latavelha_importer($posts);
}

function latavelha_accident_importer_init() {
	if(isset($_REQUEST['import_accidents'])) {
		latavelha_accident_importer();
		exit;
	}
}
add_action('init', 'latavelha_accident_importer_init');
?>