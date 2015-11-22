<?php 

/********************
add support for menus
*********************/
function wpt_register_theme_menus () {
    register_nav_menus (
        array (
            'primary-menu' => __('Primary Menu')
        )
    );
} /*wpt_register_theme_menu() ends*/

//call the menu registering function
add_action ('init', 'wpt_register_theme_menus'); //wordpress call menus when you are ready


/*************************************
function that place menu to header.php
**************************************/
function create_theme_menu () {
    //arguments for wp_nav_menu()
$args = array (
    'theme_location' => 'primary-menu',
    'conatiner_class' => 'no-bullet',
    'menu' => 'Main Menu',
    'container' => false, 
    'container_class' => '',
    'menu_id' => 'main-menu',
    'menu_class' => 'no-bullet'
);
//the real menu
wp_nav_menu($args);
}

?>