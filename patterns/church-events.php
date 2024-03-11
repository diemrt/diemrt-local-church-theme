<?php

/**
 * Title: Church Events
 * Slug: localchurch/church-events
 * Categories: featured
 */
$args = array(
    'posts_per_page' => 3,
    'category_name' => 'church-events'
);
$the_query = new WP_Query($args);
if ($the_query->have_posts()) {
    while ($the_query->have_posts()) {
        $the_query->the_post();
?>
        <div role="listitem" class="w-dyn-item"><a data-w-id="cd9aefab-bb10-41fa-d31f-89aeda6440fa" href="/events/distinctio-illum" class="event-content w-inline-block" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                <div class="event-info" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <h6 class="event-item-time"><?php the_content() ?></h6>
                    <h3 style="color:hsla(90.00000000000021, 4.97%, 75.78%, 1.00)" class="event-item-heading">
                        <?php the_title() ?>
                    </h3>
                </div>
                <?php if (has_post_thumbnail($post->ID)) : ?>
                    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>

                    <div class="church-event-container">
                        <img width="600" src="<?php echo $image[0]; ?>" alt="Church event image" style="width: auto; height: 100%; max-width: 100%; object-fit: cover;" />
                    </div>
                <?php endif; ?>
            </a></div>
<?php
    }
}
?>