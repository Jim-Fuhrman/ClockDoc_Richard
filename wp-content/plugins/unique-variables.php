<?php
/*
Plugin Name: Unique Variables
Description: Tells how many years experience Richard Bouc has. 
*/
add_shortcode('yearsExperience', 'yearsExperienceFunction');

function yearsExperienceFunction() {
    $currentYear = date('Y');
    return $currentYear - 1990;
}

/*add_shortcode('nmbrStyles', 'nmbrStylesFunction');

function nmbrStylesFunction() {
    return stylesCount -> new WP_Query(array(
        'post_type' = 'clocks'
    ));
}*/
?>
