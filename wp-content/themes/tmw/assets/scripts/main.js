(function ($) {

	// ADD CLASS TO NAV ON SCROLL

	$(window).scroll(function() {
		if (($(window).scrollTop() > 70 && $(window).width() > 992 )){
	 		$('.navbar').addClass('scrolled');
	 	}
	 	else {
		 	$('.navbar').removeClass('scrolled');
	 	}

	}); // window.scroll

    // HERO SLIDER
      
      $('#hero-slider').flexslider({
        animation: "fade",
        slideshow: true, // auto play on load
        slideshowSpeed: 5000,
            animationSpeed: 800,
            pauseOnHover: true,
            directionNav: true, //Boolean: Create navigation for previous/next navigation? (true/false)
            controlNav: true, //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
            prevText: "",
            nextText: ""
      });

    // PRELOADER

	$(window).load(function(){
		$('#preloader').fadeOut('slow',function(){$(this).remove();});
	});

})(jQuery); // End of use strict
