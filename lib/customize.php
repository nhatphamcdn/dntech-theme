<?php

/**
 * Da Nang Tech child theme.
 *
 * This file adds the Customizer additions to the Da Nang Tech Theme.
 *
 * @package DaNangTech
 * @author  Da Nang Tech
 * @license GPL-2.0-or-later
 * @link    https://danangtech.com
 */

//* Allow upload svg files
add_filter( 'wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {
    global $wp_version;

    if ($wp_version !== '4.7.1') {
        return $data;
    }

    $filetype = wp_check_filetype($filename, $mimes);

    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];
}, 10, 4);

add_filter('upload_mimes', 'cc_mime_types');
function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}