
<?php get_header();?>

<section class="row">
      <div class="small-12 columns text-center">
      <!--we could also use WP_Query() for more precise loop-->
          <p>it's our static home page</p>
          <p>using front-page.php</p>
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
<!--smart way to include content-portfolio.php-->
<?php get_template_part ('content', 'portfolio'); ?>

</section>


<?php get_footer();?>