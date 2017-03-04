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
    $('.main_head').parallax({imageSrc: '../img/bg.jpg'});
    //sandwich icon
    $(".toggle_mnu").click(function() {
        $("#sandwich").toggleClass("active");
    });
    $(".toggle_mnu").click(function () {
        if($("#sandwich").hasClass("active"))
            $(".top_mnu").fadeIn(600);
        else $(".top_mnu").fadeOut(600);
    });
});
//preloader
$(window).on('load',function() {

    $(".loader_inner").fadeOut();
    $(".loader").delay(400).fadeOut("slow");

    $(".top_text h1").animated("fadeInDown", "fadeOutUp");
    $(".top_text p").animated("fadeInUp", "fadeOutDown");

});
