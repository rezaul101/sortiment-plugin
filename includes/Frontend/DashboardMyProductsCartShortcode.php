<?php

namespace Softx\Sortiment\Frontend;

/**
 * Shortcode handler class
 */
class DashboardMyProductsCartShortcode {

    /**
     * Initializes the class
     */
    function __construct() {
        // Register a new shortcode: [sortiment_my_products_cart]
        add_shortcode( 'sortiment_my_products_cart', [ $this, 'sortiment_my_products_cart_shortcode' ] );
        
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
    function sortiment_my_products_cart_shortcode( $atts, $content = '') {
       wp_enqueue_script( 'sortiment-script' );
       wp_enqueue_style( 'sortiment-style' );
       
        ob_start();
        include __DIR__ . '/views/dashboard-my-product-cart.php';
        return ob_get_clean();
        } 

}