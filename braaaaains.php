<?php
/*
Plugin Name: Clean Up Zombie Users
Plugin URI: http://imperativeideas.com
Description: If you have a WordPress site with lots spammer registrations, this plugin will delete any user who has never had a post or comment approved. Zombie Users... BRAAAAINS.
Author: Imperative Ideas
Version: 0.5
Author URI: http://imperativeideas.com/
*/

/**
 * Define the paths that zombies walk
 */

define('ZOMBIE_VERSION', '0.5');
define('ZOMBIE_PLUGIN_PATH', plugin_dir_path( __FILE__ ));
define('ZOMBIE_PLUGIN_URL', plugin_dir_url( __FILE__ ));

/**
 * Add the options page for this plugin
 */
function braaains_add_options_pages()
{
    if (function_exists('add_options_page')) {
        add_options_page("Clean Zombie Users", 'Clean Zombie Users', 'manage_options', __FILE__, 'braaains_options_page');
    }
}

/**
 * Generate the options page
 */
require_once( trailingslashit( ZOMBIE_PLUGIN_PATH ) . 'library/options.php' );

/**
 * Enque the plugin styles & scripts
 */
require_once( trailingslashit( ZOMBIE_PLUGIN_PATH ) . 'library/enqueue.php' );