<?php
/**
 * Block: M09 - Portfolio Introduction
 *
 * @used:
 *  - Gutenberg
 *
 * @package Jafar
 */

$project_url = get_field( 'm09_project_url' );
$intro       = get_field( 'm09_introduction' );
?>

<div class="m09 mt mb module block-element">
	<div class="container container">	
		<div class="m09__grid">
			<div class="m09__grid__details">
				<?php if ( $project_url ) : ?>
					<a class="button" href="<?php echo esc_url( $project_url ); ?>" target="_blank"><?php echo esc_html__( 'View Project', 'jafar' ); ?></a>
				<?php endif; ?>
			</div>

			<div class="m09__grid__introduction">
				<?php if ( $intro ) : ?>
					<h3><?php echo esc_html( $intro ); ?></h3>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
