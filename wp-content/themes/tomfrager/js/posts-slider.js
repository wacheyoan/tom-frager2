var nbrslider = 0;
$(function(){
    $( "div.all-articles" ).on( "swipeleft", swipeHandler );

    function swipeHandler(){
        nbrslider = nbrslider -50;
        jQuery('.all-articles').css('transform', 'translateX('+nbrslider+'%)');
    }
});

$(function(){
    $( "div.all-articles" ).on( "swiperight", swipeHandler );

    function swipeHandler( event ){
        nbrslider = nbrslider +50;
        jQuery('.all-articles').css('transform', 'translateX('+nbrslider+'%)');
    }
});

// Bar de recherche dynamic
$(document).ready(function (){
    jQuery('.search-bar').on('keyup', function (){
        var value = jQuery(this).val().toLowerCase();
        jQuery('.single-article').filter(function (){
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });

    //Filtre
    $('.btn-filtre').on('click', function(){
        console.log($(this).val());
    })
})

//filtre slider
var nbrsliderFiltre = 0;
$(function(){
    $( "div.all-filtre" ).on( "swipeleft", swipeHandler );

    function swipeHandler(){
        nbrsliderFiltre = nbrsliderFiltre -39;
        jQuery('.all-filtre').css('transform', 'translateX('+nbrsliderFiltre+'%)!imprtant');
    }
});

$(function(){
    $( "div.all-filtre" ).on( "swiperight", swipeHandler );

    function swipeHandler( event ){
        nbrsliderFiltre = nbrsliderFiltre +39;
        jQuery('.all-filtre').css('transform', 'translateX('+nbrsliderFiltre+'%)!important');
    }
});