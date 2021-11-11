<?php
/**
 * PTO class for initiating necessary actions and core functions.
 */

/*
 * Defining Namespace
*/
namespace ptofficesignup\classes;

class PtOTaskSlots
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
         /* Task management cpt */
        add_action('init', array($this,'task_manage_post_type'));
          add_action('init', array(
            $this,
            'pto_task_custom_taxonomy'
        ) , 0);
    }
    /* 
    Tsk Cpt Create
    */
    public function task_manage_post_type()
    {
        $my_theme = get_option('stylesheet');
        // Set UI labels for Custom Post Type
        $labels = array(
            'name' => _x('Tasks', 'Post Type General Name') ,
            'singular_name' => _x('Task', 'Post Type Singular Name') ,
            'menu_name' => __('Tasks', $my_theme) ,
            'parent_item_colon' => __('Parent task', $my_theme) ,
            'all_items' => __('All Tasks', $my_theme) ,
            'view_item' => __('View Tasks', $my_theme) ,
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
            'label' => __('Tasks', $my_theme) ,
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
        register_post_type('Tasks', $args);
    }

    function pto_task_custom_taxonomy()
    {

        $labels = array(
            'name' => _x('Categories', 'taxonomy general name') ,
            'singular_name' => _x('Type', 'taxonomy singular name') ,
            'search_items' => __('Search Categories') ,
            'all_items' => __('All Categories') ,
            'parent_item' => __('Parent Type') ,
            'parent_item_colon' => __('Parent Type:') ,
            'edit_item' => __('Edit Type') ,
            'update_item' => __('Update Type') ,
            'add_new_item' => __('Add New Type') ,
            'new_item_name' => __('New Type Name') ,
            'menu_name' => __('Categories') ,
        );

        register_taxonomy('TaskCategories', array(
            'tasks'
        ) , array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'meeting-categories'
            ) ,
        ));
    }

}
