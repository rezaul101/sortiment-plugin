<?php

namespace Softx\Sortiment\Frontend;
use Softx\Sortiment\Traits\Form_Error;
/**
 * Ajax handler class
 */
class Ajax {

    use Form_Error;

    //protected $error_message=[];
    protected $userdata=[];
    /**
     * Class constructor
     */
    function __construct() {

        add_action( 'wp_ajax_softx_sortiment_registation', [ $this, 'submit_registation'] );
        add_action( 'wp_ajax_nopriv_softx_sortiment_registation', [ $this, 'submit_registation'] );

        add_action( 'wp_ajax_update_company_profile', [ $this, 'company_update_form_handler'] );
        add_action( 'wp_ajax_nopriv_update_company_profile', [ $this, 'company_update_form_handler'] );

        add_action('profile_update', 'company_update_form_handler');
	    add_action('user_register', 'company_update_form_handler');
        add_action( 'show_user_profile', 'company_update_form_handler' );
	    add_action( 'edit_user_profile', 'company_update_form_handler' );
	    add_action( 'user_new_form', 'company_update_form_handler' );


        if (!is_user_logged_in()) {
            add_action( 'wp_ajax_nopriv_softx_sortiment_login', [ $this, 'submit_login'] );
            }

            


    }

    /**
     * Handle Registation Submission
     *
     * @return string 
     *
     **/

    public function submit_registation() {
        global $wpdb;



        //check_ajax_referer('new-user');
        if ( ! wp_verify_nonce( $_POST['_wpnonce'], 'new-user' ) ) {
            wp_send_json_success([
                'message' => 'Nonce verification failed!'
            ]);
        }

        $name               =  $_REQUEST['name'];
        $company_name       =  $_REQUEST['company_name'];
        $company_email      = $_REQUEST['company_email'] ;
        $company_address    =  $_REQUEST['company_address'];
        $password           =  $_REQUEST['password'];
        $cvr_number         =  $_REQUEST['cvr_number'];

        if ( empty( $name) ) {
            $this->errors['name'] = __( 'Please provide a name', 'softx-sortminet' );
        }
        if ( empty( $company_name) ) {
            $this->errors['company_name'] = __( 'Please provide a company name', 'softx-sortminet' );
        }
        if ( empty( $company_address) ) {
            $this->errors['company_address'] = __( 'Please provide a company address', 'softx-sortminet' );
        }

        // $email = $wpdb->escape($_REQUEST['company_email']);

        // if (!is_email($email)) {  
        //     $this->errors['company_email'] = __( 'Please enter a valid email.', 'softx-sortminet' ); 
        //     }elseif (email_exists($email))  
        //     {  
        //         $this->errors['company_email'] = __( 'This email address is already in use.', 'softx-sortminet' );  
        //     } 

        if ( empty( $company_email ) ) {
            $this->errors['company_email'] = __( 'Please provide a company email.', 'softx-sortminet' );
        }
        if ( strlen( $password ) < 6 ) {
           
            $this->errors['password'] = __( 'Password length minimum be greater than 6!.', 'softx-sortminet' );
        }
        if ( strlen( $cvr_number ) != 8 ) {
           
            $this->errors['cvr_number'] = __( 'cvr number length minimun & maximum 8 characters.', 'softx-sortminet' );
        }

        if ( ! empty( $this->errors ) ) {
             wp_send_json_error( ['error_message' => $this->errors ]);
        }

        else {

           // $name               = isset ( $_REQUEST['name'] ) ? $_REQUEST['name'] : '';
            //$company_name       = isset( $_REQUEST['company_name'] ) ? $_REQUEST['company_name'] : '';
            //$company_email      = isset( $_REQUEST['company_email'] ) ? $_REQUEST['company_email'] : '';
            //$company_address    = isset( $_REQUEST['company_address'] ) ? $_REQUEST['company_address'] : '';
            //$password           = isset( $_REQUEST['password'] ) ? $_REQUEST['password'] : '';
            //$cvr_number         = isset( $_REQUEST['cvr_number'] ) ? $_REQUEST['cvr_number'] : '';
                            
            $companydata = $wpdb->insert("{$wpdb->prefix}company_info", array(
                'company_id' 	    =>   $company_id,
                'company_name' 	    =>   $company_name,
                'company_email' 	=>   $company_email,
                'company_address'	=>   $company_address,
                'cvr_number' 	    =>   $cvr_number,

            ));
            $company_id = $wpdb->insert_id;	


            $userdata = array(
                'user_login'        =>   $name,
                'user_email'	    =>   $company_email,
                'user_pass' 	    =>   $password,
                //'first_name'        =>   $name,
                //'last_name'         =>   $name,
                //'nickname'          =>   $name,
                'role'              =>  'company',
        
            );
            $user = wp_insert_user( $userdata );

            add_user_meta($user, 'company_id', $company_id);
            $new_user_data = is_wp_error($user );

            // wp_send_json_success([
            //     'message'   => $new_user_data
            // ]);

            if ( ! is_wp_error( $new_user_data) ) {
                    
                wp_send_json_success([
                    'message'   => 'Registation has been successfully!'
                ]);
                
            } else {
                wp_send_json_error( [
                    'message' => 'Registation has been failed!'
                ] );
            } 

        }

    }

    //login callbac function
    public function submit_login() {

            check_ajax_referer('ajax-login-nonce', 'security');

            $info = array();
            $info['user_login'] = $_REQUEST['username'];
            $info['user_password'] = $_REQUEST['password'];
            $info['remember'] = $_REQUEST['remember'];

            $user_signon = wp_signon($info, false);

            if (is_wp_error($user_signon)) {   
                wp_send_json_error( [
                    'message' => 'Wrong username or password.'
                ] );
            } else {

                wp_send_json_success([
                    'message'   => 'login has been sent successfully!',
                    'user_signon'      => $user_signon

                ]);
            }   
        

    }
    /**
     * company update profile form
     *
     * @return void
     */
    public function company_update_form_handler() {
        global $wpdb;

        $current_user = wp_get_current_user();
        $userid = $current_user->ID;

        if ( ! wp_verify_nonce( $_POST['_wpnonce'], 'company-profile' ) ) {
            wp_send_json_success([
                'message' => 'Nonce verification failed!'
            ]);
        }

        // if ( ! current_user_can( 'manage_options' ) ) {
        //     wp_die( 'Are you cheating?' );
        // }

        $id                 = isset( $_POST['id'] ) ? intval( $_POST['id'] ) : 0;

        $company_name       = isset( $_POST['company_name'] ) ? sanitize_text_field( $_POST['company_name'] ) : '';
        $zip_code           = isset( $_POST['zip_code'] ) ? sanitize_textarea_field( $_POST['zip_code'] ) : '';
        $contact_person     = isset( $_POST['contact_person'] ) ? sanitize_text_field( $_POST['contact_person'] ) : '';
        $phone_number       = isset( $_POST['phone_number'] ) ? sanitize_text_field( $_POST['phone_number'] ) : '';
        $company_address    = isset( $_POST['company_address'] ) ? sanitize_textarea_field( $_POST['company_address'] ) : '';
        $company_address_2  = isset( $_POST['company_address_2'] ) ? sanitize_text_field( $_POST['company_address_2'] ) : '';

        $profile_pic  = isset( $_POST['ss_image_id'] ) ? sanitize_text_field( $_POST['ss_image_id'] ) : '';
    
    
        $updated = $wpdb->update("{$wpdb->prefix}company_info", array(
            'company_id' 	    =>   $id ,
            'company_name' 	    =>   $company_name,
            'zip_code' 	        =>   $zip_code,
            'contact_person'	=>   $contact_person,
            'phone_number' 	    =>   $phone_number,
            'company_address' 	=>   $company_address,
            'company_address_2' =>   $company_address_2,

        ), array( 'company_id' => $id  ));

        if(!empty($profile_pic)){
        update_user_meta( $userid, 'ss_pro_pic', $profile_pic );
        }
        //return "Hit to the database";
        if($updated){

            wp_send_json_success([
                'message' => 'Profile Update has been successfully!'
            ]);

            
        }else{

            wp_send_json_error([
                'message' => "Data has not updated", 400 
            ]);
        }


       
    }



}