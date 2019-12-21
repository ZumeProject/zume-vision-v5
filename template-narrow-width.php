<?php
/**
 * Template Name: Narrow Width (No Sidebar)
 */

get_header(); ?>

<div class="content">

    <main class="main narrow-width cell padding-horizontal-1" role="main">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php get_template_part( 'parts/loop', 'page' ); ?>

        <?php endwhile;
        endif; ?>

    </main> <!-- end #main -->

</div> <!-- end #content -->

<?php get_footer(); ?>
