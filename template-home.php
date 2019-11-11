<?php
/*
Template Name: Home
*/
if ( ! class_exists( 'DT_Ipstack_API') ) {

}
$geocode_from_ip = DT_Ipstack_API::geocode_ip_address('174.16.154.113');
?>

<?php get_header(); ?>

<div id="content" >

    <div id="inner-content grid-x grid-padding-x">

        <div id="main" class="cell padding-top-1" role="main">

            <!-- Deep Blue Ribbon-->
            <div class="grid-x grid-margin-x grid-margin-y deep-blue-section" style="height:500px;">
                <div class="large-1 cell"></div>
                <div class="cell large-10">
                    <div class="grid-x margin-2 center">
                        <div class="cell">
                            <h2>Zúme.Vision</h2>
                        </div>
                        <!-- <div class="cell padding-bottom-2"><img alt="Map Image" src="https://api.mapbox.com/styles/v1/mapbox/streets-v9/static/pin-m-marker+0096ff(<?php echo esc_attr( $geocode_from_ip['longitude'] ) ?>,<?php echo esc_attr( $geocode_from_ip['latitude'] ) ?>)/<?php echo esc_attr( $geocode_from_ip['longitude'] ) ?>,<?php echo esc_attr( $geocode_from_ip['latitude'] ) ?>,7,0/500x300@2x?access_token=<?php echo DT_Mapbox_API::get_key(); ?>" /></div> -->

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
                    <h2>a multiplying spiritual family in every neighborhood</h2>
                </div>
                <div class="medium-3 small-2 cell"></div>
            </div>
            <div class="grid-x deep-blue-section"><div class="cell center white-notch"></div></div><!-- White Notch-->
            <!-- End White Section-->


            <!-- Deep Blue Ribbon-->
            <div class="grid-x grid-margin-x grid-margin-y vertical-padding deep-blue-section" style="height: 500px;">
                <div class="large-2 cell"></div>
                <div class="cell large-8 center white">

                </div>
                <div class="large-2 cell"></div>
            </div>
            <!-- End Deep Blue Ribbon-->
            <!--Blue notch --><div class="white-section"><div class="cell center blue-notch"></div></div>


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
