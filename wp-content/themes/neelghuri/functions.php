<?php
/*
* all functions of this theme
*/
//Title function
add_theme_support('title_tag');
// Load css and javascript
function loadCssAndJs() {
    wp_enqueue_style('ng-style',get_stylesheet_uri());
    wp_register_style('bootstrap',get_stylesheet_uri('/css/bootstrap.min.css'),array(),'5.2.3','all');
    wp_enqueue_style('bootstrap');
    wp_register_style('custom',get_stylesheet_uri('/css/custom.min.css'),array(),'1.0.0','all');
    wp_enqueue_style('custom');
    
    //Jquery
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap',get_stylesheet_uri('/js/bootstrap.min.js'),array(),'5.3.1','true');
    wp_enqueue_script('main',get_stylesheet_uri('/js/main.js'),array(),'1.0.0','true');
}
add_action('wp_enqueue_scripts','loadCssAndJs');