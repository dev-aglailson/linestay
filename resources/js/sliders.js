$(document).ready(function(){

    $(".slider-resultado-simples").owlCarousel({
        items:2,
        loop:true,
        dots:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items: 2
            },
            520:{
                items:2
            },
            720:{
                items:2
            },
            1000:{
                items:2
            }
        }
    });

})