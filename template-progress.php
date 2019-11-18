<?php
/**
 * Template Name: Progress
 */

get_header(); ?>

<div class="content">

    <div class="inner-content grid-x grid-margin-x grid-padding-x">

        <div class="cell small-1"></div>

        <main class="main small-10 cell" role="main">

            <div id="chart"></div><!-- Container for charts -->

            <?php Location_Grid_Counters::instance()->load_population_counter() ?>

        </main> <!-- end #main -->

        <div class="cell small-1"></div>

    </div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php //get_template_part( "parts/content", "fullmodal" ); ?>

<?php get_footer(); ?>
