<!-- This is the previous version of ClockDoc-CortlandNE's content-products.php file. -->
<?php 
    $bkgdClock = '/images/shutterstock_JimF_Antique_Bottom_Up.jpg';
    $clocks = new WP_Query(array(
      'post_type' => 'clocks',
      'posts_per_page' => 5
));  
    $bkgdMisc = '/images/shutterstock_JimF_Watch_Silver_Band.jpg';
    $misc = new WP_Query(array(
        'post_type' => 'misc',
        'posts_per_page' => 5
    ));
?>
                                                                   
    <!-- <h2>Hello from content-products.php</h2> -->
<div id="products" class="products-bkgd full-width-split group">
    <div class="products-clocks full-width-split__one" style="background-image: url(<?php echo get_theme_file_uri($bkgdClock);?>">
        <div class="full-width-split__inner white-cover">
            <h2><?php echo 'There are ' . $clocks->found_posts . ' clock styles in the clock doctor website.';?></h2>
        </div>
    </div>
    <div class="products-foreground">
        <figure class="gallery__item gallery--1"><img src="<?php echo get_theme_file_uri('/images/Bouc_Watch_Time_Temp-150x150.jpg'); ?>" alt="Gallery image 1" class="gallery__img"></figure>
        <figure class="gallery__item gallery--2"><img src="<?php echo get_theme_file_uri('/images/unsplash-figurine-small-150x150.jpg'); ?>" alt="Gallery image 2" class="gallery__img"></figure>
        <figure class="gallery__item gallery--3"><img src="<?php echo get_theme_file_uri('/images/shutterstock_JimF_Clock_Kitchen-150x150.jpg'); ?>" alt="Gallery image 3" class="gallery__img"></figure>
        <figure class="gallery__item gallery--4"><img src="<?php echo get_theme_file_uri('/images/Bouc_Watches_Pocket-150x150.jpg'); ?>" alt="Gallery image 4" class="gallery__img"></figure>
        <figure class="gallery__item gallery--5"><img src="<?php echo get_theme_file_uri('/images/unsplash-angel-small-150x150.jpg'); ?>" alt="Gallery image 5" class="gallery__img"></figure>
        <figure class="gallery__item gallery--6"><img src="<?php echo get_theme_file_uri('/images/shutterstock_JimF_Gold_2020_2021_2022-small-150x150.jpg'); ?>" alt="Gallery image 6" class="gallery__img"></figure>
        <figure class="gallery__item gallery--7"><img src="<?php echo get_theme_file_uri('/images/BoucSelf_Small_GoldRim_Clock-150x150.jpg'); ?>" alt="Gallery image 7" class="gallery__img"></figure>
        <figure class="gallery__item gallery--8"><img src="<?php echo get_theme_file_uri('/images/BoucSelf_Grandfather_Wall_Clock-150x150.jpg'); ?>" alt="Gallery image 8" class="gallery__img"></figure>
        <figure class="gallery__item gallery--9"><img src="<?php echo get_theme_file_uri('/images/BoucSelf_Grandfather_Clock-150x150.jpg'); ?>" alt="Gallery image 9" class="gallery__img"></figure>
        <figure class="gallery__item gallery--10"><img src="<?php echo get_theme_file_uri('/images/BoucSelf_Three_Clocks-150x150.jpg'); ?>" alt="Gallery image 10" class="gallery__img"></figure>
        <figure class="gallery__item gallery--11"><img src="<?php echo get_theme_file_uri('/images/BoucSelf_Banjo_Clock-150x150.jpg'); ?>" alt="Gallery image 11" class="gallery__img"></figure>
        <figure class="gallery__item gallery--12"><img src="<?php echo get_theme_file_uri('/images/BoucSelf_HourGlass_Clock-150x150.jpg'); ?>" alt="Gallery image 12" class="gallery__img"></figure>
    </div>
    <div class="products-miscellaneous full-width-split__two" style="background-image: url(<?php echo get_theme_file_uri($bkgdMisc);?>">
        <div class="full-width-split__inner white-cover">
            <h2><?php echo 'There are ' . $misc->found_posts . ' miscellaneous styles in the website';?></h2>
        </div>
    </div>
</div>