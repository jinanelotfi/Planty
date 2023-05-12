<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent Kadence
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/theme.css', array(), filemtime(get_stylesheet_directory() . '/theme.css'));
}

// function planty_supports(){
//     add_theme_support('menus');
//     register_nav_menu('header', 'En tête du menu');
// }

// add_action('init', 'planty_supports');

// function planty_supports(){

    register_nav_menus(array(
    'primary-menu' => 'Header menu',
    'footer' => 'Footer menu',
    ));