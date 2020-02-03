<?php
/*
Template Name: Eyes to See
*/
?>
<?php get_header(); ?>

<!-- Title Section-->
<div class="grid-x grid-padding-x deep-blue-section padding-vertical-1">
    <div class="cell center">
    </div>
</div>
<div class="grid-x blue-notch-wrapper"><div class="cell center blue-notch"></div></div>

<!-- Main -->
<main role="main" id="post-main">

    <div class="grid-x grid-margin-x">

        <div class="sidebar cell large-2"></div>

        <div class="blog cell large-8">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php get_template_part( 'parts/loop', 'page' ); ?>

            <?php endwhile;
            endif; ?>

        </div>

        <div class="sidebar cell large-2"></div>

    </div>

</main> <!-- end #main -->

<?php get_footer(); ?>
