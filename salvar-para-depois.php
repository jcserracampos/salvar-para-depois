<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://juliocampos.eti.br
 * @since             1.0.0
 * @package           Salvar_Para_Depois
 *
 * @wordpress-plugin
 * Plugin Name:       Salvar Para Depois
 * Plugin URI:        https://github.com/jcserracampos/salvar-para-depois
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Júlio Campos
 * Author URI:        https://juliocampos.eti.br
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       salvar-para-depois
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-salvar-para-depois-activator.php
 */
function activate_salvar_para_depois() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-salvar-para-depois-activator.php';
	Salvar_Para_Depois_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-salvar-para-depois-deactivator.php
 */
function deactivate_salvar_para_depois() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-salvar-para-depois-deactivator.php';
	Salvar_Para_Depois_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_salvar_para_depois' );
register_deactivation_hook( __FILE__, 'deactivate_salvar_para_depois' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-salvar-para-depois.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_salvar_para_depois() {

	$plugin = new Salvar_Para_Depois();
	$plugin->run();

}
run_salvar_para_depois();
