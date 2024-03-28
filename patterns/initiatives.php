<?php

/**
 * Title: Initiatives
 * Slug: localchurch/initiatives
 * Categories: featured
 */
$args = array(
    'category_name' => 'initiatives',
    'meta_query' => array(
        array(
            'key' => 'iconPath', // Nome del tuo custom field
            'compare' => 'EXISTS', // Puoi personalizzare l'operatore di confronto
        ),
    ),
);
$the_query = new WP_Query($args);
if ($the_query->have_posts()) {
    $iteration = 0;
    while ($the_query->have_posts()) {
        $the_query->the_post();
        $media_class = $iteration % 2 == 0 ? "" : "from-left";
        $description_class = $iteration % 2 == 0 ? "" : "from-right";
?>
        <div class="ministry-content">
            <div class="ministry-media <?php echo $media_class ?>">
                <div data-w-id="393f3a53-9e11-fade-c8e9-150c04961e50" class="animation-image-wrap">
                    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail'); ?>
                    <img src="<?php echo $image[0]; ?>" alt="" class="animation-image">
                </div>
            </div>
            <div class="ministry-description <?php echo $description_class ?>"><img src="<?php echo get_post_meta(get_the_ID(), 'iconPath', true); ?>" width="45" alt="">
                <h3 class="ministry-content-title"><?php the_title() ?></h3>
                <p><?php the_content() ?></p>
            </div>
        </div>
<?php
        $iteration++;
    }
}
?>