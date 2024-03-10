<?php

/**
 * Title: Church Events
 * Slug: localchurch/church-events
 * Categories: featured
 */
$args = array( 
    'posts_per_page' => 3 
); 
$the_query = new WP_Query( $args );
if ($the_query->have_posts()) {
?>
    <section id="Events" class="events-section">
        <div class="container in-events">
            <div id="w-node-_3d73b967-3b35-eee8-e359-15bbb0641179-513ac509" class="events-left"><img src="https://assets-global.website-files.com/5ecb81f357d94bdba23ac508/5ed747b3150cb05b42a3a5c5_calendar%202.svg" alt="" class="events-icon">
                <h2 class="events-heading">Events.</h2>
                <h5 class="events-subheading">Championing the cause of local churches everywhere.</h5>
            </div>
            <div class="events-right">
                <div class="w-dyn-list">
                    <div role="list" class="w-dyn-items">
                        <?php
                        while ($the_query->have_posts()) {
                            $the_query->the_post();
                        ?>
                            <div role="listitem" class="w-dyn-item"><a data-w-id="cd9aefab-bb10-41fa-d31f-89aeda6440fa" href="/events/distinctio-illum" class="event-content w-inline-block" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                    <div class="event-info" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                        <h6 class="event-item-time">June 4, 2020</h6>
                                        <h3 style="color:hsla(90.00000000000021, 4.97%, 75.78%, 1.00)" class="event-item-heading">
                                            <?php the_title() ?>
                                        </h3>
                                    </div><img width="600" alt="Support Togeather" src="https://assets-global.website-files.com/5ed66475af2f2b5eb40d7fbb/61d306880681937449497276_pexels-tima-miroshnichenko-5711385.jpg" sizes="(max-width: 479px) 84vw, 44vw" srcset="https://assets-global.website-files.com/5ed66475af2f2b5eb40d7fbb/61d306880681937449497276_pexels-tima-miroshnichenko-5711385-p-800.jpeg 800w, https://assets-global.website-files.com/5ed66475af2f2b5eb40d7fbb/61d306880681937449497276_pexels-tima-miroshnichenko-5711385.jpg 960w" class="event-image" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                </a></div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}
?>