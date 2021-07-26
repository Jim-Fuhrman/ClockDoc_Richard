                <?php wp_footer(); ?> 
        <footer class="site-footer">
            <div class="site-footer__inner container container--narrow">
                <div class="group">
                    <div class="site-footer__col-one">
                        <div class="site-header__nav-icon" style="background-image: url(<?php echo get_theme_file_uri('/images/ClockDocIcon.png');?>"><a href="<?php echo esc_url(site_url('')); ?>"></a>
                        </div>
                        <h1><a href="<?php echo site_url(); ?>">Clock Doctor</a></h1>
                        <p>&copy; Copyright 2021 | Clock Doctor | All Rights Reserved</p>
                        <p>Website created by Jim Fuhrman</p>
                    </div>
                    <div class="site-footer__col-two-three-group">
                        <div class="site-footer__col-two">
                            <h3 class="headline headline--small">Shop around</h3>
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
                        <div class="site-footer__col-three">
                            <h3 class="headline headline--small">Learn</h3>
                            <nav class="nav-list">
                                <ul>
                                    <li><a href="#">Legal</a></li>
                                    <li><a href="<?php echo site_url('/privacy-policy') ?>">Privacy</a></li>
                                    <li><a href="#">Careers</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="site-footer__col-four">
                        <h3 class="headline headline--small">Connect With Us</h3>
                        <nav>
                            <ul class="min-list social-icons-list group"> <!-- social-icons-list is in shame.css, min-list is in utility-classes.css -->
                                <li><a href="https://www.facebook.com/The-Clock-Doctor-159971937541412" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/richard-bouc-a535a680/" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </footer>
        <!-- This makes our black admin menu appear on the frontend  -->
        <?php wp_footer(); ?>
    </body>
</html>