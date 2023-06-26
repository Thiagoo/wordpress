<?php

/**
 
 * Plugin Name:       th_plugin
 * Description:       Basic plugin creation
 * Version:           1.0.0
 * Author:            Thiago Melonzini
 */


function th_plugin_menu() {
	add_options_page( 'Th Custom Plugin', //Page Title
	'TH', //Menu title
	'manage_options', //capability
	'th_plugin', //custom slug
	'th_plugin_options' //callable function
 );
}

function th_plugin_options() {
	//This is where the content for the new page goes
	include('admin/admin_design.php');
	th_admin_header(); //header of the page
	th_admin_page();
	// th_admin_nav(); //nav of the page
	// th_admin_content(); //the content of the page
}

//add stylesheets
function add_style(){
	wp_enqueue_style( 'th_style', plugins_url('admin/css/style.css',__FILE__));	
}

add_action( 'admin_enqueue_scripts', 'add_style');
add_action( 'admin_menu', 'th_plugin_menu');

