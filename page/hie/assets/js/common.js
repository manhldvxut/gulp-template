$(function() {

  /* ------------------
  TOP PAGE AND COMMON
  ---------------------*/

  // Menu
  // Open sub menu PC & SP
  var wWindow = $(window).outerWidth();
  $(window).resize(function () {
    wWindow = $(window).outerWidth();
  });

  // Open menu SP only
  $('.js-sp-navBtn').click(function() {
    $('body').toggleClass('fixed');
    $(this).toggleClass('active');
    $('.js-menu').toggleClass('active');
  });


  // Animation

  $(window).scroll(function() {
    // Scroll slide up out
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    $('.fadeup').each(function() {
      let elemPos = $(this).offset().top;
      if (scroll > elemPos - windowHeight + 100) {
        $(this).addClass('fadeup-in');
      }
    });

    $('.fadeinright').each(function() {
      let elemPos = $(this).offset().top;
      if (scroll > elemPos - windowHeight + 100) {
        $(this).addClass('fadeinright-in');
      }
    });

  });

  // Main Slider
  $('.js-main-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    swipeToSlide: false,
    fade: true,
    pauseOnFocus: false,
    pauseOnHover: false,
    arrows: false,
    dots: false
  });


  // Scroll to section
  $('a[href^="#"]').not("a[class*='carousel-control-']").click(function() {
    var href= $(this).attr("href");
    var hash = href == "#" || href == "" ? 'html' : href;
    var position = $(hash).offset().top - 100;
    $('body,html').stop().animate({scrollTop:position}, 1000);
    return false;
  });


});

