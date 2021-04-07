<?php


//Allow Company to Upload Media
add_action('admin_init', 'allow_company_uploads');

function allow_company_uploads() {
     $company = get_role('company');
     $company->add_cap('upload_files');
}

/**
 * Capture user login and add it as timestamp in user meta data
 *
 */

function user_last_login( $user_login, $user ) {
    update_user_meta( $user->ID, 'last_login', time() );
}
add_action( 'wp_login', 'user_last_login', 10, 2 );

function wpb_lastlogin() { 
    $last_login = get_the_author_meta('last_login');
    //$the_login_date = human_time_diff($last_login);
    $the_login_date = date('M j, Y', $last_login);
    return $the_login_date; 
} 
/**
 * Add Shortcode lastlogin 
 *
 */
  
add_shortcode('lastlogin','wpb_lastlogin');

/**
 * redirect logout page
 *
 */

add_action('wp_logout', 'auto_redirect_after_logout');
function auto_redirect_after_logout()
{
    wp_redirect(home_url('sortiment-registation'));
    exit();
}
// add_filter( 'woocommerce_login_redirect', 'ss_woocommerce_redirect_after_login', 9999, 2 );
 
// function ss_woocommerce_redirect_after_login( $redirect, $user ) {
  
// 	//$redirect = get_home_url(); // homepage
// 	$redirect = '/sortiment-dashboard';   
// 	return $redirect;
// 	 exit();
// }

/*
function ss_redirect_users_by_role() {
 
    $current_user   = wp_get_current_user();
    $role_name      = $current_user->roles[0];
 
    if ( 'employee' === $role_name ) {
        wp_redirect(home_url('sortiment-dashboard'));
        exit();
    } 
 
}
add_action( 'admin_init', 'ss_redirect_users_by_role' );
*/

/**
 * Fetch Company
 *
 * @param  array  $args
 *
 * @return array
 */
function sortiment_get_companies( $args = [] ) {
    global $wpdb;

    $defaults = [
        'number'  => 20,
        'offset'  => 0,
        'orderby' => 'company_id',
        'order'   => 'ASC'
    ];

    $args = wp_parse_args( $args, $defaults );

    $sql = $wpdb->prepare(
            "SELECT * FROM {$wpdb->prefix}company_info
            ORDER BY {$args['orderby']} {$args['order']}
            LIMIT %d, %d",
            $args['offset'], $args['number']
    );

    $items = $wpdb->get_results( $sql );

    return $items;
}

/**
 * Delete a customer record.
 *
 * @param int $id customer ID
 */

function delete_sortiment_company( $id ) {
    global $wpdb;

    $wpdb->delete(
        "{$wpdb->prefix}company_info",
        [ 'company_id' => $id ],
        [ '%d' ]
      );
} 

/**
 * Get the count of total address
 *
 * @return int
 */
function sortiment_companies_count() {
    global $wpdb;

    return (int) $wpdb->get_var( "SELECT count(company_id) FROM {$wpdb->prefix}company_info" );
}





