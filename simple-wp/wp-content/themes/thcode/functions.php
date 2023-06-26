<?php
/**
 * scode functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage scode
 */

 function register_my_menu() {
 register_nav_menu('new-menu',__( 'New Menu' ));
 }
 add_action( 'init', 'register_my_menu' );