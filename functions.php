<?php
/**
 * Nineteen Quirky functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Nineteen_Quirky
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'nineteen_quirky_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function nineteen_quirky_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Nineteen Quirky, use a find and replace
		 * to change 'nineteen-quirky' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'nineteen-quirky', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'nineteen-quirky' ),
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
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'nineteen_quirky_custom_background_args',
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
add_action( 'after_setup_theme', 'nineteen_quirky_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nineteen_quirky_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nineteen_quirky_content_width', 640 );
}
add_action( 'after_setup_theme', 'nineteen_quirky_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nineteen_quirky_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'nineteen-quirky' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'nineteen-quirky' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'nineteen_quirky_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function nineteen_quirky_scripts() {
	wp_enqueue_style( 'nineteen-quirky-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'nineteen-quirky-style', 'rtl', 'replace' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nineteen_quirky_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

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

// Remove notes (-51) category from homepage
// function exclude_category_home( $query ) {
// if ( $query->is_home ) {
// $query->set( 'cat', '-51' );
// }
// return $query;
// }

// Add support for custom colour pallette in Gutenberg.
add_theme_support( 'editor-color-palette', array(
	array(
		'name' => __( 'blue', 'themeLangDomain' ),
		'slug' => 'blue',
		'color' => '#01579B',
	),
	array(
		'name' => __( 'green', 'themeLangDomain' ),
		'slug' => 'green',
		'color' => '#345f41',
	),
	array(
		'name' => __( 'orange', 'themeLangDomain' ),
		'slug' => 'orange',
		'color' => '#ffa800',
	),
	array(
		'name' => __( 'red', 'themeLangDomain' ),
		'slug' => 'red',
		'color' => '#c1392b',
	),
	array(
		'name' => __( 'grey', 'themeLangDomain' ),
		'slug' => 'grey',
		'color' => '#333333',
	),
	array(
		'name' => __( 'white', 'themeLangDomain' ),
		'slug' => 'white',
		'color' => '#ffffff',
	),
) );

// Gutenberg custom stylesheet
add_theme_support('editor-styles');
add_editor_style( 'style-editor.css' );

add_filter( 'pre_get_posts', 'exclude_category_home' );

// Stop Google Fonts loading in Editor.
function deregister_google_font() {
    // deregister google font.
    wp_deregister_style( 'wp-editor-font' );
    // reregister blank file so dependency exists.
    wp_register_style( 'wp-editor-font', get_stylesheet_directory() . '/an-empty.css' );
}
add_action( 'admin_enqueue_scripts', 'deregister_google_font', 11 );

// Add widget area to Footer
function register_widget_areas() {

  register_sidebar( array(
    'name'          => 'Footer area one',
    'id'            => 'footer_area_one',
    'description'   => 'This widget area discription',
    'before_widget' => '<section class="footer-area footer-area-one">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>',
  ));

  register_sidebar( array(
    'name'          => 'Footer area two',
    'id'            => 'footer_area_two',
    'description'   => 'This widget area discription',
    'before_widget' => '<section class="footer-area footer-area-two">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>',
  ));

	register_sidebar( array(
    'name'          => 'Footer area three',
    'id'            => 'footer_area_three',
    'description'   => 'This widget area discription',
    'before_widget' => '<section class="footer-area footer-area-two">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>',
  ));

}

add_action( 'widgets_init', 'register_widget_areas' );

// Work out reading time for posts
$mycontent = $post->post_content; // wordpress users only
$word = str_word_count(strip_tags($mycontent));
$m = floor($word / 200);
$est = $m . ' min' . ($m == 1 ? '' : 's') . ' to read';
