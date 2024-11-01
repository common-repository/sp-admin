<?php

/*
Plugin Name: SP Admin
Plugin URI:
Description: A clean and simple Wordpress Administration template, putting a fresh and more modern spin on the current administration template.
Author: Jo Biesta
Version: 1.0
Author URI: http://www.joeybdesign.co.uk
*/

function sp_admin_theme() {
        wp_register_style( 'sp-admin_css', plugins_url('sp-admin.css', __FILE__), false, '1.0.0' );
        wp_enqueue_style( 'sp-admin_css' );
}

add_action( 'admin_enqueue_scripts', 'sp_admin_theme' );


function sp_admin_footer() {	
	echo '<p align="right">Administration Theme by <a href="http://www.joeybdesign.co.uk">Joeyb Design</a>.</p>';
}

add_action('admin_footer', 'sp_admin_footer');
?>