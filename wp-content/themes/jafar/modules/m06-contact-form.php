<?php
/**
 * Block: M06 - Contact Form
 *
 * @used:
 *  - page-contact.php
 *
 * @package Jafar
 */

$heading = get_field( 'm05_title' );
$subtext = get_field( 'm05_subtext' );
$form_id = get_field( 'm05_form_id' );
?>

<div class="m06">
	<div class="container">
		<div class="m06__title">
			<h1 class="m06__title__text banner-title"><?php echo esc_html( $heading . '.' ); ?></h1>
		</div>

		<div class="m06__grid">
			<div class="m06__grid__text">
				<?php echo wp_kses_post( $subtext ); ?>

			</div>
			<div class="m06__grid__form">
				<?php echo do_shortcode( '[gravityform id="' . $form_id . '" title="false" description="false" ajax="true"]' ); ?>
			</div>
		</div>


	</div>
</div>
