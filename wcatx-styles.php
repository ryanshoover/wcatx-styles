<?php
/**
 * WCATX Styles
 * Plugin Name: WCATX Styles
 * Description: Adds styles for 2017.austin.wordcamp.org
 * Version:     0.1
 * Author:      WPAustin
 * Author URI:  http://wpaustin.com
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

namespace WCATX;

function enqueue_styles() {
	wp_enqueue_style( 'wcatx-styles', plugins_url( __FILE__ ) . 'style.css', null, filemtime( plugin_dir_path( __FILE__ ) . 'style.css' ) );
}

add_action( 'wp_enqueue_scripts', '\WCATX\enqueue_styles' );
 