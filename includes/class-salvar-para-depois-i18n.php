<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://juliocampos.eti.br
 * @since      1.0.0
 *
 * @package    Salvar_Para_Depois
 * @subpackage Salvar_Para_Depois/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Salvar_Para_Depois
 * @subpackage Salvar_Para_Depois/includes
 * @author     Júlio Campos <jcserracampos@gmail.com>
 */
class Salvar_Para_Depois_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'salvar-para-depois',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
