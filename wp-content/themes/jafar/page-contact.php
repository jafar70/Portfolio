<?php
/*
* Template Name: Contact Template
*/
get_header(); 
?>

  <div class="container text-center">
    <div id="page-title">
      <h1 class="text-left mb-40"><?php the_title() ?>.</h1>
    </div>

    <div class='grid contact-body' style="font-size:0;">
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
      the_content();
      endwhile; else: ?>
      <p>Sorry, no posts matched your criteria.</p>
      <?php endif; ?>

      <div class="instafeed-container mt-50">
        <div id="instafeed-gallery-feed" class="gallery row no-gutter">

        </div>

        <div class="grid__item desk-one-whole mb-20">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/Blue-rolling.svg" alt="Blue rolling icon" class="load-more-icon" id="load-more-icon">
        </div>
      </div>

    </div>
  </div>

  <?php 
get_footer();
?>