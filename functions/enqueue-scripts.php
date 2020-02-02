<?php
/**
 * Load scripts
 *
 * @param string $handle
 * @param string $rel_src
 * @param array  $deps
 * @param bool   $in_footer
 */
function zume_enqueue_script( $handle, $rel_src, $deps = array(), $in_footer = false ) {
    if ( $rel_src[0] === "/" ) {
        throw new Error( "zume_enqueue_script took \$rel_src argument which unexpectedly started with /" );
    }
    wp_enqueue_script( $handle, get_template_directory_uri() . "/$rel_src", $deps, filemtime( get_template_directory() . "/$rel_src" ), $in_footer );
}

/**
 * Load styles
 *
 * @param string $handle
 * @param string $rel_src
 * @param array  $deps
 * @param string $media
 */
function zume_enqueue_style( $handle, $rel_src, $deps = array(), $media = 'all' ) {
    if ( $rel_src[0] === "/" ) {
        throw new Error( "zume_enqueue_style took \$rel_src argument which unexpectedly started with /" );
    }
    wp_enqueue_style( $handle, get_template_directory_uri() . "/$rel_src", $deps, filemtime( get_template_directory() . "/$rel_src" ), $media );
}

function site_scripts() {
    global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

    // Adding scripts file in the footer
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/scripts/scripts.js', array( 'jquery' ), filemtime( get_template_directory() . '/assets/scripts/js' ), true );

    // Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/styles/style.css', array(), filemtime( get_template_directory() . '/assets/styles/scss' ), 'all' );
    wp_style_add_data( 'site-css', 'rtl', 'replace' );

    // Comment reply script for threaded comments
    if ( is_singular() and comments_open() and ( get_option( 'thread_comments' ) == 1 )) {
        wp_enqueue_script( 'comment-reply' );
    }

    wp_enqueue_style( 'foundations-icons', get_template_directory_uri() .'/assets/styles/foundation-icons/foundation-icons.css', array(), '3' );


    /**
     * All Data Driven Pages
     */
    if ( 'template-maps' === substr( basename( get_page_template() ), 0, 13 )
        || 'template-statistics.php' === basename( get_page_template() )
    ) {
        wp_register_script( 'rest-api', get_template_directory_uri() . '/assets/scripts/api.js', [ 'jquery', 'lodash' ], '1.2.0' );
        wp_enqueue_script( 'rest-api' );
        wp_localize_script(
            "rest-api", "restAPI", array(
                'root' => esc_url_raw( rest_url() ),
                'nonce' => wp_create_nonce( 'wp_rest' ),
                'current_user_login' => wp_get_current_user()->user_login,
                'current_user_id' => get_current_user_id(),
                'theme_uri' => get_stylesheet_directory_uri(),
                'transfer_token' => Site_Link_System::generate_token(),
            )
        );

        wp_register_script( 'mapbox', 'https://api.tiles.mapbox.com/mapbox-gl-js/v1.2.0/mapbox-gl.js', [ 'jquery' ], '1.2.0' );
        wp_enqueue_script( 'mapbox' );
        wp_enqueue_style( 'mapbox-css', 'https://api.tiles.mapbox.com/mapbox-gl-js/v1.2.0/mapbox-gl.css', array(), '3' );

        wp_register_script( 'lodash', 'https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.11/lodash.min.js', false, '4.17.11' );
        wp_enqueue_script( 'lodash' );
    }

    /**
     * Maps Page
     */
    if ( 'template-maps' === substr( basename( get_page_template() ), 0, 13 ) ) {

        wp_enqueue_script( 'zume', get_template_directory_uri() . '/assets/scripts/maps.js', array( 'jquery' ), 1.1, true );
        wp_localize_script(
            "zume", "zumeMaps", array(
                'root' => esc_url_raw( rest_url() ),
                'nonce' => wp_create_nonce( 'wp_rest' ),
                'current_user_login' => wp_get_current_user()->user_login,
                'current_user_id' => get_current_user_id(),
                'theme_uri' => get_stylesheet_directory_uri(),
                "translations" => []
            )
        );
    }

    /**
     * Progress Page
     * @todo is this still needed?
     */
    if ( 'template-statistics.php' === basename( get_page_template() ) ) {
        wp_register_style( 'datatable-css', '//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css', false, '1.10' );
        wp_enqueue_style( 'datatable-css' );
        wp_register_script( 'datatable', '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js', [ 'jquery', 'rest-api', 'lodash' ], '1.10' );
        wp_enqueue_script( 'datatable' );
    }


    /**
     * Home Page
     */
    if ( 'template-home.php' === basename( get_page_template() ) || 'template-statistics.php' === basename( get_page_template() ) || is_single() || is_archive() ) {
        wp_register_script( 'lodash', 'https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.11/lodash.min.js', false, '4.17.11' );
        wp_enqueue_script( 'lodash' );

        wp_enqueue_script( 'counters', get_template_directory_uri() . '/assets/scripts/counters.js', array( 'jquery', 'lodash' ), 1.1, true );
        wp_localize_script(
            "counters", "zumeCounters", array(
                'root' => esc_url_raw( rest_url() ),
                'nonce' => wp_create_nonce( 'wp_rest' ),
                'current_user_login' => wp_get_current_user()->user_login,
                'current_user_id' => get_current_user_id(),
                'theme_uri' => get_stylesheet_directory_uri(),
                'statistics' => Zume_Statistics::instance()->statistics(),
            )
        );

    }

    /**
     * Profile Page
     */
    if ( 'template-account.php' === basename( get_page_template() ) ) {
        wp_register_script( 'lodash', 'https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.11/lodash.min.js', false, '4.17.11' );
        wp_enqueue_script( 'lodash' );

        wp_enqueue_script( 'profile', get_template_directory_uri() . '/assets/scripts/profile.js', array( 'jquery', 'rest-api', 'lodash' ), 1.1, true );
        wp_localize_script(
            "profile", "zumeProfile", array(
                'root' => esc_url_raw( rest_url() ),
                'nonce' => wp_create_nonce( 'wp_rest' ),
                'current_user_login' => wp_get_current_user()->user_login,
                'current_user_id' => get_current_user_id(),
                'theme_uri' => get_stylesheet_directory_uri(),
                'transfer_token' => Site_Link_System::generate_token(),
            )
        );
    }

}
add_action( 'wp_enqueue_scripts', 'site_scripts', 999 );


function zume_login_css() {
    zume_enqueue_style( 'zume_login_css', 'assets/styles/login.css', array() );
}
add_action( 'login_enqueue_scripts', 'zume_login_css', 999 );


// calling it only on the login page
add_action( 'login_enqueue_scripts', 'zume_login_css', 10 );

