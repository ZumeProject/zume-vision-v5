<?php
/**
 * Plugin Name: Disciple Tools Extension - Zúme Vision
 * Plugin URI: https://github.com/DiscipleTools/disciple-tools-one-page-extension
 * Description: One page extension of Disciple Tools
 * Version:  0.1.0
 * Author URI: https://github.com/DiscipleTools
 * GitHub Plugin URI: https://github.com/DiscipleTools/disciple-tools-one-page-extension
 * Requires at least: 4.7.0
 * (Requires 4.7+ because of the integration of the REST API at 4.7 and the security requirements of this milestone version.)
 * Tested up to: 5.3
 *
 * @package Disciple_Tools
 * @link    https://github.com/DiscipleTools
 * @license GPL-2.0 or later
 *          https://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * PLEASE, RENAME CLASS AND FUNCTION NAMES BEFORE USING TEMPLATE
 * Rename these three strings:
 *      Zume Vision
 *      Vision_Page
 *      vision_page
 */

if ( ! defined( 'ABSPATH' ) ) { exit; } // Exit if accessed directly

if ( ! function_exists( 'vision_page' ) ) {
    function vision_page() {
        return Vision_Page::instance();
    }
}
add_action( 'after_setup_theme', 'vision_page' );


if ( ! function_exists( 'seo_sidebar' ) ) {
    function SEO_Sidebar() {
        return SEO_Sidebar::instance();
    }
}
add_action( 'after_setup_theme', 'seo_sidebar' );



// ----------- SEO Class Start -----------

/**
 * Class SEO Sidebar Links
 */
class SEO_Sidebar {

    public $token = 'seo_sidebar';
    public $title = 'SEO Sidebar Links';
    public $permissions = 'manage_options';

    /**  Singleton */
    private static $_instance = null;
    public static function instance() {
        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    /**
     * Constructor function.
     * @access  public
     * @since   0.1.0
     */
    public function __construct() {

        if ( is_admin() ) {
            add_action( "admin_menu", [ $this, "register_menu" ] );
        }
    } // End __construct()


    /**
     * Loads the subnav page
     * @since 0.1
     */
    public function register_menu() {
        add_menu_page( 'Extensions (DT)', 'Extensions (DT)', $this->permissions, 'dt_extensions', [ $this, 'extensions_menu' ], 'dashicons-admin-generic', 59 );
        add_submenu_page( 'dt_extensions', $this->title, $this->title, $this->permissions, $this->token, [ $this, 'content' ] );
    }

    /**
     * Menu stub. Replaced when Disciple Tools Theme fully loads.
     */
    public function extensions_menu() {}

    /**
     * Builds page contents
     * @since 0.1
     */
    public function content() {
        if ( !current_user_can( $this->permissions ) ) { // manage dt is a permission that is specific to Disciple Tools and allows admins, strategists and dispatchers into the wp-admin
            wp_die( 'You do not have sufficient permissions to access this page.' );
        }

        $object = new SEO_Sidebar_Tab();
        $object->content();
    }

    /**
     * Method that runs only when the plugin is activated.
     *
     * @since  0.1
     * @access public
     * @return void
     */
    public static function activation() {

    }

    /**
     * Method that runs only when the plugin is deactivated.
     *
     * @since  0.1
     * @access public
     * @return void
     */
    public static function deactivation() {

    }

    /**
     * Magic method to output a string if trying to use the object as a string.
     *
     * @since  0.1
     * @access public
     * @return string
     */
    public function __toString() {
        return $this->token;
    }

    /**
     * Magic method to keep the object from being cloned.
     *
     * @since  0.1
     * @access public
     * @return void
     */
    public function __clone() {
        _doing_it_wrong( __FUNCTION__, esc_html( 'Whoah, partner!' ), '0.1' );
    }

    /**
     * Magic method to keep the object from being unserialized.
     *
     * @since  0.1
     * @access public
     * @return void
     */
    public function __wakeup() {
        _doing_it_wrong( __FUNCTION__, esc_html( 'Whoah, partner!' ), '0.1' );
    }

    /**
     * Magic method to prevent a fatal error when calling a method that doesn't exist.
     *
     * @param string $method
     * @param array $args
     *
     * @return null
     * @since  0.1
     * @access public
     */
    public function __call( $method = '', $args = array() ) {
        // @codingStandardsIgnoreLine
        _doing_it_wrong( __FUNCTION__, esc_html('Whoah, partner!'), '0.1' );
        unset( $method, $args );
        return null;
    }
}






// ----------- SEO Class End -----------


/**
 * Class Vision_Page
 */
class Vision_Page {

    public $token = 'vision_page';
    public $title = 'API Keys';
    public $permissions = 'manage_options';

    /**  Singleton */
    private static $_instance = null;
    public static function instance() {
        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    /**
     * Constructor function.
     * @access  public
     * @since   0.1.0
     */
    public function __construct() {

        if ( is_admin() ) {
            add_action( "admin_menu", [ $this, "register_menu" ] );
        }
    } // End __construct()


    /**
     * Loads the subnav page
     * @since 0.1
     */
    public function register_menu() {
        add_menu_page( 'Extensions (DT)', 'Extensions (DT)', $this->permissions, 'dt_extensions', [ $this, 'extensions_menu' ], 'dashicons-admin-generic', 59 );
        add_submenu_page( 'dt_extensions', $this->title, $this->title, $this->permissions, $this->token, [ $this, 'content' ] );
    }

    /**
     * Builds page contents
     * @since 0.1
     */
    public function content() {
        if ( !current_user_can( $this->permissions ) ) { // manage dt is a permission that is specific to Disciple Tools and allows admins, strategists and dispatchers into the wp-admin
            wp_die( 'You do not have sufficient permissions to access this page.' );
        }

        $object = new Zume_Keys_Tab();
        $object->content();
    }

    /**
     * Method that runs only when the plugin is activated.
     *
     * @since  0.1
     * @access public
     * @return void
     */
    public static function activation() {

    }

    /**
     * Method that runs only when the plugin is deactivated.
     *
     * @since  0.1
     * @access public
     * @return void
     */
    public static function deactivation() {

    }

    /**
     * Magic method to output a string if trying to use the object as a string.
     *
     * @since  0.1
     * @access public
     * @return string
     */
    public function __toString() {
        return $this->token;
    }

    /**
     * Magic method to keep the object from being cloned.
     *
     * @since  0.1
     * @access public
     * @return void
     */
    public function __clone() {
        _doing_it_wrong( __FUNCTION__, esc_html( 'Whoah, partner!' ), '0.1' );
    }

    /**
     * Magic method to keep the object from being unserialized.
     *
     * @since  0.1
     * @access public
     * @return void
     */
    public function __wakeup() {
        _doing_it_wrong( __FUNCTION__, esc_html( 'Whoah, partner!' ), '0.1' );
    }

    /**
     * Magic method to prevent a fatal error when calling a method that doesn't exist.
     *
     * @param string $method
     * @param array $args
     *
     * @return null
     * @since  0.1
     * @access public
     */
    public function __call( $method = '', $args = array() ) {
        // @codingStandardsIgnoreLine
        _doing_it_wrong( __FUNCTION__, esc_html('Whoah, partner!'), '0.1' );
        unset( $method, $args );
        return null;
    }
}


/**
 * Class SEO_Sidebar_Tab
 */
class SEO_Sidebar_Tab {
    /**
     * Packages and returns tab page
     *
     * @return void
     */
    public function content() {

        ?>
            <h2>SEO Sidebar Links</h2>
            <div class="wrap">
                <div id="poststuff">
                    <div id="post-body" class="metabox-holder columns-1">
                        <div id="post-body-content">
                            <?php $this->seo_link_box(); ?>
                        </div><!-- end post-body-content -->
                    </div><!-- post-body meta box container -->
                </div>
                <!--poststuff end -->
            </div><!-- wrap end -->
        <?php
    }

    /**
     * SEO Link Box
     */
    public function seo_link_box() {
        if ( is_admin() && !empty( $_POST['seo_nonce'] ) ) {
            if ( wp_verify_nonce( sanitize_key( wp_unslash( $_POST['seo_nonce'] ) ), 'seo_sidebar_links' ) ) {
                $seo_links = [];

                if ( isset( $_POST['seo_link_url_1'] ) && isset( $_POST['seo_link_anchor_1'] ) ) {
                    $seo_links[] = [
                        'url' => sanitize_text_field( wp_unslash( $_POST['seo_link_url_1'] ) ),
                        'anchor' => sanitize_text_field( wp_unslash( $_POST['seo_link_anchor_1'] ) ),
                    ];
                } else {
                    $seo_links[] = [
                        'url' => null,
                        'anchor' => null,
                    ];
                }

                if ( isset( $_POST['seo_link_url_2'] ) && isset( $_POST['seo_link_anchor_2'] ) ) {
                    $seo_links[] = [
                        'url' => sanitize_text_field( wp_unslash( $_POST['seo_link_url_2'] ) ),
                        'anchor' => sanitize_text_field( wp_unslash( $_POST['seo_link_anchor_2'] ) ),
                    ];
                } else {
                    $seo_links[] = [
                        'url' => null,
                        'anchor' => null,
                    ];
                }

                if ( isset( $_POST['seo_link_url_3'] ) && isset( $_POST['seo_link_anchor_3'] ) ) {
                    $seo_links[] = [
                        'url' => sanitize_text_field( wp_unslash( $_POST['seo_link_url_3'] ) ),
                        'anchor' => sanitize_text_field( wp_unslash( $_POST['seo_link_anchor_3'] ) ),
                    ];
                } else {
                    $seo_links[] = [
                        'url' => null,
                        'anchor' => null,
                    ];
                }

                if ( isset( $_POST['seo_link_url_4'] ) && isset( $_POST['seo_link_anchor_4'] ) ) {
                    $seo_links[] = [
                        'url' => sanitize_text_field( wp_unslash( $_POST['seo_link_url_4'] ) ),
                        'anchor' => sanitize_text_field( wp_unslash( $_POST['seo_link_anchor_4'] ) ),
                    ];
                } else {
                    $seo_links[] = [
                        'url' => null,
                        'anchor' => null,
                    ];
                }

                if ( isset( $_POST['seo_link_url_5'] ) && isset( $_POST['seo_link_anchor_5'] ) ) {
                    $seo_links[] = [
                        'url' => sanitize_text_field( wp_unslash( $_POST['seo_link_url_5'] ) ),
                        'anchor' => sanitize_text_field( wp_unslash( $_POST['seo_link_anchor_5'] ) ),
                    ];
                } else {
                    $seo_links[] = [
                        'url' => null,
                        'anchor' => null,
                    ];
                }

                update_option( 'seo_links', $seo_links );
                $this->admin_notice( 'Links updated.', 'success' );
            }
        }

        // Get SEO Link Data
        $seo_links = get_option( 'seo_links' );
        ?>
        <form method="post">
            <?php wp_nonce_field( 'seo_sidebar_links', 'seo_nonce' ); ?>
            <table class="widefat striped">
                <thead>
                    <th>#</th>
                    <th>Anchor Text</th>
                    <th>URL</th>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <label>1.</label><br>
                    </td>
                    <td>
                        <input type="text" name="seo_link_anchor_1" id="seo_link_anchor_1" style="width: 100%;" value="<?php echo esc_attr( $seo_links[0]['anchor'] ) ?>"/>
                    </td>
                    <td>
                        <input type="text" name="seo_link_url_1" id="seo_link_url_1" style="width: 100%;" value="<?php echo esc_attr( $seo_links[0]['url'] ) ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>2.</label><br>
                    </td>
                    <td>
                        <input type="text" name="seo_link_anchor_2" id="seo_link_anchor_2" style="width: 100%;" value="<?php echo esc_attr( $seo_links[1]['anchor'] ) ?>"/>
                    </td>
                    <td>
                        <input type="text" name="seo_link_url_2" id="seo_link_url_2" style="width: 100%;" value="<?php echo esc_attr( $seo_links[1]['url'] ) ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>3.</label><br>
                    </td>
                    <td>
                        <input type="text" name="seo_link_anchor_3" id="seo_link_anchor_3" style="width: 100%;" value="<?php echo esc_attr( $seo_links[2]['anchor'] ) ?>"/>
                    </td>
                    <td>
                        <input type="text" name="seo_link_url_3" id="seo_link_url_3" style="width: 100%;" value="<?php echo esc_attr( $seo_links[2]['url'] ) ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>4.</label><br>
                    </td>
                    <td>
                        <input type="text" name="seo_link_anchor_4" id="seo_link_anchor_4" style="width: 100%;" value="<?php echo esc_attr( $seo_links[3]['anchor'] ) ?>"/>
                    </td>
                    <td>
                        <input type="text" name="seo_link_url_4" id="seo_link_url_4" style="width: 100%;" value="<?php echo esc_attr( $seo_links[3]['url'] ) ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>5.</label><br>
                    </td>
                    <td>
                        <input type="text" name="seo_link_anchor_5" id="seo_link_anchor_5" style="width: 100%;" value="<?php echo esc_attr( $seo_links[4]['anchor'] ) ?>"/>
                    </td>
                    <td>
                        <input type="text" name="seo_link_url_5" id="seo_link_url_5" style="width: 100%;" value="<?php echo esc_attr( $seo_links[4]['url'] ) ?>"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <br>
                        <span style="float:right;"><button type="submit" class="button float-right">Save</button></span>
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
        <?php
    }

    /**
     * Admin Notice
     */
    public static function admin_notice( $notice, $type ) {
            echo '<div class="notice notice-' . esc_attr( $type ) . ' is-dismissible"><p>';
            echo esc_html( $notice );
            echo '</p></div>';
    }
}

/**
 * Class Disciple_Tools_Keys_Tab
 */
class Zume_Keys_Tab
{
    /**
     * Packages and returns tab page
     *
     * @return void
     */
    public function content() {

        ?>
        <form method="post">
            <h2>API Keys</h2>
            <div class="wrap">
                <div id="poststuff">
                    <div id="post-body" class="metabox-holder columns-1">
                        <div id="post-body-content">
                            <?php $this->facebook_sso_key_metabox() ?>
                            <br>
                            <?php $this->google_sso_key_metabox() ?>
                            <br>
                            <?php DT_Ipstack_API::metabox_for_admin(); ?>
                            <br>
                            <?php $this->google_map_api_key_metabox() ?>
                            <br>
                            <?php $this->google_captcha_key_metabox() ?>
                            <br>

                        </div><!-- end post-body-content -->
                        <div id="postbox-container-1" class="postbox-container">
                        </div><!-- postbox-container 1 -->
                        <div id="postbox-container-2" class="postbox-container">
                        </div><!-- postbox-container 2 -->
                    </div><!-- post-body meta box container -->
                </div>
                <!--poststuff end -->
            </div><!-- wrap end -->
        </form>
        <?php
    }

    public function google_map_api_key_metabox() {
        $this->handle_post();

        $current_key = get_option( 'google_map_key' );
        ?>
        <form method="post">
            <?php wp_nonce_field( 'zume_google_map_key_' . get_current_user_id() . '_nonce', 'zume_google_map_key' . get_current_user_id() ) ?>
            <table class="widefat striped">
                <thead>
                <th colspan="2">Google Maps API Key</th>
                </thead>
                <tbody>
                <?php if ( $this->is_default_key( $current_key ) ) : ?>
                    <tr>
                        <td style="max-width:150px;">
                            <label>Default Keys<br><span style="font-size:.8em; ">( You can begin with
                                    these keys, but because of popularity, these keys can hit their
                                    limits. It is recommended that you get your own private key from
                                    Google.)</span></label>
                        </td>

                        <td>
                            <select name="default_keys" style="width: 100%;" <?php echo $this->is_default_key( $current_key ) ? '' : 'disabled' ?>>
                                <?php
                                $default_keys = zume_default_google_api_keys();
                                foreach ( $default_keys as $key => $value ) {
                                    echo '<option value="'.esc_attr( $key ).'" ';
                                    if ( array_search( $current_key, $default_keys ) == $key ) {
                                        echo 'selected';
                                    }
                                    $number = $key + 1;
                                    echo '>Starter Key ' . esc_attr( $number ) . '</option>';
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                <?php endif; ?>

                <tr>
                    <td>
                        <label>Add Your Own Key</label><br>
                        <span style="font-size:.8em;">(clear key and save to remove key)</span>
                    </td>
                    <td>
                        <input type="text" name="zume_google_map_key" id="zume_google_map_key" style="width: 100%;" value="<?php echo $this->is_default_key( $current_key ) ? '' : esc_attr( $current_key ) ?>"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <br><span style="float:right;"><button type="submit" class="button float-right">Save</button></span>
                    </td>
                </tr>
                </tbody>
            </table>
        </form>

        <?php
    }

    public function handle_post() {
        if ( isset( $_POST[ 'zume_google_map_key' . get_current_user_id() ] ) && wp_verify_nonce( sanitize_key( wp_unslash( $_POST[ 'zume_google_map_key' . get_current_user_id() ] ) ), 'zume_google_map_key_' . get_current_user_id() . '_nonce' ) ) {
            if ( empty( $_POST['zume_google_map_key'] ) ) {
                $default_keys = zume_default_google_api_keys();
                $count = count( $default_keys ) - 1;

                if ( ! empty( $_POST['default_keys'] ) ) {
                    $submitted_key = sanitize_text_field( wp_unslash( $_POST['default_keys'] ) );

                    if ( isset( $default_keys[ $submitted_key ] ) ) { // check if set
                        if ( $default_keys[ $submitted_key ] <= $count ) { // check if it is a valid default key number
                            update_option( 'google_map_key', $default_keys[ $submitted_key ] );
                        }
                    }
                } else {
                    $key = $default_keys[ rand( 0, $count ) ];
                    update_option( 'google_map_key', $key );
                }
            }
            else {
                dt_write_log( 'not empty zume_google_map_key' );
                update_option( 'google_map_key', trim( sanitize_text_field( wp_unslash( $_POST['zume_google_map_key'] ) ) ) );
                return;
            }
        }
    }

    public function mapbox_map_api_key_metabox() {
        $this->handle_post();

        $current_key = get_option( 'mapbox_map_key' );
        ?>
        <form method="post">
            <?php wp_nonce_field( 'zume_google_map_key_' . get_current_user_id() . '_nonce', 'zume_google_map_key' . get_current_user_id() ) ?>
            <table class="widefat striped">
                <thead>
                <th colspan="2">Google Maps API Key</th>
                </thead>
                <tbody>
                <?php if ( $this->is_default_key( $current_key ) ) : ?>
                    <tr>
                        <td style="max-width:150px;">
                            <label>Default Keys<br><span style="font-size:.8em; ">( You can begin with
                                    these keys, but because of popularity, these keys can hit their
                                    limits. It is recommended that you get your own private key from
                                    Google.)</span></label>
                        </td>

                        <td>
                            <select name="default_keys" style="width: 100%;" <?php echo $this->is_default_key( $current_key ) ? '' : 'disabled' ?>>
                                <?php
                                $default_keys = zume_default_google_api_keys();
                                foreach ( $default_keys as $key => $value ) {
                                    echo '<option value="'.esc_attr( $key ).'" ';
                                    if ( array_search( $current_key, $default_keys ) == $key ) {
                                        echo 'selected';
                                    }
                                    $number = $key + 1;
                                    echo '>Starter Key ' . esc_attr( $number ) . '</option>';
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                <?php endif; ?>

                <tr>
                    <td>
                        <label>Add Your Own Key</label><br>
                        <span style="font-size:.8em;">(clear key and save to remove key)</span>
                    </td>
                    <td>
                        <input type="text" name="zume_google_map_key" id="zume_google_map_key" style="width: 100%;" value="<?php echo $this->is_default_key( $current_key ) ? '' : esc_attr( $current_key ) ?>"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <br><span style="float:right;"><button type="submit" class="button float-right">Save</button></span>
                    </td>
                </tr>
                </tbody>
            </table>
        </form>

        <?php
    }

    public function is_default_key( $current_key ): bool
    {
        if ( empty( $current_key ) ) {
            $keys = zume_default_google_api_keys();
            $count = count( $keys ) - 1;
            $key = $keys[ rand( 0, $count ) ];

            update_option( 'dt_map_key', $key, true );
            return true;
        }

        $default_keys = zume_default_google_api_keys();
        foreach ( $default_keys as $default_key ) {
            if ( $default_key === $current_key ) {
                return true;
            }
        }
        return false;
    }

    public function google_sso_key_metabox() {
        $this->google_sso_key_handle_post();

        $current_key = get_option( 'dt_google_sso_key' );
        ?>
        <form method="post" name="oAuth">
            <?php wp_nonce_field( 'dt_google_sso_key' . get_current_user_id(), 'dt_google_sso_key' . get_current_user_id() ) ?>
            <table class="widefat striped">
                <thead>
                <th colspan="2">Google SSO Login/Registration oAuth Key</th>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <label>Add Google API oAuth Login Key</label><br>
                    </td>
                    <td>
                        <input type="text" name="dt_google_sso_key" id="dt_google_sso_key" style="width: 100%;" value="<?php echo esc_attr( $current_key ) ?>"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <br><span style="float:right;"><button type="submit" class="button float-right">Save</button></span>
                    </td>
                </tr>
                </tbody>
            </table>
        </form>

        <?php
    }

    public function google_sso_key_handle_post() {
        if ( isset( $_POST[ 'dt_google_sso_key' . get_current_user_id() ] )
            && wp_verify_nonce( sanitize_key( wp_unslash( $_POST[ 'dt_google_sso_key' . get_current_user_id() ] ) ), 'dt_google_sso_key' . get_current_user_id() )
            && isset( $_POST['dt_google_sso_key'] ) ) {
            update_option( 'dt_google_sso_key', trim( sanitize_text_field( wp_unslash( $_POST['dt_google_sso_key'] ) ) ) );
            return;
        }
    }

    public function google_captcha_key_metabox() {
        $this->google_captcha_key_handle_post();
        $current_key = get_option( 'dt_google_captcha_key' );
        $server_key = get_option( 'dt_google_captcha_server_key' );
        ?>
        <form method="post" name="captcha">
            <?php wp_nonce_field( 'dt_google_captcha_key' . get_current_user_id(), 'dt_google_captcha_key' . get_current_user_id() ) ?>
            <table class="widefat striped">
                <thead>
                <th colspan="2">Google Captcha Key</th>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <label>Client Key</label><br>
                    </td>
                    <td>
                        <input type="text" name="dt_google_captcha_key" id="dt_google_captcha_key" style="width: 100%;" value="<?php echo esc_attr( $current_key ) ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Server Secret Key</label><br>
                    </td>
                    <td>
                        <input type="text" name="dt_google_captcha_server_key" id="dt_google_captcha_server_key" style="width: 100%;" value="<?php echo esc_attr( $server_key ) ?>"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <br><span style="float:right;"><button type="submit" class="button float-right">Save</button></span>
                    </td>
                </tr>
                </tbody>
            </table>
        </form>

        <?php
    }

    public function google_captcha_key_handle_post() {
        if ( isset( $_POST[ 'dt_google_captcha_key' . get_current_user_id() ] )
            && wp_verify_nonce( sanitize_key( wp_unslash( $_POST[ 'dt_google_captcha_key' . get_current_user_id() ] ) ), 'dt_google_captcha_key' . get_current_user_id() )
            && isset( $_POST['dt_google_captcha_key'] )
            && isset( $_POST['dt_google_captcha_server_key'] ) ) {

            update_option( 'dt_google_captcha_key', trim( sanitize_text_field( wp_unslash( $_POST['dt_google_captcha_key'] ) ) ) );
            update_option( 'dt_google_captcha_server_key', trim( sanitize_text_field( wp_unslash( $_POST['dt_google_captcha_server_key'] ) ) ) );

            return;
        }
    }

    /**
     * Facebook Secret Key Metabox
     */
    public function facebook_sso_key_metabox() {
        $this->facebook_sso_key_handle_post();

        $pub_key = get_option( 'dt_facebook_sso_pub_key' );
        $sec_key = get_option( 'dt_facebook_sso_sec_key' );
        ?>
        <form method="post" name="oAuth">
            <?php wp_nonce_field( 'dt_facebook_sso_key' . get_current_user_id(), 'dt_facebook_sso_key' . get_current_user_id() ) ?>
            <table class="widefat striped">
                <thead>
                <th colspan="2">Facebook SSO Login/Registration Secret Key</th>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <label>Add Facebook Public Key</label><br>
                    </td>
                    <td>
                        <input type="text" name="dt_facebook_sso_pub_key" id="dt_facebook_sso_pub_key" style="width: 100%;" value="<?php echo esc_attr( $pub_key ) ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Add Facebook Secret Key</label><br>
                    </td>
                    <td>
                        <input type="text" name="dt_facebook_sso_sec_key" id="dt_facebook_sso_sec_key" style="width: 100%;" value="<?php echo esc_attr( $sec_key ) ?>"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <br><span style="float:right;"><button type="submit" class="button float-right">Save</button></span>
                    </td>
                </tr>
                </tbody>
            </table>
        </form>

        <?php
    }

    public function facebook_sso_key_handle_post() {
        if ( isset( $_POST[ 'dt_facebook_sso_key' . get_current_user_id() ] )
            && wp_verify_nonce( sanitize_key( wp_unslash( $_POST[ 'dt_facebook_sso_key' . get_current_user_id() ] ) ), 'dt_facebook_sso_key' . get_current_user_id() )
            && isset( $_POST['dt_facebook_sso_pub_key'] )
            && isset( $_POST['dt_facebook_sso_sec_key'] ) ) {
            update_option( 'dt_facebook_sso_pub_key', trim( sanitize_text_field( wp_unslash( $_POST['dt_facebook_sso_pub_key'] ) ) ) );
            update_option( 'dt_facebook_sso_sec_key', trim( sanitize_text_field( wp_unslash( $_POST['dt_facebook_sso_sec_key'] ) ) ) );
            return;
        }
    }

}

function zume_default_google_api_keys() {
    $default_keys = [
        'AIzaSyBkI5W07GdlhQCqzf3F8VW2E_3mhdzR3s4',
        'AIzaSyAaaZusK9pa9eLuO0nlllGnbQPyXHfTGxQ',
        'AIzaSyBQOO1vujzL6BgkpOzYwZB89bJpGAlbBF8',
    ];

    return $default_keys;
}

