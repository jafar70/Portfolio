<?php
/**
 * ACF Gutenberg Block Registration & Functions.
 *
 * @package Jafar_Theme
 */

/**
 * Register ACF Block Category.
 *
 * @param array  $categories our block categories.
 * @param object $post our post object.
 */
function block_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug'  => 'jafar-blocks',
				'title' => __( 'Jafar Blocks', 'jafar' ),
			),
		)
	);
}
add_filter( 'block_categories', 'block_category', 10, 2 );

/**
 * Register ACF Blocks.
*/
add_action( 'init', 'register_acf_blocks' );
function register_acf_blocks() {
	register_block_type( get_template_directory() . '/blocks/m01-home-banner' );
	register_block_type( get_template_directory() . '/blocks/m02-portfolio-items' );
	register_block_type( get_template_directory() . '/blocks/m03-text-with-image' );
	register_block_type( get_template_directory() . '/blocks/m04-skills' );
	register_block_type( get_template_directory() . '/blocks/m05-portfolio-feed' );
	register_block_type( get_template_directory() . '/blocks/m06-contact-form' );
	register_block_type( get_template_directory() . '/blocks/m07-cta' );
	register_block_type( get_template_directory() . '/blocks/m08-page-header' );
	register_block_type( get_template_directory() . '/blocks/m09-portfolio-introduction' );
	register_block_type( get_template_directory() . '/blocks/m10-portfolio-text' );
	register_block_type( get_template_directory() . '/blocks/m11-image' );
}


/**
 * Allowed theme block types.
 */
function allowed_block_types() {
	return array(
		'core/paragraph',
		'core/heading',
		'acf/m01-home-banner',
		'acf/m02-portfolio-items',
		'acf/m03-text-with-image',
		'acf/m04-skills',
		'acf/m05-portfolio-feed',
		'acf/m06-contact-form',
		'acf/m07-cta',
		'acf/m08-page-header',
		'acf/m09-portfolio-introduction',
		'acf/m10-portfolio-text',
		'acf/m11-image',
	);
}
add_filter( 'allowed_block_types', 'allowed_block_types' );
