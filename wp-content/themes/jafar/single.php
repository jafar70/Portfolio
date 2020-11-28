<?php
/*
*/

$portfolio_image = get_field('portfolio_image');

get_header(); 
?>

<div class="container">
  <div class='grid'>
    <div class="grid__item desk-one-half">
        <div id="page-title">
            <h1 class="text-left" style='margin: 40px 0 30px 0;'><?php the_title(); ?>.</h1>
        </div>
    </div>

    <div class="grid__item desk-one-half">
        <div class='categories-div'>
        <p style="margin-top: 57px;text-align:right;font-size:16px;" class='categories'>
          <?php
            $categories = get_the_category();
              foreach( $categories as $category) {
                $name = $category->name;
                echo "$name";
              }
            ?>  
        </p>
        </div>
    </div>

    <div class="grid__item desk-one-whole">
        <p style="font-size:16px;"><a href="/portfolio" class='arrow-back'>Portfolio</a> / <?php the_title(); ?></p>
    </div>
  </div>
</div> 

<div class="container">
  <?php 
  if( !empty($portfolio_image) ): ?>
    <img data-src="<?php echo $portfolio_image['url']; ?>" alt="<?php echo $portfolio_image['alt']; ?>" class="mb-40 lazy"/>
  <?php endif; ?>

  <div class='grid'>
    <div class="grid__item desk-two-thirds overview-text">
        <h3>Overview:</h3>
        <?php the_field('portfolio_item_overview'); ?>
        <h3>My Responsibilities:</h3>
        <?php the_field('portfolio_item_responsibilities'); ?>
        <?php the_field('portfolio_item_outcome'); ?>
    </div>

    <div class="grid__item desk-one-third">
      <h3>Technologies I Used:</h3>    
        <?php if( have_rows('technologies_used') ): ?>
        <ul class="technologies-list">
        <?php while( have_rows('technologies_used') ): the_row(); 
          $technology_name = get_sub_field('technology_name');
          ?>
          <li> <?php echo $technology_name ?></li>
        <?php endwhile; ?>
        </ul>
      <?php endif; ?>
    </div>

    <div class="grid__item desk-one-whole">
      <div class="button-group">
        <center>
          <?php 

          $project_link = get_field('project_link');

          if( $project_link ): ?>

            <a class="main-btn mt-10 main-btn--website" href='<?php echo $project_link; ?>' rel="noopener" target='_blank'>View Website</a>

          <?php endif; ?>
      
          <?php 

          $portfolio_github_link = get_field('portfolio_github_link');

          if( $portfolio_github_link ): ?>

            <a class="main-btn mt-10 main-btn--github" href='<?php echo $portfolio_github_link; ?>' rel="noopener" target='_blank'>View Source Code</a>
            <?php else : ?>
              <button class="main-btn mt-10 main-btn--github main-btn--disabled" rel="noopener" target='_blank' type="button" disabled>No Source Code</button>
          <?php endif; ?>
        </center>
      </div>
    </div>
               
    <div class="grid__item desk-one-whole">
      <div class="portfolio-navigation border-none">
          <?php
            $prev = get_adjacent_post(false, '', true);
            $next = get_adjacent_post(false, '', false);
        
            //use an if to check if anything was returned and if it has, display a link
            if($prev){
                $url = get_permalink($prev->ID);            
                echo '<div class="float--left pl-32"><a href="' . $url . '" title="' . $prev->post_title . '" class="previous-post-link"><p><span>&#171; </span>Previous project</p></a></div>';
            }
        
            if($next) {
                $url = get_permalink($next->ID);            
                echo '<div class="float--right pr-32"><a href="' . $url . '" title="' . $next->post_title . '" class="next-post-link"><p>Next project <span>&#187;<span></p></a></div>';
            } 
          ?>
      </div>
    </div>
    </div>
  </div>
</div>

<?php 
get_footer();
?>