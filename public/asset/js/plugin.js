jQuery(function () {
    'use strict';

    //
    jQuery(window).scroll(function () {
        if (jQuery(window).scrollTop() >= 500) {
            jQuery('.head-home .main-nav,.head-video').addClass('stick');
        } else {
            jQuery('.head-home .main-nav,.head-video').removeClass('stick');
        }
    });


    // Mobile Menu
    jQuery('.mobile-nav-list .sub-menu').slideUp();
    jQuery('.mobile-nav-list .menu-item > i').on('click', function () {
        if (jQuery(this).hasClass('open')) {
            jQuery(this).siblings('.sub-menu').slideUp();
            jQuery(this).removeClass('open');
        } else {
            jQuery(this).parent().siblings(".menu-item").find(".sub-menu").slideUp();
            jQuery(this).parent().siblings(".menu-item").find("i").removeClass("open");
            jQuery(this).siblings('.sub-menu').slideDown();
            jQuery(this).addClass('open')
        }
    });
    jQuery('.nav-btn').on('click', function () {
        jQuery('.mobile-nav-list, .nav-overlay').addClass('trans-none');
        return false;
    });
    jQuery('.nav-overlay').on('click', function () {
        jQuery('.mobile-nav-list, .nav-overlay').removeClass('trans-none')
    });


    // Check if Rtl
    var rtlVal = false;
    jQuery('html').attr("dir") == "ltr" ? rtlVal = false : rtlVal = true;
    //
    var mainCarousel = jQuery('.main-slider').owlCarousel({
        rtl: rtlVal,
        margin: 0,
        smartSpeed: 1500,
        nav: true,
        navText: ['<i class="fas fa-long-arrow-alt-left"></i>', '<i class="fas fa-long-arrow-alt-right"></i>'],
        dots: false,
        loop: true,
        //autoplay: true,
        mouseDrag: true,
        touchDrag: true,
        rewind: true,
        autoplayHoverPause: true,
        video: true,
        autoHeight: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            992: {
                items: 1
            }
        }
    });
    mainCarousel.on('translate.owl.carousel', function (e) {
        jQuery('.owl-item video').each(function () {
            this.pause();
            this.currentTime = 0;
        });
    });
    mainCarousel.on('translated.owl.carousel', function (e) {
        if (jQuery('.owl-item.active video').length) {
            jQuery('.owl-item.active video').get(0).play();
        }

    });


    //
    jQuery('.projectsCarousel').owlCarousel({
        rtl: rtlVal,
        margin: 0,
        smartSpeed: 1500,
        nav: true,
        dots: false,
        loop: true,
        autoplay: true,
        mouseDrag: true,
        touchDrag: true,
        animateOut: 'slideOutDown',
        animateIn: 'flipInX',
        //rewind: true,
        responsive: {
            0: {
                items: 1,
                navText: ['<i class="fas fa-long-arrow-alt-left"></i>', '<i class="fas fa-long-arrow-alt-right"></i>'],
            },
            768: {
                items: 1,
                navText: ['<i class="fas fa-long-arrow-alt-left"></i>', '<i class="fas fa-long-arrow-alt-right"></i>'],
            },
            992: {
                items: 1,

                navText: ['<i class="fas fa-long-arrow-alt-up"></i>', '<i class="fas fa-long-arrow-alt-down"></i>'],

            }
        }
    });


    //
    jQuery('.certificatesCarousel').owlCarousel({
        rtl: rtlVal,
        margin: 30,
        smartSpeed: 1500,
        nav: true,
        navText: ['<i class="fas fa-long-arrow-alt-left"></i>', '<i class="fas fa-long-arrow-alt-right"></i>'],
        dots: false,
        loop: true,
        autoplay: true,
        mouseDrag: true,
        touchDrag: true,

        //rewind: true,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 4,
            }
        }
    });



    //
    jQuery('.staffCarousel').owlCarousel({
        rtl: rtlVal,
        margin: 30,
        smartSpeed: 1500,
        nav: true,
        navText: ['<i class="fas fa-long-arrow-alt-left"></i>', '<i class="fas fa-long-arrow-alt-right"></i>'],
        dots: false,
        loop: true,
        autoplay: true,
        mouseDrag: true,
        touchDrag: true,
        autoHeight:true,
        //rewind: true,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 21,
            },
            992: {
                items: 1,
            }
        }
    });


    //tab
    jQuery('.tab ul.tabs').find('> li:eq(0)').addClass('current');
    jQuery('.tab ul.tabs li a').on('click', function (g) {
        var tab = jQuery(this).closest('.tab'),
            index = jQuery(this).closest('li').index();
        tab.find('ul.tabs > li').removeClass('current');
        jQuery(this).closest('li').addClass('current');
        tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
        tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
        g.preventDefault();
    });


    // fancybox
    jQuery('.fancybox').fancybox();


    //ScrollReveal
    window.sr = ScrollReveal({
        reset: true,
        duration: 500,
        useDelay: "always",
        mobile: false,
        //delay: 200,
        afterReveal: function (el) {
            jQuery(el).attr("style", "");
        }
    });
    sr.reveal(".about-cont,.experience-num,.about-item,.media-item,.news-item,.project-item,.work-item-page", {origin: "top"});
    sr.reveal(".about-img,.experience-tit,.qualified-item,.value-item,.work-gallery-item", {origin: "bottom"});
    //sr.reveal("", {origin: "right"});
    sr.reveal(".works .tab_content", {origin: "left"});

});
