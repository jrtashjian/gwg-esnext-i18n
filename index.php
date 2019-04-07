<?php
/**
 * Plugin Name: ESNext Starter - Get With Gutenberg
 * Plugin URI: https://github.com/Wordpress
 * Description: Demonstrate how to start building a Gutenberg block in ESNext.
 * Version: 1.0.0
 * Author: Get With Gutenberg
 * Author URI: https://getwithgutenberg.com
 * Text Domain: gwg
 * Domain Path: languages
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

defined( 'ABSPATH' ) || exit;

define( 'GWG_ESNEXT_VERSION', '1.0.0' );
define( 'GWG_ESNEXT_PLUGIN_DIR', dirname( __FILE__ ) );
define( 'GWG_ESNEXT_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

function gwg_block_assets() {
	wp_enqueue_style(
		'gwg-style-css',
		GWG_ESNEXT_PLUGIN_URL . 'style.css',
		[],
		GWG_ESNEXT_VERSION
	);
}
add_action( 'enqueue_block_assets', 'gwg_block_assets' );

function gwg_editor_assets() {
	wp_enqueue_script(
		'gwg-block-js',
		GWG_ESNEXT_PLUGIN_URL . 'block.build.js',
		[],
		GWG_ESNEXT_VERSION,
		true // Enqueue script in the footer.
	);

	wp_enqueue_style(
		'gwg-editor-css',
		GWG_ESNEXT_PLUGIN_URL . 'editor.css',
		[],
		GWG_ESNEXT_VERSION
	);
}
add_action( 'enqueue_block_editor_assets', 'gwg_editor_assets' );
