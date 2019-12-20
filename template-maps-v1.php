<?php
/**
 * Template Name: Maps v1
 */

get_header(); ?>

    <div class="content">

        <div class="inner-content grid-x grid-margin-x grid-padding-x">

            <div class="cell small-1"></div>

            <main class="main small-10 cell" role="main">

                <div class="center">

                    <div style="background:url('<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/spinner.svg') center center no-repeat;">


                        <?php
                        if ( have_posts() ) :
                            while ( have_posts() ) : the_post();
                                the_content();
                            endwhile;
                        endif;
                        ?>

                    </div>

                    <br clear="all">

                </div>

            </main> <!-- end #main -->

            <div class="cell small-1"></div>

            <?php get_template_part('parts/content', 'prayer-of-saturation'); ?>

        </div> <!-- end #inner-content -->

    </div> <!-- end #content -->

<?php get_footer(); ?>
