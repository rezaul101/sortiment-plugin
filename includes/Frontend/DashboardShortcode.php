<?php

namespace Softx\Sortiment\Frontend;

/**
 * Shortcode handler class
 */
class DashboardShortcode {

    /**
     * Initializes the class
     */
    function __construct() {
        // Register a new shortcode: [sortiment_dashboard]
        add_shortcode( 'sortiment_dashboard', [ $this, 'sortiment_dashboard_shortcode' ] );
        
    }

    /**
     * Shortcode handler class
     *
     * @param  array $atts
     * @param  string $content
     *
     * @return string
     */

    // The callback function that will replace 
    function sortiment_dashboard_shortcode( $atts, $content = '') {
       if ( is_user_logged_in() ) {
       wp_enqueue_script( 'sortiment-script' );
        wp_enqueue_style( 'sortiment-style' );
       
        ob_start();
        
        //require_once SF_SORTIMENT_PLUGIN_DIR . '/templates/registation.php';
        include __DIR__ . '/views/dashboard.php';
        return ob_get_clean();
        } else{
            echo '<div class="wrap">';
            echo 'You are not permitted on this page. please <a href="'. home_url('sortiment-login').'" title="Login">Login</a>';
            echo '</div>';
        }
   }


}