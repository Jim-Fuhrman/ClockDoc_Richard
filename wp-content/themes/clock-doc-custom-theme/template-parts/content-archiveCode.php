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