<div class="small-12 medium-4 medium-pull-8 columns">
            <div class="secondary">
               <h2><a class="current" href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
                <?php if (get_field ("description") ) : ;?>
                <p><?php the_field("description");?></p>
                <?php endif;?>
          <p>Using single-portfolio.php</p>
          <p>Including sidebar-singleportfolio.php</p>
<?php if (!dynamic_sidebar('page') ) : ?>
    <h3>Widgets Area</h3>
    <p>Please set up some widgets</p>
<?php endif; ?>

            </div>
          </div>