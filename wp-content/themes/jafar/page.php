<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Jafar
 */

get_header();
?>

	<div class="container">
		<div id="page-title">
			<h2 class="text-left"><?php echo esc_html( get_the_title() . '' ); ?></h2>
		</div>

		<div class="mb-40">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					the_content();
			endwhile; else :
				?>
			<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
		</div>

	</div>

<?php
get_footer();
