<?php
function pageBanner($args = NULL) {
    if (!$args['title']) {
      $args['title'] = get_the_title();
    }
    
    if (!$args['subtitle']) {
      $args['subtitle'] = get_field('page_banner_subtitle');
    }
    
    if (!$args['photo']) {
      if (get_field('page_banner_background_image')) {
        $args['photo'] = get_field('page_banner_background_image')['sizes']['pageBanner'];
      } else {
        $args['photo'] = get_theme_file_uri('/images/shutterstock_Clock_Ancient.jpg');
      }
    }
    ?>
      <div class="postpage-banner">
        <div class="postpage-banner__bg-image" style="background-image: url(<?php echo $args['photo'];?>);"></div>
        <div class="container container--narrow">
          <h1 class="postpage-banner__title"><?php echo $args['title'];?></h1>
          <div class="postpage-banner__intro">
            <p><?php echo $args['subtitle']; ?></p>
          </div>
        </div>
      </div>
<?php }