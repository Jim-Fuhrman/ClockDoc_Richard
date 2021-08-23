<?php 
/* when we open a single clock style custom post, this file displays it. */
    get_header();
    pageBanner();
    get_template_part("template-parts/content", "thumbnail-left");
    get_template_part("template-parts/content", "contactInfo");
    get_footer();