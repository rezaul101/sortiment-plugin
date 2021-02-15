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
            PRIMARY KEY (`employee_id`)
           )  $charset_collate";

        if ( ! function_exists( 'dbDelta' ) ) {
            require_once ABSPATH . 'wp-admin/includes/upgrade.php';
        }

        dbDelta( $company_employee_table );


        $company_info_table = "CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}company_info` (
            `company_id` int(11) NOT NULL AUTO_INCREMENT,
            `company_name` varchar(255) NOT NULL,
            `contact_person` varchar(255) DEFAULT NULL,
            `email` varchar(255) NOT NULL,
            `cvr_number` varchar(255) NOT NULL,
            `phone_number` varchar(255) DEFAULT NULL,
            `zip_code` varchar(255) DEFAULT NULL,
            `address` varchar(255) DEFAULT NULL,
            `address_2` varchar(255) DEFAULT NULL,
            PRIMARY KEY (`company_id`)
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
        $login_page_exist = get_page_by_title('Login', 'OBJECT', 'page');
        if(empty($login_page_exist)) {
                $sf_login_page = array(
                    'post_title'    => "Login",
                    'post_name'     => "login",
                    'post_content'  => "Login Page",
                    'post_status'   => 'publish',
                    'post_author'   => 1,
                    'post_type'     => "Page",
                );
                wp_insert_post( $sf_login_page );
        }
        // create Registation page
        $registation_page_exist = get_page_by_title('Registation', 'OBJECT', 'page');
        if(empty($registation_page_exist)) {
                $sf_registation_page = array(
                    'post_title'    => "Registation",
                    'post_name'     => "registation",
                    'post_content'  => "[sortiment_registration]",
                    'post_status'   => 'publish',
                    'post_author'   => 1,
                    'post_type'     => "Page",
                );
                wp_insert_post( $sf_registation_page );
        }
        // create Dashboard page
        $dashboard_page_exist = get_page_by_title('Dashboard', 'OBJECT', 'page');
        if(empty($dashboard_page_exist)) {
                $sf_dashboard_page = array(
                    'post_title'    => "Dashboard",
                    'post_name'     => "dashboard",
                    'post_content'  => "Dashboard Page",
                    'post_status'   => 'publish',
                    'post_author'   => 1,
                    'post_type'     => "Page",
                );
                wp_insert_post( $sf_dashboard_page );
        }

    }
    


}

