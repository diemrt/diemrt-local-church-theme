<?php

function localchurch_theme_support()
{
    //Add dynamic title tags support
    add_theme_support('title_tag');
}

/**
 * Custom function to load my persdnal style sheets.
 */
function localchurch_register_styles()
{
    wp_enqueue_style('localchurch-archive', get_template_directory_uri() . "/assets/css/archive.css");
}

/**
 * Custom function to load my persdnal js files.
 */
function localchurch_register_scripts()
{
    wp_enqueue_script('localchurch-jquery', "https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5ecb81f357d94bdba23ac508", array(), null, true);
    wp_enqueue_script('localchurch-webflow', get_template_directory_uri() . "/assets/js/webflow.js", array(), null, true);
}

//It loads my custom functions inside the main script.
add_action('wp_enqueue_scripts', 'localchurch_register_styles');
add_action('wp_enqueue_scripts', 'localchurch_register_scripts');
add_action('after_setup_theme', 'localchurch_theme_support');

