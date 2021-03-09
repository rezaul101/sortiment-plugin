<?php

namespace Softx\Sortiment\Admin;

if ( ! class_exists( 'WP_List_Table' ) ) {
    require_once ABSPATH . 'wp-admin/includes/class-wp-list-table.php';
}

/**
 * List Table Class
 */
class Company_List extends \WP_List_Table {

    function __construct() {
        parent::__construct( [
            'singular' => 'company',
            'plural'   => 'companies',
            'ajax'     => false
        ] );
    }

    /**
     * Message to show if no designation found
     *
     * @return void
     */
    function no_items() {
        _e( 'No address found', 'softx-sortiment' );
    }

    /**
     * Get the column names
     *
     * @return array
     */
    public function get_columns() {
        return [
            'cb'                => '<input type="checkbox" />',
            'company_name'      => __( 'Company Name', 'softx-sortiment' ),
            'contact_person'    => __( 'Contact Person', 'softx-sortiment' ),
            'company_email'     => __( 'Email', 'softx-sortiment' ),
            'cvr_number'        => __( 'CVR Number', 'softx-sortiment' ),
            'phone_number'      => __( 'Phone Number', 'softx-sortiment' ),
            'zip_code'          => __( 'Zip Code', 'softx-sortiment' ),
            'company_address'   => __( 'Company Address', 'softx-sortiment' ),
        ];
    }

    /**
     * Get sortable columns
     *
     * @return array
     */
    function get_sortable_columns() {
        $sortable_columns = [
            'company_name'       => [ 'company_name', true ],
            
        ];

        return $sortable_columns;
    }

    /**
     * Set the bulk actions
     *
     * @return array
     */
    function get_bulk_actions() {
        $actions = array(
            'trash'  => __( 'Move to Trash', 'softx-sortiment' ),
        );

        return $actions;
    }


    /**
     * Default column values
     *
     * @param  object $item
     * @param  string $column_name
     *
     * @return string
     */
    protected function column_default( $item, $column_name ) {

        switch ( $column_name ) {

            case 'value':
                //return wp_date( get_option( 'date_format' ), strtotime( $item->created_at ) );

            default:
                return isset( $item->$column_name) ? $item->$column_name: '';
        }
    }

    /**
     * Render the "cb" column
     *
     * @param  object $item
     *
     * @return string
     */
    protected function column_cb( $item ) {
        return sprintf(
            '<input type="checkbox" name="company_id[]" value="%d" />', $item->company_id
        );
    }

    /**
     * Prepare the company items
     *
     * @return void
     */
    public function prepare_items() {
        $column   = $this->get_columns();
        $hidden   = [];
        $sortable = $this->get_sortable_columns();

        $this->_column_headers = [ $column, $hidden, $sortable ];

        $per_page     = 20;
        $current_page = $this->get_pagenum();
        $offset       = ( $current_page - 1 ) * $per_page;

        $args = [
            'number' => $per_page,
            'offset' => $offset,
        ];

        if ( isset( $_REQUEST['orderby'] ) && isset( $_REQUEST['order'] ) ) {
            $args['orderby'] = $_REQUEST['orderby'];
            $args['order']   = $_REQUEST['order'] ;
        }

        $this->items = sortiment_get_companies( $args );

        $this->set_pagination_args( [
            'total_items' => sortiment_companies_count(),
            'per_page'    => $per_page
        ] );
    }
}