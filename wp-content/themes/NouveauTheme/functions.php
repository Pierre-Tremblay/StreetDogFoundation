<?php

// ajout style et script
function ajout_scripts()
{
    // Déclarer style.css à la racine du thème
    wp_enqueue_style(
        'stylecss',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );

    // Ajout de font-awesome
    wp_enqueue_style('load-fa', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css');

    // Ajout de Boostrap
    wp_enqueue_style('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
    wp_enqueue_script('boot1', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', array( 'jquery' ), '', true);
    wp_enqueue_script('boot2', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ), '', true);
    wp_enqueue_script('boot3', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array( 'jquery' ), '', true);
}
add_action('wp_enqueue_scripts', 'ajout_scripts');

//enregistrer le menu
register_nav_menus(array(
        'menu' => 'Menu principal'
        ));


//Ajouter les extraits de la page
function ajouter_extrait_pages()
{
    add_post_type_support('page', 'excerpt');
}
add_action('init', 'ajouter_extrait_pages');

// Nombre de mots à afficher dans l'apercu des articles page blog
function new_excerpt_length($length)
{
    return 15;
}
add_filter('excerpt_length', 'new_excerpt_length');
function new_excerpt_more($more)
{
    global $post;
    return '… <a href="' . get_permalink($post->ID) . '">' . 'Lire plus &raquo;' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

//afficher l'image à mettre en avant
add_theme_support('post-thumbnails');
//fin

//faire apparaitre un champs ACF dans la barre latérale
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Ton titre de ta page option',
        'menu_title' => 'ton titre pour le menu',
        'menu_slug' => 'slug de la page option ex:page-option-reseaux-sociaux',
        'capability' => 'edit_posts',
        'redirect' => false,
        'position' => false,
        'icon_url' => false,
    ));
}