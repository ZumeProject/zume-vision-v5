<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

<div id="content" >
    <!-- Title Section-->
    <div class="grid-x grid-padding-x deep-blue-section padding-vertical-1">
        <div class="cell center">
            <h1 class="center">Who Are We?</h1>
        </div>
    </div>
    <div class="grid-x blue-notch-wrapper"><div class="cell center blue-notch"></div></div>

    <div id="inner-content grid-x grid-padding-x">

        <div id="main" class="cell padding-top-1" role="main">

            <!-- White Section-->
            <div id="post-main" class="grid-x grid-margin-x grid-margin-y vertical-padding white-section">
                <div class="center post-main">
                    <div class="grid-x center ">
                        <div class="cell">
                        </div>
                        <div class="cell">
                            <img src="<?php echo esc_url( zume_images_uri() . 'zume-logo.svg' ) ?>" style="width:300px;" />
                            <img src="<?php echo esc_url( zume_images_uri( 'zume_images' ) . 'V1.1/V1.1-C/crowd_large.svg' ) ?>" />
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
                            <strong>Zúme aspires to be a community of practice.</strong>
                        </div>
                        <div class="cell">
                            <strong>Inwardly,</strong> we want Jesus ... to know him and be
                            fully known by him. <strong>Outwardly,</strong> we want to bless and be ambassadors of the knowledge of God and his
                            love for the world. <strong>In practice,</strong> we want to think differently about making disciples who make disciples. We seek to to
                            prioritize Jesus ways, doing the things he did in the ways he did them and releasing practices, processes, and strategies that we don't
                            see him doing.
                        </div>
                        <div class="cell">
                            Explore a great
                            introduction to these ideas that inspire us through our <a href="https://zume.training/training"><strong>free
                                    online training</strong></a>.
                        </div>
                        <div class="cell">
                            <a href="https://zume.training/training" class="button primary-button-hollow large">View Training</a> <a href="/faq" class="button primary-button-hollow large">View FAQs</a> <a href="/roots" class="button primary-button-hollow large">View Roots</a><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-x white-notch-wrapper"><div class="cell center white-notch"></div></div><!-- White Notch-->
            <!-- End White Section-->




            <?php get_template_part( 'parts/content', 'strategy' ); ?>


        </div> <!-- end #main -->

    </div> <!-- end cell -->
</div><!-- content -->

<?php get_footer(); ?>
