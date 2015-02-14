/**
 * Created by ADOUKO on 08/02/2015.
 */
$(function(){

    // Initialisation des champs du formulaires
    $(window).load(function() {
        $( '#idimage').val('');
        $( '#nommenu').val('');
        $( '#urlimage').val('') ;
        $( '#positions').val('') ;
        $( '#lebouttonclique').val('inse');

        // Rendre actif le boutton d'id: insertion
        $( '#insertion-im').removeAttr("disabled");

        // Rendre inactif le boutton d'id: modication et suppression
        $( '#modification-img').attr("disabled", "disabled");
        $( '#suppression-img').attr("disabled", "disabled");
    });

    var indexTableau;
    var valeurCellule;
    $( "button" ).click(function() {
        // Extraction de l'index sur l'id du bouton dans le tableau
        indexTableau = $( this ).attr('id');
        indexTableau = indexTableau.substring(indexTableau.lastIndexOf('-') + 1);

        // Affectation des champs du formulaires après le clkick sur un bouton du tableau
        $( '#idimage').val($( '#idimage-'+indexTableau ).html());
        $( '#nommenu').val($( '#nommenu-'+indexTableau ).html()) ;
        $( '#urlimage').val($( '#urlimage-'+indexTableau ).html()) ;
        $( '#positions').val($( '#positions-'+indexTableau ).html()) ;

        // insertion de la valeur modifier ou supprimer dans le champ d'id = lebouttonclique
        $( '#lebouttonclique').val($( this ).attr('id').substring(0,4));



        // Au cas où nous avon une nouvelle insertion
        if ($( this ).attr('id').substring(0,4) == 'nouv'){
            $("#insertion-img").removeAttr("disabled");
            $( '#idimage').val('');
            $( '#nommenu').val('');
            $( '#urlimage').val('') ;
            $( '#positions').val('') ;
            $( '#lebouttonclique').val('inse');

            // Rendre actif le boutton d'id: insertion
            $( '#insertion-im').removeAttr("disabled");

            // Rendre inactif le boutton d'id: modication et suppression
            $( '#modification-img').attr("disabled", "disabled");
            $( '#suppression-img').attr("disabled", "disabled");

        }
        else{
            // Rendre inactif le boutton d'id: insertion
            $( '#insertion-img').attr("disabled", "disabled");

            // Rendre actif le boutton d'id: modication et suppression
            $( '#modification-img').removeAttr("disabled");
            $( '#suppression-img').removeAttr("disabled");
        }


    });


});
