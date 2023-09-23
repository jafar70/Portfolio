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
<div class="m11 pt pb module block-element effect">
	<div class="<?php echo esc_attr( $container ); ?>">	
		<div class="m11__masks">
			<div class="m11__masks__shade" style="--animation-order: 1;"></div>
			<div class="m11__masks__shade" style="--animation-order: 2;"></div>
			<div class="m11__masks__shade" style="--animation-order: 3;"></div>
			<div class="m11__masks__shade" style="--animation-order: 4;"></div>
			<div class="m11__masks__shade" style="--animation-order: 5;"></div>
		</div>
		<?php display_image( $image, 'inline', 'lg' ); ?>
	</div>
</div>
