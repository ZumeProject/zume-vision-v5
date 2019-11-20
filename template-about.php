<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

<div id="content" >

    <div id="inner-content grid-x grid-padding-x">

        <div id="main" class="cell padding-top-1" role="main">
            <!-- Deep Blue Ribbon-->
            <div class="grid-x grid-margin-x grid-margin-y deep-blue-section">
                <div class="cell medium-3"></div>
                <div class="cell medium-6">
                    <div class="grid-x center">
                        <div class="cell center"><h2>What does Zúme mean?</h2></div>
                        <div class="cell content-large">
                            <p>"Zúme" is the Greek word for “yeast” or “leaven”. </p>
                            <p >In Matthew 13:33 and Luke 13:21 Jesus Christ is quoted as saying, “the kingdom of heaven
                                is like a woman who took yeast and mixed it into a large amount of flour until it was
                                all leavened”.</p>
                        </div>
                        <div class="cell">
                            <img src="<?php echo esc_url( zume_images_uri('vision') . 'yeastwhite.svg' ) ?>" class="float-center image-width" />
                        </div>
                    </div>
                </div>
                <div class="cell medium-3"></div>
            </div>
            <div class="grid-x blue-notch-wrapper"><div class="cell center blue-notch"></div></div>
            <!-- End Deep Blue Ribbon-->

            <!-- White Section-->
            <div class="grid-x grid-margin-x grid-margin-y vertical-padding white-section">
                <div class="center">
                    <div class="grid-x center ">
                        <div class="cell">
                            <h2>Who Are We?</h2>
                        </div>
                        <div class="cell">
                            <img src="<?php echo esc_url( zume_images_uri() . 'zume-logo.svg' ) ?>" style="width:300px;" />
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
                            <a href="/faq" class="button primary-button-hollow large">View FAQs</a> <a href="/roots" class="button primary-button-hollow large">View Roots</a><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-x white-notch-wrapper"><div class="cell center white-notch"></div></div><!-- White Notch-->
            <!-- End White Section-->



            <?php get_template_part('parts/content', 'strategy'); ?>


        </div> <!-- end #main -->

    </div> <!-- end cell --><!-- content -->

    <?php get_footer(); ?>
