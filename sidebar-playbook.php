<?php
/**
 * The sidebar containing the main widget area
 */
?>

<div id="playbook" class="sidebar small-12 medium-3 large-3 cell" role="complementary">

    <hr class="show-for-small-only" />

    <?php get_template_part( 'parts/widget', 'sidebar-recent-reports' ); ?>

    <hr>

    <?php if ( is_active_sidebar( 'playbook' ) ) : ?>

        <?php dynamic_sidebar( 'playbook' ); ?>

    <?php endif; ?>

</div>
