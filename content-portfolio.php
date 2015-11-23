<?php 
//number of posts 
$numb_post;
if (is_front_page ($numb_post) ) {
    //show only 4 items on home page
    $numb_post = 4;
} else {
    //show all items on home page
    
    $numb_post = -1;
}

//args for WP_Query () class
$args = array (
    'post_type' => 'portfolio',
    'posts_per_page' => $numb_pos
);
//initiate $query object from WP_Query() class
$query = new WP_Query($args);

?>
    <?php if ($query -> have_posts()) : while ($query -> have_posts()) : $query -> the_post();?>
      <div class="small-6 medium-4 large-3 columns grid-item">
        <a href="<?php the_permalink();?>"><?php the_post_thumbnail( ' large ' ); ?></a>
      </div>
    <?php endwhile; endif; wp_reset_postdata();?>
