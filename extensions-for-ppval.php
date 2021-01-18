<?php

/**
 * Extensions for PPVAL
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/
 * @since             0.1
 * @package           extensions-for-ppval
 *
 * @wordpress-plugin
 * Plugin Name:       Extensions for PPVAL
 * Plugin URI:        https://github.com/
 * Description:       Small enhancement for www.ppval.org site
 * Version:           0.1
 * Pressbooks tested up to: 5.10
 * Author:            PPVAL team
 * Author URI:        https://github.com/
 * License:           GPL 3.0
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       extensions-for-ppval
 * Domain Path:       /languages
 * Network: 					True
 */


defined ("ABSPATH") or die ("No script assholes!");

// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// include_once(ABSPATH.'wp-admin/includes/plugin.php'); // bad aproach, we have to modify to something else or to delete, i do not know what´s that




/**
 * Include lib folder
 *
 * @since 0.1
 * @internal wampum-popups
 *
 */


// require_once dirname( __FILE__ ) . '/lib/wampum-popups/wampum-popups.php';




/**
 * Include Vendor folder
 *
 * @since 0.1
 * @internal snippets-single
 * @internal snippets-mu
 * @internal snippets-header
 * @internal snippets-footer
 * @internal shortcodes
 *
 */

 // require_once dirname( __FILE__ ) . '/vendor/snippets-single.php';
 require_once dirname( __FILE__ ) . '/vendor/snippets-post.php';
 require_once dirname( __FILE__ ) . '/vendor/snippets-mu.php';
 // require_once dirname( __FILE__ ) . '/vendor/snippets-header.php';
 // require_once dirname( __FILE__ ) . '/vendor/snippets-footer.php';


// if(is_plugin_active('pressbooks/pressbooks.php')){
//
//   // include_once plugin_dir_path( __FILE__ ) . "groupByLanguage/efpb-groupByLanguage.php";
// 	// include_once plugin_dir_path( __FILE__ ) . "post-metabox-pb_is_based_on/efpb-post-metabox-pb_is_based_on.php";
//
//     //If the plugin "Restric Content Pro" is not active nothing happens
//   if (is_plugin_active('restrict-content-pro/restrict-content-pro.php')){
//     include_once plugin_dir_path( __FILE__ ) . "rcp/efpb-rcp-registration-fields.php";
//   }
// }
