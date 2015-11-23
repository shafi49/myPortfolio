<?php 

//add support for widgets
//inclue functions-widgets.php
get_template_part ('functions', 'widgets');


//set excerpt length 
function wpt_excerpt_length ($length) {
    return 20;
}

add_filter ( "excerpt_length" , "wpt_excerpt_length" );

//require functions-menu.php 
//@require '/functions-menu.php';
get_template_part('functions', 'menu');



//include all necessary script files in script-files.php
get_template_part('script', 'files');

//theme supports
function custom_theme_support () {
    add_theme_support ('post-thumbnails');
}
add_action ('init', 'custom_theme_support');
?>