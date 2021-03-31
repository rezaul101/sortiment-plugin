<?php

namespace Softx\Sortiment\Frontend;

/**
 * Shortcode handler class
 */
class LoginShortcode {

    /**
     * Initializes the class
     */
    function __construct() {
        // Register a new shortcode: [sortiment_login]
        add_shortcode( 'sortiment_login', [ $this, 'sortiment_login_shortcode' ] );
        
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
    function sortiment_login_shortcode( $atts, $content = '') {
        if ( !is_user_logged_in() ) {
        wp_enqueue_script( 'sortiment-script-login-registation' );
        wp_enqueue_style( 'sortiment-style' );

        ob_start();

        //require_once SF_SORTIMENT_PLUGIN_DIR . '/templates/registation.php';
        include __DIR__ . '/views/login.php';
        return ob_get_clean();
        } else{
            echo '<div class="wrap">';
             echo 'You are already logged in user. ';
             wp_loginout();
             echo '<a href="'. home_url('sortiment-dashboard').' "> Back to Dashboard</a>';
             echo '</div>';
         }
    }



}