<?php 
//number of posts 
$numb_post = -1;

/*
if (is_front_page() ) {
    $numb_post = 5;
} else {
    $numb_post = -1;
}
*/

$numb_post = (is_front_page () ) ? 4 : -1;
//if it is static front-page then show 4 items
//if it is not static front-page then show all items

//args for WP_Query () class
$args = array (
    'post_type' => 'portfolio',
    'posts_per_page' => $numb_post
);
//initiate $query object from WP_Query() class
$query = new WP_Query($args);

?>
    <?php if ($query -> have_posts()) : while ($query -> have_posts()) : $query -> the_post();?>
      <div class="small-6 medium-4 large-3 columns grid-item">
        <a href="<?php the_permalink();?>"><?php the_post_thumbnail( ' large ' ); ?></a>
      </div>
    <?php endwhile; endif; wp_reset_postdata();?>
