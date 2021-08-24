<?php
get_header();
$watchStyles = new WP_Query(array(
    'post_type' => 'watches'
));
pageBanner(array(
    'title' => 'All watches',
    'subtitle' => 'Pictured below are ' . $watchStyles->found_posts . ' different watch styles'
));
get_template_part("template-parts/content", "archiveCode"); 
get_template_part('template-parts/content', 'contactInfo');
get_footer();