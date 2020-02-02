<?php
/*
Template Name: Home
*/
$post = get_post();
?>

<?php get_header(); ?>

<div id="content" >

    <div id="inner-content grid-x grid-padding-x">

        <div id="main" class="cell padding-top-1" role="main">

            <!-- White Section-->
            <div class="grid-x grid-margin-x grid-margin-y white-section">
                <div class="medium-1 cell"></div>
                <div class="medium-10 cell center">
                    <div class="grid-x center">
                        <div class="cell"><img src="<?php echo esc_url( zume_images_uri() )?>zume-logo.svg" style="max-height:100px" id="home-logo" alt="welcome-graphic" /></div>
                        <div class="cell"><p class="large-text">to saturate the world with multiplying disciples<br>in our generation.</p></div>
                        <div class="cell"><img src="<?php echo esc_url( zume_images_uri() )?>vision/jesus-globe.png" alt="welcome-graphic" style="max-height:250px"  /></div>
                        <div class="cell"><p class="large-text">Zúme is a community of practice <br>for those who want to see disciple making movements.</p></div>
                        <div class="cell padding-top-2">
                            <div class="grid-x">
                                <div class="cell medium-4">
                                    <div class="grid-x center">
                                        <div class="cell">
                                            World Population<br><span class="home-counter" id="population-count-1">0</span>
                                        </div>

                                        <div class="cell">
                                            Deaths Without Christ Today<br><span class="home-counter" id="christless-deaths-today-count-1">0</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cell medium-4">
                                    <div class="grid-x center">
                                        <div class="cell">
                                            Trainings Needed<br><span class="home-counter" id="trainings-needed-count-1">0</span>
                                        </div>
                                        <div class="cell">
                                            Trainings Reported<br><span class="home-counter" id="trainings-reported-count-1">0</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cell medium-4">

                                    <div class="grid-x center">
                                        <div class="cell">
                                            New Churches Needed<br><span class="home-counter" id="churches-needed-count-1">0</span>
                                        </div>
                                        <div class="cell">
                                            New Churches Reported<br><span class="home-counter" id="churches-reported-count-1">0</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
                <div class="medium-1 cell"></div>

                <div class="cell center">
                    <a href="/progress" class="button primary-button-hollow large">View Progress</a>
                </div>

            </div>
            <div class="grid-x white-notch-wrapper"><div class="cell center white-notch"></div></div><!-- White Notch-->
            <!-- End White Section-->


            <!-- Strategy Section -->
            <?php get_template_part( 'parts/content', 'strategy' ); ?>





        </div> <!-- end #main -->

    </div> <!-- end cell --><!-- content -->

<?php get_footer(); ?>
