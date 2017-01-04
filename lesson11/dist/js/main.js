function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
$(window).on("scroll", function() {
    if($(window).scrollTop() > 50) {
        $(".header").addClass("active");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
        $(".header").removeClass("active");
    }
});
$(document).ready(function(){
    $('#carousel-1').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        items:1,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
});

$(document).ready(function(){
    $('#carousel-2').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        items:1,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    })
});
$(document).ready(function(){
    $('#carousel-3').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        items:2,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:4
            },
            1000:{
                items:6
            }
        }
    })
});