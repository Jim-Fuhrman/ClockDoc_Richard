<div class="container container--narrow page-section">
    <div class="row group">
        <div class="one-third">
            <?php the_post_thumbnail();?>
        </div>
        <div class="two-thirds">
            <?php if(!is_single()) {?>
                <div class="t-center t-bold t-underline">
                    <?php the_title(); ?>
                </div>
                <br>
            <?php } ?>
            <div class="t-left t-normal">
                <?php the_content(); 
                    if (has_excerpt()) {
                        the_excerpt(); 
                    }
                ?>
            </div>
        </div>
    </div>
</div>