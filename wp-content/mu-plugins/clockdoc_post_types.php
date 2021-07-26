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
}

add_action('init', 'register_clockdoc_post_types');