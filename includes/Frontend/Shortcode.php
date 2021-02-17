<?php

namespace Softx\Sortiment\Frontend;

/**
 * Shortcode handler class
 */
class Shortcode {

    /**
     * Initializes the class
     */
    function __construct() {
        add_shortcode( 'softx-sortiment', [ $this, 'render_shortcode' ] );
        
    }

    /**
     * Shortcode handler class
     *
     * @param  array $atts
     * @param  string $content
     *
     * @return string
     */
    public function render_shortcode( $atts, $content = '' ) {
        wp_enqueue_script( 'sortiment-script' );
        wp_enqueue_style( 'sortiment-style' );
        wp_enqueue_style( 'sortiment-admin-style' );

        return '<div class="academy-shortcode">Hello from Shortcode</div>';
    }


}