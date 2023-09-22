<?php
/**
 * Template Name: Single Portfolio Template
 * Template Post Type: portfolio
 *
 * @package Jafar
 **/

get_header();
?>
<main id="primary" class="main site-main">
	<?php
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content', 'page' );

	endwhile; // End of the loop.
	?>
	<div class="post-nav flex flex-wrap">
		<?php
		$prev_post = get_adjacent_post( false, '', true );
		if ( ! $prev_post ) {
			$loop      = get_posts( 'numberposts=-1&post_type=portfolio' );
			$prev_post = reset( $loop );
		}
		$img_id     = get_post_thumbnail_id( $prev_post->ID );
		$size       = 'large';
		$img_src    = wp_get_attachment_image_url( $img_id, $size );
		$img_srcset = wp_get_attachment_image_srcset( $img_id, $size );
		$alt        = isset( get_post_meta( $img_id, '_wp_attachment_image_alt' )[0] ) ? get_post_meta( $img_id, '_wp_attachment_image_alt' )[0] : $title;
		$caption    = wp_get_attachment_caption( $img_id );
		?>
		<a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>" class="post-nav__link post-nav__link--prev">
			<div class="post-nav__wrap">
				<div class="post-nav__wrap__content color-white text-right">
					<h6 class="post-nav__tag mb--none"><?php echo esc_html__( 'Previous Project', 'jafar' ); ?></h6>
					<h3 class="post-nav__title mb--none"><?php echo esc_html( $prev_post->post_title ); ?></h3>
				</div>
			</div>
			<div class="post-nav__arrow">
				<?php get_template_part( 'assets/img/inline', 'arrow-right.svg' ); ?>
			</div>
			<div class="post-nav__img">
				<img data-src="<?php echo esc_url( $img_src ); ?>"
				data-srcset="<?php echo esc_attr( $img_srcset ); ?>"
				data-sizes="
				(max-width: 768px) 800px,
				(max-width: 1400px) 1400px,
				(max-width: 2000px) 2000px"
				alt="<?php echo esc_attr( $alt ); ?>"
				class="lazy img post-nav__img__media">
			</div>
		</a>

		<?php
		$next_post = get_adjacent_post( false, '', false );
		if ( ! $next_post ) {
			$loop      = get_posts( 'numberposts=-1&post_type=portfolio' );
			$next_post = end( $loop );
		}
		$img_id     = get_post_thumbnail_id( $next_post->ID );
		$size       = 'large';
		$img_src    = wp_get_attachment_image_url( $img_id, $size );
		$img_srcset = wp_get_attachment_image_srcset( $img_id, $size );
		$alt        = isset( get_post_meta( $img_id, '_wp_attachment_image_alt' )[0] ) ? get_post_meta( $img_id, '_wp_attachment_image_alt' )[0] : $title;
		$caption    = wp_get_attachment_caption( $img_id );
		?>
		<a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" class="post-nav__link post-nav__link--next">
			<div class="post-nav__wrap">
				<div class="post-nav__wrap__content color-white text-left">
					<h6 class="post-nav__tag mb--none"><?php echo esc_html__( 'Next Project', 'jafar' ); ?></h6>
					<h3 class="post-nav__title mb--none"><?php echo esc_html( $next_post->post_title ); ?></h3>
				</div>
			</div>
			<div class="post-nav__arrow">
				<?php get_template_part( 'assets/img/inline', 'arrow-right.svg' ); ?>
			</div>
			<div class="post-nav__img">
				<img data-src="<?php echo esc_url( $img_src ); ?>"
				data-srcset="<?php echo esc_attr( $img_srcset ); ?>"
				data-sizes="
				(max-width: 768px) 800px,
				(max-width: 1400px) 1400px,
				(max-width: 2000px) 2000px"
				alt="<?php echo esc_attr( $alt ); ?>"
				class="lazy img post-nav__img__media">
			</div>
		</a>
	</div>
</main><!-- #main -->

<?php
get_footer();
