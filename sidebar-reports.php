<?php
/**
 * The sidebar containing the main widget area
 */
?>

<div id="report" class="sidebar cell" role="complementary">

    <hr class="show-for-small-only" />

    <?php get_template_part( "parts/content", "join" ); ?>
    <hr>
    <?php get_template_part( 'parts/content', 'reports-subscribe' ); ?>

    <?php get_template_part( 'parts/widget', 'sidebar-seo-links' ); ?>
    <hr>

    <?php get_template_part( 'parts/widget', 'sidebar-progress' ); ?>

<!--    <hr>-->


<!--    <div class="padding-horizontal-1">-->
<!--        <h3>Special Reports</h3>-->
<!--        --><?php //zume_reports_nav() ?>
<!--    </div>-->
<!---->
    <hr>

    <div class="padding-horizontal-1 center">
        <a href="/share-your-story">Submit your own story</a>
    </div>

</div>
