<?php

add_action('wp_enqueue_scripts', 'localchurch_enqueue_styels');
add_action('wp_enqueue_scripts', 'localchurch_enqueue_scripts');

function localchurch_enqueue_styels()
{
    wp_enqueue_style(
        'localchurch-archive-style',
        get_parent_theme_file_uri('assets/css/archive.css'),
        array(),
        wp_get_theme()->get('Version'),
        'all'
    );
}

function localchurch_enqueue_scripts()
{
    wp_enqueue_script(
        'localchurch-jquery-script',
        "https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5ecb81f357d94bdba23ac508",
        array(),
        null,
        true
    );
    wp_enqueue_script(
        'localchurch-webflow-script',
        get_parent_theme_file_uri('assets/js/webflow.js'),
        array(),
        wp_get_theme()->get('Version'),
        true
    );
}
