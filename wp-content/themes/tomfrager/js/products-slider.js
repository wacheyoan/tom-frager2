var nbrslider = 0;
$.mobile.autoInitializePage = false;

$(function (){
    $("div.all-products").on("swipeleft", function (e) {
        swipeHandler(-75)
    });
    $("div.all-products").on("swiperight", function (e) {
        swipeHandler(75)
    });

    function swipeHandler(number) {
        nbrslider = nbrslider + number;
        jQuery('.all-products').css('transform', 'translateX(' + nbrslider + '%)');
    }
})



