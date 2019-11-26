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
            <div class="grid-x grid-margin-x grid-margin-y vertical-padding white-section">
                <div class="medium-2 cell"></div>
                <div class="medium-8 cell center">
                    <div class="grid-x center">
                        <div class="cell"><img src="<?php echo esc_url( zume_images_uri() )?>zume-logo.svg" style="max-width:300px" id="home-logo" alt="welcome-graphic" /></div>
                        <div class="cell"><p class="large-text">to saturate the world with multiplying disciples<br>in our generation.</p></div>
                        <div class="cell"><img src="<?php echo esc_url( zume_images_uri() )?>vision/jesus-globe.png" alt="welcome-graphic" /></div>
                        <div class="cell padding-top-2">
                            <div class="grid-x center ">
                                <div class="cell medium-4">World Population<br><span class="home-counter">7,743,697,839</span></div>
                                <div class="cell medium-4">Trainings Needed<br><span class="home-counter">1,548,739</span></div>
                                <div class="cell medium-4">New Churches Needed<br><span class="home-counter">3,097,479</span></div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="medium-2 cell"></div>

                <div class="cell center">
                    <?php get_template_part('parts/content', 'joinus'); ?>
                </div>

            </div>
            <div class="grid-x white-notch-wrapper"><div class="cell center white-notch"></div></div><!-- White Notch-->
            <!-- End White Section-->


            <!-- Strategy Section -->
            <?php get_template_part('parts/content', 'strategy'); ?>


            <!-- Progress Section-->
            <div class="grid-x deep-blue-section">
                <div class="cell center">
                    <h2>Progress</h2>
                    <h3>Our progress towards the goal</h3>
                </div>
            </div>
            <div class="grid-x blue-notch-wrapper"><div class="cell center blue-notch"></div></div>
            <div class="grid-x grid-margin-x white-section">
                <div class="medium-1 small-2 cell"></div>
                <div class="medium-10 small-8 cell">

                    <div class="grid-x grid-padding-y news-section">

                        <div class="cell center">
                            <h3 class="center padding-bottom-2">Live Statistics</h3>
                            <div class="grid-x center">
                                <div class="cell medium-3"></div>
                                <div class="cell medium-3  callout">
                                    Trainings<br>
                                    <span class="home-counter">490</span>
                                </div>
                                <div class="cell medium-3  callout">
                                    Churches<br>
                                    <span class="home-counter">690</span>
                                </div>
                                <div class="cell medium-3"></div>
                            </div>
                        </div>
                        <div class="cell center">
                            <a href="/progress" class="button primary-button-hollow large">View Progress</a>
                            <a href="/maps" class="button primary-button-hollow large">View Maps</a>

                        </div>

                        <div class="cell">
                            <h3 class="center padding-bottom-2">Reports</h3>
                            <?php get_template_part('parts/widget', 'reports'); ?>
                        </div>
                        <div class="cell center">
                            <a href="/news" class="button primary-button-hollow large">View News</a>
                        </div>
                    </div>
                </div>
                <div class="medium-1 small-2 cell"></div>
            </div>


        </div> <!-- end #main -->

    </div> <!-- end cell --><!-- content -->

<?php get_footer(); ?>
