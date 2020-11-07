<?php
/*
* Template Name: Services Template
*/
get_header(); 
?>

  <div class="container">
    <div id="page-title">
      <h1 class="text-left mb-40"><?php the_title() ?>.</h1>
    </div>
  </div>

  <div class="container">

    <div class="tab-block" id="tab-block">

      <ul class="tab-mnu">
        <li class="active"><?php the_field('service_one_title'); ?></li>
        <li><?php the_field('service_two_title'); ?></li>
        <li><?php the_field('service_three_title'); ?></li>
        <li><?php the_field('service_four_title'); ?></li>
        <li><?php the_field('service_five_title'); ?></li>
      </ul>

      <div class="tab-cont">
        <div class="tab-pane">
          <div class="image-overlap">
            <?php 

            $image = get_field('service_one_image');

            if( !empty($image) ): ?>

              <img data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width='1170' height='780' style="max-height:100%;" loading='lazy' class="lazy"/>

            <?php endif; ?>
            <div class="intro-text">
              <h2><b><?php the_field('service_one_title'); ?></b></h2>
              <hr class="small-underline" align="left" width="40px" />
              <p>
                <?php the_field('service_one_text'); ?>
              </p>
            </div>
          </div>
        </div>
        <div class="tab-pane">
          <div class="image-overlap">
            <?php 

            $image = get_field('service_two_image');

            if( !empty($image) ): ?>

              <img data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width='1170' height='780' style="max-height:100%;" loading='lazy' class="lazy"/>

            <?php endif; ?>
            <div class="intro-text">
              <h2><b><?php the_field('service_two_title'); ?></b></h2>
              <hr class="small-underline" align="left" width="40px" />
              <p>
                <?php the_field('service_two_text'); ?>
              </p>
            </div>
            </div>
          </div>
        
        <div class="tab-pane">
          <div class="image-overlap">
            <?php 

            $image = get_field('service_three_image');

            if( !empty($image) ): ?>

              <img data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width='1170' height='780' style="max-height:100%;" loading='lazy' class="lazy"/>

            <?php endif; ?>
            <div class="intro-text">
              <h2><b><?php the_field('service_three_title'); ?></b></h2>
              <hr class="small-underline" align="left" width="40px" />
              <p>
                <?php the_field('service_three_text'); ?>
              </p>
            </div>
          </div>
        </div>
        <div class="tab-pane">
          <div class="image-overlap">
            <?php 

            $image = get_field('service_four_image');

            if( !empty($image) ): ?>

              <img data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width='1170' height='780' style="max-height:100%;" loading='lazy' class="lazy"/>

            <?php endif; ?>
            <div class="intro-text">
              <h2><b><?php the_field('service_four_title'); ?></b></h2>
              <hr class="small-underline" align="left" width="40px" />
              <p>
                <?php the_field('service_four_text'); ?>
              </p>
            </div>
          </div>
        </div>
        <div class="tab-pane">
          <div class="image-overlap">
            <?php 

            $image = get_field('service_five_image');

            if( !empty($image) ): ?>

              <img data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width='1170' height='780' style="max-height:100%;" loading='lazy' class="lazy"/>

            <?php endif; ?>
            <div class="intro-text">
              <h2><b><?php the_field('service_five_title'); ?></b></h2>
              <hr class="small-underline" align="left" width="40px" />
              <p>
                <?php the_field('service_five_text'); ?>
              </p>
            </div>
          </div>
        </div>
      </div>
</div>
    </div>

    <?php 
get_footer();
?>