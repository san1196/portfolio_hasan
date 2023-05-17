/*------------------------------------------------------------------
    Template Name:  Antic
    Version: 1.0
    Author: Techydevs
    Author Email: contact@techydevs.com

    [Table of Content]

    01 - PreLoader
    02 - Window Scrolling Active class in menu
    03 - Lightbox
    04 - wow Js Effect
    05 - CounterUp
    06 - Skills progress bar
    07 - Skills Owl carousel
    08 - Skills Owl carousel
    09 - Navbar scrolling
    10 - Google Maps
*/

(function ($) {
    "use strict";

    /*** =====================================
     * 01 - PreLoader
     * =====================================***/
    $(window).on('load', function(){
        $('.preloader').delay('500').fadeOut(2000);
    });

    /*** =====================================
     * 02 - Window Scrolling Active class in menu
     * =====================================***/
    $(window).on('scroll',function() {
        var scrollDistance = $(window).scrollTop();

        // Assign active class to nav links while scolling
        $('.page_scroll').on('each', function(i) {
            if ($(this).position().top <= scrollDistance) {
                $('.topbar .navbar-light .navbar-nav li').removeClass('actives');
                $('.topbar .navbar-light .navbar-nav li').eq(i).addClass('actives');
            }
        });
    }).scroll();

    $(document).on('ready', function () {
        /*** =====================================
         * 03 - Lightbox
         * =====================================***/
         if($(".lightbox").length) {
             $('.lightbox').topbox({
                 effect: 'fade',
             });
         }

        /*** =====================================
         * 04 - wow Js Effect
         * =====================================***/
        if($(".wow").length) {
            new WOW().init();
        }

        /*** =====================================
         * 05 - CounterUp
         * =====================================***/
         if($(".counterUp").length) {
             $('.counterUp').counterUp({
                 delay: 10,
                 time: 2000
             });
         }

        /*** =====================================
         * 06 - Skills progress bar
         * =====================================***/
         if($("#skills").length) {
             $('#html5').LineProgressbar({
                 percentage: 90,
                 fillBackgroundColor: '#0081ff',
                 backgroundColor: '#EEEEEE',
                 radius: '0px',
                 height: '5px',
                 width: '100%'
             });
             $('#css3').LineProgressbar({
                 percentage: 85,
                 fillBackgroundColor: '#0081ff',
                 backgroundColor: '#EEEEEE',
                 radius: '0px',
                 height: '5px',
                 width: '100%'
             });
             $('#javascript').LineProgressbar({
                 percentage: 77,
                 fillBackgroundColor: '#0081ff',
                 backgroundColor: '#EEEEEE',
                 radius: '0px',
                 height: '5px',
                 width: '100%'
             });
             $('#php').LineProgressbar({
                 percentage: 92,
                 fillBackgroundColor: '#0081ff',
                 backgroundColor: '#EEEEEE',
                 radius: '0px',
                 height: '5px',
                 width: '100%'
             });
             $('#python').LineProgressbar({
                 percentage: 80,
                 fillBackgroundColor: '#0081ff',
                 backgroundColor: '#EEEEEE',
                 radius: '0px',
                 height: '5px',
                 width: '100%'
             });
             $('#web_development').LineProgressbar({
                 percentage: 95,
                 fillBackgroundColor: '#0081ff',
                 backgroundColor: '#EEEEEE',
                 radius: '0px',
                 height: '5px',
                 width: '100%'
             });
             $('#odoo').LineProgressbar({
                 percentage: 85,
                 fillBackgroundColor: '#0081ff',
                 backgroundColor: '#EEEEEE',
                 radius: '0px',
                 height: '5px',
                 width: '100%'
             });
             $('#cloud').LineProgressbar({
                 percentage: 64,
                 fillBackgroundColor: '#0081ff',
                 backgroundColor: '#EEEEEE',
                 radius: '0px',
                 height: '5px',
                 width: '100%'
             });
         }

        /*** =====================================
         * 07 - Skills Owl carousel
         * =====================================***/
         if($(".client_slider").length) {
             $('.client_slider').owlCarousel({
                 autoHeight: true,
                 autoplay: false,
                 loop: true,
                 nav: false,
                 dots: true,
                 margin: 10,
                 slideSpeed: 400,
                 autoplayTimeout: 4000,
                 responsive: {
                     0: {
                         items: 1
                     },
                     600: {
                         items: 1
                     },
                     1000: {
                         items: 2
                     }
                 }
             });
         }

        /*** =====================================
         * 08 - Skills Owl carousel
         * =====================================***/
         if($(".cv_about_skills_slide").length) {
             $('.cv_about_skills_slide').owlCarousel({
                 items: 1,
                 autoHeight: true,
                 autoplay: true,
                 loop: true,
                 nav: false,
                 dots: true,
                 mouseDrag : false,
                 slideSpeed: 100,
                 animateIn: 'fadeInDown',
                 animateOut: 'fadeOutDown',
                 autoplayTimeout: 2000,
             });
         }

        /*** =====================================
         * 09 - Navbar scrolling
         * =====================================***/
        if($(".navbar").length) {
            $.scrollIt({
                upKey: 38,             // key code to navigate to the next section
                downKey: 40,           // key code to navigate to the previous section
                easing: 'linear',      // the easing function for animation
                scrollTime: 600,       // how long (in ms) the animation takes
                activeClass: 'active', // class given to the active nav element
                onPageChange: null,    // function(pageIndex) that is called when page is changed
                topOffset: 0           // offste (in px) for fixed top navigation
            });
        }

        /*** =====================================
         * 10 - Google Maps
         * =====================================***/
        if($("#map").length) {
            initMap('map', 40.712776, -74.005974, 'assets/images/map-marker.png');
        }

    });

})(jQuery);
