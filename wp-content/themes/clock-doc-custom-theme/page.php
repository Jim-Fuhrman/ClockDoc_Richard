<?php get_header();
$bkgdImage = '/images/shutterstock_JimF_Flat_Watch_SilverBand.jpg'; 
while(have_posts()) {
    the_post();
    pageBanner();
   ?>
   <div class="page-section__bkgd-image" style="background-image: url(<?php echo get_theme_file_uri($bkgdImage);?>">
        <div class="container container--narrow page-section">
            <?php get_template_part("template-parts/content", "metalinks");?>
            <p><?php the_content(); ?></p>
        </div>
    </div>
<?php }
get_template_part('template-parts/content', 'contactInfo');
get_footer(); 
?>