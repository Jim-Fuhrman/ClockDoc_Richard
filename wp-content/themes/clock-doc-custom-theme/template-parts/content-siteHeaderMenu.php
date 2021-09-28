<li><a href="<?php echo esc_url(site_url('')); ?>">Home</a></li>
<li><a <?php if (is_page('about-us') or wp_get_post_parent_id(0) == 42) echo 'class="current"'?> href="<?php echo esc_url(site_url('/About Us'));?>">About</a></li>
<div class="dropdown">
<li class="dropdown__a"><a <?php if(is_page('products') || get_post_type('clocks') || get_post_type('watches') || get_post_type('misc_items')) echo 'class="current"'?> 
href="#">Products</a></li>  <!-- If I want Products to look like the other 4 links, it needs to be an anchor tag with an href. -->
    <div class="dropdown__content"> <!-- dropdown__content is in /layout/_site-header.scss -->
    <a href="<?php echo esc_url(site_url('/Products')); ?>">All Products</a>  
    <a href="<?php echo get_post_type_archive_link('clocks'); ?>">Clocks</a>
    <a href="<?php echo get_post_type_archive_link('watches');?>">Watches</a>
    <a href="<?php echo get_post_type_archive_link('misc_items');?>">Miscellaneous</a>
    </div>
</div>
<li><a <?php if (get_post_type() == 'post') echo 'class="current"'?> href="<?php echo site_url('/blog'); ?>">Blogs</a></li>
<li><a <?php if (is_page('contact-us')) echo 'class="current"'?> href="<?php echo esc_url(site_url('/Contact Us'));?>">Contact Us</a></li>
<li>
    <a href="<?php echo esc_url(site_url('/search')); ?>" class="search-trigger js-search-trigger">
    <i class="fa fa-search" aria-hidden="true"></i>
    </a>
</li>