<?php
/**
 * app functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package app
 */

function register_my_menu() {
  register_nav_menu('primary',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

/**
 * Enqueue scripts and styles.
 */
function app_scripts() {

	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array() );

	wp_enqueue_style( 'raleway', "https://fonts.googleapis.com/css?family=Raleway" );

	wp_enqueue_style( 'app-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'app_scripts' );

/**
 * Replaces the excerpt "more" text by a link.
 */
function excerpt_readmore($more) {
return '<a href="'. get_permalink($post->ID) . '" class="readmore">' . '</br>' . 'Read More <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20">
    <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" /></svg>' . '</a>';
}

add_filter('excerpt_more', 'excerpt_readmore');

add_theme_support( 'post-thumbnails' ); 

function wploop_pages_excerpt() {
add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', ' wploop_pages_excerpt' );

function my_excerpt_length($length) {
return 29;
}

add_filter('excerpt_length', 'my_excerpt_length');