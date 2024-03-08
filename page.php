<?php
get_header();
?>
<section class="ministry-header-section">
    <div class="container in-ministry-header">
        <div class="logo-wrap"><a href="/" class="logo blue w-inline-block"><img src="https://assets-global.website-files.com/5ecb81f357d94bdba23ac508/5ed7d0e4b6e821e026bb2543_logo_blue.svg" alt="" class="image">
                <div class="text-block">Sunday Church</div>
            </a>
            <div class="menu">
                <div data-w-id="0cdfc0c9-e628-8baf-6bea-330630344380" class="menu-icon">
                    <div data-w-id="0cdfc0c9-e628-8baf-6bea-330630344382" class="menu-icon-line"></div>
                    <div data-w-id="0cdfc0c9-e628-8baf-6bea-330630344381" class="menu-icon-line second"></div>
                </div>
                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'header-menu',
                        'container' => '',
                        'theme_location' => 'header-menu',
                        'items_wrap' => '<nav id="archive-menu" class="menu-content hidden" style="display: none; opacity: 0;">%3$s</nav>'
                    )
                );
                ?>
            </div>
        </div>
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                the_content();
            }
        }
        ?>
    </div>
</section>
<?php
get_footer();
?>