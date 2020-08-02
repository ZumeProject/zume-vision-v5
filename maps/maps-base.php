<?php
if ( !defined( 'ABSPATH' ) ) {
    exit;
} // Exit if accessed directly.

if ( ! function_exists( 'dt_get_url_path' ) ) {
    function dt_get_url_path() {
        if ( isset( $_SERVER["HTTP_HOST"] ) ) {
            $url  = ( !isset( $_SERVER["HTTPS"] ) || @( $_SERVER["HTTPS"] != 'on' ) ) ? 'http://'. sanitize_text_field( wp_unslash( $_SERVER["HTTP_HOST"] ) ) : 'https://'. sanitize_text_field( wp_unslash( $_SERVER["HTTP_HOST"] ) );
            if ( isset( $_SERVER["REQUEST_URI"] ) ) {
                $url .= sanitize_text_field( wp_unslash( $_SERVER["REQUEST_URI"] ) );
            }
            return trim( str_replace( get_site_url(), "", $url ), '/' );
        }
        return '';
    }
}

abstract class Zume_Map_Base
{
    public function __construct(){
        // placeholder
    }
}

//class Zume_Maps_Loader extends Zume_Map_Base {
//    private static $_instance = null;
//    public static function instance() {
//        if (is_null( self::$_instance )) {
//            self::$_instance = new self();
//        }
//        return self::$_instance;
//    } // End instance()
//
//    public function __construct(){
//        parent::__construct();
//
//        /**
//         * Class for loading Maps
//         */
//
//
//    }
//}
//Zume_Maps_Loader::instance();
