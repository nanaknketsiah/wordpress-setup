<?php


// navigation
function losmagos_menus(){
    $locations = array(
        'primary' => "Primary Menu items",
        'footer' => "Footer Menu items"
    );
    register_nav_menus($locations);
}


add_action('init', 'losmagos_menus');


function losmagos_theme_support(){
    //add dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}



add_action('after_setup_theme',"losmagos_theme_support");
// stylesheets
function losmagos_register_styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('main-stylesheet', get_template_directory_uri(). "/style.css", array(),  $version ,'all');
    wp_enqueue_style('tablet-stylesheet', get_template_directory_uri(). "/assets/css/tablet-syle.css", array(),  $version ,'all');
    wp_enqueue_style('mobile-stylesheet', get_template_directory_uri(). "/assets/css/mobile-style.css", array(),  $version ,'all');
    wp_enqueue_style('swiper-style', get_template_directory_uri(). "/assets/js/swipper/swiper-bundle.min.css");
    wp_enqueue_style("loco-style", get_template_directory_uri()."/assets/js/locom/locomotive-scroll.min.css");
}


add_action('wp_enqueue_scripts','losmagos_register_styles');

// scripts
function losmagos_register_scripts(){
    // wp_enqueue_script("swiper-jss", get_theme_file_uri("/assets/js/swipper/swiper-bundle.min.js"),true);
    wp_enqueue_script("locom-js", get_theme_file_uri("/assets/js/locom/locomotive-scroll.min.js"),true);
    wp_enqueue_script("jquery-js", get_theme_file_uri("/assets/js/jquery/jquery-3.7.1.js"),true);
    // wp_enqueue_script("slick_js", get_theme_file_uri("/assets/js/slick/slick.js"), array("jquery-js"),true);
    // wp_enqueue_script("mobile-animation", get_theme_file_uri("/assets/js/mobileanimation.js"), array('jquery-js'), '1.0', true);
    // wp_enqueue_script("mobile-header", get_theme_file_uri("/assets/js/header.js"), array('jquery-js'), '1.0', true);
    // wp_enqueue_script('about-script', get_template_directory_uri().'/assets/js/about.js',array(),'1.0', true);
    // wp_enqueue_script('popup-script', get_template_directory_uri().'/assets/js/popupdialog.js',array(),'1.0', true);
  wp_enqueue_script('main-script', get_template_directory_uri().'/assets/js/main.js',array(),'1.0', true);
}


add_action('wp_enqueue_scripts','losmagos_register_scripts');


?>