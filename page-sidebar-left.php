<?php 
/*
    Template Name: Left Sidebar
*/
?>
<?php get_header();?>

<section class="two-column row no-max pad">
      <div class="small-12 columns">
        <div class="row">

          <!-- Primary Column -->

          <div class="small-12 medium-7 medium-offset-1 medium-push-4 columns">
            <div class="primary">
              <article class="post">
              
            <?php if (have_posts()) : while (have_posts()) : the_post ();?>

                <h1><a class="current" href="single-post.html"><?php the_title(); ?></a></h1>
                    
              <?php the_content();?>     
            <?php endwhile; else : ?>
            
             <p>Oops! Looks like you have no posts yet!</p>
             
             <?php endif; ?>
             
              </article>
            </div>
          </div>

          <!-- Secondary Column -->
          <!--include sidebar-->
          <?php get_sidebar ();?>
          <!--Place for sidebar -->
          <!--Sidebar moved to different file-->


        </div>
      </div>
    </section>







<?php get_footer();?>
