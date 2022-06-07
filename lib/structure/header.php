<?php

/**
 * @Override from genesis/lib/structure/header.php
 */

// Custom header
// Remove genesis header parent theme
remove_action('genesis_after_header', 'genesis_do_nav');
remove_action('genesis_header', 'genesis_header_markup_open', 5);
unregister_sidebar('header-right');
remove_action('genesis_header', 'genesis_do_header');
remove_action('genesis_header', 'genesis_header_markup_close', 15);
remove_action('genesis_site_title', 'genesis_seo_site_title');

// add_filter('get_custom_logo',  'dntech_custom_logo_url');
// add_action('genesis_header', 'custom_genesis_header_markup_open', 5);
// add_action('genesis_header', 'custom_genesis_do_header');
// add_action( 'genesis_header', 'genesis_do_nav' );/** Reposition header outside main wrap */
// add_action('genesis_header', 'custom_genesis_header_markup_close', 15);


function custom_genesis_do_header()
{

	global $wp_registered_sidebars;

	genesis_markup(
		[
			'open'    => '<div %s>',
			'html5'	  => sprintf('<div class="%s">', 'navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0'),
			'context' => 'title-area',
		]
	);

	/**
	 * Fires inside the title area, before the site description hook.
	 *
	 * @since 2.6.0
	 */
	do_action('genesis_site_title');

	/**
	 * Fires inside the title area, after the site title hook.
	 *
	 * @since 1.0.0
	 */
	do_action('genesis_site_description');

	genesis_markup(
		[
			'close'   => '</div>',
			'context' => 'title-area',
		]
	);

	if (has_action('genesis_header_right') || (isset($wp_registered_sidebars['header-right']) && is_active_sidebar('header-right'))) {

		genesis_markup(
			[
				'open'    => '<div %s>',
				'context' => 'header-widget-area',
			]
		);

		/**
		 * Fires inside the header widget area wrapping markup, before the Header Right widget area.
		 *
		 * @since 1.5.0
		 */
		do_action('genesis_header_right');
		add_filter('wp_nav_menu_args', 'genesis_header_menu_args');
		add_filter('wp_nav_menu', 'genesis_header_menu_wrap');
		dynamic_sidebar('header-right');
		remove_filter('wp_nav_menu_args', 'genesis_header_menu_args');
		remove_filter('wp_nav_menu', 'genesis_header_menu_wrap');

		genesis_markup(
			[
				'close'   => '</div>',
				'context' => 'header-widget-area',
			]
		);
	}
}

function custom_genesis_header_markup_open()
{
	genesis_markup(
		[
			'open'    => '<header %s>',
			'html5'   => sprintf('<header class="%s">', 'header d-flex align-items-center'),
			'context' => 'header',
		]
	);

	genesis_structural_wrap('header');
}


function custom_genesis_header_markup_close()
{
	genesis_structural_wrap('header', 'close');
	genesis_markup(
		[
			'close'   => '</header>',
			'context' => 'header',
		]
	);
}



// Custom logo class
function dntech_custom_logo_url($logo_html)
{

	$custom_logo_id = get_theme_mod('custom_logo');

	// Make sure to replace your updated site URL
	$site_url = get_site_url();

	$logo_html = sprintf(
		'<a href="%1$s" class="navbar-brand p-0" rel="home" itemprop="url">%2$s</a>',
		esc_url($site_url),
		'<img src="'.wp_get_attachment_image_src($custom_logo_id, 'full')[0].'" alt="Logo" loading="lazy">'
	);

	return $logo_html;
}


// Remove .wrap from menu-primary or other element by omitting them from the array below
add_theme_support( 'genesis-structural-wraps', array( 'header', 'footer' ) );