 
        <div class="site-header__nav-icon" style="background-image: url(<?php echo get_theme_file_uri('/images/ClockDocIcon.png');?>">
        </div>   
        <ul class="site-header__nav-menu site-header__menu-content">
            <li><a href="<?php echo esc_url(site_url('')); ?>">Home</a></li>
            <li><a <?php if (is_page('about-us') or wp_get_post_parent_id(0) == 42) echo 'class="current"'?> href="<?php echo esc_url(site_url('/About Us'));?>">About</a></li>
            <div class="dropdown">
            <li class="dropdown__a"><a  <?php if(is_page('products') || get_post_type('clocks') || get_post_type('watches') || get_post_type('misc_items')) echo 'class="current"'?> href="#">Products</a></li>  <!-- If I want Products to look like the other 4 links, it needs to be an anchor tag with an href. -->
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
            <div class="site-header__util hide">   
            <!-- When the user types the escape key, it toggles the hiding/displaying of the Login button. By default we hide the login button, so customers can't see it -->
                <?php if(is_user_logged_in()) {?>
                    <a href="<?php echo wp_logout_url(); ?>" class="btn btn--small btn--dark-orange float-left btn--with-photo">
                    <span class="site-header__avatar"><?php echo get_avatar(get_current_user_id(), 60); ?></span>
                    <span class="btn__text">Log Out</span>
                    </a>
                <?php } else {?>
                    <a href="<?php echo wp_login_url();?>" class="btn btn--small btn--orange float-left push-right">Login</a>
                <?php } ?>
            </div>
        </ul>