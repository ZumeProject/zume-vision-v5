<?php
/**
 * The sidebar containing the main widget area
 */
?>

<div id="report" class="sidebar cell" role="complementary">

    <hr class="show-for-small-only" />

    <?php get_template_part( "parts/content", "join" ); ?>
    <?php if ( ! is_user_logged_in() ) : ?>
        <hr>
    <?php endif; ?>


    <?php get_template_part( 'parts/widget', 'sidebar-progress' ); ?>

</div>
