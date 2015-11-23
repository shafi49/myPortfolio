<?php 

//set excerpt length 
function wpt_excerpt_length ($length) {
    return 20;
}

add_filter ( "excerpt_length" , "wpt_excerpt_length" );

//require menu-functions.php 
//@require '/menu-functions.php';
get_template_part('menu', 'functions');

//include all necessary script files in script-files.php
get_template_part('script', 'files');

//theme supports
function custom_theme_support () {
    add_theme_support ('post-thumbnails');
}
add_action ('init', 'custom_theme_support');
?>