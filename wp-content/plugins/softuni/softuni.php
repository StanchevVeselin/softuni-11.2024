<?php 
/*
 * Plugin Name: SOFTUNI
 * Version: 0.1
 * Description: Veselin Stan
 */

if(! defined("SOFTUNI_PLUGIN_VERSION")) {
    define("SOFTUNI_PLUGIN_VERSION", "0.1");
}

if(! defined("SOFTUNI_PLUGIN_ASSETS_URL")) {
    define("SOFTUNI_PLUGIN_ASSETS_URL", plugin_dir_url(__FILE__) . "assets");
}

 require "includes/cpt-services.php";
 require "includes/cpt-therapists.php";
 require "includes/functions.php";