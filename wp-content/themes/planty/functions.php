<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_stylesheet_directory_uri() . '/style.css');
}

add_filter('wp_nav_menu_items','Ajout_adminlink', 10, 2);
function Ajout_adminlink($items, $args){
    if(is_user_logged_in() && $args->theme_location == 'primary'){
        $items .='<li><a href="'.get_admin_url().'">Admin</a></li>';
    }
    return $items;
}
