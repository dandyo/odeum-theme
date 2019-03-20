<?php

function odeum_setup() {

	load_theme_textdomain( 'odeum' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );
	//add_image_size( 'portfolio-small', 350, 250, true );

}
add_action( 'after_setup_theme', 'odeum_setup' );

/**
 * Enqueue scripts and styles.
 */
function odeum_scripts() {
	//wp_enqueue_style( 'odeum-style', get_stylesheet_uri() );
	wp_enqueue_style( 'main-style', get_template_directory_uri().'/assets/css/main.css');
	wp_enqueue_style( 'bxslider-style', get_template_directory_uri().'/assets/vendor/bxslider/jquery.bxslider.min.css');
	wp_enqueue_script( 'bxslider-js', get_theme_file_uri( '/assets/vendor/bxslider/jquery.bxslider.min.js' ), array('jquery'), '', true );
	wp_enqueue_script( 'main-js', get_theme_file_uri( '/assets/js/main.js' ), array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'odeum_scripts' );