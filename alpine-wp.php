<?php
 /**
 *
 * @package           Alpine and WordPress
 * @author            Mainul Sunvi
 * @description       thisn plugin is for testing alpine and wordpress
 * @license           GPL-3.0-or-later
 * @since             1.0.0
 *
 * @wordpress-plugin
 * Plugin Name: Alpine and WordPress
 * Plugin URI: https://msunvi.com
 * Description: thisn plugin is for testing alpine and wordpress
 * Version: 1.0.0
 * Requires at least: 6.0
 * Requires PHP: 8.0
 * Author: Mainul Sunvi
 * Author URI: https://profiles.wordpress.org/mainulsunvi/
 * Text Domain: alpine-wp
 * License: GPL v3 or later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.txt
 * Update URI: https://msunvi.com
 * Domain Path: /languages
 */

 load_textdomain( 'alpine-wp', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
 define( 'ALPINE_WP_VERSION', time() );


 function alpine_wp_enqueue_scripts() {
	wp_enqueue_script( 'alpine', 'https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js', array(), true );
	wp_enqueue_script( 'alpine-wp', plugin_dir_url( __FILE__ ) . 'assets/js/alpine-wp.js', array( 'jquery' ), ALPINE_WP_VERSION, true );
	wp_enqueue_style( 'alpine-wp-css', plugin_dir_url( __FILE__ ) . 'assets/css/alpine-wp.css', array(), ALPINE_WP_VERSION, 'all' );
 }
 add_action( 'wp_enqueue_scripts', 'alpine_wp_enqueue_scripts' );
 add_action( 'admin_enqueue_scripts', 'alpine_wp_enqueue_scripts' );

 add_action( 'admin_menu', 'vuew_admin_menu' );
function vuew_admin_menu() {
    add_menu_page(
        esc_html__( 'Alpine WordPress', 'vuew' ),
        esc_html__( 'Alpine WordPress', 'vuew' ),
        'manage_options',
        'vuew',
        'vuew_admin_menu_callback',
        'dashicons-calendar-alt',
        6
    );
}

function vuew_admin_menu_callback() {
    include_once plugin_dir_path( __FILE__ ) . 'tet-alpine.php';
}

 