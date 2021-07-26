<?php
    get_header();
    pageBanner(array(
        'title' => 'Welcome to Our Blogs',
        'subtitle' => 'Here are what our customers have posted',
        'background_image' => get_theme_file_uri('/images/Bouc_Grandfather_ClockFace.jpg')
    )); 
    ?>
    

    <div class="container container--narrow page-section">
    <?php
        if( have_posts() ) : 
            while (have_posts() ) : the_post();
                get_template_part('template-parts/content', 'post');
            endwhile;
        else :
            get_template_part('template-parts/content', 'none');
        endif;
        /*echo paginate_links(); */
    ?>
    </div>
<?php 
get_template_part('template-parts/content', 'contactInfo');
get_template_part('template-parts/content', 'upArrow');
get_footer(); ?>