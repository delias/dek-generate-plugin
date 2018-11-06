<?php
/* 
 * @package DekGeneratePlugin
 */

/* 
Plugin Name: Generate Plugin
Plugin URI: https://generate.org.au
Description: Integration with Podio that list Schools, Address, Chaplain, Position type with hours 
Version: 1.0.0
Author: Daniel Elias
Author URI: https://github.com/delias
License: MIT
Text Domain: dek-generate-plugin
*/

/* 
Copyright (c) 2018 Generate Ministries
*/


/* These functions work the same */
/* 
if ( ! defined( 'ABSPATH')) {
  die;
}
 */
/* 
if ( ! function_exists('add_action')) {
  echo 'Hey, you can\t access this file, you silly hacker!';
  die;
}
*/

defined ( 'ABSPATH' ) or die ( 'Hey, you can\t access this file, you silly hacker!');

class DekGeneratePlugin
{
  function __construct(){
    add_action( 'init', array( $this, 'custom_post_type'));
  }

  function activate(){
    // generated a CPT
    // $this->custom_post_type();
    // flush rewrite rules
    flush_rewrite_rules();
  }
  function deactivate(){
    // flush rewrite rules
    
  }
  function uninstall(){
    // delete CPT
    // delete all the plugin data from the DB
    
  }

  function custom_post_type(){
    // register_post_type( 'schools', ['public' => true, 'label' => 'Schools']);
  }

}

if ( class_exists('DekGeneratePlugin')) {
  $dekGeneratePlugin = new DekGeneratePlugin();
}

// activation
register_activation_hook( __FILE__, array($dekGeneratePlugin, 'activate'));

// deactivation
register_deactivation_hook( __FILE__, array($dekGeneratePlugin, 'deactivate'));

// uninstall