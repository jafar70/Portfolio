<?php
/**
 * Block: GM05 - Footer CTA (Call to action)
 *
 * @used:
 *  - footer.php
 * @package Jafar
 */

$heading   = get_field( 'gm05_heading', 'option' );
$paragraph = get_field( 'gm05_paragraph', 'option' );
$button    = get_field( 'gm05_button', 'option' );
?>

<div class="gm05 pt pb">
	<div class='container'>
		<div class="gm05__text">
			<?php if ( $heading ) : ?>
			<h3 class="gm05__text__heading beta mb--em font-bold"><?php echo esc_html( $heading ); ?></h3>
			<?php endif; ?>

			<?php if ( $paragraph ) : ?>
			<p class="gm05__text__paragraph mb--em"><?php echo esc_html( $paragraph ); ?></p>
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
