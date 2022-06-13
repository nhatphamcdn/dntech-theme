<?php

// Starts the engine.
require_once get_template_directory() . '/lib/init.php';

// Adds image upload select to Customizer.
require_once get_stylesheet_directory() . '/lib/customize.php';

// Custom libs
require_once get_stylesheet_directory() . '/lib/nav-custom.php';
require_once get_stylesheet_directory() . '/lib/structure/header.php';
require_once get_stylesheet_directory() . '/lib/function-custom.php';
require_once get_stylesheet_directory() . '/lib/custom-widget.php';

/**
 * Custom wrap class
 * https://github.com/salcode/bootstrap-genesis/issues/63
 */

remove_filter( 'genesis_attr_structural-wrap', 'genesis_attributes_structural_wrap' );
add_filter( 'genesis_attr_structural-wrap', 'custom_genesis_attributes_structural_wrap' );
function custom_genesis_attributes_structural_wrap( $attributes ) {
	$attributes['class'] = 'container-xxl';
	return $attributes;
}


//* Disable the superfish script
add_action('wp_enqueue_scripts', 'sp_disable_superfish');
function sp_disable_superfish()
{
	wp_deregister_script('superfish');
	wp_deregister_script('superfish-args');
}

//* Add desired theme supports
add_action('after_setup_theme', 'genesis_sample_theme_support', 9);
function genesis_sample_theme_support()
{
	$theme_supports = genesis_get_config('theme-supports');

	foreach ($theme_supports as $feature => $args) {
		add_theme_support($feature, $args);
	}
}

//* Remove Genesis Layout Settings
// remove_theme_support( 'genesis-inpost-layouts' );

//* Remove the redundant .site-inner and .content-sidebar-wrap markup.
add_action('genesis_meta', 'remove_redundant_markup');
function remove_redundant_markup()
{

	// Remove .site-inner everywhere.
	add_filter( 'genesis_markup_site-inner', '__return_null' );

	// Remove .content-sidebar-wrap only when we're using full width content.
	if ('full-width-content' === genesis_site_layout()) {
		add_filter('genesis_markup_content-sidebar-wrap', '__return_null');
	}
}


// Registers the responsive menus.
if (function_exists('genesis_register_responsive_menus')) {
	genesis_register_responsive_menus(genesis_get_config('responsive-menus'));
}

// Remove .site-inner everywhere.
// add_filter( 'genesis_markup_site-inner', '__return_null' );


// Remove wp default jquery
add_filter( 'wp_enqueue_scripts', 'change_default_jquery', PHP_INT_MAX );
function change_default_jquery( ){
	if ( !is_admin() ) {
		wp_dequeue_script( 'jquery');
		wp_deregister_script( 'jquery');
	}
}


add_action( 'widgets_init', 'custom_widget_init' );
function custom_widget_init() {
	register_widget('Custom_Genesis_Post');
}