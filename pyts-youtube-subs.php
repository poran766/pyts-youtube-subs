<?php

/*
Plugin Name: Pyts YouTube Subs
Plugin URI: https://github.com/poran766/pyts-youtube-subs.git
Description: Display the subscriber number of your site
Version: 1.0.0
Author: H.M. Mushfiqur Rahman
Author URI: 
Text Domain: pyts-youtube-subs
Domain Path: /languages
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Tested up to: 5.8.2
Stable tag: 1.0.0
*/



// Exit of accessed directly

if(!defined('ABSPATH')){
    exit;
}

// Load Scripts
require_once(plugin_dir_path(__FILE__).'/includes/pyts-scripts.php');

// Load Class
require_once(plugin_dir_path(__FILE__).'/includes/pyts-count-class.php');

// Register Widget
function register_pytscounts(){

  register_widget('pyts_Widget');
}

// Hook in function
add_action('widgets_init', 'register_pytscounts');


