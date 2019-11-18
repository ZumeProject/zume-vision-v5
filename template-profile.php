<?php
/**
 * Template Name: Profile
 */

get_header(); ?>

<div class="content">

    <div class="inner-content grid-x grid-margin-x grid-padding-x">

        <div class="cell small-1"></div>

        <main id="main" class="main small-10 cell" role="main"></main> <!-- end #main -->

        <div class="cell small-1"></div>

    </div> <!-- end #inner-content -->

    <?php get_template_part('parts/content', 'news'); ?>

</div> <!-- end #content -->

<?php get_template_part( "parts/content", "fullmodal" ); ?>

<?php get_footer(); ?>
