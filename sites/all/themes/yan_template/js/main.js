$(document).ready(function () {

    $('.link-scroll').click(function () { // ловим клик по ссылке с классом go_to
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

            var boxesInWindow5 = inWindow("#block-block-3");
            boxesInWindow5.addClass('animate-bg');

            if (come("#block-block-1")) {
                $('.menu-container ul.menu li').removeClass('active');
                $('.menu-container ul.menu li:nth-child(1)').addClass('active');
            }
            if (come("#block-block-2")) {
                $('.menu-container ul.menu li').removeClass('active');
                $('.menu-container ul.menu li:nth-child(2)').addClass('active');
            }
            // if (come("#block-block-8")) {
            //     $('.menu-container ul.menu li').removeClass('active');
            //     $('.menu-container ul.menu li:nth-child(5)').addClass('active');
            // }
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

    function eventDatePicka() {
        var elementNameDatePicker = $('#edit-submitted-data');

        elementNameDatePicker.pickadate({
            monthsFull: ['января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'],
            monthsShort: ['янв', 'фев', 'мар', 'апр', 'май', 'июн', 'июл', 'авг', 'сен', 'окт', 'ноя', 'дек'],
            weekdaysFull: ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'],
            weekdaysShort: ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'],
            today: 'сегодня',
            clear: 'удалить',
            close: 'закрыть',
            firstDay: 1,
            format: 'dd.mm.yyyy',
            formatSubmit: 'dd.mm.yyyy',
            closeOnSelect: true,
            closeOnClear: false,
            selectMonths: true
        });
    }
});