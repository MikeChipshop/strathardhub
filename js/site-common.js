jQuery(document).ready(function( $ ) {

    $(".sbh_fp-hero button").click(function() {
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#sbh_facilities").offset().top
        }, 500);
    });

    $(function() {
        //caches a jQuery object containing the header element
        var header = $(".sbh_global-header");
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 100) {
                header.removeClass('clearHeader').addClass("darkHeader");
            } else {
                header.removeClass("darkHeader").addClass('clearHeader');
            }
        });
    });
});
