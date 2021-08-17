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
        </div>
    </div>
    <div class="gallery">
    <figure class="gallery__item gallery__item--1"><img src="<?php echo get_theme_file_uri('/images/shutterstock_JimF_Clock_Kitchen-150x150.jpg'); ?>" alt="Gallery img 1" class="gallery__img"></figure>   
        <figure class="gallery__item gallery__item--2"><img src="<?php echo get_theme_file_uri('/images/BoucSelf_Three_Clocks-scaled-1-320x150.jpg'); ?>" alt="Gallery img 2" class="gallery__img"></figure>      
        <figure class="gallery__item gallery__item--3"><img src="<?php echo get_theme_file_uri('/images/shutterstock_JimF_Gold_2020_2021_2022-320x150.jpg'); ?>" alt="Gallery img 3" class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--4"><img src="<?php echo get_theme_file_uri('/images/Bouc_Watch_Time_Temp-150x150.jpg'); ?>" alt="Gallery img 4" class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--5">   
            <img src="<?php echo get_theme_file_uri('/images/BoucSelf_Clock_Maroon_Tamber-320x320.jpeg'); ?>" alt="Gallery img 5" class="gallery__img">
        </figure>
        <figure class="gallery__item gallery__item--6">
            <picture>
                <source srcset="<?php echo get_theme_file_uri('/images/Bouc_Grandfather_ClockFace-150x320.jpg'); ?>" media="(max-width: 33.125em)">
                <img src="<?php echo get_theme_file_uri('/images/BoucSelf_Clock_SixPillars-320x320.jpeg'); ?>" alt="Gallery img 6" class="gallery__img">
            </picture>
        </figure>        
        
        <figure class="gallery__item gallery__item--7">
            <picture>
                <source srcset="<?php echo get_theme_file_uri('/images/BoucSelf_Clock_SixPillars-320x320.jpeg'); ?>" media="(max-width: 33.125em)">
                <img src="<?php echo get_theme_file_uri('/images/Bouc_Grandfather_ClockFace-150x320.jpg'); ?>" alt="Gallery img 7" class="gallery__img">
            </picture>    
        </figure>
        <figure class="gallery__item gallery__item--8"><img src="<?php echo get_theme_file_uri('/images/BoucSelf_Clock_Black_Face_Glass_Cover-150x320.jpeg'); ?>" alt="Gallery img 8" class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--9"><img src="<?php echo get_theme_file_uri('/images/shutterstock_Jimf_Gold_WatchBand_BlackFace-320x150.jpg'); ?>" alt="Gallery img 10" class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--10">
            <source srcset="<?php echo get_theme_file_uri('/images/shutterstock_Clock_Ancient_clear-1024x591-1-490x150.jpg'); ?>" media="(max-width: 33.125em)">
            <img src="<?php echo get_theme_file_uri('/images/shutterstock_Clockwork_Colorful_Jims_Pick-320x150.jpg'); ?>" alt="Gallery img 11" class="gallery__img">
        </figure>
        <figure class="gallery__item gallery__item--11">
            <source srcset="<?php echo get_theme_file_uri('/images/shutterstock_JimF_Watch_Bracelet_Gold_small-150x150.jpg'); ?>" media="(max-width: 33.125em)">
            <img src="<?php echo get_theme_file_uri('/images/shutterstock_JimF_Watch_Bracelet_Gold_small-320x150.jpg'); ?>" alt="Gallery img 12" class="gallery__img">
        </figure>
        <figure class="gallery__item gallery__item--12"><img src="<?php echo get_theme_file_uri('/images/Bouc_Watches_Pocket-150x150.jpg'); ?>" alt="Gallery img 13" class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--13"><img src="<?php echo get_theme_file_uri('/images/shutterstock_JimF_Flat_Watch_SilverBand-320x150.jpg'); ?>" alt="Gallery img 14" class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--14"><img src="<?php echo get_theme_file_uri('/images/shutterstock_Clock_Ancient_clear-1024x591-1-320x150.jpg'); ?>" alt="Gallery img 15" class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--15"><img src="<?php echo get_theme_file_uri('/images/Bouc_Watch_and_picker-150x150.jpg'); ?>" alt="Gallery img 16" class="gallery__img"></figure>
    </div>
    <div class="products-miscellaneous full-width-split__two" style="background-image: url(<?php echo get_theme_file_uri($bkgdMisc);?>">
        <div class="full-width-split__inner white-cover">
        </div>
    </div>
</div>