<?php
/**
 * Displays archive pages if a speicifc template is not set.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header(); ?>

<div class="content white-section">

    <div class="inner-content grid-x grid-margin-x grid-padding-x padding-vertical-1">

        <div class="cell medium-1"></div>

        <main class="main small-12 medium-10 large-10 cell" role="main">

            <div class="grid-x grid-margin-x">

                <div class="cell medium-8">

                    <header><h2 class="center">Reports</h2></header>

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <!-- To see additional archive styles, visit the /parts directory -->
                        <?php get_template_part( 'parts/loop', 'archive' ); ?>

                    <?php endwhile; ?>

                        <?php zume_page_navi(); ?>

                    <?php else : ?>

                        <?php get_template_part( 'parts/content', 'missing' ); ?>

                    <?php endif; ?>
                </div>

                <div class="cell medium-4">

                    <?php get_sidebar( 'reports'); ?>

                </div>

            </div>

        </main> <!-- end #main -->

        <div class="cell medium-1"></div>

    </div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
