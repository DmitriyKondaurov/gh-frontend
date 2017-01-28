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

$( document ).ready(function() {
    // $('.isotope').isotope({
    //     itemSelector : '.isotope-item',
    //     layoutMode: 'masonry',
    //     masonry: {
    //         columnWidth: 110,
    //         gutter: 10
    //     }
    // });
    var $container = $('.isotope');
    // filter buttons
    $('#filters button').click(function(){
        var $this = $(this);
        // don't proceed if already selected
        if ( !$this.hasClass('is-checked') ) {
            $this.parents('#options').find('.is-checked').removeClass('is-checked');
            $this.addClass('is-checked');
        }
        var selector = $this.attr('data-filter');
        $container.isotope({  itemSelector: '.isotope-item', filter: selector });
        return false;
    });
});