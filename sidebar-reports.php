<?php
/**
 * The sidebar containing the main widget area
 */
?>

<div id="report" class="sidebar cell" role="complementary">

    <?php get_template_part( 'parts/widget', 'sidebar-recent-reports' ); ?>
    <?php get_template_part( 'parts/widget', 'sidebar-progress' ); ?>

    <!-- subscribe section-->
    <?php get_template_part( 'parts/widget', 'newsletter-subscribe' ); ?>

    <?php if ( is_active_sidebar( 'report' ) ) : ?>

        <?php dynamic_sidebar( 'report' ); ?>

    <?php endif; ?>

</div>
