<?php

namespace Softx\Sortiment\Frontend;

/**
 * Shortcode handler class
 */
class DashboardOrderProductsSingleShortcode {

    /**
     * Initializes the class
     */
    function __construct() {
        // Register a new shortcode: [sortiment_order_products_single]
        add_shortcode( 'sortiment_order_products_single', [ $this, 'sortiment_order_products_single_shortcode' ] );
        
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
    function sortiment_order_products_single_shortcode( $atts, $content = '') {
        if ( is_user_logged_in() ) {
        wp_enqueue_script( 'sortiment-script' );
        wp_enqueue_style( 'sortiment-style' );
        
            ob_start();
            include __DIR__ . '/views/dashboard-order-product-single.php';
            return ob_get_clean();
        } else{
            echo '<div class="wrap">';
            echo 'You are not permitted on this page. please <a href="'. home_url('sortiment-login').'" title="Login">Login</a>';
            echo '</div>';
        }
        
    } 

}