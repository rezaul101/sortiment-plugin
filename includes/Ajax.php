<?php

namespace Softx\Sortiment;

/**
 * Ajax handler class
 */
class Ajax {

    /**
     * Class constructor
     */
    function __construct() {
        add_action( 'wp_ajax_softx_sortiment_registation', [ $this, 'submit_registation'] );
        add_action( 'wp_ajax_nopriv_softx_sortiment_registation', [ $this, 'submit_registation'] );
    }

    /**
     * Handle Enquiry Submission
     *
     * @return void
     */
    public function submit_registation() {

        if ( ! wp_verify_nonce( $_REQUEST['_wpnonce'], 'new-user' ) ) {
            wp_send_json_error( [
                'message' => 'Nonce verification failed!'
            ] );
        }
        if ( isset($_REQUEST['submit'] ) ) {
            wp_reg_form_valid(
                $_REQUEST['name'],
                $_REQUEST['company_name'],
                $_REQUEST['email'],
                $_REQUEST['company_address'],
                $_REQUEST['password'],
                $_REQUEST['cvr_number']
           );
     
            $name            =   sanitize_user( $_REQUEST['name'] );
            $company_name    =   sanitize_text_field( $_REQUEST['company_name'] );
            $email  	     =   sanitize_email( $_REQUEST['email'] );
            $company_address =   sanitize_text_field( $_REQUEST['company_address'] );
            $password        =   esc_attr( $_REQUEST['password'] );
            $cvr_number      =   sanitize_text_field( $_REQUEST['cvr_number'] );

           user_registration_form_completion (
                $name,
                $company_name ,
                $email,
                $company_address,
                $password,
                $cvr_number
            );

        }
            custom_registration_form (
                $name,
                $company_name ,
                $email,
                $company_address,
                $password,
                $cvr_number
            );

        wp_send_json_success([
            'message' => 'Registation has been sent successfully!'
        ]);
    }

}