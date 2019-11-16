<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

<div id="content" >

    <div id="inner-content grid-x grid-padding-x">

        <div id="main" class="cell padding-top-1" role="main">

            <!-- White Section-->
            <div class="grid-x grid-margin-x grid-margin-y vertical-padding white-section">
                <div class="center">
                    <div class="grid-x center ">
                        <div class="cell">
                            <h2>Who Are We?</h2>
                        </div>
                        <div class="cell">
                            <img src="<?php echo esc_url( zume_images_uri('zume_images') . 'V1.1/V1.1-A/ZumeLogo.svg' ) ?>" />
                            <img src="<?php echo esc_url( zume_images_uri('zume_images') . 'V1.1/V1.1-C/crowd_large.svg' ) ?>" />
                        </div>
                    </div>
                    <div class="grid-x grid-padding-y content-large">
                        <div class="cell">
                            We have ...
                        </div>
                        <div class="cell">
                            No buildings,<br>
                            No staff,<br>
                            No budgets,<br>
                            No programs.
                        </div>
                        <div class="cell">
                            So what's left?
                        </div>
                        <div class="cell">
                            A band of brothers and sisters<br>
                            loving God and loving others<br>
                            with immediate, radical, costly, obedience to Jesus.
                        </div>
                        <div class="cell">
                            <a href="/login" class="button primary-button-hollow large">Sound like you? Join Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-x white-notch-wrapper"><div class="cell center white-notch"></div></div><!-- White Notch-->
            <!-- End White Section-->

            <!-- Deep Blue Ribbon-->
            <div class="grid-x grid-margin-x grid-margin-y deep-blue-section">
                <div class="large-1 cell"></div>
                <div class="cell large-10">
                    <div class="grid-x center">
                        <div class="cell center"><h2>What does Zúme mean?</h2></div>
                        <div class="cell content-large">
                            <p>"Zúme" is the Greek word for “yeast” or “leaven”. </p>
                            <p >In Matthew 13:33 and Luke 13:21 Jesus Christ is quoted as saying, “the kingdom of heaven
                                is like a woman who took yeast and mixed it into a large amount of flour until it was
                                all leavened”.</p>
                        </div>
                        <div class="cell">
                            <img src="<?php echo esc_url( zume_images_uri('vision') . 'yeastwhite.svg' ) ?>" />
                        </div>
                    </div>
                </div>
                <div class="large-1 cell"></div>
            </div>
            <div class="white-section"><div class="cell center blue-notch"></div></div><!--Blue notch -->
            <!-- End Deep Blue Ribbon-->

            <!-- White Section-->
            <div class="grid-x grid-margin-x grid-margin-y white-section">
                <div class="medium-2 cell"></div>
                <div class="medium-8 cell center">
                    <div class="grid-x center">
                        <div class="cell center"><h2>Goals</h2></div>
                        <div class="cell content-large">
                            <p>1 training + 2 multiplying spiritual families (churches) x every 5,000 people in the United States.</p>
                            <p><img src="<?php echo esc_url( zume_images_uri('vision') . 'map-with-jesus.jpg' ) ?>" alt="us map"/></p>
                            <p>1 training + 2 multiplying spiritual families (churches) x every 50,000 people globally.</p>
                            <p><img src="<?php echo esc_url( zume_images_uri() )?>vision/jesus-globe.png" alt="welcome-graphic" /></p>
                            <p>
                                <a href="/progress" class="button primary-button-hollow large">View Progress</a>
                                <a href="/maps" class="button primary-button-hollow large">View Maps</a>
                                <a href="/news" class="button primary-button-hollow large">View News</a>
                                &nbsp;-&nbsp;Or&nbsp;-&nbsp;
                                <a href="/why-saturation" class="button primary-button-hollow large">Why Saturation?</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="medium-2 cell"></div>
            </div>
            <!-- End White Section-->



        </div> <!-- end #main -->

    </div> <!-- end cell --><!-- content -->

    <?php get_footer(); ?>
