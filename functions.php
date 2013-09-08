<?php 
/**
 * @package WordPress
 * @subpackage ardicus-wp
 * @since Ardicus WP 1.0
 *
 */

/*
 * Set content width for images and oEmbeds
 */
if ( ! isset( $content_width ) ) $content_width = 625;


/**
 * Flush Permalinks. To flush all the rewrite rules, Uncomment, safe, refresh site & admin and comment out again
 */
// add_action('admin_init', 'flush_rewrite_rules');


/**
 * Setup
 */
function ardicus_setup() {	
	/* Create translation files, should be located in a /languages directory */	
	//load_theme_textdomain( 'let', get_template_directory() . '/languages' );

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );	
  
	/* Add post format support */
  	//add_theme_support( 'post-formats', array('video','gallery','audio' ) );
	
	/* This theme uses wp_nav_menu() in one location. */
	register_nav_menu( 'primary', __( 'Primary Menu', 'ardicus' ) );

	/** 
	 * add custom editor style located in root (editor-style.css)
	 * http://codex.wordpress.org/Function_Reference/add_editor_style
	 */
	add_editor_style();

	/* Register post thumbnail support
	 *
	 */
	add_theme_support( 'post-thumbnails' );	
	set_post_thumbnail_size( 1600, 900); // Unlimited height, soft crop
	//add_image_size( 'side-thumb', 352, 185, true ); //300 pixels wide (and unlimited height)	
}
add_action( 'after_setup_theme', 'ardicus_setup' );

/**
 * Includes - make all the cool stuff happen. Decomment for extra fun
 */

require_once('includes/enqueue.php');