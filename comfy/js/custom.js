jQuery(document).ready(function($) {
    "use strict";
    //TIMELINE SLIDER
    if ($('.bxslider').length) {
        $('.bxslider').bxSlider({
            pagerCustom: '#bx-pager'
        });
    }


    //For Pretty Photo Validation
    $('a[data-rel]').each(function() {
        $(this).attr('rel', $(this).data('rel'));
    });


    //Pretty Photo
    if ($('.gallery').length) {
        $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({
            animation_speed: 'normal',
            theme: 'light_square',
            slideshow: 3000,
            autoplay_slideshow: true
        });
        $(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({
            animation_speed: 'fast',
            slideshow: 10000,
            hideflash: true
        });
    }


    //PROGRESS BAR
    if ($('.progressbars').length) {
        $(".progressbars").jprogress();
        $(".progressbarsone").jprogress({});
    }


    //PRODUCT DETAIL
    if ($('.product-detail-slider').length) {
        $(".product-detail-slider").owlCarousel({
            navigation: true,
            items: 3,
            loop: true,
            margin: 30,
            itemsCustom: false,
            itemsDesktop: [1199, 2],
            itemsDesktopSmall: [979, 2],
            itemsTablet: [768, 2],
            itemsTabletSmall: false,
            itemsMobile: [479, 1],
            singleItem: false,
            itemsScaleUp: false,
        });
    }


    //CHARITY SLIDER
    if ($('.charity-slider').length) {
        $(".charity-slider").owlCarousel({
            navigation: true,
            items: 3,
            loop: true,
            margin: 30,
            itemsCustom: false,
            itemsDesktop: [1199, 2],
            itemsDesktopSmall: [979, 2],
            itemsTablet: [768, 2],
            itemsTabletSmall: false,
            itemsMobile: [479, 1],
            singleItem: false,
            itemsScaleUp: false,
        });
    }


    //countdown
    if ($('#defaultCountdown').length) {
        var austDay = new Date();
        austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
        $('#defaultCountdown').countdown({
            until: austDay
        });
        $('#year').text(austDay.getFullYear());
    }


    //Side Bar Menu Js
    if ($('#cp_side-menu-btn, #cp-close-btn').length) {
        $('#cp_side-menu-btn, #cp-close-btn').on('click', function(e) {
            var $navigacia = $('body, #cp_side-menu'),
                val = $navigacia.css('right') === '410px' ? '0px' : '410px';
            $navigacia.animate({
                right: val
            }, 410)
        });
    }



    //TOP BAR SEARCH
    if ($('#search-push').length) {
        $('#search-push').on('click', function() {
            var $navigacia = $('#cp-slide-search');
            var $val = ($navigacia.width());
            if ($val == '0') {
                $val = '100%';
                $('#cp-slide-search form input[type="text"]').css({
                    padding: '0 30px',
                });
            } else {
                $val = '0';
                $('#cp-slide-search form input[type="text"]').css({
                    padding: '0',
                    transition: 'all ease-in-out 0.8s',
                });

            }
            $navigacia.animate({
                width: $val
            }, 600)
        });
    }


    //Audio
    if ($('audio').length) {
        $('audio').audioPlayer();
    }


    //SCROLL FOR SIDEBAR NAVIGATION
    if ($('#content-1').length) {
        $("#content-1").mCustomScrollbar({
            horizontalScroll: false
        });
        $(".content.inner").mCustomScrollbar({
            scrollButtons: {
                enable: true
            }
        });
    }


    //HOME BANNER
    if ($('#home-banner').length) {
        $("#home-banner").owlCarousel({
            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            autoPlay: true,
            autoplayTimeout: 1000,
            singleItem: true


        });
    }


    //CLIENT BANNER
    if ($('#client-banner').length) {
        $("#client-banner").owlCarousel({
            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            autoPlay: true,
            autoplayTimeout: 1000,
            singleItem: true


        });
    }


    //Event Grid
    if ($('.defaultCountdown').length) {
        var austDay = new Date();
        austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
        $('.defaultCountdown').countdown({
            until: austDay
        });
        $('#year').text(austDay.getFullYear());
    }


    //STORE BANNER
    if ($('.store-banner').length) {
        $(".store-banner").owlCarousel({
            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            autoPlay: true,
            autoplayTimeout: 1000,
            singleItem: true


        });
    }


    //PRODUCT BANNER
    if ($('#product-banner').length) {
        $("#product-banner").owlCarousel({
            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            autoPlay: true,
            autoplayTimeout: 1000,
            singleItem: true


        });
    }


    //STORE BANNER
    if ($('.store-banner').length) {
        $(".store-banner").owlCarousel({
            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            autoPlay: true,
            autoplayTimeout: 1000,
            singleItem: true
        });
    }


    //COUNTER 
    if ($('.countdown').length) {
        $('.countdown').final_countdown({
            'start': 1362139200,
            'end': 1388461320,
            'now': 1387461319
        });
    }
	
	//Masnory Blog
    $('#blog-masonrywrap li div div a img').load(function() {
        attWorkGrid_1();
    });



    //Google Map on Contact Page
    if ($('#map_contact_1').length) {
        var map;
        var myLatLng = new google.maps.LatLng(40.712784, -74.005941);
        //Initialize MAP
        var myOptions = {
            zoom: 12,
            center: myLatLng,
            //disableDefaultUI: true,
            zoomControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: false,
            styles: [{
                stylers: [{
                    hue: '#2b2b2b'
                }, {
                    saturation: -100,
                }, {
                    lightness: 10
                }]
            }],
        }
        map = new google.maps.Map(document.getElementById('map_contact_1'), myOptions);
        //End Initialize MAP
        //Set Marker
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            map: map,
            icon: 'images/map-icon.png'
        });
        marker.getPosition();
        //End marker

        //S// content: '',
        // position: myLatLng
        //});
        //infowindow.open(map);
    }



    //Google Map on Contact Page
    if ($('#map_contact_2').length) {
        var map;
        var myLatLng = new google.maps.LatLng(40.712784, -74.005941);
        //Initialize MAP
        var myOptions = {
            zoom: 12,
            center: myLatLng,
            //disableDefaultUI: true,
            zoomControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: false,
            styles: [{
                stylers: [{
                    hue: '#2b2b2b'
                }, {
                    saturation: -100,
                }, {
                    lightness: 10
                }]
            }],
        }
        map = new google.maps.Map(document.getElementById('map_contact_2'), myOptions);
        //End Initialize MAP
        //Set Marker
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            map: map,
            icon: 'images/map-icon.png'
        });
        marker.getPosition();
        //End marker

        //S// content: '',
        // position: myLatLng
        //});
        //infowindow.open(map);
    }


    //Accordion 
    if ($('.accordion_cp').length) {
        $.fn.slideFadeToggle = function(speed, easing, callback) {
            return this.animate({
                opacity: 'toggle',
                height: 'toggle'
            }, speed, easing, callback);
        };
        $('.accordion_cp').accordion({
            defaultOpen: 'section1',
            cookieName: 'nav',
            speed: 'slow',
            animateOpen: function(elem, opts) { //replace the standard slideUp with custom function
                elem.next().stop(true, true).slideFadeToggle(opts.speed);
            },
            animateClose: function(elem, opts) { //replace the standard slideDown with custom function
                elem.next().stop(true, true).slideFadeToggle(opts.speed);
            }
        });
    }



    //EVENT CALENDAR
    if ($('#calendar-2').length) {
        $('#calendar-2').fullCalendar({
            defaultDate: '2016-06-12',
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: [{
                title: 'School of the Prophets and learn',
                start: '2016-08-01'
            }, {
                title: 'Long Event',
                start: '2016-08-07',
                end: '2016-06-10'
            }, {
                id: 999,
                title: 'Single Life Workshop 3.5-Day Intensive',
                start: '2016-08-09T16:00:00'
            }, {
                title: 'Open Heavens Leaders School',
                start: '2016-09-12T10:30:00',
                end: '2016-06-12T12:30:00'
            }, {
                title: 'Love After Marriage',
                start: '2016-08-12T14:30:00'
            }, ]
        });
    }


    //Event Calendar
    if ($('#calendar').length) {
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        $('#calendar').fullCalendar({
            editable: true,

        });
    }


    //JQuery Load on Pop Up Show
    if ($('#popup-overlay').length) {
        $('#popup-overlay').fadeIn(500, function() {
            $('#popup').show();
            $('#popup').css({
                "top": "200px",
                "opacity": "1",
                "visibility": "visible"
            });
        });

        $("#popup-close").on('click', function() {
            $('#popup-overlay').css({
                "display": "none",
                "visibility": "hidden"
            });

        });
    }
    //Function End
});