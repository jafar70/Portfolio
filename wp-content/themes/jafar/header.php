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
	<meta name="theme-color" content="#000000">
	<meta name="msapplication-navbutton-color" content="#000000">
	<meta name="apple-mobile-web-app-status-bar-style" content="#000000">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php bloginfo( 'name' ); ?> | <?php is_front_page() ? bloginfo( 'description' ) : wp_title( '' ); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700;800&family=Poppins:wght@500&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body id='body' <?php body_class(); ?>>
	<?php get_template_part( 'global-modules/gm01', 'desktop-menu' ); ?>
	<?php get_template_part( 'global-modules/gm02', 'mobile-menu' ); ?>
