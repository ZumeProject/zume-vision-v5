<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

<!-- Title Section-->
<div class="grid-x grid-padding-x deep-blue-section padding-vertical-1">
    <div class="cell center">
        <h1 class="center title">Who Are We?</h1>
    </div>
</div>
<div class="grid-x blue-notch-wrapper"><div class="cell center blue-notch"></div></div>

<div id="post-main" class="main" role="main">

    <!-- Header Image-->
    <div class="center">
        <img src="<?php echo esc_url( zume_images_uri() . 'zume-logo.svg' ) ?>" style="width:300px;" alt="Zume logo" />
        <img src="<?php echo esc_url( zume_images_uri( 'zume_images' ) . 'V1.1/V1.1-C/crowd_large.svg' ) ?>" alt="Crowd Image"/>
        <br>
        <h2>Zúme is a community of practice <br>for those who want to see disciple making movements.</h2>
        <p class="padding-top-1"><button class="button primary-button-hollow large" data-open="">Join Our Community</button></p>
    </div>

    <!-- Content -->
    <div class="grid-x grid-margin-x">

        <div class="cell large-2"></div> <!-- column -->

        <div class="blog cell large-8">

            <!-- White Section-->
            <div id="post-main" class="grid-x grid-margin-x white-section">

                <div class="grid-x grid-padding-y">

                    <div class="cell">

                        <figure class="wp-block-pullquote">
                            <blockquote>
                                <p>
                                    We have ...
                                </p>
                                <p>
                                    NO buildings, NO staff,<br> NO budgets, NO programs.
                                </p>
                                <p>
                                    So what's left?
                                </p>
                            </blockquote>
                        </figure>
                    </div>

                    <div class="cell content-large">
                        <p>We are a band of brothers and sisters being transformed by God through loving God and loving others, aspiring to lives that are marked by immediate, radical, costly, obedience to Jesus.</p>
                        <p></p>
                        <ul>
                            <li>
                                <strong>Inwardly,</strong> we want Jesus ... to know him and be
                                fully known by him.
                            </li>
                            <li>
                                <strong>Outwardly,</strong> we want to bless and be ambassadors of the knowledge of God and his
                                love for the world. We want to see spiritual families give birth to more spiritual families in every neighborhood in every city.
                            </li>
                            <li>
                                <strong>In practice,</strong> we want to think differently about making disciples who make disciples. We seek to to
                                prioritize Jesus ways, doing the things he did in the ways he did them and releasing practices, processes, and strategies that we don't
                                see him doing.
                            </li>
                        </ul>
                    </div>
                    <div class="cell content-large">
                        Explore a great introduction to these ideas that inspire us through our <a href="https://zume.training/training"><strong>free online training</strong></a>.
                    </div>
                    <div class="cell center">
                        <a href="https://zume.training/training" class="button primary-button-hollow large">View Training</a> <a href="/faq" class="button primary-button-hollow large">View FAQs</a> <a href="/roots" class="button primary-button-hollow large">View Roots</a><br>
                    </div>
                </div>
            </div>

        </div><!-- center -->

        <div class="cell large-2"></div> <!-- column-->

    </div>

</div> <!-- end #main -->

<div class="grid-x white-notch-wrapper"><div class="cell center white-notch"></div></div><!-- White Notch-->

<?php get_template_part( 'parts/content', 'strategy' ); ?>

<?php get_template_part( 'parts/content', 'modal' ); ?>

<?php get_footer(); ?>
