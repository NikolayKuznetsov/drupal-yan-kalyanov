$(document).mouseup(function (e) {
    var containerPopupContent = $('.container-popup-content');
    if (!containerPopupContent.is(e.target) && containerPopupContent.has(e.target).length === 0) {
        $('.container-popup').removeClass('open');
    }
});

$(document).keyup(function (e) {
    if (e.keyCode === 27) {
        $('.container-popup').removeClass('open');
    }
});


$(document).ready(function () {

    var _href = '';
    if ($('body').hasClass('front')) {
        _href = $('ul.menu li:nth-child(1) a').attr('href');
        $('ul.menu li:nth-child(1) a').attr("href", _href.substr(1));

        _href = $('ul.menu li:nth-child(2) a').attr('href');
        $('ul.menu li:nth-child(2) a').attr("href", _href.substr(1));

        _href = $('ul.menu li:nth-child(5) a').attr('href');
        $('ul.menu li:nth-child(5) a').attr("href", _href.substr(1));
    }

    $('.link-scroll, ul.menu li a').click(function () { // ловим клик по ссылке с классом go_to
        var scroll_el = $(this).attr('href'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
        if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
            $('html, body').animate({scrollTop: $(scroll_el).offset().top}, 600); // анимируем скроолинг к элементу scroll_el
        }
        return false; // выключаем стандартное действие
    });

    function come(elem) {
        var docViewTop = $(window).scrollTop(),
            docViewBottom = docViewTop + $(window).height(),
            elemTop = $(elem).offset().top,
            elemBottom = elemTop + $(elem).height();

        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    }

    // функция, которая по заданному селектору
// найдет соответствующие ему элементы, которые
// при этом попадают в видимую область окна
    function inWindow(s) {
        var scrollTop = $(window).scrollTop();
        var windowHeight = $(window).height();
        var currentEls = $(s);
        var result = [];
        currentEls.each(function () {
            var el = $(this);
            var offset = el.offset();
            if (scrollTop <= offset.top && (el.height() + offset.top) < (scrollTop + windowHeight))
                result.push(this);
        });
        return $(result);
    }

    if ($('body').hasClass('front')) {
        if (come("#block-block-1")) {
            $('.menu-container ul.menu li').removeClass('active');
            $('.menu-container ul.menu li:nth-child(1)').addClass('active');
        }

        $(window).scroll(function () {

            var boxesInWindow3 = inWindow("#block-block-3");
            boxesInWindow3.addClass('animate-bg');

            var boxesInWindow5 = inWindow("#block-block-5");
            boxesInWindow5.addClass('animate-bg');

            if (come("#block-block-1")) {
                $('.menu-container ul.menu li').removeClass('active');
                $('.menu-container ul.menu li:nth-child(1)').addClass('active');
            }
            if (come("#block-block-2")) {
                $('.menu-container ul.menu li').removeClass('active');
                $('.menu-container ul.menu li:nth-child(2)').addClass('active');
            }
            if (come("#block-block-8")) {
                $('.menu-container ul.menu li').removeClass('active');
                $('.menu-container ul.menu li:nth-child(5)').addClass('active');
            }
        });
        $('.view-slider-radio .view-content').slick({
            slidesToShow: 3,
            centerMode: true,
            infinite: true
        });

        $('.view-slider-partner .view-content').slick({
            slidesToShow: 3,
            centerMode: true,
            infinite: true
        });
    }


    $('.menu-container').click(function () {
        $(this).toggleClass('open-menu');
    });

    $('.menu-container a').click(function () {
        $(this).closest('.menu-container').toggleClass('open-menu');
    });

    eventDatePicka();
    closeSuccessFormPopup();
    eventLearnCreativeIdeas();

    function eventDatePicka() {
        var elementNameDatePicker = $('#edit-submitted-data');

        //elementNameDatePicker.pickadate({
        //    monthsFull: ['января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'],
        //    monthsShort: ['янв', 'фев', 'мар', 'апр', 'май', 'июн', 'июл', 'авг', 'сен', 'окт', 'ноя', 'дек'],
        //    weekdaysFull: ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'],
        //    weekdaysShort: ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'],
        //    today: 'сегодня',
        //    clear: 'удалить',
        //    close: 'закрыть',
        //    firstDay: 1,
        //    format: 'dd.mm.yyyy',
        //    formatSubmit: 'dd.mm.yyyy',
        //    closeOnSelect: true,
        //    closeOnClear: false,
        //    selectMonths: true
        //});

        elementNameDatePicker.datepicker({
            monthNames: ['Январь', 'Февраль', 'Март', 'Апрель',
                'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь',
                'Октябрь', 'Ноябрь', 'Декабрь'],
            dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
            firstDay: 1
        });
    }

    function closeSuccessFormPopup() {
        var btnSuccessFormPopup = $('.success_form_popup .close-request-popup');

        btnSuccessFormPopup.on('click', function (e) {
            noneEventLink(e);
            var redirect = '/';
            history.pushState('', '', redirect);
            $(this).closest('.success_form_popup').removeClass('open');
        });
    }

    function eventLearnCreativeIdeas() {
        var btnLearnCreativeIdeas = $('.learn-creative-ideas');

        btnLearnCreativeIdeas.on('click', function (e) {
            noneEventLink(e);
            $('#modal-form-learn-creative-ideas .container-popup').addClass('open');
        });
    }


    function noneEventLink(e) {
        var event = e || window.event;
        event.preventDefault();

    }
});

document.onkeydown = function (e) {
    var successFormPopup = $('.success_form_popup');
    if (e.keyCode == 27) {
        if (successFormPopup.hasClass('open')) {
            var redirect = '/';
            history.pushState('', '', redirect);
            successFormPopup.removeClass('open');
        }
    }
};


var wow = new WOW(
    {
        boxClass: 'wow',      // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset: 0,          // distance to the element when triggering the animation (default is 0)
        mobile: true,       // trigger animations on mobile devices (default is true)
        live: true,       // act on asynchronously loaded content (default is true)
        callback: function (box) {
            // the callback is fired every time an animation is started
            // the argument that is passed in is the DOM node being animated
        },
        scrollContainer: null // optional scroll container selector, otherwise use window
    }
);
wow.init();

//$('.block-1').stellar();
//$('.block-2').stellar();
//$('.block-3').stellar();
//$('.block-4').stellar();

//$(window).bind('scroll',function(e){
//parallaxScroll();
//});

function parallaxScroll() {
    var scrolled = $(window).scrollTop();
    //$('#block-block-2').css('top',(0-(scrolled*.25))+'px');
    //$('#block-block-3').css('top',(0-(scrolled*.5))+'px');
    //$('#block-block-3').css('top',(0-(scrolled*.5))+'px');
    //$('#parallax-bg2').css('top',(0-(scrolled*.5))+'px');
    //$('#parallax-bg3').css('top',(0-(scrolled*.75))+'px');
}