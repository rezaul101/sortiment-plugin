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
	    //add_action('user_register', 'company_update_form_handler');


        // color logo 
        add_action( 'wp_ajax_profile_color_logo', [ $this, 'file_upload_callback'] );
        add_action( 'wp_ajax_nopriv_profile_color_logo', [ $this, 'file_upload_callback'] );

        add_action('profile_update', 'file_upload_callback');
        //add_action('user_register', 'file_upload_callback');

        // white logo 
        add_action( 'wp_ajax_profile_white_logo', [ $this, 'file_upload_callback_white_logo'] );
        add_action( 'wp_ajax_nopriv_profile_white_logo', [ $this, 'file_upload_callback_white_logo'] );

        add_action('profile_update', 'file_upload_callback_white_logo');
        //add_action('user_register', 'file_upload_callback_white_logo');

        // black logo 
        add_action( 'wp_ajax_profile_black_logo', [ $this, 'file_upload_callback_black_logo'] );
        add_action( 'wp_ajax_nopriv_profile_black_logo', [ $this, 'file_upload_callback_black_logo'] );

        add_action('profile_update', 'file_upload_callback_black_logo');
        //add_action('user_register', 'file_upload_callback_black_logo');

        // alt logo 
        add_action( 'wp_ajax_profile_alt_logo', [ $this, 'file_upload_callback_alt_logo'] );
        //add_action( 'wp_ajax_nopriv_profile_alt_logo', [ $this, 'file_upload_callback_alt_logo'] );

        add_action('profile_update', 'file_upload_callback_alt_logo');
       // add_action('user_register', 'file_upload_callback_alt_logo');

        
       // deny message acction approved_message_handler
       add_action( 'wp_ajax_company_deny_product', [ $this, 'deny_message_handler'] );
       add_action( 'wp_ajax_nopriv_company_deny_product', [ $this, 'deny_message_handler'] );

        // approved_message_handler
        add_action( 'wp_ajax_approved_porduct', [ $this, 'approved_message_handler'] );
        add_action( 'wp_ajax_nopriv_approved_porduct', [ $this, 'approved_message_handler'] );


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
        //check_ajax_referer('new-user'); deny_message_handler
        if ( ! wp_verify_nonce( $_POST['_wpnonce'], 'new-user' ) ) {
            wp_send_json_success([
                'message' => 'Nonce verification failed!'
            ]);
        }

        $name               =  $_REQUEST['name'];
        $company_name       =  $_REQUEST['company_name'];
        $company_email      =  $_REQUEST['company_email'] ;
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

        $email = $wpdb->escape($_REQUEST['company_email']);

        if (!is_email($email)) {  
            $this->errors['company_email'] = __( 'Please enter a valid email.', 'softx-sortminet' ); 
            }elseif (email_exists($email))  
            {  
                $this->errors['company_email'] = __( 'This email address is already in use.', 'softx-sortminet' );  
            } 

        // if ( empty( $company_email ) ) {
        //     $this->errors['company_email'] = __( 'Please provide a company email.', 'softx-sortminet' );
        // }
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

            /*
            $to      = get_option('admin_email');
            $subject = 'Company Registation Submission!';
            $message = sprintf(
                        'User Name:'. $name or $company_email,
                        'Password :'. $password,
                        'Company Name :'. $company_name,
                        'Company Email:'. $company_email,
                        'Company Address :'. $company_address,
                        'Company CVR Number :'. $cvr_number
                        );

            $result = wp_mail( $to, $subject, $message );*/


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

                
            // $company_name       =  $_REQUEST['company_name'];
            // $zip_code           =  $_REQUEST['zip_code'] ;
            // $contact_person     =  $_REQUEST['contact_person'];
            // $phone_number       =  $_REQUEST['phone_number'];
            // $company_address    =  $_REQUEST['company_address'];
            // $company_address_2  =  $_REQUEST['company_address_2'];

            $id                 = isset( $_POST['id'] ) ? intval( $_POST['id'] ) : 0;

            $company_name           = isset( $_POST['company_name'] ) ? sanitize_text_field( $_POST['company_name'] ) : '';
            $zip_code               = isset( $_POST['zip_code'] ) ? sanitize_textarea_field( $_POST['zip_code'] ) : '';
            $contact_person         = isset( $_POST['contact_person'] ) ? sanitize_text_field( $_POST['contact_person'] ) : '';
            $phone_number           = isset( $_POST['phone_number'] ) ? sanitize_text_field( $_POST['phone_number'] ) : '';
            $company_address        = isset( $_POST['company_address'] ) ? sanitize_textarea_field( $_POST['company_address'] ) : '';
            $company_address_2      = isset( $_POST['company_address_2'] ) ? sanitize_text_field( $_POST['company_address_2'] ) : '';
            $cvr_number             = isset( $_REQUEST['cvr_number'] ) ? $_REQUEST['cvr_number'] : '';
            $bookingkeepere_email   = isset( $_REQUEST['bookingkeepere_email'] ) ? $_REQUEST['bookingkeepere_email'] : '';
            $profile_pic            = isset( $_POST['ss_image_id'] ) ? sanitize_text_field( $_POST['ss_image_id'] ) : '';



            $updated = $wpdb->update("{$wpdb->prefix}company_info", array(
                'company_id' 	        =>   $id ,
                'company_name' 	        =>   $company_name,
                'zip_code' 	            =>   $zip_code,
                'contact_person'	    =>   $contact_person,
                'phone_number' 	        =>   $phone_number,
                'company_address' 	    =>   $company_address,
                'company_address_2'     =>   $company_address_2,
                'cvr_number'            =>   $cvr_number,
                'bookingkeepere_email'  =>   $bookingkeepere_email,

            ), array( 'company_id' => $id  ));

            if(!empty($profile_pic)){
            update_user_meta( $userid, 'ss_pro_pic', $profile_pic );
            }

            if ( false === $updated ) {
                wp_send_json_error([
                    'message' => 'Data has not updated'
                ]);
            } else {
                wp_send_json_success([
                    'message' => 'Profile Update has been successfully!'
                ]);
            }   
    
    }
    /**
     * company color logo
     *
     * @return void
     **/

    function file_upload_callback() {
        global $wpdb;
        $current_user = wp_get_current_user();
        $userid = $current_user->ID;

        $loginuser_id = get_current_user_id();
        $get_companyid = get_user_meta($loginuser_id, 'company_id');
        $set_companyid = $get_companyid[0];

        if ( ! wp_verify_nonce( $_REQUEST['_wpnonce'], 'company-profile-color-logo' ) ) {
            wp_send_json_success([
                'message' => 'Nonce verification failed!'
            ]);
        }
        /**
         * 
         * metakey : 01. color_logos_id
         * 02. white_logos_id
         * 03. black_logos_id
         * 04. alt_logos_id
         * value will be like this : 202,203,204,205(string format)
         * first get value.
         * 
         * 
         */
        $colorlogo_jpg_id   = $_POST['colorlogo_jpg_id'];
        $colorlogo_png_id   = $_POST['colorlogo_png_id'];
        $colorlogo_ai_id    = $_POST['colorlogo_ai_id'];
        $colorlogo_svg_id   = $_POST['colorlogo_svg_id'];
        $colorlogo_pdf_id   = $_POST['colorlogo_pdf_id'];

        // $attachment = $wpdb->insert("{$wpdb->prefix}company_attachment", array(
        //     'company_id' 	    =>   $set_companyid,
        //     'extra_logo' 	    =>   $color_img,

        // ));

        if(!empty($colorlogo_jpg_id)){
                update_user_meta( $userid, 'colorlogo_jpg', $colorlogo_jpg_id );
                wp_send_json_success([
                    'message'   => 'Logo has been successfully Save!'
                ]);

            }
        if(!empty($colorlogo_png_id)){ 
            update_user_meta( $userid, 'colorlogo_png', $colorlogo_png_id );
            wp_send_json_success([
                'message'   => 'Logo has been successfully Save!'
            ]);

        }
        if(!empty($colorlogo_ai_id) ){
            update_user_meta( $userid, 'colorlogo_ai', $colorlogo_ai_id );
            wp_send_json_success([
                'message'   => 'Logo has been successfully Save!'
            ]);

        }
        if(!empty($colorlogo_svg_id) ){
            update_user_meta( $userid, 'colorlogo_svg', $colorlogo_svg_id );
            wp_send_json_success([
                'message'   => 'Logo has been successfully Save!'
            ]);
        }
        if(!empty($colorlogo_pdf_id)){
            update_user_meta( $userid, 'colorlogo_pdf', $colorlogo_pdf_id );
            wp_send_json_success([
            'message'   => 'Logo has been successfully Save!'
        ]);

        }
        

     }

    /**
     * company white logo
     *
     * @return void
     **/

    function file_upload_callback_white_logo() {
        global $wpdb;
        $current_user = wp_get_current_user();
        $userid = $current_user->ID;

        $loginuser_id = get_current_user_id();
        $get_companyid = get_user_meta($loginuser_id, 'company_id');
        $set_companyid = $get_companyid[0];

        if ( ! wp_verify_nonce( $_REQUEST['_wpnonce'], 'company-profile-white-logo' ) ) {
            wp_send_json_success([
                'message' => 'Nonce verification failed!'
            ]);
        }

        $whitelogo_jpg_id   = $_POST['whitelogo_jpg_id'];
        $whitelogo_png_id   = $_POST['whitelogo_png_id'];
        $whitelogo_ai_id    = $_POST['whitelogo_ai_id'];
        $whitelogo_svg_id   = $_POST['whitelogo_svg_id'];
        $whitelogo_pdf_id   = $_POST['whitelogo_pdf_id'];

        if(!empty($whitelogo_jpg_id)){
                update_user_meta( $userid, 'whitelogo_jpg', $whitelogo_jpg_id );
                wp_send_json_success([
                    'message'   => 'Logo has been successfully Save!'
                ]);

            }
        if(!empty($whitelogo_png_id)){ 
            update_user_meta( $userid, 'whitelogo_png', $whitelogo_png_id );
            wp_send_json_success([
                'message'   => 'Logo has been successfully Save!'
            ]);

        }
        if(!empty($whitelogo_ai_id) ){
            update_user_meta( $userid, 'whitelogo_ai', $whitelogo_ai_id );
            wp_send_json_success([
                'message'   => 'Logo has been successfully Save!'
            ]);

        }
        if(!empty($whitelogo_svg_id) ){
            update_user_meta( $userid, 'whitelogo_svg', $whitelogo_svg_id );
            wp_send_json_success([
                'message'   => 'Logo has been successfully Save!'
            ]);
        }
        if(!empty($whitelogo_pdf_id)){
            update_user_meta( $userid, 'whitelogo_pdf', $whitelogo_pdf_id );
            wp_send_json_success([
            'message'   => 'Logo has been successfully Save!'
        ]);

        }
        

     }

     /**
     * company white logo
     *
     * @return void
     **/

    function file_upload_callback_black_logo() {
        global $wpdb;
        $current_user = wp_get_current_user();
        $userid = $current_user->ID;

        $loginuser_id = get_current_user_id();
        $get_companyid = get_user_meta($loginuser_id, 'company_id');
        $set_companyid = $get_companyid[0];

        if ( ! wp_verify_nonce( $_REQUEST['_wpnonce'], 'company-profile-black-logo' ) ) {
            wp_send_json_success([
                'message' => 'Nonce verification failed!'
            ]);
        }

        $blacklogo_jpg_id   = $_POST['blacklogo_jpg_id'];
        $blacklogo_png_id   = $_POST['blacklogo_png_id'];
        $blacklogo_ai_id    = $_POST['blacklogo_ai_id'];
        $blacklogo_svg_id   = $_POST['blacklogo_svg_id'];
        $blacklogo_pdf_id   = $_POST['blacklogo_pdf_id'];

        if(!empty($blacklogo_jpg_id)){
                update_user_meta( $userid, 'blacklogo_jpg', $blacklogo_jpg_id );
                wp_send_json_success([
                    'message'   => 'Logo has been successfully Save!'
                ]);

            }
        if(!empty($blacklogo_png_id)){ 
            update_user_meta( $userid, 'blacklogo_png', $blacklogo_png_id );
            wp_send_json_success([
                'message'   => 'Logo has been successfully Save!'
            ]);

        }
        if(!empty($blacklogo_ai_id) ){
            update_user_meta( $userid, 'blacklogo_ai', $blacklogo_ai_id );
            wp_send_json_success([
                'message'   => 'Logo has been successfully Save!'
            ]);

        }
        if(!empty($blacklogo_svg_id) ){
            update_user_meta( $userid, 'blacklogo_svg', $blacklogo_svg_id );
            wp_send_json_success([
                'message'   => 'Logo has been successfully Save!'
            ]);
        }
        if(!empty($blacklogo_pdf_id)){
            update_user_meta( $userid, 'blacklogo_pdf', $blacklogo_pdf_id );
            wp_send_json_success([
            'message'   => 'Logo has been successfully Save!'
        ]);

        }
        

     }


     /**
     * company alt logo
     *
     * @return void
     **/

    function file_upload_callback_alt_logo() {
        global $wpdb;
        $current_user = wp_get_current_user();
        $userid = $current_user->ID;

        // $loginuser_id = get_current_user_id();
        // $get_companyid = get_user_meta($loginuser_id, 'company_id');
        // $set_companyid = $get_companyid[0];

        if ( ! wp_verify_nonce( $_REQUEST['_wpnonce'], 'company-profile-alt-logo' ) ) {
            wp_send_json_success([
                'message' => 'Nonce verification failed!'
            ]);
        }

        $altlogo_jpg_id   =   $_POST['altlogo_jpg_id'] ;
        $altlogo_png_id   =   $_POST['altlogo_png_id'] ;
        $altlogo_ai_id    =   $_POST['altlogo_ai_id'] ;
        $altlogo_svg_id   =   $_POST['altlogo_svg_id'] ;
        $altlogo_pdf_id   =   $_POST['altlogo_pdf_id'] ;


        if(!empty($altlogo_jpg_id)){
                 update_user_meta( $userid, 'alt_logo_jpg', $altlogo_jpg_id );
                wp_send_json_success([
                    'message'   => 'Logo has been successfully Save!',
                ]);

            }
        if(!empty($altlogo_png_id)){
            update_user_meta( $userid, 'alt_logo_png', $altlogo_png_id );
           wp_send_json_success([
               'message'   => 'Logo has been successfully Save!',
           ]);

       }
        if(!empty($altlogo_ai_id) ){
          update_user_meta( $userid, 'alt_logo_ai', $altlogo_ai_id );
            wp_send_json_success([
                'message'   => 'Logo has been successfully Save!',
            ]);

        }
        if(!empty($altlogo_svg_id) ){
            update_user_meta( $userid, 'alt_logo_svg', $altlogo_svg_id );
            wp_send_json_success([
                'message'   => 'Logo has been successfully Save!',
            ]);
        }
        if(!empty($altlogo_pdf_id)){
            update_user_meta( $userid, 'alt_logo_pdf', $altlogo_pdf_id );
            wp_send_json_success([
            'message'   => 'Logo has been successfully Save!',
        ]);

        }   

     }

     /**
     * deny_message_handler
     *
     * @return string 
     *
     **/
    public function deny_message_handler() {
        global $wpdb;

        $loginuser_id = get_current_user_id();
        $get_companyid = get_user_meta($loginuser_id, 'company_id');
        $set_companyid = $get_companyid[0];


        if ( ! wp_verify_nonce( $_POST['_wpnonce'], 'product_deny' ) ) {
            wp_send_json_success([
                'message' => 'Nonce verification failed!'
            ]);
        }

        $productid          =  $_REQUEST['productid'];
        $product_name       =  $_REQUEST['product_name'];
        $product_price      =  $_REQUEST['product_pirce'];
        $deny_message       =  $_REQUEST['deny_message'];
        $status             =  $_REQUEST['deny'];
       

        if ( empty( $deny_message ) ) {
            $this->errors['deny_message'] = __( 'Please write your message.', 'softx-sortminet' );
        }

        if ( ! empty( $this->errors ) ) {
             wp_send_json_error( ['error_message' => $this->errors ]);
        }

        else {
            
            $companydenymessage = $wpdb->insert("{$wpdb->prefix}company_order_summary", array(
                'company_id' 	    =>   $set_companyid,
                'product_id' 	    =>   $productid,
                'product_name' 	    =>   $product_name,
                'price' 	        =>   $product_price,
                'deny_message' 	    =>   $deny_message,
                'status' 	        =>   $status,


            ));

            $deny_message = is_wp_error($companydenymessage );


            if ( ! is_wp_error( $deny_message) ) {
                update_post_meta( $productid, 'company_product_status', 'denied' );   
                wp_send_json_success([
                    'message'   => 'Deny message successfully send.'
                ]);
                
            } else {
                wp_send_json_error( [
                    'message' => 'Deny message has been failed!'
                ] );
            } 

        }

    }

    
     /**
     * approved_message_handler
     *
     * @return string 
     *
     **/
    public function approved_message_handler() {
        global $wpdb;

        $loginuser_id = get_current_user_id();
        $get_companyid = get_user_meta($loginuser_id, 'company_id');
        $set_companyid = $get_companyid[0];


        if ( ! wp_verify_nonce( $_POST['_wpnonce'], 'approve' ) ) {
            wp_send_json_success([
                'message' => 'Nonce verification failed!'
            ]);
        }

        $productid          =  $_REQUEST['productid'];
        $product_name       =  $_REQUEST['product_name'];
        $product_price      =  $_REQUEST['product_pirce'];
        $status             =  $_REQUEST['approve'];
       

        if ( empty( $status ) ) {
            $this->errors['approved'] = __( 'Please Click approve button.', 'softx-sortminet' );
        }

        if ( ! empty( $this->errors ) ) {
             wp_send_json_error( ['error_message' => $this->errors ]);
        }

        else {
            
            $approveproduct = $wpdb->insert("{$wpdb->prefix}company_order_summary", array(
                'company_id' 	    =>   $set_companyid,
                'product_id' 	    =>   $productid,
                'product_name' 	    =>   $product_name,
                'price' 	        =>   $product_price,
                'status' 	        =>   $status,


            ));

            $approved = is_wp_error($approveproduct );


            if ( ! is_wp_error( $approved ) ) {
                update_post_meta( $productid, 'company_product_status', 'approved' );   
                wp_send_json_success([
                    'message'   => 'Approved successfully.'
                ]);
                
            } else {
                wp_send_json_error( [
                    'message' => 'Approved has been failed!.'
                ] );
            } 

        }

    }



}