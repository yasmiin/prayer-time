<?php

/*
Plugin Name: Prayer-Time
Plugin URI: http://javabrown.com/
Description: A wordpress plugin for prayer/namaz time calculation
Version: 1.0
Author: Shagufta Yasmin
Author URI: http://javabrown.com
License: GPL
*/

require 'setting_ui.php';
require 'prayer_time_widget.php';
require 'short_codes.php';

/* Runs when plugin is activated */
register_activation_hook(__FILE__,'hello_world_install'); 

/* Runs on plugin deactivation*/
register_deactivation_hook( __FILE__, 'hello_world_remove' );

/*add_action('wp_head','hello_world');
function hello_world()
{
   $output = "<h3>". get_option('hello_world_data') ."</h3>";
   echo $output;
}*/

function hello_world_install() {
/* Creates new database field */
    add_option("hello_world_data", 'Default', '', 'yes');
}

function hello_world_remove() {
/* Deletes the database field */
   delete_option('hello_world_data');
}


if ( is_admin() ){
  add_action('admin_menu', 'hello_world_admin_menu');

  function hello_world_admin_menu() {
    add_options_page('Hello World', 'Hello World', 'administrator',
     'hello-world', 'hello_world_html_page');
  }
}

?>
