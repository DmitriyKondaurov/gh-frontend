$(document).ready(function() {
    function heightDetect() {
        $(".main_head").css("height", $(window).height());
    };
    heightDetect();
    $(window).resize(function() {
        heightDetect();
    });
});
$(window).on('load',function() {

    $(".loader_inner").fadeOut();
    $(".loader").delay(400).fadeOut("slow");

    $(".top_text h1").animated("fadeInDown", "fadeOutUp");
    $(".top_text p").animated("fadeInUp", "fadeOutDown");

});
