<?php

namespace Softx\Sortiment;

/**
 * Deactivator class
 */
class Plugin_Deactivator {

    /**
     * uninstall the installer
     *
     * @return void
     */
    public function uninstall() {
        //$this->add_version();
        $this->delete_pages();

    }    
    
    
    
    /**
     * delete page
     *
     */
    public function delete_pages() {
        global $wpdb;
        $get_data = $wpdb->get_row (
            $wpdb-> prepare("SELECT ID FROM {$wpdb->prefix}posts WHERE post_name = %s", 'login')
        
        );
        $page_id = $get_data->ID;
        if($page_id > 0){
            wp_delete_post($page_id, true);
        }
        
    }
}    