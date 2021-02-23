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
        new Frontend\DashboardShortcode();
        

    }


}