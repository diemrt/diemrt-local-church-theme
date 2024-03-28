<?php

/**
 * Title: Team members
 * Slug: localchurch/team-members
 * Categories: featured
 */
$args = array(
    'category_name' => 'team-member',
    'meta_query' => array(
        array(
            'key' => 'role', // Nome del tuo custom field
            'compare' => 'EXISTS', // Puoi personalizzare l'operatore di confronto
        ),
    ),
);
$the_query = new WP_Query($args);
if ($the_query->have_posts()) {
    while ($the_query->have_posts()) {
        $the_query->the_post();
        $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail');

?>
        <div role="listitem" class="team-item w-dyn-item">
            <div class="team-item-link w-inline-block">
                <div data-w-id="e9b171a0-269d-9118-f596-afe5607acc5a" class="animation-image-wrap"><img alt="" src="<?php echo $image[0]; ?>" class="animation-image"></div>
                <div class="team-item-headings">
                    <h5 class="no-margin"><?php the_title() ?></h5>
                    <h6 class="no-margin text-blue"><?php echo get_post_meta(get_the_ID(), 'role', true); ?></h6>
                </div>
            </div>
        </div>
    <?php
    }
}
    ?>