<?php get_header(); 
    pageBanner();  /* The pageBanner function doesn't work.*/
    get_template_part('template-parts/content', 'pageBanner');
?>

<div class="container container--narrow page-section">
    <div class="metabox metabox--with-home-link">
        <p><a class="metabox__blog-home-link" href="<?php echo site_url('/blog');?>"><i class="fa fa-home" aria-hidden="true"></i>&nbsp; Blog Home &nbsp;</a> <span class="metabox__main">Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(', '); ?></span></p>
    </div>
    <div class="generic-content">
        <?php the_post_thumbnail(); ?>
        <?php the_content(); ?>
    </div>
</div>
<?php 
get_template_part('template-parts/content', 'contactInfo');
get_template_part('template-parts/content', 'upArrow');
get_footer(); ?>