<?php
get_header();
$clockStyles = new WP_Query(array(
    'post_type' => 'clocks'
));
pageBanner(array(
    'title' => 'All Clocks',
    'subtitle' => 'Pictured below are ' . $clockStyles->found_posts . ' different clock styles'
));
?>

<div class="container container--narrow page-section">
    <ul class="products-list">
<?php
    $pgmCount = 1;
    while (have_posts() ) {
        the_post();?>
        <li><?php if($pgmCount % 2 === 0) {  /* if pgmCount is an even number, in other words. */
            get_template_part('template-parts/content', 'thumbnail-right');
        } else {
            get_template_part('template-parts/content', 'thumbnail-left');
        }
        $pgmCount++;
        ?>
        </li>
<?php
    }
    wp_reset_postdata();
?>
    </ul>
</div>
<?php 
get_template_part('template-parts/content', 'contactInfo');
get_footer();?>