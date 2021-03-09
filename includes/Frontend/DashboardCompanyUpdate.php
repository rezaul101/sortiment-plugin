<?php

namespace Softx\Sortiment\Frontend;

use Softx\Sortiment\Traits\Form_Error;

/**
 * Company profile updated class
 */
class DashboardCompanyUpdate {

    use Form_Error;


    /**
     * Initializes the class
     */
    function __construct() {
        
        add_action( 'admin_init', [ $this, 'company_update_form_handler' ] );
        
    }


    /**
     * Handle the form
     *
     * @return void
     */
    public function company_update_form_handler() {
        if ( ! isset( $_POST['submit'] ) ) {
            return;
        }

        if ( ! wp_verify_nonce( $_POST['_wpnonce'], 'company-profile' ) ) {
            wp_die( 'Are you cheating?' );
        }

        if ( ! current_user_can( 'manage_options' ) ) {
            wp_die( 'Are you cheating?' );
        }

        $id                 = isset( $_POST['id'] ) ? intval( $_POST['id'] ) : 0;
        $company_name       = isset( $_POST['company_name'] ) ? sanitize_text_field( $_POST['company_name'] ) : '';
        $zip_code           = isset( $_POST['zip_code'] ) ? sanitize_textarea_field( $_POST['zip_code'] ) : '';
        $contact_person     = isset( $_POST['contact_person'] ) ? sanitize_text_field( $_POST['contact_person'] ) : '';
        $phone_number       = isset( $_POST['phone_number'] ) ? sanitize_text_field( $_POST['phone_number'] ) : '';
        $company_address    = isset( $_POST['company_address'] ) ? sanitize_textarea_field( $_POST['company_address'] ) : '';
        $company_address_2  = isset( $_POST['company_address_2'] ) ? sanitize_text_field( $_POST['company_address_2'] ) : '';

        if ( empty( $contact_person ) ) {
            $this->errors['contact_person'] = __( 'Please provide a name', 'softx-sortiment' );
        }

        if ( empty( $phone ) ) {
            $this->errors['phone_numbe'] = __( 'Please provide a phone number.', 'softx-sortiment' );
        }

        if ( ! empty( $this->errors ) ) {
            return;
        }

        $args = [
            'company_name'      => $company_name,
            'zip_code'          => $zip_code,
            'contact_person'    => $contact_person,
            'phone_number'      => $phone_number,
            'company_address'   => $company_address,
            'company_address_2' => $company_address_2,
        ];

        if ( $id ) {
            $args['company_id'] = $id;
        }

        $insert_id = update_company_profile( $args );

        if ( is_wp_error( $insert_id ) ) {
            wp_die( $insert_id->get_error_message() );
        }

        //wp_redirect( $redirected_to );
        //exit;
    }


}