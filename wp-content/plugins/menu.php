<?php
/**

Plugin Name: Phungtastic
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description:This plugin creates a custom  menu for the currently active theme. 
Author: Jessica Phung
Version: 1.6
Author Url:http://www.studioghibli.dev
*/

//register new custom menu 
function register_phungtastic_menu() {
  register_nav_menus(  array(
  'custom-menu' => 'Phungtastic Menu ' 
  ));
} 

add_action( 'init', 'register_phungtastic_menu' ); 