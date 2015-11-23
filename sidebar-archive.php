<div class="small-12 medium-4 medium-pull-8 columns">
            <div class="secondary">
                <h3>Sidebar</h3>
                <p>May be this area can be widgetized!</p>
                <h3>Archive Widgets <br> Here</h3>
<?php if (!dynamic_sidebar('blog') ) : ?>
    <h3>Widgets Area</h3>
    <p>Please set up some widgets</p>
<?php endif; ?>

            </div>
          </div>