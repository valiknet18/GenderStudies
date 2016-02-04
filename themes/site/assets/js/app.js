$(function() {

    $('#da-slider').cslider({
        autoplay    : true,
        bgincrement : 100
    });
});

$('a.info').tooltip();

$(window).load(function() {
    $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider) {
            $('body').removeClass('loading');
        }
    });
});

$(document).ready(function() {
    if (typeof $("#owl-demo").owlCarousel != "undefined") {
        $("#owl-demo").owlCarousel({

            items : 4

        });
    }
});

jQuery(document).ready(function(){
    jQuery('ul.superfish').superfish();
});

new WOW().init();
