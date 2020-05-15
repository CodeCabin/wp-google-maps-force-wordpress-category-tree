<?php
/*
Plugin Name: WP Google Maps - Force WordPress category tree
Description: Forces the Pro add-on to use WordPress' categories and taxonomies, useful for 3rd party integration. Require WP Google Maps - Pro add-on 8.0.* or above. Please note that presently, the setting has to be programatically switched back in order to go back to using WP Google Maps native category tree.
Version: 1.0
Author: Code Cabin - Perry Rylance
*/

add_filter('init', function() {
	
	global $wpgmza;
	
	if(empty($wpgmza))
		return;
	
	$wpgmza->settings->categoryTreeSource = "wordpress";
	
}, 11);
