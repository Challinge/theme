<?php

// Add the js files in the footer
add_action( 'init', 'insert_jquery_foot' );

function insert_jquery_foot() {
    // Handle the front end
    if ( !is_admin() ) {
        //retrieve jquery
        wp_deregister_script('jquery');
        // register script the version we want to work, without forget the last parameter to true to place the th script in the footer
        wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', '', false, true);
        // even if it's register, we have to use it ; so Links a script file to the generated page
        wp_enqueue_script('jquery');

        // register script the version we want to work, without forget the last parameter to true to place the th script in the footer
        wp_register_script('wpajax', get_template_directory_uri().'/js/ajax.js', '', false, true);
        // even if it's register, we have to use it ; so Links a script file to the generated page
        wp_enqueue_script('wpajax');
    }

}
// Add menus
add_theme_support( 'menus'); // Allows a theme or plugin to register support of a certain theme features.
// Theme Features is a set of features defined by theme authors that allows a theme to register support of a certain feature

register_nav_menu( 'main', 'Main navigation');


// Add a class to the li tags
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class($classes, $item){
    $slug = strtolower($item->title); // minuscules
    $classes[] = $slug;
    return $classes;
}