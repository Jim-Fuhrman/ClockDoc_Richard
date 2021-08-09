
<?php 
    get_header();
    pageBanner();
?>
    <div class="wrapper">
        <h1><?php the_title();?></h1>
        <p><?php the_post_thumbnail(); the_content();?></p>
    </div>
<?php
    get_footer();
?>