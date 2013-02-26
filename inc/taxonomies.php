<?php

add_action( 'init', 'register_taxonomy_accident_types' );

function register_taxonomy_accident_types() {

    $labels = array( 
        'name' => _x( 'Accident types', 'latavelha' ),
        'singular_name' => _x( 'Accident type', 'latavelha' ),
        'search_items' => _x( 'Search accident types', 'latavelha' ),
        'popular_items' => _x( 'Popular accident types', 'latavelha' ),
        'all_items' => _x( 'All accident types', 'latavelha' ),
        'parent_item' => _x( 'Parent accident type', 'latavelha' ),
        'parent_item_colon' => _x( 'Parent accident type:', 'latavelha' ),
        'edit_item' => _x( 'Edit accident type', 'latavelha' ),
        'update_item' => _x( 'Update accident type', 'latavelha' ),
        'add_new_item' => _x( 'Add new accident type', 'latavelha' ),
        'new_item_name' => _x( 'New accident type', 'latavelha' ),
        'separate_items_with_commas' => _x( 'Separate accident types with commas', 'latavelha' ),
        'add_or_remove_items' => _x( 'Add or remove accident types', 'latavelha' ),
        'choose_from_most_used' => _x( 'Choose from most used accident types', 'latavelha' ),
        'menu_name' => _x( 'Accident types', 'latavelha' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => true,
        'show_admin_column' => true,
        'hierarchical' => true,

        'rewrite' => true,
        'query_var' => true
    );

    register_taxonomy( 'accident-type', array('accident'), $args );
}