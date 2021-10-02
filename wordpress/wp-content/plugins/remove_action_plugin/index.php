<?php 
/* 
Plugin Name: Remove "Davids sportshop"
Description : first oplugin
Version: 1.0 
*/

include "ajax.php";

add_action('wp_head', "remove_my_action");
function remove_my_action() {
	remove_action('my_hook', 'display_sitename');
}

add_action('wp_ajax_minsuperkrok', 'mottagarfunktion');