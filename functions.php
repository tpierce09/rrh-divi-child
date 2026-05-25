<?php
require_once get_stylesheet_directory() . '/updater.php';
function rrh_child_assets() {

    wp_enqueue_style(
        'rrh-child-style',
        get_stylesheet_directory_uri() . '/assets/css/style.min.css',
        array(),
        filemtime(get_stylesheet_directory() . '/assets/css/style.min.css')
    );

    wp_enqueue_script(
        'rrh-child-script',
        get_stylesheet_directory_uri() . '/assets/js/app.min.js',
        array(),
        filemtime(get_stylesheet_directory() . '/assets/js/app.min.js'),
        true
    );
}

add_action('wp_enqueue_scripts', 'rrh_child_assets');