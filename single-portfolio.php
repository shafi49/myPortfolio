<?php get_header();?>





<section class="row">
      <div class="small-12 columns text-center">
      <!--we could also use WP_Query() for more precise loop-->
       <?php if (have_posts()) : while (have_posts()) : the_post ();?>
        <div class="leader">
          <p>single-portfolio</p>
          <a href="<?php the_permalink();?>"><?php the_title('<h1>', '</h1>');?></a>
          <?php the_content();?>    <!-- default <p> tags around the_content()-->  
        </div>
        <?php endwhile; else : ?>
          <p>Looks like you don't have any posts yet!</p>
          <?php endif; wp_reset_postdata();?>
      </div>
    </section>







<?php get_footer();?>