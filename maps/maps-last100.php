<?php
if ( !defined( 'ABSPATH' ) ) {
    exit;
} // Exit if accessed directly.

class Zume_Maps_Last100 extends Zume_Map_Base
{
    public $target_url = 'maps/last-100-hours';
    public $namespace = 'zume/v4/';

    private static $_instance = null;
    public static function instance() {
        if (is_null( self::$_instance )) {
            self::$_instance = new self();
        }
        return self::$_instance;
    } // End instance()

    public function __construct() {
        parent::__construct();

        add_action( 'rest_api_init', [ $this, 'add_api_routes' ] );
        add_shortcode( 'last100hours', [ $this, 'short_code' ] );

        $url_path = dt_get_url_path();
        if (strpos( $url_path, $this->target_url ) === 0) {
            add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_scripts' ], 99 );
            add_action( 'wp_head', [ $this, 'head_scripts' ], 99 );
        }
    }

    public function head_scripts() {
        ?>
        <script>
            /* <![CDATA[ */
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
                    'title' => 'Last 100 Hours',
                ]
            ]) ?>][0]
            /* ]]> */
        </script>

        <?php
    }

    public function short_code( $atts ){
        ob_start();
        ?>
        <div class="grid-x">
            <div class="cell small-8">
                <div id="dynamic-styles"></div>
                <div id="map-wrapper">
                    <div id='map'></div>
                    <div id="spinner" class="loading-spinner active"></div>
                </div>
            </div>
            <div class="cell small-4 padding-1">
                Last 100 Hours of Zúme Training<hr>
                <div id="activity-wrapper">
                    <ul id="activity-list"></ul>
                </div>
            </div>
        </div>

        <script>
            jQuery(document).ready(function($) {
                // console.log(dt_mapbox_metrics)
                function write_all_points( ) {
                    let obj = window.dt_mapbox_metrics

                    let dynamic_styles = jQuery('#dynamic-styles')
                    dynamic_styles.empty().html(`
                            <style>
                                #map-wrapper {
                                    height: ${window.innerHeight - 100}px !important;
                                }
                                #map {
                                    height: ${window.innerHeight - 100}px !important;
                                }
                                #activity-wrapper {
                                    height: ${window.innerHeight - 100}px !important;
                                    overflow: scroll;
                                }
                                #activity-list {
                                    font-size:.7em;
                                    list-style-type:none;
                                }
                            </style>
                         `)

                    mapboxgl.accessToken = obj.settings.map_key;
                    var map = new mapboxgl.Map({
                        container: 'map',
                        style: 'mapbox://styles/mapbox/light-v10',
                        center: [-30, 20],
                        minZoom: 1,
                        maxZoom: 8,
                        zoom: 1
                    });

                    // disable map rotation using right click + drag
                    map.dragRotate.disable();

                    // disable map rotation using touch rotation gesture
                    map.touchZoomRotate.disableRotation();

                    // load sources
                    map.on('load', function () {
                        let spinner = jQuery('#spinner')
                        spinner.show()

                        makeRequest('POST', obj.settings.points_rest_url, { }, obj.settings.points_rest_base_url )
                            .then(points => {
                                load_layer( points )
                                load_list( points )
                            })
                    })

                    function load_layer( points ) {

                        var mapLayer = map.getLayer('pointsLayer');
                        if(typeof mapLayer !== 'undefined') {
                            map.removeLayer( 'pointsLayer' )
                        }
                        var mapSource= map.getSource('pointsSource');
                        if(typeof mapSource !== 'undefined') {
                            map.removeSource( 'pointsSource' )
                        }

                        map.addSource('pointsSource', {
                            'type': 'geojson',
                            'data': points
                        });
                        map.addLayer({
                            id: 'pointsLayer',
                            type: 'circle',
                            source: 'pointsSource',
                            'paint': {
                                'circle-radius': {
                                    'base': 5,
                                    'stops': [
                                        [12, 10],
                                        [22, 180]
                                    ]
                                },
                                'circle-color': [
                                    'match',
                                    ['get', 'action'],
                                    'registered',
                                    '#fbb03b',
                                    'leading_2',
                                    '#e55e5e',
                                    'leading_3',
                                    '#e55e5e',
                                    'leading_4',
                                    '#e55e5e',
                                    'leading_5',
                                    '#e55e5e',
                                    'leading_6',
                                    '#e55e5e',
                                    'leading_7',
                                    '#e55e5e',
                                    'leading_8',
                                    '#e55e5e',
                                    'leading_9',
                                    '#e55e5e',
                                    'leading_10',
                                    '#e55e5e',
                                    'started_group',
                                    '#3bb2d0',
                                    'studied_1',
                                    '#3bb2d0',
                                    'studied_2',
                                    '#3bb2d0',
                                    'studied_3',
                                    '#3bb2d0',
                                    'studied_4',
                                    '#3bb2d0',
                                    'studied_5',
                                    '#3bb2d0',
                                    'studied_6',
                                    '#3bb2d0',
                                    'studied_7',
                                    '#3bb2d0',
                                    'studied_8',
                                    '#3bb2d0',
                                    'studied_9',
                                    '#3bb2d0',
                                    'studied_10',
                                    '#3bb2d0',
                                    'studied_11',
                                    '#3bb2d0',
                                    'studied_12',
                                    '#3bb2d0',
                                    'studied_13',
                                    '#3bb2d0',
                                    'studied_14',
                                    '#3bb2d0',
                                    'studied_15',
                                    '#3bb2d0',
                                    'studied_16',
                                    '#3bb2d0',
                                    'studied_17',
                                    '#3bb2d0',
                                    'studied_18',
                                    '#3bb2d0',
                                    'studied_19',
                                    '#3bb2d0',
                                    'studied_20',
                                    '#3bb2d0',
                                    'studied_21',
                                    '#3bb2d0',
                                    'studied_22',
                                    '#3bb2d0',
                                    'studied_23',
                                    '#3bb2d0',
                                    'studied_24',
                                    '#3bb2d0',
                                    'studied_25',
                                    '#3bb2d0',
                                    'studied_26',
                                    '#3bb2d0',
                                    'studied_27',
                                    '#3bb2d0',
                                    'studied_28',
                                    '#3bb2d0',
                                    'studied_29',
                                    '#3bb2d0',
                                    'studied_30',
                                    '#3bb2d0',
                                    'studied_31',
                                    '#3bb2d0',
                                    /* other */ '#223b53'
                                ]
                            }
                        });

                        map.on('mouseenter', 'pointsLayer', function () {
                            map.getCanvas().style.cursor = 'pointer';
                        });
                        map.on('mouseleave', 'pointsLayer', function () {
                            map.getCanvas().style.cursor = '';
                        });

                        // @link https://docs.mapbox.com/mapbox-gl-js/example/popup-on-hover/
                        var popup = new mapboxgl.Popup({
                            closeButton: false,
                            closeOnClick: false
                        });

                        map.on('mouseenter', 'pointsLayer', function(e) {
                            map.getCanvas().style.cursor = 'pointer';

                            var coordinates = e.features[0].geometry.coordinates.slice();
                            var description = e.features[0].properties.note;

                            while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
                                coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
                            }

                            popup
                                .setLngLat(coordinates)
                                .setHTML(description)
                                .addTo(map);
                        });

                        map.on('mouseleave', 'pointsLayer', function() {
                            map.getCanvas().style.cursor = '';
                            popup.remove();
                        });

                        let spinner = jQuery('#spinner')
                        spinner.hide()
                    }

                    function load_list( points ) {
                        let list_container = jQuery('#activity-list')
                        jQuery.each( points.features, function(i,v){
                            if ( v.properties.note ) {
                                list_container.append(`<li><strong>${v.properties.time}</strong> - ${v.properties.note}</li>`)
                            }
                        })
                    }
                }
                write_all_points( )
            })

        </script>
        <?php
        return ob_get_clean();
    }

    public function enqueue_scripts() {
        DT_Mapbox_API::load_mapbox_header_scripts();
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

        return self::query_contacts_points_geojson();
    }



    public static function query_contacts_points_geojson() {
        global $wpdb;

        $timestamp = strtotime('-100 hours' );
        $results = $wpdb->get_results( $wpdb->prepare( "
                SELECT lng, lat, note, action, timestamp FROM zume_vision_log WHERE timestamp > %s ORDER BY timestamp DESC
                ", $timestamp ), ARRAY_A );

        $features = [];
        foreach ( $results as $result ) {
            if ( $result['timestamp'] > strtotime('-1 hour' ) ) {
                // minutes
            }
            else if ( $result['timestamp'] > strtotime('-24 hours' ) ) {
                // hours
            } else {
                // date
                $time = date( 'm-d-Y h:i:s a', $result['timestamp'] );
            }

            $features[] = array(
                'type' => 'Feature',
                'properties' => array(
                    "note" => $result['note'],
                    "action" => $result['action'],
                    "time" => $time
                ),
                'geometry' => array(
                    'type' => 'Point',
                    'coordinates' => array(
                        round($result['lng'], 1 ),
                        round($result['lat'], 1 ),
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
Zume_Maps_Last100::instance();
