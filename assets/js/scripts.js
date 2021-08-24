jQuery( document ).ready( function( $ ) {
    // Smooth scroll

    $('.smooth[href*="#"], .smooth a[href*="#"]').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

            var target = jQuery(this.hash);
            target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                jQuery('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });

    // Scroll header

    $(function() {
        //caches a jQuery object containing the header element
        var header = $("header");
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 1) {
                header.addClass("scrolled");
            } else {
                header.removeClass("scrolled");
            }
        });
        if ($(window).scrollTop() >= 1) {
            header.addClass("scrolled");
        }
    });

    // Responsive menu

    $( ".mobile-btn, .mobile-close" ).click(function() {
        $(this).toggleClass('active');
        $('.mobile-menu').toggleClass('active');
    });

    // Pricing fix

    $( ".pricing-btn-1" ).click(function(e) {
        e.preventDefault();
        $('.pricing-btn').removeClass('active');
        $(this).addClass('active');
        $('.pricing-text').removeClass('active');
        $('.pricing-text-1').addClass('active');
    });

    $( ".pricing-btn-2" ).click(function(e) {
        e.preventDefault();
        $('.pricing-btn').removeClass('active');
        $(this).addClass('active');
        $('.pricing-text').removeClass('active');
        $('.pricing-text-2').addClass('active');
    });

    // Logo carousel

    $(".labels").owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        dots: false,
        items: 1,
        autoHeight: true,
        autoplay: true,
        autoplayTimeout: 2000
    });

    // Hover menu

    /*

    $('.hover-menu-btn')
        .mouseenter(function() {
            $('.hover-menu').addClass('active');
        })
        .mouseleave(function() {
            $('.hover-menu').removeClass('active');
        });

    $('.hover-menu')
        .mouseenter(function() {
            $('.hover-menu').addClass('active');
        })
        .mouseleave(function() {
            $('.hover-menu').removeClass('active');
        });

     */
// reCAPTCHA front-end validation
	$("form").submit(function(event) {
		var recaptcha = $("#g-recaptcha-response").val();
		if (recaptcha === "") {
			event.preventDefault();
			$("#captcha_error").html("Please check the recaptcha");
   		} else {
			if (grecaptcha.getResponse() === '') {                            
      		event.preventDefault();
      		$("#captcha_error").html("Please check the recaptcha");
    	} else {
			$("#captcha_error").html("");
		}
		}
	});
// Selectize.Js
	 $(document).ready(function () {
      $('select').selectize({
          sortField: 'text'
      });
  });
});

