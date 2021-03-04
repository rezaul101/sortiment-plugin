<?php

namespace Softx\Sortiment\Frontend;

/**
 * Shortcode handler class
 */
class DashboardOrderHistoryShortcode {

    /**
     * Initializes the class
     */
    function __construct() {
        // Register a new shortcode: [sortiment_order_history]
        add_shortcode( 'sortiment_order_history', [ $this, 'sortiment_order_history_shortcode' ] );
        
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
    function sortiment_order_history_shortcode( $atts, $content = '') {
       wp_enqueue_script( 'sortiment-script' );
       wp_enqueue_style( 'sortiment-style' );
       
        ob_start();
        include __DIR__ . '/views/dashboard-order-history.php';
        return ob_get_clean();
        } 

}