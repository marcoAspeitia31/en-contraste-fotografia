(function ($) {

    "use strict";


    $(document).on('ready', function () {

        console.log('hola mundo')


        /*===============================  
             Sticky 
        ================================*/
        $(window).on('scroll', function (event) {
            let scroll = $(window).scrollTop();
            if (scroll < 110) {
                $(".header-nav").removeClass("sticky");
            } else {
                $(".header-nav").addClass("sticky");
            }
        });

        /*===============================  
             Mobile Menu 
        ================================*/
        $(".navbar-toggler").on('click', function () {
            $(this).toggleClass('active');
        });

        $(".navbar-nav a").on('click', function () {
            $(".navbar-toggler").removeClass('active');
        });
        let subMenu = $(".sub-menu-bar .navbar-nav .sub-menu");

        if (subMenu.length) {
            subMenu.parent('li').children('a').append(function () {
                return '<button class="sub-nav-toggler"> <i class="fal fa-angle-down"></i> </button>';
            });

            let subMenuToggler = $(".sub-menu-bar .navbar-nav .sub-nav-toggler");

            subMenuToggler.on('click', function () {
                $(this).parent().parent().children(".sub-menu").slideToggle();
                return false
            });

        }

        /*===============================  
             side menu Project 1
        ================================*/
        $('.canvas_open').on('click', function () {
            $('.offcanvas_menu_wrapper,.off_canvars_overlay').addClass('active')
        });

        $('.canvas_close,.off_canvars_overlay').on('click', function () {
            $('.offcanvas_menu_wrapper,.off_canvars_overlay').removeClass('active')
        });

        let $offcanvasNav = $('.offcanvas_main_menu'),
            $offcanvasNavSubMenu = $offcanvasNav.find('.sub-menu');
        $offcanvasNavSubMenu.parent().prepend('<span class="menu-expand"><i class="fa fa-angle-down"></i></span>');

        $offcanvasNavSubMenu.slideUp();

        $offcanvasNav.on('click', 'li a, li .menu-expand', function (e) {
            let $this = $(this);
            if (($this.parent().attr('class').match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/)) && ($this.attr('href') === '#' || $this.hasClass('menu-expand'))) {
                e.preventDefault();
                if ($this.siblings('ul:visible').length) {
                    $this.siblings('ul').slideUp('slow');
                } else {
                    $this.closest('li').siblings('li').find('ul:visible').slideUp('slow');
                    $this.siblings('ul').slideDown('slow');
                }
            }
            if ($this.is('a') || $this.is('span') || $this.attr('clas').match(/\b(menu-expand)\b/)) {
                $this.parent().toggleClass('menu-open');
            } else if ($this.is('li') && $this.attr('class').match(/\b('menu-item-has-children')\b/)) {
                $this.toggleClass('menu-open');
            }
        });

        /*===============================  
             features active
        ================================*/
        let mousehover = $('.about-2-area');
        mousehover.on('mouseover', '.item', function () {
            $('.item.active').removeClass('active');
            $(this).addClass('active');
        });


        /*===============================  
             Isotope Project 1
        ================================*/
        let isotope = $('.container');
        isotope.imagesLoaded(function () {
            let $grid = $('.grid').isotope({
                transitionDuration: '1s',
            });

            let projectfilter = $('.project-menu ul');
            projectfilter.on('click', 'li', function () {
                let filterValue = $(this).attr('data-filter');
                $grid.isotope({
                    filter: filterValue
                });
            });

            let projectfilter2 = $('.project-menu ul li');
            projectfilter2.on('click', function (event) {
                $(this).siblings('.active').removeClass('active');
                $(this).addClass('active');
                event.preventDefault();
            });
        });
        let isotopegrid = $('.grid-2');
        isotopegrid.isotope({
            itemSelector: '.grid-item',
            percentPosition: true,
            masonry: {
                columnWidth: 1,
            }
        })

        /*===============================  
             hero slider SLICK JS
        ================================*/
        function mainSlider() {

            let BasicSlider = $('.hero-slider');
            let BasicSlider2 = $('.hero-slider-2');

            BasicSlider.on('init', function (e, slick) {
                let $firstAnimatingElements = $('.hero-area:first-child').find('[data-animation]');
                doAnimations($firstAnimatingElements);
            });
            BasicSlider2.on('init', function (e, slick) {
                let $firstAnimatingElements = $('.hero-14-area:first-child').find('[data-animation]');
                doAnimations($firstAnimatingElements);
            });

            BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
                let $animatingElements = $('.hero-area[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
                doAnimations($animatingElements);
            });

            BasicSlider2.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
                let $animatingElements = $('.hero-14-area[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
                doAnimations($animatingElements);
            });

            BasicSlider.slick({
                autoplay: true,
                autoplaySpeed: 10000,
                pauseOnHover: false,
                dots: true,
                fade: true,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            dots: false,
                            arrows: false
                        }
                }
            ]
            });
            BasicSlider2.slick({
                autoplay: true,
                autoplaySpeed: 10000,
                pauseOnHover: false,
                dots: false,
                fade: true,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            dots: false,
                            arrows: false
                        }
                }
            ]
            });

            function doAnimations(elements) {
                let animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
                elements.each(function () {
                    let $this = $(this);
                    let $animationDelay = $this.data('delay');
                    let $animationType = 'animated ' + $this.data('animation');
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

        /*===============================  
             PORTFOLIO ACTIVE SLICK JS
        ================================*/
        let Slider1 = $('.portfolio-active');
        Slider1.slick({
            arrows: true,
            prevArrow: '<span class="prev"><i class="fal fa-angle-left"></i></span>',
            nextArrow: '<span class="next"><i class="fal fa-angle-right"></i></span>',
            dots: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            centerMode: true,
            centerPadding: "370px",
            autoplaySpeed: 3000,
            responsive: [
                {
                    breakpoint: 1600,
                    settings: {
                        slidesToShow: 3,
                        centerPadding: "80px",
                    }
            }, {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                        centerPadding: "0px",
                    }
            },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        centerPadding: "0px",
                    }
            },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        centerPadding: "140px",
                        arrows: false,
                    }
            },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        centerPadding: "0px",
                        arrows: false,
                    }
            }
        ]
        });

        /*===============================  
             TESTIMONIAL ACTIVE SLICK JS
        ================================*/
        let Slider2 = $('.testimonial-active');
        Slider2.slick({
            arrows: false,
            dots: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            centerMode: true,
            centerPadding: "0px",
            autoplaySpeed: 3000,
            responsive: [
                {
                    breakpoint: 1600,
                    settings: {
                        slidesToShow: 3,
                    }
            }, {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                    }
            },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                    }
            },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                    }
            },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                    }
            }
        ]
        });

        /*===============================  
             TESTIMONIAL ACTIVE SLICK JS
        ================================*/
        let Slider3 = $('.testimonial-2-active');
        Slider3.slick({
            arrows: false,
            dots: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,

        });

        /*===============================  
             TESTIMONIAL ACTIVE SLICK JS
        ================================*/
        let Slider4 = $('.testimonial-3-active');
        Slider4.slick({
            arrows: false,
            dots: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            fade: true,

        });

        /*===============================  
             TEAM ACTIVE SLICK JS
        ================================*/
        let Slider5 = $('.team-active');
        Slider5.slick({
            arrows: true,
            prevArrow: '<span class="prev"><i class="fal fa-angle-left"></i></span>',
            nextArrow: '<span class="next"><i class="fal fa-angle-right"></i></span>',
            dots: true,
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            centerMode: true,
            centerPadding: "0px",
            autoplaySpeed: 3000,
            responsive: [
                {
                    breakpoint: 1600,
                    settings: {
                        slidesToShow: 5,
                    }
            }, {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                    }
            },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                    }
            },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        centerPadding: "140px",
                        arrows: false,
                    }
            },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        centerPadding: "0px",
                        arrows: false,
                    }
            }
        ]
        });

        /*===============================  
             TEAM 5 ACTIVE SLICK JS
        ================================*/
        let Slider6 = $('.team-5-active');
        Slider6.slick({
            arrows: false,
            dots: true,
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [
                {
                    breakpoint: 1600,
                    settings: {
                        slidesToShow: 4,
                    }
            }, {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 4,
                    }
            },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                    }
            },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                    }
            },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                    }
            }
        ]
        });

        /*===============================  
             screenshot ACTIVE SLICK JS
        ================================*/
        let Slider7 = $('.screenshot-active');
        Slider7.slick({
            arrows: false,
            dots: true,
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            centerMode: true,
            centerPadding: "0px",
            autoplaySpeed: 3000,
            responsive: [
                {
                    breakpoint: 1600,
                    settings: {
                        slidesToShow: 5,
                    }
            }, {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                    }
            },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                    }
            },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                    }
            },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                    }
            }
        ]
        });

        /*===============================  
             screenshot ACTIVE SLICK JS
        ================================*/
        let Slider8 = $('.brand-list');
        Slider8.slick({
            arrows: false,
            dots: false,
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [
                {
                    breakpoint: 1600,
                    settings: {
                        slidesToShow: 5,
                    }
            }, {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 4,
                    }
            },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 4,
                    }
            },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3,
                    }
            },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 2,
                    }
            }
        ]
        });

        /*===============================  
             screenshot ACTIVE SLICK JS
        ================================*/
        let Slider9 = $('.service-11-active');
        Slider9.slick({
            arrows: true,
            prevArrow: '<span class="prev"><i class="fal fa-angle-left"></i></span>',
            nextArrow: '<span class="next"><i class="fal fa-angle-right"></i></span>',
            dots: false,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [
                {
                    breakpoint: 1600,
                    settings: {
                        slidesToShow: 3,
                    }
            }, {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                    }
            },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                    }
            },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        arrows: false,

                    }
            },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        arrows: false,
                    }
            }
        ]
        });

        /*===============================  
             client slide  SLICK JS
        ================================*/
        let Slider10 = $('.client-slide');
        Slider10.slick({
            arrows: false,
            dots: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        dots: false,

                    }
            }
        ]
        });

        /*===============================  
             COUNTER Active
        ================================*/
        if ($('.count').length) {
            $('.count').appear(function () {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 3000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            }, {
                accY: 0
            });
        }

        /*===============================  
             PROGRESS LINE Active
        ================================*/
        if ($('.progress-line').length) {
            $('.progress-line').appear(function () {
                let el = $(this);
                let percent = el.data('width');
                $(el).css('width', percent + '%');
            }, {
                accY: 0
            });
        }
        if ($('.count-box').length) {
            $('.count-box').appear(function () {
                let $t = $(this),
                    n = $t.find(".count-text").attr("data-stop"),
                    r = parseInt($t.find(".count-text").attr("data-speed"), 10);

                if (!$t.hasClass("counted")) {
                    $t.addClass("counted");
                    $({
                        countNum: $t.find(".count-text").text()
                    }).animate({
                        countNum: n
                    }, {
                        duration: r,
                        easing: "linear",
                        step: function () {
                            $t.find(".count-text").text(Math.floor(this.countNum));
                        },
                        complete: function () {
                            $t.find(".count-text").text(this.countNum);
                        }
                    });
                }

            }, {
                accY: 0
            });
        }


        
        /*===============================  
             wow js
        ================================*/

        if ($('.wow').length) {
            let wow = new WOW({
                boxClass: 'wow', // animated element css class (default is wow)
                animateClass: 'animated', // animation css class (default is animated)
                offset: 250, // distance to the element when triggering the animation (default is 0)
                mobile: true, // trigger animations on mobile devices (default is true)
                live: true // act on asynchronously loaded content (default is true)
            });
            wow.init();
        }

         /*===============================  
            Magnific Popup
        ================================*/
        let videopopup = $('.video-popup');
        videopopup.magnificPopup({
            type: 'iframe'
        });


        /*===============================  
                Magnific Popup
        ================================*/
        let imagepopup = $('.image-popup');
        imagepopup.magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });

    });

   

    /*===============================  
            Back to top
    ================================*/

    $(window).on('scroll', function (event) {
        console.log('bajando del scroll')
        if ($(this).scrollTop() > 600) {
            $('.back-to-top').fadeIn(200)
        } else {
            $('.back-to-top').fadeOut(200)
        }
    });
    $('.back-to-top').on('click', function (event) {
        $('html, body').animate({
            scrollTop: 0,
        }, 1500);
        event.preventDefault();
    });


    $(window).on('load', function (event) {

        /*===============================  
             Prealoder 
        ================================*/
        $('.preloader').delay(500).fadeOut(500);
    });

})( jQuery );