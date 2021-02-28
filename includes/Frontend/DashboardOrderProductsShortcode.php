<?php

namespace Softx\Sortiment\Frontend;

/**
 * Shortcode handler class
 */
class DashboardOrderProducts {

    /**
     * Initializes the class
     */
    function __construct() {
        // Register a new shortcode: [sortiment_order_products]
        add_shortcode( 'sortiment_order_products', [ $this, 'sortiment_order_products_shortcode' ] );
        
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
    function sortiment_order_products_shortcode( $atts, $content = '') {
       //wp_enqueue_script( 'sortiment-script-registation' );
       // wp_enqueue_style( 'sortiment-style' );
       
        ob_start();
        include __DIR__ . '/views/dashboard-order-products.php';
        return ob_get_clean();
        } 

}