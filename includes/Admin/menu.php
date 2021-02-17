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
        add_menu_page( __( 'softx Sortiment', 'soft-sortiment' ), __( 'Sortiment', 'soft-sortiment' ), 'manage_options', 'soft-sortiment', [ $this, 'plugin_page' ], 'dashicons-admin-site-alt3' );
    }

    /**
     * Render the plugin page
     *
     * @return void
     */
    public function plugin_page() {
        echo '<h1>Sortiment Deshbord</h1>';
    }


}