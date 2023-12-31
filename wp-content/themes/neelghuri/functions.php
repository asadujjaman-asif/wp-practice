<?php
/*
* all functions of this theme
*/
//Title function
add_theme_support('title_tag');
// Load css and javascript
function loadCssAndJs() {
    wp_enqueue_style('ng-style',get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(),'5.2.3','all');
    wp_enqueue_style('bootstrap');
    wp_register_style('custom',get_template_directory_uri().'/css/custom.min.css,array()','1.0.0','all');
    wp_enqueue_style('custom');
    
    //Jquery
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js', array(),'5.3.1','true');
    wp_enqueue_script('main',get_template_directory_uri().'/js/main.js', array(),'1.0.0','true');
}
add_action('wp_enqueue_scripts','loadCssAndJs');

function themeCustomizers($wp_customize){
    $wp_customize->add_section('header_area',array(
        'title' =>__('Header Area','neelghuri'),
        'description'=>'If you interested to update your area, you can do it here.' 
    ));
    $wp_customize->add_setting('themeLogo',array(
        'default' =>get_bloginfo('template_directory').'/images/logo.png',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'themeLogo',array(
        'label' =>'Upload Theme Logo',
        'description'=>'If you want to change your theme logo, you can do it here.',
        'setting' =>'themeLogo',
        'section' =>'header_area',
    )));
}
add_action('customize_register','themeCustomizers');