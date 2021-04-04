/*-----------------------------------------------------------------------------------

  Template Name: Asbab eCommerce HTML5 Template.
  Template URI: #
  Description: Asbab is a unique website template designed in HTML with a simple & beautiful look. There is an excellent solution for creating clean, wonderful and trending material design corporate, corporate any other purposes websites.
  Author: HasTech
  Author URI: https://themeforest.net/user/hastech/portfolio
  Version: 1.0

-----------------------------------------------------------------------------------*/

/*-------------------------------
[  Table of contents  ]
---------------------------------
    01. jQuery MeanMenu
    02. wow js active
    03. Product  Masonry (width)
    04. Sticky Header
    05. ScrollUp
    06. Search Bar
    07. Shopping Cart Area
    08. Filter Area
    09. Toogle Menu   
    10. Customer Menu
    11. Menu 
    12. Menu Dropdown
    13. Overlay Close
    14. Testimonial Image Slider As Nav
    15. Brand Area
    16. Price Slider Active
    17. Accordion
    18. Ship to another
    19. Payment credit card    
    20 Slider Activations
    21 ajax load form login
    22 animation input form
    23 check input exist in form login
    24 drop down header
    26 drop down icon in back ground website (hoa-dao)
    27 show desciption more and opacity outside
 */


/*--------------------------------
[ End table content ]
-----------------------------------*/


(function($) {
    'use strict';


/*-------------------------------------------
    01. jQuery MeanMenu
--------------------------------------------- */
    
    $('.mobile-menu nav').meanmenu({
        meanMenuContainer: '.mobile-menu-area',
        meanScreenWidth: "991",
        meanRevealPosition: "right",
    });

/*-------------------------------------------
    02. wow js active
--------------------------------------------- */

    new WOW().init();


/*-------------------------------------------
    03. Product  Masonry (width)
--------------------------------------------- */ 

    $('.htc__product__container').imagesLoaded( function() {
      
        // filter items on button click
        $('.product__menu').on( 'click', 'button', function() {
          var filterValue = $(this).attr('data-filter');
          $grid.isotope({ filter: filterValue });
        }); 
        // init Isotope
        var $grid = $('.product__list').isotope({
          itemSelector: '.single__pro',
          percentPosition: true,
          transitionDuration: '0.7s',
          masonry: {
            // use outer width of grid-sizer for columnWidth
            columnWidth: '.single__pro',
          }
        });

    });

    $('.product__menu button').on('click', function(event) {
        $(this).siblings('.is-checked').removeClass('is-checked');
        $(this).addClass('is-checked');
        event.preventDefault();
    });



/*-------------------------------------------
    04. Sticky Header
--------------------------------------------- */ 
    var win = $(window);
    var sticky_id = $("#sticky-header-with-topbar");
        win.on('scroll',function() {    
        var scroll = win.scrollTop();
        if (scroll < 245) {
        sticky_id.removeClass("scroll-header");
        }else{
            sticky_id.addClass("scroll-header");
        }
    });

/*--------------------------
    05. ScrollUp
---------------------------- */
    $.scrollUp({
        scrollText: '<i class="zmdi zmdi-chevron-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });


/*------------------------------------    
    06. Search Bar
--------------------------------------*/ 
    
    $( '.search__open' ).on( 'click', function () {
        $( 'body' ).toggleClass( 'search__box__show__hide' );
        return false;
    });

    $( '.search__close__btn .search__close__btn_icon' ).on( 'click', function () {
        $( 'body' ).toggleClass( 'search__box__show__hide' );
        return false;
    });


/*------------------------------------    
    07. Shopping Cart Area
--------------------------------------*/

    $('.cart__menu').on('click', function(e) {
        e.preventDefault();
        $('.shopping__cart').addClass('shopping__cart__on');
        $('.body__overlay').addClass('is-visible');

    });

    $('.offsetmenu__close__btn').on('click', function(e) {
        e.preventDefault();
        $('.shopping__cart').removeClass('shopping__cart__on');
        $('.body__overlay').removeClass('is-visible');
    });


/*------------------------------------    
    08. Filter Area
--------------------------------------*/

    $('.filter__menu').on('click', function(e) {
        e.preventDefault();
        $('.filter__wrap').addClass('filter__menu__on');
        $('.body__overlay').addClass('is-visible');

    });

    $('.filter__menu__close__btn').on('click', function(e) {
        e.preventDefault();
        $('.filter__wrap').removeClass('filter__menu__on');
        $('.body__overlay').removeClass('is-visible');
    });


/*------------------------------------    
    09. Toogle Menu
--------------------------------------*/

    $('.toggle__menu').on('click', function(e) {
        e.preventDefault();
        $('.offsetmenu').addClass('offsetmenu__on');
        $('.body__overlay').addClass('is-visible');

    });

    $('.offsetmenu__close__btn').on('click', function(e) {
        e.preventDefault();
        $('.offsetmenu').removeClass('offsetmenu__on');
        $('.body__overlay').removeClass('is-visible');
    });


/*------------------------------------    
    10. Customer Menu
--------------------------------------*/

    $('.user__menu').on('click', function(e) {
        e.preventDefault();
        $('.user__meta').addClass('user__meta__on');
        $('.body__overlay').addClass('is-visible');

    });

    $('.offsetmenu__close__btn').on('click', function(e) {
        e.preventDefault();
        $('.user__meta').removeClass('user__meta__on');
        $('.body__overlay').removeClass('is-visible');
    });



/*------------------------------------    
    11. Menu 
--------------------------------------*/

    $('.menu__click').on('click', function(e) {
        e.preventDefault();
        $('.off__canvars__wrap').addClass('off__canvars__wrap__on');
        $('.body__overlay').addClass('is-visible');
        $('body').addClass('off__canvars__open');
        $(this).hide();
    });

    $('.menu__close__btn').on('click', function() {
        $('.off__canvars__wrap').removeClass('off__canvars__wrap__on');
        $('.body__overlay').removeClass('is-visible');
        $('body').removeClass('off__canvars__open');
        $('.menu__click').show();
    });


/*------------------------------------    
    12. Menu Dropdown
--------------------------------------*/
    function offCanvasMenuDropdown(){

        $('.off__canvars__dropdown-menu').hide();

        $('.off__canvars__dropdown > a').on('click', function(e){
        e.preventDefault();

        $(this).find('i.zmdi').toggleClass('zmdi-chevron-up');
        $(this).siblings('.off__canvars__dropdown-menu').slideToggle();
        return false;
        });
    }
    offCanvasMenuDropdown();


/*------------------------------------    
    13. Overlay Close
--------------------------------------*/

    $('.body__overlay').on('click', function() {
        $(this).removeClass('is-visible');
        $('.offsetmenu').removeClass('offsetmenu__on');
        $('.shopping__cart').removeClass('shopping__cart__on');
        $('.filter__wrap').removeClass('filter__menu__on');
        $('.user__meta').removeClass('user__meta__on');
        $('.off__canvars__wrap').removeClass('off__canvars__wrap__on');
        $('body').removeClass('off__canvars__open');
        $('.menu__click').show();
    });


/*---------------------------------------------------
    14. Testimonial Image Slider As Nav
---------------------------------------------------*/

    $('.ht__testimonial__activation').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    swipeToSlide: true,
    dots: false,
    centerMode: true,
    focusOnSelect: true,
    centerPadding: '10px',
    responsive: [
      {
        breakpoint: 600,
        settings: {
          dots: false,
          slidesToShow: 1,
          slidesToScroll: 1,  
          centerPadding: '10px',
          }
      },
      {
        breakpoint: 320,
        settings: {
          autoplay: true,
          dots: false,
          slidesToShow: 1,
          slidesToScroll: 1,
          centerMode: false,
          focusOnSelect: false,
          }
      }
    ]
    });


/*-----------------------------------------------
    15. Brand Area
-------------------------------------------------*/

    $('.brand__list').owlCarousel({
      loop: true,
      margin:0,
      nav:false,
      autoplay: true,
      autoplayTimeout: 10000,
      items:5,
      dots: false,
      lazyLoad: true,
      responsive: {
        0: {
          items: 2,
        },
        767: {
          items: 4,
        },
        991: {
          items: 5,
        }
      }
    });



/*-------------------------------
    16. Price Slider Active
--------------------------------*/

    $("#slider-range").slider({
          range: true,
          min: 10,
          max: 5000,
          values: [110, 1000],
          slide: function(event, ui) {
              $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
          }
    });
    $("#amount").val("$" + $("#slider-range").slider("values", 0) +
      " - $" + $("#slider-range").slider("values", 1));




/*---------------------------------------------------
    17. Accordion
---------------------------------------------------*/

    function emeAccordion(){
        $('.accordion__title')
          .siblings('.accordion__title').removeClass('active')
          .first().addClass('active');
        $('.accordion__body')
          .siblings('.accordion__body').slideUp()
          .first().slideDown();
        $('.accordion').on('click', '.accordion__title', function(){
          $(this).addClass('active').siblings('.accordion__title').removeClass('active');
          $(this).next('.accordion__body').slideDown().siblings('.accordion__body').slideUp();
        });
        };
    emeAccordion();


/*---------------------------------------------------
    18. Ship to another
---------------------------------------------------*/

    function shipToAnother(){
        var trigger = $('.ship-to-another-trigger'),
          container = $('.ship-to-another-content');
        trigger.on('click', function(e){
          e.preventDefault();
          container.slideToggle();
        });
    };
    shipToAnother();



/*---------------------------------------------------
    19. Payment credit card
---------------------------------------------------*/

    function paymentCreditCard(){
        var trigger = $('.paymentinfo-credit-trigger'),
        container = $('.paymentinfo-credit-content');
        trigger.on('click', function(e){
        e.preventDefault();
        container.slideToggle();
    });
    };
    paymentCreditCard();


/*-----------------------------------------------
    20 Slider Activations
-------------------------------------------------*/

    if ($('.slider__activation__wrap').length) {
        $('.slider__activation__wrap').owlCarousel({
        loop: true,
        margin:0,
        nav:true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        smartSpeed: 1000,
        autoplay: false,
        navText: [ '<i class="icon-arrow-left icons"></i>', '<i class="icon-arrow-right icons"></i>' ],
        autoplayTimeout: 10000,
        items:1,
        dots: false,
        lazyLoad: true,
        responsive: {
          0: {
            items: 1,
          },
          767: {
            items: 1,
          },
          991: {
            items: 1,
          }
        }
        });
    }




})(jQuery);
/*-----------------------------------------------
    21 ajax load form login
-------------------------------------------------*/

$(document).ready(function () {
    $(".ConfirmButton_confirmButton").focus(function (event) {
        name = $("#email-input").val();
        $.post("./public/login/checkuser/",{"nameForm" : name},function (data) {
            $(".result-name").html(data);
            $(".ConfirmButton_confirmButton").css("display","none");
        })
    })
    //   confirm
    //     $(".ConfirmButton").click(function (event) {
    //         emailinput = $("#email-input").val();
    //         passwordinput = $("#password-input").val();
    //         $.post("./public/register/checkAccExist",{"email-input" : emailinput,"password-input" : passwordinput},function (data) {
    //             $(".result-check").html(data);
    //         })
    //     })
})
/*-----------------------------------------------
    22 animation input form
-------------------------------------------------*/
$(document).ready(function () {

    $(".Input-module_input__1IPSm").focus(function () {
        $(".Input-module_label__29rQT").addClass("fix_email1");
    })
    $(".Input-module_input__1IPSm").focusout(function () {
        if (!$(this).val()){
            $(".Input-module_label__29rQT").removeClass("fix_email1");
        }
    })
//input user

})
$(document).ready(function () {
    $(".Input-module_input__pass").focus(function () {
        $(".Input-module_label__pass").addClass("fix_pass1");
    })
    $(".Input-module_input__pass").focusout(function () {
        if (!$(this).val()){
            $(".Input-module_label__pass").removeClass("fix_pass1");
        }
    })
})
/*-----------------------------------------------
    23 check input exist in form login
-------------------------------------------------*/
$(document).ready(function () {
    //    check input email
    if ($("#email-input") != null ) {
        $(".Input-module_label__29rQT").addClass("fix_email1");
    }
    //    check input password
    if ($("#password-input") != null ) {
        $(".Input-module_label__pass").addClass("fix_pass1");
    }
})
/*-----------------------------------------------
    24 drop down header
-------------------------------------------------*/
$(document).ready(function () {
    $(".header__account").hover(function () {
        if ($(".dropdown-user").css("display") == "none" ) {
            $(".dropdown-user").css("display","block");
        } else {
            $(".dropdown-user").css("display","none");
        }
    })
})
/*-----------------------------------------------
    25 list district with ajax
-------------------------------------------------*/

$(document).ready(function () {
    $("#province").change(function () {
        province = $("#province").val();
        $.post("./public/payment/getDistrict",{"get_province" : province},function (data) {
            $("#District").html(data);
        })
    })
})
//

$(document).ready(function () {
    $(".close-scrolling").click(function () {
        $(".scroll-left").css("display","none");
    })
})
//
/*-----------------------------------------------
    27 show desciption more and opacity outside
-------------------------------------------------*/

$( document ).ready(function() {
    $('.see__more__p').click(function () {
        $('.blur1').addClass("opacity__outside");
        $('#closeDetail').addClass("ShowCloseDetail");
        $('body').css({'overflow':'hidden'});
        $('.product__detail__outside').addClass("showDetailProduct");
        $('.show__main__description').addClass("show__main__description__add");
    })
//
    $('#closeDetail').click(function(){
        $('.blur1').removeClass("opacity__outside");
        $('#closeDetail').removeClass("ShowCloseDetail");
        $('body').css({'overflow':'scroll'});
        $('.product__detail__outside').removeClass("showDetailProduct");
        $('.show__main__description').removeClass('show__main__description__add');
    })
});
/*-----------------------------------------------
    28 wait loader web page
-------------------------------------------------*/
jQuery( window ).on("load",function() {
    $(".loder").fadeOut("slow");
});