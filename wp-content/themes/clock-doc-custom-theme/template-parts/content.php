<?php
get_header();
/*$bkgdClock = '/shutterstock_Clock_Ancient_clear-1024x591.jpg';*/
/* in fictional-university library-hero.jpg is 1920x796 or 247kb. It loads quickly on my i-phone, so the following 2 choices should be just fine!*/
/*$bkgdClock = '/images/Bouc_Grandfather_ClockFace-1-768x1024.jpg'; /* 228kb*/
$bkgdClock = '/images/Grandfather_Clockface_Thirteen-768x1024.jpg'; /* 185kb */
?>
<!-- topOfWebsite is used by the content-upArrow.php -->
<!-- -->

<header id="topOfWebsite" class="page-banner" style="background-image: url(<?php echo get_theme_file_uri($bkgdClock);?>">  
  <div class="page-banner__text-box">  <!-- text-box is position: absolute; its parent class page-banner is position: relative -->
    <h1 class="page-banner__heading">  <!-- heading is position: undefined-->
        <span class="page-banner__heading--main no-margin t-cursive"><?php echo bloginfo('name'); ?></span>
        <span class="page-banner__heading--sub no-margin t-cursive"><?php echo bloginfo('description'); ?></span>
    </h1>
    <a href="/products"
        class="page-banner__btn page-banner__btn--animated page-banner__btn--brown">
        Click to see our products
     </a>
     <?php if( !empty(get_field('important_notice'))) : ?>
      <div class="page-banner__important-notice page-banner__important-notice--animated t-center t-black b-goldenrod">
        <strong>Notice: &nbsp;</strong><?php the_field('important_notice'); ?>
      </div>
      <?php endif; ?>
  </div>
</header>