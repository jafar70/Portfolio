<?php
/**
 * Jafar functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Jafar
 */

if ( ! function_exists( 'jafar_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function jafar_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Jafar, use a find and replace
		 * to change 'jafar' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'jafar', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'jafar' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		add_theme_support( 'editor-styles' );
		add_editor_style( 'style-editor.css' );

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'jafar_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'jafar_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function jafar_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'jafar_content_width', 640 );
}
add_action( 'after_setup_theme', 'jafar_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function jafar_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'jafar' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'jafar' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'jafar_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function jafar_scripts() {
	wp_enqueue_style( 'jafar-style', get_template_directory_uri() . '/style.min.css' );
	wp_enqueue_script( 'mixitup', 'https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js', array( 'jquery' ), '3.3.1', true );
	wp_enqueue_script( 'vanilla-lazyload', 'https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/17.1.0/lazyload.min.js',array( 'jquery' ), '20151215', true );
	wp_enqueue_script( 'jafar-vendor-scripts', get_template_directory_uri() . '/assets/js/vendor.min.js', array( 'jquery' ), '20181215', true );
	wp_enqueue_script( 'jafar-scripts', get_template_directory_uri() . '/assets/js/custom.min.js', array( 'jquery' ), '20151215', true );
	wp_enqueue_script( 'jafar-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'jafar-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'jafar_scripts' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * ACF Blocks.
 */
require get_template_directory() . '/inc/acf-blocks.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Custom Functions.
 */
require get_template_directory() . '/functions/functions-image.php';

/**
 * Creates Portfolio Custom Post Type.
 */
$singular_name   = 'Portfolio';
$collective_name = 'Portfolio';
$post_type_name  = str_replace( ' ', '-', strtolower( $singular_name ) ); // try to keep the cpt singular. e.g. job, person, case-study
$slug            = str_replace( ' ', '-', strtolower( $collective_name ) );

register_post_type(
	$post_type_name,
	array(
		'labels'          => array(
			'name'               => _x( $collective_name, 'post type general name' ),
			'singular_name'      => _x( $singular_name, 'post type singular name' ),
			'add_new'            => _x( 'Add New ' . $singular_name, 'book' ),
			'add_new_item'       => __( 'Add New ' . $singular_name ),
			'edit_item'          => __( 'Edit ' . $singular_name ),
			'new_item'           => __( 'Add New ' . $collective_name ),
			'all_items'          => __( 'View ' . $collective_name ),
			'view_item'          => __( 'View ' . $collective_name ),
			'search_items'       => __( 'Search ' . $collective_name ),
			'not_found'          => __( 'No ' . $collective_name . ' found' ),
			'not_found_in_trash' => __( 'No ' . $collective_name . ' found in Trash' ),
			'parent_item_colon'  => '',
			'menu_name'          => $collective_name,
		),
		'public'          => true,
		'show_in_rest'    => true,
		'show_ui'         => true, // show the admin UI for the CPT even when public is false
		'query_var'       => true,
		'rewrite'         => array(
			'slug'       => $slug,
			'with_front' => false,
		),
		'capability_type' => 'post',
		'has_archive'     => false,
		'hierarchical'    => false,
		'menu_position'   => null,
		'menu_icon'       => 'dashicons-art',
		'supports'        => array(
			'title',
			'editor',
			'revisions',
			'thumbnail',
			'page-attributes',
		),
	)
);

$taxonomy_singular_name   = 'Portfolio Category';
$taxonomy_collective_name = 'Portfolio Categories';
$taxonomy_name            = str_replace( ' ', '-', strtolower( $taxonomy_singular_name ) ); // try to keep the cpt singular. e.g. job, person, case-study

  // Sectors
register_taxonomy(
	$taxonomy_name,
	$post_type_name,
	array(
		'hierarchical'       => true,
		'show_admin_column'  => true,
		'labels'             => array(
			'name'              => _x( $taxonomy_collective_name, 'taxonomy general name' ),
			'singular_name'     => _x( $taxonomy_singular_name, 'taxonomy singular name' ),
			'search_items'      => __( 'Search ' . $taxonomy_collective_name ),
			'all_items'         => __( 'All ' . $taxonomy_collective_name ),
			'parent_item'       => __( 'Parent Team' ),
			'parent_item_colon' => __( 'Parent Location:' ),
			'edit_item'         => __( 'Edit ' . $taxonomy_singular_name ),
			'update_item'       => __( 'Update ' . $taxonomy_singular_name ),
			'add_new_item'      => __( 'Add New ' . $taxonomy_singular_name ),
			'new_item_name'     => __( 'New ' . $taxonomy_singular_name ),
			'menu_name'         => __( $taxonomy_collective_name ),
		),
		'rewrite'            => array(
			'slug'         => $taxonomy_name, // Controls the base slug that will display before each term
			'with_front'   => false, // Don't display the category base before "/locations/"
			'hierarchical' => false, // This will allow URL's like "/locations/boston/cambridge/"
		),
		'show_ui'            => true,
		'show_in_quick_edit' => false,
		'meta_box_cb'        => false,
		'show_in_rest'       => true,
		'public'             => false,
	)
);

/*
------------------------------------*\
	ACF Pro options page
\*------------------------------------
*/

if ( function_exists( 'acf_add_options_page' ) ) {
	  acf_add_options_page();
}

/**
 * Allow SVG Files Upload $mimes
 *
 * @param array $mimes the string to source SVG.
 */
function cc_mime_types( $mimes ) {
	  $mimes['svg'] = 'image/svg+xml';
	  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

add_filter(
	'webpc_htaccess_rules',
	function( $rules, $path ) {
		return '';
	},
	10,
	2
);


// Add custom validation to form
add_filter( 'gform_field_validation_2_4', 'validate_input_2_4', 10, 4 );
function validate_input_2_4( $result, $value, $form, $field ) {
	$nourl_pattern = '(http|https)';
	if ( preg_match( $nourl_pattern, $value ) ) {
		$result['is_valid'] = false;
		$result['message']  = 'Message can not contain website addresses.';
	}
	return $result;
}
