<?php
/**
 * The sidebar containing the main widget area
 */
?>

<div id="playbook" class="sidebar small-12 medium-3 large-3 cell" role="complementary">

    <?php get_template_part( 'parts/widget', 'search' ); ?>

    <?php if ( is_active_sidebar( 'article' ) ) : ?>

        <?php dynamic_sidebar( 'article' ); ?>

    <?php endif; ?>

    <?php zume_related_posts() ?>

    <!-- subscribe section-->
    <?php get_template_part( 'parts/widget', 'newsletter-subscribe' ); ?>

</div>
