(function ($) {
    "use strict";


    jQuery(document).ready(function($){

        //======================================
        //============= YTPlayer ===============
        //======================================
        $(function () {
            // $("#bgndVideo").YTPlayer();
        })
        //======================================
        //==== cart & searchbar function =======
        //======================================
        $(function(){
            $('.part-cart').css({ 'top': '80px' });
            $('.search-bar-2').hide();

            $('.cart').on('click', function(){
                $('.search-bar-2').hide()
                $('.part-cart').toggle(100).animate({ 'top': '60px' });
            }).stop()

            $('.search-button').on('click', function () {
                $('.part-cart').hide();
                
                $('.search-bar-2').toggle(100);
            }).stop()
            $('.item-remove').on('click', function () {
                $(this).parent().parent().parent().remove();
                chh();
            });
        });

 
        
        /*--------------------
            wow js init
        ---------------------*/
        new WOW().init();



        //======================================
        //======== Testimonial slider ==========
        //======================================
        $(function () {

            var testimonialCarousel = $('.testimonial-slider');
            testimonialCarousel.owlCarousel({
                loop: true,
                dots: true,
                dotData: true,
                startPosition: 2,
                nav: false,
                item: 1,
                margin: 30,
                smartSpeed: 3000,
                navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 1
                    },
                    960: {
                        items: 2
                    },
                    1200: {
                        items: 2
                    },
                    1920: {
                        items: 2
                    }
                }
            });

        });
        
        /*=======================================
           feature slider
       ========================================*/
        var testimonialCarousel = $('.feature-slider');
        testimonialCarousel.owlCarousel({
            loop: true,
            dots: false,
            nav: false,
            margin: 30,
            rewind: true,
            navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                960: {
                    items: 1
                },
                1200: {
                    items: 1
                },
                1920: {
                    items: 1
                }
            }
        }); 

        //======================================
        //======== Testimonial slider ==========
        //======================================
        $(function () {

            var brandCarousel = $('.brand-slider');
            brandCarousel.owlCarousel({
                loop: true,
                dots: true,
                dotData: true,
                startPosition: 2,
                nav: false,
                margin: 30,
                item: 1,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 3
                    },
                    960: {
                        items: 4
                    },
                    1200: {
                        items: 4
                    },
                    1920: {
                        items: 4
                    }
                }
            });

        });


        //======================================
        //======== Testimonial slider ==========
        //======================================
        $(function () {

            var bannerCarousel = $('.banner-slider');
            bannerCarousel.owlCarousel({
                loop: true,
                dots: true,
                dotData: true,
                startPosition: 2,
                nav: false,
                margin: 30,
                item: 1,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                animateOut: 'slideOutDown',
                animateIn: 'zoomIn',
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 1
                    },
                    960: {
                        items: 1
                    },
                    1200: {
                        items: 1
                    },
                    1920: {
                        items: 1
                    }
                }
            });

        });

        //======================================
        //========== Smooth scroll =============
        //======================================
        $('.mainmenu .nav-item a').on('click', function (e) {

            var anchor = $(this).attr('href');
            var hash = anchor.slice(0, 1);

            if ('#' == hash) {
                e.preventDefault();
                var top = $(anchor).offset().top;
                $(this).parent().addClass('active').siblings().removeClass('active');
                $('html, body').animate({
                    scrollTop: $(anchor).offset().top
                }, 1000);
            }

        });


        //======================================
        //========== magnificPopup video ============
        //======================================
        $('.venobox').magnificPopup({
            type: 'video'
        });
        $('.image-popup').magnificPopup({
            type: 'image'
        });
        $(document).on('click', '.back-to-top button', function () {
            $('html,body').animate({
                scrollTop: 0
            }, 3000);
        });
 
    });



    //define variable for store last scrolltop
    var lastScrollTop = '';
    
    $(window).on('scroll', function () {
        //back to top show/hide
        var ScrollTop = $('.scroll-to-top');
       if ($(window).scrollTop() > 300) {
           ScrollTop.fadeIn(1000);
       } else {
           ScrollTop.fadeOut(1000);
       }
       /*--------------------------
        sticky menu activation
       -------------------------*/
        var st = $(this).scrollTop();
        var mainMenuTop = $('.header-bottom');
        if ($(window).scrollTop() > 300) {
            if (st > lastScrollTop) {
                // hide sticky menu on scrolldown 
                mainMenuTop.removeClass('nav-fixed');
            } else {
                // active sticky menu on scrollup 
                mainMenuTop.addClass('nav-fixed');
            }
        } else {
            mainMenuTop.removeClass('nav-fixed ');
        }
        lastScrollTop = st;
       
    });
           


    $(window).on('load',function(){
        //======================================
        //============= Preloader ==============
        //======================================
        var preLoder = $(".preloader");
        preLoder.fadeOut(1000);
       
    });

    /*---------------------------
    Jquery Ui Slider
---------------------------*/
    var power = $('#power');
    var diskspace = $('#diskspace');
    var ram = $('#ram');
    var brandwidth = $('#brandwidth');
/*
    $('#rgslider').slider({
        range: "min",
        value: 20,
        step: 20,
        slide: function (event, ui) {
            if (20 == ui.value) {
                power.text('02');
                diskspace.text('100');
                ram.text('04');
                brandwidth.text('3000');
            } else if (40 == ui.value) {
                power.text('04');
                diskspace.text('200');
                ram.text('06');
                brandwidth.text('4000');
            } else if (60 == ui.value) {
                power.text('06');
                diskspace.text('300');
                ram.text('08');
                brandwidth.text('5000');

            } else if (80 == ui.value) {
                power.text('08');
                diskspace.text('400');
                ram.text('08');
                brandwidth.text('6000');
            } else {
                power.text('10');
                diskspace.text('500');
                ram.text('10');
                brandwidth.text('7000');
            }
        }
    });
    */

    //======================================
    //============= Google Map =============
    //======================================


    /*

    $(window).on('load', function initMap() {
        var mapId = document.getElementById('map');
        var dataLat =  mapId.getAttribute('data-latitude');
        var dataLong =  mapId.getAttribute('data-longitude');

        var map = new google.maps.Map(document.getElementById('map'), dataLat , dataLong, {
            center: {
                // lat: 23.884012,
                // lng: 90.388373
                lat: dataLat,
                lng: dataLong
            },
            zoom: 14
        });
    });
    */


}(jQuery));	







