<?php

namespace Softx\Sortiment\Frontend;

/**
 * Shortcode handler class
 */
class DashboardYourEmployeesShortcode {

    /**
     * Initializes the class
     */
    function __construct() {
        // Register a new shortcode: [sortiment_your_employees_order]
        add_shortcode( 'sortiment_your_employees_order', [ $this, 'sortiment_your_employees_order_shortcode' ] );
        
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
    function sortiment_your_employees_order_shortcode( $atts, $content = '') {
       wp_enqueue_script( 'sortiment-script' );
       wp_enqueue_style( 'sortiment-style' );
       
        ob_start();
        include __DIR__ . '/views/dashboard-your-employees-order.php';
        return ob_get_clean();
        } 

}