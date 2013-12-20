<?php
    /* 
    Plugin Name: Custom Theme Properties
    Plugin URI: http://na0.biz/
    Description: Plugin for setting up custom properties for themes
    Author: Nao Fujimoto
    Version: 1.0
    Author URI: http://na0.biz/
    */
?>
<?php
function nfctp_admin() {
	include('nf-custom-theme-properties-admin.php');
}

function nfctp_admin_actions() {  
	add_theme_page("Custom Theme Properties", "Custom Theme Properties", 'edit_theme_options', "CustomThemeProperties", "nfctp_admin");
}

add_action('admin_menu', 'nfctp_admin_actions'); 

function nfctp_get_properties($property_name) {  
    switch ($property_name) {
		case 'logo_image':
			return get_option('nfctp_logo_image');  
			break;
    case 'top_image':
			return get_option('nfctp_top_image');  
			break;
	}
} 
?>
<?php
if (isset($_GET['page']) && $_GET['page'] == 'CustomThemeProperties') {
	add_action('admin_head', 'my_admin_scripts');
	add_action('admin_print_styles', 'my_admin_styles');
}

function my_admin_scripts() {
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_register_script('my-upload', WP_PLUGIN_URL.'/nf-custom-theme-properties/my-script.js', array('jquery','media-upload','thickbox'));
	wp_enqueue_script('my-upload');
}

function my_admin_styles() {
	wp_enqueue_style('thickbox');
	wp_register_style('my-style', WP_PLUGIN_URL.'/nf-custom-theme-properties/my-style.css');
	wp_enqueue_style('my-style');	
}
?>