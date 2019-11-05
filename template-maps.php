<?php
/**
 * Template Name: Maps
 */

get_header(); ?>

    <div class="content">

        <div class="inner-content grid-x grid-margin-x grid-padding-x">

            <div class="cell small-1"></div>

            <main class="main small-10 cell" role="main">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <?php get_template_part( 'parts/loop', 'page' ); ?>

                <?php endwhile; endif; ?>

                <div class="grid-x grid-padding-y grid-padding-x">
                    <div class="cell small-3">
                        <div class="callout center align-top" style="height: 300px;" onclick="open_bourndary_map()" >
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/maps/mapsample.png' ) ?>" /><br>
                            Drill Down Map - Boundaries
                        </div>
                    </div>
                    <div class="cell small-3">
                        <div class="callout center align-top" style="height: 300px;" onclick="open_bourndary_map()" >
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/maps/mapsample.png' ) ?>" /><br>
                            Local Vision Map
                        </div>
                    </div>

                   <div class="cell small-3">
                        <div class="callout center align-top" style="height: 300px;" onclick="open_bourndary_map()" >
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/maps/mapsample.png' ) ?>" /><br>
                            Trainings
                        </div>
                    </div>
                   <div class="cell small-3">
                        <div class="callout center align-top" style="height: 300px;" onclick="open_bourndary_map()" >
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/maps/mapsample.png' ) ?>" /><br>
                            Churches
                        </div>
                    </div>
                   <div class="cell small-3">
                        <div class="callout center align-top" style="height: 300px;" onclick="open_bourndary_map()" >
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/maps/mapsample.png' ) ?>" /><br>
                            City Search
                        </div>
                    </div>
                   <div class="cell small-3">
                        <div class="callout center align-top" style="height: 300px;" onclick="open_bourndary_map()" >
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/maps/mapsample.png' ) ?>" /><br>
                            Other
                        </div>
                    </div>

                </div>

            </main> <!-- end #main -->

            <div class="cell small-1"></div>

        </div> <!-- end #inner-content -->

    </div> <!-- end #content -->

<?php get_template_part( "parts/content", "fullmodal" ); ?>

<?php get_footer(); ?>
