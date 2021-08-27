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
        console.log(value)
        boxmenu.appendChild(value)
    }
})
$('.playlist button').click(function () {
    $(".playlist button").removeClass("button-discard-active");
    $(this).addClass("button-discard-active");
    var clickid = $(this).attr('id');
    console.log(clickid)
    console.log(massivevideo)
    $('#container-video').empty()
    $.each(massivevideo, function (index, value) {
        if (value.classList.contains(clickid)) {
            $(value).addClass("video-show");
            console.log(value)
            boxmenu.appendChild(value)
        }
    })
});


    $(".btn-secondary").click(function () {
        $("body").css("overflow", "visible");
        $(".modal-swiper").removeClass("modal-swiper-active");
    });


    $('nav [href]').each(function() {
        if (this.href == window.location.href) {
            $(this).addClass('active-link');
        }
    });



    $('nav a').click(function () {
        let scroll_el = $(this).attr('href');
        if ($(scroll_el).length !== 0) {
            $('html, body').animate({
                scrollTop: $(scroll_el).offset().top - 100
            }, 500);
        }
    });

    let positions = [],
        currentActive = null,
        links = $('header nav a');

    $("section").each(function () {
        positions.push({
            top: $(this).position().top - 500,
            a: links.filter('[href="#' + $(this).attr('id') + '"]')
        });
    });

    positions = positions.reverse();

    $(window).on('scroll', function () {
        var winTop = $(window).scrollTop();
        for (var i = 0; i < positions.length; i++) {
            if (positions[i].top < winTop) {
                if (currentActive !== i) {
                    currentActive = i;
                    links.filter('.active-nav').removeClass('active-nav');
                    positions[i].a.addClass("active-nav");
                }
                break;
            }
        }
    });


    window.onscroll = function() {
        let scrolled = window.pageYOffset || document.documentElement.scrollTop;
        if(scrolled > 2){
            $("header").addClass('header-scroll');
        }
        if(2 > scrolled){
            $("header").removeClass('header-scroll');
        }
    };

    $('.input-mask__phone').inputmask('+375 (99) 999-99-99');
    $('.input-mask__mail').inputmask({ alias: "email"});

    $('.phone').on('blur', function () {
        var phone = this
        console.log(phone);
        if (phone.value.match(/\+375\s?[\(]{0,1}(25|29|33|44)[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}/)) {
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
        console.log(mail);
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
        console.log(name);
        // if (name.value.match(/^[\D]*([-][\D]*)?\s[\D]*\s[\D]*$/)) {
        if (name.value.match(/[а-яА-Яa-zA-z]+/)) {
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
        console.log(organization);
        if (organization.value === "") {
            $(this).removeClass("valid");
            $(this).removeClass("invalid");
        } else {
            $(this).addClass("valid");
        }
    });


    var thanks = new bootstrap.Modal(document.getElementById('formModalThanks'), {
        keyboard: true
    })

    var load = new bootstrap.Modal(document.getElementById('formModalDownload'), {
        keyboard: true
    })


    $('.ajax-form button').click(function () {
        thanks.show()
        // $.ajax({
        //     url: './js/action_ajax_form.php',
        //     data: $('.modal').serialize(),
        //     type: 'POST',
        //     success: function (data) {
        //         alert("Данные отправленны")
        //         thanks.show()
        //     },
        //     error: function(data) { // Данные не отправлены
        //         alert("Данные не отправленны")
        //     }
        // });
    });

    $('#formModalBuy button').click(function () {
        load.show()
        // $.ajax({
        //     url: './js/action_ajax_form.php',
        //     data: $('.modal').serialize(),
        //     type: 'POST',
        //     success: function (data) {
        //         alert("Данные отправленны")
        //         load.show()
        //     },
        //     error: function(data) { // Данные не отправлены
        //         alert("Данные не отправленны")
        //     }
        // });
    });

    $('#filter-entry').click(function () {
        let filter = $('#filter-form');
        $.ajax({
            url: filter.attr('action'),
            data: filter.serialize(), // form data
            type: filter.attr('method'), // POST
            success: function (data) {
                $('.container-card').html(data);
                //console.log(data);
            },
            error: function (error) {
                console.log(error);
            }
        });
        return false;
    });

    $('#reset-filter').click(function () {
        $('#filter-form input[type="checkbox"]').each(function () {
            $(this).prop('checked',false);
        });

        let filter = $('#filter-form');
        $.ajax({
            url: filter.attr('action'),
            data: filter.serialize(), // form data
            type: filter.attr('method'), // POST
            success: function (data) {
                $('.container-card').html(data);
            },
            error: function (error) {
                console.log(error);
            }
        });
        return false;
    });

    let videos = document.querySelectorAll('.box-video');
    for (let i = 0; i < videos.length; i++) {
        this.setupVideo(videos[i]);
    }

    function setupVideo(video) {
        let link = video.querySelector('.video__link');
        let media = video.querySelector('.video__media');
        // let button = video.querySelector('.video__button');
        let id = this.parseMediaURL(media);

        video.addEventListener('click', () => {
            let iframe = this.createIframe(id);
            console.log(link)

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
        iframe.setAttribute('src', this.generateURL(id));
        iframe.classList.add('video__media');

        return iframe;
    }

    function generateURL(id) {
        let query = '?rel=0&showinfo=0&autoplay=1';

        return 'https://www.youtube.com/embed/' + id + query;
    }