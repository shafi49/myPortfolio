<?php 
/*
    Template Name: Portfolio Page
*/
?>

<?php get_header();?>

<section class="row">
      <div class="small-12 columns text-center">
      <!--we could also use WP_Query() for more precise loop-->
       <?php if (have_posts()) : while (have_posts()) : the_post ();?>
        <div class="leader">
          <a href="<?php the_permalink();?>"><?php the_title('<h1>', '</h1>');?></a>
          <?php the_content();?>    <!-- default <p> tags around the_content()-->  
        </div>
        <?php endwhile; ?>
          <?php endif; wp_reset_postdata();?>
      </div>
    </section>

<section class="row no-max pad">
<?php 
//args for WP_Query () class
$args = array (
    'post_type' => 'portfolio'
);
//initiate $query object from WP_Query() class
$query = new WP_Query($args);

?>
    <?php if ($query -> have_posts()) : while ($query -> have_posts()) : $query -> the_post();?>
      <div class="small-6 medium-4 large-3 columns grid-item">
        <a href="<?php the_permalink();?>"><?php the_post_thumbnail( ' large ' ); ?></a>
      </div>
    <?php endwhile; endif; wp_reset_postdata();?>
    </section>


<?php get_footer();?>