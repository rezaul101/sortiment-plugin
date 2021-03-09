<?php

namespace Softx\Sortiment\Admin;

/**
 * The Menu handler class
 */
class Menu {

    /**
     * Initialize the class
     */
    function __construct() {
        add_action( 'admin_menu', [ $this, 'admin_menu' ] );
    }

    /**
     * Register admin menu
     *
     * @return void
     */
    public function admin_menu() {
        add_menu_page( __( 'softx Sortiment', 'softx-sortiment' ), __( 'Sortiment', 'softx-sortiment' ), 'manage_options', 'softx-sortiment', [ $this, 'plugin_page' ], 'dashicons-admin-site-alt3' );
    }

    /**
     * Render the plugin page
     *
     * @return void
     */
    public function plugin_page() {
        //if ( is_user_logged_in() ) {
       // echo '<h1>Sortiment Deshbord</h1>';
        //wp_enqueue_script( 'sortiment-script-registation' );
        wp_enqueue_style( 'sortiment-style' );
        require_once SF_SORTIMENT_PLUGIN_DIR . 'includes/Admin/views/all-company-list.php';
        
       // } 
    }


}