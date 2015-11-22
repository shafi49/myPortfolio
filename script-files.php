<?php 

//lets add css files first in dynamic way... 
function wpt_theme_style () {
    wp_enqueue_style ('googleFont_css', 'http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic');
    wp_enqueue_style ('foundation_css', get_template_directory_uri() . '/assets/css/foundation.css');
//    wp_enqueue_style ('normalize_css', get_template_directory_uri() . '/assets/css/normalize.css');
    wp_enqueue_style ('style_css', get_template_directory_uri() . '/style.css');
    
} //myPortfolio_enqueue_style() ends
//call the stylesheets
add_action ( 'wp_enqueue_scripts' , 'wpt_theme_style');

function wpt_theme_js () {
    wp_register_script ('modernizr_js', get_template_directory_uri() . 'assets/js/vendor/modernizr.js', '', false);
    wp_enqueue_script ('modernizr_js');
    
if( !is_admin()){
	wp_deregister_script('jquery');
	wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"), true, '');
	wp_enqueue_script('jquery');
}
    
    wp_register_script ('foundation_min_js', get_template_directory_uri() . '/assets/js/foundation.min.js', array('jquery'), '', true);
    wp_enqueue_script ('foundation_min_js');
    
    wp_register_script ('app_js', get_template_directory_uri() . '/assets/js/app.js', array('jquery', 'foundation_min_js'), '', true);
    wp_enqueue_script ('app_js');
    
} //myPortfolio_enqueue_script() ends
//call the js files
add_action ( 'wp_enqueue_scripts' , 'wpt_theme_js');

?>