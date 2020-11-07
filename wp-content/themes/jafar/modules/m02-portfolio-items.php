<?php
  $tag = get_field('m02_tag');
  $heading = get_field('m02_title');
  $cta_link = get_field( 'm02_link' );
?>

<div class="m02">
  <div class="container">
    <h4 class="m02__tag"><?php echo esc_html( $tag ); ?></h4>
    <h2 class="m02__title"><?php echo esc_html( $heading ); ?></h2>

    <div class="m02__grid">

      <?php
        $args = array(
            'post_type' => 'portfolio',
            'post_status' => 'publish',
            'posts_per_page' => 4,
            'order' => 'DESC'
        );
        $results = new WP_Query($args);
        while ($results->have_posts()):
          $results->the_post();
          $title = get_the_title();
          $img_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID) , 'thumbnail');
          $alt_text = get_post_meta($post->ID , '_wp_attachment_image_alt', true);
          $categories = get_the_category();
          $slugs = wp_list_pluck($categories, 'slug');
          $class_names = join(' ', $slugs);
        ?>
          <div class="m02__grid__item <?php if ($class_names)
            {
                echo ' ' . $class_names;
            } ?>" data-cat="<?php if ($class_names)
            {
                echo ' ' . $class_names;
            } ?>">
              <a href='<?php the_permalink(); ?>' class="m02__portfolio">
                <div class="m02__portfolio__img">
                  <img data-src="<?php echo esc_url( $img_url ); ?>" alt="<?php echo esc_attr( $alt_text ); ?>" class="lazy">
                </div>
                <div class="m02__portfolio__overlay">
                  <h3 class="m02__portfolio__overlay__title"><?php echo esc_html( $title ); ?></h3>
                </div>
              </a>
          </div>
              
        <?php
        endwhile;
        wp_reset_query(); ?>

    </div>

    <?php 
    if( $cta_link ): 
      $link_url = $cta_link['url'];
      $link_title = $cta_link['title'];
      $link_target = $cta_link['target'] ? $cta_link['target'] : '_self';
      ?>
      <a class="m02__button button button--blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
    <?php endif; ?>

  </div>
</div>