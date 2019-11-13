<?php
/*
Template Name: Online Training
*/
?>

<?php get_header(); ?>

    <div id="content" class="grid-x grid-padding-x"><div class="cell">

        <div id="inner-content">

            <!-- Challenge -->
            <div class="grid-x grid-margin-x grid-margin-y white-section">
                <div class="medium-2 small-1 cell"></div>
                <div class="medium-8 small-10 cell center">
                    <h2><?php esc_html_e( 'Zúme Training', 'zume' ) ?></h2>
                </div>
                <div class="medium-2 small-1 cell"></div>
            </div>

            <div class="grid-x ">
                <div class="large-2 cell"></div>

                <div class="large-8 small-12 cell">

                    <!-- Video -->
                    <div class="grid-x grid-margin-x grid-margin-y">
                        <div class="cell small-3"></div>
                        <div class="small-6 small-centered cell video-section">
                            <iframe style="border: 1px solid lightgrey;"  src="https://player.vimeo.com/video/248149797" width="560" height="315"
                                    frameborder="1"
                                    webkitallowfullscreen mozallowfullscreen allowfullscreen>
                            </iframe>
                        </div>
                        <div class="cell small-3"></div>
                    </div>

                    <div class="grid-x">
                        <div class="cell center">
                            <a href="https://zume.training" target="_blank" class="button large secondary-button" >Go to www.zume.training</a>
                        </div>
                    </div>

                    <div class="grid-x row vertical-padding">
                        <div class="cell ">
                            <p style="font-size: 150%; margin: 20px 0 40px 0; text-align: center;"><?php esc_html_e( 'Zúme uses an online training platform to equip participants in basic disciple-making and simple church planting multiplication principles, processes, and practices.', 'zume' ) ?></p>
                        </div>
                    </div>

                </div>
                <div class="large-2 cell"></div>
            </div>


            <!-- Goals of the Zume Project -->
            <div class="grid-x grid-margin-x grid-margin-y vertical-padding deep-blue-section">
                <div class="large-2 cell"></div>
                <div class="cell large-8" style="color: white;">
                    <h3 class="secondary" style="color: white;"><?php esc_html_e( 'Goals of the Zúme Project:', 'zume' ) ?></h3>
                    <p>
                        <?php esc_html_e( 'Zúme means yeast in Greek. In Matthew 13:33, Jesus is quoted as saying, "The Kingdom of Heaven is like a woman who took yeast and mixed it into a large amount of flour until it was all leavened." This illustrates how ordinary people, using ordinary resources, can have an extraordinary impact for the Kingdom of God. Zúme aims to equip and empower ordinary believers to saturate the globe with multiplying disciples in our generation.', 'zume' ) ?>
                    </p>
                    <p>
                        <?php esc_html_e( 'Zúme uses an online training platform to equip participants in basic disciple-making and simple church planting multiplication principles, processes, and practices.', 'zume' ) ?>
                    </p>
                </div>
                <div class="large-2 cell"></div>
            </div>

            <!-- Description -->
            <div class="grid-x margin-top-2 white-section">
                <div class="medium-2 cell"></div>
                <div class="medium-8 cell ">

                    <div class="grid-x grid-padding-x grid-padding-y">
                        <div class="cell center"><h2>Overview</h2></div>
                        <div class="medium-4 cell center">
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri()) ?>/assets/images/pages/training2.png"
                                 alt="Zúme consists of 10 sessions, 2 hours each" height="150"/>
                        </div>
                        <div class="medium-8 cell ">
                            <h3><?php esc_html_e( 'Zúme consists of 10 sessions, 2 hours each', 'zume' ) ?>:</h3>
                            <ul>
                                <li><?php esc_html_e( 'Video and Audio to help your group understand basic principles of multiplying disciples.', 'zume' ) ?></li>
                                <li><?php esc_html_e( 'Group Discussions to help your group think through what’s being shared.', 'zume' ) ?></li>
                                <li><?php esc_html_e( 'Simple Exercises to help your group put what you’re learning into practice.', 'zume' ) ?></li>
                                <li><?php esc_html_e( 'Session Challenges to help your group keep learning and growing between sessions.', 'zume' ) ?></li>
                            </ul>
                        </div>
                    </div>


                    <div class="grid-x grid-padding-x grid-padding-y">
                        <div class="medium-4 cell center">
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri()) ?>/assets/images/pages/getstarted.png"
                                 alt="" width="230" height="150"/>
                        </div>
                        <div class="medium-8 cell ">
                            <h3><?php esc_html_e( 'How to get started:', 'zume' ) ?></h3>
                            <ul style="margin-bottom: 1.8rem;">
                                <li><?php esc_html_e( 'If you haven\'t created a login yet, please do so.', 'zume' ) ?></li>
                                <li>
                                    <?php esc_html_e( 'Invite 3-11 friends. A minimum group of 3-4 is needed for the practice and elements of the training.', 'zume' ) ?>
                                </li>
                                <li><?php esc_html_e( 'Schedule a time to get together with your friends.', 'zume' ) ?></li>
                                <li><?php esc_html_e( 'Make sure you have access to an internet-enabled device.', 'zume' ) ?></li>
                            </ul>
                        </div>
                    </div>

                    <div class="grid-x grid-padding-x grid-padding-y">
                        <div class="medium-4 cell center">
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri()) ?>/assets/images/pages/guidebook.png"
                                 alt="" width="230" height="150"/>
                        </div>
                        <div class="medium-8 cell ">
                            <h3><?php esc_html_e( 'Optional prep for your first meeting:', 'zume' ) ?></h3>
                            <ul>
                                <li><?php esc_html_e( 'Download the Zúme Guidebook.', 'zume' ) ?></li>
                                <li><?php esc_html_e( 'If you\'d like, you can print out copies for the members of your group.', 'zume' ) ?></li>
                                <li><?php esc_html_e( 'Consider connecting to a TV or projector so everyone in your group can view the content.', 'zume' ) ?>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="grid-x">
                        <div class="cell center">
                            <a href="https://zume.training" target="_blank" class="button large secondary-button" >Go to www.zume.training</a>
                        </div>
                    </div>

                </div>
                <div class="large-2 cell"></div>
            </div><!-- end #main -->

        </div> <!-- end #inner-content -->

        </div> <!-- cell -->
    </div> <!-- content -->

<?php get_footer(); ?>
