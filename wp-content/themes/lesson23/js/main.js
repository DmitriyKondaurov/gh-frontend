//responsive height
$(document).ready(function() {

      //loop add id and href attributes
    // $(".portfolio_item").each(function (i) {
    //     $(this).find("a").attr("href", "#work_" + i);
    //     $(this).find(".podrt_descr").attr("id", "work_" + i);
    // });

    //sandwich icon
    $(".toggle_mnu").click(function() {
        $("#sandwich").toggleClass("active");
        if($("#top_header").hasClass("active")) {
            $("#top_header").removeClass("active");
        }
    });

    //fade out/in menu list
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

    //close menu on click
    $(".top_mnu li a").click(function () {
        $(".top_mnu").fadeOut(600);
        $("#sandwich").toggleClass("active");
    });

});
//preloader
$(window).on('load',function() {

    $(".loader_inner").fadeOut();
    $(".loader").delay(400).fadeOut("slow");

});
