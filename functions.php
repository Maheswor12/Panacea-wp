<?php
/**
 * panaceaedu functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package panaceaedu
 */

if ( ! function_exists( 'panacea_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function panacea_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on panaceaedu, use a find and replace
		 * to change 'panacea' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'panacea', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'panacea' ),
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
		add_theme_support( 'custom-background', apply_filters( 'panacea_custom_background_args', array(
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
add_action( 'after_setup_theme', 'panacea_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function panacea_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'panacea_content_width', 640 );
}
add_action( 'after_setup_theme', 'panacea_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function panacea_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'panacea' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'panacea' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'panacea_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function panacea_scripts() {
	wp_enqueue_style( 'panacea-style', get_stylesheet_uri() );

	wp_enqueue_style('bootstrap',get_template_directory_uri() . '/css/bootstrap.css');

	wp_enqueue_style('use_fontawesome', "https://use.fontawesome.com/releases/v5.6.3/css/all.css");

	wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/font/flaticon.css');

	wp_enqueue_style( 'light', get_template_directory_uri() . '/css/lightgallery.css');

	wp_enqueue_style( 'light-slider', get_template_directory_uri() . '/css/lightslider.min.css');

	wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/custom.css');



	wp_enqueue_script( 'panacea-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'panacea-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script('jquery', "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js");

	wp_enqueue_script('pooper', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js");

	wp_enqueue_script('cdn-ligt',"https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js");
	
	wp_enqueue_script( 'light-gallery', get_template_directory_uri() . '/js/lightgallery-all.min.js', array(), '20151215', true );

	wp_enqueue_script( 'light-slider', get_template_directory_uri() . '/js/lightslider.min.js', array(), '20151215', true );

	wp_enqueue_script( 'light-thumb', get_template_directory_uri() . '/js/jquery.mousewheel.min.js', array(), '20151215', true );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/js/bootstrap.js' );

	wp_enqueue_script( 'cutomjs', get_template_directory_uri() . '/js/custom.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'panacea_scripts' );

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

require get_template_directory().'/codestar-framework/codestar-framework-1.0.2/cs-framework.php';
//require get_template_directory().'/plugin/maheshcodestar.php';


add_action( 'init', 'codex_new_init' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_new_init() {
	$labels = array(
		'name'               => _x( 'news', 'post type general name', 'panacea' ),
		'singular_name'      => _x( 'news', 'post type singular name', 'panacea' ),
		'menu_name'          => _x( 'Newss', 'admin menu', 'panacea' ),
		'name_admin_bar'     => _x( 'news', 'add news on admin bar', 'panacea' ),
		'add_news'            => _x( 'Add news', 'news', 'panacea' ),
		'add_news_item'       => __( 'Add news news', 'panacea' ),
		'news_item'           => __( 'news news', 'panacea' ),
		'edit_item'          => __( 'Edit news', 'panacea' ),
		'view_item'          => __( 'View news', 'panacea' ),
		'all_items'          => __( 'All newss', 'panacea' ),
		'search_items'       => __( 'Search newss', 'panacea' ),
		'parent_item_colon'  => __( 'Parent newss:', 'panacea' ),
		'not_found'          => __( 'No newss found.', 'panacea' ),
		'not_found_in_trash' => __( 'No newss found in Trash.', 'panacea' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'panacea' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'menu_icon'=>'dashicons-format-aside',
		'rewrite'            => array( 'slug' => 'news' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'news', $args );
}

// for testimonials
add_action( 'init', 'codex_testimonials_init' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_testimonials_init() {
	$labels = array(
		'name'               => _x( 'Testimonials', 'post type general name', 'panacea' ),
		'singular_name'      => _x( 'Testimonial', 'post type singular name', 'panacea' ),
		'menu_name'          => _x( 'Testimonials', 'admin menu', 'panacea' ),
		'name_admin_bar'     => _x( 'Testimonial', 'add Testimonial on admin bar', 'panacea' ),
		'add_Testimonial'            => _x( 'Add Testimonial', 'Testimonial', 'panacea' ),
		'add_Testimonial_item'       => __( 'Add Testimonial Testimonial', 'panacea' ),
		'Testimonial_item'           => __( 'Testimonial Testimonial', 'panacea' ),
		'edit_item'          => __( 'Edit Testimonial', 'panacea' ),
		'view_item'          => __( 'View Testimonial', 'panacea' ),
		'all_items'          => __( 'All Testimonials', 'panacea' ),
		'search_items'       => __( 'Search Testimonials', 'panacea' ),
		'parent_item_colon'  => __( 'Parent Testimonials:', 'panacea' ),
		'not_found'          => __( 'No Testimonials found.', 'panacea' ),
		'not_found_in_trash' => __( 'No Testimonials found in Trash.', 'panacea' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'panacea' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'menu_icon'=>'dashicons-admin-users',
		'rewrite'            => array( 'slug' => 'Testimonial' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'Testimonial', $args );
}


// for Gallery
add_action( 'init', 'gallery' );
function gallery() {
	$labels = array(
		'name'               => _x( 'gallerys', 'post type general name', 'panacea' ),
		'singular_name'      => _x( 'gallery', 'post type singular name', 'panacea' ),
		'menu_name'          => _x( 'Gallerys', 'admin menu', 'panacea' ),
		'name_admin_bar'     => _x( 'gallery', 'add new on admin bar', 'panacea' ),
		'add_new'            => _x( 'Add New', 'gallery', 'panacea' ),
		'add_new_item'       => __( 'Add New gallery', 'panacea' ),
		'new_item'           => __( 'New gallery', 'panacea' ),
		'edit_item'          => __( 'Edit gallery', 'panacea' ),
		'view_item'          => __( 'View gallery', 'panacea' ),
		'all_items'          => __( 'All gallerys', 'panacea' ),
		'search_items'       => __( 'Search gallerys', 'panacea' ),
		'parent_item_colon'  => __( 'Parent gallerys:', 'panacea' ),
		'not_found'          => __( 'No gallerys found.', 'panacea' ),
		'not_found_in_trash' => __( 'No gallerys found in Trash.', 'panacea' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'panacea' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'menu_icon'=>'dashicons-images-alt2',
		'rewrite'            => array( 'slug' => 'gallery' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'gallery', $args );
}


// for notice
add_action( 'init', 'notice' );
function notice() {
	$labels = array(
		'name'               => _x( 'notices', 'post type general name', 'panacea' ),
		'singular_name'      => _x( 'notice', 'post type singular name', 'panacea' ),
		'menu_name'          => _x( 'Notices', 'admin menu', 'panacea' ),
		'name_admin_bar'     => _x( 'notice', 'add new on admin bar', 'panacea' ),
		'add_new'            => _x( 'Add New', 'notice', 'panacea' ),
		'add_new_item'       => __( 'Add New notice', 'panacea' ),
		'new_item'           => __( 'New notice', 'panacea' ),
		'edit_item'          => __( 'Edit notice', 'panacea' ),
		'view_item'          => __( 'View notice', 'panacea' ),
		'all_items'          => __( 'All notices', 'panacea' ),
		'search_items'       => __( 'Search notices', 'panacea' ),
		'parent_item_colon'  => __( 'Parent notices:', 'panacea' ),
		'not_found'          => __( 'No notices found.', 'panacea' ),
		'not_found_in_trash' => __( 'No notices found in Trash.', 'panacea' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'panacea' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'menu_icon'=>'dashicons-media-text',
		'rewrite'            => array( 'slug' => 'notice' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'notice', $args );
}


// for latest article
add_action( 'init', 'article' );
function article() {
	$labels = array(
		'name'               => _x( 'articles', 'post type general name', 'panacea' ),
		'singular_name'      => _x( 'article', 'post type singular name', 'panacea' ),
		'menu_name'          => _x( 'Articles', 'admin menu', 'panacea' ),
		'name_admin_bar'     => _x( 'article', 'add new on admin bar', 'panacea' ),
		'add_new'            => _x( 'Add New', 'article', 'panacea' ),
		'add_new_item'       => __( 'Add New article', 'panacea' ),
		'new_item'           => __( 'New article', 'panacea' ),
		'edit_item'          => __( 'Edit article', 'panacea' ),
		'view_item'          => __( 'View article', 'panacea' ),
		'all_items'          => __( 'All articles', 'panacea' ),
		'search_items'       => __( 'Search articles', 'panacea' ),
		'parent_item_colon'  => __( 'Parent articles:', 'panacea' ),
		'not_found'          => __( 'No articles found.', 'panacea' ),
		'not_found_in_trash' => __( 'No articles found in Trash.', 'panacea' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'panacea' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'menu_icon'=>'dashicons-media-text',
		'rewrite'            => array( 'slug' => 'article' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'article', $args );
}


add_action( 'init', 'University' );
function University() {
	$labels = array(
		'name'               => _x( 'Universities', 'post type general name', 'panacea' ),
		'singular_name'      => _x( 'University', 'post type singular name', 'panacea' ),
		'menu_name'          => _x( 'Universities', 'admin menu', 'panacea' ),
		'name_admin_bar'     => _x( 'University', 'add new on admin bar', 'panacea' ),
		'add_new'            => _x( 'Add New', 'University', 'panacea' ),
		'add_new_item'       => __( 'Add New University', 'panacea' ),
		'new_item'           => __( 'New University', 'panacea' ),
		'edit_item'          => __( 'Edit University', 'panacea' ),
		'view_item'          => __( 'View University', 'panacea' ),
		'all_items'          => __( 'All Universities', 'panacea' ),
		'search_items'       => __( 'Search Universities', 'panacea' ),
		'parent_item_colon'  => __( 'Parent Universities:', 'panacea' ),
		'not_found'          => __( 'No Universities found.', 'panacea' ),
		'not_found_in_trash' => __( 'No Universities found in Trash.', 'panacea' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'panacea' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'menu_icon'=>'dashicons-welcome-learn-more',
		'rewrite'            => array( 'slug' => 'university' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'university', $args );
}

// for excerpt
function get_excerpt( $count ) {
	$permalink = get_permalink($post->ID);
	$excerpt = get_the_content();
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, $count);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = '<p>'.$excerpt.'... <a href="'.$permalink.'">Read More</a></p>';
	return $excerpt;
	}