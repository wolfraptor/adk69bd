$(document).ready(function () {
    var fixedNav = document.querySelector(".vertical-sub-nav");

    if (window.matchMedia("(min-width: 1025px)").matches){

        function setHeiHeight() {
            $('.section').css({
                height: $(window).height()
            });
        }

        $(".vertical-sub-nav li:nth-child(2) a").on("click", function () {
            $(this).closest(".vertical-sub-nav").removeClass("first-top second-top third-top fourth-top");
            $(this).closest(".vertical-sub-nav").addClass("first-top second-top");
        });
        $(".vertical-sub-nav li:nth-child(3) a").on("click", function () {
            $(this).closest(".vertical-sub-nav").removeClass("first-top second-top third-top fourth-top");
            $(this).closest(".vertical-sub-nav").addClass("first-top second-top third-top");
        });
        $(".vertical-sub-nav li:nth-child(4) a").on("click", function () {
            $(this).closest(".vertical-sub-nav").removeClass("first-top second-top third-top fourth-top");
            $(this).closest(".vertical-sub-nav").addClass("first-top second-top third-top fourth-top");
        });
        $(".vertical-sub-nav li:nth-child(1) a").on("click", function () {
            $(this).closest(".vertical-sub-nav").removeClass("first-top second-top third-top fourth-top");
            $(this).closest(".vertical-sub-nav").removeClass(" is-fixed first-top second-top third-top fourth-top");
            $('.nav-bar').removeClass("fixed");
            $('body').addClass('scroll-class');
            $('.logo-line').removeClass('dsp-none');
            $('.nav-bar').removeClass('fixed');
        });

        setHeiHeight();

        $(window).resize(setHeiHeight);

        $('#fullpage').fullpage({
            anchors: ['1','23', '2', '3', '4', '5', '6', '7', '8', '9', '10'],
            fitToSection: false,
            afterRender: function () {
                history.replaceState({}, document.title, "kasuta.html");
                $(window).mousewheel(function () {
                    $('.orange-line').hide();

                });
            },
            onLeave: function (index, nextIndex, direction) {
                var leavingSection = $(this);
                if (index == 1 && direction == 'down') {
                    $('.logo-line').addClass('dsp-none');
                    $('body').addClass('scroll-class');
                    $('.nav-bar').addClass("fixed");
                    $('.anabolic-section').addClass('section-flag')
                }

                if (direction == "up") {
                    console.log(index + " up");
                } else {
                    console.log(index + " down");
                }


                if (index == 3 && direction == "down") {
                    $(".vertical-sub-nav").addClass("is-fixed first-top");
                }

                if (index == 7 && direction == "down") {
                    $(".vertical-sub-nav").addClass("is-fixed first-top second-top");
                }

                if (index == 8 && direction == "down") {
                    $(".vertical-sub-nav").addClass("is-fixed first-top second-top third-top");
                }

                if (index == 9 && direction == "down") {
                    $(".vertical-sub-nav").addClass("is-fixed first-top second-top third-top fourth-top");
                }

                if (index == 10 && direction == "up") {
                    $(".vertical-sub-nav").removeClass("fourth-top");
                }

                if (index == 9 && direction == "up") {
                    $(".vertical-sub-nav").removeClass("third-top");
                }

                if (index == 8 && direction == "up") {
                    $(".vertical-sub-nav").removeClass("second-top");
                }

                if (index == 3 && direction == "up") {
                    $(".vertical-sub-nav").removeClass("is-fixed");
                }

                if (
                    (index == 1 ||
                    index == 4 ||
                    index == 5 ||
                    index == 6 ||
                    index == 9 ||
                    index == 10 ) && direction == 'down') {
                    $('.nav-bar').removeClass("black-bg");
                }

                if (
                    (index == 3 ||
                    index == 7 ||
                    index == 8) && direction == 'down') {
                    $('.nav-bar').addClass("black-bg");
                }

                if (
                    (index == 3 ||
                    index == 4 ||
                    index == 6 ||
                    index == 7 ||
                    index == 8 ||
                    index == 11 ) && direction == 'up') {
                    $('.nav-bar').removeClass("black-bg");
                }
                if (
                    (index == 9 ||
                    index == 5 ||
                    index == 10 ) && direction == 'up') {
                    $('.nav-bar').addClass("black-bg");
                }
                if (index == 6) {
                    $('.anabolic-section').addClass('section-flag')

                }
                if (index == 8 && direction == "up") {
                    $.fn.fullpage.setAutoScrolling(true);

                }
                if(index == 2 && direction == "up"){
                    console.log("triggered remove");
                    $('.nav-bar').removeClass("fixed");
                    $('.logo-line').removeClass('dsp-none');
                }
                if(index == 2 && direction == "down"){
                    console.log("triggered add");
                    $('.nav-bar').addClass("fixed");
                    $('.logo-line').addClass('dsp-none');
                }
            },

            afterLoad: function (anchorLink, index) {
                if (index == 8) {
                    $.fn.fullpage.setAutoScrolling(false);
                    $('.anabolic-section').removeClass('section-flag')
                }

    //            if(index < 7){
    //                $.fn.fullpage.setAutoScrolling(true);
    //            }

                $(".vertical-sub-nav li:nth-child(1)").on("click", function () {
                    $.fn.fullpage.setAutoScrolling(true);
                });

                $(".vertical-sub-nav li:nth-child(2)").on("click", function () {
                    $.fn.fullpage.setAutoScrolling(false);
                });

                $(".vertical-sub-nav li:nth-child(3)").on("click", function () {
                    $.fn.fullpage.setAutoScrolling(false);
                });

                $(".vertical-sub-nav li:nth-child(4)").on("click", function () {
                    $.fn.fullpage.setAutoScrolling(false);
                });
            }
        });

        $('#fullpage2').fullpage({
            anchors: ['1', '21', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11'],
            fitToSection: false,

            afterRender: function () {
                // history.replaceState({}, document.title, "bullet.html");

                $(window).mousewheel(function () {
                    $('.orange-line').hide();

                });

            },
            onLeave: function (index, nextIndex, direction) {
                if (index == 1 && direction == 'down') {
                    $('.logo-line').addClass('dsp-none');
                    $('.nav-bar').addClass("fixed");
                    $('.formula-section').addClass('section-flag')
                    $('body').addClass('scroll-class');
                }

                if (direction == "up") {
                    console.log(index + " up");

                } else {
                    console.log(index + " down");
                }


                if (index == 3 && direction == "down") {
                    $(".vertical-sub-nav").addClass("is-fixed first-top");
                }
                if (index == 3 && direction == "up") {
                    $('.nav-bar').addClass('fixed');
                }

                if (index == 8 && direction == "down") {
                    $(".vertical-sub-nav").addClass("is-fixed first-top second-top");
                }

                if (index == 9 && direction == "down") {
                    $(".vertical-sub-nav").addClass("is-fixed first-top second-top third-top");
                }

                if (index == 10 && direction == "down") {
                    $(".vertical-sub-nav").addClass("is-fixed first-top second-top third-top fourth-top");
                }

                if (index == 11 && direction == "up") {
                    $(".vertical-sub-nav").removeClass("fourth-top");
                }

                if (index == 10 && direction == "up") {
                    $(".vertical-sub-nav").removeClass("third-top");
                }

                if (index == 9 && direction == "up") {
                    $(".vertical-sub-nav").removeClass("second-top");
                }

                if (index == 4 && direction == "up") {
                    $(".vertical-sub-nav").removeClass("is-fixed");
                }

                if (
                    (index == 2 ||
                    index == 4 ||
                    index == 5 ||
                    index == 6 ||
                    index == 10 ) && direction == 'down') {
                    $('.nav-bar').removeClass("black-bg");
                }

                if (
                    (index == 3 ||
                    index == 7 ||
                    index == 9 ||
                    index == 8) && direction == 'down') {
                    $('.nav-bar').addClass("black-bg");
                }

                if (
                    (index == 3 ||
                    index == 4 ||
                    index == 5 ||
                    index == 7 ||
                    index == 8 ||
                    index == 12 ) && direction == 'up') {
                    $('.nav-bar').removeClass("black-bg");
                }

                if (
                    (index == 9 ||
                    index == 5 ||
                    index == 11 ) && direction == 'up') {
                    $('.nav-bar').addClass("black-bg");
                }

                if (index == 9 && direction == 'up') {
                    $.fn.fullpage.setAutoScrolling(true);
                }
                if (index == 10 && direction == 'up') {
                    $('.formula-section').removeClass('section-flag')
                }
                if (index == 2 && direction == "up") {
                    console.log("triggered remove");
                    $('.nav-bar').removeClass("fixed");
                    $('.logo-line').removeClass('dsp-none');
                }
                if (index == 2 && direction == "down") {
                    console.log("triggered add");
                    $('.nav-bar').addClass("fixed");
                    $('.logo-line').addClass('dsp-none');
                }
            },
            afterLoad: function (anchorLink, index) {
                if (index == 9) {
                    $.fn.fullpage.setAutoScrolling(false);
                }

    //            if(index < 7){
    //                $.fn.fullpage.setAutoScrolling(true);
    //            }

                $(".vertical-sub-nav li:nth-child(1)").on("click", function () {
                    $.fn.fullpage.setAutoScrolling(true);
                });

                $(".vertical-sub-nav li:nth-child(2)").on("click", function () {
                    $.fn.fullpage.setAutoScrolling(false);
                });

                $(".vertical-sub-nav li:nth-child(3)").on("click", function () {
                    $.fn.fullpage.setAutoScrolling(false);
                });

                $(".vertical-sub-nav li:nth-child(4)").on("click", function () {
                    $.fn.fullpage.setAutoScrolling(false);
                });
            }
        });

        $('#fullpage3').fullpage({
            anchors: ['1', '22', '2', '3', '4', '5', '6', '7', '8', '9'],
            fitToSection: false,
            afterRender: function () {
                // history.replaceState({}, document.title, "meter.html");
                $(window).mousewheel(function () {
                    $('.orange-line').hide();
                });
            },

        onLeave: function (index, nextIndex, direction) {
            var leavingSection = $(this);
            if (index == 1 && direction == 'down') {
                $('.logo-line').addClass('dsp-none');
                $('body').addClass('scroll-class');
                $('.nav-bar').addClass("fixed");
                $('.performance-section').addClass('section-flag');
            }


            if (direction == "up") {
                console.log(index + " up");
            } else {
                console.log(index + " down");
            }


            if (index == 3 && direction == "down") {
                $(".vertical-sub-nav").addClass("is-fixed first-top");
            }

            if (index == 6 && direction == "down") {
                $(".vertical-sub-nav").addClass("is-fixed first-top second-top");
            }

            if (index == 7 && direction == "down") {
                $(".vertical-sub-nav").addClass("is-fixed first-top second-top third-top");
            }

            if (index == 8 && direction == "down") {
                $(".vertical-sub-nav").addClass("is-fixed first-top second-top third-top fourth-top");
            }

            if (index == 9 && direction == "up") {
                $(".vertical-sub-nav").removeClass("fourth-top");
            }

            if (index == 8 && direction == "up") {
                $(".vertical-sub-nav").removeClass("third-top");
            }

            if (index == 7 && direction == "up") {
                $(".vertical-sub-nav").removeClass("second-top");
            }

            if (index == 4 && direction == "up") {
                $(".vertical-sub-nav").removeClass("is-fixed");
            }


            if (
                (index == 1 ||
                index == 4 ||
                index == 5 ||
                index == 9 ||
                index == 8 ||
                index == 10 ) && direction == 'down') {
                $('.nav-bar').removeClass("black-bg");
                console.log(index + " no-bg down");
            }

            if (
                (index == 3 ||
                index == 6 ||
                index == 7 ) && direction == 'down') {
                $('.nav-bar').addClass("black-bg");
                console.log(index + " with-bg");
            }

            if (
                (index == 3 ||
                index == 4 ||
                index == 6 ||
                index == 7 ||
                index == 10) && direction == 'up') {
                $('.nav-bar').removeClass("black-bg");
                console.log(index + " no-bg up");
            }
            if (
                (index == 9 ||
                index == 8 ||
                index == 5 ) && direction == 'up') {
                $('.nav-bar').addClass("black-bg");
                console.log(index + " with-bg up");
            }


            // if (index == 3 && direction == 'up') {
            //     $('.nav-bar').removeClass("fixed");
            // }
            if (index == 7 && direction == 'up') {
                $.fn.fullpage.setAutoScrolling(true);
            }
            if (index == 8 && direction == 'up') {
                $('.performance-section').removeClass('section-flag')
            }
            if(index == 2 && direction == "up"){
                console.log("triggered remove");
                $('.nav-bar').removeClass("fixed");
                $('.logo-line').removeClass('dsp-none');
            }
            if(index == 2 && direction == "down"){
                console.log("triggered add");
                $('.nav-bar').addClass("fixed");
                $('.logo-line').addClass('dsp-none');
            }
        }
        ,
        afterLoad: function (anchorLink, index) {
            if (index == 7) {
                $.fn.fullpage.setAutoScrolling(false);
            }

    //            if(index < 5){
    //                $.fn.fullpage.setAutoScrolling(true);
    //            }

            $(".vertical-sub-nav li:nth-child(1)").on("click", function () {
                $.fn.fullpage.setAutoScrolling(true);
            });

            $(".vertical-sub-nav li:nth-child(2)").on("click", function () {
                $.fn.fullpage.setAutoScrolling(false);
            });

            $(".vertical-sub-nav li:nth-child(3)").on("click", function () {
                $.fn.fullpage.setAutoScrolling(false);
            });

            $(".vertical-sub-nav li:nth-child(4)").on("click", function () {
                $.fn.fullpage.setAutoScrolling(false);
            });
        }
    })
        ;

};

    function winWindth() {
        if ($.fn.fullpage) {
            if (window.matchMedia("(max-width: 1024px)").matches){
                $.fn.fullpage.setAutoScrolling(false);
                $.fn.fullpage.destroy();
            }
        }
    }
    $(window).resize(function () {
        winWindth()
    });
    $(window).load(function () {
        winWindth()
    });
    });


$(document).ready(function () {
    var win, fixedNav, offset, header;

    win = $(window);
    fixedNav = $('.ev-page .nav-bar');

    win.scroll(function () {
        if (win.scrollTop() > 90) {
            fixedNav.addClass('fixed black-bg');
        } else {
            fixedNav.removeClass('fixed black-bg');
        }
    });
});
