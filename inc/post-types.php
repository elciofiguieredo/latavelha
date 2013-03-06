<?php

/*
REGISTER POST TYPES
*/

// set news archive page

function latavelha_news_archive_rule($wp_rewrite) {
    $news_rule = array('news$' => 'index.php?news=1');

    $wp_rewrite->rules = $news_rule + $wp_rewrite->rules;
}
add_action('generate_rewrite_rules', 'latavelha_news_archive_rule', 1);

function latavelha_news_query_vars($public_query_vars) {
    $public_query_vars[] = 'news';
    return $public_query_vars;
}
add_action('query_vars', 'latavelha_news_query_vars');

function latavelha_news_redirect() {
    global $wp_query;
    if($wp_query->get('news')) {
        include(STYLESHEETPATH . '/news.php');
        exit;
    }
}
add_action('template_redirect', 'latavelha_news_redirect');

function latavelha_get_news_archive_link() {
    return home_url('/news/');
}

add_action('init', 'register_cpt_platform');

function register_cpt_platform() {
    $labels = array( 
        'name' => __('Platforms', 'latavelha'),
        'singular_name' => __('Platform', 'latavelha'),
        'add_new' => __('Add new platform', 'latavelha'),
        'add_new_item' => __('Add new platform', 'latavelha'),
        'edit_item' => __('Edit platform', 'latavelha'),
        'new_item' => __('New platform', 'latavelha'),
        'view_item' => __('View platform'),
        'search_items' => __('Search platforms', 'latavelha'),
        'not_found' => __('No platform found', 'latavelha'),
        'not_found_in_trash' => __('No platform found in the trash', 'latavelha'),
        'menu_name' => __('Platforms', 'latavelha')
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => __('Platforms', 'latavelha'),
        'supports' => array( 'title', 'editor', 'excerpt'),

        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 4,

        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => 'platforms',
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array('slug' => 'platforms', 'with_front' => false),
        'capability_type' => 'post'
    );

    register_post_type( 'platform', $args );
}

//add_action('init', 'register_cpt_oilwell');

function register_cpt_oilwell() {
    $labels = array( 
        'name' => __('Oil wells', 'latavelha'),
        'singular_name' => __('Oil well', 'latavelha'),
        'add_new' => __('Add new oil well', 'latavelha'),
        'add_new_item' => __('Add new oil well', 'latavelha'),
        'edit_item' => __('Edit oil well', 'latavelha'),
        'new_item' => __('New oil well', 'latavelha'),
        'view_item' => __('View oil well'),
        'search_items' => __('Search oil wells', 'latavelha'),
        'not_found' => __('No oil well found', 'latavelha'),
        'not_found_in_trash' => __('No oil well found in the trash', 'latavelha'),
        'menu_name' => __('Oil wells', 'latavelha')
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => __('Oil wells', 'latavelha'),
        'supports' => array( 'title', 'editor', 'excerpt'),

        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 4,

        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => 'wells',
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array('slug' => 'wells', 'with_front' => false),
        'capability_type' => 'post'
    );

    register_post_type( 'oil-well', $args );
}

add_action('init', 'register_cpt_accident');

function register_cpt_accident() {
    $labels = array( 
        'name' => __('Accidents', 'latavelha'),
        'singular_name' => __('Accident', 'latavelha'),
        'add_new' => __('Report new accident', 'latavelha'),
        'add_new_item' => __('Report new accident', 'latavelha'),
        'edit_item' => __('Edit accident report', 'latavelha'),
        'new_item' => __('Reporting accident', 'latavelha'),
        'view_item' => __('View accident'),
        'search_items' => __('Search accidents', 'latavelha'),
        'not_found' => __('No accident found', 'latavelha'),
        'not_found_in_trash' => __('No accident found in the trash', 'latavelha'),
        'menu_name' => __('Accidents', 'latavelha')
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => __('Accidents', 'latavelha'),
        'supports' => array( 'title', 'editor', 'excerpt'),

        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 4,

        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => 'accidents',
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array('slug' => 'accidents', 'with_front' => false),
        'capability_type' => 'post'
    );

    register_post_type( 'accident', $args );
}