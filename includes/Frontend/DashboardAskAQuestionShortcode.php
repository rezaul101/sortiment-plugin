<?php

namespace Softx\Sortiment\Frontend;

/**
 * Shortcode handler class
 */
class DashboardAskAQuestionShortcode {

    /**
     * Initializes the class
     */
    function __construct() {
        // Register a new shortcode: [sortiment_ask_a_question]
        add_shortcode( 'sortiment_ask_a_question', [ $this, 'sortiment_ask_a_question_shortcode' ] );
        
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
    function sortiment_ask_a_question_shortcode( $atts, $content = '') {
        if ( is_user_logged_in() ) {
       wp_enqueue_script( 'sortiment-script' );
       wp_enqueue_style( 'sortiment-style' );
       
        ob_start();
        include __DIR__ . '/views/dashboard-ask-a-question.php';
        return ob_get_clean();
        } else{
            echo '<div class="wrap">';
            echo 'You are not permitted on this page. please <a href="'. home_url('sortiment-login').'" title="Login">Login</a>';
            echo '</div>';
        }


        } 

}