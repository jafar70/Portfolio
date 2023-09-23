<?php
/**
 * Block: M04 - Skills
 *
 * @used:
 *  - Gutenberg
 *
 * @package Jafar
 */

$subheading = get_field( 'm04_tag' );
$heading    = get_field( 'm04_title' );

?>
<div class="m04 pt pb mt mb module block-element">
	<div class="container text-center">
	<h2 class="m04__title">
		<?php echo esc_html( $heading ); ?>
	</h2>

	<p class="m04__tag">
		<?php echo esc_html( $subheading ); ?>
	</p>

	<?php if ( have_rows( 'technologies' ) ) : ?>
		<div class='m04__grid effect skills-grid'>
			<?php
			while ( have_rows( 'technologies' ) ) :
				the_row();

				$name  = get_sub_field( 'technology_name' );
				$image = get_sub_field( 'technology_image' );
				?>

				<div class="m04__grid__item">
					<div class="m04__card">
						<?php display_image( $image, 'inline', 'icon' ); ?>
						<h3><?php echo esc_html( $name ); ?></h3>
					</div>
				</div>
			<?php endwhile; ?> 
		</div>
	<?php endif; ?>

	</div>
</div>
