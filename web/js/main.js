//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".nav").offset().top > 50) {
        $(".nav-justified").addClass("top-nav-collapse");
            } else {
        $(".nav-justified").removeClass("top-nav-collapse");
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $(document).on('click', '.navbar-nav li', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
