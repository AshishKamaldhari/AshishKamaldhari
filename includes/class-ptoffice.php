<?php
/**
 * PTO class for initiating necessary actions and core functions.
 */

/*
 * Defining Namespace
*/
namespace ptofficesignup\classes;

class Ptoffice
{

    /*
     * Constructor for iniation.
    */
    public function __construct()
    {
        $this->init();

    }
    /**
     * Initiating necessary functions
     */
    function init()
    {
        // /* script enq for admin end backend*/
        add_action( 'admin_enqueue_scripts', array( $this, 'scrept_enq_all_js_css' ) );
        add_action( 'wp_enqueue_scripts', array( $this, 'scrept_enq_all_js_css' ) );
    }

    public function scrept_enq_all_js_css()
    {
        $dir = PLUGIN_DIR;
       wp_enqueue_style('pto-admin-custom-css',$dir . 'assets/css/pto-sign-up-admin-custom.css');
         
        /**
         * Enqueue necessary scripts
         */
        wp_enqueue_script( 'jquery-3.6', $dir.'assets/js/jquery-3.6.0.js', array(), '1.0.0', true );
       wp_enqueue_script( 'jquery-spectrum', $dir.'assets/js/spectrum.min.js', array(), '1.0.0', true );
             
       wp_enqueue_script( 'kanban-board-js', $dir.'assets/js/jquery-ui.js', array(), '1.0.0', true );
       wp_enqueue_style( 'kanban-board-css', $dir.'assets/js/jquery-ui.css', array(), '1.0.0', true );
       wp_enqueue_script( 'font-awesome-js', $dir.'assets/js/font-awesome.js', array(), '1.0.0', true );


        wp_enqueue_script('pto-admin-custom-js', plugin_dir_url(dirname(__FILE__)) . 'assets/js/pto-admin-custom.js', array(
            'jquery'
        ) , null, true);
        wp_enqueue_script('pto-sweetalert-admin-custom-js', plugin_dir_url(dirname(__FILE__)) . 'assets/js/sweetalert.min.js', array(
            'jquery'
        ) , null, true);
        wp_localize_script('pto-admin-custom-js', 'custom', array(
            // 'ajax_url' => $url . 'wp-admin/admin-ajax.php',
              'ajax_url' => admin_url( 'admin-ajax.php' ),
        ));
    }
}