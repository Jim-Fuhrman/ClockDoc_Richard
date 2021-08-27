<?php

function load_clockdoc_files() {
    wp_enqueue_script('main-clockdoc-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('clockdoc_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('clockdoc_extra_styles', get_theme_file_uri('/build/index.css'));
    wp_localize_script('main-clockdoc-js', 'clockdoctorData', array(
      'root_url' => get_site_url()
    ));  
  }
/* Careful! Don't put parentheses around the function name in the next line. 
We want it to run when wp_enqueue_style occurs.*/
  add_action('wp_enqueue_scripts', 'load_clockdoc_files');   