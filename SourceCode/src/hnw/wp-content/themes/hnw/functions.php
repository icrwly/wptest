<?php
/* ==========================================================================
 *  Load scripts and styles
 * ========================================================================== */
if ( ! function_exists( 'enqueue_style_and_script' ) ) :
	function enqueue_style_and_script() {
		global $post, $wp_query;
		// STYLES
		wp_enqueue_style( 'core-style', get_stylesheet_directory_uri() . '/css/style.css', array(), true );

		// SCRIPTS
		wp_enqueue_script( 'custom-scripts', get_template_directory_uri() . '/js/app.js', array(), true, true );
	}
endif;
add_action( 'wp_enqueue_scripts', 'enqueue_style_and_script' );
/* ========================================================================== */
?>
