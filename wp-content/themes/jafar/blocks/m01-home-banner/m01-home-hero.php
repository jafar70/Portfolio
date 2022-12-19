<?php
/**
 * Block: M01 - Home Hero
 *
 * @used:
 *  - page-home.php
 *
 * @package Jafar
 */

$banner_text = get_field( 'home_banner_text' );
?>

<div class="m01 break-out">
	<div class="m01__grid container">
		<?php if ( $banner_text ) : ?>
		<div class="m01__grid__text">
			<?php echo wp_kses_post( $banner_text ); ?>
		</div>
		<?php endif; ?>
	</div>
</div>
