<?php 
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