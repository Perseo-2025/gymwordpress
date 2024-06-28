<?php 

function gymfitness_setup(){
    // Imagenes Destacadas
    add_theme_support('post-thumbnails');

    // Titulos para SEO
    add_theme_support('title-tag');

}
add_action('after_setup_theme','gymfitness_setup');


function gymfitness_menus(){
    register_nav_menus( array(
        'menu-principal' => __('Menu Principal', 'gymfitness'),
    ) );
}

add_action('init', 'gymfitness_menus');

//add style sheet
function gymfitness_scripts_styles(){

    wp_enqueue_style('normalize','https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');
    
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');
}

add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');