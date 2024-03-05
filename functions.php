<?php
function localchurch_register_styles() {
    wp_enqueue_style('localchurch-style', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'localchurch_register_styles');

?>