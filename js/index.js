$("#scrollToUnderHood").click(function() {
    $('html, body').animate({
        scrollTop: $("#underhood").offset().top
    }, 2000);
});