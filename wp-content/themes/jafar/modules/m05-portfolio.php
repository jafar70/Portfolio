<?php
/**
 * Block: M05 - Portfolio
 *
 * @used:
 *  - page-porfolio.php
 *
 * @package Jafar
 */

?>

<div class="m05">
	<div class="container m05__title">
		<h1 class="m05__title__text banner-title"><?php echo esc_html( 'Portfolio.' ); ?></h1>
	</div>

	<div class="container mb-30">
		<ul id="filters" class="m05__filters">
			<li><span class="active filter" data-filter="*"><?php echo esc_html( 'All' ); ?></span></li>
				<?php
					$all_categories = get_categories(
						array(
							'hide_empty' => true,
						)
					);
					?>
				<?php foreach ( $all_categories as $category ) : ?>
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
					$url         = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ), 'thumbnail' );
					$categories  = get_the_category();
					$slugs       = wp_list_pluck( $categories, 'slug' );
					$class_names = join( ' ', $slugs );
					?>
					<div class="m05__grid__item 
					<?php
					if ( $class_names ) {
						echo ' ' . esc_html( $class_names );
					}
					?>
					" data-cat="
					<?php
					if ( $class_names ) {
						echo ' ' . esc_html( $class_names );
					}
					?>
					">
						<a class="m05__portfolio" href="<?php the_permalink(); ?>">
							<div class="m05__portfolio__img">
								<img data-src="<?php echo esc_url( $url ); ?>" alt="<?php echo esc_attr( $alt_text ); ?>" class="lazy">
							</div>
							<div class="m05__portfolio__overlay">
								<h3 class="m05__portfolio__overlay__title">
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
