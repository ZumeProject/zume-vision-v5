<?php
/**
 * Template Name: Account
 */

/* Build variables for page */
$zume_user = wp_get_current_user(); // Returns WP_User object
$zume_user_meta = zume_get_user_meta( get_current_user_id() ); // Full array of user meta data


function is_active_mapbox_key() {
            $key = DT_Mapbox_API::get_key();
            $url = DT_Mapbox_API::$mapbox_endpoint . 'Denver.json?access_token=' . $key;
            $response = wp_remote_get( esc_url_raw( $url ) );
            $data_result = json_decode( wp_remote_retrieve_body( $response ), true );
            if ( isset( $data_result['features'] ) && ! empty( $data_result['features'] ) ) {
                dt_write_log($data_result);
            } else {
                dt_write_log($data_result);
            }

        }
        is_active_mapbox_key();

get_header(); ?>

<!-- Title Section-->
<div class="grid-x grid-padding-x deep-blue-section padding-vertical-1">
    <div class="cell center" style="cursor:pointer;" onclick="window.location = '<?php site_url() ?>/account'">
        <h1 class="center title">My Account</h1>
    </div>
</div>
<div class="grid-x blue-notch-wrapper"><div class="cell center blue-notch"></div></div>

<style>
    /* Fix for button inheritance on second social sign on. */
    button.button {
        padding-top: .85em;
        padding-bottom: .85em;
    }
</style>
<div id="content" class="grid-x grid-padding-x"><div class="cell">
        <div id="inner-content" class="grid-x grid-margin-x grid-padding-x">
            <div class="large-8 medium-8 small-12 grid-margin-x cell" style="max-width: 900px; margin: 0 auto">

                <div class="grid-x grid-padding-x">
                    <div class="cell" id="profile"></div>
                </div>

                <div class="grid-x grid-padding-x">
                    <div class="cell medium-4 google_elements">
                        <?php
                        if ( ! get_user_meta( $zume_user->ID, 'google_sso_email', true ) ) :
                            zume_google_link_account_button();
                        endif;
                        ?>
                    </div>
                    <div class="cell medium-4 facebook_elements">
                        <?php
                        if ( ! get_user_meta( $zume_user->ID, 'facebook_sso_email', true ) ) :
                            zume_facebook_link_account_button();
                        endif;
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div> <!--cell -->
</div><!-- end #content -->

<?php get_template_part( "parts/content", "fullmodal" ); ?>

<?php get_footer(); ?>
