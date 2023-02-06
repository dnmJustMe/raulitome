// JavaScript Document
(function($) {
    
    $(window).on('load', function() {
    if ($('#preloader').length) {
      $('#preloader').delay(100).fadeOut('slow', function() {
        $(this).remove();
      });
    }
  });
    
    //slider banner texto
        if ($('.text-slider').length == 1) {
    var typed_strings = $('.text-slider-items').text();
    var typed = new Typed('.text-slider', {
      strings: typed_strings.split(','),
      typeSpeed: 100,
      loop: true,
      backDelay: 1000,
      backSpeed: 100
    });
  }
    //slider banner texto end
       })(jQuery);