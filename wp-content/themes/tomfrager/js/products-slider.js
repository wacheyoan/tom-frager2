var nbrslider = 0;
$(function(){
    $( "div.all-products" ).on( "swipeleft", swipeHandler );

    function swipeHandler(){
        nbrslider = nbrslider -14.5;
        jQuery('.all-products').css('transform', 'translateX('+nbrslider+'%)');
    }
});

$(function(){
    $( "div.all-products" ).on( "swiperight", swipeHandler );

    function swipeHandler( event ){
        nbrslider = nbrslider +14.5;
        jQuery('.all-products').css('transform', 'translateX('+nbrslider+'%)');
    }
});