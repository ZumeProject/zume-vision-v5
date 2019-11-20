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

                        <iframe src="https://global.zumeproject.com/wp-content/plugins/disciple-tools-public-map/map.php?token=876543456789" frameborder="0" marginheight="0" marginwidth="0" style="border: 0; scroll-behavior: unset; width:100%; max-width:1300px; height:650px">Loading...</iframe><br>

                        <span style="color:gray;font-size:.8em;">map powered by <a href="https://disciple.tools">Disciple.Tools</a> - <a href="https://github.com/DiscipleTools/location-grid-project">Location Grid</a> version 1</span>

                    </div>

                    <br clear="all">

                </div>

            </main> <!-- end #main -->

            <div class="cell small-1"></div>

            <?php get_template_part('parts/content', 'prayer-of-saturation'); ?>

        </div> <!-- end #inner-content -->

    </div> <!-- end #content -->

<?php get_footer(); ?>
