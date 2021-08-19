<?php get_header();
/* This produces the page called Search along with the default Search form. */ 
while(have_posts()) {
    the_post();
    pageBanner();
   ?>
   <!-- I don't want container--narrow in the next div because it makes everything on the About Us page too scrunched together on the largest desktops. -->
    <div class="container container--narrow page-section">
    <?php
      $theParent = wp_get_post_parent_id(get_the_ID());
      if ($theParent) { ?>
        <div class="metabox metabox--position-up metabox--with-home-link">
            <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent); ?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
        </div>
      <?php }
    ?>
 
    <?php
        $testArray = get_pages(array(
            'child_of' => get_the_ID()
        ));
        if($theParent or $testArray) { ?>
            <div class="page-links">
                <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent);?>"><?php echo get_the_title($theParent);?></a></h2>
                <ul class="min-list">
                    <?php
                        if ($theParent) {
                            $findChildrenOf = $theParent;
                        } else {
                            $findChildrenOf = get_the_ID();
                        }

                        wp_list_pages(array(
                            'title_li' => NULL,
                            'child_of' => $findChildrenOf
                        ));
                    ?>
                </ul>
            </div>
            <?php }
            get_search_form(); ?>
        </div>
<?php } 
get_footer(); 
?>