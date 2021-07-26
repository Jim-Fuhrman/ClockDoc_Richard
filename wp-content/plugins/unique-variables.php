<?php
/*
Plugin Name: Unique Vaariables
Description: Tells how many years experience Richard Bouc has. 
*/
add_shortcode('yearsExperience', 'yearsExperienceFunction');

function yearsExperienceFunction() {
    $currentYear = date('Y');
    return $currentYear - 1990;
}
?>
