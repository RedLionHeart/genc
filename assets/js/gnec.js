swiper = new Swiper('.swiper', {
    // slidesPerView: 4,
    spaceBetween: 12,
    slidesPerView: "auto",
    // autoHeight: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        992: {
            spaceBetween: 22,
        }
    }

});


$('#scroll-click').click(function () {
    let scroll_el = $('#collapse-scroll');
    if ($(scroll_el).length !== 0) {
        setTimeout(function () {
            $('html, body').animate({
                scrollTop: $(scroll_el).offset().top - 100
            }, 0);
        }, 1000)
    }
});


var heightslider = $('.swiper-wrapper').outerHeight(true);
$('.swiper-wrapper').css('height', heightslider)

const formSearchInput = $('.form-search input');


if (formSearchInput) {
    $(document).click(function (e) {
        if ($(formSearchInput).is(":focus")) {
            $(e.target).closest('.header-box-search').removeClass('close-header-box-search');
            $(e.target).closest('label').addClass('focus-input');
            if (e.target.classList.contains('input-search-focus')) {
                if (e.target.value.length > 1) {
                    if ($(e.target).closest('label').children('.box-search-result').get(0).firstChild == null) {
                    } else {
                        $(e.target.closest('.form-search')).addClass('open-search-result');
                    }
                }
            }
        } else {
            $(formSearchInput).closest('label').removeClass('focus-input');
            $('.form-search').removeClass('open-search-result');
            formSearchInput.closest('.header-box-search').addClass('close-header-box-search');
        }
    });
}

$(document).on('input', '.form-search input', function () {
    var thisform = this.closest('.form-search')
    const searchItemsContainer = $(this.closest('label')).children('.box-search-result');
    var searchitem = $(this).val().length;

    if (searchitem > 1) {

        $.ajax({
            url: myajax.url,
            type: 'POST',
            data: {
                'action': 'custom_paint_ajax_search',
                'search': this.value,
            },
            success: function (data) {
                if (data !== 'false') {
                    searchItemsContainer[0].innerHTML = data;
                    $(thisform).addClass('open-search-result')
                } else {
                    searchItemsContainer[0].innerHTML = '';
                    $(thisform).removeClass('open-search-result')
                }
                return false;
            },
            error: function (data) {
            }
        });
    } else {
        $('.form-search').removeClass('open-search-result')
    }
});


$(window).on("load", function () {

    var windowwidth = screen.width;
    var coloramount = $('.box-color').length;
    var boxamount = $('.wrap-color');
    var realheight = boxamount.outerHeight(true);

    if (windowwidth >= 768) {
        if (coloramount > 6) {
            var height1 = Math.max($('.box-color').slice(0, 3).outerHeight(true));

            var height2 = Math.max($('.box-color').slice(3, 7).outerHeight(true));

            var sumheight = height1 + height2;
            $(boxamount).addClass('color-collapsed').css('height', sumheight);
        }
    } else {
        if (coloramount > 4) {
            var height1 = Math.max($('.box-color').slice(0, 2).outerHeight(true));

            var height2 = Math.max($('.box-color').slice(2, 4).outerHeight(true));

            var sumheight = height1 + height2;
            $(boxamount).addClass('color-collapsed').css('height', sumheight);
        }
    }
    $(".button-collapsed").click(function () {
        $(boxamount).addClass('open-collaps').css('height', realheight)
    });


});


$(window).on("load", function () {
    $('.height-box').each(function (i, obj) {
        var landamount = $(this).find('.box-contact').length;
        var boxamount = $(this).find('.box-contact');
        var sumheight = 0;
        $(boxamount).slice(0, 3).each(function () {
            sumheight += $(this).outerHeight(true);
        })
        if (landamount > 3) {
            $(this).addClass('collapsed-contact').css('height', sumheight)
        }
    })
    $(".button-collapsed").click(function () {
        var opencollaps = $(this).closest('.height-box');
        var realheight = 0;
        $(this).closest('.height-box').find('.box-contact').slice(0).each(function () {
            realheight += $(this).outerHeight(true);
        })
        $(opencollaps).addClass('open-collaps').css('height', realheight)
    });


    var boxconverter = document.querySelector('.box-converter');
    var realheightboxconverter = $(boxconverter).outerHeight(true);
    var closecollapseconverter = $(boxconverter).outerHeight(true) * 0.44;
    $(boxconverter).css('height', closecollapseconverter);
    $(".collapse-content-tinting .gradient-button-collapse .button-collapsed").click(function () {
        $(boxconverter).css('height', realheightboxconverter).css('overflow', 'scroll hidden');
        $(this).closest('.gradient-button-collapse').addClass('gradient-button-collapse-open');
    });
    $(".collapse-content-tinting .gradient-button-collapse .button-collapsed-close").click(function () {
        $(boxconverter).css('height', closecollapseconverter);
        $(this).closest('.gradient-button-collapse').removeClass('gradient-button-collapse-open');
    });

    var boxconverter2 = document.querySelector('.box-converter2');
    var realheightboxconverter2 = $(boxconverter2).outerHeight(true);
    var closecollapseconverter2 = $(boxconverter2).outerHeight(true) * 0.5;
    $(boxconverter2).css('height', closecollapseconverter2);
    $(".collapse-content-tinting2 .gradient-button-collapse .button-collapsed").click(function () {
        $(boxconverter2).css('height', realheightboxconverter2);
        $(this).closest('.gradient-button-collapse').addClass('gradient-button-collapse-open');
    });
    $(".collapse-content-tinting2 .gradient-button-collapse .button-collapsed-close").click(function () {
        $(boxconverter2).css('height', closecollapseconverter2);
        $(this).closest('.gradient-button-collapse').removeClass('gradient-button-collapse-open');
    });
});


$(".categories-search label").click(function () {
    if ($('#input-card').prop('checked') === true) {
        $('#seacrh-container-video').hide();
        $('#container-card').show();
    }
    if ($('#input-video').prop('checked') === true) {
        $('#container-card').hide();
        $('#seacrh-container-video').show();
    }
});

var massivevideo = Array.from(document.getElementsByClassName('box-media'));
var boxmenu = document.getElementById('container-video');
var clickid = $('.button-discard-active').attr('id');
$('#container-video').empty()
$.each(massivevideo, function (index, value) {
    if (value.classList.contains(clickid)) {
        $(value).addClass("video-show");

        boxmenu.appendChild(value)
    }
})
$('.playlist button').click(function () {
    $(".playlist button").removeClass("button-discard-active");
    $(this).addClass("button-discard-active");
    var clickid = $(this).attr('id');

    $('#container-video').empty()
    $.each(massivevideo, function (index, value) {
        if (value.classList.contains(clickid)) {
            $(value).addClass("video-show");
            boxmenu.appendChild(value)
        }
    })

    let videos = document.querySelectorAll('.box-video');
    for (let i = 0; i < videos.length; i++) {
        setupVideo(videos[i]);
        let playedIframe = videos[i].querySelector('iframe');
        if (playedIframe) {
            let srcIframePlayed = playedIframe.src;
            playedIframe.src = srcIframePlayed.slice(0, -1) + '0';
        }
    }
});


// $(".btn-secondary").click(function () {
//     $("body").css("overflow", "visible");
// });


$('nav [href]').each(function () {
    if (this.href == window.location.href) {
        $(this).addClass('active-link');
    }
});

window.onscroll = function () {
    let scrolled = window.pageYOffset || document.documentElement.scrollTop;
    if (scrolled > 2) {
        $("header").addClass('header-scroll');
    }
    if (2 > scrolled) {
        $("header").removeClass('header-scroll');
    }
};

// $('.input-mask__phone').inputmask('+375 (99) 999-99-99');
$('.input-mask__mail').inputmask({alias: "email"});
let qwer = document.getElementsByClassName('input-mask__mail')

$('.phone').on('blur', function () {
    var phone = this
    // if (phone.value.match(/\+375\s?[\(]{0,1}(25|29|33|44)[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}/)) {
    if (phone.value.match(/[+]?[0-9]{4,}/)) {
        $(this).addClass("valid");
        $(this).removeClass("invalid");
    } else {
        $(this).addClass("invalid");
        $(this).removeClass("valid");
    }
    if (phone.value === "") {
        $(this).removeClass("valid");
        $(this).removeClass("invalid");
    }
});

$('.mail').on('blur', function () {
    var mail = this
    if (mail.value.match(/^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/)) {
        $(this).addClass("valid");
        $(this).removeClass("invalid");
    } else {
        $(this).addClass("invalid");
        $(this).removeClass("valid");
    }
    if (mail.value === "") {
        $(this).removeClass("valid");
        $(this).removeClass("invalid");
    }
});

$('.name').on('blur', function () {
    var name = this
    if (name.value.match(/^[\D]*([-][\D]*)?\s?[\D]*?\s?[\D]*?$/)) {
        $(this).addClass("valid");
        $(this).removeClass("invalid");
    } else {
        $(this).addClass("invalid");
        $(this).removeClass("valid");
    }
    if (name.value === "") {
        $(this).removeClass("valid");
        $(this).removeClass("invalid");
    }
});

$('.organization').on('blur', function () {
    var organization = this
    if (organization.value === "") {
        $(this).removeClass("valid");
        $(this).removeClass("invalid");
    } else {
        $(this).addClass("valid");
    }
});


var thanks = new bootstrap.Modal(document.getElementById('formModalThanks'), {
    keyboard: false,
    backdrop: 'static'
})

var passwork = new bootstrap.Modal(document.getElementById('formModalpassworkTDS'), {
    keyboard: true
})


$('#registration').on('submit', function (e) {
    e.preventDefault();
    let formData = new FormData(this);
    $.ajax({
        url: myajax.url_send_registration,
        data: formData,
        type: 'POST',
        contentType: false,
        processData: false,
        success: function (data) {
            if (data === 'ok') {
                /*обработка успешной отправки формы*/
                passwork.show();
            }
        },
        error: function (data) {
            alert("Данные не отправленны");
        }
    });
    return false;
});

$('#order').on('submit', function (e) {
    e.preventDefault();
    let formData = new FormData(this);

    $.ajax({
        url: myajax.url_send_order,
        data: formData,
        type: 'POST',
        contentType: false,
        processData: false,
        success: function (data) {
            if (data === 'ok') {
                /*обработка успешной отправки формы*/
                thanks.show();
                $('#order').trigger('reset');
            }
        },
        error: function (data) {
            alert("Данные не отправленны");
        }
    });
    return false;
});
console.log($('#order'))
function check() {
    var consent = document.getElementsByClassName('consent');
    for (var i = 0; i < consent.length; i++) {
        var form = consent[i].closest("form");
        if (consent[i].checked)
            form.querySelector("button").disabled = '';
        else form.querySelector("button").disabled = 'disabled';
    }
}


$('.filter-entry').click(function () {
    let filter = $('.filter-form');
    $.ajax({
        url: filter.attr('action'),
        data: filter.serialize(), // form data
        type: filter.attr('method'), // POST
        success: function (data) {
            if (data !== '0') {
                $('.card-container').html(data);
                $('.popular-product').css('margin-top', '40px');
            } else {
                $('.card-container').html('<h2>К сожалению, по вашему запросу мы ничего не нашли</h2>');
            }
        },
        error: function (error) {
            console.log(error);
        }
    });
    return false;
});


$('.filter-form input').click(function () {
    let filterForm = $('.filter-form');

    $.ajax({
        url: filterForm.attr('action'),
        data: filterForm.serialize(),
        type: filterForm.attr('method'),
        success: function (data) {
            if (data !== '0') {
                $('.card-container').html(data);
                $('.popular-product').css('margin-top', '40px');

            } else {
                $('.card-container').html('<h2>К сожалению, по вашему запросу мы ничего не нашли</h2>');
            }
        },
        error: function (error) {
            console.log(error);
        }
    });
});

$('.reset-filter').click(function () {
    $('.filter-form input[type="checkbox"]').each(function () {
        $(this).prop('checked', false);
    });

    let filter = $('.filter-form');
    $.ajax({
        url: filter.attr('action'),
        data: filter.serialize(), // form data
        type: filter.attr('method'), // POST
        success: function (data) {
            $('.card-container').html(data);
        },
        error: function (error) {
        }
    });
    return false;
});

let videos = document.querySelectorAll('.box-video');
for (let i = 0; i < videos.length; i++) {
    setupVideo(videos[i]);
}

function setupVideo(video) {
    let link = video.querySelector('.video__link');
    let media = video.querySelector('.video__media');
    let id;
    if (media.tagName === 'IMG') {
        id = parseMediaURL(media);
    } else {
        return false;
    }

    video.addEventListener('click', (e) => {
        let iframe = createIframe(id);
        let blue = e.target;
        blue.closest(".box-video").classList.add('box-blue');
        link.remove();
        // button.remove();
        video.appendChild(iframe);
    });

    link.removeAttribute('href');
    video.classList.add('video--enabled');
}

function parseMediaURL(media) {
    let regexp = /https:\/\/i\.ytimg\.com\/vi\/([a-zA-Z0-9_-]+)\/maxresdefault\.jpg/i;
    let url = media.src;
    let match = url.match(regexp);

    return match[1];
}

function createIframe(id) {
    let iframe = document.createElement('iframe');

    iframe.setAttribute('allowfullscreen', '');
    iframe.setAttribute('allow', 'autoplay');
    iframe.setAttribute('src', generateURL(id));
    iframe.classList.add('video__media');


    return iframe;
}

function generateURL(id) {
    let query = '?rel=0&showinfo=0&autoplay=1';

    return 'https://www.youtube.com/embed/' + id + query;
}
