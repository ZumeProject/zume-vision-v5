<?php
/**
 * The sidebar containing the main widget area
 */
?>

<div id="report" class="sidebar cell" role="complementary">

    <img src="<?php echo esc_url( zume_images_uri('vision') ) ?>map-with-jesus.jpg" alt="map with jesus" />
    <hr />


    <!-- subscribe section-->
    <?php get_template_part( 'parts/widget', 'newsletter-subscribe' ); ?>

    <?php if ( is_active_sidebar( 'report' ) ) : ?>

        <?php dynamic_sidebar( 'report' ); ?>

    <?php endif; ?>

</div>
