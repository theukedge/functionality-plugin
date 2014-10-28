<?php

/*
Plugin Name: Functionality Plugin
Plugin URI: http://www.doitwithwp.com/putting-things-where-they-belong/
Description: Where all custom functionality that affects the site belongs
Author: Dave Clements
Author URI: https://www.theukedge.com
Version: 1.0.0
License: GPL-2.0+
License URI: http://www.gnu.org/licenses/gpl-2.0.txt
*/

/* ---------------------------------- *
 * constants
 * ---------------------------------- */

if ( !defined( 'FUNC_PLUGIN_DIR' ) ) {
	define( 'FUNC_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
}

if ( !defined( 'FUNC_PLUGIN_URL' ) ) {
	define( 'FUNC_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
}

/* ---------------------------------- *
 * includes
 * ---------------------------------- */

// include( FUNC_PLUGIN_DIR . 'includes/filename.php' );