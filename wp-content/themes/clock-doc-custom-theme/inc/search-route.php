<?php

function clockdocRegisterSearch() {
    register_rest_route('clockdoc/v1', 'search', array(
        'methods' => WP_REST_SERVER::READABLE, 
        'callback' => 'clockdocSearchResults'
    ));
}

add_action('rest_api_init', 'clockdocRegisterSearch');

function clockdocSearchResults($data) {
    $mainQuery = new WP_Query(array(
        'post_type' => array('post', 'page', 'clocks', 'watches', 'misc_items'),
        's' => sanitize_text_field($data['term'])
    ));

    $results = array(
        'generalInfo' => array(), 
        'clocks' => array(),
        'watches' => array(),
        'misc_items' => array()
    );

    while($mainQuery->have_posts()) {
        $mainQuery->the_post();
        if(get_post_type() == 'post' OR get_post_type() == 'page') {
            array_push($results['generalInfo'], array(
                'title' => get_the_title(),
                'permalink' => get_the_permalink(),
                'postType' => get_post_type(),
                'authorName' => get_the_author()
            ));
        }
        if(get_post_type() == 'clocks') {
            array_push($results['clocks'], array(
                'title' => get_the_title(),
                'permalink' => get_the_permalink(),
                'authorName' => get_the_author()
            ));
        }
        if(get_post_type() == 'watches') {
            array_push($results['watches'], array(
                'title' => get_the_title(),
                'permalink' => get_the_permalink()
            ));
        }   
        if(get_post_type() == 'misc_items') {
            array_push($results['misc_items'], array(
                'title' => get_the_title(),
                'permalink' => get_the_permalink()
            ));
        }
    }
    return $results;
}

