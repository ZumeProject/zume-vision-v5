<?php
/**
 * The sidebar containing the main widget area
 */
?>

<div id="playbook" class="sidebar small-12 medium-3 large-3 cell" role="complementary">

    <?php if ( is_active_sidebar( 'playbook' ) ) : ?>

        <?php dynamic_sidebar( 'playbook' ); ?>

    <?php endif; ?>

    <div class="widget">

        <?php zume_related_posts() ?>

    </div>

</div>
