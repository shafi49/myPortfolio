<?php get_header();?>

<section class="two-column row no-max pad">
      <div class="small-12 columns">
        <div class="row">

          <!-- Primary Column -->

          <div class="small-12 medium-7 medium-offset-1 medium-push-4 columns">
            <div class="primary">
              <article class="post">
            <?php if (have_posts()) : while (have_posts()) : the_post ();?>

                <?php if (get_field ("images") ) : ;?>
                <?php the_field("images");?>
                <?php endif;?>
              <?php the_content();?>     
            <?php endwhile; else : ?>
            
             <p>Oops! Looks like you have no posts yet!</p>
             
             <?php endif; ?>
             
              </article>
            </div>
          </div>

          <!-- Secondary Column -->
          <!--include sidebar-->
          <?php get_sidebar ('singleportfolio');?>

          <!--Place for sidebar -->
          <!--Sidebar moved to different file-->
          


        </div>
      </div>
    </section>







<?php get_footer();?>