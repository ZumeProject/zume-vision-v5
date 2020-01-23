<?php
/**
 * The sidebar containing the main widget area
 */
?>

<div id="playbook" class="sidebar small-12 medium-3 large-3 cell" role="complementary">

    <hr class="show-for-small-only" />

    <img src="<?php echo esc_url( zume_images_uri('vision') ) ?>map-with-jesus.jpg" alt="map with jesus" />
    <hr />

    <?php get_template_part( 'parts/widget', 'sidebar-progress' ); ?>

    <!-- subscribe section-->
    <?php get_template_part( 'parts/widget', 'newsletter-subscribe' ); ?>

    <?php if ( is_active_sidebar( 'article' ) ) : ?>

        <?php dynamic_sidebar( 'article' ); ?>

    <?php endif; ?>


</div>
