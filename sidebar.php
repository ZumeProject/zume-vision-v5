<?php
/**
 * The sidebar containing the main widget area
 */
?>

<div id="sidebar1" class="sidebar small-12 medium-3 large-3 cell" role="complementary">

    <!-- custom search -->
    <?php get_template_part( 'parts/widget', 'search' ); ?>

    <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

        <?php dynamic_sidebar( 'sidebar1' ); ?>

    <?php endif; ?>

    <!-- subscribe section-->
    <?php get_template_part( 'parts/widget', 'newsletter-subscribe' ); ?>

</div>
