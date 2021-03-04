<?php

namespace Softx\Sortiment\Frontend;

/**
 * Ajax handler class
 */
class Ajax {


    protected $error_message=[];
    protected $userdata=[];
    /**
     * Class constructor
     */
    function __construct() {
        add_action( 'wp_ajax_softx_sortiment_registation', [ $this, 'submit_registation'] );
        add_action( 'wp_ajax_nopriv_softx_sortiment_registation', [ $this, 'submit_registation'] );

        
        if (!is_user_logged_in()) {
            add_action( 'wp_ajax_nopriv_softx_sortiment_login', [ $this, 'submit_login'] );
            }

    }

    /**
     * Handle Registation Submission
     *
     * @return string 
     */
    private function is_form_field_valied_registation($filed_name) {

        if($filed_name === 'email'){
           if( isset( $_REQUEST[$filed_name]) && !empty(trim($_REQUEST[$filed_name])) && sanitize_email( $_REQUEST[$filed_name] ) ){
                return true;
           }else {
            $this->error_message[$filed_name] = "Valid Email is required";
           }
        }

        if(isset( $_REQUEST[$filed_name]) && !empty(trim($_REQUEST[$filed_name]))){

            return true; 
        }
        else {
            $this->error_message[$filed_name] = $filed_name." is required";
           }
        
    }

    public function submit_registation() {
        global $wpdb;
        if ( ! wp_verify_nonce( $_REQUEST['_wpnonce'], 'new-user' ) ) {
            wp_send_json_error( [
                'message' => 'Nonce verification failed!'
            ] );
        }
        //$this->is_form_field_valied_registation('name')
        if( $this->is_form_field_valied_registation('name')){
            $userdata['user_login'] =  $_REQUEST['name'];
        }elseif($this->is_form_field_valied_registation('email')){
            $userdata['user_email'] =  $_REQUEST['email'];

        }

        if(! empty($this->error_message)){

        return    wp_send_json_error( $this->error_message, 400);
        }
        else {
          //return  wp_send_json_success( ['message' => 'success'], 200 );
        //}

        
        $name               = isset ( $_REQUEST['name'] ) ? $_REQUEST['name'] : '';
        $company_name       = isset( $_REQUEST['company_name'] ) ? $_REQUEST['company_name'] : '';
        $company_email      = isset( $_REQUEST['company_email'] ) ? $_REQUEST['company_email'] : '';
        $company_address    = isset( $_REQUEST['company_address'] ) ? $_REQUEST['company_address'] : '';
        $password           = isset( $_REQUEST['password'] ) ? $_REQUEST['password'] : '';
        $cvr_number         = isset( $_REQUEST['cvr_number'] ) ? $_REQUEST['cvr_number'] : '';
						
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


        wp_send_json_success([
            'message' => 'Registation has been sent successfully!'
        ]);

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
                //wp_set_current_user($user_signon->ID);
                //wp_set_auth_cookie($user_signon->ID);
                
                wp_send_json_error( [
                    'message' => 'Login failed!'
                ] );
            } else {

                wp_send_json_success([
                    'message' => 'login has been sent successfully!'
                ]);
            }   
        

    }




}