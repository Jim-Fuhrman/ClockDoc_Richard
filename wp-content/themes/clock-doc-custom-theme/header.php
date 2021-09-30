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
<!-- nav bar for small screens -->
    <nav class="site-header__mobile-menu">
            <div class="site-header__mobile-menu--headings">
                <h2 class="no-margin t-cursive"><?php echo bloginfo('name'); ?></h2>
                <h2 class="no-margin t-cursive t-center"><?php echo bloginfo('description'); ?></h2>
            </div>
            <div class="site-header__mobile-menu--icons">
                <div class="site-header__mobile-menu--icons--hamburger">
                    <div class="site-header__mobile-menu--icons--hamburger--middle"></div>
                </div> <!-- search-trigger defined in shame.scss -->
                <a class="site-header__mobile-menu--icons--search search-trigger js-search-trigger" href="<?php echo esc_url(site_url('/search')); ?>"><i class="fa fa-search" aria-hidden="true"></i></a>
            </div>
            <!-- <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i> -->
      </nav>
    <!-- Important! site-header__mobile-menu needs to be outside the site-header for larger screens. You'll have problems mixing them under the same header. The hamburger icon won't work 100% if you mix them. -->
      <header class="site-header" role="banner">
          <!-- nav bar for large screens -->
        <div class="site-header__menu">
            <nav class="site-header__nav">   
                <div class="site-header__nav-icon" style="background-image: url(<?php echo get_theme_file_uri('/images/ClockDocIcon.png');?>">
                </div>   
                <ul class="site-header__nav-menu site-header__menu-content">
                    <?php get_template_part("template-parts/content", "siteHeaderMenu"); ?>
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
            </nav>
          </div>
      </header>