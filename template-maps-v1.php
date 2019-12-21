<?php
/**
 * Template Name: Maps v1
 */

get_header(); ?>

    <div class="content">

        <div class="inner-content grid-x grid-margin-x grid-padding-x">

            <div class="cell medium-1"></div>

            <main class="main medium-10 cell" role="main">

                <div class="center">

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

            <div class="cell medium-1"></div>



        </div> <!-- end #inner-content -->

    </div> <!-- end #content -->

<?php get_footer(); ?>
