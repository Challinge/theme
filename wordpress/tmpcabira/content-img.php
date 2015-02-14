<?php
/**
 * Created by PhpStorm.
 * User: ADOUKO
 * Date: 03/02/2015
 * Time: 10:39
 */

// Recupère le nom - permalink - de la page courrante
global $post;
$slug = get_post( $post )->post_name;

// Recupère les urls d'image pour un nom de page données
global $wpdb;
$listDesImages = '';
$urlUn = '';
$urlDeux = '';
$urlTrois = '';
$urlQuatre = '';
$urlCinq = '';
$listeDesImages = $wpdb->get_results("SELECT urlimage, positions FROM ". $wpdb->prefix . "imagesdiv WHERE nommenu='".$slug."'", ARRAY_A);

if ($listeDesImages) {

    foreach ($listeDesImages as $chaqueImage) {

        if ($chaqueImage['positions'] == 1){
            $urlUn = $chaqueImage['urlimage'];
        }

        if ($chaqueImage["positions"] == 2){
            $urlDeux = $chaqueImage["urlimage"];
        }

        if ($chaqueImage["positions"] == 3){
            $urlTrois = $chaqueImage["urlimage"];
        }

        if ($chaqueImage["positions"] == 4){
            $urlQuatre = $chaqueImage["urlimage"];
        }

        if ($chaqueImage["positions"] == 5){
            $urlCinq = $chaqueImage["urlimage"];
        }
    }
}
?>
            <div id="moncercle">
                <img id="img-de-fond" src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $slug ?>/<?php echo $urlUn ?>.jpg">
            </div>

            <div id="img-bas-un">
                <img id="img-affi-bas-un" src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $slug ?>/<?php echo $urlUn ?>-thb.jpg">
            </div>

            <div id="img-bas-deux">
                <img id="img-affi-bas-deux" src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $slug ?>/<?php echo $urlDeux ?>-thb.jpg">
            </div>

            <div id="img-bas-trois">
                <img id="img-affi-bas-trois" src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $slug ?>/<?php echo $urlTrois ?>-thb.jpg">
            </div>

            <div id="img-haut-un">
                <img id="img-affi-bas-quatre" src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $slug ?>/<?php echo $urlCinq ?>-thb.jpg">
            </div>

            <div id="img-haut-deux">
                <img id="img-affi-bas-cinq" src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $slug ?>/<?php echo $urlQuatre ?>-thb.jpg">
            </div>

        </div>