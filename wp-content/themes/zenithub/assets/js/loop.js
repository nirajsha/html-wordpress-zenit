$(document).ready(function() {



$('.owl-carousel').owlCarousel({
     // loop:true,
    margin:30,
    nav:false,
     responsive:{
        0:{
            items:1
        },
        400:{
            items:2
        },
        800:{
            items:3
        },
        1200:{
            items:4
        }
    }
});
        var owl = $('.owl-carousel');
owl.owlCarousel();
// Go to the next item
$('.customNextBtn').click(function() {
    owl.trigger('next.owl.carousel');
});
// Go to the previous item
$('.customPrevBtn').click(function() {
   
    owl.trigger('prev.owl.carousel', [300]);

    
});
    new WOW().init();
});