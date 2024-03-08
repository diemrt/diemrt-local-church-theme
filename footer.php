<footer class="footer-section">
    <div class="container in-footer">
        <div id="w-node-_2a638440-9fff-2e4a-67aa-fa569417e69d-9417e69b">
            <h6><?php bloginfo('name') ?></h6>
        </div>
        <?php
        wp_nav_menu(
            array(
                'menu' => 'footer-menu',
                'container' => '',
                'theme_location' => 'footer-menu',
                'items_wrap' => '<div id="archive-footer-menu" class="footer-column"><h5>Menu</h5>%3$s</div>'
            )
        );
        ?>
        <div class="footer-column">
            <h5>Socials</h5><li><a href="http://instagram.com" class="footer-link">Instagram</a></li><li><a href="http://facebook.com" class="footer-link">Facebook</a></li>
        </div>
        <div id="w-node-_2a638440-9fff-2e4a-67aa-fa569417e6bc-9417e69b" class="footer-copyright">
            © <?php echo date("Y") ?> <?php bloginfo('name') ?>
        </div>
    </div>
</footer>
<?php
wp_footer()
?>
</body>

</html>