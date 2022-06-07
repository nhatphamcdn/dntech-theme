<?php

/**
 * Da Nang Tech child theme.
 *
 * Theme supports.
 *
 * @package DaNangTech
 * @author  Da Nang Tech
 * @license GPL-2.0-or-later
 * @link    https://danangtech.com
 */

return [
    'genesis-responsive-viewport'   => [],
    'genesis-lazy-load-images'      => [],
    'genesis-custom-logo'           => [
        'height'      => 40,
        'width'       => 212,
        'flex-height' => true,
        'flex-width'  => true,
        'default-image' => get_stylesheet_directory_uri() . '/images/logo.svg',
        'url' => get_stylesheet_directory_uri() . '/images/logo.svg',
        'thumbnail_url' => get_stylesheet_directory_uri() . '/images/logo.svg',
    ],
    'align-wide'                    => [],
];
