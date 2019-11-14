<?php
/**
 * For more info: https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */

// Add permission for mapping system
$current_user = wp_get_current_user();
$current_user->add_cap( 'view_mapping' );
if ( ! class_exists( 'DT_Mapping_Module') ) {
    require_once( 'dt-mapping/loader.php' );
    new DT_Mapping_Module_Loader( 'theme' );
}
// end mapping system load



// Theme support options
require_once( get_template_directory().'/functions/default-theme-configuration/theme-support.php' );

// WP Head and other cleanup functions
require_once( get_template_directory().'/functions/default-theme-configuration/cleanup.php' );

// Register custom menus and menu walkers
require_once( get_template_directory().'/functions/default-theme-configuration/menu.php' );

// Register sidebars/widget areas
require_once( get_template_directory().'/functions/default-theme-configuration/sidebar.php' );

// Makes WordPress comments suck less
require_once( get_template_directory().'/functions/default-theme-configuration/comments.php' );

// Adds support for multiple languages
require_once( get_template_directory().'/functions/translation/translation.php' );

// Remove Emoji Support
require_once( get_template_directory().'/functions/default-theme-configuration/disable-emoji.php' );

// Related post function - no need to rely on plugins
 require_once(get_template_directory().'/functions/default-theme-configuration/related-posts.php');

// Customize the WordPress admin
require_once( get_template_directory().'/functions/admin/admin.php' );
require_once( get_template_directory().'/functions/admin/admin-page.php' );

// Custom Login
require_once( get_template_directory().'/functions/login/zume-login.php' );
require_once( get_template_directory().'/functions/urls.php' );


require_once( get_template_directory().'/functions/playbook-post-type.php' );

// Integrations
require_once( get_template_directory().'/functions/report-send-integration.php' );
require_once( get_template_directory().'/functions/site-link-post-type.php' );
Site_Link_System::instance();

// Register scripts and stylesheets
require_once( get_template_directory().'/functions/enqueue-scripts.php' );



/**
 * GLOBAL FUNCTIONS
 */
add_filter( 'login_redirect', function( $url, $query, $user ) {
    return site_url() . 'profile';
}, 10, 3 );

function zume_get_user_meta( $user_id = null ) {
    if ( is_null( $user_id ) ) {
        $user_id = get_current_user_id();
    }
    return array_map( function ( $a ) { return maybe_unserialize( $a[0] );
    }, get_user_meta( $user_id ) );
}

/**
 * END GLOBAL FUNCTIONS
 */


