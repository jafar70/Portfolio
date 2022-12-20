<?php
/**
 * Functions for display images.
 *
 * @used:
 *  - functions-image.php
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
function theme__display_image( $image, $image_style = 'inline', $image_size = 'large', $classes = false ) {
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

<div class="mediaimg <?php echo esc_attr( $classes ); ?>">
		<?php
		if ( 'bg' === $image_style || 'cover' === $image_style ) :
			// Background Image
			// Background images are not currently responsive, so wherever possible use inline images, but they do use vanilla lazy load.
			?>
			<div class="mediaimg__img mediaimg__img--bg lazy <?php echo ( 'cover' === $image_style ) ? 'mediaimg__img--bg--cover' : false; ?>" role="img" aria-label="<?php echo esc_attr( $image_title ); ?>" <?php echo ( is_admin() ) ? 'style="background-image:url(' . esc_url( $image_url ) . ')"' : 'data-bg="' . esc_url( $image_url ) . '"'; ?>></div>

			<?php
			elseif ( 'icon' === $image_style ) :
				// Icon Image.
				// this image doesnt have a responsive set as icon images are already small, but they do use vanilla lazy load.
				?>
				<div class="mediaimg__img mediaimg__img--icon lazy" role="img" aria-label="<?php echo esc_html( $image_title ); ?>"
				<?php if ( is_admin() ) : ?>
					style="background-image:url('<?php echo esc_url( $image_url ); ?>')"
				<?php else : ?>
					data-bg="<?php echo esc_url( $image_url ); ?>"
				<?php endif; ?>></div>

				<?php
				else :
					// Inline Image.
					// These images are responsive using responsive images e.g. https://developer.mozilla.org/en-US/docs/Learn/HTML/Multimedia_and_embedding/Responsive_images.
					// and vanilla lazy load - https://www.andreaverlicchi.eu/vanilla-lazyload/.
					?>
				<img class="mediaimg__img mediaimg__img--inline lazy" 
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
