<?php

namespace Softx\Sortiment\Frontend;

/**
 * Shortcode handler class
 */
class DashboardMyProductsShortcode {

    /**
     * Initializes the class
     */
    function __construct() {
        // Register a new shortcode: [sortiment_my_products]
        add_shortcode( 'sortiment_my_products', [ $this, 'sortiment_my_products_shortcode' ] );
        
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
    function sortiment_my_products_shortcode( $atts, $content = '') {
        if ( is_user_logged_in() ) {
        wp_enqueue_script( 'sortiment-script' );
        wp_enqueue_style( 'sortiment-style' );
        
            ob_start();
            include __DIR__ . '/views/dashboard-my-products.php';
            return ob_get_clean();
            } else{
                echo '<div class="wrap">';
                echo 'You are not permitted on this page. please <a href="'. home_url('sortiment-login').'" title="Login">Login</a>';
                echo '</div>';
            }
        } 

}