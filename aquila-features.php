<!-- https://downloadlynet.ir/2023/15/93532/03/creating-wordpress-plugins-the-right-way/11/?#/93532-udemy-112323082813.html -->
<?php

/*
 * Plugin Name:       Aquila Features
 * Plugin URI:        https://aquila.com/features
 * Description:       Adds a custom post type to display features by gotenbueg blog.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Md. Abbas Uddin
 * Author URI:        https:github.com/mdabbas-cse
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       aquila-features
 * Domain Path:       /languages
 */

use AquilaFeatures\Plugin;

require_once __DIR__ . '/vendor/autoload.php';

if (!defined('ABSPATH')) {
  exit;
}

// include 

if (class_exists('AquilaFeatures\\Plugin')) {
  $the_plugin = new Plugin();
}


// add plugin activation hook
register_activation_hook(__FILE__, [$the_plugin, 'activate']);

// add plugin deactivation hook
register_deactivation_hook(__FILE__, [$the_plugin, 'deactivate']);