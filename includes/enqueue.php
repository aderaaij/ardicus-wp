<?php
/**
 * @package WordPress
 * @subpackage Ardicus
 * @since Ardicus-WP 1.0
 *
 * Register, Enqueue and dequeue scripts and styles
 *
 */

function ardicus_scripts_styles() {
	
	global $wp_styles;

	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	//if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
	//	wp_enqueue_script( 'comment-reply' );

	/*
	 * Register scripts
	 */		
	
	
	wp_register_script( 'script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', true );	
	
	/*
	 * Enqueue Scripts
	 */		
	
	wp_enqueue_script('script');	

	/*
	 * Load Google Webfonts. Borrowed from Twentytwelve 1.0
	 */	

	$protocol = is_ssl() ? 'https' : 'http';
	$query_args = array(
		'family' => 'Open+Sans:400italic,700italic,400,700|Oswald:300,400'			
	);
	wp_enqueue_style( 'ardicus-fonts', add_query_arg( $query_args, "$protocol://fonts.googleapis.com/css" ), array(), null );
	wp_enqueue_style( 'ardicus-icons',  get_template_directory_uri() . '/fonts/icons/style.css', false, '');
	
	/*
	 * Loads our main SASS generated stylesheet.
	 * style.css is only used as a placeholder for template information and doesn't need to be loaded
	 */
	
	//wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'ardicus-style',  get_template_directory_uri() . '/css/screen.css', false, '');

	/*
	 * Loads the Internet Explorer specific stylesheet.
	 */
	//wp_enqueue_style( 'ardicus-ie', get_template_directory_uri() . '/css/ie.css', array( 'ardicus-style' ), '20121010' );
	//$wp_styles->add_data( 'ardicus-ie', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'ardicus_scripts_styles' );