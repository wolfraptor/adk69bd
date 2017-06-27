$(document).ready(function () {
    var appendVideo = $(".video-popup").html();

    $('.wrapper').addClass('wrapp-top')

    if (window.matchMedia("(min-width: 1025px)").matches){
        function setHeiHeight() {
            $('.section').css({
                height: $(window).height()
            });
        }

        setHeiHeight();

        $(window).resize(setHeiHeight);
    }

    $('#fullpage').fullpage({
        fitToSection: false,
        css3: true,
//        autoScrolling: false,
        anchors: ['11Page', '12Page', '13Page', '14Page', '1Page', '2Page', '3Page', '5Page', '16Page', '4Page', '6Page', '7Page', '8page'],
        afterRender: function(){
            history.replaceState({}, document.title, "index.html");
        },
        onLeave: function (index, nextIndex, direction) {


            if (index == 1 && direction == 'down') {
                // $.fn.fullpage.setAutoScrolling(true);

                $('.front').addClass('active-top');
                $('.bottom').addClass('active-bottom');
                $('.nav-bar').show();
                setTimeout(function () {
                    $('.share-icon').addClass('share-icon-visible');
                }, 600);
                setTimeout(function () {
                    $('.nav-bar-logo').addClass('logo-visible');
                }, 600);

                $(window).mousewheel(function () {
                    $('.wrapper').removeClass('wrapp-top')
                })
            } else if (index == 2 && direction == 'up') {
                // $.fn.fullpage.setAutoScrolling(false);
                $(window).mousewheel(function () {
                    $('.top-nav-bar').hide();
                    $('.wrapper').addClass('wrapp-top')
                })
                $('.top-nav-bar').removeClass('top-nav-bar-visible');
                    $('.share-icon').removeClass('share-icon-visible');
                    $('.nav-bar-logo').removeClass('logo-visible');
                $('.nav-bar').hide();
                $('.wrap').addClass('bottom-hidden');
                $('.wrap').removeClass('bottom-visible');
                $('.video-block-hidden').addClass('video-block-visible');
                $('.front').removeClass('active-top');
                $('.bottom').removeClass('active-bottom')
            } else if (index == 1 && direction == 'up') {
                $(window).mousewheel(function () {
                    $('.nav-bar').hide();
                })
            }
            else if (index == 2 && direction == 'down') {
                $('.wrapper').removeClass('transform-wrap');
                $('.top-nav-bar').addClass('top-nav-bar-visible');
            }
            else if (index == 3 && direction == 'up') {
                $('.wrapper').addClass('transform-wrap');
                $('.wrapper').addClass('wrapp-top')
                $('.nav-bar-top').hide();

            }
            else if (index == 0 && direction == 'down') {
                $('.wrapper').removeClass('wrapp-top')
                $('.top-nav-bar').hide();

            }
            else if (index == 0 && direction == 'up') {
                $('.wrapper').removeClass('wrapp-top')
                $('.top-nav-bar').hide();

            }
            else if (index == 1 && direction == 'up') {
                $('.top-nav-bar').hide();
            }
        }
    });
    function winWindth() {
        if ($(window).width() < 1100) {
            $.fn.fullpage.setAutoScrolling(false);
        }
    }

    // $(window).resize(function () {
    //     winWindth()
    // });
    $(window).load(function () {
        winWindth()
    });
    $(".play-btn, .play-btn-2").on('click', function () {
        $(this).parent().find('.description-video').addClass('is-bottomed');
        $(this).parent().find('.video-pop-up-wrapp').addClass('is-visible');
        $(".video-popup").find("iframe").attr("src", $(this).attr("video-id"));

    });
    $('.video-pop-up-wrapp').on('click', function () {
        $(this).parent().find('.description-video').removeClass('is-bottomed');
        $(this).removeClass('is-visible');
        $(".video-popup").empty();
        $(".video-popup").append(appendVideo)

    });
    $('.video-popup').on('click', function (e) {
        e.stopPropagation();
    })

});
