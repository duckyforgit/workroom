<?php
/**
 * Workroom1128 functions and definitions
 *
 * @package workroom1128
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// workroom1128's includes directory.
$workroom1128_inc_dir = 'inc';

// Array of files to include.
$workroom1128_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/rest-api.php',
	'/testimonial-route.php',               // Custom rest route for testimonials.
	'/video-route.php',                     // Custom rest route for elearning videos.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/workroom1128/workroom1128/issues/567.
	'/class-wp-bootstrap-5-navwalker.php',  // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/workroom1128/workroom1128/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/block-editor.php',                    // Load Block Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
	'/widgets/class-widget-business-info-template.php',
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$workroom1128_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$workroom1128_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $workroom1128_includes as $file ) {
	require_once get_theme_file_path( $workroom1128_inc_dir . $file );
}


add_action( 'init', 'register_acf_blocks' );
/**
 * Block editor (gutenberg) specific functionality.
 *
 * @package workroom1128
 */
function register_acf_blocks() {
	register_block_type( '/blocks/testimonial' );
}
