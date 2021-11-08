<?php
/**
 * The sidebar containing the main widget area
 */
?>

<div id="sidebar2" class="sidebar small-12 medium-3 large-3 cell" role="complementary">

    <div class="padding-horizontal-1">
        <h3>Show Description</h3>
        <p>Zúme is a community of practice for those who want to see disciple making movements. Our vision is to saturate the world with multiplying disciples in our generation. This podcast interviews the practitioners of the community around the world.</p>
    </div>
    <hr>

    <div class="padding-horizontal-1">
        <h3><a href="/multiplying-disciples-podcast/">Recent Episodes</a></h3>
        <ol style="padding-left: 1.5em; text-indent:-1.5em;">
            <?php
            $recent_posts = wp_get_recent_posts( [
                'post_type' => 'post',
                'numberposts'  => 10,
                'post_status' => 'publish',
            ] );
            foreach ( $recent_posts as $recent ) {
                printf( '<li><a href="%1$s">%2$s </a></li>',
                    esc_url( get_permalink( $recent['ID'] ) ),
                    apply_filters( 'the_title', $recent['post_title'], $recent['ID'] )
                );
            }
            ?>
        </ol>
    </div>

    <hr>

    <!-- subscribe section-->

    <a class="button secondary-button large expanded" href="/subscribe-to-podcast/">Subscribe to Our Podcast</a>

    <hr>

    <?php get_template_part( "parts/content", "join" ); ?>

    <hr>

    <?php get_template_part( "parts/content", "reports-subscribe" ); ?>

</div>
