<?php
/*
Template Name: Training
*/
?>

<?php get_header(); ?>

    <div id="content" class="grid-x"><div class="cell">

        <div id="inner-content">

            <!-- Deep Blue Ribbon-->
            <div class="grid-x grid-margin-x grid-margin-y deep-blue-section" >
                <div class="large-1 cell"></div>
                <div class="cell large-10">
                    <div class="grid-x center">
                        <div class="cell">
                            <h2>On-Demand Training</h2>
                        </div>
                    </div>
                </div>
                <div class="large-1 cell"></div>
            </div>
            <div class="blue-notch-wrapper"><div class="cell center blue-notch"></div></div><!--Blue notch -->
            <!-- End Deep Blue Ribbon-->

            <!-- Challenge -->
            <div class="grid-x white-section">
                <div class="medium-2 small-1 cell"></div>
                <div class="medium-8 small-10 cell ">
                    <div class="grid-x">
                        <div class="cell center"><h2><?php esc_html_e( 'Zúme.Training', 'zume' ) ?></h2></div>
                        <div class="cell center">
                            <h3><?php esc_html_e('Free, online, in-life training for small groups', 'zume') ?></h3></div>
                        <div class="cell center"><?php esc_html_e( 'Zúme uses an online training platform to equip participants in basic disciple-making and simple church planting multiplication principles, processes, and practices.', 'zume' ) ?></div>
                        <div class="cell center">
                            <div class="small-6 small-centered cell video-section">
                                <iframe style="border: 1px solid lightgrey;"  src="https://player.vimeo.com/video/248149797" width="560" height="315"
                                        frameborder="1"
                                        webkitallowfullscreen mozallowfullscreen allowfullscreen>
                                </iframe>
                            </div>
                        </div>

                        <div class="cell">
                            <div class="grid-x grid-padding-x grid-padding-y">
                                <div class="medium-4 cell center">
                                    <img src="<?php echo esc_url( get_stylesheet_directory_uri()) ?>/assets/images/pages/training2.png"
                                         alt="Zúme consists of 10 sessions, 2 hours each" height="150"/>
                                </div>
                                <div class="medium-8 cell ">
                                    <h3>Zúme consists of 10 sessions, 2 hours each.<br>They are self-organized, participant-facilitated, and free.</h3>
                                    <ul>
                                        <li><?php esc_html_e( 'Video and Audio to help your group understand basic principles of multiplying disciples.', 'zume' ) ?></li>
                                        <li><?php esc_html_e( 'Group Discussions to help your group think through what’s being shared.', 'zume' ) ?></li>
                                        <li><?php esc_html_e( 'Simple Exercises to help your group put what you’re learning into practice.', 'zume' ) ?></li>
                                        <li><?php esc_html_e( 'Session Challenges to help your group keep learning and growing between sessions.', 'zume' ) ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="cell center">
                            <a href="https://zume.training" target="_blank" class="button large secondary-button" >Go to www.zume.training</a>
                        </div>
                    </div>
                </div>
                <div class="medium-2 small-1 cell"></div>
            </div>

            <!-- Deep Blue Ribbon-->
            <div class="grid-x grid-margin-x grid-margin-y deep-blue-section" >
                <div class="large-1 cell"></div>
                <div class="cell large-10">
                    <div class="grid-x center">
                        <div class="cell">
                            <h2>Live Trainings</h2>
                            <p>Disciple Making Movement trainings are marketed by equipping believers with multiplication principles, processes, and practices.</p>
                        </div>
                    </div>
                </div>
                <div class="large-1 cell"></div>
            </div>
            <div class="blue-notch-wrapper"><div class="cell center blue-notch"></div></div><!--Blue notch -->
            <!-- End Deep Blue Ribbon-->

            <!-- Challenge -->
            <div class="grid-x white-section">
                <div class="medium-2 small-1 cell"></div>
                <div class="medium-8 small-10 cell ">
                    <div class="grid-x center">
                        <div class="cell">
                            <img src="<?php echo esc_url( zume_images_uri( 'vision' ) ) ?>metacamp.jpg" alt="metacamp logo" />
                        </div>
                        <div class="cell">
                            <p>MetaCamp Discipleship is led by Curtis Sergeant who leads training events both on-site in
                                Dadeville, Alabama and “on the road” for other organizations or churches.</p>
                            <p>Training events can be scheduled at the MetaCamp facility in Dadeville, Alabama or at
                                another site around the USA or around the world. You can see a list of upcoming events
                                on this site’s calendar.</p>
                        </div>
                        <div class="cell">
                            <a href="https://metacamp.org" class="button primary-button-hollow" target="_blank">Visit MetaCamp.org</a>
                        </div>

                    </div>
                </div>
                <div class="medium-2 small-1 cell"></div>
            </div>

        </div> <!-- end #inner-content -->

        </div> <!-- cell -->
    </div> <!-- content -->

<?php get_footer(); ?>
