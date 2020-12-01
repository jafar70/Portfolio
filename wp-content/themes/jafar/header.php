<?php
/**
 * Header
 *
 *  @used:
 *  - page.php
 *
 * @package Jafar
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="UTF-8">
	<meta name="theme-color" content="#1449e9">
	<meta name="msapplication-navbutton-color" content="#1449e9">
	<meta name="apple-mobile-web-app-status-bar-style" content="#1449e9">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body id='body' <?php body_class(); ?>>
	<main id="home">
		<?php get_template_part( 'global-modules/gm03', 'loader' ); ?>
		<?php get_template_part( 'global-modules/gm01', 'desktop-menu' ); ?>
		<?php get_template_part( 'global-modules/gm02', 'mobile-menu' ); ?>
