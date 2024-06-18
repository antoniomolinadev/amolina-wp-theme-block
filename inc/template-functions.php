<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package amolina-wp-theme-block
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function amolina_wp_theme_block_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-footer' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'amolina_wp_theme_block_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function amolina_wp_theme_block_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'amolina_wp_theme_block_pingback_header' );

/**
 * Add Hero pattern
 */
add_action( 'init', 'amolina_wp_theme_block_register_patterns' );

function amolina_wp_theme_block_register_patterns() {
	register_block_pattern( 'amolina-wp-theme-block/hero', array(
		'title'      => __( 'Hero', 'amolina-wp-theme-block' ),
		'categories' => array( 'featured' ),
		'source'     => 'theme',
		'content'    => '<!-- Block pattern goes here. -->'
	) );
}
