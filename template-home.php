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
                        <div class="cell"><p class="large-text">to saturation the globe with multiplying disciples<br> in our generation by starting 1 training and 2 churches <br>among every 50,000 people globally.</p></div>
                        <div class="cell"><img src="<?php echo esc_url( zume_images_uri() )?>vision/jesus-globe.png" alt="welcome-graphic" /></div>
                        <div class="cell padding-top-2">
                            <div class="grid-x center ">
                                <div class="cell medium-4">World Population<br><span class="home-counter">7,743,697,839</span></div>
                                <div class="cell medium-4">Trainings Needed<br><span class="home-counter">1,548,739</span></div>
                                <div class="cell medium-4">New Churches Needed<br><span class="home-counter">3,097,479</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="cell medium-6 small-8 center padding-top-2">
                        <a href="/about" class="button primary-button large">Learn More</a>
                    </div>
                </div>
                <div class="medium-2 cell"></div>
            </div>

            <!-- End White Section-->


            <!-- Deep Blue Ribbon-->
            <div class="grid-x grid-margin-x grid-margin-y deep-blue-section" >
                <div class="large-1 cell"></div>
                <div class="cell large-10">
                    <div class="grid-x margin-1 padding-2 center">
                        <div class="cell large-text">
                            "Zúme" is the Greek word for “yeast” or “leaven”. In Matthew 13:33
                            and Luke 13:21 Jesus Christ is quoted as saying, “the kingdom of
                            heaven is like a woman who took yeast and mixed it into a large
                            amount of flour until it was all leavened”. This illustrates how ordinary
                            people, using ordinary resources, can have an extraordinary impact for
                            the Kingdom of God.
                        </div>
                    </div>
                </div>
                <div class="large-1 cell"></div>
            </div>
            <div class="white-section"><div class="cell center blue-notch"></div></div><!--Blue notch -->
            <!-- End Deep Blue Ribbon-->

            <!-- White Section-->
            <div class="grid-x grid-margin-x white-section">
                <div class="medium-1 small-2 cell"></div>
                <div class="medium-10 small-8 cell">
                    <div class="grid-x news-section">
                        <div class="cell center"><h2>Progress</h2></div>
                        <div class="cell center">
                            <hr>
                            <div class="grid-x center">
                                <div class="cell medium-4 ">
                                    Trainings<br>
                                    <span class="home-counter">490</span>
                                </div>
                                <div class="cell medium-4 ">
                                    Churches<br>
                                    <span class="home-counter">690</span>
                                </div>
                                <div class="cell medium-4 ">
                                    Locations<br>
                                    <span class="home-counter">140</span>
                                </div>
                            </div>
                            <hr>
                        </div>

                        <div class="cell">
                            <div class="grid-x">
                                <?php
                                $the_query = new WP_Query( 'posts_per_page=6' );
                                while ($the_query -> have_posts()) : $the_query -> the_post();
                                ?>
                                    <div class="cell medium-2 card margin-horizontal-1">
                                        <?php if ( has_post_thumbnail( ) ) : ?>
                                            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('200'); ?></a>
                                        <?php endif; ?>
                                        <div class="card-section">
                                            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                                        </div>
                                    </div>
                                <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="medium-1 small-2 cell"></div>
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
