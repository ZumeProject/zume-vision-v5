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
                    <div class="grid-x grid-padding-x center">
                        <div class="cell"><img src="<?php echo esc_url( zume_images_uri() )?>zume-logo.svg" style="max-height:100px" id="home-logo" alt="welcome-graphic" /></div>
                        <div class="cell"><p class="large-text">to saturate the world with multiplying disciples<br>in our generation.</p></div>
                        <div class="cell"><img src="<?php echo esc_url( zume_images_uri() )?>vision/jesus-globe.png" alt="disciple making movements" style="max-height:250px"  /></div>
                        <div class="cell"><h1 id="zume-vision" class="large-text">Zúme is a community of practice <br>for those who want to see disciple making movements.</h1></div>
                        <div class="cell padding-top-1">
                            <?php get_template_part( "parts/content", "join" ); ?>
                        </div>
                        <div class="cell padding-top-2">
                            <div class="grid-x">
                                <div class="cell medium-4">
                                    <div class="grid-x center">
                                        <div class="cell">
                                            World Population<br><span class="home-counter" id="population-count-1">0</span>
                                        </div>
<!--                                        <div class="cell">-->
<!--                                            Trainings Needed<br><span class="home-counter" id="trainings-needed-count-1">0</span>-->
<!--                                        </div>-->
                                    </div>
                                </div>
                                <div class="cell medium-4">
                                    <div class="grid-x center">
                                        <div class="cell">
                                            Born with No Access to the Gospel Today<br>
                                            <span class="home-counter" id="births-among-unreached-today-count-1">--</span>
                                        </div>
<!--                                        <div class="cell">-->
<!--                                            New Churches Needed<br><span class="home-counter" id="churches-needed-count-1">0</span>-->
<!--                                        </div>-->
                                    </div>
                                </div>
                                <div class="cell medium-4">

                                    <div class="grid-x center">
                                        <div class="cell">
                                            Deaths without Christ Today<br><span class="home-counter" id="christless-deaths-today-count-1">0</span>
                                        </div>

<!--                                        <div class="cell">-->
<!--                                            Saturation Maps<br>-->
<!--                                            <a class="button secondary-button-hollow large hollow" href="/maps/" style="margin-top:10px;" type="button">View Maps</a>-->
<!--                                        </div>-->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
                <div class="medium-1 cell"></div>
            </div>

            <!-- Map Image -->
            <div class="grid-x blue-notch-wrapper" style="background-image: url('<?php echo get_theme_file_uri('assets/images/background-map.png') ?>');
                background-repeat: no-repeat;
                background-size: cover;
                height: 500px;">
                <div class="cell center white-notch"></div>

                <div style="position: absolute; width:100%; padding-top:175px;">
                    <div style="position:relative; ">
                        <div class="grid-x">
                            <div class="cell small-1 medium-3"></div>
                            <div class="cell small-10 medium-6 center">
                                <a class="button large expanded" href="/maps/"><h2 style="color:white;">Global Saturation Maps</h2></a>
                            </div>
                            <div class="cell small-1 medium-3"></div>
                        </div>
                    </div>
                </div>

            </div><!-- White Notch-->



            <!-- White Section-->
            <div class="grid-x blue-notch-wrapper"><div class="cell center white-notch"></div></div><!-- White Notch-->
            <div class="grid-x grid-padding-x white-section">
                <div class="cell center">
                    <h2>Stay Connected</h2>
                    <div class="grid-x">
                        <div class="cell medium-4 hide-for-small-only"></div>
                        <div class="cell medium-4">
                                <h3>Get the Podcast</h3>
                                <a href="/multiplying-disciples-podcast/" class="button secondary-button large expanded button-secondary-link" style="padding-bottom:8px;
                                padding-top: 8px;"><i class="fi-microphone"></i> Podcast</a>
                        </div>
                        <div class="cell medium-4 hide-for-small-only"></div>
                        <div class="cell medium-4 hide-for-small-only"></div>
                        <div class="cell medium-4">
                            <?php get_template_part( 'parts/content', 'reports-subscribe' ); ?>
                        </div>
                        <div class="cell medium-4 hide-for-small-only"></div>
                    </div>
                </div>

            </div>

            <div class="grid-x grid-padding-x deep-blue-section">
                <div class="cell center" style="padding-top:2em;padding-bottom:2em;">
                    <h2>Our Community Goals</h2>
                    <h3>Holiness, Prayer, Training and Church Multiplication</h3>
                </div>
            </div>
            <div class="grid-x blue-notch-wrapper"><div class="cell center blue-notch"></div></div>
            <!-- White Section-->
            <div class="grid-x grid-padding-x white-section" data-equalizer data-equalize-on="medium" >

                <div class="cell medium-2 hide-for-small-only"></div>
                <div class="cell center medium-4">
                    <div class="callout goals" data-equalizer-watch>
                        <div class="goal-number">1</div>
                        <h2>Holiness, Obedience, and Love</h2>
                        <img src="<?php echo esc_url( zume_images_uri( 'zume_images' ) ) ?>V1.1/V1.1-C/Ruler.svg" alt="Jesus Measurement" />
                        <h3>We need to be disciples worth multiplying.</h3>
                    </div>
                </div>
                <div class="cell center medium-4">
                    <div class="callout goals" data-equalizer-watch>
                        <div class="goal-number">2</div>
                        <h2>Extraordinary Prayer</h2>
                        <img src="<?php echo esc_url( zume_images_uri( 'zume_images' ) ) ?>V1.2/V1.2-A/worshiping.svg" alt="Extraordinary Prayer" />
                        <h3>Extraordinary prayer has preceded every <a href="/articles/what-is-a-disciple-making-movement" class="underline">disciple making movement</a> in history.</h3>
                    </div>
                </div>
                <div class="cell medium-2 hide-for-small-only"></div>
                <div class="cell medium-2 hide-for-small-only"></div>
                <div class="cell center medium-4">
                    <div class="callout goals" data-equalizer-watch>
                        <div class="goal-number">3</div>
                        <h2>Training Multiplication</h2>
                        <div class="padding-vertical-2">
                            <h3 style="color: black;">1 Training</h3>
                            <img src="<?php echo esc_url( zume_images_uri( 'vision' ) ) ?>training-division-illustration.svg" style="max-width:800px;" alt="Training Saturation" /><br>
                            <h3 style="color: black;">Every 5,000 People (North America)<br>
                                Every 50,000 People (Globally)</h3>
                        </div>
                    </div>
                </div>
                <div class="cell center medium-4">
                    <div class="callout goals" data-equalizer-watch>
                        <div class="goal-number">4</div>
                        <h2>Simple Church Multiplication</h2>
                        <div class="padding-vertical-2">
                            <h3 style="color: black;">2 Simple Churches</h3>
                            <img src="<?php echo esc_url( zume_images_uri( 'vision' ) ) ?>two-churches-illustration.svg" style="max-width:800px;" alt="Church Saturation" /><br>
                            <h3 style="color: black;">Every 5,000 People (North America)<br>
                                Every 50,000 People (Globally)</h3>
                        </div>
                    </div>
                </div>
                <div class="cell medium-2 hide-for-small-only"></div>

                <div class="cell center"><a href="/about/" class="button secondary-button large">Learn More</a> </div>
            </div>
            
        </div> <!-- end #main -->

    </div> <!-- end cell --><!-- content -->
    <style>
        .goal-number {
            height:50px;
            width: 50px;
            position: relative;
            top: -30px;
            left: -30px;
            border-radius: 50%;
            background-color: #00aeff;
            color: white;
            font-weight: 600;
            font-size: 1.5em;
            padding-top: 5px;
        }
        .goals h2 {
            font-size:2.5em;
        }
        .button-secondary-link {
            font-size: 1.25rem;
            display: block;
            width: 100%;
            margin-right: 0;
            margin-left: 0;
            text-decoration: none;
        }
    </style>
<?php get_footer(); ?>
