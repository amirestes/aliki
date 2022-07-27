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

function bootstrap_enqueue_styles() {
    wp_register_style('bootstrap',get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'bootstrap-style', get_stylesheet_directory_uri(), $dependencies); 
}

function bootstrap_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap-script', get_stylesheet_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '3.3.6', true );
}

add_action( 'wp_enqueue_scripts', 'bootstrap_enqueue_styles' ,1);
add_action( 'wp_enqueue_scripts', 'bootstrap_enqueue_scripts',1 ); 