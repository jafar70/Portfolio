<?php
/**
 * Block: M11 - Image
 *
 * @used:
 *  - Gutenberg
 *
 * @package Jafar
 */

$image       = get_field( 'm11_image' );
$image_width = get_field( 'm11_image_width' );

if ( 'small' === $image_width ) {
	$container = 'container container--small';
} elseif ( 'normal' === $image_width ) {
	$container = 'container';
} else {
	$container = '';
}
?>
<div class="m10 pt pb module block-element">
	<div class="<?php echo esc_attr( $container ); ?>">	
		<?php theme__display_image( $image, 'inline', 'lg' ); ?>
	</div>
</div>
