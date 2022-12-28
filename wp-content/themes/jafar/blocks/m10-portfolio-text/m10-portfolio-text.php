<?php
/**
 * Block: M10 - Portfolio Text
 *
 * @used:
 *  - Gutenberg
 *
 * @package Jafar
 */

$heading = get_field( 'm10_heading' );
$text    = get_field( 'm10_text_content' );
?>

<div class="m10 pt pb mt mb module block-element">
	<div class="container">	
		<div class="m10__grid">
			<div class="m10__grid__details">
				<?php if ( $heading ) : ?>
					<h2><?php echo esc_html( $heading ); ?></h2>
				<?php endif; ?>
			</div>

			<div class="m10__grid__introduction">
				<?php if ( $text ) : ?>
					<h3><?php echo wp_kses_post( $text ); ?></h3>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
