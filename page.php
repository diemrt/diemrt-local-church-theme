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
                <nav class="menu-content hidden" style="display: none; opacity: 0;"><a href="/" class="menu-link">Home</a><a href="/contact" class="menu-link">Contact Us</a>
                    <div class="menu-divider"></div><a href="/community" class="menu-link">Our Community</a><a href="/ministries" aria-current="page" class="menu-link w--current">Our Ministries</a><a href="/team" class="menu-link">Our Team</a><a href="/blog" class="menu-link">Our Blog</a>
                    <div class="menu-divider"></div><a href="/we-believe" class="menu-link">We Believe</a>
                </nav>
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