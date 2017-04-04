$(document).ready(function() {
    $(".menu-item-type-custom a").click(function() {
        if($(".menu-item-type-custom a").hasClass("active")) {
            $(".menu-item-type-custom a").removeClass("active");
        }
        else {
            $(this).addClass("active");
        }
    });
});
