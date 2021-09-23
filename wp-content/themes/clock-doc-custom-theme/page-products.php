<?php get_header(); 
while(have_posts()) {
    the_post();
    pageBanner();
    
    $bkgdClock = '/images/shutterstock_JimF_Antique_Bottom_Up.jpg';
    $bkgdMisc = '/images/shutterstock_JimF_Watch_Silver_Band.jpg';
?>

<div class="group">
    <div class="products-background">
        <div class="group full-width-split">
            <div class="products-clocks full-width-split__one" style="background-image: url(<?php echo get_theme_file_uri($bkgdClock);?>">
                <div class="full-width-split__inner white-cover"></div>
            </div>
            <div class="products-miscellaneous full-width-split__two" style="background-image: url(<?php echo get_theme_file_uri($bkgdMisc);?>">
                <div class="full-width-split__inner white-cover"></div>
            </div>
        </div>
        <div class="container container--narrow products-heading-and-gallery">
            <h1 class="t-maroon t-cursive t-bold t-center">Not all items pictured may be in stock</h1>    
            <?php get_template_part("template-parts/content", "products-gallery");?>
        </div>
    </div>
</div>
<?php } /* the closing bracket of "the Wordpress while loop" which starts at the top of the code above. */
get_template_part('template-parts/content', 'contactInfo');
get_footer(); 
?>