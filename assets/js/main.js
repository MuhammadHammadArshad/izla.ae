(function ($) {
    "use strict";

    // preloader
    $(window).on('load', function(event) {
      $('.preloader').delay(500).fadeOut(500);
  });
  
  


    /*--
		 Mobile Menu 
	-----------------------------------*/       
    
    /*Variables*/
    var $offCanvasNav = $('.mobile-menu'),
        $offCanvasNavSubMenu = $offCanvasNav.find('.sub-menu');

    /*Add Toggle Button With Off Canvas Sub Menu*/
    $offCanvasNavSubMenu.parent().prepend('<span class="mobile-menu-expand"></span>');

    /*Close Off Canvas Sub Menu*/
    $offCanvasNavSubMenu.slideUp();

    /*Category Sub Menu Toggle*/
    $offCanvasNav.on('click', 'li a, li .mobile-menu-expand, li .menu-title', function(e) {
        var $this = $(this);
        if (($this.parent().attr('class').match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/)) && ($this.attr('href') === '#' || $this.hasClass('mobile-menu-expand'))) {
            e.preventDefault();
            if ($this.siblings('ul:visible').length) {
                $this.parent('li').removeClass('active-expand');
                $this.siblings('ul').slideUp();
            } else {
                $this.parent('li').addClass('active-expand');
                $this.closest('li').siblings('li').find('ul:visible').slideUp();
                $this.closest('li').siblings('li').removeClass('active-expand');
                $this.siblings('ul').slideDown();
            }
        }
    });
    
    $( ".sub-menu" ).parent( "li" ).addClass( "menu-item-has-children" );

  /*--
		sticky Menu
	-----------------------------------*/
	$(window).on('scroll', function () {
		var scroll = $(window).scrollTop();
		if (scroll < 245) {
			$(".header-bottom").removeClass("sticky");
		} else {
			$(".header-bottom").addClass("sticky");
		}
	});


	
    /*--
      Main Slider  
    -----------------------------------*/
	 function mainSlider() {
        var BasicSlider = $('.slider-active');
        BasicSlider.on('init', function (e, slick) {
            var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
            doAnimations($firstAnimatingElements);
        });

        BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
            var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
            doAnimations($animatingElements);
        });


        BasicSlider.slick({
            autoplay: true,
            autoplaySpeed: 7000,
            dots: false,
            fade: true,
            arrows: true,
            prevArrow: '<span class="prev"><i class="flaticon-left-arrow"></i></span>',
            nextArrow: '<span class="next"><i class="flaticon-right-arrow-angle"></i></span>',
            pauseOnHover: false,
            responsive: [
                {
                    breakpoint: 767,
                    settings: {
                        dots: true,
                        arrows: false
                    }
                }
            ]
        });


        function doAnimations(elements) {
            var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            elements.each(function () {
                var $this = $(this);
                var $animationDelay = $this.data('delay');
                var $animationType = 'animated ' + $this.data('animation');
                $this.css({
                    'animation-delay': $animationDelay,
                    '-webkit-animation-delay': $animationDelay
                });
                $this.addClass($animationType).one(animationEndEvents, function () {
                    $this.removeClass($animationType);
                });
            });
        }
    }
    mainSlider();


    
    /*--
      Hover Effect  
    -----------------------------------*/
        $('.service-content-wrapper .service-item').each(function() {
          $(this).hoverdir();
      });

   
    /*--
      Odometer  
    -----------------------------------*/
        $('.odometer').waypoint(
          function() {
              var odo = $(".odometer");
              odo.each(function() {
                  var countNumber = $(this).attr("data-count");
                  $(this).html(countNumber);
              });
          }, {
              offset: "80%",
              triggerOnce: true
          }
      );


    /*--
		team-active
	-----------------------------------*/ 
    $('.team-active, .service-active').slick({
        dots: false,
        infinite: true,
        speed: 800,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: '<span class="prev"><i class="flaticon-left-arrow"></i></span>',
        nextArrow: '<span class="next"><i class="flaticon-right-arrow-angle"></i></span>',
        responsive: [
            {
              breakpoint: 1200,
              settings: {
                slidesToShow: 3,
              }
            },
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 2,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 3000,
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 3000,
              }
            },
            {
              breakpoint: 576,
              settings: {
                slidesToShow: 1,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 3000,
              }
            }
        ]
    });


      /*--
      Isotope Project  
    -----------------------------------*/
     $('.container').imagesLoaded(function () {
        var $grid = $('.grid').isotope({
        // options
            transitionDuration: '1s'
        });
        
        // filter items on button click
        $('.case-study-menu ul').on( 'click', 'li', function() {
          var filterValue = $(this).attr('data-filter');
          $grid.isotope({ filter: filterValue });
        });
        
        //for menu active class
        $('.case-study-menu ul li').on('click', function (event) {
            $(this).siblings('.active').removeClass('active');
            $(this).addClass('active');
            event.preventDefault();
        });
    });



    /*--
      Slick Testimonial 
    -----------------------------------*/
    
    $('.testimonial-active').slick({
      dots: true,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 5000,
      speed: 1000,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      prevArrow: '<span class="prev"><i class="flaticon-left-arrow"></i></span>',
      nextArrow: '<span class="next"><i class="flaticon-right-arrow-angle"></i></span>',
  });
  
   /*--
		Blog Post Gallery
	-----------------------------------*/
	$('.blog-post-gallery').slick({
		dots: false,
		infinite: true,
		arrows: true,
		speed: 300,
		slidesToShow: 1,
		slidesToScroll: 1,
		prevArrow: '<span class="prev"><i class="flaticon-left-arrow"></i></span>',
    nextArrow: '<span class="next"><i class="flaticon-right-arrow-angle"></i></span>',
		responsive: [
		{
			breakpoint: 992,
			settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			dots: false
			}
		},
		{
			breakpoint: 768,
			settings: {
			slidesToShow: 1,
			slidesToScroll: 1
			}
		},
		{
			breakpoint: 576,
			settings: {
			slidesToShow: 1,
			slidesToScroll: 1
			}
		}
		]
	});

  /*--
		magnificPopup video view 
	-----------------------------------*/	
	$('.popup-video').magnificPopup({
		type: 'iframe'
	});

    
    /*--
      Magnific Popup  
    -----------------------------------*/
    $('.image-popup').magnificPopup({
        type: 'image',
        gallery:{
          enabled:true
        }
    });
    

 
    /*--
      WOW Js  
    -----------------------------------*/
    new WOW().init();
    
  
	
    
    
})(jQuery);