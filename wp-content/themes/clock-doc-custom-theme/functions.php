<?php
/* I don't want to see the black admin bar when I'm signed in because it overlaps the nav bar. 
I want the nav bar coded position: fixed. That means the black admin bar will overlap it. If
nav bar is coded anything other than position: fixed, the black admin bar pushes it down 32px. 
If I code the nav bar "top: 32px", I see an undesired top margin when I'm not signed in and
I start scrolling down. I don't want that. 

The simplest solution is don't show the black admin bar - ever. */

/*show_admin_bar(false);*/

require get_theme_file_path('/inc/search-route.php');
require get_theme_file_path('/inc/page-banner.php');
require get_theme_file_path('/inc/load-clockdoc-files.php');
require get_theme_file_path('/inc/clockdoc-features.php');
require get_theme_file_path('/inc/clockdoc-custom-rest.php');