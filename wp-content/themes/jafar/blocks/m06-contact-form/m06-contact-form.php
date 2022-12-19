<?php
/**
 * Block: M06 - Contact Form
 *
 * @used:
 *  - page-contact.php
 *
 * @package Jafar
 */

$heading = get_field( 'm06_title' );
$subtext = get_field( 'm06_subtext' );
$form_id = get_field( 'm06_form_id' );
?>

<div class="m06 pb pt break-out">
	<div class="container">
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
