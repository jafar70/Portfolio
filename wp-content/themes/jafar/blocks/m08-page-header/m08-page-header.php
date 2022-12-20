<?php
/**
 * Block: M08 - Page Header
 *
 * @used:
 *  - single-portfolio.php
 *
 * @package Jafar
 */

$heading = get_field( 'm08_heading' );
?>

<div class="m08 pt break-out">
	<div class="container">	
		<?php if ( $heading ) : ?>
			<h1 class="m08__title font-bold huge"><?php echo esc_html( $heading ); ?></h1>
		<?php endif; ?>
	</div>
</div>
