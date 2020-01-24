<?php
/**
 * Class Counters
 */
class Location_Grid_Counters
{
    /** Singleton @var null */
    private static $_instance = null;

    public static function instance() {
        if (is_null( self::$_instance )) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /**
     * Constructor function.
     *
     * @access  public
     * @since   0.1.0
     */
    public function __construct() {
        add_action( 'rest_api_init', array( $this,  'add_api_routes' ) );
    } // End __construct()

    public function add_api_routes() {
        $namespace_v1 = 'grid/v1';

        register_rest_route( $namespace_v1, '/population', array(
            array(
                'methods' => WP_REST_Server::CREATABLE,
                'callback' => array( $this, 'population' ),
            ),
        ));
    }

    public function population( WP_REST_Request $request){
        $params = $request->get_json_params();
        if ( isset( $params['grid_id'] ) ){

            return $this->prepare_population( $params['grid_id'] );

        } else {
            return new WP_Error( "tract_param_error", "Please provide a valid address", array( 'status' => 400 ) );
        }
    }

    public function prepare_population( $grid_id ) {

        // @todo calculation
        // get population
        // get time of population
        // get current unix time
        // get difference
        // get rate of growth
        // calculation rate of growth for population over difference between population_timestamp and today
        // add population to growth

        return 7761000000; // return today's population for the location
    }

    /**
     * Add Location_Grid_Counters::instance()->load_population_counter() to load
     */
    public function load_population_counter() {
        ?>
        <script>
            jQuery(document).ready(function(){

            })
            <?php
            $gridAPI = array(
                'root' => esc_url_raw( rest_url() ),
                'nonce' => wp_create_nonce( 'wp_rest' ),
                'theme_uri' => get_stylesheet_directory_uri(),
                'transfer_token' => Site_Link_System::generate_token(),
            )
            ?>
                /* <![CDATA[ */
                var gridAPISource = <?php echo json_encode( $gridAPI ) ?>
                /* ]]> */


            window.gridAPI = {

                get_population: ( data ) => makeRequest('POST', 'population', { grid_id: data } ),

            }
            function makeRequest (type, url, data, base = 'grid/v1/') {
                const options = {
                    type: type,
                    contentType: 'application/json; charset=utf-8',
                    dataType: 'json',
                    url: url.startsWith('http') ? url : `${gridAPISource.root}${base}${url}`,
                    beforeSend: xhr => {
                        xhr.setRequestHeader('X-WP-Nonce', gridAPISource.nonce);
                    }
                }

                if (data) {
                    options.data = JSON.stringify(data)
                }

                return jQuery.ajax(options)
            }
            function handleAjaxError (err) {
                if (_.get(err, "statusText") !== "abortPromise" && err.responseText){
                    console.trace("error")
                    console.log(err)
                    // jQuery("#errors").append(err.responseText)
                }
            }
            jQuery(document).ajaxComplete((event, xhr, settings) => {
                if (_.get(xhr, 'responseJSON.data.status') === 401) {
                    window.location.replace(gridAPISource.site_urls.login);
                }
            }).ajaxError((event, xhr) => {
                handleAjaxError(xhr)
            })

            console.log(gridAPISource)
            let result = window.gridAPI.get_population('1')
            console.log(result)
        </script>
        <?php
    }
}
Location_Grid_Counters::instance();
