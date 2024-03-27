<?php

/**
 * Title: Church Events
 * Slug: localchurch/church-events
 * Categories: featured
 */
$args = array(
    'category_name' => 'church-events',
    'meta_query' => array(
        array(
            'key' => 'schedule', // Nome del tuo custom field
            'compare' => 'EXISTS', // Puoi personalizzare l'operatore di confronto
        ),
    ),
);
$the_query = new WP_Query($args);
if ($the_query->have_posts()) {
    while ($the_query->have_posts()) {
        $the_query->the_post();
?>
        <div role="listitem" class="w-dyn-item"><div data-w-id="cd9aefab-bb10-41fa-d31f-89aeda6440fa" class="event-content w-inline-block" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                <div class="event-info" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <h6 class="event-item-time"><?php echo get_post_meta(get_the_ID(), 'schedule', true); ?></h6>
                    <h3 style="color: #fff;" class="event-item-heading">
                        <?php the_title() ?>
                    </h3>
                </div>
                <?php if (has_post_thumbnail(get_the_ID())) : ?>
                    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail'); ?>

                    <div class="church-event-container">
                        <div style="position: absolute; width: 100%; height: 100%; background-image: linear-gradient(to top, rgba(0, 0, 0, 0) 0%, rgb(0 0 0 / 50%) 100%)"></div>
                        <img width="600" src="<?php echo $image[0]; ?>" alt="Church event image" style="width: auto; height: 100%; max-width: 100%; object-fit: cover;" />
                    </div>
                <?php endif; ?>
                </div></div>
<?php
    }
}
?>