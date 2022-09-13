<?php

/**
 * TwentyTwentyOne Child functions and definitions
 * 
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 * 
 * @package WordPress
 * @subpackage TwentyTwentyOne
 * @since Aliki Ibizan Hound 2.0
 */

 //Enqueue scripts and styles
 function twentytwentyone_child_scripts(){
	wp_enqueue_style( 'twentytwentyone-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'twentytwentyone-style' ));
}
add_action( 'wp_enqueue_scripts', 'twentytwentyone_child_scripts' );

/* Custom Post Type */

function create_custom_post_types() {
	register_post_type('case_studies',
		array(
			'labels'=>array(
				'name'=>__('Dogs'),
				'singular_name'=>__('Dog')
			),
			'public'=> true,
			'has_archive'=> true,
			'rewrite'=>array('slug'=>'dogs')
		)
	);
}

add_action('init','create_custom_post_types');