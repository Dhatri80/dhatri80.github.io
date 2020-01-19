(function ($) {
  "use strict";

  // Preloader
  $(window).on('load', function () {
    if ($('#preloader').length) {
      $('#preloader').delay(100).fadeOut('slow', function () {
        $(this).remove();
      });
    }
  });

  // Back to top button
  /*$(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });*/
  $('.back-to-top').click(function(){
    $('html, body').animate({scrollTop : 0},1500, 'easeInOutExpo');
    return false;
  });

  // Initiate the sal.js animation library
    sal({threshold: 0.4 , once: false , disable: true});
  
 /*   $('.drop-down-list').css('background','#fff');
	  $('.drop-down-list-entry').css('color','#000');
	  $('.drop-down-list-entry').css('background','#fff');
	  $('.drop-down-list-entry').css('font-weight','bold');
	  $('.drop-down-list-entry').hover(
        function() {
        var $this = $(this);
        $this.css('background','#f0f0f0');
		$this.css('color','#000');
		},
		function() {
        var $this = $(this);
        $this.css('background','#fff');
		$this.css('color','#000');
		});*/

  // Header scroll class
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('#header').addClass('header-scrolled');
    } else {
      $('#header').removeClass('header-scrolled');
    }
  });
 
  // Header drop-down scroll class
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      document.getElementById("drop-down-list-services").style.top="66px";
	  document.getElementById("drop-down-list-investors").style.top="66px";
	  document.getElementById("drop-down-list-employment").style.top="66px";
	  
/*	  $('.drop-down-list').css('background','#000');
	  $('.drop-down-list-entry').css('color','#fff');
	  $('.drop-down-list-entry').css('background','#000');
	  $('.drop-down-list-entry').css('font-weight','normal');
	  $('.drop-down-list-entry').hover(
        function() {
        var $this = $(this);
        $this.css('background','#111');
		$this.css('color','#fff');
		},
		function() {
        var $this = $(this);
        $this.css('background','#000');
		$this.css('color','#fff');
		});*/
	  
	  
    } else {
      document.getElementById("drop-down-list-services").style.top="44px";
	  document.getElementById("drop-down-list-investors").style.top="44px";
	  document.getElementById("drop-down-list-employment").style.top="44px";
	  
/*	  $('.drop-down-list').css('background','#fff');
	  $('.drop-down-list-entry').css('color','#000');
	  $('.drop-down-list-entry').css('background','#fff');
	  $('.drop-down-list-entry').css('font-weight','bold');
	  $('.drop-down-list-entry').hover(
        function() {
        var $this = $(this);
        $this.css('background','#f0f0f0');
		$this.css('color','#000');
		},
		function() {
        var $this = $(this);
        $this.css('background','#fff');
		$this.css('color','#000');
		});*/
	  
    }
  });

  if ($(window).scrollTop() > 100) {
    $('#header').addClass('header-scrolled');
  }
  

  // Smooth scroll for the navigation and links with .scrollto classes
  $('.main-nav a, .mobile-nav a, .scrollto, .useful-links a').on('click', function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {
        var top_space = 0;

        if ($('#header').length) {
          top_space = $('#header').outerHeight();

          if (! $('#header').hasClass('header-scrolled')) {
            top_space = top_space - 40;
          }
        }

        $('html, body').animate({
          scrollTop: target.offset().top - top_space
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.main-nav, .mobile-nav').length) {
          $('.main-nav .active, .mobile-nav .active').removeClass('active');
          $(this).closest('li').addClass('active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('.mobile-nav-overly').fadeOut();
        }
        return false;
      }
    }
  });

  // Navigation active state on scroll
  var nav_sections = $('section');
  var main_nav = $('.main-nav, .mobile-nav');
  var main_nav_height = $('#header').outerHeight();

  $(window).on('scroll', function () {
    var cur_pos = $(this).scrollTop();
  
    nav_sections.each(function() {
      var top = $(this).offset().top - main_nav_height,
          bottom = top + $(this).outerHeight();
  
      if (cur_pos >= top && cur_pos <= bottom) {
        main_nav.find('li').removeClass('active');
        main_nav.find('a[href="#'+$(this).attr('id')+'"]').parent('li').addClass('active');
      }
    });
  });


  // Testimonials carousel (uses the Owl Carousel library)
  $(".testimonials-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    items: 1
  });

  // Clients carousel (uses the Owl Carousel library)
  $(".clients-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    responsive: { 0: { items: 2 }, 768: { items: 4 }, 900: { items: 5 }
    }
  });
  
  // Clients carousel & Testimonials carousel navigation buttons
  var owl = $(".owl-carousel");
  owl.owlCarousel();
  
  $(".clients-next , .testimonials-next").click(function(){
    owl.trigger('next.owl.carousel');
  })
  $(".clients-prev , .testimonials-prev").click(function(){
    owl.trigger('prev.owl.carousel', [300]);
  })
  
  
  
  
  
  
  
  
  

})(jQuery);

