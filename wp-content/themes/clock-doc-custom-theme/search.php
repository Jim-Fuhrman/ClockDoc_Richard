<?php
/* search.php displays all search results. If it's missing, the index.php will display all search results. */
    get_header();
    pageBanner(array(
        'title' => 'Search Results',
        'subtitle' => 'You searched for &ldquo;' . esc_html(get_search_query(false)) . '&rdquo;'
    )); 
    ?>
    
    <div class="container container--narrow page-section">
    <?php
        if( have_posts() ) : 
            while (have_posts() ) : the_post();
                get_template_part('template-parts/content', get_post_type());
            endwhile;
            echo paginate_links();
        else :
            echo '<h2 class="headline headline--small-plus">No results match that search.</h2>';
            get_template_part('template-parts/content', 'none');
        endif;
        get_search_form();
    ?>
    </div>
    
<?php 
get_template_part('template-parts/content', 'contactInfo');
get_footer(); ?>