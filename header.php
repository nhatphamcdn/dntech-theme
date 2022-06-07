<?php

/**
 * Da Nang Tech Header Customization.
 *
 * @package Genesis\Templates
 * @author  DaNangTech
 * @license GPL-2.0-or-later
 * @link    https://danangtech.com
 */

/**
 * Fires at start of header.php, immediately before `genesis_title` action hook to render the Doctype content.
 *
 * @since 1.3.0
 */
do_action('genesis_doctype');

/**
 * Fires immediately after `genesis_doctype` action hook, in header.php to render the document title.
 *
 * @since 1.0.0
 */
do_action('genesis_title');

/**
 * Fires immediately after `genesis_title` action hook, in header.php to render the meta elements.
 *
 * @since 1.0.0
 */
do_action('genesis_meta');

wp_head(); // We need this for plugins.
?>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css" integrity="sha512-GqP/pjlymwlPb6Vd7KmT5YbapvowpteRq9ffvufiXYZp0YpMTtR9tI6/v3U3hFi1N9MQmXum/yBfELxoY+S1Mw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css">
<script>
	var base_theme_url = "<?php echo get_stylesheet_directory_uri(); ?>";
</script>

</head>
<?php
genesis_markup(
	[
		'open'    => '<body %s>',
		'context' => 'body',
	]
);

if (function_exists('wp_body_open')) {
	wp_body_open();
}

/**
 * Fires immediately after the `wp_body_open` action hook.
 *
 * @since 1.0.0
 */
do_action('genesis_before');

genesis_markup(
	[
		'open'    => '<div>',
		'html5'   => sprintf('<div class="%s">', 'bg-white p-0'),
	]
);


?>

<header class="header d-flex align-items-center">
	<div class="container-xxl">
		<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
			<a href="/" class="navbar-brand p-0">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo@2x.png" alt="Logo">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
				<span class="fa fa-bars"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<?php
				wp_nav_menu(array(
					'menu'           => 'Main Menu',
					'container'     => '',
					'menu_class'     => 'navbar-nav ms-auto py-4 py-md-0',
					'menu_id'     => '',
					'walker' => new MainMenu_Walker()
				))
				?>
				<a href="#" class="btn btn-primary py-2 px-4 ms-lg-4">Nhận báo giá</a>
			</div>
		</nav>
	</div>
</header>