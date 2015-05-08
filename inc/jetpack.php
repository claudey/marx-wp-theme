<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package marx_wp_theme
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function marx_wp_theme_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'marx_wp_theme_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function marx_wp_theme_jetpack_setup
add_action( 'after_setup_theme', 'marx_wp_theme_jetpack_setup' );

function marx_wp_theme_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function marx_wp_theme_infinite_scroll_render