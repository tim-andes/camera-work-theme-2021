<?php
/**
 * The camera-work-theme-2021 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package camera-work-theme-2021
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'camera_work_theme_2021_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function camera_work_theme_2021_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on camera-work-theme-2021, use a find and replace
		 * to change 'camera-work-theme-2021' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'camera-work-theme-2021', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'camera-work-theme-2021' ),
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
				'camera_work_theme_2021_custom_background_args',
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
add_action( 'after_setup_theme', 'camera_work_theme_2021_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function camera_work_theme_2021_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'camera_work_theme_2021_content_width', 640 );
}
add_action( 'after_setup_theme', 'camera_work_theme_2021_content_width', 0 );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function camera_work_theme_2021_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'camera-work-theme-2021' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'camera-work-theme-2021' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'camera_work_theme_2021_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function camera_work_theme_2021_scripts() {
	// add Tailwind CSS
	wp_enqueue_style( 'camera-work-theme-2021-style', 'https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css', array(), _S_VERSION );

	// add style.css - TA
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
	
	wp_style_add_data( 'camera-work-theme-2021-style', 'rtl', 'replace' );

	wp_enqueue_script( 'camera-work-theme-2021-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'camera_work_theme_2021_scripts' );

/** 
 * Gallery Functions
 * 
 * Front End: Title
 * Back End: Upload field, Title
 * 
*/

/**
 * Create Post Type - Photographs
 */
function create_photograph_post_type() {
	register_post_type('photographs', // this generic name may conflict with other plugins / themes
	// CPT Options
	array(
		'labels' => array(
			'name' => __('Photographs'),
			'singular name' => __('Photograph')
		),
		'public' => true,
		'has_archive' => true,
		'show_in_rest' => true,
		'description' => 'This the custom post type for photographs that will feed into the gallery.',
		'menu_icon' => 'dashicons-format-gallery',
	)
	);
}
add_action('init', 'create_photograph_post_type');

function custom_photography_post_type() {
	// Set UI Labels
	$labels = array(
		'name' 				 => _x('Photographs', 'Post Type General Name', 'camera-work-theme-2021'),
		'singular_name' 	 => _x('Photograph', 'Post Type Singular Name', 'camera-work-theme-2021'),
		'menu_name' 		 => __('Photographs', 'camera-work-theme-2021'),
		'all_items' 		 => __('All Photographs', 'camera-work-theme-2021'),
		'view_item' 		 => __('View Photograph', 'camera-work-theme-2021'),
		'add_new_item' 		 => __('Add New Photograph', 'camera-work-theme-2021'),
		'add_new' 			 => __('Add New', 'camera-work-theme-2021'),
		'edit_item' 		 => __('Edit Photograph', 'camera-work-theme-2021'),
		'update_item' 		 => __('Update Photograph', 'camera-work-theme-2021'),
		'search_items' 		 => __('Search Photographs', 'camera-work-theme-2021'),
		'not_found' 		 => __('Photograph Not Found', 'camera-work-theme-2021'),
		'not_found_in_trash' => __('Photograph Not Found in Trash', 'camera-work-theme-2021'),
	);

	// Set other options for Custom Post Type
	$args = array(
		'label' 	  => __('photographs', 'camera-work-theme-2021'),
		'description' => __('Photographs for the gallery.', 'camera-work-theme-2021'),
		'labels' 	  => $labels,
		// Features this CPT supports in Post Editor
		'supports' 			  => array('title', 'thumbnail', 'revisions', 'custom-fields'),
		'taxonomies' 		  => array('tags'),
		'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' 		  => true,
	);
	// Registering your Custom Post Type
    register_post_type('photographs', $args);
}
add_action( 'init', 'custom_photography_post_type', 0 );

// Remove Editor from Photography post
add_action('init', 'remove_editor_from_photography_post');
function remove_editor_from_photography_post() {
	remove_post_type_support('photographs', 'editor');
}

/** 
 * END Gallery Functions
*/

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

