//responsive height
$(document).ready(function() {

      //loop add id and href attributes
    // $(".portfolio_item").each(function (i) {
    //     $(this).find("a").attr("href", "#work_" + i);
    //     $(this).find(".podrt_descr").attr("id", "work_" + i);
    // });

    $(".toggle-class").click(function() {
        $(this).addClass("active");
        if($(".toggle-class").hasClass("active")) {
            $(".toggle-class").removeClass("active");
        }
    });
});
//preloader
$(window).on('load',function() {

    $(".loader_inner").fadeOut();
    $(".loader").delay(400).fadeOut("slow");

});
