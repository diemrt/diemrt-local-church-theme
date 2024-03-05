<?php

/**
 * Custom function to load my persdnal style sheets.
 */
function localchurch_register_styles() {
    wp_enqueue_style('localchurch-style', get_template_directory_uri() . "/style.css", array('localchurch-style'), '1.0', 'all');
}

//It loads my custom function inside the main script.
add_action('wp_enqueue_scripts', 'localchurch_register_styles');

?>