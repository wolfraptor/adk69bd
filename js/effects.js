$(document).ready(function () {

    // $(window).on('mousewheel', function(e){
    //     if(e.originalEvent.wheelDelta < 0){
    //         $('.buttons-wrapper input:nth-child(1)').prop('checked', true);
    //         $('.buttons-wrapper input:nth-child(2)').prop('checked', true);
    //         $('.nav-bar').show()
    //     }
    //     else{
    //         $('.buttons-wrapper input:nth-child(1)').prop('checked', true);
    //         $('.buttons-wrapper input:nth-child(2)').prop('checked', false);
    //     }
    // });
    var appendVideo = $(".video-popup").html();
    $(".play-btn-2").on('click', function () {
        $('.video-pop-up-wrapp').addClass('is-visible');
        $(".video-popup").find("iframe").attr("src", $(this).attr("video-id"));

    });
    $('.video-pop-up-wrapp').on('click', function () {
        $(this).removeClass('is-visible');
        $(".video-popup").empty();
        $(".video-popup").append(appendVideo)

    });
    $('.video-popup').on('click', function (e) {
        e.stopPropagation();
    })
    $('.drop-down').click(function (e) {
        e.stopPropagation();
        $('.nav-bar .nav li .sub-nav').toggleClass('sub-nav-visible');
        $(this).toggleClass('bg-darker');
    });
    
    $('.open-share').click(function (e) {
        e.stopPropagation();
        $(this).toggleClass('show-share');
    });
    $('.social-list-item').click(function (e) {
        e.stopPropagation();
        $('.share-icon').removeClass('show-share');
    });
    $('body').click(function (e) {
        $('.share-icon').removeClass('show-share');
        $('.nav-bar .nav li .sub-nav').removeClass('sub-nav-visible');
        $('.drop-down').removeClass('bg-darker');
    });
    $('.open-card').click(function () {
        var id = $(this).closest('.accordeon-card').data("id"),
            card_1 = $('.accordeon-card[data-id="card-1"]'),
            card_2 = $('.accordeon-card[data-id="card-2"]'),
            card_3 = $('.accordeon-card[data-id="card-3"]');

        setTimeout(function() { $('.open-card').toggleClass('open-card-visible'); }, 1000);

        switch (id) {
            case 'card-1':
                card_1.toggleClass('card-opened');
                card_2.toggleClass('card-hide');
                card_3.toggleClass('card-hide');
                $('.products-accordeon-wrapper').toggleClass('card-1-visible');
                $('.metter-bg, .kasuta-bg').toggleClass('border-left');
                break;
            case 'card-2':
                $('.products-accordeon-wrapper').toggleClass('card-2-visible');

                card_2.toggleClass('card-opened');
                card_1.toggleClass('card-hide');
                card_3.toggleClass('card-hide');
                $('.bullet-bg').toggleClass('border-right');
                $('.kasuta-bg').toggleClass('border-left');

                break;
            case 'card-3':
                card_3.toggleClass('card-opened');
                card_2.toggleClass('card-hide');
                card_1.toggleClass('card-hide');
                $('.products-accordeon-wrapper').toggleClass('card-3-visible');
                $('.bullet-bg, .metter-bg').toggleClass('border-right');
                break;
        }

    });

    $('.open').click(function(){
        $('.open').toggleClass('open-transform')
        $('.nav-bar').toggleClass('nav-bar-visible');
    });

    $('.open-block').click(function(){
        $().toggleClass('open-gossip-card')

    });
    var cardHov = Math.floor($(window).width() / 2),
        cardHovNormal = Math.floor($(window).width() / 4),
        flag = true;

    if (window.matchMedia("(max-width: 979px)").matches){
        cardHov = Math.floor(($(window).width() / 3) * 2);
        cardHovNormal = Math.floor($(window).width() / 3);
    };
    if (window.matchMedia("(max-width: 768px)").matches){
        cardHov = Math.floor(($(window).width()));
        cardHovNormal = Math.floor($(window).width() / 2);
    };

    $('.open-block').click(function(e){
        e.preventDefault();
        var parent = $(this).parent().parent();
        var list = $('.owl-item');
        list.css('margin-left', '0');
        if (parent.offset().left > Math.floor(($(window).width()/2 + 1)) && flag){
            for (var i = 0; i < list.length; i++) {
                if ($(list[i]).offset().left <= 0 && $(list[i]).offset().left > -5){
                    $(list[i]).css('margin-left', '-' + cardHovNormal + 'px');
                }
            }
        };
        if (window.matchMedia("(max-width: 768px)").matches){
            if (parent.offset().left >= (Math.floor($(window).width()/2 - 1)) && flag){
                for (var i = 0; i < list.length; i++) {
                    if ($(list[i]).offset().left == 0){
                        $(list[i]).css('margin-left', '-' + cardHovNormal + 'px');
                    }
                }
            }
        };
        if (flag) {
            $(this).parent().parent().width(cardHov);
            $(this).parent().find('.text-block p').toggleClass('long-width');
            flag = !flag;
        } else {
            $('.owl-item').width(cardHovNormal);
            $('.text-block p').removeClass('long-width');
            flag = !flag;
        }

    });
    // $('.card-block').mouseleave(function(){
    //     $('.owl-item').width(cardHovNormal)
    //     $('.text-block p').removeClass('long-width');
    // });


    $("#owl-example").owlCarousel({
        items: 4,
        pagination: false,
        navigation : true,
        navigationText: '',
        responsive: {
            0: {
                items: 1,
            },
            640: {
                items: 2,
            },
            767: {
                items: 2,
            }
        }
    });

    $('.show-small-soc').click(function () {
        $(this).find('.small-social-list').toggleClass('soc-visible');
    })

    $('#fullpage-event').fullpage({
        
    })

});
