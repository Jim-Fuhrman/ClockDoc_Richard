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
<div class="group">
    <div id="products" class="products-background">    
        <div class="group full-width-split">
            <div class="products-clocks full-width-split__one" style="background-image: url(<?php echo get_theme_file_uri($bkgdClock);?>">
                <div class="full-width-split__inner white-cover"></div>
            </div>
            <div class="products-miscellaneous full-width-split__two" style="background-image: url(<?php echo get_theme_file_uri($bkgdMisc);?>">
                <div class="full-width-split__inner white-cover"></div>
            </div>
        </div>
        <div class="products-foreground">
            <h1 class="t-maroon t-cursive t-bold t-center">We sell clocks, watches and miscellaneous items</h1>
            <h1 class="t-maroon t-cursive t-bold t-center">Not all items pictured may be in stock</h1>    
            <?php get_template_part("template-parts/content", "products-gallery");?>
        </div>
    </div>
</div>