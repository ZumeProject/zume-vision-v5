<?php
if ( !defined( 'ABSPATH' ) ) {
    exit;
} // Exit if accessed directly.

//function add_api_routes() {
//    register_rest_route(
//        'zume/v4', '/points_geojson', [
//            [
//                'methods' => WP_REST_Server::CREATABLE,
//                'callback' => function(){return [];},
//            ],
//        ]
//    );
//}
//add_action( 'rest_api_init', 'add_api_routes' );

class Zume_Maps_Last100 extends Zume_Map_Base
{

    //slug and title of the top menu folder
    public $base_slug = 'contacts'; // lowercase
    public $base_title;

    public $title;
    public $slug = 'mapbox_points_map'; // lowercase
    public $js_object_name = 'wp_js_object'; // This object will be loaded into the metrics.js file by the wp_localize_script.
    public $js_file_name = '/dt-metrics/common/points-map.js'; // should be full file name plus extension
    public $permissions = [ 'view_any_contacts', 'view_project_metrics' ];
    public $namespace = 'zume/v4/';

    public function __construct() {
        parent::__construct();

        $this->title = __( 'Last 100 Hours', 'disciple_tools' );
        $this->base_title = __( 'Contacts', 'disciple_tools' );
        $url_path = dt_get_url_path();
        if (strpos( $url_path, 'maps') === 0) {
            add_action( 'wp_enqueue_scripts', [ $this, 'scripts' ], 99 );
            add_action('wp_head', [ $this, 'head' ] );
        }

        add_action( 'rest_api_init', [ $this, 'add_api_routes' ] );
    }

    public function scripts() {
        DT_Mapbox_API::load_mapbox_header_scripts();
    }

    public function head() {
        ?>
        <script>
            window.dt_mapbox_metrics = [<?php echo json_encode([
                'translations' => [
                    'title' => __( "Mapping", "disciple_tools" ),
                    'refresh_data' => __( "Refresh Cached Data", "disciple_tools" ),
                    'population' => __( "Population", "disciple_tools" ),
                    'name' => __( "Name", "disciple_tools" ),
                    'status' => __( "Status", "disciple_tools" ),
                    'status_all' => __( "Status - All", "disciple_tools" ),
                    'zoom_level' => __( "Zoom Level", "disciple_tools" ),
                    'auto_zoom' => __( "Auto Zoom", "disciple_tools" ),
                    'world' => __( "World", "disciple_tools" ),
                    'country' => __( "Country", "disciple_tools" ),
                    'state' => __( "State", "disciple_tools" ),
                    'view_record' => __( "View Record", "disciple_tools" ),
                    'assigned_to' => __( "Assigned To", "disciple_tools" ),
                ],
                'settings' => [
                    'map_key' => DT_Mapbox_API::get_key(),
                    'map_mirror' => dt_get_location_grid_mirror( true ),
                    'points_rest_url' => 'points_geojson',
                    'points_rest_base_url' => 'zume/v4/',
//            'menu_slug' => $this->base_slug,
                    'post_type' => 'contacts',
                    'title' => 'Last 100 Hours',
                    'status_list' => []
                ]
            ]) ?>][0]
        </script>
        <?php
    }

    public function add_api_routes() {
        register_rest_route(
            'zume/v4', '/points_geojson', [
                [
                    'methods' => WP_REST_Server::CREATABLE,
                    'callback' => [$this, 'points_geojson'],
                ],
            ]
        );
    }

    public function points_geojson( WP_REST_Request $request ) {
        $params = $request->get_json_params() ?? $request->get_body_params();
        if ( ! isset( $params['post_type'] ) || empty( $params['post_type'] ) ) {
            return new WP_Error( __METHOD__, "Missing Post Types", [ 'status' => 400 ] );
        }

        return self::query_contacts_points_geojson(  );
    }

    public static function query_contacts_points_geojson() {
        global $wpdb;

        $timestamp = strtotime('-100 hours' );
        $results = $wpdb->get_results( $wpdb->prepare( "
                SELECT lng, lat, note, action FROM zume_vision_log WHERE timestamp > %s
                ", $timestamp ), ARRAY_A );

        $features = [];
        foreach ( $results as $result ) {
            $features[] = array(
                'type' => 'Feature',
                'properties' => array(
                    "note" => $result['note'],
                    "action" => $result['action'],
                ),
                'geometry' => array(
                    'type' => 'Point',
                    'coordinates' => array(
                        $result['lng'],
                        $result['lat'],
                        1
                    ),
                ),
            );
        }

        $new_data = array(
            'type' => 'FeatureCollection',
            'features' => $features,
        );

        return $new_data;
    }

}
new Zume_Maps_Last100();
