<?php
/**
*@package newplugin
*/
/*
Plugin Name: newplugin
Description: This is my first plugin.
*/

//exit if file is called directly
 if (! defined('ABSPATH')){

 	exit;
 }

 // if admin area
 if ( is_admin() ){
 	// include independecies
 require_once plugin_dir_path(__FILE__) . 'admin/admin-menu.php';
 require_once plugin_dir_path(__FILE__) . 'admin/settings-page.php';

 }

 

// register plugin settings
function newplugin_register_settings() {
	
	/*
	
	register_setting( 
		string   $option_group, 
		string   $option_name, 
		callable $sanitize_callback
	);
	
	*/
	
	register_setting( 
		'newplugin_options', 
		'newplugin_options', 
		'newplugin_callback_validate_options'
	);

		/*
	
	add_settings_section( 
		string   $id, 
		string   $title, 
		callable $callback, 
		string   $page
	);
	
	*/
	
	add_settings_section( 
		'newplugin_section_login', 
		'Customize Login Page', 
		'newplugin_callback_section_login', 
		'newplugin'
	);
	
	add_settings_section( 
		'newplugin_section_admin', 
		'Customize Admin Area', 
		'newplugin_callback_section_admin', 
		'newplugin'
	);




// validate plugin settings
function newplugin_validate_options($input) {
	
	// todo: add validation functionality..
	
	return($input);
	
}




 

}
add_action( 'admin_init', 'newplugin_register_settings' );

// validate plugin settings

// callback: login section
function newplugin_callback_section_login() {
	
	echo '<p>These settings enable you to customize the WP Login screen.</p>';
	
}



// callback: admin section
function newplugin_callback_section_admin() {
	
	echo '<p>These settings enable you to customize the WP Admin Area.</p>';
	
}










 

 