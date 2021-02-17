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
        new Frontend\Shortcode();
        new Frontend\RegisterShortcode();
        new Frontend\LoginShortcode();

        //new Frontend\FrontendHandler();
        //$userregister = new Frontend\SortimentRegistation();
        //$this->dispatch_actions( $userregister );

    }

    /**
     * Dispatch and bind actions
     *
     * @return void
     */
    public function dispatch_actions( $userregister ) {
        //add_action( 'init', [ $userregister, 'form_handler' ] );
    }


}