<?php
/**
 * Block: M05 - Portfolio Feed
 *
 * @used:
 *  - Gutenberg
 *
 * @package Jafar
 */

?>

<div class="m05 block-element pt pb mt mb module">
	<div class="container">
		<ul id="filters" class="m05__filters">
			<li><span class="active filter" data-filter="all"><?php echo esc_html( 'All' ); ?></span></li>
				<?php
					$categories = get_terms( 'portfolio-category', 'orderby=count&hide_empty=1' );
					?>
				<?php foreach ( $categories as $category ) : ?>
					<li><span class='filter' data-filter=".<?php echo esc_html( $category->slug ); ?>"><?php echo esc_html( $category->name ); ?></span></li>
				<?php endforeach; ?>
		</ul>

		<div id="portfoliolist" class="m05__list">
			<div class='m05__grid'>
				<?php
				$args        = array(
					'post_type'      => 'portfolio',
					'post_status'    => 'publish',
					'posts_per_page' => -1,
					'order'          => 'DESC',
				);
					$results = new WP_Query( $args );
				while ( $results->have_posts() ) :
					$results->the_post();
					$heading     = get_the_title();
					$image_id    = get_post_thumbnail_id( $post->ID );
					$img_url     = wp_get_attachment_url( $image_id, 'small' );
					$image_alt   = get_post_meta( $image_id, '_wp_attachment_image_alt', true );
					$image_title = get_the_title( $image_id );
					$alt_text    = get_post_meta( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true );
					$image       = array(
						'sizes' => array( 'sm' => $img_url ),
						'title' => $image_title,
						'alt'   => $alt_text,
					);
					$categories  = get_the_terms( $post->ID , array( 'portfolio-category') );
					$slugs       = wp_list_pluck( $categories, 'slug' );
					$class_names = join( ' ', $slugs );
					?>
					<div class="m05__grid__item <?php echo ( $class_names ) ? ' ' . esc_html( $class_names ) : false; ?> ">
						<a class="m05__portfolio" href="<?php the_permalink(); ?>">
							<div class="m05__portfolio__img">
								<?php theme__display_image( $image, 'bg', 'sm' ); ?>
							</div>
							<div class="m05__portfolio__overlay">
								<h3 class="m05__portfolio__overlay__title text-center">
									<?php echo esc_html( $heading ); ?>
								</h3>
							</div>
						</a>
					</div>
					<?php
				endwhile;
				wp_reset_postdata();
				?>

			</div>
		</div>
	</div>
</div>
