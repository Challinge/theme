/**
 * Created by ADOUKO on 10/01/2015.
 */
$(function(){

    /**** handle the history ***/
    // listen an event on the brower window
    $(window).bind('popstate', function(){

        // Take the current uri
        var urlwp = window.location;

        var hash = urlwp.href.substring(urlwp.href.lastIndexOf('/') + 1)

        alert(hash);

        // load the previous content
        $('#contenu').load( urlwp + ' #contenu', function () {
            // on galery there is a plugin
            $('.gallery a').colorbox();
        });

        // first we remove all the ative on the li tags
        $('#menu li').removeClass('active');

        if (hash.length == 0){

            // add class to home
            $('#menu li').first().addClass('active');

        }else {

            // add class active
            $('#menu li.'+hash+'').addClass('active');
        }

    });

    // hide the id div loading
    $( '#loading' ).hide();

    /**** handle event when a user hit a link ****/
    $( '#menu a').click(function(e){

        // block the loading page when a user hits a link
        e.preventDefault();

        $('#loading').slideDown();

        // remove class (active in the css) from all the li
        $('#menu li').removeClass('active');

        // add class (active in the css) to the link hit by the user
        $(this).parent().addClass('active');

        // link to get the value of href
        var link = $(this).attr('href');

        // hide the class contenu to load the content of the hit link and brings up the content (show the class contenu)
        $('#contenu').slideUp(500, function(){

            $('#contenu').load( link + ' #contenu', function(){

                $('#contenu').slideDown(500, function() {

                    $('#loading').slideUp();

                    // on galery there is a plugin
                    $('.gallery a').colorbox();

                    // Put the history in the address bar
                    history.pushState( null, null, link);

                });

            });

        });
    });
});
