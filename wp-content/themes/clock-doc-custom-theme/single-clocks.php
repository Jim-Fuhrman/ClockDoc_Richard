
<?php 
    get_header();
    pageBanner();
?>
    <div class="container container--narrow page-section">
        <div class="row group">
            <div class="one-third">
                <?php the_post_thumbnail();?>
            </div>
            <div class="two-thirds">
                <?php the_content();?>
            </div>
        </div>
    </div>
<?php
    get_template_part("template-parts/content", "contactInfo");
    get_footer();
?>