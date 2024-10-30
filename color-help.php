<?php
/**
 * Plugin Name: Color Help
 * Plugin URI: http://make.wordpress.org/docs
 * Description: This plugin changes the color of the help tab in wp-admin.
 * Version: 0.1
 * Author: Ben Hansen
 * Author URI: http://iwantmachelp.com
 * License: A "Slug" license name e.g. GPL2
 */
 function load_custom_wp_admin_style() {
        wp_register_style( 'custom_wp_admin_css', plugins_url( 'css/color-help.css', __FILE__ ), array(), '1.0.0' );
        wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );
?>