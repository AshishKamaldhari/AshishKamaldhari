<?php
/**
 * PTO class for initiating necessary actions and core functions.
 */

/*
 * Defining Namespace
*/
namespace ptofficesignup\classes;

class PtoSignUp
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
         /* Meeting cpt */
        add_action('init', array($this,'pto_SignUp_cpt'));

        /* remove Ghutarn burg editor */
        add_filter('use_block_editor_for_post_type',  array($this,'digwp_disable_gutenberg'), 10, 2);

        /* add medta box for tabs */
        add_action( 'add_meta_boxes', array($this,"pto_sign_ups_meta_tabs"));
    }


    /*
        Pto Sign Ups Cpt 
    */
    public function pto_SignUp_cpt(){
        $my_theme = get_option('stylesheet');
        // Set UI labels for Custom Post Type
        $labels = array(
            'name' => _x('SignUp', 'Post Type General Name') ,
            'singular_name' => _x('Task', 'Post Type Singular Name') ,
            'menu_name' => __('SignUp', $my_theme) ,
            'parent_item_colon' => __('Parent task', $my_theme) ,
            'all_items' => __('All SignUp', $my_theme) ,
            'view_item' => __('View SignUp', $my_theme) ,
            'add_new_item' => __('Add New task', $my_theme) ,
            'add_new' => __('Add New', $my_theme) ,
            'edit_item' => __('Edit task', $my_theme) ,
            'update_item' => __('Update task', $my_theme) ,
            'search_items' => __('Search task', $my_theme) ,
            'not_found' => __('Not Found', $my_theme) ,
            'not_found_in_trash' => __('Not found in Trash', $my_theme) ,
        );

        // Set other options for Custom Post Type
        $args = array(
            'label' => __('SignUp', $my_theme) ,
            'description' => __('task news and reviews', $my_theme) ,
            'labels' => $labels,
            // Features this CPT supports in Post Editor
            'supports' => array(
                'title',

            ) ,
            // You can associate this CPT with a taxonomy or custom taxonomy.
            'taxonomies' => array(
                'genres'
            ) ,
            /* A hierarchical CPT is like Pages and can have
             * Parent and child items. A non-hierarchical CPT
             * is like Posts.
            */
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'show_in_admin_bar' => true,
            'menu_position' => 5,
            'can_export' => true,
            'has_archive' => true,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'post',
            'show_in_rest' => true,
            'has_archive' => true,

        );

        // Registering your Custom Post Type
        register_post_type('SignUp', $args);

    }
    /*
        remove ghuturnburg 
    */
    public function digwp_disable_gutenberg($is_enabled, $post_type) { 
    }


    /* add metabox for signups metas */
    public function pto_sign_ups_meta_tabs(){
        add_meta_box('pto_signups_tabs', // $id
        'Pto Signups Tabs', // $title
        array(
            $this,
            'pto_sign_ups_tabs'
        ) , // $callback
        'signup', // $page
        'normal', // $context
        'high'
        // $priority
        );
    }

    public function pto_sign_ups_tabs(){
        include "structure/pto_sign_ups_tabs.php";
    }

}