<?php
/**
 * torun-child functions and definitions
 *
 * @package torun-child
 */

/** Loading language **/
function torun_child_theme_setup() {
	load_child_theme_textdomain( 'torun-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'torun_child_theme_setup' );

/** Enqueue the child theme stylesheet **/
function torun_child_enqueue_scripts() {
	wp_enqueue_style( 'torun-parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'torun_child_enqueue_scripts', 100 );

