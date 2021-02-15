<?php

namespace Softx\Sortiment;

/**
 * Frontend handler class
 */
class Frontend {

    /**
     * Initialize the class
     */
    function __construct() {

        //$this->dispatch_actions();
        new Frontend\Shortcode();
       // new Frontend\FrontendMenu();
    }

    /**
     * Dispatch and bind actions
     *
     * @return void
     */
    public function dispatch_actions() {
        $register_user = new Sortiment_Registation();
        add_action( 'init', [ $register_user, 'form_handler' ] );
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
        $Sortiment_User_Registation = new Sortiment_Registation();
        var_dump( $Sortiment_User_Registation );
        exit;
        $Sortiment_User_Registation->form_handler();
        
        
    }



}