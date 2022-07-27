<?php
/**
* Aliki Ibizan Hounds Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage Aliki Ibizan Hounds
* @since Aliki Ibizan Hounds 2.0
*/

// Enqueue scripts and styles
function twentytwentytwo_child_scripts(){
	wp_enqueue_style( 'twentytwentytwo-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'twentytwentytwo-style' ));
}
add_action( 'wp_enqueue_scripts', 'twentytwentytwo_child_scripts' );
