<?php

namespace Softx\Sortiment\Frontend;

/**
 * Shortcode handler class
 */
class DashboardCompanyInformationShortcode {

    /**
     * Initializes the class
     */
    function __construct() {
        // Register a new shortcode: [sortiment_company_information]
        add_shortcode( 'sortiment_company_information', [ $this, 'sortiment_company_information_shortcode' ] );
        
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
    function sortiment_company_information_shortcode( $atts, $content = '') {

        $user = wp_get_current_user();
        if ( in_array( 'company', (array) $user->roles ) ) {
            //The user has the "company" role 
            wp_enqueue_script( 'sortiment-script-company-profile-update' );
           // wp_enqueue_script( 'sortiment-script' );
            wp_enqueue_style( 'sortiment-style' );
            wp_enqueue_media();
            
                ob_start();
                include __DIR__ . '/views/dashboard-company-information.php';
                return ob_get_clean();
        }else{
            echo '<div class="wrap">';
             echo 'You are not Company.';
             echo '</div>';
         } 

    } 

}