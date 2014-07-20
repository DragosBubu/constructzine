<?php
/*
*	Includes Files
*/
require_once ( 'includes/custom-functions.php' );
require_once ( 'includes/custom-widgets.php' );
require_once ( 'includes/metaboxes/example-functions.php' );
require_once ( 'includes/customizer.php' );

/*
*	Content Width
*/
if ( ! isset( $content_width ) ) $content_width = 634;

/*
*	Constructzine Style
*/
function constructzine_style() {
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1.0', false );
	wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css', array(), '1.0' );
	if ( is_singular() ) wp_enqueue_script( "comment-reply" );
}

add_action( 'wp_enqueue_scripts', 'constructzine_style' );

/*
*	WP Enqueue Script Constructzine
*/
function constructzine_script() {
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'carouFredSel', get_template_directory_uri() . '/js/jquery.carouFredSel-6.2.1-packed.js', array( 'jquery' ), '6.2.1', true );
    wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'masonry', get_template_directory_uri() . '/js/jquery.masonry.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'constructzine_script' );

/*
*	Post Thumbnails
*/
add_theme_support( 'post-thumbnails' );

/*
*	Automatic Feed Links
*/
add_theme_support( 'automatic-feed-links' );

/*
*	Custom Header
*/
$args = array(
	'default-image'          => get_template_directory_uri() . '/images/header.png',
	'random-default'         => false,
	'width'                  => 1903,
	'height'                 => 720,
	'flex-height'            => false,
	'flex-width'             => false,
	'default-text-color'     => '',
	'header-text'            => false,
	'uploads'                => true,
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $args );

/*
*	Navigation Menu
*/
function navigation_menu() {

	$locations = array(
		'top-menu' => __( 'Top Header', 'ti' ),
	);
	register_nav_menus( $locations );

}

add_action( 'init', 'navigation_menu' );

/*
*	General Sidebar
*/
function general_sidebar() {

	$args = array(
		'id'            => 'general_sidebar',
		'name'          => __( 'General Sidebar', 'ti' ),
		'description'   => __( 'This sidebar will appear in blog page.', 'ti' ),
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div>',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );

}

add_action( 'widgets_init', 'general_sidebar' );

/*
*	Custom Post Type: Services
*/
function custom_post_type_services() {

	$labels = array(
		'name'                => _x( 'Services', 'Post Type General Name', 'ti' ),
		'singular_name'       => _x( 'Service', 'Post Type Singular Name', 'ti' ),
		'menu_name'           => __( 'Services', 'ti' ),
		'parent_item_colon'   => __( 'Parent Service:', 'ti' ),
		'all_items'           => __( 'All Services', 'ti' ),
		'view_item'           => __( 'View Service', 'ti' ),
		'add_new_item'        => __( 'Add New Service', 'ti' ),
		'add_new'             => __( 'Add New', 'ti' ),
		'edit_item'           => __( 'Edit Service', 'ti' ),
		'update_item'         => __( 'Update Service', 'ti' ),
		'search_items'        => __( 'Search Service', 'ti' ),
		'not_found'           => __( 'Not found', 'ti' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'ti' ),
	);
	$args = array(
		'label'               => __( 'services', 'ti' ),
		'description'         => __( 'Add the content about your services', 'ti' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'custom-fields', ),
		'taxonomies'          => array(),
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
		'capability_type'     => 'page',
		'menu_icon'			  => 'dashicons-portfolio'
	);
	register_post_type( 'services', $args );

}

add_action( 'init', 'custom_post_type_services', 0 );

/*
*	Custom Post Type: Testimonials
*/
function custom_post_type_testimonials() {

	$labels = array(
		'name'                => _x( 'Testimonials', 'Post Type General Name', 'ti' ),
		'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'ti' ),
		'menu_name'           => __( 'Testimonial', 'ti' ),
		'parent_item_colon'   => __( 'Parent Testimonial:', 'ti' ),
		'all_items'           => __( 'All Testimonials', 'ti' ),
		'view_item'           => __( 'View Testimonial', 'ti' ),
		'add_new_item'        => __( 'Add New Testimonial', 'ti' ),
		'add_new'             => __( 'Add New', 'ti' ),
		'edit_item'           => __( 'Edit Testimonial', 'ti' ),
		'update_item'         => __( 'Update Testimonial', 'ti' ),
		'search_items'        => __( 'Search Testimonial', 'ti' ),
		'not_found'           => __( 'Not found', 'ti' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'ti' ),
	);
	$args = array(
		'label'               => __( 'testimonials', 'ti' ),
		'description'         => __( 'Add the content about your services', 'ti' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'custom-fields', ),
		'taxonomies'          => array(),
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
		'capability_type'     => 'page',
		'menu_icon'			  => 'dashicons-admin-users'
	);
	register_post_type( 'testimonials', $args );

}

add_action( 'init', 'custom_post_type_testimonials', 0 );