<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<div id="content" >

    <div id="inner-content grid-x grid-padding-x">

        <div id="main" class="cell padding-top-1" role="main">

            <!-- White Section-->
            <div class="grid-x grid-margin-x grid-margin-y vertical-padding white-section">
                <div class="medium-3 small-2 cell"></div>
                <div class="medium-6 small-8 cell center">
                    <div class="grid-x center">
                        <div class="cell"><img src="<?php echo esc_url( zume_images_uri() )?>zume-logo.svg" style="max-width:300px" id="home-logo" alt="welcome-graphic" /></div>
                        <div class="cell"><p class="large-text">to saturation the globe with multiplying disciples<br> in our generation by starting 1 training and 2 churches <br>among every 50,000 people globally.</p></div>
                        <div class="cell"><img src="<?php echo esc_url( zume_images_uri() )?>vision/jesus-globe.png" alt="welcome-graphic" /></div>
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
            <div class="white-section"><div class="cell center blue-notch"></div></div><!--Blue notch -->
            <!-- End Deep Blue Ribbon-->

            <!-- White Section-->
            <div class="grid-x grid-margin-x grid-margin-y vertical-padding white-section" style="height:500px">
                <div class="medium-3 small-2 cell"></div>
                <div class="medium-6 small-8 cell center">

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
                        <!-- <div class="cell padding-bottom-2"><img alt="Map Image" src="https://api.mapbox.com/styles/v1/mapbox/streets-v9/static/pin-m-marker+0096ff(<?php echo esc_attr( $geocode_from_ip['longitude'] ) ?>,<?php echo esc_attr( $geocode_from_ip['latitude'] ) ?>)/<?php echo esc_attr( $geocode_from_ip['longitude'] ) ?>,<?php echo esc_attr( $geocode_from_ip['latitude'] ) ?>,7,0/500x300@2x?access_token=<?php echo DT_Mapbox_API::get_key(); ?>" /></div> -->

                    </div>
                </div>
                <div class="large-1 cell"></div>
            </div>

        </div> <!-- end #main -->

    </div> <!-- end cell --><!-- content -->

<?php get_footer(); ?>
