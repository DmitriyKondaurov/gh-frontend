function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
        $(".menu").removeClass("original");
        $('.cloned').hide();
    } else {
        x.className = "topnav";
        $(".menu").addClass("original");
    }
}

$(window).on("scroll", function () {
    if ($(window).scrollTop() > 50) {
        $(".header").addClass("active");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
        $(".header").removeClass("active");
    }
});
// hide footer
$(function hide() {
    if ($(".footer-more").is(":visible")) {
        $(".footer-more").hide("slow");
    }
})
//show footer
$("#slide-down").click(function () {
    if ($(".footer-more").is(":hidden")) {
        $(".footer-more").show("slow");
        $('html, body').animate({
            scrollTop: 16000
        }, 1000);
    } else {
        $(".footer-more").hide("slow");
    }
});

$("#open-icon").click(function () {
    $(".footer-more").show("slow");
    $('html, body').animate({
        scrollTop: 16000
    }, 1000);
});

$('.isotope').isotope({
    itemSelector: '.isotope-item',
    masonry: {
        columnWidth: 100
    }
});

$(document).ready(function () {
    $('#carousel-1').owlCarousel({

    })
});

