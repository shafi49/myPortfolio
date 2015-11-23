<?php 
function support_theme_widgets ($name, $id, $description) {
    
    register_sidebar ( array (
        'name' => __( $name ),
        'id' => $id,
        'description' => __( $description ),
        'class' => 'myWidgets',
        'before_widget' => '<div class = "widgets">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class = "module-heading">',
        'after_title' => '</h2>'
    ));
}

support_theme_widgets ("Page Sidebar", "page", "Display at the side of the pages");
support_theme_widgets ("Blog Sidebar", "blog", "Display at the side of the blog posts");

?>