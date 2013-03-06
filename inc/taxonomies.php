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
        'menu_name' => _x( 'Types', 'latavelha' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => true,
        'show_admin_column' => true,
        'hierarchical' => true,

        'rewrite' => array('slug' => 'accidents/type', 'with_front' => false),
        'query_var' => true
    );

    register_taxonomy( 'accident-type', array('accident'), $args );
}

add_action( 'init', 'register_taxonomy_platform_owner' );

function register_taxonomy_platform_owner() {

    $labels = array( 
        'name' => _x( 'Platform owners', 'latavelha' ),
        'singular_name' => _x( 'Platform owner', 'latavelha' ),
        'search_items' => _x( 'Search platform owners', 'latavelha' ),
        'popular_items' => _x( 'Popular accident types', 'latavelha' ),
        'all_items' => _x( 'All platform owners', 'latavelha' ),
        'parent_item' => _x( 'Parent platform owner', 'latavelha' ),
        'parent_item_colon' => _x( 'Parent platform owner:', 'latavelha' ),
        'edit_item' => _x( 'Edit platform owner', 'latavelha' ),
        'update_item' => _x( 'Update platform owner', 'latavelha' ),
        'add_new_item' => _x( 'Add new platform owner', 'latavelha' ),
        'new_item_name' => _x( 'New platform owner', 'latavelha' ),
        'separate_items_with_commas' => _x( 'Separate platform owners with commas', 'latavelha' ),
        'add_or_remove_items' => _x( 'Add or remove platform owners', 'latavelha' ),
        'choose_from_most_used' => _x( 'Choose from most used platform owners', 'latavelha' ),
        'menu_name' => _x( 'Owners', 'latavelha' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => true,
        'show_admin_column' => true,
        'hierarchical' => true,

        'rewrite' => array('slug' => 'platforms/owner', 'with_front' => false),
        'query_var' => true
    );

    register_taxonomy( 'platform-owner', array('platform'), $args );
}

add_action( 'init', 'register_taxonomy_platform_operator' );

function register_taxonomy_platform_operator() {

    $labels = array( 
        'name' => _x( 'Platform operators', 'latavelha' ),
        'singular_name' => _x( 'Platform operator', 'latavelha' ),
        'search_items' => _x( 'Search platform operators', 'latavelha' ),
        'popular_items' => _x( 'Popular accident types', 'latavelha' ),
        'all_items' => _x( 'All platform operators', 'latavelha' ),
        'parent_item' => _x( 'Parent platform operator', 'latavelha' ),
        'parent_item_colon' => _x( 'Parent platform operator:', 'latavelha' ),
        'edit_item' => _x( 'Edit platform operator', 'latavelha' ),
        'update_item' => _x( 'Update platform operator', 'latavelha' ),
        'add_new_item' => _x( 'Add new platform operator', 'latavelha' ),
        'new_item_name' => _x( 'New platform operator', 'latavelha' ),
        'separate_items_with_commas' => _x( 'Separate platform operators with commas', 'latavelha' ),
        'add_or_remove_items' => _x( 'Add or remove platform operators', 'latavelha' ),
        'choose_from_most_used' => _x( 'Choose from most used platform operators', 'latavelha' ),
        'menu_name' => _x( 'Operators', 'latavelha' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => true,
        'show_admin_column' => true,
        'hierarchical' => true,

        'rewrite' => array('slug' => 'platforms/operator', 'with_front' => false),
        'query_var' => true
    );

    register_taxonomy( 'platform-operator', array('platform'), $args );
}

add_action( 'init', 'register_taxonomy_platform_flag' );

function register_taxonomy_platform_flag() {

    $labels = array( 
        'name' => _x( 'Platform flags', 'latavelha' ),
        'singular_name' => _x( 'Platform flag', 'latavelha' ),
        'search_items' => _x( 'Search platform flags', 'latavelha' ),
        'popular_items' => _x( 'Popular accident types', 'latavelha' ),
        'all_items' => _x( 'All platform flags', 'latavelha' ),
        'parent_item' => _x( 'Parent platform flag', 'latavelha' ),
        'parent_item_colon' => _x( 'Parent platform flag:', 'latavelha' ),
        'edit_item' => _x( 'Edit platform flag', 'latavelha' ),
        'update_item' => _x( 'Update platform flag', 'latavelha' ),
        'add_new_item' => _x( 'Add new platform flag', 'latavelha' ),
        'new_item_name' => _x( 'New platform flag', 'latavelha' ),
        'separate_items_with_commas' => _x( 'Separate platform flags with commas', 'latavelha' ),
        'add_or_remove_items' => _x( 'Add or remove platform flags', 'latavelha' ),
        'choose_from_most_used' => _x( 'Choose from most used platform flags', 'latavelha' ),
        'menu_name' => _x( 'Flags', 'latavelha' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => true,
        'show_admin_column' => true,
        'hierarchical' => true,

        'rewrite' => array('slug' => 'platforms/flag', 'with_front' => false),
        'query_var' => true
    );

    register_taxonomy( 'platform-flag', array('platform'), $args );
}

add_action( 'init', 'register_taxonomy_platform_type' );

function register_taxonomy_platform_type() {

    $labels = array( 
        'name' => _x( 'Platform types', 'latavelha' ),
        'singular_name' => _x( 'Platform type', 'latavelha' ),
        'search_items' => _x( 'Search platform types', 'latavelha' ),
        'popular_items' => _x( 'Popular accident types', 'latavelha' ),
        'all_items' => _x( 'All platform types', 'latavelha' ),
        'parent_item' => _x( 'Parent platform type', 'latavelha' ),
        'parent_item_colon' => _x( 'Parent platform type:', 'latavelha' ),
        'edit_item' => _x( 'Edit platform type', 'latavelha' ),
        'update_item' => _x( 'Update platform type', 'latavelha' ),
        'add_new_item' => _x( 'Add new platform type', 'latavelha' ),
        'new_item_name' => _x( 'New platform type', 'latavelha' ),
        'separate_items_with_commas' => _x( 'Separate platform types with commas', 'latavelha' ),
        'add_or_remove_items' => _x( 'Add or remove platform types', 'latavelha' ),
        'choose_from_most_used' => _x( 'Choose from most used platform types', 'latavelha' ),
        'menu_name' => _x( 'Types', 'latavelha' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => true,
        'show_admin_column' => true,
        'hierarchical' => true,

        'rewrite' => array('slug' => 'platforms/type', 'with_front' => false),
        'query_var' => true
    );

    register_taxonomy( 'platform-type', array('platform'), $args );
}