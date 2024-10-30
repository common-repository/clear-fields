<?php
/*
Plugin Name: Clear Fields
Description: This plugin will clear form fields on focus and refill the field if no input is given.
Version: 1.2
Author: Brian Staruk
Author URI: http://brian.staruk.me
*/

// Close the door on anyone trying to directly access the plugin
if (!function_exists('add_action')) {
	echo 'You shouldn\'nt be here.';
	exit;
}

class clearFields {

    public function __construct() {
		add_action( 'wp_enqueue_scripts', array(&$this,'clearFieldsEnqueue') );
    }

	public function clearFieldsEnqueue() {
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script(
			'clearFields',
			plugins_url( '/js/Clear-Fields.js' , __FILE__ ),
			array( 'jquery' )
		);
	}
	
}

$clearFields = new clearFields;
?>