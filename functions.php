<?php
/**
 * En contraste fotografia functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package En_contraste_fotografia
 */

if ( ! defined( 'EN_CONTRASTE_FOTOGRAFIA_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'EN_CONTRASTE_FOTOGRAFIA_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function en_contraste_fotografia_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on En contraste fotografia, use a find and replace
		* to change 'en-contraste-fotografia' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'en-contraste-fotografia', get_template_directory() . '/languages' );

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
			'primary-menu'   => esc_html__( 'Primary', 'en-contraste-fotografia' ),
			'secondary-menu' => esc_html__( 'Secondary', 'en-contraste-fotografia' ),
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
			'en_contraste_fotografia_custom_background_args',
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
add_action( 'after_setup_theme', 'en_contraste_fotografia_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function en_contraste_fotografia_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'en_contraste_fotografia_content_width', 640 );
}
add_action( 'after_setup_theme', 'en_contraste_fotografia_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function en_contraste_fotografia_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'en-contraste-fotografia' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'en-contraste-fotografia' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'en_contraste_fotografia_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function en_contraste_fotografia_scripts() {
	// Styles.
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.5.0' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '5.8.0' );
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), EN_CONTRASTE_FOTOGRAFIA_VERSION );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '3.7.2' );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css', array(), EN_CONTRASTE_FOTOGRAFIA_VERSION );
	wp_enqueue_style( 'default', get_template_directory_uri() . '/assets/css/default.css', array(), EN_CONTRASTE_FOTOGRAFIA_VERSION );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), EN_CONTRASTE_FOTOGRAFIA_VERSION );
	wp_enqueue_style( 'en-contraste-fotografia-style', get_stylesheet_uri(), array(), EN_CONTRASTE_FOTOGRAFIA_VERSION );
	wp_style_add_data( 'en-contraste-fotografia-style', 'rtl', 'replace' );

	// Scripts.
	// wp_enqueue_script( 'modernizer', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.6.0.min.js', array(), '4.5.0', true );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '4.5.0', true );
	wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), EN_CONTRASTE_FOTOGRAFIA_VERSION, true );
	wp_enqueue_script( 'jquery-appear', get_template_directory_uri() . '/assets/js/jquery.appear.min.js', array(), EN_CONTRASTE_FOTOGRAFIA_VERSION, true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), EN_CONTRASTE_FOTOGRAFIA_VERSION, true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.js', array(), EN_CONTRASTE_FOTOGRAFIA_VERSION, true );
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array(), EN_CONTRASTE_FOTOGRAFIA_VERSION, true );
	wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array(), EN_CONTRASTE_FOTOGRAFIA_VERSION, true );
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', array(), EN_CONTRASTE_FOTOGRAFIA_VERSION, true );
	wp_enqueue_script( 'main-scripts', get_template_directory_uri() . '/assets/js/main.js', array(), EN_CONTRASTE_FOTOGRAFIA_VERSION, true );
	wp_enqueue_script( 'en-contraste-fotografia-navigation', get_template_directory_uri() . '/js/navigation.js', array(), EN_CONTRASTE_FOTOGRAFIA_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'en_contraste_fotografia_scripts' );

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

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
