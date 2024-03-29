<?php

/**
 * Title: Header menu
 * Slug: localchurch/header-menu
 * Categories: featured
 */
?>
<div class="menu">
    <div data-w-id="0cdfc0c9-e628-8baf-6bea-330630344380" class="menu-icon">
        <div data-w-id="0cdfc0c9-e628-8baf-6bea-330630344382" class="menu-icon-line" style=""></div>
        <div data-w-id="0cdfc0c9-e628-8baf-6bea-330630344381" class="menu-icon-line second" style=""></div>
    </div>

    <?php
    wp_nav_menu(
        array(
            'menu' => 'header-menu',
            'container' => '',
            'theme_location' => 'header-menu',
            'items_wrap' => '<nav id="archive-menu" class="menu-content hidden" style="display: none; opacity: 0;">
            %3$s
            <div class="menu-divider"></div>
            <a target="_blank" href="https://www.instagram.com/evangelicibergamo_/" class="menu-link">Instagram</a>
            <a target="_blank" href="https://www.facebook.com/ChiesaCristianaEvangelicaADIBergamo" class="menu-link">Facebook</a>
            <a target="_blank" href="https://www.youtube.com/@evangelicibergamo7019" class="menu-link">YouTube</a>
            </nav>'
        )
    );
    ?>
</div>