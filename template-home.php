<?php
/*
Template Name: Home
*/

?>

<?php get_header(); ?>

<div id="content" >

    <div id="inner-content grid-x grid-padding-x">

        <div id="main" class="cell padding-top-1" role="main">

            <!-- Deep Blue Ribbon-->
            <div class="grid-x grid-margin-x grid-margin-y deep-blue-section">
                <div class="large-2 cell"></div>
                <div class="cell large-8 center white">
                    <span class="thin-title">Zume.Vision</span>
                </div>
                <div class="large-2 cell"></div>
            </div>
            <!-- End Deep Blue Ribbon-->
            <!--Blue notch --><div class="white-section"><div class="cell center blue-notch"></div></div>

            <!-- White Section-->
            <div class="grid-x grid-margin-x grid-margin-y vertical-padding white-section">
                <div class="cell show-for-small hide-for-large center">
                    <a href="" alt="Register" class="button large center">
                        <?php esc_html_e( 'Get Started', 'zume' ) ?>
                    </a>
                    <a href="/" alt="Login" class="button large center white-button">
                        <?php esc_html_e( 'Login', 'zume' ) ?>
                    </a>
                </div>
                <div class="medium-3 small-2 cell"></div>
                <div class="medium-6 small-8 cell center">
                    <?php esc_html_e( "Zúme Vision - a multiplying spiritual family in every neighborhood.", 'zume' ) ?>
                </div>
                <div class="medium-3 small-2 cell"></div>

            </div>
            <div class="grid-x deep-blue-section"><div class="cell center white-notch"></div></div>
            <!-- White Notch-->


            <!-- Gradient Wrapper-->
            <div class="gradient-wrapper">




            </div> <!-- End Gradient Wrapper-->

            <!-- Deep Blue Ribbon-->
            <div class="grid-x grid-margin-x grid-margin-y vertical-padding deep-blue-section">
                <div class="large-2 cell"></div>
                <div class="cell large-8 center white">
                    <span class="thin-title">Zume.Vision</span>
                </div>
                <div class="large-2 cell"></div>
            </div>
            <!-- End Deep Blue Ribbon-->
            <!--Blue notch --><div class="white-section"><div class="cell center blue-notch"></div></div>

            <!----------------------------------->
            <!-- VIDEO RIBBON -->
            <!----------------------------------->
            <div class="gradient-wrapper">
                <div class="grid-x grid-margin-x " style="padding-top:30px">
                    <div class="medium-2 small-1 cell"></div>
                    <div class="medium-8 small-10 cell center">
                        <span class="thin-title white">Gradient Background</span>
                    </div> <!-- end cell-->
                    <div class="medium-2 small-1 cell"></div>
                </div>

                <div class="grid-x grid-margin-x grid-margin-y vertical-padding" style="max-width:100%; margin:0; background:white; padding:17px; color: #0A246A; font-size: 24px">
                    <div class="cell show-for-small hide-for-large  center">
                        <a href="" alt="Register" class="button large center " style="background:white; color:#323a68; font-family:'europa-regular'; padding:0.5em 2em">
                            <?php esc_html_e( 'Get Started', 'zume' ) ?>
                        </a>
                        <a href="/" alt="Login" class="button large center" style="background:white; color:#323a68; font-family:'europa-regular'; padding:0.5em 2em">
                            <?php esc_html_e( 'Login', 'zume' ) ?>
                        </a>
                    </div>
                    <div class="medium-3 small-2 cell"></div>
                    <div class="medium-6 small-8 cell center">
                        <?php esc_html_e( "Zúme Vision - a multiplying spiritual family in every neighborhood.", 'zume' ) ?>
                    </div>
                    <div class="medium-3 small-2 cell"></div>
                </div>
                <div class="grid-x grid-margin-x grid-margin-y vertical-padding" style="max-width:100%; margin:0; background:white; padding:17px; color: #0A246A; padding-top:0">
                    <div class="cell center" style="margin-top:0">
                        <img src="<?php echo esc_url( get_stylesheet_directory_uri() ) . '/assets/images/home/'; ?>zume-training.png">
                    </div>
                </div>

                <!----------------------------------->
                <!-- CHALLENGE RIBBON -->
                <!----------------------------------->
                <div class="grid-x grid-margin-x grid-margin-y vertical-padding" style="max-width:100%; margin:0; background:white; padding:17px">
                    <div class="medium-2 small-1 cell"></div>
                    <div class="medium-8 small-10 cell center">
                        <h3 style="margin-bottom:0px">
                            <strong><?php esc_html_e( 'Want to start the training?', 'zume' ) ?></strong>
                        </h3>
                    </div>
                    <div class="medium-2 small-1 cell"></div>
                </div>


                <!----------------------------------->
                <!-- GET STARTED RIBBON -->
                <!----------------------------------->
                <!-- triangle -->
                <div class="center white-notch"></div>
                <div class="row vertical-padding">
                    <div class="large-6 medium-8 small-10  center">
                        <h3><strong style="color: white"><?php esc_html_e( "It's as easy as 1-2-3", 'zume' ) ?></strong></h3>
                    </div>
                </div>

                <div class="grid-x grid-margin-x grid-margin-y vertical-padding easy-1-2-3" style="max-width:1200px; margin:0 auto">
                    <div class="cell medium-4 small-12">
                        <h4 class="" style="color:white;">
                            <span style="font-size:2.4rem;vertical-align:middle">&#10102</span>
                            <span style="font-size:1.5rem; display:inline-block; margin: 0 10px">
                             <?php esc_html_e( "Sign up", 'zume' ) ?></span>
                            <img class=""
                                 src="<?php echo esc_url( get_stylesheet_directory_uri() ) . '/assets/images/home/'; ?>sign-up.svg"
                                 alt="" width="50"/>
                        </h4>
                    </div>
                    <div class="cell medium-4 small-12">
                        <h4 class="" style="color:white">
                            <span style="font-size:2.4rem;vertical-align:middle">&#10103</span>
                            <span style="font-size:1.5rem; display:inline-block; margin: 0 10px">
                             <?php esc_html_e( "Invite some friends", 'zume' ) ?></span>
                            <img class=""
                                 src="<?php echo esc_url( get_stylesheet_directory_uri() ) . '/assets/images/home/'; ?>invite-friends.svg"
                                 alt="" width="50"/>
                        </h4>
                    </div>
                    <div class="cell medium-4 small-12">
                        <h4 class="" style="color:white">
                            <span style="font-size:2.4rem;vertical-align:middle">&#10104</span>
                            <span style="font-size:1.5rem; display:inline-block; margin: 0 10px">
                             <?php esc_html_e( "Host a training", 'zume' ) ?></span>
                            <img class=""
                                 src="<?php echo esc_url( get_stylesheet_directory_uri() ) . '/assets/images/home/'; ?>host-training.svg"
                                 alt="" width="50"/>
                        </h4>
                    </div>
                </div>
                <div class="grid-x grid-margin-x grid-margin-y vertical-padding">
                    <div class="medium-2 small-1 cell"></div>
                    <div class="medium-8 small-10 cell center" >
                        <a href="" alt="Register" class="button large center " style="background:white; color:#323a68; font-family:'europa-regular'; padding:0.5em 2em"><?php esc_html_e( 'Get Started', 'zume' ) ?></a>
                    </div>
                    <div class="medium-2 small-1 cell"></div>
                </div>
            </div> <!-- Gradient background -->


            <br clear />



            <!-- Find out more link -->
            <div class="grid-x ">
                <div class="small-8 medium-3 small-centered cell center vertical-padding">
                    <br>
                    <a href="<?php echo esc_url( '/' ) ?>" class="button large center " >
                        <?php esc_html_e( 'Find out more about Zúme', 'zume' ) ?></a>
                    <br>
                </div>
            </div>



        </div> <!-- end #main -->

    </div> <!-- end cell --><!-- content -->


    <?php get_footer(); ?>
