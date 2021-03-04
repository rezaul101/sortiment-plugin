<?php

namespace Softx\Sortiment;

/**
 * Installer class
 */
class Installer {

    /**
     * Run the installer
     *
     * @return void
     */
    public function run() {
        $this->add_version();
        $this->create_vendor_role();
        $this->create_tables();
        $this->create_pages();

    }

    /**
     * Add time and version on DB
     */
    public function add_version() {
        $installed = get_option( 'sf_sortiment_installed' );

        if ( ! $installed ) {
            update_option( 'sf_sortiment_installed', time() );
        }

        update_option( 'sf_sortiment_version', SF_SORTIMENT_VERSION );
    }

    /**
     * Create new role
     */
    public function create_vendor_role() {
        add_role(
            'company',
            __( 'Company' ),
            array(
                'read'         => true,  // true allows this capability
                'edit_posts'   => false,
                'delete_posts' => false,
                'manage_options' => true,
                
            )
        );
       // $role= get_role('sortiment_vendor');
        //$role->add_cap('sortiment_capability');

    }
    /**
     * Create necessary database tables
     *
     * @return void
     */
    public function create_tables() {
        global $wpdb;

        $charset_collate = $wpdb->get_charset_collate();

        $company_employee_table = "CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}company_employee` (
            `employee_id` int(11) NOT NULL AUTO_INCREMENT,
            `company_id` int(11) NOT NULL,
            `employee_name` varchar(255) NOT NULL,
            `employee_email` varchar(255) NOT NULL,
            `employee_pass` varchar(255) NOT NULL,
            `employee_address` varchar(255) DEFAULT NULL,
            `assigned_product_id` varchar(255) DEFAULT NULL,
            PRIMARY KEY (`employee_id`),
            UNIQUE (employee_email)
           )  $charset_collate";

        if ( ! function_exists( 'dbDelta' ) ) {
            require_once ABSPATH . 'wp-admin/includes/upgrade.php';
        }

        dbDelta( $company_employee_table );


        $company_info_table = "CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}company_info` (
            `company_id` int(11) NOT NULL AUTO_INCREMENT,
            `company_name` varchar(255) NOT NULL,
            `contact_person` varchar(255) DEFAULT NULL,
            `company_email` varchar(255) NOT NULL,
            `cvr_number` varchar(255) NOT NULL,
            `phone_number` varchar(255) DEFAULT NULL,
            `zip_code` varchar(255) DEFAULT NULL,
            `company_address` varchar(255) DEFAULT NULL,
            `company_address_2` varchar(255) DEFAULT NULL,
            PRIMARY KEY (`company_id`),
            UNIQUE (company_email)
           ) $charset_collate";

        if ( ! function_exists( 'dbDelta' ) ) {
            require_once ABSPATH . 'wp-admin/includes/upgrade.php';
        }

        dbDelta( $company_info_table );

        $company_order_details_table = "CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}company_order_details` (
            `company_order_details_id` int(11) NOT NULL AUTO_INCREMENT,
            `order_summery_id` varchar(255) NOT NULL,
            `company_id` varchar(255) NOT NULL,
            `employee_id` varchar(255) NOT NULL,
            `product_id` varchar(255) NOT NULL,
            `product_lavel` varchar(255) NOT NULL,
            `product_color` varchar(255) NOT NULL,
            `product_size` varchar(255) NOT NULL,
            `product_quantity` varchar(255) NOT NULL,
            `product_status` varchar(255) DEFAULT NULL,
            PRIMARY KEY (`company_order_details_id`)
           ) $charset_collate";

        if ( ! function_exists( 'dbDelta' ) ) {
            require_once ABSPATH . 'wp-admin/includes/upgrade.php';
        }

        dbDelta( $company_order_details_table );

        $company_order_summary_table = "CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}company_order_summary` (
            `order_summery_id` int(11) NOT NULL AUTO_INCREMENT,
            `company_id` varchar(255) NOT NULL,
            `product_id` varchar(255) NOT NULL,
            `total_quantity` varchar(255) NOT NULL,
            `price` varchar(255) NOT NULL,
            `status` varchar(255) DEFAULT NULL,
            `deny_message` varchar(255) NOT NULL,
            `payment_status` varchar(255) NOT NULL,
            `woocommerce_order_id` varchar(255) NOT NULL,
            PRIMARY KEY (`order_summery_id`)
           ) $charset_collate";

        if ( ! function_exists( 'dbDelta' ) ) {
            require_once ABSPATH . 'wp-admin/includes/upgrade.php';
        }

        dbDelta( $company_order_summary_table );

    }

    /**
     * create page
     *
     */
    public function create_pages() {

        // Create post object
        // create login page
        $login_page_exist = get_page_by_title('Sortiment Login', 'OBJECT', 'page');
        if(empty($login_page_exist)) {
                $sf_login_page = array(
                    'post_title'    => "Sortiment Login",
                    'post_name'     => "sortiment-login",
                    'post_content'  => "[sortiment_login]",
                    'post_status'   => 'publish',
                    'post_author'   => 1,
                    'post_type'     => "Page",
                );
                wp_insert_post( $sf_login_page );
        }
        // create Registation page
        $registation_page_exist = get_page_by_title('Sortiment Registation', 'OBJECT', 'page');
        if(empty($registation_page_exist)) {
                $sf_registation_page = array(
                    'post_title'    => "Sortiment Registation",
                    'post_name'     => "sortiment-registation",
                    'post_content'  => "[sortiment_registration]",
                    'post_status'   => 'publish',
                    'post_author'   => 1,
                    'post_type'     => "Page",
                );
                wp_insert_post( $sf_registation_page );
        }
        // create Dashboard page
        $dashboard_page_exist = get_page_by_title('Sortiment Dashboard', 'OBJECT', 'page');
        if(empty($dashboard_page_exist)) {
                $sf_dashboard_page = array(
                    'post_title'    => "Sortiment Dashboard",
                    'post_name'     => "sortiment-dashboard",
                    'post_content'  => "[sortiment_dashboard]",
                    'post_status'   => 'publish',
                    'post_author'   => 1,
                    'post_type'     => "Page",
                );
                wp_insert_post( $sf_dashboard_page );
        }

        // create Sortiment Order Products page
        $order_products_exist = get_page_by_title('Sortiment Order Products', 'OBJECT', 'page');
        if(empty($order_products_exist)) {
                $sf_order_products_page = array(
                    'post_title'    => "Sortiment Order Products",
                    'post_name'     => "sortiment-order-products",
                    'post_content'  => "[sortiment_order_products]",
                    'post_status'   => 'publish',
                    'post_author'   => 1,
                    'post_type'     => "Page",
                );
                wp_insert_post( $sf_order_products_page );
        }
        // create SortimentSortiment Order product Single page
        $order_product_single_page_exist = get_page_by_title('Sortiment Order Product Single', 'OBJECT', 'page');
        if(empty($order_product_single_page_exist)) {
                $sf_order_product_single_page = array(
                    'post_title'    => "Sortiment Order Product Single",
                    'post_name'     => "sortiment-order-products-single",
                    'post_content'  => "[sortiment_order_products_single]",
                    'post_status'   => 'publish',
                    'post_author'   => 1,
                    'post_type'     => "Page",
                );
                wp_insert_post( $sf_order_product_single_page );
        }
        // create Sortiment My Products page
        $my_products_page_exist = get_page_by_title('Sortiment My Products', 'OBJECT', 'page');
        if(empty($my_products_page_exist)) {
                $sf_my_products_page = array(
                    'post_title'    => "Sortiment My Products",
                    'post_name'     => "sortiment-my-products",
                    'post_content'  => "[sortiment_my_products]",
                    'post_status'   => 'publish',
                    'post_author'   => 1,
                    'post_type'     => "Page",
                );
                wp_insert_post( $sf_my_products_page );
        }
        // create Sortiment My Products Single page
        $my_products_single_page_exist = get_page_by_title('Sortiment My Products Single', 'OBJECT', 'page');
        if(empty($my_products_single_page_exist)) {
                $sf_my_products_single_page = array(
                    'post_title'    => "Sortiment My Products Single",
                    'post_name'     => "sortiment-my-products-single",
                    'post_content'  => "[sortiment_my_products_single]",
                    'post_status'   => 'publish',
                    'post_author'   => 1,
                    'post_type'     => "Page",
                );
                wp_insert_post( $sf_my_products_single_page );
        }
        // create Sortiment My Products Single page
        $my_products_deny_comment_page_exist = get_page_by_title('Sortiment My Products Deny  Comment', 'OBJECT', 'page');
        if(empty($my_products_deny_comment_page_exist)) {
                $sf_my_products_deny_comment_page = array(
                    'post_title'    => "Sortiment My Products Deny Comment",
                    'post_name'     => "sortiment-my-products-deny-comment",
                    'post_content'  => "[sortiment_my_products_deny_comment]",
                    'post_status'   => 'publish',
                    'post_author'   => 1,
                    'post_type'     => "Page",
                );
                wp_insert_post( $sf_my_products_deny_comment_page );
        }
        // create Sortiment My Products Cart page
        $my_products_cart_page_exist = get_page_by_title('Sortiment My Products Cart', 'OBJECT', 'page');
        if(empty($my_products_cart_page_exist)) {
                $sf_my_products_cart_page = array(
                    'post_title'    => "Sortiment My Products Cart",
                    'post_name'     => "sortiment-my-products-cart",
                    'post_content'  => "[sortiment_my_products_cart]",
                    'post_status'   => 'publish',
                    'post_author'   => 1,
                    'post_type'     => "Page",
                );
                wp_insert_post( $sf_my_products_cart_page );
        }
        // create Sortiment My Products Checkout page
        $my_products_checkout_page_exist = get_page_by_title('Sortiment My Products Checkout', 'OBJECT', 'page');
        if(empty($my_products_checkout_page_exist)) {
                $sf_my_products_checkout_page = array(
                    'post_title'    => "Sortiment My Products Checkout",
                    'post_name'     => "sortiment-my-products-checkout",
                    'post_content'  => "[sortiment_my_products_checkout]",
                    'post_status'   => 'publish',
                    'post_author'   => 1,
                    'post_type'     => "Page",
                );
                wp_insert_post( $sf_my_products_checkout_page );
        }
        // create Sortiment Company Information page
        $company_information_page_exist = get_page_by_title('Sortiment Company Information', 'OBJECT', 'page');
        if(empty($company_information_page_exist)) {
                $sf_company_information_page = array(
                    'post_title'    => "Sortiment Company Information",
                    'post_name'     => "sortiment-company-information",
                    'post_content'  => "[sortiment_company_information]",
                    'post_status'   => 'publish',
                    'post_author'   => 1,
                    'post_type'     => "Page",
                );
                wp_insert_post( $sf_company_information_page );
        }

            // create Sortiment Sortiment Your Employees page
            $your_employees_exist = get_page_by_title('Sortiment Your Employees', 'OBJECT', 'page');
            if(empty($your_employees_exist)) {
                    $sf_your_employees_page = array(
                        'post_title'    => "Sortiment Your Employees",
                        'post_name'     => "sortiment-your-employees",
                        'post_content'  => "[sortiment_your_employees]",
                        'post_status'   => 'publish',
                        'post_author'   => 1,
                        'post_type'     => "Page",
                    );
                    wp_insert_post( $sf_your_employees_page );
            }
            // create Sortiment Sortiment Your Employees Order page
            $your_employees_order_exist = get_page_by_title('Sortiment Your Employees Order', 'OBJECT', 'page');
            if(empty($your_employees_order_exist)) {
                    $sf_your_employees_order_page = array(
                        'post_title'    => "Sortiment Your Employees Order",
                        'post_name'     => "sortiment-your-employees-order",
                        'post_content'  => "[sortiment_your_employees_order]",
                        'post_status'   => 'publish',
                        'post_author'   => 1,
                        'post_type'     => "Page",
                    );
                    wp_insert_post( $sf_your_employees_order_page );
            }

                // create SortimentSortiment Order History page
                $order_history_page_exist = get_page_by_title('Sortiment Order History', 'OBJECT', 'page');
                if(empty($order_history_page_exist)) {
                        $sf_order_history_page = array(
                            'post_title'    => "Sortiment Order History",
                            'post_name'     => "sortiment-order-history",
                            'post_content'  => "[sortiment_order_history]",
                            'post_status'   => 'publish',
                            'post_author'   => 1,
                            'post_type'     => "Page",
                        );
                        wp_insert_post( $sf_order_history_page );
                }
                // create SortimentSortiment Order Status page
                $order_status_page_exist = get_page_by_title('Sortiment Order Status', 'OBJECT', 'page');
                if(empty($order_status_page_exist)) {
                        $sf_order_status_page = array(
                            'post_title'    => "Sortiment Order Status",
                            'post_name'     => "sortiment-order-status",
                            'post_content'  => "[sortiment_order_status]",
                            'post_status'   => 'publish',
                            'post_author'   => 1,
                            'post_type'     => "Page",
                        );
                        wp_insert_post( $sf_order_status_page );
                }
                // create SortimentSortiment Order Status Step2 page
                $order_status_step2_page_exist = get_page_by_title('Sortiment Order Status Step2', 'OBJECT', 'page');
                if(empty($order_status_step2_page_exist)) {
                        $sf_order_status_step2_page = array(
                            'post_title'    => "Sortiment Order Status Step2",
                            'post_name'     => "sortiment-order-status-step2",
                            'post_content'  => "[sortiment_order_status_step2]",
                            'post_status'   => 'publish',
                            'post_author'   => 1,
                            'post_type'     => "Page",
                        );
                        wp_insert_post( $sf_order_status_step2_page );
                }
                // create SortimentSortiment Order Status Step3 page
                $order_status_step3_page_exist = get_page_by_title('Sortiment Order Status Step3', 'OBJECT', 'page');
                if(empty($order_status_step3_page_exist)) {
                        $sf_order_status_step3_page = array(
                            'post_title'    => "Sortiment Order Status Step3",
                            'post_name'     => "sortiment-order-status-step3",
                            'post_content'  => "[sortiment_order_status_step3]",
                            'post_status'   => 'publish',
                            'post_author'   => 1,
                            'post_type'     => "Page",
                        );
                        wp_insert_post( $sf_order_status_step3_page );
                }
                // create SortimentSortiment Order Status Step4 page
                $order_status_step4_page_exist = get_page_by_title('Sortiment Order Status Step4', 'OBJECT', 'page');
                if(empty($order_status_step4_page_exist)) {
                        $sf_order_status_step4_page = array(
                            'post_title'    => "Sortiment Order Status Step4",
                            'post_name'     => "sortiment-order-status-step4",
                            'post_content'  => "[sortiment_order_status_step4]",
                            'post_status'   => 'publish',
                            'post_author'   => 1,
                            'post_type'     => "Page",
                        );
                        wp_insert_post( $sf_order_status_step4_page );
                }
                // create Sortiment Ask A Question page
                $ask_a_question_page_exist = get_page_by_title('Sortiment Ask A Question', 'OBJECT', 'page');
                if(empty($ask_a_question_page_exist)) {
                        $sf_ask_a_question_page = array(
                            'post_title'    => "Sortiment Ask A Question",
                            'post_name'     => "sortiment-ask-a-question",
                            'post_content'  => "[sortiment_ask_a_question]",
                            'post_status'   => 'publish',
                            'post_author'   => 1,
                            'post_type'     => "Page",
                        );
                        wp_insert_post( $sf_ask_a_question_page );
                }

    }
    


}