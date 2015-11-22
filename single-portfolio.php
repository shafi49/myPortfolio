<?php get_header();?>

<?php 
//args for WP_Query();
$args = array (
    'post_type' => 'portfolio'

);

$query = new WP_Query($args);

?>

<section class="two-column row no-max pad">
      <div class="small-12 columns">
        <div class="row">

        <?php if ($query -> have_posts()) : while ($query -> have_posts()) : the_post();?>

          <div class="small-12 medium-4 columns">
            <div class="secondary">
              <h2><?php the_title();?></h2>
                <p><?php the_field('description');?></p>
<!--
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, reiciendis reprehenderit temporibus enim autem! Nesciunt, nulla, autem voluptatum sed itaque fugit adipisci suscipit nostrum architecto sint corporis rerum debitis deleniti.</p>
-->
            </div>
          </div>

          <div class="small-12 medium-7 medium-offset-1 end columns">
            <div class="primary">
                <?php the_field('images');?>    
<!--
              <div class="work-item">
                <img src="assets/img/temp/item-03.png" alt="">  
              </div>
-->
            </div>
          </div>
          <?php endwhile; endif; wp_reset_postdata();?>
        </div><!--div.row ends-->
      </div>

    </section>







<?php get_footer();?>