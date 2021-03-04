<?php

namespace Softx\Sortiment\Frontend;

/**
 * Shortcode handler class
 */
class RegisterShortcode {

    /**
     * Initializes the class
     */
    function __construct() {
        // Register a new shortcode: [sortiment_registration]
        add_shortcode( 'sortiment_registration', [ $this, 'sortiment_registration_shortcode' ] );
        
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
    function sortiment_registration_shortcode( $atts, $content = '') {
        if ( !is_user_logged_in() ) {
        wp_enqueue_script( 'sortiment-script-login-registation' );
        wp_enqueue_style( 'sortiment-style' );

        ob_start();

        //require_once SF_SORTIMENT_PLUGIN_DIR . '/templates/registation.php';
        include __DIR__ . '/views/registation.php';
        return ob_get_clean();
        } else{
            echo '<div class="wrap">';
             echo 'You are already registered user. ';
             wp_loginout();
             echo '</div>';
         }       
    }


}