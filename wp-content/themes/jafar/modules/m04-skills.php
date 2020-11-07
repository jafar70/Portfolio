<?php
$tag = get_field('m04_tag');
$heading = get_field('m04_title');

?>
<div class="m04">
  <div class="container text-center">
    <h4 class="m04__tag">
      <?php echo esc_html( $tag ); ?>
    </h4>
    <h2 class="m04__title">
      <?php echo esc_html( $heading ); ?>
    </h2>
    
    <?php if ( have_rows( 'technologies' ) ) : ?>

    <div class='m04__grid skills-grid' style='font-size:0;'>
      <?php
      while ( have_rows( 'technologies' ) ) : the_row();

        $name = get_sub_field( 'technology_name' );
        $image = get_sub_field( 'technology_image' );
      ?>

      <div class="m04__grid__item">
        <div class="m04__card">
          <img class='lazy' data-src='<?php echo $image['url']; ?>' alt="<?php echo $image['alt'] ?>">
          <h3><?php echo $name ?></h3>
        </div>
      </div>
      <?php endwhile; ?> 
    </div>

    <?php endif; ?>
    
  </div>
</div>