                <?php wp_footer(); ?>
        <footer class="site-footer">
            <div class="site-footer__inner-grid site-footer__container container--narrow">
                <div class="site-footer__inner-grid--item">
                    <h2>Menu</h2>  <!--  class="headline headline--medium" -->
                    <nav class="nav-list">
                        <ul>
                            <li><a href="<?php echo site_url('') ?>">Home</a></li>
                            <li><a href="<?php echo site_url('/about-us') ?>">About Us</a></li>
                            <li><a href="<?php echo site_url('/products') ?>">Products</a></li>
                            <li><a href="<?php echo site_url('/blog') ?>">Blogs</a></li>
                            <li><a href="<?php echo site_url('/contact-us') ?>">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="site-footer__inner-grid--item">
                    <h2>Learn</h2>  <!--  class="headline headline--medium" -->
                    <nav class="nav-list">
                        <ul>
                            <li><a href="<?php echo site_url('/conditions-of-use');?>">Conditions of Use</a></li>
                            <li><a href="<?php echo site_url('/privacy-policy'); ?>">Privacy Policy</a></li>
                            <li><a href="<?php echo site_url('/guidelines-for-ratings-and-reviews');?>; ">Guidelines for Reviews</a></li>
                        </ul>
                    </nav>
                </div>   
                <div class="site-footer__inner-grid--item">
                    <h2 class="t-center">Connect With Us</h2>  <!-- headline headline--medium -->
                    <nav>
                        <ul class="min-list social-icons-list group"> <!-- social-icons-list is in shame.css, min-list is in utility-classes.css -->
                            <li><a href="https://www.facebook.com/The-Clock-Doctor-159971937541412" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/richard-bouc-a535a680/" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div> <!-- end of site-footer__inner-grid container container--narrow -->
            <p class="site-footer__copyright-info t-small">&copy; Copyright 2021 | Clock Doctor | All Rights Reserved | Website created by Jim Fuhrman | Contact <a href="mailto: Jim Fuhrman@Yahoo.com">Jim Fuhrman</a>
            </p> 
        </footer>
        <div class="search-overlay">
            <div class="search-overlay__top">
                <div class="container">  <!-- the container class horizontally centers everything on the screen -->
                    <i class="fa fa-search search-overlay__icon" aria-hidden="true"></i>  <!-- when using font-awesome icons, always code aria-hidden="true". Thus, it won't read out loud something to someone who is visually impaired. -->
                    <input type="text" class="search-term" placeholder="What are you looking for?" id="search-term">
                    <i class="fa fa-window-close search-overlay__close" aria-hidden="true"></i>
                </div>
            </div>
        </div>
        <!-- This makes our black admin menu appear on the frontend. If you're signed into Wordpress, the black admin bar shows. If you're not signed in, the black admin bar doesn't show.  -->
        <?php wp_footer(); ?>
    </body>
</html>