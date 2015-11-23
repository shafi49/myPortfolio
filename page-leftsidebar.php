<?php 
/*
    Template Name: Left Sidebar
*/
?>
<?php get_header();?>


<section class="two-column row no-max pad">
      <div class="small-12 columns">
        <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
          <div class="small-12 medium-4 columns">
            <div class="secondary">
             <h3>Sidebar</h3>

<!--
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, reiciendis reprehenderit temporibus enim autem! Nesciunt, nulla, autem voluptatum sed itaque fugit adipisci suscipit nostrum architecto sint corporis rerum debitis deleniti.</p>
-->
            </div>
          </div>

          <div class="small-12 medium-7 medium-offset-1 end columns">
            <div class="primary">
                <!--IMAGES HERE-->
                  <?php the_title('<h2>', '</h2>');?>
                <?php the_content('');?>

<!--
              <div class="work-item">
                <img src="assets/img/temp/item-03.png" alt="">  
              </div>
-->
            </div>
          </div>
          <?php endwhile; else :  ?>
            <p>Looks like you have any posts yet!</p>
            <?php endif;?>
        </div><!--div.row ends-->
      </div>

    </section>







<?php get_footer();?>