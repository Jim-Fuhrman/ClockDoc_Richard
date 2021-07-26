<?php
function pageBanner($args = NULL) {
  if (!isset($args['title'])) {
    $args['title'] = get_the_title();
  }

  if (!isset($args['subtitle'])) {
    $args['subtitle'] = get_field('page_banner_subtitle');
  }

  if (!isset($args['photo'])) {
    if (get_field('page_banner_background_image')) {
      $args['photo'] = get_field('page_banner_background_image')['sizes']['pageBanner'];
    } else {
      $args['photo'] = get_theme_file_uri('/images/unsplash-Sunrise.jpg');
    }
  }
  ?>
    <div class="postpage-banner">
      <div class="postpage-banner__bg-image" style="background-image: url(<?php echo get_field('page_banner_background_image')['sizes']['pageBanner']; ?>);"></div>
      <div class="postpage-banner__content container container--narrow">
        <h1 class="postpage-banner__title"><?php echo get_the_title();?></h1>
        <div class="postpage-banner__intro">
          <p><?php echo get_field('page_banner_subtitle'); ?></p>
        </div>
      </div>
    </div>
   <?php }

function load_clockdoc_files() {
  wp_enqueue_style('main-clockdoc-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
  wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('clockdoc_main_styles', get_theme_file_uri('/build/style-index.css'));
  }

add_action('wp_enqueue_scripts', 'load_clockdoc_files'); /* Careful! Don't put parentheses around the function name in this line. We want it to run when wp_enqueue_style occurs.*/

function clockdoc_features() {
    register_nav_menu('headerMenuLocation', 'Clocks');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('clockStylePortrait', 480, 650, true);
    add_image_size('clockStyleLandscape', 400, 260, true);    
    add_image_size('pageBanner', 1500, 350, true);
    //add_image_size('homepage-slideshow', 1900, 525, array('left', 'top'));
  }
  
  add_action('after_setup_theme', 'clockdoc_features');
  
  // if (strstr($_SERVER['SERVER_NAME'], 'dev')) {
  //     wp_enqueue_script('main-university-js', './bundled.js', NULL, '1.0', true);
  //   } else {
  //     wp_enqueue_script('our-vendors-js', get_theme_file_uri('/bundled-assets/vendors~scripts.1e7bf5b86d0fb2b2de53.js'), NULL, '1.0', true);
  //     wp_enqueue_script('main-university-js', get_theme_file_uri('/bundled-assets/scripts.60b2165d177427643e3f.js'), NULL, '1.0', true);
  //     wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.60b2165d177427643e3f.css'));
  //   }