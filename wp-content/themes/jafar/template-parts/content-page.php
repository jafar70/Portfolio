<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Jafar
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content container container--small">
		<?php
		the_content();
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
