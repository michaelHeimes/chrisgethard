<?php
/**
 * Chris Gethard functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Chris_Gethard
 */

if ( ! function_exists( 'chris_gethard_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function chris_gethard_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Chris Gethard, use a find and replace
		 * to change 'chris-gethard' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'chris-gethard', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'chris-gethard' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'chris_gethard_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'chris_gethard_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function chris_gethard_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'chris_gethard_content_width', 640 );
}
add_action( 'after_setup_theme', 'chris_gethard_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function chris_gethard_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'chris-gethard' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'chris-gethard' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'chris_gethard_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function chris_gethard_scripts() {
	wp_enqueue_style( 'chris-gethard-style', get_stylesheet_uri() );

	wp_enqueue_script( 'chris-gethard-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'chris-gethard-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	
	wp_enqueue_script( 'chris-gethard-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '20151215', true );
	
	wp_enqueue_script( 'jquery-ui-accordion' );
		
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'chris_gethard_scripts' );

/**
 * Enqueue fonts.
 */
function wpb_add_google_fonts() {
wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Passion+One:700|PT+Sans+Narrow:400,700|Baloo+Bhaina|Delius', false ); 
}
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

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

// Custom Image Sizes
add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
add_image_size( 'video-thumb', 588, 331, true );
add_image_size( 'cube-img', 1000, 1000, true );
add_image_size( 'cube-img-2x', 2000, 2000, true );
add_image_size( 'merch-card', 400, 99999 );
add_image_size( 'merch-card-2x', 800, 99999, true );
}

// YouTube Embed Customizing
function wp_enqueue_scripts__youtube_api() {
    wp_enqueue_script( 'yt-player-api', '//www.youtube.com/player_api', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'wp_enqueue_scripts__youtube_api' );
function Oembed_youtube_no_title($html,$url,$args){
$url_string = parse_url($url, PHP_URL_QUERY);
parse_str($url_string, $id);
if (isset($id['v'])) {
return '<iframe width="'.$args['width'].'" height="'.$args['height'].'" src="https://www.youtube.com/embed/'.$id['v'].'?rel=0&amp;&showinfo=0;&autohide=0;&modestbranding=1&amp;&nologo=1&amp" frameborder="0" allowfullscreen></iframe>';
}
return $html;
}
add_filter('oembed_result','Oembed_youtube_no_title',10,3);

// Add ACF Options Page
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();	
}
