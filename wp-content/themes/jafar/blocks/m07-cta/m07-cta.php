<?php
/**
 * Block: M07 - CTA (Call to action)
 *
 * @used:
 *  - Gutenberg
 *
 * @package Jafar
 */

$heading   = get_field( 'm07_heading' );
$paragraph = get_field( 'm07_paragraph' );
$button    = get_field( 'm07_button' );
?>

<div class="m07 pt pb bg-grey color-black mt mb module block-element">
	<div class='container'>
		<div class="m07__text">
			<?php if ( $heading ) : ?>
			<h3 class="m07__text__heading beta mb--em font-bold"><?php echo esc_html( $heading ); ?></h3>
			<?php endif; ?>

			<?php if ( $paragraph ) : ?>
			<p class="m07__text__paragraph mb--em"><?php echo esc_html( $paragraph ); ?></p>
			<?php endif; ?>

			<?php
			if ( $button ) :
				$link_url    = $button['url'];
				$link_title  = $button['title'];
				$link_target = $button['target'] ? $button['target'] : '_self';
				?>
				<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
		<?php endif; ?>
		</div>
	</div>
</div>
