/**
 * Created by ADOUKO on 17/01/2015.
 */
$(function(){
    $(window).load(function() {

        var InfiniteRotator =
        {
            init: function()
            {
                //initial fade-in time (in milliseconds)
                var initialFadeIn = 1000;

                //interval between items (in milliseconds)
                var itemInterval = 10000;

                //cross-fade time (in milliseconds)
                var fadeTime = 2500;

                var estDejaLancer = 0;

                var indexTableau;

                $( '#moncercle img').fadeOut(fadeTime, function(){
                    $( '#moncercle img').fadeIn(fadeTime, function(){
                        // Extraction de l'index sur l'id du bouton dans le tableau
                        indexTableau = $( '#img-affi-bas-cinq' ).attr('src');
                        indexTableau = indexTableau.substring(0,indexTableau.lastIndexOf('-'));
                        $("#img-de-fond").attr('src',indexTableau+'.jpg');
                    });
                    estDejaLancer = 1;

                });

                //loop through the items
                var infiniteLoop = setInterval(function(){
                    if (estDejaLancer == 0) {
                        $( '#moncercle img').fadeOut(fadeTime, function(){
                            $( '#moncercle img').fadeIn(fadeTime, function(){

                                // Extraction de l'index sur l'id du bouton dans le tableau
                                indexTableau = $( '#img-affi-bas-un' ).attr('src');
                                indexTableau = indexTableau.substring(0,indexTableau.lastIndexOf('-'));

                                $("#img-de-fond").attr('src',indexTableau+'.jpg');
                            });
                            estDejaLancer = 1;

                        });

                    }

                    if (estDejaLancer == 1) {
                        $( '#moncercle img').fadeOut(fadeTime, function(){
                            $( '#moncercle img').fadeIn(fadeTime, function(){
                                // Extraction de l'index sur l'id du bouton dans le tableau
                                indexTableau = $( '#img-affi-bas-deux' ).attr('src');
                                indexTableau = indexTableau.substring(0,indexTableau.lastIndexOf('-'));

                                $("#img-de-fond").attr('src',indexTableau+'.jpg');
                            });
                            estDejaLancer = 2;
                        });

                    }

                    if (estDejaLancer == 2) {
                        $( '#moncercle img').fadeOut(fadeTime, function(){
                            $( '#moncercle img').fadeIn(fadeTime, function(){
                                // Extraction de l'index sur l'id du bouton dans le tableau
                                indexTableau = $( '#img-affi-bas-trois' ).attr('src');
                                indexTableau = indexTableau.substring(0,indexTableau.lastIndexOf('-'));
                                $("#img-de-fond").attr('src',indexTableau+'.jpg');
                            });
                            estDejaLancer = 3;
                        });
                    }

                    if (estDejaLancer == 3) {
                        $( '#moncercle img').fadeOut(fadeTime, function(){
                            $( '#moncercle img').fadeIn(fadeTime, function(){
                                // Extraction de l'index sur l'id du bouton dans le tableau
                                indexTableau = $( '#img-affi-bas-quatre' ).attr('src');
                                indexTableau = indexTableau.substring(0,indexTableau.lastIndexOf('-'));
                                $("#img-de-fond").attr('src',indexTableau+'.jpg');
                            });
                            estDejaLancer = 4;
                        });
                    }

                    if (estDejaLancer == 4) {
                        $( '#moncercle img').fadeOut(fadeTime, function(){
                            $( '#moncercle img').fadeIn(fadeTime, function(){
                                // Extraction de l'index sur l'id du bouton dans le tableau
                                indexTableau = $( '#img-affi-bas-cinq' ).attr('src');
                                indexTableau = indexTableau.substring(0,indexTableau.lastIndexOf('-'));
                                $("#img-de-fond").attr('src',indexTableau+'.jpg');
                            });
                            estDejaLancer = 0;
                        });

                    }

                }, itemInterval);
            }
        };

        InfiniteRotator.init();

    });

    ;
});