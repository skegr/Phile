<?php

// try to figure out the install path
$config['install_path'] = pathinfo(dirname(__FILE__))['basename'].'/';

/*
// Override any of the default settings below:

$config['site_title'] = 'PhileCMS';			// Site title
$config['base_url'] = ''; 				// Override base URL (e.g. http://example.com)
$config['install_path'] = '';           // if you installed phile in a subfolder, e.g. http://example.com/phile/ set this option to "phile/"
$config['theme'] = 'default'; 			// Set the theme (defaults to "default")
$config['date_format'] = 'jS M Y';		// Set the PHP date format
$config['twig_config'] = array(			// Twig settings
	'cache' => false,					// To enable Twig caching change this to CACHE_DIR
	'autoescape' => false,				// Autoescape Twig vars
	'debug' => false					// Enable Twig debug
);
$config['pages_order_by'] = 'alpha';	// Order pages by "alpha" or "date"
$config['pages_order'] = 'asc';			// Order pages "asc" or "desc"
$config['excerpt_length'] = 50;			// The pages excerpt length (in words)
$config['timezone'] = 'Europe/Berlin'; 	// The default timezone

// only extend $config['plugins'] and not overwrite it, because some core plugins
// will be added to this config option by default. So, use this option in this way:
// $config['plugins']['myCustomPlugin'] = array('active' => true);
// also notice, each plugin has its own config namespace.
// activate plugins
$config['plugins'] = array();

// To add a custom config setting:

$config['custom_setting'] = 'Hello'; 	// Can be accessed by {{ config.custom_setting }} in a theme

*/$config['plugins']['phileDemoPlugin'] = array('active' => true);
