<?php
/**
 * The sidebar containing the main widget area
 */
?>

<div id="playbook" class="sidebar small-12 medium-3 large-3 cell" role="complementary">

    <hr class="show-for-small-only" />

    <?php get_template_part( 'parts/widget', 'sidebar-recent-articles' ); ?>

    <?php if ( ! is_user_logged_in() ) : ?>
        <hr>
    <?php get_template_part( "parts/content", "join" ); ?>
    <?php endif; ?>

    <hr>
    <?php get_template_part( 'parts/widget', 'sidebar-progress' ); ?>

</div>
