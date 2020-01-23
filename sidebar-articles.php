<?php
/**
 * The sidebar containing the main widget area
 */
?>

<div id="playbook" class="sidebar small-12 medium-3 large-3 cell" role="complementary">

    <hr class="show-for-small-only" />

    <?php get_template_part( 'parts/widget', 'sidebar-recent-articles' ); ?>
    <?php get_template_part( 'parts/widget', 'sidebar-progress' ); ?>

    <!-- subscribe section-->
    <?php get_template_part( 'parts/widget', 'newsletter-subscribe' ); ?>

    <?php if ( is_active_sidebar( 'articles' ) ) : ?>

        <?php dynamic_sidebar( 'articles' ); ?>

    <?php endif; ?>

</div>
