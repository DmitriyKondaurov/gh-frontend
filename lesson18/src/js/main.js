//responsive height
$(document).ready(function() {
    function heightDetect() {
        $(".main_head").css("height", $(window).height());
    };
    heightDetect();
    $(window).resize(function() {
        heightDetect();
    });
    //parallax image
    $(".hero").parallax({imageSrc: '../img/bg.jpg'});
    //scroll background
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 50) {
            $("#top_header").addClass("active");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
            $("#top_header").removeClass("active");
        }
    });
    //sandwich icon
    $(".toggle_mnu").click(function() {
        $("#sandwich").toggleClass("active");
        if($("#top_header").hasClass("active")) {
            $("#top_header").removeClass("active");
        }
    });
    $(".toggle_mnu").click(function () {
        if($("#sandwich").hasClass("active")) {
            $(".top_mnu").fadeIn(600);
            $(".top_mnu li a").removeClass("fadeOutUp animated");
            $(".top_mnu li a").addClass("fadeInUp animated");
        }
        else {
            $(".top_mnu").fadeOut(600);
            $(".top_mnu li a").addClass("fadeOutUp animated");
        }

    });
    $(".top_mnu li a").click(function () {
        $(".top_mnu").fadeOut(600);
        $("#sandwich").toggleClass("active");
    })
});
//preloader
$(window).on('load',function() {

    $(".loader_inner").fadeOut();
    $(".loader").delay(400).fadeOut("slow");

    $(".top_text h1").animated("fadeInDown", "fadeOutUp");
    $(".top_text p").animated("fadeInUp", "fadeOutDown");

});
