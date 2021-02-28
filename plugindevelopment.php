<?php
/*
Plugin Name: Plugin Development
Description: Practice plugin
Version: 4.1.5
Author: Zerin
*/
function insertdatabase()
{
    include('insert.php');
    DBP_tb_insert();
}
function displaydatabase()
{
    include('display.php');
}
define('dir',dirname(__FILE__));
define('url',plugins_url( '',__FILE__));
add_shortcode("shortcodeplugin", "funcplugindevelopment");#
add_action( 'admin_menu','add_menu_function');
add_action( 'admin_menu', 'display_function');
function funcplugindevelopment(){
    echo("<p>hlw i am zeby</p>");
} 
//wp_enqueue_script( 'app',plugin_dir_url(__FILE__).'app.js');
//wp_enqueue_script( 'angular',"https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.2/angular.min.js");
//echo file_get_contents('wp-content\plugins\plugindevelopment\template\hello.html');
include_once('database.php');
register_activation_hook( __FILE__, "DBP_tb_create");
function add_menu_function()
{
    add_menu_page( 'insertdata','insertdata','manage_options','insertdata','insertdatabase','dashicons-admin-generic');

}
//add_menu_page( 'insertdata','insertdata','manage_options','insertdata','insertdatabase',dir.'assent/image/icon.png');
function display_function()
{
    add_menu_page( 'displaydata', 'displaydata', 'manage_options', 'displaydata','displaydatabase', 'dashicons-admin-site-alt');
}