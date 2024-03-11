<?php
/**
 * Title: Ongoing Events
 * Slug: localchurch/ongoing-events
 * Categories: featured
 */
$args = array(
    'category_name' => 'ongoing-events',
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
    <div class="meeting-times-row">
        <h5><?php the_title(); ?></h5>
        <div class="service-time-starts">
            <h5 class="no-margin">
                <?php echo get_post_meta(get_the_ID(), 'schedule', true); ?>
            </h5>
        </div>
    </div>
<?php
    }
}
?>