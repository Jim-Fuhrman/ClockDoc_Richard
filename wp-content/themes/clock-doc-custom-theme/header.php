<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
    <!-- <link rel="profile" href="http://gmpg.org/xfn/11"> -->
    <?php wp_head(); ?>  <!-- This is needed along with get_stylesheet_uri() in the functions.php file. -->
  </head>
<body <?php body_class(); ?>>
<!-- this is the version that won't show the nav bar -->
<header class="site-header">
    <nav class="site-header__nav">
      <div class="site-header__nav-icon" style="background-image: url(<?php echo get_theme_file_uri('/images/ClockDocIcon.png');?>">
    </div>
      <ul class="site-header__nav-menu site-header__menu-content">
          <li><a href="<?php echo esc_url(site_url('')); ?>">Home</a></li>
          <li><a <?php if (is_page('about-us') or wp_get_post_parent_id(0) == 42) echo 'class="current"'?> href="<?php echo esc_url(site_url('/About Us'));?>">About</a></li>
          <div class="dropdown">
            <li class="dropdown__a"><a  <?php if(get_post_type('clocks') || is_page('Watches') || is_page('Miscellaneous')) echo 'class="current"'?> href="#">Products</a></li>  <!-- If I want Products to look like the other 4 links, it needs to be an anchor tag with an href. -->
              <div class="dropdown__content"> <!-- dropdown__content is in main-navigation.css -->
                <a href="<?php echo get_post_type_archive_link('clocks'); ?>">Clocks</a>
                <a href="<?php echo esc_url(site_url('/Watches'));?>">Watches</a>
                <a href="<?php echo esc_url(site_url('/Miscellaneous'));?>">Miscellaneous</a>
              </div>
          </div>
          <li><a <?php if (get_post_type() == 'post') echo 'class="current"'?> href="<?php echo site_url('/blog'); ?>">Blogs</a></li>
          <li><a <?php if (is_page('contact-us')) echo 'class="current"'?> href="<?php echo esc_url(site_url('/Contact Us'));?>">Contact Us</a></li>
          <li>
              <a href="<?php echo esc_url(site_url('/search')); ?>" class="search-trigger js-search-trigger">
                <i class="fa fa-search" aria-hidden="true"></i>
              </a>
          </li>
          <div class="site-header__util hide">   
          <!-- When the user types the escape key, it toggles the hiding/displaying of the Login button. By default we hide the login button, so customers can't see it -->
              <?php if(is_user_logged_in()) {?>
                    <a href="<?php echo wp_logout_url(); ?>" class="btn btn--small btn--dark-orange float-left btn--with-photo">
                    <span class="site-header__avatar"><?php echo get_avatar(get_current_user_id(), 60); ?></span>
                    <span class="btn__text">Log Out</span>
                    </a>
              <?php } else {?>
                    <a href="<?php echo wp_login_url();?>" class="btn btn--small btn--orange float-left push-right">Login</a>
              <?php } ?>
          </div>
      </ul>
      <div class="site-header__menu-icon">
        <div class="site-header__menu-icon__middle"></div>
      </div>
    </nav>
</header>
    