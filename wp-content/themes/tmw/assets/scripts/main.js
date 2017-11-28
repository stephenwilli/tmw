(function ($) {

  // WOW ANIMATIONS

  new WOW().init();

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
          directionNav: false, //Boolean: Create navigation for previous/next navigation? (true/false)
          controlNav: false, //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
          prevText: "",
          nextText: ""
    });

  // PUBLICATION SLIDER

  $('#js-image-carousel').flexslider({
      animation: "slide",
      controlNav: false,
      animationLoop: false,
      slideshow: false,
      itemWidth: 215,
      itemMargin: 10,
      asNavFor: '#js-image-slider',
      prevText: "",
      nextText: ""
    });

    $('#js-image-slider').flexslider({
      animation: "slide",
      controlNav: false,
      animationLoop: false,
      slideshow: false,
      sync: "#js-image-carousel",
      prevText: "",
      nextText: ""
    });

  // PRELOADER

	$(window).load(function(){
		$('#preloader').fadeOut('slow',function(){$(this).remove();});
	});

  // ISOTOPE GRID

  $(window).load(function(){

    // init Isotope
    var $grid = $('.project-grid').isotope({
      itemSelector: '.project-item',
      layoutMode: 'masonry'
    });

    // filter functions
    var filterFns = {};

    $filters = $('.filters-button-group').on( 'click', 'a', function() {
      var $this = $( this );
      var filterValue;
      if ( $this.is('.active') ) {
        // uncheck
        filterValue = '*';
      } else {
        filterValue = $this.attr('data-filter');
        $filters.find('.active').removeClass('active');
      }
      $this.toggleClass('active');
      // use filterFn if matches value
      filterValue = filterFns[ filterValue ] || filterValue;
      $grid.isotope({ filter: filterValue });
    });
  });

  // JQUERY COUNT UP

  $('.counter').each(function() {
    var $this = $(this),
        countTo = $this.attr('data-count');
        
    var numberWithCommas = function(x) {
      return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    
    var commas = numberWithCommas(countTo);

    $({ countNum: $this.text()}).animate({
      countNum: countTo
    },    


    {
      duration: 6000,
      easing:'linear',
      step: function() {
        $this.text(Math.floor(this.countNum));
      },
      complete: function() {
        $this.text(this.countNum);
        $this.text(commas);
      }
      
    });

  });

})(jQuery);
