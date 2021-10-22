<?php
get_header();
$clockStyles = new WP_Query(array(
    'post_type' => 'clocks'
));
pageBanner(array(
    'title' => 'All Clocks',
    'subtitle' => 'Pictured below are ' . $clockStyles->found_posts . ' clock styles'
));
get_template_part("template-parts/content", "archiveCode");
get_template_part('template-parts/content', 'contactInfo');
get_footer();