<?php

function clockdoc_features() {
    register_nav_menu('headerMenuLocation', 'Clocks');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('clockStylePortrait', 150, 320, true);
    add_image_size('clockStyleLargeSquare', 320, 320, true);
    add_image_size('clockStyleRectangle', 320, 150, true);
    add_image_size('clockStyleLongRectangle', 490, 150, true);    
    add_image_size('pageBanner', 1500, 350, true);
    //add_image_size('homepage-slideshow', 1900, 525, array('left', 'top'));
  }
  
  add_action('after_setup_theme', 'clockdoc_features');