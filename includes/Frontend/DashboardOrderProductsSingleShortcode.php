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

        // Right column - meta
        add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

            
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