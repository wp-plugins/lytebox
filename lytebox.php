<?php
/*
Plugin Name: Lytebox	
Plugin URI: http://www.dolem.com/lytebox/
Description: A tool that can dynamicly load image and html content in a simple, elegant overlay.
Version: 5.5.1
*/
$myJsUrl = WP_PLUGIN_URL . '/lytebox/lytebox.js';
$myJsFile = WP_PLUGIN_DIR . '/lytebox/lytebox.js';
if ( file_exists($myJsFile) ) {
	wp_register_script('lytebox-script', $myJsUrl);
	wp_enqueue_script( 'lytebox-script');
}

   
$myStyleUrl = WP_PLUGIN_URL . '/lytebox/lytebox.css';
$myStyleFile = WP_PLUGIN_DIR . '/lytebox/lytebox.css';
if ( file_exists($myStyleFile) ) {
	wp_register_style('lytebox-style', $myStyleUrl);
	wp_enqueue_style( 'lytebox-style');
}
?>