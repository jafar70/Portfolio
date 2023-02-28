<?php
/**
 * Functions for display images.
 *
 *
 * @package Jafar_Theme
 */

/**
 * Function to display image
 *
 * @param array $image Image array from ACF.
 * @param array $image_style Image style.
 * @param array $image_size The size of the image.
 * @param array $classes Additional class name to be added to the image element.
 */
function display_image( $image, $image_style = 'inline', $image_size = 'large', $classes = false ) {
	if ( ! empty( $image ) ) :

		$image_fullsize     = $image['url'];
		$image_url          = $image['sizes'][ $image_size ];
		$image_size_mobile  = ( 'thumbnail' === $image_size ) ? $image_size : 'medium';
		$image_width        = $image['sizes'][ $image_size . '-width' ];
		$image_height       = $image['sizes'][ $image_size . '-height' ];
		$image_url_mobile   = $image['sizes'][ $image_size_mobile ];
		$image_width_mobile = $image['sizes'][ $image_size_mobile . '-width' ];
		$image_caption      = $image['caption'];
		$image_alt          = $image['alt'];
		$image_title        = $image['title'];
		?>

<div class="image <?php echo esc_attr( $classes ); ?>">
		<?php
		if ( 'bg' === $image_style ) :
			?>
			<div class="image__img image__img--bg lazy <?php echo ( 'cover' === $image_style ) ? 'image__img--bg--cover' : false; ?>" role="img" aria-label="<?php echo esc_attr( $image_title ); ?>" <?php echo ( is_admin() ) ? 'style="background-image:url(' . esc_url( $image_url ) . ')"' : 'data-bg="' . esc_url( $image_url ) . '"'; ?>></div>

			<?php
			elseif ( 'icon' === $image_style ) :
				?>
				<div class="image__img image__img--icon lazy" role="img" aria-label="<?php echo esc_html( $image_title ); ?>"
				<?php if ( is_admin() ) : ?>
					style="background-image:url('<?php echo esc_url( $image_url ); ?>')"
				<?php else : ?>
					data-bg="<?php echo esc_url( $image_url ); ?>"
				<?php endif; ?>></div>

				<?php
				else :
					?>
				<img class="image__img image__img--inline lazy" 
					<?php if ( is_admin() ) : ?>
					srcset="<?php echo esc_url( $image_url_mobile ); ?> <?php echo esc_attr( $image_width_mobile ); ?>w, <?php echo esc_url( $image_url ); ?> <?php echo esc_attr( $image_width ); ?>w"
					sizes="(max-width: 550px) <?php echo esc_attr( $image_width_mobile ); ?>px, <?php echo esc_attr( $image_width ); ?>px"
				<?php else : ?>
					data-srcset="<?php echo esc_url( $image_url_mobile ); ?> <?php echo esc_attr( $image_width_mobile ); ?>w, <?php echo esc_url( $image_url ); ?> <?php echo esc_attr( $image_width ); ?>w"
					data-sizes="(max-width: 550px) <?php echo esc_attr( $image_width_mobile ); ?>px, <?php echo esc_attr( $image_width ); ?>px"
				<?php endif; ?>
				alt="<?php echo esc_attr( $image_alt ); ?>" title="<?php echo esc_attr( $image_title ); ?>" width="<?php echo esc_attr( $image_width ); ?>" height="<?php echo esc_attr( $image_height ); ?>" />
		<?php endif; ?>
</div>
		<?php
		endif;
}


/**
 * Remove default image sizes
 *
 * @param array $sizes Image array from sizes.
 */
function prefix_remove_default_images( $sizes ) {
	unset( $sizes['small'] ); // 150px
	unset( $sizes['medium'] ); // 300px
	unset( $sizes['large'] ); // 1024px
	unset( $sizes['medium_large'] ); // 768px
	return $sizes;
}

add_filter( 'intermediate_image_sizes_advanced', 'prefix_remove_default_images' );

/**
 * Assign Image Sizes
 */
add_image_size( 'banner', 2000, 1600, false );
add_image_size( 'lg', 1200, 1200, false );
add_image_size( 'md', 1000, 1000, false );
add_image_size( 'sm', 600, 600, false );
add_image_size( 'icon', 300, 300, false );
