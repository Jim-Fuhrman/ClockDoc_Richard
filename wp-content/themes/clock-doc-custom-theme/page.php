<?php get_header(); 
while(have_posts()) {
    the_post();
    pageBanner();
   ?>
    <div class="container container--narrow page-section">
        <?php get_template_part("template-parts/content", "metalinks");?>
        <p><?php the_content(); ?></p>
    </div>
<?php }
get_template_part('template-parts/content', 'contactInfo');
get_footer(); 
?>