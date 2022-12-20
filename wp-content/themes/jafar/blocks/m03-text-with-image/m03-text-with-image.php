<?php
/**
 * Block: M03 - Text with Image
 *
 * @used:
 *  - page-home.php
 *
 * @package Jafar
 */

$profile_image = get_field( 'personal_image' );
$text          = get_field( 'about_me_text' );
$instagram_url = get_field( 'instagram_url', 'option' );
$github_url    = get_field( 'github_url', 'option' );
$linkedin_url  = get_field( 'linkedin_url', 'option' );
$twitter_url   = get_field( 'twitter_url', 'option' );
$cv_url        = get_field( 'cv_file', 'option' );
?>
<div class="m03 pt pb break-out">
	<div class="container">
		<div class="m03__grid">
			<div class="m03__grid__img">
			<?php if ( $profile_image ) : ?>
				<?php theme__display_image( $profile_image, 'inline', 'large' ); ?>
			<?php endif; ?>

			</div>

			<div class="m03__grid__text">
				<?php echo wp_kses_post( $text ); ?>
				<div class="social-buttons mt-20">
					<?php if ( $instagram_url ) { ?>
						<a href="<?php echo esc_url( $instagram_url ); ?>" rel="noopener" target="_blank" aria-label="Instagram">
							<?php get_template_part( 'assets/img/inline', 'instagram.svg' ); ?>
						</a>
					<?php } ?>

					<?php if ( $github_url ) { ?>
						<a href="<?php echo esc_url( $github_url ); ?>" rel="noopener" target="_blank" aria-label="Github">
							<?php get_template_part( 'assets/img/inline', 'github.svg' ); ?>
						</a>
					<?php } ?>

					<?php if ( $linkedin_url ) { ?>
						<a href="<?php echo esc_url( $linkedin_url ); ?>" rel="noopener" target="_blank" aria-label="LinkedIn">
							<?php get_template_part( 'assets/img/inline', 'linkedin.svg' ); ?>
						</a>
					<?php } ?>

					<?php if ( $twitter_url ) { ?>
						<a href="<?php echo esc_url( $twitter_url ); ?>" rel="noopener" target="_blank" aria-label="Twitter">
							<?php get_template_part( 'assets/img/inline', 'twitter.svg' ); ?>
						</a>
					<?php } ?>  
				</div>
				<?php if ( $cv_url ) { ?>
					<a href="<?php echo esc_url( $cv_url ); ?>" class="button" rel="noopener" target="_blank" aria-label="CV">
						<?php echo esc_html( 'Download CV' ); ?>
					</a>
				<?php } ?>  
			</div>
		</div>
	</div>
</div>
