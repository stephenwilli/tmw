(function ($) {

    // HERO SLIDER
      
      $('#hero-slider').flexslider({
        animation: "fade",
        slideshow: true, // auto play on load
        slideshowSpeed: 5000,
            animationSpeed: 800,
            pauseOnHover: true,
            directionNav: true, //Boolean: Create navigation for previous/next navigation? (true/false)
            controlNav: true, //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
            prevText: "Previous",
            nextText: "Next"
      });

    // PRELOADER

    $(window).load(function() {
        setTimeout(function() {
            $('.js-sitewrap').animate({
                opacity: 1
            }, 300);
            $('#preloader').fadeOut(300, function() {
                SiteApp.Animated();
            });
        }, 300); // delay 300 ms
    });

})(jQuery); // End of use strict
