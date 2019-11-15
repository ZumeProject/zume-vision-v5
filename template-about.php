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
                            <img src="<?php echo esc_url( zume_images_uri('zume_images') . 'V1.1/V1.1-A/ZumeLogo.svg' ) ?>" />
                            <img src="<?php echo esc_url( zume_images_uri('zume_images') . 'V1.1/V1.1-C/crowd_large.svg' ) ?>" />
                        </div>
                        <div class="cell"><h2>Who We Are</h2></div>
                        <div class="cell">No buildings.</div>
                        <div class="cell">No staff.</div>
                        <div class="cell">No budgets.</div>
                        <div class="cell">No programs.</div>
                        <div class="cell padding-top-2">A band of brothers and sisters<br>following Jesus.</div>
                    </div>
                </div>
            </div>
            <div class="grid-x white-notch-wrapper"><div class="cell center white-notch"></div></div><!-- White Notch-->
            <!-- End White Section-->


            <!-- Deep Blue Ribbon-->
            <div class="grid-x grid-margin-x grid-margin-y deep-blue-section">
                <div class="large-1 cell"></div>
                <div class="cell large-10">

                </div>
                <div class="large-1 cell"></div>
            </div>
            <div class="white-section"><div class="cell center blue-notch"></div></div><!--Blue notch -->
            <!-- End Deep Blue Ribbon-->

            <!-- White Section-->
            <div class="grid-x grid-margin-x grid-margin-y white-section">
                <div class="medium-3 small-2 cell"></div>
                <div class="medium-6 small-8 cell center">
                    <div class="grid-x center">
                        <div class="cell center"><h2>What does Zúme mean?</h2></div>
                        <div class="cell content-large">
                            <p>"Zúme" is the Greek word for “yeast” or “leaven”. </p>
                            <p>In Matthew 13:33 and Luke 13:21 Jesus Christ is quoted as saying, “the kingdom of heaven
                                is like a woman who took yeast and mixed it into a large amount of flour until it was
                                all leavened”.</p>
                        </div>
                        <div class="cell">
                            <img src="<?php echo esc_url( zume_images_uri('vision') . 'makingyeast.svg' ) ?>" />
                        </div>
                    </div>
                </div>
                <div class="medium-3 small-2 cell"></div>
            </div>
            <div class="grid-x deep-blue-section"><div class="cell center white-notch"></div></div><!-- White Notch-->
            <!-- End White Section-->

            <!-- Deep Blue Ribbon-->
            <div class="grid-x grid-margin-x grid-margin-y deep-blue-section" style="height:500px;">
                <div class="large-1 cell"></div>
                <div class="cell large-10">
                    <div class="grid-x margin-2 center">
                        <div class="cell">
                        </div>
                    </div>
                </div>
                <div class="large-1 cell"></div>
            </div>

        </div> <!-- end #main -->

    </div> <!-- end cell --><!-- content -->

    <?php get_footer(); ?>
