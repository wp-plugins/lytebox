<?php
/*
Plugin Name: Lytebox	
Plugin URI: http://www.dolem.com/lytebox/
Description: A tool that can dynamicly load image and html content in a lytebox. Just add a rel of lyteframe to a html	 link to open it in a lytebox. Add a lytebox rel to a image link to open the image in a lytebox.
Version: 1.00
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