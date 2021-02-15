<?php

namespace Softx\Sortiment\Frontend;

/**
 * Shortcode handler class
 */
class FrontendMenu {

    /**
     * Initialize the class
     */
    function __construct() {
        add_action( 'init', [ $Sortiment_Registation, 'registation' ] );

    }

    /**
     *  handler class
     *
     * @param  array $atts
     * @param  string $content
     *
     * @return string
     */
    public function sortiment_user_registation() {
        $Sortiment_Registation = new Sortiment_Registation();
        $Sortiment_Registation->registation();
        
        
    }



}