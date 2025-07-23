<?php


function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    $file_name = '/style.css'; // Nom du fichier CSS
    $style_path =  get_stylesheet_directory() . $file_name; // Chemin vers votre fichier CSS
    wp_enqueue_style(
        'custom-child-style', // Identifiant unique pour votre style
        get_stylesheet_directory_uri() . $file_name,
        array(), // Dépendances, le cas échéant
        file_exists($style_path) ? filemtime($style_path) : false
        // Version du fichier basée sur la date de dernière modification ( pour les probleme de cache)
    );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles', 20);










// Get customizer options form parent theme
if (get_stylesheet() !== get_template()) {
    add_filter('pre_update_option_theme_mods_' . get_stylesheet(), function ($value, $old_value) {
        update_option('theme_mods_' . get_template(), $value);
        return $old_value; // prevent update to child theme mods
    }, 10, 2);
    add_filter('pre_option_theme_mods_' . get_stylesheet(), function ($default) {
        return get_option('theme_mods_' . get_template(), $default);
    });
}



//lier le fichier JavaScript ,jQuery et Swiper dans le thème enfant WordPress
function theme_child_enqueue_scripts()
{


    //jQuery
    wp_enqueue_script('jQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', array('jquery'), '1.0', true);
    //Swiper
    wp_enqueue_script('Swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), '1.0', true);
    // Mettre le fichier JavaScript personnalisé en file d'attente
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/js/script.js', array('jquery'), '1.0', true);
}

// Accrochez la fonction à l'action wp_enqueue_scripts
add_action('wp_enqueue_scripts', 'theme_child_enqueue_scripts');
