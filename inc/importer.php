<?php

function get2DArrayFromCsv($file,$delimiter) { 
	if (($handle = fopen($file, "r")) !== FALSE) { 
		$i = 0; 
		while (($lineArray = fgetcsv($handle, 4000, $delimiter)) !== FALSE) { 
			if($i !== 0) {
				for ($j=0; $j<count($lineArray); $j++) { 
					$data2DArray[$i][$j] = $lineArray[$j]; 
				} 
			}
			$i++; 
		} 
		fclose($handle); 
	} 
	return $data2DArray; 
}

function latavelha_importer($posts) {
	foreach($posts as $data) {
		$post_id = wp_insert_post($data['post']);
		if($post_id) {
			// meta
			foreach($data['meta'] as $key => $value) {
				if($value) {
					update_post_meta($post_id, $key, $value);
				}
			}
			// tax
			foreach($data['tax'] as $tax => $term_name) {
				if($term_name) {
					//$term = get_term_by('name', $term_name, $tax, ARRAY_A);
					//if(!$term) $term = wp_insert_term($term_name, $tax);
					//print_r($term);
					//$term_id = intval($term['term_id']);
					// set term
					wp_set_object_terms($post_id, $term_name, $tax);
				}
			}
		}
	}
}