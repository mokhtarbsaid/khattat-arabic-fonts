<?php
/**
 * Plugin Name: Khattat - Arabic Fonts
 * Description: Add an appropriates arabic fonts from 50 fonts to show your arabic website much better.
 * Version:     1.2.0
 * Tested up to: 6.7
 * Requires PHP: 7.4
 * Author:      Mokhtar Bensaid
 * Author URI:  https://mokhtarbensaid.com
 * License:     GPL-2.0+
 * Text Domain: khattat-arabic-fonts
 * Domain Path: /languages
 */

// If accessed directly, deny access.
defined('ABSPATH') || exit;

// Definition of plugin constants.
define('KHTT_ARFNTS_VERSION', '1.0.0');
define('KHTT_ARFNTS_PATH', plugin_dir_path(__FILE__));
define('KHTT_ARFNTS_URL', plugin_dir_url(__FILE__));

// Include essential files.
require_once KHTT_ARFNTS_PATH . 'includes/class-main.php';

// Run the plugin
function khtt_arfnts_run_plugin() {
    $plugin = new Khtt_Arfnts_Main();
    $plugin->khtt_arfnts_run_main();
}
khtt_arfnts_run_plugin();
