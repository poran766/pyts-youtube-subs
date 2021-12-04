<?php
function pyts_add_scripts(){
    
    // Add main css
    wp_enqueue_style( 'pyts_style', plugins_url('style.css', __FILE__));

    // Add main JS
    wp_enqueue_script ( 'pyts_script', plugins_url('main.js', __FILE__ )); // '/pyts/js/main.js'. 

        // Add Google Script
    wp_register_script('google', 'https://apis.google.com/js/platform.js');
    wp_enqueue_script('google');

}
add_action('wp_enqueue_scripts', 'pyts_add_scripts');


