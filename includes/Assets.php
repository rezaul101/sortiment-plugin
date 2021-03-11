<?php

namespace Softx\Sortiment;
/**
 * Assets handlers class
 */
class Assets {

    /**
     * Class constructor
     */
    function __construct() {
        add_action( 'wp_enqueue_scripts', [ $this, 'register_assets' ] );
        add_action( 'admin_enqueue_scripts', [ $this, 'register_assets' ] );

        //add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_asstes' ] );
        //add_action( 'admin_enqueue_scripts', [ $this, 'enqueue_asstes' ] );
    }
    /*
        public function enqueue_asstes() {
            wp_enqueue_script( 'sortiment-script', SF_SORTIMENT_ASSETS . '/js/custom.js', false, fileatime(SF_SORTIMENT_PATH . '/assets/js/custom.js'), true);
            wp_enqueue_script( 'sortiment-script-login-registation', SF_SORTIMENT_ASSETS . '/js/login-registation.js', false, fileatime(SF_SORTIMENT_PATH . '/assets/js/registation.js'), true);

            wp_enqueue_style( 'sortiment-style', SF_SORTIMENT_ASSETS . '/css/style.css', false, fileatime(SF_SORTIMENT_PATH . '/assets/css/style.css'));
        }
    */
    /**
     * All available scripts
     *
     * @return array
     */
    public function get_scripts() {
        wp_enqueue_media();
        return [
            'sortiment-script' => [
                'src'     => SF_SORTIMENT_ASSETS . '/js/custom.js',
                'version' => filemtime( SF_SORTIMENT_PATH . '/assets/js/custom.js' ),
                'deps'    => [ 'jquery' ]
            ],

            'sortiment-script-company-profile-update' => [
                'src'     => SF_SORTIMENT_ASSETS . '/js/company-profile-update.js',
                'version' => filemtime( SF_SORTIMENT_PATH . '/assets/js/company-profile-update.js' ),
                'deps'    => [ 'jquery' ]
            ],

            'sortiment-script-login-registation' => [
                'src'     => SF_SORTIMENT_ASSETS . '/js/login-registation.js',
                'version' => filemtime( SF_SORTIMENT_PATH . '/assets/js/login-registation.js' ),
                'deps'    => [ 'jquery' ]
            ]
        ];
    }

    /**
     * All available styles
     *
     * @return array
     */
    public function get_styles() {
        return [
            'sortiment-style' => [
                'src'     => SF_SORTIMENT_ASSETS . '/css/style.css',
                'version' => filemtime( SF_SORTIMENT_PATH . '/assets/css/style.css' )
            ],
            'sortiment-admin-style' => [
                'src'     => SF_SORTIMENT_ASSETS . '/css/admin.css',
                'version' => filemtime( SF_SORTIMENT_PATH . '/assets/css/admin.css' )
            ]
        ];
    }

    /**
     * Register scripts and styles
     *
     * @return void
     */
    public function register_assets() {
        $scripts = $this->get_scripts();
        $styles  = $this->get_styles();

        foreach ( $scripts as $handle => $script ) {
            $deps = isset( $script['deps'] ) ? $script['deps'] : false;

            wp_register_script( $handle, $script['src'], $deps, $script['version'], true );
        }

        foreach ( $styles as $handle => $style ) {
            $deps = isset( $style['deps'] ) ? $style['deps'] : false;

            wp_register_style( $handle, $style['src'], $deps, $style['version'] );
        }
        
        wp_localize_script( 'sortiment-script-login-registation', 'Sortiment', [
            'ajaxurl' => admin_url( 'admin-ajax.php' ),
            'error'   => __( 'Something went wrong.', 'softx-sortiment' ),
            'baseurl1' => home_url ( 'sortiment-login' ),
            'baseurl2' => home_url ( 'sortiment-dashboard' ),
            
            
        ] );
        
        wp_localize_script( 'sortiment-script-company-profile-update', 'Sortiment_Update_Profile', [
            'ajaxurl' => admin_url( 'admin-ajax.php' ),
            'error'   => __( 'Something went wrong.', 'softx-sortiment' ),
            'baseurl' => home_url ( 'sortiment-company-information' ),
            
        ] );




    }
}