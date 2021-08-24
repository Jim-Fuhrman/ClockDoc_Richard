<?php
get_header();
$miscStyles = new WP_Query(array(
    'post_type' => 'misc_items'
));
pageBanner(array(
    'title' => 'All Miscellaneous Items',
    'subtitle' => 'Pictured below are ' . $miscStyles->found_posts . ' different miscellaneous items'
));
get_template_part("template-parts/content", "archiveCode");
get_template_part('template-parts/content', 'contactInfo');
get_footer();