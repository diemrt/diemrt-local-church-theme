<?php

/**
 * Title: Footer menu
 * Slug: localchurch/footer-menu
 * Categories: featured
 */
wp_nav_menu(
    array(
        'menu' => 'footer-menu',
        'container' => '',
        'theme_location' => 'footer-menu',
        'items_wrap' => '<div id="archive-footer-menu" class="footer-column"><h5>Menu</h5>%3$s</div>'
    )
);
?>