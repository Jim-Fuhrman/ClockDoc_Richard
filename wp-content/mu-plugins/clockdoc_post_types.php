<?php

function register_clockdoc_post_types() {
    register_post_type('clocks', array(
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'show_in_rest' => true, 
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Clock Styles',
            'add_new_item' => 'Add New Clock Style', 
            'edit_item' => 'Edit Clock Style',
            'all_items' => 'All Clock Styles',
            'singular_name' => 'Clock Style'
        ),
        'menu_icon' => 'dashicons-clock'
    ));

    register_post_type('watches', array(
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'show_in_rest' => true, 
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Watch Styles',
            'add_new_item' => 'Add New Watch Style', 
            'edit_item' => 'Edit Watch Style',
            'all_items' => 'All Watch Styles',
            'singular_name' => 'Watch Style'
        ),
        'menu_icon' => 'dashicons-backup'
    ));

    register_post_type('misc_items', array(
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'show_in_rest' => true, 
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Misc Items',
            'add_new_item' => 'Add New Misc Item', 
            'edit_item' => 'Edit Misc Item',
            'all_items' => 'All Misc Items',
            'singular_name' => 'Misc Item'
        ),
        'menu_icon' => 'dashicons-bank'
    ));
}

add_action('init', 'register_clockdoc_post_types');