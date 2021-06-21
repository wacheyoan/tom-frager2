var nbrslider = 0;

$(document).on("swipeleft","div.all-products", function (e) {
    swipeHandler(-75)
});
$(document).on("swiperight","div.all-products", function (e) {
    swipeHandler(75)
});

function swipeHandler(number) {
    nbrslider = nbrslider + number;
    jQuery('.all-products').css('transform', 'translateX(' + nbrslider + '%)');
}




