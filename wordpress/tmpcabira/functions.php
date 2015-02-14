<?php

// Ajout du fichier js
add_action( 'init', 'insert_jquery_foot' );

function insert_jquery_foot() {

    // Enlever le jquery de WP
    //wp_deregister_script('jquery');
    // Enregistrer le jquery de la version 1.11.2
    wp_register_script('jquerys', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', '', false, true);
    // Générer ce lien de jquery dans la page
    wp_enqueue_script('jquerys');

    // Voit si on est sur le front-end
    if ( !is_admin() ) {

        // Enregister notre fichier animation jquery dans le footer
        wp_register_script('wpajaxi', get_template_directory_uri().'/js/rotation-images-centre.js', '', false, true);
        // Générer ce de js dans la page
        wp_enqueue_script('wpajaxi');

    }

    // Enregister notre fichier animation jquery dans le footer
    wp_register_script('wpenrimg', get_template_directory_uri().'/js/modification-suppression-image-backend.js', '', false, true);
    // Générer ce de js dans la page
    wp_enqueue_script('wpenrimg');

}


