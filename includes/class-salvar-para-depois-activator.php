<?php

/**
 * Fired during plugin activation
 *
 * @link       https://juliocampos.eti.br
 * @since      1.0.0
 *
 * @package    Salvar_Para_Depois
 * @subpackage Salvar_Para_Depois/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Salvar_Para_Depois
 * @subpackage Salvar_Para_Depois/includes
 * @author     Júlio Campos <jcserracampos@gmail.com>
 */
class Salvar_Para_Depois_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		// Argumentos das páginas salvas
		$saved_page_args = array(
			'post_title' => __('Salvo', 'salvo-para-depois'),
			'post_content' => '[salvar-para-depois]',
			'post_status' => 'publish',
			'post_type' => 'page'
		);
		$saved_page_id = wp_insert_post( $saved_page_args );
	}

}
