<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent Kadence
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/theme.css', array(), filemtime(get_stylesheet_directory() . '/theme.css'));
}

// Ajout de l'emplacement Footer dans les menus

    register_nav_menus(array(
    'Header' => 'Prime Header',
    'footer' => 'Footer menu',
    ));

// Fin emplacement Footer dans les menus


// début du hook admin 

add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );

function add_extra_item_to_nav_menu( $items, $args ) {
    if ( is_user_logged_in() && $args->theme_location == 'primary' ) {
        $items .= '<li id="admin-link" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="' . esc_url( admin_url() ) . '">Admin</a></li>';
    }
    return $items;
}

// fin du hook admin 

