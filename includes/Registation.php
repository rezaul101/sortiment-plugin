<?php

namespace Softx\Sortiment;

/**
 * Deactivator class
 */
class Sortiment_Registation {

    /**
     * Registation page handler
     *
     * @return void
     */
    public function user_registation() {
        $this->reg_form_valid();
        $this->user_registration_form_completion();
        $this->custom_registration_form_function();
        $this->custom_validation_error_method();
        $this->custom_registration_form();

        add_filter( 'registration_errors', 'custom_validation_error_method', 10, 2 );

    }    
    
    
    
    /**
     * user registation 
     *
     */

    public function form_handler() {
        if ( ! isset( $_POST['submit'] ) ) {
            return;
        }

        var_dump( $_POST );
        exit;
    } 

    public function reg_form_valid( $name, $password, $email)  {
        global $customize_error_validation;
        $customize_error_validation = new WP_Error;
        if ( empty( $name ) || empty( $password ) || empty( $email ) ) {
            $customize_error_validation->add('field', ' Please Fill the filed of WordPress registration form');
        }
        if ( username_exists( $username ) )
            $customize_error_validation->add('user_name', ' User Already Exist');
        if ( is_wp_error( $customize_error_validation ) ) {
            foreach ( $customize_error_validation->get_error_messages() as $error ) {
                echo '<strong>ERROR</strong>:';
                echo $error . '<br/>';
            }
        }
    }
    public function user_registration_form_completion() {
        global $customize_error_validation, $name, $company_name, $email, $company_address, $password, $cvr_number;

        if ( 1 > count( $customize_error_validation->get_error_messages() ) ) {
            $userdata = array(
                'user_login'        =>   $name,
                //'company_name' 	    =>   $company_name,
                'user_email'	    =>   $email,
                //'company_address'	=>   $company_address,
                'user_pass' 	    =>   $password,
               // 'cvr_number' 	    =>   $cvr_number,
               'first_name'         =>   $name,
               'last_name'          =>   $name,
                'nickname'          =>   $name,
                'role'              =>  'Vendor'
     
            );
            $user = wp_insert_user( $userdata );
            add_user_meta($user_id, 'company_id', $company_id);
            add_user_meta($user_id, 'company_order_id', $company_order_id );

            echo 'Submit successfully!';
        }
    }
    public function custom_registration_form_function() {
        global $name, $company_name, $email, $company_address, $password, $cvr_number;
        if ( isset($_POST['submit'] ) ) {
            wp_reg_form_valid(
                $_POST['name'],
                $_POST['company_name'],
                $_POST['email'],
                $_POST['company_address'],
                $_POST['password'],
                $_POST['cvr_number']
           );
     
            $name            =   sanitize_user( $_POST['name'] );
            $company_name    =   sanitize_text_field( $_POST['company_name'] );
            $email  	     =   sanitize_email( $_POST['email'] );
            $company_address =   sanitize_text_field( $_POST['company_address'] );
            $password        =   esc_attr( $_POST['password'] );
            $cvr_number      =   sanitize_text_field( $_POST['cvr_number'] );

           user_registration_form_completion (
                $name,
                $company_name ,
                $email,
                $company_address,
                $password,
                $cvr_number
            );
            var_dump( $_POST );
            exit;

            }
            custom_registration_form (
                $name,
                $company_name ,
                $email,
                $company_address,
                $password,
                $cvr_number
            );
        }
    public function custom_validation_error_method( $errors, $name, $company_name ) {
    
        if ( empty( $_POST['name'] ) || ( ! empty( $_POST['name'] ) && trim( $_POST['name'] ) == '' ) ) {
            $errors->add( 'name_error', __( '<strong>Error</strong>: Enter Your Name & Last name.' ) );
        }
    
        if ( empty( $_POST['company_name'] ) || ( ! empty( $_POST['company_name'] ) && trim( $_POST['company_name'] ) == '' ) ) {
            $errors->add( 'company_name_error', __( '<strong>Error</strong>: Enter Your Company name.' ) );
        }
        return $errors;
    }

}    