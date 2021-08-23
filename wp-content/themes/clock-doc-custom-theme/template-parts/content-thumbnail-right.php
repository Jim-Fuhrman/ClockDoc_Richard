<div class="container container--narrow page-section">
    <div class="row group">
        <div class="two-thirds">
            <!-- We only want to see the title if archive-clocks.php is in control. 
            If single-clock.php is in control, title is already in the page banner. -->
            <?php if(!is_single()) {?>
                <div class="t-center t-bold t-underline">
                    <?php the_title(); ?>
                </div>
                <br>
            <?php } ?>
            <div class="t-left t-normal">
                <?php the_content(); ?>
            </div>
        </div>
        <div class="one-third">
            <?php the_post_thumbnail();?>
        </div>
    </div>
</div>