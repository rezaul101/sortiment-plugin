<?php
/**
 * Plugin Name: Softx Sortiment
 * Description: A custom woocommerce plugin.
 * Plugin URI: softxltd.com
 * Author: Softx LTD
 * Author URI: softxltd.com
 * Version: 1.0
 * License: GPL2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

require_once __DIR__ . '/vendor/autoload.php';

/**
 * The main plugin class
 */
final class Softx_Sortiment {

    /**
     * Plugin version
     *
     * @var string
     */
    const version = '1.0';

    /**
     * Class construcotr
     */
    private function __construct() {
        $this->define_constants();

        register_activation_hook( __FILE__, [ $this, 'activate' ] );
        //register_deactivation_hook( __FILE__, [ $this, 'deactivate' ] );
        add_action( 'plugins_loaded', [ $this, 'init_plugin' ] );
        //add_action( 'init', [ $Sortiment_Registation, 'final_registaiton' ] );
    }



    /**
     * Initializes a singleton instance
     *
     * @return \Softx_Sortiment
     */
    public static function init() {
        static $instance = false;

        if ( ! $instance ) {
            $instance = new self();
        }

        return $instance;
    }

    /**
     * Define the required plugin constants
     *
     * @return void
     */
    public function define_constants() {
        define( 'SF_SORTIMENT_VERSION', self::version );
        define( 'SF_SORTIMENT_FILE', __FILE__ );
        define( 'SF_SORTIMENT_PATH', __DIR__ );
        define( 'SF_SORTIMENT_PLUGIN_DIR', plugin_dir_path(__FILE__));
        define( 'SF_SORTIMENT_URL', plugins_url( '', SF_SORTIMENT_FILE ) );
        define( 'SF_SORTIMENT_ASSETS', SF_SORTIMENT_URL . '/assets' );
        //define( 'SF_SORTIMENT_TEMPLATE', SF_SORTIMENT_URL . '/templates' );
        
    }
    /**
     * Initialize the plugin
     *
     * @return void
     */
    public function init_plugin() {

        new Softx\Sortiment\Assets();


        //new Softx\Sortiment\Admin\Menu();
        if ( is_admin() ) {
            new Softx\Sortiment\Admin();
        } else {
            $frontend = new Softx\Sortiment\Frontend();
            var_dump($frontend);
            
        }

    }

    /**
     * Do stuff upon plugin activation
     *
     * @return void
     */
    public function activate() {
        $installer = new Softx\Sortiment\Installer();
        $installer->run();
    }
    /**
     * Do stuff upon plugin deactivation
     *
     * @return void
     */
    
    public function deactivate() {
        //$deactivator_plugin = new Softx\Sortiment\Plugin_Deactivator();
        //$deactivator_plugin->uninstall();
        
    }

   
     

}

    /**
     * Initializes the main plugin
     *
     * @return \Softx_Sortiment
     */
    function softx_sortiment() {
        return Softx_Sortiment::init();
    }

    // kick-off the plugin
    softx_sortiment();