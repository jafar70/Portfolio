<?php
/**
 * Block: M02 - Portfolio Items
 *
 * @used:
 *  - Gutenberg
 *
 * @package Jafar
 */

$heading    = get_field( 'm02_title' );
$subheading = get_field( 'm02_tag' );
$cta_link   = get_field( 'm02_link' );
?>

<div class="m02 pb pt mt mb module block-element">
	<div class="container">
		<?php if ( $heading ) : ?>
			<h2 class="m02__title"><?php echo esc_html( $heading ); ?></h2>
		<?php endif; ?>

		<?php if ( $subheading ) : ?>
			<p class="m02__subheading"><?php echo esc_html( $subheading ); ?></p>
		<?php endif; ?>


		<div class="m02__grid">
			<?php
			$args    = array(
				'post_type'      => 'portfolio',
				'post_status'    => 'publish',
				'posts_per_page' => 4,
				'order'          => 'DESC',
			);
			$results = new WP_Query( $args );
			while ( $results->have_posts() ) :
				$results->the_post();
				$heading     = get_the_title();
				$image_id    = get_post_thumbnail_id();
				$img_url     = wp_get_attachment_url( $image_id, 'small' );
				$image_alt   = get_post_meta( $image_id, '_wp_attachment_image_alt', true );
				$image_title = get_the_title( $image_id );
				$alt_text    = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true );
				$image       = array(
					'sizes' => array( 'sm' => $img_url ),
					'title' => $image_title,
					'alt'   => $alt_text,
				);
				?>
				<div class="m02__grid__item">
					<a href='<?php the_permalink(); ?>' class="m02__portfolio">
						<?php display_image( $image, 'bg', 'sm', 'm05__portfolio__img' ); ?>
						<div class="m02__portfolio__overlay">
							<h3 class="m02__portfolio__overlay__title text-center mb--none"><?php echo esc_html( $heading ); ?></h3>
						</div>
					</a>
				</div>

				<?php
			endwhile;
			wp_reset_postdata();
			?>

		</div>

		<?php
		if ( $cta_link ) :
			$link_url    = $cta_link['url'];
			$link_title  = $cta_link['title'];
			$link_target = $cta_link['target'] ? $cta_link['target'] : '_self';
			?>
			<a class="m02__button button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
		<?php endif; ?>

	</div>
</div>
