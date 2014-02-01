<?php
/*Functions file for the Child of Twenty Twelve child theme*/

function mychildtheme_setup () {
	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'secondary', __( 'Footer Menu', 'twentytwelve' ) );
}
add_action( 'after_setup_theme', 'mychildtheme_setup', 11 );

function load_fonts () {
			wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Dancing+Script:400,700|Tangerine:400,700|Droid+Serif:400,700|Rochester|Arial');
			wp_enqueue_style('googleFonts');
		}
		
	add_action('wp_print_styles','load_fonts');