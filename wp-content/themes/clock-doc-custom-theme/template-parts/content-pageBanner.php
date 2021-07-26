<div class="postpage-banner">
    <div class="postpage-banner__bg-image" style="background-image: url(<?php echo get_field('page_banner_background_image')['sizes']['pageBanner']; ?>);"></div>
    <div class="postpage-banner__content container container--narrow">
      <h1 class="postpage-banner__title"><?php echo get_the_title();?></h1>
      <div class="postpage-banner__intro">
        <p><?php echo get_field('page_banner_subtitle'); ?></p>
      </div>
    </div>
  </div>