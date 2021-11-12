<?php
/**
 * PTO class for initiating necessary actions and core functions.
 */

/*
 * Defining Namespace
*/
namespace ptofficesignup\classes;

class PtoAdvancedFiledCpt
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
       /* advanced custom management cpt */
        add_action('init', array($this,'pto_advanced_Custom_filed_add'));
        /* acf in all meta boxes */
        add_action( 'add_meta_boxes', array($this,'pto_signups_acf_meta_boxes') );

        /* task post data save */
        add_action( 'save_post_pto-custom-fields', array($this,'pto_advanced_filed_post_save'), 20, 2 );
    }
    public function pto_advanced_Custom_filed_add(){
            $my_theme = get_option('stylesheet');
            // Set UI labels for Custom Post Type
            $labels = array(
                'name' => _x('Custom Fields', 'Post Type General Name') ,
                'singular_name' => _x('pto-advance-filed', 'Post Type Singular Name') ,
                'menu_name' => __('Custom Fields', $my_theme) ,
                'parent_item_colon' => __('Parent Custom Fields', $my_theme) ,
                'all_items' => __('All ACF Fields', $my_theme) ,
                'view_item' => __('View Custom Fields', $my_theme) ,
                'add_new_item' => __('Add New Custom Fields', $my_theme) ,
                'add_new' => __('Add New', $my_theme) ,
                'edit_item' => __('Edit Custom Fields', $my_theme) ,
                'update_item' => __('Update Custom Fields', $my_theme) ,
                'search_items' => __('Search Custom Fields', $my_theme) ,
                'not_found' => __('Not Found', $my_theme) ,
                'not_found_in_trash' => __('Not found in Trash', $my_theme) ,
            );

            // Set other options for Custom Post Type
            $args = array(
                'label' => __('Custom Fields', $my_theme) ,
                'description' => __('Custom Fields news and reviews', $my_theme) ,
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
            register_post_type('pto-custom-fields', $args);
    }

    public function pto_signups_acf_meta_boxes(){
        add_meta_box(
            'pto-acf-Fields-title',
            __( 'Alternate Title', 'sitepoint' ),
           array($this,'pto_acf_title_filed') , // $callback
            'pto-custom-fields'
        );
        add_meta_box(
            'pto-acf-Fields-instruction',
            __( 'Instruction', 'sitepoint' ),
           array($this,'pto_acf_instruction_filed') , // $callback
            'pto-custom-fields'
        );
        add_meta_box(
            'pto-acf-Fields-type',
            __( 'Type', 'sitepoint' ),
           array($this,'pto_acf_type_filed') , // $callback
            'pto-custom-fields'
        );
        add_meta_box(
            'pto-acf-Fields-required',
            __( 'Required', 'sitepoint' ),
           array($this,'pto_acf_required_filed') , // $callback
            'pto-custom-fields'
        );
        
    }
    public function pto_acf_title_filed(){
        global $post;
        $title = "";
        $title = get_post_meta($post->ID,"pto_alternate_title",true);
      ?>
      <input type="text" name="pto_alternate_title" value="<?php echo $title; ?>" placeholder="Alternate Title" required>
      <label>For example, "How old are you" could be used instead of "Age?"</label>
      <?php
    }
    public function pto_acf_instruction_filed()
    {
        global $post;
        $instruction = "";
        $instruction = get_post_meta($post->ID,"instruction",true);
        ?>
      <textarea name="instruction" placeholder="instruction" required><?php echo $instruction; ?></textarea>
      <label>Explain to members how to best fill out this filed</label>
      <?php 
    }
    public function pto_acf_type_filed(){
        global $post;
        $pto_filed_type = "";
        $pto_filed_type = get_post_meta($post->ID,"pto_filed_type",true);
     ?>
     <select name="pto_filed_type">
         <option value="text" <?php if($pto_filed_type == "text"){ echo "selected"; } ?>>Text</option>
         <option value="text-area" <?php if($pto_filed_type == "text-area"){ echo "selected"; } ?>>Textarea</option>
         <option value="number" <?php if($pto_filed_type == "number"){ echo "selected"; } ?>>Number</option>
         <option value="checkbox" <?php if($pto_filed_type == "checkbox"){ echo "selected"; } ?>>Checkbox</option>
         <option value="radio"  <?php if($pto_filed_type == "radio"){ echo "selected"; } ?>>Radio</option>
         <option value="drop-down"  <?php if($pto_filed_type == "drop-down"){ echo "selected"; } ?>>Drop Down</option>
     </select>
     <?php 
    }
    public function pto_acf_required_filed(){
       global $post;
        $pto_filed_required = "";
        $pto_filed_required = get_post_meta($post->ID,"pto_filed_required",true);
        ?>
         <select name="pto_filed_required" >
             <option value="yes">Yes</option>
             <option value="no" <?php if($pto_filed_required == "no"){ echo "selected"; } ?>>No</option>
            
        </select>          
        <?php        
    }
    public function pto_advanced_filed_post_save($post_id, $post){
        if($post->post_type == "pto-custom-fields"){
            if($_POST)
            {
                if(isset($_POST['pto_alternate_title'])){
                    $pto_alternate_title = $_POST['pto_alternate_title'];
                    update_post_meta($post_id,"pto_alternate_title",$pto_alternate_title);
                }
                if(isset($_POST['instruction'])){
                    $instruction = $_POST['instruction'];   
                    update_post_meta($post_id,"instruction",$instruction);
                }
                if(isset($_POST['pto_filed_type'])){
                   $pto_filed_type = $_POST['pto_filed_type'];
                   update_post_meta($post_id,"pto_filed_type",$pto_filed_type);
                }
                if(isset($_POST['pto_filed_required'])){
                    $pto_filed_required = $_POST['pto_filed_required'];
                    update_post_meta($post_id,"pto_filed_required",$pto_filed_required);
                }
               
            }
        }
    }
}