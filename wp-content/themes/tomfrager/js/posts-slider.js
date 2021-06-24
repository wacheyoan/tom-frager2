// Bar de recherche dynamic
jQuery(document).ready(function (){
    jQuery('.search-bar').on('keyup', function (){
        var value = jQuery(this).val().toLowerCase();
        jQuery('.single-article').filter(function (){
            jQuery(this).toggle(jQuery(this).text().toLowerCase().indexOf(value) > -1)
        });
    });

    //Filtre
    jQuery('.btn-filtre').on('click', function(){
        console.log(jQuery(this).val());
    })
})


