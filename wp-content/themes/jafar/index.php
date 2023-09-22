<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Jafar
 */

get_header();
?>

	<div class="container text-center">
		<div id="page-title">
			<h2 class="text-left"><?php the_title(); ?>. </h2>
		</div>
	</div>

	<div class="container mb-40">
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				the_content();
			endwhile;
			else :
				?>
				<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
	</div>

<?php
get_footer();
