<?php
/**
 * Block: GM01 - Desktop Menu
 *
 * @used:
 *  - header.php
 *
 * @package Jafar
 */

$instagram_url = get_field( 'instagram_url', 'option' );
$github_url    = get_field( 'github_url', 'option' );
$linkedin_url  = get_field( 'linkedin_url', 'option' );
?>

<header class="gm01">
	<div class="container gm01__grid">
	<div class="mobile-whitespace"></div>
	<a class="gm01__grid__logo logo" href="<?php echo esc_url( get_site_url() ); ?>"> 
		<h2><?php echo esc_html( 'Jafar.' ); ?></h2>
	</a>

	<nav class="gm01__grid__menu">
		<?php
			wp_nav_menu(
				array(
					'menu'       => 'primary',
					'container'  => 'ul',
					'menu_class' => 'nav__links',
					'link_after' => '<div class="dot-stretching"></div>',
				)
			);
			?>
	</nav>

	<div class="gm01__grid__right nav-right">
		<div class="hamburger">
			<div class="bar1"></div>
			<div class="bar2"></div>
			<div class="bar3"></div>
		</div>  
			<?php if ( $instagram_url ) { ?>
				<a href="<?php echo esc_url( $instagram_url ); ?>" rel="noopener" target="_blank" class='nav-right__link' aria-label="Instagram">
					<?php get_template_part( 'assets/img/inline', 'instagram.svg' ); ?>
				</a>
			<?php } ?>
			<?php if ( $github_url ) { ?>
				<a href="<?php echo esc_url( $github_url ); ?>" rel="noopener" target="_blank" class='nav-right__link' aria-label="Github">
				<?php get_template_part( 'assets/img/inline', 'github.svg' ); ?>
				</a>
			<?php } ?>
			<?php if ( get_field( $linkedin_url ) ) { ?>
				<a href="<?php echo esc_url( $linkedin_url ); ?>" rel="noopener" target="_blank" class='nav-right__link' aria-label="LinkedIn">
				<?php get_template_part( 'assets/img/inline', 'linkedin.svg' ); ?>
				</a>
			<?php } ?>

		</div>
	</div>
</header>
