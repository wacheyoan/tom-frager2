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


