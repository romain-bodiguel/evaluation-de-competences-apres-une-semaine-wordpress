<?php
/**
 * Functions and definitions
 */

function charger_styles() {
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/blog.css');

    add_theme_support('title-tag');
    // permet d'avir un onglet menus dans Apparence dans le BO de WP
    add_theme_support('menus');
}

add_action( 'after_setup_theme', 'charger_styles' );

// On vérifie si la fonction n'existe pas déjà avant de la créer
// Permet d'éviter d'écraser du code
if(!function_exists('apply_nav_menu_item_css')) {
    function apply_nav_menu_item_css($classes) {
        // Le hook s'exécute à chaque création de lien dans le menu
        // $classes: la liste des classes pour la balise 'li' en cours
        
        // On écrase $classes avec la classe qu'on souhaite ajouter
        return ['nav-item'];
    }
}
add_filter('nav_menu_css_class', 'apply_nav_menu_item_css');

if(!function_exists('apply_nav_menu_link_css')) {
    function apply_nav_menu_link_css($attr) {
        //var_dump($attr);

        // On écrase PAS $attr, on lui ajoute une classe
        $attr['class'] = 'nav-link';
        return $attr;
    }
}
add_filter('nav_menu_link_attributes', 'apply_nav_menu_link_css');