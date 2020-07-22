// Register the service worker
if ('serviceWorker' in navigator) {
	navigator.serviceWorker.register('https://strathardhub.com/service-worker.js').then(function(registration) {
    // Registration was successful
    console.log('ServiceWorker registration successful with scope: ', registration.scope);
}).catch(function(err) {
    // registration failed :(
    	console.log('ServiceWorker registration failed: ', err);
    });
}

jQuery(document).ready(function( $ ) {

    $(".sbh_fp-hero button").click(function() {
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#sbh_welcome").offset().top
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

    $('.sbh_testimonail-slider-item').lightSlider({
        item:1,
        loop:true,
        mode: 'fade',
        auto: true,
        slideMove:1,
        easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
        speed:800,
        slideMargin:0,
        pauseOnHover: true,
        adaptiveHeight: true,
        pause: 6000,
    });
});
