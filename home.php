
<?php get_header();?>

<section class="two-column row no-max pad">
      <div class="small-12 columns">
        <div class="row">

          <!-- Primary Column -->

          <div class="small-12 medium-7 medium-offset-1 medium-push-4 columns">
            <div class="primary">
              <article class="post">
                  <p>using home.php</p>
            <?php if (have_posts()) : while (have_posts()) : the_post ();?>

                <h1>
                <a class="current" href="<?php the_permalink (); ?>"><?php the_title(); ?></a>
                </h1>
<?php 
//strip out html <p> tag from excerpt and add h2 tags
$excerpt = get_the_excerpt ();
$excOutput = strip_tags ( $excerpt );
?>    
              <h2><?php  _e( $excerpt );?></h2>
              <ul class="post-meta no-bullet">
                  <li class="author">
                    
                          <span class="wpt-avatar small">
                            <?php echo get_avatar ( get_the_author_meta ('ID') , 24); ?>
                          </span>
                          by <?php the_author_posts_link (); ?>
                          
                  </li>
                  
                  <li class="cat">in <?php the_category (','); ?></li>

<?php
$Pyear = get_post_time ('Y');
$Pmonth = get_post_time ('m');
$Pdate = get_post_time ('j');
?>

                  <li class="cat">in <a href="<?php _e ( get_day_link($Pyear, $Pmonth, $Pdate) ); ?>"><?php the_time ('F j, Y');?></a></li>
<!-- OUTPUT  -> " by munia  in Uncategorized in November 23 " -->
                </ul>
                <div class="img-container">
                  <?php the_post_thumbnail ();?>
                  <p>Photo by Gratt Spore</p>
                </div>
            <?php endwhile; else : ?>
            
             <p>Oops! Looks like you have no posts yet!</p>
             
             <?php endif; ?>
             
              </article>
            </div>
          </div>

          <!-- Secondary Column -->
        <!-- Secondary Column -->
          <!--include sidebar-->
          <?php get_sidebar ();?>
          <!--Place for sidebar -->
          <!--Sidebar moved to different file-->


        </div>
      </div>
    </section>







<?php get_footer();?>