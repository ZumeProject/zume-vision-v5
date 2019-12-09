<?php
/**
 * Class Zume_Statistics
 */
class Zume_Statistics
{
    /** Singleton @var null */
    private static $_instance = null;

    public static function instance()
    {
        if (is_null(self::$_instance)) {
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
    public function __construct()
    {
        add_action( 'rest_api_init', array( $this,  'add_api_routes' ) );
    } // End __construct()

    public function add_api_routes()
    {
        $namespace_v1 = 'grid/v1';

        register_rest_route( $namespace_v1, '/population', array(
            array(
                'methods' => WP_REST_Server::CREATABLE,
                'callback' => array($this, 'population'),
            ),
        ));
    }

    public function population( WP_REST_Request $request){
        $params = $request->get_json_params();
        if ( isset( $params['grid_id'] ) ){

            return true;

        } else {
            return new WP_Error( "tract_param_error", "Please provide a valid address", array( 'status' => 400 ) );
        }
    }

    public function statistics() : array {
        return [
            'trainings' => number_format_i18n( 222 ), // @todo make a dynamic calculation
            'churches' => number_format_i18n( 8 ), // @todo make a dynamic calculation
            'world_population' => 7760000000, // @todo make a dynamic calculation
            'trainings_needed' => 1548739, // @todo make a dynamic calculation
            'churches_needed' => 3097479, // @todo make a dynamic calculation
        ];
    }


}
Zume_Statistics::instance();
