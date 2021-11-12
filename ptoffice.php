<?php
/**
* Plugin Name: Ptoffice Signup
* Description: ptoffice desc signup
* Version: 1.0
* Author: Ptoffice 
* Text Domain: Ptoffice

**/

/* 
* Defining Namespace
*/
namespace ptofficesignup;

/* 
* If this file is called directly or plugin is already defined, abort. 
*/
if ( !defined( 'WPINC' ) ) {
    die;
}

define( 'MY_PLUGIN_PATH_SIGNUP', plugin_dir_path( __FILE__ ) );

/* 
* Include constant file
*/
include_once( 'constant.php' );

/* 
* Include main class ptoffice
*/
include_once( 'includes/class-ptoffice.php' );
include_once( 'includes/pto-cptcreate.php' );
include_once( 'includes/pto_signups_cpts/cpt_sign_ups_cpt.php' );
include_once( 'includes/pto_task_slots_cpts/pto-task-slots-cpt.php' );
include_once( 'includes/pto_advance_custom_filed/pto_advanced_custom_fileds_cpts.php' );

/* 
Declare Classes
*/
use ptofficesignup\classes\Ptoffice;
use ptofficesignup\classes\CptCreate;
use ptofficesignup\classes\PtoSignUp;
use ptofficesignup\classes\PtOTaskSlots;
use ptofficesignup\classes\PtoAdvancedfieldCpt;




new Ptoffice();
new CptCreate();
new PtoSignUp();
new PtOTaskSlots();
new PtoAdvancedfieldCpt();



