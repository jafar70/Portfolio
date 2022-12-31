<?php
/**
 * Block: M03 - Text with Image
 *
 * @used:
 *  - Gutenberg
 *
 * @package Jafar
 */

$profile_image     = get_field( 'personal_image' );
$text              = get_field( 'about_me_text' );
$text_position     = get_field( 'text_position' );
$hide_social_links = get_field( 'hide_social_links' );
$cta_link          = get_field( 'text_cta' );
$instagram_url     = get_field( 'instagram_url', 'option' );
$github_url        = get_field( 'github_url', 'option' );
$linkedin_url      = get_field( 'linkedin_url', 'option' );
$twitter_url       = get_field( 'twitter_url', 'option' );
?>
<div class="m03 pt pb mt mb module block-element">
	<div class="container">
		<div class="m03__grid <?php echo ( 'left' === $text_position ) ? 'm03__grid--rev' : false; ?>">
			<div class="m03__grid__img">
			<?php if ( $profile_image ) : ?>
				<?php theme__display_image( $profile_image, 'inline', 'lg' ); ?>
			<?php endif; ?>

			</div>

			<div class="m03__grid__text">
				<?php echo wp_kses_post( $text ); ?>

				<?php if ( ! $hide_social_links ) : ?>
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
				<?php endif; ?>
				<?php
				if ( $cta_link ) :
					$link_url    = $cta_link['url'];
					$link_title  = $cta_link['title'];
					$link_target = $cta_link['target'] ? $cta_link['target'] : '_self';
					?>
					<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
